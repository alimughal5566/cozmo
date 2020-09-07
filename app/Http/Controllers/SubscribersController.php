<?php

namespace App\Http\Controllers;
use App\Subscribers;
use App\EmailTemplate;
use App\Package;
use App\User;
use App\Discounts;
use Illuminate\Http\Request;
use DB;
use Auth;
use Mail;
use Location;
use Excel;
use App\Blog;
use function GuzzleHttp\Psr7\str;


class SubscribersController extends Controller
{
        public function __construct()
        {

        }

        public function test_page ()
        {
        	$setting = DB::table('setting')->first();
            return view('test', compact('setting'));
        }



//     public function script()
// 	{
// 	    $users = DB::table('users')->get();
// 	    $count = 0;
// 	    foreach($users as $one){
//     	    if (!DB::table('subscribers')->where('email', $one->email)->exists()){
//     	        $count ++;
//     	        $data = array('email' => $one->email, 'ip_address' => $one->ip_address, 'country' => $one->ip_country, 'create_at' => date('Y-m-d H:i:s'), 'source'=>'Prizemaker');
//     			DB::table('subscribers')->insert($data);
//     		}else{
//     		    echo $one->email."<br>";
//     		}
//         }
//         echo "Success $count";
// 	}


	public function insert(Request $req)
	{
	    $ip = $req->ip();
	    $position = Location::get($ip);

		$email=$req->input('email');
		$data=array('email'=>$email, 'ip_address'=>$ip, 'country'=>$position->countryName, 'source'=>'Prizemaker');

		if (!DB::table('subscribers')->where('email', $email)->exists())
		{
			DB::table('subscribers')->insert($data);
            echo('success');
		}else{
            echo('error');
        }

	}

	public function insert_zombie_game_sub()
	{
	    $res = json_decode(file_get_contents("http://gamefreetickets.stepinnsolution.com/api/get_subscribe"));
	    foreach($res as $one){
    	    if (!DB::table('subscribers')->where('email', $one->email)->where('source', 'Zombie Game')->exists()){
    	        $data = array('email'=>$one->email, 'ip_address'=>$one->ip_address, 'country'=>$one->country, 'create_at'=>$one->create_at, 'source'=>'Zombie Game');
    			DB::table('subscribers')->insert($data);
    		}else{
    		    echo $one->email."<br>";
    		}
        }
        echo "Success";
	}

	public function importExcel(Request $request){
        if( $request->hasFile('import_file')) {
            $img = $request->file('import_file');
            $extension = $img->getClientOriginalExtension();
        }else{
            return back()->with('error', 'No File Found !');
        }
        $validator = \Validator::make(
            [
                'file'      => $request,
                'extension' => $extension,
            ],
            [
                'file'          => 'required',
                'extension'      =>  'required|in:csv,xlsx',
            ]
        );

        if ($validator->fails()) {
            $errors = $validator->messages();
            return back()->with('error', 'Please Check your file, Something is wrong there.');
        }
        $insert = array();
        if ($request->hasFile('import_file')) {
            $path = $request->file('import_file')->getRealPath();
            $data = Excel::load($path, function ($reader) {})->get();
            if (!empty($data) && $data->count()) {
                foreach ($data as $key => $value) {
                    if (!empty($value)) {
                        if (!DB::table('subscribers')->where('email', $value->email)->where('source', 'Imported')->exists()){
                            // $insert[] = [
                            //     'email' => @$value->email,
                            //     'ip_address' => @$value->ip_address,
                            //     'country' => @$value->country,
                            //     'create_at' => @$value->time,
                            //     'source' => "Imported"
                            // ];
                            $data = array('email'=>$value->email, 'ip_address'=>$value->ip_address, 'country'=>$value->country, 'create_at'=>$value->time, 'source'=>'Imported');
    			            DB::table('subscribers')->insert($data);
    			            $insert[] = DB::getPdo()->lastInsertId();
                        }
                    }
                }
            }else{
                return back()->with('error', 'Please Check your file, Something is wrong there.');
            }
        }
        if (sizeof($insert) > 0) {
            if(sizeof($insert) == 1){
                return back()->with('success', sizeof($insert). ' Email Imported Successfully.');
            }else{
                return back()->with('success', sizeof($insert). ' Emails Imported Successfully.');
            }
        }else{
            return back()->with('error', 'Please Check your file, Something is wrong there.');
        }
    }

    public function get_subscribers_list($key, $value){
        if($key == 'country'){
            $subscribers = Subscribers::where('status', 1)->where($key, $value)->orderBy('id','DESC')->get();
            if(sizeof($subscribers) > 0){
                return ['data' => $subscribers, 'status' => 'success', 'message' => ""];
            }else{
                return ['data' => $subscribers, 'status' => 'error', 'message' => "No Record Found"];
            }
        }
        if($key == 'source'){
            $subscribers = Subscribers::where('status', 1)->where($key, $value)->orderBy('id','DESC')->get();
            if(sizeof($subscribers) > 0){
                return ['data' => $subscribers, 'status' => 'success', 'message' => ""];
            }else{
                return ['data' => $subscribers, 'status' => 'error', 'message' => "No Record Found"];
            }
        }
        if($key == 'no_of_emails'){
            $subscribers = Subscribers::where('status', 1)->orderBy('id','DESC')->limit($value)->get();
            if(sizeof($subscribers) > 0){
                return ['data' => $subscribers, 'status' => 'success', 'message' => ""];
            }else{
                return ['data' => $subscribers, 'status' => 'error', 'message' => "No Record Found"];
            }
        }
        if($key == 'email_sent_days_ago'){
            $today = date('Y-m-d');
            $days_ago = date('Y-m-d', strtotime("-$value days", strtotime($today)));
            $subscribers = Subscribers::where('status', 1)->where('last_email_sent_date', $days_ago)->orderBy('id','DESC')->get();
            if(sizeof($subscribers) > 0){
                return ['data' => $subscribers, 'status' => 'success', 'message' => ""];
            }else{
                return ['data' => $subscribers, 'status' => 'error', 'message' => "No Record Found"];
            }
        }
        if($key == 'all'){
            $imported = Subscribers::where('source', 'Imported')->count();
            $prizemaker = Subscribers::where('source', 'Prizemaker')->count();
            $zombie_game = Subscribers::where('source', 'Zombie Game')->count();

            $data = Subscribers::where('status', 1);
            $values = explode(",", $value);
            foreach($values as $index => $one){
                if($one == ""){
                    continue;
                }else{
                    if($index == 0){
                        $data->limit($one);
                    }
                    if($index == 1){
                        $data->where('source', $one);
                        if($one == 'Imported'){
                            $imported = Subscribers::where('source', 'Imported')->count();
                            $prizemaker = 0;
                            $zombie_game = 0;
                        }
                        if($one == 'Prizemaker'){
                            $imported = 0;
                            $prizemaker = Subscribers::where('source', 'Prizemaker')->count();
                            $zombie_game = 0;
                        }
                        if($one == 'Zombie Game'){
                            $imported = 0;
                            $prizemaker = 0;
                            $zombie_game = Subscribers::where('source', 'Zombie Game')->count();
                        }
                    }
                    if($index == 2){
                        $data->where('country', $one);
                    }
                    if($index == 3){
                        $today = date('Y-m-d');
                        $days_ago = date('Y-m-d', strtotime("-$one days", strtotime($today)));
                        $data->whereDate('last_email_sent_date', $days_ago);
                    }
                    if($index == 4){
                        $data->where('email', 'LIKE', '%' . $one . '%');
                    }
                }
            }
            $subscribers = $data->orderBy('id','DESC')->get();

            if(sizeof($subscribers) > 0){
                return ['data' => $subscribers, 'status' => 'success', 'imported' => $imported , 'prizemaker' => $prizemaker , 'zombie_game' => $zombie_game ];
            }else{
                return ['data' => $subscribers, 'status' => 'error', 'message' => "No Record Found",  'imported' => 0 , 'prizemaker' => 0 , 'zombie_game' => 0];
            }
        }
    }

	public function show()
	{
        // if(Auth::check() && Auth::user()->user_role != 1) {
        //     return redirect("/");
        // }

        $imported = Subscribers::where('source', 'Imported')->count();
        $prizemaker = Subscribers::where('source', 'Prizemaker')->count();
        $zombie_game = Subscribers::where('source', 'Zombie Game')->count();

        $subscribers = Subscribers::where('status',1)->orderBy('id','DESC')->limit(20)->get();

        $subs        = Subscribers::orderBy('id','DESC')->get();
        $unsub       = Subscribers::where('status',0)->orderBy('id','DESC')->get();
        return view('admin.Newsletter.subscribers',compact('subscribers','subs','unsub', 'imported', 'prizemaker', 'zombie_game'));
	}

	public function email_schedule_settings()
    {
//        $se_record = DB::table('competition_email_schedule')->get();
        $se_record = DB::table('competition_email_schedule')->where('interval_type', 2)->get();
        $today = date('Y-m-d');
        $coms = DB::table('packages')->where('mc_id','!=',0)->where('status', 1)->where('packages.soft_delete', 0)->join('multi_competition', 'packages.mc_id', '=', 'multi_competition.id')->where('multi_competition.end_date', '>', $today)->select('packages.*')->get();
        return view('admin.Newsletter.email_schedule_settings',compact('se_record', 'coms'));
    }

    public function update_email_schedule(Request $request)
    {
//        $record = array('time' => date('Y-m-d H:i:s', strtotime($request->time)), 'interval_type' => $request->interval_type, 'day' => $request->day, 'enabled' => $request->enabled, 'last_sent' => $request->last_sent, 'competition_id' => $request->competition_id);
        DB::table('competition_email_schedule')->update(['enabled' => 0]);
        $record = array('interval_type' => 2, 'enabled' => $request->enabled,'competition_id' => $request->competition_id);
        DB::table('competition_email_schedule')->where('id', $request->record_id)->update($record);
        return redirect()->back()->with('success', 'Updated Successful.');
    }

    public function change_status(Request $request)
        {
            $data = array(
                "status" => $request->input('status')
            );
            Subscribers::where("id", $request->input("id"))->update($data);
        }

	public function template()
	{
		return view ('mail_template');
	}

	public function sendMailToSubscribers (Request $request)
	{
	    $today = date('Y-m-d');
		$email_id_list = $request->input('email_id_list');

		if (!empty($email_id_list))
		{
			$email_id_list      = explode(', ', $email_id_list);
			$selected_subs_list = Subscribers::whereIn('id', $email_id_list)->distinct('email')->select('id', 'email')->get()->toArray();
			$email_templates    = EmailTemplate::where('status',1)->get();
            // print_r($email_templates);exit();
			$products           = Package::where('mc_id','!=',0)->where('status', 1)->where('packages.soft_delete', 0)->join('multi_competition', 'packages.mc_id', '=', 'multi_competition.id')->where('multi_competition.end_date', '>', $today)->select('packages.*')->get();
			$slide              = Blog::get();
			/*
			echo "<pre>";
			print_r($email_templates);
			echo "</pre>";
			exit;
			*/

			return view('admin.Newsletter.send_email', compact('selected_subs_list', 'email_templates', 'products','slide'));
		}
		else
		{
			return redirect(url('/subscribers'))->with('error','You forgot to select the User. Please select any User');
		}
	}

/* 	public function EmailView (Request $request)
	{
		return view('email_templates.template_1.index');
	} */

	public function ShowEmailTemplate ($template_id = '', $product_id = '')
	{
		if($template_id==1)
		{
		$template_info = DB::table('email_templates')->where('id', '=', $template_id)->get()->first();

		$template_view = $template_info->view_name;

		$num_of_req_imgs = $template_info->num_of_imgs;

		$competition_info     = Package::where('id', $product_id)->where('soft_delete', 0)->first();

		$package_images       = Package::find($product_id)->image()->limit($num_of_req_imgs)->pluck('name');
		$default_template_img = $template_info->default_img;
		$social_links   	  = DB::table('setting')->first();


		$product_dir_path          = url('/').'/products/'.$product_id.'/';
		$template_img_path         = url('/').'/email_templates_resources/'.$template_view.'/img/';
		$default_template_img_path = $template_img_path.$default_template_img;

		$setting = DB::table('setting')->first();
			$commission		   	   = $setting->commission;
			$ref_friend_string		   = $setting->ref_friend_string;
			$business_ref_commission   = $setting->business_ref_commission;
			$buz_comsion_string		   = $setting->buz_comsion_string;

		return view('email_templates.'.$template_view.'.index',
					compact('template_id',
							'template_view',
                            'template_info',
					        'default_template_img',
							'default_template_img_path',
							'product_dir_path',
							'template_img_path',
							'competition_info',
							'package_images',
							'product_id',
							'social_links','commission','ref_friend_string','business_ref_commission','buz_comsion_string','setting'));
	}else{
		$mc = DB::table('packages')->where('id',$product_id)->where('soft_delete', 0)->first();
		$discount_offers = Discounts::where('c_id', $product_id)->orderBy('id', 'DESC')->get()->toArray();
		// print_r($mc);exit();
        $related_package = DB::table('packages')->where('mc_id',$mc->mc_id)->where('id','!=',$mc->id)->where('soft_delete', 0)->get();
        $competitions = DB::table('multi_competition')->where('id',$mc->mc_id)->where('soft_delete', 0)->first();
        $urlcategory = DB::table('urls_categories')->where('id',$mc->url_category)->first();
         $img = DB::table('package_images')->where('package_id',$mc->id)->where('main_img',1)->first();
        $setting = DB::table('setting')->first();
        $template_info = DB::table('email_templates')->where('id', '=', $template_id)->get()->first();

		$template_view = $template_info->view_name;
        return view('email_templates.'.$template_view.'.subscription', compact('discount_offers', 'mc','related_package','competitions','urlcategory','img','setting'));
	}

	}

	public function SendSubscriptionMail(Request $request)
       {
        // echo "<pre>";
        // print_r($request->all());exit();
    	if($request->template_id==1)
    	{
    	 $setting = DB::table('setting')->first();
		// request input
		$email_id_list                     = $request->input('email_ids');
		$template_id                       = $request->input('template_id');
		$product_id                        = $request->input('product_id');

		// queries
		$selected_subscribers              = Subscribers::whereIn('id', $email_id_list)->pluck('email', 'id');

		$template_info                     = DB::table('email_templates')->where('id', '=', $template_id)->get()->first();
		$competition_info                  = Package::where('id', $product_id)->where('soft_delete', 0)->first();
		$num_of_req_imgs                   = $template_info->num_of_imgs;
		$package_images                    = Package::find($product_id)->image()->limit($num_of_req_imgs)->pluck('name');
		$default_template_img              = $template_info->default_img;
		$social_links   				   = DB::table('setting')->first();

		// image path setting
		$template_view                     = $template_info->view_name;
		$product_dir_path          		   = url('/').'/products/'.$product_id.'/';
		$template_img_path                 = url('/').'/email_templates_resources/'.$template_view.'/img/';
		$default_template_img_path         = $template_img_path.$default_template_img;
		// data for email
		$data['title']                     = "Newsletter FROM PRIZEMAKER";
		$data['template_view']             = $template_view;
		$data['package_images']            = $package_images;
		$data['num_of_req_imgs']           = $num_of_req_imgs;
		$data['competition_info']          = $competition_info;
		$data['default_template_img']      = $default_template_img;
		$data['default_template_img_path'] = $default_template_img_path;
		$data['product_dir_path']          = $product_dir_path;
		$data['template_info']             = $template_info;
		$data['template_img_path']         = $template_img_path;
		$data['social_links']			   = $social_links;

		$data['commission']			   	   = $setting->commission;
			$data['ref_friend_string']		   = $setting->ref_friend_string;
			$data['business_ref_commission']   = $setting->business_ref_commission;
			$data['buz_comsion_string']		   = $setting->buz_comsion_string;
			$data['check']		   = "check";
            $data['setting'] = DB::table('setting')->first();

            foreach ($selected_subscribers as $subscriber_id => $email)
        {
            // $data['subscriber_id'] = $subscriber_id;
            $other_user[] = $email;
            $sub_data = DB::table('subscribers')->where('email', $email)->update(['last_email_sent_date' => date('Y-m-d H:i:s')]);
        }
        if($template_info->special_event=='yes')
            {
            $subj = $template_info->newsletter_email_subject;
            }else{
            $subj = 'Join Our Competition';
            }
        $email = "ufriend1989@dasasda.com";
         Mail::send(['html'=>'email_templates.'.$template_view.'.index'], $data, function($message) use($email, $subj, $other_user) {
                $message->to($email, 'Prize Maker')->subject
                ($subj);
                $message->bcc($other_user, 'Prize Maker');
                $setting = DB::table('setting')->first();
                $message->from($setting->email,'Prize Maker');
            });


// 		foreach ($selected_subscribers as $subscriber_id => $email)
// 		{
// // 			Mail::send('email_templates.'.$template_view.'.index', $data, function($message) use($email) {
// // 				$message->to($email, 'name')->subject('Join Our Competition');
// // 			});

			

//             if($template_info->special_event=='yes')
//             {
//             $subj = $template_info->newsletter_email_subject;
//             }else{
//             $subj = 'Join Our Competition';
//             }
//             $other_user = array("muhammad.wakeel1989@gmail.com", "ufriend1989@gmail.com");

//             Mail::send(['html'=>'email_templates.'.$template_view.'.index'], $data, function($message) use($email, $subj, $other_user) {
//                 $message->to($email, 'Prize Maker')->subject
//                 ($subj);
//                 $message->bcc($other_user, 'Prize Maker');
//                 $setting = DB::table('setting')->first();
//                 $message->from($setting->email,'Prize Maker');
//             });

// 	        $sub_data = DB::table('subscribers')->where('email', $email)->update(['last_email_sent_date' => date('Y-m-d H:i:s')]);
//     	}

    }else{
    	$email_id_list                     = $request->input('email_ids');
		$template_id                       = $request->input('template_id');
		$product_id                        = $request->input('product_id');

		// queries
		$selected_subscribers              = Subscribers::whereIn('id', $email_id_list)->pluck('email', 'id');

		$template_info                     = DB::table('email_templates')->where('id', '=', $template_id)->get()->first();
		$template_view            		   = $template_info->view_name;
		$mc = DB::table('packages')->where('id',$product_id)->where('soft_delete', 0)->first();
		// print_r($mc);exit();
        $related_package = DB::table('packages')->where('mc_id',$mc->mc_id)->where('id','!=',$mc->id)->where('soft_delete', 0)->get();
        $competitions = DB::table('multi_competition')->where('id',$mc->mc_id)->where('soft_delete', 0)->first();
        $urlcategory = DB::table('urls_categories')->where('id',$mc->url_category)->first();
         $img = DB::table('package_images')->where('package_id',$mc->id)->where('main_img',1)->first();
        $setting = DB::table('setting')->first();
        $discount_offers = Discounts::where('c_id', $product_id)->orderBy('id', 'DESC')->get()->toArray();

        foreach ($selected_subscribers as $subscriber_id => $email)
		{
// 			Mail::send('email_templates.'.$template_view.'.index', $data, function($message) use($email) {
// 				$message->to($email, 'name')->subject('Join Our Competition');
// 			});

			// $data['subscriber_id'] = $subscriber_id;

			$data = array('subscriber_id'=>$subscriber_id,'mc'=>$mc,'related_package'=>$related_package,'competitions'=>$competitions,'urlcategory'=>$urlcategory,'img'=>$img,'setting'=>$setting, 'discount_offers'=>$discount_offers);


            Mail::send(['html'=>'email_templates.'.$template_view.'.subscription'], $data, function($message) use($email) {
                $message->to($email, 'Prize Maker')->subject
                ('Join Our Competition');
                $setting = DB::table('setting')->first();
                $message->from($setting->email,'Prize Maker');
            });

	        $sub_data = DB::table('subscribers')->where('email', $email)->update(['last_email_sent_date' => date('Y-m-d H:i:s')]);
    	}


    }

		return response()->json(['status' => 'success', 'msg' => 'Email Sent']);
    }

    public function sendmail(Request $request)
	{

		$email= $request->email;

		$name=$request->namee;
		$subject=$request->subjecttt;
		$message=$request->message;
		$email_send = DB::table('setting')->first();

		$data = array('msg' => $message, 'email' => $email , 'name'=>$name );


		$success = Mail::send('mail', $data, function($message) use($email, $subject, $email_send ) {
		$message->to($email_send->email, 'Prize Maker')->subject($subject);
		$setting = DB::table('setting')->first();
        $message->from($setting->email,'Prize Maker');

		});
	}

	public function unsubscribe ($subscriber_id = '')
	{
	    if (!empty($subscriber_id))
	    {
	        DB::table('subscribers')->where('id', $subscriber_id)->update(['status' => '0']);

	        return view('unsubscribe');
	    }
	    else
	    {
	        return abort('404');
	    }
	}

	public function show_html ($template_id = '', $product_id = '')
	{

		$template_info = DB::table('email_templates')->where('id', '=', $template_id)->get()->first();

		$template_view = $template_info->view_name;

		$num_of_req_imgs = $template_info->num_of_imgs;

		$competition_info     = Package::where('id', $product_id)->where('soft_delete', 0)->first();

		$package_images       = Package::find($product_id)->image()->limit($num_of_req_imgs)->pluck('name');
		$default_template_img = $template_info->default_img;
		$social_links   	  = DB::table('setting')->first();


		$product_dir_path          = url('/').'/products/'.$product_id.'/';
		$template_img_path         = url('/').'/email_templates_resources/'.$template_view.'/img/';
		$default_template_img_path = $template_img_path.$default_template_img;

		$setting = DB::table('setting')->first();
			$commission		   	   = $setting->commission;
			$ref_friend_string		   = $setting->ref_friend_string;
			$business_ref_commission   = $setting->business_ref_commission;
			$buz_comsion_string		   = $setting->buz_comsion_string;

		return view('admin.Newsletter.show_html',
					compact('template_id',
							'template_view',
					        'default_template_img',
							'default_template_img_path',
							'product_dir_path',
							'template_img_path',
							'competition_info',
							'package_images',
							'product_id',
							'social_links','commission','ref_friend_string','business_ref_commission','buz_comsion_string'));

	}

	public function template_3_send_email(Request $request)
	{
		// echo "<pre>";
		// print_r($request->all());exit();
        
        $emaill = explode(",", $request->email_idss[0]);
        // echo "<pre>";
        // print_r($emaill);exit();
		$email_id_list                     = $request->input('email_idss');
		$product_id                        = $request->input('product_ids');
		// queries
		$selected_subscribers              = Subscribers::whereIn('id', $emaill)->pluck('email', 'id');
     //    echo "<pre>";
     // print_r($request->all());exit();


		$competition = DB::table('packages')->where('id',$product_id)->where('soft_delete', 0)->first();
// 		echo "<pre>";
// 		print_r($competition);exit();
		$urlcategory = DB::table('urls_categories')->where('id',$competition->url_category)->first();
        $img = DB::table('package_images')->where('package_id',$competition->id)->where('main_img',1)->first();

        $template_info = DB::table('email_templates')->where('id', '=',3)->first();

         $top_desc = $request->top_description;
        $slide = Blog::find($request->slide);
        $top_trend_title = $request->top_trend_title;
        $top_trend_description = $request->top_trend_description;
        if($request->trend_competition!="")
        {
            $trend_competition = $request->trend_competition;
            $trend_competition_store = implode(",",$request->trend_competition);
        }else{
            $trend_competition = 0;
            $trend_competition_store ="";
        }

        $top_restuarent_title = $request->top_restuarent_title;
        $top_restuarent_description = $request->top_restuarent_description;
        if($request->restuarent_competition!="")
        {
            $restuarent_competition = $request->restuarent_competition;
            $restuarent_competition_store = implode(",",$request->restuarent_competition);
        }else{
            $restuarent_competition = 0;
            $restuarent_competition_store = "";
        }

        $bike_competition_title = $request->bike_competition_title;
        $bike_competition_description = $request->bike_competition_description;
        if($request->bike_competition!="")
        {
            $bike_competition = $request->bike_competition;
            $bike_competition_store = implode(",",$request->bike_competition);
        }else{
            $bike_competition = 0;
            $bike_competition_store = "";
        }

        $setting = DB::table('setting')->first();

        $mydata = array('select_competition'=>$product_id,'blog_id'=>$slide->id,'top_description'=>$top_desc,'top_trend_title'=>$top_trend_title, 'top_trend_description'=>$top_trend_description, 'trend_competition'=>$trend_competition_store, 'top_restuarent_title'=>$top_restuarent_title, 'top_restuarent_description'=>$top_restuarent_description, 'restuarent_competition'=>$restuarent_competition_store,  'bike_competition_title'=>$bike_competition_title,  'bike_competition_description'=>$bike_competition_description,  'bike_competition'=>$bike_competition_store,);

        // echo "<pre>";
        // print_r($mydata);exit();
        $check = DB::table('send_temp_save')->first();

        if(isset($check))
        {
            DB::table('send_temp_save')->update($mydata);
        }else{
            DB::table('send_temp_save')->insert($mydata);
        }

        foreach ($selected_subscribers as $subscriber_id => $email)
        {
            // $data['subscriber_id'] = $subscriber_id;
            // $user = User::where('email',$email)->where('soft_delete', 0)->first();

            // if(isset($user) && $user->name!="")
            // {
            //     $userss[] = $user->name;
            // }elseif(isset($user) && $user->name==""){
            //     $userss[] = $user->email;
            // }else{
            //     $userss[] = $email;
            // }
            $other_user[] = $email;
            $sub_data = DB::table('subscribers')->where('email', $email)->update(['last_email_sent_date' => date('Y-m-d H:i:s')]);
        }
        if($template_info->special_event=='yes')
            {
            $subj = $template_info->newsletter_email_subject;
            }else{
            $subj = 'Join Our Competition';
            }

//              echo "<pre>";
//          print_r($userss);exit();

            $data = array('slide'=>$slide,'top_desc'=>$top_desc, 'subscriber_id'=>$subscriber_id, 'competition'=>$competition, 'urlcategory'=>$urlcategory, 'img'=>$img,'top_trend_title'=>$top_trend_title, 'top_trend_description'=>$top_trend_description, 'trend_competition'=>$trend_competition, 'top_restuarent_title'=>$top_restuarent_title, 'top_restuarent_description'=>$top_restuarent_description, 'restuarent_competition'=>$restuarent_competition,  'bike_competition_title'=>$bike_competition_title,  'bike_competition_description'=>$bike_competition_description,  'bike_competition'=>$bike_competition,'setting'=>$setting, 'template_info'=>$template_info);

            // echo "<pre>";
            // print_r($data);exit();
            $email = "ufriend1989@akaak.com";
            Mail::send(['html'=>'email_templates.template_3.index'], $data, function($message) use($email, $subj, $other_user) {
                $message->to($email, 'Prize Maker')->subject
                ($subj);
                $message->bcc($other_user, 'Prize Maker');
                $setting = DB::table('setting')->first();
                $message->from($setting->email,'Prize Maker');
            });


//         foreach ($selected_subscribers as $subscriber_id => $email)
// 		{

// 			$user = User::where('email',$email)->where('soft_delete', 0)->first();

//             if(isset($user) && $user->name!="")
//             {
//                 $userss = $user->name;
//             }elseif(isset($user) && $user->name==""){
//                 $userss = $user->email;
//             }else{
//                 $userss = $email;
//             }

//             if($template_info->special_event=='yes')
//             {
//             $subj = $template_info->newsletter_email_subject;
//             }else{
//             $subj = 'Join Our Competition';
//             }

// //             	echo "<pre>";
// // 			print_r($userss);exit();

// 			$data = array('slide'=>$slide,'top_desc'=>$top_desc, 'subscriber_id'=>$subscriber_id, 'competition'=>$competition, 'urlcategory'=>$urlcategory, 'img'=>$img, 'user'=>$userss,'top_trend_title'=>$top_trend_title, 'top_trend_description'=>$top_trend_description, 'trend_competition'=>$trend_competition, 'top_restuarent_title'=>$top_restuarent_title, 'top_restuarent_description'=>$top_restuarent_description, 'restuarent_competition'=>$restuarent_competition,  'bike_competition_title'=>$bike_competition_title,  'bike_competition_description'=>$bike_competition_description,  'bike_competition'=>$bike_competition,'setting'=>$setting, 'template_info'=>$template_info);

// 			// echo "<pre>";
// 			// print_r($data);exit();

//             Mail::send(['html'=>'email_templates.template_3.index'], $data, function($message) use($email, $subj) {
//                 $message->to($email, 'Prize Maker')->subject
//                 ($subj);
//                 $setting = DB::table('setting')->first();
//                 $message->from($setting->email,'Prize Maker');
//             });

//             DB::table('subscribers')->where('email', $email)->update(['last_email_sent_date' => date('Y-m-d H:i:s')]);

//     	}


    	return redirect('subscribers')->with('success','Email send successfully');

	}


}

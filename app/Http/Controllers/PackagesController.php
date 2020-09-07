<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Package;
use App\Related_product;
use App\Attibute;
use App\PaksageImage;
use App\Ticket;
use App\UrlCategory;
use App\CompetitionEmailSchedule;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use App\Payment;
use DB;
use Lang;
use Session;
use Storage;
use Carbon;
use Illuminate\Support\Facades\Validator;
use Mail;
use App\Discounts;
// use Carbon\Carbon;


class PackagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('AdminAccess');

    }

    public function index()
    {
        // if(Auth::user()->user_role != 1)
        // {
        //     return redirect("/");
        // }
        $un_expired_packages = array();
        $expired_packages = array();
        $unused_package = Package::where('mc_id',0)->where('status',1)->where('soft_delete', 0)->orderBy('id','DESC')->get();
        $packages = Package::orderBy('id','DESC')->where('soft_delete', 0)->get();
        $today = date('Y-m-d');
        foreach($packages as $package){
            $mc = DB::table('multi_competition')->where('id',$package->mc_id)->where('soft_delete', 0)->first();
            if(!isset($mc->end_date)){
                continue;
            }
            if($mc->end_date < $today){
                $expired_packages[] = $package;
            }else{
                $un_expired_packages[] = $package;
            }
        }
        return view('admin.packages.home', compact("packages","expired_packages", "un_expired_packages","unused_package"));
    }

    public function edit($id)
    {
        $package = Package::where('soft_delete', 0)->find($id);
        $rel_products = Package::select('id','name','uniqid')->where('id','!=',$id)->where('mc_id', '!=', 0)->where('soft_delete', 0)->get();
		$winner = DB::table('winner')->where('product_id',$id)->first();
        $date = DB::table('packages')->where('id',$id)->where('soft_delete', 0)->first();
        $UrlCategory = UrlCategory::all();
		//$email_schedule = CompetitionEmailSchedule::find($id);
// 		echo "<pre>";
// 		print_r($package);exit;

		$email_schedule = [];
        $particpate = DB::table('tickets')->where('product_id',$id)->where('user_id','!=',0)->where('status',1)->get();
        // echo "<pre>";
        // print_r($particpate);exit();

        // $data = DB::table('competitions')->whereRaw("product_id = $id")->orderBy('winner', 'DESC')->get();
        $discount_offers = Discounts::where('c_id', $package->id)->get()->toArray();
        $package->discount_offers = $discount_offers;
        return view('admin.packages.edit', compact("package","rel_products","email_schedule","particpate","winner","date","UrlCategory"));
    }

    public function create()
    {
        if(Auth::user()->user_role != 1) {
            return redirect()->back();
        }
        $UrlCategory = UrlCategory::all();
        return view('admin.packages.form',compact("UrlCategory"));
    }
    public function store(Request $request)
    {
		$update = 0;
        $uniqid = uniqid();
    	DB::beginTransaction();
    	if($request->id){
    		$package = Package::find($request->id);
			$update  = 1;
    	}else{
            $image_check = DB::table('package_images')->where('package_id',0)->first();
            if(!isset($image_check)){
                return redirect()->back()->withErrors(['error' =>'Please upload image'])->withInput();
            }
    		$package = new Package;
            $package->uniqid = $uniqid;
    	}
        $videofile = $request->file;
        if($request->hasFile('file')) {
            $postData = $request->only('file');

            $file = $postData['file'];

            $fileArray = array('video' => $file);

            // Tell the validator that this file should be an image
            $rules = array(
              'video' => 'mimes:flv,mp4,m3u8,ts,3gp,mov,avi,wmv|required|max:10000' // max 10000kb
            );

            // Now pass the input and rules into the validator
            $validator = Validator::make($fileArray, $rules);

            if ($validator->fails()){
                return redirect()->back()->withErrors(['error' =>'Upload video only'])->withInput();
            }
            $videofile =Input::file('file');
            $names = time().'.'.$videofile->getClientOriginalExtension();
            $destinationPath = public_path('/blogimages/');
            $videofile->move($destinationPath, $names);
            $videofiles = $names;
        }
        else {
            $videofiles = $request->novideofile;
        }

        try {
            $package->video= $videofiles;
		    $package->name = $request->name;
		    $package->social_name = $request->social_name;
		    $package->social_description = $request->social_description;
            $str = strtolower($request->name);
            $package->slug = preg_replace('/\s+/', '-', $str);
            $package->url_category = $request->url_category;
            $package->meta_title = $request->meta_title;
            $package->meta_description = $request->meta_description;
            $package->meta_keyword = $request->meta_keyword;
            $package->description = $request->description;
            $package->short_description_one = $request->short_description_one;
            $package->short_description_two = $request->short_description_two;
            $package->fem_box_line1 = $request->fem_box_line1;
            $package->fem_box_line2 = $request->fem_box_line2;
            $package->fem_box_line3 = $request->fem_box_line3;
            $package->short_description = $request->short_description;
            $package->featured = $request->feat;
			$success = $package->save();

			if($success){
    			$id =  $package->id;
                $comp_article = DB::table('competition_articles')->where('competition_id',$id)->first();
                $package->name = $request->name;
                $str = strtolower($request->name);
                $slug = preg_replace('/\s+/', '-', $str);
                if($comp_article){
                    DB::table('competition_articles')->where('competition_id',$id)->update(['competition_id'=>$id,'competition_slug'=>$slug]);
                }
                else{
                    DB::table('competition_articles')->insert([
                        [
                            'competition_id'      => $id,
                            'competition_slug'    => $slug
                        ]
                    ]);
                }
                if($update == 1){
                    $discount_offers = Discounts::where('c_id', $package->id)->get();
                    if(sizeof($discount_offers) == 0){
                        foreach($request->no_of_tickets as $key => $no_of_tickets){
                            $discount_offer = new Discounts();
                            $discount_offer->c_id = $id;
                            $discount_offer->no_of_tickets = $no_of_tickets;
                            $discount_offer->discount_percentage = $request->discount_percentage[$key];
                            $discount_offer->save();
                        }
                    }else{
                        foreach($discount_offers as $key => $one_offer){
                            $one_offer->no_of_tickets = $request->no_of_tickets[$key];
                            $one_offer->discount_percentage = $request->discount_percentage[$key];
                            $one_offer->save();
                        }
                    }
                }else{
                    // discount offers
                    // if($request->no_of_tickets[0] == null || $request->discount_percentage[0] == null){
                    //     $discount_offer = new Discounts();
                    //     $discount_offer->c_id = $id;
                    //     $discount_offer->save();
                    // }else{
                    if($request->no_of_tickets[0] != null && $request->discount_percentage[0] != null && $request->no_of_tickets[0] != null && $request->discount_percentage[0] != null){
                        foreach($request->no_of_tickets as $key => $no_of_tickets){
                            $discount_offer = new Discounts();
                            $discount_offer->c_id = $id;
                            $discount_offer->no_of_tickets = $no_of_tickets;
                            $discount_offer->discount_percentage = $request->discount_percentage[$key];
                            $discount_offer->save();
                        }
                    }
                    // }
                    // discount end
                }

                $test = DB::table('package_images')->where('package_id',0)->first();
                if($update!=1 && $test!="" ){
                    DB::table('package_images')->where('package_id',0)->update(['package_id'=>$id]);
                    rename( 'products/0', 'products/'.$id);
                }

				// save the email schedule if the competition email in enabled
    			if ($request->input('enable-email') && !empty($request->input('enable-email')) && $request->input('enable-email') == 'on'){
//    				$email_schedule = new CompetitionEmailSchedule();
//    				$email_schedule->CreateCompetitionSchedule($request->all(), $id);

                    //insert and disable rest all
                    DB::table('competition_email_schedule')->update(['enabled' => 0]);
                    $competition_email_schedule = array('time' => date('Y-m-d H:i:s'), 'interval_type' => 2, 'day' => 1, 'enabled' => 1, 'last_sent' => date('Y-m-d H:i:s'), 'competition_id' => $id);
                    DB::table('competition_email_schedule')->insert($competition_email_schedule);

                }
//    			else {
//    				if ($update) {
//    					$email_schedule = new CompetitionEmailSchedule();
//    					$email_schedule->UpdateCompetitionSchedule($request->all(), $id);
//    				}
//    			}
		        //Insert attributes
		        if(!empty($request->label) && !empty($request->attribute) ){
			        $labels = $request->label;
			        $attributes = $request->attribute;
			        foreach ($labels as $key=> $lab ) {
			        	if($lab !='' && $attributes[$key] !=''){
        			         $attr = new Attibute;
        			         $attr->package_id = $id;
        			         $attr->label = $lab;
        			         $attr->attribute = $attributes[$key];
        			         $attr->save();
        			     }
			        }
		        }
			}
		    DB::commit();
		    $request->session()->forget('product_id');
		} catch (\Exception $e) {
		    DB::rollback();
		    return redirect()->back()->withErrors(['error' => $e->getMessage()])->withInput();
		}
        return redirect("packages/edit/$id")->with('success','Record Saved Successfully');
    }
    public function save_related_product(Request $request)
    {

        DB::beginTransaction();

            try {
                $products = $request->related_products;
                if(!empty($products) && $request->package_id)

                if(!Package::where('id',$request->package_id)->where('mc_id', '!=', 0)->where('soft_delete', 0)->first()){
                    DB::rollback();
                    return redirect()->back()->withErrors(['error' => 'This Competition is not assigned to any MC.'])->withInput();
                }
                Related_product::where('package_id',$request->package_id)->delete();
                foreach ($products as $key => $value) {
                $uniqid = Package::where('id',$value)->first();
                $product= new Related_product;
                $product->package_id = $request->package_id;
                $product->related_product_id = $value;
                $product->save();
                   }
                //   DB::commit();

            } catch (\Exception $e) {
                DB::rollback();
                return redirect()->back()->withErrors(['error' => $e->getMessage()])->withInput();
            }
            DB::commit();
            return  redirect()->back()->with('success', 'Successfully saved');
    }

     public function add_attribute(Request $request)
    {
        if($request->id){
    		$attr = Attibute::find($request->id);
    		$operation='edit';
    	}else{
    		 $attr = new Attibute;
    		 $operation='add';

    	}
    			$attr->package_id = $request->package_id;
			    $attr->label = $request->label;
                $attr->attribute = $request->attribute;
				$success =  $attr->save();
				return ['status' =>$success, 'operation' =>$operation, 'data' =>$attr];

    }
    public function edit_attribute(Request $request)
    {

    		$attribute = Attibute::find($request->id);
		    return $attribute;
    }
      public function delete_attr(Request $request)
    {
            $id=$request->id;
            $attribute=Attibute::find($id);
            $attribute->delete();
            echo $id;
    }

    public function add_package_images(Request $request)
    {
    	           $images=[];



			        if($request->hasFile('images'))
			        {

			        	$id=$request->package_id;
			            $files = $request->file('images');
			            foreach($files as $file)
			            {
                        // $postData = $request->only('file');

                        //     print_r($postData);exit();

                        $file = $file;

                        $fileArray = array('image' => $file);

                        // Tell the validator that this file should be an image
                        $rules = array(
                          'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000' // max 10000kb
                        );

                        // Now pass the input and rules into the validator
                        $validator = Validator::make($fileArray, $rules);

                        // Check to see if validation fails or passes
                        if ($validator->fails())
                        {
                              return "error";
                        }
			            	$uniqid = uniqid();
			                $ext=$file->getClientOriginalExtension();
			                $name=$uniqid.'.'.$ext;
			                $file->move("products/$id/",$name);
			                $image=array();
			                $image['name']=$name;
			                $image['package_id'] =$id;
			                $inser_id=PaksageImage::insertGetId($image);
                        // print_r($id);print_r($inser_id);exit();

			                $img=['url' =>url("products/$id/$name"),'id' =>$inser_id];
			                $images[]=$img;
                            $data = PaksageImage::where('package_id', $id)->where('main_img',1)->first();
                            if($data)  {

                                }
                                else{
                                    $success = DB::table('package_images')->where("id", $inser_id)->update(['main_img' =>1]);
                                }

                            // $update =  PaksageImage::where('package_id', $id)->where('main_img',1)->update(['main_img' =>0]);
			            }
			        }
    		return $images;
    }

    public function destroy(Request $request)
    {
//        $id = $request->input("id");
//
//        Related_product::where('package_id', $id)->delete();
//        Related_product::where('related_product_id', $id)->delete();
//
//        File::deleteDirectory(public_path('products/'.$id));
//        Package::where("id", $id)->delete();
//        DB::table('cart')->where('package_id',$id)->delete();
//        DB::table('blogs')->where('package_id',$id)->update(['package_id'=>0]);
//        Ticket::where("product_id", $id)->delete();
//        DB::table('competition_articles')->where('competition_id',$id)->delete();

        //soft delete code
        $pkg_id = $request->input("id");
        $pkg = DB::table('packages')->where('id', $pkg_id)->first();

        $blog_data = DB::table('blogs')->where('package_id', $pkg->id)->first();
        if(isset($blog_data)){
            if($blog_data->sliderstatus == 1){
                echo "Slider is active against this Competition, You cannot delete.";exit;
            }
        }
        $cart_data = DB::table('cart')->where('package_id', $pkg->id)->get();
        if(sizeof($cart_data) > 0){
            echo "Some user have tickets in their cart against this Competition, You cannot delete.";exit;
        }
        $coupon_data = DB::table('coupon_data')->where('comp_used_for', 'LIKE', '%' .$pkg->id. '%')->get();
        if(sizeof($coupon_data) > 0){
            echo "Some user have used a coupon against this Competition, You cannot delete.";exit;
        }
        $free_com_data = DB::table('freecomps')->where('package_id', $pkg->uniqid)->where('is_winner', 1)->where('ticket', '!=', 0)->first();
        if(isset($free_com_data)){
            echo "Some user have won a free ticket against this Competition, You cannot delete.";exit;
        }
        $tickets_data = DB::table('tickets')->where('product_id', $pkg->id)->get();
        if(sizeof($tickets_data) > 0){
            echo "Some user have purchased tickets against this Competition, You cannot delete.";exit;
        }
        $winners_data = DB::table('winner')->where('product_id', $pkg->id)->get();
        if(sizeof($winners_data) > 0){
            echo "There are winners against this Competition, You cannot delete.";exit;
        }
        $free_tick_particpate = DB::table('freecomps')->where('package_id', $pkg->uniqid)->first();
        if(isset($free_tick_particpate)){
           echo "Some User participate for free ticket  against this Competition, You cannot remove.";exit;
        }
        // passes all checks so hard delete in related tables
        DB::table('attributes')->where('package_id', $pkg->id)->delete();
        Related_product::where('package_id', $pkg->id)->delete();
        Related_product::where('related_product_id', $pkg->id)->delete();
        DB::table('blogs')->where('package_id', $pkg->id)->where('sliderstatus', 0)->delete();
        DB::table('freecomps')->where('package_id', $pkg->uniqid)->delete();
        DB::table('competition_email_schedule')->where('competition_id', $pkg->uniqid)->delete();

        // soft delete competition
        $response = DB::table('packages')->where('id', $pkg_id)->update(['soft_delete' => 1, 'soft_delete_at' => date('Y-m-d H:i:s')]);
        if($response){
            echo "Successfully Deleted.";exit;
        }
    }

    public function main_img(Request $request)
    {
        $id = $request->input("id");
        $package_id = $request->input("package");
        $package_img = PaksageImage::where("id", $id)->first();
        $package_id = $package_img->package_id;
        $update =  PaksageImage::where('package_id', $package_id)->where('main_img',1)->update(['main_img' =>0]);
        $success = PaksageImage::where("id", $id)->update(['main_img' =>1]);
        if($success)
        {
            return "update Successfully";
        }
    }

    public function listImages()
    {
        $pak_id = Session::get('pak_id');
        // dd($id);
        return view('admin.packages.listImages', compact('pak_id'));
    }

    public function deleteImage(Request $request)
    {
    	$ids=$request->id;
    	foreach ($ids as $key => $id) {
    		$img=PaksageImage::find($id);
    		$img->delete();
    		File::delete("products/$img->package_id/$img->name");
    	}


    }

    public function iframe(Request $request)
    {

        try{
            $winerId = $request->input('prod_id');
            $Update = DB::table('packages')->where('id',$winerId)->where('soft_delete', 0)->update([
                'iframe' => $request->input('iframe'),
                'iframe_status' => $request->input('iframe_status'),
            ]);


            if($Update){
                $win = $request->segment(3);
                return redirect('/product');
            }
            else
            {
                return redirect()->back();
            }
        }catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }

    public function update_winner(Request $request, $id)
    {
        if (Input::file('image'))
            {
                $image =Input::file('image');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/winnerimages/');
                $image->move($destinationPath, $name);
                $images = $name;
            }
            else
            {
                $images = $request->noimage;
            }
        try{
            $winerId = $request->input('id');
            $Update = DB::table('winner')->insert([
                'title' => $request->input('title'),
                'user_id' => $request->input('user_id'),
                'product_id' => $request->input('product_id'),
                'mc_id' => $request->input('mc_id'),
                'code' => $request->input('code'),
                'paid_price' => $request->input('paid_price'),
                'description' => $request->input('description'),
                'image' => $images,

            ]);

            if($Update){
                $win = $request->segment(3);
                return redirect('MultiCompetitions/create/'.$win);
            }
            else
            {
                return redirect()->back();
            }
        }catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }
    public function delete_winner(Request $request)
    {
        $id = $request->input("id");
        DB::table('winner')->where("mc_id", $id)->delete();
    }

    public function add_images(Request $request)
    {
          $images=[];

                    if($request->hasFile('images'))
                    {

                        $id=0;
                        $files = $request->file('images');
                        foreach($files as $file)
                        {
                            $file = $file;

                        $fileArray = array('image' => $file);

                        // Tell the validator that this file should be an image
                        $rules = array(
                          'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000' // max 10000kb
                        );

                        // Now pass the input and rules into the validator
                        $validator = Validator::make($fileArray, $rules);

                        // Check to see if validation fails or passes
                        if ($validator->fails())
                        {
                              return "error";
                        }
                            $uniqid = uniqid();
                            $ext=$file->getClientOriginalExtension();
                            $name=$uniqid.'.'.$ext;
                            $file->move("products/$id/",$name);
                            $image=array();
                            $image['name']=$name;
                            $image['package_id'] =$id;
                            $inser_id=PaksageImage::insertGetId($image);
                        // print_r($id);print_r($inser_id);exit();

                            $img=['url' =>url("products/$id/$name"),'id' =>$inser_id];
                            $images[]=$img;
                            $data = PaksageImage::where('package_id', $id)->where('main_img',1)->first();
                            if($data)  {

                                }
                                else{
                                    $success = DB::table('package_images')->where("id", $inser_id)->update(['main_img' =>1]);
                                }

                            // $update =  PaksageImage::where('package_id', $id)->where('main_img',1)->update(['main_img' =>0]);
                        }
                    }
            return $images;
    }

    public function article($id)
    {

        $getRecord = DB::table('competition_articles')->where('competition_id',$id)->first();
        $competition_id = $id;
        if($getRecord){
            $package = Package::find($id);
            $getRecord->name = $package->name;
            return view('admin.packages.comp_article', compact("getRecord","competition_id"));
        }
        else{
            $competition_id = $id;
            return view('admin.packages.comp_article',compact("competition_id"));
        }

     }

     public function arsave(Request $request){
         $comp_id = $request->input('comp_id');
         $comp_article = DB::table('competition_articles')->where('competition_id',$comp_id)->first();
             $description = $request->input('description');
                if($comp_article){
                    DB::table('competition_articles')->where('competition_id',$comp_id)->update(['competition_id'=>$comp_id,'description'=>$description]);
                    return  redirect()->back()->with('success', 'Successfully Update');
                }
                else{
                    DB::table('competition_articles')->insert([
                    [
                        'competition_id'      => $comp_id,
                        'description'    => $description
                    ]
                ]);
                    return  redirect()->back()->with('success', 'Successfully saved');
                }

     }

    public function send($id)
    {
        // print_r($id);exit();
        $package = Package::find($id);
        return view('admin.packages.send', compact('package'));
    }
    public function send_email(Request $request)
    {
        // print_r($request->all());exit();
        if(isset($request->email)){
            if($request->template=="select")
                {
            return redirect()->back()->withErrors(['You forgot to select the Email Template'])->withInput();
                }
        }else{
            if($request->template=="select")
                {
            return redirect()->back()->withErrors(['You forgot to select the Email Template'])->withInput();
                }
        if($request->number=="select")
        {
            return redirect()->back()->withErrors(['You forgot to select the Number of Email'])->withInput();
        }
        if($request->country=="select")
        {
            return redirect()->back()->withErrors(['You forgot to select a Country'])->withInput();
        }
        if($request->business_category=="select")
        {
            return redirect()->back()->withErrors(['You forgot to select a Business Category'])->withInput();
        }
        }
        if($request->subject=="")
        {
            return redirect()->back()->withErrors(['You forgot to enter subject'])->withInput();
        }
        $competition_info = Package::find($request->ids);
        $urlcategor = DB::table('urls_categories')->where('id',$competition_info->url_category)->first();
        $mc = DB::table('multi_competition')->where('id',$competition_info->mc_id)->first();
        $img = DB::table('package_images')->where('package_id',$competition_info->id)->where('main_img',1)->first();


        $users = DB::table('users')->where('user_role',1)->where('soft_delete', 0)->first();
        $setting = DB::table('setting')->first();

        $email_data = array('competition_info'=>$competition_info, 'img'=>$img, 'user'=>$users, 'offer'=>$request->offer, 'setting'=>$setting);
        $subject = $request->subject;
        if(isset($request->email)){

            $number_email = explode(',', $request->email);

            // print_r($number_email);exit;
            foreach ($number_email as $number) {

        $email = trim($number);

        if($request->template=="last")
                    {
                    $settings = DB::table('setting')->first();
                    $discount_offers = Discounts::where('c_id', $request->ids)->orderBy('id', 'DESC')->get()->toArray();

                    $email_datas = array('competition_info'=>$competition_info, 'mc'=>$mc, 'img'=>$img, 'user'=>$users, 'offer'=>$request->offer, 'settings'=>$settings, 'urlcategor'=>$urlcategor, 'discount_offers'=>$discount_offers);


                    $test = Mail::send(['html'=>'new_email_template.lastchance'], $email_datas, function($message) use($email, $subject ) {
                  $message->to($email, 'Prize Maker')->subject
                     ($subject);
                  $setting = DB::table('setting')->first();
                  $message->from($setting->email,'Prize Maker');
             });
                    }else{
        $test = Mail::send(['html'=>'my_template'], $email_data, function($message) use($email, $subject, $email_data) {
                  $message->to($email, 'Prize Maker')->subject
                     ($subject);
                  $setting = DB::table('setting')->first();
                  $message->from($setting->email,'Prize Maker');
             });
                    }
    }

        }
        $number_email = DB::table('imported_emails')->where('send','no')->where('country',$request->country)->where('business_category',$request->business_category)->take($request->number)->get();
        foreach ($number_email as $number) {

        $email = $number->email;
        // print_r($email);exit;
            if($request->template=="last")
                    {
                    $settings = DB::table('setting')->first();

                   $discount_offers = Discounts::where('c_id', $request->ids)->orderBy('id', 'DESC')->get()->toArray();

                    $email_datas = array('competition_info'=>$competition_info, 'mc'=>$mc, 'img'=>$img, 'user'=>$users, 'offer'=>$request->offer, 'settings'=>$settings, 'urlcategor'=>$urlcategor, 'discount_offers'=>$discount_offers);

                    $test = Mail::send(['html'=>'new_email_template.lastchance'], $email_datas, function($message) use($email, $subject ) {
                  $message->to($email, 'Prize Maker')->subject
                     ($subject);
                  $setting = DB::table('setting')->first();
                  $message->from($setting->email,'Prize Maker');
             });
                    }else{
        $test = Mail::send(['html'=>'my_template'], $email_data, function($message) use($email, $subject, $email_data  ) {
                  $message->to($email, 'Prize Maker')->subject
                     ($subject);
                  $setting = DB::table('setting')->first();
                  $message->from($setting->email,'Prize Maker');
             });
            DB::table('imported_emails')->where('id',$number->id)->update(['send'=>'yes', 'sending_date'=>Carbon::now()]);
                    }
    }

        return redirect()->back()->with('success','Your Email send successfully');

}

    public function testing_email()
    {
        return view('new_email_template.check');
    }

    public function send_test_email(Request $request)
    {
        // print_r($request->all());exit;
        $email = $request->email;
         $email_data = array('competition_info'=>$request->email);
         $test = Mail::send(['html'=>'new_email_template.free2email'], $email_data, function($message) use($email) {
                  $message->to($email, 'Prize Maker')->subject
                     ("testing");
                  $setting = DB::table('setting')->first();
                  $message->from($setting->email,'Prize Maker');
             });
        return redirect()->back();
    }

    public function activate($id){
        $alert = Package::where('id', $id)->first();
        if($alert){
            $alert->status = 1;
            $alert->save();
            return redirect()->back()->with('success','Activated Successfully !');
        }
        else{
            return redirect()->back()->with('error','Something went wrong !');
        }
    }

    public function de_activate($id){
        $alert = Package::where('id', $id)->first();
        if($alert){
            $alert->status = 0;
            $alert->save();
            return redirect()->back()->with('success','De-Activated Successfully !');
        }
        else{
            return redirect()->back()->with('error','Something went wrong !');
        }
    }
        
        
      
      public function buy_ticket($id)
      {
          $ticket = DB::table('tickets')->where('product_id',$id)->where('purchase_type',0)->where('status',1)->get();
          return view('admin.packages.buy_ticket',compact("ticket"));
      }
    
    


}

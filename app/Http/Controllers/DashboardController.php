<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Package;
use Auth;
use App\MC;
// use App\Driver;
use App\Car;
use App\User_Activity;
use DB;
use Carbon;
use Session;
use App\Subscribers;
use Mail;
use App\Blog;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('AdminAccess');
    }
    public function index()
    {
        $user = Auth::user();
        if($user->user_role==0)
        {
            return redirect('/');
        }
        $data['staff'] = User::where('soft_delete', 0)->get();
        $data['staff'] = Package::where('soft_delete', 0)->get();
        $data['total_packages'] =MC::where('soft_delete', 0)->count();

        $data['avg_price'] =MC::where('soft_delete', 0)->avg('price');
        $avgprice=$data['avg_price'];
        $data['avg_rounded_price']=round($avgprice,2) ;

        $data['total_subscribers'] = DB::table('subscribers')->count();

         $data['total_package'] =DB::table('packages')->where('soft_delete', 0)->count();

         $data['total_users'] = User::where("user_role",0 )->where('soft_delete', 0)->count();
         $data['active_competation'] = DB::table('multi_competition')->where('end_date', '>', date('Y-m-d'))->where('soft_delete', 0)->count();
         $data['Total_tickets_price'] = DB::table('tickets')->where('status', 1)->where('purchase_type',0)->sum('paid_price');
         $data['Total_purchase_money'] = DB::table('tickets')->where('status', 1)->where('purchase_type',0)->count();
         $data['Total_free_ticket'] = DB::table('tickets')->where('status', 1)->where('purchase_type',2)->count();
         $data['Total_credit_ticket'] = DB::table('tickets')->where('status', 1)->where('purchase_type',1)->count();
         $data['total_discount_amount'] = DB::table('tickets')->where('status', 1)->sum('discount_of_amount');

         $data['userr'] = DB::table('users')->whereDate('created_at', DB::raw('CURDATE()'))->where('soft_delete', 0)->count();

         $data['today_ticket'] = DB::table('tickets')->whereDate('date_purchased', DB::raw('CURDATE()'))->where('status',1)->count();

         $data['today_ticket_price'] = DB::table('tickets')->whereDate('date_purchased', DB::raw('CURDATE()'))->where('status',1)->sum('paid_price');

        $visitor = DB::table('ip_address')->whereDate('created_at', DB::raw('CURDATE()'))->groupBy('ip_address')->get();

         $data['daily_visit'] = $visitor->count();

         $data['imported'] = Subscribers::where('source', 'Imported')->count();
           $data['prizemaker']  = Subscribers::where('source', 'Prizemaker')->count();
            $data['zombie_game'] = Subscribers::where('source', 'Zombie Game')->count();

         // echo "<pre>";
         // print_r($data['daily_visit']);exit();

        // $data['drivers'] = Driver::count();
        // $data['cars'] = Car::count();
      //  $data['total_plans'] = DB::table('plans')->where("status", 1)->count();
        return view("admin.dashboard.home", $data);
    }

    public function show_ticket()
    {
        $total_ticket = DB::table('tickets')->where('status', 1)->where('purchase_type',0)->orderBy('date_purchased', 'Desc')->get();
        return view('admin.dashboard.show_all_ticket', compact('total_ticket'));
    }

    public function show_paid_ticket($mc_id = null)
    {   if($mc_id == null){
            $total_all_tickets = DB::table('tickets')->where('status', 1)->orderBy('date_purchased', 'Desc')->get();
            $total_bouns_tickets = DB::table('tickets')->where('status', 1)->where('purchase_type',1)->orderBy('date_purchased', 'Desc')->get();
            $total_bouns_tickets_amount = DB::table('tickets')->where('status', 1)->where('purchase_type',1)->orderBy('date_purchased', 'Desc')->get()->sum(function($t){
                return $t->paid_price - $t->discount_of_amount;
            });
            $total_purchased_ticket = DB::table('tickets')->where('status', 1)->where('purchase_type',0)->orderBy('date_purchased', 'Desc')->get();
            $total_purchased_ticket_amount = DB::table('tickets')->where('status', 1)->where('purchase_type',0)->orderBy('date_purchased', 'Desc')->get()->sum(function($t){
                return $t->paid_price - $t->discount_of_amount;
            });
            return view('admin.dashboard.show_paid_ticket', compact('total_all_tickets', 'total_purchased_ticket', 'total_bouns_tickets', 'total_bouns_tickets_amount', 'total_purchased_ticket_amount'));
        }else{
            $total_all_tickets = DB::table('tickets')->where('mc_id', $mc_id)->where('status', 1)->orderBy('date_purchased', 'Desc')->get();
            $total_bouns_tickets = DB::table('tickets')->where('mc_id', $mc_id)->where('status', 1)->where('purchase_type',1)->orderBy('date_purchased', 'Desc')->get();
            $total_bouns_tickets_amount = DB::table('tickets')->where('mc_id', $mc_id)->where('status', 1)->where('purchase_type',1)->orderBy('date_purchased', 'Desc')->get()->sum(function($t){
                return $t->paid_price - $t->discount_of_amount;
            });
            $total_purchased_ticket = DB::table('tickets')->where('mc_id', $mc_id)->where('status', 1)->where('purchase_type',0)->orderBy('date_purchased', 'Desc')->get();
            $total_purchased_ticket_amount = DB::table('tickets')->where('mc_id', $mc_id)->where('status', 1)->where('purchase_type',0)->orderBy('date_purchased', 'Desc')->get()->sum(function($t){
                return $t->paid_price - $t->discount_of_amount;
            });
            return view('admin.dashboard.show_paid_ticket', compact('total_all_tickets', 'total_purchased_ticket', 'total_bouns_tickets', 'total_bouns_tickets_amount', 'total_purchased_ticket_amount'));
        }
    }

    public function purchase_Peers()
    {
        $user_activity = User_Activity::where('soft_delete',0)->get();
        $find = "Offline User";
           $guest_email =  User_Activity::where('user_email', 'LIKE', "%$find%")->where('soft_delete',0)->count();
        $find2 = "Offline User";
            $user_email =  User_Activity::where('user_email', 'not LIKE', "%$find2%")->where('soft_delete',0)->whereNull('sended_subject')->whereNull('sended_desc')->count();
        // echo "<pre>";
        // print_r($user_email);exit();
        return view('admin.purchase_peers.home', compact('user_activity','guest_email','user_email'));
    }

    public function email_type(Request $request)
    {
        // print_r($request->all());exit();
        if($request->email_type=="guest")
        {
            $find = "Offline User";
           $user_email =  User_Activity::where('user_email', 'LIKE', "%$find%")->orderBy('id','DESC')->where('soft_delete',0)->get();

           foreach ($user_email as $key => $value) {
            if($value->com_ids!="")
            {
              $competition_ids = explode(",",$value->com_ids);
              $com_name = [];
              foreach($competition_ids as $com_id){
                 $com_name[] = DB::table('packages')->where('id',$com_id)->first()->name;
              }
              $value->com_name = $com_name;
              $activity_array [] = $value;
            }
            else{
              $remaing_act[] = $value;
            }
           }
           if(!isset($activity_array))
           {
            $activity_array = [];
           }
           if(!isset($remaing_act))
           {
            $remaing_act = [];
           }
           $activity_array = array_merge($activity_array , $remaing_act);
         //   foreach ($user_email as $key => $value) {
         //    if($value->com_ids!="")
         //    {
         //      $competition_id = explode(",",$value->com_ids);
         //      foreach ($competition_id as $key => $row) {
         //        $competition[$value->id.'/'.$key ] = DB::table('packages')->where('id',$row)->select('name')->first();
         //      }
         //    }
         // }
          // echo "<pre>"; print_r($activity_array);exit();
           return ['status'=>'guest user','data'=>$activity_array];

        }else{
            $find = "Offline User";
            $user_email =  User_Activity::where('user_email', 'not LIKE', "%$find%")->where('soft_delete',0)->orderBy('id','DESC')->get();

            foreach ($user_email as $key => $value) {
              $my_userss = DB::table('users')->where('email',$value->user_email)->first();
            if($value->com_ids!="")
            {
              $competition_ids = explode(",",$value->com_ids);
              $com_name = [];
              foreach($competition_ids as $com_id){
                 $check = DB::table('packages')->where('id',$com_id)->first();
                 if(isset($check))
                 {
                  $ticket_count[$check->name] = DB::table('tickets')->where('user_id',$my_userss->id)->where('product_id',$com_id)->where('status',1)->count();
                 $com_name[] = $check->name;
               }
              }
              $value->com_name = $com_name;
              $value->ticket_cc = $ticket_count;
              $activity_array [] = $value;
            }
            else{
              $remaing_act[] = $value;
            }
           }
           if(!isset($activity_array))
           {
            $activity_array = [];
           }
           if(!isset($remaing_act))
           {
            $remaing_act = [];
           }
           $activity_array = array_merge( $activity_array , $remaing_act);
           // echo "<pre>";
           // print_r($activity_array);exit();
         return ['status'=>'email','data'=>$activity_array];
        }
    }

    public function email_find(Request $request)
   {
      // print_r($request->all());exit();
      if($request->find=="")
      {
        $user_email =  User_Activity::where('soft_delete',0)->orderBy('id','DESC')->get();

           foreach ($user_email as $key => $value) {
            if($value->com_ids!="")
            {
              $competition_ids = explode(",",$value->com_ids);
              $com_name = [];
              foreach($competition_ids as $com_id){
                $my_userss = DB::table('users')->where('email',$value->user_email)->first();
                
                $check = DB::table('packages')->where('id',$com_id)->first();
                if(isset($check))
                {
                  $ticket_count[$check->name] = DB::table('tickets')->where('user_id',$my_userss->id)->where('product_id',$com_id)->where('status',1)->count();
                 $com_name[] = $check->name;
                }
              }
              $value->ticket_cc = $ticket_count;
              $value->com_name = $com_name;
              $activity_array [] = $value;
            }
            else{
              $remaing_act[] = $value;
            }
           }
           if(!isset($activity_array))
           {
            $activity_array = [];
           }
           if(!isset($remaing_act))
           {
            $remaing_act = [];
           }
           $activity_array = array_merge($activity_array , $remaing_act);
          // echo "<pre>"; print_r($activity_array);exit();
           return ['status'=>'success','data'=>$activity_array];
      }
        if($request->find=="guest"){
             $find = "Offline User";
           $user_email =  User_Activity::where('user_email', 'LIKE', "%$find%")->where('soft_delete',0)->orderBy('id','DESC')->get();

           foreach ($user_email as $key => $value) {
            if($value->com_ids!="")
            {
              $competition_ids = explode(",",$value->com_ids);
              $com_name = [];
              foreach($competition_ids as $com_id){
                 $com_name[] = DB::table('packages')->where('id',$com_id)->first()->name;
              }
              $value->com_name = $com_name;
              $activity_array [] = $value;
            }
            else{
              $remaing_act[] = $value;
            }
           }
           if(!isset($activity_array))
           {
            $activity_array = [];
           }
           if(!isset($remaing_act))
           {
            $remaing_act = [];
           }
           $activity_array = array_merge($activity_array , $remaing_act);
          // echo "<pre>"; print_r($user_email);exit();
           return ['status'=>'guest user','data'=>$activity_array];
        }else{
            $find = $request->find;
            $find2 = "Offline User";
             $user_email =  User_Activity::where('user_email', 'LIKE', "%$find%")->where('user_email', 'not LIKE', "%$find2%")->where('soft_delete',0)->orderBy('id','DESC')->get();

              foreach ($user_email as $key => $value) {
            if($value->com_ids!="")
            {
              $competition_ids = explode(",",$value->com_ids);
              $com_name = [];
              foreach($competition_ids as $com_id){
                $my_userss = DB::table('users')->where('email',$value->user_email)->first();
                $check = DB::table('packages')->where('id',$com_id)->first();
                if(isset($check))
                {
                  $ticket_count[$check->name] = DB::table('tickets')->where('user_id',$my_userss->id)->where('product_id',$com_id)->where('status',1)->count();
                 $com_name[] = $check->name;
                }
              }
              $value->ticket_cc = $ticket_count;
              $value->com_name = $com_name;
              $activity_array [] = $value;
            }
            else{
              $remaing_act[] = $value;
            }
           }
           if(!isset($activity_array))
           {
            $activity_array = [];
           }
           if(!isset($remaing_act))
           {
            $remaing_act = [];
           }
           $activity_array = array_merge($activity_array , $remaing_act);

              // echo "<pre>"; print_r($user_email);exit();

            return ['status'=>'success','data'=>$activity_array];
        }

    }

    public function sendmailpurchase(Request $request)
    {
        // print_r($request->all());exit();
        if($request->email_id_list=="")
        {
            return redirect()->back()->with('alert','You forgot to select user');
        }
        $request->session()->put('user_activity_id', $request->email_id_list);
        return redirect('/purchase_Peers/show_email');
    }

    public function show_email(Request $request)
    {
        $today = date('Y-m-d');
        $user_activity_id = $request->session()->get('user_activity_id');
        $products           = Package::where('mc_id','!=',0)->where('status', 1)->where('packages.soft_delete', 0)->join('multi_competition', 'packages.mc_id', '=', 'multi_competition.id')->where('multi_competition.end_date', '>', $today)->select('packages.*')->get();
        $slide              = Blog::get();
        return view('admin.purchase_peers.send_email', compact('user_activity_id','products','slide'));
    }

    public function purchase_Peers_delete(Request $request)
    {
        // print_r($request->all());exit();
        $user_activity = User_Activity::where('id',$request->id)->update(['soft_delete'=>1]);
    }

    public function get_coupon(Request $request)
    {

      // print_r($request->all());exit();
      $today = date('Y-m-d');
      $get_coupon = DB::table('coupons')->where('percentage', $request->select)->where('start_date', '<=', $today)->where('end_date', '>=', $today)->first();
      // $get_coupon = $coupom->coupon;
      if($get_coupon)
      {
        $couponn = $get_coupon->coupon;
        return ['status'=>'success','coupon'=>$couponn];
      }else{
        return ['status'=>'nothing'];
      }
    }

    public function user_activity_email(Request $request)
    {
      // echo "<pre>";
      // print_r($request->all());exit();
      if($request->top_trend_description=="")
      {
        return redirect()->back()->with('alert','You forgot to write Description')->withInput();
      }

      if($request->coupn=="" ||  $request->coupn=="There is no Coupon")
      {
        return redirect()->back()->with('alert','Please Select the different percentage for Coupon')->withInput();
      }

        $user_activity_id = $request->session()->get('user_activity_id');
        // print_r($user_activity_id);exit();
        $user_activity_array = explode(",",$user_activity_id);
        $slide = Blog::find($request->slide);
        $top_trend_title = $request->top_trend_title;
        $top_trend_description = $request->top_trend_description;
        $trend_competition = $request->trend_competition;
        DB::table('coupons')->where('coupon',$request->coupn)->update(['status'=>1]);

        foreach ($user_activity_array as $key => $value) {
          $user_activityy = User_Activity::find($value);
          $email = $user_activityy->user_email;
          $user = DB::table('users')->where('email',$user_activityy->user_email)->first();
          // print_r($user);exit();
          $setting = DB::table('setting')->first();
          $data = array('slide'=>$slide,'coupon'=>$request->coupn, 'setting'=>$setting,'user'=>$user,'top_trend_title'=>$top_trend_title, 'top_trend_description'=>$top_trend_description, 'trend_competition'=>$trend_competition,);

          $sub = $request->subject;

           Mail::send(['html'=>'emails.offer_email'], $data, function($message) use($email, $sub) {
                $message->to($email, 'Prize Maker')->subject
                ($sub);
                $setting = DB::table('setting')->first();
                $message->from($setting->email,'Prize Maker');
            });



           $user_activityy->sended_subject =$sub;
           $user_activityy->sended_desc =$request->description;
           $user_activityy->save();
           $other_entry = User_Activity::where('user_email',$user_activityy->user_email)->update(['sended_subject'=>$sub,'sended_desc'=>$request->description]);
        }
        return redirect('purchase_Peers')->with('success','Email sent Successfully');

    }
    
    public function delete_all_guest()
    {
      // print_r("expression");exit();
      $find = "Offline User";
           $user_email =  User_Activity::where('user_email', 'LIKE', "%$find%")->delete();
      echo 1;
    }

    public function delete_selected(Request $request)
    {
      // print_r($request->all());exit();
      $ids = explode(",", $request->id);
      // print_r($ids);exit();
      foreach ($ids as $key => $value) {
        User_Activity::where('id', $value)->delete();
      }

    }


}


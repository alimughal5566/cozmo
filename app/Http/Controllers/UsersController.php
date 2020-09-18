<?php

namespace App\Http\Controllers;

use App\Related_product;
use Faker\Provider\Company;
use Illuminate\Http\Request;
use App\User;
use App\Notification;
use App\Friend;
use App\Cart;
use App\Ticket;
use Session;
use App\Payment;
use App\Who;
use App\Where;
use App\Airport;
use App\Message;
use App\Plan;
use App\How;
use App\Package;
use App\Mail\Notifications;
use Mail;
use Auth;
use Lang;
use Illuminate\Support\Facades\Input;
use DB;
use Illuminate\Support\Facades\Validator;
// use Maatwebsite\Excel\Facades\Excel;


class UsersController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
        $this->middleware('auth');
        $this->middleware('AdminAccess');
        $this->user=$user;

    }

    public function index()
    {
        // if(Auth::user()->user_role != 1) {
        //     return redirect("/");
        // }
        //where("user_role", 0)
        $data=$this->user->indexUser();
        //dd($data);
       // dd($data);
        // $companies = Company::all();
        $users = $data[0];
        $companies = $data[1];
        return view('admin.users.home', compact("users" , "companies"));
    }

    public function detail($id)
    {
        $user_data= User::find($id);
        $user_data->package= Package::find($user_data->package_id);
         $rating = DB::table('rating')->where('user_id', $id)->avg('rating');
        if($rating) {
            $user_data->rating = round($rating, 1, PHP_ROUND_HALF_DOWN);

        }else{
            $user_data->rating = 0;

        }
        $user_data->package= Package::find($user_data->package_id);

         $plans= Plan::where("user_id", $id)->get();
        foreach ($plans as  $plan) {
            $plan_id=$plan->id;
            // $cities = Where::where("plan_id" , $plan_id)->get();
            $peoples = Who::where("plan_id", $plan_id)->get();
            $airports = How::where("plan_id", $plan_id)->get();
            $destinations = DB::table('plan_dates')->where("plan_id", $plan_id)->get();
            $packages = DB::table('plan_packages')->where("plan_id", $plan_id)->get();
            $usersarray = array();
            $airports_array = array();
            $cities= DB::select("select city_name   from airports where id IN (select city_id from plan_where where plan_id= $plan_id ) order by country asc ");

            foreach($airports as $airport) {
                $airports_array[] = Airport::select("id", "name", "city_name")->where("id", $airport->city_id)->first();
            }

            foreach($peoples as $people) {
                $usersarray[] = User::select("id", "name")->where("id", $people->user_id)->first();
            }

            $destinations = $destinations->toArray();
            foreach ($destinations as $key => $dest) {
                if(empty($dest->departure_date) && empty($dest->arrival_date) ) {
                    unset($destinations[$key]);
                }else{
                    $c = Airport::find($dest->city_id);
                    $dest->name = $c->city_name;
                }

            }
            if(count($destinations)) {
                usort(
                    $destinations, function ( $a, $b ) {
                        return strtotime($a->departure_date) - strtotime($b->departure_date);
                    }
                );
            }
            $plan->first = !empty($destinations) ?  reset($destinations)->departure_date:""; ;
            $plan->last = !empty($destinations) ?  end($destinations)->arrival_date:""; ;

            $plan->cities = $cities;
            $plan->users = $usersarray;
            $plan->packages = $packages;
            $plan->airports = $airports_array;
            $plan->destinations = $destinations;

        }
        $friends = DB::select(" select * from  friends where ( user_id=$id OR sender_id=$id ) and status=1 and type='friend'");
        foreach ($friends as $friend) {
            $sender_id = ($friend->sender_id == $id ) ? $friend->user_id:$friend->sender_id;
            $user = User::find($sender_id);
            $friend->name=$user->name;
            $friend->email=$user->email;
            $file="storage/profiles/" . $id . ".jpg";
            if(file_exists($file)) {
                $friend->photo = url($file."?r=" . rand(0, 100));
            }else{
                $friend->photo="backend/img/avatar-2.jpg";
            }


        }



        return view('users.detail', compact("user_data", "friends", 'plans'));
    }

    public function edit($id)
    {
//        $user = User::find($id);
//        $companies = DB::table('companies')->get();
       // dd($user);

        $data=$this->user->editUser($id);
        $user = $data[0];
        $companies = $data[1];
        return view('admin.users.edit', compact("user","companies"));
    }

    public function create()
    {
        //return view('partners.form');
        $data=$this->user->createUser();
        $companies = $data;
        return view('admin.users.add', compact("companies"));
    }


    public function update(Request $request)
    {
       //dd($request);
        // echo "<pre>";
        // print_r($request->all());exit();
        // $file = Input::file('file');
//dd($request);
       $data=$this->user->updatedata($request);

//        $data = array(
//           "name" => $request->input('name'),
//            "email" => $request->input('email'),
//           "phone_number" => $request->input('phone_number'),
//           "state" => $request->input('state'),
//           "street_no" => $request->input('street_no'),
//           "city" => $request->input('city'),
//           "street_name" => $request->input('street_name'),
//            "password" => $request->input('password'),
//           "zip_code" => $request->input('zip_code'),
//           "company_id" => $request->input('company_id'),
//        );



//        if ($request->business_name)
//        {
//            $data['business_name'] = $request->business_name;
//        }
//
//        if ($request->business_phone)
//        {
//            $data['business_phone'] = $request->business_phone;
//        }
//
//        if ($request->business_facebook_url)
//        {
//            $data['business_facebook_url'] = $request->business_facebook_url;
//        }
//
//        if ($request->business_twitter_url)
//        {
//            $data['business_twitter_url'] = $request->business_twitter_url;
//        }



//dd($request);
//dd($data);

if($data){
        Session::flash('success', Lang::get('general.success_message'));
        return redirect("users");


}
else{
    Session::flash('Fail', 'Some Thing Went Wrong');
    return redirect("users");
}
    }


    public function store(Request $request)
    {
//        dd($request);
        $data=$this->user->savedata($request);

        // dd($request);

//dd($request);

//        $data=$this->user->saveupdate($request);
if($data){
        Session::flash('success', Lang::get('general.success_message'));
        return redirect("users");
}
else{
    dd('Error');
    Session::flash('Fail', 'Some Thing Went Wrong');

}

    }
    public function change_status(Request $request)
    {
         $data = array(
           "status" => $request->input('status')
          );
         User::where("id", $request->input("id"))->update($data);
    }
    public function destroy(Request $request)
    {
//        dd($request);
//        $id = $request->input("id");
//
//        DB::table('freecomps')->where('user_id',$id)->delete();
//
//        DB::table('users')->where('id',$id)->delete();

        //soft delete code
//
        $id = $request->input("id");
        User::where("id", $id)->delete();

    }

    public function show_refer()
    {
        $refer_id = Auth::user()->reference_id;
        $total_refer = DB::table('users')->where('referrer_by',$refer_id)->get();
        return view('show_refer', compact('total_refer'));
    }



    public function empty_cart($status){
        if (!Auth::check())
        {
           return redirect('/');
        }
         $user_id=Auth::id();
        $cart=Cart::where('user_id','=',$user_id)->get();
        foreach ($cart as $key => $value) {
           Ticket::where(['id'=>$value->ticket_id])->update(['status'=>$status]);
        }
        Cart::where('user_id','=',$user_id)->delete();
    }

    public function user_detail()
    {
        $users = User::where("user_role", 0)->get();
        return view('admin.users.user_detail', compact("users"));
    }

    public function show_testimonials()
    {
        $testimonials = DB::table('testimonials')->get();
        return view('admin.testimonials.showTestimonials', compact('testimonials'));
    }

    public function add_testimonials()
    {
        if(Auth::user()->user_role != 1) {
            return redirect()->back();
        }

        $winner = DB::table('winner')->get();
        // echo "<pre>";
        // print_r($winner);exit();
        return view('admin.testimonials.home', compact('winner'));
    }

    public function store_testimonials(Request $request)
    {
        $winner_id = Input::get('team');
        $image = $request->hasfile('images');
        if ($image=="") {
           return redirect('add_testimonials')->with('alert', "You didn't select any image!")->withInput();
        }

        $imgname ='';
            if($request->hasfile('images')){

                $postData = $request->only('images');

                $file = $postData['images'];

                $fileArray = array('image' => $file);

                // Tell the validator that this file should be an image
                $rules = array(
                  'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000' // max 10000kb
                );

                // Now pass the input and rules into the validator
                $validator = Validator::make($fileArray, $rules);

                // print_r($validator);exit();
                // Check to see if validation fails or passes
                if ($validator->fails())
                {
                      return redirect()->back()->with('alert','Upload Image only')->withInput();
                }
                $file=$request->file('images');
                $filename = str_replace(' ', '', $file->getClientOriginalName());
                $imgname=uniqid().$filename;
                $destinationpath=public_path('/testimonials_image');
                $file->move($destinationpath,$imgname);
            }

        $data = array(
            'description' => $request->description,
            'footer' => $request->footer,
            'winner_id' => $winner_id,
            "image_name" => $imgname,
        );

        $success = DB::table('testimonials')->insert($data);
        if($success)
        {
           return redirect('show_testimonials')->with('success', "Save Successfully!");
        }
        else{
           return redirect('add_testimonials')->with('alert', "Save Unsuccessfully!")->withInput();
        }
    }

    public function edit_testimonials_view($id)
    {
        $testimonial = DB::table('testimonials')->where('id', $id)->first();
        $winner = DB::table('winner')->get();
        return view('admin.testimonials.editTestimonials', compact('winner','testimonial'));
    }
    public function edit_testimonials(Request $request)
    {
        $winner_id = Input::get('team');
        if($request->hasfile('images')){

            $postData = $request->only('images');

            $file = $postData['images'];

            $fileArray = array('image' => $file);

            // Tell the validator that this file should be an image
            $rules = array(
              'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000' // max 10000kb
            );

            // Now pass the input and rules into the validator
            $validator = Validator::make($fileArray, $rules);

            // print_r($validator);exit();
            // Check to see if validation fails or passes
            if ($validator->fails())
            {
                  return redirect()->back()->with('alert','Upload Image only')->withInput();
            }
            $file=$request->file('images');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $imgname=uniqid().$filename;
            $destinationpath=public_path('/testimonials_image');
            $file->move($destinationpath,$imgname);
        }else{
            $res = DB::table('testimonials')->where('id', $request->id)->first();
            if($res){
                $imgname = $res->image_name;
            }
        }

        $data = array(
            'description' => $request->description,
            'footer' => $request->footer,
            'winner_id' => $winner_id,
            "image_name" => $imgname,
        );

        $success = DB::table('testimonials')->where('id', $request->id)->update($data);
        if($success)
        {
           return redirect()->back()->with('success', "Updated Successfully!");
        }
        else{
           return redirect()->back()->with('alert', "Updated Unsuccessfully!")->withInput();
        }
    }

    public function testimonials_delete(Request $request)
    {
        $id = $request->input("id");
        // print_r($id);exit();

        DB::table('testimonials')->where('id',$id)->delete();
    }

    public function ip_address()
    {
        $record = DB::table('ip_address')->orderBy('id','desc')->get();
        $total_count = DB::table('ip_address')->count();
        // print_r($total_count);exit();
        return view('admin.ip_address.home', compact('record', 'total_count'));
    }

    public function show_Date(Request $request)
    {
        $date = $request->date;
        $data = DB::table('ip_address')->where('created_at', $date)->get();
        // print_r($data);exit();
        if($data)
        {
            echo json_encode( ['status'=>1,'msg'=>'Selected date is correct','data'=>$data]);
        }
        else{
            echo json_encode( ['status'=>0,'msg'=>'NO Record is available on this date']);
        }
    }

    public function ipaddress_delete(Request $request)
    {
        $id = $request->input("id");
        DB::table('ip_address')->where("id", $id)->delete();
    }

    public function title(Request $request)
    {
        return view("admin.title.home");
    }

    public function title_store(Request $request)
    {
        // print_r($request->all());exit;
        $data = DB::Table('title_color')->first();
        if($data==""){
            $success = DB::Table('title_color')->insert(['color'=> $request->color]);
        }else{
             $success = DB::Table('title_color')->where('id',$data->id)->update(['color'=> $request->color]);
        }
        if($success){
        return redirect("title")->with('success', 'Title color is saved successfully');
        }else{
            return redirect("title")->with('success', 'Title color is saved successfully');
        }
    }

    public function approve_business_request (Request $request)
    {
        $user_id = $request->input('uid');
        $user_info   = DB::table('users')->where('id', $user_id)->first();
        $user_email  = $user_info->email;
        $user_name   = $user_info->name;
        $admin_email = DB::table('setting')->pluck('email')->first();

        DB::table('users')->where('id', $user_id)->update(['is_business_profile' => '1']);

        $data['user_name'] = $user_name;
         Mail::send(['html'=>'business_approval_inform'], $data, function($message) use($user_email, $user_name, $admin_email) {
              $message->to($user_email, $user_name)->subject
                 ('Business request approved');
              $setting = DB::table('setting')->first();
              $message->from($setting->email,'Prize Maker');

         });

//         Mail::send(['html'=>'business_approval_inform'], $data, function($message) use($user_email, $user_name) {
//            //$message->to('prizemaker@prizemaker.stepinnsolution.com', $user_name)->subject
//            //   ('New Business Request');
//            //$message->to('d3gforms@gmail.com', $user_name)->subject
//               ('Business Request Approved');
//
//            //$message->from('prizemaker@prizemaker.stepinnsolution.com','Prize Maker');
//            $message->from('prizemaker@prizemaker.stepinnsolution.com','Prize Maker');
//        });

        return response()->json(['status' => 'success', 'msg' => 'Business request is approved']);
    }

    public function reject_business_request (Request $request)
    {
        $user_id = $request->input('uid');
        $op      = $request->input('op');

        DB::table('users')->where('id', $user_id)->update(['is_business_profile' => $op]);

        $msg = '';
        if ($op == '3') {
           $msg = 'Request rejected';
        }
        elseif ($op == '4') {
           $msg = 'Business status cancelled';
        }

        return response()->json(['status' => 'success', 'msg' => $msg]);

    }


    public function login_user(Request $request, $id){
        Auth::logout();
        Auth::loginUsingId($id, true);
        return redirect('/');
    }

    public function url_category()
    {
        $url_category = DB::table('categories')->get();
        return view('admin.url_category.index', compact('url_category'));
    }

    public function url_category_create()
    {
        return view('admin.url_category.add');
    }

    public function url_category_store(Request $request)
    {
        $str = strtolower($request->title);
        $slug = preg_replace('/\s+/', '-', $str);
        $data = array(
            'title'=> $request->title,
            'slug'=> $slug,
            'description'=> $request->description,
            'status'=> 1,
        );
        $success = DB::table('categories')->insert($data);
        if($success){
            return redirect('article_category')->with('success', 'Saved Successfuly');
        }else{
            return redirect()->back()->with('alert', 'Saved Unsuccessfuly');
        }
    }

    public function url_category_edit($id)
    {
        $url_category = DB::table('categories')->where('id',$id)->first();
        return view('admin.url_category.edit', compact('url_category'));
    }

   public function url_category_update(Request $request, $id)
    {
        $str = strtolower($request->title);
        $slug = preg_replace('/\s+/', '-', $str);
        $data = array(
            'title'=> $request->title,
            'slug'=> $slug,
            'description'=> $request->description,
            'status'=> 1,
        );
        $success = DB::table('categories')->where('id',$id)->update($data);
        if($success){
            return redirect('url_category')->with('success', 'Update Successfuly');
        }else{
            return redirect()->back()->with('alert', 'Update Unsuccessfuly');
        }
    }

    public function url_category_delete(Request $request)
    {

        $response = DB::table('packages')->where('url_category',$request->id)->first();
        if($response){
            return "There is a IPUG Linked, You cannot delete.";
        }else{
            DB::table('urls_categories')->where('id',$request->id)->delete();
            return "Successfully Deleted.";
        }
    }

    public function upload_excel()
    {
        $data = DB::table('imported_emails')->get();
        return view ('admin.excel.home', compact('data'));
    }

    // public function store_excel_file(Request $request)
    // {
    //     // echo "<pre>";
    //     // print_r($request->all());exit;
    //     if($request->country=="select"){
    //         return Redirect()->back()->withErrors(['message'=>'Please Select the country']);
    //     }
    //     if($request->business_category=="select"){
    //         return Redirect()->back()->withErrors(['message'=>'Please Select the Business Category']);
    //     }
    //     $validator = Validator::make(
    //       [
    //           'file'      => $request->upload,
    //           'extension' => strtolower($request->upload->getClientOriginalExtension()),
    //       ],
    //       [
    //           'file'          => 'required',
    //           'extension'      => 'required|in:csv,xlsx,xls',
    //       ]
    //     );

    //     if ($validator->fails())
    //         {
    //         return Redirect()->back()->withErrors(['message'=>'Please Upload the excel file only']);
    //         }
    //          // $abc = Excel::toArray(Input::file('upload'));
    //          $path = $request->file('upload')->getRealPath();
    //             $data = \Excel::toArray('', $path, null, \Maatwebsite\Excel\Excel::TSV)[0];
    //          //    echo "<pre>";
    //          // print_r($data);exit();

    //         foreach ($data as $key => $row) {
    //             if($key > 0){
    //               $success =  DB::table('imported_emails')->insert(['email'=>$row[0], 'status'=>$row[1], 'country'=>$request->country, 'business_category'=>$request->business_category]);
    //             }
    //         }

    //         if($success){
    //             return redirect('upload_excel')->with('success', 'File upload successfully');
    //         }


    // }

}

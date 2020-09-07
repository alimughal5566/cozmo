<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Package;
use App\Cart;
use App\User;
use App\Related_product;
use App\Attibute;
use App\PaksageImage;
use App\Ticket;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use DB;
use Lang;
use Session;
use Mail;

use App\Freecomp;
use Share;
use Validator;
use Exception;

class ProductController extends Controller
{
    public function __construct()
    {

    }
  public function freecompshow()
  {

    $freecompshow = Freecomp::orderBy('id','DESC')->get();
    return view('admin.freecompshow',compact('freecompshow'));
  }
    public function destroyfreecompshow(Request $request)
  {
    $id = $request->input("id");
    Freecomp::where("id", $id)->delete();

  }

  public function index($uniqid)
    {

        $package = Package::where('uniqid',$uniqid)->where('status',1)->where('soft_delete', 0)->first();

        if(!isset($package)){
          return redirect('/');
        }

        if ($package->perc_of_tickets_sold() < 10) {
            if ($package->perc_of_dummy_tickets_sold() < 10) {
                $package->purchase_dummy_tickets();
            }
        }
        else {
            // echo "else ";
            // exit;
            $package->undo_dummy_ticket_purchase();
        }

        if (Auth::check())
        {
       $freecomp = DB::table('freecomps')->where('user_id','=', Auth::user()->id)->first();
        }


        $product_Id = Package::where('uniqid',$uniqid)->where('status',1)->where('soft_delete', 0)->first();
      /*  print_r($package);    print_r($   product_Id);exit();*/

        $winner = DB::table('winner')->where('product_id',$product_Id->id)->first();
        if(Auth::check()){
        return view('product', compact("package","winner","freecomp"));
      }else{
        return view('product', compact("package","winner"));

      }
    }
    public function show($id, $slug)
    {
        $package = Package::where('slug',$slug)->where('status',1)->where('soft_delete', 0)->first();


        if(!isset($package) || $package->mc_id==0){
          return redirect('/');
        }
        if ($package->perc_of_tickets_sold() < 10) {
            if ($package->perc_of_dummy_tickets_sold() < 10) {
                $package->purchase_dummy_tickets();
            }
        }
        else {
            // echo "else ";
            // exit;
            $package->undo_dummy_ticket_purchase();
        }

        if (Auth::check())
        {
       $freecomp = DB::table('freecomps')->where('user_id','=', Auth::user()->id)->first();
        }


        $product_Id = Package::where('slug',$slug)->where('status',1)->where('soft_delete', 0)->first();
      /*  print_r($package);    print_r($   product_Id);exit();*/

        $winner = DB::table('winner')->where('product_id',$product_Id->id)->first();
        if(Auth::check()){
        return view('product', compact("package","winner","freecomp"));
      }else{
        return view('product', compact("package","winner"));

      }
    }

    public function refer($slug, $referrer_type, $refer_id, $social)
    {
      $userss = DB::table('users')->where('reference_id',$refer_id)->first();

        if($referrer_type=="business"){
          if($userss->is_business_profile==0){
            abort(404);
          }
        }
        $package = Package::where('slug',$slug)->where('status',1)->where('soft_delete', 0)->first();
        $socialsss = $social;

        if (strcasecmp($referrer_type, 'business') == 0)
        {
            $is_business = DB::table('users')->where('reference_id', '=', $refer_id)->pluck('is_business_profile')->first();

            if ($is_business != '1')
            {
                $referrer_type = 'individual';
            }
        }


        ///echo "<Pre>";
        //print_r(DB::table('tickets')->where('mc_id', 10)->where('dummy_sold', '1')->count());


        //print_r($package->purchased_tickets_count ());
        //echo "<br>";

        //print_r($package->perc_of_tickets_sold());
        //echo "<br>";
        //         $package->purchase_dummy_tickets();
        // echo "<Pre>";

        //print_r($package->perc_of_dummy_tickets_sold());
        // echo "</pre>";
        //exit;

        if(isset($package)){
        if ($package->perc_of_tickets_sold() < 10) {
            if ($package->perc_of_dummy_tickets_sold() < 10) {
                $package->purchase_dummy_tickets();
            }
        }
        else {
            // echo "else ";
            // exit;
            $package->undo_dummy_ticket_purchase();
        }

        if (Auth::check())
        {
       $freecomp = DB::table('freecomps')->where('user_id','=', Auth::user()->id)->first();
        }


        $product_Id = Package::where('slug',$slug)->where('status',1)->where('soft_delete', 0)->first();
      /*  print_r($package);    print_r($   product_Id);exit();*/

        $winner = DB::table('winner')->where('product_id',$product_Id->id)->first();
        if(Auth::check()){
        return view('product', compact("package","winner","freecomp","refer_id", "socialsss", "referrer_type"));
      }else{
        return view('product', compact("package","winner","refer_id", "socialsss", "referrer_type"));
      }
  }
  return redirect('/');
    }

    //  public function add_to_cart(Request $request)
    // {
    // 	try{
    // 		DB::beginTransaction();

    // 	$validator = Validator::make( $request->all(), array(
    //             'package_id' => 'required|integer',
    //             'user_id' => 'required|integer',
    //             'ticket_id' => 'required|integer'
    //         )
    //     );
    //     $currentDateTime = date('Y-m-d');
    //     $package = Package::where('id',$request->package_id)->first();
    //     // print_r($package->end_date);exit();
    //     if( $currentDateTime > $package->mc->end_date)
    //     {
    //       throw new Exception('Competition is end.');
    //     }

    //     if($validator->fails()) {
    //       $errors = implode(',', $validator->messages()->all());
	 	 //  throw new Exception($errors);
    //     }


    //     $where=['id'=>$request->ticket_id ];
    //     $ticket = Ticket::where($where)->first();
    //     if(empty($ticket)){
    //     	throw new Exception('Ticket not exists.');
    //     }
    //  if($ticket->status==1 || $ticket->dummy_sold == 1){
    //       throw new Exception('Ticket already purchased');
    //     }

    //      if($ticket->user_id!=0 && $ticket->status!=0 && $ticket->user_id!=$request->user_id ){
    //     	throw new Exception('Ticket already taken by some other person');
    //     }



    //     if($ticket->user_id==$request->user_id && $ticket->status==2 && $ticket->product_id==$request->package_id){
    //     	throw new Exception('Ticket already placed in your cart.');
    //     }
    //     $ticket->status=2;
    //     $ticket->product_id=$request->package_id;
    //     $ticket->user_id=$request->user_id;
    //     $ticket->save();
    //     // Ticket::where('id',$request->ticket_id)->update(['status'=>2,'user_id'=>$request->user_id]);
    //     $cart=new Cart;
    //     $cart->package_id=$request->package_id;
    //     $cart->ticket_id=$request->ticket_id;
    //     $cart->user_id=$request->user_id;
    //     $cart->save();
    //      DB::commit();
    //      $cart=get_user_cart($request->user_id);

    //      // $credit = DB::table('users')->where('id',)
    //      return $cart;

    //   } catch(Exception $e) {

    //       	DB::rollback();
 			// $response_array = ['success'=>false, 'error_messages'=>$e->getMessage(), 'error_code'=>$e->getCode()];
 			// return $response_array;
    //   }
    // }

    //  public function remove_from_cart(Request $request)
    // {

    // 	try{
    // 		DB::beginTransaction();

    // 	$validator = Validator::make( $request->all(), array(
    //             'user_id' => 'required|integer',
    //             'ticket_id' => 'required|integer'
    //         )
    //     );

    //     if($validator->fails()) {
    //       $errors = implode(',', $validator->messages()->all());
	 	 //  throw new Exception($errors);

    //     }
    //     $where=['id'=>$request->ticket_id,'user_id'=> $request->user_id,'status'=>2];
    //     $ticket = Ticket::where($where)->first();
    //     if(empty($ticket)){
    //     	throw new Exception('Ticket not exists.');
    //     }

    // 	  $ticket->status=0;
    //     $ticket->product_id=0;
    //     $ticket->user_id=0;
    //     $ticket->save();
    //     Cart::where(['user_id' => $request->user_id,'ticket_id'=>$request->ticket_id])->delete();
    //     DB::commit();
    //     $cart=get_user_cart($request->user_id);
    //      return $cart;

    //   } catch(Exception $e) {

    //       	DB::rollback();
 			// $response_array = ['success'=>false, 'error_messages'=>$e->getMessage(), 'error_code'=>$e->getCode()];
 			// return $response_array;
    //   }
    // }

    public function generateNumber() {
        $number = mt_rand(1000, 9999);
            if ($this->check_number_exists($number)) {
            return $this->generateNumber();
        }
        return $number;
    }

    public function check_number_exists($number){
        return Ticket::where('user_id', $number)->first();
    }

    public function add_to_cart(Request $request) {
        //params => package_id, single, multi, ticket_id, no_of_tickets
        if(Auth::check())
        {
            if(Auth::user()->soft_delete==1)
            {
                Auth::logout();
                return "logout"; 
            }
        }
        if($request->set_cookie == 1){
            setcookie('auto_ticket_rec_modal'.$request->package_id, 1, time() + (86400), "/");
        }
        if (Auth::check()){
            DB::beginTransaction();
            try {
        // 		DB::beginTransaction();

            	$validator = Validator::make( $request->all(), array(
                        'package_id' => 'required|integer',
                    )
                );
                if($validator->fails()) {
                    $errors = implode(',', $validator->messages()->all());
            	 	throw new Exception($errors);
                }

                $now = date('Y-m-d');
                $package = Package::where('id',$request->package_id)->where('soft_delete', 0)->first();
                if( $now > $package->mc->end_date){
                  throw new Exception('Competition is ended.');
                }

                if($request->single == 1 && $request->multi == 0){
                    $ticket = Ticket::where('id', $request->ticket_id)->first();
                    if(empty($ticket)){
                    	throw new Exception('Ticket not exists.');
                    }
                    if($ticket->status==1 || $ticket->dummy_sold == 1){
                      throw new Exception('Ticket already purchased.');
                    }
                    if($ticket->user_id != 0 && $ticket->status != 0 && $ticket->user_id != Auth::user()->id ){
                    	throw new Exception('Ticket already taken by some other person.');
                    }
                    if($ticket->user_id == Auth::user()->id && $ticket->status == 2 && $ticket->product_id == $request->package_id){
                    	throw new Exception('Ticket already placed in your cart.');
                    }

                    $ticket->status = 2;
                    $ticket->product_id = $request->package_id;
                    $ticket->user_id = Auth::user()->id;
                    $ticket->save();

                    $cart = new Cart;
                    $cart->package_id = $request->package_id;
                    $cart->ticket_id = $request->ticket_id;
                    $cart->user_id = Auth::user()->id;
                    $cart->save();

                    // DB::commit();

                    $cart = get_user_cart(Auth::user()->id);
                    DB::commit();

                    $status = "Add To Cart";
                    $user_email = Auth::user()->email;
                    $com_name = $package->name;
                    $ticket_number = $ticket->code;
                    $msg = "User Added Ticket To Cart.";
                    $com_ids = $package->id;
                    $this->send_status_mail($status, $user_email, $com_name, $ticket_number, $msg, $com_ids);

                    return $cart;

                } else {
                    $ticket_numbers = array();
                    $tickets = Ticket::where('user_id', 0)->where('status', 0)->where('product_id', 0)->where('mc_id', $package->mc_id)->where('dummy_sold', 0)->limit($request->no_of_tickets)->get();
                    if(sizeof($tickets) == 0){
                        throw new Exception('Competition not available.');
                    }
                    foreach($tickets as $one){
                        $ticket_numbers[] = $one->code;
                        $one->status = 2;
                        $one->product_id = $request->package_id;
                        $one->user_id = Auth::user()->id;
                        $one->save();

                        $cart = new Cart;
                        $cart->package_id = $request->package_id;
                        $cart->ticket_id = $one->id;
                        $cart->user_id = Auth::user()->id;
                        $cart->save();
                    }
                    // DB::commit();

                    $cart = get_user_cart(Auth::user()->id);
                    $cart['ticket_numbers'] = '<span style="color: orange;"> #'. implode(" , # ", $ticket_numbers) . '</span>';
                    DB::commit();

                    $status = "Add To Cart";
                    $user_email = Auth::user()->email;
                    $com_name = $package->name;
                    $ticket_number = implode(" , ", $ticket_numbers);
                    $msg = "User Added Tickets To Cart.";
                    $com_ids = $package->id;
                    $this->send_status_mail($status, $user_email, $com_name, $ticket_number, $msg, $com_ids);

                    return $cart;
                }

            } catch(Exception $e) {
              	DB::rollback();

     			$response_array = [ 'success' => false, 'error_messages' => $e->getMessage(), 'error_code' => $e->getCode() ];
     			return $response_array;
            }
        }else{
            if(!isset($_COOKIE['random_user_id'])) {
                $random_user_id = $this->generateNumber();
                setcookie('random_user_id', $random_user_id, time() + (86400), "/"); // 86400 = 1 day
            } else {
                $random_user_id = $_COOKIE['random_user_id'];
            }
            DB::beginTransaction();
            try {
        // 		DB::beginTransaction();

            	$validator = Validator::make( $request->all(), array(
                        'package_id' => 'required|integer',
                    )
                );
                if($validator->fails()) {
                    $errors = implode(',', $validator->messages()->all());
            	 	throw new Exception($errors);
                }

                $now = date('Y-m-d');
                $package = Package::where('id',$request->package_id)->where('soft_delete', 0)->first();
                if( $now > $package->mc->end_date){
                  throw new Exception('Competition is ended.');
                }

                if($request->single == 1 && $request->multi == 0){
                    $ticket = Ticket::where('id', $request->ticket_id)->first();
                    if(empty($ticket)){
                    	throw new Exception('Ticket not exists.');
                    }
                    if($ticket->status==1 || $ticket->dummy_sold == 1){
                      throw new Exception('Ticket already purchased.');
                    }
                    if($ticket->user_id != 0 && $ticket->status != 0 && $ticket->user_id != $random_user_id ){
                    	throw new Exception('Ticket already taken by some other person.');
                    }
                    if($ticket->user_id == $random_user_id && $ticket->status == 2 && $ticket->product_id == $request->package_id){
                    	throw new Exception('Ticket already placed in your cart.');
                    }

                    $ticket->status = 2;
                    $ticket->product_id = $request->package_id;
                    $ticket->user_id = $random_user_id;
                    $ticket->save();

                    $cart = new Cart;
                    $cart->package_id = $request->package_id;
                    $cart->ticket_id = $request->ticket_id;
                    $cart->user_id = $random_user_id;
                    $cart->save();

                    // DB::commit();

                    $cart = get_user_cart($random_user_id);
                    DB::commit();

                    $status = "Add To Cart";
                    $user_email = "Offline User : $random_user_id";
                    $com_name = $package->name;
                    $ticket_number = $ticket->code;
                    $msg = "User Added Ticket To Cart.";
                    $com_ids = $package->id;
                    $this->send_status_mail($status, $user_email, $com_name, $ticket_number, $msg, $com_ids);

                    return $cart;

                } else {
                    $ticket_numbers = array();
                    $tickets = Ticket::where('user_id', 0)->where('status', 0)->where('product_id', 0)->where('mc_id', $package->mc_id)->where('dummy_sold', 0)->limit($request->no_of_tickets)->get();
                    if(sizeof($tickets) == 0){
                        throw new Exception('Competition not available.');
                    }
                    foreach($tickets as $one){
                        $ticket_numbers[] = $one->code;
                        $one->status = 2;
                        $one->product_id = $request->package_id;
                        $one->user_id = $random_user_id;
                        $one->save();

                        $cart = new Cart;
                        $cart->package_id = $request->package_id;
                        $cart->ticket_id = $one->id;
                        $cart->user_id = $random_user_id;
                        $cart->save();
                    }
                    // DB::commit();

                    $cart = get_user_cart($random_user_id);
                    $cart['ticket_numbers'] = '<span style="color: orange;"> #'. implode(" , # ", $ticket_numbers) . '</span>';
                    DB::commit();

                    $status = "Add To Cart";
                    $user_email = "Offline User : $random_user_id";
                    $com_name = $package->name;
                    $ticket_number = implode(" , ", $ticket_numbers);
                    $msg = "User Added Tickets To Cart.";
                    $com_ids = $package->id;
                    $this->send_status_mail($status, $user_email, $com_name, $ticket_number, $msg, $com_ids);

                    return $cart;
                }

            } catch(Exception $e) {
              	DB::rollback();

     			$response_array = [ 'success' => false, 'error_messages' => $e->getMessage(), 'error_code' => $e->getCode() ];
     			return $response_array;
            }
        }
    }

    public function remove_from_cart(Request $request) {
    	try{
    		DB::beginTransaction();
        	$validator = Validator::make( $request->all(), array(
                    'ticket_id' => 'required|integer'
                )
            );
            if($validator->fails()) {
                $errors = implode(',', $validator->messages()->all());
    	 	    throw new Exception($errors);
            }
            if (Auth::check()){

                $ticket = Ticket::where(['id' => $request->ticket_id, 'user_id' => Auth::user()->id, 'status' => 2 ])->first();
                if(empty($ticket)){
                	throw new Exception('Ticket not exists.');
                }
                $package = Package::where('id', $ticket->product_id)->where('soft_delete', 0)->first();

            	$ticket->status = 0;
                $ticket->product_id = 0;
                $ticket->user_id = 0;
                $ticket->save();

                Cart::where(['user_id' => Auth::user()->id, 'ticket_id' => $request->ticket_id])->delete();

                $cart = get_user_cart(Auth::user()->id);
                DB::commit();

                $status = "Remove From Cart";
                $user_email = Auth::user()->email;
                $com_name = $package->name;
                $ticket_number = $ticket->code;
                $msg = "User Removed Ticket From Cart.";
                $com_ids = $package->id;
                $this->send_status_mail($status, $user_email, $com_name, $ticket_number, $msg, $com_ids);

                return $cart;

            } else{
                $random_user_id = $_COOKIE['random_user_id'];

                $ticket = Ticket::where(['id' => $request->ticket_id, 'user_id' => $random_user_id, 'status' => 2 ])->first();
                if(empty($ticket)){
                	throw new Exception('Ticket not exists.');
                }
                $package = Package::where('id', $ticket->product_id)->where('soft_delete', 0)->first();
            	$ticket->status = 0;
                $ticket->product_id = 0;
                $ticket->user_id = 0;
                $ticket->save();

                Cart::where(['user_id' => $random_user_id, 'ticket_id' => $request->ticket_id])->delete();



                $cart = get_user_cart($random_user_id);
                DB::commit();

                $status = "Remove From Cart";
                $user_email = "Offline User : $random_user_id";
                $com_name = $package->name;
                $ticket_number = $ticket->code;
                $msg = "User Removed Ticket From Cart.";
                $com_ids = $package->id;
                $this->send_status_mail($status, $user_email, $com_name, $ticket_number, $msg, $com_ids);

                return $cart;
            }
        } catch(Exception $e) {
          	DB::rollback();
 			$response_array = ['success'=>false, 'error_messages'=>$e->getMessage(), 'error_code'=>$e->getCode()];
 			return $response_array;
        }
    }

    public function send_status_mail($status, $user_email, $com_name, $ticket_number, $msg, $com_ids){
        DB::table('user_activity')->insert(['user_email' => $user_email, 'activity' => $status, 'act_message' => $msg, 'com_ids' => $com_ids]);
        $email_data = array('user_email' => $user_email, 'competition' => $com_name, 'ticket_number' => $ticket_number, 'msg' => $msg);
        $to_email = "stepinnsolution@gmail.com";
        $info = array('to_email' => $to_email, 'status' => $status);
        Mail::send(['html'=>'emails.status_email'], $email_data, function($message) use($info) {
            $message->to($info['to_email'], 'Prize Maker Cart Status')->subject($info['status']);
            $setting = DB::table('setting')->first();
            $message->from($setting->email,'Prize Maker');
        });
    }
}

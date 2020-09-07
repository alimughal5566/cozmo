<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use Session;
use App\User;
use App\Cart;
use App\Ticket;
use App\UrlCategory;
use App\Payment;
use App\Package;
use App\PaksageImage;
use App\Freecomp;
use App\Discounts;
use App\Faq;
use App\Blog;
use App\MC;
use App\Article;
use App\User_Card_Details;
use Share;
use DB;
use Exception;
use App\Mail\Notifications;
use Mail;
use Illuminate\Support\Str;
use Carbon;
// use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use DateTime;
use Illuminate\Support\Facades\Validator;
use Location;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {   
        $this->middleware('DeleteLogout');
    }

    /**
     * Show the application Homepage.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
         $ip = $request->ip();

        $get = DB::table('ip_address')->where('ip_address', $ip)->first();
        if($get=="")
        {
            if($ip=="::1" || $ip=="127.0.0.1" ){
                $position = Location::get('14.192.159.215');
            }else{
                 $position = Location::get($ip);
            }


            DB::table('ip_address')->insert(['ip_address'=>$ip, 'country'=>$position->countryName]);
        }else{

        $ip_address= DB::table('ip_address')->where('created_at', '<=', Carbon::now()->subDays(1)->toDateTimeString())->where('ip_address', $ip)->where('status',0)->first();


        if ($ip_address!="") {
            if($ip=="::1"){
                $position = Location::get('193.117.138.126');
            }else{
                 $position = Location::get($ip);
            }

            DB::table('ip_address')->where('id', $ip_address->id)->update(['status'=>1]);
            DB::table('ip_address')->insert(['ip_address'=>$ip, 'country'=>$position->countryName]);
            }
        }

        if($get=="")
        {
          $check="check";
        }

            $start_dates = DB::table('ip_address')->where('ip_address', $ip)->first();
            $start = Carbon::parse($start_dates->created_at);
            $end = Carbon::now();
            $minutes = $end->diffInMinutes($start);


            if($minutes >= 10)
            {
                $user_register= User::where('ip_address',$ip)->first();
                if(isset($user_register))
                {
                    $check="uncheck";
                }else{
                    DB::table('ip_address')->where('ip_address', $ip)->update(['created_at'=>Carbon::now()]);
                    $check="check";
                }
            }



        $data['title']='Win Online Competition for Dream Car, Watch, Mobile, Laptop';
        $data['featuredProducts']=Package::where('featured',1)->where('start_date', '<=', date('Y-m-d H:i:s'))->where('end_date', '>=', date('Y-m-d H:i:s'))->where('status', 1)->where('soft_delete', 0)->get();

        $data['products']=Package::where('featured',0)->where('start_date', '<=', date('Y-m-d H:i:s'))->where('end_date', '>', date('Y-m-d H:i:s'))->where('status', 1)->where('soft_delete', 0)->orderby('id', 'DESC')->get();

        $all_products = Package::where('start_date', '<=', date('Y-m-d H:i:s'))->where('end_date', '>', date('Y-m-d H:i:s'))->where('status', 1)->where('soft_delete', 0)->get();

        // $blog = Blog::orderBy('id','DESC')->get();
          $blogs = DB::table('blogs')->where('sliderstatus','1')->where('package_id','!=',0)->orderBy('sorting', 'ASC')->get();

        $testimonials = DB::table('testimonials')->get();

    $winner = DB::table('winner')->join('multi_competition', 'winner.mc_id', '=', 'multi_competition.id')->selectRaw('*, winner.title as winner_title , winner.image as wiimage ')->get();

       /* $winner = DB::table('winner')->get();*/
         $competitions=MC::where('start_date', '<=', date('Y-m-d'))->where('end_date', '>=', date('Y-m-d'))->orderBy('sorting', 'ASC')->where('soft_delete', 0)->get()->chunk(4);

        $today = date('Y-m-d');
        $productsss = Package::where('mc_id','!=',0)->where('status', 1)->where('packages.soft_delete', 0)->join('multi_competition', 'packages.mc_id', '=', 'multi_competition.id')->where('multi_competition.end_date', '>', $today)->where('multi_competition.freeticket',1)->select('packages.*')->get();

          $settings = DB::table('setting')->first(); 

         if(isset($check))
         {
            return view('home',$data, compact('all_products', 'blogs', 'testimonials','winner','competitions', 'settings','check', 'productsss'));
        }else{
            return view('home',$data, compact('all_products', 'blogs', 'testimonials','winner','competitions', 'settings','productsss'));
        }



    }
    
    public function articles(){

        $search = "";
        $cat = "";

        if(Auth::check()){
            $member = Auth::user();
            if($member->type=="Members Only"){

                $users = DB::table('articles')->select('articles.*','writers.title as name')
                ->where('articles.article_type','!=','Exec Only')
                ->join('writers','articles.writer_id','writers.id')
                ->paginate(6);

                $art = DB::table('setting')->select('*')->get();
                return view('articles')->with(['users'=>$users, 'art'=>$art, 'search'=>$search, 'cat'=>$cat]);

            }
            if($member->type=="Exec Only"){

                $users = DB::table('articles')->select('articles.*','writers.title as name')
                ->join('writers','articles.writer_id','writers.id')
                ->paginate(6);

                $art = DB::table('setting')->select('*')->get();
                return view('articles')->with(['users'=>$users, 'art'=>$art, 'search'=>$search, 'cat'=>$cat]);

            }
        }

            $users = DB::table('articles')->select('articles.*','writers.title as name')
            ->where('articles.article_type','Public')
            ->join('writers','articles.writer_id','writers.id')
            ->paginate(6);

            $art = DB::table('setting')->select('*')->get();
            return view('articles')->with(['users'=>$users, 'art'=>$art, 'search'=>$search, 'cat'=>$cat]);
        
    }
    
    public function article_search(Request $request){
        // print_r($request->all());
        $search = $request->name;
        $cat = $request->categories;
        if($search != '' || $cat != ''){
            if(Auth::check()){
                $member = Auth::user();
                if($member->type=="Members Only"){

                    $users = DB::table('articles')->select('articles.*','writers.title as name')
                    ->where('articles.article_type','!=','Exec Only')
                    ->join('writers','articles.writer_id','writers.id')
                    ->where('articles.title','like','%'.$search.'%')
                    ->where('articles.article_type',$cat)
                    ->paginate(60);

                    $art = DB::table('setting')->select('*')->get();
                    return view('articles')->with(['users'=>$users, 'art'=>$art, 'search'=>$search, 'cat'=>$cat]);

                }
                if($member->type=="Exec Only"){

                    $users = DB::table('articles')->select('articles.*','writers.title as name')
                    // ->where('articles.article_type','Exec Only')
                    ->join('writers','articles.writer_id','writers.id')
                    ->where('articles.title','like','%'.$search.'%')
                    ->where('articles.article_type',$cat)
                    ->paginate(60);

                    $art = DB::table('setting')->select('*')->get();
                    return view('articles')->with(['users'=>$users, 'art'=>$art, 'search'=>$search, 'cat'=>$cat]);

                }
            }

                $users = DB::table('articles')->select('articles.*','writers.title as name')
                ->where('articles.article_type','Public')
                ->join('writers','articles.writer_id','writers.id')
                ->where('articles.title','like','%'.$search.'%')
                ->where('articles.article_type',$cat)
                ->paginate(60);

                $art = DB::table('setting')->select('*')->get();
                return view('articles')->with(['users'=>$users, 'art'=>$art, 'search'=>$search, 'cat'=>$cat]);
        }

        return redirect('articles');
    }
    
    public function article_detail(Request $request, $id){

        $users = DB::table('articles')->select('articles.*','writers.title as name')
        ->where('articles.id',$id)
        ->join('writers','articles.writer_id','writers.id')
        ->get();
        
        return view('article_detail')->with('users',$users);

    }

    public function article_write(Request $request, $id){

        $users = DB::table('articles')->select('articles.*','writers.title as name')
        ->where('articles.id',$id)
        ->join('writers','articles.writer_id','writers.id')
        ->get();
        
        return view('article_write')->with('users',$users);

    }

    public function article_upd(Request $request){
        $upd = Article::find($request->id);
        $upd->long_title = $request->long_title;
        $upd->description = $request->description;
        $upd->save();
        return redirect('articles');
    }


    public function profile_view(){

        if(Auth::check()){

            $user = Auth::user();
        return view('profile_view')->with('user',$user);

        }

        return redirect()->action('HomeController@index');

    }

    public function profile_upd(){

        return redirect()->action('HomeController@index');

    }

    public function category_wise_competitions(Request $request){
        // echo $request->cat;exit;
        $cat = UrlCategory::where('slug',$request->cat)->first();
        if($cat){
           $data = $cat->packages;
           if($data){
               $title = $cat->title;
               return view('category_wise_competitions', compact('data', 'title','cat'));
           }else{
               Session::flash('error','URL Category not found');
               return redirect('/');
           }

        }else{
           Session::flash('error','URL Category not found');
           return redirect('/');
        }
    }

    public function all_competitions(){
        $cats = UrlCategory::all();
        foreach($cats as $cat){
           $all_data[$cat->title] = $cat->packages;
        }
        return view('all_competitions', compact('all_data','cats'));
    }

    public function competition()
    {
        // $data['featuredProducts']=Package::where('featured',1)->where('start_date', '<=', date('Y-m-d H:i:s'))->get();

        // $data['products']=Package::where('featured',0)->latest()->get();
        // return view('activecompition',$data);

        return redirect('/#competition');

    }
    public function checkout(){
        $price = 0;
        $com_ids = "";
        $user_email = "";
        if (Auth::check()){
            $user_email = Auth::user()->email;
            $cart = Cart::where('user_id','=', Auth::user()->id)->get();
            if(sizeof($cart) == 0){
                return redirect('/');
            }
            foreach ($cart as $key => $value) {
                $ticket = Ticket::where(['id'=>$value->ticket_id])->first();
                if($com_ids == ""){
                    $com_ids = $ticket->product_id;
                }else {
                    $com_ids = $com_ids. "," .$ticket->product_id;
                }
                $price += $ticket ? $ticket->paid_price : 0;
            }
            $total_price=0;
            $carts= Cart::where(['user_id' => Auth::user()->id]);
            $total_tickets=$carts->count();

            $discount_percentage = array();
            $responce = DB::select("SELECT package_id, count(*) as total FROM cart WHERE user_id = ".Auth::user()->id." GROUP BY package_id");
            foreach($responce as $one){
            $discount_offers = Discounts::where('c_id', $one->package_id)->orderBy('no_of_tickets', 'DESC')->get();
            foreach($discount_offers as $offer){
                if($one->total >= $offer->no_of_tickets){
                    $discount_percentage[$one->package_id] = $offer->discount_percentage;
                    break;
                }
            }
        }
        foreach ($carts->orderBy('created_at','DESC')->get() as $key => $cart) {
            if($key==0)
            $last_ticket_date=$cart->created_at;
            if(isset($discount_percentage[$cart->package_id])){
                $price_dicount = ( $cart->ticket->paid_price / 100 ) * $discount_percentage[$cart->package_id];
                $total_price += $cart->ticket->paid_price - $price_dicount;
            }else{
                $total_price += $cart->ticket->paid_price;
            }
        }
            $price = $total_price;
            $user = Auth::user();
            $credit = DB::table('users')->where('id',$user->id)->first();
            $data['credit'] = $credit->referrer_amount;
            $data['price'] = $price;
            $data['title'] = 'Prize Maker | Pay for tickets';
            $res = User_Card_Details::where('user_id', Auth::user()->id)->first();
            if($res){
                $user_card_details = 1;
                $res->cardNumber = $this->decryption($res->cardNumber);
                $res->cardExpiryMonth = $this->decryption($res->cardExpiryMonth);
                $res->cardExpiryYear = $this->decryption($res->cardExpiryYear);
                $res->cardCVV = $this->decryption($res->cardCVV);
            }else{
                $user_card_details = 0;
            }
        }else{
            $res = null;
            if(isset($_COOKIE['random_user_id'])){$random_user_id = $_COOKIE['random_user_id'];}else{
                return redirect('/');
            }
            $user_email = "Offline User : $random_user_id";
            $cart = Cart::where('user_id','=', $random_user_id)->get();
            if(sizeof($cart) == 0){
                return redirect('/');
            }
            foreach ($cart as $key => $value) {
                $ticket = Ticket::where(['id'=>$value->ticket_id])->first();
                $price += $ticket ? $ticket->paid_price : 0;
            }
            if(!isset($_COOKIE['random_user_id'])){
                $user_id=0;
            }else{
                $user_id=$_COOKIE['random_user_id'];
            }
            $total_price=0;
            $carts= Cart::where(['user_id' => $user_id]);
            $total_tickets=$carts->count();
            $discount_percentage = array();
            $responce = DB::select("SELECT package_id, count(*) as total FROM cart WHERE user_id = ".$user_id." GROUP BY package_id");
        foreach($responce as $one){
            $discount_offers = Discounts::where('c_id', $one->package_id)->orderBy('no_of_tickets', 'DESC')->get();
            foreach($discount_offers as $offer){
                if($one->total >= $offer->no_of_tickets){
                    $discount_percentage[$one->package_id] = $offer->discount_percentage;
                    break;
                }
            }
        }

        foreach ($carts->orderBy('created_at','DESC')->get() as $key => $cart) {
            if($key==0)
            $last_ticket_date=$cart->created_at;
            if(isset($discount_percentage[$cart->package_id])){
                $price_dicount = ( $cart->ticket->paid_price / 100 ) * $discount_percentage[$cart->package_id];
                $total_price += $cart->ticket->paid_price - $price_dicount;
            }else{
                $total_price += $cart->ticket->paid_price;
            }
        }
            $price = $total_price;
            $data['credit'] = 0;
            $data['price'] = $price;
            $data['title'] = 'Prize Maker | Pay for tickets';
            $user_card_details = 0;
        }
        $status = "Checkout";
        $user_email = $user_email;
        $com_name = "";
        $ticket_number = "";
        $msg = "User Landed on Checkout Page.";
        $com_ids = $com_ids;
        $this->send_status_mail($status, $user_email, $com_name, $ticket_number, $msg, $com_ids);
        return view('paytriot_checkout', $data, compact('user_card_details', 'res'));
    }

    public function check_coupon($coupon){
        $today = date('Y-m-d');
        $response = DB::table('coupons')->where('coupon', $coupon)->where('start_date', '<=', $today)->where('end_date', '>=', $today)->first();
        if($response){
            $price = 0;
            $d_price = 0;
            $discounted_price = 0;
            $com_ids = "";
            $cart = Cart::where('user_id','=', Auth::user()->id)->get();
            if(sizeof($cart) == 0){
                return redirect('/');
            }
            foreach ($cart as $key => $value) {
                $ticket = Ticket::where(['id'=>$value->ticket_id])->first();
                if($com_ids == ""){
                    $com_ids = $ticket->product_id;
                }else {
                    $com_ids = $com_ids. "," .$ticket->product_id;
                }
                $price += $ticket ? $ticket->paid_price : 0;
                $d_price = $ticket ? $ticket->paid_price : 0;
                $discount = $d_price * ($response->percentage / 100);
                $discounted_price += $d_price - $discount;

//                $ticket->discount_of_amount = $discount;
//                $ticket->save();
            }
            $status = "Coupon Applied";
            $user_email = Auth::user()->email;
            $com_name = "";
            $ticket_number = "";
            $msg = "User apply for discount. (Actual amount : $price , Discounted amount : $discounted_price)";
            $com_ids = $com_ids;
            $this->send_status_mail($status, $user_email, $com_name, $ticket_number, $msg, $com_ids);

            echo $discounted_price;
        }else{
            echo "Error";
        }
    }
    public function encryption($string_to_encrypt){
        // Store a string into the variable which
        // need to be Encrypted
        $simple_string = $string_to_encrypt;
        // Store the cipher method
        $ciphering = "AES-128-CTR";
        // Use OpenSSl Encryption method
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        // Non-NULL Initialization Vector for encryption
        $encryption_iv = '1234567891011121';
        // Store the encryption key
        $encryption_key = "1q2w3e4r5t";
        // Use openssl_encrypt() function to encrypt the data
        $encryption = openssl_encrypt($simple_string, $ciphering,
            $encryption_key, $options, $encryption_iv);
        return $encryption;
    }

    public function decryption($string_to_decrypt)
    {
        // Non-NULL Initialization Vector for decryption
        $decryption_iv = '1234567891011121';
        // Store the decryption key
        $decryption_key = "1q2w3e4r5t";
        // Store the cipher method
        $ciphering = "AES-128-CTR";
        // Use OpenSSl Encryption method
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        // Use openssl_decrypt() function to decrypt the data
        $decryption = openssl_decrypt($string_to_decrypt, $ciphering,
            $decryption_key, $options, $decryption_iv);
        return $decryption;
    }

    public function checkout_paytriot(Request $request){
        if(isset($request->card_entry)){
            $new_user_card_obj = new User_Card_Details();
            $new_user_card_obj->user_id = Auth::user()->id;
            $new_user_card_obj->customerName = $request->customerName;
            $new_user_card_obj->cardNumber = $this->encryption($request->cardNumber);
            $new_user_card_obj->cardExpiryMonth = $this->encryption($request->cardExpiryMonth);
            $new_user_card_obj->cardExpiryYear = $this->encryption($request->cardExpiryYear);
            $new_user_card_obj->cardCVV = $this->encryption($request->cardCVV);
            $new_user_card_obj->customerAddress = $request->customerAddress;
            $new_user_card_obj->customerPostCode = $request->customerPostCode;
            $new_user_card_obj->customerEmail = $request->customerEmail;
            $new_user_card_obj->customerPhone = $request->customerPhone;
            $new_user_card_obj->save();
        }

        // $post_params = array(
        //     "merchantID" => $request->merchantID,
        //     "action" => $request->action,
        //     "type" => $request->type,
        //     "amount" => $request->amount,
        //     "currencyCode" => $request->currencyCode,
        //     "countryCode" => $request->countryCode,
        //     "cardNumber" => $request->cardNumber,
        //     "cardExpiryMonth" => $request->cardExpiryMonth,
        //     "cardExpiryYear" => $request->cardExpiryYear,
        //     "cardCVV" => $request->cardCVV,
        //     "customerPostCode" => $request->customerPostCode
        // );

        $post_params = array(
            'merchantID' => '119096',
    		'action' => 'SALE',
    		'type' => 1,
            'statementNarrative1' => "PTR*prizemaker.com",
            'subMerchantID' => 1000256,
        	'countryCode' => 826,
            'currencyCode' => 826,
        	'merchantAddress' => "23 Chantry Lane",
            'merchantTown' => "Grimsby",
            'merchantPostcode' => "DN31 2LP",
            'facilitatorID' => 238750,
    		'amount' => $request->amount,
    		'orderRef' => 'Purchase',
    		'transactionUnique' => uniqid(),
    		'customerName' => $request->customerName,
    		"cardNumber" => $request->cardNumber,
            "cardExpiryMonth" => $request->cardExpiryMonth,
            "cardExpiryYear" => $request->cardExpiryYear,
            "cardCVV" => $request->cardCVV,
            "customerPostCode" => $request->customerPostCode
        );

        ksort($post_params);
        $post_params_string = http_build_query($post_params, '', '&');
        $post_params_string = str_replace(array('%0D%0A', '%0A%0D', '%0D'), '%0A', $post_params_string);
        $post_params_string .= 'TKKzqbwZm7CvbyKE';
        $signature = hash('SHA512', $post_params_string);
        $post_params['signature'] = $signature;

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://gateway.paytriot.co.uk/direct/');
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_params, '', '&'));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

        $headers = array();
        $headers[] = 'Content-Type: application/x-www-form-urlencoded';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        parse_str($result, $output);

        if($output['responseCode'] == 0){
            $today = date('Y-m-d');
            $dis_percentage = 100;
            $response = DB::table('coupons')->where('coupon', $request->coupon)->where('status', 1)->where('start_date', '<=', $today)->where('end_date', '>=', $today)->first();
            if($response){
                $dis_percentage = $response->percentage;
            }
            $com_ids = "";
            $price = 0;
            $d_price = 0;
            $discounted_price = 0;
            $ticket_id = array();
            $cart = Cart::where('user_id', Auth::user()->id)->get();
            foreach ($cart as $key => $value) {
                $ticket = Ticket::where(['id' => $value->ticket_id])->first();
                if($com_ids == ""){
                    $com_ids = $ticket->product_id;
                }else {
                    $com_ids = $com_ids. "," .$ticket->product_id;
                }
                $price += $ticket ? $ticket->paid_price:0;
                $ticket_id[] = $value->ticket_id;

                $d_price = $ticket ? $ticket->paid_price : 0;
                $discount = $d_price * ($dis_percentage / 100);
                if($discount == $d_price){
                    $discounted_price += $d_price - $discount;
                    $ticket->discount_of_amount = 0;
                    $ticket->save();
                }else{
                    $discounted_price += $d_price - $discount;
                    $ticket->discount_of_amount = $discount;
                    $ticket->save();
                }

            }
            $Payment = new Payment;
            $Payment->user_id = Auth::user()->id;
            $Payment->ticket_id = json_encode($ticket_id);
            $Payment->price = $price;
            $Payment->price_after_discount = $discounted_price;
            $Payment->card_number = 0;
            $Payment->status = 0;
            $Payment->save();

            $this->empty_credit_cart(1, 0);

            if($response){
                $status = "Coupon Used";
                $user_email = Auth::user()->email;
                $com_name = $com_ids;
                $ticket_number = implode(',', $ticket_id);
                $msg = "User apply for discount. (Actual amount : $price , Discounted amount : $discounted_price)";
                $com_ids = $com_ids;
                $this->send_status_mail($status, $user_email, $com_name, $ticket_number, $msg, $com_ids);

                DB::table('coupon_data')->insert(['coupon_id' => $response->id, 'user_id' => Auth::user()->id, 'discount_amount' => $price - $discounted_price, 'comp_used_for' => $com_ids]);
            }

            return redirect('/user/tickets');
        }else{
            return redirect()->back()->with('error', $output['responseMessage']);
        }
    }


    public function cart()
    {
        $data['title']='cart';
        return view('page', $data);
    }
    public function contact()
    {
        $data['title']= 'Contact';
        return view('contact',$data);
    }



     public function profile()
    {
        if (!Auth::check())
        {
           return redirect('/');
        }
        $data['title']='Profile';
        $user = Auth::User();
        $refer_id = $user->reference_id;

        $total_price = DB::table('payments')->where('referrer_by',$refer_id)->sum('price');

        $commission = DB::table('setting')->first();

        if ($commission=="") {
            return view('profile', $data, compact('user','refer_id', 'commission'));
        } else {
           $total_commission = ($commission->commission / 100) * $total_price;
           return view('profile', $data, compact('user', 'total_commission','refer_id', 'commission'));
        }
    }

    public function handle_paytriot_payment (Request $request)
    {
        $cart=Cart::where('user_id','=',Auth::user()->id)->get();

                $price=0;

        try {


            if ($request->input('responseCode') == '0' || $request->input('transactionID') || $request->input('acquirerResponseMessage')=="APPROVED") {
                foreach ($cart as $key => $value) {
                    $ticket=Ticket::where(['id'=>$value->ticket_id])->first();
                    $price+=$ticket ? $ticket->paid_price:0;
                    $ticket_id[]=$value->ticket_id;
                }

                if (empty($ticket_id)) {
                   Session::flash('error','Ticket will automatically be removed from your cart if you do not buy it within 15 minutes.');
                   return redirect('user/checkout');
                }

                $fdate = Auth::user()->created_at;
        $tdate = Carbon\Carbon::now();
        $datetime1 = new DateTime($fdate);
        $datetime2 = new DateTime($tdate);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');
        $commission = DB::table('setting')->first();


                $Payment= new Payment();
                $Payment->user_id=Auth::user()->id;
                $Payment->ticket_id=json_encode($ticket_id);
                $Payment->customer_id='';
                $Payment->status=0;
                $Payment->price=$price;
                $Payment->card_number=substr($request->cardNumberMask, -4);
                if($days<=60)  {
                     $Payment->referrer_by=Auth::user()->referrer_by;
                 }
                $success=$Payment->save();

                if($success){
                    // $user = Auth::user();
                    Session::flash('success','Thanks you for buying tickets');
                    $this->empty_cart(3);
                }else{
                     Session::flash('error','Something went wrong');
                }

            }
            else {
             Session::flash('error','Something Went Wrong');
            }
        }
        catch (Exception $e) {
            $error = $e->getMessage();
            Session::flash('error',$error);
        }
    //   echo '<pre>';print_r($request->all());exit;
        return redirect('user/checkout');
    }

    public function add_payment(Request $request){
        if (!Auth::check())
           return redirect('/');
        try {
      $exp_date = explode("/", $request->expiry);
      $exp_month = isset($exp_date[0]) ? $exp_date[0]:0;
      $exp_year = isset($exp_date[1]) ? $exp_date[1]:0;
                $price=0;
                $ticket_id=[];
        $cart=Cart::where('user_id','=',Auth::user()->id)->get();

        foreach ($cart as $key => $value) {
            $ticket=Ticket::where(['id'=>$value->ticket_id])->first();
            $price+=$ticket ? $ticket->paid_price:0;
            $ticket_id[]=$value->ticket_id;
        }
        if (empty($ticket_id)) {
           Session::flash('error','Ticket will automatically be removed from your cart if you do not buy it within 15 minutes.');
           return redirect()->back()->withInput();
        }

        $post = [
  "transaction"=> [
    "currency"=> "GBP",
    "amount"=> $price,
    "description"=> "",
    "merchantRef"=> uniqid(),
    "commerceType"=> "MOTO",
    "channel"=> "WEB"
  ],
  "paymentMethod"=> [
    "registered"=> true,
    "card"=> [
    "pan"=> $request->card_number,
    "cv2"=> $request->cvc,
    "expiryDate"=> "$exp_month$exp_year",
    // "startDate"=> "1111",
    // "cardType"=> "MC_DEBIT",
    "nickname"=> Auth::user()->name,
    "cardHolderName"=> Auth::user()->name,
    "defaultCard"=> "false"
  ],
  "billingAddress"=> [
    "line1"=> Auth::user()->address,
    "city"=> Auth::user()->city,
    "region"=> "",
    "postcode"=> Auth::user()->postal_code,
    "countryCode"=> ""
  ]
],
"customer"=> [
    "merchantRef"=> uniqid(),
    'displayName'=>Auth::user()->name
  ],
  "financialServices"=> [
    "dateOfBirth"=> "19870818",
    "surname"=> "Smith",
    "accountNumber"=> "123ABC",
    "postCode"=> "BS20"
  ]
];


$headers = array(
    'Content-Type:application/json',
    'Authorization: Basic '. base64_encode("MM7CJBQMM5GOFAPCTMQ356RGBA:cRa0miOUj8kG5VqOxztD9A==")
);

$ch = curl_init('https://api.mite.pay360.com/acceptor/rest/transactions/5305716/payment');
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$response = curl_exec($ch);
$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
$header = substr($response, 0, $header_size);
$body = substr($response, $header_size);
curl_close($ch);

// do anything you want with your response
$response=json_decode($body);

if(is_object($response) && isset($response->outcome->status) && $response->outcome->status=="SUCCESS"){
        // $status=$response->outcome->status;

        $fdate = Auth::user()->created_at;
        $tdate = Carbon\Carbon::now();
        $datetime1 = new DateTime($fdate);
        $datetime2 = new DateTime($tdate);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');
        $commission = DB::table('setting')->first();

        $Payment= new Payment;
        $Payment->user_id=Auth::user()->id;
        $Payment->ticket_id=json_encode($ticket_id);
        $Payment->customer_id='';
        $Payment->commission = $commission->commission;
        $Payment->status=0;
        $Payment->price=$price;
        $Payment->card_number=substr($request->card_number, -4);
        if($days<=60)  {
         $Payment->referrer_by=Auth::user()->referrer_by;
     }
        $success=$Payment->save();
        if($success){
            // $user = Auth::user();
            Session::flash('success','Thank you for buying tickets');
            $this->empty_cart(1);
        }else{
             Session::flash('error','Something went wrong');
        }

}else if(is_object($response) && isset($response->outcome->status) && $response->outcome->status=="FAILED"){
    //  $status=$response->status;
     throw new Exception("Pyament failed.".$response->outcome->reasonMessage. ". Please try again");
}else if(is_object($response) && isset($response->status) && $response->status=="FAILED"){
    //  $status=$response->status;
     throw new Exception("Pyament failed.".$response->reasonMessage. ". Please try again");
}



       } catch (Exception $e) {
      $error = $e->getMessage();
        Session::flash('error',$error);
    }

         return redirect()->back()->withInput();
    }
    public function product_ticket()
    {
        $user_id = Auth::user()->id;
        $tickets = Ticket::where('user_id','=',$user_id)->where('status',1)->whereIn('purchase_type',array('0','1'))->orderBy('date_purchased','DESC')->get();
        $user = Ticket::where('user_id','=',$user_id)->first();
        return view('product_ticket',compact('tickets', 'user'));

    }
    public function product_ticketfree()
    {
        $user_id = Auth::user()->id;
        // $tickets = Ticket::where('user_id','=',$user_id)->where('status',1)->where('purchase_type',2)->orderBy('date_purchased','DESC')->get();
         $user = DB::table('freecomps')->where('user_id','=',$user_id)->first();
        $tickets = DB::table('freecomps')->where('user_id',$user_id)->get();
        return view('product_ticketfr',compact('tickets', 'user'));

    }
    public function show_win()
    {
        $user_id = Auth::user()->id;
        $win = DB::table('winner')->where('user_id', $user_id)->get();
        $product_id = DB::table('winner')->where('user_id', $user_id)->first();

        if ($product_id=="") {
            return redirect('profile')->with('alert', "You haven't won any competitions yet!")->withInput();
        } else {
            return view('show_win', compact('win'));
        }



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

    public function empty_credit_cart($status, $purchase_type){

        if (!Auth::check())
        {
           return redirect('/');
        }
        $user_id=Auth::id();
        $cart=Cart::where('user_id','=',$user_id)->get();
        foreach ($cart as $key => $value) {
           Ticket::where(['id'=>$value->ticket_id])->update(['status'=>$status, 'purchase_type'=>$purchase_type,'date_purchased'=>date("Y-m-d")]);
        }
        Cart::where('user_id','=',$user_id)->delete();
    }

    public function cron_cart()
    {
        try {
        $carts= Cart::get();
        foreach($carts as $cart){
            $date=strtotime($cart->created_at." +30 min");
            if($date < strtotime(now())){
               Ticket::where('id',$cart->ticket_id)->update(['status'=>0, 'user_id'=>0, 'product_id'=>0, 'date_purchased'=>date("Y-m-d")]);
               Cart::where('id','=',$cart->id)->delete();
            }
        }
        }catch(Exception $e) {
}

    }

    public function cron_payment(){


        $Payment=Payment::where('status',0)->get();

        foreach ($Payment as  $row) {
            if($row->card_number!=0){

             $user=User::find($row->user_id);
            $fdate = $user->created_at;
            $tdate = Carbon\Carbon::now();
            $datetime1 = new DateTime($fdate);
            $datetime2 = new DateTime($tdate);
            $interval = $datetime1->diff($datetime2);
            $days = $interval->format('%a');

            if($user->referrer_by!="" && $days<=60)
            {
            $total_price = $row->price;
            $total_commission = ($user->commission / 100) * $total_price;
            $refer_id = $user->referrer_by;
            $previous_amount = DB::table('users')->where('reference_id', $refer_id)->first();

            if($user->business_ref_commission!="" && $previous_amount->is_business_profile ==1)
            {
                $total_business_commission = ($user->business_ref_commission / 100) * $total_price;
                $total_amount = $previous_amount->total_amount + $total_business_commission + $total_commission;
                $total_ref_amount = $previous_amount->referrer_amount + $total_business_commission + $total_commission;
            }else{
            $total_amount = $previous_amount->total_amount + $total_commission;
            $total_ref_amount = $previous_amount->referrer_amount + $total_commission;
        }
            DB::table('users')->where('reference_id', $refer_id)->update(['referrer_amount'=> $total_ref_amount, 'total_amount'=> $total_amount]);
            $this->empty_cart(1);
            }
            Payment::where('id',$row->id)->update(['status'=>1]);
            $mytime = Carbon\Carbon::now();
            $purchase_date = $mytime->toDateTimeString();
            $data = array(
                'status'=>1,
                'date_purchased'=>$purchase_date,
                );
          Ticket::whereIn('id',json_decode($row->ticket_id))->update($data);

           $setting = DB::table('setting')->first();
        $competition = Package::all()->where('soft_delete', 0)->where('mc_id','>',0)->random($setting->buy_more_comp);
        $data = array('setting'=>$setting, 'competition'=>$competition, 'user'=>$user);

// 			$email = "acc";
            Mail::send(['html'=>'emails.purchase_email'], $data, function($message) use($user) {
                $message->to($user->email, 'Prize Maker')->subject
                ('Purchase Ticket');
                $setting = DB::table('setting')->first();
                $message->from($setting->email,'Prize Maker');
            });
    }else{
         Payment::where('id',$row->id)->update(['status'=>1]);
        $user=User::find($row->user_id);
        $mytime = Carbon\Carbon::now();
            $purchase_date = $mytime->toDateTimeString();
            $data = array(
                'status'=>1,
                'date_purchased'=>$purchase_date,
                );
          Ticket::whereIn('id',json_decode($row->ticket_id))->update($data);
          $setting = DB::table('setting')->first();
        $competition = Package::all()->where('soft_delete', 0)->where('mc_id','>',0)->random($setting->buy_more_comp);
        $data = array('setting'=>$setting, 'competition'=>$competition, 'user'=>$user);

// 			$email = "acc";
            Mail::send(['html'=>'emails.purchase_email'], $data, function($message) use($user) {
                $message->to($user->email, 'Prize Maker')->subject
                ('Purchase Ticket');
                $setting = DB::table('setting')->first();
                $message->from($setting->email,'Prize Maker');
            });
    }

        }
    }

    public function add_credit_payments(Request $request)
    {
        if (!Auth::check())
           return redirect('/');
        try {
         $price=0;
                $ticket_id=[];
        $cart=Cart::where('user_id','=',Auth::user()->id)->get();
        foreach ($cart as $key => $value) {
            $ticket=Ticket::where(['id'=>$value->ticket_id])->first();
            $price+=$ticket ? $ticket->paid_price:0;
            $ticket_id[]=$value->ticket_id;
        }
        $commission = DB::table('setting')->first();
        $fdate = Auth::user()->created_at;
        $tdate = Carbon\Carbon::now();
        $datetime1 = new DateTime($fdate);
        $datetime2 = new DateTime($tdate);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');



        $Payment= new Payment;
        $Payment->user_id=Auth::user()->id;
        $Payment->ticket_id=json_encode($ticket_id);
        $Payment->price=$price;
        $Payment->card_number=0;
         if($days<=60)  {
        $Payment->referrer_by=Auth::user()->referrer_by;
    }
        $Payment->status=1;
        $success=$Payment->save();
        if($success){
            $user = Auth::user();

            $total_amount = $user->referrer_amount - $price;
            DB::table('users')->where('id',$user->id)->update(['referrer_amount'=> $total_amount]);

            $fdate = $user->created_at;
            $tdate = Carbon\Carbon::now();
            $datetime1 = new DateTime($fdate);
            $datetime2 = new DateTime($tdate);
            $interval = $datetime1->diff($datetime2);
            $days = $interval->format('%a');

            if($user->referrer_by!="" && $days<=60)
            {
            $refer_id = $user->referrer_by;

            $total_price = $price;

            $total_commission = (Auth::User()->commission / 100) * $total_price;

            $previous_amount = Auth::User()->where('reference_id', $refer_id)->first();

            if($user->business_ref_commission!="" && $previous_amount->is_business_profile ==1)
            {
                $total_business_commission = (Auth::user()->business_ref_commission / 100) * $total_price;
                $total_amount = $previous_amount->total_amount + $total_business_commission + $total_commission;
                $total_ref_amount = $previous_amount->referrer_amount + $total_business_commission + $total_commission;
            }else{
            $total_amount = $previous_amount->total_amount + $total_commission;
            $total_ref_amount = $previous_amount->referrer_amount + $total_commission;
        }

            Auth::User()->where('reference_id', $refer_id)->update(['referrer_amount'=> $total_ref_amount, 'total_amount'=> $total_amount]);

            }

            Session::flash('success','Thanks for buying Tickets. Confirmation email is send to your email addreess');
            $content = array(
                'name' => "Hi $user->name",
                'message' => "Thank you for purchasing tickets",
                'link' => ''
            );
            Mail::to($user->email)->send(new Notifications($content));
            $this->empty_credit_cart(1, 1);
        }else{
             Session::flash('error','Something went wrong');
        }
       } catch (Exception $e) {
       $error = $e->getMessage();
        Session::flash('error',$error);
    }

         return redirect()->back()->withInput();
    }

    public function faqs()
    {
        $title='FAQS';
        $faqs=Faq::orderBy('id','DESC')->limit(5)->get();
        return view('faqs',compact('title','faqs'));

    }
    public function blogshow()
    {
        $title='Blog';
        $blog = Blog::orderBy('id','DESC')->limit(5)->get();
        return view('blogshow',compact('title','blog'));

    }
    public function multiCompetitions($uniqid)
    {
        $title='Multi Competitions';
        $mc = MC::where('uniqid',$uniqid)->where('soft_delete', 0)->where('start_date', '<=', date('Y-m-d'))->where('end_date', '>', date('Y-m-d'))->orderBy('title','ASC')->first();
        return view('multiCompetitions',compact('title','mc'));

    }

   public function register_user(Request $request)
    {
        $ip = $request->ip();

        if($ip=="::1" || $ip=="127.0.0.1" ){
            $position = Location::get('193.117.138.126');
        }else{
            $position = Location::get($ip);
        }

        $commission = DB::table('setting')->first();
        $email=User::where('email', $request->email)->first();
        if($email)
            return ['status'=>0,'msg'=>'You are already subscribed. Please login and share on social media to get free ticket.'];
        $pass = strlen($request->password);
        if($pass < 8 )
        return ['status'=>0,'msg'=>'Password length Should be at least 8 characters'];
        if($request->password != $request->repeat)
            return ['status'=>0,'msg'=>'Password did not match'];
        $refer = $request->refer;
        // $data = DB::table('users')->select('id')->where('id','=',$refer)->first();
        $user = new User;
        if($refer !='')
        {
            $user->referrer_by = $refer;
            $ref =User::where('reference_id', $refer)->first();
            if(empty($ref)){
                return ['status'=>0,'msg'=>'Invalid referral ID'];
            }
            $check = DB::table('users')->where('reference_id', $refer)->first();
            if($check->is_business_profile ==1){
                $user->business_ref_commission = $commission->business_ref_commission;
            }
        }
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->remember_token = Str::random(35);
        $user->status = 2;
        $user->ip_address = $ip;
        $user->ip_country = $position->countryName;


        if (isset($request->is_business_profile) && $request->is_business_profile == '1')
        {
          $user->is_business_profile   = '2';
          $user->business_name         = $request->business_name;
          $user->business_phone        = $request->business_phone;
          $user->business_facebook_url = $request->business_facebook_url;
          $user->business_twitter_url  = $request->business_twitter_url;
        }

        $success=$user->save();
        $get_user=User::where('email', $request->email)->first();
        $refer_id = Str::random(3) . $get_user->id;
        if($refer !=''){
        User::where('id', $get_user->id)->update(['commission' => $commission->commission]);
        }
        User::where('id', $get_user->id)->update(['reference_id' => $refer_id]);

        $check = DB::table('subscribers')->where('email',$get_user->email)->first();
        if(!isset($check)){
            $ip = $request->ip();
            $position = Location::get($ip);
            DB::table('subscribers')->insert(['email'=> $get_user->email, 'ip_address' => $ip, 'country' => $position->countryName, 'source' => 'Prizemaker', 'status' => 1]);

    }

        if($success){
           $email = $request->email;
           $name = $request->name;
           $link = $refer_id;

//            Auth::login($user);

            //// replace random_user_id with new one
            if(isset($_COOKIE['random_user_id'])) {
                $random_user_id = $_COOKIE['random_user_id'];
                Cart::where('user_id', $random_user_id)->update(array('user_id' => $get_user->id));
                Ticket::where('user_id', $random_user_id)->update(array('user_id' => $get_user->id));
                DB::table('user_activity')->where('user_email', 'LIKE', '%' . $random_user_id . '%')->update(['user_email' => $get_user->email]);
            }

        $setting = DB::table('setting')->first();


        $email_data = array('name' => $name, 'link' => $link, 'commission' => $setting->commission, 'ref_friend_string' => $setting->ref_friend_string, 'business_ref_commission' => $setting->business_ref_commission, 'buz_comsion_string' => $setting->buz_comsion_string, 'setting'=>$setting);

        $test = Mail::send(['html'=>'confirmation_email'], $email_data, function($message) use($email ) {
                  $message->to($email)->subject('Registration Confirmation Email');
                  $setting = DB::table('setting')->first();
                  $message->from($setting->email,'Prize Maker Registration');
             });
           return ['status'=>1,'msg'=>'Email is sent for Confirmation, Check Spam also.'];
        }else{
            return ['status'=>0,'msg'=>'User not registered'];
        }

    }

    public function register_free_user(Request $request)
    {

        $ip = $request->ip();

        if($ip=="::1"){
            $position = Location::get('193.117.138.126');
        }else{
            $position = Location::get($ip);
        }

        $setting = DB::table('setting')->first();
        $email=User::where('email', $request->email)->first();
        if($email)
            return ['status'=>0,'msg'=>'Email already in use'];
        // $pass = strlen($request->password);
        // if($pass < 8 )
        // return ['status'=>0,'msg'=>'Password length Should be at least 8 characters'];
        // if($request->password != $request->repeat)
        //     return ['status'=>0,'msg'=>'Password did not match'];
        $password = Str::random(8);
        $refer = $request->refer;
        // $data = DB::table('users')->select('id')->where('id','=',$refer)->first();
        $user = new User;
        if($refer !='')
        {
            $user->referrer_by = $refer;
            $ref =User::where('reference_id', $refer)->first();
            if(empty($ref))
                return ['status'=>0,'msg'=>'Invalid referral ID'];
        }


        $referrer_type = $request->referrer_type;
        if(strcasecmp($referrer_type, "business") == 0) {
            $user->business_ref_commission = $setting->business_ref_commission;
        }
        $user->password = Hash::make($password);
        $user->commission = $setting->commission;
        $user->email = $request->email;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->referrer_by = $request->refer_idd;
        $user->remember_token = Str::random(35);
        $user->status = 1;
        $user->social = $request->social;
        $user->ip_address = $ip;
        $user->ip_country = $position->countryName;
        $success=$user->save();
        $get_user=User::where('email', $request->email)->first();
        $refer_id = Str::random(3) . $get_user->id;
        User::where('id', $get_user->id)->update(['reference_id' => $refer_id]);

        $check = DB::table('subscribers')->where('email',$get_user->email)->first();

        if(!isset($check)){
             $ip = $request->ip();
            $position = Location::get($ip);
            DB::table('subscribers')->insert(['email'=> $get_user->email, 'ip_address' => $ip, 'country' => $position->countryName, 'source' => 'Prizemaker', 'status' => 1]);
    }

         $check = DB::table('freecomps')->where('package_id', $request->package_idd)->where('user_id',$get_user->id)->first();
            $package = DB::table('packages')->where('uniqid',$request->package_idd)->first();
            $freecom = DB::table('multi_competition')->where('id',$package->mc_id)->first();
            if($check){

            }
            else{
                $fre_allow = MC::where('freeticket',1)->where('id',$freecom->id)->first();
            if($fre_allow) {

                $freecomp = new Freecomp;

                $freecomp->package_id = $request->package_idd;
                $freecomp->user_id = $get_user->id;
                $mc = DB::table('freecomps')->where('mc_id',$freecom->id)->where('is_winner',1)->first();
                if($mc){  $freecomp->is_winner = 2;}
                $freecomp->mc_id = $freecom->id;
                $freecomp->comingfrom = $request->social;

                $success = $freecomp->save();
            }
            }
        if($success){

            //// replace random_user_id with new one
            if(isset($_COOKIE['random_user_id'])) {
                $random_user_id = $_COOKIE['random_user_id'];
                Cart::where('user_id', $random_user_id)->update(array('user_id' => $get_user->id));
                Ticket::where('user_id', $random_user_id)->update(array('user_id' => $get_user->id));
                DB::table('user_activity')->where('user_email', 'LIKE', '%' . $random_user_id . '%')->update(['user_email' => $get_user->email]);
            }

//            Auth::login($user);
           $email = $request->email;
           $name = $request->name;
           $link = $refer_id;

        $setting = DB::table('setting')->first();

        $email_data = array('name' => $name, 'link'=>$link, 'password' => $password,'email'=>$email, 'setting'=>$setting );

        $test = Mail::send(['html'=>'password_email'], $email_data, function($message) use($email ) {
                  $message->to($email)->subject('Registration Password');
                  $setting = DB::table('setting')->first();
                  $message->from($setting->email,'Prize Maker Registration');
             });
           return ['status'=>1,'msg'=>'Congratulations you particpate for free ticket and Password is send to your email'];
        }else{
            return ['status'=>0,'msg'=>'User not registered'];
        }

    }

    public function login(Request $request)
    {
         $email     = $request->email;
         $password  = $request->password;
         $user_role = 0;
         $request->user_role=$user_role;
         $users = DB::table('users')->where('email',$email)->first();
         if(!isset($users))
            {
                return ['status'=>0,'msg'=>'You have enter the wrong Email'];
            }
            if($users->soft_delete == 1)
            {
                return ['status'=>0,'msg'=>' You are no longer a user of this website. Contact your administrator.'];
            }
            if($users->status == 0)
            {
                return ['status'=>0,'msg'=>' Your account is inactive. Contact your administrator to activate it'];
            }
            if($users->status == 2)
            {
                return ['status'=>0,'msg'=>'Your Email verification still pending, Check Spam also.'];
            }

        if (Auth::attempt($request->only('email', 'password','user_role'))) {

            $user =Auth::user();
             Auth::login($user);
            //// replace random_user_id with new one
            if(isset($_COOKIE['random_user_id'])) {
                $random_user_id = $_COOKIE['random_user_id'];
                Cart::where('user_id', $random_user_id)->update(array('user_id' => $user->id));
                Ticket::where('user_id', $random_user_id)->update(array('user_id' => $user->id));
                DB::table('user_activity')->where('user_email', 'LIKE', '%' . $random_user_id . '%')->update(['user_email' => $user->email]);
            }
             return ['status'=>1,'msg'=>'Succesfully Loggedin'];
        } else {
            return ['status'=>0,'msg'=>'You have enter the wrong Password'];
        }

    }

    public function ldlogin(Request $request)
    {
         $email     = $request->email;
         $password  = $request->password;
         $user_role = 0;
         $request->user_role=$user_role;

         $users = DB::table('users')->where('email',$email)->where('soft_delete', 0)->first();
         if($users=="")
            {
                return ['status'=>0,'msg'=>'You have enter the wrong Email'];
            }
            if($users->status==0)
            {
                return ['status'=>0,'msg'=>' Your account is inactive. Contact your administrator to activate it'];
            }
            if($users->status==2)
            {
                return ['status'=>0,'msg'=>'Your Email verification still pending'];
            }

            $check = DB::table('freecomps')->where('package_id', $request->package_idd)->where('user_id',$users->id)->first();
            $package = DB::table('packages')->where('uniqid',$request->package_idd)->where('soft_delete', 0)->first();
            $freecom = DB::table('multi_competition')->where('id',$package->mc_id)->where('soft_delete', 0)->first();
            if($check){

            }
            else{
                $fre_allow = MC::where('freeticket',1)->where('id',$freecom->id)->first();
            if($fre_allow) {

                $freecomp = new Freecomp;

                $freecomp->package_id = $request->package_idd;
                $freecomp->user_id = $users->id;
                $mc = DB::table('freecomps')->where('mc_id',$freecom->id)->where('is_winner',1)->first();
                if($mc){  $freecomp->is_winner = 2;}
                $freecomp->mc_id = $freecom->id;
                $freecomp->comingfrom = $request->socialist;

                $success = $freecomp->save();


            }
            }

        if (Auth::attempt($request->only('email', 'password','user_role'))) {

            $user =Auth::user();
             Auth::login($user);
            //// replace random_user_id with new one
            if(isset($_COOKIE['random_user_id'])) {
                $random_user_id = $_COOKIE['random_user_id'];
                Cart::where('user_id', $random_user_id)->update(array('user_id' => $user->id));
                Ticket::where('user_id', $random_user_id)->update(array('user_id' => $user->id));
                DB::table('user_activity')->where('user_email', 'LIKE', '%' . $random_user_id . '%')->update(['user_email' => $user->email]);
            }
             return ['status'=>1,'msg'=>'Succesfully Loggedin'];
        } else {
            return ['status'=>0,'msg'=>'You have enter the wrong Password'];
        }

    }
    public function livecompetition()
    {
        return view('livecompition');
    }
    public function terms()
    {
        $data['title']= 'Terms';
        return view('terms',$data);
    }
    public function privacy()
    {
        $data['title']= 'Privacy Policy';
        return view('privacy',$data);
    }
    public function subscriber()
    {
        $data['title']= 'Subscriber';
        return view('subscriber',$data);
    }
    public function howtoplay()
    {
        return view('howplay');
    }

    public function show_setting()

    {
        $user = Auth::user();
        if($user->user_role==0)
        {
            return redirect('/');
        }
        $setting = DB::table('setting')->first();
        return view('admin.setting.home', compact('setting'));
    }

    public function store_setting(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());exit;

        $user = Auth::user();
        if($user->user_role==0)
        {
            return redirect('/');
        }
        if($request->input('commission') > 50){
          return redirect('admin/setting')->with('alert', 'Commission percentage less then equal to 50')->withInput();
        }
        if($request->input('business_ref_commission') > 50){
          return redirect('admin/setting')->with('alert', 'Business referral commission percentage less then equal to 50')->withInput();
        }
        if($request->admin_password !="")
        {

            $pass = strlen($request->admin_password);
                if($pass < 8 )
                {
                    return redirect()->back()->with('alert', 'Password length Should be at least 8 characters')->withInput();
                }
            $user = User::where('user_role',1)->first();
            $user->password = Hash::make($request->admin_password);
            $user->save();
        }

        $update = DB::table('setting')->first();
         $setting = array(
            'commission' => $request->input('commission'),
            'business_ref_commission' => $request->input('business_ref_commission'),
            'address' => $request->input('address'),
            'company_number' => $request->input('company_number'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'facebook_link' => $request->input('facebook_link'),
            'twitter_link' => $request->input('twitter_link'),
            'youtube_link' => $request->input('youtube_link'),
            'instagram_link' => $request->input('instagram_link'),
            'meta_title' => $request->input('meta_title'),
            'meta_description' => $request->input('meta_description'),
            'meta_keywords' => $request->input('meta_keywords'),
            'free_entry_label' => $request->input('free_entry_label'),
            'ref_friend_string' => $request->input('refer_friend_string'),
            'buz_comsion_string' => $request->input('buz_commision_string'),
            'all_competation' => $request->input('description'),
            'purchase_email_title_1' => $request->input('purchase_email_title_1'),
            'purchase_email_title_2' => $request->input('purchase_email_title_2'),
            'purchase_email_text_1' => $request->input('purchase_email_text_1'),
            'purchase_email_text_2' => $request->input('purchase_email_text_2'),
            'buy_more_comp' => $request->input('buy_more_comp'),
            'heading1' => $request->input('heading1'),
            'subscriber_cron_job' => $request->input('subscriber_cron_job'),
            // 'block1' => $request->input('module1'),
            // 'heading2' => $request->input('heading2'),
            // 'block2' => $request->input('module2'),
            // 'heading3' => $request->input('heading3'),
            // 'block3' => $request->input('module3'),
            // 'heading4' => $request->input('heading4'),
            // 'block4' => $request->input('module4'),
            // 'heading5' => $request->input('heading5'),
            // 'block5' => $request->input('module5'),
            // 'heading6' => $request->input('heading6'),
            // 'block6' => $request->input('module6'),
            'update_at' => Carbon::now()->toDateTimeString(),
        );
        if($update){
            $success = DB::table('setting')->update($setting);
            if($success){
        return redirect('admin/setting')->with('success', 'Update Successfully!')->withInput();
        }else{
         return redirect('admin/setting')->with('alert', 'Setting not Update!')->withInput();
        }
        }else{
        $success = DB::table('setting')->insert($setting);
        if($success){
        return redirect('admin/setting')->with('success', 'Save Successfully!')->withInput();
        }else{
         return redirect('admin/setting')->with('alert', 'Setting not Save!')->withInput();
        }
        }
    }

    public function commision_view($refer_id)
    {
        $percentage = DB::table('setting')->first();

        $commission_detail = DB::table('payments')
                                ->select('payments.*', 'users.name','users.email','users.commission','users.business_ref_commission')
                                ->leftJoin('users','payments.user_id','=','users.id')
                                ->where('payments.referrer_by', $refer_id)->get();

        return view('commission_detail' , compact('commission_detail','percentage'));
    }

    public function refer_friend()
    {
        $setting = DB::table('setting')->first();
        return view('refer_friend', compact('setting'));
    }


    public function profile_update(Request $request, $id)
    {
        $data = User::where("id", $id)->first();

        $test = $data->image_name;


        if($request->password!=""){
            if($request->password != $request->rpassword)
                    {
                return redirect('profile')->with('alert', 'Password did not match!');
                    }
                    else{
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


                // Check to see if validation fails or passes
                if ($validator->fails())
                {
                      return redirect()->back()->with('alert','Upload Image only')->withInput();
                }
                    $destinationpath=public_path("img/$test");
                    File::delete($destinationpath);
                    $file=$request->file('images');
                    $filename = str_replace(' ', '', $file->getClientOriginalName());
                    $ext=$file->getClientOriginalExtension();
                    $imgname=uniqid().$filename;
                    $destinationpath=public_path('img');
                    $file->move($destinationpath,$imgname);
                }
                else{
                    $imgname =$request->profile_image;
                }

                $record = array(
                "name" => $request->input('uname'),
                "phone" => $request->input('phone'),
                "email" => $request->input('email'),
                "business_name" => $request->input('business_name'),
                "business_phone" => $request->input('business_phone'),
                "business_facebook_url" => $request->input('business_facebook_url'),
                "business_twitter_url" => $request->input('business_twitter_url'),
                "city" => $request->input('city'),
                "postal_code" => $request->input('postal_code'),
                "address" => $request->input('address'),
                "image_name" => $imgname,
                );
            if($request->input('password')) {
                $record['password'] = bcrypt($request->input('password'));
            }
                User::where("id", $id)->update($record);

                return redirect("profile")->with('success', 'Profile Updated!');
            }
        }else{
             if($request->password != $request->rpassword)
                    {
                return redirect('profile')->with('success', 'Password did not match!');
                    }
                    else{
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


                // Check to see if validation fails or passes
                if ($validator->fails())
                {
                      return redirect()->back()->with('alert','Upload Image only');
                }
                    $destinationpath=public_path("img/$test");
                    File::delete($destinationpath);
                    $file=$request->file('images');
                    $filename = str_replace(' ', '', $file->getClientOriginalName());
                    $ext=$file->getClientOriginalExtension();
                    $imgname=uniqid().$filename;
                    $destinationpath=public_path('img');
                    $file->move($destinationpath,$imgname);
                }
                else{
                    $imgname =$request->profile_image;
                }
                $res = $request->input('payment-option');
                if($res == 1){
                    $business_profile = 2;
                }
                else{
                    $business_profile = 0;
                }
                $record = array(
                "name" => $request->input('uname'),
                "business_name" => $request->input('business_name'),
                "business_phone" => $request->input('business_phone'),
                "business_facebook_url" => $request->input('business_facebook_url'),
                "business_twitter_url" => $request->input('business_twitter_url'),
                "phone" => $request->input('phone'),
                "is_business_profile" => $business_profile,
                "email" => $request->input('email'),
                "city" => $request->input('city'),
                "postal_code" => $request->input('postal_code'),
                "address" => $request->input('address'),
                "image_name" => $imgname,
            );
            if($request->input('password')) {
                $record['password'] = bcrypt($request->input('password'));
            }
                User::where("id", $id)->update($record);

                return redirect("profile")->with('success', 'Profile Updated!');;
            }
        }
    }

    public function refer_email(Request $request)
    {
        $refer_friend = $request->friend_name;
        $email = $request->email;


        if($refer_friend=="")
        {
            return redirect('refer_friend')->with('alert', 'You Forgot to enter the Name!')->withInput();
        }

        if($email=="")
        {
            return redirect('refer_friend')->with('alert', 'You Forgot to enter the Email!')->withInput();
        }

        $user = Auth::user();
        if($email == $user->email){
            return redirect('refer_friend')->with('alert', 'You cannot refer youself.')->withInput();
        }
        $res = DB::table('refer_friend')->where('friend_email', $email)->first();
        if($res){
            return redirect('refer_friend')->with('alert', 'Already referred.')->withInput();
        }
        $user_table_res = DB::table('users')->where('email', $email)->first();
        if($user_table_res){
            return redirect('refer_friend')->with('alert', 'Already registered user.')->withInput();
        }
        $data = array(
            "user_id"      => $user->id,
            "friend_name"  => $refer_friend,
            "friend_email" => $email,
        );
        $done = DB::table('refer_friend')->insert($data);

        $name = $refer_friend;
        $link = $user->reference_id;
        $user_name =  $user->name;

        $setting = Db::table('setting')->first();

        // $data = array('name' => $name, 'link' => $link,  'user_name' => $user_name,  'commission' => $setting->commission, 'ref_friend_string' => $setting->ref_friend_string, 'business_ref_commission' => $setting->business_ref_commission, 'buz_comsion_string' => $setting->buz_comsion_string,);


        // $success = Mail::send(['html'=>'test_email'], $data, function($message) use($email ) {
        //           $message->to($email, 'Prize Maker')->subject
        //              ('Invitation link');
        //           $setting = DB::table('setting')->first();
        //           $message->from($setting->email,'Prize Maker');
        //      });
        $today = date('Y-m-d');

        $related_package = DB::table('packages')->where('featured',"yes")->where('mc_id','!=',0)->where('status', 1)->where('packages.soft_delete', 0)->join('multi_competition', 'packages.mc_id', '=', 'multi_competition.id')->where('multi_competition.end_date', '>', $today)->select('packages.*')->get();

        $data = array('name' => $name, 'link' => $link,  'user_name' => $user_name,'setting'=>$setting,'related_package'=>$related_package);


        $success = Mail::send(['html'=>'new_email_template.refer_friend_email'], $data, function($message) use($email ) {
                  $message->to($email, 'Prize Maker')->subject
                     ('Invitation link');
                  $setting = DB::table('setting')->first();
                  $message->from($setting->email,'Prize Maker');
             });

        return redirect('refer_friend')->with('success', 'Mail sent Successfully!');
    }

    public function register_page(Request $request, $id)
    {
        $refer_id = $id;
        if(Auth::check()){
            return redirect('/');
        }
        $refer_id = request()->segment(2);
        $request->session()->put('refer_id', $refer_id);
        $setting = DB::table('setting')->first();
        return view('test', compact('refer_id','setting', 'refer_id'));
    }

    public function login_page(Request $request)
    {
        if(Auth::check()){
            return redirect('/');
        }
        return view('external_login');
    }

    public function social_register(Request $request, $id, $social)
    {
        if(Auth::check()){
            return redirect('/');
        }
        $refer_id = request()->segment(2);
        $request->session()->put('refer_id', $refer_id);
        $setting = DB::table('setting')->first();
        return view('external_register', compact('refer_id', 'social','setting'));
    }

    public function external_registerr(Request $request, $id)
    {

         if(Auth::check()){
            return redirect('/');
        }
        $refer_id = request()->segment(2);
        $request->session()->put('refer_id', $refer_id);
        $setting = DB::table('setting')->first();
        return view('external_register', compact('refer_id','setting'));
    }

    public function register_ext_user(Request $request)
    {
        $ip = $request->ip();

        if($ip=="::1"){
            $position = Location::get('193.117.138.126');
        }else{
            $position = Location::get($ip);
        }


        $commission = DB::table('setting')->first();
        $email=User::where('email', $request->email)->first();
        if($email)
            return ['status'=>0,'msg'=>'Email already in use'];
        $pass = strlen($request->password);
        if($pass < 8 )
        return ['status'=>0,'msg'=>'Password length Should be at least 8 characters'];
        if($request->password != $request->repeat)
            return ['status'=>0,'msg'=>'Password did not match'];
        $refer = $request->refer;
        // $data = DB::table('users')->select('id')->where('id','=',$refer)->first();
        $user = new User;
        if($refer !='')
        {
            $user->referrer_by = $refer;
            $check = DB::table('users')->where('reference_id', $refer)->first();
            if($check->is_business_profile ==1){
                $user->business_ref_commission = $commission->business_ref_commission;
            }
        }


        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->name = $request->name;
        if (isset($request->is_business_profile) && $request->is_business_profile == '1')
        {
          $user->is_business_profile   = '2';
          $user->business_name         = $request->business_name;
          $user->business_phone        = $request->business_phone;
          $user->business_facebook_url = $request->business_facebook_url;
          $user->business_twitter_url  = $request->business_twitter_url;
        }
        $user->phone = $request->phone;
        $user->status = 2;
        $user->remember_token = Str::random(35);
        $user->reference_id = Str::random(3);
        $user->social = $request->social;
        $user->ip_address = $ip;
        $user->ip_country = $position->countryName;
        $success=$user->save();
        $get_user=User::where('email', $request->email)->first();
        $refer_id = $get_user->reference_id . $get_user->id;
        User::where('id', $get_user->id)->update(['reference_id' => $refer_id, 'commission'=> $commission->commission]);

        $checks = DB::table('subscribers')->where('email',$get_user->email)->first();

        if(!isset($checks)){
        $ip = $request->ip();
            $position = Location::get($ip);
            DB::table('subscribers')->insert(['email'=> $get_user->email, 'ip_address' => $ip, 'country' => $position->countryName, 'source' => 'Prizemaker', 'status' => 1]);
    }
        if($success){
            // Auth::login($user);
            //// replace random_user_id with new one
            if(isset($_COOKIE['random_user_id'])) {
                $random_user_id = $_COOKIE['random_user_id'];
                Cart::where('user_id', $random_user_id)->update(array('user_id' => $get_user->id));
                Ticket::where('user_id', $random_user_id)->update(array('user_id' => $get_user->id));
                DB::table('user_activity')->where('user_email', 'LIKE', '%' . $random_user_id . '%')->update(['user_email' => $get_user->email]);
            }

           $email = $request->email;
           $name = $request->name;
           $link = $refer_id;

        $setting = DB::table('setting')->first();


        $email_data = array('name' => $name, 'link' => $link, 'commission' => $setting->commission, 'ref_friend_string' => $setting->ref_friend_string, 'business_ref_commission' => $setting->business_ref_commission, 'buz_comsion_string' => $setting->buz_comsion_string,'setting'=>$setting);

        $test = Mail::send(['html'=>'confirmation_email'], $email_data, function($message) use($email ) {
                  $message->to($email, 'Prize Maker')->subject
                     ('Registration Confirmation Email');
                   $setting = DB::table('setting')->first();
                   $message->from($setting->email,'Prize Maker');
             });
           return ['status'=>1,'msg'=>'Email is sent for Confirmation, Check Spam also.'];
        }else{
            return ['status'=>0,'msg'=>'User not registered'];
        }

    }

    public function forgetpassword(Request $request)
    {
        $email = $request->reset_email;
        $check_email = DB::table('users')->where('email',$email)->where('soft_delete', 0)->first();
        if($check_email=="")
        {
            return ['status'=>0,'msg'=>'Please enter the valid Email'];
        }

        $link = $check_email->remember_token;
        $name = $check_email->name;
        $setting = DB::table('setting')->first();

        $data = array( 'link' => $link, 'name' => $name, 'setting'=> $setting );

        $success = Mail::send(['html'=>'reset_password'], $data, function($message) use($email) {
                  $message->to($email, 'Prize Maker')->subject
                     ('Reset Password');
                  $setting = DB::table('setting')->first();
                  $message->from($setting->email,'Prize Maker');
             });
         return ['status'=>1,'msg'=>'Email for forgot password sent successfully'];
    }

    public function reset_password(Request $request)
    {
        $remember_token = request()->segment(2);
        return view('reset_page', compact('remember_token'));
    }

    public function sending_resetpassword(Request $request)
    {
        $token = $request->remember_token;
        $pass = strlen($request->reset_password);
        if($pass < 8 )
        return redirect()->back()->with('alert','Password length Should be at least 8 characters');

        if($request->input('reset_password')) {
            $record = array(
                "password"=> bcrypt($request->input('reset_password')),
            );
        }
        $success = DB::table('users')->where('remember_token',$token)->where('soft_delete', 0)->update($record);
        if ($success) {
            return redirect('/')->with('alert', 'Password is reset!');
        } else {
            return redirect('/')->with('danger', 'Password is not reset!');
        }
    }

    public function winners()
    {
        $data = DB::table('winner')->get();
        $title = 'Winners';
        return view('winners', compact('data', 'title'));
    }
    public function serarch(Request $request)
    {
        $name = $request->input('search');
        $data = DB::table('winner')->Where('title', 'LIKE', '%' . $name . '%')->get();
        $title = 'Search';
        return view('winners', compact('data', 'title'));
    }
    public function livedraws() {
        // $data['livedrawProducts']=Package::where('end_date', '<', date('Y-m-d H:i:s'))->get();
        // $data['livedrawProducts']=Package::where('end_date', '<', date('Y-m-d H:i:s'))->get();
        // print_r($data['livedrawProducts']);
        // exit();
        $data['livedrawProducts']=MC::where('end_date', '<', date('Y-m-d H:i:s'))->where('iframe_status',1)->get();
    //     $data ['livedrawProducts'] = DB::table('winner')
    //   ->join('packages', 'packages.id', '=', 'winner.product_id')
    //     ->get();

        // print_r($data ['livedrawProducts']);
        // exit();
         // $data ['livedrawProducts'] = DB::table('winner')->get();
        $data['title'] = 'livedraws';
        return view('livedraws', $data);
    }

    public function detail($id)
    {

        $data = DB::table('multi_competition')->where('uniqid',$id)->first();
        $title = 'livedraws Detail';
        return view('live', compact('data','title'));
    }

    public function free_entry($id)
    {
        $product_id = DB::table('packages')->where('uniqid',$id)->first();
        $tickets = DB::table('tickets')->where('product_id',$product_id->id)->where('status',0)->get();

        return view('free_entry', compact('tickets', 'id') );
    }

    public function store_free_entry(Request $request, $id)
    {
        $tickets_id = Input::get('states');
        $days = $request->days;
        $month = $request->month;
        $year = $request->year;
        $dob = $days.'-'.$month.'-'.$year;
        $user = Auth::user();
        // $ticket_code = DB::table('tickets')->where('id', $tickets_id)->first();
       ;
        if($dob=="01-01-1900" && $user->dob=="")
        {
            return redirect('free_entry/'.$id)->with('alert', 'You forgot to enter the DOB!')->withInput();
        }
        if($tickets_id== 0)
        {
            return redirect('free_entry/'.$id)->with('alert', 'You forgot to select a Ticket!')->withInput();
        }
        $code = implode(",", $tickets_id);
        if($dob!="01-01-1900")
        {
        $data = array(
            "name"=>$request->uname,
            "address"=>$request->address,
            "phone"=>$request->phone,
            "dob"=>$dob,
        );
    }else{
         $data = array(
            "name"=>$request->uname,
            "address"=>$request->address,
            "phone"=>$request->phone,
        );
    }
        $success = DB::table('users')->where('id',$user->id)->update($data);

        $user_dob =DB::table('users')->where('id',$user->id)->first();

        if ($success || $tickets_id!=0) {
            // DB::table('tickets')->where('id',$tickets_id)->update(['status'=>1]);
        $name = $request->uname;
        $address =  $request->address;
        $phone =  $request->phone;
        $days = $request->days;
        $month = $request->month;
        $year = $request->year;
        $dob = $user_dob->dob;
        // $tickets = $ticket_code->code;
        $email = 'muhammad.wakeel1989@gmail.com';

        $email_data = array('name' => $name, 'address' => $address, 'phone' => $phone, 'email_dob' => $dob, 'tickets' => $code,);

        $test = Mail::send(['html'=>'ticket_email'], $email_data, function($message) use($email ) {
                  $message->to($email, 'Prize Maker')->subject
                     ('Signup Confirmation');
                  $setting = DB::table('setting')->first();
                  $message->from($setting->email,'Prize Maker');
             });
            return redirect('free_entry/'.$id)->with('success', 'Email is send to Admin for confirmation!');
        } else {
            return redirect('free_entry/'.$id)->with('alert', 'There is nothing to send!')->withInput();
        }

        // $success = DB::table('users')->where()
    }

    public function email_confirmation($id)
    {

        $success = DB::table('users')->where('reference_id',$id)->update(['status'=>1]);

        if($success)
        {
            return redirect('/login_page')->with('alert', 'Your Email verification Successful.');
        }
        else{
            return redirect('/login_page')->with('danger', 'Your Email verification is not completed!');

        }
    }

    public function show_refer()
    {
        if (Auth::check())
        {
            $refer_id = Auth::user()->reference_id;
            $total_refer = DB::table('users')->where('referrer_by',$refer_id)->get();

            return view('show_refer', compact('total_refer'));
        }
        else
        {
            return redirect('login');
        }

    }

    public function register_as_business (Request $request)
    {
        $user_id     = $request->input('uid');
        $user_info   = DB::table('users')->where('id', $user_id)->first();
        $user_email  = $user_info->email;
        $user_name   = $user_info->name;
        $admin_email = DB::table('setting')->pluck('email')->first();

        DB::Table('users')->where('id', $user_id)->update(['is_business_profile' => '2']);

        $data['user_name'] = $user_name;
        Mail::send(['html'=>'business_request_inform'], $data, function($message) use($user_email, $user_name, $admin_email) {
            $message->to($admin_email, $user_name)->subject
               ('New Business Request');
            $setting = DB::table('setting')->first();
            $message->from($setting->email,'Prize Maker');
        });

        Mail::send(['html'=>'request_received_inform'], $data, function($message) use($user_email, $user_name, $admin_email) {
            $message->to($user_email, $user_name)->subject
               ('Request Received');
            $setting = DB::table('setting')->first();
            $message->from($setting->email,'Prize Maker');
        });

        return response()->json(['status' => 'success', 'msg' => 'Business Profile successfully activated']);
    }

    public function register_subscriber(Request $request){
         $ip = $request->ip();

        if($ip=="::1"){
            $position = Location::get('193.117.138.126');
        }else{
            $position = Location::get($ip);
        }

        $setting = DB::table('setting')->first();
        $email=User::where('email', $request->subscribe_email)->first();
        if($email){
            return ['status'=>0,'msg'=>'Email already in use'];
        }

        $password = Str::random(8);
        $refer = $request->refer;
        // $data = DB::table('users')->select('id')->where('id','=',$refer)->first();
        $user = new User;
        if($refer !='')
        {
            $user->referrer_by = $refer;
            $ref =User::where('reference_id', $refer)->first();
            if(empty($ref))
                return ['status'=>0,'msg'=>'Invalid referral ID'];
        }


        $referrer_type = $request->referrer_type;
        if(strcasecmp($referrer_type, "business") == 0) {
            $user->business_ref_commission = $setting->business_ref_commission;
        }
        $user->password = Hash::make($password);
        $user->commission = $setting->commission;
        $user->email = $request->subscribe_email;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->referrer_by = $request->refer_idd;
        $user->remember_token = Str::random(35);
        $user->status = 1;
        $user->social = $request->social;
        $user->ip_address = $ip;
        $user->ip_country = $position->countryName;
        $success=$user->save();
        $get_user=User::where('email', $request->subscribe_email)->first();
        $refer_id = Str::random(3) . $get_user->id;
        User::where('id', $get_user->id)->update(['reference_id' => $refer_id]);

        $check = DB::table('subscribers')->where('email',$get_user->email)->first();

        if(!isset($check)){
            $ip = $request->ip();
	        $position = Location::get($ip);
            DB::table('subscribers')->insert(['email'=> $get_user->email, 'ip_address' => $ip, 'country' => $position->countryName, 'source' => 'Prizemaker', 'status' => 1]);

    }
        if($success){
//            Auth::login($user);

            //// replace random_user_id with new one
            if(isset($_COOKIE['random_user_id'])) {
                $random_user_id = $_COOKIE['random_user_id'];
                Cart::where('user_id', $random_user_id)->update(array('user_id' => $get_user->id));
                Ticket::where('user_id', $random_user_id)->update(array('user_id' => $get_user->id));
                DB::table('user_activity')->where('user_email', 'LIKE', '%' . $random_user_id . '%')->update(['user_email' => $get_user->email]);
            }

           $email = $request->subscribe_email;
           $name = $request->name;
           $link = $refer_id;


           ///////
        $admin = User::where('id',$get_user->id)->first();
        $check = DB::table('freecomps')->where('package_id', $request->product_id)->where('user_id',$get_user->id)->first();
        $package = DB::table('packages')->where('id',$request->product_id)->first();

        if ($check)
        {
          echo "Not";
        }elseif ($admin->user_role==1) {
            echo "admin";
        }
        else {
            $fre_allow = MC::where('freeticket',1)->where('id',$package->mc_id)->first();
            if($fre_allow) {
                $freecomp = new Freecomp;

                $freecomp->package_id = $package->uniqid;
                $freecomp->user_id = $get_user->id;
                $freecomp->mc_id = $package->mc_id;
                $freecomp->comingfrom = "subscriber";
                $mc = DB::table('freecomps')->where('mc_id',$package->mc_id)->where('is_winner',1)->first();
                if($mc){  $freecomp->is_winner = 2;}

               $freecomp->save();
           }
        }

           ///////

           $setting = DB::table('setting')->first();


        $email_data = array('name' => $name, 'link' => $link, 'password' => $password,'email'=>$email, 'setting'=>$setting );

        $test = Mail::send(['html'=>'password_email'], $email_data, function($message) use($email ) {
            $message->to($email)->subject('Registration Password');
            $setting = DB::table('setting')->first();
            $message->from($setting->email,'Prize Maker Registration');
             });
           return ['status'=>1,'msg'=>'Congratulations you have won a free ticket and Register Successfully. Password is send to your email'];
        }else{
            return ['status'=>0,'msg'=>'User not registered'];
        }
    }

    public function register_and_sub_user(Request $request){
        $ip = $request->ip();

        if($ip=="::1"){
            $position = Location::get('193.117.138.126');
        }else{
            $position = Location::get($ip);
        }

        $setting = DB::table('setting')->first();
        $email = User::where('email', $request->email)->first();
        if($email){
            return ['status'=> 0,'msg'=>'Email already in use'];
        }
        $password = Str::random(8);
        $refer = $request->refer;
        $user = new User;
        if($refer !='')
        {
            $user->referrer_by = $refer;
            $ref =User::where('reference_id', $refer)->first();
            if(empty($ref))
                return ['status'=>0,'msg'=>'Invalid referral ID'];
        }

        $referrer_type = $request->referrer_type;
        if(strcasecmp($referrer_type, "business") == 0) {
            $user->business_ref_commission = $setting->business_ref_commission;
        }
        $user->password = Hash::make($password);
        $user->commission = $setting->commission;
        $user->email = $request->email;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->referrer_by = $request->refer_idd;
        $user->remember_token = Str::random(35);
        $user->status = 1;
        $user->social = $request->social;
        $user->ip_address = $ip;
        $user->ip_country = $position->countryName;
        $success=$user->save();
        $get_user=User::where('email', $request->email)->first();
        $refer_id = Str::random(3) . $get_user->id;
        User::where('id', $get_user->id)->update(['reference_id' => $refer_id]);

        $check = DB::table('subscribers')->where('email',$get_user->email)->first();

        if(!isset($check)){
        $ip = $request->ip();
            $position = Location::get($ip);
            DB::table('subscribers')->insert(['email'=> $get_user->email, 'ip_address' => $ip, 'country' => $position->countryName, 'source' => 'Prizemaker', 'status' => 1]);
    }
        if($success){
           $email = $request->email;
           $name = $request->name;
           $link = $refer_id;

            //// replace random_user_id with new one
            if(isset($_COOKIE['random_user_id'])) {
                $random_user_id = $_COOKIE['random_user_id'];
                Cart::where('user_id', $random_user_id)->update(array('user_id' => $get_user->id));
                Ticket::where('user_id', $random_user_id)->update(array('user_id' => $get_user->id));
                DB::table('user_activity')->where('user_email', 'LIKE', '%' . $random_user_id . '%')->update(['user_email' => $get_user->email]);
            }

//        Auth::login($user);

        $email_data = array('name' => $name, 'link' => $link, 'password' => $password,'email'=>$email, 'setting'=>$setting );

        $test = Mail::send(['html'=>'password_email'], $email_data, function($message) use($email ) {
            $message->to($email)->subject('Registration Password');
            $setting = DB::table('setting')->first();
            $message->from($setting->email,'Prize Maker Registration');
             });
           return ['status'=>1,'msg'=>'Congratulations you have Registered Successfully. Password is send to your email, Check Spam also.'];
        }else{
            return ['status'=>0,'msg'=>'User not registered'];
        }
    }

    public function search_prize()
    {
        return view('search_prize');
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

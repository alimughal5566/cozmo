<?php

namespace App\Http\Controllers;

use App\Related_product;
use Exception;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use DB;
use Session;
use App\MC;
use Mail;
use App\Ticket;
use App\Package;
use App\PaksageImage;
use App\Freecomp;
use Illuminate\Support\Facades\Validator;
use App\User;




class MultiCompetitions extends Controller
{

    public function __construct()
    {
      //  $this->middleware('auth');


    }

/*public function freecomp(Request $request){

$freecomp = new Freecomp;

try{

$freecomp->user_id = $request->id;

$freecomp->package_id = $request->products;
$success = $freecomp->save();

    if ($success) {
                return redirect()->route('blog.admin') echo("done");
            }
            else{
                echo('no');
            }

        }catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }

*/
    public function freecomp(Request $request)
    {
        
        $admin = User::where('id',$request->id)->first();
        $check = DB::table('freecomps')->where('package_id', $request->products)->where('user_id',$request->id)->first();
        $mc_check= DB::table('freecomps')->where('mc_id', $request->mc)->where('user_id',$request->id)->first();

        if ($check)
        {
          echo "Not";
       }elseif($mc_check){
            echo "Already Participated For Free Ticket for this MultiCompetitions";
       }elseif ($admin->user_role==1) {
            echo "admin";
        }
        else {
            $fre_allow = MC::where('freeticket',1)->where('id',$request->mc)->where('soft_delete', 0)->first();
            if($fre_allow) {
           try {
                $freecomp = new Freecomp;

                $freecomp->package_id = $request->products;
                $freecomp->user_id = $request->id;
                $freecomp->mc_id = $request->mc;
                $freecomp->comingfrom = $request->fromss;
                $mc = DB::table('freecomps')->where('mc_id',$request->mc)->where('is_winner',1)->first();
                if($mc){  $freecomp->is_winner = 2;}
        $uid =  $request->id;
        $pid = $request->products;
        $mc = DB:: table('packages')->where('uniqid',$pid)->where('soft_delete', 0)->first();
        $categoryslug = DB::table('urls_categories')->where('id',$mc->url_category)->first();
        $f_info = DB:: table('users')->where('id',$uid)->first();

         $setting = DB::table('setting')->first();

        $data = array('name'=> $f_info->name, 'productname' => $mc->name, 'ProductId' => $mc->id, 'uniqueId' => $mc->slug, 'commission' => $setting->commission, 'ref_friend_string' => $setting->ref_friend_string, 'business_ref_commission' => $setting->business_ref_commission, 'buz_comsion_string' => $setting->buz_comsion_string, 'categoryslug'=>$categoryslug->slug, 'setting'=>$setting);


         //$data = array('name'=> $f_info->name, 'form_link_id' => $form_link);
         // return view('winerTicket_email', $data);
         Mail::send(['html'=>'participateTicket_email'], $data, function($message) use($f_info) {
              $message->to($f_info->email, 'Prize Maker')->subject
                 ('Winner Ticket Info');
              $setting = DB::table('setting')->first();
              $message->from($setting->email,'Prize Maker');

         });
                $success = $freecomp->save();
          if ($success) {
        echo "love";
                }
                else{
                   /* return view('admin.blog.add');*/
            echo "not sa";
                }

            }catch (\Exception $e) {

                DB::rollback();

                return redirect()->back()->withErrors(['error' => $e->getMessage()])->withInput();
            }

           }
        }


    }

    public function index()
    {
        $user = Auth::user();
        if($user->user_role==0)
        {
            return redirect('/');
        }
        $mc = MC::orderBy('title','ASC')->where('soft_delete', 0)->get();
        return view('admin.mc.home', compact("mc"));
    }

    public function iframes(Request $request)
    {

        try{
            $winerId = $request->input('prod_id');
            $Update = DB::table('multi_competition')->where('id',$winerId)->where('soft_delete', 0)->update([
                'iframe' => $request->input('iframe'),
                'iframe_status' => $request->input('iframe_status'),
            ]);


            if($Update){
                $win = $request->segment(3);
                return redirect('/MultiCompetitions');
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

    public function specfic (Request $request){
        $id = $request->id;
        $camp = Package::where('id',$id)->first();
        $main_img='';
        $img=PaksageImage::where('main_img',1)->where('package_id',$camp->id)->first();
          if($img){
          $file=public_path("products/$img->package_id/$img->name");
          if(is_file($file)){
            $main_img=url("products/$img->package_id/$img->name");
        }
        }
     $data[] = array(
        "name"=>$camp->name,
        "image"=> "<img width=70 height=50 src='".$main_img."'>",
     );
      echo json_encode($data);

    }
    public function create($id='')
    {
       if($id=="")
       {
            if(Auth::user()->user_role != 1) {
            return redirect()->back();
            }
       }
        $user = Auth::user();
        $today = date('Y-m-d');
        $competitions=Package::where('mc_id',0)->where('status',1)->where('soft_delete', 0)->get();
        // echo "<pre>";
        // print_r($competitions);exit();
        if($id)
        {
            $update = 1;
            $competitions1= [];
            $competitions1=DB::table('packages')->where('mc_id',$id)->where('status',1)->where('soft_delete', 0)->get()->toArray();
            $competitions2= [];
            $competitions2=DB::table('packages')->where('mc_id',0)->where('status',1)->where('soft_delete', 0)->get()->toArray();
            $competitions= array_merge($competitions1 , $competitions2);
            // echo "<pre>";
            // print_r($competitions);exit();
        }
        
        
        $mc=MC::where('soft_delete', 0)->find($id);
        // echo "<pre>";
        // print_r($competitions);exit();
        
         $particpate = DB::table('tickets')->where('mc_id',$id)->where('user_id','!=',0)->where('status',1)->get();



          $date = DB::table('multi_competition')->where('id',$id)->where('soft_delete', 0)->first();
          $winner = DB::table('winner')->where('mc_id',$id)->first();
        
        if(isset($update))
        {
            return view('admin.mc.create',compact('competitions','mc','particpate','date','winner','update'));
        }else{
            return view('admin.mc.create',compact('competitions','mc','particpate','date','winner'));
        }
        

    }
   public function detail($uniqid='')
    {
        $mc=MC::where('uniqid',$uniqid)->first();

        return view('admin.mc.detail',compact('mc'));
    }

    public function store(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());exit;
        if(isset($request->competition_id)){
        $check1 = DB::table('packages')->where('mc_id', $request->id)->where('status',1)->where('soft_delete', 0)->count();
        $check2 = count($request->competition_id);
        
        if($check2 < $check1){
        $differenceArray = array_diff($request->compp_id, $request->competition_id);
            
        foreach ($differenceArray as $key => $value) {
            
        $pkg = DB::table('packages')->where('id', $value)->first();

        $blog_data = DB::table('blogs')->where('package_id', $pkg->id)->first();
        if(isset($blog_data)){
            if($blog_data->sliderstatus == 1){
                return redirect()->back()->withErrors(['error' => "Slider is active against this Competition, You cannot remove."])->withInput();
            }
        }
        $cart_data = DB::table('cart')->where('package_id', $pkg->id)->get();
        if(sizeof($cart_data) > 0){
           return redirect()->back()->withErrors(['error' => "Some user have tickets in their cart against this Competition, You cannot remove."])->withInput();
        }
        $coupon_data = DB::table('coupon_data')->where('comp_used_for', 'LIKE', '%' .$pkg->id. '%')->get();
        if(sizeof($coupon_data) > 0){
           return redirect()->back()->withErrors(['error' => "Some user have used a coupon against this Competition, You cannot remove."])->withInput(); 
        }
        $free_com_data = DB::table('freecomps')->where('package_id', $pkg->uniqid)->where('is_winner', 1)->where('ticket', '!=', 0)->first();
        if(isset($free_com_data)){
            return redirect()->back()->withErrors(['error' => "Some user have won a free ticket against this Competition, You cannot remove."])->withInput();
        }
        $tickets_data = DB::table('tickets')->where('product_id', $pkg->id)->get();
        if(sizeof($tickets_data) > 0){
           return redirect()->back()->withErrors(['error' => "Some user have purchased tickets against this Competition, You cannot remove."])->withInput(); 
        }
        $winners_data = DB::table('winner')->where('product_id', $pkg->id)->get();
        if(sizeof($winners_data) > 0){
            return redirect()->back()->withErrors(['error' => "There are winners against this Competition, You cannot remove."])->withInput(); 
        }
         $free_tick_particpate = DB::table('freecomps')->where('package_id', $pkg->uniqid)->where('mc_id', $request->id)->first();
        if(isset($free_tick_particpate)){
            return redirect()->back()->withErrors(['error' => "Some User participate for free ticket  against this Competition, You cannot remove."])->withInput(); 
        }
    }
        }
    }
        $action = "";
        if($request->competition_id=="")
        {
            return redirect()->back()->withErrors(['error' => "Please select Competition"])->withInput();
        }
        $uniqid = uniqid();
        DB::beginTransaction();

        if($request->id){
            $MC = MC::find($request->id);
        }else{
             $MC = new MC;
             $MC->uniqid = $uniqid;
        }
          $image = $request->image;
$pack=$request->status;
            if ($pack == "on") {
            $packs= 1;

        }
        else{
               $packs= 0;
          }
        if($request->hasFile('image'))
            {
                $postData = $request->only('image');

                $file = $postData['image'];

                $fileArray = array('image' => $file);

                // Tell the validator that this file should be an image
                $rules = array(
                  'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000' // max 10000kb10000kb
                );

                // Now pass the input and rules into the validator
                $validator = Validator::make($fileArray, $rules);

                // print_r($validator);exit();
                // Check to see if validation fails or passes
                if ($validator->fails())
                {
                      return redirect()->back()->withErrors(['error' =>'Upload image only'])->withInput();
                }
                $image =Input::file('image');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/mcimages/');
                $image->move($destinationPath, $name);
                $images = $name;
            }


            else
            {
                $images = $request->noimage;
            }
            //    video //
/*
     $videofile = $request->file;

        if($request->hasFile('file'))
            {
                $videofile =Input::file('file');
                $names = time().'.'.$videofile->getClientOriginalExtension();
                $destinationPath = public_path('/blogimages/');
                $videofile->move($destinationPath, $names);
                $videofiles = $names;
            }


            else
            {
                $videofiles = $request->novideofile;
            }



*/



            // video //

            try {

                //Ticket price cannot change if bough any.
                if(isset($MC->price)){
                    if($MC->price != $request->price){
                        $tickets = Ticket::where("mc_id", $MC->id)->whereIn('status',[1,2])->first();
                        if($tickets){
                            return redirect()->back()->withErrors(['error' => "Can't change price. Competition has sold/cart tickets"])->withInput();
                        }
                    }
                }
                //Number of Tickets edit.
                if(isset($MC->max_tickets)){
                    if($MC->max_tickets != $request->max_tickets){
                        if($request->max_tickets < $MC->max_tickets) {
                            $used_tickets_count = Ticket::where("mc_id", $MC->id)->whereIn('status', [1, 2])->max('code');
                            if ($used_tickets_count > $request->max_tickets) {
                                return redirect()->back()->withErrors(['error' => "Can't change Maximum Tickets. Competition has sold/cart tickets"])->withInput();
                            }
                            $diff = $request->max_tickets - $used_tickets_count;
                            if ($diff < 0) {
                                return redirect()->back()->withErrors(['error' => "Can't change Maximum Tickets. Competition has sold/cart tickets"])->withInput();
                            } else {
                                $tickets_to_delete = $MC->max_tickets - $request->max_tickets;
                                $ticket_code = $MC->max_tickets - $tickets_to_delete;
                                $action = 'delete';
                            }
                        }else{
                            $number_of_tickets = $request->max_tickets - $MC->max_tickets;
                            $ticket_code = $MC->max_tickets + 1;
                            $action = 'add';
                        }
                    }
                }

                $MC->freeticket = $packs;
            /*      $MC->video = $videofiles;*/
                $MC->image = $images;
                $MC->sorting = $request->sorting;
                $MC->title = $request->title;
                $MC->price = $request->price;
                $MC->start_date = date('Y-m-d',strtotime($request->start_date));
                $MC->end_date = date('Y-m-d',strtotime($request->end_date));
//                if(!$request->id){
                $MC->max_tickets = $request->max_tickets;
//                }
                $success =  $MC->save();

                if($success){
                $id =  $MC->id;
                if($request->id){
                    Ticket::where('mc_id',$id)->update(['paid_price'=>$MC->price]);
                }
                $competition_id = $request->competition_id;
                if($competition_id && is_array($competition_id) && !empty($competition_id)){
//                    $tickets=Ticket::where("mc_id", $id)->whereIn('status',[1,2])->first();
//                    if($tickets){
//                         return redirect()->back()->withErrors(['error' => "Can't delete this. Competition has sold/cart tickets"])->withInput();
//                    }
//                    Package::where('mc_id',$id)->update(['mc_id'=>'']);
                    // update related products table ...
                    // get all pkgs with mc_id
                    $all_pkgs = Package::where('mc_id', $id)->get();
                    foreach($all_pkgs as $pkg){
                        // filter out eliminated pkgs
                        if(!in_array($pkg->id , $request->competition_id)){
//                            // delete record against those filtered pkgs from related products ...
//                            // check in both fields.
//                            Related_product::where('package_id', $pkg->id)->delete();
//                            Related_product::where('related_product_id', $pkg->id)->delete();
                            $pkg_id = $pkg->id;
                            $pkg = DB::table('packages')->where('id', $pkg_id)->first();

                            $blog_data = DB::table('blogs')->where('package_id', $pkg->id)->first();
                            if(isset($blog_data)){
                                if($blog_data->sliderstatus == 1){
                                    throw new Exception("Slider is active against this Competition, You cannot un-link.");
                                }
                            }
                            $cart_data = DB::table('cart')->where('package_id', $pkg->id)->get();
                            if(sizeof($cart_data) > 0){
                                throw new Exception("Some user have tickets in their cart against this Competition, You cannot un-link.");
                            }
                            $coupon_data = DB::table('coupon_data')->where('comp_used_for', 'LIKE', '%' .$pkg->id. '%')->get();
                            if(sizeof($coupon_data) > 0){
                                throw new Exception("Some user have used a coupon against this Competition, You cannot un-link.");
                            }
                            $free_com_data = DB::table('freecomps')->where('package_id', $pkg->uniqid)->where('is_winner', 1)->where('ticket', '!=', 0)->first();
                            if(isset($free_com_data)){
                                throw new Exception("Some user have won a free ticket against this Competition, You cannot un-link.");
                            }
                            $tickets_data = DB::table('tickets')->where('product_id', $pkg->id)->get();
                            if(sizeof($tickets_data) > 0){
                                throw new Exception("Some user have purchased tickets against this Competition, You cannot un-link.");
                            }
                            $winners_data = DB::table('winner')->where('product_id', $pkg->id)->get();
                            if(sizeof($winners_data) > 0){
                                throw new Exception("There are winners against this Competition, You cannot un-link.");
                            }

                            Package::where('mc_id', $id)->update(['mc_id'=>'']);
                            Related_product::where('package_id', $pkg->id)->delete();
                            Related_product::where('related_product_id', $pkg->id)->delete();
                        }
                    }

                    foreach ($competition_id as $key => $value) {
                     Package::where('id',$value)->update(['mc_id'=>$id]);
                    }
                }else{
                     return redirect()->back()->withErrors(['error' => "Something went wrong. Please try again"])->withInput();
                }
                // Insert tickets
                if($request->max_tickets && !$request->id){
                   for ($i=1; $i <= $request->max_tickets ; $i++) {
                    $ticket= new Ticket;
                    $ticket->user_id= 0;
                    $ticket->mc_id= $id;
                    $ticket->product_id= 0;
                    $ticket->code= $i;
                    $ticket->date_purchased= date('Y-m-d H:i:s');
                    $ticket->paid_price=$MC->price;
                    $ticket->discount= 0;
                    $ticket->purchase_type= 0; // 0 purchased 1 bonus
                    $ticket->status= 0; // 0 available
                    $ticket->save();
                    }
                }else{
                    if($action == 'add'){
                        for ($i=1; $i <= $number_of_tickets ; $i++) {
                            $ticket= new Ticket;
                            $ticket->user_id= 0;
                            $ticket->mc_id= $id;
                            $ticket->product_id= 0;
                            $ticket->code= $ticket_code;
                            $ticket->date_purchased= date('Y-m-d H:i:s');
                            $ticket->paid_price=$MC->price;
                            $ticket->discount= 0;
                            $ticket->purchase_type= 0; // 0 purchased 1 bonus
                            $ticket->status= 0; // 0 available
                            $ticket->save();
                            $ticket_code ++;
                        }
                    }
                    if($action == 'delete'){
                        Ticket::where('mc_id', $id)->where('code', '>', $ticket_code)->delete();
                    }
                }

                DB::commit();
                  \Session::flash('success', "Successfully Saved");
                }else{
                     return redirect()->back()->withErrors(['error' => "Something went wrong. Please try again"])->withInput();
                }
            } catch (\Exception $e) {
                DB::rollback();
                return redirect()->back()->withErrors(['error' => $e->getMessage()])->withInput();
            }

            return redirect("MultiCompetitions/create/$id");
    }

     public function destroy(Request $request)
    {
//        $id = $request->input("id");
//       // $tickets=Ticket::where("mc_id", $id)->whereIn('status',[1,2,3])->first();
//        $getmc =  Ticket::where("mc_id", $id)->first();
//        $getpack = Package::where('mc_id',$id)->first();
//        if($getpack){
//            $packge = DB::table('blogs')->where('sliderstatus',1)->first();
//            if($packge){
//            $packges = DB::table('blogs')->where('sliderstatus',1)->first();
//            $id = $request->input("id");
//            $getID = Package::where('mc_id',$id)->where('id',$packges->package_id)->first();
//            if($getID){
//                $id = $request->input("id");
//                $getpa = Package::where('mc_id',$id)->where('id',$packge->package_id)->first();
//                DB::table('blogs')->where('package_id',$getpa->id)->delete();
//            }
//        }
//        }
//        // if($getmc){
//        //     return ['success'=>false];
//        // }
//        // $check = DB::table('packages')->where('mc_id',$id)->get();
//
//        // foreach ($check as $checked) {
//        // File::deleteDirectory(public_path('products/'.$checked->id));
//        // }
//        $all_pkgs = Package::where('mc_id', $id)->get();
//        foreach($all_pkgs as $pkg){
//                Related_product::where('package_id', $pkg->id)->delete();
//                Related_product::where('related_product_id', $pkg->id)->delete();
//        }
//
//        MC::where("id", $id)->delete();
//        Ticket::where("mc_id", $id)->delete();
//        DB::table('cart')->where('package_id',$id)->delete();
//        Package::where('mc_id',$id)->update(['mc_id' =>0]);
//        DB:: table('winner')->where('mc_id',$id)->delete();
//        DB::table('freecomps')->where('mc_id',$id)->delete();

//        return ['success'=>true];

         //soft delete code
         $mc_id = $request->input("id");
         $packages = DB::table('packages')->where('mc_id', $mc_id)->where('soft_delete',0)->get();
        //  print_r(sizeof($packages));exit;
         if(sizeof($packages) > 0){
             echo "There are Competitions linked to this Multi Competition, You cannot delete.";exit;
         }
         $tickets_data = DB::table('tickets')->where('mc_id', $mc_id)->where('product_id', '!=', 0)->get();
         if(sizeof($tickets_data) > 0){
             echo "Some user have purchased tickets against this Multi Competition, You cannot delete.";exit;
         }
         DB::table('tickets')->where('mc_id', $mc_id)->delete();
         $response = DB::table('multi_competition')->where('id', $mc_id)->update(['soft_delete' => 1, 'soft_delete_at' => date('Y-m-d H:i:s')]);
         if($response){
             echo "Successfully Deleted.";exit;
         }
    }

}

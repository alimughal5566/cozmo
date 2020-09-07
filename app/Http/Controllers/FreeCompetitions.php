<?php

namespace App\Http\Controllers;

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
use App\User;
use App\Discounts;

class FreeCompetitions extends Controller
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

        $fc = Freecomp::all();
        //  echo "<pre>";
        // print_r($fc);exit;
        $title = "Free Ticket Competitions";

        return view('admin.freecomp.home', compact("fc","title"));
    }

    public function select($id)
    {
        $package = Package::where('uniqid',$id)->first();
        $title = $package->name;
        $fc = Freecomp::where('package_id',$id)->get();

         return view('admin.freecomp.home', compact("fc","title"));


    }


    public function freecomp(Request $request)
    {
        if (!DB::table('freecomps')->where('user_id', $request->id)->exists())
        {
          try{
                    $freecomp = new Freecomp;



                $freecomp->package_id = $request->products;
                $freecomp->user_id = $request->id;

                  $freecomp->comingfrom = $request->fromss;

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

    public function selectWinner (Request $request)
    {
        $pid = $request->input('pid');
        $mc = DB::table('packages')->where('uniqid',$pid)->first();
        $related_package = DB::table('related_products')->where('package_id',$mc->id)->join('packages', 'packages.id', '=', 'related_products.package_id')->select('packages.*')->get();
        $competitions = DB::table('multi_competition')->where('id',$mc->mc_id)->first();
        $mcId = $mc->mc_id;
        $urlcategory = DB::table('urls_categories')->where('id',$mc->url_category)->first();
        $uid = $request->input('uid');
        DB::table('freecomps')->where('mc_id',$mcId)->update(['is_winner' => 0]);
        $getticket = Ticket::where(['user_id'=>0,'mc_id'=>$mcId])->inRandomOrder()->limit(1)->first();
        $tId = DB::table('freecomps')->where(['package_id' => $pid, 'user_id' => $uid])->first();
         DB::table('freecomps')->where(['package_id' => $pid, 'user_id' => $uid])->update(['is_winner' => 1,'ticket'=>$getticket->code]);
        $f_info = DB:: table('users')->where('id',$uid)->first();

        $setting = Db::table('setting')->first();
        $img = DB::table('package_images')->where('package_id',$mc->id)->where('main_img',1)->first();
        $discount_offers = Discounts::where('c_id', $mc->id)->orderBy('id', 'DESC')->get()->toArray();

        $data = array('name'=> $f_info->name, 'productname' => $mc->name, 'ProductId' => $mc->id, 'uniqueId' => $mc->slug,'tick_id_no'=>$tId->id, 'ticket' =>$getticket->code,'commission' => $setting->commission, 'ref_friend_string' => $setting->ref_friend_string, 'business_ref_commission' => $setting->business_ref_commission, 'buz_comsion_string' => $setting->buz_comsion_string, 'urlcategorys'=>$urlcategory->slug, 'img'=>$img,'mc'=>$mc,'competitions'=> $competitions,'related_package'=>$related_package, 'setting'=>$setting,'discount_offers'=>$discount_offers);

        // echo "<pre>";
        // print_r($data);exit();

                if($getticket){
            Ticket::where(['id'=>$getticket->id,'mc_id'=>$mcId])->update(['user_id'=>$uid,'product_id'=>$mc->id,'date_purchased'=>date('Y-m-d H:i:s'),'status'=>1,'purchase_type'=>2,'code'=>$getticket->code]);
        }
		 Mail::send(['html'=>'new_email_template.free2email'], $data, function($message) use($f_info) {
              $message->to($f_info->email, 'Prize Maker')->subject
                 ('Winner Ticket Info');
              $setting = DB::table('setting')->first();
              $message->from($setting->email,'Prize Maker');
		 //$data = array('name'=> $f_info->name, 'form_link_id' => $form_link);
         // return view('winerTicket_email', $data);
         // Mail::send(['html'=>'winerTicket_email'], $data, function($message) use($f_info) {
         //      $message->to($f_info->email, 'Prize Maker')->subject
         //         ('Winner Ticket Info');
         //      $setting = DB::table('setting')->first();
         //      $message->from($setting->email,'Prize Maker');

         });


        return response()->json(['status' => 'success', 'msg' => 'Winner Selected']);
    }

    public function freeComp_users($id)
    {
        $user = User::find($id);
        return view('admin.freecomp.freeComp_user', compact('user'));
    }
    
    public function freecompetition_del(Request $request)
    {
        // print_r($request->all());exit;
        DB::table('freecomps')->where('id', $request->id)->delete();
    }



}

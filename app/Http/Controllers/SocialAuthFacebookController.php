<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SocialFacebookAccount;
use App\Services\SocialFacebookAccountService;
use App\User;
use Auth;
use Exception;
use Socialite;
use Illuminate\Support\Str;
use Session;
use App\Freecomp;
use DB;
use App\MC;
use Location;


class SocialAuthFacebookController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function redirectss($id)
    {
        // print_r($id);exit;
        Session::put('date', $id);
        return Socialite::driver('facebook')->redirect();
    }

    public function redirect_google()
    {
         return Socialite::driver('google')->redirect();
    }
    
    public function redirect_googlee($id)
    {
        // print_r($id);exit;
        Session::put('date2', $id);
         return Socialite::driver('google')->redirect();
    }
    
    public function callback(Request $request)
    {
        $date = Session::get('date');
        // print_r($date);exit();
        $refer_by = $request->session()->get('refer_id');
         $ip = $request->ip();
        $position = Location::get($ip); 
        try {
            $googleUser = Socialite::driver('facebook')->user();
            $existUser = User::where('email',$googleUser->email)->first();
            if($existUser) {
                Auth::loginUsingId($existUser->id);
            }
            else {
                $data = file_get_contents($googleUser->avatar);
                $unique_id = uniqid();
                $new = "img/$unique_id.jpg";
                $image_name = "$unique_id.jpg";
                $uploaded = file_put_contents($new, $data);   
                if(!$uploaded){
                    return redirect()->back();
                }
                $user = new User;
                $user->name = $googleUser->name;
                $user->image_name = $image_name;
                $user->email = $googleUser->email;
                $user->password = md5(rand(1,10000));
                if($refer_by!="")
                {
                   $user->referrer_by =   $refer_by;
                }
                $user->status = 1;
                $user->ip_address = $ip;
                $user->ip_country = $position->countryName;
                $user->save();
                $refer_id = Str::random(3) . $user->id;
                User::where('id', $user->id)->update(['reference_id' => $refer_id]);
                $request->session()->forget('refer_id');
                Auth::loginUsingId($user->id);
            }
            
            if(isset($date)){
                if(isset($existUser)){
                
                $user = $existUser;
            }
            
                 $check = DB::table('subscribers')->where('email',$user->email)->first();
                 
        if(!isset($check)){
        DB::table('subscribers')->insert(['email'=>$user->email,'status'=>1]);
    }

         $check = DB::table('freecomps')->where('package_id', $date)->where('user_id',$user->id)->first();
            $package = DB::table('packages')->where('uniqid',$date)->first();
            $freecom = DB::table('multi_competition')->where('id',$package->mc_id)->first();
            if($check){
                
            }
            else{
                $fre_allow = MC::where('freeticket',1)->where('id',$freecom->id)->first();
            if($fre_allow) {
        
                $freecomp = new Freecomp;

                $freecomp->package_id = $date;
                $freecomp->user_id = $user->id;
                $mc = DB::table('freecomps')->where('mc_id',$freecom->id)->where('is_winner',1)->first();
                if($mc){  $freecomp->is_winner = 2;}
                $freecomp->mc_id = $freecom->id;
                $freecomp->comingfrom = 'facebook';
               
                $success = $freecomp->save();
                }
            }
                
            }
            
            if(isset($date)){
                // print_r("abc");exit;
                session()->forget('date');
                // session()->flush();
                return redirect()->back();
            }else{
            return redirect()->to('/profile');
            }
        } 
        catch (Exception $e) {
            if(isset($date)){
                // print_r($e->getMessage());exit;
                session()->forget('date');
                // session()->flush();
                return redirect()->back();
            }else{
            return redirect('/');
            }
        }
    }
    
    public function callback_google(Request $request)
    {
        // print_r($request->all());exit;
        $date2 = Session::get('date2');
        $refer_by = $request->session()->get('refer_id');
        $ip = $request->ip();
        $position = Location::get($ip); 
        try {
            $googleUser = Socialite::driver('google')->user();
            $existUser = User::where('email',$googleUser->email)->first();;
            if($existUser) {
                Auth::loginUsingId($existUser->id);
                // Auth::login($existUser);
            }
            else {
                $user = new User;
                $user->name = $googleUser->name;
                $user->email = $googleUser->email;
                $user->password = md5(rand(1,10000));
                 if($refer_by!="")
                {
                   $user->referrer_by =   $refer_by;
                }
                $user->status = 1;
                $user->ip_address = $ip;
                $user->ip_country = $position->countryName;
                $user->save();
                $refer_id = Str::random(3) . $user->id;
                User::where('id', $user->id)->update(['reference_id' => $refer_id]);
                $request->session()->forget('refer_id');
              Auth::loginUsingId($user->id);
                // Auth::login($user);
            }
            
            
             if(isset($date2)){
                 
                 if(isset($existUser)){
                    $user = $existUser;
                    }
                    
                 $check = DB::table('subscribers')->where('email',$user->email)->first();

                if(!isset($check)){
                    DB::table('subscribers')->insert(['email'=>$user->email,'status'=>1]);
                    }
                    
            $checks = DB::table('freecomps')->where('package_id', $date2)->where('user_id',$user->id)->first();
            
            
            $package = DB::table('packages')->where('uniqid',$date2)->first();
            $freecom = DB::table('multi_competition')->where('id',$package->mc_id)->first();
            
            if($checks){
                
            }
            else{
                $fre_allow = MC::where('freeticket',1)->where('id',$freecom->id)->first();
            if($fre_allow) {
        
                $freecomp = new Freecomp;

                $freecomp->package_id = $date2;
                $freecomp->user_id = $user->id;
                $mc = DB::table('freecomps')->where('mc_id',$freecom->id)->where('is_winner',1)->first();
                if($mc){  $freecomp->is_winner = 2;}
                $freecomp->mc_id = $freecom->id;
                $freecomp->comingfrom = 'google';
               
                $success = $freecomp->save();
                }
            }
                
            }
             if(isset($date2)){
                 
                session()->forget('date2');
                // session()->flush();
                return redirect()->back();
            }else{
            return redirect()->to('/profile');
            }
        } 
        catch (Exception $e) {
            
            if(isset($date2)){
                session()->forget('date2');
                // session()->flush();
                return redirect()->back();
            }else{
            return redirect('/');
            }
        }
    }

    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from facebook.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();
        // $user->token;
    }
}

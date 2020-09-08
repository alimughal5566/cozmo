<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'name', 'email', 'phone_number', 'company_id', 'created_date', 'street_no','street_name' , 'city', 'state', 'zip_code'
    ];



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
//        'password', 'remember_token', 'api_token',
    ];


    public function coupon()
    {
        return $this->hasMany('App\Coupon');
    }

    public function  editUser($id){
        $user = User::find($id);
        $companies = DB::table('companies')->get();
        return [$user , $companies];
    }
    public function indexUser(){
        $users = User::where('soft_delete', 0)->get();
        //dd($users);
        $companies = DB::table('companies')->get();
        return [$users , $companies];

    }
    public function createUser(){

        $companies = DB::table('companies')->get();
        return $companies;
    }

    public function updatedata($request){
       $data = User::where('id', $request['id'])
            ->update([
                "name" => $request->input('name'),
                 "email" => $request->input('email'),
                "phone_number" => $request->input('phone_number'),
                "state" => $request->input('state'),
                "street_no" => $request->input('street_no'),
                "city" => $request->input('city'),
                "street_name" => $request->input('street_name'),
                 "password" => $request->input('password'),
                "zip_code" => $request->input('zip_code'),
                "company_id" => $request->input('company_id'),
                "created_date" => $request->input('created_date'),

            ]);
      // dd($data);
       return $data;

    }

    public function savedata($request){
  //dd($request);
        $data = User::create([
            "name" => $request->input('name'),
            "email" => $request->input('email'),
            "phone_number" => $request->input('phone_number'),
            "state" => $request->input('state'),
            "street_no" => $request->input('street_no'),
            "city" => $request->input('city'),
            "street_name" => $request->input('street_name'),
            "password" => $request->input('password'),
            "zip_code" => $request->input('zip_code'),
            "company_id" => $request->input('company_id'),
            "created_date" => $request->input('created_date'),

        ]);
  return $data;
//       $data = DB::table('users')->where('id', $request['id'])
//            ->update([
//                "name" => $request->input('name'),
//                 "email" => $request->input('email'),
//                "phone_number" => $request->input('phone_number'),
//                "state" => $request->input('state'),
//                "street_no" => $request->input('street_no'),
//                "city" => $request->input('city'),
//                "street_name" => $request->input('street_name'),
//                 "password" => $request->input('password'),
//                "zip_code" => $request->input('zip_code'),
//                "company_id" => $request->input('company_id'),
//                "created_date" => $request->input('created_date'),
//
//            ]);
       //dd($data);


    }



}

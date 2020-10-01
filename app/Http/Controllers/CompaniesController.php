<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CompaniesController extends Controller
{
    public function index_companies()
    {
//dd();
        $users = DB::table('companies')->get();



        return view('admin.companies.home', compact('users'));

//        foreach ($users as $users) {
//            echo $users;


    }
public function companies(){

    $prop=DB::table('properties')->get();
//dd($prop);
    return view('admin.companies.add_company', compact('prop'));
}
public function store(Request $request){
//    dd($request);
    DB::table('companies')->insert([
        'name' => $request->name,
        'street_no' => $request->street_no,
        'street_name' => $request->street_name,
        'city' => $request->city,
        'state' => $request->state,
        'zip_code' => $request->zip_code,
        'company_address' => $request->company_address,
        'company_phone_number' => $request->company_phone_number,
        'company_email' => $request->company_email,
        'description' => $request->description,
        'property_id' => $request->property_id,

    ]);
    return redirect()->route('index_companies')->with('success', ' Create Successfuly');


}
    public function edit ($id)
    {
        $user = DB::table('companies')->where('id',$id)->get();

        $prop=DB::table('properties')->get();

//        dd($user);
        return view('admin.companies.edit',compact("user",'prop'));

    }

    public function update(Request $request)
    {
//dd($request);

        $success = DB::table('companies')->where('id', $request->user_id)->update([
            'name' => $request->name,
            'street_no' => $request->street_no,
            'street_name' => $request->street_name,
            'city' => $request->city,
            'state' => $request->state,
            'zip_code' => $request->zip_code,
            'company_address' => $request->company_address,
            'company_phone_number' => $request->company_phone_number,
            'company_email' => $request->company_email,
            'description' => $request->description,
            'property_id' => $request->property_id,

        ]);

        if($success){
            return redirect()->route('index_companies')->with('success', 'Update Successfuly');
        }
    }
    public function delete(Request $request, $id)
    {
//        dd($id);

        $response = DB::table('companies')->where('id',$id)->delete();
        if($response){
            return redirect()->route('index_companies')->with('success', 'Delete Successfuly');
        }
    }

}

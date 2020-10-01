<?php

namespace App\Http\Controllers;

//use App\Models\PropertyType;
use DipeshSukhia\LaravelCountryStateCityData\LaravelCountryStateCityData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\DeclareDeclare;

class Property_addressController extends Controller
{

    public function addressHomeView()
    {

        $user = Auth::user();
        if ($user->user_role == 0) {
            return redirect('/');
        }
        $data = DB::table('property_address')->latest('date_created')->get();
//  dd($data);
        return view('admin.property_address.property-address-home', compact('data'));
    }

    public function store(Request $request)
    {
//    dd($request);
        DB::table('property_address')->insert([
//            'property' => $request->property,
            'name_of_street' => $request->name_of_street??'NULL',
            'country' => $request->location_country??'NULL',
            'state' => $request->location_state??'NULL',
            'city' => $request->location_city??'NULL',
            'zip_code' => $request->location_zip??'NULL',
            'county' => $request->county??'NULL',
            'additional_info' => $request->additional_info??'NULL',
            'neighborhood' => $request->neighborhood??'NULL',
            'boroughs' => $request->boroughs??'NULL',
            'property_id' => $request->property_id ?? '',


//            'Date_created' => $request->Date_created,
//            'date_created' => $request->date_created,
        ]);

//        dd('wwww');
        return redirect()->route('addressHomeView')->with('success', ' Create Successfuly');

    }

    public function addPropertyAddress()
    {
        $data=DB::table('property_address')->get();
        $prop=DB::table('properties')->get();

        return view('admin.property_address.add-property-address', compact('data','prop'));
    }

    public function edit($id)
    {
        $data = DB::table('property_address')->where('id', $id)->get();
        $prop=DB::table('properties')->get();

        return view('admin.property_address.update-property-address', compact('data','prop'));


    }

    public function updatePropertyAddress(Request $request)
    {
//        dd($request);
        $data = DB::table('property_address')->where('id', $request->user_id)->update([
            'name_of_street' => $request->name_of_street??'NULL',
            'country' => $request->location_country??'NULL',
            'state' => $request->location_state??'NULL',
            'city' => $request->location_city??'NULL',
            'zip_code' => $request->location_zip??'NULL',
            'county' => $request->county??'NULL',
            'additional_info' => $request->additional_info??'NULL',
            'neighborhood' => $request->neighborhood??'NULL',
            'boroughs' => $request->boroughs??'NULL',
//            'parent_id' => $request->parent_id ?? '',

        ]);
//        dd($data);
        return redirect()->route('addressHomeView')->with('success', ' Update Successfuly..!');
    }
    public function delete(Request $request){
        $user_id=$request->input("id");
//        dd($user_id);
        $response=DB::table('property_address')->where('id',$user_id)->delete();
//        dd($response);
        if($response){
            echo "Successfully Deleted.";exit;
        }
    }
}

<?php

namespace App\Http\Controllers;

//use App\Models\PropertyType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Property_addressController extends Controller
{

    public function addressHomeView()
    {
        $user = Auth::user();
        if ($user->user_role == 0) {
            return redirect('/');
        }
        $data = DB::table('property_address')->get();
//  dd($data);
        return view('admin.property_address.property-address-home', compact('data'));
    }

    public function store(Request $request)
    {
//    dd($request);
        DB::table('property_address')->insert([
            'name_of_street' => $request->name_of_street,
            'country' => $request->country,
            'state' => $request->state,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'county' => $request->county,
            'additional_info' => $request->additional_info,
            'neighborhood' => $request->neighborhood,
            'boroughs' => $request->boroughs,
//            'Date_created' => $request->Date_created,
//            'date_created' => $request->date_created,
        ]);
//        dd('wwww');
        return redirect()->route('addressHomeView')->with('success', ' Create Successfuly');

    }

    public function addPropertyAddress()
    {
        return view('admin.property_address.add-property-address');
    }

    public function edit($id)
    {
        $data = DB::table('property_address')->where('id', $id)->get();
        return view('admin.property_address.update-property-address', compact('data'));


    }

    public function updatePropertyAddress(Request $request)
    {
//dd($request->all());
        $data = DB::table('property_address')->where('id', $request->user_id)->update([
            "name_of_street" => $request['name_of'],
            "country" => $request['country'],
            "state" => $request['state'],
            "city" => $request['city'],
            "zip_code" => $request['zip_code'],
            "county" => $request['county'],
            "additional_info" => $request['additional_info'],
            "neighborhood" => $request['neighborhood'],
//            "boroughs	" => $request['boroughs	'],
        ]);
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

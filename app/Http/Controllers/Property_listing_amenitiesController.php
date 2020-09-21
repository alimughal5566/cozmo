<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Property_listing_amenitiesController extends Controller
{

    public function property_listing_amenities_index()
    {
        $user = Auth::user();
        if ($user->user_role == 0) {
            return redirect('/');
        }
        $data = DB::table('property_listing_amenities')->get();
//  dd($data);
        return view('admin.property_listing_amenities.property-amenities-home', compact('data'));
    }
    public function amenitiesStore(Request $request)
    {
//    dd($request);
        DB::table('property_listing_amenities')->insert([
            'listing_amenity' => $request->listing_amenity,
//           'Date_created' => $request->Date_created,
//          'date_created' => $request->date_created,
            'listing_for' => $request->listing_for,

        ]);

//        dd('wwww');
        return redirect()->route('property_listing_amenities.home')->with('success', ' Create Successfuly');

    }

    public function amenitiesAdd()
    {
        return view('admin.property_listing_amenities.add-property-amenities');
    }
    public function amenitiesEdit($id)
    {
        $data = DB::table('property_listing_amenities')->where('id', $id)->get();
        return view('admin.property_listing_amenities.update-property-amenities', compact('data'));


    }

    public function amenitiesUpdate(Request $request)
    {
//dd($request->all());
        $data = DB::table('property_listing_amenities')->where('id', $request->user_id)->update([
            "listing_amenity" => $request['listing_amenity'],
            "listing_for" => $request['listing_for'],
//            "boroughs	" => $request['boroughs	'],
        ]);
        return redirect()->route('property_listing_amenities.home')->with('success', ' Update Successfuly..!');
    }
    public function amenitiesDelete(Request $request)
    {
        $user_id = $request->input("id");
//        dd($user_id);
        $response = DB::table('property_listing_amenities')->where('id', $user_id)->delete();
//        dd($response);
        if ($response) {
            echo "Successfully Deleted.";
            exit;
        }
    }

}

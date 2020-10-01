<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Listing_sale_price_changesController extends Controller
{
    public function listingSaleIndex()
    {
        $user = Auth::user();
        if ($user->user_role == 0) {
            return redirect('/');
        }
        $data = DB::table('listing_sale_price_changes')->get();
//  dd($data);
        return view('admin.listing_sale_price_changes.listing-sale-home', compact('data'));
    }
    public function listingStore(Request $request)
    {
//    dd($request);
        DB::table('listing_sale_price_changes')->insert([
            'date_change' => $request->date_change,
           'old_price' => $request->old_price,
          'updated_price' => $request->updated_price,
          'created_at' => $request->created_at,
          'property_id' => $request->property_id,


        ]);

//        dd('wwww');
        return redirect()->route('listing_sale_price_changes.home')->with('success', ' Create Successfuly');

    }
    public function listingAdd()

    {
        $prop=DB::table('properties')->get();

        return view('admin.listing_sale_price_changes.add-listing-sale',compact('prop'));
    }
    public function listingEdit($id)
    {
        $data = DB::table('listing_sale_price_changes')->where('id', $id)->get();
        $prop=DB::table('properties')->get();

        return view('admin.listing_sale_price_changes.update-listing-sale', compact('data','prop'));


    }

    public function listingUpdate(Request $request)
    {
//dd($request->all());
        $data = DB::table('listing_sale_price_changes')->where('id', $request->user_id)->update([
//            "date_change" => $request['date_change'],
            "old_price" => $request['old_price'],
            "updated_price" => $request['updated_price'],
            "created_at" => $request['created_at'],
            "property_id" => $request['property_id'],
        ]);
        return redirect()->route('listing_sale_price_changes.home')->with('success', ' Update Successfuly..!');
    }
    public function listingDelete(Request $request)
    {
        $user_id = $request->input("id");
//        dd($user_id);
        $response = DB::table('listing_sale_price_changes')->where('id', $user_id)->delete();
//        dd($response);
        if ($response) {
            echo "Successfully Deleted.";
            exit;
        }
    }
}

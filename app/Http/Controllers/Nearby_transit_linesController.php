<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Nearby_transit_linesController extends Controller
{
    public function transitIndex()
    {
        $user = Auth::user();
        if ($user->user_role == 0) {
            return redirect('/');
        }
        $data = DB::table('nearby_transit_lines')->get();
//  dd($data);
        return view('admin.nearby_transit_lines.transit-lines-home', compact('data'));
    }
    public function transitStore(Request $request)
    {
//    dd($request);
        DB::table('nearby_transit_lines')->insert([
            'name' => $request->name,
            'value' => $request->value  ,
            'sort_order' => $request->sort_order,

        ]);

//        dd('wwww');
        return redirect()->route('nearby_transit_lines.home')->with('success', ' Create Successfuly');

    }

    public function transitAdd()
    {
        return view('admin.nearby_transit_lines.add-transit');
    }
    public function transitEdit($id)
    {
        $user = DB::table('nearby_transit_lines')->where('id', $id)->get();
//        dd($user);
        return view('admin.nearby_transit_lines.update-transit-lines', compact("user"));

    }
    public
    function transitUpdate(Request $request)
    {
//dd($request);
        $success = DB::table('nearby_transit_lines')->where('id', $request->user_id)->update([
            'name' => $request->name,
            'value' => $request->value,
            'sort_order' => $request->sort_order,
        ]);

        if ($success) {
            return redirect()->route('nearby_transit_lines.home')->with('success', 'Update Successfully');
        }

    }
    public function transitDelete(Request $request)
    {
        $user_id = $request->input("id");
//        dd($user_id);
        $response = DB::table('nearby_transit_lines')->where('id', $user_id)->delete();
//        dd($response);
        if ($response) {
            echo "Successfully Deleted.";
            exit;
        }
    }
}

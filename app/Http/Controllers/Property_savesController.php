<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Property_savesController extends Controller
{
    public function savesIndex()
    {
        $user = Auth::user();
        if ($user->user_role == 0) {
            return redirect('/');
        }
        $data = DB::table('property_saves')->get();
        $ikek = DB::table('users')->get();
        $prop = DB::table('properties')->get();

//  dd($ikek);
        return view('admin.property_saves.property-saves-home', compact('data','ikek','prop'));
    }

    public function savesStore(Request $request)
    {
//    dd($request);
        DB::table('property_saves')->insert([
//            'property_id' => $request->property_id,
            'user_id' => $request->user_id,
            'property_id' => $request->property_id,
            'date_saved' => $request->date_saved,
//            'parent_id' => $request->parent_id ?? '',


        ]);

//        dd('wwww');
        return redirect()->route('property_saves.home')->with('success', ' Create Successfuly');

    }

    public function savesAdd()
    {
//        dd('document');
        $data=DB::table('property_saves')->get();
        $user=DB::table('properties')->get();
        $prop=DB::table('users')->get();
//        dd($data);
        return view('admin.property_saves.add-property-saves',compact('data','user','prop'));
    }
    public function savesEdit($id)
    {
        $user = DB::table('property_saves')->where('id', $id)->get();
        $prop=DB::table('properties')->get();
        $data=DB::table('users')->get();
//       dd($data);
        return view('admin.property_saves.update-property-saves', compact('user','prop','data'));
    }
    public
    function savesUpdate(Request $request)
    {
//dd($request);
        $success = DB::table('property_saves')->where('id', $request->user_id)->update([
            'user_id' => $request->user_id,
            'property_id' => $request->property_id,
            'date_saved' => $request->date_saved,
        ]);

        if ($success) {
            return redirect()->route('property_saves.home')->with('success', 'Update Successfully');
        }

    }

    public function savesDelete(Request $request)
    {
        $user_id = $request->input("id");
//        dd($user_id);
        $response = DB::table('property_saves')->where('id', $user_id)->delete();
//        dd($response);
        if ($response) {
            echo "Successfully Deleted.";
            exit;
        }
    }

}


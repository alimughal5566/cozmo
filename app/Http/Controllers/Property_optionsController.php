<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Property_optionsController extends Controller
{
    public function propertyOptionsIndex()
    {
        $user = Auth::user();
        if ($user->user_role == 0) {
            return redirect('/');
        }
        $data = DB::table('property_options')->get();
//  dd($data);
        return view('admin.property_options.property-options-home', compact('data'));
    }

    public function optionsStore(Request $request)
    {
//    dd($request);
        DB::table('property_options')->insert([
            'option_type' => $request->option_type,
            'option_key' => $request->option_key,
            'option_value' => $request->option_value,

        ]);

//        dd('wwww');
        return redirect()->route('property_options.home')->with('success', ' Create Successfuly');

    }

    public function optionsAdd()
    {
        return view('admin.property_options.add-property-options');
    }

    public function edit($id)
    {
        $user = DB::table('property_options')->where('id', $id)->get();
//        dd($user);
        return view('admin.property_options.update-property-options', compact("user"));

}
        public
        function update(Request $request)
        {
//dd($request);
            $success = DB::table('property_options')->where('id', $request->user_id)->update([
                'option_type' => $request->option_type ,
                'option_key' => $request->option_key,
                'option_value' => $request->option_value,
            ]);

            if ($success) {
                return redirect()->route('property_options.home')->with('success', 'Update Successfully');
            }

        }

    public function optionsDelete(Request $request)
    {
        $user_id = $request->input("id");
//        dd($user_id);
        $response = DB::table('property_options')->where('id', $user_id)->delete();
//        dd($response);
        if ($response) {
            echo "Successfully Deleted.";
            exit;
        }
    }

}


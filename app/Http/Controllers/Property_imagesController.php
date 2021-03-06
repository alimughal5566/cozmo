<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Property_imagesController extends Controller
{
    public function index_property_image()
    {

        $users = DB::table('property_images')->get();
//        dd($users);
        return view('admin.property_images.home', compact('users'));

//        foreach ($users as $users) {
//            echo $users;

    }
    public function property()
    {
        $data=DB::table('properties')->get();

//        dd('property');
        return view('admin.property_images.add_image', compact('data'));
    }

    public function store(Request $request)
    {
//    dd($request);



        if ($request->hasFile('image')) {
//            dd('ijhb');
            $image = $request->file('image');
            $imageName = time() . "." . $image->getClientOriginalExtension();
            $imagePath = public_path() . '/images/cozmo/';
            $image->move($imagePath, $imageName);
            $imageDbPath = $imageName;
        }
        $data=DB::table('property_images')->insert([

            'image' => $imageDbPath,
//                'date_created' => carbon::now(),
            'property_id' => $request->property_id,


        ]);


        return redirect()->route('index_property_image')->with('success', ' Create Successfuly');
    }
    public function edit($id)

    {
        $id=$id;
//        dd($id);
        $data=DB::table('properties')->get();


//        $user = DB::table('property_images')->where('id', $id)->get();
//        dd($user);
        return view('admin.property_images.edit', compact('id','data'));

    }
    public function update(Request $request)
    {
//dd($request);

        if ($request->hasFile('image')) {
//            dd('ijhb');
            $image = $request->file('image');
            $imageName = time() . "." . $image->getClientOriginalExtension();
            $imagePath = public_path() . '/images/cozmo/';
            $image->move($imagePath, $imageName);
            $imageDbPath = $imageName;
        }
        $success = DB::table('property_images')->where('id', $request->id)->update([

            'image' => $imageDbPath,
            'date_created' => $request->date_created,
            'property_id' => $request->property_id,


        ]);
//        dd($success);

        if ($success) {
            return redirect()->route('index_property_image')->with('success', 'Update Successfuly');
        }
    }
    public function delete(Request $request, $id)
    {
//        dd($id);

        $response = DB::table('property_images')->where('id', $id)->delete();
        if ($response) {
            return redirect()->route('index_property_image')->with('success', 'Delete Successfuly');
        }
    }
}

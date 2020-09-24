<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Building_amenitiesController extends Controller
{
    public function index_building_amenities()
    {

        $users = DB::table('building_amenities')->get();
//        dd($users);
        return view('admin.building_amenities.home', compact('users'));
//
//        foreach ($users as $users) {
//            echo $users;

    }

    public function building()
    {
//        dd('document');
        $data=DB::table('building_info')->get();
//        dd($data);
        return view('admin.building_amenities.add_building_amenities',compact('data'));
    }

    public function store(Request $request)
    {
//    dd($request);
        if ($request->hasFile('images')) {
            $image = $request->file('images');
            $imageName = time() . "." . $image->getClientOriginalExtension();
            $imagePath = public_path() . '/images/cozmo/';
            $image->move($imagePath, $imageName);
            $imagesDbPath = $imageName;
        }

            DB::table('building_amenities')->insert([
                'building_amenities_title' => $request->building_amenities_title,
                'created_date' => $request->created_date,
                'updated_date' => $request->updated_date,
                'listing_for' => $request->listing_for,
                'type' => $request->type,
                'images' => $imagesDbPath ?? '',
                'building_id' => $request->building_id ?? '',
            ]);
//        dd('wwww');
            return redirect()->route('index_building_amenities')->with('success', ' Create Successfuly');
        }


    public function edit($id)
    {
//        dd($id);
        $user = DB::table('building_amenities')->where('id', $id)->get();
//        dd($user);
        return view('admin.building_amenities.edit', compact("user"));

    }

    public function update(Request $request)
    {
//dd($request);
        if ($request->hasFile('images')) {
            $image = $request->file('images');
            $imageName = time() . "." . $image->getClientOriginalExtension();
            $imagePath = public_path() . '/images/cozmo/';
            $image->move($imagePath, $imageName);
            $imagesDbPath = $imageName;
        }
        $success = DB::table('building_amenities')->where('id', $request->user_id)->update([
            'building_amenities_title' => $request->building_amenities_title,
            'created_date' => $request->created_date,
            'updated_date' => $request->updated_date,
            'listing_for' => $request->listing_for,
            'type' => $request->type,
            'images' => $imagesDbPath ?? '',
            'parent_id' => $request->parent_id ?? '',

        ]);

        if ($success) {
            return redirect()->route('index_building_amenities')->with('success', 'Update Successfuly');
        }
    }
    public function delete(Request $request, $id)
    {
//        dd($id);

        $response = DB::table('building_amenities')->where('id', $id)->delete();
        if ($response) {
            return redirect()->route('index_building_amenities')->with('success', 'Delete Successfuly');
        }
    }
}


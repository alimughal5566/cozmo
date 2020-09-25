<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Building_infoController extends Controller
{
    public function index_building_info()
    {
//dd('well');
        $users = DB::table('building_info')->get();


        return view('admin.building_info.home', compact('users'));

//        foreach ($users as $users) {
//            echo $users;
    }

    public function building()
    {

//        dd('building');
        return view('admin.building_info.add_building');
    }

    public function store(Request $request)
    {
//    dd($request);
        DB::table('building_info')->insert([
            'name' => $request->name,
            'unit_number' => $request->unit_number,
            'additional_info' => $request->additional_info,
            'created_date' => $request->created_date,
            'updated_date' => $request->updated_date,
            'no_of_units' => $request->no_of_units,
            'no_of_stories' => $request->no_of_stories,
            'condos' => $request->condos,
            'co_ops' => $request->co_ops,
            'multi_families' => $request->multi_families,
            'rental_units' => $request->rental_units,
        ]);
//        dd('wwww');
        return redirect()->route('index_building_info')->with('success', ' Create Successfuly');
    }
    public function edit ($id)
    {
        $user = DB::table('building_info')->where('id',$id)->get();
//        dd($user);
        return view('admin.building_info.edit',compact("user"));

    }
    public function update(Request $request)
    {
//dd($request);

        $success = DB::table('building_info')->where('id', $request->user_id)->update([
            'name' => $request->name,
            'unit_number' => $request->unit_number,
            'additional_info' => $request->additional_info,
            'created_date' => $request->created_date,
            'updated_date' => $request->updated_date,
            'no_of_units' => $request->no_of_units,
            'no_of_stories' => $request->no_of_stories,
            'condos' => $request->condos,
            'co_ops' => $request->co_ops,
            'multi_families' => $request->multi_families,
            'rental_units' => $request->rental_units,
        ]);

        if($success){
            return redirect()->route('index_building_info')->with('success', 'Update Successfuly');
        }
    }
    public function delete(Request $request, $id)
    {
//        dd($id);

        $response = DB::table('building_info')->where('id',$id)->delete();
        if($response){
            return redirect()->route('index_building_info')->with('success', 'Delete Successfuly');
        }
    }
}

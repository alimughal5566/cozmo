<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
class Building_documentController extends Controller
{
    public function index_building_documents()
    {

        $users = DB::table('building_documents')->get();
//        dd($users);
        return view('admin.building_documents.home', compact('users'));

//        foreach ($users as $users) {
//            echo $users;

    }

    public function building()
    {
//        dd('document');
        $data=DB::table('building_info')->get();
        return view('admin.building_documents.add_building_documents',compact('data'));
    }

    public function store(Request $request)
    {
//    dd($request);


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . "." .$image->getClientOriginalExtension();
            $imagePath = public_path() . '/images/cozmo/';
            $image->move($imagePath, $imageName);
            $imageDbPath = $imageName;
        }
             $data=DB::table('building_documents')->insert([
                'document' => $request->document,
                'images' => $imageDbPath,
                'document_types' => $request->document_types,
                'unit_no' => $request->unit_no,
                'detail' => $request->detail,
//                'date_created' => carbon::now(),

            ]);


        return redirect()->route('index_building_documents')->with('success', ' Create Successfuly');
    }

    public function edit($id)
    {
        $user = DB::table('building_documents')->where('id', $id)->get();
//        dd($user);
        return view('admin.building_documents.edit', compact("user"));

    }
    public function update(Request $request)
    {
//dd($request);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . "." .$image->getClientOriginalExtension();
            $imagePath = public_path() . '/images/cozmo/';
            $image->move($imagePath, $imageName);
            $imageDbPath = $imageName;
        }
        $success = DB::table('building_documents')->where('id', $request->user_id)->update([
            'document' => $request->document,
            'images' => $imageDbPath,
            'document_types' => $request->document_types,
            'unit_no' => $request->unit_no,
            'detail' => $request->detail,
            'create_date' => $request->create_date,

        ]);

        if ($success) {
            return redirect()->route('index_building_documents')->with('success', 'Update Successfuly');
        }
    }
    public function delete(Request $request, $id)
    {
//        dd($id);

        $response = DB::table('building_documents')->where('id',$id)->delete();
        if($response){
            return redirect()->route('index_building_documents')->with('success', 'Delete Successfuly');
        }
    }
}

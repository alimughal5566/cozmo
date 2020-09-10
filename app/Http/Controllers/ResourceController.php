<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ResourceController extends Controller
{
    /**
     * Resource Category
     */
    public function resourceCategoryHome()
    {
        $user = Auth::user();
        if($user->user_role==0)
        {
            return redirect('/');
        }
        $data =DB::table('resources_category')->get();
//  dd($data);
        return view('admin.resource.resource-category-home', compact('data'));
    }

    public function addResourceCategory(){
        return view('admin.resource.add-resource-category');
    }

    public function createResourceCategory(Request $request){
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time() . "." .$image->extension();
            $imagePath = public_path() . '/assets/resource-category-images';
            $image->move($imagePath, $imageName);
            $imageDbPath = $imageName;
        }
        $data=DB::table('resources_category')->insert([
            "name"=>$request['name'],
            "image"=>$imageDbPath,
        ]);
//        dd($data);
        if ($data){
            return redirect()->route('resourceCategoryHome')->with('message','save successfully');
        }
    }

    public function storeResourceCategory(Request $request){
//dd($request);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time() . "." .$image->extension();
            $imagePath = public_path() . '/assets/resource-category-images';
            $image->move($imagePath, $imageName);
            $imageDbPath = $imageName;
        }

        $data=DB::table('resources_category')->where('id',$request->user_id)->update([
            "name"=>$request['name'],
            "image"=>$imageDbPath
        ]);
//        dd($data);
        if ($data){
            return redirect()->route('resourceCategoryHome')->with('message','updated successfully');
        }

    }

    public function updateResourceCategory($id){
//        dd($id);
        $data=DB::table('resources_category')->where('id',$id)->get();
        return view('admin.resource.update-resource-category',compact('data'));
    }

    public function deleteResourceCategory(Request $request){
        $user_id=$request->input("id");
        $response=DB::table('resources_category')->where('id',$user_id)->delete();
        if($response){
            echo "Successfully Deleted.";exit;
        }
    }


    /**
     * Resources
     */
    public function resourceHome()
    {
        $user = Auth::user();
        if($user->user_role==0)
        {
            return redirect('/');
        }
        $data =DB::table('resources')->get();
  foreach ($data as $datum){
      $datum->cateory_name=DB::table('resources_category')->where('id',$datum->resources_category_id)->pluck('name')->first();
  }
        return view('admin.resource.resource-home', compact('data'));
    }

    public function addResources(){
        $data=DB::table('resources_category')->get();
//        dd($data);
        return view('admin.resource.add-resource',compact('data'));
    }

    public function createResource(Request $request){
//        dd($request);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time() . "." .$image->extension();
            $imagePath = public_path() . '/assets/resource-category-images';
            $image->move($imagePath, $imageName);
            $imageDbPath = $imageName;
        }
        $data=DB::table('resources')->insert([
            "title"=>$request['title'],
            "resources_category_id"=>$request['resources_category_id'],
            "content"=>$request['content'],
            "image"=>$imageDbPath,
        ]);
//        dd($data);
        if ($data){
            return redirect()->route('resourceHome')->with('message','save successfully');
        }
    }

    public function storeResource(Request $request){
//dd($request);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time() . "." .$image->extension();
            $imagePath = public_path() . '/assets/resource-category-images';
            $image->move($imagePath, $imageName);
            $imageDbPath = $imageName;
        }

        $data=DB::table('resources')->where('id',$request->user_id)->update([
            "title"=>$request['title'],
            "resources_category_id"=>$request['resources_category_id'],
            "content"=>$request['content'],
            "image"=>$imageDbPath,
        ]);
//        dd($data);
        if ($data){
            return redirect()->route('resourceHome')->with('message','updated successfully');
        }

    }

    public function updateResource($id){
//        dd($id);
        $data=DB::table('resources')->where('id',$id)->get();
        foreach ($data as $datum) {
            $datum->cateory_name = DB::table('resources_category')->where('id', $datum->resources_category_id)->pluck('name')->first();
        }
        $data1=DB::table('resources_category')->get();
            return view('admin.resource.update-resource',compact('data','data1'));
    }

    public function deleteResource(Request $request){
        $user_id=$request->input("id");
        $response=DB::table('resources')->where('id',$user_id)->delete();
        if($response){
            echo "Successfully Deleted.";exit;
        }
    }

}

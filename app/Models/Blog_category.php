<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Blog_category extends Model
{
    protected $fillable = [
        'image', 'title',
    ];

    public function indexBlogCategory(){

         $blog_category = DB::table('blog_categories')->get();
        // dd($blog_category);
        return $blog_category;

    }
    public  function blogCategoryStoredata($request){
//        dd($request);
        if($files=$request->file('image')) {
            $name = $files->getClientOriginalName();
            $files->move('images\cozmo', $name);
        }
      $data =   DB::table('blog_categories')->insert([
            'title' => $request['title'],
            'image' => $name,
            'date_created' =>carbon::now() ,

        ]);
             return $data;
    }

    public  function blogCategoryUpdatedata($request){
//        dd($request);
        if($files=$request->file('image')) {
            $name = $files->getClientOriginalName();
            $files->move('images\cozmo', $name);
        }

       $data = DB::table('blog_categories')->where('id' , $request->id)->Update([
            'title' => $request->title,
            'image' => $name,
            'date_updated' =>carbon::now() ,
        ]);
//        dd($data);
//        $data = Blog_category:: Update([
//            'title' => $request['title'],
//            'image' => $name,
//            'date_created' =>carbon::now() ,
//        ]);
        return $data;
    }



    public function blogCategoryEditData($id){
        $data = Blog_category::find($id);
//        dd($data);
        return $data;

    }




}

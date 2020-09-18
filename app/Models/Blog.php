<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;


class Blog extends Model
{
    public function indexBlog(){
        $main_feature_count = 0;
        $feature_count = 0;
//        $blog_category = DB::table('blog_categories')->get();
//        // dd($blog_category);
//        return $blog_category;
        $pod = DB::table('blog')->orderBy('feature_flag', 'desc')->get();
        foreach ($pod as $data){
            if($data->feature_flag == 1){$main_feature_count++;}
            if($data->feature_flag == 2){$feature_count++;}
            $data->blog_category=DB::table('blog_categories')->where('id',$data->blog_category_id)->pluck('title')->first();
        }
        $pod->main_featured_count = $main_feature_count;
        $pod->featured_count = $feature_count;
//        dd($pod->main_featured_count);
        return $pod;

    }
    public function blogAdd(){
        $data =   DB::table('blog_categories')->get();
        return $data;
    }
    public  function blogStoredata($request){
//        dd($request);
        if($files=$request->file('image')) {
            $name = $files->getClientOriginalName();
            $files->move(public_path('images\cozmo'), $name);
        }
        $data =   DB::table('blog')->insert([
            'title' => $request->title,
            'type' => $request->type,
            'blog_category_id' => $request->blog_category_id,
            'content' => $request->content,
            'image' => $name,
            'feature_flag' =>$request->featured,
            'date_created' =>carbon::now() ,

        ]);
        return $data;
//        dd($data);
    }

    public  function blogUpdate($request){
//        dd($request);
        if($files=$request->file('image')) {
            $name = $files->getClientOriginalName();
            $files->move('images\cozmo', $name);
        }

        $data = DB::table('blog_categories')->where('id' , $request->id)->Update([
            'title' => $request->title,
            'image' => $name,
            'date_updated' => carbon::now(),
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

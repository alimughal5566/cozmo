<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Blog extends Model
{
    public function indexBlog(){
        $normal_blog = DB::table('blog')->where('feature_flag','=' ,'0')->get();
        foreach ($normal_blog as $data){
            $data->blog_category=DB::table('blog_categories')->where('id',$data->blog_category_id)->pluck('title')->first();
        }

        $main_feature = DB::table('blog')->where('feature_flag' , '=' , '1')->get();
        foreach ($main_feature as $data2){
            $data2->blog_category=DB::table('blog_categories')->where('id',$data2->blog_category_id)->pluck('title')->first();
        }

        $normal_feature = DB::table('blog')->where('feature_flag' ,'=','2')->get();
        foreach ($normal_feature as $data3){
            $data3->blog_category=DB::table('blog_categories')->where('id',$data3->blog_category_id)->pluck('title')->first();
        }
        $random_Blog = DB::table('blog')->where('feature_flag', '=' , '0')->inRandomOrder()->limit(5)->get();
//        dd($random_Blog);

        return [$normal_blog,$main_feature,$normal_feature,$random_Blog];

    }

    public function detailBlog($id){
        $result=DB::table('blog')->find($id);
        if($result->property_id != 'false'){
            DB::table('blog')->where('id' , $result->id)->update(['view_count' =>$result->view_count+1]);
            $thisProperty = DB::table('properties')->where('id', $result->property_id)->first();
            $address = DB::table('property_address')->where('property_id', $thisProperty->id)->first();
            $thisProperty->address = $address;
            $subCat = DB::table('subcategories')->where('id' , $result->sub_cate_id)->pluck('title')->first();
            $cat = DB::table('blog_categories')->where('id' , $result->blog_category_id)->pluck('title')->first();
            $result->sub_cate_title = $subCat;
            $result->cate_title = $cat;
            $result->thisProperty  = $thisProperty;
//            dd($result);
            return $result;
        }
        else{
            DB::table('blog')->where('id' , $result->id)->update(['view_count' =>$result->view_count+1]);
            $subCat = DB::table('subcategories')->where('id' , $result->sub_cate_id)->pluck('title')->first();
            $cat = DB::table('blog_categories')->where('id' , $result->blog_category_id)->pluck('title')->first();
            $result->sub_cate_title = $subCat;
            $result->cate_title = $cat;
            return $result;
        }

    }
}

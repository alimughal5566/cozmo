<?php

namespace App\Http\Controllers\frontend;

use App\Models\frontend\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    private $blogg;

    public function __construct(Blog $blogg)
    {

        $this->middleware('auth');
        $this->middleware('AdminAccess');
        $this->blogg = $blogg;

    }
    public function index()
    {
//		$blog = Blog::get();
        $result = $this->blogg->indexBlog();
        $blg = $result[0];
        $main_feature = $result[1];
        $normal_feature = $result[2];
        $random_Blog = $result[3];
//        dd($blg);
//        dd($main_feature);
        return view('frontend.blog',compact('blg' , 'main_feature' , 'normal_feature', 'random_Blog'));

    }
    public function detail($id){
        $sliderFlag = true;
        $result = $this->blogg->detailBlog($id);
//        dd($result);
        if($result->property_id == 'false'){
            $sliderFlag = false;
        }
        if($sliderFlag== 'true'){
            $slider= DB::table('properties')->where('feature_flag', '=' , '0')->where('price' , '<=' , $result->thisProperty->price)->where('no_of_bedroom', '<=' , $result->thisProperty->no_of_bedroom)->join('property_address', 'properties.id', '=', 'property_address.property_id')->where('city' , '=' , $result->thisProperty->address->city)->get();
//               $slider=DB::table('properties')->join('property_address', 'properties.id', '=', 'property_address.property_id')->get();
        }
         else{
             $slider= DB::table('properties')->where('feature_flag', '=' , '0')->join('property_address', 'properties.id', '=', 'property_address.property_id')->limit(10)->get();
             dd($slider);
//             dd($slider);
//             $slider=DB::table('properties')->get();

         }


//        dd($result);
//        dd($slider);
        return view('frontend.blog.detail' , compact('result' , 'slider' , 'sliderFlag'));

    }

}

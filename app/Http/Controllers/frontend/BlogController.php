<?php

namespace App\Http\Controllers\frontend;

use App\Models\frontend\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

}

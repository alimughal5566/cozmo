<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Blog_category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
//use DB;
use Lang;
use Session;

use App\Package;
use App\PaksageImage;
use App\MC;
use Auth;

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
       $blg = $this->blogg->indexBlog();
        return view('admin.blog.home',compact('blg'));

	}
	public function blogAdd()
    {
        $blog_category = $this->blogg->blogAdd();
        return view('admin.blog.add' , compact('blog_category'));//,compact('blog','packages'));
	}

	public function blogStore(Request $request)
	{
//	    dd($request);
        if ($request->hasFile('image')){
//            $data=$this->blog_cat->blogStoredata($request);
            $data = $this->blogg->blogStoredata($request);
//            dd($data);
            if($data){
                Session::flash('success', 'Successfully Added Blog ');
                return redirect()->route('blogHomeView');
            }
            else{
                Session::flash('Failed', 'Some Went Wrong');
                return redirect()->route('blogHomeView');
            }


//      dd($request);


//			return redirect()->back()->withErrors(['error' => $e->getMessage()])->withInput();
		}
	}

	public function blogEdit($id)
	{
	    $blogg = DB::table('blog')->find($id);
        $blog_category = DB::table('blog_categories')->get();
		return view('admin.blog.edit',compact('blogg','blog_category'));
	}

	public function blogUpdate(Request $request)
	{
		// print_r($request->all());exit();



	}

	public function blogDestroy(Request $request)
	{
//	    dd($request);
		$id = $request->input("id");
//		Blog::where("id", $id)->delete();

	   DB::table('blog')->where("id" , $id)->delete();
	}

//    public function apply_sorting_number($number, $blog_id)
//    {
//        $res = Blog::where('sliderstatus', 1)->where("sorting", $number)->first();
//        if($res){
//            if($res->id == $blog_id){
//                echo 'Success';
//            }else if($blog_id == 0){
//                echo 'Sorting number already assigned.';
//            }else{
//                echo 'Sorting number already assigned.';
//            }
//        }else{
//            echo 'Success';
//        }
//    }
}

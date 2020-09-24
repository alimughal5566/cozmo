<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Blog_category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
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
//        $subCat = DB::table("subcategories")
//            ->where("blog_cat_id", 38)
//            ->pluck("title");
//dd($subCat);
       $blg = $this->blogg->indexBlog();
//       dd($blg);
//       dd($blg);
//        dd($blg);
        return view('admin.blog.home',compact('blg'));

	}
	public function blogAdd()
    {

        $blog_category = $this->blogg->blogAdd();
        $property = $blog_category->property;
//        dd($property);
        return view('admin.blog.add' , compact('blog_category' , 'property'));//,compact('blog','packages'));
	}

	public function blogStore(Request $request)
	{
//	    dd($request);

//        dd($request);

            if ($request->featured == '1') {
                $check = DB::table('blog')->where('feature_flag', '=', '1')->count();
                if ($check == 1) {
                    Session::flash('Failed', 'You Can Add Only One Main Featured Blog  ');
                    return redirect()->route('blogHomeView');
                }
            }
            if ($request->featured == '2') {
                $check = DB::table('blog')->where('feature_flag', '=', '2')->count();
//             dd($check);
                if ($check >= 2) {
//                 dd('less than 3');
                    Session::flash('Failed', 'You Can Add Only 2  Featured Blogs  ');
                    return redirect()->route('blogHomeView');
                }
            }



            if ($request->hasFile('image')) {
//            $data=$this->blog_cat->blogStoredata($request);
                $data = $this->blogg->blogStoredata($request);

                if ($data) {
                    Session::flash('success', 'Successfully Added Blog ');
                    return redirect()->route('blogHomeView');
                } else {
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
//		dd($request);
	}
	public function removeFeature($id){
        $data = DB::table('blog')->find($id);
        if ($data->feature_flag == 1 || $data->feature_flag == 2){
//            dd('updating Data');
           $result = DB::table('blog')->where('id' , $id)->Update([
              'feature_flag' => '0',
                'date_updated' => carbon::now(),
            ]);
           if($result){
               Session::flash('success', 'Successfully Removed Blog From Featured ');
               return redirect()->route('blogHomeView');
           }
           else{
               Session::flash('Failed', 'Something Went Wrong ');
               return redirect()->route('blogHomeView');
           }
//           dd($result);
        }
    }
    public function setToMainFeature($id){
        $check=DB::table('blog')->where('feature_flag' ,'=','1')->count();
        if($check==1){
            Session::flash('Failed', 'You Can Add Only One Main Featured Blog ');
            return redirect()->route('blogHomeView');
        }
        else{

            $result = DB::table('blog')->where('id' , $id)->Update([
                'feature_flag' => '1',
                'date_updated' => carbon::now(),
            ]);
            if($result){
                Session::flash('success', ' Blog Set to Main Featured ');
                return redirect()->route('blogHomeView');
            }
            else{
                Session::flash('Failed', 'Something Went Wrong ');
                return redirect()->route('blogHomeView');
            }

        }
    }

    public function setToFeature($id){
        $check=DB::table('blog')->where('feature_flag' ,'=','2')->count();
        if($check>=2){
            Session::flash('Failed', 'You Can Add Only Two Featured Blog ');
            return redirect()->route('blogHomeView');
        }
        else{

            $result = DB::table('blog')->where('id' , $id)->Update([
                'feature_flag' => '2',
                'date_updated' => carbon::now(),
            ]);
            if($result){
                Session::flash('success', ' Blog Set to Featured ');
                return redirect()->route('blogHomeView');
            }
            else{
                Session::flash('Failed', 'Something Went Wrong ');
                return redirect()->route('blogHomeView');
            }

        }

    }
	public function blogDestroy(Request $request)
	{
//	    dd($request);
		$id = $request->input("id");
//		Blog::where("id", $id)->delete();

	   DB::table('blog')->where("id" , $id)->delete();
	}


    public function blogSubCatLoad($country_id){
        $subCat = DB::table("subcategories")
            ->where("blog_cat_id",$country_id)->get();
//        dd($subCat);
        return json_encode($subCat);
//            return response()->json($subCat);
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

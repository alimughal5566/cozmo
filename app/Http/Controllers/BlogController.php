<?php

namespace App\Http\Controllers;

use App\Models\Blog_category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use DB;
use Lang;
use Session;
use App\Blog;
use App\Package;
use App\PaksageImage;
use App\MC;
use Auth;

class BlogController extends Controller
{


    public function __construct()
	{

		$this->middleware('auth');
		$this->middleware('AdminAccess');



    }

	public function index()
	{
//		$blog = Blog::get();
        $blog = DB::table('blogs')->get();

//		return view('admin.blog.index',compact('blog'));
        return view('admin.blog.homeBlog',compact('blog'));

	}
	public function create()
	{
     // dd($request);
	   // dd("create Page");
//		if(Auth::user()) {
//		    dd("im Admin");
//           // return redirect()->back();
//        }
//		else{
//		    dd("im user");
//        }
// 		$packages = Package::orderBy('id','DESC')->get();
// 		$mc_info  = MC::whereIn('id', Package::all()->pluck('mc_id')->toArray())->get();
/*
	$packages = DB::table('packages')->join('multi_competition', 'packages.mc_id', '=', 'multi_competition.id')->get();*/
//	$today = date('Y-m-d');
//    $packages = Package::where('mc_id','!=',0)->where('status', 1)->where('packages.soft_delete', 0)->join('multi_competition', 'packages.mc_id', '=', 'multi_competition.id')->where('multi_competition.end_date', '>', $today)->select('packages.*')->get();
//    $blog=Blog::find($id);
/*$imgss =DB::table('package_images')->where('main_img',1)->get();*/



	/*	$blog = Blog::orderBy('id','DESC')->get();*/
		/*print_r($blog->sliders);exit();
*/
		return view('admin.blog.addBlog');//,compact('blog','packages'));
	}
	public function store(Request $request)
	{

     // dd($request);



//     $packid = $request->package;
//
//    	// dd($request->all());exit();
//    	$desc = $request->description;
//    	if ($desc=="") {
//    		 return redirect('blog/create')->with('alert', 'Please add some Description!')->withInput();
//    	}
//
//    	if (Input::file('image'))
//            {
//            	$inputs = [
//        	'image' => $request->image,
//                ];
//        $rules = [
//        	'image' => 'dimensions:min_width=1140,height=550',
//    		];
//
//    	$validation = \Validator::make( $inputs, $rules );
//
//    	if ( $validation->fails() ) {
//          return redirect('blog/create')->with('alert', 'Upload Image size must be width>=1140,height=500!')->withInput();
//      }
//                $image =Input::file('image');
//                $name = time().'.'.$image->getClientOriginalExtension();
//                $destinationPath = public_path('/blogimages/');
//                $image->move($destinationPath, $name);
//                $images = $name;
//            }
//            else
//            {
//                $images = $request->noimage;
//            }
//		 $blog = new Blog;
//		$pack=$request->status;
//		if ($pack == "on") {
//			$packs= 1;
//			//$blog->sliderstatus = $packs;
//// 			Blog::where('sliderstatus',1)->update(['sliderstatus'=>0]);
//		}
//		else{
//               $packs= 0;
//	}
//		try{
//            $blog->video_status = $request->video;
//			$blog->title = $request->title;
//			$blog->package_id = $packid;
//			$blog->sliderstatus = $packs;
//			$blog->description = $request->description;
//			$blog->image = $images;
//			$blog->sorting = $request->sorting;
//			$success = $blog->save();
//			if ($success) {
//				return redirect()->route('blog.admin');
//			}
//			else{
//				return view('admin.blog.add');
//			}
//
//		}catch (\Exception $e) {
//			DB::rollback();
//			return redirect()->back()->withErrors(['error' => $e->getMessage()])->withInput();
//		}
	}

	public function edit($id, Request $request)
	{
		// $data = Blog::find($id);
		$today = date('Y-m-d');
    $packages = Package::where('mc_id','!=',0)->where('status', 1)->where('packages.soft_delete', 0)->join('multi_competition', 'packages.mc_id', '=', 'multi_competition.id')->where('multi_competition.end_date', '>', $today)->select('packages.*')->get();

       $blog=Blog::find($id);
		return view('admin.blog.edit',compact('packages','blog'));
	}

	public function update(Request $request)
	{
		// print_r($request->all());exit();


		$packid = $request->package;
		$pack=$request->status;
		    if ($pack == "on") {
			$packs= 1;
                $sorting = $request->sorting;
			 //  Blog::where('sliderstatus',1)->update(['sliderstatus'=>0]);
		}
		else{
               $packs= 0;
               $sorting = 0;
	      }
	      $image = $request->image;
    	if($request->hasFile('image'))
            {
            	$inputs = [
        	'image' => $request->image,
                ];
        $rules = [
        	'image' => 'dimensions:min_width=1140,height=550',
    		];

    	$validation = \Validator::make( $inputs, $rules );

    	if ( $validation->fails() ) {
          return redirect('blog/edit/'.$request->id)->with('alert', 'Upload Image size must be width>=1140,height=550!')->withInput();
      }
                $image =Input::file('image');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/blogimages/');
                $image->move($destinationPath, $name);
                $images = $name;
            }
            else
            {
                $images = $request->noimage;
            }

		try{
			$Update = Blog::whereId($request->id)->update([
				'title' => request('title'),
				'video_status' => request('video'),
				'package_id'=> $packid,
				'sliderstatus' => $packs,
				'description' => request('description'),
				'image' => $images,
				'sorting' => $sorting
			]);

			if($Update){
				return redirect()->route('blog.admin');
			}
			else
			{
				return redirect()->back();
			}
		}catch (\Exception $e) {
			DB::rollback();
			return redirect()->back()->withErrors(['error' => $e->getMessage()])->withInput();
		}
	}

	public function destroy(Request $request)
	{
		$id = $request->input("id");
		Blog::where("id", $id)->delete();
	}

    public function apply_sorting_number($number, $blog_id)
    {
        $res = Blog::where('sliderstatus', 1)->where("sorting", $number)->first();
        if($res){
            if($res->id == $blog_id){
                echo 'Success';
            }else if($blog_id == 0){
                echo 'Sorting number already assigned.';
            }else{
                echo 'Sorting number already assigned.';
            }
        }else{
            echo 'Success';
        }
    }
}

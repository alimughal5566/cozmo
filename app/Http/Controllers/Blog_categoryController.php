<?php

namespace App\Http\Controllers;

use App\Models\Blog_category;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Blog_categoryController extends Controller
{
    private $blog_cat;

    public function __construct(Blog_category $blog_cat)
    {

        $this->middleware('auth');
        $this->middleware('AdminAccess');
        $this->blog_cat = $blog_cat;


    }
    public  function blogCategoryIndex(){

        $data=$this->blog_cat->indexBlogCategory();
        // dd($data);
        $blog_category = $data[0];
        $sub_cat = $data[1];
        return view('admin.blog_category.home' , compact('blog_category','sub_cat'));
    }

    public function blogCategoryAdd(){
        $data=DB::table('blog_categories')->get();
//        dd($data);
        return view('admin.blog_category.add',compact('data'));
    }

    public function blogSubCatAdd(Request $request){
//     dd($request);
       if(!($request->category)){
           Session::flash('Failed', 'Select Blog Category');
           return redirect()->route('blog_category.add');

       }
       else{
           $data=$this->blog_cat->blogSubCategoryStoredata($request);
           if($data){
               Session::flash('success', 'Successfully Added Sub Category against');
               return redirect()->route('blog_category.add');
           }
           else{
               Session::flash('Failed', 'Something Wen Wrong');
               return redirect()->route('blog_category.add');
           }


       }
    }
    public function blogCategoryStore(Request $request){
//        dd($request);
if ($request->hasFile('image')){
    $data=$this->blog_cat->blogCategoryStoredata($request);
    if($data){
        Session::flash('success', 'Successfully Added Blog Category');
        return redirect()->route('blog_category.add');
    }
    else{
        Session::flash('Failed', 'Some Went Wrong');
        return redirect()->route('blog_category.home');
    }

//    dd($request->file('image'));
}
else{
    Session::flash('Failed', 'Some Went Wrong');
    return redirect()->route('blog_category.home');
}

    }
    public function blogCategoryEdit($id){
        $data=$this->blog_cat->blogCategoryEditData($id);
        $blog_category = $data;
        $data=DB::table('blog_categories')->get();


//        dd($blog_category);
//        dd($data);
//        dd($blog_category);
        return view('admin.blog_category.edit' , compact("blog_category",'data' ));

    }

    public function blogSubCatEdit(Request $request)
    {
//     dd($request);
        if (!($request->category)) {
            Session::flash('Failed', 'Select Blog Category');
            return redirect()->route('blog_category.add');

        } else {
            $data = $this->blog_cat->blogSubCategoryStoredata($request);
            if ($data) {
                Session::flash('success', 'Successfully Added Sub Category against');
                return redirect()->route('blog_category.add');
            } else {
                Session::flash('Failed', 'Something Wen Wrong');
                return redirect()->route('blog_category.add');
            }


        }
    }
    public function blogCategoryUpdate(Request $request){
//        dd($request);
//        dd($request->id);
        if ($request->hasFile('image')){
//            dd('has file');
            $data=$this->blog_cat->blogCategoryUpdatedata($request);
//            dd($data);
            if($data){
                Session::flash('success', 'Successfully Updated Blog Category');
                return redirect()->route('blog_category.home');
            }
            else{
                Session::flash('Failed', 'Some Went Wrong');
                return redirect()->route('blog_category.home');
            }

//    dd($request->file('image'));
        }
        else{
            Session::flash('Failed', 'Some Went Wrong');
            return redirect()->route('blog_category.home');
        }
//        return view('admin.blog_category.edit');
    }

    public function blogCategoryDestroy(Request $request){
//        $user_id = $request->input("id");
//        $user = DB::table('blog_category')->where('id', $user_id)->first();
//        $response = DB::table('blog_category')->where('id',$user_id)->delete();
//        if($response){
//            echo "Successfully Deleted.";exit;
//        }
//        else{
//            echo "No Deleted.";exit;
//
//        }

//        $user_id = $request->input("id");
////        dd($user_id);
////dd($data);
//        if($data){
//            echo "User have purchased tickets against Competition, You cannot delete.";exit;
//        }

        //Daud controller
        $id = $request->input("id");
        Blog_category::where("id", $id)->delete();


    }

}

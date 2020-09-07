<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use DB;
use Auth;
use Lang;
use Session;
use App\Category;


class CategoryController extends Controller
{
	public function __construct()
    {
      $this->middleware('auth');
       
        
    }
	public function index()
	{
		$iframe = Category::orderBy('id','DESC')->get();
		// print_r($iframe);
		// exit();
		return view('admin.category.index',compact('iframe'));
	}
	public function create()
	{
		return view('admin.category.add');
	}
	public function store(Request $request)
	{
    	// dd($request->all());
    	$iframe = new Category;
		try{
			$iframe->title = $request->title;
			$iframe->subtitle = $request->subtitle;
			$success = $iframe->save();
			if ($success) {
				return redirect('category');
			}
			else{
				return view('admin.category.add');
			}

		}catch (\Exception $e) {
			DB::rollback();
			return redirect()->back()->withErrors(['error' => $e->getMessage()])->withInput();
		}
	}

	public function edit($id)
	{
		$data = Category::find($id);
		return view('admin.category.edit',compact('data'));
	}
	public function update(Request $request)
	{      
		
		try{
			$Update = Category::whereId($request->id)->update([
				'title' => request('title'),
				'subtitle' => request('subtitle'),
			]);

			if($Update){
				return redirect('category');
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
		Category::where("id", $id)->delete();
	}
}

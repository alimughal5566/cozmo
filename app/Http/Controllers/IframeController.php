<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use DB;
use Lang;
use Session;
use App\Iframe;

class IframeController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');

	}
	public function index()
	{
		$iframe = Iframe::orderBy('id','DESC')->get();
		return view('admin.iframe.index',compact('iframe'));
	}
	public function create()
	{
		return view('admin.iframe.add');
	}
	public function store(Request $request)
	{
    	// dd($request->all());
    	$iframe = new Iframe;
		try{
			$iframe->title = $request->title;
			$iframe->description = $request->description;
			$success = $iframe->save();
			if ($success) {
				return redirect()->route('iframe.admin');
			}
			else{
				return view('admin.blog.add');
			}

		}catch (\Exception $e) {
			DB::rollback();
			return redirect()->back()->withErrors(['error' => $e->getMessage()])->withInput();
		}
	}

	public function edit($id)
	{
		$data = Iframe::find($id);
		return view('admin.iframe.edit',compact('data'));
	}
	public function update(Request $request)
	{
		
		try{
			$Update = Iframe::whereId($request->id)->update([
				'title' => request('title'),
				'description' => request('description'),
				

			]);

			if($Update){
				return redirect()->route('iframe.admin');
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
		Iframe::where("id", $id)->delete();
	}
}

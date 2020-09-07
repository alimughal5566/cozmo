<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use DB;
use Lang;
use Session;
use App\Aboutus;

class AboutusController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
        $this->middleware('AdminAccess');
	}
	public function index()
	{
		// echo request()->segment(2);
		// exit;
		$aboutus = Aboutus::orderBy('id','DESC')->get();
		return view('admin.aboutus.index',compact('aboutus'));
	}
	public function create()
	{
		return view('admin.aboutus.add');
	}
	public function store(Request $request)
	{
    	 // dd($request->all());
		$aboutus = new Aboutus;
		try{
			$aboutus->title = $request->title;
			$aboutus->description = $request->description;
			$aboutus->slug = $request->slug;
			$success = $aboutus->save();
			if ($success) {
				return redirect()->route('pages.admin');
			}
			else{
				return view('admin.aboutus.add');
			}

		}catch (\Exception $e) {
			DB::rollback();
			return redirect()->back()->withErrors(['error' => $e->getMessage()])->withInput();
		}
	}

	public function edit($id)
	{
		$data = Aboutus::find($id);
		return view('admin.aboutus.edit',compact('data'));
	}
	public function update(Request $request)
	{
		try{
			$Update = Aboutus::whereId($request->id)->update([
				'title' => request('title'),
				'description' => request('description'),
				'slug' => request('slug')

			]);

			if($Update){
				return redirect()->route('pages.admin');
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
		Aboutus::where("id", $id)->delete();
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use DB;
use Lang;
use Session;
use App\Faq;


class FaqController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('AdminAccess');

	}
	public function index()
	{
		$faqs = Faq::orderBy('id','DESC')->get();
		return view('admin.faqs.index',compact('faqs'));
	}
	public function create()
	{
		return view('admin.faqs.add');
	}
	public function store(Request $request)
	{
    	 // dd($request->all());
		$faqs = new Faq;
		try{
			$faqs->title = $request->title;
			$faqs->description = $request->description;
			$success = $faqs->save();
			if ($success) {
				return redirect()->route('faqs.admin');
			}
			else{
				return view('admin.faqs.add');
			}

		}catch (\Exception $e) {
			DB::rollback();
			return redirect()->back()->withErrors(['error' => $e->getMessage()])->withInput();
		}
	}

	public function edit($id)
	{
		$data = Faq::find($id);
		return view('admin.faqs.edit',compact('data'));
	}
	public function update(Request $request)
	{
		try{
			$Update = Faq::whereId($request->id)->update([
				'title' => request('title'),
				'description' => request('description'),

			]);

			if($Update){
				return redirect()->route('faqs.admin');
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
		Faq::where("id", $id)->delete();
	}
}


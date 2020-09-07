<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;
use Validator;
use Illuminate\Support\Str;
use DB;

class CouponController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('AdminAccess');
    }

    public function index() 
    { 
    	$coupon = Coupon::all();

    	return view('admin.coupon.home', compact('coupon'));
    }

    public function add()
    {
    	return view('admin.coupon.add');
    }

    public function store(Request $request)
    {
           $validator = Validator::make($request->all(), [ 
                'start_date' => 'required', 
                'end_date' => 'required', 
                'title' => 'required', 
                'percentage' => 'required|integer|between:1,20', 
            ]);
    if ($validator->fails()) { 
                return redirect()->back()->with('alert', 'The percentage must be between 1 and 20')->withInput();            
            }

        do
        {
            $code = Str::random(6);
            $coupon_code = Coupon::where('coupon', $code)->first();
        }
        while(!empty($coupon_code));

        // print_r($code);exit();

        $coupen = new Coupon;
        $coupen->start_date = $request->start_date;
        $coupen->end_date = $request->end_date;
        $coupen->coupon = $code; 
        $coupen->title = $request->title;
        $coupen->percentage = $request->percentage;
        $success = $coupen->save();

        if($success)
        {
            return redirect('discount_coupon')->with('success','Coupon Added Successfully');
        }else{
            return redirect()->back()->with('alert', 'There is something wrong')->withInput();   
        }
    }

    public function delete(Request $request)
    {
        Coupon::where('id',$request->id)->delete();
    }

    public function view_coupon_use($id)
    {
       $used_by = DB::table('coupon_data')->where('coupon_id',$id)->get();
       $coupon = Coupon::find($id);
       return view('admin.coupon.detail',compact('used_by','coupon')); 
    }



}

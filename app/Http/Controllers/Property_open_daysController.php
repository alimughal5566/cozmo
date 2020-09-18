<?php

namespace App\Http\Controllers;
use App\Models\Property_open_days;
use Illuminate\Support\Facades\DB;
use Session;

use Illuminate\Http\Request;

class Property_open_daysController extends Controller
{
    private $propertyOpenDay;

    public function __construct(Property_open_days $propertyOpenDay)
    {

        $this->middleware('auth');
        $this->middleware('AdminAccess');
        $this->propertyOpenDay = $propertyOpenDay;
    }

    public function index(){
        $result = $this->propertyOpenDay->propertyOpenDaysIndex();
//        dd($result);
        return view('admin.property_open_days.home', compact('result'));
    }

    public function dayAdd(){
        $property = $this->propertyOpenDay->propertyOpenDaysAdd();
        return view('admin.property_open_days.add', compact('property'));
    }


    public function dayStore(Request $request){


//        dd($request);

//       $show =  unserialize($data);
//       dd($show);
        $data=$this->propertyOpenDay->propertyOpenDaysStoredata($request);
//        dd($data);
        if($data){
            Session::flash('success', 'Successfully Added Property Open Days');
            return redirect()->route('propertyOpenDaysHomeView');
        }
        else{
            Session::flash('Failed', 'Some Went Wrong');
            return redirect()->route('propertyOpenDaysHomeView');

//                return redirect()->route('blog_category.home');


//    dd($request->file('image'));
        }


    }

    public function dayEdit($id){
        $result=$this->rental_price_history->propertyOpenDaysEditData($id);
        $data = $result[0];
        $propty = $result[1];
        return view('admin.property_open_days.edit' , compact("data" ,"propty" ));
    }

    public function dayUpdate(Request $request){
//      dd($request);
//        dd($request->id);

//            dd('has file');
        $data=$this->rental_price_history->propertyOpenDaysUpdatedata($request);
//            dd($data);
        if($data){
            Session::flash('success', 'Successfully Updated Blog Category');
            return redirect()->route('propertyOpenDaysHomeView');
        }
        else{
            Session::flash('Failed', 'Some Went Wrong');
            return redirect()->route('propertyOpenDaysHomeView');
        }

//    dd($request->file('image'));


//        return view('admin.blog_category.edit');
    }

    public function dayDestroy(Request $request){
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
        DB::table('property_open_days')->where("id", $id)->delete();


    }


}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Session;
use App\Models\Department;
use Illuminate\Http\Request;
class DepartmentController extends  Controller
{
    private $department;

    public function __construct(Department $department)
    {

        $this->middleware('auth');
        $this->middleware('AdminAccess');
        $this->department = $department;
    }

    public function index(){
        $result = $this->department->departmentIndex();
        $data = $result[0];  //rental Price History
        $property = $result[1];  //Properties
//        dd($property);
        return view('admin.departments.home', compact('data','property'));
    }

    public function departmentAdd(){
        $property = $this->department->departmentAdd();
        return view('admin.departments.add', compact('property'));
    }


    public function departmentStore(Request $request){
//        dd($request);
        $data=$this->department->departmentStoredata($request);
        if($data){
            Session::flash('success', 'Successfully Added Department');
            return redirect()->route('departmentsHomeView');
        }
        else{
            Session::flash('Failed', 'Some Went Wrong');
            return redirect()->route('departmentsHomeView');

//                return redirect()->route('blog_category.home');


//    dd($request->file('image'));
        }


    }

    public function departmentEdit($id){
//        dd($id);
        $result=$this->department->departmentEditData($id);
        $data = $result[0];
        $propty = $result[1];
        return view('admin.departments.edit' , compact("data" ,"propty" ));
    }

    public function departmentUpdate(Request $request){
//      dd($request);
//        dd($request->id);

//            dd('has file');
        $data=$this->department->departmentUpdatedata($request);
//            dd($data);
        if($data){
            Session::flash('success', 'Successfully Updated Department');
            return redirect()->route('departmentsHomeView');
        }
        else{
            Session::flash('Failed', 'Some Went Wrong');
            return redirect()->route('departmentsHomeView');
        }

//    dd($request->file('image'));


//        return view('admin.blog_category.edit');
    }

    public function departmentDestroy(Request $request){
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
        DB::table('departments')->where("id", $id)->delete();


    }




}

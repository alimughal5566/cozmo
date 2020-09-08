<?php

namespace App\Http\Controllers;

use App\MC;
use App\Models\ProprtyType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProprtyTypeController extends Controller
{

    public function propertyHomeView()
    {
        $user = Auth::user();
        if($user->user_role==0)
        {
            return redirect('/');
        }
        $data =DB::table('property_types')->get();
//  dd($data);
        return view('admin.property.property-type-home', compact('data'));
    }


    public function deletePropertyType(Request $request){
        $user_id=$request->input("id");
//        dd($user_id);
        $response=DB::table('property_types')->where('id',$user_id)->delete();
//        dd($response);
        if($response){
            echo "Successfully Deleted.";exit;
        }
    }


    public function addPropertyType(){
        return view('admin.property.add-property-type');
    }


    public function createPropertyType(Request $request){
        $data=DB::table('property_types')->insert([
            "title"=>$request['title'],
        ]);
        if ($data){
         return redirect()->back()->with('message','save successfully');
        }
    }


    public function updatePropertyType($id){
        $data=DB::table('property_types')->where('id',$id)->get();
        return view('admin.property.update-property-type',compact('data'));
}

    public function storeUpdatePropertyType(Request $request){
//dd($request);
        $data=DB::table('property_types')->where('id',$request->user_id)->update([
            "title"=>$request['title'],
        ]);
        if ($data){
            return redirect()->route('propertyHomeView')->with('message','updated successfully');
        }

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function saleHomeView()
    {
        $user = Auth::user();
        if($user->user_role==0)
        {
            return redirect('/');
        }
        $data =DB::table('property_sale_type')->get();
//  dd($data);
        return view('admin.property.sale-type-home', compact('data'));
    }

    public function addSaleType(){
        return view('admin.property.add-sale-type');
    }

    public function createSaleType(Request $request){
        $data=DB::table('property_sale_type')->insert([
            "title"=>$request['title'],
        ]);
        if ($data){
            return redirect()->route('saleHomeView')->with('message','save successfully');
        }
    }

    public function storeUpdateSaleType(Request $request){
//dd($request);
        $data=DB::table('property_sale_type')->where('id',$request->user_id)->update([
            "title"=>$request['title'],
        ]);
        if ($data){
            return redirect()->route('saleHomeView')->with('message','updated successfully');
        }

    }

    public function updateSaleType($id){
        $data=DB::table('property_sale_type')->where('id',$id)->get();
        return view('admin.property.update-sale-type',compact('data'));
    }

    public function deleteSaleType(Request $request){
        $user_id=$request->input("id");
//        dd($user_id);
        $response=DB::table('property_sale_type')->where('id',$user_id)->delete();
//        dd($response);
        if($response){
            echo "Successfully Deleted.";exit;
        }
    }


}

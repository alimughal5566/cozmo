<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Session;
use App\Models\Rental_price_history;
use Illuminate\Http\Request;

class Rental_price_historyController extends Controller
{
    private $rental_price_history;

    public function __construct(Rental_price_history $rental_price_history)
    {

        $this->middleware('auth');
        $this->middleware('AdminAccess');
        $this->rental_price_history = $rental_price_history;
    }

    public function index(){
     $result = $this->rental_price_history->rentalPriceHistoryIndex();
     $data = $result[0];  //rental Price History
     $property = $result[1];  //Properties
//        dd($property);
     return view('admin.rentalPriceHistory.home', compact('data','property'));
    }

    public function rentalAdd(){
        $property = $this->rental_price_history->rentalPriceHistoryAdd();
        return view('admin.rentalPriceHistory.add', compact('property'));
    }


    public function rentalStore(Request $request){
//        dd($request);

            $data=$this->rental_price_history->rentalPriceHistoryStoredata($request);
            if($data){
                Session::flash('success', 'Successfully Added Blog Category');
                return redirect()->route('rentalPriceHistoryHomeView');
            }
            else{
                Session::flash('Failed', 'Some Went Wrong');
                return redirect()->route('rentalPriceHistoryHomeView');

//                return redirect()->route('blog_category.home');


//    dd($request->file('image'));
        }


    }

    public function rentalEdit($id){
        $result=$this->rental_price_history->rentalPriceHistoryEditData($id);
        $data = $result[0];
        $propty = $result[1];
        return view('admin.rentalPriceHistory.edit' , compact("data" ,"propty" ));
    }

    public function rentalUpdate(Request $request){
//      dd($request);
//        dd($request->id);

//            dd('has file');
            $data=$this->rental_price_history->rentalPriceHistoryUpdatedata($request);
//            dd($data);
            if($data){
                Session::flash('success', 'Successfully Updated Blog Category');
                return redirect()->route('rentalPriceHistoryHomeView');
            }
            else{
                Session::flash('Failed', 'Some Went Wrong');
                return redirect()->route('rentalPriceHistoryHomeView');
            }

//    dd($request->file('image'));


//        return view('admin.blog_category.edit');
    }

    public function rentalDestroy(Request $request){
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
        DB::table('rental_price_history')->where("id", $id)->delete();


    }




}

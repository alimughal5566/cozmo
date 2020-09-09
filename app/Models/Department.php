<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Department extends Model
{
    protected $fillable = [
        'name', 'rental_price', 'property_id', 'unique_no',
    ];

    public function departmentIndex()
    {
        $data = DB::table('departments')->get();
//        dd($data);
        $prop = DB::table('properties')->get();
//dd($prop);
//        $rentalPriceHistory = Rental_price_history::all();
        return [$data, $prop];
    }
    public function departmentAdd(){
        $prop =  DB::table('properties')->get();
        return $prop;


    }
    public  function departmentStoredata($request){
//        dd($request);
//dd($request);
        $data =   DB::table('departments')->insert([

            'name' => $request->name,
            'property_id' => $request->property_id,
            'unique_no'=> $request->unique_no,
            'rental_price'=>$request->rental_price,
            'date_created' => carbon::now(),
        ]);
        return $data;
    }

    public  function departmentUpdatedata($request){
//        dd($request);


        $data = DB::table('departments')->where('id' , $request->id)->Update([
            'name' => $request->name,
            'property_id' => $request->property_id,
            'unique_no'=> $request->unique_no,
            'rental_price'=>$request->rental_price,
            'date_updated' => carbon::now(),
        ]);
//        dd($data);
//        $data = Blog_category:: Update([
//            'title' => $request['title'],
//            'image' => $name,
//            'date_created' =>carbon::now() ,
//        ]);
        return $data;
    }



    public function departmentEditData($id){
//        $data = Blog_category::find($id);
//        dd($data);
//     $data =    Rental_price_history::find($id);
//     dd($data);
        $department = DB::table('departments')->find($id);
        $prop =  DB::table('properties')->get();
//        dd($data);
        return [$department  , $prop];

    }
    }

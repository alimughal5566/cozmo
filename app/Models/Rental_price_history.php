<?php

namespace App\Models;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;


class Rental_price_history extends Model
{

    protected $fillable = [
        'property_id', 'rent',
    ];

    public function rentalPriceHistoryIndex(){
        $rentalPriceHistory = DB::table('rental_price_history')->get();
        $prop =  DB::table('properties')->get();

//        $rentalPriceHistory = Rental_price_history::all();
        return [$rentalPriceHistory,$prop];
    }
public function rentalPriceHistoryAdd(){
    $prop =  DB::table('properties')->get();
    return $prop;


}
    public  function rentalPriceHistoryStoredata($request){
//        dd($request);
//dd($request);
        $data =   DB::table('rental_price_history')->insert([
            'rent' => $request->rent,
            'property_id' => $request->property_id,
            'date_changed' => carbon::now(),
        ]);
        return $data;
    }

    public  function rentalPriceHistoryUpdatedata($request){
//        dd($request);


        $data = DB::table('rental_price_history')->where('id' , $request->id)->Update([
            'rent' => $request->rent,
            'property_id' => $request->property_id,
            'date_changed' => carbon::now(),
        ]);
//        dd($data);
//        $data = Blog_category:: Update([
//            'title' => $request['title'],
//            'image' => $name,
//            'date_created' =>carbon::now() ,
//        ]);
        return $data;
    }



    public function rentalPriceHistoryEditData($id){
//        $data = Blog_category::find($id);
//        dd($data);
//     $data =    Rental_price_history::find($id);
//     dd($data);
        $rph = DB::table('rental_price_history')->find($id);
        $prop =  DB::table('properties')->get();
//        dd($data);
        return [$rph  , $prop];

    }

}

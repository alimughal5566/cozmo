<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Property_open_days extends Model
{
    protected $fillable = [
        'property_id', 'day_name',
    ];

    public function propertyOpenDaysIndex(){
        $pod = DB::table('property_open_days')->get();
        foreach ($pod as $data){
            $data->property_name=DB::table('properties')->where('id',$data->property_id)->pluck('title')->first();
        }
        return $pod ;
    }
    public function propertyOpenDaysAdd(){
        $prop =  DB::table('properties')->get();
        return $prop;
    }
    public  function propertyOpenDaysStoredata($request){
        $serializeData =serialize($request->days);
//        dd($serializeData);
        $data =   DB::table('property_open_days')->insert([
            'day_name' => $serializeData,
            'property_id' => $request->property_id,
            'date_created' => carbon::now(),
        ]);
//        dd($data);
        return $data;
    }

    public  function propertyOpenDaysUpdatedata($request){
//        dd($request);


        $data = DB::table('property_open_days')->where('id' , $request->id)->Update([
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



    public function propertyOpenDaysEditData($id){
//        $data = Blog_category::find($id);
//        dd($data);
//     $data =    Rental_price_history::find($id);
//     dd($data);
        $rph = DB::table('property_open_days')->find($id);
        $prop =  DB::table('properties')->get();
//        dd($data);
        return [$rph  , $prop];

    }
}

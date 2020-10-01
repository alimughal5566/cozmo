<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PropertiesController extends Controller

{
        public  function propertiesIndex(){

        $properties = DB::table('properties')->get();

//        dd($properties);
            foreach ($properties as $property){
                     if($property->buildings != 'false') {
                         $dta = DB::table('building_info')->where('id', $property->buildings)->pluck('name')->first();
//                dd($dta);
                         $property->building_name = $dta;
                     }

            }
//            dd($properties);
//            $building = DB::table('building_info')->get();
//        dd($building);
        return view('admin.properties.home' , compact('properties'));
    }
        public function propertiesAdd()
        {
            $building = DB::table('building_info')->get();

            return view('admin.properties.add_property', compact('building'));


        }


    public  function propertiesStore(Request $request ){
//        dd($request);

        if($files=$request->file('main_image')) {
//            dd('well');
            $name = $files->getClientOriginalName();
            $files->move(public_path('images\cozmo'), $name);
//            dd($name);

        }
//        dd($request);
        $data=DB::table('properties')->insert([
            'feature_flag' => $request['feature_flag'],
            'buildings' => $request->buildings ?? 'false',
            'title' => $request['Title'],
            'short_title' => $request['short_title'],
            'short_description' => $request['short_description'],
            'main_image' => $name ?? 'no image',
            'video' => $request['video'],
            'price' => $request['price'],
            'virtual_view_video' => $request['virtual_view_video'],
            'virtual_view_3d' => $request['virtual_view_3d'],
            'virtual_view_3d_url' => $request['virtual_view_3d_url'],
            'virtual_view_video_url' => $request['virtual_view_video_url'],
            'studio' => $request['studio'],
            'property_type' => $request['property_type'],
            'property_for' => $request['property_for'],
            'no_of_bedroom' => $request['no_of_bedroom'],
            'no_of_bathrooms' => $request['no_of_bathrooms'],
            'status' => $request['status'],
            'square_feet' => $request['square_feet'],
            'video_chat' => $request['video_chat'],
            'description' => $request['description'],
            'preware_property_type' => $request['preware_property_type'],
            'new_developments' => $request['new_developments'],
            'income_restricted' => $request['income_restricted'],
            'maintenance' => $request['maintenance'],
            'taxes' => $request['taxes'],
            'year_built_from' => $request['year_built_from'],
            'price_per_square_feet' => $request['price_per_square_feet'],
            'include_unknow' => $request['include_unknow'],
            'zoned_for_school' => $request['zoned_for_school'],
            'zip_code' => $request['zip_code'],
            'is_featured' => $request['is_featured'],
            'date_created' =>carbon::now() ,
            'date_updated' => $request['date_updated'],
            'buying_price' => $request['buying_price'],
            'selling_price' => $request['selling_price'],
            'custom_boundary' => $request['custom_boundary'],
            'rental_control' => $request['rental_control'],
            'unit_options' => $request['unit_options'],
            'by_owner' => $request['by_owner'],
            'available_on' => $request['available_on'],
            'available_before' => $request['available_before'],
            'condos' => $request['condos'],
            'co_ops' => $request['co_ops'],
            'multi_familes' => $request['multi_familes'],
            'building_new_development_opts' => $request['building_new_development_opts'],
            'floor_plan_image' => $request['floor_plan_image'],
            'sales_launch_date' => $request['sales_launch_date'],
            'availability' => $request['availability'],
            'cozmo_real_estate_verified' => $request['cozmo_real_estate_verified'],
            'no_fee' => $request['no_fee'] ?? 'NO FEE',
            'estimated_monthly_payment' => $request['estimated_monthly_payment'],
            'sponsor_unit' => $request['sponsor_unit'],
        ]);
        dd('homepage');
        return redirect()->route('properties.home')->with('success', ' Create Successfuly');
    }
    public function propertiesEdit ($id)
    {
        $user = DB::table('properties')->where('id',$id)->first();
        $building = DB::table('building_info')->get();
//        dd($user);
        return view('admin.properties.edit',compact("user",'building'));
    }
    public function update(Request $request)
    {
//dd($request);

        if($files=$request->file('main_image')) {
//            dd('well');
            $name = $files->getClientOriginalName();
            $files->move(public_path('images\cozmo'), $name);
//            dd($name);

        }
        $success = DB::table('properties')->where('id', $request->user_id)->update([
            'feature_flag' => $request['feature_flag'],
            'title' => $request['Title'],
            'short_title' => $request['short_title'],
            'short_description' => $request['short_description'],
            'main_image' => $name ?? 'no image',
            'video' => $request['video'],
            'price' => $request['price'],
            'virtual_view_video' => $request['virtual_view_video'],
            'virtual_view_3d' => $request['virtual_view_3d'],
            'virtual_view_3d_url' => $request['virtual_view_3d_url'],
            'virtual_view_video_url' => $request['virtual_view_video_url'],
            'studio' => $request['studio'],
            'property_type' => $request['property_type'],
            'property_for' => $request['property_for'],
            'no_of_bedroom' => $request['no_of_bedroom'],
            'no_of_bathrooms' => $request['no_of_bathrooms'],
            'status' => $request['status'],
            'square_feet' => $request['square_feet'],
            'video_chat' => $request['video_chat'],
            'description' => $request['description'],
            'preware_property_type' => $request['preware_property_type'],
            'new_developments' => $request['new_developments'],
            'income_restricted' => $request['income_restricted'],
            'maintenance' => $request['maintenance'],
            'taxes' => $request['taxes'],
            'year_built_from' => $request['year_built_from'],
            'price_per_square_feet' => $request['price_per_square_feet'],
            'include_unknow' => $request['include_unknow'],
            'zoned_for_school' => $request['zoned_for_school'],
            'zip_code' => $request['zip_code'],
            'is_featured' => $request['is_featured'],
            'date_created' =>carbon::now() ,
            'date_updated' => $request['date_updated'],
            'buying_price' => $request['buying_price'],
            'selling_price' => $request['selling_price'],
            'custom_boundary' => $request['custom_boundary'],
            'rental_control' => $request['rental_control'],
            'unit_options' => $request['unit_options'],
            'by_owner' => $request['by_owner'],
            'available_on' => $request['available_on'],
            'available_before' => $request['available_before'],
            'condos' => $request['condos'],
            'co_ops' => $request['co_ops'],
            'multi_familes' => $request['multi_familes'],
            'building_new_development_opts' => $request['building_new_development_opts'],
            'floor_plan_image' => $request['floor_plan_image'],
            'sales_launch_date' => $request['sales_launch_date'],
            'availability' => $request['availability'],
            'cozmo_real_estate_verified' => $request['cozmo_real_estate_verified'],
            'no_fee' => $request['no_fee'] ?? 'NO FEE',
            'estimated_monthly_payment' => $request['estimated_monthly_payment'],
            'sponsor_unit' => $request['sponsor_unit'],

        ]);

        if ($success) {
//            dd('homepage');
            return redirect()->route('properties.home')->with('success', 'Update Successfuly');
        }
        }
    public function delete(Request $request)
    {
        $user_id = $request->input("id");
//        dd($user_id);
        $response = DB::table('properties')->where('id', $user_id)->delete();
//        dd($response);
        if ($response) {
            echo "Successfully Deleted.";
            exit;
        }
    }
}


<?php

namespace App\Http\Controllers\frontend;
use App\Models\frontend\Properties;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PropertiesController extends Controller
{

    private $property;
    public function __construct(Properties $property )
    {
        $this->middleware('auth');
        $this->middleware('AdminAccess');
        $this->property = $property;
    }

    public function index(){
//        $rentals = DB::table('properties')->where('property_for' , '=' , 'rentals')->get();
        $appartment= DB::table('properties')->where('property_type' , 'appartment')->where('feature_flag', '=' , '0')->join('property_address', 'properties.id', '=', 'property_address.property_id')->get();
        $random_feature_right = DB::table('properties')->where('feature_flag', '=' , '1')->inRandomOrder()->orderBy('title' , 'asc')->limit(3)->join('property_address', 'properties.id', '=', 'property_address.property_id')->get();
        $random_feature_left = DB::table('properties')->join('property_address', 'properties.id', '=', 'property_address.property_id')->where('feature_flag', '=' , '1')->limit(2)->get();
        $latestTopBlog = DB::table('blog')->where('feature_flag','0')->orderBy('date_created')->limit(1)->first();

//        $rt = $latestTopBlog->id;
        $latestBlog = DB::table('blog')->where('id' ,'!=' , $rt)->where('feature_flag' , '0')->orderBy('date_created')->limit(3)->get();

        return view('frontend.home' , compact('random_feature_right','random_feature_left' ,'appartment','latestTopBlog','latestBlog'));
    }
    public function propertyDetail($id){
$data=DB::table('properties')->find($id);
$address = DB::table('property_address')->where('id'  , $id)->first();
//$data->addresses = $address;
//dd($data);
        return view('frontend.property.detail',compact('data', 'address'));
    }

}

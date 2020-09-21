<?php

namespace App\Http\Controllers\frontend;
use App\Models\frontend\Properties;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use function MongoDB\BSON\toPHP;

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

        $rt = $latestTopBlog->id;
        $latestBlog = DB::table('blog')->where('id' ,'!=' , $rt)->where('feature_flag' , '0')->orderBy('date_created')->limit(3)->get();

        $cate = DB::table('subcategories')->where('title' , '=' , 'Most Popular')->first();
//        dd($cate);
        $TopmostPopular = DB::table('blog')->where('feature_flag' , '=' ,'0')->where('sub_cate_id' , '=' , $cate->id)->orderBy('date_created')->limit(1)->first();
//        dd($TopmostPopular);
        $mostPopular = DB::table('blog')->where('id', '!=' ,$TopmostPopular->id )->where('feature_flag' , '=' ,'0')->where('sub_cate_id' , '=' , $cate->id)->orderBy('date_created')->limit(3)->get();
//        dd($mostPopular);
        $trendsData = DB::table('blog_categories')->where('title' , 'TRENDS AND DATA')->get();
//        dd($trendsData);
        return view('frontend.home' , compact('random_feature_right','random_feature_left' ,'appartment','latestTopBlog','latestBlog' , 'TopmostPopular' ,'mostPopular'));
    }

    public function propertyDetail($id){
        $data=DB::table('properties')->find($id);
        $address = DB::table('property_address')->where('id'  , $id)->first();
        $saleHistory=DB::table('listing_sale_price_changes')->where('id',$id)->latest('date_change')->first();
        //$data->addresses = $address;
        //dd($data);
        return view('frontend.property.detail',compact('data', 'address'));
    }

}

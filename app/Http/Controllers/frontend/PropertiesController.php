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
        $appartment= DB::table('properties')->where('property_type' , 'appartment')->where('property_for' , 'sales')->where('feature_flag', '=' , '0')->join('property_address', 'properties.id', '=', 'property_address.property_id')->get();
        $random_feature_right = DB::table('properties')->where('feature_flag', '=' , '1')->inRandomOrder()->orderBy('title' , 'asc')->limit(3)->join('property_address', 'properties.id', '=', 'property_address.property_id')->get();
        $random_feature_left = DB::table('properties')->join('property_address', 'properties.id', '=', 'property_address.property_id')->where('feature_flag', '=' , '1')->limit(2)->get();
        $latestTopBlog = DB::table('blog')->where('type' , 'sales')->where('feature_flag','0')->orderBy('date_created' , 'desc')->limit(1)->first();
//        dd($latestTopBlog);
        $rt = $latestTopBlog->id;
        $latestBlog = DB::table('blog')->where('type' , 'sales')->where('id' ,'!=' , $rt)->where('feature_flag' , '0')->orderBy('date_created' , 'desc')->limit(3)->get();
//dd($latestBlog);
        $TopmostPopular = DB::table('blog')->where('type' , 'sales')->where('feature_flag' , '=' ,'0')->orderBy('view_count' , 'desc')->limit(1)->first();
//        dd($TopmostPopular);
//        dd($TopmostPopular);
        $mostPopular = DB::table('blog')->where('type' , 'sales')->where('id', '!=' ,$TopmostPopular->id )->where('feature_flag' , '=' ,'0')->orderBy('view_count' , 'desc')->limit(3)->get();
//        dd($mostPopular);
        $trendsData_id = DB::table('blog_categories')->where('title' , 'TRENDS AND DATA')->pluck('id')->first();
        $topTrnd = DB::table('blog')->where('type' , 'sales')->where('feature_flag' , '=' ,'0')->where('blog_category_id' , $trendsData_id)->orderBy('view_count' , 'desc')->limit(1)->first();
//        dd($topTrnd);
        $trnd = DB::table('blog')->where('type' , 'sales')->where('feature_flag' , '=' ,'0')->where('blog_category_id' , $trendsData_id)->where('id', '!=' ,$topTrnd->id )->orderBy('view_count' , 'desc')->limit(3)->get();
//       dd($Trnd);
        return view('frontend.home' , compact('random_feature_right','random_feature_left' ,'appartment','latestTopBlog','latestBlog' , 'TopmostPopular' ,'mostPopular' , 'topTrnd' , 'trnd'));
    }
    public function rentalsIndex(){

        $appartment= DB::table('properties')->where('property_type' , 'appartment')->where('property_for' , 'rentals')->where('feature_flag', '=' , '0')->join('property_address', 'properties.id', '=', 'property_address.property_id')->get();
        $random_feature_right = DB::table('properties')->where('feature_flag', '=' , '1')->inRandomOrder()->orderBy('title' , 'asc')->limit(3)->join('property_address', 'properties.id', '=', 'property_address.property_id')->get();
        $random_feature_left = DB::table('properties')->join('property_address', 'properties.id', '=', 'property_address.property_id')->where('feature_flag', '=' , '1')->limit(2)->get();
        $latestTopBlog = DB::table('blog')->where('type' , 'rentals')->where('feature_flag','0')->orderBy('date_created' , 'desc')->limit(1)->first();

        $rt = $latestTopBlog->id;
        $latestBlog = DB::table('blog')->where('type' , 'rentals')->where('id' ,'!=' , $rt)->where('feature_flag' , '0')->orderBy('date_created','desc')->limit(3)->get();

        $TopmostPopular = DB::table('blog')->where('type' , 'rentals')->where('feature_flag' , '=' ,'0')->orderBy('view_count' , 'desc')->limit(1)->first();
//        dd($TopmostPopular);
        $mostPopular = DB::table('blog')->where('type' , 'rentals')->where('id', '!=' ,$TopmostPopular->id )->where('feature_flag' , '=' ,'0')->orderBy('view_count' , 'desc')->limit(3)->get();
//        dd($mostPopular);
        $trendsData_id = DB::table('blog_categories')->where('title' , 'TRENDS AND DATA')->pluck('id')->first();
        $topTrnd = DB::table('blog')->where('type' , 'rentals')->where('feature_flag' , '=' ,'0')->where('blog_category_id' , $trendsData_id)->orderBy('view_count' , 'desc')->limit(1)->first();
//        dd($topTrnd);
        $trnd = DB::table('blog')->where('type' , 'rentals')->where('feature_flag' , '=' ,'0')->where('blog_category_id' , $trendsData_id)->where('id', '!=' ,$topTrnd->id )->orderBy('view_count' , 'desc')->limit(3)->get();
//       dd($Trnd);
        return view('frontend.rentals-home' , compact('random_feature_right','random_feature_left' ,'appartment','latestTopBlog','latestBlog' , 'TopmostPopular' ,'mostPopular' , 'topTrnd' , 'trnd'));

    }

    public function propertyDetail($id){
        $data=DB::table('properties')->find($id);
        $result = DB::table('properties')->where('id' , $data->id)->update(['view_count' =>$data->view_count+1]);
        $address = DB::table('property_address')->where('id'  , $id)->first();


        $amenities=DB::table('building_amenities')->where('building_id',$data->id)
            ->get();

if ($amenities){
    return view('frontend.property.detail',compact('data', 'address','amenities'));
}else{
    $amenities=0;
    return view('frontend.property.detail',compact('data', 'address','amenities'));

}

    }

}

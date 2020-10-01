<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use function Sodium\add;

class topbarController extends Controller
{

    public function normalSearch(Request $request)
    {
        $ret_flag = false;
        $data = null;
//        dd($request->all());
//        $data = array_filter($request->all());
        if($request->city){
            $data = $this->getCities($request->city);
            if($data==null){
                $ret_flag = true;
                return view('frontend.search-result' , compact('data'));


            }
        }

        if ($request->price_from) {

            if($data!= null){
                $result = null;
                foreach ($data as $row){
                    if($row->price >= $request->price_from){
                        $result[] = $row;
                    }
                    if($result!= null){
                        $result = array_filter($result);}

                }
//               dd($result);

                if($ret_flag != true){
                    $data = $result;}

                if($data==null ){
                    $ret_flag = true;
                }
            }



            elseif($data == null){
                if($ret_flag != true){
                    $data = $this->getPiceFrom($request->price_from);
                    if($data==null){
                        $ret_flag = true;
                    }
                }
            }

        }


        if($request->price_to){
            // dd($data);
            if($data!= null){
                $result = null;
                foreach ($data as $row){
                    if($row->price <= $request->price_to){
                        $result[] = $row;
                    }
                }
                // dd($result);
                if($result!= null) {
                    $result = array_filter($result);
                }
                if(!($request->price_from)){
                    if($ret_flag != true){
                        $data= $result;}

                    if($data==null){
                        $ret_flag = true;
                    }
                }
            }



            elseif($data!= null){
                if($ret_flag != true){
                    $data = $this->getPiceTo($request->price_to);
                    if($data==null){
                        $ret_flag = true;
                    }

                }

            }

        }



        if($request->studio){
            if($ret_flag != true){
                $result = null;
                $len = count($request->studio);
//            dd($request->studio[$len - 1]);
//            dd($len);

                if($len>1) {

                    if($ret_flag != true){

                        $studio_from = $request->studio[0];
                        $studio_to = $request->studio[$len - 1];

                        if($studio_to == '4'){
                            if($ret_flag != true){
                                if($data!= null){
                                    foreach ($data as $row){
                                        if($row->studio >= $studio_from){
                                            $result[] = $row;
                                        }if($result!= null){
                                            $result = array_filter($result);}
                                    }
                                    $data = $result;
                                    if($data==null){
                                        $ret_flag = true;
                                    }
                                }
                            }


                            else{

                                if($ret_flag != true){

                                    $result = $this->getStudioGreatherThen($studio_from);
                                    $data = $result;
                                    if($data==null){
                                        $ret_flag = true;
                                    }
                                }

                            }

                        }
                        elseif($studio_to != '4')
                        {
                            if($data!= null){
                                if($ret_flag != true){
//                         dd($data);
                                    foreach ($data as $row){
                                        if($row->studio >= $studio_from && $row->studio <= $studio_to ){
                                            $result[] = $row;
                                        }
                                        if($result != null){
                                            $result = array_filter($result);}

                                    }
                                    $data = $result;
                                    if($data==null){
                                        $ret_flag = true;
                                    }
                                }
                            }


                            elseif($data == null){
                                if($ret_flag != true){
                                    $result = $this->getstudio($studio_from , $studio_to);
                                    $data = $result;
                                    if($data==null){
                                        $ret_flag != true;
                                    }
                                }
                            }
                        }
                    }
                }


                //



                elseif($len<2){
                    if($ret_flag != true){
                        if ($request->studio[$len - 1] == '4')
                        {
                            if($data!= null){
                                if($ret_flag != true){
//                       dd($data);
                                    foreach ($data as $row){
                                        if($row->studio >= 4){
                                            $result[] = $row;
                                        }

                                    }
//                       dd($result);
                                    if($result != null){
                                        $result = array_filter($result);}
//                       dd($result);
                                    $data = $result;
                                    if($data==null){
                                        $ret_flag = true;
                                    }
                                }
                            }

                            //
                            elseif($data == null){
                                if($ret_flag != true){
//                       dd($request->studio[$len - 1]);
                                    $result = $this->getStudioGreatherThen(4);
                                    //   dd($result);
                                    $data = $result;
                                    if($data==null){
                                        $ret_flag != true;
                                    }
                                }
                            }


//                   dd('4+ studio');
                        }
                        elseif($request->studio[$len - 1] != '4') {
                            if($ret_flag != true){
                                $result = $this->getStudioGreatherThen($request->studio[$len - 1]);
                                $data = $result;
                                if($data==null){
                                    $ret_flag = true ;
                                }

                            }
                        }
                    }
                }

            }
        }

//        if($data==null){$data = [];}
        $price = null;
        $std = null;
        $cty = null;
        $total_properties='No';

        if($data == null || count($data) == 0){
            $property = DB::table('properties')->where('property_for' , '=' , 'sales')->where('feature_flag' , '=' , '0')->get();
            foreach ($property as $prp){
                $address = DB::table('property_address')->where('property_id' , '=' , $prp->id)->first();
                $prp->address = $address;
            }
            $data = $property;

            $feature_property = DB::table('properties')->where('feature_flag' , '=' , '1')->get();
            foreach ($feature_property as $prp){
                $address = DB::table('property_address')->where('property_id' , '=' , $prp->id)->first();
                $prp->address = $address;
            }
            $feature = $feature_property;
            return view('frontend.search-result' , compact('data','total_properties' , 'cty' , 'std' , 'price','feature'));
        }


        if($request->price_from && $request->price_to){
            $price  = "Between $".$request->price_from." And $".$request->price_to;
        }
        elseif($request->price_from){
            $price  = "Above $".$request->price_from;
            // dd($price);
        }
        elseif($request->price_to){
            $price  = "Below $".$request->price_to;
            // dd($price);
        }
        if($request->studio){
            $lenn = count($request->studio);
            if($lenn>1){
                //  $studio_from = $request->studio[0];
                //         $studio_to = $request->studio[$len - 1];
                if($request->studio[$lenn - 1] != 4){
                    $std = "With ".$request->studio[0]. " To ".$request->studio[$lenn - 1]." Studio";
                }
                if($request->studio[$lenn - 1] == 4){
                    $std = "With atleast".$request->studio[0]. " studio ";
                }
            }
            elseif($lenn < 2){
                if($request->studio[0] == 4){
                    $std = "With atleast".$request->studio[0]. " studio ";
                }
                else{
                    $std = "With ".$request->studio[0]. " studio";
                }
            }
        }
        // dd($data);
        if($request->city){

            $cty= $request->city;
        }


        $total_properties = count($data);

        $feature_property = DB::table('properties')->where('feature_flag' , '=' , '1')->get();
        foreach ($feature_property as $prp){
            $address = DB::table('property_address')->where('property_id' , '=' , $prp->id)->first();
            $prp->address = $address;
        }
        $feature = $feature_property;
        return view('frontend.search-result' , compact('data','total_properties' , 'cty' , 'std' , 'price' , 'feature'));
    }

    public function getPiceFrom($priceFrom)
    {
        $property = DB::table('properties')->where('property_for' , '=' , 'sales')->where('feature_flag' , '=' , '0')->where('price', '>=', $priceFrom)->get();
//        dd($property);
        foreach ($property as $prp){
            $address = DB::table('property_address')->where('property_id' , '=' , $prp->id)->first();
            $prp->address = $address;
        }
//        $result = DB::table('properties')->where('price', '>=', $priceFrom)->join('property_address', 'properties.id', '=', 'property_address.property_id')->get();
//        dd($property);
        return $property;

    }
    public function getstudio($min , $max)
    {
        $property = DB::table('properties')->where('property_for' , '=' , 'sales')->where('feature_flag' , '=' , '0')->where('studio', '>=', $min)->where('studio' , '<=' , $max)->get();
        foreach ($property as $prp){
            $address = DB::table('property_address')->where('property_id' , '=' , $prp->id)->first();
            $prp->address = $address;
        }
//        $result = DB::table('properties')->where('studio', '>=', $min)->where('studio' , '<=' , $max)->join('property_address', 'properties.id', '=', 'property_address.property_id')->get();
        return $property;
    }
    public function getStudioGreatherThen($min)
    {
        $property = DB::table('properties')->where('property_for' , '=' , 'sales')->where('feature_flag' , '=' , '0')->where('studio', '>=', $min)->get();
        foreach ($property as $prp){
            $address = DB::table('property_address')->where('property_id' , '=' , $prp->id)->first();
            $prp->address = $address;
        }
//        $result = DB::table('properties')->where('studio', '>=', $min)->join('property_address', 'properties.id', '=', 'property_address.property_id')->get();
        return $property;
    }
    public function getStudiowith($min)
    {
        $property = DB::table('properties')->where('property_for' , '=' , 'sales')->where('feature_flag' , '=' , '0')->where('studio', '>=', $min)->get();
        foreach ($property as $prp){
            $address = DB::table('property_address')->where('property_id' , '=' , $prp->id)->first();
            $prp->address = $address;
        }
//        $result = DB::table('properties')->where('studio', '>=', $min)->join('property_address', 'properties.id', '=', 'property_address.property_id')->get();
//       dd($result);
        return $property;
    }
    public function getPiceTo($priceTo)
    {
        $property = DB::table('properties')->where('property_for' , '=' , 'sales')->where('feature_flag' , '=' , '0')->where('price', '<=', $priceTo)->get();
        foreach ($property as $prp){
            $address = DB::table('property_address')->where('property_id' , '=' , $prp->id)->first();
            $prp->address = $address;
        }
//        $result = DB::table('properties')->where('price', '<=', $priceTo)->join('property_address', 'properties.id', '=', 'property_address.property_id')->get();
        return $property;
    }
    public function getCities($city){
//        dd($city);
        $address = DB::table('property_address')->whereIn('city' , $city)->pluck('property_id' );
        $property = DB::table('properties')->where('property_for' , '=' , 'sales')->where('feature_flag' , '=' , '0')->whereIn('id' , $address)->distinct()->get();
//dd($property);
//        foreach ($property as $prp){
//            $address = DB::table('property_address')->where('property_id' , '=' , $prp->id)->first();
//            $prp->address = $address;
//        }
//dd($property);

//      }
//      dd('sdasdasd');
//      dd($all_data);
        return $property;
    }
}

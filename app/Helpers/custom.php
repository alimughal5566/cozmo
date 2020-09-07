<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use App\Ticket;
use App\Cart;
use App\Package;
use App\Discounts;
use App\UrlCategory;




function tickets($mc_id,$product_id,$status) {
  return Ticket::where('mc_id',$mc_id)->where('status',$status)->count();
}
function ticket_status($status=0) {
  if($status==0){
    echo 'Available';
  }elseif($status==1){
    echo 'Sold';
  }elseif($status==2){
    echo 'In Cart';
  }
}
function cart_html($cart) {
    $discount_percentage = array();
        $responce = DB::select("SELECT package_id, count(*) as total FROM cart WHERE user_id = ".$cart->user_id." GROUP BY package_id");
        foreach($responce as $one){
            $discount_offers = Discounts::where('c_id', $one->package_id)->orderBy('no_of_tickets', 'DESC')->get();
            foreach($discount_offers as $offer){
                if($one->total >= $offer->no_of_tickets){
                    $discount_percentage[$one->package_id] = $offer->discount_percentage;
                    break;
                }
            }
        }
        if(isset($discount_percentage[$cart->package_id])){
                $price_dicount = ( $cart->package->mc->price / 100 ) * $discount_percentage[$cart->package_id];
                $price = $cart->package->mc->price - $price_dicount;
            }else{
                $price = $cart->package->mc->price;
            }
            $curr=Config::get("constants.currency");

            $html='<tr class="cart-items"><td>'.$cart->ticket->code.'</td>';
            if(isset($cart->package->main_img[0]))
                $html.='<td class="w-25"><img width="100" src="'.url('products/'.$cart->package->image[0]->package_id.'/'.$cart->package->main_img[0]->name).'" class="img-fluid img-thumbnail" alt="" style=" width: 100px;"><div class="add_cart_titl">'.$cart->package->name.'</div></td>';
            else
                $html.='<td class="w-25"></td>';

            $html.='<td>'.$curr.$price.'</td>
              <td class="cust_cart_btn">
                <a href="javascript:void(0)" data-delete="1" data-value="'.$cart->ticket->code.'" data-id='.$cart->ticket->id.' class="btn btn-danger delet_cart_item btn-sm">
                  <i class="fa fa-times"></i>
                </a>
              </td>
            </tr>';
            return $html;
}
function similar_items($package) {
    $rec = \App\Ticket::where('mc_id', $package->mc_id)->where('user_id', 0)->where('status', 0)->where('product_id', 0)->where('dummy_sold', 0)->get()->random();
    $rec_ticket = $rec->code;
    $rec_ticket_id = $rec->id;
//    <a href="'.url('competition/'.$urlcategory->slug.'/'.$package->slug).'">
   $urlcategory = UrlCategory::where('id',$package->url_category)->first();
   $curr=Config::get("constants.currency");
           $html='<div class="item-container" style="height: 250px;">
                  <a href="#">
                  <div class="item-image-wrapper">
                    <img src="'.url('products/'.$package->image[0]->package_id.'/'.$package->image[0]->name).'" alt="'.$package->image[0]->name.'" />
                  </div>
                  <h4 class="item-title" style="height: 35px;font-size: 15px;">'.$package->name.'</h4>
                 <p class="item-title"> <strong >'.$curr.$package->mc->price.'</strong></p>
                  </a>
                  <div style="
    text-align: center;
"><input id="sim_package_id" type="hidden" value="'.$package->id.'">
<btton onclick="add_to_cart_sim_number('.$package->id.' , '.$rec_ticket.' , '.$rec_ticket_id.')"  id="add_to_cart_sim" type="button" style="
    background: #fff;
    padding: 5px 12px;
    margin: 0 auto;
    color: #ee8322;
    border-radius: 4px;
">Add To Cart</btton>
</div>
                </div>';
            return $html;
}
function get_user_cart($user_id) {
        $total_price=0;
        $total_tickets=0;
        $last_ticket_date='';
        $cart_html='';
        $items='';
        $carts= Cart::where(['user_id' => $user_id]);
        $total_tickets=$carts->count();

        $discount_percentage = array();
        $responce = DB::select("SELECT package_id, count(*) as total FROM cart WHERE user_id = ".$user_id." GROUP BY package_id");
        foreach($responce as $one){
            $discount_offers = Discounts::where('c_id', $one->package_id)->orderBy('no_of_tickets', 'DESC')->get();
            foreach($discount_offers as $offer){
                if($one->total >= $offer->no_of_tickets){
                    $discount_percentage[$one->package_id] = $offer->discount_percentage;
                    break;
                }
            }
        }

        foreach ($carts->orderBy('created_at','DESC')->get() as $key => $cart) {
            if($key==0)
            $last_ticket_date=$cart->created_at;
            if(isset($discount_percentage[$cart->package_id])){
                $price_dicount = ( $cart->ticket->paid_price / 100 ) * $discount_percentage[$cart->package_id];
                $total_price += $cart->ticket->paid_price - $price_dicount;
            }else{
                $total_price += $cart->ticket->paid_price;
            }

            $cart_html.=cart_html($cart);
        }
        $temp_array = array();
        foreach ($carts->select('package_id','id')->groupBy('package_id')->get() as $ca) {
            foreach ($ca->package->related as $key => $related) {
                $r_package = $related->package;
                if(in_array($r_package->id, $temp_array)){
                    continue;
                }else{
                    $rec = \App\Ticket::where('mc_id', $r_package->mc_id)->where('user_id', 0)->where('status', 0)->where('product_id', 0)->where('dummy_sold', 0)->get();
                    if(!$rec){
                        continue;
                    }
                    $temp_array[] = $r_package->id;
                    $items.= similar_items($r_package);
                }
            }
        }

       return ['success'=>true, 'cart'=>$cart_html,'similar_items'=>$items, 'total'=>number_format($total_price, 2),'total_tickets'=>$total_tickets];
}

function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full)
        $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}

function cart_ticket_expiry()
{
   if(Auth::check()){
        $user_id=Auth::id();
        $date = new \DateTime;
        $date->modify('-15 minutes');
        $formatted_date = $date->format('Y-m-d H:i:s');
        $carts= Cart::where(['user_id' => $user_id])->where('created_at','<' ,$formatted_date)->get();
        }
        return $carts;
}

function createPaytriotSignature(array $data, $key)
{
		// Sort by field name
		ksort($data);
		// Create the URL encoded signature string
		$ret = http_build_query($data, '', '&');
		// Normalise all line endings (CRNL|NLCR|NL|CR) to just NL (%0A)
		$ret = str_replace(array('%0D%0A', '%0A%0D', '%0D'), '%0A', $ret);
		// Hash the signature string and the key together
		return hash('SHA512', $ret . $key);
}

function getDemoPaytriotReqParams ($price = 101)
{
    $params = array(
    'merchantID' => '105630',   // test key
    'action' => 'SALE',
    'type' => 1,
    'countryCode' => 826,
    'currencyCode' => 826,
    'amount' => $price,
    'orderRef' => 'Test purchase',
    'transactionUnique' => uniqid(),
    //'redirectURL' => (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']
    'redirectURL' => URL::to('user/handle_paytriot_payment')
  );

  $key = 'Media49Stone36Carrot';

  $params['signature'] = createPaytriotSignature($params, $key);

  return $params;
}

function getPaytriotReqParams ($price = 101)
{
    $params = array(
		'merchantID' => '119096',
		'action' => 'SALE',
		'type' => 1,
        'statementNarrative1' => "PTR*prizemaker.com",
        'subMerchantID' => 1000256,
    	'countryCode' => 826,
        'currencyCode' => 826,
    	'merchantAddress' => "23 Chantry Lane",
        'merchantTown' => "Grimsby",
        'merchantPostcode' => "DN31 2LP",
        'facilitatorID' => 238750,
		'amount' => $price,
		'orderRef' => 'Test purchase',
		'transactionUnique' => uniqid(),
		'redirectURL' => URL::to('user/handle_paytriot_payment')
	);

	$key = 'TKKzqbwZm7CvbyKE';

	$params['signature'] = createPaytriotSignature($params, $key);

	return $params;
}


function articleName($article_id) {
    $article = \App\Article::find($article_id);
    if (! is_null($article)) {

        return $article->title;
    }

    return '';
}
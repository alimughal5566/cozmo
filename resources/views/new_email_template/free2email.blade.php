<!DOCTYPE html>
<html>
	<head>
		<title>free Ticket</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="x-apple-disable-message-reformatting">
		<title></title>
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
		
		<style>
		   
		</style>
		
		
		
	</head>
	<body style="font-family: 'Poppins', sans-serif;">
		
		<div class="cta" style="margin:0 auto;width:800px; margin-top: 50px; "><a href="https://prizemaker.com/" style="border-style: none !important;margin:0 auto;margin-top: 50px; border: 0 !important;"><img width="" border="0" style="display: block; width: 30%;" src="{{url('email/logo.png')}}" alt=""></a><p style="font-size: 26px;    margin-bottom: 0px;margin-top: 17px;text-align: center;    margin-right: 12px;        color: #ee8322;">Congratulations you win a free Ticket #{{$ticket}}</p></div>
		<div class="container-width" style="width:800px;margin:0 auto;margin-top: 10px;display: flex;font-family: 'Poppins', sans-serif;position: relative;" >
			<div class="sds" style="width: 49%;    background: #f1f1f1;">
				<p style="font-size: 24px;margin-bottom: 0;margin-top: 10px;    padding: 0 10px;     color: #171819;">{{$productname}} ONLY FOR £{{$competitions->price}}</p>
					@if(isset($discount_offers[0]) && isset($discount_offers[1]))
					<p style="font-size: 18px;
    font-weight: 700;
    text-align: center;
    border-radius: 50%;
    background: #f184214f;
    padding: 5px 10px;
    margin: 0 auto;
    color: #302724;
    
        width: 55%;    margin-bottom: 3px;"><b>Discounts</b></p>
				<p style="font-size: 16px;margin-top: 0;    padding: 0 10px; color: #ee8322;text-align: center;">{{$discount_offers[0]['no_of_tickets']}}+ &nbsp;&nbsp;  £{{number_format($competitions->price - ($competitions->price *($discount_offers[0]['discount_percentage'] / 100)),2)}} &nbsp;&nbsp; , &nbsp;&nbsp; {{$discount_offers[1]['no_of_tickets']}}+ &nbsp;&nbsp;  £{{number_format($competitions->price - ($competitions->price *($discount_offers[1]['discount_percentage'] / 100)),2)}}</p>
				@endif
				<!-- <p style="     font-size: 18px;
                font-weight: 700;
                text-align: center;
                border-radius: 50%;
                background: #f184214f;
                padding: 5px 10px;
                margin: 0 auto;
                color: #302724;    padding: 10px 10px;width:50%;    margin-bottom: 3px;">£30</p> -->
				<a href="{{url('competition/'.$urlcategorys.'/'.$mc->slug)}}" class="but" style="margin-top: 16px;      background-color: #000000;color: white;border-bottom: 4px solid #ee8322;        padding: 16px 0px 16px 5px;width: 100%;
					border-radius: 0px;
				text-align:center;    padding-left: 5px; text-decoration: none;font-size: 20px; margin: 0px 2px;cursor: pointer;display:inline-block;">Enter Now</a>
			</div>
			<div class="sds" style="width: 49%;">
				<img  border="0" style="display: block;width: 100%;   height: 100%;" src="{{url('products/'.$mc->id.'/'.$img->name)}}" alt="">
			</div>
		</div>

		<div class="container-width" style="width:800px;margin:0 auto;font-family: 'Poppins', sans-serif;" >
			
			<p style="font-size: 24px;    margin-bottom: 12px;margin-top: 17px;text-align: center;    background: #f1f1f1;    margin-right: 12px;        color: #ee8322;">More Competitions are waiting for you</p>

		</div>
	
		<table border="0" align="center" width="800" cellpadding="0" cellspacing="0" class="container590 bg_color" style="font-family: 'Poppins', sans-serif; margin-top: 20px;    margin: 0 auto;display: flex;">
			<tbody>
			    <!--<tr>-->
				@foreach($related_package as $key => $related)
				<?php
				$multi_competition = DB::table('multi_competition')->where('id',$related->mc_id)->first();
				$urlcategoryss = DB::table('urls_categories')->where('id',$related->url_category)->first();
				 $main_img = DB::table('package_images')->where('package_id',$related->id)->where('main_img',1)->first();
				 $discount_offerss = \App\Discounts::where('c_id', $related->id)->orderBy('id', 'DESC')->get()->toArray();
				?>
				 @if($key>0 && $key % 2 == 0)
				 <tr>
                 @endif
				<td>
						<div class="container-width" style="width:398px;margin-top: 10px;display: flex;font-family: 'Poppins', sans-serif;position: relative;" >
			<div class="sds" style="width: 49%;    background: #f1f1f1;">
				<p style="font-size: 15px;margin-bottom: 0;margin-top: 10px;    padding: 0 10px;     color: #171819;">{{$related->name}} ONLY FOR £{{$multi_competition->price}}</p>
				@if(isset($discount_offerss[0]) && isset($discount_offerss[1]))
				<p style="font-size: 18px;
    font-weight: 700;
    text-align: center;
    border-radius: 50%;
    background: #f184214f;
    padding: 5px 10px;
    margin: 0 auto;
    color: #302724;
    
        width: 55%;    margin-bottom: 3px;"><b>Discounts</b></p>
			    <p style="font-size: 16px;margin-top: 0;    padding: 0 10px; color: #ee8322;text-align: center;">{{$discount_offerss[0]['no_of_tickets']}}+ &nbsp;&nbsp;  £{{number_format($multi_competition->price - ($multi_competition->price *($discount_offerss[0]['discount_percentage'] / 100)),2)}} &nbsp;&nbsp; , &nbsp;&nbsp; {{$discount_offerss[1]['no_of_tickets']}}+ &nbsp;&nbsp;  £{{number_format($multi_competition->price - ($multi_competition->price *($discount_offerss[1]['discount_percentage'] / 100)),2)}}</p>
				@endif
				<!-- <p style="font-size: 18px;
    font-weight: 700;
    text-align: center;
    border-radius: 50%;
    background: #f184214f;
    padding: 5px 10px;
    margin: 0 auto;
    color: #302724;
    
        width: 55%;    margin-bottom: 3px;">£30</p> -->
			<a  href="{{url('competition/'.$urlcategoryss->slug.'/'.$related->slug)}}" class="but" style="margin-top: 16px;      background-color: #000000;color: white;border-bottom: 4px solid #ee8322;        padding: 16px 0px 16px 5px;width: 100%;
					border-radius: 0px;
				text-align:center;    padding-left: 5px; text-decoration: none;display: inline-block;font-size: 20px; margin: 0px 2px;cursor: pointer;" >Enter Now</a>
			</div>
			<div class="sds" style="width: 49%;">
				<img  border="0" style="display: block;width: 100%;    height: 100%;" src="{{url('products/'.$related->id.'/'.$main_img->name)}}" alt="">
			</div>
		</div>
		
				</td>
				 @if(!$key>0 && !$key % 2 == 0)

			    </tr>
			   
                 @endif
				@endforeach
				
			<!--</tr>-->
		</tbody></table>
		<div class="container-width" style="width:800px;margin:0 auto;font-family: 'Poppins', sans-serif;" >
			
			<p style="font-size: 24px;    margin-bottom: 0px;margin-top: 17px;text-align: center;    background: #f1f1f1;    margin-right: 12px;        color: #ee8322;">You can also Earn Commission</p>
			
		</div>
			<table style="    width: 800px;margin: 0 auto;    ">
			<thead>
				<th>
		<div class="newww" style="margin-top: 15px;position: relative;">
		<img width="" border="0" style=" width: 100%;" src="{{url('email/share-and.png')}}" alt="">
			<p style="    width: 50px;    font-size: 31px;font-weight: 700;text-align: center;border-radius: 50%;background: #f18421;padding: 11px 13px;/* width: 10%; */margin: 0 auto;position: absolute;right: 47%;top: 48%;color: white;">{{$setting->commission}}%</p>
		</div>
	</th>
	<th>
		<div class="newww" style="margin-top: 15px;position: relative;margin-bottom: 20px;">
			<img width="" border="0" style=" width: 100%;" src="{{url('email/business.png')}}" alt="">
			<p style="    width: 61px;    font-size: 31px;font-weight: 700;text-align: center;border-radius: 50%;background: #f18421;padding: 15px 10px;/* width: 10%; */margin: 0 auto;position: absolute;right: 47%;top: 48%;color: white;">{{$setting->business_ref_commission}}%</p>
		</div>
	</th>
		</thead>
		</table>


		<p style="font-size: 13px;    margin-top: 30px; color: #96a5b5;text-align: center;    text-decoration: underline;    border-top: 1px solid #efefef; padding-bottom: 10px;">
			
		</p>
		<table border="0" align="center" width="800" cellpadding="0" cellspacing="0" class="container590 bg_color" style="font-family: 'Poppins', sans-serif;">
			<tbody><tr>
				<td>
					<table border="0" width="300" align="left" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="container590">
						<tbody>
							
							<th>
								
								<div style="color: #333333;    margin-right: 109px; font-size: 14px; font-family: 'Work Sans', Calibri, sans-serif; font-weight: 600; mso-line-height-rule: exactly; line-height: 23px;">
									Email us: <a href="{{$setting->email}}" style="color: rgba(0,8,255,0.8); font-size: 14px; font-family: 'Hind Siliguri', Calibri, Sans-serif; font-weight: 400;">{{$setting->email}}</a>
								</div>
								<div style="color: #333333;    margin-right: 109px; font-size: 14px; font-family: 'Work Sans', Calibri, sans-serif; font-weight: 600; mso-line-height-rule: exactly; line-height: 23px;">
									<p  style=" color: #333333; font-size: 14px; font-family: 'Hind Siliguri', Calibri, Sans-serif; font-weight: 400;"><b>Address:</b> <span style="color: rgba(0,8,255,0.8);">{{$setting->address}}</span></p>
								</div>
								
							</th>
							
						</tbody></table>
						<table border="0" align="right" cellpadding="0" cellspacing="0" style="    margin-right: 12px;">
							<tbody><tr>
								<td>
									<a href="{{$setting->twitter_link}}" style="display: block; border-style: none !important; border: 0 !important;"><img width="24" border="0" style="display: block;" src="{{url('email/twitter.png')}}" alt=""></a>
								</td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>
									<a href="{{$setting->instagram_link}}" style="display: block; border-style: none !important; border: 0 !important;"><img width="24" border="0" style="display: block;" src="{{url('email/insta.png')}}"></a>
								</td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
							
								<td>
									<a href="{{$setting->facebook_link}}" style="display: block; border-style: none !important; border: 0 !important;"><img width="24" border="0" style="display: block;"  src="{{url('email/fbb.png')}}" alt=""></a>
								</td>
							</tr>
						</tbody></table>
					
					</td>
				</tr>
			</tbody></table>
			<!-- <p style="text-align: center; padding-top: 2px;">
				No longer want to receive these email? You can <a href="#" style="    color: rgba(0, 8, 255, 0.8);">Unsubscribe here</a>
			</p> -->
			<p style="font-size: 13px; color: #96a5b5;text-align: center;    text-decoration: underline;    border-top: 1px solid #efefef;padding-top: 10px; padding-bottom: 10px;">
				ALL Rights Reserved.
			</p>
		</body>
	</html>
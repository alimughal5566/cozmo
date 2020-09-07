<!DOCTYPE html>
<html>
	<head>
		<title>Subscription</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="x-apple-disable-message-reformatting">
		<title></title>
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
		<style>
		@media only screen and (max-width: 400px){
		   
		    .disc2{
		        font-size:5px !important;
		    }
		    .topff{
		       height: 50px !important; 
		        font-size:7px !important; 
		        margin-top: 5px !important; 
                padding: 0 5px !important; 
		    }
		    .disc{
		        font-size:7px !important;
		        border-radius:10% !important;
		        
		    }
/*		    .sdss img{*/
/*height:20% !important;*/
/*width:40% !important;*/
/*		    }*/
		    .butt{
		        font-size:10px !important;
		            padding: 6px 0px 6px 0px !important;
		    }
		}
		    
		</style>
	</head>
	<body style="font-family: 'Poppins', sans-serif;">
		
		<div style="margin:0 auto;width:800px; margin-top: 50px; "><a href="https://prizemaker.com/" style="border-style: none !important;margin:0 auto;margin-top: 50px; border: 0 !important;">
		    <img width="" border="0" style="display: block; width: 30%;" src="images/logo.png" alt="">
		    </a>
		    <p style="font-size: 26px;    margin-bottom: 0px;margin-top: 17px;text-align: center;    margin-right: 12px;        color: #ee8322;">Invitation<b style="color: green;"></b></p></div>
		
			
		<div class="bottom_link" style="text-align: center;">
			<span>Invitation sent by {{$user_name}}</span>
		</div>
		<h2 style="text-align: center; color: #ee8322;">Hello {{$name}}</h2>
		
		<div class="link_site">
			<p style="text-align: center; padding-bottom: 20px;">
				<span style="color: #2bbdb0; font-size: 20px;">You are invited to Join Prize Maker.Please click below</span><br><br>
				<a href="{{ url('/register_page/'.$link) }}">	{{  url('/register_page/'.$link) }}</a><br><br>
				Thanks.
			</p>
		</div>
<div class="container-width" style="width:800px;margin:0 auto;font-family: 'Poppins', sans-serif;" >
			
				<p style="font-size: 24px;    margin-bottom: 0px;margin-top: 17px;text-align: center;    background: #f1f1f1;    margin-right: 12px;        color: #ee8322;">You can also Earn Commission</p>
			
		</div>
			<table style="    width: 800px;margin: 0 auto;    ">
			<thead>
				<th>
		<div class="newww" style="margin-top: 15px;position: relative;">
		<img width="" border="0" style=" width: 100%;" src="{{url('email/share-and.png')}}" alt="">
			<p style="    width: 50px;    font-size: 25px;font-weight: 700;text-align: center;border-radius: 50%;background: #f18421;padding: 14px 9px;/* width: 10%; */margin: 0 auto;position: absolute;right: 47%;top: 48%;color: white;">{{$setting->commission}}%</p>
		</div>
	</th>
	<th>
		<div class="newww" style="margin-top: 15px;position: relative;margin-bottom: 20px;">
			<img width="" border="0" style=" width: 100%;" src="{{url('email/business.png')}}" alt="">
			<p style="white-space:nowrap;     width: 50px;    font-size: 25px;font-weight: 700;text-align: center;border-radius: 50%;background: #f18421;padding: 15px 10px;/* width: 10%; */margin: 0 auto;position: absolute;right: 47%;top: 48%;color: white;">{{$setting->business_ref_commission}}%</p>
		</div>
	</th>
		</thead>
		</table>
		<div class="container-width" style="width:800px;margin:0 auto;font-family: 'Poppins', sans-serif;" >
			
			<p style="font-size: 24px;    margin-bottom: 12px;margin-top: 25px;text-align: center;    background: #f1f1f1;    margin-right: 12px;        color: #ee8322;">More Competitions are waiting for you</p>
			<!--  <p style="font-size: 16px;margin-top: 0;padding-left: 0;    color: #96a5b5;">The competition will be drawn using Google random number generator
				live on Facebook at the end of the countdown clock. (Including 30 day extension)
				If the competition fails to sell all of its tickets we will still draw the competition and the winner will receive
			70% of all the tickets sales within this competition.</p> -->
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
				<p class="topff" style="font-size: 15px;margin-bottom: 0;margin-top: 10px;height: 104px;    padding: 0 10px;     color: #171819;">{{$related->name}} ONLY FOR £{{$multi_competition->price}}</p>
				    @if(isset($discount_offerss[0]) && isset($discount_offerss[1]))
				<p class="disc" style="font-size: 18px;font-weight: 700;text-align: center;border-radius: 50%;background: #f184214f;padding: 5px 10px;margin: 0 auto;color: #302724;width: 55%;margin-bottom: 3px;"><b>Discounts</b></p>
				<p class="disc2" style="font-size: 13px;margin-top: 0;    padding: 0 10px; color: #ee8322;text-align: center;">{{$discount_offerss[0]['no_of_tickets']}}+ &nbsp;&nbsp;  £{{number_format($multi_competition->price - ($multi_competition->price *($discount_offerss[0]['discount_percentage'] / 100)),2)}} &nbsp;&nbsp; , &nbsp;&nbsp; {{$discount_offerss[1]['no_of_tickets']}}+ &nbsp;&nbsp;  £{{number_format($multi_competition->price - ($multi_competition->price *($discount_offerss[1]['discount_percentage'] / 100)),2)}}</p>
				@endif
				<a href="{{url('competition/'.$urlcategoryss->slug.'/'.$related->slug)}}" class="butt" style="margin-top: 16px;      background-color: #000000;color: white;border-bottom: 4px solid #ee8322;        padding: 16px 0px 16px 5px;width: 100%;
					border-radius: 0px;
				text-align:center;    padding-left: 5px; text-decoration: none;display: inline-block;font-size: 20px; margin: 4px 2px;cursor: pointer;">Enter Now</a>
			</div>
			<div class="sdss" style="width: 49%;">
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
		

			

		<p style="font-size: 13px; color: #96a5b5;text-align: center;    text-decoration: underline;    border-top: 1px solid #efefef; padding-bottom: 10px;">
			
		</p>
		<table border="0" align="center" width="800" cellpadding="0" cellspacing="0" class="container590 bg_color" style="font-family: 'Poppins', sans-serif;">
			<tbody><tr>
				<td>
					<table border="0" width="100%" align="left" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="container590">
						<tbody>
							
						<tr>
    <td class="full_width" align="center" width="100%" bgcolor="#fff" style=""><div class="div_scale" style="">
        <table class="table_scale" width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#f9f9f9" style="padding:0; margin: 0; border-top: 1px solid #fff;">
          <tbody><tr>
            <td class="spacer" width="20" align="left" valign="top" bgcolor="#f9f9f9" style="margin: 0 !important; padding: 0 !important; line-height: 0 !important;">&nbsp;</td>
            <td class="social_left" align="left" valign="middle" width="173" bgcolor="#f9f9f9" style=""><table width="100%">
                <tbody><tr>
                  <td class="spacer" height="20" bgcolor="#f9f9f9" style="padding:0; line-height: 0;">&nbsp;</td>
                </tr>
                <!-- START OF HEADING-->

                <tr>
                  <td class="center" valign="top" bgcolor="#f9f9f9" style="padding: 0px; text-shadow: 1px 1px 0px #ffffff;font-size:18px ;font-weight: bolder; color:#262626; line-height: 26px;white-space: nowrap; "> Find Us On :</td>
                </tr>
                <!-- END OF HEADING-->
                <tr>
                  <td class="spacer" height="20" bgcolor="#f9f9f9" style="padding:0; line-height: 0;">&nbsp;</td>
                </tr>
              </tbody></table></td>
            <td class="spacer" width="20" align="left" valign="top" bgcolor="#f9f9f9" style="margin: 0 !important; padding: 0 !important; line-height: 0 !important;">&nbsp;</td>
            <td class="social_right" align="right" valign="top" width="367" bgcolor="#f9f9f9" style=""><table width="100%">
                <tbody><tr>
                  <td height="20" bgcolor="#f9f9f9" style="padding:0; line-height: 0;">&nbsp;</td>
                </tr>
                <tr>
                  <td class="center" align="right" valign="top" bgcolor="#f9f9f9" style="padding: 0px; text-shadow: 1px 1px 0px #ffffff;font-size:16px ; line-height: 26px; color:#262626; font-family: Lucida Sans Unicode; "><span> 
                  <a href="{{$setting->facebook_link}}" style="font-style: normal;text-decoration: none;"> <img src="{{url('social/fcb.png')}}" width="40" height="40" alt="facebook" border="0" style="display: inline;"> </a> &nbsp;
                  <a href="{{$setting->twitter_link}}" style="font-style: normal;text-decoration: none;"> <img src="{{url('social/twittt.png')}}" width="40" height="40" alt="twitter" border="0" style="display: inline;"> </a> &nbsp;
                  <a href="{{$setting->youtube_link}}" style="font-style: normal;text-decoration: none;"> <img src="{{url('social/youu.png')}}" width="40" height="40" alt="youtube" border="0" style="display: inline;"> </a> &nbsp;
                  <a href="{{$setting->instagram_link}}" style="font-style: normal;text-decoration: none;"> <img src="{{url('social/instass.png')}}" width="40" height="40" alt="instagram" border="0" style="display: inline;"> </a> &nbsp; </span></td>
                </tr>
                <tr>
                  <td class="" height="20" bgcolor="#f9f9f9" style="padding:0; line-height: 0;">&nbsp;</td>
                </tr>
              </tbody></table></td>
            <td class="spacer" width="20" align="left" valign="top" bgcolor="#f9f9f9" style="margin: 0 !important; padding: 0 !important; line-height: 0 !important;">&nbsp;</td>
          </tr>
        </tbody></table>
      </div></td>
  </tr>
  <tr>
    <td class="full_width" align="center" width="100%" bgcolor="#fff" style=""><div class="div_scale" style=";">
        <table class="table_scale" width="" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#103746" style="padding:0; margin: 0; width: 100%;">
          <tbody><tr>
            <td class="" align="center" valign="top"  bgcolor="#103746" style=""><table align="center" width="100%">
                  <!-- START OF TEXT-->
                <tbody><tr>
                  <td align="center" valign="top" style="border-top: 1px solid #2b2b2b; padding: 40px 20px; font-size:13px ; color:#bbbbbb; font-family: Arial,sans-serif; line-height: 23px; "> {{$setting->address}}<br>
                  <!--<a style="color:#ee8322" href="#"> Manage Email Frequency | Unsubscribe</a><br>-->
                    <span style="color:#ffffff;"> <a href="//prizemaker.com/terms" style="color:#ffffff; font-style: normal; text-decoration: none; "> Terms of Play </a> &nbsp;|&nbsp;<a href="//prizemaker.com/privacy" style="color:#ffffff; font-style: normal; text-decoration: none;"> Privacy &amp; Policy </a> &nbsp;|&nbsp;<a href="//prizemaker.com/subscriber" style="color:#ffffff; font-style: normal; text-decoration: none;"> Refer a Friend </a> <a href="//prizemaker.com/contact" style="color:#ffffff; font-style: normal; text-decoration: none; "> &nbsp;|&nbsp; Contact Us </a> </span><br><span style="color:#ffffff;"> <a href="#" style="color:#ffffff; font-style: normal; text-decoration: none; "> {{$setting->email}} </a> &nbsp;|&nbsp;<a href="#" style="color:#ffffff; font-style: normal; text-decoration: none;"> Tel: 0203 962 5722 </a> &nbsp;|&nbsp;<a href="#" style="color:#ffffff; font-style: normal; text-decoration: none;"> www.prizemaker.com</a> </span></td>
                </tr>
                
                <!-- END OF TEXT-->
                <!-- START OF LOGO-->
                <tr>
                  <td align="center" valign="top" style="border-top: 1px solid #484848; padding: 20px; font-size:13px ; color:#bbbbbb; font-family: Arial,sans-serif; line-height: 23px; "><a href="#" style="font-style: normal;"> <img src="{{url('images/logo.png')}}" width="200" alt="logo" border="0" style="display: inline-block;"> </a></td>
                </tr>
                <!-- END OF LOGO-->
						</tbody></table>
						
					
					</td>
				</tr>
			</tbody></table>
			@if(isset($subscriber_id))
			<p style="text-align: center; padding-top: 2px;">
				No longer want to receive these email? You can <a href="{{url('/unsubscribe/'.$subscriber_id)}}" style="    color: rgba(0, 8, 255, 0.8);">Unsubscribe here</a>
			</p>
			@endif
			<p style="font-size: 13px; color: #96a5b5;text-align: center;    text-decoration: underline;    border-top: 1px solid #efefef;padding-top: 10px; padding-bottom: 10px;">
				ALL Rights Reserved.
			</p>
		</body>
	</html>
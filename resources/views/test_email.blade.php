<!DOCTYPE html>
<html>
<head>
	<title>Email</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="table" style="background-color: #f1fffe; padding-top: 30px;">
		<img src="{{url('logo.png')}}" width="400px" style="margin: 0 auto; display:flex;"><br><br>
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
			<div class="container" style="width: 80%;margin: 0 auto;">
				<!-- <a class="btn cust_img_btn" style="border:0;" type="btn" href="#"><img style="    width: 45%;margin: 0 auto;display: flex;" class="img-responsive" src="        http://prizemaker.stepinnsolution.com/frontend/images/sig_up.png">
				</a> -->
				<div class="row cust_main" style="border-top: 2px solid #b1b1b16e;;margin: 18px 0;border-radius: 7px;box-shadow: 2px 9px 8px 4px #88888870;padding: 10px;    padding-bottom: 25px;margin-top: 0;">
					<div class="col-md-6 ">
						<h3 class="text-left m-0" style="color: #ee8322;text-align: center;font-size: 25px;display: flex;margin: 0 auto;width: fit-content;">Refer to friend</h3>
						<h1 style="background: #ee8322;padding: 28px;border-radius: 50%;color: white;display: flex;margin: 0 auto;width: 27px;font-size: 18px; white-space: nowrap;">{{$commission}}%</h1>
						<p class="text-left m-0" style="font-size: 18px; color: #32bfb2;text-align: center;display: flex;margin: 12px auto 0;width: fit-content;">{{$ref_friend_string}} </p>
						<img style="    width: 100%;margin-bottom: 10px;" class="img-responsive" src="{{url('frontend/images/share-and.png')}}">
					</div>
					<div class="col-md-6 " style="    margin-top: 25px;">
						<h3 class="text-left m-0" style="color: #ee8322;text-align: center;font-size: 25px;display: flex;margin: 0 auto;width: fit-content;">Business Commissions</h3>
						<h1 style="    background: #ee8322;padding: 28px;border-radius: 50%;color: white;    display: flex;margin: 0 auto;width: 27px;font-size: 18px; white-space: nowrap;">{{$business_ref_commission}}%</h1>
						<p class="text-left m-0" style="font-size: 18px;text-align: center;    margin-top: 12px;    color: #32bfb2;    display: flex;    margin: 12px auto 0;  width: fit-content;">{{$buz_comsion_string}}  </p>
						<img style="    width: 100%;margin-bottom: 10px;" class="img-responsive" src="{{url('frontend/images/business.png')}}">
					</div>
				</div>
			</div>
		</div>
	

    <p style="font-size: 13px; color: #96a5b5;text-align: center;    text-decoration: underline;    border-top: 1px solid #efefef;padding-top: 10px; padding-bottom: 10px;">
                        
                    </p>
                <table border="0" align="center" width="590" cellpadding="0" cellspacing="0" class="container590 bg_color">
                        <tbody><tr>
                            <td>
                                <table border="0" width="300" align="left" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="container590">
                                    <tbody><tr>
                                        <!-- logo -->
                                        <td align="left">
                                            <a href="https://prizemaker.com/" style="display: block; border-style: none !important; border: 0 !important;"><img width="20" border="0" style="display: block; width: 130px;" src="{{url('frontend/images/logo.png')}}" alt=""></a>
                                        </td>
                                    </tr>
                                  
                                    <tr>
                                        <td align="left" style="color: #888888; font-size: 14px; font-family: 'Work Sans', Calibri, sans-serif; line-height: 23px;" class="text_color">
                                            <div style="color: #333333; font-size: 14px; font-family: 'Work Sans', Calibri, sans-serif; font-weight: 600; mso-line-height-rule: exactly; line-height: 23px;">
                                                Email us: <br> <a href="{{$setting->email}}" style="color: rgba(0,8,255,0.8); font-size: 14px; font-family: 'Hind Siliguri', Calibri, Sans-serif; font-weight: 400;">prizemaker@gmail.com</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody></table>
                              
                                <table border="0" width="200" align="right" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="container590">
                                    <tbody><tr>
                                        <td class="hide" height="45" style="font-size: 45px; line-height: 20px;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td height="15" style="font-size: 15px; line-height: 0px;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table border="0" align="right" cellpadding="0" cellspacing="0">
                                                <tbody><tr>
                                                    <td>
                                                        <a href="{{$setting->twitter_link}}" style="display: block; border-style: none !important; border: 0 !important;"><img width="24" border="0" style="display: block;" src="{{url('frontend/images/twitter.png')}}" alt=""></a>
                                                    </td>
                                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                    <td>
                                                        <a href="{{$setting->instagram_link}}" style="display: block; border-style: none !important; border: 0 !important;"><img width="24" border="0" style="display: block;" src="{{url('frontend/images/insta.png')}}"></a>
                                                    </td>
                                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                    <!--<td>-->
                                                    <!--    <a href="{{$setting->instagram_link}}" style="display: block; border-style: none !important; border: 0 !important;"><img width="24" border="0" style="display: block;"  src="{{url('frontend/images/pint.png')}}" alt=""></a>-->
                                                    <!--</td>-->
                                                     <!--<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>-->
                                                    <td>
                                                        <a href="{{$setting->facebook_link}}" style="display: block; border-style: none !important; border: 0 !important;"><img width="24" border="0" style="display: block;"  src="{{url('frontend/images/fbb.png')}}" alt=""></a>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        </td>
                                    </tr>
                                </tbody></table>
                            </td>
                        </tr>
                    </tbody></table>
                    <!--    <p style="text-align: center; padding-top: 2px;margin: 0 auto;">-->
                    <!--<img style="    width: 100%;margin-bottom:padding-right:7px; 10px;" class="img-responsive" src="{{url('frontend/images/twitter.png')}}">-->
                    <!--<img style="    width: 100%;margin-bottom:padding-right:7px; 10px;" class="img-responsive" src="{{url('frontend/images/insta.png')}}">-->
                    <!--<img style="    width: 100%;margin-bottom:padding-right:7px; 10px;" class="img-responsive" src="{{url('frontend/images/pint.png')}}">-->
                    <!--<img style="    width: 100%;margin-bottom:padding-right:7px; 10px;" class="img-responsive" src="{{url('frontend/images/fbb.png')}}">-->
                    <!--</p>-->
                    <!--    <p style="text-align: center; padding-top: 2px;">-->
                    <!--    No longer want to receive these email? You can <a href="#" style="    color: rgba(0, 8, 255, 0.8);">Unsubscribe here</a>-->
                    <!--</p>-->
                    <p style="font-size: 13px; color: #96a5b5;text-align: center;    text-decoration: underline;    border-top: 1px solid #efefef;padding-top: 10px; padding-bottom: 10px;">
                        ALL Rights Reserved.
                    </p>
                </div>
    <div class="bottom_link" style="text-align: center;">
    </div>
</div>
</div>
</body>
</html>
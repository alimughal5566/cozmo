<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Email</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="table_email" style="background-color: #f1fffe; margin-top: 30px;">

	  <a href="#" target="_blank" style="color: #596167; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">
                                    <font face="Arial, Helvetica, sans-serif" size="2" color="#596167">
                                    <img src="{{url('frontend/images/logo.png')}}" width="50%" alt="Evernote" border="0"  style="width: 25%;display: flex;
    margin: 0 auto;
    padding-top: 20px;" /></font></a>
    	<h2 style="text-align: center; color: #000000;">Welcome to Prizemaker</h2>
	<div class="link_site">
		<p style="text-align: center;">
						<span style="color: #ee8322;font-weight: 800;font-size: 16px;">Your User Name : {{$email}}</span>
		</p>
		<p style="text-align: center;">
						<span style="color: #ee8322;font-weight: 800;font-size: 16px;">Your Password : {{$password}}</span>
		</p>
        <p style="text-align: center; padding-top: 2px;">
            <span style="color: #2bbdb0; font-size: 20px;text-align: center;">Please click the link below to confirm your registration with Prizemaker.</span><br><br>
            {{ url('/login_page') }}<br><br>
            Thanks.
        </p>
{{--		<p style="text-align: center; padding-bottom: 20px;">--}}
{{--			<span style="color: #2bbdb0; font-size: 20px;">Your account has been created please click below</span><br><br>--}}
{{--					<a href="{{ url('/login_page') }}">	{{  url('/login_page') }}</a><br><br>--}}
{{--					Thanks.--}}
{{--		</p>--}}
		 <!-- <p style="font-size: 13px; color: #96a5b5;text-align: center;    text-decoration: underline;    border-top: 1px solid #efefef;padding-top: 10px; padding-bottom: 10px;">
                   ALL Rights Reserved.
                </p> -->
	</div>
	<p style="font-size: 13px; color: #96a5b5;text-align: center;    text-decoration: underline;    border-top: 1px solid #efefef;padding-top: 10px; padding-bottom: 10px;">

                    </p>
                <table border="0" align="center" width="590" cellpadding="0" cellspacing="0" class="container590 bg_color">
                        <tbody>
                            <tr>
    <td class="full_width" align="center" width="100%" bgcolor="#fff" style=""><div class="div_scale" style="">
        <table class="table_scale" width="" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#f9f9f9" style="padding:0; margin: 0; border-top: 1px solid #fff;">
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
              </tbody></table></td>
          </tr>
        </tbody></table>
      </div></td>
  </tr>


                </table>

              </td>
            </tr>

      </table>


    </div>
  </center>
</body>
</html>

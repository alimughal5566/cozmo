
<!DOCTYPE html>
<html>
<head>
	<title>email</title>
	 <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      
</head>
<style>
	body {
    padding: 0;
    margin: 0;
}

html { -webkit-text-size-adjust:none; -ms-text-size-adjust: none;}
@media only screen and (max-device-width: 680px), only screen and (max-width: 680px) { 
    *[class="table_width_100"] {
        width: 96% !important;
    }
    *[class="border-right_mob"] {
        border-right: 1px solid #dddddd;
    }
    *[class="mob_100"] {
        width: 100% !important;
    }
    *[class="mob_center"] {
        text-align: center !important;
    }
    *[class="mob_center_bl"] {
        float: none !important;
        display: block !important;
        margin: 0px auto;
    }   
    .iage_footer a {
        text-decoration: none;
        color: #929ca8;
    }
    img.mob_display_none {
        width: 0px !important;
        height: 0px !important;
        display: none !important;
    }
    img.mob_width_50 {
        width: 40% !important;
        height: auto !important;
    }
}
.table_width_100 {
    width: 680px;
}
</style>
<body>
	<div id="mailsub" class="notification" align="center">

<table width="100%" border="0" cellspacing="0" cellpadding="0" style="min-width: 320px;"><tr><td align="center" bgcolor="#eff3f8">


<!--[if gte mso 10]>
<table width="680" border="0" cellspacing="0" cellpadding="0">
<tr><td>
<![endif]-->

<table border="0" cellspacing="0" cellpadding="0" class="table_width_100" width="100%" style="max-width: 680px; min-width: 300px;">
    <tr><td>
    <!-- padding --><div style="height: 20px; line-height: 20px; font-size: 10px;">
     </div>
     
    </td></tr>
    <!--header -->

    <!--header END-->

    <!--content 1 -->
    <tr><td align="center" bgcolor="#fbfcfd">
        <table width="90%" border="0" cellspacing="0" cellpadding="0">
        	     <a href="#" target="_blank" style="color: #596167; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">
                                    <font face="Arial, Helvetica, sans-serif" size="2" color="#596167">
                                    <img src="{{URL::to('/frontend/images/logo.png')}}" width="50%" alt="Evernote" border="0"  style="display: block; width: 36%;margin-top: 5%; height: auto;" /></font></a>
            <tr><td align="center">
                <!-- padding --><div style="height: 10px; line-height: 60px; font-size: 10px;"> </div>
                <div style="line-height: 44px;">
                    <font face="Arial, Helvetica, sans-serif" size="5" color="#ee8322" style="font-size: 25px;">
                    <span style="font-family: Arial, Helvetica, sans-serif; font-size: 25px; color: #ee8322;">
                        Congratulations You have Successfully Participated For Free Ticket
                    </span></font>

                </div>
                <!-- padding --><div style="height: 40px; line-height: 40px; font-size: 10px;"> </div>
            </td></tr>
            <tr><td align="center">
                <div style="line-height: 24px;">
                    <font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" style="font-size: 20px;">
                    <span style="font-family: Arial, Helvetica, sans-serif; font-size: 20px; color: #57697e;">
                       Product Name {{$productname}}
                    </span>
                </font>
                </div>
                <div style="line-height: 40px;">
                    <font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" style="font-size: 20px;">
                    <span style="font-family: Arial, Helvetica, sans-serif; font-size: 20px; color: #57697e;">
                       <?php
                                                $main_img='';
                                            $img=DB::table('package_images')->where('main_img',1)->where('package_id',$ProductId)->first();
                                              if($img){
                                              $file=public_path("products/$img->package_id/$img->name");
                                              if(is_file($file)){
                                                $main_img=url("products/$img->package_id/$img->name");
                                                }
                                                 }
                                                 ?>
                                                 <img style="height: 70px; width: 100px;" src="{{$main_img}}">
                    </span>
                </font>
                </div>
                <div style="line-height: 40px;">
                    <font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" style="font-size: 20px;">
                    <span style="font-family: Arial, Helvetica, sans-serif; font-size: 20px; color: #57697e;">
                       <a style="color: #F09A53; text-decoration: none;" href="{{url('competition/'.$categoryslug.'/'.$uniqueId)}}">Click here to see product</a>
                    </span>
                </font>
                </div>
                <!-- padding --><div style="height: 20px; line-height: 40px; font-size: 10px;"> </div>
            </td></tr>
      
        </table>        
    </td></tr>
    <!--content 1 END-->



   
    <!--brands -->
    
    <!--brands END-->

    <!--footer -->
    <tr><td class="iage_footer" align="center" bgcolor="#ffffff">
        <!-- padding --><div style="height: 20px; line-height: 80px; font-size: 10px;"> </div>  
        
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr><td align="center">
                <font face="Arial, Helvetica, sans-serif" size="3" color="#96a5b5" style="font-size: 13px;">
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
                        <h1 style="    background: #ee8322;white-space: nowrap; padding: 28px;border-radius: 50%;color: white;    display: flex;margin: 0 auto;width: 27px;font-size: 18px;">{{$business_ref_commission}}%</h1>
                        <p class="text-left m-0" style="font-size: 18px;text-align: center;    margin-top: 12px;    color: #32bfb2;    display: flex;    margin: 12px auto 0;  width: fit-content;">{{$buz_comsion_string}}  </p>
                        <img style="    width: 100%;margin-bottom: 10px;" class="img-responsive" src="{{url('frontend/images/business.png')}}">
                    </div>
                </div>
            </div> 
                <span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #96a5b5;">
                   info@prizemaker.com
                </span></font>              
            </td></tr>          
        </table>
        
        <!-- padding --><div style="height: 30px; line-height: 30px; font-size: 10px;"> </div>  
    </td></tr>
    <!--footer END-->
    <tr><td>
    <!-- padding --><div style="height: 80px; line-height: 80px; font-size: 10px;"> </div>
    </td></tr>
</table>
<!--[if gte mso 10]>
</td></tr>
</table>
<![endif]-->
 
</td></tr>
</table>
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
                                                Email us: <br> <a href="{{$setting->email}}" style="color: rgba(0,8,255,0.8); font-size: 14px; font-family: 'Hind Siliguri', Calibri, Sans-serif; font-weight: 400;">{{$setting->email}}</a>
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

</body>
</html>
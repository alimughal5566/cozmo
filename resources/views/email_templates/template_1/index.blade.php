<!DOCTYPE html>
<html>
	<head>
		<title>Email</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="x-apple-disable-message-reformatting">
		<title></title>
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

		<style>
			.ree{
				width: 60% !important;
			}
		</style>
	</head>
	<style>

	</style>
	<body style="background-color: #F1F3F3;">


		<table style="width: 100%;margin: 0 auto; background-color: #fff;padding: 30px 30px 10px;border-spacing: 0px;    border-collapse: collapse;">
			<thead>
				<tr>
					<th></th>
					<th></th>
					<th></th>
				</tr>
			</thead>

			<tbody>
				<tr style="flex-direction: row; padding: 30px 30px 0;">
					<td><img src="{{url('/')}}/email_templates_resources/template_1/img/logo.png" style="width: 40%;margin-bottom: 20px;"></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td><strong style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;padding: 30px 30px 0;color: #CFCFCF; font-size: 14px;">HELLO THERE,</strong></td>
					<td></td>
					<td></td>
				</tr>
                <p style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;letter-spacing: 1px;width: 80%;margin:0px auto 15px;text-align: justify;color: #555555;">
                    @if($template_info->special_event=='yes')
                        {!! $template_info->newsletter_email_offer_description_admin !!}
                    @else
                        <?php echo $competition_info->description; ?>
                    @endif
                </p>
				<tr>
					<td><tr>
						<td style="text-align: center;"><a href="<?php echo url('competition/'.$competition_info->urlCategory->slug.'/'.$competition_info->slug);?>"><img src="{{url('/')}}/email_templates_resources/template_1/img/animation2.gif" style="width: 50%;margin: 15px;"></a></td>
					</tr></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td><img src="{{url('/')}}/email_templates_resources/template_1/img/divider.png"></td>
				</tr>
				<tr>
				<?php if (count($package_images) > 0): ?>
					<td style="text-align: center;">
						<?php $img_index = 0; ?>
						<!--<a target="_blank" href="<?php //echo url('/').'/products/'.$product_id.'/'.$package_images[$img_index];?>">-->
						<?php $img_url = $product_dir_path.$package_images[$img_index]; ?>
							<img src="<?php echo $img_url;?>" alt="" style="width: 30%; margin: 0 auto; border-radius: 20px">
						<!--</a>-->
						<p style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;color: #555555;"></p>
						<?php foreach ($package_images as $package_image): ?>
						<!--<a target="_blank" href="<?php //echo url('/').'/products/'.$product_id.'/'.$package_image;?>">-->
							<?php $img_url = $product_dir_path.$package_image; ?>
							<img src="<?php echo $img_url; ?>" alt="" style="width: 10%; border-radius: 10px">
						<!--</a>-->
						<?php endforeach; ?>
					</td>
				<?php endif; ?>

	</tr>
	<tr>
	<td>
		<h3 style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;font-size: 36px; color: #66BECD; text-align: center;margin: 15px;"><a href="<?php echo url('competition/'.$competition_info->urlCategory->slug.'/'.$competition_info->slug);?>"><?php echo $competition_info->name; ?></a></h3>
			<?php if (isset($subscriber_id) && !empty($subscriber_id)): ?>
			<p style="margin: 0 auto;text-align: center;">
			   Click <a class="btn btn-danger" href="{{url('/unsubscribe/'.$subscriber_id)}}">here</a> if you want to unsubscribe to future events
			</p>
			<?php endif; ?>
	</td>
		</tr>
<!-- 		<tr>
			<td style="text-align: center; background-color: #E3FAFF;"><img src="{{url('/')}}/email_templates_resources/template_1/img/avatar7.png" style="width: 20%; border-radius: 50%; margin: 30px 0;"></td>
		</tr>
		<tr>
			<td style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;padding: 4px;text-align: center; background-color: #E3FAFF; font-size: 14px;"><span>SHARE</span></td>
		</tr> -->
		<tr style="padding: 14px;text-align: center;flex-direction: row;justify-content: center;width: 100%;margin: 0 auto;">

			@if(isset($check))
			<div class="container" style="    width: 100%;margin: 0 auto;">
						<a class="btn cust_img_btn" style="border:0;" type="btn" href="{{url('/')}}"><img style="width: 45%;margin: 0 auto;display: flex;" class="img-responsive" src="{{url('frontend/images/sig_up.png')}}"></a>
						<div class="row cust_main" style="  border-top: 2px solid #b1b1b16e;;margin: 18px 0;border-radius: 7px;box-shadow: 2px 9px 8px 4px #88888870;padding: 10px;    padding-bottom: 25px;margin-top: 0;">
							<div class="col-md-6 ">
								<h3 class="text-left m-0" style="color: #ee8322;text-align: center;font-size: 25px;display: flex;margin: 0 auto;width: fit-content;">Refer to friend</h3>
									<h1 style="    background: #ee8322;padding: 20px;border-radius: 50%;color: white;display: flex;margin: 0 auto;width: 40px;">{{$commission}}%</h1>
									<p class="text-left m-0" style="font-size: 18px;   color: #32bfb2;text-align: center;    display: flex;    margin: 12px auto 0;   width: fit-content;">{{$ref_friend_string}} </p>
								<img style="    width: 100%;margin-bottom: 10px;" class="img-responsive ree" src="{{url('frontend/images/share-and.png')}}">
							</div>
							<div class="col-md-6 " style="    margin-top: 25px;">
								<h3 class="text-left m-0" style="color: #ee8322;text-align: center;font-size: 25px;display: flex;margin: 0 auto;width: fit-content;">Business Commissions</h3>
								<h1 style="    background: #ee8322;white-space: nowrap; padding: 25px;border-radius: 50%;color: white;    display: flex;margin: 0 auto;width: 40px;">{{$business_ref_commission}}%</h1>
								<p class="text-left m-0" style="font-size: 18px;text-align: center;    margin-top: 12px;    color: #32bfb2;    display: flex;    margin: 12px auto 0;  width: fit-content;">{{$buz_comsion_string}}  </p>
								<img style="    width: 100%;margin-bottom: 10px;" class="img-responsive ree" src="{{url('frontend/images/business.png')}}">
							</div>


						</div>
					</div>
					@endif


		</tr>
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
</body>
</html>

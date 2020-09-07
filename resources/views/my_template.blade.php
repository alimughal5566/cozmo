<!DOCTYPE html>
<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Email</title>
	</head>
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
				<tr style="display: flex;flex-direction: row; padding: 30px 30px 0;">
					<td><img src="{{url('/')}}/email_templates_resources/template_1/img/logo.png" style="width: 80%;margin-bottom: 20px;"></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td><strong style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;padding: 30px 30px 0;color: #CFCFCF; font-size: 14px;">HELLO THERE,</strong></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>
					    <tr>
						    <td style="text-align: center;"><a href="<?php echo url('product/refer/'.$competition_info->slug .'/business/'.$user->reference_id.'/email');?>"><h1 style="margin-bottom: 0;">Click here to Get a Free Ticket</h1></a></td>
						    
					    </tr>
					    <tr>
					        <td><h2 style="color:#f18421; text-align: center;">{{$offer}}</h2></td>
					    </tr>
					</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td><img src="{{url('/')}}/email_templates_resources/template_1/img/divider.png"></td>
				</tr>
				<tr>
				
					<td style="text-align: center;">
						<img src="{{url('products/'.$competition_info->id.'/'.$img->name)}}" alt="" style="width: 50%; border-radius: 10px">
					</td>

	
			
					
	</tr>
	<tr>
	<td>
		<h3 style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;font-size: 36px; color: #66BECD; text-align: center;margin: 15px;"><a href="<?php echo url('product/refer/'.$competition_info->slug .'/business/'.$user->reference_id.'/email');?>"><?php echo $competition_info->name; ?></a></h3>
			<!--<p style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;letter-spacing: 1px;width: 80%;margin:0px auto 15px;text-align: justify;color: #555555;">-->
			<!--<?php echo $competition_info->description; ?>-->
			<!--</p>-->
	</td>
		</tr>
		<tr style="text-align: center;">
			<img src="{{url('/')}}/email_templates_resources/template_1/img/logo.png" style="width: 25%;margin-bottom: 20px;">
		</tr>
		<tr>
			<!--<td style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;padding: 4px;text-align: center; background-color: #E3FAFF; font-size: 14px;"><span>SHARE</span></td>-->
		</tr>
		<!--<tr style="padding: 14px;text-align: center;display: flex;flex-direction: row;justify-content: center; background-color: #E3FAFF;">-->
		<!--	<?php if (isset($social_links) && !empty($social_links->facebook_link)): ?>-->
		<!--	<td><a href="<?php echo $social_links->facebook_link; ?>"><img src="<?php echo $template_img_path."facebook@2x.png"; ?>" style="width: 60%;"></a></td>-->
		<!--	<?php endif; ?>		-->
		<!--	<?php if (isset($social_links) && !empty($social_links->instagram_link)): ?>-->
		<!--	<td><a href="<?php echo $social_links->instagram_link; ?>"><img src="<?php echo $template_img_path."instagram@2x.png"; ?>" style="width: 60%;"></a></td>-->
		<!--	<?php endif; ?>-->
		<!--	<?php if (isset($social_links) && !empty($social_links->linkedin_link)): ?>-->
		<!--	<td><a href="<?php echo $social_links->linkedin_link; ?>"><img src="<?php echo $template_img_path."linkedin@2x.png"; ?>" style="width: 60%;"></a></td>-->
		<!--	<?php endif; ?>-->
		<!--	<?php if (isset($social_links) && !empty($social_links->twitter_link)): ?>-->
		<!--	<td><a href="<?php echo $social_links->twitter_link; ?>"><img src="<?php echo $template_img_path."twitter@2x.png"; ?>" style="width: 60%;"></a></td>-->
		<!--	<?php endif; ?>			-->
		<!--</tr>-->
		
	</table>
</body>
</html>
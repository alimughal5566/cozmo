<!DOCTYPE html>
<html>
	<head>
		<title>Email</title>
	</head>
	<body style="background-color: #F1F3F3;">
		<table style="width: 50%;margin: 0 auto; background-color: #fff;padding: 30px 30px 10px;border-spacing: 0px;    border-collapse: collapse;">
			<thead>
				<tr>
					<th></th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr style="display: flex;flex-direction: row; padding: 30px 30px 0;">
					<td><img src="{{url('/')}}/email_templates_resources/template_1/img/D3GDPR41.png" style="width: 80%;margin-bottom: 20px;"></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td><strong style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;padding: 30px 30px 0;color: #CFCFCF; font-size: 14px;">HELLO THERE,</strong></td>
					<td></td>
					<td></td>
				</tr>
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
			<p style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;letter-spacing: 1px;width: 80%;margin:0px auto 15px;text-align: justify;color: #555555;">
			<?php echo $competition_info->description; ?>
			</p>
	</td>
		</tr>
		<tr>
			<td style="text-align: center; background-color: #E3FAFF;"><img src="{{url('/')}}/email_templates_resources/template_1/img/avatar7.png" style="width: 20%; border-radius: 50%; margin: 30px 0;"></td>
		</tr>
		<tr>
			<td style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;padding: 4px;text-align: center; background-color: #E3FAFF; font-size: 14px;"><span>SHARE</span></td>
		</tr>
		<tr style="padding: 14px;text-align: center;display: flex;flex-direction: row;justify-content: center; background-color: #E3FAFF;">
			<?php if (isset($social_links) && !empty($social_links->facebook_link)): ?>
			<td><a href="<?php echo $social_links->facebook_link; ?>"><img src="<?php echo $template_img_path."facebook@2x.png"; ?>" style="width: 60%;"></a></td>
			<?php endif; ?>		
			<?php if (isset($social_links) && !empty($social_links->instagram_link)): ?>
			<td><a href="<?php echo $social_links->instagram_link; ?>"><img src="<?php echo $template_img_path."instagram@2x.png"; ?>" style="width: 60%;"></a></td>
			<?php endif; ?>
			<?php if (isset($social_links) && !empty($social_links->linkedin_link)): ?>
			<td><a href="<?php echo $social_links->linkedin_link; ?>"><img src="<?php echo $template_img_path."linkedin@2x.png"; ?>" style="width: 60%;"></a></td>
			<?php endif; ?>
			<?php if (isset($social_links) && !empty($social_links->twitter_link)): ?>
			<td><a href="<?php echo $social_links->twitter_link; ?>"><img src="<?php echo $template_img_path."twitter@2x.png"; ?>" style="width: 60%;"></a></td>
			<?php endif; ?>			
		</tr>
		<tr style="padding: 14px 0 0;text-align: center;display: flex;flex-direction: row;justify-content: center;">
			<td>Mobile phone <a href="tel:00000000" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;color: #555555; text-decoration: none;">00000000</a></td>
			<td><a href="mailto:hello@info.com" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;font-size:17px;margin-left: 20px; color: #555555; text-decoration: none;font-size:14px; font-weight: bold;">hello@info.com</a></td>
			<td style="text-align: right;"><img src="{{url('/')}}/email_templates_resources/template_1/img/D3GDPR41.png" style="width: 40%;margin-bottom: 20px;"></td>
		</tr>
	</table>
</body>
</html>
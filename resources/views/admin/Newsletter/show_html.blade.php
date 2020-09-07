@extends( 'admin.layouts.app' )
@section( 'content' )




<div class="app-title">

	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
		<li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
		<li class="breadcrumb-item"><a href="#">Edit</a>
		</ul>
</div>

	<div class="row">
		<div class="col-md-12">
				
				<div class="tile">
					<h3>Show Html</h3>

					<div class="row">

						<div class="col-lg-12">
							<div class="form-group">
							<label>Competition Name:</label>
							<input type="text" name="" readonly value="{{$competition_info->name}}" style="padding: 2px 15px;border: 2px solid #ced4da;border-radius: 4px;text-align: center;margin-left: 10px;">

						</div>

						</div>




					<div class="col-lg-12" >
						<div class="form-group">
							<label>Html</label>
							<textarea name="description"  cols="16" rows="15" style="width: 100%;padding: 8px;border: 2px solid #ced4da;border-radius: 3px;">
								<!DOCTYPE html>
<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Email</title>
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
				<tr style="display: flex;flex-direction: row; padding: 30px 30px 0;">
					<td><img src="{{url('/')}}/email_templates_resources/template_1/img/logo.png" style="width: 40%;margin-bottom: 20px;"></td>
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
		<tr style="padding: 14px;text-align: center;display: flex;flex-direction: row;justify-content: center;width: 100%;margin: 0 auto;">

			@if(isset($check))
			<div class="container" style="    width: 100%;margin: 0 auto;">
						<a class="btn cust_img_btn" style="border:0;" type="btn" href="{{url('/')}}"><img style="width: 45%;margin: 0 auto;display: flex;" class="img-responsive" src="{{url('frontend/images/sig_up.png')}}"></a>
						<div class="row cust_main" style="  border-top: 2px solid #b1b1b16e;;margin: 18px 0;border-radius: 7px;box-shadow: 2px 9px 8px 4px #88888870;padding: 10px;    padding-bottom: 25px;margin-top: 0;">
							<div class="col-md-6 ">
								<h3 class="text-left m-0" style="color: #ee8322;text-align: center;font-size: 25px;display: flex;margin: 0 auto;width: fit-content;">Refer to friend</h3>
									<h1 style="    background: #ee8322;padding: 20px;border-radius: 50%;color: white;display: flex;margin: 0 auto;width: 40px;">{{$commission}}%</h1>
									<p class="text-left m-0" style="font-size: 18px;   color: #32bfb2;text-align: center;    display: flex;    margin: 12px auto 0;   width: fit-content;">{{$ref_friend_string}} </p>
								<img style="    width: 100%;margin-bottom: 10px;" class="img-responsive" src="{{url('frontend/images/share-and.png')}}">
							</div>
							<div class="col-md-6 " style="    margin-top: 25px;"> 
								<h3 class="text-left m-0" style="color: #ee8322;text-align: center;font-size: 25px;display: flex;margin: 0 auto;width: fit-content;">Business Commissions</h3>
								<h1 style="    background: #ee8322;white-space: nowrap; padding: 25px;border-radius: 50%;color: white;    display: flex;margin: 0 auto;width: 40px;">{{$business_ref_commission}}%</h1>
								<p class="text-left m-0" style="font-size: 18px;text-align: center;    margin-top: 12px;    color: #32bfb2;    display: flex;    margin: 12px auto 0;  width: fit-content;">{{$buz_comsion_string}}  </p>
								<img style="    width: 100%;margin-bottom: 10px;" class="img-responsive" src="{{url('frontend/images/business.png')}}">
							</div>
							
							
						</div>
					</div>
					@endif

			
		</tr>
		<tr style="padding: 14px 0 0;text-align: center;flex-direction: row;justify-content: center;">
			<td><img src="{{url('/')}}/email_templates_resources/template_1/img/logo.png" style="width: 25%;margin-bottom: 20px;"></td>
		</tr>
		<tr style="  display: flex;   margin: 0 auto;width: 30%;">
			<?php if (isset($social_links) && !empty($social_links->facebook_link)): ?>
			<td style="    margin: 12px;"><a href="<?php echo $social_links->facebook_link; ?>"><img src="<?php echo $template_img_path."facebook@2x.png"; ?>" style="width: 60%;"></a></td>
			<?php endif; ?>		
			<?php if (isset($social_links) && !empty($social_links->instagram_link)): ?>
			<td style="    margin: 12px;"><a href="<?php echo $social_links->instagram_link; ?>"><img src="<?php echo $template_img_path."instagram@2x.png"; ?>" style="width: 60%;"></a></td>
			<?php endif; ?>
			<?php if (isset($social_links) && !empty($social_links->linkedin_link)): ?>
			<td style="    margin: 12px;"><a href="<?php echo $social_links->linkedin_link; ?>"><img src="<?php echo $template_img_path."linkedin@2x.png"; ?>" style="width: 60%;"></a></td>
			<?php endif; ?>
			<?php if (isset($social_links) && !empty($social_links->twitter_link)): ?>
			<td style="    margin: 12px;"><a href="<?php echo $social_links->twitter_link; ?>"><img src="<?php echo $template_img_path."twitter@2x.png"; ?>" style="width: 60%;"></a></td>
			<?php endif; ?>			
		</tr>
	</table>
</body>
</html>
							</textarea>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>









@endsection
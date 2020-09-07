@extends( 'admin.layouts.app' )
@section( 'content' )

<style>
	.set-width{
		width: 51%;
	}
		.set-lab{
		padding-left: 50px !important;
	}
@media screen and (max-width: 568px){
.set-width{
		width: 108%;
	}
	.set-lab{
		padding-left: 16px !important;
	}

}
</style>

<script src="//cdn.ckeditor.com/4.13.1/full-all/ckeditor.js"></script>
<script>
			$(document).ready(function() {
          CKEDITOR.replace( 'txtEditor' );
			});
            
            $(document).ready(function() {
          CKEDITOR.replace( 'module1' );
			});
			$(document).ready(function() {
          CKEDITOR.replace( 'module2' );
			});
			$(document).ready(function() {
          CKEDITOR.replace( 'module3' );
			});
			$(document).ready(function() {
          CKEDITOR.replace( 'module4' );
			});
			$(document).ready(function() {
          CKEDITOR.replace( 'module5' );
			});
			$(document).ready(function() {
          CKEDITOR.replace( 'module6' );
			});
	</script>



<?php $curr=Config::get("constants.currency"); ?>
<div class="app-title">
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
		</li>
		<li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a>
		</li>
		
	</ul>
</div>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('alert'))
    <div class="alert alert-danger">
        {{ session('alert') }}
    </div>
@endif

<div class="row">
	<div class="col-md-12">
		<form class="form-horizontal" method="POST" action="{{ url('store_setting') }}" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="tile">
				<h3 class="tile-title">Setting</h3>
				 <hr style="border-top: 1px solid black;    margin-bottom: 2rem;">

				<div class="row">
					@if($setting=="")
					@if(Auth::check() && Auth::user()->user_role == 1)
					<!-- <div class="form-group row set-width">
                                            <label for="" class="col-sm-6 col-form-label set-lab">Business Referral Commission Percentage</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="name" placeholder="Business Referral Commission" name="business-referral-commission" value="" required autofocus>
                                            </div>
                                        </div>   -->                                      
                                        

					<!-- <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab">Refer to friend Commission Percentage</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="name" placeholder="commission" name="commission" value="" required autofocus>
	                  </div>
	                </div>
 -->
	                <!-- <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab">Refer to friend String</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="name" placeholder="refer to friend string" name="refer_friend_string" value="" required autofocus>
	                  </div>
	                </div>

	                 <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab">Business Commissions String</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="name" placeholder="business commissions string" name="buz_commision_string" value="" required autofocus>
	                  </div>
	                </div> -->
	                
	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab">Company Number </label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="address" placeholder="Company Number" name="company_number" value="" required autofocus>
	                  </div>
	                </div>

	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab">Address</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="address" placeholder="address" name="address" value="" required autofocus>
	                  </div>
	                </div>

	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Email</label>
	                  <div class="col-sm-6">
	                    <input type="email" class="form-control" id="email" placeholder="email" name="email" value="" required autofocus>
	                  </div>
	                </div>

	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Phone</label>
	                  <div class="col-sm-6">
	                    <input type="phone" class="form-control" id="phone" placeholder="phone" name="phone" value="" required autofocus>
	                  </div>
	                </div>

	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Facebook Link</label>
	                  <div class="col-sm-6">
	                    <input type="url" class="form-control" id="facebook_link" name="facebook_link" value="" placeholder="Enter complete link" required autofocus>
	                  </div>
	                </div>

	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Twitter link</label>
	                  <div class="col-sm-6">
	                    <input type="url" class="form-control" id="twitter_link" name="twitter_link" value="" placeholder="Enter complete link" required autofocus>
	                  </div>
	                </div>

	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Youtube Link</label>
	                  <div class="col-sm-6">
	                    <input type="url" class="form-control" id="youtube_link" name="youtube_link" value="" placeholder="Enter complete link" required autofocus>
	                  </div>
	                </div>

	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Instagram Link</label>
	                  <div class="col-sm-6">
	                    <input type="url" class="form-control" id="instagram_link" name="instagram_link" value="" placeholder="Enter complete link" required autofocus>
	                  </div>
	                </div>
                    @endif             
	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Meta Title</label>
	                  <div class="col-sm-6">
	                    <input type="url" class="form-control" id="meta_title" name="meta_title" value="" placeholder="Enter Meta Title" required autofocus>
	                  </div>
	                </div>                                        

                        <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Meta Description</label>
	                  <div class="col-sm-6">
	                    <input type="url" class="form-control" id="meta_description" name="meta_description" value="" placeholder="Enter Description" required autofocus>
	                  </div>
	                </div>

                        <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Meta Keywords</label>
	                  <div class="col-sm-6">
	                    <input type="url" class="form-control" id="meta_keywords" name="meta_keywords" value="" placeholder="Enter Keywords" required autofocus>
	                  </div>
	                </div> 
	                @if(Auth::check() && Auth::user()->user_role == 1)
	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Free Entry Method</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="meta_keywords" name="free_entry_label" value="" placeholder="Enter Free Entry" required autofocus>
	                  </div>
	                </div> 
	                
	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Purchase email title 1</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="" name="purchase_email_title_1" value="" placeholder="purchase email title 1" required autofocus>
	                  </div>
	                </div> 
	                
	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;">Purchase email title 2</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="meta_keywords" name="purchase_email_title_2" value="" placeholder="purchase email title 2" required autofocus>
	                  </div>
	                </div> 
	                
	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;">purchase email text 1</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="meta_keywords" name="purchase_email_text_1" value="" placeholder="purchase email text 1" required autofocus>
	                  </div>
	                </div> 
	                
	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;">purchase email text 2</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="meta_keywords" name="purchase_email_text_2" value="" placeholder="purchase email text 2" required autofocus>
	                  </div>
	                </div> 
	                
	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;">Purchase email buy more comp. count</label>
	                  <div class="col-sm-6">
	                    <input type="number" class="form-control" id="meta_keywords" name="buy_more_comp" value="" placeholder="purchase email buy more comp. count" required autofocus>
	                  </div>
	                </div> 

	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;">Admin Password</label>
	                  <div class="col-sm-6">
	                    <input type="password" class="form-control" id="meta_keywords" name="admin_password" value="" placeholder="admin password" autofocus>
	                  </div>
	                </div> 
	                
	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Heading 1</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="" name="heading1" value="" placeholder="heading"  >
	                  </div>
	                </div>
	                
	                <div class="col-lg-12" >
						<div class="form-group">
						<label>Home Page Products</label>
						<textarea name="description" cols="8" id="txtEditor" value="" style="height: 35px;width: 100%;">
							
						</textarea>
						</div>	
					</div>
					@endif
					<!-- <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Heading 1</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="" name="heading1" value="" placeholder="heading"  >
	                  </div>
	                </div>
	                
	                <div class="col-lg-12" >
						<div class="form-group">
						<label>Block 1</label>
						<textarea name="module1" cols="8" id="module1" value="" style="height: 35px;width: 100%;">
							
						</textarea>
						</div>	
					</div>
					
					 <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Heading 2</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="" name="heading2" value="" placeholder="heading"  >
	                  </div>
	                </div>
					
					<div class="col-lg-12" >
						<div class="form-group">
						<label>Block 2</label>
						<textarea name="module2" cols="8" id="module2" value="" style="height: 35px;width: 100%;">
							
						</textarea>
						</div>	
					</div>
					
					 <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Heading 3</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="" name="heading3" value="" placeholder="heading"  >
	                  </div>
	                </div>
					
					<div class="col-lg-12" >
						<div class="form-group">
						<label>Block 3</label>
						<textarea name="module3" cols="8" id="module3" value="" style="height: 35px;width: 100%;">
							
						</textarea>
						</div>	
					</div>
					
					 <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Heading 4</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="" name="heading4" value="" placeholder="heading"  >
	                  </div>
	                </div>
					
					<div class="col-lg-12" >
						<div class="form-group">
						<label>Block 4</label>
						<textarea name="module4" cols="8" id="module4" value="" style="height: 35px;width: 100%;">
							
						</textarea>
						</div>	
					</div>
					
					  <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Heading 5</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="" name="heading4" value="" placeholder="heading"  >
	                  </div>
	                </div>
					
					<div class="col-lg-12" >
						<div class="form-group">
						<label>Block 5</label>
						<textarea name="module5" cols="8" id="module5" value="" style="height: 35px;width: 100%;">
							
						</textarea>
						</div>	
					</div>
					
					 <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Heading 6</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="" name="heading6" value="" placeholder="heading"  >
	                  </div>
	                </div>
	                
					<div class="col-lg-12" >
						<div class="form-group">
						<label>Block 6</label>
						<textarea name="module6" cols="8" id="module6" value="" style="height: 35px;width: 100%;">
							
						</textarea>
						</div>	
					</div> -->
					
					@else
					@if(Auth::check() && Auth::user()->user_role == 1)
                                        
                            		<!-- <div class="form-group row set-width">
                                            <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;">Business Referral Commission Percentage</label>
                                            <div class="col-sm-6">
                                                <input type="number" class="form-control" id="name" placeholder="Business Referral Commission" name="business_ref_commission" value="{{ $setting->business_ref_commission}}" required autofocus>
                                            </div>
                                        </div>              
                                        

					<div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;">Refer to friend Commission Percentage</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="commission" placeholder="commission" name="commission" value="{{ $setting->commission}}" required autofocus>
	                  </div>
	                </div>

	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;">Business Commissions String</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="name" placeholder="business commissions string" name="buz_commision_string" value="{{ $setting->buz_comsion_string}}" required autofocus>
	                  </div>
	                </div>

	                 <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;">Refer to friend String</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="name" placeholder="refer to friend string" name="refer_friend_string" value="{{ $setting->ref_friend_string}}" required autofocus>
	                  </div>
	                </div>
 -->
	                 
	                
	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;">Company Number</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="address" placeholder="Company Number" name="company_number" value="{{ $setting->company_number}}" required autofocus>
	                  </div>
	                </div>

	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;">Address</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="address" placeholder="address" name="address" value="{{ $setting->address}}" required autofocus>
	                  </div>
	                </div>

	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Email</label>
	                  <div class="col-sm-6">
	                    <input type="email" class="form-control" id="email" placeholder="email" name="email" value="{{ $setting->email}}" required autofocus>
	                  </div>
	                </div>

	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Phone</label>
	                  <div class="col-sm-6">
	                    <input type="phone" class="form-control" id="phone" placeholder="phone" name="phone" value="{{ $setting->phone}}" required autofocus>
	                  </div>
	                </div>

	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Facebook Link</label>
	                  <div class="col-sm-6">
	                    <input type="url" class="form-control" id="facebook_link" name="facebook_link" value="{{ $setting->facebook_link}}" placeholder="Enter complete link" required autofocus>
	                  </div>
	                </div>

	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Twitter link</label>
	                  <div class="col-sm-6">
	                    <input type="url" class="form-control" id="twitter_link" name="twitter_link" value="{{ $setting->twitter_link}}" placeholder="Enter complete link" required autofocus>
	                  </div>
	                </div>

	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Youtube Link</label>
	                  <div class="col-sm-6">
	                    <input type="url" class="form-control" id="youtube_link" name="youtube_link" value="{{ $setting->youtube_link}}" placeholder="Enter complete link" required autofocus>
	                  </div>
	                </div>

	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Instagram Link</label>
	                  <div class="col-sm-6">
	                    <input type="url" class="form-control" id="instagram_link" name="instagram_link" value="{{ $setting->instagram_link}}" placeholder="Enter complete link" required autofocus>
	                  </div>
	                </div>
                     @endif                   
	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Meta Title</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{ $setting->meta_title }}" placeholder="Enter Meta Title" required autofocus>
	                  </div>
	                </div>                                        

                        <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Meta Description</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="meta_description" name="meta_description" value="{{ $setting->meta_description }}" placeholder="Enter Meta Description" required autofocus>
	                  </div>
	                </div>

                        <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Meta Keywords</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" value="{{ $setting->meta_keywords }}" placeholder="Enter Meta Keywords" required autofocus>
	                  </div>
	                </div>

	                @if(Auth::check() && Auth::user()->user_role == 1)
	               <!--  <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Free Entry Method</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="meta_keywords" name="free_entry_label" value="{{ $setting->free_entry_label }}" placeholder="Enter Free Entry" required autofocus>
	                  </div>
	                </div>  -->  
	                
	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Contact Us emial title</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="" name="purchase_email_title_1" value="{{ $setting->purchase_email_title_1 }}" placeholder="purchase email title 1" required autofocus>
	                  </div>
	                </div> 
	                
	                <!-- <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;">Purchase email title 2</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="meta_keywords" name="purchase_email_title_2" value="{{ $setting->purchase_email_title_2 }}" placeholder="purchase email title 2" required autofocus>
	                  </div>
	                </div>  -->
	                
	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;">Contact Us text</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="meta_keywords" name="purchase_email_text_1" value="{{ $setting->purchase_email_text_1 }}" placeholder="purchase email text 1" required autofocus>
	                  </div>
	                </div> 
	                
	                <!-- <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;">purchase email text 2</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="meta_keywords" name="purchase_email_text_2" value="{{ $setting->purchase_email_text_2 }}" placeholder="purchase email text 2" required autofocus>
	                  </div>
	                </div>  -->
	                
	                <!-- <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;">Purchase email buy more comp. count</label>
	                  <div class="col-sm-6">
	                    <input type="number" class="form-control" id="meta_keywords" name="buy_more_comp" value="{{ $setting->buy_more_comp }}" placeholder="purchase email buy more comp. count" required autofocus>
	                  </div>
	                </div> --> 

	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;">Admin Password</label>
	                  <div class="col-sm-6">
	                    <input type="password" class="form-control" id="meta_keywords" name="admin_password" value="" placeholder="admin password" autofocus>
	                  </div>
	                </div> 

	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;">Subscriber Cron Email</label>
	                  <div class="col-sm-6">
	                    <input type="radio" id="male" name="subscriber_cron_job" value="active" @if($setting->subscriber_cron_job == "active") checked @endif>
						  <label for="male">Active</label>
						<input type="radio" id="female" name="subscriber_cron_job" value="Inactive" @if($setting->subscriber_cron_job == "Inactive") checked @endif>
						  <label for="female">Inactive</label>
	                  </div>
	                </div>
	                
	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Heading 1</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="" name="heading1" value="{{ $setting->heading1 }}" placeholder="heading"  >
	                  </div>
	                </div>
	                
	                <div class="col-lg-12" >
						<div class="form-group">
						<label>Articles Page Description</label>
						<textarea name="description" cols="8" id="txtEditor" value="" style="height: 35px;width: 100%;">
							{{ $setting->all_competation }}
						</textarea>
						</div>	
					</div>
					@endif
					 <!-- <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Heading 1</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="" name="heading1" value="" placeholder="heading"  >
	                  </div>
	                </div>
	                
	                <div class="col-lg-12" >
						<div class="form-group">
						<label>Block 1</label>
						<textarea name="module1" cols="8" id="module1" value="" style="height: 35px;width: 100%;">
							
						</textarea>
						</div>	
					</div>
					
					 <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Heading 2</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="" name="heading2" value="" placeholder="heading"  >
	                  </div>
	                </div>
					
					<div class="col-lg-12" >
						<div class="form-group">
						<label>Block 2</label>
						<textarea name="module2" cols="8" id="module2" value="" style="height: 35px;width: 100%;">
							
						</textarea>
						</div>	
					</div>
					
					 <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Heading 3</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="" name="heading3" value="" placeholder="heading"  >
	                  </div>
	                </div>
					
					<div class="col-lg-12" >
						<div class="form-group">
						<label>Block 3</label>
						<textarea name="module3" cols="8" id="module3" value="" style="height: 35px;width: 100%;">
							
						</textarea>
						</div>	
					</div>
					
					 <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Heading 4</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="" name="heading4" value="" placeholder="heading"  >
	                  </div>
	                </div>
					
					<div class="col-lg-12" >
						<div class="form-group">
						<label>Block 4</label>
						<textarea name="module4" cols="8" id="module4" value="" style="height: 35px;width: 100%;">
							
						</textarea>
						</div>	
					</div>
					
					 <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Heading 5</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="" name="heading5" value="" placeholder="heading"  >
	                  </div>
	                </div>
					
					<div class="col-lg-12" >
						<div class="form-group">
						<label>Block 5</label>
						<textarea name="module5" cols="8" id="module5" value="" style="height: 35px;width: 100%;">
							
						</textarea>
						</div>	
					</div>
					
					 <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab" style="padding-left: 90px;"> Heading 6</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="" name="heading6" value="" placeholder="heading"  >
	                  </div>
	                </div>
	                
					<div class="col-lg-12" >
						<div class="form-group">
						<label>Block 6</label>
						<textarea name="module6" cols="8" id="module6" value="" style="height: 35px;width: 100%;">
							
						</textarea>
						</div>	
					</div> -->

	                @endif

				</div>
				

			
				<div class="tile-footer text-right">
					<a class="btn btn-default" id="cancel" href="">Cancel</a>
					<button class="btn btn-primary" type="submit">Save</button>
				</div>

			</div>
		</form>
	</div>
</div>

<script>


	
	$('#cancel').click(function() {
		location.reload();
	});

</script>


@endsection
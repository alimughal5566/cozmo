@extends( 'admin.layouts.app' )
@section( 'content' )

<style>
    .slct_styling {
        border: 2px solid #ced4da;
    padding: 6px 10px;
    border-radius: 4px;
    }
    .tile .tile-footer {
        width: 97%;
    }
    .form-control:disabled, .form-control[readonly] {
        border: none;
    }
</style>


<script src="//cdn.ckeditor.com/4.13.1/full-all/ckeditor.js"></script>
<script>
			$(document).ready(function() {
           CKEDITOR.replace( 'txtEditor' );
			});

	</script>
	

<div class="app-title">
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
		</li>
		<li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a>
		</li>
		
	</ul>
</div>


<div class="row">
	<div class="col-md-12">
		
			<div class="tile">
				<h3 class="tile-title">Send Competition</h3>
				@if(Session::has('success'))
			<div class="alert alert-success">
				{{ Session::get('success') }}
			</div>
			@endif
				@if($errors->any())
			    {!! implode('', $errors->all('<div  class="alert alert-danger">:message</div>')) !!}
			@endif
				<form id="myform" class="form-horizontal" method="POST" action="{{ url('send_email') }}" enctype="multipart/form-data">
					{{ csrf_field() }}
				<div class="row">
					<input type="hidden" name="ids" value="{{$package->id}}">
					<div class="col-sm-6 col-md-3 col-lg-4">
						<div class="form-group">
							<label>Subject</label>
							<input id="" value="{{old('subject')}}" type="text" placeholder="subject" class="form-control" name="subject"  required>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 col-lg-4">
						<div class="form-group">
							<label>@lang('packages.name')</label>
							<input id="name" value="{{$package->name}}" type="text" placeholder="@lang('packages.name')" class="form-control"  readonly>
						</div>
					</div>
					<?php $mc = DB::table('multi_competition')->where('id',$package->mc_id)->first(); ?>
					<div class="col-sm-6 col-md-3 col-lg-4">
						<div class="form-group">
							<label>Price</label>
							<input id="" value="{{$mc->price}}" type="text" placeholder="@lang('packages.name')" class="form-control"  readonly>
						</div>
					</div>
					
						<div class="col-sm-6 col-md-3 col-lg-4">
						<div class="form-group">
							<label>Offer Text</label>
							<input id="offer" value="" type="text" placeholder="offer text" class="form-control" name="offer" >
						</div>
					</div>
					
					<?php $img = DB::table('package_images')->where('package_id',$package->id)->where('main_img',1)->first(); ?>

					<div class="col-sm-6 col-md-3 col-lg-4">
						<div class="form-group">
						    <label>Image</label>
							<img src="{{url('products/'.$package->id.'/'.$img->name)}}" style="width: 150px;">
						</div>
					</div>
					
					<!--	<div class="col-lg-12" >-->
					<!--	<div class="form-group">-->
					<!--	<label>Description</label>-->
					<!--	<textarea name="" cols="8" id="txtEditor" value="" style="height: 35px;width: 100%;">-->
					<!--		{{$package->description}}-->
					<!--	</textarea>-->
					<!--	</div>	-->
					<!--</div>	-->

					<!--<div class="col-sm-6 col-md-3 col-lg-4">-->
					<!--	<div class="form-group">-->
					<!--		<label>Email Template</label><br>-->
					<!--		<input type="radio"  name="email_template" id="first" value="first template" checked>-->
					<!--		 <label for="first">first template</label>-->
					<!--		 <input type="radio" id="2nd" name="email_template" value="2nd template" style="margin-left:10px">-->
					<!--		  <label for="2nd">2nd template</label>-->
					<!--	</div>-->
					<!--</div>-->

					<div class="col-sm-6 col-md-3 col-lg-4">
						<div class="form-group">
							<label>Number of Email</label><br>
							<select name="number" class="slct_styling">
								<option value="select">Select Number of email</option>
							  <option value="50">50</option>
							  <option value="100">100</option>
							  <option value="500">500</option>
							  <option value="1000">1000</option>
							</select>
						</div>
					</div>
					
					<div class="col-sm-6 col-md-3 col-lg-4">
						<div class="form-group">
							<label>Email Template</label><br>
							<select id="template" name="template" class="slct_styling">
							  <!--<option value="select">Select Email Template</option>-->
							  <!-- <option value="congratulations">Congratulations Template</option>
							  <option value="thank">Thank you Template</option>
							  <option value="offering">We are offering Template</option> -->
							  <option value="last">Last chance</option>
							  <option value="newsletter">Newsletter Template</option>
							</select>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 col-lg-4">
						<div class="form-group">
						  <label>Country</label><br>
							<select name="country" class="slct_styling">
								<!--<option value="select">Select Country</option>-->
								<option value="UK">UK</option>
							  	<option value="USA">USA</option>
							  	<option value="Canada">Canada</option>
							</select>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 col-lg-4">
						<div class="form-group">
							 <label>Business Category</label><br>
						<select name="business_category" class="slct_styling">
							<!--<option value="select">Select Category</option>-->
							<option value="Casino">Casino</option>
							<option value="Restaurant">Restaurant</option>
							<option value="Hotel">Hotel</option>
							<option value="No Category">No Category</option>

						</select>
						</div>
					</div>
					
					<div class="col-sm-6 col-md-3 col-lg-4">
						<div class="form-group">
							<label>Email</label>
							<input id="" value="{{old('email')}}" type="text" placeholder="email@email.com, gmail@gmail.com" class="form-control" name="email"  >
						</div>
					</div>

					<div class="tile-footer text-right">
					<button class="btn btn-primary" id="uploaded" type="submit">Submit</button>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>


<script>
	$('#myform').on('submit', function(){
		$('#uploaded').prop('disabled', true);
	});
</script>




@endsection
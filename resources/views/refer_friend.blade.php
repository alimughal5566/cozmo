@extends('layouts.app')

@section('content')





<style>
			.head {
			margin-top: 50px;
			}

			.text {
				margin: 0;
			}
			.form {
			box-shadow: 1px 0px 4px #808080;
			padding: 20px 150px;
            width: 80%;
                padding-bottom: 65px;
			}
			.form h4 {
				text-shadow: 2px 2px 4px #fff;
				    text-align: center;
				        color: grey;
			}
			.form input {
				/*width: 30%;*/
				border-radius: 5px;
			}
			.form-group label {
			font-size: 14px;
				font-weight: 700;
			}
			.social_links-icon {
				text-align: center;
				    position: relative;
				        margin-top: 14px;
			}
			.social_links-icon p {
			    margin:10px 0;
			}
			.social_links-icon i {
				font-size: 50px !important;
				    color: darkorange;
			}
			.btn-success {
				background-color: #ee8322;
				border: none !important;
				width:35%;
			}
			.form_data h2 {
			    color: darkorange;
			    text-align: center;
			}
			.social_links-icon i:hover{
			    color:#b96d28; 
			}
			.cust_perc{
	    font-size: 21px;
    background: #ee8322;
    padding: 28px;
    border-radius: 50%;
    color: white;
    width: 84px;
    display: flex;
    position: absolute;
    margin: 0 auto;
    left: 40%;
    transform: rotate(-12deg);
    top: 117px;
			}
			.cust_per{
	    font-size: 21px;
    background: #0cd62f;
    padding: 28px;
    border-radius: 50%;
    color: white;
    width: 84px;
    display: flex;
    position: absolute;
    margin: 0 auto;
    left: 40%;
    transform: rotate(-12deg);
       top: 267px;
			}
			@media screen and (max-width: 992px){
			    .form{
			     padding: 20px 80px;
			    }
			    .cust_perc {
    position: initial;
    transform: rotate(0deg);
}
 .cust_per {
    position: initial;
    transform: rotate(0deg);
}
			}
			@media screen and (max-width: 768px){
			    .form{
			     padding: 20px 20px;
			    }
			}
			@media screen and (max-width: 420px){
			    .btn-success{
			        width: 56%;
			    }
			}
			@media screen and (max-width: 576px){
			    .form{
			        width:100%;
			    }
			} 
		</style>
<div class="container" style="min-height:550px;">
				<section class="user_profile" style="justify-content: flex-end; ">
			<div class="form">
				<div class="form_data">
				    <h2>Refer to friend</h2>
					<h4>Send an email or share on social media </h4>
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
					<form class="form-horizontal" method="POST" action="{{ url('refer_email') }}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="form-group">
							<label>Friend's name:</label>
							<input type="text" name="friend_name" class="form-control" value="{{ old('friend_name') }}" required>
						</div>
						<div class="form-group">
							<label>Friend's email:</label>
							<input type="email" name="email" class="form-control" required>
						</div>
						
					
					<div class="text-center">
					    <button type="submit" class="btn btn-success" style="white-space:nowrap">Send email</button>
					</div>
					 </form>
					 <div class="social_links-icon">
					 	<?php $user = Auth::user(); ?>
	<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{urlencode(url('social_register/'.$user->reference_id.'/facebook'))}}" class="social-button " id=""><span style="color: #ee8322 !important;
    					font-size: 50px !important;" class="fa fa-facebook-square"></span></a>
						<a target="_blank" style="margin-left:20px" href="https://twitter.com/intent/tweet?text=Prizemaker &amp;url={{urlencode(url('social_register/'.$user->reference_id.'/twitter'))}}" class="social-button " id=""><span style="color: #ee8322 !important;
    					font-size: 50px !important;" class="fa fa-twitter-square"></span></a>
						<!-- <p>Share on social</p> -->

						<img style="width: 100%; margin-bottom: 10px;" class="img-responsive" src="{{ url('frontend/images/share-and.png') }}">
						<div class="text-center">
						<h1 class="cust_perc">{{$setting->commission}}%</h1>
					</div>
					<img style="width: 100%; margin-bottom: 10px; margin-top: 30px;" class="img-responsive" src="{{ url('frontend/images/business.png') }}">
						<div class="text-center">
						<h1 class="cust_per">{{$setting->business_ref_commission}}%</h1>
					</div>
					
					</div>
				</div>
			</div>
			<div class="right-side">
						<link class="wrapper">
 			<!-- Sidebar -->
						     @include('layouts.sidebar')

						</div>

				</section>
			</div>

<script src="{{ asset('js/share.js') }}"></script>

@endsection
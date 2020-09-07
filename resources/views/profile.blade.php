@extends('layouts.app')

<style>
    .swal-cancel-btn {
        width: 15% !important;
    }
    .approved-status {
        background-color: "greenyellow" !important;
    }

.btn-primary.focus, .btn-primary:focus {
    box-shadow: none !important;
}


    .funkyradio label {
    /*min-width: 400px;*/
    width: 100%;
    border-radius: 3px;
    border: 1px solid #D1D3D4;
    font-weight: normal;
}
.funkyradio input[type="radio"]:empty, .funkyradio input[type="checkbox"]:empty {
    display: none;
}
.funkyradio input[type="radio"]:empty ~ label, .funkyradio input[type="checkbox"]:empty ~ label {
    position: relative;
    line-height: 2.5em;
    text-indent: 3.25em;
    margin-top: 2em;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.funkyradio input[type="radio"]:empty ~ label:before, .funkyradio input[type="checkbox"]:empty ~ label:before {
    position: absolute;
    display: block;
    top: 0;
    bottom: 0;
    left: 0;
    content:'';
    width: 2.5em;
    background: #D1D3D4;
    border-radius: 3px 0 0 3px;
}
.funkyradio input[type="radio"]:hover:not(:checked) ~ label:before, .funkyradio input[type="checkbox"]:hover:not(:checked) ~ label:before {
    content:'\2714';
    text-indent: .9em;
    color: #C2C2C2;
}
.funkyradio input[type="radio"]:hover:not(:checked) ~ label, .funkyradio input[type="checkbox"]:hover:not(:checked) ~ label {
    color: #888;
}
.funkyradio input[type="radio"]:checked ~ label:before, .funkyradio input[type="checkbox"]:checked ~ label:before {
    content:'\2714';
    text-indent: .9em;
    color: #fff;
    background-color: #4caf50;
}
.funkyradio input[type="radio"]:checked ~ label, .funkyradio input[type="checkbox"]:checked ~ label {
    color: #777;
}
.funkyradio input[type="radio"]:focus ~ label:before, .funkyradio input[type="checkbox"]:focus ~ label:before {
    box-shadow: 0 0 0 3px #999;
}
.funkyradio-default input[type="radio"]:checked ~ label:before, .funkyradio-default input[type="checkbox"]:checked ~ label:before {
    color: #333;
    background-color: #ccc;
}
.funkyradio-primary input[type="radio"]:checked ~ label:before, .funkyradio-primary input[type="checkbox"]:checked ~ label:before {
    color: #fff;
    background-color: #337ab7;
}
.funkyradio-succes {
      white-space: nowrap;
    font-size: 15px;
}
.funkyradio-success input[type="radio"]:checked ~ label:before, .funkyradio-success input[type="checkbox"]:checked ~ label:before {
    color: #fff;
    background-color: #5cb85c;
}
.funkyradio-danger input[type="radio"]:checked ~ label:before, .funkyradio-danger input[type="checkbox"]:checked ~ label:before {
    color: #fff;
    background-color: #d9534f;
}
.funkyradio-warning input[type="radio"]:checked ~ label:before, .funkyradio-warning input[type="checkbox"]:checked ~ label:before {
    color: #fff;
    background-color: #f0ad4e;
}
.funkyradio-info input[type="radio"]:checked ~ label:before, .funkyradio-info input[type="checkbox"]:checked ~ label:before {
    color: #fff;
    background-color: #5bc0de;
}
button {
      margin: 5px 0 !important;
}
.cust_contr button {
  margin: 7px 0 !important;
}
@media screen and (max-width: 350px){
  .cust_contr button {
    font-size: 13px;
  }
  .funkyradio-succes {
    white-space: nowrap;
    font-size: 13px;
  } 
}
</style>

@section('content')
<?php $curr=Config::get("constants.currency"); ?>


@if (session('alert'))
    <div class="alert alert-danger">
        {{ session('alert') }}
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<?php  $setting = DB::table('setting')->first(); ?>

			<div class="container">
				<section class="user_profile">
					<div class="left-side-bar">
						<h1>My Profile</h1>
						<div class="profile_info">
							<div class="user_img_side">
								@if($user->image_name=="")
								<img id="" class="img-fluid" src="<?php echo url("dummy.jpg");?>">
								@else
								<img id="" class="img-fluid" src="<?php echo url("img/$user->image_name");?>">
								@endif

								<h4>Registered On :  <spn>{{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y')}}</spn></h4>

							</div>

							<div class="content_side">
								<ul class="cust_contr">
						<?php $win = DB::table('winner')->where('user_id', $user->id)->first(); ?>

						<!-- <a href="{{url('show_win')}}"><li><button style="color: #fff;background-color: #ee8322;border-color: #ee8322;    white-space: nowrap;" type="button" class="btn btn-primary">My Winnings</button></li></a> -->

						<li><button style="color: #fff;background-color: #ee8322;border-color: #ee8322; cursor:default ;   white-space: nowrap;" type="button" class="btn btn-primary">Total Credits : <?php echo $curr;  ?>{{Auth::user()->total_amount}}</button></li>


						<li><button style="color: #fff;background-color: #ee8322;border-color: #ee8322;    white-space: nowrap; cursor:default ; box-shadow: none; outline: 0" type="button" class="btn btn-primary">Remaining Credits: <?php echo $curr;  ?>{{$user->referrer_amount}}</button></li>


						@if($setting=="")
						@else
                        <li><button style="color: #fff;background-color: #ee8322;border-color: #ee8322;    white-space: nowrap; cursor: default ; box-shadow: none; outline: 0" type="button" class="btn btn-primary">Commission Percentage: {{$commission->commission}}%</button></li>
						@endif

                                                <?php
                                                    $btn_border_color = '#ee8322';
                                                    $btn_bg_color     = '#ee8322';
                                                    $cursor           = '';
                                                    if(Auth::user()->is_business_profile == '1'):
                                                        $btn_border_color = '#77a334';
                                                        $btn_bg_color     = '#77a334';
                                                        $cursor           = 'cursor:default;';
                                                    elseif (Auth::user()->is_business_profile == '2'):
                                                        $btn_border_color = '#b62d17';
                                                        $btn_bg_color     = '#b62d17';
                                                        $cursor           = 'cursor:default;';
                                                    endif;
                                                ?>
                                                <?php if ((Auth::user()->is_business_profile == '0') && (Auth::user()->business_name == '')) { ?>
                                                	<li><button style="color: #fff;background-color:#ee8322;border-color:#ee8322;    white-space: nowrap; box-shadow: none; outline: 0" type="button" class="btn" id="register_buis"> Register as Business User  </button></li>
                                                <?php } elseif ((Auth::user()->is_business_profile != '3') && (Auth::user()->is_business_profile != '4')) { ?>
                                                    <li><button style="color: #fff;background-color:{{$btn_bg_color}};border-color:{{$btn_border_color}}; {{$cursor}}   white-space: nowrap; box-shadow: none; outline: 0" type="button" class="btn" id="register-as-business" {{Auth::user()->is_business_profile?('disabled'):('')}}>@if (Auth::user()->is_business_profile == '0') Register as Business User @elseif (Auth::user()->is_business_profile == '2') Request Sent for Approval @else Approved Business Profile @endif </button></li>
                                                <?php } ?>

								</ul>
							</div>
						</div>
						<form class="form-horizontal" method="POST" action="{{ url('profile/update/'.$user->id) }}" enctype="multipart/form-data">
						{{ csrf_field() }}
                            <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-md-12">

							  <div class="form-group">
							       <img class="img-responsive" src="frontend/images/cashs.png">
							    <label>Referral Link</label>
							    <div id="padd_lf">
							      <input type="text" class="form-control" id="referral_link" name="address" placeholder="Address" value="<?php echo url( "register_page/$user->reference_id"); ?>" readonly>
							    	<button class="btn btn-warning btn-sm col-sm-2" id="copy-link"><i class="fa fa-clipboard"></i></button>
							    </div>
							  </div>
							  </div>
                               <div class="col-xs-6 col-sm-6 col-md-6">
							  <div class="form-group">
							    <label>Name</label>
							    <div id="padd_lf">
							      <input type="text" class="form-control" id="uname" name="uname" value='{{$user->name}}' placeholder="User Name">
							    </div>
							  </div>
							  </div>
							   <div class="col-xs-6 col-sm-6 col-md-6">
							  <div class="form-group">
							    <label>Email</label>
							    <div id="padd_lf">
							      <input type="text" class="form-control" id="email" name="email" value='{{$user->email}}' placeholder="Your Email" readonly>
							    </div>
							  </div>
							  </div>
							   <div class="col-xs-6 col-sm-6 col-md-6">
							  <div class="form-group">
							    <label>Phone</label>
							    <div id="padd_lf">
							      <input type="number" class="form-control" id="phone" name="phone" value='{{$user->phone}}' placeholder="Phone">
							    </div>
							  </div>
							  </div>
							  <!-- <div class="form-group row">
							    <label for="" class="col-sm-2 col-form-label" id="newteam">Reference ID</label>
							    <div class="col-sm-10">
							      <input type="text" class="form-control" id="reference_ID" name="reference_ID" value='{{$user->reference_id}}' placeholder="Reference ID" readonly>
							    </div>
							  </div> -->
							  <div class="col-xs-6 col-sm-6 col-md-6">
							  <div class="form-group">
							    <label>City</label>
							    <div id="padd_lf">
							      <input type="text" class="form-control" id="city" name="city" placeholder="City" value="{{$user->city}}">
							    </div>
							  </div>
							  </div>
							  <div class="col-xs-6 col-sm-6 col-md-6">
							  <div class="form-group">
							    <label>Postal Code</label>
							    <div id="padd_lf">
							      <input type="text" class="form-control" id="postal_code" name="postal_code" placeholder="Postal Code" value="{{$user->postal_code}}">
							    </div>
							  </div>
							  </div>
							  <div class="col-xs-6 col-sm-6 col-md-6">
							  <div id="team">
							    <label>Address</label>
							    <div id="padd_lf">
							      <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="{{$user->address}}">
							    </div>
							  </div>
							  </div>

                                <div class="col-xs-6 col-sm-6 col-md-6">
							  <div class="form-group">
							    <label>Password</label>
							    <div id="padd_lf">
							      <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
							    </div>
							  </div>
							  </div>
							  <div class="col-xs-6 col-sm-6 col-md-6">
							  <div class="form-group">
							    <label>Confirm Password</label>
							    <div id="padd_lf">
							      <input type="password" class="form-control" id="rpassword" name="rpassword" placeholder="Confirm Password">
							    </div>
							  </div>
							  </div>

                             <?php if ((Auth::user()->is_business_profile == '0') && (Auth::user()->business_name == '')) { ?>
                             	<div id ="okw" class="col-md-3"></div>
							         <div class="col-md-6 funkyradio">
        <div class="funkyradio-succes">
            <input type="checkbox" name="payment-option" value="0" class="payment-type" id="credit">
            <label for="credit">Are you business? Click Me</label>
        </div>
    </div> <div class="col-md-3"></div>
							  <div id="bis_name" class="col-xs-6 col-sm-6 col-md-6">
                                                            <div class="form-group">
                                                              <label>Business Name</label>
                                                              <div id="padd_lf">
                                                                <input type="text" class="form-control" id="business_name"  value="{{$user->business_name}}" name="business_name">
                                                              </div>
                                                            </div>
							  </div>

                                                          <div id ="bis_phone" class="col-xs-6 col-sm-6 col-md-6">
                                                            <div class="form-group">
                                                              <label>Business Phone</label>
                                                              <div id="padd_lf">
                                                                <input type="text" class="form-control" id="business_phone"  value="{{$user->business_phone}}" name="business_phone" >
                                                              </div>
                                                            </div>
							  </div>

                                                          <div id = "fb_url" class="col-xs-6 col-sm-6 col-md-6">
                                                            <div class="form-group">
                                                              <label>Facebook URL</label>
                                                              <div id="padd_lf">
                                                                <input type="text" class="form-control" id="business_facebook_url" value="{{$user->business_facebook_url}}"  name="business_facebook_url">
                                                              </div>
                                                            </div>
							  </div>

                                                        <div id= "tw_url" class="col-xs-6 col-sm-6 col-md-6">
                                                            <div class="form-group">
                                                              <label>Twitter URL</label>
                                                              <div id="padd_lf">
                                                                <input type="text" class="form-control" id="business_twitter_url" value="{{$user->business_twitter_url}}"  name="business_twitter_url" >
                                                              </div>
                                                            </div>
							  </div>
							  <?php } ?>


                                                          <?php if ((Auth::user()->is_business_profile != '4') && (Auth::user()->business_name != '')) { ?>
                                                          <div class="col-xs-6 col-sm-6 col-md-6">
                                                            <div class="form-group">
                                                              <label>Business Name</label>
                                                              <div id="padd_lf">
                                                                <input type="text" class="form-control" id="business_name" value="{{$user->business_name}}" name="business_name" >
                                                              </div>
                                                            </div>
							  </div>

                                                          <div class="col-xs-6 col-sm-6 col-md-6">
                                                            <div class="form-group">
                                                              <label>Business Phone</label>
                                                              <div id="padd_lf">
                                                                <input type="text" class="form-control" id="business_phone" value="{{$user->business_phone}}" name="business_phone" >
                                                              </div>
                                                            </div>
							  </div>

                                                          <div class="col-xs-6 col-sm-6 col-md-6">
                                                            <div class="form-group">
                                                              <label>Facebook URL</label>
                                                              <div id="padd_lf">
                                                                <input type="text" class="form-control" id="business_facebook_url" value="{{$user->business_facebook_url}}" name="business_facebook_url" >
                                                              </div>
                                                            </div>
							  </div>

                                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                                            <div class="form-group">
                                                              <label>Twitter URL</label>
                                                              <div id="padd_lf">
                                                                <input type="text" class="form-control" id="business_twitter_url" value="{{$user->business_twitter_url}}" name="business_twitter_url" >
                                                              </div>
                                                            </div>
							  </div>                            <?php } ?>




							  </div>
							  				<div class="form-groupals">

									<div class="img_dlt">
									    <p style="margin:0;font-weight:500;">Change Profile</p>

											<label style="display: none;">
											<input id="images" type="file"  name="images">
											<input name="profile_image" value="{{ $user->image_name }}">
										</label>
										<div class="dummi-img">
										@if($user->image_name=="")
								<img id="blah" src="{{url('dummy.jpg')}}" style=" width: 170px; height: 170px; padding: 9px; border-radius: 50%;" />
								@else
								<img id="blah" class="img-fluid" src="<?php echo url("img/$user->image_name");?>" name="profile_image" style="padding: 5px; height: 150px; width: 150px; border-radius:50%;">
								@endif
								</div>
                                        <p style="color: white; background-color: red;" >Max Image Size 10MB</p>
									<a style="margin-top: 8px;    color: #fff; background-color: #ee8322; border-color: #ee8322;" class="btn btn-primary" id="add_images" href="#">Browse image</a>
									 <button style="width: 60%; color: white; background-color: #ee8322;" type="submit" class="btn">Update</button>
									</div>
								</div>
							  <!--<div class="form-group row">-->
							  <!--  <div class="col-sm-10 cust-btn">-->
							  <!--    <button type="submit" class="btn">Update</button>-->
							  <!--  </div>-->
							  <!--</div>-->
							</form>
						</div>

					<div class="right-side">
						<div class="wrapper">
						    <!-- Sidebar -->
						    @include('layouts.sidebar')

						</div>
					</div>
				</section>
			</div>

<script>
	$("#bis_name").hide();
	$("#bis_phone").hide();
	$("#fb_url").hide();
	$("#tw_url").hide();
</script>
<script>
  $("#register_buis").click(function() {
  // 	$("#bis_name").show();
		// $("#bis_phone").show();
		// $("#fb_url").show();
		// $("#tw_url").show();
    $('html, body').animate({
        scrollTop: $("#okw").offset().top
    }, 500);
});
  $("#credit").change(function() {
  	if ($(this).prop('checked')) {
       $(this).val('1');
       $("#bis_name").show();
		$("#bis_phone").show();
		$("#fb_url").show();
		$("#tw_url").show();
	}
	else {
       $(this).val('0');
       $("#bis_name").hide();
	$("#bis_phone").hide();
	$("#fb_url").hide();
	$("#tw_url").hide();
   }
  	});
</script>

			<script>

	$('#add_images').click(function(){
	$('#images').click();
	});

function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#images").change(function() {
  readURL(this);
});

function copy_ref_link () {
	  var copyText = document.getElementById("referral_link");

  /* Select the text field */
  	copyText.select();
  	copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
 	 document.execCommand("copy");

}

$(document).ready(function(){

	$('#copy-link').click(function(e){
		e.preventDefault();
		copy_ref_link();
	});

        $('#register-as-business').click(function(){

            var uid = '{{Auth::user()->id}}';

            swal({
                title: "Update to business profile?",
                text: "Do you want to update your profile to business?",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-success",
                cancelButtonClass: "btn-danger swal-cancel-btn",
                confirmButtonText: "Yes",
                cancelButtonText: "No",
                closeOnConfirm: true
            },
            function(){
                $('#register-as-business').prop('disabled', true);
                $('#register-as-business').text('Sending Request...');

                $.ajax({
                   url:'{{url('register_as_business')}}',
                   method: 'POST',
                   data:{uid:uid, '_token': '{{@csrf_token()}}'},
                   success:function (response) {
                       if (response.status == 'success') {
                            swal({
                                title: "Request Sent",
                                text: "Your request for upgradtion to business account is sent for approval",
                                type: "success",
                                showCancelButton: false,
                                confirmButtonClass: "btn-success",
                                cancelButtonClass: "btn-danger swal-cancel-btn",
                                confirmButtonText: "OK",
                                cancelButtonText: "Cancel",
                                closeOnConfirm: true
                            },
                            function(){
                                location.reload();
                            });
                       }
                   }
                });
            });




        });
});






</script>



@endsection

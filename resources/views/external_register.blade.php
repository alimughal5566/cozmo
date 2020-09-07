@extends('layouts.app')
@section('content')
<style>
   .modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto;
    border: 1px solid #888;
    width: 100%;
}
    #new_wid{
        background-color: #fff;
    border: 1px solid #ccc;
    width: 100%;
        border-radius: 5px;
    }


    .loader {
      border: 16px solid #f3f3f3;
      border-radius: 50%;
      border-top: 16px solid black;
      border-bottom: 16px solid black;
      width: 70px;
      height: 70px;
      -webkit-animation: spin 2s linear infinite;
      animation: spin 2s linear infinite;
    }

    .custom-email{
          background-color: #fff;
    border: 1px solid #ccc;
    width: 100%;
    padding: 5px;
    margin: 5px 0 5px 0;
    display: inline-block;
    border: none;
    border-radius: 4px;
    background: #f1f1f1;
    }
     

.sonar-wrapper {
  position: relative;
  z-index: -1;
  padding-bottom: 1rem;
      border-radius: 50%;

}

/* The circle */
.sonar-emitter {
  position: relative;
  margin: 0 auto;
  width: 110px;
  height: 110px;
  border-radius: 9999px;
  background-color: HSL(45,100%,50%);
      display: flex;
    align-items: center;
    justify-content: center;

}

/* the 'wave', same shape and size as its parent */
.sonar-wave {
    position: absolute;
    top: 27px;
    left: 27px;
    width: 50%;
    height: 50%;
    border-radius: 9999px;
    background-color: HSL(45,100%,50%);
    opacity: 0;
    z-index: -1;
    pointer-events: none;
}

/*
  Animate!
  NOTE: add browser prefixes where needed.
*/
.sonar-wave {
  animation: sonarWave 2s linear infinite;
}

@keyframes sonarWave {
  from {
    opacity: 0.4;
  }
  to {
    transform: scale(3);
    opacity: 0;
  }
}
.cust_comission{
  display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
}
.cust_percente{
      position: absolute;
    right: 40%;
    top: 26%;
}
.cust_main{
      border: 2px solid #b1b1b16e;
    margin: 18px 0;
    border-radius: 7px;
        box-shadow: 2px 9px 8px 4px #88888870;
        padding: 10px;
        margin-top: 0;
}
.cust_users{
  /*background-image: url('frontend/images/userrr.jfif');*/
      padding: 23px;
      padding-bottom: 0;
}
.lay-signupbtn:hover{
  background-color: #c56712;
}

.lay-signupbtn{
width: 220px;
    position: relative;
    padding: 8px 20px;
    margin: 20px 0 0 0;
    cursor: pointer;
    color: #fff;
    font: bold 14px Arial, Helvetica;
    text-transform: uppercase;
    text-decoration: none;
    display: inline-block;
    background-color: #ee8322;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    text-shadow: 0 1px 0 rgba(0,0,0,.3);
    -moz-box-shadow: 0 1px 0 rgba(255, 255, 255, .5), 0 2px 0 rgba(0, 0, 0, .7);
    -webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, .5), 0 2px 0 rgba(0, 0, 0, .7);
    box-shadow: 0 1px 0 rgba(255, 255, 255, .5), 0 2px 0 rgba(0, 0, 0, .7);
}
.cust_sub-btn{
display: flex;flex-direction: row;justify-content: center;margin-top: 10px;
}
.cust_img_btn{
  border:0;
}
.btn.focus, .btn:focus {
    outline: 0;
    box-shadow: none;
}
@media only screen and (max-width: 990px){
    .cust_percente {
    position: absolute;
    right: 33%;
    top: 26%;
}
.clearfix{
width: 125%;
}
}
@media only screen and (max-width: 768px){
    .cust_percente {
    position: absolute;
    right: 43%;
    top: 26%;
}
}
@media only screen and (max-width: 500px){
    .cust_percente {
    position: absolute;
    right: 41%;
    top: 26%;
}
.row {
  margin-left: 0;
  margin-right: 0; 
}
.funkyradio-succes {
  white-space: nowrap;
}
.funkyradio-succes label {
  font-size: 12px !important;
}
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
    margin-top: 10px;
    margin-bottom: 10px;
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
  




</style>
<div class="container">
<div class="row">
  <div class="col-md-3">
<h4 class="text-center mt-1" style="color: #ee8322;">Refer to friend</h4>
      <img style="width: 100%; margin-bottom: 10px; margin-left: 12px;" class="img-responsive" src="{{ url('frontend/images/share-and.png') }}">
      <div class="zekk">
        <p class="text-center m-0">{{$setting->ref_friend_string}}</p>
    <div class="sonar-wrapper">
      <div class="sonar-emitter">
        <div class="sonar-wave"></div>
          <h1 style="margin-top: 10px;">{{$setting->commission}}%</h1>
      </div>
       <!-- <div class="cust_percente">
    </div> -->
    </div>
   
  </div>
  </div>
  <div class="col-md-6">
<form id="register_form" class="modal-content" action="{{ url('register_ext_user')}}" method="post" style="margin: 1% auto 1% auto;">
    <h1>Register</h1>
    <!-- <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span> -->
      <p>Please fill in this form to create an account.</p>
    <div class="container cust_con">
      <label for="email"><b>Name</b></label>
      <input id="new_wid" type="text" placeholder="Enter Name" name="name" required>

      @if(isset($social))
      <input type="hidden" name="social" value="{{$social}}">
      @endif

      <label for="email"><b>Email</b></label>
      <input id="new_wid" type="email" placeholder="Enter Email" name="email" class="custom-email" required>

      <label for="psw-repeat"><b>Phone Number</b></label>
      <input id="new_wid" type="text" placeholder="Phone Number" name="phone" required>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="repeat" required>

      <label for="refer"><b>Refer By</b></label>
      <input style="padding-top:10px;" id="new_wid" type="text" placeholder="Enter the refer id" name="refer" value="{{$refer_id}}" readonly>
        
    <div class="funkyradio">
        <div class="funkyradio-succes">
            <input type="checkbox" name="is_business_profile" class="payment-type" id="credit" value="0">
            <label for="credit">Are you business? Click Me</label> 
        </div>
     
    </div>
 <div id="business-fields">
        <label for="refer"><b>Business Name</b></label>
        <input id ="bis_name" type="text" placeholder="Enter Business Name"  name="business_name">

        <label for="refer"><b>Business Phone</b></label>
        <input id="bis_phone" type="text" placeholder="Enter Business Phone" name="business_phone">  

        <label for="refer"><b>Facebook URL</b></label>
        <input id="fb_url" type="text" placeholder="Enter Facebook URL"   name="business_facebook_url">      

        <label for="refer"><b>Twitter URL</b></label>
        <input id="tw_url" type="text" placeholder="Enter Twitter URL"    name="business_twitter_url">          
      </div>
      <ul class="social_connect">
        <li><a class="Connect" href="{{url('/redirect')}}"><img src="{{url('frontend/images/fb-up.png')}}"></a></li>
        <li><a class="Connect" href="{{url('/redirect_google')}}"><img src="{{url('frontend/images/gl-up.png')}}"></a></li>
      </ul>

      <p>By creating an account you agree to our <br><a target="_blank" href="{{url('privacy')}}" style="color: #ee8322; border-bottom: 1px solid #ee8322; text-decoration: none;">Terms & Privacy</a></p>

      <div class="clearfix">
        <button type="button" class="cancelbtn"><a href="{{url('/')}}">Cancel</a></button> 
        
        <button type="submit" class="signupbtn" id="sub">Sign Up</button>
        <div class="loader" style="margin: 0 auto;"></div>
      </div>
    </div>
  </form>
</div>
 <div class="col-md-3">
<h4 class="text-center mt-1" style="color: #ee8322;">Business Commissions</h4>
      <img style="width: 100%; margin-bottom: 10px; padding-left: 12px;" class="img-responsive" src="{{ url('frontend/images/business.png') }}">
      <div class="zekk">
        <p class="text-center m-0">{{$setting->buz_comsion_string}}</p>
    <div class="sonar-wrapper">
      <div class="sonar-emitter">
        <div class="sonar-wave"></div>
          <h1 style="margin-top: 10px;"> {{$setting->business_ref_commission}}%</h1>
      </div>
       <!-- <div class="cust_percente">
    </div> -->
    </div>
   
  </div>
  </div>
</div>
</div>
  <script>
    $(document).on('submit','#register_form',function(e){
    e.preventDefault();
    $.ajax({
      headers: {
            'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
          },
      type:'POST',
      url: $(this).attr('action'),
      data: $(this).serialize(),
      success: function(msg){
        if(msg.status==1){
        swal({
          title: "Success",
          text: msg.msg,
          type: "success",
          showCancelButton: true,
          confirmButtonClass: "btn-primary",
          confirmButtonText: "OK",
          closeOnConfirm: false
        },
        function(){
          window.location.href='{{ url("/")}}';
        });                    
        }else{
          swal("Error", msg.msg, "error");
        }
      }
    });
  });

    var $loading = $('.loader').hide();
$(document)
.ajaxStart(function () {
  $loading.show();
  $('#sub').prop('disabled', true);
})
.ajaxStop(function () {
 $loading.hide();
  $('#sub').prop('disabled', false);
});




// $('input[name="is_business_profile"]').change(function(){
//    if ($(this).prop('checked')) {
//        $(this).val('1');
//        $('#business-fields').show();  
//        $('input[name="business_name"]').prop('required', true);
//    }
//    else {
//        $(this).val('0');       
//        $('#business-fields').hide();
//        $('input[name="business_name"]').removeProp('required');      
//    }
// });

  </script>


<script>
  $("#bis_name").hide();
  $("#bis_phone").hide();
  $("#fb_url").hide();
  $("#tw_url").hide();
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






@endsection
<style>
    #frg{
         width: 50%;
    white-space: pre;
    padding: 14px;
    margin: 20px 0;
    background: #ef8f38;
    color: white;
    }
    #cnl-btn{
        width:50% !important;
            margin: 0px 11px 9px 0;
            padding: 10px;
            background-color: #e9ebee !important;
    color: #ee8322 !important;
    }
    /*.lastbtn {*/
    /*    width: 50% !important;*/
    /*    white-space:pre;*/
    /*    font-size: 12px;*/
    /*        padding: 13px;*/
    /*}*/
    #login_form{
            background-color: #ececec;
    margin: 5% auto 5% auto;
    border: 1px solid #888;
    width: 30%;
        overflow-x: hidden;
        position: initial;
    }
    @media screen and (max-width: 992px){
        #frg{
                padding: 10px;
        }
    }
    @media screen and (max-width: 420px){
        #frg{
            font-size:11px;
        }
        .lastbtn{
                padding: 9px !important;
        }
        #cnl-btn{
            font-size:11px;
        }
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
    
.custom_head {
    margin: 0 !important;
    font-weight: 400 !important;
    text-align: left !important;
    background-color: #e9ebee !important;
    text-transform: capitalize !important;
    letter-spacing: 0px !important;
    color: #000 !important;
    padding: 0px 15px !important;
    font-size: 16px !important;
}
</style>
<div id="id01" class="modal" tabindex="-2" role="dialog">
  
  <form id="login_form" class="modal-content animate" action="{{ url('home/login')}}">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" id="close_login12" title="Close Modal">&times;</span>
      <img class="img-circle" id="img_logo" src="images/logo1.png">
      <p class="custom_head">LogIn</p>
    </div>

    <div class="container signIn cust_cont">
      <label for="uname"><b>Email</b></label>
      <input type="email" class="form-control" placeholder="Enter Email" name="email" id="email" required autocomplete="off">

      <label for="psw"><b>Password</b></label>
      <input type="password" class="form-control" placeholder="Enter Password" name="password" required autocomplete="off">
      @if(isset($_COOKIE['random_user_id']))
        <input type="hidden" class="form-control" name="random_user_id" value="{{$_COOKIE['random_user_id']}}">
      @else
        <input type="hidden" class="form-control" name="random_user_id" value="0">
      @endif
      <button type="submit">Sign In</button>
      <!--<div class="loader" style="margin: 0 auto;"></div>-->
     <!--  <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label> -->

    </div>
    <!--<ul class="social_connect">-->
    <!--  <li><a class="Connect" href="{{url('/redirect')}}"><img src="{{ url('frontend/images/fb-btn.png')}}"></a></li>-->
    <!--  <li><a class="Connect" href="{{url('/redirect_google')}}"><img src="{{ url('frontend/images/google-btn.png')}}"></a></li>-->
    <!--</ul>-->
    <div class="container" style="display: flex;">
      <button id="cnl-btn" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn2">Cancel</button>      
      <button id="frg12" type="button" onclick="document.getElementById('id03').style.display='block'" class="lastbtn">Forgot password?</button>     

    </div>
  </form>
</div>

<script>

  $('#frg').on('click',function(e){
    e.preventDefault();
  // $('input[name="user_email"]').val($('input[name="email"]').val());
    var email = $('#email').val();
    data = {
      'email':  email,
    };

    $.ajax({
      headers: {
            'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
          },
      type:'POST',
      url: '{{ url("home/forgetpassword")}}',
      data: data,
      success: function(msg){
        if(msg.status==1){
           swal({
  title: "Forgot Password",
  text: msg.msg,
  type: "success",
  showCancelButton: false,
  confirmButtonClass: "btn-primary",
  confirmButtonText: "OK",
  closeOnConfirm: false
},
function(){
  window.location.reload();
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
  $('#frg').prop('disabled', true);
})
.ajaxStop(function () {
 $loading.hide();
  $('#frg').prop('disabled', false);
});


  $(document).on('submit','#login_form',function(e){
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
          window.location.href='{{ url("competition")}}';
        }else{
          swal("Error", msg.msg, "error");
        }
      }
    });
  });
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

$('#frg12').click(function(){
  $('#close_login12').click();
});



</script>
<style>

body {font-family: Arial, Helvetica, sans-serif;}
.social_connect{
     display: flex;
    flex-direction: row;
    padding: 0;
    text-align: -webkit-center;
    justify-content: space-around;
}
.social_connect li img{
  width: 100%;
}
.social_connect li{
      padding: 0px 18px;
    width: 100%;
}
label{
  margin: 0;
}

/* Full-width input fields */
#id01 input[type=text], input[type=password] {
  width: 100% !important;
  padding: 5px;
  margin: 8px 0;
  border-radius: 4px;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  font-size: 14px;
}
.signIn button{
      /*margin-left: 93px !important;
          width: 30% !important;*/
          border-radius: 4px;
}

/* Set a style for all buttons */
/*.cancelbtn2 {*/
/*  background-color: #ee8322 !important;*/
/*  color: #fff !important;*/
/*  font-weight: 600;*/
/*  padding: 14px 20px;*/
/*  margin: 8px 0;*/
/*  border: none;*/
/*  cursor: pointer;*/
/*  width: 100%;*/
/*}*/

/*.cancelbtn2 button:hover {*/
/*  opacity: 0.8;*/
/*}*/

.cancelbtn2, .lastbtn {
    /* float: none !important; */
     margin-top: auto !important; 
    width: inherit !important;
    border-radius: 9px;
    padding: 7px 15px !important;
}


/* Extra styles for the cancel button */
.cancelbtn2 {
  width: auto;
  padding: 10px 18px;
  /*background-color: #f44336;*/
  background-color: #e9ebee !important;
    color: #ee8322 !important;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  position: relative;
}
.imgcontainer h1{
  font-weight: 600;
  text-align: center;
  background-color: #e7c9f5;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin: 0; 
  color: #af4bdd;
  padding: 4px 0;
}
.cust_cont {
  padding: 16px;
}
input:focus{
  outline: 0;
}
span.psw {
  float: right;
  padding: 14px 20px;
}
.psw a{
  color: #ee8322;
}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 30%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 3px !important;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}
@media screen and (max-width: 480px) {
    .cancelbtn2, .lastbtn {
        font-size: 11px !important;
    }
}
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn2 {
     width: 100%;
  }
}
</style>
@include('forgetpassword')

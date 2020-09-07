<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
#id02 input[type=text], input[type=password] {
  width: 100%;
  padding: 5px;
  margin: 5px 0 5px 0;
  display: inline-block;
  border: none;
  border-radius: 4px;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
#id02 input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
#id02 span{
      width: 5%;
    top: 5px;
    z-index: 1;
}
/* Set a style for all buttons */
.signIn button{
  background-color: #ee8322;
  color: white;
  padding: 5px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.signIn button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn ,.signupbtn{
  padding: 14px 20px;
  background-color: #f44336;
}
.signupbtn{
  border: 0; 
  margin: 8px 0;
}
/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.cust_con {
  padding: 16px;
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
  padding-top: 50px;
}

/* Modal Content/Box */
#reg_form {
  background-color: #fefefe;
  margin: 5% auto 5% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
      height: 745px;
    /*overflow-y: scroll;*/
}
.modal-content h1{
  margin:0;
  font-weight: 600;
    text-align: center;
    background-color: #e9ebee;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: #ee8322;
    padding: 10px 0;
    font-size: 24px;
}

.modal-content p:last-child{
  border-bottom: 0;
}
.cancelbtn{
  background-color:#e9ebee !important;
  color: #ee8322 !important; 
}
.signupbtn{
  background-color: #ee8322 !important;
  color: #fff !important;
}
#id02 input[type=text]:focus, input[type=password]:focus{
  background-color: transparent;
}
.cust_con a{
  color: #000 ;
}
#id02 input[type=text], input[type=password]{
  background-color: #fff;
  border: 1px solid #ccc;
}

.close {
  position: absolute;
  right: 15px;
  top: 0px;
  font-size: 40px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #ee8322;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
.social_connect li img {
    width: 100% !important;
}
.social_connectart{
      display: flex;
    flex-direction: row;
    text-align: -webkit-center;
    justify-content: space-around;
    padding: 0;
        margin: 8px 0;
        width: 97%;
}
.modal-content p {
    text-align: center;
    margin: 0;
    font-size: 16px;
    border-bottom: 1px solid #e9ebee;
    padding: 8px 0;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
         width: 40% !important;
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
        line-height: 36px;
    text-indent: 3.25em;
    margin-top: 5px;
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

 .custom_head {
    margin: 0 !important;
    font-weight: 600 !important;
    text-align: center !important;
    background-color: #e9ebee !important;
    text-transform: uppercase !important;
    letter-spacing: 2px !important;
    color: #ee8322 !important;
    padding: 10px 0 !important; 
    font-size: 24px !important;
}
.signup_p {
    display: flex;
    justify-content: center;
    width: 100%;
}
.social_connectart li {
  z-index: 9999;
}
.signup_btns {
    width: 100%;
    text-align: center;
        margin-top: 10px;
}
                    @media screen and (max-width: 480px) {
                      .signup_p {
                              display: block ; 
                      }
                    }
</style>


<div id="id02" class="modal">
  
  <form id="reg_form" class="modal-content" action="{{ url('register_user')}}" method="post">
    <p class="custom_head">Register</p>
    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <ul class="social_connectart">
        <!--<li><a class="Connect" href="{{url('/redirect')}}"><img src="{{asset('frontend/images/fb-up.png')}}"></a></li>-->
        <!--<li><a class="Connect" href="{{url('/redirect_google')}}"><img src="{{asset('frontend/images/gl-up.png')}}"></a></li>-->
      </ul>
      <!--<p style="padding-top: 0;border: 0;    margin-top: -34px;">OR</p>-->
      <p>Please fill in this form to create an account.</p>
    <div class="container cust_con">
    <div class="row">
        <div class="col-md-6">
      <label for="email"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>
    </div>
    <div class="col-md-6">
      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email" class="custom-email" required>
</div>
<div class="col-md-6">
      <label for="psw-repeat"><b>Phone Number</b></label>
      <input type="text" placeholder="Phone Number" name="phone" required>
      </div>
      <div class="col-md-6">
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
    </div>
    <div class="col-md-6">
      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="repeat" required>
</div>
<div class="col-md-6">
      <label for="refer"><b>Refer By</b></label>
      <input type="text" placeholder="Enter the refer id" name="refer" >
</div>
      <!-- <label for="is_business_profile"><b>Are you business?</b></label><br>
      <input type="checkbox" name="is_business_profile" value="0"> -->
      <div class="container">
          <div class="funkyradio" style="width: 99%;">
             <div class="funkyradio-success">
     
                 <input type="checkbox" name="is_business_profile" class="payment-type" id="paytriot" />
                 <label for="paytriot">Are you business? Click Me</label>
            </div>
        </div>
        </div>
      <div id="business-fields" style="display:none; width: 100%;">
          <div class="container">
          <div class="row">
          <div class="col-md-6">
        <label for="refer"><b>Business Name</b></label>
        <input type="text" placeholder="Enter Business Name"  name="business_name">
</div>
<div class="col-md-6">
        <label for="refer"><b>Business Phone</b></label>
        <input type="text" placeholder="Enter Business Phone" name="business_phone">  
</div>
<div class="col-md-6">
        <label for="refer"><b>Facebook URL</b></label>
        <input type="text" placeholder="Enter Facebook URL"   name="business_facebook_url">      
</div>
<div class="col-md-6">
        <label for="refer"><b>Twitter URL</b></label>
        <input type="text" placeholder="Enter Twitter URL"    name="business_twitter_url">
        </div>
      </div>
         </div>
         </div>


      <p class="signup_p">By creating an account you agree to our <br><a target="_blank" href="{{url('privacy')}}" style="color: #ee8322; border-bottom: 1px solid #ee8322; text-decoration: none;">Terms & Privacy</a></p>

      <div class="clearfix signup_btns">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn" id="sub">Sign Up</button>
        <div class="loader" style="margin: 0 auto;"></div>
      </div>
    </div>
  </form>
  </div>
</div>

<script>

  var $loading = $('.loader').hide();

// $(document).ajaxStart(function () {
//   $loading.show();
//   $('#sub').prop('disabled', true);
// })
// .ajaxStop(function () {
//  $loading.hide();
//   $('#sub').prop('disabled', false);
// });

  $(document).on('submit','#reg_form',function(e){
    e.preventDefault();

    var $loading = $('#yourloadingdiv').hide();
     $('.loader').show();
     $('#sub').css('cursor', 'initial');
  $('#sub').prop('disabled', true);

    $.ajax({
      headers: {
            'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
          },
      type:'POST',
      url: $(this).attr('action'),
      data: $(this).serialize(),
      success: function(msg){
        if(msg.status==1){
          // window.location.href='{{ url("profile")}}';
          swal({
  title: "Success",
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
          $('#sub').css('cursor', 'pointer');
          $('#sub').prop('disabled', false);          
            $('.loader').hide();
        }
      }
    });
  });

  
// Get the modal
var modal = document.getElementById('id02');


$('input[name="is_business_profile"]').change(function(){
   if ($(this).prop('checked')) {
       $(this).val('1');
       $('#business-fields').show();  
       $('input[name="business_name"]').prop('required', true);
   }
   else {
       $(this).val('0');       
       $('#business-fields').hide();
       $('input[name="business_name"]').removeProp('required');      
   }
});

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>



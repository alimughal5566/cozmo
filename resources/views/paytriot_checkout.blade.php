@extends('layouts.app')
@section('content')
<?php $curr=Config::get("constants.currency"); ?>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
<style type="text/css">
.new  {
    margin-top: -5px;
    margin-left: 10px;
}
/* CSS for Credit Card Payment form */
.credit-card-box .panel-title {
display: inline;
font-weight: bold;
}
.credit-card-box .form-control.error {
border-color: red;
outline: 0;
box-shadow: inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(255,0,0,0.6);
}
.credit-card-box{
  padding: 30px 0px;
}
.credit-card-box label.error {
font-weight: bold;
color: red;
padding: 2px 8px;
margin-top: 2px;
}
.credit-card-box .payment-errors {
font-weight: bold;
color: red;
padding: 2px 8px;
margin-top: 2px;
color:red;
}
.credit-card-box .payment-success {
font-weight: bold;
padding: 2px 8px;
margin-top: 2px;
color:green;
}
.credit-card-box label {
display: block;
}
.credit-card-box .display-tr {
display: table-row;
}
.credit-card-box .display-td {
display: table-cell;
vertical-align: middle;
width: 50%;
}
/* Just looks nicer */
.credit-card-box .panel-heading img {
min-width: 180px;
}
#pay-form .form-control {
display: block;
width: 100%;
height: 36px;
padding: 6px 12px;
font-size: 14px;
border-radius: 0;
}
.num-feild{
  display: flex;
  flex-direction: row;
}
.input-group-addon{
  background: lightgrey;
    padding: 5px;
}
.fa-credit-card{
  padding: 0;
  margin:0;
}
.form-control:focus{
  box-shadow: none;
}
.contrr{

    display: flex;
    flex-direction: row;
    justify-content: center;
}


@import('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.0/css/bootstrap.min.css') .funkyradio div {
    clear: both;
    /*margin: 0 50px;*/
    overflow: hidden;
}
.funkyradio label {
    /*min-width: 400px;*/
    width: 100%;
    border-radius: 3px;
    border: 1px solid #D1D3D4;
    font-weight: normal;
}
label {
    margin-bottom: 0 !important;
}
input {
    margin: 0 0 5px !important;
}
.form-group {
    margin-bottom: .5rem !important;
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


.payout_btn {
    text-align: center;
    margin-bottom: 10px;
}
.payout_btn button {
    background: #ee8322;
    width: 23%;
    border: transparent;
    width: 35%;
}
.add_brdr {
    border-right: 2px solid #ee8322;
}
#paytriot-form {
    width: 63.5%;
}
.coupn_btn {
    cursor: pointer;
    width: 17%;
    height: 38px;
    margin-top: 9px;
    margin-left: 10px;
}
#loading {
      width: 6%;
    height: 7%;
    /* top: 155px; */
    /* left: 0; */
    /* position: fixed; */
    display: none;
    /* opacity: 0.7; */
    /* background-color: #fff; */
    /* z-index: 99; */
    text-align: center;
        margin-top: 10px;
    margin-left: 10px;
}
.set_row_width {
    margin: 0 auto; width: 69%;
}
@media screen and (max-width: 480px) {
  #paytriot-form {
    width: 93%;
    }
    .coupn_btn {
            width: 25%;
    }
    #loading {
        width: 25%;
        margin-top: 3px;
        margin-left: 0 ;
    }
    .add_brdr {
         border: none;
    }
    .set_row_width {
        width: 100%;
    }
}
#paytriot-form input {
        border-radius: 4px;
    padding: 7px 13px;
}


.inline {
    display: flex;
}
.inline span {
    margin-left: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 37px;
    margin-top: 10px;

}
.coupen-success {
    white-space: nowrap;
    font-size: 17px;
    padding: 8px;
    margin-top: 10px;
    margin-left: 10px;
    height: 38px;
    margin-bottom: 0;
    text-align: center;
}

/*#loading-image {*/
/*  position: absolute;*/
/*  top: 10px;*/
/*  left: 20px;*/
/*  z-index: 100;*/
/*}*/
</style>
<section class="car_sec" style="min-height: 550px;">
    <h3 class="text-center" style="margin: 30px 0;">Pay for tickets</h3>
    <div class="panel-body container pl-4 pr-4">
        @include('alert')
    </div>
    @if($price != "0")
    <input type="hidden" name="credit_amount"  id="credit_amount" value="{{$credit}}" >
    <input type="hidden" name="total_amount" id="total_amount" value="{{$price}}" >
    <div id="option">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <h4 id="first_heading"></h4>
                        <div class="funkyradio">
                            <div class="funkyradio-succes">
                                <input type="radio" name="payment-option" class="payment-type" id="credit" checked/>
                                <label for="credit">Debit or Credit Card</label>
                            </div>
                            <div class="funkyradio-success bt-radio">
                                <input type="radio" name="payment-option" class="payment-type" id="paytriots" />
                                <label for="paytriots">Commision Credit</label>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
            <div id="container1">
              <form id="add_pay-form" role="form" method="POST" action="{{ url('user/add_credit_payments')}}" id="credit-form">
                  @csrf
                  <div class="title" style="text-align: center;">
                    <h6 class="panel-title display-td" >Pay through Credit Amount</h6>
                  </div>
                <div class="button" style="text-align: center; margin: 10px;">
                      <button class="btn btn-success" type="submit" style="width: 131px !important;">Pay (<?php  echo $curr; ?>{{ $price }})</button>
                </div>
              </form>
             </div>
        </div>


        <div class="container" id="containers">
            <div class="row">
                <!-- You can make it whatever width you want. I'm making it full width
                on <= small devices and 4/12 page width on >= medium devices -->
                <div class="col-md-2"></div>
                <div class="col-md-8">
                <!-- CREDIT CARD FORM STARTS HERE -->
                <div class="panel panel-default credit-card-box">
                  <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                      <h6 class="panel-title display-td" >Payment Details</h6>
                      <div class="display-td" >
                        <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                      </div>
                    </div>
                  </div>
                  <div class="panel-body">
                    <form id="pay-form" role="form" method="POST" action="{{ url('user/add_payment')}}" id="payment-form">
                      @csrf

                      <div class="row">
                        <div class="col-12">
                          <div class="form-group">
                            <label for="cardNumber">CARD NUMBER</label>
                              <div class="num-feild">
                                <input
                                id="card_num"
                                type="tel"
                                class="form-control"
                                name="card_number"
                                placeholder="Valid Card Number"
                                autocomplete="cc-number"
                                value="{{ old('card_number') }}"
                                maxlength="16"
                                minlength="16"
                                required autofocus
                                />
                                <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-7 col-md-7">
                          <div class="form-group">
                            <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                            <input
                            type="tel"
                            class="form-control"
                            name="expiry"
                            value="{{ old('expiry') }}"
                            placeholder="MM/YY"
                            autocomplete="cc-exp"
                            required
                            maxlength="5"
                            minlength="5"
                            />
                          </div>
                        </div>
                        <div class="col-5 col-md-5 pull-right">
                          <div class="form-group">
                            <label for="cardCVC">CV CODE</label>
                            <input
                            type="tel"
                            class="form-control"
                            name="cvc"
                            value="{{ old('cvc') }}"
                            placeholder="CVC"
                            autocomplete="cc-csc"
                            maxlength="3"
                            minlength="3"
                            required
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <button class="btn btn-success" type="submit">Pay (<?php  echo $curr; ?>{{ $price }})</button>
                        </div>
                      </div>
                    </form>
                    @endif
          </div>
        </div>
        <!-- CREDIT CARD FORM ENDS HERE -->
      </div>
    </div>
  </div>

        <!-- paytriot -->
        <div class="container" id="container2">
            <div class="row">
                <form id="paytriot-form" role="form" method="POST" action="{{url('/user/checkout_paytriot')}}" style="margin:0 auto;">
                    @csrf
                    <?php $paytriot_price = ($price * 100);
                     $host= request()->getHost();
                     if($host == "prizemaker.stepinnsolution.com"){
                        $paytriot_req_params = getDemoPaytriotReqParams($paytriot_price);
                     }
                     if($host == "prizemaker.makhsoft.com"){
                        $paytriot_req_params = getDemoPaytriotReqParams($paytriot_price);
                     }
                     if($host =="prizemaker.com"){
                      $paytriot_req_params = getPaytriotReqParams($paytriot_price);
                     }
                     if($host =="127.0.0.1:8000"){
                      $paytriot_req_params = getDemoPaytriotReqParams($paytriot_price);
                     }
                     ?>
                    <div class="title" style="text-align: center;">
                        <!--<h6 class="panel-title display-td" >Pay through Credit Card  </h6> -->
                        <h6 class="panel-title display-td" ></h6>
                    </div>

                    <?php
                        if(isset($res)){
                            $paytriot_req_params['cardNumber'] = $res->cardNumber;
                            $paytriot_req_params['cardCVV'] = $res->cardCVV;
                            $paytriot_req_params['cardExpiryMonth'] = $res->cardExpiryMonth;
                            $paytriot_req_params['cardExpiryYear'] = $res->cardExpiryYear;
                            $paytriot_req_params['customerName'] = $res->customerName;
                            $paytriot_req_params['customerAddress'] = $res->customerAddress;
                            $paytriot_req_params['customerPostCode'] = $res->customerPostCode;
                            $paytriot_req_params['customerEmail'] = $res->customerEmail;
                            $paytriot_req_params['customerPhone'] = $res->customerPhone;
                        }
                    ?>

            		@foreach ($paytriot_req_params as $field => $value)
            		    @if($field == "cardNumber")
            		        <label>Card Number*</label>
                            <input type="text" value="{{substr_replace($value,"******",7)}}" readonly>
                            <input type="hidden" name="{{$field}}" value="{{htmlentities($value)}}">
                        @elseif($field == "cardCVV")
                            <label>Card Verification Number*</label>
                            <input type="text" name="{{$field}}" value="{{htmlentities($value)}}">
                        @elseif($field == "cardExpiryMonth")
                            <label>Expiry Month*</label>
                            <input type="text" name="{{$field}}" value="{{htmlentities($value)}}">
                        @elseif($field == "cardExpiryYear")
                            <label>Expiry Year*</label>
                            <input type="text" name="{{$field}}" value="{{htmlentities($value)}}">
                        @elseif($field == "customerAddress")
                            <label>Address (Registered billing address)*</label>
                            <input type="text" name="{{$field}}" value="{{htmlentities($value)}}">
                        @elseif($field == "customerPostCode")
                            <label>Post / Zip Code*</label>
                            <input type="text" name="{{$field}}" value="{{htmlentities($value)}}">
                        @else
                            <input type="hidden" @if($field == 'amount') id="hidden_amount" @endif name="{{$field}}" value="{{htmlentities($value)}}">
                        @endif
            		@endforeach

            		@if($user_card_details == 0 && Auth::check())

            		    <input type="hidden" name="card_entry" value="1">

            		    <label>Card Number*</label>
                		<input type="text" name="cardNumber" placeholder="" required>
                		<label>Card Verification Number*</label>
                		<input type="text" name="cardCVV" placeholder="" required>
                		<label>Expiry Month*</label>
                		<input type="text" name="cardExpiryMonth"  placeholder="" required>
                		<label>Expiry Year*</label>
                		<input type="text" name="cardExpiryYear" placeholder="" required>
                		<label>Cardholder's Name*</label>
                		<input type="text" name="customerName" placeholder="" required>
                		<label>Address (Registered billing address)*</label>
                		<input type="text" name="customerAddress" placeholder="" required>
                		<label>Post / Zip Code*</label>
                		<input type="text" name="customerPostCode" placeholder="" required>
                		<label>Contact Email Address*</label>
                		<input type="text" name="customerEmail" placeholder="" required>
                		<label>Phone Number*</label>
                		<input type="text" name="customerPhone" placeholder="" required>
            		@endif
                    @if(Auth::check())
            		<div class="row" style="margin-left: 5px;">
            		    <input name="coupon_check" type="checkbox" style="margin-right: 10px !important;margin-top: 5px !important;">
            	    	<label>Do you have coupon?</lable>
            		</div>
                    <div id="discount" style="display:none">
                        <label>Enter Coupon</label>
                        <div class="inline">
                        <input type="text" name="coupon" id="coupon" placeholder="Enter Coupon to get Discount" value="">
                        <button type="button" class="btn btn-primary coupn_btn" id="apply"  style="cursor: pointer;    margin: 2px 11px;" onclick="check_coupon()">Apply</button>
                         <div id="loading">
                        <img id="loading-image" src="https://i.ya-webdesign.com/images/loading-gif-png-5.gif" alt="Loading..." / style="width: 100%;">
                    </div>
                            
                        </div>
                        <h4 id="res_msg" class="alert coupen-success"></h4>
                    </div>
                    @endif
                    <div class="button" style="text-align: center; margin: 10px;">
                        @if(Auth::check())
                            <button id="pay_btn" class="btn btn-success" type="submit" style="width: 131px !important;">Pay (<?php  echo $curr; ?>{{ $price }})</button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
        <div class="container">
    @if(!Auth::check() )
    <div class="row set_row_width">
        <div class="col-md-6 add_brdr">
        <form id="user_login_call">
                                    <h5 style="text-align: center;">Already have account</h5>
                                  <div class="form-group">
                                    <label for="exampleInputEmail">Email Address</label>
                                    <input type="email" class="form-control" id="user_email" name="user_email" placeholder="" required>
                                  </div>

                              <div class="form-group">
                                <label for="exampleInputPassword">Password</label>
                                <input type="password" class="form-control" id="user_password" name="user_password" placeholder="" required>
                              </div>

                              <div class="payout_btn">
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div>


        </form>
        </div>
         <div class="col-md-6">
        <form id="user_reg_call">
            <h5 style="text-align: center;">Create Account</h5>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="user_email_reg" name="user_email" placeholder="Enter Email" required>
          </div>
          <div class="payout_btn">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
        </div>
    @endif
    </div>
</div>
        <!-- paytriot -->
        <div class="modal" id="card_detailsModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <label>Cardholder's Name*</label>
            <input type="text" class="form-control" id="user_name" name="user_name" required>
            <label>Card Number*</label>
            <input type="text" class="form-control" id="user_card_number" name="user_card_number" required>
            <label>Expiry Date*</label>
            <input type="text" class="form-control" id="user_card_expiry" name="user_card_expiry" required>
            <label>Card Verification Number*</label>
            <input type="text" class="form-control" id="user_card_verification" name="user_card_verification" required>
            <label>Address (Registered billing address)</label>
            <input type="text" class="form-control" id="user_address" name="user_address" required>
            <label>Post / Zip Code</label>
            <input type="text" class="form-control" id="user_post_code" name="user_post_code" required>
            <label>Contact Email Address</label>
            <input type="text" class="form-control" id="user_email" name="user_email" required>
            <label>Phone Number</label>
            <input type="text" class="form-control" id="user_phone_no" name="user_phone_no" required>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
    </div>
</div>


    <div class="modal" id="successModal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h2 class="modal-title" id="successHeadingDiv" style="color: #fff;">Success</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <span id="successHeadingModal"></span>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
        </div>
    </div>
    <div class="modal" id="errorModal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h2 class="modal-title" id="errorHeadingDiv" style="color: #fff;">Error</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <span id="errorHeadingModal"></span>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
        </div>
    </div>


</section>
<script>
    $("#user_login_call").on('submit',(function(e) {
        e.preventDefault();
        var email = document.getElementById('user_email').value;
        $.post("{{url('/home/login')}}",
        {
            _token: "{{ csrf_token() }}",
            email: document.getElementById('user_email').value,
            password: document.getElementById('user_password').value,
            random_user_id: "<?php if(isset($_COOKIE['random_user_id'])){ echo $_COOKIE['random_user_id']; } ?>"
        },
        function(data,status){
            if(data.status == 1)
            {
                $('#successModal').modal('show');
                $('#successHeadingModal').html(data.msg);
                setTimeout(function(){ $('#successModal').modal('hide'); }, 1000);
                location.reload();
            }
            else if( data.status == 0 )
            {
                $('#errorModal').modal('show');
                $('#errorHeadingModal').html(data.msg);
                setTimeout(function(){ $('#errorModal').modal('hide'); }, 1000);
                // location.reload();
                $('#user_email').val(email);
            }
        });
    }));
    $("#user_reg_call").on('submit',(function(e) {
        var email = document.getElementById('user_email_reg').value;
        e.preventDefault();
        $.post("{{url('/register_and_sub_user')}}",
        {
            _token: "{{ csrf_token() }}",
            email: document.getElementById('user_email_reg').value,
            random_user_id: "<?php if(isset($_COOKIE['random_user_id'])){ echo $_COOKIE['random_user_id']; } ?>"
        },
        function(data,status){
            if(data.status == 1)
            {
                $('#successModal').modal('show');
                $('#successHeadingModal').html(data.msg);
                // setTimeout(function(){ $('#successModal').modal('hide'); }, 1000);
                // location.reload();
            }
            else if( data.status == 0 )
            {
                $('#errorModal').modal('show');
                $('#errorHeadingModal').html(data.msg);
                // setTimeout(function(){ $('#errorModal').modal('hide'); }, 1000);
                // location.reload();
                $('#user_email_reg').val(email);
            }
        });
    }));
    // $("#paytriot-form").on('submit',(function(e) {
    //     e.preventDefault();
    //     $('#card_detailsModal').modal('show');
    // }));
    // $('#apply').click(function() {
    //   $('#apply').css({
    //       color: '#000',
    //       background: 'grey',
    //       cursor: 'not-allowed'
    //   });
    // });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script type="text/javascript">

       $('input[name=card_number]').mask('9999999999999999');
       $('input[name=expiry]').mask('99/99');
       $('input[name=cvc]').mask('999');


       $('input[name=cardNumber]').mask('9999999999999999');
       $('input[name=cardExpiryMonth]').mask('99');
       $('input[name=cardExpiryYear]').mask('99');
       $('input[name=cardCVV]').mask('999');


        function show_selected_payment_container (id)
        {
            switch (id)
            {
                case 'credit':
                    $('#containers').hide();
                    $('#container2').show();
                    $('#container1').hide();
                    break;
                case 'credit-card':
                    $('#containers').show();
                    $('#container2').hide();
                    $('#container1').hide();
                    break;
                case 'paytriots':
                    $('#containers').hide();
                    $('#container2').hide();
                    $('#container1').show();
                    break;
            }
        }


       $( document ).ready(function() {

            var credit = $('#credit_amount').val();
            var credit_amount = parseInt(credit);
            var total = $('#total_amount').val();
            var billing_amount = parseInt(total);

            if (credit_amount < billing_amount) {
                $('#paytriots').parent().hide();
                $('#first_heading').hide();
            }

           $('#container2').hide();

           var selected_payment_id = $('input.payment-type:checked').attr('id');
           show_selected_payment_container(selected_payment_id);

           $('input.payment-type').change(function(){
               var id = $(this).attr('id');

               if ($(this).prop('checked')) {
                    show_selected_payment_container(id);
               }
           });
       });

    </script>
    <script>
        function check_coupon() {
            var coupon = $('#coupon').val();
            if(coupon == ''){
                alert('Invalid Coupon');
                return true;
            }
            $('#loading').show();
            $('#apply').attr("disabled", true);
            $.ajax({url: "{{url('user/check_coupon/')}}/"+coupon, success: function(result){
                    if(result == "Error"){
                        $('#loading').hide();
                        alert('Invalid Coupon or Coupon Expired');
                        $('#coupon').val('');
                        $('#apply').removeAttr("disabled");
                        return true;
                    }else{
                        $('#loading').hide();
                        $('#pay_btn').html("Pay (<?php  echo $curr; ?>" + result + ")");
                        $('#hidden_amount').val(result * 100);
                        $('#res_msg').html('Coupon Applied Successfull.');
                        $('#apply').removeAttr("disabled");
                        setTimeout(function(){ $('#res_msg').html(''); }, 1000);
                    }
                }});
        }
        $('input[type="checkbox"]').click(function(){

            if($(this).prop("checked") == true){

                console.log("Checkbox is checked.");
                $('#discount').css("display", "block");
            }

            else if($(this).prop("checked") == false){

                console.log("Checkbox is unchecked.");
                $('#discount').css("display", "none");
            }

        });
    </script>
@endsection

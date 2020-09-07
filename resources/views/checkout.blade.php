@extends('layouts.app')
@section('content')
<?php $curr=Config::get("constants.currency"); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style type="text/css">

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
  padding: 30px 15px;
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
</style>
<section class="car_sec" style="min-height: 550px;">

  <h3 class="text-center" style="margin: 30px 0;">Pay for tgfickets</h3>
    <div class="panel-body container pl-4 pr-4">
   @include('alert')
          </div>
     @if($price !="0")      


   <input type="hidden" name="credit_amount"  id="credit_amount" value="{{$credit}}" >
    <input type="hidden" name="total_amount" id="total_amount" value="{{$price}}" >
  <div id="option">   
<div class="container contrr">
  <label style="margin-left: 20px; cursor: pointer;"><input type="radio" name="pay_through" id="credit" value=0>Credit</label>
  <label style="cursor: pointer; padding-left: 10px;"><input type="radio" name="pay_through"  id="cedit_card" value=1>Credit Card</label>
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
      <div style="margin: 0 auto;">
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
                  <div class="form-group">
                    <label for="cardNumber">Apply Coupan For Discount</label>
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
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script type="text/javascript">
 
      $('input[name=card_number]').mask('9999999999999999');
       $('input[name=expiry]').mask('99/99');
       $('input[name=cvc]').mask('999');

       // $('cedit_card').click(function(){
       // $(.container).show();
       // });

       
       $( document ).ready(function() {
        var credit_amount = $('#credit_amount').val();
        var iNum = parseInt(credit_amount);
        var total_amount = $('#total_amount').val();
        var num1 = parseInt(total_amount);
        if (iNum>num1) {
          $('#containers').hide();
        }else{
          $('#option').hide();
        }
        });

       // function myFunction(){
       //  var radio = $('input[name=pay_through]:checked').val();
       //  if(radio==1)
       //  {
       //    $('#containers').show();
       //  }
       // }

       $('body').on('change', 'input[name="pay_through"]:radio', function() {
        var radio = $('input[name=pay_through]:checked').val();
        if(radio==1)
          {
            $('#containers').show();
            $('#container1').hide();
          }
          if(radio==0){
            $('#containers').hide();
            $('#container1').show();

          }

      });

    
    </script>
@endsection

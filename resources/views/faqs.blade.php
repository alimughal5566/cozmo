@extends('layouts.app')
@section('content')
<style type="text/css">


</style>

<!-- <div class="container cust_panel_collapse panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  @if(isset($faqs) && !empty($faqs))
  @php($count = 1)
  @foreach($faqs  as $key=> $faq)
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a style="display: block;" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne{{$key+1}}" aria-expanded="true" aria-controls="collapseOne">
          {{$faq->title}} #{{$count++}}
        </a>
      </h4>
      <i class="fa fa-plus" style="display: none"></i>
      <i class="fa fa-minus" ></i>
    </div>
    <div id="collapseOne{{$key+1}}" class="panel-collapse collapse {{$key==0?'show':''}}" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        {!! $faq->description !!}
      </div>
    </div>
  </div>
  @endforeach
  @endif
</div> -->


<div class="container">
  <div id="accordion">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h5 class="mb-0 cust_collapse">
          <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">               <i
           class="fa" aria-hidden="true" style="padding-right: 7px;"></i>
            How Do I enter the competition? 
          </button>
        </h5>
      </div>

      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
             You simply select the prize you would like to win, Pick a number within
            that competition and proceed to the checkout.

        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingTwo">
        <h5 class="mb-0 cust_collapse">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <i class="fa" aria-hidden="true" style="padding-right: 7px;"></i>
            How much are the tickets?
          </button>
        </h5>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
        <div class="card-body">
      We generally run 6 competitions with a ticket price ranging from £5 to £30.
    </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingThree">
        <h5 class="mb-0 cust_collapse">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <i class="fa" aria-hidden="true" style="padding-right: 7px;"></i>
            What’s my chance of winning? 
          </button>
        </h5>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
        <div class="card-body">
        Each competition has different chances of winning. The chance is based on
        the amount of tickets.
        Example: 55” Tv is £5 per ticket with 100 numbers (tickets) your chance is
        1 in 100 chance of winning.

        </div>
      </div>
    </div>
  <div class="card">
      <div class="card-header" id="headingfour">
        <h5 class="mb-0 cust_collapse">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
            <i class="fa" aria-hidden="true" style="padding-right: 7px;"></i>
            How do I confirm my purchase?  
          </button>
        </h5>
      </div>
      <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
        <div class="card-body">
      You will receive a confirmation email immediately after entering.
        </div>
      </div>
    </div>
  <div class="card">
      <div class="card-header" id="headingfive">
        <h5 class="mb-0 cust_collapse">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
            <i class="fa" aria-hidden="true" style="padding-right: 7px;"></i>
            How will the winner be decided?
          </button>
        </h5>
      </div>
      <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordion">
        <div class="card-body">
      Please follow our Facebook page. All our competitions will be drawn using facebook live stream here you will be able to view the draw (live) and see the winning number. You will also be able to view the draw via our website using the live draw tab.
<br><small>"Don't worry if you miss the draw we will announce the winner via Social media and on our website in the Winners podium. Good luck !</small>

        </div>
      </div>
    </div>
  <div class="card">
      <div class="card-header" id="headingsix">
        <h5 class="mb-0 cust_collapse">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
            <i class="fa" aria-hidden="true" style="padding-right: 7px;"></i>
            Delivery of prizes 
          </button>
        </h5>
      </div>
      <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordion">
        <div class="card-body">
     <h6>Competitions £5, £10, £15, £20, £25</h6>
     The Competition winner would like to take delivery of the prize they have selected and not use the cash alternative (see below) once this is
confirmed an order will be placed by the promoter.
<h6>Delivery Terms:</h6> Please allow up to 10 days for delivery.
<br>
The promoter will not be responsible for any postal delays.<br>
<h6>Competition £30</h6>
The Competition winner would like to take delivery of the prize they have
selected and not use the cash alternative (see 7F) once this is confirmed
an order will be placed by the promoter. The winner will receive details of
the dealer and order confirmation and estimated build date.  The vehicles
we promote as prizes consist of both new and registered; all (registered)
vehicles will be pre-registered displaying delivery mileage only.
<br>
<strong>Delivery Times: </strong>Please note prizes are factory order and delivery may take
up to 3 Months for delivery.
<br>
The promoter will not be responsible for any manufacturing delays.<br>
Cash Alternative: Should the Winner not wish to take delivery of the Prize
or the competition didn’t sell all of the tickets a Cash alternative can be
claimed or offered. The cash alternative is 70% of the total money raised
from ticket sales within that competition. Cash alternatives settlements
are made 10 days after the competition end date.

        </div>
      </div>
    </div>
  <div class="card">
      <div class="card-header" id="headingseven">
        <h5 class="mb-0 cust_collapse">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
            <i class="fa" aria-hidden="true" style="padding-right: 7px;"></i>
            How many tickets can I buy per competition? 
          </button>
        </h5>
      </div>
      <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordion">
        <div class="card-body">
      To give everyone a fair chance of winning we restrict this to 5 tickets per competition.
        </div>
      </div>
    </div>
  <div class="card">
      <div class="card-header" id="headingeight">
        <h5 class="mb-0 cust_collapse">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
            <i class="fa" aria-hidden="true" style="padding-right: 7px;"></i>
             What if we don’t sell all the tickets.
          </button>
        </h5>
      </div>
      <div id="collapseeight" class="collapse" aria-labelledby="headingeight" data-parent="#accordion">
        <div class="card-body">
      If the competition fails to sell all of the tickets within the 30 days the
draw will take place and a cash alternative will be awarded.  The cash
alternative will be 70% of the amount of money taken during this
competition.  Cash alternatives settlements are made 10 days after the
competition end date.
</div>
      </div>
    </div>
  </div>
</div>

@endsection
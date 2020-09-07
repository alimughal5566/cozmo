@extends('layouts.app')
@section('content')

<!-- <div class="blog">
  <h1 class="text-center">How To Play</h1>
  
  <div class="container">
    <div class="blog_content">
      <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc </p>
    </div>
  </div>
</div>
 -->
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
    <h3 class="new-center">How does it work</h3>
    <div class="facts-bg">
    <div class="container">
        <div class="heading-facts">
            <!-- <h style="text-align: center;">Who Does It Works?</h3> -->
            <div class="facts-icon">
                <ul>
                    <li>
                        <div class="h-img">
                            <!-- <h6 style="text-align: center;">TICKETS FROM $1</h6> -->
                            <div class="date">
                                <img src="frontend/images/select-ptize.png">
                            </div>
                        </div>
                        <p>Select Prize</p>
                    </li>
                    <li>
                        <!-- <h6>SELECT YOUR PRIZE</h6> -->
                        <div class="date">
                            <img src="frontend/images/check-number.png">
                        </div>
                        <p>Pick Number</p>
                    </li>
                    <li>
                        <!-- <h6>WILL YOU WIN?</h6> -->
                        <div class="date">
                            <img src="frontend/images/checkout.png">
                        </div>
                        <p>Checkout</p>
                    </li>
                     <li>
                        <!-- <h6>WILL YOU WIN?</h6> -->
                        <div class="date">
                            <img src="frontend/images/fb-draw.png">
                        </div>
                        <p>Watch F.B Draw</p>
                    </li>
                    
                </ul>
                <!-- <div class="btn">
                    <input type="submit" value="Submit">
                </div> -->
            </div>
        </div>
    </div>
</div>
  <div id="accordion">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h5 class="mb-0 cust_collapse">
          <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">               <i
           class="fa" aria-hidden="true" style="padding-right: 7px;"></i>
            Create an account 
          </button>
        </h5>
      </div>

      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
      You can register an account using our online registration or for ease you can use your Social media accounts 
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingTwo">
        <h5 class="mb-0 cust_collapse">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <i class="fa" aria-hidden="true" style="padding-right: 7px;"></i>
            Select a prize
          </button>
        </h5>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
        <div class="card-body">
      You simply select the prize you would like to win. This will take you to the competition for that prize. 
    </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingThree">
        <h5 class="mb-0 cust_collapse">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <i class="fa" aria-hidden="true" style="padding-right: 7px;"></i>
             Pick a number 
          </button>
        </h5>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
        <div class="card-body">
       Scroll down the screen to the number section, Simply select one of the orange numbers as these are available (grey ones have been taken). Just press the number you would like and this will be added to your cart. If you change your mind about the number you can just repress the number and we will remove it from your cart.. If you can't choose a number you have an option to use our auto select number feature, this will randomly select a number and add it to your cart.
        </div>
      </div>
    </div>
  <div class="card">
      <div class="card-header" id="headingfour">
        <h5 class="mb-0 cust_collapse">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
            <i class="fa" aria-hidden="true" style="padding-right: 7px;"></i>
             Proceed to cart/ checkout 
          </button>
        </h5>
      </div>
      <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
        <div class="card-body">
       You can go to your cart by pressing the cart tab at the top right of the screen. Please take some time to make sure you cart is correct. Once you are happy please continue to checkout and enter your card details once you have done this you will receive an email confirmation. Alternatively you can enter for free using the free entry route. Please see clause 10.1 in our terms and conditions.
        </div>
      </div>
    </div>
  <div class="card">
      <div class="card-header" id="headingfive">
        <h5 class="mb-0 cust_collapse">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
            <i class="fa" aria-hidden="true" style="padding-right: 7px;"></i>
             Watch our facebook draw 
          </button>
        </h5>
      </div>
      <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordion">
        <div class="card-body">
       Please follow our Facebook page (LINK)  All our competitions will be drawn using facebook live stream here you will be able to view the draw and see the winning number. You will also be able to view the draw via our website using the live draw tab.<br><small> "Don't worry if you miss the draw we will  announce the winner  via Social media and on our website in the Winners podium. Good luck !</small>


        </div>
      </div>
    </div>
  </div>
</div>

@endsection
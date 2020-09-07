<?php
$cart_check = 1;
if(Auth::check()){
    $cart_check_res = \App\Cart::where('user_id', Auth::user()->id)->first();
    if($cart_check_res){
        $cart_check = 0;
    }
    $data=get_user_cart(Auth::user()->id);
} else{
    if(!isset($_COOKIE['random_user_id'])){
        $data=get_user_cart(0);
    }else{
        $cart_check_res = \App\Cart::where('user_id', $_COOKIE['random_user_id'])->first();
        if($cart_check_res){
            $cart_check = 0;
        }
        $data=get_user_cart($_COOKIE['random_user_id']);
    }
}

?>
<?php $curr=Config::get("constants.currency"); ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
 .dropbtn {
  display: block;
    position: relative;
    color: #fff;
    /* padding: 10px 12px; */
    padding: 10px 30px;
    transition: 0.3s;
    font-size: 14px;
    font-weight: 600;
    font-family: "Open Sans", sans-serif;
    text-transform: uppercase;
    background: transparent;
}
.dropbtn:after {
    display: inline-block;
    margin-left: .255em;
    vertical-align: .255em;
    content: "";
    border-top: .3em solid;
    border-right: .3em solid transparent;
    border-bottom: 0;
    border-left: .3em solid transparent;
}
/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.modal-header , .modal-footer {
    border: 0 !important;
}
/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  border-bottom: 1px solid;
  margin-top: 5px;
}
.sun-btn button {
        width: 100% !important;
    border-radius: 0;
    margin: 0;
}
.modal-footer {
    padding-top : 0 !important;
    padding-bottom: 0 !important;
}
.checkbox label {
    display : flex;
}
.moda-body {
    padding-bottom : 0 !important;
}
.dropdown-content a:hover {
    border-radius: 0 !important;
    background: #03a9f4;
    color: #fff;
}
.dropdown-content a:hover .dropdown-content {
    background: transparent !important;
    box-shadow: none !important;
}
/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
      background-color: #03a9f4;
    border-radius: 23px;

}
.modal {
    z-index: 9999999999 !important;
}
</style>
    <div class="container-fluid first-header">
      <div class="sub-header">
        <div class="main-top">
          <div class="logo">
            <a href="/"><img src="images/logo1.png"></a> 
          </div>
          <div class="contact-icons">
            <div class="loc">
              <!-- <img src="images/location.png">
              <p class="location-p"> 322 Villing Aven<br>
              London sub 330</p>
              
              <img src="images/helpline.png">
              <p class=""> Helpline
                <br>
              +92-4522156-45</p> -->
              <div class="search_icon_fixed"> <i class="fa fa-search"></i> </div>
              <button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button>
            </div>
          </div>
        </div>
        
      </div>
    </div>


      <header id="header">
        <div class="custom_container">
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li><a href="/">Home</a></li>
              <li><a href="/events">Events</a></li>
              <li><a href="#">MEMber area</a></li>
              <li><a href="/mailing_list">join mailing list</a></li>
              <li><a href="/contact_us">Contact us</a></li>
              @if(Auth::check())
                @if(Auth::user()->user_role!=0)
                  <li><a href="{{ url('dashboard') }}">Administrator</a></li>
                @endif
                
                <?php 

                $dt = new DateTime();
                $date = $dt->format('Y-m-d H:i:s');
                $id = Auth::user()->id;
                DB::table('users')->where('id',$id)->update(['last_login' => $date]);

                 ?>
                 
                <li>
                      <div class="dropdown">
                          <button class="dropbtn">{{Auth::user()->name}}</button>
                          <div class="dropdown-content">
                            <a href="/profile-view">Profile</a>
                            <a href="{{ url('logout') }}">Logout</a>
                          </div>
                        </div>
                  </li>
                @else
                
                <li class="my_click" onclick="document.getElementById('id01').style.display='block'"><a href="#">Login</a></li>
                
                <!--<li class="my_click" data-toggle="modal" data-target="#login_modal"><a href="#">Login</a></li>-->
                
                
                
                <!--<li class="my_click" onclick="document.getElementById('id02').style.display='block'"><a href="#">Register</a></li>-->
                <!--<li class="get-started my_click set_brdr" onclick="document.getElementById('id02').style.display='block'"><a href="#">Become a member</a> </li>-->
                <li class="get-started my_click set_brdr"><a href="#" data-toggle="modal" data-target="#signup_modal">Become a member</a> </li>
              @endif
            </ul>
          </nav>
        </div>
      </header>
     
     <div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header" align="center">
          <img class="img-circle" id="img_logo" src="images/logo1.png">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="fa fa-window-close" aria-hidden="true"></i>

          </button>
        </div>
                
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                
                    <!-- Begin # Login Form -->
                    <form id="login-form" action="/home/login">
                    <div class="modal-body">
                <div id="div-login-msg">
                                <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-login-msg">Type your username and password.</span>
                            </div>
                <input id="login_username" class="form-control" type="text" placeholder="UserEmail" required="" name="email">
                <input id="login_password" class="form-control" type="password" placeholder="Password" required="" name="password">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
                  </div>
                <div class="modal-footer">
                            <div class="sun-btn">
                                <button type="submit" class="btn btn-primary btn-lg btn-block submit-btns">Login</button>
                            </div>
                  <div class="model-last-btns">
                                <button id="login_lost_btn" type="button" class="btn btn-link" data-toggle="modal" data-target="#forgot_modal">Lost Password?</button>
                                <button id="login_register_btn" type="button" class="btn btn-link" data-toggle="modal" data-target="#signup_modal">Register</button>
                            </div>
                </div>
                    </form>
                    <!-- End # Login Form -->
                    
                    <!-- Begin | Lost Password Form -->
                    
                    <!-- End | Lost Password Form -->
                    
                    <!-- Begin | Register Form -->
                    <!-- End | Register Form -->
                    
                </div>
                <!-- End # DIV Form -->
                
      </div>
  </div>
</div>


    <!-- Modal -->
<div id="forgot_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" align="center">
          <img class="img-circle" id="img_logo" src="images/logo1.png">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="fa fa-window-close" aria-hidden="true"></i>

          </button>
        </div>

        <form id="lost-form">
                          <div class="modal-body">
                        <div id="div-lost-msg">
                                        
                                        <span id="text-lost-msg">Type your e-mail.</span>
                                    </div>
                        <input id="lost_email" class="form-control" type="text" placeholder="E-Mail" required="">
                          </div>
                        <div class="modal-footer">
                                    <div class="sun-btn">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block submit-btns">Send</button>
                                    </div>

                        </div>
                    </form>


    </div>

  </div>
</div>


    <div id="signup_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" align="center">
          <img class="img-circle" id="img_logo" src="images/logo1.png">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="fa fa-window-close" aria-hidden="true"></i>

          </button>
        </div>

        <form id="register-form">
                     <div class="modal-body">
                        <div id="div-register-msg">
                                        
                                        <span id="text-register-msg">Register an account.</span>
                                    </div>
                        <input id="register_username" class="form-control" type="text" placeholder="Username" required="">
                        <input id="register_email" class="form-control" type="text" placeholder="Enter Name" required="">
                                    <input id="register_email" class="form-control" type="text" placeholder="Enter E-Mail" required="">
                                    <input id="register_email" class="form-control" type="text" placeholder="Phone Number" required="">
                                    <input id="register_password" class="form-control" type="password" placeholder="Repeat Password" required="">
                                    <input id="register_password" class="form-control" type="password" placeholder="Enter Password" required="">
                          </div>
                        <div class="modal-footer">
                                    <div class="sun-btn">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block submit-btns">Register</button>
                                    </div>
                                    <!--<div class="model-last-btns">-->
                                    <!--     <p style="display: inline;border: 0;">Already have a account</p> <button id="register_login_btn" type="button" class="btn btn-link" data-toggle="modal" data-target="#login_modal">Log In</button>-->
                                    <!--</div>-->
                        </div>
                    </form>

    </div>

  </div>
</div>
<!--<nav id="mobile-nav">-->
<!--        <ul class="" style="touch-action: pan-y;" id="">-->
<!--          <li><a href="index.html">Home</a></li>-->
<!--          <li><a href="#">Events</a></li>-->
<!--          <li><a href="#">MEMber area</a></li>-->
<!--          <li><a href="#">join mailing list</a></li>-->
<!--          <li class="set_brdr"><a href="contact.html">Contact us</a></li>-->
<!--          <li class="get-started"><a data-toggle="modal" data-target="#login-modal" href="#">Become a member</a>  </li>-->
<!--        </ul>-->
<!--      </nav>-->
      
      
        <script>
              if ($('#nav-menu-container').length) {
    var $mobile_nav = $('#nav-menu-container').clone().prop({
      id: 'mobile-nav'
    });
    $mobile_nav.find('> ul').attr({
      'class': '',
      'id': ''
    });
    $('body').append($mobile_nav);
    $('body').prepend('<button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button>');
    $('body').append('<div id="mobile-body-overly"></div>');
    $('#mobile-nav').find('.menu-has-children').prepend('<i class="fa fa-chevron-down"></i>');

    $(document).on('click', '.menu-has-children i', function(e) {
      $(this).next().toggleClass('menu-item-active');
      $(this).nextAll('ul').eq(0).slideToggle();
      $(this).toggleClass("fa-chevron-up fa-chevron-down");
    });

    $(document).on('click', '#mobile-nav-toggle', function(e) {
      $('body').toggleClass('mobile-nav-active');
      $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
      $('#mobile-body-overly').toggle();
    });

    $(document).click(function(e) {
      var container = $("#mobile-nav, #mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').fadeOut();
        }
      }
    });
  } else if ($("#mobile-nav, #mobile-nav-toggle").length) {
    $("#mobile-nav, #mobile-nav-toggle").hide();
  }

        </script>
      
      
@include('login')
@include('signup')

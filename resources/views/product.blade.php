
@extends('layouts.app')
@section('content')
    <?php $curr=Config::get("constants.currency");
    // $ref=@$_SERVER[HTTP_REFERER];
    if(isset($socialsss)){
        $ref = $socialsss;
    }else{
        $ref = "asdasdas";
    }
    if ($ref == "facebook" || $ref == "twitter" || $ref == "whatsapp" || $ref == "email") {
    ?>

    <style>
        #id077 input[type=text], input[type=password] {
            width: 100%;
            padding: 5px;
            margin: 5px 0 5px 0;
            display: inline-block;
            border: none;
            border-radius: 4px;width: 30.333%;
            margin-right: 3.333%;
            background: #f1f1f1;
        }

        #login_form1{
            background-color: #fefefe;
            margin: 5% auto 5% auto;
            border: 1px solid #888;
            width: 30%;
            overflow-x: hidden;
            position: initial;
        }

        /* Add a background color when the inputs get focus */
        #id077 input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }
        #id077 span{
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
        #reg_form2 {
            background-color: #fefefe;
            margin: 5% auto 5% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 30%; /* Could be more or less, depending on screen size */
            height: auto;

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
        #pricing-table {
            text-align: center;
        }
        #pricing-table .plan {
            font: 12px 'Lucida Sans', 'trebuchet MS', Arial, Helvetica;
            text-shadow: 0 1px rgba(255,255,255,.8);
            background: #fff;
            border: 1px solid #ddd;
            color: #333;
            padding: 20px;
            width:100%; /* plan width = 180 + 20 + 20 + 1 + 1 = 222px */
            min-width: 344px;
            max-width: 344px;
            min-height: 408px;
        }
        #pricing-table #most-popular {
            z-index: 2;
            top: -13px;
            border-width: 3px;
            padding: 30px 20px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            -moz-box-shadow: 20px 0 10px -10px rgba(0, 0, 0, .15), -20px 0 10px -10px rgba(0, 0, 0, .15);
            -webkit-box-shadow: 20px 0 10px -10px rgba(0, 0, 0, .15), -20px 0 10px -10px rgba(0, 0, 0, .15);
            box-shadow: 20px 0 10px -10px rgba(0, 0, 0, .15), -20px 0 10px -10px rgba(0, 0, 0, .15);
        }
        /* --------------- */
        #pricing-table h3 {
            font-size: 20px;
            font-weight: normal;
            padding: 20px;
            margin: -20px -20px 50px -20px;
            background-color: #eee;
            background-image: -moz-linear-gradient(#fff,#eee);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#eee));
            background-image: -webkit-linear-gradient(#fff, #eee);
            background-image: -o-linear-gradient(#fff, #eee);
            background-image: -ms-linear-gradient(#fff, #eee);
            background-image: linear-gradient(#fff, #eee);
        }
        #pricing-table #most-popular h3 {
            background-color: #ddd;
            background-image: -moz-linear-gradient(#eee,#ddd);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#eee), to(#ddd));
            background-image: -webkit-linear-gradient(#eee, #ddd);
            background-image: -o-linear-gradient(#eee, #ddd);
            background-image: -ms-linear-gradient(#eee, #ddd);
            background-image: linear-gradient(#eee, #ddd);
            margin-top: -30px;
            padding-top: 30px;
            -moz-border-radius: 5px 5px 0 0;
            -webkit-border-radius: 5px 5px 0 0;
            border-radius: 5px 5px 0 0;
        }
        #pricing-table h3 span {
            display: block;
            font: bold 25px/100px Georgia, Serif;
            color: #ee8322;
            background: #fff;
            transform: rotate(24deg);
            border: 5px solid #fff;
            height: 100px;
            width: 100px;
            margin: 10px auto -65px;
            -moz-border-radius: 100px;
            -webkit-border-radius: 100px;
            border-radius: 100px;
            -moz-box-shadow: 0 5px 20px #ddd inset, 0 3px 0 #999 inset;
            -webkit-box-shadow: 0 5px 20px #ddd inset, 0 3px 0 #999 inset;
            box-shadow: 0 5px 20px #ddd inset, 0 3px 0 #999 inset;
        }
        /* --------------- */
        .timerr{
            display: flex;
            flex-direction: row;
            justify-content: center;
        }
        #pricing-table ul {
            /*  margin: 20px 0 0 0;*/
            padding: 0;
            list-style: none;
        }
        #pricing-table li {
            border-top: 1px solid #ddd;
            padding: 10px 7px;
        }
        /* --------------- */

        #pricing-table .signup {
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
        #pricing-table .signup:hover {
            background-color: #c56712;

        }
        #pricing-table .signup:active, #pricing-table .signup:focus {
            background: #c56712;
            top: 2px;
            -moz-box-shadow: 0 0 3px rgba(0, 0, 0, .7) inset;
            -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, .7) inset;
            box-shadow: 0 0 3px rgba(0, 0, 0, .7) inset;
        }
        /* --------------- */
        .clear:before, .clear:after {
            content:"";
            display:table
        }
        .clear:after {
            clear:both
        }
        .clear {
            zoom:1
        }
        .free_p {
            background-color: #000;
            font-size: 13px;
        }
        .free_tick2 {
            position: absolute;
            top: 90px;
            right: 19px;
        }
        .free-img{
            width: 100%;
            min-height: 500px;
        }
        .col-paddingg{
            display: flex;
            flex-direction: column;
            align-items: center;
            border-bottom: 1px solid #d2d2d2;
            padding-bottom: 11px;
        }
        .free-image2{
            width: 70%;
        }
        .free_anc span{
            color: grey;
        }
        .free-pt{
            font-style: italic;
            font-weight: 600;
        }
        .free-cont{
            position: relative;
        }
        .raff-desc{
            font-size: 13px !important;
        }
        @media screen and (max-width: 1200px){
            .free_tick2 {


                right: 18px;
            }
        }
        @media screen and (max-width: 992px){
            .free_tick2 {

                position: initial;
            }
            #reg_form2, #login_form1{
                width: 50% !important;
            }
            #pricing-table .plan{
                width: 100%;
                min-width: 100%;
            }

        }
        @media screen and (max-width: 768px){
            #reg_form2, #login_form1{
                width: 70% !important;
            }
            .top_rib{
                position: relative;
                display: flex;
                flex-direction: column-reverse;
            }
            .featured-raffle-details{
                position: relative !important;
                padding-bottom: 0 !important;
            }
            .free-img{
                width: 100%;
                min-height: 100%;
                max-height: 100%;
            }
        }
        @media screen and (max-width: 420px){
            #reg_form2, #login_form1{
                width: 950% !important;
            }
            .land-title {

                font-size: 21px;
            }
            .add_cart_grp {
                display: block !important;
            }
            .add_cart_grp .add_cart_btn {
                margin-left: 0 !important;
            }
        }

        @media screen and (max-width: 576px){
            #reg_form2, #login_form1{
                width: 85% !important;
            }
        }
        #flout_cust-pre, #flout_cust-next{
            color: #fff;
            text-decoration: none;
            background-color: #ee8322;
            padding: 10px;
        }
        .ribbon {
            width: 150px;
            height: 150px;
            position: absolute;
            z-index: 1;
            left: -7px;
            top: -6px;
        }
        /*.ribbon::before, .ribbon::after {
        position: absolute;
        z-index: -1;
        content: '';
        display: block;
        border: 5px solid #ab601d;
        }
        .ribbon span {
        position: absolute;
        display: block;
        width: 290px;
        padding: 15px 0;
        background-color: #ee8322;
        box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
        color: #fff;
        font: 700 18px/1 'Poppins', sans-serif;
        text-shadow: 0 1px 1px rgba(0, 0, 0, .2);
        text-transform: uppercase;
        text-align: center;
        }
        .ribbon-bottom-right span {
        left: -58px;
        bottom: 30px;
        transform: rotate(-45deg);
        }
        .ribbon-bottom-right {
        bottom: -10px;
        right: -10px;
        }
        .ribbon-bottom-right::before {
        bottom: 0;
        left: 0;
        }
        .ribbon-bottom-right::after {
        top: 0;
        right: 0;
        }*/
        /* carousel */
        h2{
            text-align:center;
            padding: 20px;
        }
        /* Slider */
        .slick-slide {
            margin: 0px 20px;
        }
        .slick-slide img {
            width: 100%;
            min-height: 100%;
            height: 100px;
            border: 1px solid #c7c7c7;
            margin: 10px 0;
            cursor: pointer;
            padding: 4px;
        }
        .slick-slider
        {
            position: relative;
            display: block;
            box-sizing: border-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-touch-callout: none;
            -khtml-user-select: none;
            -ms-touch-action: pan-y;
            touch-action: pan-y;
            -webkit-tap-highlight-color: transparent;
        }
        .slick-list
        {
            position: relative;
            display: block;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }
        .slick-list:focus
        {
            outline: none;
        }
        .slick-list.dragging
        {
            cursor: pointer;
            cursor: hand;
        }
        .slick-slider .slick-track,
        .slick-slider .slick-list
        {
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
        .slick-track
        {
            position: relative;
            top: 0;
            left: 0;
            display: block;
        }
        .slick-track:before,
        .slick-track:after
        {
            display: table;
            content: '';
        }
        .slick-track:after
        {
            clear: both;
        }
        .slick-loading .slick-track
        {
            visibility: hidden;
        }
        .slick-slide
        {
            display: none;
            float: left;
            height: 100%;
            min-height: 1px;
        }
        [dir='rtl'] .slick-slide
        {
            float: right;
        }
        .slick-slide.slick-loading img
        {
            display: none;
        }
        .slick-slide.dragging img
        {
            pointer-events: none;
        }
        .slick-initialized .slick-slide
        {
            display: block;
        }
        .slick-loading .slick-slide
        {
            visibility: hidden;
        }
        .slick-vertical .slick-slide
        {
            display: block;
            height: auto;
            border: 1px solid transparent;
        }
        .slick-arrow.slick-hidden {
            display: none;
        }
        .featured-raffle-details {
            background: linear-gradient(0deg, rgba(183, 136, 136, 0.29) 0%, rgb(255, 0, 0) 0%, rgba(8, 65, 177, 0.18) 0%, rgb(248, 251, 255) 100%);
            position: absolute;
            top: 0px;
            padding: 0 16px 6px;
            padding-top: 14px;
            width: 100%;
        }
        .raffle-title {
            text-shadow: 3px 2px 4px #7A7A7A;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .main-cownt {
            /* background-color: #ee8322;*/
            width: 100%;
            color: #000;
            font-weight: 600;
        }
        .main-ulgi {
            list-style: none !important;
            margin: 0 !important;
            padding: 0 8px !important;
            display: flex !important;
            align-items: stretch !important;
            justify-content: center; !important;
            width: 100% !important;
            flex-wrap: nowrap !important;
        }
        .cust_lii {
            padding: 0 3px;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 13px;
            padding-bottom: 0 !important;
            font-size: 12px;
        }
        .main-ulgi p {
            color: #000 !important;
            margin: 0;
        }
        .enter-btn {
            background-color: black;
            border-bottom: 4px solid #ffff;
            color: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        a.enter-btn-large {
            text-decoration: none;
            padding: 16px 0px 14px 10px;
        }
        .top_ends{
            display: flex;
            flex-direction: row;
            justify-content: center;
        }
        .endssin{
            margin-top: 18px;
            color: white;
            white-space: nowrap;
        }
        .pro-page {
            padding-right: 10px;
        }
        .ribbon img {

            width: 75%;
            transform: rotate(347deg);

        }
        .land-title{
            padding-left: 0;
            padding-bottom: 0;
            font-size: 16px;
            text-align: left;
        }
        .free-card-btn{
            background-color: #ee8322;
            border-color: #ee8322;
        }
        .free-card-btn:focus{
            box-shadow: none;
        }
        .btn-primary:not(:disabled):not(.disabled).active:focus, .btn-primary:not(:disabled):not(.disabled):active:focus, .show>.btn-primary.dropdown-toggle:focus {
            box-shadow: none;
        }
        .psw-lay{
            margin: 0;
            float: left;
            font-weight: 500;
        }
        .lay-signupbtn:hover{
            background-color: #c56712;
        }

        .lay-signupbtn{
            width: 50%;
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
        .landing-dignin{
            width: 50% !important;
            border-radius: 0 !important;
            padding: 10px !important;
        }
        .landing-sign-up:hover{
            background-color: #c56712;
            color: white;
            text-decoration: none;
        }
        .landing-sin:hover{
            background-color: #c56712;
            color: white;
            text-decoration: none;
        }
        .landing-sign-up, .landing-sin, .landing-dignin{
            position: relative;
            padding: 8px 20px;
            /*    margin: 20px 0 0 0;*/
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
        .SideBarSticky-classSideBarSticky-ac41becd.SideBarSticky-fixTop-f2453b70{
            width: 100% !important;
        }


        /* End carousel */

        <?php
        if (!function_exists('limit_text')) {
            function limit_text($text, $limit) {
                if (str_word_count($text, 0) > $limit) {
                    $words = str_word_count($text, 2);
                    $pos = array_keys($words);
                    $text = substr($text, 0, $pos[$limit]) . '...';
                }
                return $text;
            } } ?>

    </style>
    <body>
    <div class="container free-cont">
        <div class="top_rib" style="position: relative;">
            <div class="ribbon ribbon-bottom-right"><img src="{{ url('frontend/images/free.png')}}" class="img-responsive"></div>
            <div class="free-tickets">
                @foreach($package->main_img as $key => $img)

                    <img src="<?php echo url("products/$img->package_id/$img->name");?>" id="expandedImg" class="img-responsive free-img" style="max-height: 500px;">
                @endforeach
                <div class="free_top-heading">

                </div>
            </div>
            <div class="featured-raffle-details">
                <div class="row">
                    <div class="col-md-9 raffle-title">
                        <h2  class="land-title">{{substr($package->name,0,30)}}</h2>
                    <!-- <?php $str = strip_tags($package->short_description);
                    $str1  =str_replace("\xc2\xa0",' ',$str);
                    $nbsp = html_entity_decode("&nbsp;");
                    $string = str_replace($nbsp, " ", $str1); ?> -->
                        <h5 class="raff-desc">{{$package->short_description_one}}</h5>
                        <h5 class="raff-desc">{{$package->short_description_two}}</h5>
                    </div>
                    <!-- <div class="col-md-2"></div> -->
                    <div class="col-md-5 col-lg-3 raffle-time">

                        <div class="row" style="background-color: #ee8322;">
                            <h5 class="text-white text-center" style="margin: 0 auto;">Competition Ends In:</h5>
                            <div class="col-md-12 top_ends time-left">

                                <div class="timerr" style="    color: white;">
                                    <div class="pro-page" style="display: flex;flex-direction: column;align-items: center;">
                                        <span class="days" id="day"></span>
                                        <div class="smalltext1">Days</div>
                                    </div>
                                    <div class="pro-page" style="display: flex;flex-direction: column;align-items: center;">
                                        <span class="hours" id="hour"></span>
                                        <div class="smalltext1">Hours</div>
                                    </div>
                                    <div class="pro-page" style="display: flex;flex-direction: column;align-items: center;">
                                        <span class="minutes" id="minute"></span>
                                        <div class="smalltext1">Minutes</div>
                                    </div>
                                    <div class="pro-page" style="display: flex;flex-direction: column;align-items: center;">
                                        <span class="seconds" id="second"></span>
                                        <div class="smalltext1">Seconds</div>
                                    </div>
                                    <p id="time-up"></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="free_tick2">
            <div id="pricing-table" class="clear">
                <div class="plan">
                    <?php $getfree = DB::table('setting')->first(); ?>
                    <h3>{{$getfree->free_entry_label}}<span>Free</span></h3>

                    @if(!Auth::check())

                    <!-- <a class="signup" id="sign-up-free" data-toggle="modal" href="#free-ticket-signup">Sign up for free ticket</a>
 -->
                        <!-- <button conclick="document.getElementById('id077').style.display='block'">Sign up for free ticket</button> -->

                        <li onclick="document.getElementById('id077').style.display='block'"><a class="landing-sign-up" href="#">Sign up for free ticket</a></li>

                        <div id="id077" class="modal">

                            <form id="reg_form2" class="modal-content" action="{{ url('register_free_user')}}" method="post">
                                <h1 id="register_head">Register</h1>
                                <span onclick="document.getElementById('id077').style.display='none'" class="close" title="Close Modal">&times;</span>
                                <p>Please fill in this form to create an account.</p>
                                <div class="container cust_con">
                                    <input type='hidden' name='referrer_type' value='{{$referrer_type}}'>


                                    @if(isset($socialsss))
                                        <input type="hidden" name="social" value="{{$socialsss}}">
                                    @endif

                                    @if(isset($refer_id))
                                        <input type="hidden" name="refer_idd" value="{{$refer_id}}">
                                    @endif

                                    <input type="hidden" name="package_idd" value="{{$package->uniqid}}">
                                    <label class="psw-lay mt-2" for="email">Name</label>
                                    <input style="    background: #fefefe;
    border: 1px solid #d6d6d6;width: 100%;" class="form-control" type="text" placeholder="Enter Name" name="name" required>
                                    <label class="psw-lay mb-2 mt-1" for="email" >Email</label>
                                    <input class="mt-2 form-control"  type="email" placeholder="Enter Email" name="email" required>

                                    <label for="psw-repeat" class="psw-lay mb-2 mt-2">Phone Number</label>
                                    <input class="mt-2 form-control" type="number" placeholder="Phone Number" name="phone" required>

                                    <p>By creating an account you agree to our <br><a href="{{url('privacy')}}" style="color: #298c42; border-bottom: 1px solid #298c42; text-decoration: none;">Privacy Policy</a></p>

                                    <ul class="social_connect">
                                        <li><a class="Connect" href="{{url('/redirect/'.$package->uniqid)}}"><img src="{{ url('frontend/images/fb-btn.png')}}"></a></li>
                                        <li><a class="Connect" href="{{url('/redirect_google/'.$package->uniqid)}}"><img src="{{ url('frontend/images/google-btn.png')}}"></a></li>
                                    </ul>

                                    <div class="clearfix">
                                        <button type="submit" class="lay-signupbtn" id="sub2">Sign Up</button>
                                        <div class="loader" style="margin: 0 auto; display: none"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- free ticket sign up modal -->

                        <!-- <a class="signup" onclick="document.getElementById('id01').style.display='block'">Login for free ticket</a> -->

                        <!-- <button class="signup" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#id071">Login for free ticket</button> -->

                        <li onclick="document.getElementById('id071').style.display='block'"><a class="landing-sin" href="#">Login for free ticket</a></li>

                        <div id="id071" class="modal">

                            <form id="login_form1" class="modal-content animate" action="{{ url('landing/login')}}">
                                <div class="imgcontainer">
                                    <span onclick="document.getElementById('id071').style.display='none'" class="close" id="close_login12" title="Close Modal">&times;</span>
                                    <h1>LogIn</h1>
                                </div>

                                <div class="container signIn cust_cont">
                                    <label class="psw-lay mb-2 mt-2" for="uname"><b>Email</b></label>
                                    <input type="email" class="form-control" placeholder="Enter Email" name="email" id="email" required autocomplete="off">

                                    <input type="hidden" name="package_idd" value="{{$package->uniqid}}">

                                    @if(isset($socialsss))
                                        <input type="hidden" name="socialist" value="{{$socialsss}}">
                                    @endif

                                    <label class="psw-lay  mb-2 mt-2" for="psw"><b>Password</b></label>
                                    <input type="password" class="form-control" placeholder="Enter Password" name="password" required autocomplete="off">
                                    <ul class="social_connect">
                                        <li><a class="Connect" href="{{url('/redirect/'.$package->uniqid)}}"><img src="{{ url('frontend/images/fb-btn.png')}}"></a></li>
                                        <li><a class="Connect" href="{{url('/redirect_google/'.$package->uniqid)}}"><img src="{{ url('frontend/images/google-btn.png')}}"></a></li>
                                    </ul>
                                    <button class="landing-dignin" type="submit">Sign In</button>
                                    <!--<div class="loader" style="margin: 0 auto;"></div>-->
                                    <!--  <label>
                                       <input type="checkbox" checked="checked" name="remember"> Remember me
                                     </label> -->

                                </div>
                            </form>
                        </div>

                        <ul>
                            @if (isset($package->fem_box_line1) && !empty($package->fem_box_line1))
                                <?php $deso = $package->fem_box_line1; ?>
                                <li>{{$deso}}</li>
                            @else
                                <li><b>Send</b> a post card</li>
                            @endif
                            @if (isset($package->fem_box_line2) && !empty($package->fem_box_line2))
                                <li>{{$package->fem_box_line2}}</li>
                            @else
                                <li><b>Postal</b>  entries are limited to one competition entrant per postcard.</li>
                            @endif
                            @if (isset($package->fem_box_line3) && !empty($package->fem_box_line3))
                                <li>{{$package->fem_box_line3}}</li>
                            @else
                                <li><b>Standard</b> competition terms and conditions apply for free entries.</li>
                            @endif
                        </ul>
                    @else
                        <?php   if ($freecomp== "") {
                        ?>
                        <form class="form-horizontal" method="POST" id="news_letter_forms"  >
                            @csrf

                            <input type="hidden" name="id" value=" {{ isset(Auth::user()->id)?(Auth::user()->id):('')}}">
                            <input type="hidden" name="products" value="{{$package->uniqid}}">
                            <input type="hidden" name="mc" value="{{$package->mc_id}}">
                            <input type="hidden" name="fromss" value="{{$ref}}">
                            <input type="hidden" name="share_type" value="">
                            <button class="btn btn-primary"   type="submit"> Click to Get Free Ticket</button>
                        </form>
                        <?php   } else {     ?>
                        <button class="btn btn-primary free-card-btn"   > You participated for free ticket</button>
                        <?php    }     ?>

                        <ul>
                            @if (isset($package->fem_box_line1) && !empty($package->fem_box_line1))
                                <li>{{$package->fem_box_line1}}</li>
                            @else
                                <li><b>Send</b> a post card</li>
                            @endif
                            @if (isset($package->fem_box_line2) && !empty($package->fem_box_line2))
                                <li>{{$package->fem_box_line2}}</li>
                            @else
                                <li><b>Postal</b>  entries are limited to one competition entrant per postcard.</li>
                            @endif
                            @if (isset($package->fem_box_line3) && !empty($package->fem_box_line3))
                                <li>{{$package->fem_box_line3}}</li>
                            @else
                                <li><b>Standard</b> competition terms and conditions apply for free entries.</li>
                            @endif
                        </ul>
                    @endif
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <p>{!!$package->description!!}</p>
        <h2>More Images</h2>
        <section class="customer-logos slider">

            <?php $i=0; ?>
            @foreach($package->image as $img)
                <div class="slide">
                    <div class="col-paddingg">
                        <?php $myString = $package->meta_keyword;
                        $alt = explode(',', $myString);
                        $pos = count($alt);
                        $count = $pos-1;
                        ?>
                        @if($i>$count)
                            <img src="<?php echo url("products/$img->package_id/$img->name");?>"  class="free-image2" onclick="myFunction(this);">
                        @else
                            <img src="<?php echo url("products/$img->package_id/$img->name");?>"  class="free-image2" onclick="myFunction(this);" alt="{{ltrim($alt[$i])}}">
                        @endif
                        <?php $i++ ?>
                    </div>
                </div>
            @endforeach
        </section>
    </div>
    <?php $cm_endte = DB::table('multi_competition')->where('id',$package->mc_id)->first();
    $enddate = $cm_endte->end_date;
    $stopdates = date('Y-m-d H:i:s', strtotime($enddate . '+24 hours'));
    ?>

    <script>
        $(document).on('submit','#login_form1',function(e){
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
                        swal("Success", "Congratulations you participated for free tickets", "success");
                        setTimeout( function () {
                            location.reload();
                        }, 3000 );
                    }else{
                        swal("Error", msg.msg, "error");
                    }
                }
            });
        });
        var new_date="<?php echo date('M d, Y H:i:s',strtotime($stopdates)) ;?>";
        var deadline = new Date(new_date).getTime();
        var x = setInterval(function() {
            var currentTime = new Date().getTime();
            var t = deadline - currentTime;
            var days = Math.floor(t / (1000 * 60 * 60 * 24));
            var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60));
            var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((t % (1000 * 60)) / 1000);
            document.getElementById("day").innerHTML =days ;
            document.getElementById("hour").innerHTML =hours;
            document.getElementById("minute").innerHTML = minutes;
            document.getElementById("second").innerHTML =seconds;
            if (t < 0) {
                clearInterval(x);
                document.getElementById("time-up").innerHTML = "TIME UP";
                document.getElementById("day").innerHTML ='0';
                document.getElementById("hour").innerHTML ='0';
                document.getElementById("minute").innerHTML ='0' ;
                document.getElementById("second").innerHTML = '0';
            }
        }, 1000);
    </script>
    <script>
        $(document).on('submit','#reg_form2',function(e){
            e.preventDefault();

            var $loading = $('#yourloadingdiv').hide();

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

                    }
                }
            });
        });

        var $loading = $('.loader').hide();
        $(document)
            .ajaxStart(function () {
                $loading.show();
                $('#sub2').prop('disabled', true);
            })
            .ajaxStop(function () {
                $loading.hide();
                $('#sub2').prop('disabled', false);
            });
    </script>
    <script type="text/javascript">

        $(document).on('submit','#news_letter_forms',function(e){
            e.preventDefault()
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
                },
                url: '{{ url("MultiCompetitions/freecomp")}}',
                data:  $(this).serialize(),

                success: function ( msg ) {
                    if(msg == 'admin'){
                        swal({
                                title: "Error",
                                text: "You are admin!",
                                type: "error",
                                showCancelButton: false,
                                confirmButtonClass: "btn-primary",
                                confirmButtonText: "OK",
                                closeOnConfirm: true
                            },
                            function(){
                                //swal("Deleted!", "Your imaginary file has been deleted.", "success");
                                location.reload();
                            });
                    }
                    if(msg == 'love') {
                        swal({
                                title: "Congratulations",
                                text: "You have Successfully participated for free Ticket!",
                                type: "success",
                                showCancelButton: false,
                                confirmButtonClass: "btn-primary",
                                confirmButtonText: "OK",
                                closeOnConfirm: true
                            },
                            function () {
                                //swal("Deleted!", "Your imaginary file has been deleted.", "success");
                                location.reload();
                            });

                    }
                    if(msg == 'not sa') {
                        swal({
                                title: "Error",
                                text: "Already Participated!",
                                type: "error",
                                showCancelButton: false,
                                confirmButtonClass: "btn-primary",
                                confirmButtonText: "OK",
                                closeOnConfirm: true
                            },
                            function () {
                                //swal("Deleted!", "Your imaginary file has been deleted.", "success");
                                location.reload();
                            });

                    }

                    $("#news_letter_formS")[0].reset();






                }
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });
    </script>
    </body>
    </html>
@endsection
<?php          }    else {          ?>
<script src="{{ asset('js/share.js') }}"></script>
<style>
    .first b{
        color:#ee8322;
    }
    #newwidth{
        max-width:67%;
        background:white;
        pointer-events: visible;
    }
    .first li{
        font-size:14px;
        padding: 5px 0;
    }
    #close{
        width:18%;
    }
    #body-padding{
        padding: 8px 35px;
    }
    #around-padding{
        padding: 25px 25px 0;
    }
    @media screen and (max-width: 991px){
        .obvs{
            font-size: 10px !important;
        }
    }
    @media screen and (max-width: 768px){
        .obvs{
            padding-left:5px !important;
        }
    }
    @media screen and (max-width: 576px){
        #newwidth{
            max-width:100%;
        }
        #close{
            width:20% !important;
        }
    }
    .card {
        margin-top: 10px;
        box-shadow: 0px 0px 17px #8080809c;
    }
    .card-img {
        width: 700px;
        height: 250px;
    }
    .card  h6{
        text-align: center;
        color: #ee8322;
    }
    .card  p{
        text-align: center;
        margin: 2px;
    }
    .card-body{
        padding: 5px 0;
    }
    .modal-headertop{
        background-color: #ee8322;
        color: white;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        padding: 10px 25px;
    }
    .modal-dialog img{
        max-height: 350px;
        width: auto;
    }
    /*.modal-body p{*/
    /*  text-align: center;*/
    /*  font-weight*/
    /*}*/
    .btn-danger {
        color: #fff;
        background-color: #ee8322;
        border-color: #ee8322;
    }
    .btn-danger:hover {
        color: #fff;
        background-color: #000000;
        border-color: #000000;
    }
    .modal-footerbottom{
        border-top: none;
        display: flex;
        flex-direction: row;
        justify-content: center;
        padding: 0 15px 15px;
    }
    .modal-body{
        padding: 1rem 1rem 0 1rem;
    }
    #linkss{
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        flex-wrap: wrap;
    }
    #linkss a {
        margin-top: 8px;
        margin-right: 10px;
        height: 38px;
        font-size: 14px;
        color: #fff;
        display: flex;
        line-height: 1.1;
        align-items: center;
        border-radius: 3px !important;
    }
    .social_btn, .cust_panel_collapse .panel-body {
        padding: 15px 7px 10px !important;
    }
    .social_btn a {
        padding: 10px 8px !important;
        background-color: #ee8322;
        color: #fff;
        text-transform: capitalize;
        text-decoration: none;
    }

    #view-btn{
        width:30%;
        background:#ee8322;
        border-color: #ee8322;
        animation-name: sample;
        animation-duration: 2s;
        animation-iteration-count: infinite;
        animation-direction: alternate;
    }
    #view-btn:hover{
        background:#dc700e;
        border-color: #dc700e;
        box-shadow:0;
    }
    {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
    .main-uli li {
        display: inline-block;
        font-size: 1.5em;
        list-style-type: none;
        padding: 10px;
        text-transform: uppercase;
    }
    .main-uli{
        padding-left: 0;
    }
    #head{
        margin-top: 10px;
        margin-bottom: 0;
        color: #ee8322;
    }
    .head-p{
        font-size: 16px;
    }
    .ul-desc{
        padding-left: 0;
    }
    li span {
        display: block;
        font-size: 1.5rem;
    }
    .thatsit p{
        margin-bottom:5px;
    }
    .thatsit li{
        margin:4px 0;
    }

    #auto_select {

        font-size: 14px;
        color: #fff;

        align-items: center;
        border-radius: 3px !important;
        padding: 10px 8px !important;
        background-color: #ee8322;
        color: #fff;
        text-transform: capitalize;
        text-decoration: none;
    }


    @keyframes sample{
        from{border-radius: 0%;color: white; background-color: #ee8521;}
        to{border-radius: 50%; color: white; background-color: #black;}
    }
    .newwer a{
        color: blue;
        background: transparent;
    }
    /*.conts{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: flex-end;
        flex-wrap: wrap;
    }*/

</style>
<style>
    .timer {
        margin: 0 0 45px;
        font-family: sans-serif;
        color: black;
        display: inline-block;
        font-weight: 100;
        text-align: center;
        font-size: 30px;
    }
    .note-video-clip{
        width:100%;
    }
    .description-specification-container.description-specification-container__left{
        width:100% !important;
    }
    table.product-spec{
        width:100% !important;
    }
    .description-specification-container{
        width:100% !important;
    }
    .timer div {
        padding: 10px;
        border-radius: 3px;
        display: inline-block;
        font-family: Oswald;
        font-size: 26px;
        font-weight: 400;
        width: 80px;
    }
    .timer .smalltext {
        color: #888888;
        font-size: 12px;
        font-family: Poppins;
        font-weight: 500;
        display: block;
        padding: 0;
        width: auto;
    }
    .timerr{
        display: flex;
        flex-direction: row;
        justify-content: center;
    }
    .timer #time-up {
        margin: 8px 0 0;
        text-align: left;
        font-size: 14px;
        font-style: normal;
        color: #000000;
        font-weight: 500;
        letter-spacing: 1px;
    }
    .pro-page{
        padding: 5px 15px;
    }
    .pro-page .smalltext1 {
        color: #848484;
        font-size: 12px;
        font-family: Poppins;
        font-weight: 500;
        display: block;
        padding: 0;
        width: auto;
    }
    .mail-btn{
        padding: 0 !important;
        background-color: #ee832200 !important;
        color: #2196F3 !important;
        text-decoration: none !important;
        text-transform: inherit !important;
        margin-top: 0 !important;
    }
    .sun-btn:hover{
        background: #000 !important;
    }
    @media screen and (max-width: 382px){
        #body-padding {
            padding: 8px 7px !important;
        }
        .sun-btn{
            margin: 0;
        }
    }
    .add_cart_grp {
        display: flex;
    }
    .add_cart_grp .add_cart_btn {
        padding: 6px 40px;
        white-space: nowrap;
        border-radius: 4px;
        margin-left: 20px;
    }
    .add_cart_grp .add_cart_btn i {
        color: #fff;
    }
    .input-group-btn button {
        display: flex !important;
        padding: 7px 15px !important;
        margin-left: 0 !important;
        outline: none !important;
        box-shadow: none !important;
    }

    .carouusal {
        padding: 0 !important;
    }
    .timer_text {
        text-align: initial;
        display: flex;
        justify-content: space-around;
        font-size: 18px;
        font-weight: 600;
        width: 90%;
    }
    @media screen and (max-width: 992px){
        .tab {
            width: 100% !important;
        }
    }
    @media screen and (max-width: 992px){
        .product_titl h1
        {
            font-size: 20px;
            margin-top: -32px !important;
        }
    }
    .images_ul {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        padding: 0;
        margin-left: 16px;
    }
    .images_ul li {
        width: 29.333%;
        margin-right: 3.333%;
    }
    .reviews_stats {
        margin-bottom: 10px;
    }
    .back_btn {
        margin-bottom: 10px;
    }
    .minus_btn:hover {
        background-color: red !important;
    }
    .discount_offers {
        text-align: center;
    }
    .discount_offers p {
        margin-bottom: 0;
        margin-top: 7px;
    }
    .discount_offers h7 {
        font-size: 16px;
        font-weight: 700;
        text-align: center;
        border-radius: 50%;
        background: #f184214f;
        padding: 5px 10px;
        margin: 0 auto;
        color: #302724;
        width: 40%;
        margin-bottom: 3px;
    }
</style>
<section>
    <div class="container">
        <div class="gallery">
            <div class="view-gallery-car">
                <div class="product_titl">
                    <h1>{{ $package->name }}</h1>
                </div>
                <div class="conts">
                    <h4>Ticket Price: <?php  echo $curr; ?>{{ $package->mc->price }}</h4>
                </div>
                <div class="timer_text" style="display: block;width: 100%">
                    <!--<button class="btn" type="button" data-toggle="collapse" data-target="#discount_collapse" aria-expanded="false" aria-controls="discount_collapse" style="width: 100%;font-size: 12px;">-->
                    <!--   if you buy more than 2, you will get 2%. Show discounts. -->
                    <!--</button>-->

                    <!--<div class="collapse" id="discount_collapse">-->
                    <div>
                        <div class="card-body">
                            <ul class="list-group" style="justify-content: center;">
                                <?php
                                $product_discounts = \App\Discounts::where('c_id', $package->id)->orderBy('id', 'DESC')->get()->toArray();
                                ?>
                                <div class="discount_offers">
                                    <h7>Discounts</h7>
                                    @if(isset($product_discounts[0]) && isset($product_discounts[1]))
                                        <p>{{$product_discounts[0]['no_of_tickets']}}+ {{$curr}}{{ number_format($package->mc->price - (($package->mc->price * $product_discounts[0]['discount_percentage']) / 100), 2)}} &nbsp;&nbsp; {{$product_discounts[1]['no_of_tickets']}}+ {{$curr}}{{ number_format($package->mc->price - (($package->mc->price * $product_discounts[1]['discount_percentage']) / 100), 2)}}</p>
                                    @endif
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--<div class="discount_offers">-->
                <!--    <h7>Discounts</h7>-->

                <!--    <p>5+ Value &nbsp;&nbsp; 10+ RS</p>-->

                <!--</div>-->
                <div class="add_cart_grp">
                    <div class="input-group">
          <span class="input-group-btn">
              <button type="button" class="btn btn-danger btn-number minus_btn"  data-type="minus" data-field="quant[2]">
                <span class="fa fa-minus"></span>
              </button>
          </span>
                        <input id="no_of_tickets" type="text" name="quant[2]" class="form-control input-number text-center" value="1" min="1" max="100">
                        <span class="input-group-btn">
              <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]">
                  <span class="fa fa-plus"></span>
              </button>
          </span>
                    </div>
                    <button id="add_to_cart_multi_id" type="button" class="add_cart_btn add_to_cart_multi">Add to Cart <i class="fa fa-shopping-cart"></i></button>
                </div>
                <?php if($package->mc->end_date >= date('Y-m-d')){ ?>
                <div class="container social_btn on_lappy" id="linkss">

                    <form class="form-horizontal" method="POST" id="news_letter_forms"  >
                        @csrf

                        <input type="hidden" name="id" value=" {{ isset(Auth::user()->id)?(Auth::user()->id):('')}}">
                        <input type="hidden" name="products" value="{{$package->uniqid}}">
                        <input type="hidden" name="mc" value="{{$package->mc_id}}">
                        <input type="hidden" name="fromss" value="Social Share">

                        <!--  <div style="margin-right: 9px;">-->

                        <!--</div>-->
                    </form>
                    <!--  -->

                    <a href="#" id="free_entry" data-toggle="modal" data-target="#id05">Free entry</a>
                    <a href="{{url('')}}">
                        <!--<button style="font-size: 14px;background-color: #ee8322;color: white;white-space: nowrap;border: 0;     width: 52%;" class="btn btn-dark" type="button">-->
                        <i style="font-size:16px !important;" class="fa fa-arrow-left mr-2"></i>
                        Back
                        <!--</button>-->
                    </a>
                </div>
                <?php } ?>
                <h5 id="head" style="text-align: center;">Competition Ends In:</h5>
                <div class="timerr">
                    <div class="pro-page">
                        <span class="days" id="day"></span>
                        <div class="smalltext1">Days</div>
                    </div>
                    <div class="pro-page">
                        <span class="hours" id="hour"></span>
                        <div class="smalltext1">Hours</div>
                    </div>
                    <div class="pro-page">
                        <span class="minutes" id="minute"></span>
                        <div class="smalltext1">Minutes</div>
                    </div>
                    <div class="pro-page">
                        <span class="seconds" id="second"></span>
                        <div class="smalltext1">Seconds</div>
                    </div>
                    <p id="time-up"></p>
                </div>
                <div class="gallery_content">
                    <h4 class="text-center obvs on_lappy" style="font-size:10px;">See below for free entry method.</h4>
                    <?php
                    $t=tickets($package->mc->id,0,1);
                    $left =tickets($package->mc->id,0,0);

                    if($package->mc->max_tickets > 0){
                        $total =  ($t/$package->mc->max_tickets) * 100;
                        if ($total < 10) {
                            $total = $package->perc_of_dummy_tickets_sold();
                            $dummy_count = $package->dummy_tickets_count();
                            $sold_ticket =tickets($package->mc->id,0,1);
                            $remaning = $dummy_count + $sold_ticket ;
                            $left = $package->mc->max_tickets - $remaning;
                        }
                    }
                    else{
                        $total =  0;
                    }
                    ?>
                    <div class="" style="display:none;">
                        <div class="ticket-left-info"><span>0</span><span><?php
                                echo $left;
                                ?> Left</span><span>{{ $package->mc->max_tickets }}</span></div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="{{ $t}}"
                                 aria-valuemin="0" aria-valuemax="{{ $package->mc->max_tickets }}" style="width:{{ $total}}%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="back_btn" style="text-align: center;">
                    <a href="javascript:void(0)" class="btn btn-danger sun-btn" data-toggle="modal" data-target="#myModal" type="submit"> Share with friends</a>
                </div>
            </div>
            <div class="view-large-car">
                <div class="full-size-img">
                    @foreach($package->main_img as $key => $img)

                        <img id="expandedImg" src="<?php echo url("products/$img->package_id/$img->name");?>" class="img-fluid img-thumbnail"  />
                    @endforeach
                </div>

                <?php if($winner) { ?>
                <div class="modal" id="ferari">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- Modal-start -->
                            <div class="modal-headertop">
                                <h4 class="modal-title">{{$winner->title}}</h4>
                                <button style="    display: flex;justify-content: flex-end;" type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <!-- Modal images and description -->
                            <img src="<?php echo url("winnerimages/$winner->image");?>">
                            <div class="modal-body">
                                <p>{{$winner->description}} </p>
                            </div>
                            <!-- close button -->
                            <div class="modal-footerbottom">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                    <!--  model end/ -->
                </div>
                <?php } ?>

                <ul class="images_ul">
                    <?php $i=0; ?>
                    @foreach($package->image as $img)
                        <li>
                            <div class="view-car">
                                <?php $myString = $package->meta_keyword;
                                $alt = explode(',', $myString);
                                $pos = count($alt);
                                $count = $pos-1;
                                ?>
                                @if($i>$count)
                                    <img src="<?php echo url("products/$img->package_id/$img->name");?>" class="img-fluid img-thumbnail" onclick="myFunction(this);" alt=""/>

                                @else
                                    <img src="<?php echo url("products/$img->package_id/$img->name");?>" class="img-fluid img-thumbnail" onclick="myFunction(this);" alt="{{ltrim($alt[$i])}}"/>
                                @endif
                                <?php $i++ ?>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <div class="container carouusal" >


                    <!-- Each carousel needs a unique ID -->
                    <div id="carousel-id" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner" role="listbox">
                            @foreach(\App\PaksageImage::where('package_id', $package->id)->get() as $key => $img)
                                <div class="carousel-item mob_crousal @if($key == 0) active @endif ">
                                    <img src="<?php echo url("products/$package->id/$img->name");?>" class="img-fluid">
                                </div>
                            @endforeach
                        </div>

                        <ol class="carousel-indicators">
                            <li data-target="#carousel-" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <p class="text-xs-center">
                            <a class="" href="#carousel-id" role="button" data-slide="prev">
                                <span class="icon-prev" aria-hidden="true"><i class="fa fa-arrow-left"></i></span>
                            </a>&emsp;
                            <a class="l" href="#carousel-id" role="button" data-slide="next">
                                <span class="icon-next" aria-hidden="true"><i class="fa fa-arrow-right"></i></span>
                            </a>
                        </p>
                        <!-- /.text-center -->
                    </div>
                    <!-- /.carousel -->

                </div>
            </div>
        </div>

    <!--     <div class="gallery_content">
       <h4 class="text-center obvs" style="font-size:10px;">See below for free entry method.</h4>
      <?php
    $t=tickets($package->mc->id,0,1);
    $left =tickets($package->mc->id,0,0);

    if($package->mc->max_tickets > 0){
        $total =  ($t/$package->mc->max_tickets) * 100;
        if ($total < 10) {
            $total = $package->perc_of_dummy_tickets_sold();
            $dummy_count = $package->dummy_tickets_count();
            $sold_ticket =tickets($package->mc->id,0,1);
            $remaning = $dummy_count + $sold_ticket ;
            $left = $package->mc->max_tickets - $remaning;
        }
    }
    else{
        $total =  0;
    }
    ?>
        <div class="">
          <div class="ticket-left-info"><span>0</span><span><?php
    echo $left;
    ?> Left</span><span>{{ $package->mc->max_tickets }}</span></div>
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="{{ $t}}"
            aria-valuemin="0" aria-valuemax="{{ $package->mc->max_tickets }}" style="width:{{ $total}}%">
          </div>
        </div>
      </div>
    </div> -->
    </div>
</section>
<h4 class="text-center obvs on_mob text_alignmenet" style="font-size:10px;">See below for free entry method.</h4>
<?php if($package->mc->end_date >= date('Y-m-d')){ ?>
<div class="container social_btn on_mob" id="linkss">

    <form class="form-horizontal" method="POST" id="news_letter_forms"  >
        @csrf

        <input type="hidden" name="id" value=" {{ isset(Auth::user()->id)?(Auth::user()->id):('')}}">
        <input type="hidden" name="products" value="{{$package->uniqid}}">
        <input type="hidden" name="mc" value="{{$package->mc_id}}">
        <input type="hidden" name="fromss" value="Social Share">

        <!--  <div style="margin-right: 9px;">-->

        <!--</div>-->
    </form>
    <!--  -->





    <a href="https://prizemaker.com/">
        <!--<button style="font-size: 14px;background-color: #ee8322;color: white;white-space: nowrap;border: 0;     width: 52%;" class="btn btn-dark" type="button">-->
        <i style="font-size:16px !important;" class="fa fa-arrow-left mr-2"></i>
        Back
        <!--</button>-->
    </a>

    <!--<a href="javascript:void(0)" class="btn btn-danger sun-btn" data-toggle="modal" data-target="#myModal"  style="    border-radius: 0;" type="submit"> Share with friends</a>-->
    <!--<a href="javascript:void(0)" id="auto_select">Auto Select number</a>-->
    <a href="#" id="free_entry" data-toggle="modal" data-target="#id05">Free entry</a>
</div>
<?php } ?>

<section>



    <div class="container">

        <div class="container p-0">
            <div class="reviews_stats">
                <div class="tab">
                    <button id="defaultOpen" class="tablinks" onclick="openCity(event, 'desc')">Description</button>
                    <!--<button class="tablinks" onclick="openCity(event, 'stat')">Stats</button>-->
                </div>
                <div id="desc" class="reviews tabcontent text_set">
                    <!--<h3>Description</h3>-->
                    <p>{!! $package->description !!}</p>
                </div>

                <div id="stat" class="stats tabcontent">
                    <article class="cars-tiles">
                        <h3>Stats</h3>
                        <table border="1" class="carDetailsStatsTable">
                            <tbody>
                            @foreach($package->attibute->chunk(2) as $chunk)
                                <tr>

                                    @foreach ($chunk as $attr)
                                        <td><strong>{{ $attr->label }}</strong>
                                            <span>{{ $attr->attribute }}</span></td>
                                    @endforeach
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </article>
                </div>
            </div>
        </div>

        <div class="tabs tickets">
            <!-- <h3 class="tab_heading">lorem ispum</h3> -->
            <?php  $url = request()->segment(3); ?>
            <?php if($package->mc->end_date > date('Y-m-d H:i:s')){ ?>

        <?php } ?>
            <?php if($package->mc->end_date > date('Y-m-d H:i:s')){ ?>
            <div class="pick-btn" style="margin-top:25px; margin-right: 17px;" name="term&condition" id="checkbox">
            </div>
            <?php } ?>
            <div class="pick-btn" style="margin-right: 17px; margin-top:25px;">
                <div class="modal" id="id05">
                    <div class="modal-dialog" id="newwidth">
                        <div class="modal-content" style="width: 100%; margin:0;">
                        </div>
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title" style="color:#ee8322">Terms & Conditions</h4>
                            <button type="button" class="close" id="closed_term" style="display: flex;justify-content: flex-end;">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body" id="body-padding">
                            <div class="container thatsit" style="margin-bottom: 10px;">
                                <h4 style="color: #ee8322">Prize maker Ltd Company Number:  <b>12025866</b></h4>

                                <li style="list-style-type: none;"><strong><span style="font-size: 12.0pt;  color: #ee8322;">1 : Qualifying Persons</span></strong></li>

                                <p><span style="font-size: 12.0pt; color: #ee8322;">1.1&nbsp; &nbsp;&nbsp; &nbsp;</span><span style="font-size: 12.0pt;">Prize Maker Ltd, operate competitions &ndash; Free prize competitions resulting in the allocation of prizes in accordance
with these Terms and Conditions on the website www.prizemaker.com (the 'Website') - (the'Competition(s)').</span></p>

                                <p><span style="font-size: 12.0pt; color: #ee8322;">1.2&nbsp;&nbsp; &nbsp; &nbsp;</span><span style="font-size: 12.0pt;">The Competitions are open to all persons aged 16 and over and the age of majority in their country of residence excluding the Promoter's employees or members of their immediate family, agents or any other person who is connected with the creation or administration of our Competitions.</span></p>


                                <li style="list-style-type: none;"><strong><span style="font-size: 12.0pt; color: #ee8322;">2 : Legal Undertaking</span></strong></li>

                                <p><span style="font-size: 12.0pt; color: #ee8322;">2.1&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size: 12.0pt;">By entering a Competition the entrant ('Entrant', 'you', 'your(s)') will be deemed to have legal capacity to do so, you will have read and understood these Terms and Conditions and you will be bound by them and by any other requirements set out in any related promotional material.</span></p>


                                <p><span style="font-size: 12.0pt; color: #ee8322;">2.2&nbsp;&nbsp; &nbsp; &nbsp;</span><span style="font-size: 12.0pt;">These Competitions are governed by English Law and any matters relating to the Competition will be resolved under English Law and the Courts of England shall have exclusive jurisdiction.</span></p>


                                <p><span style="font-size: 12.0pt; color: #ee8322;">2.3&nbsp;&nbsp;&nbsp; &nbsp;</span><span style="font-size: 12.0pt;">In the event that you participate in a Competition online via the Website, and by accepting these Terms and Conditions you confirm that you are not breaching any laws in your country of residence regarding the legality of entering our Competitions. The Promoter will not be held responsible for any Entrant entering any of our Competitions unlawfully. If in any doubt you should immediately leave the Website and check with the relevant authorities in your country.</span></p>



                                <li style="list-style-type: none;"><span style="font-size: 12.0pt; color: #ee8322;"> <strong>3 : Competition Entry</strong></span></li>

                                <p><span style="font-size: 12.0pt; color: #ee8322;">3.1&nbsp;&nbsp;&nbsp; </span><span style="font-size: 12.0pt;">The Competitions may be entered Via our Website (<font style="background: transparent;color:blue;">www.prizemaker.com</font>) There will be a selection of competitions with various prizes.</span></p>


                                <p><span style="font-size: 12.0pt; color: #ee8322;">3.2&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size: 12.0pt;">Availability and pricing of Competitions and tickets is at the discretion of the Promoter and will be specified at the point of sale on our Website.</span></p>

                                <p><span style="font-size: 12.0pt; color: #ee8322;">3.<strong>3&nbsp;&nbsp;&nbsp;&nbsp;Your Prizemaker account(s)</strong></span></p>

                                <p><span style="font-size: 12.0pt;">In order to enter a Competition, you will need to register an account with us.</span></p>

                                <p><span style="font-size: 12.0pt;"><strong style="color: #ef8322;font-weight: 500;">(a)&nbsp;&nbsp; &nbsp; &nbsp;</strong> You can register an account online at www.Prizemaker.com</span></p>

                                <p><span style="font-size: 12.0pt;"><strong style="color: #ef8322;font-weight: 500;">(i)&nbsp;&nbsp; &nbsp; &nbsp;</strong> To register an account online you will be asked to provide an email address or sign in via a social media account, such as Facebook,</span></p>
                                <p><span style="font-size: 12.0pt;">Twitter or Google (&lsquo;Social Media Account&rsquo;)</span></p>

                                <p><span style="font-size: 12.0pt;"><strong style="color: #ef8322;font-weight: 500;">(b)&nbsp;&nbsp; &nbsp; &nbsp;</strong> Please note that your email address or Social Media Account will also be the username that you use to log in to your account. Each account can only have one username attributed to it at any given time ("Prizemaker Account "). Therefore, you cannot attribute multiple email addresses, or Social Media Accounts to your Prizemaker Account. For example:</span></p>


                                <p><span style="font-size: 12.0pt;"><strong style="color: #ef8322;font-weight: 500;">(i)&nbsp;&nbsp; &nbsp; &nbsp;</strong> You cannot have an email address and a Social Media Account attributed to your Prizemaker Account.</span></p>

                                <p><span style="font-size: 12.0pt;"><strong style="color: #ef8322;font-weight: 500;">(ii)&nbsp;&nbsp; &nbsp; &nbsp;</strong> You cannot have two or more email addresses attributed to your Prizemaker Account. You can however, change your username for your Prizemaker Account by logging into your Prizemaker Account. For example, you can create your Prizemaker Account using one email address and at a later date change your username for your Prizemaker Account to another email address. However, if you create multiple accounts using different email addresses or Social Media Accounts, each username will be treated as a separate Prizemaker Account.</span></p>


                                <p><span style="font-size: 12.0pt; color: #ee8322;">3.4&nbsp;&nbsp; &nbsp; &nbsp;</span><span style="font-size: 12.0pt;">When playing a competition on our website, follow our on-screen instruction to:</span></p>

                                <p><span style="font-size: 12.0pt; color: #ee8322;">(a)&nbsp;&nbsp; &nbsp; &nbsp; </span><span style="font-size: 12.0pt;">Select the competition(s) you wish to enter, choose (Select) your prize from that competition and pick one or more of the available numbered tickets.</span></p>

                                <p><span style="font-size: 12.0pt; color: #ee8322;">(b)&nbsp;&nbsp; &nbsp; &nbsp; </span><span style="font-size: 12.0pt;">When you are ready to purchase you Ticket(s), head towards the cart and provide your payment details. You will need to check your details carefully and tick the declaration at checkout, confirming you have read and understood the Competition Terms and Conditions.</span></p>


                                <p><span style="font-size: 12.0pt; color: #ee8322;">(c)&nbsp;&nbsp; &nbsp; &nbsp; </span><span style="font-size: 12.0pt;">Once your payment has cleared we will email you to confirm your entry into the competition. Please note you will not be deemed entered in the competition until you have received our confirmation email.</span></p>


                                <p><span style="font-size: 12.0pt; color: #ee8322;">(d)&nbsp;&nbsp; &nbsp; &nbsp; </span><span style="font-size: 12.0pt;">For free entrants please follow (10) of our terms and conditions</span></p>

                                <p><span style="font-size: 12.0pt; color: #ee8322;">(e)&nbsp;&nbsp; &nbsp; &nbsp; </span><span style="font-size: 12.0pt;">Each entrant can enter a competition up to the amount of 5 entries, per each competition</span></p>

                                <p><span style="font-size: 12.0pt; color: #ee8322;">3.5&nbsp;&nbsp; &nbsp; &nbsp; </span><span style="font-size: 12.0pt;">The promotor reserves the right to refuse or disqualify any incomplete Entries If it has reasonable grounds for believing that an Entrant has contravened any of these Terms and Conditions</span></p>


                                <p><span style="font-size: 12.0pt; color: #ee8322;">3.6&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size: 12.0pt;">To the extent permitted by applicable law, all Entries become our property and will not be returned.</span></p>

                                <li style="list-style-type: none;"><span style="font-size: 12.0pt; color: #ee8322;"> <strong>4 :&nbsp;&nbsp;&nbsp;&nbsp; Promotion Periods</strong></span></li>

                                <p><span style="font-size: 12.0pt; color: #ee8322;">4.1&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size: 12.0pt;">Each competition will run for a specified period. Please see each Competition for details of start and end times and dates (‘Promotion Period(s)’)</span></p>

                                <p><span style="font-size: 12.0pt; color: #ee8322;">4.2&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size: 12.0pt;">Each Competition can have an extended end time, so for example if the original competition was for 30 days it can be extended once for another 30 days . If the competition is
not sold out after the extended time, then the Winner will be awarded  as follows.
<br>
70% cash prize of the amount of money taken during this competition. Settlement times please see (7)F.
</span></p>


                                <p><span style="font-size: 12.0pt; color: #ee8322;">4.3&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size: 12.0pt;">In the event that the Promoter closes a Competition early, the Winner will be selected from all valid and eligible Entries received by the Promoter prior to the date of closure,
except that the Promoter reserves the right, at its sole discretion, to close a Competition early without selecting a Winner. In the event that a Competition is closed without
selecting a Winner, the Promoter will give all entrants Game Credit to enable them to replay equivalent tickets in a subsequent competition. The Promoter also reserves the right
at its sole discretion to extend the closing date of any Competition as stated in (4.2)

</span></p>


                                <li style="list-style-type: none;"><span style="font-size: 12.0pt; color: #ee8322;"> <strong>5 : Winners</strong></span></li>
                                <p><span style="font-size: 12.0pt; color: #ee8322;">5.1&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size: 12.0pt;">The Promoter will attempt to contact Winner(s) using the telephone numbers and email address provided at the time of Entry (or as subsequently updated) and held securely in our database. It is the Entrant's sole responsibility to check and update these details. If for any reason they are taken down incorrectly, the Promoter will not be held responsible. Entrants must carefully check their contact details have been recorded correctly.</span></p>



                                <p><span style="font-size: 12.0pt; color: #ee8322;">5.2&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size: 12.0pt;">If for any reason the Promoter is unable to contact a Winner within 5 days (which may be extended at the sole discretion of the Promoter) of the end of a Competition or the Winner fails to confirm acceptance of the prize or the Winner is disqualified as a result of contravening any of the Terms and Conditions, the Winner will forfeit the prize and the prize will remain the property of Prizemaker ltd.</span></p>


                                <p><span style="font-size: 12.0pt; color: #ee8322;">5.3&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-size: 12.0pt;">The Winners will be required to send a copy of their passport to the Promoter to confirm their identity, age and also to prove that if the purchase was made by credit card that the card was legally theirs or that they had authorisation to use it, before any prize will be paid or delivered. Any failure to meet these obligations may result in the Winner being disqualified and the Promoter choosing an alternate winner.</span></p>


                                <p><span style="font-size: 12.0pt; color: #ee8322;">5.4&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size: 12.0pt;">All Winners will also be required to provide photographs and/or pose for photographs and videos, which may be used in future marketing and public relations by the Promoter in connection with the Competition and in identifying them as a winner of a Competition.</span></p>

                                <p><span style="font-size: 12.0pt; color: #ee8322;">5.5&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size: 12.0pt;">Following receipt and verification of the details requested above by the Promoter, the Winners will be contacted in order to make arrangements for delivery of the prize.</span></p>


                                <li style="list-style-type: none;"><span style="font-size: 12.0pt; color: #ee8322;"> <strong>6 : Competition Judgment</strong></span></li>
                                <p><span style="font-size: 12.0pt; color: #ee8322;">6.1&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-size: 12.0pt;">The winning Entrant will be selected at Random using Google Random Number Generator live on Facebook.</span><span style="font-size: 12.0pt;">&nbsp;</span></p>

                                <li style="list-style-type: none;"><span style="font-size: 12.0pt; color: #ee8322;"> <strong>7 : Competiton Prizes</strong></span></li>
                                <p><span style="font-size: 12.0pt; color: #ee8322;">7.1&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size: 12.0pt;">Prizemaker Ltd, operates prize competitions and offers many different prizes. For the avoidance of doubt, there will be only one prize awarded for each competition.</span></p>
                                <p><span style="font-size: 12.0pt; color: #ee8322;">(a)&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size: 12.0pt;">During the course of the Competition, If due to circumstances beyond the promoter’s control, the promotor is unable to provide your selected prize, the promotor reserves the
right to award a selection of substitute prizes of equal or greater value.

</span></p>

                                <p><span style="font-size: 12.0pt; color: #ee8322;">(b)&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size: 12.0pt;">The vehicles we promote as prizes consist of both new and pre-registered; all (registered) vehicles will be pre-registered displaying delivery mileage only.</span></p>
                                <p><span style="font-size: 12.0pt; color: #ee8322;">(c)&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-size: 12.0pt;">Prize winner would like to take delivery of the prize they have selected and not use the cash alternative; once this is confirmed an order will be placed by the promoter.
Delivery Terms: For Items that are available, please allow up to 30 days for delivery.  Please note some prizes are factory order and delivery may take up to 4 Months for delivery.
The promotor will not be responsible for any manufacturing delays.

</span></p>

                                <p><span style="font-size: 12.0pt; color: #ee8322;">(d)&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size: 12.0pt;">In the UK the Prize will be delivered with UK VAT paid. In the EU the Prize will be delivered with UK VAT paid but any further costs
additional VAT/taxes/import duties/registration costs due in the destination/country of final registration) will be the responsibility of the Prize Winner.

<br>In all other countries the Prize will be shipped (net of all taxes) to the nearest port and any applicable import duties, registration costs,
or any further taxes or duties of any nature due in the destination country will be the responsibility of the Prize Winner. The Promoter
reserves the right not to deliver to certain countries. Please note that all our cars are supplied in the UK and therefore if exported may not be
road legal in the destination country. It is the Prize Winner's responsibility to check this and choose an alternative car or take the cash
alternative if appropriate.

<br>For the avoidance of doubt, the maximum value that The Promoter will be liable to pay for or towards any prize is the UK RRP (or local
currency equivalent) of the prize as advertised on our website. Prizemaker ltd will only transact with manufacturer recommended principal dealers.

</span></p>

                                <p><span style="font-size: 12.0pt; color: #ee8322;">(e)&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-size: 12.0pt;">The Winner will be fully responsible for the Prize after taking delivery. Please note, all vehicles prizes, it will be the winner’s responsibility to insure at the point of
delivery/collection. It will be the winner’s responsibility to make sure they have the correct driving licence entitlement for their Vehicle.<br>
For the avoidance of doubt the promoter will not be responsible for any Insurance or aftermarket care after delivery or collection has taken place.

</span></p>

                                <p><span style="font-size: 12.0pt; color: #ee8322;">(f)&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size: 12.0pt;">Cash Alternative: Should the Winner not wish to take delivery of the Prize, a Cash alternative can be claimed. The cash alternative is 70% of the total money raised from ticket
sales within that competition. Cash alternatives settlements are made 30 days after the competition end date.
</span></p>


                                <li style="list-style-type: none;"><span style="font-size: 12.0pt; color: #ee8322;"> <strong>8 : Electronic Communications</strong></span><strong><span style="font-size: 12.0pt;"></span></strong></li>
                                <p><span style="font-size: 12.0pt; color: #ee8322;">8.1&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size: 12.0pt;">No responsibility will be accepted for failed, partial or garbled computer transmissions, for any computer, telephone, cable, network, electronic or
internet hardware or software malfunctions, failures, connections, availability, for the acts or omissions of any service provider, internet accessibility
or availability or for traffic congestion or unauthorised human act, including any errors or mistakes. The Promoter shall use its best endeavours
to award the prize for a Competition to the correct Entrant. If due to reasons of hardware, software or other computer related failure, or due to
human error the prize is awarded incorrectly, the Promoter reserves the right to reclaim the Competition prize and award it to the correct Entrant,
at its sole discretion and without admission of liability. </span></p>
                                <p><span style="font-size: 12.0pt; color: #ee8322;">8.2&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size: 12.0pt;">The Promoter reserves the right at its sole discretion to extend the closing date of any competition, if for any reason any aspect of the competition
is not capable of running as planned, including by reason of infection by computer virus, network failure, bugs, tampering, unauthorised
intervention, fraud, technical failures or any cause beyond the control of the Promoter which corrupts or affects the administration, security,
fairness, integrity or proper conduct of the Competition. The Promoter may in its sole discretion cancel, terminate, modify or suspend a
Competition, or invalidate any affected entries. In the event that the Promoter closes a Competition early, the Winner may be selected from all
valid and eligible Entries received by the Promoter prior to the date of closure, except that the Promoter reserves the right, at its sole discretion,
to close a Competition early without selecting a Winner. In the event that a Competition is closed without selecting a Winner, the Promoter will
give all entrants Prizemaker Credit to enable them to replay equivalent tickets in a subsequent competition.
</span></p>
                                <p><span style="font-size: 12.0pt; color: #ee8322;">8.3&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size: 12.0pt;">The Promoter shall not be liable for any economic or other consequential loss suffered or sustained to any persons to whom an award has been
incorrectly made, and no compensation shall be due. The Promoter shall use its best endeavours to ensure that the software and website(s) used
to operate its Competitions perform correctly and accurately across the latest versions of popular internet, tablet and mobile browsers. For the
avoidance of doubt, only the tickets recorded in our systems, howsoever displayed or calculated, shall be entered into the relevant
Competition and the Promoter shall not be held liable for any competition entries that occur as a result of malfunctioning software or other event.
Competition Tickets may be checked at any time by accessing your account at Prizemaker.com.
</span></p>
                                <li style="list-style-type: none;"><span style="font-size: 12.0pt; color: #ee8322;"> <strong>9 : Data Protection Notice</strong></span></li>
                                <p><span style="font-size: 12.0pt; color: #ee8322;">9.1&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-size: 12.0pt;">Any personal data that you supply to the Promoter or authorise the Promoter to obtain from a third party, for example, a credit card company, will be used by the Promoter to administer the Competition and fulfil prizes where applicable. In order to process, record and use your personal data the Promoter may disclose it to :</span></p>

                                <p><span style="font-size: 12.0pt;"><strong style="color: #ef8322;font-weight: 500;">(i)&nbsp;&nbsp; &nbsp; &nbsp;</strong>    any credit card company whose name you give;</span></p>
                                <p><span style="font-size: 12.0pt;"><strong style="color: #ef8322;font-weight: 500;">(ii)&nbsp;&nbsp; &nbsp; &nbsp;</strong>  any person to whom the Promoter proposes to transfer any of the Promoter's rights and/or responsibilities under any agreement the Promoter may have with you;</span></p>
                                <p><span style="font-size: 12.0pt;"><strong style="color: #ef8322;font-weight: 500;">(iii)&nbsp;&nbsp; &nbsp; &nbsp;</strong> any person to whom the Promote proposes to transfer its business or any part of it;</span></p>
                                <p><span style="font-size: 12.0pt;"><strong style="color: #ef8322;font-weight: 500;">(iv)&nbsp;&nbsp; &nbsp; &nbsp;</strong> comply with any legal or regulatory requirement of the Promoter in any country; and</span></p>
                                <p><span style="font-size: 12.0pt;"><strong style="color: #ef8322;font-weight: 500;">(v)&nbsp;&nbsp; &nbsp; &nbsp;</strong> prevent, detect or prosecute fraud and other crime. In order to process, use, record and disclose your personal data the Promoter may need to transfer such information outside the United Kingdom, in which event the Promoter is responsible for ensuring that your personal data continues to be adequately protected during the course of such transfer.</span></p>


                                <li style="list-style-type: none;" id="scroll_to"><span style="font-size: 12.0pt; color: #ee8322;"> <strong>10 : Free Entry Method</strong></span></li>

                                <p><span style="font-size: 12.0pt; color: #ee8322;">10.1&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size: 12.0pt;">To enter the competition for free, create an account and send a post card with your Name, Address, DOB, Contact phone number, desired number of choice, clearly state the
competition you would like to enter. Post to: 160 Kemp House, City Road, London, EC1V 2NX<br>
Postal entries are limited to one competition entrant per postcard. The Entrant must specify which competition they wish to enter; also they should specify which number/s they
desire. If the number/s not available by the time the postal entry has arrived and been processed a replacement random number/s will be allocated. Promoter will process all free entries on a Monday of each week and will be the sole responsibility for a staff member on this day. The free entries will be treated in the exact same manner as the paid entries, in addition the free entries will be entered into the ‘Live Draws’ in the same manner. Standard competition
terms and conditions apply for free entries.
</span></p>


                                <li style="list-style-type: none;"><span style="font-size: 12.0pt; color: #ee8322;"> <strong>11 : Refer a Friend: Commission Payments</strong></span></li>


                                <p><span style="font-size: 12.0pt; color: #ee8322;">11.1&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size: 12.0pt;">Once you have referred a friend you will receive a commission on every ticket they purchase.
The commission rate is set by the promoter; the promoter can increase/ decrease
the commission paid to you at any time without informing you. Commission rates are set on account performance.<br>
Commission is paid to you as a credit to your account. This cannot be cashed as a money payment.</span></p>
                                <li style="list-style-type: none;"><span style="font-size: 12.0pt; color: #ee8322;"> <strong>12 : Business Referrals: Commission Payments.</strong></span></li>


                                <p><span style="font-size: 12.0pt; color: #ee8322;">12.1&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size: 12.0pt;">Once approved for a Business account, you can start to refer your customers to Prizemaker. You can do this using the social media links we provide.
Once your customer has signed up you will receive a commission on every ticket your referrals purchase.<br>
The Commission rate is set by the promotor; the promoter can increase/decrease the commission rate paid to you at any time without informing you.<br>
Commission rates are set on account performance. We allow business user to request payment of their commission, this will be done via bank transfer.
Minimum request amount £500
</span></p>

                                <li style="list-style-type: none;"><span style="font-size: 12.0pt; color: #ee8322;"> <strong>13 : Free Referrals Ticket.</strong></span></li>

                                <p><span style="font-size: 12.0pt; color: #ee8322;">13.1&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size: 12.0pt;">What happens when you share one of our competitions with your friends or customers? When you post this to your social media page, it falls on to your time line. <br>
Once one of your friends or customers click your post it will take them to a landing page where they can sign up, upon signing up they will receive a free ticket to our free ticket draw.
This gives them the chance to win a free ticket into the main draw of the competition you posted/shared.
</span></p>
                                <li style="list-style-type: none;"><span style="font-size: 12.0pt; color: #ee8322;"> <strong>14 : Contact Prizemaker: </strong></span></li>

                                <p><span style="font-size: 12.0pt;">
    We are always interested in your feedback, please email your thoughts.<br>
    160 Kemp House,<br>
    City Road, <br>
    London,<br>
    EC1V 2NX<br>
    <font><i style="font-size: 16px !important;" class="fa fa-envelope"></i> Email:
        <a class="mail-btn" href="mailto:Info@prizemaker.com" target="_top">Info@prizemaker.com</a><br></font>
   <font><i style="font-size: 19px !important;" class="fa fa-phone"></i> Tel:<a class="mail-btn" href="tel: 02039625722"> 02039625722</a></font>
</span></p>
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" id="close_term" style="width: 20%;">Close</button>
                        </div>

                    </div>
                </div>
            </div>
            <ul class="nav nav-tabs" role="tablist" >
                <div class="auto_select_btn" style="display:none;">
                    <a href="javascript:void(0)" id="auto_select">Auto Select number</a>
                </div>
                <?php
                $tabcontent='';
                $number=Config::get('constants.ticket_chunks');
                $start=1;
                $end=$number;
                $class='active show';

                foreach($package->mc->ticket->whereIn('status',[0,1,2])->chunk($number) as $key=> $tickets){
                if($key > 0){
                    $class='';
                    $start=($end+1);
                    $end+=$number;
                    $end=$end;
                }

                $tabcontent.='<div  style="display:none;" role="tabpanel" class="tab-pane fade '.$class.'" id="tab'.$start.'"><div class="tab-details-wrapper">';
                foreach ($tickets as $t => $ticket) {
                    $cart_class='';
                    $class_color='red-btn';
                    $main_class='my_tickets';
//       if (Auth::check()) {
//   // Get the currently authenticated user's ID...
//             $id = Auth::id();

//             // if($ticket->user_id==$id)
//             //  $class_color="yellow-btn";
// }
                    $ticket_status = 0;
                    if($ticket->status==2){
                        $cart_class='yellow-btn delet_cart_item';
                        $class_color=$main_class='';
                        $ticket_status = $ticket->status;
                    }
                    if($ticket->status==1){

                        $main_class.=' yellow-btn';
                        $ticket_status = $ticket->status;
                    }
                    else if ($ticket->dummy_sold == '1') {
                        $main_class.=' yellow-btn';
                        $ticket_status = 1;
                    }
                    $tabcontent.='<button data-status="'.$ticket_status.'"  style="cursor:pointer; color:white;" data-id="'.$ticket->id.'"  class="'.$class_color.' '.$cart_class.' '.$main_class.' ">'.$ticket->code.'</button>';
                }
                $tabcontent.='</div></div>';
                ?>


                <li class="nav-item" style="display:none;">
                    <a class="nav-link {{ $class }}" href="#tab{{ $start }}" role="tab" data-toggle="tab">{{ $start }}-{{ $end}}</a>
                </li>
                <?php } ;?>
            </ul>
        </div>
        <!-- Tab panes -->
        <!-- <button class="red-btn">1</button>
        <button class="yellow-btn">2</button>
        <button class="grey-btn">15</button> -->
        <div class="tab-content">
            <?php echo $tabcontent; ?>

        </div>

    </div>


    <!--auto ticket rec modal-->
    <div class="modal" tabindex="-1" role="dialog" id="auto_ticket_rec_modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 100%;">
                <div class="modal-header">
                    <h5 class="modal-title" id="rec_modal_title">Recommended Ticket</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin: 0;padding: 6px;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    $rec = \App\Ticket::where('mc_id', $package->mc_id)->where('user_id', 0)->where('status', 0)->where('product_id', 0)->where('dummy_sold', 0)->get();
                    if(sizeof($rec) == 0){?>
                        <script>
                            $("#rec_modal_title").html('Competition Alert');
                        </script>
                        <p>Competition not available.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    <?php }else{
                        $rec = \App\Ticket::where('mc_id', $package->mc_id)->where('user_id', 0)->where('status', 0)->where('product_id', 0)->where('dummy_sold', 0)->get();
                        if(sizeof($rec) > 0){
                            $rec = $rec->random();
                            $rec_ticket = $rec->code;
                            $rec_ticket_id = $rec->id;
                        }
                         ?>
                        <p>We Recommend Ticket <span style="color:#ee8322">#{{ $rec_ticket }}</span> to be lucky for you.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" onclick="add_to_cart_rec_number({{$rec_ticket}},{{$rec_ticket_id}})" style="padding: 6px;">Add to Cart</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    <?php }
                    ?>
            </div>
        </div>
    </div>




    <!-- free ticket sign up modal -->

<!-- <div id="id077" class="modal fade"  role="dialog">

  <form id="reg_form" class="modal-content" action="{{ url('register_user')}}" method="post">
    <h1 id="register_head">Register</h1>
    <span onclick="document.getElementById('id077').style.display='none'" class="close" title="Close Modal">&times;</span>
      <p>Please fill in this form to create an account.</p>
    <div class="container cust_con">

      <label for="email">Name</label>
      <input type="text" placeholder="Enter Name" name="name" required>

      <label for="email" >Email</label>
      <input class="em"  type="email" placeholder="Enter Email" name="email" required>

      <label for="psw-repeat" class="mt-2">Phone Number</label>
      <input class="nm" type="number" placeholder="Phone Number" name="phone" required>

      <p>By creating an account you agree to our <br><a href="{{url('term_condition')}}" style="color: #298c42; border-bottom: 1px solid #298c42; text-decoration: none;">Terms & Privacy</a></p>

      <div class="clearfix">
        <button type="submit" class="signupbtn" id="sub">Sign Up</button>
        <div class="loader" style="margin: 0 auto; display: none"></div>
      </div>
    </div>
  </form>
</div> -->
    <!-- free ticket sign up modal -->


    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content cust_modal">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Social Links</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
            <?php
            $user_type = 'individual';

            if (Auth::check() && Auth::user()->is_business_profile == '1')
            {
                $user_type = 'business';
            }
            ?>
            <!-- Modal body -->
                <div class="modal-body pt-0">
                    <img style="width: 100%; margin-bottom: 10px;" class="img-responsive" src="{{ url('frontend/images/share-and.png') }}">
                    @if(Auth::check())
                        <img style="width: 100%; margin-bottom: 10px;" class="img-responsive" src="{{ url('frontend/images/click.png') }}">
                    @endif
                    <div id="social-links">

                        <ul>

                            @if(Auth::check())
                                <li><a href="https://www.facebook.com/sharer/sharer.php?u={{urlencode(url('product/refer/'.$package->slug.'/'.$user_type.'/'.Auth::user()->reference_id.'/facebook'))}}" class="social-button" type="facebook" id="facebook-share"><span class="fa fa-facebook-official"></span></a></li>
                                <li><a href="https://twitter.com/intent/tweet?text=my share text&amp;url={{urlencode(url('product/refer/'.$package->slug.'/'.$user_type.'/'.Auth::user()->reference_id.'/twitter'))}}" class="social-button" type="twitter" id="twitter-share"><span class="fa fa-twitter"></span></a></li>
                            @else
                                <p>Please login for share with friend</p>
                        @endif
                        <!-- <li><a href="https://plus.google.com/share?url=http://jorenvanhocht.be" class="social-button " id=""><span class="fa fa-google-plus"></span></a></li>
<li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://jorenvanhocht.be&amp;title=my share text&amp;summary=dit is de linkedin summary" class="social-button " id=""><span class="fa fa-linkedin"></span></a></li>
<li><a href="https://wa.me/?text=http://jorenvanhocht.be" class="social-button " id=""><span class="fa fa-whatsapp"></span></a></li>  -->
                        </ul>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="weekly_winners">
<!-- <h3>Related Competitions</h3>
<div class="container">
<ul class="container">
@foreach($package->related as $prod)
    <?php
    //                  echo "<pre>";
    // print_r($package->related);
    // exit;
    ?>
        <li>
            <a href="{{ url('product/detail/'.$prod->uniqid) }}">
                                <div class="car">
                                    <div class="featured_img">
                                          @foreach($prod->images as  $key=> $img)

        @if($key >0)
            @break
        @endif
            <img src="<?php //echo url("products/$img->package_id/$img->name");?>">
                                        @endforeach
        <div class="purple_tag">
            <img src="{{ url('frontend/images/purple_tag.png') }}">
<p><?php  //echo $curr; ?> {{ $prod->package->price }}</p>
                                        </div>
                                        <div class="More_featured_content">
                                            <h4>{{ $prod->package->name }}</h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                         @endforeach
    </div> -->
</section>
<script src="{{url('frontend/js/jquery.countdown.min.js')}}"></script>
<script>
    $('#sign-up-free').click(function(){
        $('#id06').modal('show');
    });
</script>




<script>
    //plugin bootstrap minus and plus
    //http://jsfiddle.net/laelitenetwork/puJ6G/
    $('.btn-number').click(function(e){
        e.preventDefault();

        fieldName = $(this).attr('data-field');
        type      = $(this).attr('data-type');
        var input = $("input[name='"+fieldName+"']");
        var currentVal = parseInt(input.val());
        if (!isNaN(currentVal)) {
            if(type == 'minus') {

                if(currentVal > input.attr('min')) {
                    input.val(currentVal - 1).change();
                }
                if(parseInt(input.val()) == input.attr('min')) {
                    $(this).attr('disabled', true);
                }

            } else if(type == 'plus') {

                if(currentVal < input.attr('max')) {
                    input.val(currentVal + 1).change();
                }
                if(parseInt(input.val()) == input.attr('max')) {
                    $(this).attr('disabled', true);
                }

            }
        } else {
            input.val(0);
        }
    });
    $('.input-number').focusin(function(){
        $(this).data('oldValue', $(this).val());
    });
    $('.input-number').change(function() {

        minValue =  parseInt($(this).attr('min'));
        maxValue =  parseInt($(this).attr('max'));
        valueCurrent = parseInt($(this).val());

        name = $(this).attr('name');
        if(valueCurrent >= minValue) {
            $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        if(valueCurrent <= maxValue) {
            $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the maximum value was reached');
            $(this).val($(this).data('oldValue'));
        }


    });
    $(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
            // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
            // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
</script>





<script type="text/javascript">
    $('#closed_term').click(function(){
        $('#id05').modal('hide');
    });
    $('#close_term').click(function(){
        $('#id05').modal('hide');
    });
    //     const second = 1000,
    //       minute = second * 60,
    //       hour = minute * 60,
    //       day = hour * 24;
    // var new_date="<?php echo date('M d, Y H:i:s',strtotime($package->mc->end_date)) ;?>";
    // let countDown = new Date(new_date).getTime(),
    //     x = setInterval(function() {
    //       let now = new Date().getTime(),
    //           distance = countDown - now;
    //       document.getElementById('days').innerText = Math.floor(distance / (day)),
    //         document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
    //         document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
    //         document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);


    //     }, second)

    // $("#free_entry").click(function() {
    //     $('#id05').modal('show');
    //     $target = $('#scroll_to');
    //     $('#id05').animate({
    //         scrollTop: $target.offset().top + 'px'
    //     }, 'fast');
    // });
</script>

<!--<script src="{{url('frontend/js/jquery.countdown.min.js')}}"></script>-->
<?php $cm_endte = DB::table('multi_competition')->where('id',$package->mc_id)->first();
$enddate = $cm_endte->end_date;
$stopdates = date('Y-m-d H:i:s', strtotime($enddate . '+11 hours'));
?>
<script>
    $('#example').countdown({
        date: '<?php echo $stopdates ;?>',
        offset: -8,
        day: 'Day',
        days: 'Days'
    }, function () {
        // alert('Done!');
    });
</script>
<?php $cm_endte = DB::table('multi_competition')->where('id',$package->mc_id)->first();
$enddate = $cm_endte->end_date;
$stopdates = date('Y-m-d H:i:s', strtotime($enddate . '+24 hours'));
?>
<script>
    var new_date="<?php echo date('M d, Y H:i:s',strtotime($stopdates)) ;?>";
    var deadline = new Date(new_date).getTime();
    var x = setInterval(function() {
        var currentTime = new Date().getTime();
        var t = deadline - currentTime;
        var days = Math.floor(t / (1000 * 60 * 60 * 24));
        var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60));
        var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((t % (1000 * 60)) / 1000);
        document.getElementById("day").innerHTML =days ;
        document.getElementById("hour").innerHTML =hours;
        document.getElementById("minute").innerHTML = minutes;
        document.getElementById("second").innerHTML =seconds;
        if (t < 0) {
            clearInterval(x);
            document.getElementById("time-up").innerHTML = "TIME UP";
            document.getElementById("day").innerHTML ='0';
            document.getElementById("hour").innerHTML ='0';
            document.getElementById("minute").innerHTML ='0' ;
            document.getElementById("second").innerHTML = '0';
        }
    }, 1000);
</script>
<script type="text/javascript">

    $(document).on('submit','#news_letter_forms',function(e){
        e.preventDefault();
        var fdata = $(this).serialize();
        $('#myModal').modal('show');

        // $.ajax({
        //     type: "POST",
        //     headers: {
        //         'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
        //     },
        //     url: '{{ url("MultiCompetitions/freecomp")}}',
        //     data:  $(this).serialize(),
        //     success: function ( msg ) {
        //         $('#myModal').modal('show');
        //     }
        // });
    });

    $('.social-button').click(function(){

        var social_btn = $(this).attr('type');

        console.log(social_btn);
        //social_btn = social_btn.substring(0, social_btn.indexOf("-share"));
        $('input[name="fromss"]').val(social_btn);
        var fdata = $('#news_letter_forms').serialize();

        $.ajax({
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
            },
            url: '{{ url("MultiCompetitions/freecomp")}}',
            data:  fdata,
            success: function ( msg ) {
                $('#myModal').modal('show');
            }
        });


    });



</script>

<!-- unauth add to cart & remove from cart-->
<!--<script type="text/javascript">-->
<!--var html='<tr id="msg"><td colspan="5" class="text-center" ><div class="alert alert-danger">Your cart is empty</div></td></tr>';-->
<!--$(document).on('click','#auto_select',function(){-->

<!--  var len = $("button.my_tickets[data-status=0]").length;-->
<!--// alert(len);-->
<!--  if(len==0)-->
<!--  {-->
<!--     swal("Tickets not available", "All ticket are sold", "warning");-->
<!--  }else{-->
<!--var random = Math.floor( Math.random() * len ) + 1;-->
<!--$("button.my_tickets[data-status=0]").eq(random).click();-->
<!--console.log (random);-->
<!--  }-->
<!--});-->

<!--$(document).on('click','button.add_cart_btn',function(){-->
<!--  var no_of_tickets= document.getElementById('no_of_tickets').value;-->
<!--  var package_id={{ isset($package->id) ? $package->id:0  }};-->
<!--  $.ajax({-->
<!--    type:'post',-->
<!--    url: '{{ url("ticket/add_to_cart_unauth")}}',-->
<!--    data:{ no_of_tickets:no_of_tickets, package_id:package_id,"_token": "{{ csrf_token() }}" },-->
<!--    context:this,-->
<!--    success: function(ticket){-->
<!--      if(ticket.success){-->
<!--        if(ticket.cart){-->
<!--            $('#cart-data').html(ticket.cart);-->
<!--            $('#msg').hide();-->
<!--            swal("Ticket Added ", " Ticket # " +ticket_number+ " successfully added to cart", "success");-->
<!--          }else{-->
<!--            $('#cart-data').html('html');-->

<!--          }-->
<!--          $('#similar_products').html(ticket.similar_items);-->
<!--          if(ticket.similar_items){-->
<!--        $('#cont').show();  -->
<!--        }else{-->
<!--          $('#cont').hide();-->
<!--        }-->

<!--        $(this).removeClass('red-btn my_tickets').addClass('yellow-btn delet_cart_item');-->
<!--        $(this).attr('data-status',2);-->
<!--        $('.cart-counter').text(ticket.total_tickets);-->
<!--        $('.total').text('<?php echo Config::get("constants.currency");?>'+ticket.total);-->
<!--        if(ticket.total==0){-->
<!--          $('.cust_cart_check').hide();-->
<!--        }else{-->
<!--          $('.cust_cart_check').show();-->
<!--        }-->
<!--      }else{-->
<!--        swal("Error", ticket.error_messages , "error");-->
<!--      }-->

<!--    },-->
<!--    error: function(){},-->
<!--  });-->
<!--});-->
<?php if(!isset($_COOKIE['auto_ticket_rec_modal'.$package->id])){
    setcookie("auto_ticket_rec_modal".$package->id, 1, time() + (180), "/");
    echo "<script>
                $(document).ready(function () {
                setTimeout(function() {
                    $('#auto_ticket_rec_modal').modal('show');
                }, 5000);
                });
            </script>";
}?>
<script>

    function add_to_cart_rec_number(ticket_number, ticket_id){
        var no_of_tickets = 0;
        var ticket_id = ticket_id;
        var ticket_number = ticket_number;
        var multi = 0;
        var single = 1;
        var package_id={{ isset($package->id) ? $package->id:0  }};

        $.ajax({
            type:'post',
            url: '{{ url("ticket/add_to_cart")}}',
            data:{ set_cookie:1, ticket_id:ticket_id, multi:multi, single:single, no_of_tickets:no_of_tickets, package_id:package_id,"_token": "{{ csrf_token() }}" },
            context:this,
            success: function(ticket){
                $('#auto_ticket_rec_modal').modal('hide');
                console.log(ticket);
                if(ticket.success){
                    if(ticket.cart){
                        $('#cart-data').html(ticket.cart);
                        $('#msg').hide();
                        swal("Ticket Added ", " Ticket # " +ticket_number+ " successfully added to cart", "success");
                    }else{
                        $('#cart-data').html('html');
                    }
                    $('#similar_products').html(ticket.similar_items);
                    if(ticket.similar_items){
                        $('#cont').show();
                    }else{
                        $('#cont').hide();
                    }
                    $(this).removeClass('red-btn my_tickets').addClass('yellow-btn delet_cart_item');
                    $(this).attr('data-status',2);
                    $('.cart-counter').text(ticket.total_tickets);
                    $('.total').text('<?php echo Config::get("constants.currency");?>'+ticket.total);
                    if(ticket.total==0){
                        $('.cust_cart_check').hide();
                    }else{
                        $('.cust_cart_check').show();
                    }
                }else{
                    swal("Error", ticket.error_messages , "error");
                }
            },
            error: function(){},
        });
    }
</script>


<!--$(document).on('click','.delet_cart_item',function(){-->
<!--  var ticket_id=$(this).data('id');-->
<!--  var ticket_number=$(document).find('button.delet_cart_item[data-id="'+ ticket_id +'"]').text();-->
<!--  $.ajax({-->
<!--    type:'post',-->
<!--    url: '{{ url("ticket/remove_from_cart")}}',-->
<!--    data:{ ticket_id:ticket_id, "_token": "{{ csrf_token() }}" },-->
<!--    context:this,-->
<!--    success: function(ticket){-->
<!--      if(ticket.success){-->
<!--        $(this).parents('tr.cart-items').remove();-->
<!--        if($('tr.cart-items').length <=0) $('#cart-data').html(html); else $('#msg').hide();-->
<!--        swal("Ticket Removed ", " Ticket # " +ticket_number+ "successfully removed from cart", "success");-->
<!--        $('.cart-counter').text(ticket.total_tickets);-->
<!--        $('.total').text('<?php echo Config::get("constants.currency");?>'+ticket.total);-->
<!--        $('#similar_products').html(ticket.similar_items);-->
<!--        if(ticket.similar_items){-->
<!--        $('#cont').show();  -->
<!--        }else{-->
<!--          $('#cont').hide();-->
<!--        }-->
<!--        $(document).find('a.delet_cart_item[data-id="'+ ticket_id +'"]').parents('tr.cart-items').remove();-->
<!--        $(document).find('button.delet_cart_item[data-id="'+ ticket_id +'"]').removeClass('yellow-btn delet_cart_item').addClass('red-btn my_tickets');-->
<!--        if(ticket.total==0){-->
<!--          $('.cust_cart_check').hide();-->
<!--        }else{-->
<!--          $('.cust_cart_check').show();-->
<!--        }-->
<!--        $(this).attr('data-status',0);-->
<!--      }else{ -->
<!--        swal("Error", ticket.error_messages , "error");-->
<!--      }-->

<!--    },-->
<!--    error: function(){-->

<!--    },-->
<!--  });-->
<!--});-->

<!--</script>-->

@endsection
<?php          }             ?>

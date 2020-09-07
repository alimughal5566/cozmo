@extends('layouts.app', ['settings' => $settings])
@section('content')

<?php $curr=Config::get("constants.currency"); ?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<style type="text/css">
/*.productImgs{*/
/*   max-width: 90%;*/
/*     overflow: hidden; */
/*    margin: 0 auto;*/
/*}*/
    .productImgs img{
        width: 100%;
    }

    .owl-carousel{
        position: relative;
    }
    .owl-carousel .owl-nav{
        height: 0;
    }
    .owl-carousel .owl-nav .owl-prev{
            position: absolute;
    display: inline-block;
    content: '';
    top: 11%;
    left: -20%;
    font-size: 60px !important;
    font-weight:  bold !important;
    bottom: 0;
    text-shadow: 2px 0px 2px #000;
    color: #ee8322 !important;
    }
    .owl-carousel .owl-dots{
        display: none;
    }
    .owl-carousel .owl-nav .owl-next{
            position: absolute;
    display: inline-block;
    content: '';
    top: 11%;
    right: -16%;
    font-size: 60px !important;
    font-weight: bold !important;
    bottom: 0;
    text-shadow: 2px 0px 2px #000;
    color: #ee8322 !important;
    }
    .owl-carousel .owl-nav .owl-prev:hover,
    .owl-carousel .owl-nav .owl-next:hover{
        /*font-size: 40px !important;*/
        text-shadow: 0 0 10px #000;
        color: #fff;
    }
    
nav > .nav.nav-tabs{

  border: none;
    color:#fff;
    background:#272e38;
    border-radius:0;

}
nav > div a.nav-item.nav-link,
nav > div a.nav-item.nav-link.active
{
  border: none;
      padding: 18px 25px;
    color:#fff;
      background:#272e38;
    border-radius:0;
}

nav > div a.nav-item.nav-link.active
{
    background:#F18421 !important;
}
nav > div a.nav-item.nav-link.active:after {
    content: "";
    position: relative;
    bottom: -57px;
    left: -14%;
    border: 15px solid transparent;
    border-top-color: #f18421;
}
.tab-content{
  background: #fdfdfd;
    line-height: 25px;
    border: 1px solid #ddd;
    border-top:5px solid #f18421;
    border-bottom:5px solid #f18421;
    padding:30px 25px;
}

nav > div a.nav-item.nav-link:hover,
nav > div a.nav-item.nav-link:focus
{
  border: none;
    background:#F18421;
    color:#fff;
    border-radius:0;
    transition:background 0.20s linear;
}
.nav-tabs .nav-item {
    margin-bottom: 0;
    margin-right: 0;
}
.x-e{
        position: absolute;
    width: 100%;
    bottom: 0px;
}
.main_col{
    margin-top:25px;
}
.main_col:nth-child(even) {
            padding-left: 25px;

}
.main_col:nth-child(odd) {
            padding-right: 25px;

}
        .max_details{
          background: #e0dfdf;
         }
         /*.cust_zedox{*/
         /* margin-top: 10px;*/
         /*}*/

         .cust_deailss{

              background-size: cover;

         }
          .cust_deails{
             background: #f1f1f1;

         }
         .cust_wi:nth-child(2nd){
             margin-left:10px;
         }
         .Cust_col_img{
                  min-height: 245px;
                    width: 100%;
                    max-height: 245px;
                   /* min-width: 280px;*/
         }


    .head-p{
    font-size: 16px;
    }
    .main-cownt{
          background-color: #ee8322;
          width: 100%;
          color: white;
          font-weight: 600;
              display: flex;
    flex-direction: row;
    justify-content: center;
    }
    .main-ulii{
  list-style: none !important;
    margin: 0 !important;
    padding: 0 8px !important;
    display: flex !important;
    align-items: stretch !important;
    justify-content: space-between !important;
    width: 100% !important;
        flex-wrap: nowrap !important;
    }
    .cust_lii{
          padding: 0 3px;
          display: flex;
    flex-direction: column;
    align-items: center;
        margin-top: 13px;
        padding-bottom:0 !important;
        font-size: 12px;
    }
    .anc_link{
           font-family: 'Poppins', sans-serif;
    font-weight: 500;
    font-size: 20px;
    color: #ffffff !important;
    text-transform: uppercase;
    background-color: black;
    border-bottom: 4px solid #ee8322;
    display: block;
    padding: 13px 15px;
    }
.anc_link:hover{
   color: #ee8322 !important;
   text-decoration: none;
}



/*span:hover{
      color: #ee8322 !important ;
      text-decoration: none;
    }*/
   /* .anc_tab{
             color: #ffffff !important;
    text-decoration: none;
        padding: 14px 105px 14px 10px;

    }*/
  .rea{
  color: #ee8322;
    float: right;
     margin-top: -2px;
    font-size: 30px !important;
    }

    /*.rea{*/
    /*  color: #ee8322;*/
    /*float: right;*/
    /*margin-top: 3px;*/
    /*font-size: 30px;*/
    /*}*/
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
}

.ribbon {
    width: 150px;
    height: 150px;
    overflow: hidden;
    position: absolute;
    z-index: 1;
}
.ribbon-bottom-right::before, .ribbon-bottom-right::after {
    border-bottom-color: transparent;
    border-right-color: transparent;
}
.ribbon::before, .ribbon::after {
    position: absolute;
    z-index: -1;
    content: '';
    display: block;
    border: 5px solid #ab601d;
}
.ribbon-bottom-right span {
    left: -58px;
    bottom: 30px;
    transform: rotate(-45deg);
}
.fa-bars{
     vertical-align: text-top;
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

.reviews_stats button {
    background-color: #ee8322;
    margin: 0;
    color: #fff;
    text-transform: capitalize;
    font-weight: 600;
    border: 0;
    font-size: 15px;
    padding: 9px 5px;
    border-color: transparent;
    width: auto !important;
        margin: 8px 0 !important;
}
.p_row p {
    text-align: center;
    width: 100%;
}
.main_col{
    margin:0;
}

.sticky + .content {
  padding-top: 102px;
}
.cust_wi{
        margin-top:20px !important;
           
    }
    .fb_iframe_widget {
        width: auto;
    text-align: center;
        margin-bottom: 10px;
    }
#mytab {
      margin-bottom: 8px;
      border: none !important;
      white-space: nowrap;
      background: #fbfbfc;
        box-shadow: 0px 5px 5px grey;
}
#defaultOpen2 {
  margin-right: 10px !important;
}
/*.cust_wi{*/
/*        width: 100%;*/
/*}*/
@media screen and (max-width: 568px){
    /*.container{*/
    /*    padding:0 15px !important;*/
    /*}*/
        .cust_wi{
      
            box-shadow: 0px 2px 8px #888888;
    display: flex;
    flex-direction: column-reverse;
    }
}

/*.toggle{*/
/* display:inline-block;*/
/*height:48px;*/
/*width:48px;  background:url("images/plus-icon.png");*/
/*}*/
/*.toggle.expanded{*/
/*  background:url("images/minus_icon.png");*/
/*}*/

@media screen and (max-width: 480px){
    .main-ulii{
        flex-direction:row !important;
    }
    .ribbon{
        width: 120px;
    height: 120px;
    }
    .ribbon span{
            padding-right: 26px;
    }
    .raffle-title h2{
        font-size:24px;
    }
      .raffle-title h5{
        font-size:16px;
    }
}
#loadgif {
    position: absolute;
    z-index: 9;
    top: -20px;
    left: 53%;
}

@media screen and (max-width: 992px){
    .cust_deails, .cust_deailss{
            height: 285px;
    }
    #loadgif {
            position: absolute;
    z-index: 9;
    top: -17px;
    left: 18%;
    }
    .cust_wi{
        margin-top:25px;
    }
    .main_col:nth-child(odd){
        padding-right:15px;
    }
    .featured-raffle-details{
            top: 0px;
    padding: 0 16px 0px;
    padding-top: 9px;
    }
    .top-bannerw{
        display: flex;
    flex-direction: column-reverse;
    }
    #mytab{
        display:flex;
        flex-wrap:wrap;
        width: 100%;
    }
    .featured-raffle-details{
        position:relative !important;
    }
    .top-bannerw{
        Z
    }
    .Cust_col_img{
            min-height: 245px;
    width: 100%;
    max-height: initial;
    min-width: 100%;
    }
    .main_col:nth-child(even) {
        padding-left: 15px;
}
}
@media screen and (max-width: 768px){
    .cust_deails, .cust_deailss{
            height: 230px;
    }
    /*.car_sec{*/
    /*    margin-left: 10px;*/
    /*}*/
    .timer{
            flex-direction: row;
    justify-content: center;
    }
}
.featured-raffle-details{
        padding: 0 16px 0 !important;
}
.cust-zedox{
    margin-top:0 !important;
}
.enter-btn{
        border-bottom:0 !important;
}

.cust-zedox{
    margin-bottom:20px;
    margin-top: 10px;
    position: relative;
}
/*.bg_im{
     max-height: 600px;
     overflow:hidden;
}*/
.img_style{ 
height: 100%;
    width: 100%;
}
.card-text{
        min-height: 50px;
}
.featured-raffle-details{
                 background: linear-gradient(0deg, rgba(183, 136, 136, 0.29) 0%, rgb(255, 0, 0) 0%, rgba(8, 65, 177, 0.18) 0%, rgb(248, 251, 255) 100%);
    position: absolute;
    top: 0px;
        padding: 0 16px 39px;
        padding-top: 14px;
        width: 100%;
}
.raffle-title{
        /*text-shadow: 3px 2px 4px #7A7A7A;*/
            text-shadow: -1px 2px 1px #7A7A7A;
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
a.enter-btn-large:hover{
  color: #ee8322 !important;
}
.enter-btn-large {
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
    font-size: 20px;
    color: #ffffff !important;
    text-transform: uppercase;
}
.main-ulgi{
    list-style: none !important;
    margin: 0 !important;
    padding: 0 8px !important;
    display: flex !important;
    align-items: stretch !important;
    justify-content: space-between !important;
    width: 100% !important;
    flex-wrap: nowrap !important;
}
.top-bannerw{
        position: relative;
}
.main-ulgi p{
    color:white !important;
}

.zeraa{
       background: linear-gradient(0deg, rgba(255,133,2,1) 0%, rgba(244,215,172,1) 100%);
           margin: 4px 0 13px;
           padding: 0 !important;
}
.card {
    margin: 0 !important;
        padding: 0 10px;
}
.card-img-top{
        width: 7rem;
    height: 7rem;
    border-radius: 50%;
    margin: 22px auto;
}
.testimonial_cardbody{
    background: #f9f9f9;
    border-radius: 5px;
    padding: 9px 10px 10px;
    box-shadow: 0 2px 0 0 rgba(183, 192, 188, 0.4);
}
.h6_text{
    color: #ee8322;
}
.enter-btn a:hover{
    color: #ee8322;
}




.fixed-tabs {
    position: fixed;
    top: 0;
    z-index: 9;
    left: 0px;
    width: ;
}
.cownt-padding{
    padding:5px 10px;
        display: flex;
    flex-direction: column;
    align-items: center;
}
#mytab h4 {
cursor: pointer;
    background: #000000cc;
    /* margin-right: 15px; */
    padding: 9px 5px;
    /* border-radius: 7px; */
    color: #fff;
    box-shadow: 0px 2px 3px 1px rgba(0, 0, 1, 0.6);
}
@media screen and (max-width: 520px){
    #mytab {
      white-space: normal;
    }
    .top-bannerw{
        padding:0 13px !important;
    }
    .facts-bg{
            padding: 0 13px !important;

    }
}


.cust_width{
        margin-bottom: 20px;
}
.camp_title2{
        font-size: 20px !important;
    font-weight: 600;
      

    text-align: left !important;
    background-color: #e9ebee33;
    text-transform: initial !important ;
    letter-spacing: initial !important;

    color: #000 !important;
    padding: 0 !important;
    border-bottom: none !important;
}
@media screen and (max-width: 420px){
    .top-bannerw{
            display: flex;
    flex-direction: column-reverse;
    }
    .tick-p {
    left: 39% !important;
}
    .cust-zedox{
            margin-top: 0;
    }
    .tab{
    	display: none !important;
    }
    .ribbon span{
            padding: 9px 0;
    }
    .ribbon-bottom-right::before{
            left: 13px;
    }
    .ribbon-bottom-right::after{
            top:13px;
    }
    .enter-btn span{
        font-size:16px;
    }
    .featured-raffle-details{
            top: 0px;
    padding: 0 15px 0px;
    padding-top: 7px;
    }
    .raffle-title{
        text-shadow: 3px 2px 4px #7A7A7A;
    padding-left: 7px;
    }
    .raffle-title h2{
            font-size: 19px;
    }
    .timer div{
            padding: 2px !important;
    font-size: 16px !important;
    width: 67px !important;
    }
    .enter-btn{
            border-bottom: none;
    }
    a.enter-btn-large{
            padding: 10px 0px 8px 10px;
    }
}
@media screen and (max-width: 360px){
  .tick-p {
    left: 37% !important;
}
}

</style>

<style>
    .timer {
      /* margin: 0 0 45px; */
    font-family: sans-serif;
    color: white;
    display: inline-block;
    font-weight: 100;
    text-align: center;
    display: flex;
    font-size: 30px;
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
  color: #ffff;
  font-size: 12px;
  font-family: Poppins;
  font-weight: 500;
  display: block;
  padding: 0;
  width: auto;
}
.cownt-padding .smalltext1 {
  color: #ffff;
  font-size: 12px;
  font-family: Poppins;
  font-weight: 500;
  display: block;
  padding: 0;
  width: auto;
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
  .banner-1.cover-image.bg-background2 {
    position: initial !important;
  }
  .vidbg-container video {
        width: 100% !important;
        top: 100% !important;
  }
  .div_images{
    display: flex;
    flex-direction: row;
    justify-content: center;
            position: absolute;
    top: 40%;
    left: 28%;
}
.conv{
            padding: 10px 12px 0px;
                position: absolute;
    top: 0;
         }
.main_image{
      width: 280px;
    height: 246px;
    overflow: hidden;
    position: relative;
}

.modal-backdrop {
  z-index: 1 !important;
}


</style>

<style>
    .timer {
      /* margin: 0 0 45px; */
    font-family: sans-serif;
    color: white;
    display: inline-block;
    font-weight: 100;
    text-align: center;
    display: flex;
    font-size: 30px;
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
  color: #ffff;
  font-size: 12px;
  font-family: Poppins;
  font-weight: 500;
  display: block;
  padding: 0;
  width: auto;
}
.cownt-padding .smalltext1 {
  color: #ffff;
  font-size: 12px;
  font-family: Poppins;
  font-weight: 500;
  display: block;
  padding: 0;
  width: auto;
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
.winner-carousel-win{
	    text-align: center;
}
.winner-carousel-footer {
    background-color: #ee8322;
    padding: 25px;
    position: relative;
    min-height: 250px;
}
.winner-carousel-footer h6 {
    font-size: 29px;
    font-weight: 500;
    margin-top: 115px;
    margin-bottom: 0;
}
.winner-carousel-footer h4 {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 10px;
}
.winner-carousel-footer, .winner-carousel-footer p {
    color: #ffffff;
}
.winner-carousel-footer p {
    margin-bottom: 0;
}

.winner-carousel-img {
    top: -30px;
    position: absolute;
    margin-left: auto;
    margin-right: auto;
    left: 0;
    right: 0;
}
.winner-carousel-img img {
    width: 156px;
    height: 156px;
    -webkit-border-radius: 78px;
    -moz-border-radius: 78px;
    -ms-border-radius: 78px;
    -o-border-radius: 78px;
    border-radius: 78px;
    border: 4px solid #ffcea1;
}

.winner-carousel-head {
    color: #ffffff;
    min-height: 300px;
    position: relative;
}
.winner-carousel-head p {
    font-size: 16px;
    line-height: normal;
    margin: 0;
}
.winner-carousel-banner-image {
    position: absolute;
    bottom: 30px;
    margin-left: auto;
    margin-right: auto;
    left: 0;
    right: 0;
}
 {
    background-image: url(frontend/images/checkout.png);
    background-repeat: no-repeat;
    background-position: center center;
    background-size: contain;
    width: 100%;
    height: 30px;
    position: relative;
}
.carousel-wot{
	background: linear-gradient(0deg, rgba(183, 136, 136, 0.29) 0%, rgb(255, 0, 0) 0%, rgba(8, 65, 177, 0.18) 0%, rgb(248, 251, 255) 100%);
	    padding: 14px;
}

.carousel-ticket {
    background-image: url(frontend/images/tick-t.png);
    background-repeat: no-repeat;
    background-position: center center;
    background-size: contain;
    width: 100%;
    height: 60px;
    position: relative;
}
.tick-p{
	    position: absolute;
    left: 39%;
    bottom: 31%;
}




#mixedSlider {
  position: relative;
}
#mixedSlider .MS-content {
  white-space: nowrap;
  overflow: hidden;
/*  margin: 0 5%;*/
}
#mixedSlider .MS-content .item {
  display: inline-block;
  width: 33.3333%;
  position: relative;
  vertical-align: top;
  overflow: hidden;
  height: 100%;
  white-space: normal;
  padding: 0 10px;
}
@media (max-width: 991px) {
  #mixedSlider .MS-content .item {
    width: 50%;
  }
  .tick-p {
    left: 30%;
}
}
@media (max-width: 767px) {
  #mixedSlider .MS-content .item {
    width: 100%;
  }
  .tick-p {
    left: 42%;
}
}
#mixedSlider .MS-content .item .imgTitle {
  position: relative;
}
#mixedSlider .MS-content .item .imgTitle .blogTitle {
  margin: 0;
  text-align: left;
  letter-spacing: 2px;
  color: #252525;
  font-style: italic;
  position: absolute;
  background-color: rgba(255, 255, 255, 0.5);
  width: 100%;
  bottom: 0;
  font-weight: bold;
  padding: 0 0 2px 10px;
}
#mixedSlider .MS-content .item .imgTitle img {
  height: auto;
  width: 100%;
}
#mixedSlider .MS-content .item p {
  font-size: 16px;
  margin: 2px 10px 0 5px;
  text-indent: 15px;
}
#mixedSlider .MS-content .item a {
  float: right;
  margin: 0 20px 0 0;
  font-size: 16px;
  font-style: italic;
  color: rgba(173, 0, 0, 0.82);
  font-weight: bold;
  letter-spacing: 1px;
  transition: linear 0.1s;
}
#mixedSlider .MS-content .item a:hover {
  text-shadow: 0 0 1px grey;
}
#mixedSlider .MS-controls button {
  position: absolute;
  border: none;
  background-color: #000;
  outline: 0;
  font-size: 50px;
  top: 50%;
  color: #fff;
  transition: 0.15s linear;
  width: 3%;
  border-radius: 30px;
      height: 7%
}
#mixedSlider .MS-controls button:hover {
  color: #ee8322;
}
@media (max-width: 992px) {
  #mixedSlider .MS-controls button {
    font-size: 30px;
  }
}
@media (max-width: 767px) {
  #mixedSlider .MS-controls button {
    font-size: 20px;
  }
}
#mixedSlider .MS-controls .MS-left {
  left: 0px;
      display: flex;
    flex-direction: row;
    justify-content: center;
}
@media (max-width: 767px) {
  #mixedSlider .MS-controls .MS-left {
    left: -10px;
  }
}
#mixedSlider .MS-controls .MS-right {
  right: 0px;
      display: flex;
    flex-direction: row;
    justify-content: center;
}
@media (max-width: 767px) {
  #mixedSlider .MS-controls .MS-right {
    right: -10px;
  }
  .width_content {
    width: 100% !important;
  }
  .subs_img h3 {
    color: #ee8322 !important;
    width: 50%;
        font-size: 12px !important;
}
    .subs_img img {
        width: 30%;
    }
}
#basicSlider { position: relative; }

#basicSlider .MS-content {
  white-space: nowrap;
  overflow: hidden;
  margin: 0 2%;
  height: 50px;
}

#basicSlider .MS-content .item {
  display: inline-block;
  width: 20%;
  position: relative;
  vertical-align: top;
  overflow: hidden;
  height: 100%;
  white-space: normal;
  line-height: 50px;
  vertical-align: middle;
}
@media (max-width: 991px) {

#basicSlider .MS-content .item { width: 25%; }
}
@media (max-width: 767px) {

#basicSlider .MS-content .item { width: 35%; }
}
@media (max-width: 500px) {

#basicSlider .MS-content .item { width: 50%; }
}

#basicSlider .MS-content .item a {
  line-height: 50px;
  vertical-align: middle;
}

#basicSlider .MS-controls button { position: absolute; }

#basicSlider .MS-controls .MS-left {
  top: 35px;
  left: 10px;
  color: #ee8322;
}

#basicSlider .MS-controls .MS-right {
  top: 35px;
  right: 10px;
}
.p_row h2 {
    width: 100%;
}
.trustpilot-widget {
  padding: 20px 0;
  padding-top:0;
}
.tp-widget-empty-horizontal__title{
  font-size: 50px !important;
}

.width_content {
  width: 45%;
}
.subs_btn {
      /*text-align: center;*/
      margin-top: 10px;
}
.cancelbtn, .signupbtn {
        float: none !important;
    margin-top: 0px;
    width: auto !important;
    border-radius: 9px;
    padding: 7px 15px !important;
}
.cancelbtn {
      margin-right: 11px;
    margin-left: 10px;
}
/*.signupbtn {
  width: 25% !important;
}*/
.aftr h5 {
  /*text-align: center;*/
    margin-top: 9px;
    font-weight: 800;
    margin-bottom: 0;
}
.aftr i {
     padding-left: 5px;
    color: #ee8322;
    text-align: right;
    width: 25%;
    padding-top: 11px;
/*margin-left: 54px;*/
    animation: updwn .7s infinite alternate;
}
.list-group-item {
    color: #000 !important;
}
@keyframes updwn {
   0% { 
      transform: translateY(0); 
   }
    100% { 
      transform: translateY(-10px); 
    }
}
.aftr {
/*  display: flex;
    justify-content: center;*/
    /*text-align: center;*/
}
.close {
  width: auto !important;
}
.subs_img {
      /*text-align: center;*/
    margin-top: 9px;
}
.subs_img img {
    width: 45%;
}
.subs_img h3 {
  color: #ee8322 !important;
}
.cust_con {
  position: relative;
  /*text-align: center;*/
  padding-left: 33px;
}
.left_img {
  width: 25%;
    position: absolute;
    top: 45%;
    left: 7px;
    animation: updwnimg .7s infinite alternate;
}
.right_img {
  width: 56%;
    /*position: absolute;*/
    /*top: 32%;*/
    /*right: 22px;*/
    /*animation: updwnimg 1s infinite alternate;*/
            margin: 0px auto 0;
    /*margin-top: 12px;*/
}
.owl-carousel .owl-item img {
    display: block;
    width: 95% !important;
}
@keyframes updwnimg {
  0% { 
      transform: translateY(0); 
   }
    100% { 
      transform: translateY(-10px); 
    }
}
#id0771 #register_head {
    background-color: #000000 !important;
    color: #ffffff !important;

}

#loadgif img {
    width: 100%;
}
.psw-lay {
  font-weight: 500;
    color: #ee8322;
    margin-bottom: 6px;
}
.cust_modal_doc {
    border-radius: 10px !important;
}
.after_modal_pro h1 {
    font-size: 17px !important;
    border-top-left-radius: 10px !important;
    border-top-right-radius: 10px !important;
    padding: 10px 31px !important;
}
.prizing {
       width: 34%;
    margin-left: 89px !important;
    margin-top: 20px !important;
    /*position: absolute;*/
    /*top: 25%;*/
    /*right: 55px;*/
    height: 62px;
    margin-right: 20px !important;
    padding: 10px 48px !important;
    display: flex;
    justify-content: center;
    background: #ee8322;
    /* transform: rotate(45deg); */
    border-radius: 10px;
    color: #fff;
    /* clip-path: polygon(100% 0, 0 0, 55% 98%); */
    clip-path: polygon(100% 0%, 100% 49%, 100% 56%, 51% 81%, 0% 50%, 0 0);
    animation: updwnimg 1s infinite alternate;
    display: none;
}
.chnc {
    /*  text-align: right !important;*/
    /*width: 59%;*/
    border-bottom: none !important;
}
.subs_input {
      background: #fefefe;
    border: 1px solid #d6d6d6;width: 67%;
}
.dummy_text {
        margin-bottom: 12px;
}
.dummy_text i {
    color: green;
}
.dummy_text a {
    text-decoration: none;
    color: #000;
    width: 12%; 
    margin-right: 10px;
}

button.owl-prev{
    left: 0;
    /*background:#000;*/
    height: 50px;
    width: 50px;
    color:#fff;
    /*bottom: 0;*/
    top: 50%;
}

button.owl-next{
    right: 0;
    /*background:#000;*/
    height: 50px;
    width: 50px;
    color:#fff;
    /*bottom: 0;*/
    top: 50%;
    
}
.inline_inpt {
        display: flex;
}
.after_sub {
    width: 90%;
    margin: 0 auto;
}
.custom_glry {
    width: 100%;
}
.owl-item .second_img  img{
    width: 100% !important;
}
.add_cart_grp {
    display: flex;
    width: 95%;
    margin: 0 auto ;
}
.add_cart_grp .add_cart_btn {
   margin-left: 10px;
   border-radius: 4px;
   padding: 6px !important;
}
.add_cart_btn {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 37px !important;
    font-size: 13px !important;
}
.add_cart_btn i {
    color: #fff !important;
}
/*.minus_btn , .btn-number {*/
/*    display: flex;*/
/*    padding: 7px 12px;*/
/*    margin: 0;*/
/*}*/
.input-group-btn button {
    display: flex;
   padding: 7px 7px !important;
    margin: 0 !important;
    margin-top: 7px !important; 
} 

.btn-number {
    border-top-left-radius: 0 !important;
    border-bottom-left-radius: 0 !important;
}
#subscriber_submit {
    margin-left: 10px;
}
@media screen and (max-width: 420px){
.prizing {
    margin-left: 20px !important;
    }
    .subs_input {
        font-size: 12px;
        margin-top: 3px;
    }
    .width_content , .onload_modal , .modal-backdrop.show {
        display: none !important;
    }
    .modal-open {
        overflow: initial !important;
    }
            .onload_modal {
                    position: unset !important;
            }
}
.conts h4 {
    color: #000 !important;
    margin-top: 8px !important;
    text-align: center !important; 
}
.card-body {
    padding: 0 !important;
}

.view-gallery-car li {
    margin-right: 0 !important;
}
.timer_text {
    text-align: center;
}
.timer_text .discont_btn {
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
.owl-item .second_img img {
        width: 300px !important;
    height: 200px !important;
    margin: 0 auto;
}
.product_model {
    margin-top: -3px;
}
.cust_modal_doc .owl-carousel .owl-nav .owl-prev {
        position: absolute;
    display: inline-block;
    content: '';
    top: 40% !important;
    left: -20%;
    font-size: 60px !important;
    font-weight: bold !important;
    bottom: 0;
}
.cust_modal_doc .owl-carousel .owl-nav .owl-next {
        position: absolute;
    display: inline-block;
    content: '';
    top: 40% !important;
    right: -20%;
    font-size: 60px !important;
    font-weight: bold !important;
    bottom: 0;
}
.raffle-title {
    color: #000 !important;
}
.slide {
    margin-bottom : 20px;
}
</style>

<!-- TrustBox script --> 
<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script> 
<!-- End TrustBox script -->
<!-- TrustBox widget - Micro Review Count --> 

<!-- End TrustBox widget -->

<!----------slider-------------> 


@if (session('alert'))
    <div class="alert alert-success" style="width: 40%">
        {{ session('alert') }}
    </div>
@endif

@if (session('danger'))
    <div class="alert alert-danger" style="width: 40%">
        {{ session('danger') }}
    </div>
@endif

@if(!empty(Session::get('confirmation')) && Session::get('confirmation') == 5)
<script>
$(function() {
    $('#id01').modal('show');
});
</script>
@endif
                
                
@if(!Auth::check())
<?php if(!isset($_COOKIE['id0771'])){ 
    setcookie("id0771", 1, time() + (180), "/");
    echo "<script> 
            $(document).ready(function () {
                setTimeout(function() {
                    $('#id0771').modal('show');
                }, 5000);
            });
        </script>";
}?>
@endif

<?php $title_color= DB::table('title_color')->first();  ?>

<div class="container p-0 top-bannerw">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @foreach($blogs as $key => $blog)
        <?php 
            $blog_package =  \App\Package::where('id', $blog->package_id)->first();
            $urlcategory = \App\UrlCategory::where('id', $blog_package->url_category)->first();
            $packages = DB::table('packages')->where('id', '=', $blog_package->id)->first();
            $multicomp = $packages->mc_id;
            $multi = DB::table('multi_competition')->where('id',$multicomp)->first();
            $datesss=$multi->end_date;
            $stopdat = date('Y-m-d H:i:s', strtotime($datesss . '+24 hours'));
        ?>
            <div class="carousel-item @if($key == 0) active @endif">
            <div class="featured-raffle-details">
                <div class="row">
                    <div class="col-md-6 raffle-title">

                        <h2>{{$blog_package->name}}</h2>

                        <h5>{{$blog_package->short_description_one}}</h5>
                        <h5>{{$blog_package->short_description_two}}</h5>
                    </div>
                    <div class="col-md-6 raffle-time">
                        <div class="row" style="background-color: #ee8322;">
                            <div class="col-md-6 col-sm-12 col-12">
                                <div class="timer">
                                    <div>
                                        <span class="days" id="c_day{{$key + 10000}}">0</span>
                                        <div class="smalltext">Days</div>
                                    </div>
                                    <div>
                                        <span class="hours" id="c_hour{{$key + 10000}}">0</span>
                                        <div class="smalltext">Hours</div>
                                    </div>
                                    <div>
                                        <span class="minutes" id="c_minute{{$key + 10000}}">0</span>
                                        <div class="smalltext">Minutes</div>
                                    </div>
                                    <div>
                                        <span class="seconds" id="c_second{{$key + 10000}}">0</span>
                                        <div class="smalltext">Seconds</div>
                                    </div>
                                    <p id="c_time-up{{$key + 10000}}"></p>
                                </div>
                            </div>
                            <script>
                                var new_date{{$key + 10000}} ="<?php echo date('M d, Y H:i:s',strtotime($stopdat)) ;?>";
                                var deadline{{$key + 10000}} = new Date(new_date{{$key + 10000}}).getTime();
                                var x{{$key + 10000}} = setInterval(function() {
                                   var currentTime = new Date().getTime();
                                   var t = deadline{{$key + 10000}} - currentTime;
                                   var days = Math.floor(t / (1000 * 60 * 60 * 24));
                                   var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60));
                                   var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
                                   var seconds = Math.floor((t % (1000 * 60)) / 1000);
                                   document.getElementById("c_day{{$key + 10000}}").innerHTML =days ;
                                   document.getElementById("c_hour{{$key + 10000}}").innerHTML =hours;
                                   document.getElementById("c_minute{{$key + 10000}}").innerHTML = minutes;
                                   document.getElementById("c_second{{$key + 10000}}").innerHTML =seconds;
                                   if (t < 0) {
                                      clearInterval(x);
                                      document.getElementById("c_time-up{{$key + 10000}}").innerHTML = "TIME UP";
                                      document.getElementById("c_day{{$key + 10000}}").innerHTML ='0';
                                      document.getElementById("c_hour{{$key + 10000}}").innerHTML ='0';
                                      document.getElementById("c_minute{{$key + 10000}}").innerHTML ='0' ;
                                      document.getElementById("c_second{{$key + 10000}}").innerHTML = '0';
                                   }
                                }, 1000);
                            </script>
                            <div class="col-md-6 col-sm-12 col-12 enter-btn">
                                <a href="{{url('/competition/')}}/{{$urlcategory->slug}}/{{$blog_package->slug}}" class="enter-btn-large"><span>Enter <span class="hidden-md ">Now</span> <i class="fa fa-angle-right rea"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img class="d-block w-100" src="{{url('/blogimages/')}}/{{$blog->image}}" alt="First slide">
        </div>
        <!--<div class="carousel-item">-->
        <!--    <div class="featured-raffle-details">-->
        <!--        <div class="row">-->
        <!--            <div class="col-md-6 raffle-title">-->

        <!--                <h2>RANGE ROVER VELAR Second</h2>-->

        <!--                <h5>BRAND NEW</h5>-->
        <!--                <h5>CHOICE OF COLOURS</h5>-->
        <!--            </div>-->
        <!--            <div class="col-md-6 raffle-time">-->
        <!--                <div class="row" style="background-color: #ee8322;">-->
        <!--                    <div class="col-md-6 col-sm-12 col-12">-->
        <!--                        <div class="timer">-->
        <!--                            <div>-->
        <!--                                <span class="days" id="day">0</span>-->
        <!--                                <div class="smalltext">Days</div>-->
        <!--                            </div>-->
        <!--                            <div>-->
        <!--                                <span class="hours" id="hour">0</span>-->
        <!--                                <div class="smalltext">Hours</div>-->
        <!--                            </div>-->
        <!--                            <div>-->
        <!--                                <span class="minutes" id="minute">0</span>-->
        <!--                                <div class="smalltext">Minutes</div>-->
        <!--                            </div>-->
        <!--                            <div>-->
        <!--                                <span class="seconds" id="second">0</span>-->
        <!--                                <div class="smalltext">Seconds</div>-->
        <!--                            </div>-->
        <!--                            <p id="time-up">TIME UP</p>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="col-md-6 col-sm-12 col-12 enter-btn">-->
        <!--                        <a href="http://prizemaker.stepinnsolution.com/competition/dream-car/range-rover-velar" class="enter-btn-large"><span>Enter <span class="hidden-md ">Now</span> <i class="fa fa-angle-right rea"></i></span></a>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <img class="d-block w-100" src="https://image.ibb.co/kvhXGH/jetty_1373173_1920.jpg" alt="Second slide">-->
        <!--    <div class="carousel-caption d-none d-md-block">-->
        <!--        <h5>Title</h5>-->
        <!--        <p>Text goes here</p>-->
        <!--    </div>-->
        <!--</div>-->
        @endforeach()
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
  </div>
<!--<div class="trustpilot-widget" data-locale="en-GB" data-template-id="5419b6a8b0d04a076446a9ad" data-businessunit-id="5df8a61fcf1865000180677a" data-style-height="24px" data-style-width="100%" data-theme="light"> -->
<!--  <a href="https://uk.trustpilot.com/review/prizemaker.com" target="_blank" rel="noopener">Trustpilot</a> -->
<!--</div> -->
<div class="dummy_text text-center">   
    <a href="#"> <img src="{{url('images/imgpsh_fullsize_anim.png')}}" style="width: 15%;    margin-top: -10px;"> <span style="font-weight: bold;">Trustpilot</span></a>
    <div class="fb-like" data-href="https://web.facebook.com/prizemakeruk/" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>

</div>
<div class="facts-bg">

    <div class="container p-0">
         <p class="custom_header3">How does it work</p>
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
<div class="container">
<h1 class="text-center cust_winner">Win Online Competitions</h1>
</div>
<div class="container">
    <div class="reviews_stats">
      <div class="tab" id="mytab">
        <div class="quick">
        <h4>Jump to</h4>
        </div>
        <?php foreach($competitions as $key=> $row){ ?>
        <?php $tab_link = 0;?>
        <?php foreach($row as $index=> $cmp){ ?>
        <button id="defaultOpen<?php echo $cmp->id;?>" class="tablinks">{{ $cmp ->title }}</button>
      <?php $tab_link++;  } }  ?>
        <!-- <button class="tablinks">£10 TICKET COMPETITION</button> -->
      </div>

      <!-- <div id="deskc" class="tabcontent" style="border:0;">

        <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
      </div> -->

      <!-- <div id="stats" class="tabcontent" style="border:0;">
        <p>
        "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
        </p>
      </div> -->
    </div>
    </div>


    <?php $counter = 0; ?>
      <?php foreach($competitions as $key=> $row){ ?>
      <?php foreach($row as $index=> $cmp){ ?>
        <div class="container">
                  <section class="car_sec">
       <div class="container" id="competition">
   <h3 id="cmptitle<?php echo $cmp->id?>" >{{ $cmp ->title }}</h3>
   <!-- <p style="text-transform: initial !important;margin:0;" class="text-center"><small>See our terms and conditions for free entry method.</small></p> -->

   </div>


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
    <div class="container">
      <div class="row cust_zedox">
          
          @foreach($cmp->products as $product)
          <?php if($product->status == 0){
                continue;
          }
        ?>
        <div class="col-lg-6 col-sm-12 main_col">
          <div class="row cust_wi">
            <div class="col-lg-6 col-sm-12 cust_deails pr-0 pl-0">
              <div class="conv">
            <h3 class= "camp_title2">{{$product->name}}</h3>
            <?php $str = strip_tags(limit_text($product->description,10));
                         $str1  =str_replace("\xc2\xa0",' ',$str);
                         $nbsp = html_entity_decode("&nbsp;");
                        $string = str_replace($nbsp, " ", $str1);
                         ?>
            <p class="mb-0">{{$product->short_description_one}}</p>
            <p class="mb-0">{{$product->short_description_two}}</p>
            </div> 
            <div class="x-e">

                                      <?php   $cm_endte = DB::table('multi_competition')->where('id',$product->mc_id)->first();
                                          ?>
                                        <div class="main-cownt">
                                            <div class="cownt-padding">
                                               <span class="days" id="day<?php echo$counter;?>"></span>
                                               <div class="smalltext1">Days</div>
                                            </div>
                                            <div class="cownt-padding">
                                               <span class="hours" id="hour<?php echo$counter;?>"></span>
                                               <div class="smalltext1">Hours</div>
                                            </div>
                                            <div class="cownt-padding">
                                               <span class="minutes" id="minute<?php echo$counter;?>"></span>
                                               <div class="smalltext1">Minutes</div>
                                            </div>
                                            <div class="cownt-padding">
                                               <span class="seconds" id="second<?php echo$counter;?>"></span>
                                               <div class="smalltext1">Seconds</div>
                                            </div>
                                            <p id="time-up<?php echo$counter.$cm_endte->id;?>"></p>
                                         </div>

                                       <a class="anc_tab" href="{{ url('competition/'.$product->urlCategory->slug.'/'.$product->slug) }}">
                                      <div class="anc_link">
                                      <span>Enter Now<i class="fa fa-angle-right rea"></i></span>

                                   </div>
                                   </a>
                                   </div>


            </div>
            <div class="col-lg-6 col-sm-12 max_details pr-0 pl-0">
              <div class="r_image">
                   @foreach($product->main_img as $key => $img)
                                       @if($key >0)
                                       @break
                                       @endif
                                       <?php $myString = $product->meta_keyword;
                                        $alt = explode(',', $myString);
                                        ?>
              <a href="{{ url('competition/'.$product->urlCategory->slug.'/'.$product->slug) }}"><img class="img-fluid Cust_col_img" src="<?php echo url("products/$img->package_id/$img->name");?>" alt="{{$alt[0]}}"></a>
               <div class="ribbon ribbon-bottom-right"><span>£{{ $product->mc_price->price }}</span></div>
               @endforeach
            </div>

            </div>
          </div>
        </div>
        <?php $counter++; ?>
        @endforeach
      </div>
  </div>
                       <ul class="container" id="">
                       <!--@foreach($cmp->products as $product)-->
                       <!--<li>-->
                       <!--    <a href="{{ url('product/detail/'.$product->uniqid) }}">-->
                       <!--        <div class="car">-->
                       <!--            <div class="car_img">-->
                       <!--                @foreach($product->main_img as $key => $img)                                    -->
                       <!--                @if($key >0)-->
                       <!--                @break-->
                       <!--                @endif-->
                       <!--                <img src="<?php echo url("products/$img->package_id/$img->name");?>">-->
                       <!--                @endforeach-->
                       <!--                <div class="purple_tag">-->
                       <!--                    <img src="{{ url('frontend/images/purple_tag.png') }}">-->
                       <!--                    <p><?php  echo $curr; ?>{{ $product->mc_price->price }}</p>-->
                       <!--                </div>-->
                       <!--                <div class="car_content">-->
                       <!--                    <h4 style="color:{{$title_color->color}}">{{ $product->name }}</h4>-->
                       <!--                </div>-->
                       <!--            </div>-->
                       <!--        </div>-->
                       <!--    </a>-->
                       <!--</li>-->
                       <!--@endforeach-->
                   </ul>
                   </section>
                 </div>


                   <?php } } ?>


     <div class="container">
<h3 class="text-center cust_winner">winners</h3>

</div>
<div class="container">
    <!-- new slider -->
    <div id="mixedSlider">
        <div class="MS-content">
            <?php if(isset($winner) && ($winner->count() > 0)):
                   // echo "<pre>";
                   // print_r($winner);
                   // echo "</pre>";
                   // exit;
                    foreach ($winner as $won):
                        $pro = DB::table('packages')->where('id', $won->product_id)->first();
                        if($pro):
            ?>
                <div class="item col-md-4">
                    <div class="winner-carousel-win pb-2">
                        <div class="winner-carousel-head" style="background: linear-gradient(0deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.7) 70%),url('{{url('mcimages/'.$won->image)}}') center top no-repeat;background-size: cover;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;">
                            <div class="carousel-wot">
                                <h3>{{$won->title}}</h3>
                                <p style="text-overflow: ellipsis;">{{ $pro->short_description_one }}</p>
                                <p style="text-overflow: ellipsis;">{{ $pro->short_description_two }}</p>
                            </div>
                            <!--<div class="winner-carousel-banner-image" align="center"><img class="img-fluid" src="frontend/images/winner-img.png" alt=""></div>-->
                        </div>
                        <div class="winner-carousel-footer">
                            <h3>{{$won->winner_title}}</h3>
                            <h4>{{$won->description}}</h4>
                            <div class="carousel-ticket">
                                <p class="tick-p">£ {{$won->price}}</p>
                            </div>
                            <div class="winner-carousel-img">
                                <img src="{{url('winnerimages/'.$won->wiimage)}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                        endif; 
                    endforeach;
                    else : ?>
                      <div class="item col-md-4">
                        <div class="winner-carousel-win pb-2">
                            <div class="winner-carousel-head" style="background: linear-gradient(0deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.7) 70%),url('frontend/images/winner 2.jpg') center top no-repeat;background-size: cover;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;">
                                <div class="carousel-wot">
                                        <h3>Brand New Mercedes-Benz Gle</h3>

                                        <p>GLE 350d 4Matic AMG Line 5dr 9G-Tronic</p>
                                </div>
                                <!--<div class="winner-carousel-banner-image" align="center"><img class="img-fluid" src="frontend/images/winner-img.png" alt=""></div>-->
                            </div>
                            <div class="winner-carousel-footer">
                                <h6>Carl Baxter</h6>
                                <h4>won</h4>
                                <div class="carousel-ticket">
                                        <p class="tick-p">£30</p>
                                </div>
                                <div class="winner-carousel-img"><img src="frontend/images/winner 2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="item col-md-4">
                        <div class="winner-carousel-win pb-2">
                            <div class="winner-carousel-head" style="background: linear-gradient(0deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.7) 70%),url('frontend/images/winner 1.jpg') center top no-repeat;background-size: cover;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;">
                                <div class="carousel-wot">
                                        <h6>Brand new</h6>

                                        <p>Rolex GMT- Master II</p>
                                </div>
                                <!--<div class="winner-carousel-banner-image" align="center"><img class="img-fluid" src="frontend/images/winner-img.png" alt=""></div>-->
                            </div>
                            <div class="winner-carousel-footer">
                                <h6>John Taylor </h6>
                                <h4>Won</h4>
                                <div class="carousel-ticket">
                                        <p class="tick-p">£10</p>
                                </div>
                                <div class="winner-carousel-img"><img src="frontend/images/winner 1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="item col-md-4">
                        <div class="winner-carousel-win pb-2">
                            <div class="winner-carousel-head" style="background: linear-gradient(0deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.7) 70%),url('frontend/images/winner 3.jpg') center top no-repeat;background-size: cover;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;">
                                <div class="carousel-wot">
                                        <h6>Mercedes C Class AMG Cabriolet </h6>

                                        <p></p>
                                </div>
                                <!--<div class="winner-carousel-banner-image" align="center"><img class="img-fluid" src="frontend/images/winner-img.png" alt=""></div>-->
                            </div>
                            <div class="winner-carousel-footer">
                                <h6>Christina Walker</h6>
                                <h4>Won</h4>
                                <div class="carousel-ticket">
                                        <p class="tick-p">£25</p>
                                </div>
                                <div class="winner-carousel-img"><img src="frontend/images/winner 3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="item col-md-4">
                        <div class="winner-carousel-win pb-2">
                            <div class="winner-carousel-head" style="background: linear-gradient(0deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.7) 70%),url('frontend/images/winner 4.jpg') center top no-repeat;background-size: cover;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;">
                                <div class="carousel-wot">
                                        <h6>Kawasaki Versys 1000 Grand Tourer </h6>

                                        <p></p>
                                </div>
                                <!--<div class="winner-carousel-banner-image" align="center"><img class="img-fluid" src="frontend/images/winner-img.png" alt=""></div>-->
                            </div>
                            <div class="winner-carousel-footer">
                                <h6>David Berry </h6>
                                <h4>Wins</h4>
                                <div class="carousel-ticket">
                                        <p class="tick-p">£20</p>
                                </div>
                                <div class="winner-carousel-img"><img src="frontend/images/winner 4.jpg" alt="">
                                </div>
                            </div>
                        </div>
                      </div>
                
                   
                 <?php endif; 
            ?>
                <!-- div class="item col-md-4" -->
                
                <!-- <div class="item col-md-4">
                    <div class="winner-carousel-win pb-2">
                        <div class="winner-carousel-head" style="background: linear-gradient(0deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.7) 70%),url('frontend/images/car18.jpg') center top no-repeat;background-size: cover;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;">
                            <div class="carousel-wot">
                                    <h3>New Honda Civic E12</h3>

                                    <p>just for £45</p>
                            </div>
                            <div class="winner-carousel-banner-image" align="center"><img class="img-fluid" src="frontend/images/winner-img.png" alt=""></div>
                        </div>
                        <div class="winner-carousel-footer">
                            <h3>Mr Wick jane</h3>
                            <h4>New York Beside the Ric</h4>
                            <div class="carousel-ticket">
                                    <p class="tick-p">£89</p>
                            </div>
                            <div class="winner-carousel-img"><img src="frontend/images/car18.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                 -->
                <!-- div class="item col-md-4" -->
        </div>
    </div>


</div>





<!--</div>-->

<div id="id0771" class="modal onload_modal">
  
  <form id="reg_form3" class="modal-content width_content">
    <h1 id="register_head">Free Ticket Signup</h1>
    <span onclick="document.getElementById('id0771').style.display='none'" class="close remove" id="subscribe_close" title="Close" style="color: red;opacity: 1;">&times;</span>
      <!-- <p>Enter Your email to subscribe</p> -->
    <div class="container cust_con">
   
      <label class="psw-lay mt-2" for="email">Chance to get free ticket for competitions</label>
      
       <div class="inline_inpt">
      
      <input id="subscribe_email_id" class="form-control subs_input" type="email" placeholder="Enter email" name="subscribe_email" required >
    <!--<div class="clearfix subs_btn">-->
     <button type="submit" class="signupbtn remove" id="subscriber_submit">Submit</button>
     <div id="loadgif" style="display:none; ">
            <img src="Preloader.gif" name="load" id="load" alt="Loading, please wait..." />
        </div>
       <!-- <button type="button" onclick="change_modal_to_products()" class="cancelbtn remove" id="subscribe_cancel">Skip</button>-->
       <button type="button" onclick="document.getElementById('id0771').style.display='none'" class="cancelbtn remove" id="subscribe_cancel">Skip</button>
       
       
        <div class="loader"  id="my_loader" style="margin: 0 auto;"></div>
     </div>
      <!--<div class="aftr">-->
      <!--  <h5>One Step Away</h5><i class="fa fa-arrow-down"></i>-->
      <!--</div>-->
      <!--<div class="subs_img">-->
      <!--  <img src="frontend/images/commision.png" class="img-fluid" alt="" >-->
      <!--  <h3>Share With Friends and Social Media</h3>-->
      <!--</div>-->
       <!-- <img src="frontend/images/pro6.jpg" class="img-fluid left_img" alt="" > -->
       <div class="imgs_subs">
           <p class="chnc">Get Free Ticket For</p>
        <div class="right_img">
            <div id="modalCarousel" class="owl-carousel">
                @foreach(\App\Package::where('status', 1)->get() as $key => $product)
                <?php 
                    $responce = \App\PaksageImage::where('package_id', $product->id)->where('main_img', 1)->first();
                    if($responce){
                        $img_name = $responce->name;
                    }else{
                        continue;
                    }
                ?>
                <div class="item" data-id="{{$product->id}}">
                    <div class="productImgs">
                        <div class="imgs_subs after_sub">
                            <p class="prizing">£{{$product->price}}</p>
                            <img src="{{url('/products/'. $product->id ."/". $img_name)}}" class="img-fluid">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
       <!--<img src="frontend/images/iphone2.jpg" class="img-fluid right_img" alt="" >-->
       <!-- <img src="frontend/images/iphone.jpg" class="img-fluid right_img" alt="" > -->
       
        <h7 class="discount_offer" style="right: 30%;display:none;">10% <br> Discount</h7>
     </div>

  </div>
        
</form>
   
</div>




<div  id="testimonials">

    <div class="container">
        <h3 class="text-center testimonials">testimonials</h3>
    <div class="row">
      @foreach($testimonials as $row)
        <div class="col-12 col-lg-4">
            <div class="card zeraa">
      <img class="card-img-top" src="{{ url('testimonials_image/'.$row->image_name) }}" class="rounded-circle img-fluid">
      <div class="card-body testimonial_cardbody">
         <p class="card-text">{{$row->description}}</p>
        <h6 class="h6_text">{{ $row->footer}}</h6>

      </div>

    </div>
        </div>
       @endforeach
</div>
</div>
</div>

<!--<div class="container" style="text-align: right;font-size: 24px;">-->
<!--    <div class="toggle"></div>-->
<!--    </div>-->


<div  id="testimonials" class="content">

    <div class="container">
        <h3 class="text-center testimonials">{{$settings->heading1}}</h3>
    <div class="row p_row">
      <?php print_r($settings->all_competation); ?>
</div>
</div>
<!-- <div class="container">
  <div id="accordion">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h2 class="mb-0 cust_collapse">
          <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">               <i
           class="fa" aria-hidden="true" style="padding-right: 7px;"></i>
            {{$settings->heading1}}
          </button>
        </h2>
      </div>

      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
             <?php print_r($settings->block1); ?>

        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingTwo">
        <h2 class="mb-0 cust_collapse">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <i class="fa" aria-hidden="true" style="padding-right: 7px;"></i>
            {{$settings->heading2}}
          </button>
        </h2>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
        <div class="card-body">
     <?php print_r($settings->block2); ?>
      </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingThree">
        <h2 class="mb-0 cust_collapse">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <i class="fa" aria-hidden="true" style="padding-right: 7px;"></i>
            {{$settings->heading3}}
          </button>
        </h2>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
        <div class="card-body">
        <?php print_r($settings->block3); ?>

        </div>
      </div>
    </div>
  <div class="card">
      <div class="card-header" id="headingfour">
        <h2 class="mb-0 cust_collapse">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
            <i class="fa" aria-hidden="true" style="padding-right: 7px;"></i>
            {{$settings->heading4}} 
          </button>
        </h2>
      </div>
      <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
        <div class="card-body">
      <?php print_r($settings->block4); ?>
        </div>
      </div>
    </div>
  <div class="card">
      <div class="card-header" id="headingfive">
        <h2 class="mb-0 cust_collapse">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
            <i class="fa" aria-hidden="true" style="padding-right: 7px;"></i>
            {{$settings->heading5}} 
          </button>
        </h2>
      </div>
      <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordion">
        <div class="card-body">
      <?php print_r($settings->block5); ?>

        </div>
      </div>
    </div>

  <div class="card">
      <div class="card-header" id="headingseven">
        <h2 class="mb-0 cust_collapse">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
            <i class="fa" aria-hidden="true" style="padding-right: 7px;"></i>
            {{$settings->heading6}} 
          </button>
        </h2>
      </div>
      <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordion">
        <div class="card-body">
     <?php print_r($settings->block6); ?>
        </div>
      </div>
    </div>

  </div>
</div> -->
</div>
</div>



<div class="modal" id="successModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="successHeadingDiv" style="color: Green;">Success</h3>
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


<div class="modal" id="productsModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content cust_modal_doc">
            <!--carasoul start-->
            
            <div id="modalCarousel" class="owl-carousel">
                @foreach(\App\Package::where('status', 1)->get() as $key => $product)
                <div class="item" data-id="{{$product->id}}">
                    <div class="productImgs">
                        <div class="imgs_subs second_img">
                            <!--<p class="chnc">Chance to win</p>-->
                            <div class="view-gallery-car custom_glry">
                                <div class="product_titl after_modal_pro">
                                  <h1>{{ $product->name }}</h1>
                                  <input id="package_id" type="hidden" value="{{$product->id}}">
                                  <button type="button" class="close product_model" data-dismiss="modal">×</button>
                                </div>
                                <?php 
                                    $mc_responce = DB::table('multi_competition')->where('id', $product->mc_id)->first();
                                    if($mc_responce){
                                        $product_price = $mc_responce->price;
                                    }else{
                                        continue;
                                    }
                                    $responce = \App\PaksageImage::where('package_id', $product->id)->where('main_img', 1)->first();
                                    if($responce){
                                        $img_name = $responce->name;
                                    }else{
                                        continue;
                                    }
                                ?>
    
                                <div class="conts">
                                    <h4>Ticket Price: £{{ $product_price }}</h4>
                                </div>
                                
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
                                    <button type="button" class="add_cart_btn add_to_cart_multi">Add to Cart <i class="fa fa-shopping-cart"></i></button>
                                </div>
                                <div class="timer_text" style="display: block;width: 100%">
                                    <button class="btn discont_btn" type="button" data-toggle="collapse" data-target="#discount_collapse" aria-expanded="false" aria-controls="discount_collapse"> Discounts </button>
                                    <?php 
                                                    $product_discounts = \App\Discounts::where('c_id', $product->id)->orderBy('id', 'DESC')->get()->toArray();
                                                  ?>
                                                     <div class="discount_offers">
                                                         @if(isset($product_discounts[0]) && isset($product_discounts[1]))
                                                        <h7>Discounts</h7>
                                                        <p style="margin-bottom: 0;color: #000;border: none;padding-top: 0;">{{$product_discounts[0]['no_of_tickets']}}+ {{$curr}}{{ number_format($product_price - (($product_price * $product_discounts[0]['discount_percentage']) / 100), 2)}} &nbsp;&nbsp; {{$product_discounts[1]['no_of_tickets']}}+ {{$curr}}{{ number_format($product_price - (($product_price * $product_discounts[1]['discount_percentage']) / 100), 2)}}</p>
                                                        @endif
                                                    </div>
                                    <!--<p style="margin-bottom: 0;color: #000;border: none;padding-top: 0;">5+ Value &nbsp;&nbsp; 10+ RS</p>-->
                                    <div class="collapse show" id="discount_collapse">
                                    </div>
                                </div>
                            </div>
                            <img src="{{url('/products/'. $product->id ."/". $img_name)}}" class="img-fluid">
                            <p style="color: #000;margin-top: 13px;">Slide To Change</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!--carasoul end-->
        </div>
    </div>
</div>




<div class="modal" id="errorModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="errorHeadingDiv" style="color: red;">Error</h3>
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
 <script>
//  $(document).ready(function () {
//         (function ($) {
            $('.owl-carousel').owlCarousel({
                responsiveClass:true,
                loop: false,
                nav:true,
                items: 1,
                dots: false,
            });
    //     })(jQuery);
    // });

// $(document).ready(function(){
//   var $content = $(".content").hide();
//   $(".toggle").on("click", function(e){
//     $(this).toggleClass("expanded");
//     $content.slideToggle();
//   });
// });
// </script>

<script>
  jQuery(document).ready(function() {
    $('.remove').click(function() {
      $('.modal-open').css('overflow', 'initial');
    });
  });
</script>

<script>
  $('#my_loader').hide();

  $('#subscribe_close').click(function(){
    $('.modal-backdrop').remove();
  });

  $('#subscribe_cancel').click(function(){
    $('.modal-backdrop').remove();
  });

//   $(document).on('submit','#reg_form3',function(e){
//     e.preventDefault();

//     // var $loading = $('#yourloadingdiv').hide();
//      $('#my_loader').show();
//      $('#subscriber_submit').css('cursor', 'initial');
//      $('#subscriber_submit').prop('disabled', true);

//     $.ajax({
//       headers: {
//             'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
//           },
//       type:'POST',
//       url: $(this).attr('action'),
//       data: $(this).serialize(),
//       success: function(msg){
//         if(msg.status==1){
//           // window.location.href='{{ url("profile")}}';
//           swal({
//   title: "Success",
//   text: msg.msg,
//   type: "success",
//   showCancelButton: false,
//   confirmButtonClass: "btn-primary",
//   confirmButtonText: "OK",
//   closeOnConfirm: false
// },
// function(){
//   window.location.reload();
// });
                    
//         }else{
//           swal("Error", msg.msg, "error");
//           $('#my_loader').hide();
//      $('#subscriber_submit').css('cursor', 'pointer');
//      $('#subscriber_submit').prop('disabled', false);          

//         }
//       }
//     });
//   });
</script>
<?php $counter =0;?>
 <?php foreach($competitions as $key=> $row){ ?>
  <?php foreach($row as $index=> $cmp){ ?>
  <?php foreach($cmp->products as $product){
  $cm_endtess = DB::table('multi_competition')->where('id',$product->mc_id)->first();
  $stop_date = $cm_endtess->end_date;
  $stop_dates = date('Y-m-d H:i:s', strtotime($stop_date . '+23 hour +59 minutes +59 seconds'));
  ?>
<script>

  
    var x = setInterval(function() {
    var new_date="<?php echo date('M d, Y H:i:s',strtotime($stop_dates)) ;?>";
    var deadline = new Date(new_date).getTime();
   var currentTime = new Date().getTime();

   var t = deadline - currentTime;
   var days = Math.floor(t / (1000 * 60 * 60 * 24));
   var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60));
   var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
   var seconds = Math.floor((t % (1000 * 60)) / 1000);



   document.getElementById("day<?php echo$counter;?>").innerHTML =days ;
   document.getElementById("hour<?php echo$counter;?>").innerHTML =hours;
   document.getElementById("minute<?php echo$counter;?>").innerHTML = minutes;
   document.getElementById("second<?php echo$counter;?>").innerHTML =seconds;


   if (t < 0) {
      clearInterval(x);
      document.getElementById("time-up<?php echo$counter.$cm_endtess->id;?>").innerHTML = "TIME UP";
      document.getElementById("day<?php echo$counter;?>").innerHTML ='0';
      document.getElementById("hour<?php echo$counter;?>").innerHTML ='0';
      document.getElementById("minute<?php echo$counter;?>").innerHTML ='0' ;
      document.getElementById("second<?php echo$counter;?>").innerHTML = '0';
   }
}, 1000);

</script>

<?php $counter++; } } } ?>



<?php foreach($competitions as $key=> $row){ ?>
        <?php foreach($row as $index=> $cmp){ ?>
<script>
  $("#defaultOpen<?php echo $cmp->id;?>").click(function() {
    $('html, body').animate({
        scrollTop: $("#cmptitle<?php echo $cmp->id;?>").offset().top
    }, 500);
});
</script>
<?php } } ?>




  <script>

 $(window).scroll(function(){
    if ($(window).scrollTop() >= 1200) {
        $('#mytab').addClass('fixed-tabs');
    }
    else {
        $('#mytab').removeClass('fixed-tabs');
    }
});
</script>
<script>
  $('.tablinks').on('click', function(){
    $(this).siblings().removeClass('active'); // if you want to remove class from all sibling buttons
    $(this).addClass('active');
});
</script>
<script>
                        $(document).ready(function(){
                          $("#mytab").click(function(){
                            $(".tablinks").toggle();
                          });
                        });
                    </script>






<script>
  // 2. This code loads the IFrame Player API code asynchronously.
  var tag = document.createElement('script');

  tag.src = "https://www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  // 3. This function creates an <iframe> (and YouTube player)
  //    after the API code downloads.
  var player;
  function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
      height: '390',
      width: '640',
       playerVars: { 'autoplay': 1, 'controls': 1 , 'rel':0 , 'loop':1 },
      videoId: 'f8broecxGY0?list=PLMekUxM9l9yjOJ4XmzF9trsHA2nfD42yL',
      events: {
        'onReady': onPlayerReady,
        'onStateChange': onPlayerStateChange
      }
    });
  }



  // 4. The API will call this function when the video player is ready.
  function onPlayerReady(event) {
    event.target.playVideo();
  }

  // 5. The API calls this function when the player's state changes.
  //    The function indicates that when playing a video (state=1),
  //    the player should play for six seconds and then stop.
  var done = false;
  function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.PLAYING && !done) {


    }
  }




  function stopVideo() {
    player.stopVideo();
  }


</script>
<!--      var timeLeft = endTime - now;-->

<!--      var days = Math.floor(timeLeft / 86400); -->
<!--      var hours = Math.floor((timeLeft - (days * 86400)) / 3600);-->
<!--      var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);-->
<!--      var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));-->

<!--      if (hours < "10") { hours = "0" + hours; }-->
<!--      if (minutes < "10") { minutes = "0" + minutes; }-->
<!--      if (seconds < "10") { seconds = "0" + seconds; }-->

<!--      $("#days").html(days + "<span></span>");-->
<!--      $("#hours").html(hours + "<span></span>");-->
<!--      $("#minutes").html(minutes + "<span></span>");-->
<!--      $("#seconds").html(seconds + "<span></span>");    -->

<!--  }-->

<!--  setInterval(function() { makeTimer(); }, 1000);-->
<!--  </script>-->



<!--------------------------->
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="frontend/js/multislider.js"></script>
<script>
$('#basicSlider').multislider({
			continuous: true,
			duration: 2000
		});
		$('#mixedSlider').multislider({
			duration: 750,
			interval: 3000
		});
</script>
<script>

$("#subscriber_submit").click(function(){
   var email = document.getElementById('subscribe_email_id').value;
   console.log(email);
  if(email != ""){
        $('#subscriber_submit').css('opacity', '0');
     $('#loadgif').show();
  }
});
</script>
</body>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

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

<script>
    $("#reg_form3").on('submit',(function(e) {
        e.preventDefault();
        $('#loadgif').fadeIn(1500);
        $.post("{{url('/register_subscriber')}}",
        {
            _token: "{{ csrf_token() }}",
            subscribe_email: document.getElementById('subscribe_email_id').value,
            product_id: $("#modalCarousel .owl-item.active .item").attr("data-id")
        },
        function(data,status){
            console.log(data,"data");
            if(data.status == 1)
            {
                console.log(data,"data");
                $('#id0771').modal('hide');
                $('#successModal').modal('show');
                $('#successHeadingModal').html(data.msg);
                
                setTimeout(function(){ $('#successModal').modal('hide');
                $('#productsModal').modal('show'); }, 2000);
            }
            else if( data.status == 0 )
            {
                console.log(data,"data");
                $('#id0771').modal('hide');
                $('#errorModal').modal('show');
                $('#errorHeadingModal').html(data.msg);
                
                setTimeout(function(){ $('#errorModal').modal('hide');
                $('#id0771').modal('show'); $('#subscriber_submit').css('opacity', '1');
                $('#loadgif').hide();}, 1000);
            }
        });
    }));
    function change_modal_to_products(){
        document.getElementById('id0771').style.display='none';
        $('#productsModal').modal('show');
    }
    
</script>



@endsection

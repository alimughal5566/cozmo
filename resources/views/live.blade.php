@extends('layouts.app')
@section('content')
<?php $curr=Config::get("constants.currency"); ?>


  <!-- Load Facebook SDK for JavaScript -->
  <?php if($data->iframe_status==1){?>
  <div id="fb-root"></div>
  <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '2355644277987466',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v4.0'
    });
  };
</script>
<script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>
<style>
    .video-height{
        margin: 20px auto;
        width: 700px;
           height: auto;
    }
    @media screen and (max-width: 712px){
        .video-height{
          width: 500px;
    height: 287px;

        }
    }
    @media screen and (max-width: 512px){
        .video-height{
                width: 320px;
    height: 178px;
    
        }
    }
    @media screen and (max-width: 350px){
        .video-height{
             width: 220px;
          height: 127px;
        }
    }
    @media (max-width: 300px)
._4969 {
    width: 100% !important;
}
}
.video-height {display:none;}
.preload { 
    display: flex;
    margin: 100px 0px;
    
/*
     width: 700px;
     height: 265px;
    position: fixed;
   top: 50%;
    left: 50%;
*/
    }
    .preload img {
        margin: 0 auto;
    }
</style>
<script>
    $(function() {
    $(".preload").fadeOut(2000, function() {
        $(".video-height").fadeIn(1000);        
    });
});
</script>

  <!-- Your embedded video player code -->
  <section style="min-heigth:550px;">
 <h6 style="text-align:center;margin-top:10px;">{{$data-> title}}</h6>
<div class="preload"><img src="http://i.imgur.com/KUJoe.gif">
</div>
<div class="video-height">
  <div  class="fb-video" data-href="<?php echo $data->iframe;?>" data-height="270" data-show-text="false">
    <div class="fb-xfbml-parse-ignore">
      <blockquote cite="<?php echo $data->iframe;?>">
        <a href="<?php echo $data->iframe;?>">How to Share With Just Friends</a>
        <p>How to share with just friends.</p>
        Posted by <a href="https://www.facebook.com/facebook/">Facebook</a> on Friday, December 5, 2014
      </blockquote>
    </div>
  </div>
  </div>
<?php } else { ?>

<!--
  <div class="alert alert-danger" style="height: 300px; display: flex; justify-content: center; align-items: center;">
   <i class="fa fa-times-circle" style="font-size: 50px !important;color: red;"></i> <span><p style="margin: 12px;">Live Streaming is not currently avaliable wait for live draw</p></span>
  </div>
-->
<div class="container">
    <div class="alert alert-danger" style="margin:110px 0;"><p style="text-align:center; margin-top:10px;">Live Streaming is not currently avaliable wait for live draw</p></div> 
    </div>
    </section>
<?php } ?>

@endsection
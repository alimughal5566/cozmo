<!DOCTYPE html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msvalidate.01" content="A11E61D6C7A014D0C673723589DC79A1" />
    
     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel='icon' href="{{url('frontend/images/favicon.png')}}" type='image/x-icon' sizes="48x48">
    <!-- <link rel="icon" href="{{ url('frontend/images/16x16.png')}}" type="image/png" size="50/16"> -->
   
     <link rel="stylesheet" href="{{url('backend/css/sweetalert.css')}}">
     <link rel="stylesheet" type="text/css" href="{{url('frontend/css/jquery.countdown.css')}}">
    <link href="{{ url('frontend/css/slick.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('frontend/css/jquery.lineProgressbar.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/css/style.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="{{ url('frontend/js/jquery-2.2.3.min.js') }}"></script>

    <script type="text/javascript" src="{{ url('frontend/video/jquery.vide.js') }}"></script>

     <!--<script type="text/javascript" src="{{ url('frontend/video/jquery.vide.js') }}"></script>-->

    <script src="{{url('backend/js/sweetalert.js')}}"></script>

    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

 <!--  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon"> -->
  <link rel="icon" href="images/favicon.png" type="images/gif" sizes="16x16">
  <link href="https://fonts.googleapis.com/css2?family=B612&family=Rubik&display=swap" rel="stylesheet">


  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Prize Maker",
  "image": "https://prizemaker.com/blogimages/1576697310.jpg",
  "@id": "https://prizemaker.com",
  "url": "https://prizemaker.com",
  "telephone": "02039625722",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "160 Kemp House,City Road",
    "addressLocality": "London",
    "postalCode": "EC1V 2NX",
    "addressCountry": "+44",
    "addressRegion": "London"
  },
  "sameAs": [
    "https://www.facebook.com/prizemakeruk/",
    "https://www.instagram.com/prizemaker_winners/",
    "https://twitter.com/prize_maker"
  ],
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
      "Sunday"
    ],
    "opens": "00:00",
    "closes": "23:59"
  }
}

<!-- Global site tag (gtag.js) - Google Ads: 655426159 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-655426159"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-655426159');
</script>

</script>
    <style>
          button {
    width: auto !important;
}
/*#header{*/
/*    z-index:1 !important;*/
/*}*/
input[type="text"], input[type="password"] {
    margin: auto !important;
}
      @-webkit-keyframes spin {
      0% { -webkit-transform: rotate(0deg); }
      100% { -webkit-transform: rotate(360deg); }
      }

  @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
    }


    </style>
    
     <?php $url1= Request::segment(1);
          $url2= Request::segment(2);
          $url3= Request::segment(3);
          $setting = DB::table('setting')->first();
         
          ?>

         @if(($url1=="refer_friend" || $url1=="register_page") || ($url1=="social_register" && ( $url3=="facebook" || $url3=="twitter")) )
            
            <meta property="og:title"              content="Win referral and business commissions by prizemaker" /> 
            <meta property="og:url"                content="{{ Request::url() }}" />
            <meta property="og:type"               content="website" />
            <meta property="og:description"        content="Description: We offer {{$setting->commission}}% commission for referrals and {{$setting->business_ref_commission}}% commission to business profile. Business profile will receive referral and business commission both." />
            <meta property="fb:app_id"             content="2320966874585437" />
            <meta property="og:image"              content="<?php  echo url("sahre-image.png");?>" />
           @endif

    @if(isset($package))
    <title>Win a {{ !empty($package->meta_title) ? $package->meta_title:$package->name}}</title>
    <meta name="keyword"                   content="{{$package->meta_keyword}}"/>
    <meta name="description" content="Prize Maker giving you a chance to Win a {{ $package->name }} through a live lucky draw at our facebook page. {{ !empty($package->meta_title) ?  $package->meta_description:$package->meta_title }}">
    <meta property="og:title"              content=@if($package->id==55 || $package->id==56) "{{ $package->name}}" @else "Win a Free Ticket For {{ $package->name}}" @endif /> 
    <meta property="og:url"                content="{{ Request::url() }}" />
    <meta property="og:type"               content="website" />
    <meta property="og:description"        content="" />
    <meta property="fb:app_id"             content="2320966874585437" />
    @foreach($package->main_img as $key => $img)
    <meta property="og:image"              content="<?php  echo url("products/$img->package_id/$img->name");?>" />
          @endforeach
   @else
    <meta name="description" content="{{$setting->meta_description}}">
    <meta name="keywords" content="{{$setting->meta_keywords}}">
    <title>{{ $setting->meta_title}}</title>
    @endif
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154470660-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-154470660-1');
        </script>
    
    </head>
   <body>
    <!-- header-->
    @include('layouts.header')
    <main class="app-content">
      @yield('content')
    </main>
    <script src="{{url('frontend/js/jquery.countdown.min.js')}}"></script>
	  @include('layouts.footer')
  
  </body>
</html>


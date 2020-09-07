<head><meta charset="windows-1252">
	<title>Home</title>

</head>
@extends('layouts.app', ['settings' => $settings])
@section('content')
<div id="fb-root"></div>


  <style>
    .search_icon_fixed {
      font-size: 18px;
    background: #03a9f4;
    padding: 9.55px 15px;
    border-radius: 52px;
    color: #fff;
    display: block;
    /* margin-bottom: 5px; */
    margin-right: 30px;
    margin-top: 0px;
    }
    .main-top {
      height: 70px;
    }
    
  </style>


  <body>

  

  <section class="banner-secs">
    <div class="banner-form">
      <div class="container banner-con">
        <form action="article-search" method="post" novalidate="novalidate">
            {{ csrf_field() }}
          <h3>Sharing Knowledge . Improving Skills . Influencing Vendors</h3>
          <div class="row">
            <div class="col-lg-12 main-serch-cl">
              <div class="row" style="padding: 0 32px;">
                
                <div class="col-md-3 p-0">
                  
                  <select style="height: 50px;" class="form-control search-slt" id="exampleFormControlSelect1" name="categories">
                    <option>Categories </option>
                    <option>Example one</option>
                    <option>Example one</option>
                    <option>Example one</option>
                    <option>Example one</option>
                    <option>Example one</option>
                    <option>Example one</option>
                  </select>
                </div>
                
                <div class="col-md-9 p-0 set_alignment">
                  <input style="height: 50px;" class="form-control serch-box" type="text" placeholder="Search Article by Title.." name="name">
                  <button style="height: 50px;" class="serch-btn" type="submit"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </div>
          </div>
        </form>
        <div class="row">
          <div class="col-md-3 first-sec">
            <a href="#"><h2>About IPUG</h2></a>
          </div>
          <div class="col-md-3 first-sec">
            <a href="#"><h2>Benefits of membership</h2></a>
          </div>
          <div class="col-md-3 first-sec third_sec">
            <a href="#"><h2>Our events</h2></a>
          </div>
          <div class="col-md-3 first-sec fouth_sec">
            <a href="#"><h2>Become a member</h2></a>
          </div>
        </div>
      </div>
      
    </section>
    <main id="main">
      <section class="works-sec">
        <div class="container">
          <div class="row">
            
            
            <div class="col-md-4" style="border-right: 1px solid #d8d8d8;">
              
              <img class="card-image" src="images/knowledge.png" alt="alternative">
              <div class="card-body text-center">
                <h5 class="card-title">sharing knowledge</h5>
                <p class="card-p">Lorem ipsum dolor sit amet, consectetur
                Quisquam doloribus dolorem libero.</p>
              </div>
            </div>
            <div class="col-md-4" style="border-right: 1px solid #d8d8d8;">
              
              <img class="card-image" src="images/skills.png" alt="alternative">
              <div class="card-body text-center">
                <h5 class="card-title">Improving skills</h5>
                <p class="card-p">Lorem ipsum dolor sit amet, consectetur
                Quisquam doloribus dolorem libero.</p>
              </div>
            </div>
            <div class="col-md-4">
              
              <img class="card-image" src="images/influence.png" alt="alternative">
              <div class="card-body text-center">
                <h5 class="card-title">Influencing vendors</h5>
                <p class="card-p">Lorem ipsum dolor sit amet, consectetur
                Quisquam doloribus dolorem libero.</p>
              </div>
            </div>
            
            
          </div>
        </div>
      </section>
      <section id="events" class="events">
        <div class="container">
          <div class="banner-sec ">
            <h3>IPUG News and Articles</h3>
          </div>
        </div>
        <div class="slider wow bounceIn">
          <div class="container">
            
            <div class="owl-carousel events-carousel">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="images/slider_img.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                  <div class="heading_blog">
                    <h2>FINALLY, A BIRTHDAY GIFT</h2>
                  </div>
                  <div class="paragraph">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                  </div>
                  <div class="more_view">
                    <h5>VIEW MORE</h5>
                    <div class="row">
                      <div class="col-md-6">
                        <p><i class="fa fa-check"></i>FCA Call for Input</p>
                      </div>
                      <div class="col-md-6">
                        <p><i class="fa fa-check"></i>FCA Call for Input</p>
                      </div>
                      <div class="col-md-6">
                        <p><i class="fa fa-check"></i>Etiam dignissim sit amet</p>
                      </div>
                      <div class="col-md-6">
                        <p><i class="fa fa-check"></i>FCA Call fcxc sd or Input</p>
                      </div>
                      <div class="col-md-6">
                        <p><i class="fa fa-check"></i>Lorem joint esay</p>
                      </div>
                      <div class="col-md-6">
                        <p><i class="fa fa-check"></i>FTSE/Russell ICB Changes</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="images/slider_img.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                  <div class="heading_blog">
                    <h2>FINALLY, A BIRTHDAY GIFT2</h2>
                  </div>
                  <div class="paragraph">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                  </div>
                  <div class="more_view">
                    <h5>VIEW MORE</h5>
                    <div class="row">
                      <div class="col-md-6">
                        <p><i class="fa fa-check"></i>FCA Call for Input</p>
                      </div>
                      <div class="col-md-6">
                        <p><i class="fa fa-check"></i>FCA Call for Input</p>
                      </div>
                      <div class="col-md-6">
                        <p><i class="fa fa-check"></i>Etiam dignissim sit amet</p>
                      </div>
                      <div class="col-md-6">
                        <p><i class="fa fa-check"></i>FCA Call fcxc sd or Input</p>
                      </div>
                      <div class="col-md-6">
                        <p><i class="fa fa-check"></i>Lorem joint esay</p>
                      </div>
                      <div class="col-md-6">
                        <p><i class="fa fa-check"></i>FTSE/Russell ICB Changes</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="images/slider_img.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                  <div class="heading_blog">
                    <h2>FINALLY, A BIRTHDAY GIFT3</h2>
                  </div>
                  <div class="paragraph">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                  </div>
                  <div class="more_view">
                    <h5>VIEW MORE</h5>
                    <div class="row">
                      <div class="col-md-6">
                        <p><i class="fa fa-check"></i>FCA Call for Input</p>
                      </div>
                      <div class="col-md-6">
                        <p><i class="fa fa-check"></i>FCA Call for Input</p>
                      </div>
                      <div class="col-md-6">
                        <p><i class="fa fa-check"></i>Etiam dignissim sit amet</p>
                      </div>
                      <div class="col-md-6">
                        <p><i class="fa fa-check"></i>FCA Call fcxc sd or Input</p>
                      </div>
                      <div class="col-md-6">
                        <p><i class="fa fa-check"></i>Lorem joint esay</p>
                      </div>
                      <div class="col-md-6">
                        <p><i class="fa fa-check"></i>FTSE/Russell ICB Changes</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="charity-sec">
        <div class="container">
          <div class="banner-sec">
            <div class="with_btn"><h3>IPUG Charity of the Year</h3><button type="button" class="all_cherity_btn"><a href="/charity">View All</a></button></div>
            <p>Lorem ipsum dolor sit amet, consectetur Quisquam doloribus dolorem libero.<br>
            Lorem ipsum dolor sit amet,consectetur</p>
            <div class="search-sec">
              <div class="container p-0">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card-content">
                      <div class="card-img">
                        <img src="images/1.jpg" alt="">
                        
                      </div>
                      <div class="card-desc">
                        <h4>London Children’s</h4>
                        <p>Lunch Party at FoodVillas</p>
                        <p>Etiam dignissim sit amet felis</p>
                        <p>Assistants</p>
                        <div class="btnee"><a href="#" class="btn-card">Read All</a>   </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card-content">
                      <div class="card-img">
                        <img src="images/2.jpg" alt="">
                        
                      </div>
                      <div class="card-desc">
                        <h4>London Children’s</h4>
                        <p>Lunch Party at FoodVillas</p>
                        <p>Etiam dignissim sit amet felis</p>
                        <p>Assistants</p>
                        <div class="btnee"><a href="#" class="btn-card">Read All</a>   </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card-content">
                      <div class="card-img">
                        <img src="images/3.jpg" alt="">
                        
                      </div>
                      <div class="card-desc">
                        <h4>London Children’s</h4>
                        <p>Lunch Party at FoodVillas</p>
                        <p>Etiam dignissim sit amet felis</p>
                        <p>Assistants</p>
                        <div class="btnee"><a href="#" class="btn-card">Read All</a>   </div>
                      </div>
                    </div>
                  </div>
                  
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <section class="events-sec">
        <div class="container">
          <div class="banner-sec ">
            <h3>IPUG Events</h3>
            <p>Index and Benchmarking SIG  <small class="red-small">5 May 2020 at 15:30</small><br>
            Columbia Threadneedle Investments <br> Columbia Threadneedle Investments - 78 Cannon Street - London EC4N 6AG - United Kingdom</p>
          </div>
          <!-- <div class="main-calendar">
            <div class="badgee">
              <img src="images/calendar-badge.png">
              <p class="evel-p">View All Events</p>
            </div>
            <div class="calendar-img">
              <img src="images/calendar.jpg">
            </div>
            
          </div> -->
          <div class="row">
            <div class="col-md-6 pr-0">
              <img src="images/Layer.jpg" alt="" class="img-fluid" style="width: 100%;">
            </div>

            <div class="col-md-6 p-0">
              <div class="data_section">
                <h2>Title</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a href="/events" class="se-card__featured-badge">View All Events</a>
                <button type="button" class="live_btn"><img src="images/speakw.png" alt="">Go to Live Chat</button>
              </div>
            </div>
          </div>
        </div>
      </section>

        <div class="container">
  <div class="row">
   <div id="Smallchat">
    <div class="Layout Layout-open Layout-expand Layout-right" style="background-color: #3F51B5;color: rgb(255, 255, 255);opacity: 5;border-radius: 10px;">
      <div class="Messenger_messenger">
        <div class="Messenger_header" style="background-color: rgb(22, 46, 98); color: rgb(255, 255, 255);">
          <h4 class="Messenger_prompt">How can we help you?</h4> <span class="chat_close_icon"><i class="fa fa-window-close" aria-hidden="true"></i></span> </div>
        <div class="Messenger_content">
          <div class="Messages">
            <div class="Messages_list">
              <div class="botui-app-container">
                <div id="my-botui-app">
                    <bot-ui></bot-ui>
                </div>
            </div>
            </div>
          </div>
          <div class="Input Input-blank">
            <textarea class="Input_field" placeholder="Send a message..." style="height: 20px;"></textarea>
            <button class="Input_button Input_button-emoji">
              <div class="Icon" style="width: 18px; height: 18px;">
                <svg width="56px" height="56px" viewBox="1332 47 56 56" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="width: 18px; height: 18px;">
                  <g id="emoji" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(1332.000000, 47.000000)">
                    <path d="M28,56 C12.536027,56 0,43.463973 0,28 C0,12.536027 12.536027,0 28,0 C43.463973,0 56,12.536027 56,28 C56,43.463973 43.463973,56 28,56 Z M28,50 C40.1502645,50 50,40.1502645 50,28 C50,15.8497355 40.1502645,6 28,6 C15.8497355,6 6,15.8497355 6,28 C6,40.1502645 15.8497355,50 28,50 Z" id="Oval-8" fill="#96AAB4" fill-rule="nonzero"></path>
                    <path d="M28,47 C18.0588745,47 10,38.9411255 10,29 C10,27.5224898 11.5469487,26.5550499 12.8754068,27.2017612 C13.0116063,27.2662365 13.0926181,27.3037345 13.1866998,27.3464814 C13.4611235,27.4711684 13.7819537,27.6111958 14.1451774,27.7627577 C15.1908595,28.199088 16.3591406,28.6365764 17.6173846,29.0449298 C21.1841638,30.2025005 24.7379224,30.8945075 28,30.8945075 C31.2620776,30.8945075 34.8158362,30.2025005 38.3826154,29.0449298 C39.6408594,28.6365764 40.8091405,28.199088 41.8548226,27.7627577 C42.2180463,27.6111958 42.5388765,27.4711684 42.8133002,27.3464814 C42.9073819,27.3037345 42.9883937,27.2662365 43.0558366,27.2344634 C44.4530513,26.5550499 46,27.5224898 46,29 C46,38.9411255 37.9411255,47 28,47 Z M28,43 C34.6510529,43 40.2188483,38.3620234 41.6456177,32.1438387 C40.9980758,32.3847069 40.320642,32.6213409 39.6173846,32.8495777 C35.6841638,34.1260741 31.7379224,34.8945075 28,34.8945075 C24.2620776,34.8945075 20.3158362,34.1260741 16.3826154,32.8495777 C15.679358,32.6213409 15.0019242,32.3847069 14.3543823,32.1438387 C15.7811517,38.3620234 21.3489471,43 28,43 Z" id="Oval-8" fill="#96AAB4" fill-rule="nonzero"></path>
                    <path d="M19,15 L19,20 C19,21.1045695 19.8954305,22 21,22 C22.1045695,22 23,21.1045695 23,20 L23,15 C23,13.8954305 22.1045695,13 21,13 C19.8954305,13 19,13.8954305 19,15 Z" id="Line" fill="#96AAB4" fill-rule="nonzero"></path>
                    <path d="M32,15 L32,20 C32,21.1045695 32.8954305,22 34,22 C35.1045695,22 36,21.1045695 36,20 L36,15 C36,13.8954305 35.1045695,13 34,13 C32.8954305,13 32,13.8954305 32,15 Z" id="Line-Copy-2" fill="#96AAB4" fill-rule="nonzero"></path>
                  </g>
                </svg>
              </div>
            </button>
            <button class="Input_button Input_button-send">
              <div class="Icon" style="width: 18px; height: 18px;">
                <svg width="57px" height="54px" viewBox="1496 193 57 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="width: 18px; height: 18px;">
                  <g id="Group-9-Copy-3" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(1523.000000, 220.000000) rotate(-270.000000) translate(-1523.000000, -220.000000) translate(1499.000000, 193.000000)">
                    <path d="M5.42994667,44.5306122 L16.5955554,44.5306122 L21.049938,20.423658 C21.6518463,17.1661523 26.3121212,17.1441362 26.9447801,20.3958097 L31.6405465,44.5306122 L42.5313185,44.5306122 L23.9806326,7.0871633 L5.42994667,44.5306122 Z M22.0420732,48.0757124 C21.779222,49.4982538 20.5386331,50.5306122 19.0920112,50.5306122 L1.59009899,50.5306122 C-1.20169244,50.5306122 -2.87079654,47.7697069 -1.64625638,45.2980459 L20.8461928,-0.101616237 C22.1967178,-2.8275701 25.7710778,-2.81438868 27.1150723,-0.101616237 L49.6075215,45.2980459 C50.8414042,47.7885641 49.1422456,50.5306122 46.3613062,50.5306122 L29.1679835,50.5306122 C27.7320366,50.5306122 26.4974445,49.5130766 26.2232033,48.1035608 L24.0760553,37.0678766 L22.0420732,48.0757124 Z" id="sendicon" fill="#96AAB4" fill-rule="nonzero"></path>
                  </g>
                </svg>
              </div>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!--===============CHAT ON BUTTON STRART===============-->
    <div class="chat_on"> <span class="chat_on_icon"><img src="images/speak.png" alt=""></span> </div>
    <!--===============CHAT ON BUTTON END===============-->
  </div>
  </div>
</div>

    </main>

      <script>
            $(document).ready(function(){
                     $('.search_icon_fixed').click(function() {
                      $('html, body').animate({
                        scrollTop: $(".banner-form").offset().top
                      }, 500);
                    });
               $( ".search_icon_fixed").click(function() {
                  $( ".serch-box" ).focus();
                    
                });
                
            });
            
        </script>
    
    
      <script>
    
    $(document).ready(function(){
        $(".chat_on").click(function(){
            $(".Layout").toggle();
            $(".chat_on").hide(300);
        });
        
           $(".chat_close_icon").click(function(){
            $(".Layout").hide();
               $(".chat_on").show(300);
        });
        
    });
  </script>
<script>
  var botui = new BotUI('my-botui-app');

  // Start Bot
  // First Messages
  botui.message.bot({
      content: 'Hi there! 👋',
      loading: true,
      delay: 3000,
  }).then(function () {
      return botui.message.bot({
          loading: true,
          delay: 1500,
          content: "I'm Umair, a web developer from Pakistan.",
      });
  }).then(function () {
      return botui.message.bot({
          loading: true,
          delay: 1500,
          content: "So i wanted to share this cool jQuery plugin with you.",
      });
  }).then(function () {
      return botui.message.bot({
          loading: true,
          delay: 1500,
          content: "[BotUI](http://)",
      });
  }).then(function () {
      return botui.message.bot({
          loading: true,
          delay: 1500,
          content: "Pretty cool plugin or?",
      });
  }).then(function () {
    return botui.action.button({
          delay: 1500,
          loading: true,
          addMessage: true,
          action: [{
              text: 'Yes!',
              value: 'yes'
          }, {
              text: 'No.',
              value: 'no'
          }]
      })
  }).then(function (res) {
    if (res.value == 'yes') {
       return botui.message.bot({
                  loading: true,
                  delay: 1500,
                  content: "I quite agree!",
              });
    } else {
      return botui.message.bot({
                  loading: true,
                  delay: 1500,
                  content: "Okay, I'm sorry ...",
              });
    }
  }).then(function () {
    return botui.message.bot({
                  loading: true,
                  delay: 1500,
                  content: "Bye, I need to go know.",
              });
  })
</script>


    <script src="js/main.js"></script>
    <script>

</script>

@endsection

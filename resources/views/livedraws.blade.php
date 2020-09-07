@extends('layouts.app')
@section('content')
<?php $curr=Config::get("constants.currency"); ?>


  <style>

.blog {
   box-shadow: 0 0 35px rgba(0, 0, 0, 0.1) inset, 0 0 0 #2f2f2f;
    text-align: center;
    transition: box-shadow 1s cubic-bezier(0.25, 0.1, 0.32, 0.8) 0s;
    border: 2px solid #ee8322;
    border-radius: 10px;
}
.blog .blog__thumb {
    overflow: hidden;
}

.blog__thumb img{
          width: 100%;
          height: 250px;
}
.blog h4{
      padding: 9px 0;
    color: #ee8322;
    position: relative;
    z-index: 3;
    border-bottom: 1px solid #ee8322;
        margin: 0;

}
.blog__details h6{
      border-bottom: 2px solid #eae6e6;
    display: inline-block;
        color: #ee8322;
            font-size: 22px;
    margin-top: 10px;
}

#clockdiv{
  font-family: sans-serif;
  color: #fff;
  display: inline-block;
  font-weight: 100;
  text-align: center;
      font-size: 30px;
}

#clockdiv > div{
  padding: 6px;
  border-radius: 3px;
  display: inline-block;
  color: black;
}

#clockdiv div > span{
  padding: 5px;
  border-radius: 3px;
  display: inline-block;
  color: #ee8322;
}

.smalltext{
  padding-top: 5px;
  font-size: 16px;
}
.title__line{
  color: #ee8322;
}
.col-lg-4{
      margin: 15px 0;
}
.blog a{
  text-decoration: none;
}
.blog__details span{
  color: #6f6f6f;
    font-size: 23px;
    margin: 0;
    float: inherit;
}
.pop{
    color: white;
    background-color: #ee8322;
    padding: 10px 60px;
    position: absolute;
    transform: rotate(45deg);
    top: 22px;
    right: -55px;
        z-index: 3;

  }
  .coming{
     color: white;
    background-color: #ee8322;
    padding: 10px 60px;
    position: absolute;
    transform: rotate(45deg);
        top: 21px;
    right: -63px;
        z-index: 3;
  }
  #tag{
        overflow: hidden;
    padding: 0;
    padding-left: 15px;
  }
 .blog a:hover 
  .blog__details h6 {
      border-bottom: 2px solid #ee8322;
      font-weight: 700;
   
}
.blog a:hover
  h4{
    color: #fff;
  }
.hover_effect{
      display: block;
    width: 100%;
    height: auto;
}
.overlay {
  position: absolute;
  bottom: 100%;
  background-color: #103746;
  overflow: hidden;
  width: 100%;
  transition: .2s ease;
}

.hover_effect:hover .overlay {
      bottom: 60%;
      height: 40%;
      clip-path: polygon(0% 0%, 100% 0, 100% 65%, 51% 84%, 0 65%);
      
    }
.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.text img{
      width: 22%;
    padding-top: 28px;
}
.cust_setting ul {
  display: flex;
}
.cust_setting p {
  color: #a79c8d;
  font-size: 14px;
}
.cust_setting li {
  padding: 2px;
}
/*.newrow{
      margin-right: 0px; 
}*/
.unit-1{
    min-height:550px;
}

@media screen and (max-width: 576px){

.alert-draw{
  margin-left: 15px;
}

}
  </style>


   <section class="fb__blog__ara section-padding--lg bg--white unit-1">
            <div class="container">
                <h2 class="title__line new-center">Live Draw</h2>
                <div class="row mt--40 newrow">

                  @if($livedrawProducts->count())
                  
                    @foreach($livedrawProducts as $row)

                     <div class="col-md-6 col-lg-4 col-sm-12 foo" id="tag">
                    <div class="hover_effect"> 
                        <div class="blog">
                          <?php $mc = DB::table('multi_competition')->where('id',$row->mc_id)->first();
                           ?>
                          <a target="blank" href="{{ url('livestreaming/'.$row->uniqid) }}">   
                                               
                          <h4>{{$row->title}}</h4> 
                                                  
                            <div class="blog__thumb">
                              <div class="pop">Live Now</div>
                             <img src="{{url('mcimages/'.$row->image)}}">
                            </div>
                           <!-- <div class="blog__details">-->
                                <!-- <h6>{{$row->name}}</h6><br> -->
                           <!-- @if($row->iframe=="")-->
                           <!-- <span style="color: red;">Live Draw Start Soon</span>   -->
                           <!-- @else-->
                           <!-- <span>Watch live draw</span>-->
                           <!-- @endif                             -->
                           <!--</div>-->
                            </a>

                        </div>
                        <div class="overlay">
                         <div class="text">
                            <img src="images/2.png">
                         </div>
                        </div>
                       </div>
                    </div>
                    @endforeach
                    @else
                    <div class="alert text-center alert-draw alert-danger" style="width: 100%;color: #000;font-size: 18px; margin: 0 17px;margin-bottom: 10px;    background-color: #00800045;border: green;" >
                      Look out for our next live draw.
                    </div>
                  <div class="col-md-12">
     	<video width="100%" controls>
			  <source src="https://prizemaker.com/2020-01-30 18-04-24.mp4">
			  <source src="mov_bbb.ogg" type="video/ogg">
			  Your browser does not support HTML5 video.
			</video>
    </div>
                    @endif

                 
                </div>
            </div>
        </section>
  <script src="{{url('frontend/js/jquery.countdown.min.js')}}"></script>
  @foreach($livedrawProducts as $row)
  <script type="text/javascript">
    $('#example<?php echo $row->id;?>').countdown({
      date: '<?php echo $row->end_date;?>',
      offset: -8,
      day: 'Day',
      days: 'Days'
    }, function () {
     // alert('Done!');
    });
  </script>
  @endforeach
        <!-- <script>
          function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000  60  60)) % 24);
  var days = Math.floor(t / (1000  60  60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = new Date(Date.parse(new Date()) + 15  24  60  60  1000);
initializeClock('clockdiv', deadline);
        </script> -->






@endsection
@extends('layouts.app')
@section('content')

<style>
.progress{
    width: 130px;
    height: 130px;
    line-height: 150px;
    background: none;
    margin: 0 auto;
    box-shadow: none;
    position: relative;
}
.progress:after{
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    border: 12px solid #fff;
    position: absolute;
    top: 0;
    left: 0;
}
.progress > span{
    width: 50%;
    height: 100%;
    overflow: hidden;
    position: absolute;
    top: 0;
    z-index: 1;
}
.progress .progress-left{
    left: 0;
}
.progress .progress-bar{
    width: 100%;
    height: 100%;
    background: none;
    border-width: 12px;
    border-style: solid;
    position: absolute;
    top: 0;
}
.progress .progress-left .progress-bar{
    left: 100%;
    border-top-right-radius: 80px;
    border-bottom-right-radius: 80px;
    border-left: 0;
    -webkit-transform-origin: center left;
    transform-origin: center left;
}
.progress .progress-right{
    right: 0;
}
.progress .progress-right .progress-bar{
    left: -100%;
    border-top-left-radius: 80px;
    border-bottom-left-radius: 80px;
    border-right: 0;
    -webkit-transform-origin: center right;
    transform-origin: center right;
    animation: loading-1 1.8s linear forwards;
}
.progress .progress-value{
    width: 90%;
    height: 90%;
    border-radius: 50%;
    background: #44484b;
    font-size: 24px;
    color: #fff;
    line-height: 135px;
    text-align: center;
    position: absolute;
    top: 1%;
    left: 5%;
}
.progress.blue .progress-bar{
    border-color: #049dff;
}
.progress.blue .progress-left .progress-bar{
    animation: loading-2 1.5s linear forwards 1.8s;
}
.progress.yellow .progress-bar{
    border-color: green;
}
.progress.yellow .progress-left .progress-bar{
    animation: loading-3 1s linear forwards 1.8s;
}
.progress.pink .progress-bar{
    border-color: #ed687c;
}
.progress.pink .progress-left .progress-bar{
    animation: loading-4 0.4s linear forwards 1.8s;
}
.progress.green .progress-bar{
    border-color: #1abc9c;
}
.progress.green .progress-left .progress-bar{
    animation: loading-5 1.2s linear forwards 1.8s;
}
@keyframes loading-1{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
    }
}
@keyframes loading-2{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(144deg);
        transform: rotate(144deg);
    }
}
@keyframes loading-3{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }
}
@keyframes loading-4{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(36deg);
        transform: rotate(36deg);
    }
}
@keyframes loading-5{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(126deg);
        transform: rotate(126deg);
    }
}
@media only screen and (max-width: 990px){
    .progress{ margin-bottom: 20px; }
}



.sonar-wrapper {
  position: relative;
  z-index: -1;
  padding-bottom: 1rem;
      border-radius: 50%;

}

/* The circle */
.sonar-emitter {
  position: relative;
  margin: 0 auto;
  width: 110px;
  height: 110px;
  border-radius: 9999px;
  background-color: HSL(45,100%,50%);
}

/* the 'wave', same shape and size as its parent */
.sonar-wave {
    position: absolute;
    top: 27px;
    left: 27px;
    width: 50%;
    height: 50%;
    border-radius: 9999px;
    background-color: HSL(45,100%,50%);
    opacity: 0;
    z-index: -1;
    pointer-events: none;
}

/*
  Animate!
  NOTE: add browser prefixes where needed.
*/
.sonar-wave {
  animation: sonarWave 2s linear infinite;
}

@keyframes sonarWave {
  from {
    opacity: 0.4;
  }
  to {
    transform: scale(3);
    opacity: 0;
  }
}
.cust_comission{
	display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
}
.cust_percente{
	position: absolute;
    right: 32px;
}
.cust_main{
	    border: 2px solid #b1b1b16e;
    margin: 18px 0;
    border-radius: 7px;
        box-shadow: 2px 9px 8px 4px #88888870;
        padding: 10px;
        margin-top: 27px;
}
.cust_users{
	/*background-image: url('frontend/images/userrr.jfif');*/
	    padding: 23px;
	    padding-bottom: 0;
}
.lay-signupbtn:hover{
  background-color: #c56712;
}

.lay-signupbtn{
width: 220px;
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
.cust_sub-btn{
display: flex;flex-direction: row;justify-content: center;margin-top: 10px;
}
.cust_img_btn{
	border:0;
}
.btn.focus, .btn:focus {
    outline: 0;
    box-shadow: none;
}

</style>

<div class="container">
	


	<div class="row cust_main">
		<div class="col-md-6 ">
			<h3 class="text-left m-0" style="color: #ee8322;">Refer to friend</h3>
			<img style="width: 100%; margin-bottom: 10px;" class="img-responsive" src="{{ url('frontend/images/share-and.png') }}">
		</div>
			<div class="col-md-6 cust_comission" >
		<p class="text-left m-0">{{$setting->ref_friend_string}}</p>
		<div class="sonar-wrapper">
			<div class="sonar-emitter">
				<div class="sonar-wave"></div>
			</div>
		</div>
		<div class="cust_percente">
			<h1>{{$setting->commission}}%</h1>
		</div>
		</div>
			<div class="col-md-6 ">
			<h3 class="text-left m-0" style="color: #ee8322;">Business Commissions</h3>
			<img style="width: 100%; margin-bottom: 10px;" class="img-responsive" src="{{ url('frontend/images/business.png') }}">
		</div>
			<div class="col-md-6 cust_comission" >
		<p class="text-left m-0">{{$setting-> buz_comsion_string}}</p>
		<div class="sonar-wrapper">
			<div class="sonar-emitter">
				<div class="sonar-wave"></div>
			</div>
		</div>
		<div class="cust_percente">
			<h1>{{$setting->business_ref_commission}}%</h1>
		</div>
		</div>
	</div>
    <div class="row cust_users">
        <div class="col-md-12">
            <!-- <h2 class="text-center" style="color: #ee8322;">We Have Active Users</h2>
            <div class="progress yellow">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">7500</div>
            </div> -->
            <div class="cust_sub-btn">
                <a class="btn cust_img_btn" type="btn" href="{{url('external_registerr/'.$refer_id)}}"><img style="width: 100%; margin-bottom: 10px;" class="img-responsive" src="{{ url('frontend/images/sig_up.png') }}"></a>
            </div>
        </div>
    </div>
</div>


@endsection
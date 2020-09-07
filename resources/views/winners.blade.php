@extends('layouts.app')

@section('content')

<style>
	.video{
		margin-top: 30px;
	}
</style>		
<section style="min-height:550px;">


<!--    <div class="container">-->
<!--         <p class="custom_header3 m-0">Trust and Security</p>-->
       
        
       
        
<!--              <div class="row pb-4 pt-4">-->
<!--               <div class="col-md-4 col-lg-4 col-sm-4 col-xl-4 col-4">-->
<!--                   <div class="imgg">-->
<!--                <img src="frontend/images/keystone.png">-->
<!--                       </div>-->
             
<!--              </div>-->
<!--             <div class="col-md-4 col-lg-4 col-sm-4 col-xl-4 col-4">-->
<!--                  <div class="imgg">-->
<!--                 <a href="#"><img src="frontend/images/trust.png"></a>-->
<!--                 </div>-->
<!--             </div>-->
             
<!--             <div class="col-md-4 col-lg-4 col-sm-4 col-xl-4 col-4">-->
<!--                 <div class="imgg">-->
<!--                 <a href="#"><img src="frontend/images/FB-S.png"></a>-->
<!--                 </div>-->
<!--             </div>-->
          
            
        
       
<!--        </div>-->
   
<!--</div>-->
<div class="container">
    <h3 class="new-center">Competition Winners</h3>
    <?php if($data->count()){ ?>
	<form method="GET" action="{{ url('my-search') }}">
	@csrf
<div class="search-fields input-group col-md-12">
      <input class="field form-control" id="s" name="search" type="text" placeholder="Search …" value="">
      <span class="input-group-append">
        <button class="cust_search btn btn-outline-secondary" type="submit">
            <i class="fa fa-search"></i>
        </button>
      </span>
</div>
</form>
<?php } ?>
<?php if($data->count()){?>
<h2 style="text-align: center;color: #ee8322">Winners</h2>
<?php } else { ?>
<h2 style="text-align: center;color: #ee8322">Last 6 Winners</h2>
<?php } ?>
  <div class="container">
	<div class="row" id="winner_gallery">
		@if($data->count())
		@foreach($data as $row)
		<div class="col-lg-3 col-md-6 col-sm-12 col-12 d-block" style="cursor: pointer;">
			<a data-toggle="modal" data-target="#f{{$row->id}}">
				<div class="cust_card card">
					<img src="<?php echo url("winnerimages/$row->image");?>" class="cust_card_img cust_card_img card-img img-fluid">
					<div class="cust_body cust_body card-body">
						<p class="card-text">{{date('Y-m-d', strtotime($row->date_created))}}</p>
						<h6 class="card-title">{{$row->title}}</h6>
					</div>
				</div>
			</a>
			<div class="modal" id="f{{$row->id}}">
				<div class="cust_modal_dialog cust_modal_dialog modal-dialog">
					<div class="winner_modal_content modal-content">
						<!-- Modal-start -->
						<div class="modal-headertop">
							<h4 class="modal-title">{{$row->title}}</h4>
							<button type="button" class="winner_close close" data-dismiss="modal">&times;</button>
						</div>
						<!-- Modal frontend/images and description -->
						<img src="<?php echo url("winnerimages/$row->image");?>">
						<div class="cust_modal_body modal-body">
							<p>{{$row->description}}</p>
						</div>
						<!-- winner_close close button -->
						<div class="modal-footerbottom">
							<button id="comp_win" type="button" class="cust_btn_danger btn btn-danger" data-dismiss="modal"> close</button>
						</div>
						
					</div>
				</div>
				<!--  model end/ -->
			</div>
		</div>
		@endforeach
		@else
		<div class="row ">
		    <div class="col-md-4 video">
			<video width="100%" controls>
			  <source src="https://prizemaker.com/2020-01-30 18-04-24.mp4">
			  <source src="mov_bbb.ogg" type="video/ogg">
			  Your browser does not support HTML5 video.
			</video>
		</div>
		    	<div class="col-md-4 video">
			<video width="100%" controls>
			  <source src="https://prizemaker.com/2020-01-30 16-50-28.mp4" type="video/mp4">
			  <source src="mov_bbb.ogg" type="video/ogg">
			  Your browser does not support HTML5 video.
			</video>
		</div>
		<div class="col-md-4 video">
			<video width="100%" controls>
			  <source src="https://prizemaker.com/2020-01-30 17-54-39.mp4" type="video/mp4">
			  <source src="mov_bbb.ogg" type="video/ogg">
			  Your browser does not support HTML5 video.
			</video>
		</div>
	
	<div class="col-md-4 video">
			<video width="100%" controls>
			  <source src="https://prizemaker.com/2019-11-25%2020-36-23.mp4" type="video/mp4">
			  <source src="mov_bbb.ogg" type="video/ogg">
			  Your browser does not support HTML5 video.
			</video>
		</div>
		<div class="col-md-4 video">
			<video width="100%" controls>
			  <source src="https://prizemaker.com/2019-11-25%2020-09-54.mp4" type="video/mp4">
			  <source src="mov_bbb.ogg" type="video/ogg">
			  Your browser does not support HTML5 video.
			</video>
		</div>
	
		<div class="col-md-4 video">
			<video width="100%" controls>
			  <source src="https://prizemaker.com/2019-11-25%2020-51-30.mp4">
			  <source src="mov_bbb.ogg" type="video/ogg">
			  Your browser does not support HTML5 video.
			</video>
		</div>
	   </div>
			
			@endif	
	</div>
	</div>
</div>
</section>
@endsection
@extends( 'admin.layouts.app' )

@section( 'content' )

<style>
.jqte_tool {
    margin: 6px !important;
}
.jqte_tool.jqte_tool_1 .jqte_tool_label {
    position: relative;
    display: block;
    padding: 0px 5px !important;;
    width: 70px!important;;
    height: 22px !important;;
    overflow: hidden;
}
    .modal-thumb img{
         height: 179px;
    width: 230px;
        border-radius: 10%;
    }
    .modal-thumb{
          display: flex;
    flex-direction: row;
    justify-content: center;
    }
    .trophy-thumb{
       display: flex;
    flex-direction: row;
    justify-content: center;
    }
    .trophy-thumb img{
      width: 20%;
    }
    #heading-color{
      color: #ee8322;
    }
    #btn-color{
color: #fff;
    background-color: #ee8322;
    border-color: #ee8322;
    }
    #btn-color:hover{
      background-color: black;
      border-color: black;
    }
  </style>
  <style>
.new-center {
    font-weight: 600;
    text-align: center;
    background-color: #e9ebee;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 32px;
    color: #ee8322;
    padding: 4px 0;
    border-bottom: 1px solid #adadad;
    margin-top: 15px;
}
	.btn-outline-secondary{
    color: white;
    background-color: #ee8322;
}
.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #b9babb;
    outline: 0;
    box-shadow: none;
}
.btn-outline-secondary.focus, .btn-outline-secondary:focus {
    box-shadow: none;
}
.btn-outline-secondary:hover {
    color: #fff;
    background-color: #040404;
    border-color: #000000;
}
.row {
    display: -ms-flexbox;
    -ms-flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
        padding: 10px 0;
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
.modal-body p{
	text-align: center;
	font-weight
}
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
.col-lg-3{
	    padding: 0 5px;
}
#winner_row{
    background-color:red;
}
.prview_mdl {
        background: #ee8322;
    padding: 6px 12px;
    border-radius: 4px;
    color: #fff;
    cursor: pointer;
}
.main_col:nth-child(odd) {
    padding-right: 25px;
}

.main_col {
    margin: 0 auto;
}
.cust_deails {
    background: #f1f1f1;
}
.conv {
    padding: 10px 15px 0px;
    position: absolute;
    top: 0;
    font-size: 1rem;
}
.camp_title2 {
    font-size: 20px !important;
    font-weight: 600;
    text-align: left !important;
    background-color: #e9ebee33;
    text-transform: initial !important;
    letter-spacing: initial !important;
    color: #000 !important;
    padding: 0 !important;
    border-bottom: none !important;
}
.x-e {
    position: absolute;
    width: 100%;
    bottom: 0px;
}

.main-cownt {
    background-color: #ee8322;
    width: 100%;
    color: white;
    font-weight: 600;
    display: flex;
    flex-direction: row;
    justify-content: center;
}
.cownt-padding {
    padding: 5px 10px;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.anc_link {
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
.rea {
    color: #ee8322;
    float: right;
    margin-top: -2px;
    font-size: 30px !important;
}
.max_details {
    background: #e0dfdf;
}
.Cust_col_img {
    min-height: 245px;
    width: 100%;
    max-height: 245px;
    /* min-width: 280px; */
}
.ribbon {
    width: 150px;
    height: 150px;
    overflow: hidden;
    position: absolute;
    z-index: 1;
}
.ribbon-bottom-right {
    bottom: -10px;
    right: -10px;
}
.ribbon::before, .ribbon::after {
    position: absolute;
    z-index: -1;
    content: '';
    display: block;
    border: 5px solid #ab601d;
}
.ribbon-bottom-right::before {
    bottom: 0;
    left: 0;
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
.ribbon::before, .ribbon::after {
    position: absolute;
    z-index: -1;
    content: '';
    display: block;
    border: 5px solid #ab601d;
}
.ribbon-bottom-right::after {
    top: 0;
    right: 0;
}
.chosen-container-multi .chosen-choices li.search-choice .search-choice-close {
    padding: 0 !important;
}
  </style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" />
<!-- Bootstrap Date Time Picker -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<script src="//cdn.ckeditor.com/4.13.1/full-all/ckeditor.js"></script>
<script>
			$(document).ready(function() {
           CKEDITOR.replace( 'txtEditor' );
			});

	</script>
<style>
.hidden {
	display:none;
}
</style>
<div class="app-title">

	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
		<li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
		<li class="breadcrumb-item"><a href="#">Edit</a>
		</ul>
</div>

	<div class="row">
		<div class="col-md-12">
				
				<div class="tile">
					<h3>Edit Competition</h3>
					@if (\Session::has('success'))
    <div class="alert alert-success">
        {!! \Session::get('success') !!}
    </div>
@endif
	@foreach ($errors->all() as $error)

  <div class="alert alert-danger">{{ $error }}</div>

@endforeach


			<form class="form-horizontal" method="POST" action="{{ url('packages/store') }}" enctype="multipart/form-data">
				{{ csrf_field() }}
					<div class="row">

						<div class="col-sm-6 col-md-3 col-lg-4">
							<div class="form-group">
								<label>@lang('packages.name')</label>
								
								<input onkeyup="change_name()" id="get_preview_text_name" type="text" placeholder="Name" class="form-control" name="name" value="{{ $package->name }}" required autofocus> 
							</div>
						</div>
						<!-- 	<div class="col-sm-6 col-md-3 col-lg-3">
						<div class="form-group">
							<label>Video URL:</label>
							<input  type=""  class="form-control" value="{{ $package->video_url }}" name="video" >
						</div>
					</div> -->
					<div class="col-md-4">
    				    <label>Name for social media</label>
    				    <input type="text" name="social_name" value="{{$package->social_name}}" class="form form-control" />
    				    </div>
					    <div class="col-md-4">
    				    <label>Description for social media</label>
    				    <textarea class="form-control" name="social_description">{{$package->social_description}}</textarea>
    				    </div>
					<?php if($package->video != '') { ?>

			<div class="col-sm-6 col-md-3 col-lg-4">
				<input type="hidden" name="novideofiles" value="{{$package->video}}">
				<video width="260" height="192" rounded autoplay controls>
					<source src="{{url('blogimages/',$package->video)}}" type="video/mp4">
				</video>
			
				<input type="file" name="file">
			</div>
			<?php } else {  ?>
			<div class="col-sm-6 col-md-3 col-lg-4">
				<label>Select Video</label>
				<input type="file" name="file">
			</div>
			<?php }  ?>

						<!-- <div class="col-sm-6 col-md-3 col-lg-3">
							<div class="form-group">
								<label>Ticket Price</label>
								
								<input id="price" type="number" placeholder="@lang('packages.price')" class="form-control" name="price" value="{{ $package->price }}" required>
							</div>

						</div> -->
					<!-- <div class="col-sm-6 col-md-3 col-lg-3">
						<div class="form-group">
							<label>Start Date</label>
							<input autocomplete="off" type="text" value="{{ date('d/m/Y', strtotime($package->start_date))}}"  name="start_date" class="form-control datepicker" placeholder="Select Date" required="">		
						</div>
					</div>
					<div class="col-sm-6 col-md-3 col-lg-3">
						<div class="form-group">
							<label>End Date</label>
							<input autocomplete="off" type="text" value="{{ date('d/m/Y', strtotime($package->end_date))}}"  name="end_date" class="form-control datepicker" placeholder="Select Date" required="">		
						</div>
					</div> -->
					<!-- <div class="col-sm-6 col-md-3 col-lg-3">
						<div class="form-group">
							<label>Maximum Tickets</label>
							<input   value="{{ $package->max_tickets }}" type="number" placeholder="Maximum Tickets" class="form-control" name="max_tickets"  readonly>
						</div>
					</div> -->
						<!-- <div class="col-sm-12">
						<div class="form-group">
							<label><b>Featured: </b></label>
							<label><input type="radio" @if($package->featured==1) checked @endif name="featured" value="1"> Yes</label>
							<label><input type="radio" @if($package->featured==0) checked @endif name="featured" value="0"> No</label>
						</div>
					</div> -->
					<div class="col-sm-6 col-md-3 col-lg-4">
						<div class="form-group">
							<label>Short Description One</label>
							<input onkeyup="change_short()" id="get_preview_text_short" data-id type="text" placeholder="Short Description One" class="form-control" value="{{ $package->short_description_one }}" name="short_description_one" >
						</div>
						<!--<div class="form-group">-->
						<!--	<span class="prview_mdl" onclick="preview()">Click To Preview</span>-->
						<!--</div>-->
					</div>
					<div class="col-sm-6 col-md-3 col-lg-4">
						<div class="form-group">
							<label>Short Description Two</label>
							<input  onkeyup="change_second_short()" id="get_preview_text_second_short"  type="text" placeholder="Short Description Two" value="{{ $package->short_description_two }}" class="form-control" name="short_description_two">
						</div>
					</div>
						<div class="col-sm-6 col-md-3 col-lg-4">
						<div class="form-group">
							<label>URL Category</label>
						<select name="url_category" class="form-control">
						    @foreach($UrlCategory as $cat)
						    <option @if( old('url_category',$package->url_category)==$cat->id) selected @endif value="{{ $cat->id}}">{{ $cat->title}}</option>
						    @endforeach
						</select>
						</div>
					</div>
						<div class="col-md-6">
						<div class="form-group">
							<label>Featured</label><br>
						
						<input type="radio" id="yes" name="feat" value="yes" @if($package->featured=="yes") checked @endif>
  						<label for="yes">Yes</label>
  						<input type="radio" id="no" name="feat" value="no" style="margin-left: 13px;" @if($package->featured == "no" || $package->featured=="") checked @endif>
  						<label for="no">No</label>
						</div>
					</div>
					<div class="col-lg-6 col-sm-12 main_col">
          <div class="row cust_wi">
            <div class="col-lg-6 col-sm-12 cust_deails pr-0 pl-0">
              <div class="conv">
            <h3 class="camp_title2" id="preview_text_name">{{ $package->name }}</h3>
                        <p class="mb-0" id="preview_text_short">{{ $package->short_description_one }}</p>
                        <p class="mb-0" id="preview_text_second_short">{{ $package->short_description_two }}</p>
            <!--<p class="mb-0">CHOICE OF COLOURS</p>-->
            </div> 
            <!--<div class="x-e">-->

            <!--                                                                  <div class="main-cownt">-->
            <!--                                <div class="cownt-padding">-->
            <!--                                   <span class="days" id="day4">28</span>-->
            <!--                                   <div class="smalltext1">Days</div>-->
            <!--                                </div>-->
            <!--                                <div class="cownt-padding">-->
            <!--                                   <span class="hours" id="hour4">13</span>-->
            <!--                                   <div class="smalltext1">Hours</div>-->
            <!--                                </div>-->
            <!--                                <div class="cownt-padding">-->
            <!--                                   <span class="minutes" id="minute4">9</span>-->
            <!--                                   <div class="smalltext1">Minutes</div>-->
            <!--                                </div>-->
            <!--                                <div class="cownt-padding">-->
            <!--                                   <span class="seconds" id="second4">3</span>-->
            <!--                                   <div class="smalltext1">Seconds</div>-->
            <!--                                </div>-->
            <!--                                <p id="time-up429"></p>-->
            <!--                             </div>-->

            <!--                           <a class="anc_tab" href="https://prizemaker.com/competition/win-a-car-competition/bmw-2-series-218-m-sport-auto">-->
            <!--                          <div class="anc_link">-->
            <!--                          <span>Enter Now<i class="fa fa-angle-right rea"></i></span>-->

            <!--                       </div>-->
            <!--                       </a>-->
            <!--                       </div>-->

            </div>
            <div class="col-lg-6 col-sm-12 max_details pr-0 pl-0">
              <div class="r_image">
                  <?php $count = 0; ?>
                  @foreach($package->image as $img)
                  @if($img->main_img == 1)
                    <a href="#"><img class="img-fluid Cust_col_img" src="<?php echo url("products/$img->package_id/$img->name");?>" alt=""></a>
                    @endif
                    @endforeach	
               <!--<div class="ribbon ribbon-bottom-right"><span>£5</span></div>-->
                </div>

            </div>
          </div>
        </div>
					<div class="col-lg-12" >
						<div class="form-group">
						<label>Description</label>
						<textarea name="description"  cols="16" id="txtEditor" style="height: 35px;width: 100%;">
							{!! $package->description !!}
						</textarea>
						</div>	
					</div>

					
					<!-- <textarea class="form-control" name="meta_keyword"></textarea> -->
					<div class="row" style="width: 100%; margin-left: 0px;">
    				    <div class="col-md-4">
    				    <label>Meta Title</label>
    				    <input type="text" name="meta_title" value="{{$package->meta_title}}" class="form form-control" />
    				    </div>
    				    <div class="col-md-4">
    				    <label>Meta Description</label>
    				    <textarea class="form-control" name="meta_description">{{$package->meta_description}}</textarea>
    				    </div>
    				    <div class="col-md-4">
    				    <label>Image Tags <small> (Single image use first tag)</small></label>
    				    <textarea class="form-control" name="meta_keyword">{{$package->meta_keyword}}</textarea>
    				    </div>
    				    <div class="col-md-4">
    				    <label>Facebook Free Entry Card Line One</label>
    				    <input type="text" name="fem_box_line1" value="{{$package->fem_box_line1}}" class="form form-control" />
    				    </div>
    				    <div class="col-md-4">
    				    <label>Facebook Free Entry Card Line Two</label>
    				    <input type="text" name="fem_box_line2" value="{{$package->fem_box_line2}}" class="form form-control" />
    				    </div>
    				    <div class="col-md-4">
    				    <label>Facebook Free Entry Card Line Three</label>
    				    <input type="text" name="fem_box_line3" value="{{$package->fem_box_line3}}" class="form form-control" />
    				    </div>
    				</div>

                    <hr>
                <h3 style="margin-top:15px;">Discount Offers</h3> 
                <div id="new_chq">
    				<div class="row">
    				    <div class="col-md-4">
    				        <label>No of Tickets</label>
    				        <?php
    				            if(isset($package->discount_offers[0]) && isset($package->discount_offers[1])) {
    				                $offer_one_no_of_tickets = $package->discount_offers[0]['no_of_tickets'];
    				                $offer_two_no_of_tickets = $package->discount_offers[1]['no_of_tickets'];
    				                
    				                $offer_one_discount_percentage = $package->discount_offers[0]['discount_percentage'];
    				                $offer_two_discount_percentage = $package->discount_offers[1]['discount_percentage'];
    				            }else{
    				                $offer_one_no_of_tickets = 0;
    				                $offer_two_no_of_tickets = 0;
    				                
    				                $offer_one_discount_percentage = 0;
    				                $offer_two_discount_percentage = 0;
    				            }
    				        ?>
    				        <input type="number" name="no_of_tickets[]" value="{{$offer_one_no_of_tickets}}" class="form form-control">
    				    </div>
    				    
    				    <h5 style="margin-top:35px;">Purchased will get :</h5>
    				    
    				    <div class="col-md-4">
    				        <label>Discount Percentage</label>
    				        <input type="number" name="discount_percentage[]" value="{{$offer_one_discount_percentage}}" class="form form-control">
    				    </div>
    				    
    				    <div class="col-md-4">
    				        <label>No of Tickets</label>
    				        <input type="number" name="no_of_tickets[]" value="{{$offer_two_no_of_tickets}}" class="form form-control">
    				    </div>
    				    
    				    <h5 style="margin-top:35px;">Purchased will get :</h5>
    				    
    				    <div class="col-md-4">
    				        <label>Discount Percentage</label>
    				        <input type="number" name="discount_percentage[]" value="{{$offer_two_discount_percentage}}" class="form form-control">
    				    </div>
    				</div>
				</div>
				<hr>
				<div class="col-lg-12">
                    @if(Auth::check() && Auth::user()->user_role == 1)
					<div class="tile-footer">
						<input id="file" type="hidden" class="form-control" name="id" value="{{$package->id}}">
						<button class="btn btn-primary" type="submit">Submit</button>
						<a class="btn btn-default" href="{{url('product')}}">Cancel</a>
					</div>
                    @endif
                </div>
				</div>						
						
</form>
<div class="clearfix"></div>
					<!--	<div class="product_statistics">-->
					<!--	<h3>Competition Statistics</h3>-->
						
					<!--	<div class="product_statistics_content">-->
					<!--		<div class="product_statistics_fields">-->
					<!--			<form id="attribute_form" action="{{ url('package/add_attributes')}}" method="post">-->
					<!--				<label>Label</label>-->
					<!--				<input class="form-control" required name="label" type="text" id="label">-->
					<!--				<label>Attribute</label>-->
					<!--				<input class="form-control" required name="attribute" type="text" id="attribute">-->
					<!--				<input  type="hidden" required class="form-control" name="package_id" id="package_id" value="{{$package->id}}">-->
					<!--				<input  type="hidden"  class="form-control" name="element" id="element" value="">-->
					<!--				<input class="form-control" name="id" type="hidden" id="id">-->
					<!--				<?php if($package->end_date < date('Y-m-d H:i:s')) { ?>-->
					<!--	            <?php } else { ?>-->
					<!--				<button type="submit" class="btn btn-primary" type="submit">Save</button>-->
					<!--			<?php } ?>-->
					<!--			</form>-->
					<!--		</div>-->
					<!--		<div class="product_statistics_fields" id="scnd_product_statistics_fields">-->
					<!--			<table class="table table-bordered table-striped">-->
					<!--				<tr>-->
					<!--					<th>Label</th>-->
					<!--					<th>Attribute</th>-->
					<!--					<th>Action</th>-->
					<!--				</tr>-->
					<!--				@foreach($package->attibute as $attr)-->
					<!--				<tr id="id_{{ $attr->id }}">-->
					<!--					<td>{{ $attr->label }}</td>-->
					<!--					<td>{{ $attr->attribute }}</td>-->
					<!--					<td><a id="{{ $attr->id }}" class="edit_attribute btn btn-primary" href="#" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>-->
					<!--						<a href="#" data-id="{{ $attr->id }}" class="btn btn-sm btn-danger delete"><i class="fa fa-trash"></i></a>-->
					<!--					</td>-->
					<!--				</tr>-->
					<!--				@endforeach-->

					<!--			</table>-->
								
								
					<!--		</div>-->
					<!--	</div>-->
					<!--</div>-->
					<section class="cust_back_color">
		<div class="container">
			<h3>Competition Images</h3>
			<div class="img_dlt">
                @if(Auth::check() && Auth::user()->user_role == 1)
				<a class="btn btn-primary" id="delete_all_images" href="#">delete all</a>
				<a class="btn btn-primary" id="add_images" href="#">Upload images</a>
                @endif
				<form id="images_form" action="{{ url('package/add_package_images')}}" action="multipart/form-data" method="post">
					<label style="display: none;">
					<input id="images" type="file" multiple name="images[]">
						<input  type="hidden" required class="form-control" name="package_id" id="package_id_images" value="{{$package->id}}">
				</label>
                </form>	
							
			</div>
			
			<div class="view_img">
				<ul>
					@foreach($package->image as $img)


					<li>
						<a href="#">
							<div class="img_sec">
								<div class="img">
									<img class="img-fluid" src="<?php echo url("products/$img->package_id/$img->name");?>">
								</div>
								<div class="view_img_btn">
									<button class="btn btn-primary" type="button">View</button>
									<button class="delet_image btn btn-primary" data-id="{{ $img->id }}" type="button">Delete</button>
									<button class="main_img btn btn-primary" data-id="{{ $img->id }}" type="button" style="margin-left: 2px; margin-top: 5px;">Set Main Image</button>
								</div>
							</div>
						</a>
					</li>
					@endforeach		
				</ul>
			</div>
			<h3>Related Competition</h3>
			<div class="img_dlt">
				
				<form  action="{{ url('package/save_related_product')}}" action="multipart/form-data" method="post">
					@csrf
					<input  type="hidden" class="form-control" name="package_id"  value="{{$package->id}}">
						<div class="form-group">
					<label for="related_products"></label>
					<?php 
						$ids=[];
						$related=$package->related;
						foreach ($related as $key => $val) {
							$ids[]=$val->related_product_id;
						}
						?>
					<select required="" class="form-control chosen" multiple name="related_products[]" id="related_products">

						<option value=""></option>
						@foreach($rel_products as $rel)
						<option @if(in_array($rel->id,$ids)) selected @endif value="{{ $rel->id}}">{{ $rel->name}}</option>
						@endforeach
					</select>
					</div>
                    @if(Auth::check() && Auth::user()->user_role == 1)
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
                    @endif
                </form>	
							
			</div>
		</div>
	</section>
					</div>

					


					<div class="tile">
						<div class="container" style="display: none;">
						<div class="row">
								<h3>draw participant</h3>
							<table class="table table-bordered table-striped" >
								<thead class="table table-bordered">
									<tr>
										<th>Participant Name</th>
										<th>Price</th>
										<th>Ticket#</td>
										<th>Purchased Date</th>
										<th> Purchased Type </th>
										<th>Result</th>   
										<th>Action</th>
																		
									</tr>
								</thead>
								<tbody>
									@foreach($particpate as $row) 
									<tr>		
										<?php $user = DB::table('users')->where('id',$row->user_id)->first();  ?>	      	
										<td >{{ $user->name }}</td>        
										<td>{{ $row->paid_price }}</td>	
										<td>{{ $row->code }}</td>
										<td>{{date('d-m-Y', strtotime($row->date_purchased))}}</td>
										<?php $purchased_type = DB::table('payments')->where('user_id',$row->user_id)->whereJsonContains('ticket_id', ''.$row->id.'')->first(); 
								
										?>
										@if(!empty($purchased_type))
										@if($purchased_type->card_number==0)
										<td>Credits</td>
										@else
										<td>Credit Card</td>
										@endif
										@endif
										<?php if($winner){?>
									    <?php if($winner->code==$row->code){?>
										<td>Winner</td>
									<?php } else { ?>
										<td>loser</td>
									<?php } ?>
									<?php } else{ ?>
										<td>Still pending</td>
									<?php } ?>

									<?php if($winner){
									if($winner->code==$row->code){ ?>
										<td><a href="#" data-id="<?php echo $winner->id; ?>" class="btn btn-sm btn-danger delete_winner"><i class="fa fa-trash"></i>Remove Winner</a> <a data-toggle="modal" data-target="#ferari" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i>View</a></td>
										<div class="modal" id="ferari">
										<div class="modal-dialog">
											<div class="modal-content">
												<!-- Modal-start -->
												<div class="modal-headertop">
													<h4 class="modal-title">{{$winner->title}}</h4>
													<button type="button" class="close" data-dismiss="modal">&times;</button>
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
									<?php } else { ?>
										<td></td>
									<?php }?>
									<?php } else {
										$currentDateTime = date('Y-m-d H:i:s');
										if( $currentDateTime > $date->end_date)  { ?>
										<td><a href="#myModal{{ $row->id }}" role="button" class="btn btn-primary" data-toggle="modal">Upload</a></td>
										<?php }  else { ?>
										<td></td>
									<?php } } ?>
										<div id="myModal{{ $row->id }}" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										    <div class="modal-dialog">
										        <!-- Modal content-->
										        <div class="modal-content" style="margin-left: 7px;">
										            <div class="modal-header" style="    flex-direction: row-reverse;">
										             
										                <button type="button" class="close" data-dismiss="modal">&times;</button>
										                <h4 class="modal-title" id="heading-color">Are You Ready Announced To Winner</h4>
										            </div>
										            <div class="modal-body" id="imgmodel">
										              <div class="trophy-thumb">
										              <img style="width: 230px; height: 179px;" src="{{ url('frontend/images/winner.png')}}">
										            </div>
										              </div>
										                <div class="modal-footer">
										                   <a href="#myModal1{{ $row->id }}" role="button" class="btn btn-primary" data-toggle="modal" id="btn-color">Continue</a>
										                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										                </div>
										            

										        </div>
										    </div>
										</div>

										<div id="myModal1{{ $row->id }}" class="modal modal-child" data-backdrop-limit="1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-modal-parent="#myModal">
										    <div class="modal-dialog">
										        <!-- Modal content-->
										        <div class="modal-content">
										            <div class="modal-header" style="flex-direction: row-reverse;">
										                <button type="button" class="close" data-dismiss="modal">&times;</button>
										                <h4 class="modal-title" id="heading-color">Winner</h4>
										            </div>
										             <div class="modal-body">
												        <form  method="POST" action="{{ url('packages/update_winner/'.Request::segment(3)) }}" enctype="multipart/form-data">
												        	@csrf
												        	<!-- <input type="hidden" name="id" id="winnerid"> -->
												        	<input type="hidden" name="user_id" value="{{ $row->user_id }}">
												        	<input type="hidden" name="product_id" value="{{ $row->product_id }}">
												        	<input type="hidden" name="paid_price" value="{{ $row->paid_price }}">
												        	<input type="hidden" name="code" value="{{ $row->code }}">
												        <div class="col-sm-12 col-md-12 col-lg-12">

																		<div class="form-group">
																			<label>Title</label>
																			<input id="title" value="" type="text" placeholder="Enter title" class="form-control" name="title" required="" autofocus="">
																		</div>
																	</div>
														<div class="col-sm-12 col-md-12 col-lg-12">
																		<div class="form-group">
																			<label>Description</label>
																			<input id="title" value="" type="text" placeholder="Enter Description" class="form-control" name="description" required="" autofocus="">
																		</div>
																	</div>
																	<input type="file" name="image">
												        <!-- Modal footer -->
												        <div class="modal-footer">
												        	<button class="btn btn-primary" type="submit">Save</button>
												        </form>
												          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
												        </div>

										        </div>
										    </div>
										</div> 
										        
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
									
					</div>
				</div>
				
			</div>
		</div>
	<div class="modal fade" id="preview_modal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<!-- Modal-start -->
				<div class="modal-headertop">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal images and description -->
				<div class="modal-body">
					<p id="preview_text"></p>
				</div>
				<!-- close button -->
				<div class="modal-footerbottom">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
				
			</div>
		</div>
	</div>

		<script src="{{url('backend/sweetalerts/sweetalert2.all.js')}}"></script>

	<script type="text/javascript">
	$(document).ready(function () {
		
		var email_schedule_info = {};
				
// 		$('.email-fields-area input,select').prop('disabled', true);
		
		//var email_time = $('#timepicker').timepicker('setTime', '12:00 AM');
				
		var email_time = $('#email-time').datetimepicker({
			format: 'LT'
		});
		
		// for before competition start
 		var before_comp_start = $('#reminder-date').datetimepicker({
			format: 'YYYY-MM-DD',
			minDate: "<?php echo date('Y-m-d'); ?>",
		});

		var competition_date = $('.datepicker').datepicker({
			format: 'yyyy/mm/dd',
			startDate: new Date(),
			autoclose: true
		});	
		
		$('.datepicker').change(function(){
			var comp_date = $(this).val();
			//console.log(before_comp_start.data());	
			before_comp_start.data().DateTimePicker.maxDate(moment(comp_date, 'YYYY/MM/DD'));
		});

		var email_day;
				
		$('input[name="email-interval"]').change(function(){
			var intv_type = $(this).val();
			if (intv_type == 'weekly') {
				$('#email-weekly-day').removeClass('hidden');
				$('#num-of-days-area').addClass('hidden');
			}
			else if (intv_type == 'bf-cmpt') {
				$('#email-weekly-day').addClass('hidden');
				$('#num-of-days-area').removeClass('hidden');
				
			}
			else {
				$('#email-weekly-day').addClass('hidden');
				$('#num-of-days-area').addClass('hidden');
			}
		});
		
		$('#day-lst').change(function(){
			email_day = $(this).val();
			console.log(email_day);
		});
		
		$('#enable-email').change(function(){
			if ($(this).prop('checked')) {
				// $('.email-fields-area input,select').prop('disabled', false);
				$('.email-fields-area').removeClass('hidden');				
			}
			else {
				// $('.email-fields-area input,select').prop('disabled', true);
				$('.email-fields-area').addClass('hidden');				
			}
		});	
		});		
</script>
  <script>

	$(".chosen").chosen();
	$('#images').change(function(){
		$('#images_form').submit();
	});

	$('#add_images').click(function(){
		$('#images').click();
	});
		$('.datepicker').datepicker({
    format: 'dd/mm/yyyy',
    startDate: new Date(),
    autoclose: true
});
		$( "body" ).on( "click", ".delete", function () {
		var id = $( this ).data( "id" );
		var form_data = {
			id: id
		};
		swal({
			title: "Do you want to delete this?",
			// text: "@lang('packages.delete_package_msg')",
			type: 'info',
			showCancelButton: true,
			confirmButtonColor: '#F79426',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes',
			showLoaderOnConfirm: true
		}).then( ( result ) => {
			if ( result.value == true ) {
				$.ajax( {
					type: 'POST',
					headers: {
						'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
					},
					url: '<?php echo url("package/delete_attr"); ?>',
					data: form_data,
					context:this,
					success: function ( msg ) {
						$(this).parents('tr').remove();
						document.getElementById("attribute_form").reset();
						
					}
				} );
			
			}
		} );
		

	} );
	$( "body" ).on( "click", "#delete_all_images", function () {

		
		swal({
			title: "Do you want to delete all images?",
			// text: "@lang('packages.delete_package_msg')",
			type: 'info',
			showCancelButton: true,
			confirmButtonColor: '#F79426',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes',
			showLoaderOnConfirm: true
		}).then( ( result ) => {
			if ( result.value == true ) {
				$(this).text('Please wait...');
				var id =[];
				$('.delet_image').each(function(){
					id.push($(this).data('id'));
				});
				var form_data = {
					id: id
				};
				$.ajax( {
					type: 'POST',
					headers: {
						'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
					},
					url: '<?php echo url("package/deleteImage"); ?>',
					data: form_data,
					context:this,
					success: function ( msg ) {
						$(this).text('delete all');
						$('.view_img ul li').remove();
					}
				} );
			
			}
		} );
		

	} );

	$( "body" ).on( "click", ".delet_image", function () {
		var id = $( this ).data( "id" );
		var form_data = {
			id: [id]
		};
		swal({
			title: "Do you want to delete this?",
			// text: "@lang('packages.delete_package_msg')",
			type: 'info',
			showCancelButton: true,
			confirmButtonColor: '#F79426',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes',
			showLoaderOnConfirm: true
		}).then( ( result ) => {
			if ( result.value == true ) {
				$.ajax( {
					type: 'POST',
					headers: {
						'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
					},
					url: '<?php echo url("package/deleteImage"); ?>',
					data: form_data,
					context:this,
					success: function ( msg ) {
						$(this).parents('li').remove();
						
					}
				} );
			
			}
		} );
		

	} );

	$( "body" ).on( "click", ".main_img", function () {
		var id = $( this ).data( "id" );
		var form_data = {
			id: [id]
		};
		swal({
			title: "Do you want to make this Image as main Image?",
			// text: "@lang('packages.delete_package_msg')",
			type: 'info',
			showCancelButton: true,
			confirmButtonColor: '#F79426',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes',
			showLoaderOnConfirm: true
		}).then( ( result ) => {
			if ( result.value == true ) {
				$.ajax( {
					type: 'POST',
					headers: {
						'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
					},
					url: '<?php echo url("package/main_img"); ?>',
					data: form_data,
					context:this,
					success: function ( msg ) {
						swal( "main image set", '', 'success' )
					}
				} );
			
			}
		} );
		

	} );

	$( "body" ).on( "click", ".edit_attribute", function () {
		var id = $( this ).attr( "id" );
		var element = $( this ).parents( "tr" ).attr('id');
		var form_data = {
			id: id
		};
		$.ajax( {
					type: 'POST',
					headers: {
						'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
					},
					url: '<?php echo url("package/edit_attribute"); ?>',
					data: form_data,
					success: function ( msg ) {
						$('#id').val(msg.id);
						$('#label').val(msg.label);
						$('#attribute').val(msg.attribute);
						$('#element').val(element);
					}
				} );

	} );
	$( "body" ).on( "submit", "#attribute_form", function (e) {
		e.preventDefault();
		$.ajax( {
					type: 'POST',
					headers: {
						'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
					},
					url: '<?php echo url("package/add_attribute"); ?>',
					data: $(this).serialize(),
					success: function ( msg ) {
						if(msg.status){
							if(msg.operation=='add'){
								var html='<tr id="id_'+msg.data.id+'">\
										<td>'+msg.data.label+'</td>\
										<td>'+msg.data.attribute+'</td>\
										<td><a id="'+msg.data.id+'" class="edit_attribute" href="#"><i class="fa fa-pencil"></i></a>\
										<a href="#;" data-id="'+msg.data.id+'" class="btn btn-sm btn-danger delete"><i class="fa fa-trash"></i></a>\
										</td>\
									</tr>';
								$('.product_statistics_fields table').append(html);
							}
								var ele=$('#element').val();
							if(msg.operation=='edit' && ele){
								$('#'+ele+' td:eq(0)').text(msg.data.label);
								$('#'+ele+' td:eq(1)').text(msg.data.attribute);
								$('#element,#id').val('');
							}
							// swal( "Successfully saved", '', 'success' );
							document.getElementById("attribute_form").reset();


							
						}else{
							swal( "Something went wrong", '', 'error' );
						}
					}
				} );

	} );

	$( "body" ).on( "submit", "#images_form", function (e) {
		$(document).find('#add_images').text('Please wait...');
		e.preventDefault();
		 var formData = new FormData($(this)[0]);
		$.ajax( {
			       async: false,
			       cache: false,
			       contentType: false,
			       enctype: 'multipart/form-data',
			       processData: false,
					type: 'POST',
					headers: {
						'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
					},
					url: '<?php echo url("package/add_package_images"); ?>',
					data: formData,
					success: function ( msg ) {
						if(msg !="error"){
							$.each(msg,function(i,image){
								var html='<li>\
						<a href="#">\
							<div class="img_sec">\
								<div class="img">\
									<img class="img-fluid" src="'+image.url+'">\
								</div>\
								<div class="view_img_btn">\
									<button type="button">View</button>\
									<button class="delet_image" data-id="'+image.id+'" type="button">Delete</button>\
									<button class="main_img" data-id="'+image.id+'" type="button" style="margin-left: 2px; margin-top: 5px;">Set Main Image </button>\
								</div>\
							</div>\
						</a>\
					</li>';
								$('.view_img ul').append(html);
							});
							
							swal( "Successfully Uploaded", '', 'success' );
							document.getElementById("images_form").reset();
							$(document).find('#add_images').text('Upload images');
							$('#package_id_images').val('{{$package->id}}');
							$('#images').val('');
						}else{
							swal( "Upload image only ", '', 'error' );
							$(document).find('#add_images').text('Upload images');
							
						}
					},
					error: function(){
						$(document).find('#add_images').text('Upload images');
					}
				} );
	} );
</script>
<script type="text/javascript">
	$( "body" ).on( "click", ".delete_winner", function () {
		var task_id = $( this ).attr( "data-id" );
		var form_data = {
			id: task_id
		};
		swal({
			title: "Do you want to delete this Winner",
			text: "@lang('packages.delete_package_msg')",
			type: 'info',
			showCancelButton: true,
			confirmButtonColor: '#F79426',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes',
			showLoaderOnConfirm: true
		}).then( ( result ) => {
			if ( result.value == true ) {
				$.ajax( {
					type: 'POST',
					headers: {
						'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
					},
					url: '<?php echo url("packages/delete_winner"); ?>',
					data: form_data,
					success: function ( msg ) {
						swal( "@lang('packages.success_delete')", '', 'success' )
						setTimeout( function () {
							location.reload();
						}, 1000 );
					}
				} );
			}
		} );
	} );
</script>

<script>

    // $("get_preview_text_name").keyup(function(){
    //     $('#preview_text_name').html($('#get_preview_text_name').val());
    // });
  
    // $("get_preview_text_short").keyup(function(){
    //     $('#preview_text_short').html($('#get_preview_text_short').val());
    // });
    
    function change_name(){
        $('#preview_text_name').html($('#get_preview_text_name').val());
    }
    function change_short(){
        $('#preview_text_short').html($('#get_preview_text_short').val());
    }
    function change_second_short(){
        $('#preview_text_second_short').html($('#get_preview_text_second_short').val());
    }
    
    // function preview(){
    //     console.log($('#get_preview_text').val());
    //     $('#preview_text').html($('#get_preview_text').val());
    //     // $('#preview_modal').modal("show");
    // }
</script>
		@endsection


		





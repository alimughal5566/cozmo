@extends( 'admin.layouts.app' )
@section( 'content' )
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />

<style>
.selectpicker {
	width:100%;
}
iframe {
	width:80%;
	border:thin solid black;
	height:250px;
}
.row {
	margin-bottom:10px;
}

#email-template-html {
	border:2px solid #ced4da;
	border-radius: 5px;
	max-height:500px;
	min-height:500px;
	overflow-y:auto;
}

.select2-container{
	width: 100% !important;
}
.heading_admin h3 {
    font-weight: 600;
    text-align: center;
    background-color: #e9ebee33;
    text-transform: uppercase;
    /* letter-spacing: 2px; */
    font-size: 25px;
    color: #ee8322;
    padding: 4px 0;
    border-bottom: 1px solid #adadad;
}
.slid_dropdown {
    width: 100%;
    padding: 8px;
    border-radius: 4px;
    color: #aaa;
}
#show_3rd_template label {
    font-size: 13px;
}
.schedule {
   color: #FFF;
    background-color: #28a745;
    border-color: #28a745;
}
.radio_btn {
  display: block;
  padding: 5px 10px;
  margin: 5px 0;
  font: 14px/20px Arial, sans-serif;
  background-color: #ccc;
  border-radius: 7px;
  
  &:hover {
    background-color: gold;
    cursor: pointer;
  }
}

.radio_inp {
	display: none;
}

.isSelected {
  background-color: lightgreen;
}
</style>
<div class="app-title">

  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
    </li>
    <li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a>
    </li>
   
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <h3 class="tile-title">News Letters
      </h3>
      <div class="table-responsive">
     
		 <form method="POST" action="{{url('/sendmail')}}">
			 @csrf
			<input type="hidden" name="email_id_list" value="" />
		 </form>
		 <div class="row">
		 	 <div class="col col-md-7">

				 <label>Select Emails</select>
			 </div>
			 <div class="col col-md-7">
					 <select name="email-list" id="email-list" class="selectpicker" multiple>
					 <?php foreach ($selected_subs_list as $key => $email): ?>
						<option value="<?php echo $email['id']; ?>" selected><?php echo $email['email']; ?></option>
					 <?php endforeach; ?>
					 </select>
			 </div>
		 </div>
		 
		 <div class="row">
			 <div class="col col-md-7">
				<label>Select Template</label>
				<select id="template" class="form form-control">
					<option value="">Select Template</option>				
				 <?php foreach ($email_templates as $key => $template): ?>								
					<option value="<?php echo $template->id; ?>"><?php echo $template->name; ?></option>
				 <?php endforeach; ?>
				</select>
			 </div>
		 </div>		 
		 <div class="row">
			 <div class="col col-md-7">
				<label>Select Competition</label>
				<select id="product" class="form form-control">
					<option value="">Select Competition</option>								
				 <?php foreach ($products as $key => $product): ?>								
					<option value="<?php echo $product->id; ?>"><?php echo $product->name; ?></option>
				 <?php endforeach; ?>
				</select>
			 </div>
		 </div>
		 <div class="row" id="show_template">
		 
			 <div class="col col-md-12">
				<div id="email-template-html"></div>
				<!--<iframe src='about:blank'></iframe>-->
			 </div>
		 </div>	
		 <div id="show_3rd_template" style="display: none">
		 <form method="post" action="{{url('template_3_send_email')}}" enctype="multiple/form-data" >
		 	@csrf

		 	<input type="hidden" name="email_idss[]" id="email_idss" value="">
		 	<input type="hidden" name="product_ids" id="product_ids" value="">
		 	
		 	 <div class="row">		 
			 <div class="col col-md-12">
				<div class="form-group">
							<label>TOP DESCRIPTION</label>
							<!-- <input  type="text" placeholder="TOP TRENDS TITLE" class="form-control" name="top_trend_title"  value="{{ old('top_trend_title') }}" required autofocus required=""> -->
							<textarea name="top_description" class="form-control" required></textarea>
						</div>
			 </div>
			</div>

					  <div class="row">		 
    			<div class="col col-md-7">
    				<label style="text-transform: uppercase;">Slide</label>
    		
    
    							 <select name="slide" id="" class="slid_dropdown" required>
    							 	<option value="">Select Slide</option>
    					  <?php foreach ($slide as $key => $slides): ?>								
    					<option value="<?php echo $slides->id; ?>"><?php echo $slides->title; ?></option>
    				 <?php endforeach; ?>
    					 </select>
    
    			 </div>
			 </div>
			 
                                    <div class="heading_admin" >
                                       <h3>Section 1</h3>
                                       <!-- <p style="text-transform: initial !important;margin:0;" class="text-center"><small>See our terms and conditions for free entry method.</small></p> -->
                                    
                                       </div>
		 <div class="row">		 
			 <div class="col col-md-4">
				<div class="form-group">
							<label>TOP TRENDS TITLE</label>
							<input  type="text" placeholder="TOP TRENDS TITLE" class="form-control" name="top_trend_title"  value="{{ old('top_trend_title') }}" >
						</div>
			 </div>
			 <div class="col col-md-4">
				<div class="form-group">
							<label>TOP TRENDS DESCRIPTION</label>
							<input  type="text" placeholder="TOP TRENDS DESCRIPTION" class="form-control" name="top_trend_description"  value="{{ old('top_trend_description') }}" >
						</div>
			 </div>
			 		<div class="col col-md-4">
				<label>TOP TRENDS COMPETITION</label>

							 <select name="trend_competition[]" id="trend_competition" class="selectpicker" multiple >
							 	<option value="">Select Competition</option>
					  <?php foreach ($products as $key => $product): ?>								
					<option value="<?php echo $product->id; ?>"><?php echo $product->name; ?></option>
				 <?php endforeach; ?>
					 </select>

			 </div>
		 </div>	

		  <!--<div class="row">		 -->
	
			 <!--			</div>-->

<div class="heading_admin" >
                                       <h3>Section 2</h3>
                                       <!-- <p style="text-transform: initial !important;margin:0;" class="text-center"><small>See our terms and conditions for free entry method.</small></p> -->
                                    
                                       </div>
		  <div class="row">		 
			 <div class="col col-md-4">
				<div class="form-group">
							<label>TOP RESTAURANT GIFT VOUCHERS TITLE</label>
							<input type="text" placeholder="TOP RESTAURANT GIFT VOUCHERS TITLE" class="form-control" name="top_restuarent_title"  value="{{ old('top_restuarent_title') }}">
						</div>
			 </div>
			 <div class="col col-md-4">
				<div class="form-group">
							<label>TOP RESTAURANT GIFT VOUCHERS DESCRIPTION</label>
							<input id="name"  type="text" placeholder="TOP RESTAURANT GIFT VOUCHERS DESCRIPTION" class="form-control" name="top_restuarent_description"  value="{{ old('top_restuarent_description') }}" >
						</div>
			 </div>
			 			<div class="col col-md-4">
				<label>TOP RESTAURANT COMPETITION</label>
		
							 <select name="restuarent_competition[]" id="restuarent_competition" class="selectpicker" multiple >
							 	<option value="">Select Competition</option>
					  <?php foreach ($products as $key => $product): ?>								
					<option value="<?php echo $product->id; ?>"><?php echo $product->name; ?></option>
				 <?php endforeach; ?>
					 </select>
					</div>
						
		 </div>	

		 <!--<div class="row">		 -->

			<!-- </div>-->
<div class="heading_admin" >
                                       <h3>Section 3</h3>
                                       <!-- <p style="text-transform: initial !important;margin:0;" class="text-center"><small>See our terms and conditions for free entry method.</small></p> -->
                                    
                                       </div>
		  <div class="row">		 
			 <div class="col col-md-4">
				<div class="form-group">
							<label>BIKE COMPETITION TITLE</label>
							<input type="text" placeholder="BIKE COMPETITION TITLE" class="form-control" name="bike_competition_title"  value="{{ old('bike_competition_title') }}" >
						</div>
			 </div>
			 <div class="col col-md-4">
				<div class="form-group">
							<label>BIKE COMPETITION DESCRIPTION</label>
							<input id="name"  type="text" placeholder="BIKE COMPETITION DESCRIPTION" class="form-control" name="bike_competition_description"  value="{{ old('bike_competition_description') }}" >
						</div>
			 </div>
			 		<div class="col col-md-4">
				<label>BIKE COMPETITION</label>
		
							 <select name="bike_competition[]" id="bike_competition" class="selectpicker" multiple >
							 	<option value="">Select Competition</option>
					  <?php foreach ($products as $key => $product): ?>								
					<option value="<?php echo $product->id; ?>"><?php echo $product->name; ?></option>
				 <?php endforeach; ?>
					 </select>
					</div>
		 </div>	

		 <!--<div class="row">		 -->
	
						
			<!-- </div>-->
		

		 <div class="row" id="send_email_2"> 
			<div class="col col-md-12" id=>
				<button class="btn btn-primary" type="submit" >Send</button>
				<!--<button class="btn btn-success schedule"  data-toggle="modal" data-target="#myModal">Send and Schedule</button>-->
		 	</div>
		 </div>	

		 </form>

		 </div>

		 <div class="row" id="send_email_1"> 
			<div class="col col-md-12" id="show_button">
				<button class="btn btn-primary" id="send-email">Send</button>
		 	</div>
		 </div>
		
    </div>
  </div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Send and Schedule</h4>
        </div>
        <div class="modal-body">
          <!--<p>Some text in the modal.</p>-->
          <div class="row">
              <label class="radio_btn">
                <input class="radio_inp" type="radio" name="rgroup" />
                Carrots
              </label>
              <label class="radio_btn">
                <input class="radio_inp" type="radio" name="rgroup" />
                Peas
              </label>
              <label class="radio_btn">
                <input class="radio_inp" type="radio" name="rgroup" />
                Spinach
              </label>
              <label class="radio_btn">
                <input class="radio_inp" type="radio" name="rgroup" />
                Potatoes
              </label>
              <label class="radio_btn">
                <input class="radio_inp" type="radio" name="rgroup" />
                Broccoli
              </label>
              <label class="radio_btn">
                <input class="radio_inp" type="radio" name="rgroup" />
                Cauliflower
              </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
<script src="<?php echo url('/js/waitingfor.js'); ?>"></script>


<script>
	$(document).ready(function(){
	
		$('#email-list').select2(); 
		$('#trend_competition').select2(); 
		$('#restuarent_competition').select2(); 
		$('#bike_competition').select2();
				
		var template_id;
		var product_id;
		
		$('#template, #product').change(function(){

			template_id           = $('#template').val();
			product_id            = $('#product').val();
			$('.show_html').remove();

			if (template_id != '' && product_id != '') {
				if(template_id==3)
				{ 
					var product_ids  = $('#product').val();
					var email_idss   = $('#email-list').val();
					$('#product_ids').val(product_ids);
					$('#email_idss').val(email_idss);
					$('#show_template').hide(); 
					$('#send_email_1').hide(); 
					$('#show_3rd_template').show(); 
				}else{
					$('#show_template').show(); 
					$('#send_email_1').show(); 
					$('#show_3rd_template').hide(); 
				}
				var template_action   = 'emailtemplate/'+template_id+'/'+product_id;
				var show_template_url = '{{url("/")}}/'+template_action;	
				var url = 'show_html/'+template_id+'/'+product_id;
				var my_tem = '{{url("/")}}/'+url;
				$("#email-template-html").load(show_template_url);
				$('#show_button').append('<a class="btn btn-primary show_html" href="'+my_tem+'"  >Show html</a>');

			}

		});
		
		$('#email-list').change(function(){
			console.log($('#email-list').val());
		});
		
		$('#send-email').click(function(){
			
			template_id = $('#template').val();
			product_id  = $('#product').val();
			email_ids   = $('#email-list').val();		
					
			if (template_id != '' && product_id != '' && email_ids.length > 0) {
				var post_data 		     = {};
				post_data['_token']      = '{{csrf_token()}}';
				post_data['template_id'] = template_id;
				post_data['product_id']  = product_id;
				post_data['email_ids']   = email_ids;
				
				waitingDialog.show('Sending Email');							
					
				$.ajax({
					url:    '{{route("send_subscription_mail")}}',
					method: 'POST',
					data:    post_data,
					success: function(response) {
						if (response.status == 'success') {
							swal("Email Sent", "Subscription email sent to users", "success");	
						}
						waitingDialog.hide();			
					}
				});				
			}
			else {
				if (template_id == '') {
					swal("No Template Selected", "Choose one of the templates from the list", "error");	
				}
				else if (product_id == '') {
					swal("No Competition Selected", "Choose one of the competitions from the list", "error");	
					
				}
				else if (email_ids.length == 0) {
					swal("No Subscriber selected", "Please select at least one email", "error");	
					
				}
				
			}

		});
		
	});

	window.onbeforeunload = function(e) {
  		waitingDialog.show('');	
		}
</script>

<script>
		$(".radio_inp").on("click", function(){
		  if ( $(this).attr("type") === "radio" ) {
		    $(this).parent().siblings().removeClass("isSelected");
		  }
		  $(this).parent().toggleClass("isSelected");
		});
	</script>

@endsection
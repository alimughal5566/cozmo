@extends( 'admin.layouts.app' )
@section( 'content' )

<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>

<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  border-radius: 30px;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/ Rounded sliders /
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
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
				<h3>Edit Category</h3>
				@if (\Session::has('success'))
				<div class="alert alert-success">
					{!! \Session::get('success') !!}
				</div>
				@endif
				@foreach ($errors->all() as $error)

				<div class="alert alert-danger">{{ $error }}</div>

				@endforeach


				<form class="form-horizontal" method="POST" action="{{ url('category/update') }}" enctype="multipart/form-data">
					@csrf 
					<div class="row">

						<div class="col-sm-6 col-md-3 col-lg-3"> 
							<div class="form-group">
								<label>Title</label>
								
								<input id="title" type="text" placeholder="title" class="form-control" name="title" value="{{ $data->title }}" required autofocus> 
							</div>
						</div>
						<div class="col-sm-6 col-md-3 col-lg-3">
							<div class="form-group">
								<label>Sub Title</label>
								
								<input id="title" type="text" placeholder="price" class="form-control" name="subtitle" value="{{ $data->subtitle }}" required autofocus> 
							</div>
						</div>
						<!-- <div class="col-sm-6 col-md-3 col-lg-3">
						<div class="form-group">
							<label>Start Date</label>
							<input autocomplete="off" type="text" value="{{ date('d/m/Y', strtotime($data->start_date))}}"  name="start_date" class="form-control datepicker" placeholder="Select Date" required="">		
						</div>s
					</div> -->
					<!-- <div class="col-sm-6 col-md-3 col-lg-3">
						<div class="form-group">
							<label>End Date</label>
							<input autocomplete="off" type="text" value="{{ date('d/m/Y', strtotime($data->end_date))}}"  name="end_date" class="form-control datepicker" placeholder="Select Date" required="">		
						</div>
					</div> -->
						<div class="col-lg-12">
							<div class="tile-footer">
								<input id="file" type="hidden" class="form-control" name="id" value="{{$data->id}}">
								<button class="btn btn-primary" type="submit">Submit</button>
								<a class="btn btn-default" href="{{ url('category')}}">Cancel</a>
							</div></div>
						</div>
					</form>
					<div class="clearfix"></div>


				</div>
				
			</div>
		</div>

		<!-- <script src="{{url('backend/sweetalerts/sweetalert2.all.js')}}"></script> -->

<script>
	var before_comp_start = $('#reminder-date').datepicker({
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
		$('.datepicker').datepicker({
        format: 'yyyy/mm/dd',
        startDate: new Date(),
        autoclose: true
});
	</script>
		@endsection


		





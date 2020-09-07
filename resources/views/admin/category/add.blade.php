@extends( 'admin.layouts.app' )
@section( 'content' )
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
		<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
		</li>
		<li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a>
		</li>
		<li class="breadcrumb-item">@lang('Add New')</li>
	</ul>
</div>
<div class="row">
	<div class="col-md-12">
		<form class="form-horizontal" method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="tile">
				<h3 class="tile-title">Add New Category</h3>
				@foreach ($errors->all() as $error)
				<div class="alert alert-danger">{{ $error }}</div>
				@endforeach
				<div class="row">
					<div class="col-sm-6 col-md-3 col-lg-3">
						<div class="form-group">
							<label>Title</label>
							<input id="title" value="{{ old('title')}}" type="text" placeholder="Enter title" class="form-control" name="title" required autofocus required="">
						</div>
					</div>
					<div class="col-sm-6 col-md-3 col-lg-3">
						<div class="form-group">
							<label>Sub Title</label>
							<input id="title" value="{{ old('title')}}" type="text" placeholder="Enter Sub Title" class="form-control" name="subtitle" required autofocus required="">
						</div>
					</div>
					
					<!-- <div class="col-sm-6 col-md-3 col-lg-3">
						<div class="form-group">
							<label>Start Date</label>
							<input autocomplete="off" type="text" value="{{ old('end_date')}}"  name="start_date" class="form-control datepicker" placeholder="Select Date" required="">
						</div>
					</div>
					<div class="col-sm-6 col-md-3 col-lg-3">
						<div class="form-group">
							<label>End Date</label>
							<input id="title" value="{{ old('title')}}" type="text" placeholder="End Date" class="form-control form-control datepicker" name="end_date" required autofocus required="">
						</div>
					</div> -->	
				</div>
				<div class="tile-footer text-right">
					<a class="btn btn-default" href="{{ url('category') }}">Cancel</a>
					<button class="btn btn-primary" type="submit">Save</button>
				</div>
			</div>
		</form>
	</div>
</div>
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




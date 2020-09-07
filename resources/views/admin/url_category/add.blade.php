@extends( 'admin.layouts.app' )
@section( 'content' )


<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
.topss_form{
    display:flex;
    flex-direction:column-reverse;
    align-items:flex-start;
    margin:0;
}
.main-top-row{
        background: white;
    padding: 18px 10px;
    border-radius: 4px;
        margin: 10px 0;
}
</style>

<link href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
<script>
	$(document).ready(function() {
		$("#txtEditor").summernote({
			placeholder: 'Description',
			tabsize: 2,
			height: 200
		});
	});
</script>
<div class="app-title">
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
		</li>
		<li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a>
		</li>
		<li class="breadcrumb-item">@lang('packages.add_new')</li>
	</ul>
	
</div>
<div class="row main-top-row">	
	<div class="col-md-12">
		@if (session('alert'))
		    <div class="alert alert-danger" style="width: 40%">
		        {{ session('alert') }}
		    </div>
		@endif
		<form class="form-horizontal" method="POST" action="{{ url('url_category_store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row">
			    <div class="col-md-8">
				<h3 class="tile-title">Add Url Category</h3>
							@foreach ($errors->all() as $error)
				<div class="alert alert-danger">{{ $error }}</div>
				@endforeach
					<div class="form-group">
							<label>Title</label>
							<input id="title" value="{{ old('title')}}" type="text" placeholder="Enter title" class="form-control" name="title" required autofocus>
						</div>
							<div class="form-group">
							<label>Description</label>
							<textarea name="description" cols="8" id="txtEditor" style="height: 35px;width: 100%;" required>
								
							</textarea>
						</div>
				</div>
	
						
					

					
</div>
					
					<div class="tile-footer text-left mt-2">
					<a class="btn btn-default" href="{{url('url_category')}}">Cancel</a>
					<button class="btn btn-primary" type="submit">Save</button>
				</div>
				
			
			
		</form>
	</div>
</div>

@endsection




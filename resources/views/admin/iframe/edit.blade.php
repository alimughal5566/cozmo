@extends( 'admin.layouts.app' )
@section( 'content' )

<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
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
		<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
		<li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
		<li class="breadcrumb-item"><a href="#">Edit</a>
		</ul>
	</div>

	<div class="row">
		<div class="col-md-12">

			<div class="tile">
				<h3>Edit Slider</h3>
				@if (\Session::has('success'))
				<div class="alert alert-success">
					{!! \Session::get('success') !!}
				</div>
				@endif
				@foreach ($errors->all() as $error)

				<div class="alert alert-danger">{{ $error }}</div>

				@endforeach


				<form class="form-horizontal" method="POST" action="{{ url('iframe/update') }}" enctype="multipart/form-data">
					@csrf 
					<div class="row">

						<div class="col-sm-6 col-md-3 col-lg-3">
							<div class="form-group">
								<label>Title</label>
								
								<input id="title" type="text" placeholder="title" class="form-control" name="title" value="{{ $data->title }}" required autofocus> 
							</div>
						</div>


						<div class="col-lg-12" >
							<div class="form-group">
								<label>Description</label>
								<textarea name="description" required cols="8" id="txtEditor" style="height: 35px;width: 100%;">
									{{$data->description}}
								</textarea>
							</div>	
						</div>	
						<div class="col-lg-12">
							<div class="tile-footer">
								<input id="file" type="hidden" class="form-control" name="id" value="{{$data->id}}">
								<button class="btn btn-primary" type="submit">Submit</button>
								<a class="btn btn-default" href="{{route('blog.admin')}}">Cancel</a>
							</div></div>
						</div>
					</form>
					<div class="clearfix"></div>


				</div>
				
			</div>
		</div>

		<script src="{{url('backend/sweetalerts/sweetalert2.all.js')}}"></script>


		@endsection


		





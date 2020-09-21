@extends( 'admin.layouts.app' )
@section( 'content' )
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
<div class="row">
	<div class="col-md-12">
		<form class="form-horizontal" method="POST" action="{{ url('article/save') }}" enctype="multipart/form-data">
			@csrf
			<div class="tile">
				<h3 class="tile-title">Competition Article For {{ $getRecord->name }}</h3>
				@foreach ($errors->all() as $error)
				<div class="alert alert-danger">{{ $error }}</div>
				@endforeach
				@if (\Session::has('success'))
                <div class="alert alert-success">
                    {!! \Session::get('success') !!}
                </div>
            	@endif
				<div class="row">
					<div class="col-lg-12" >
						<div class="form-group">
							<label>Description</label>
							<input type="hidden" name="comp_id" value="{{$competition_id}}">
							<textarea name="description" cols="8" id="txtEditor" style="height: 35px;width: 100%;"><?php if(isset($getRecord)){echo $getRecord->description;} ?>
								
							</textarea>
						</div>	
					</div>	
				</div>
				<div class="tile-footer text-right">
					<a class="btn btn-default" href="{{url('product')}}">Cancel</a>
					<button class="btn btn-primary" type="submit">Save</button>
				</div>
			</div>
		</form>
	</div>
</div>

@endsection
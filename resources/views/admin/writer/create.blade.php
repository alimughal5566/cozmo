@extends( 'admin.layouts.app' )
@section( 'content' )

<div class="app-title">
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
		</li>
		<li class="breadcrumb-item"><a href="{{url('/')}}">@lang('general.home.users')</a>
	</li>
	<li class="breadcrumb-item">@lang('writer')</li>
</ul>
</div>

<div class="row">
    <div class="col-md-12">

		<div class="tile">
			
			<h3 class="tile-title">@lang('writer')</h3>

			@if(Session::has('success'))
			<div class="alert alert-success">
				{{ Session::get('success') }}
			</div>
			@endif

			@if (session('alert'))
				<div class="alert alert-danger">
					{{ session('alert') }}
				</div>
			@endif

			<form action="{{url('writer')}}" method="post">
				@csrf
			<div class="row">
				
				<div class="col-sm-6">
					<div class="form-group">
						<label for="title">@lang('name'):</label>
						<input required id="title" type="text" placeholder="Name" value="{{old('title')}}" class="form-control" name="title">

						@if ($errors->has('title'))
							<span class="help-block" style="color:#721c24;">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
						@endif
					</div>
				</div>
			</div>
			<div class="row">
				
				<div class="col-sm-6">
					<div class="form-group">
						<label for="phone_number">@lang('phone'):</label>
						<input required id="phone_number" type="text" placeholder="Phone Number" value="{{old('phone')}}" class="form-control" name="phone">

						@if ($errors->has('phone'))
							<span class="help-block" style="color:#721c24;">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
						@endif
					</div>
				</div>
			</div>

			<div class="col-sm-6">
            <center>
                    <input type="submit" value="submit" class="btn btn-primary"/>
            </center>
            </div>
			</form>

    </div>
</div>    

@endsection

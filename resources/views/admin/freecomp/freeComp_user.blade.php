@extends( 'admin.layouts.app' )

@section( 'content' )
	<div class="app-title">

		<ul class="app-breadcrumb breadcrumb">
			<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
			</li>
			<li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a>
			</li>
			<li class="breadcrumb-item"><a href="{{url('/users')}}">Users</a>
			</li>
			<li class="breadcrumb-item">Update</li>
		</ul>
	</div>
<div class="row">
	<div class="col-md-12">
		<!--<form class="form-horizontal" method="POST" action="{{ url('users/store') }}" enctype="multipart/form-data">-->
		<!--	{{ csrf_field() }}-->
			<div class="tile">
				<h3 class="tile-title">User Detail</h3>
				<form class="form-horizontal" method="POST" action="{{ url('users/store') }}" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="row"> 
						<div class="col-sm-6 col-md-4">
							<div class="form-group">
								<label class="form-control-label">Name</label>
								<input id="name" type="text" class="form-control" readonly name="name" value="{{ $user->name }}" >
							</div>
						</div>
						<div class="col-sm-6 col-md-4">
							<div class="form-group">
								<label class="form-control-label">Email</label>
								<input id="email" readonly type="email" class="form-control" name="email" value="{{ $user->email }}" required >
						</div>
					</div>
						<div class="col-sm-6 col-md-4">
							<div class="form-group">
								<label class="form-control-label">Phone</label>
								<input id="phone" type="text" class="form-control" name="phone" value="{{ $user->phone }}" readonly>
							</div>
						</div>
						<div class="col-sm-6 col-md-4">
							<div class="form-group">
								<label class="form-control-label">Address</label>
								<input id="address" type="text" class="form-control" name="address" value="{{ $user->address }}" readonly>
							</div>
						</div>
						<div class="col-sm-6 col-md-4">
							<div class="form-group">
								<label class="form-control-label">City</label>
								<input id="city" type="text" class="form-control" name="city" value="{{ $user->city }}" readonly>
							</div>
						</div>
						<div class="col-sm-6 col-md-4">
							<div class="form-group">
								<label class="form-control-label">Postal Code</label>
								<input id="postal_code" type="text" class="form-control" name="postal_code" value="{{ $user->postal_code }}" readonly>
							</div>
						</div>
                                                @if ($user->is_business_profile != '0')
						<div class="col-sm-6 col-md-4">
							<div class="form-group">
								<label class="form-control-label">Business Name</label>
								<input id="text" type="text" class="form-control" name="business_name" value="{{ $user->business_name}}" readonly>
							</div>
						</div>
						<div class="col-sm-6 col-md-4">
							<div class="form-group">
								<label class="form-control-label">Business Phone</label>
								<input id="text" type="text" class="form-control" name="business_phone" value="{{ $user->business_phone}}" readonly>
							</div>
						</div> 
						<div class="col-sm-6 col-md-4">
							<div class="form-group">
								<label class="form-control-label">Business Facebook</label>
								<input id="text" type="text" class="form-control" name="business_facebook_url" value="{{ $user->business_facebook_url}}" readonly>
							</div>
						</div>
						<div class="col-sm-6 col-md-4">
							<div class="form-group">
								<label class="form-control-label">Business Twitter</label>
								<input id="text" type="text" class="form-control" name="business_twitter_url" value="{{ $user->business_twitter_url}}" readonly>
							</div>
						</div> 
                                                @endif

		              <div class="col-sm-6 col-md-4">
							<div class="form-group">
								<label class="form-control-label">Created at</label>
								<input id="text" type="text" class="form-control" name="created_at" value="{{ $user->created_at}}" readonly>
							</div>
						</div> 

					</div>
					<!--<input id="file" type="hidden" class="form-control" name="id" value="{{$user->id}}">-->
					<!--<div class="tile-footer text-right">-->
					<!--	<a href="{{url('users')}}" class="btn btn-default">@lang('general.cancel')</a>-->
					<!--	<button type="submit" class="btn btn-primary">@lang('general.save')</button>-->
					<!--</div>-->
				</form>
			</div>
		<!--</form>-->
	</div>
</div>

@endsection
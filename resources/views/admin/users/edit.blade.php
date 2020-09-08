@extends( 'admin.layouts.app' )

@section( 'content' )
	<div class="app-title">

		<ul class="app-breadcrumb breadcrumb">
			<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
			</li>
			<li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a>
			</li>
			<li class="breadcrumb-item"><a href="{{url('/users')}}">All Agents</a>
			</li>
			<li class="breadcrumb-item">Edit Agent</li>
		</ul>
	</div>
<div class="row">
	<div class="col-md-12">

			<div class="tile">
				<h3 class="tile-title">Edit Agents</h3>
				<form class="form-horizontal" method="POST" action="{{ url('users/update') }}" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="row">
						<div class="col-sm-6 col-md-4">
							<div class="form-group">
								<label class="form-control-label">Name</label>
								<input id="name" type="text" class="form-control " name="name" value="{{ $user->name }}" required autofocus>
							</div>
						</div>
						<div class="col-sm-6 col-md-4">
							<div class="form-group">
								<label class="form-control-label">Email</label>
								<input id="email"  type="email" class="form-control " name="email" value="{{ $user->email }}" required >
							</div>
						</div>
						<div class="col-sm-6 col-md-4">
							<div class="form-group">
								<label class="form-control-label">Phone</label>
								<input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ $user->phone_number }}">
							</div>
						</div>
                        <div class="col-sm-6 col-md-4 ">
                            <label for="comp">Select Company</label>
                            <select name="company_id" class="form-control"  >

                                @foreach ($companies as $comp)
                                    <option value="{{ $comp->id }}">{{ $comp->title }}</option>
                                @endforeach
                            </select>
						</div>

						<!--<div class="col-sm-6 col-md-4">-->
						<!--	<div class="form-group">-->
						<!--		<label class="form-control-label">Type</label>-->
						<!--		<select name="type" class="form-control">-->
						<!--			<option value="{{$user->type}}" >{{$user->type}}</option>-->
						<!--			<option value="" >Select Members</option>-->
						<!--			<option value="Public" >Public</option>-->
						<!--			<option value="Members Only" >Members Only</option>-->
						<!--			<option value="Exec Only" >Exec Only</option>-->
						<!--		</select>-->
						<!--	</div>-->
						<!--</div>-->
						<div class="col-sm-6 col-md-4">
							<div class="form-group">
								<label class="form-control-label">State</label>
								<input id="state" type="text" class="form-control" name="state" value="{{ $user->state }}">
							</div>
						</div>
						<div class="col-sm-6 col-md-4">
							<div class="form-group">
								<label class="form-control-label">City</label>
								<input id="city" type="text" class="form-control" name="city" value="{{ $user->city }}">
							</div>
						</div>
                        <div class="col-sm-6 col-md-4">
							<div class="form-group">
								<label class="form-control-label">Street name</label>
								<input id="street_name" type="text" class="form-control" name="street_name" value="{{ $user->street_name }}">
							</div>
						</div>
                        <div class="col-sm-6 col-md-4">
							<div class="form-group">
								<label class="form-control-label">Street no</label>
								<input id="street_no" type="text" class="form-control" name="street_no" value="{{ $user->street_no }}">
							</div>
						</div>


						<div class="col-sm-6 col-md-4">
							<div class="form-group">
								<label class="form-control-label">Zip Code</label>
								<input id="zip_code" type="text" class="form-control" name="zip_code" value="{{ $user->zip_code }}">
							</div>
						</div>



{{--                                                @if ($user->is_business_profile != '0')--}}
{{--						<div class="col-sm-6 col-md-4">--}}
{{--							<div class="form-group">--}}
{{--								<label class="form-control-label">Business Name</label>--}}
{{--								<input id="text" type="text" class="form-control" name="business_name" value="{{ $user->business_name}}">--}}
{{--							</div>--}}
{{--						</div>--}}
{{--						<div class="col-sm-6 col-md-4">--}}
{{--							<div class="form-group">--}}
{{--								<label class="form-control-label">Business Phone</label>--}}
{{--								<input id="text" type="text" class="form-control" name="business_phone" value="{{ $user->business_phone}}">--}}
{{--							</div>--}}
{{--						</div>--}}
{{--						<div class="col-sm-6 col-md-4">--}}
{{--							<div class="form-group">--}}
{{--								<label class="form-control-label">Business Facebook</label>--}}
{{--								<input id="text" type="text" class="form-control" name="business_facebook_url" value="{{ $user->business_facebook_url}}">--}}
{{--							</div>--}}
{{--						</div>--}}
{{--						<div class="col-sm-6 col-md-4">--}}
{{--							<div class="form-group">--}}
{{--								<label class="form-control-label">Business Twitter</label>--}}
{{--								<input id="text" type="text" class="form-control" name="business_twitter_url" value="{{ $user->business_twitter_url}}">--}}
{{--							</div>--}}
{{--						</div>--}}
{{--                                                @endif--}}



		              <div class="col-sm-6 col-md-4">
							<div class="form-group">
								<label class="form-control-label">Created date</label>
								<input id="created_date" type="date" class="form-control" name="created_date" value="{{ $user->created_date}}" >


                            </div>
						</div>

{{--					</div>--}}
					<input id="file" type="hidden" class="form-control" name="id" value="{{$user->id}}">

                    </div>
                    @if(Auth::check())
                        <div class="tile-footer text-right " >
                            <a href="{{url('users')}}" class="btn btn-default">@lang('general.cancel')</a>
                            <button type="submit" class="btn btn-primary">@lang('general.save')</button>
                        </div>
                    @endif
				</form>

			</div>

	</div>
</div>

@endsection



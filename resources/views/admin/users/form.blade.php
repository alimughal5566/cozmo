@extends( 'layouts.app' )

@section( 'content' )

<header class="page-header">
	<div class="container-fluid">
		<h2 class="no-margin-bottom">Partner Members</h2>
	</div>
</header>
<!-- Breadcrumb-->
<div class="breadcrumb-holder container-fluid">
	<ul class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="{{url('dashboard')}}">Home</a>
		</li>
		<li class="breadcrumb-item active">Add New</li>
	</ul>
</div>
<!-- Forms Section-->
<section class="forms">
	<div class="container-fluid">

		<div class="row">
			<div class="col-lg-12">

				<div class="card">

					<div class="card-header d-flex align-items-center">
						<h3 class="h4">Add New Partner</h3>
					</div>
					<div class="card-body">
						<form class="form-horizontal" method="POST" action="{{ url('partners/store') }}" enctype="multipart/form-data">
						{{ csrf_field() }}
							<div class="form-group row">
								<label class="col-sm-2 form-control-label">Name</label>
								<div class="col-sm-10">
									<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus> 
								</div>
							</div>
							<div class="line"></div>
							<div class="form-group row">
								<label class="col-sm-2 form-control-label">Email</label>
								<div class="col-sm-10">
									<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
								</div>
							</div>
							<div class="line"></div>
							
							<div class="form-group row">
								<label class="col-sm-2 form-control-label">Phone</label>
								<div class="col-sm-10">
									<input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required>
								</div>
							</div>
							<div class="line"></div>
							
							
							<div class="form-group row">
								<label class="col-sm-2 form-control-label">Password</label>
								<div class="col-sm-10">
									<input id="password" type="password" class="form-control" name="password">
								</div>
							</div>
							<div class="line"></div>
							
							
							<div class="form-group row">
								<div class="col-sm-12 text-right">
									<a href="{{url('users')}}" class="btn btn-sm btn-secondary">@lang('general.cancel')</a>
									<button type="submit" class="btn btn-sm btn-primary">@lang('general.save') </button>
								</div>
							</div>


					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
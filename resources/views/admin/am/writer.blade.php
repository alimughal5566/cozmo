@extends( 'admin.layouts.app' )
@section( 'content' )

<div class="app-title">
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
		</li>
		<li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a>
	</li>
	<li class="breadcrumb-item">Article Writer Competition</li>
</ul>
</div>

<div class="row">
    <div class="col-md-12">
    <form class="form-horizontal" method="POST" action="{{ route('mc.store') }}" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="tile">
			
			<h3 class="tile-title">Article Writer Competition</h3>
			@if(Session::has('success'))
			<div class="alert alert-success">
				{{ Session::get('success') }}
			</div>
			@endif
			@foreach ($errors->all() as $error)
			<div class="alert alert-danger">{{ $error }}</div>
			@endforeach
			<div class="row">
				
				<div class="col-sm-6">
					<div class="form-group">
						<label for="Article Name">Name:</label>
						<input required id="article_name" type="text" placeholder="Name" class="form-control" name="article_name">
					</div>
				</div>
			</div>
			<div class="row">
				
				<div class="col-sm-6">
					<div class="form-group">
						<label for="phone_number">Phone Number:</label>
						<input required id="phone_number" type="text" placeholder="Phone Number" class="form-control" name="phone_number">
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

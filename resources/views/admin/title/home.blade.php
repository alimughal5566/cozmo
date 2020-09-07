@extends( 'admin.layouts.app' )
@section( 'content' )

<div class="app-title">

	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
		</li>
		<li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a>
		</li>
		<li class="breadcrumb-item">title</li>
	</ul>
</div>


<div class="row">
	<div class="col-md-12 ">
		<div class="tile pb-0">
			@if (session('success'))
			    <div class="alert alert-success" style="width: 40%">
			        {{ session('success') }}
			    </div>
			@endif
			@if (session('danger'))
			    <div class="alert alert-danger" style="width: 40%">
			        {{ session('danger') }}
			    </div>
			@endif
			<h3 class="tile-title">Title Name color</h3>
			<div class="card-body pt-0 pl-0 pb-1">
			    	<form class="form-horizontal" method="POST" action="{{ url('title_store') }}" enctype="multipart/form-data">
						{{ csrf_field() }}
				
                <div class="form-group row">
								
			<div class="col-sm-10">
				<label style="font-size: 20px;" class="form-control-label">Select color :</label>
				<select style="padding: 5px;margin: 0 0 0 5px;" name="color">
				    <?php $color = DB::table('title_color')->first();  ?>
				    @if($color=="")
				    <option value="white" style="background:white">white</option>
                    <option value="black" style="color:white; background:black">black</option>
                    <option value="red" style="background:red">red</option>
                    <option value="yellow" style="background:yellow">yellow</option>
                    <option value="purple" style="background:purple">purple</option>
                    @else
                    <option value="{{$color->color}}" >{{$color->color}}</option>
                    <option value="white" style="background:white">white</option>
                    <option value="black" style="color:white; background:black">black</option>
                    <option value="red" style="background:red">red</option>
                    <option value="yellow" style="background:yellow">yellow</option>
                    <option value="purple" style="background:purple">purple</option>
                    @endif
                </select>
			</div>
							</div>
					<div class="line"></div>
							
                <div style="border-top:1px solid #d2d2d2;padding-top:12px;" class="form-group row">
					<div class="col-sm-12 text-right">
						<button type="submit" class="btn btn-sm btn-primary">@lang('general.save') </button>
					</div>
				</div>
			</div>

<script type="text/javascript">

</script>

<style>
	.sweet-alert h2 {
		font-size: 1.3rem !important;
	}
	
	.sweet-alert .sa-icon {
		margin: 30px auto 35px !important;
	}
</style>

@endsection
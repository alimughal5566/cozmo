@extends( 'admin.layouts.app' )
@section( 'content' )


<style>
	.set-width{
		width: 51%;
	}
		.set-lab{
		padding-left: 50px !important;
	}
@media screen and (max-width: 568px){
.set-width{
		width: 108%;
	}
	.set-lab{
		padding-left: 16px !important;
	}

}
</style>

<div class="app-title">
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
		</li>
		<li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a>
		</li>
		
	</ul>
</div>


@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('alert'))
    <div class="alert alert-danger">
        {{ session('alert') }}
    </div>
@endif

<div class="row">
	<div class="col-md-12">
		<form class="form-horizontal" method="POST" action="{{ url('discount_coupon/store') }}" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="tile">
				<h3 class="tile-title">Add Coupon</h3>
				 <hr style="border-top: 1px solid black;    margin-bottom: 2rem;">

				<div class="row">
					<div class="form-group row set-width">
                         <label for="" class="col-sm-6 col-form-label set-lab">Start Date</label>
                            <div class="col-sm-6">
                               <input type="date" class="form-control" placeholder="Start Date" name="start_date" value="{{old('start_date')}}" required autofocus>
                            </div>
                 	</div>                                        
                                        

					<div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab">End Date</label>
	                  <div class="col-sm-6">
	                    <input type="date" class="form-control" value="{{old('end_date')}}" placeholder="End Date" name="end_date"  required autofocus>
	                  </div>
	                </div>
	                
	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab">Title</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" value="{{old('title')}}" placeholder="title" name="title"  required autofocus>
	                  </div>
	                </div>

	                <div class="form-group row set-width">
	                  <label for="" class="col-sm-6 col-form-label set-lab">Percentage(1 to 20)</label>
	                  <div class="col-sm-6">
	                    <input type="number" class="form-control" placeholder="percentage" maxlength="2" name="percentage" value="{{old('percentage')}}"  required autofocus>
	                  </div>
	                </div>

	            </div>
	            <div class="tile-footer text-right" style="margin-right: 16px;">
					<button class="btn btn-primary" type="submit">Save</button>
				</div>
	        </div>
	    </form>
	</div>

</div>








@endsection
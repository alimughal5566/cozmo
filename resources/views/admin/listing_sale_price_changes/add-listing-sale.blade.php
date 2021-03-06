@extends( 'admin.layouts.app' )
@section( 'content' )
<style>
.my-btn {

border-top: none !important;
}
.chosen-container {
width: 100% !important;
}

</style>
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
/*.myset p {
	    padding-left: 3px;
    padding-right: 3px;
}*/
.myset p {
	margin-left: 30px;
}
.myset h4 {
	    font-size: 16px;
	    margin-top: 10px;
}
/ Rounded sliders /
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
.aloo{
	    vertical-align: -webkit-baseline-middle;
    margin: 0;
}
.chosen-height{
	height: 40px;
}
</style>
<style>
        tfoot > tr > th:nth-child(3) select {
            opacity: 0;
        }
        tfoot > tr > th:nth-child(4) select{
            opacity: 0;
        }
        tfoot > tr > th:nth-child(7) select{
            opacity: 0;
        }
        tfoot > tr > th:nth-child(8) select{
            opacity: 0;
        }
        tfoot > tr > th:nth-child(9) select{
            opacity: 0;
        }
    </style>
     <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>

    <script type="text/javascript" src="//cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>

<div class="app-title">
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
		</li>
		<li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a>
	</li>
	<li class="breadcrumb-item">New Listing Sale Price Changes</li>
</ul>
</div>
<div class="row">
<div class="col-md-12">
	<form class="form-horizontal" method="POST" action="{{ route('listing_sale_price_changes.store') }}" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="tile">

			<h3 class="tile-title">New Listing Sale Price Changes</h3>
			@if(Session::has('message'))
			<div class="alert alert-success">
				{{ Session::get('message') }}
			</div>
			@endif
			@foreach ($errors->all() as $error)
			<div class="alert alert-danger">{{ $error }}</div>
			@endforeach
			<div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Select Title</label>
                        <select name="property_id" id="" class="form-control">
                            <option value=""selected>Select property</option>
                            {{--                                    @dd($prop);--}}
                            @foreach($prop as $datum)
                                <option value="{{$datum->id}}">{{$datum->title}} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="title">Date Change:</label>
						<input required id="date_change"  type="date" placeholder="Date change" class="form-control" name="date_change">
                    </div>
				</div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="title">Old Price:</label>
                        <input required id="old_price"  type="number" placeholder="Old price" class="form-control" name="old_price">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="title">Updated Price:</label>
                        <input required id="updated_price"  type="number" placeholder="Updated price" class="form-control" name="updated_price">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title">Created At:</label>
                        <input required id="created_at"  type="date" placeholder="Created at" class="form-control" name="created_at">
                    </div>
                </div>
				<div class="col-md-12 text-right">
					<div class="form-group" style="margin-top: 27px !important; justify-content: center">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
				</div>
			</div>
		</div>
    </form>
  </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" />
<link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
@endsection

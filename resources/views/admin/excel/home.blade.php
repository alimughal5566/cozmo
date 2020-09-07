@extends( 'admin.layouts.app' )
@section( 'content' )

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>
 <script type="text/javascript" src="//cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>

 <style>
 	.modal-header {
 		display: -webkit-inline-box;
 	}
 </style>
 
<?php $curr=Config::get("constants.currency"); ?>
<div class="app-title">
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
		</li>
		<li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a>
		</li>
		
	</ul>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="tile">
			<h3 class="tile-title">
				Upload Email Through Excel file
				<!-- <a href="#" class="btn btn-sm btn-success pull-right cust_color"><i class="fa fa-plus"></i> Upload Excel File</a> -->
				<!-- <input type="file" name=""> -->
				<a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-sm btn-success pull-right cust_color"><i class="fa fa-plus"></i> Upload Excel File</a>
			</h3>
			@if(Session::has('success'))
			<div class="alert alert-success">
				{{ Session::get('success') }}
			</div>
			@endif
			@if($errors->any())
			    {!! implode('', $errors->all('<div  class="alert alert-danger">:message</div>')) !!}
			@endif
			<div class="table-responsive">
				<table id = "example" class="table">
					<thead class="back_blue">
						<tr>
							<th>#</th>
							<th>Email</th>
							<th>Status</th>
							<th>Send Status</th>
							<th>Sending Date</th>
							<th>Country</th>	
							<th>Business Category</th>						
							<th>Created At</th>
							<!-- <th width="130" class="text-center">@lang('packages.actions')</th> -->
						</tr>
					</thead>
					<tbody>
						<?php $i=1 ?>
						@foreach($data as $row)
						<tr>
							<td>{{$i}}</td>
							<?php $i++ ?>
							<td>{{$row->email}}</td>
							<td>{{$row->status}}</td>
							<td>{{$row->send}}</td>
							<td>{{$row->sending_date}}</td>
							<td>{{$row->country}}</td>			
							<td>{{$row->business_category}}</td>				
							<td>{{$row->created_at}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Upload FIle</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       	<form id="add_upload_excel" action="{{url('store_excel_file')}}" method="POST" enctype="multipart/form-data">
       		@csrf
		<h4>Select file</h4>
	<div class="form-group">
	  <input type="file" required name="upload" class="form-control">
	</div>

	<div class="form-group">
	  <label>Country</label><br>
						<select name="country">
							<option value="select">Select Country</option>
							  <option value="USA">USA</option>
							  <option value="UK">UK</option>
							  <option value="Canada">Canada</option>
						</select>
	</div>

	<div class="form-group">
	  <label>Business Category</label><br>
						<select name="business_category">
							<option value="select">Select Category</option>
							<option value="Casino">Casino</option>
							<option value="Restaurant">Restaurant</option>
							<option value="Hotel">Hotel</option>
							<option value="No Category">No Category</option>

						</select>
	</div>

	<!-- <div class="row">

</div> -->
<div class="form-group">
    <button class="btn btn-primary" id="uploaded">Upload</button>
  </div>
</form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<script>
	// $('#uploaded').click(function(){
	// 	setTimeout(function(){
	// 	$('#uploaded').prop('disabled', true);
	// 	 }, 1000);
	// });

	$('#add_upload_excel').on('submit', function(){
		$('#uploaded').prop('disabled', true);
	});


	$(document).ready(function() {
    $('#example').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
} );
</script>



@endsection
@extends( 'admin.layouts.app' )
@section( 'content' )

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>
 
<script type="text/javascript" src="//cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script> 

<script src="http://localhost/prizecomparison/public/backend/js/bootstrap.min.js"></script>

<!-- <style>
	.dataTables_length:{
		    font-size: 17px;

	}
</style> -->
<style>
	.seting {
		margin-right: -50px;
    color: black;
	} 
</style>
<div class="app-title">

	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
		</li>
		<li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a>
		</li>
		<li class="breadcrumb-item">visitor</li>
	</ul>
</div>


<div class="row">
	<div class="col-md-12">
		<div class="tile">
			<h3 class="tile-title">Site Visitor  
				
					<div class="col-md-6 col-lg-3 seting" style="float: right;">
						<div class="" style="height: 75px;">
							<div class="info">
								<h4>Total Visitor# {{$total_count}}</h4>
								
							</div>
						</div>
				    </div>
				    </h3>

				    <!-- <div class="col-sm-6 col-md-3 col-lg-3" style="margin-top: 55px;">
						<div class="form-group">
							<label>Select Date</label>
							<input autocomplete="off" type="text" value=""  name="start_date" class="form-control datepicker" id="show_Date" placeholder="Select Date">		
						</div>
					</div> -->

			<div class="table-responsive">
				<table class="table" id="table_id">
					<thead class="back_blue">
						<tr>
							<th>Serial Number</th>
							<th>IP Address</th>
							<th>Country</th>
							<th>date</th>							
							<th width="130" class="text-center">Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php $number = 1; ?>
						@foreach($record as $row)
						<tr>
							<td>{{ $number }}</td>

							 <?php $number++; ?>

							<td>{{$row->ip_address}}</td>
							<td>{{$row->country}}</td>
							<td>{{$row->created_at}}  </td>							
							<td class="text-center">
								<div class="actions-btns dule-btns">
									<a href="javascript:void(0)" data-id="{{$row->id}}" class="btn btn-sm btn-danger removePartner"><i class="fa fa-trash"></i></a>
								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
   $('#example_1').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );

	$( "body" ).on( "click", ".removePartner", function () {
		var task_id = $( this ).attr( "data-id" );
		var form_data = {
			id: task_id
		};
		swal( {
			title: "Delete IP Address",
				text: "Do you want to delete this?",
				type: 'info',
				showCancelButton: true,
				confirmButtonColor: '#F79426',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes',
				showLoaderOnConfirm: true
			},
			function () {
				$.ajax( {
					type: 'POST',
					headers: {
						'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
					},
					url: '<?php echo url("ipaddress/delete"); ?>',
					data: form_data,
					success: function ( msg ) {
						swal( "@lang('users.success_delete')", '', 'success' )
						setTimeout( function () {
							location.reload();
						}, 2000 );
					}
				} );
			} );

	} );
	$( "body" ).on( "click", "#change_status", function () {
		var id = parseInt( $( this ).attr( "data-id" ) );
		var status = parseInt( $( this ).attr( "data-status" ) );
		if ( status == 0 ) {
			var s = 1
		} else if ( status == 1 ) {
			s = 0
		}
		var form_data = {
			id: id,
			status: s
		};
		swal( {
				title: "@lang('users.change_status')",
				text: "@lang('users.change_status_msg')",
				type: 'info',
				showCancelButton: true,
				confirmButtonColor: '#F79426',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes',
				showLoaderOnConfirm: true
			},
			function () {
				$.ajax( {
					type: 'POST',
					headers: {
						'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
					},
					url: '<?php echo url("users/change_status"); ?>',
					data: form_data,
					success: function ( msg ) {
						swal( "@lang('users.success_change')", '', 'success' )
						setTimeout( function () {
							location.reload();
						}, 2000 );
					}
				} );
			} );


	} );

	$(document).ready( function () {
    $('#table_id').DataTable();
	});

	$('.datepicker').datepicker({
			format: 'yyyy-mm-dd',
			autoclose: true
		});






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
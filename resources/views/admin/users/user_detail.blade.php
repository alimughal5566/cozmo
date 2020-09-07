@extends( 'admin.layouts.app' )
@section( 'content' )

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
			<h3 class="tile-title">User Detail
			</h3>
			<div class="table-responsive">
				<table class="table">
					<thead class="back_blue">
						<tr>
							<th>@lang('users.name')</th>
							<th>@lang('users.phone')</th>
							<th>Address</th>
							<th>Postal code</th>
						</tr>
					</thead>
					<tbody>
						@foreach($users as $row)
						<tr>
							<td>{{$row->name}}</td>
							<td>{{$row->phone}}</td>
							<td>{{$row->address}}</td>
							<td>{{$row->postal_code}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$( "body" ).on( "click", ".removePartner", function () {
		var task_id = $( this ).attr( "data-id" );
		var form_data = {
			id: task_id
		};
		swal( {
				title: "@lang('users.delete_user')",
				text: "@lang('users.delete_user_msg')",
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
					url: '<?php echo url("users/delete"); ?>',
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
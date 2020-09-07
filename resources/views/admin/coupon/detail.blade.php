@extends( 'admin.layouts.app' )
@section( 'content' )
<style>
	.dule-btns{
		display: flex;
	}
	.set_space {
    margin-bottom : 20px;
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
		<li class="breadcrumb-item">Coupon</li>
	</ul>
</div>


<div class="row">
	<div class="col-md-12">
		<div class="tile">
			@if (session('alert'))
			    <div class="alert alert-danger" style="width: 40%">
			        {{ session('alert') }}
			    </div>
			@endif
			@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
			<h3 class="tile-title">Coupon Used By
			</h3>
			<div class="table-responsive">
				<table class="table" id = "example">
					<thead class="back_blue">
						<tr>
							<th>Serial#</th>
                            <th>Coupon</th>
							<th>Used By</th>
							<th>Discount</th>
							<th>Competition</th>
							<th>Created At</th>
						</tr>
					</thead>
					<tbody >
						@foreach($used_by as $key =>$row)
						@php $user = DB::table('users')->where('id',$row->user_id)->first(); @endphp
						<tr>
							<td>{{$key+1}}</td>
							<td>{{$coupon->coupon}} </td>
							<td>{{$user->name}}</td>
							<td>{{$row->discount_amount}}</td>
							<td>
								@php $competition_id = explode(",",$row->comp_used_for) @endphp
								@foreach($competition_id as $key =>$value)
								@php $competition = DB::table('packages')->where('id',$value)->first(); @endphp
								<span style="padding: 8px 10px;margin: 0; background: #222D32;    margin-top: 5px; color: white;" class="badge badge-warning">{{ $competition->name }}</span>
								@endforeach
							</td>
							<td>{{$row->created_at}}</td>
							
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<script src="{{url('backend/sweetalerts/sweetalert2.all.js')}}"></script>
<script type="text/javascript">

       $(document).ready(function() {
    $('#example').DataTable( {
        "order": [[ 6, "desc" ]]
    } );
} );




 	$( "body" ).on( "click", ".delete", function () {
		var task_id = $( this ).attr( "data-id" );
		var form_data = {
			id: task_id
		};
		swal({
			title: "Do you want to delete this Record",
			text: "@lang('packages.delete_package_msg')",
			type: 'info',
			showCancelButton: true,
			confirmButtonColor: '#F79426',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes',
			showLoaderOnConfirm: true
		}).then( ( result ) => {
			if ( result.value == true ) {
				$.ajax( {
					type: 'POST',
					headers: {
						'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
					},
					url: '<?php echo url("discount_coupon/delete"); ?>',
					data: form_data,
					success: function ( msg ) {
						swal( "Record Delete Successfully", '', 'success' )
						setTimeout( function () {
							location.reload();
						}, 2000 );
					}
				} );
			}
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

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
			<h3 class="tile-title">Coupon
			<a href="{{url('discount_coupon/add')}}" class="btn btn-sm btn-success pull-right cust_color">Add Coupon</a>
			</h3>
			<div class="table-responsive">
				<table class="table" id = "example">
					<thead class="back_blue">
						<tr>
							<th>Serial#</th>
							<th>title</th>
                            <th>Start Date</th>
							<th>End Date</th>
							<th>Coupon</th>
							<th>%</th>
							<th>No. of Used</th>
							<th>Created At</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody >
						@foreach($coupon as $key =>$row)
						@php $check = DB::table('coupon_data')->where('coupon_id',$row->id)->first();
						     $used_count = DB::table('coupon_data')->where('coupon_id',$row->id)->count();
						@endphp
						<tr>
							<td>{{$key+1}}</td>
							<td>{{$row->title}} </td>
							<td>{{$row->start_date}} </td>
							<td>{{$row->end_date}}</td>
							<td>{{$row->coupon}}</td>
							<td>{{$row->percentage}}</td>
							<td>{{$used_count}}</td>

							<td>{{$row->created_at}}</td>
							<td class="text-center">
								@if(!isset($check))
								<a href="#" data-id="<?php echo $row->id; ?>" class="btn btn-sm btn-danger delete"  data-title="Delete"><i class="fa fa-trash"></i></a>
								@endif
								<a href="{{url('view_coupon_use/'.$row->id)}}" class="back_color btn btn-sm btn-info" data-title="View Coupon Used By"><i title="View Coupon Used By" class="fa fa-eye"></i></a>

							</td>
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
        "order": [[ 7, "desc" ]]
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

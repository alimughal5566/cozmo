@extends( 'admin.layouts.app' )
@section( 'content' )
<div class="app-title">
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
		</li>
		<li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard /</a>
		</li>
		<li> Faqs</li>
	</ul>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="tile">
			<h3 class="tile-title">
			    Faqs
				<a href="{{route('faqs.create')}}" class="btn btn-sm btn-success pull-right cust_color"><i class="fa fa-plus"></i> @lang('packages.add_new')</a>
			</h3>
			<div class="table-responsive">
				<table class="table">
					<thead class="back_blue">
						<tr>
							<th>Title</th>
							<th>Description</th>
							<th>Date Creation</th>
							<th width="130" class="text-center">@lang('packages.actions')</th>
						</tr>
					</thead>
					<tbody>
						@if(isset($faqs) && !empty($faqs))
						@foreach($faqs as $row)
						<tr>
							<td> {{$row->title}} </td>
							<?php  $taglessBody = strip_tags($row->description); ?>
							<td> <?php echo $taglessBody; ?>  </td>
							<td> {{date('Y-m-d', strtotime($row->created_at))}} </td>
							
							<td class="text-center">
								<div class="actions-btns">
									<a href="{{url('faqs/edit/' . $row->id)}}" class="back_color btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>
									<a href="javascript:void(0);" data-id="<?php echo $row->id; ?>" class="btn btn-sm btn-danger delete"><i class="fa fa-trash"></i></a>
								</div>
							</td>
						</tr>
						@endforeach
						@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script src="{{url('backend/sweetalerts/sweetalert2.all.js')}}"></script>
<script type="text/javascript">
	$( "body" ).on( "click", ".delete", function () {
		var task_id = $( this ).attr( "data-id" );
		var form_data = {
			id: task_id
		};
		swal({
			title: "Do you want to delete this Faqs",
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
					url: '<?php echo url("/faqs/delete"); ?>',
					data: form_data,
					success: function ( msg ) {
						swal( "@lang('packages.success_delete')", '', 'success' )
						setTimeout( function () {
							location.reload();
						}, 1000 );
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
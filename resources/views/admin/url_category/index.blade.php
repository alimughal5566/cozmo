@extends( 'admin.layouts.app' )
@section( 'content' )
<div class="app-title">
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
		</li>
		<li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard /</a>
		</li>
		<li> </li>
	</ul>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="tile">
			<h3 class="tile-title">
			    Article Category
				<a href="{{url('url_category_create')}}" class="btn btn-sm btn-success pull-right cust_color"><i class="fa fa-plus"></i> @lang('packages.add_new')</a>
			</h3>
			@if (\Session::has('success'))
    <div class="alert alert-success">
        {!! \Session::get('success') !!}
    </div>
@endif
			<div class="table-responsive">
				<table class="table">
					<thead class="back_blue">
						<tr>
							<th>Title</th>
							<th>Description</th>
							<th>Article Count</th>
							<th>Slug</th>
							<th>Status</th>
							<th>Date Creation</th>
							<th width="130" class="text-center">@lang('packages.actions')</th>
						</tr>
					</thead>
					<tbody>
						@foreach($url_category as $row)
						    <?php $count = DB::table('packages')->where('url_category',$row->id)->count();
						        $desc = str_limit($row->description,30);
						    ?>
						<tr>
							<td><a href="#" target="_blank"> {{$row->title}} </a></td>
							<td><?php print_r($desc) ?> </td>
							<td>{{$count}}</td>
							<td style="text-transform: none;"> {{$row->slug}} </td>
							@if($row->status==1)
							<td> Active</td>
							@else
							<td> Inactive</td>
							@endif
							<td> {{$row->created_at}} </td>

							<td class="text-center">
								<div class="actions-btns">
									<a href="{{url('url_category/edit/' . $row->id)}}" class="back_color btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>
									<a href="javascript:void(0);" data-id="<?php echo $row->id; ?>" class="btn btn-sm btn-danger delete"><i class="fa fa-trash"></i></a>
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
<script src="{{url('backend/sweetalerts/sweetalert2.all.js')}}"></script>
<script type="text/javascript">
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
					url: '<?php echo url("/url_category/delete"); ?>',
					data: form_data,
                    success: function ( msg ) {
                        swal({
                            title: "Response",
                            text: msg,
                            type: 'info',
                        });
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

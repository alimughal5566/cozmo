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
			    Slider
			    @if(Auth::check() && Auth::user()->user_role == 1)
				<a href="{{route
			<h3 class="tile-title">('blog.create')}}" class="btn btn-sm btn-success pull-right cust_color"><i class="fa fa-plus"></i> @lang('packages.add_new')</a>
				@endif
			</h3>
			<div class="table-responsive">
				<table class="table">
					<thead class="back_blue">
						<tr>
							<th>Title</th>
							<th>Description</th>
							<th>Image</th>
							<th>Status</th>
							<th>Date Creation</th>
							<th width="130" class="text-center">@lang('packages.actions')</th>
						</tr>
					</thead>
					<tbody>
						@if(isset($blog) && !empty($blog))
						@foreach($blog as $row)
						<tr>
							<td> {{$row->title}} </td>
							<?php $str = strip_tags($row->description);
						 $str1  =str_replace("\xc2\xa0",' ',$str);
						 $nbsp = html_entity_decode("&Nbsp;");
						 $string = str_replace($nbsp, " ", $str1);
						 ?>
							<td> {{str_replace("&nbsp; ","",$string)}} </td>
							<td> <img src="{{url('blogimages/'.$row->image)}}" class="form-control " style="width: 160px; height: 93px;padding: 5px;"></td>
							<td><?php if ($row->sliderstatus == 1) { echo("Active");} else{echo('Inactive');} ?></td>
							<!--<td> {{date('Y-m-d', strtotime($row->created_at))}} </td>-->
							<td>{{$row->created_at}}</td>

							<td class="text-center">
								<div class="actions-btns">
									<a href="{{url('blog/edit/' . $row->id)}}" class="back_color btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>
									@if(Auth::check() && Auth::user()->user_role == 1)
									<a href="javascript:void(0);" data-id="<?php echo $row->id; ?>" class="btn btn-sm btn-danger delete"><i class="fa fa-trash"></i></a>
									@endif
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
			title: "Do you want to delete this Banner",
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
					url: '<?php echo url("/blog/delete"); ?>',
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

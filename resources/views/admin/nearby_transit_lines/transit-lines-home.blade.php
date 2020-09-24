@extends( 'admin.layouts.app' )
@section( 'content' )
<?php $curr=Config::get("constants.currency"); ?>


<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>
 <script type="text/javascript" src="//cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>

<div class="app-title">
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
		</li>
		<li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a>
		</li>
        <li class="breadcrumb-item">Nearby Transit Lines
        </li>
	</ul>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="tile">
			<h3 class="tile-title">

                Nearby Transit Lines
				@if(Auth::check() && Auth::user()->user_role == 1)
				<a href="{{ route('nearby_transit_lines.add')}}" class="btn btn-sm btn-success pull-right cust_color"><i class="fa fa-plus"></i> @lang('packages.add_new')</a>
				@endif
			</h3>
            @if(Session::has('message'))
                <div class="alert alert-success">
                    {{ Session::get('message') }}
                </div>
            @endif
			<div class="table-responsive">
				<table class="table" id = "example">
					<thead class="back_blue">
						<tr>
							<th>id</th>
							<th>name</th>
							<th>value</th>
							<th>Sort order</th>
{{--						<th>date_created</th>--}}
{{--						<th>date_updated</th>--}}
							<th width="130" class="text-center">@lang('packages.actions')</th>
						</tr>
					</thead>
					<tbody>
						@foreach($data as $key=> $row)

						<tr>
                            <td>{{$key+1}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->value}}</td>
{{--                        <td>{{$row->date_created}}</td>--}}
{{--                        <td>{{$row->date_updated}}</td>--}}
                            <td>{{$row->sort_order}}</td>


                            <td class="text-center">
								<div class="actions-btns " style="display: flex; justify-content: center">

									<a href="{{route('nearby_transit_lines.edit',[$row->id])}}" class="back_color btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>
									<a href="#" data-id="<?php echo $row->id; ?>" class="btn btn-sm btn-danger delete"><i class="fa fa-trash"></i></a>

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

    $(document).ready(function() {
        $('#example').DataTable( {

        } );
    } );

    $( "body" ).on( "click", ".delete", function () {
        var task_id = $( this ).attr( "data-id" );
        // alert(task_id);
        var form_data = {
            id: task_id
        };
        // alert(form_data)
        swal({
            text: "Do you want to delete this?",
            // text: "@lang('packages.delete_package_msg')",
            type: 'info',
            showCancelButton: true,
            confirmButtonColor: '#f5bb7a',
            cancelButtonColor: '#dd3333',
            confirmButtonText: 'Yes',
            showLoaderOnConfirm: true
        }).then( ( result ) => {
            if ( result.value == true ) {
                $.ajax( {
                    type: 'POST',
                    headers: {'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )},
                    url: '<?php echo route("nearby_transit_lines.delete"); ?>',
                    data: form_data,

                    success: function ( msg ) {
                        swal({
                            title: "Response",
                            text: msg,
                            type: 'info',
                        });

                        setTimeout( function () {
                            location.reload();
                        }, 4000 );
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

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

	</ul>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="tile">
			<h3 class="tile-title">
				Multi Competitions
				@if(Auth::check() && Auth::user()->user_role == 1)
				<a href="{{ route('mc.create')}}" class="btn btn-sm btn-success pull-right cust_color"><i class="fa fa-plus"></i> @lang('packages.add_new')</a>
				@endif
			</h3>
			<div class="table-responsive">
				<table class="table" id = "example">
					<thead class="back_blue">
						<tr>
							<th>#</th>
							<th> Title</th>
							<th>Competitions</th>
							<th>Paid / Bouns</th>
							<th>Till Date</th>
							<th>Maximum Tickets</th>
							<th>Ticket Price</th>
							<th>Start Date</th>
							<th>End Date</th>
							<th>Created At</th>
							<th width="130" class="text-center">@lang('packages.actions')</th>
						</tr>
					</thead>
					<tbody>
						@foreach($mc as $key=> $row)
						@php 
						$packk = DB::table('packages')->where('mc_id',$row->id)->where('status',1)->where('soft_delete', 0)->get(); 
						$total_ticket = DB::table('tickets')->where('mc_id',$row->id)->count();
						$sold_money = DB::table('tickets')->where('mc_id',$row->id)->where('purchase_type',0)->where('status',1)->count();
						@endphp
						<tr>
							<td>{{ $key+1 }}</td>
							<td>
								<a  title="View Competition" href="{{url('MultiCompetitions/detail/' . $row->uniqid)}}">{{$row->title}}</a>
							</td>
							<td>
								@if(sizeof($packk) > 0)
								@foreach($packk as $key =>$value)
								<span style="padding: 8px 10px;margin: 0; background: #222D32;    margin-top: 5px; color: white;" class="badge badge-warning">{{ $value->name }}</span>
								@endforeach
								@endif
							</td>
							<td>{{\App\Ticket::where('mc_id', $row->id)->where('status', 1)->where('purchase_type', 0)->where('date_purchased', '>=', date('Y-m-d'))->get()->count()}} / {{\App\Ticket::where('mc_id', $row->id)->where('status', 1)->where('purchase_type', 1)->where('date_purchased', '>=', date('Y-m-d'))->get()->count()}}</td>
							<td>{{\App\Ticket::where('mc_id', $row->id)->where('status', 1)->where('purchase_type', 0)->get()->count()}} / {{\App\Ticket::where('mc_id', $row->id)->where('status', 1)->where('purchase_type', 1)->where('date_purchased', '>=', date('Y-m-d'))->get()->count()}}</td>
							<td>{{$row->max_tickets}} </td>
							<td> <?php  echo $curr; ?>{{$row->price}} </td>
							<td style="white-space: nowrap;"> {{ $row->start_date }} </td>
							<td style="white-space: nowrap;"> {{ $row->end_date }} </td>
							<td>{{$row->created_at}} </td>
							<td class="text-center">
								<div class="actions-btns " style="display: flex;">
									
									<a href="{{url('MultiCompetitions/create/' . $row->id)}}" class="back_color btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>
									@if($total_ticket!=$sold_money)
									@if(Auth::check() && Auth::user()->user_role == 1)
									<a href="#" data-id="<?php echo $row->id; ?>" class="btn btn-sm btn-danger delete"><i class="fa fa-trash"></i></a>
									@endif
									@endif
									<?php $particpate = DB::table('winner')->where('mc_id',$row->id)->where('user_id','!=',0)->first();
									// print_r($particpate);
									// exit();
									$end_date = $row->end_date < date('Y-m-d');
									// echo "<pre>";
									// print_r($data);exit();
									 if($end_date==1) { ?>
									<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal{{$row->id}}">FB Live <i class="fa fa-eye"></i>
									</button>
								<?php }  ?>
								</div>
							</td>
						</tr>
						<div class="modal" id="myModal{{$row->id}}">
					     <div class="modal-dialog">
					      <div class="modal-content">

					        <!-- Modal Header -->
					        <div class="modal-header" id="live_model">
					          <h4 class="modal-title">Live</h4>
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					        </div>

					        <!-- Modal body -->
					        <div class="modal-body">
					        	<form method="POST" action="{{ url('/iframes') }}" enctype="multipart/form-data">
					        		@csrf
					        		<input type="hidden" name="prod_id" value="{{$row->id}} ">
					          <div class="col-sm-12 col-md-12 col-lg-12">
									<div class="form-group">
										<label>Video Link</label>
										<input autocomplete="off" type="text" value="{{$row->iframe}}"  name="iframe" class="form-control datepicker" placeholder="Enter Video link" required="">
									</div>
							  </div>
							  <div class="col-sm-12 col-md-12 col-lg-12">
									<div class="form-group">
										<label>Status</label><br>
										<input <?php if ($row->iframe_status==1){echo "checked";}?> type="radio" value="1" name="iframe_status">Active
										<input <?php if ($row->iframe_status==0){echo "checked";}?>  type="radio" value="0" name="iframe_status">Inactive
									</div>
							  </div>

					        </div>

					        <!-- Modal footer -->
					        <div class="modal-footer">
					          <button class="btn btn-primary" type="submit">Save</button>
					          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					        </div>
					        </form>
					      </div>
					    </div>
					  </div>
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
        "order": [[ 9, "desc" ]]
    } );
} );

	$( "body" ).on( "click", ".delete", function () {
		var task_id = $( this ).attr( "data-id" );
		var form_data = {
			id: task_id
		};
		swal({
			text: "Do you want to delete this?",
			// text: "@lang('packages.delete_package_msg')",
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
					url: '<?php echo route("mc.delete"); ?>',
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

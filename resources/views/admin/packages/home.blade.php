
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

                            <style>
                                [data-title] {

                                      font-size: 30px; /*optional styling*/

                                      position: relative;

                                    }
                                    .tab-content{
        margin-top:10px;
    }
                                    [data-title]:hover::before {
                                      content: attr(data-title);
                                      position: absolute;
                                      bottom: -33px;
                                      display: inline-block;
                                      padding: 3px 6px;
                                      border-radius: 2px;
                                      background: #000;
                                      color: #fff;
                                      font-size: 12px;
                                      font-family: sans-serif;
                                      white-space: nowrap;
                                    }
                                    [data-title]:hover::after {
                                      content: '';
                                      position: absolute;
                                      bottom: -10px;
                                      left: 8px;
                                      display: inline-block;
                                      color: #fff;
                                      border: 8px solid transparent;
                                      border-bottom: 8px solid #000;
                                    }
                                    .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
                                        color: #fff !important;
                                        background-color: #ee8322 !important;
                                        border: 1px solid #ee8322 !important;
                                    }
                                    .nav>li>a {
                                        position: relative;
                                        display: block;
                                        padding: 10px 15px;
                                    }
                                    .nav-tabs>li>a {
                                        margin-right: 2px;
                                        line-height: 1.42857143;
                                        border: 1px solid transparent;
                                        border-radius: 4px 4px 0 0;
                                    }
                                    .nav>li>a:focus, .nav>li>a:hover {
                                        background-color: #ee8322 !important;
                                    }
                                    .nav-tabs>li>a:hover {
                                        border-color: #ee8322 #ee8322 #ee8322 !important;
                                        box-shadow: 5px 3px 9px 0px #88888875 !important;
                                        color: white !important;
                                        transform: translate3d(0, -1px, 0) !important;
                                    }

                            </style>



@extends( 'admin.layouts.app' )
@section( 'content' )
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
	@if (\Session::has('success'))
    <div class="alert alert-success">
        {!! \Session::get('success') !!}
    </div>
	@endif
	<div class="col-md-12">
		<div class="tile">
			<h3 class="tile-title">
				Properties
				@if(Auth::check() && Auth::user()->user_role == 1)
				<a href="{{url('packages/add')}}" class="btn btn-sm btn-success pull-right cust_color"><i class="fa fa-plus"></i> @lang('packages.add_new')</a>
				@endif
			</h3>
              <div class="tab-content">

			<div id="menu1" class="tab-pane fade">
			    @php $count = sizeof($packages); @endphp
			    {{$count}}
			<div class="table-responsive">
				<table class="table">
					<thead class="back_blue">
						<tr>
							<th>@lang('packages.name')</th>
							<!-- <th>@lang('packages.price')</th> -->
							<th>Image</th>
							<th>Participate</th>
							 <th>Paid / Bouns</th>
							 <th>Till Date</th>
							 <th>Competition</th>
							 <th>Active/In-Active</th>
							 <th>Created At</th>
							<th width="130" class="text-center">@lang('packages.actions')</th>
						</tr>
					</thead>
					<tbody>
						@foreach($packages as $row)
						@php $compp = DB::table('multi_competition')->where('id',$row->mc_id)->first();
						$total_ticket = DB::table('tickets')->where('mc_id',$row->mc_id)->count();
						$sold_money = DB::table('tickets')->where('mc_id',$row->mc_id)->where('purchase_type',0)->where('status',1)->count();
						@endphp
						<?php $str = substr($row->name, 0,20);
							  $img = DB::table('package_images')->where('package_id',$row->id)->where('main_img',1)->first();
							  $count = DB::table('freecomps')->where('package_id',$row->uniqid)->count();
							  $sold_money = DB::table('tickets')->where('product_id',$row->id)->where('purchase_type',0)->where('status',1)->count();
						?>
						<tr>
							<td>
								<a target="_blank" title="{{$row->name}}" href="{{url('competition/'.$row->urlCategory->slug.'/' . $row->slug)}}">{{$str}}...</a>
							</td>
							<td><img src="{{'products/'.$row->id.'/'.$img->name}}" style="height: 70px; width: 100px;"></td>
							<!-- <td> <?php  echo $curr; ?> {{$row->price}} </td> -->
							<td>{{$count}} @if($count!=0) <a href="{{url('free/ticket/' . $row->uniqid)}}" class="back_color btn btn-sm btn-info"  data-title="View" style="margin-left: 13px;"><i title = "Free Ticket Competitions" class="fa fa-eye"></i></a> @endif <br>
							    {{$sold_money}} @if($sold_money!=0) <a href="{{url('buy/ticket/' . $row->id)}}" class="back_color btn btn-sm btn-info" style="background-color: green !important;margin-left: 23px;
    margin-top: 7px;" data-title="View"><i title = "Purchase Ticket Competitions" class="fa fa-eye"></i></a> @endif
							</td>

							<td>{{\App\Ticket::where('product_id', $row->id)->where('status', 1)->where('purchase_type', 0)->where('date_purchased', '>=', date('Y-m-d'))->get()->count()}} / {{\App\Ticket::where('product_id', $row->id)->where('status', 1)->where('purchase_type', 1)->where('date_purchased', '>=', date('Y-m-d'))->get()->count()}}</td>
							<td>{{\App\Ticket::where('product_id', $row->id)->where('status', 1)->where('purchase_type', 0)->get()->count()}} / {{\App\Ticket::where('product_id', $row->id)->where('status', 1)->where('purchase_type', 1)->where('date_purchased', '>=', date('Y-m-d'))->get()->count()}}</td>
							<?php
                                $today = date('Y-m-d');
                                $mc = DB::table('multi_competition')->where('id', $row->mc_id)->first();
                                if(!isset($mc->end_date)){
                                    $expired = false;
                                }else{
                                    if($mc->end_date < $today){
                                        $expired = true;
                                    }else{
                                        $expired = false;
                                    }
                                }
                            ?>
                             @if(isset($compp))
                            <td>{{$compp->title}}</td>
                            @else
                            <td></td>
                            @endif

                             @if(!isset($compp))
                            @if($expired == true)
                                @if($row->status == 0)
                                    <td><a href="{{ url('/activate/') }}/{{$row->id}}"><button type="button" disabled>In Active</button></a></td>
                                @else
                                    <td><a href="{{ url('/de_activate/') }}/{{$row->id}}"><button type="button" disabled>Active</button></a></td>
                                @endif
                            @else
                                @if($row->status == 0)
                                    <td><a href="{{ url('/activate/') }}/{{$row->id}}"><button type="button">In Active</button></a></td>
                                @else
                                    <td><a href="{{ url('/de_activate/') }}/{{$row->id}}"><button type="button">Active</button></a></td>
                                @endif
                            @endif
                            @else
                            <td></td>
                            @endif

							<td> {{date('d-m-Y', strtotime($row->created_at))}}<br>
									{{date('H:i:s', strtotime($row->created_at))}}
							 </td>
							<!-- <td> {{date('d-m-Y', strtotime($row->end_date))}} </td> -->
							<!-- <td>{{$row->max_tickets}} </td> -->
							<!-- <td> @if($row->featured==1) Yes @else No @endif  </td> -->

							<td class="text-center">
								<div class="actions-btns " style="display: flex;">
									@if($total_ticket!=$sold_money)
									<a href="{{url('packages/edit/' . $row->id)}}" class="back_color btn btn-sm btn-info"  data-title="Edit"><i class="fa fa-pencil"></i></a>
									@endif
                                    @if($row->mc_id != 0)
									<a href="{{url('packages/send/' . $row->id)}}" class="back_color btn btn-sm btn-info"  data-title="Bulk Advertising emails"><i class="fa fa-envelope"></i></a>
                                    @endif
									<a href="{{url('packages/article/' . $row->id)}}" class="back_color btn btn-sm btn-info"  data-title="Articles"><i class="fa fa-file"></i></a>
									@if($total_ticket!=$sold_money)
									@if(Auth::check() && Auth::user()->user_role == 1)
									<a href="#" data-id="<?php echo $row->id; ?>" class="btn btn-sm btn-danger delete"  data-title="Delete"><i class="fa fa-trash"></i></a>
									@endif
									@endif
									<?php $particpate = DB::table('tickets')->where('product_id',$row->id)->where('user_id','!=',0)->first();
									$end_date = $row->end_date < date('Y-m-d H:i:s');
									// echo "<pre>";
									// print_r($data);exit();
									if($end_date==1 && $particpate!="") { ?>
									<!-- <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal{{$row->id}}">FB Live <i class="fa fa-eye"></i>
									</button> -->
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
					        	<form method="POST" action="{{ url('/iframe') }}" enctype="multipart/form-data">
					        		@csrf
					        		<input type="hidden" name="prod_id" value="{{$row->id}} ">
					          <div class="col-sm-12 col-md-12 col-lg-12">
									<div class="form-group">
										<label>Iframe</label>
										<input autocomplete="off" type="text" value="{{$row->iframe}}"  name="iframe" class="form-control datepicker" placeholder="Enter Iframe" required="">
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



		<div id="menu2" class="tab-pane fade in show active ">
		     @php $count2 = sizeof($unused_package); @endphp
			    {{$count2}}
			<div class="table-responsive">
				<table class="table">
					<thead class="back_blue">
						<tr>
							<th>@lang('packages.name')</th>
							<!-- <th>@lang('packages.price')</th> -->
							<th>Image</th>
							<th>Sales</th>
							 <th>Price</th>
							 <th>Till Date</th>
							 <th>Active/In-Active</th>
							 <th>Created At</th>
							<th width="130" class="text-center">@lang('packages.actions')</th>
						</tr>
					</thead>
					<tbody>
						@foreach($unused_package as $row)
						<?php $str = substr($row->name, 0,20);
							  $img = DB::table('package_images')->where('package_id',$row->id)->where('main_img',1)->first();
							  $count = DB::table('freecomps')->where('package_id',$row->uniqid)->count();
							   $sold_money = DB::table('tickets')->where('product_id',$row->id)->where('purchase_type',0)->where('status',1)->count();
						?>
						<tr>
							<td>
								<a target="_blank" title="{{$row->name}}" href="{{url('competition/'.$row->urlCategory->slug.'/' . $row->slug)}}">{{$str}}...</a>
							</td>
							<td><img src="{{'products/'.$row->id.'/'.$img->name}}" style="height: 70px; width: 100px;"></td>
							<!-- <td> <?php  echo $curr; ?> {{$row->price}} </td> -->
							<td>sale:{{$count}} @if($count!=0) <a href="{{url('free/ticket/' . $row->uniqid)}}" class="back_color btn btn-sm btn-info"  data-title="View"><i title = "Free Ticket Competitions" class="fa fa-eye"></i></a> @endif <br>
							    rent:{{$sold_money}} @if($sold_money!=0) <a href="{{url('buy/ticket/' . $row->id)}}" class="back_color btn btn-sm btn-info" style="background-color: green !important;margin-left: 23px;
    margin-top: 7px;" data-title="View"><i title = "Purchase Ticket Competitions" class="fa fa-eye"></i></a> @endif
							</td>

							<td>{{\App\Ticket::where('product_id', $row->id)->where('status', 1)->where('purchase_type', 0)->where('date_purchased', '>=', date('Y-m-d'))->get()->count()}} / {{\App\Ticket::where('product_id', $row->id)->where('status', 1)->where('purchase_type', 1)->where('date_purchased', '>=', date('Y-m-d'))->get()->count()}}</td>
							<td>{{\App\Ticket::where('product_id', $row->id)->where('status', 1)->where('purchase_type', 0)->get()->count()}} / {{\App\Ticket::where('product_id', $row->id)->where('status', 1)->where('purchase_type', 1)->where('date_purchased', '>=', date('Y-m-d'))->get()->count()}}</td>
							@if($row->status == 0)
                               <td><a href="{{ url('/activate/') }}/{{$row->id}}"><button type="button">In Active</button></a></td>
                            @else
                                <td><a href="{{ url('/de_activate/') }}/{{$row->id}}"><button type="button">Active</button></a></td>
                            @endif
							<td> {{date('d-m-Y', strtotime($row->created_at))}}<br>
									{{date('H:i:s', strtotime($row->created_at))}}
							 </td>
							<!-- <td> {{date('d-m-Y', strtotime($row->end_date))}} </td> -->
							<!-- <td>{{$row->max_tickets}} </td> -->
							<!-- <td> @if($row->featured==1) Yes @else No @endif  </td> -->

							<td class="text-center">
								<div class="actions-btns " style="display: flex;">
									<!--<a href="{{url('packages/edit/' . $row->id)}}" class="back_color btn btn-sm btn-info"  data-title="Edit"><i class="fa fa-pencil"></i></a>-->
         <!--                           @if($row->mc_id != 0)-->
									<!--<a href="{{url('packages/send/' . $row->id)}}" class="back_color btn btn-sm btn-info"  data-title="Bulk Advertising emails"><i class="fa fa-envelope"></i></a>-->
         <!--                           @endif-->
									<!--<a href="{{url('packages/article/' . $row->id)}}" class="back_color btn btn-sm btn-info"  data-title="Articles"><i class="fa fa-file"></i></a>-->

									<a href="#" data-id="<?php echo $row->id; ?>" class="btn btn-sm btn-danger delete"  data-title="Delete"><i class="fa fa-trash"></i></a>
									<?php $particpate = DB::table('tickets')->where('product_id',$row->id)->where('user_id','!=',0)->first();
									$end_date = $row->end_date < date('Y-m-d H:i:s');
									// echo "<pre>";
									// print_r($data);exit();
									if($end_date==1 && $particpate!="") { ?>
									<!-- <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal{{$row->id}}">FB Live <i class="fa fa-eye"></i>
									</button> -->
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
					        	<form method="POST" action="{{ url('/iframe') }}" enctype="multipart/form-data">
					        		@csrf
					        		<input type="hidden" name="prod_id" value="{{$row->id}} ">
					          <div class="col-sm-12 col-md-12 col-lg-12">
									<div class="form-group">
										<label>Iframe</label>
										<input autocomplete="off" type="text" value="{{$row->iframe}}"  name="iframe" class="form-control datepicker" placeholder="Enter Iframe" required="">
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
			title: "Do you want to delete this product",
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
					url: '<?php echo url("packages/delete"); ?>',
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

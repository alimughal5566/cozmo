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
	<div class="col-md-12"> 
		<div class="tile">
			<h3 class="tile-title">
				{{ $mc->title}}
			</h3>
			 
			
  <ul class="nav nav-tabs" role="tablist">
       	 @foreach($mc->products as $key => $product)
  <li class="nav-item">
    <a class="nav-link  {{ $key  == 0 ? 'active':'' }}" href="#tab{{$key+1}}" role="tab" data-toggle="tab" aria-selected="true">{{ $product->name }}</a>
  </li>
      @endforeach
  
</ul>

<!-- Tab panes -->
<div class="tab-content">
	<?php $curr=Config::get("constants.currency"); ?>
       	 @foreach($mc->products as $key => $product)
  <div role="tabpanel" class="tab-pane {{ $key  == 0 ? 'active':'' }}" id="tab{{$key+1}}">
  	<div class="tile">
						<div class="container">
						<div class="">
							 <p><?php  echo $curr; ?>{{ $product->mc_price->price }}</p>
							 @foreach($product->main_img as $key => $img)                                    
                                       @if($key >0)
                                       @break
                                       @endif
                                       <div class="text-center">
                                       <img width="50%" style="margin: 0 auto;" src="<?php echo url("products/$img->package_id/$img->name");?>">
                                       </div>
                                       @endforeach
                                      <br>
                                      <h3>Description</h3>
                                      <p>{!! $product->description !!}</p>
						<h3>Competition Statistics</h3>
						
							
								<table class="table table-bordered table-striped">
									<tr>
										<th>Label</th>
										<th>Attribute</th>
										<th>Action</th>
									</tr>
									@foreach($product->attibute as $attr)
									<tr id="id_{{ $attr->id }}">
										<td>{{ $attr->label }}</td>
										<td>{{ $attr->attribute }}</td>
										<td><a id="{{ $attr->id }}" class="edit_attribute btn btn-primary" href="#" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>
											<a href="#" data-id="{{ $attr->id }}" class="btn btn-sm btn-danger delete"><i class="fa fa-trash"></i></a>
										</td>
									</tr>
									@endforeach

								</table>
								
								
								<h3>draw participant</h3>
							<table class="table table-bordered table-striped" >
								<thead class="table table-bordered">
									<tr>
										<th>Participant Name</th>
										<th>Price</th>
										<th>Ticket#</td>
										<th>Purchased Date</th>
										<th> Purchased Type </th>
										<th>Result</th>   
										<th>Action</th>
																		
									</tr>
								</thead>
								<tbody>
									@foreach( DB::table('tickets')->where('product_id',$product->id)->where('user_id','!=',0)->where('status',1)->get() as $row) 
									<tr>		
										<?php 

										$winner = DB::table('winner')->where('product_id',$product->id)->first();
										$user = DB::table('users')->where('id',$row->user_id)->first();  ?>	      	
										<td >{{ $user->name }}</td>        
										<td>{{ $row->paid_price }}</td>	
										<td>{{ $row->code }}</td>
										<td>{{date('d-m-Y', strtotime($row->date_purchased))}}</td>
										<?php $purchased_type = DB::table('payments')->where('user_id',$row->user_id)->whereJsonContains('ticket_id', ''.$row->id.'')->first(); 
										?>
										@if(!empty($purchased_type))
										@if($purchased_type->card_number==0)
										<td>Credits</td>
										@else
										<td>Credit Card</td>
										@endif
										@endif
										<?php if($winner){?>
									    <?php if($winner->code==$row->code){?>
										<td>Winner</td>
									<?php } else { ?>
										<td>loser</td>
									<?php } ?>
									<?php } else{ ?>
										<td>Still pending</td>
									<?php } ?>

									<?php if($winner){
									if($winner->code==$row->code){ ?>
										<td><a href="#" data-id="<?php echo $winner->id; ?>" class="btn btn-sm btn-danger delete_winner"><i class="fa fa-trash"></i>Remove Winner</a> <a data-toggle="modal" data-target="#ferari" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i>View</a></td>
										<div class="modal" id="ferari">
										<div class="modal-dialog">
											<div class="modal-content">
												<!-- Modal-start -->
												<div class="modal-headertop">
													<h4 class="modal-title">{{$winner->title}}</h4>
													<button type="button" class="close" data-dismiss="modal">&times;</button>
												</div>
												<!-- Modal images and description -->
												<img src="<?php echo url("winnerimages/$winner->image");?>">
												<div class="modal-body">
													<p>{{$winner->description}} </p>
												</div>
												<!-- close button -->
												<div class="modal-footerbottom">
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
												</div>
												
											</div>
										</div>
										<!--  model end/ -->
									</div>
									<?php } else { ?>
										<td></td>
									<?php }?>
									<?php } else {
										$currentDateTime = date('Y-m-d H:i:s');
										if( $currentDateTime > $mc->end_date)  { ?>
										<td><a href="#myModal{{ $row->id }}" role="button" class="btn btn-primary" data-toggle="modal">Upload</a></td>
										<?php }  else { ?>
										<td></td>
									<?php } } ?>
										<div id="myModal{{ $row->id }}" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										    <div class="modal-dialog">
										        <!-- Modal content-->
										        <div class="modal-content" style="margin-left: 7px;">
										            <div class="modal-header" style="    flex-direction: row-reverse;">
										             
										                <button type="button" class="close" data-dismiss="modal">&times;</button>
										                <h4 class="modal-title" id="heading-color">Are You Ready Announced To Winner</h4>
										            </div>
										            <div class="modal-body" id="imgmodel">
										              <div class="trophy-thumb">
										              <img style="width: 230px; height: 179px;" src="{{ url('frontend/images/winner.png')}}">
										            </div>
										              </div>
										                <div class="modal-footer">
										                   <a href="#myModal1{{ $row->id }}" role="button" class="btn btn-primary" data-toggle="modal" id="btn-color">Continue</a>
										                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										                </div>
										            

										        </div>
										    </div>
										</div>

										<div id="myModal1{{ $row->id }}" class="modal modal-child" data-backdrop-limit="1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-modal-parent="#myModal">
										    <div class="modal-dialog">
										        <!-- Modal content-->
										        <div class="modal-content">
										            <div class="modal-header" style="flex-direction: row-reverse;">
										                <button type="button" class="close" data-dismiss="modal">&times;</button>
										                <h4 class="modal-title" id="heading-color">Winner</h4>
										            </div>
										             <div class="modal-body">
												        <form  method="POST" action="{{ url('packages/update_winner/'.Request::segment(3)) }}" enctype="multipart/form-data">
												        	@csrf
												        	<!-- <input type="hidden" name="id" id="winnerid"> -->
												        	<input type="hidden" name="user_id" value="{{ $row->user_id }}">
												        	<input type="hidden" name="product_id" value="{{ $row->product_id }}">
												        	<input type="hidden" name="paid_price" value="{{ $row->paid_price }}">
												        	<input type="hidden" name="code" value="{{ $row->code }}">
												        <div class="col-sm-12 col-md-12 col-lg-12">

																		<div class="form-group">
																			<label>Title</label>
																			<input id="title" value="" type="text" placeholder="Enter title" class="form-control" name="title" required="" autofocus="">
																		</div>
																	</div>
														<div class="col-sm-12 col-md-12 col-lg-12">
																		<div class="form-group">
																			<label>Description</label>
																			<input id="title" value="" type="text" placeholder="Enter Description" class="form-control" name="description" required="" autofocus="">
																		</div>
																	</div>
																	<input type="file" name="image">
												        <!-- Modal footer -->
												        <div class="modal-footer">
												        	<button class="btn btn-primary" type="submit">Save</button>
												        </form>
												          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
												        </div>

										        </div>
										    </div>
										</div> 
										        
									</tr>
									@endforeach
								</tbody>
							</table>
	</div>
									
					</div>
				</div>
  </div>
  @endforeach

  
</div>
		</div>
	</div>
</div>

@endsection
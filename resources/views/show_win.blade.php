@extends('layouts.app')
@section('content')
<?php $curr=Config::get("constants.currency"); ?>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>
 <script type="text/javascript" src="//cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
<style>
	@media screen and (max-width: 776px){
	div#example_filter{
		margin-top: 8px;
	}
	}
</style>
<div class="container">
	<section class="user_profile">
		<div class="left-side-bar">
			<h1> My Winnings Detial</h1>
			<div class="profile_info" style="justify-content: center;">
				<div class="row" style="margin-right: 100px;">
					<div class="col-md-12" style="width: 795px; margin-left: 26px;">
						<div class="tile">
							<div class="table-responsive">
								<table id="example" class="table">
									<thead class="back_blue">
										<tr>
											<th>Competitions Name</th>
											<th>Product Name</th>
											<th>Ticket No</th>
											<th>Product Image</th>
											<th>Image</th>
											<th>Description</th>					
											<th>Price</th>
											<th>Announce Date</th>
										</tr>
									</thead>
									<tbody>

										@foreach($win as $row)
										<tr>
											<?php $product = DB::table('packages')->where('id',$row->product_id)->first();
											$comp = DB::table('multi_competition')->where('id',$row->mc_id)->first();
											 ?>
											<td>{{$comp->title}}</td>
											<td> {{$product->name}} </td>
											<td>{{$row->code}}</td>
											<td><?php
												$main_img='';
											$img=DB::table('package_images')->where('main_img',1)->where('package_id',$product->id)->first();
											  if($img){
											  $file=public_path("products/$img->package_id/$img->name");
											  if(is_file($file)){
											    $main_img=url("products/$img->package_id/$img->name");
											    }
                                                 }
												 ?>
												 <img style="height: 70px; width: 100px;" src="{{$main_img}}"></td>
											<td><img style="height: 70px; width: 100px;" src="{{url('winnerimages/'.$row->image)}}"></td>
											<td> {{$row->description}} </td>	
											<td> <?php echo $curr;  ?>{{$row->paid_price}} </td>
											<td>{{date('d-m-Y', strtotime($row->date_created))}}</td>

										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="right-side">
						<div class="wrapper">
						    <!-- Sidebar -->
						    @include('layouts.sidebar')

						</div>
					</div>
	</section> 
	<script>
	    $(document).ready(function() {
    $('#example').DataTable( {
        "order": [[ 7, "desc" ]]
    } );
} );
	</script>
	@endsection
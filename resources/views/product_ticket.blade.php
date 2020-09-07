@extends('layouts.app')
@section('content')
<?php $curr=Config::get("constants.currency"); ?>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>
 <script type="text/javascript" src="//cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
<style>
	@media screen and (max-width: 776px){
		#example_filter{
		margin-top: 8px !important;
	}
	}
</style>
<div class="container" style="min-height:550px;">
	<section class="user_profile">
		<div class="left-side-bar">
			<h1> My Tickets </h1>
			<div class="profile_info">
				<div class="row">
					<div class="col-md-12" >
						<div class="tile">

							<div class="table-responsive">
								<table id = "example" class="table">
									<thead class="back_blue">
										<tr>
											<th>Title</th>
											<th>Image</th>
											<th>Ticket#</th>
											<th>Ticket Price</th>
											<th>Paid</th>
											<th>Date</th>
											<!--<th>Purchase Type</th>-->
										</tr>
									</thead>
									<tbody>
										@if($user=="")
											 <td colspan="6" class="text-center" ><div class="alert alert-danger">No record found</div></td>
											@else
									@foreach($tickets as $row)
										<tr>
											<td> <a href="{{url('competition/'.$row->package->urlCategory->slug.'/'.$row->package->slug)}}"> {{$row->package->name}} </a></td>
											<td>
												<?php
												 $getPack = DB::table('packages')->where('uniqid',$row->product_id)->first();

												$main_img='';
											$img=DB::table('package_images')->where('main_img',1)->where('package_id',$row->package->id)->first();
											  if($img){
											  $file=public_path("products/$img->package_id/$img->name");
											  if(is_file($file)){
											    $main_img=url("products/$img->package_id/$img->name");
											    }
                                                 }
												 ?>
												 <img style="height: 70px; width: 100px;" src="{{$main_img}}">
											</td>
											<td> {{$row->code}} </td>
											<td><?php echo $curr;  ?>{{$row->paid_price}} </td>
											<td><?php echo $curr;  ?>{{$row->paid_price - $row->discount_of_amount}} </td>
											<td>{{date('d-m-Y', strtotime($row->date_purchased))}}</td>
											<!-- <td> {{$row->date_purchased}} </td> -->
											<!--<td> {{ $row->purchase_type==0 ? 'Purchased':'Bonud' }} </td>-->
										</tr>
										@endforeach
											@endif
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
        "order": [[ 4, "desc" ]]
    } );
} );
	</script>
	@endsection

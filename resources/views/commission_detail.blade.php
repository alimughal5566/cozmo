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
			<h1> Commission Details </h1>
			<div class="profile_info" style="justify-content: center;overflow-x: scroll;"  > 
				<div class="row" style="">
					<div class="col-md-12">
						<div class="tile">
							<div class="table-responsive">
								<table id = "example" class="table">
									<thead class="back_blue">
										<tr>
											<th>Name</th>
											<th>Email</th>
											<th>Price</th>											
											<th>Ref.Commission</th>
											<th>Buz.Commission</th>	
											<th>Buy Date</th>									
										</tr>
									</thead>
									<tbody>
										<pre>
										@foreach($commission_detail as $commission)					
											<tr>
												<td>{{$commission->name}}</td>
												<td> {{$commission->email}} </td>					
												<td><?php echo $curr;  ?>{{$commission->price}} </td>

												<?php $total_commission = ($commission->commission / 100) * $commission->price; 
												if($commission->business_ref_commission > 0){
													$total_bus_commission = ($commission->business_ref_commission / 100) * $commission->price;	
												}
												?>
												<td> <?php echo $curr;  ?>{{$total_commission}} </td>
												@if(isset($total_bus_commission))
												<td> <?php echo $curr;  ?>{{$total_bus_commission}} </td>
												@else
												<td>Not Applicable</td>
												@endif
												<td> {{$commission->created_at}} </td>
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
        "order": [[ 5, "desc" ]]
    } );
} );
	</script>



@endsection
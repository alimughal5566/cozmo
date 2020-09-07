@extends('layouts.app')
@section('content')
<?php $curr=Config::get("constants.currency"); ?>

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>
<style>
	@media screen and (max-width: 776px){
	div#example_1_filter{
		margin-top: 8px;
	}
}
</style>
<div class="container" style="min-height:550px;">
	<section class="user_profile">
		<div class="left-side-bar">
			<h1> My Referrals </h1>
			<div class="profile_info" style="justify-content: center;">
				<div class="row" style="    width: 100%;">
					<div class="col-md-12">
						<div class="tile">
							<div class="table-responsive">
								<table id="example_1" class="table">
									<thead class="back_blue">
										<tr>
											<th>Name</th>
											<th>Email</th>
											<th>Postal Code</th>
											<th>Ref.Commission</th>	
											<th>buz.Commission</th>	
											<th>Ref.Commission %</th>
											<th>Buz.Commission %</th>
											<th>Invitation Date</th>
											<th>Joining date</th>
										</tr>
									</thead>
									<tbody>
									    @if($total_refer->count())
									    @foreach($total_refer as $row)

									    <?php $invitation = DB::Table('refer_friend')->where('friend_email',$row->email)->first(); 
									    	$total_amount = DB::table('payments')->where('user_id',$row->id)->sum('price');
									    	if($row->business_ref_commission > 0){
													$total_bus_commission = ($row->business_ref_commission / 100) * $total_amount;	
												}

									    	$total_commission = ($row->commission / 100) * $total_amount;
									    ?>
										<tr>
											<td> {{$row->name}} </td>
											<td> {{$row->email}} </td>
											<td> {{$row->postal_code}}</td>
											@if(isset($total_commission))
											<td><?php echo $curr;  ?>{{$total_commission}}</td>
											@else
											<td> 0</td>	
											@endif
											@if(isset($total_bus_commission))
												<td> <?php echo $curr;  ?>{{$total_bus_commission}} </td>
												@else
												<td>Not Applicable</td>
												@endif

											<td>{{$row->commission}}%</td>	

											@if($row->business_ref_commission==0)
											<td>Not Applicable</td>

											@else
											<td>{{$row->business_ref_commission}}%</td>

											@endif					
											@if(isset($invitation))
											<td> {{$invitation->created_at}}</td>
											@else
											<td> Personal invitation </td>					
											@endif

											
											<td> {{$row->created_at}}</td>

										</tr>
										@endforeach
										@else
										<td colspan="9" class="text-center" ><div class="alert alert-danger">No record found</div></td>					
											
										
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
	       <script type="text/javascript" src="//cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
			<script>
	    $(document).ready(function() {
   $('#example_1').DataTable( {
        "order": [[ 8, "desc" ]]
    } );
} );
	</script>
	@endsection
	
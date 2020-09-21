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
				Purchase Ticket
			</h3>
			<div class="table-responsive">
				<table class="table" id = "example">
					<thead class="back_blue">
						<tr>
							<th>#</th>
							<th> Competition Name</th>
							<th>Buyer Email</th>
							<th>Ticket#</th>
							<th>Purchased Date</th>
							<th>Price</th>
							<th>Paid Price</th>
						
						</tr>
					</thead>
					<tbody>
						@foreach($ticket as $key=> $row)
						 <?php $package = DB::table('packages')->where('id',$row->product_id)->first();
						     $user = DB::table('users')->where('id',$row->user_id)->first();
						     ?>
						<tr>
							<td>{{ $key+1 }}</td>
							<td><a href="{{url('/packages/edit/')}}/{{$package->id}}">{{$package->name}}</a></td>
							<!--<td>{{$user->name}}</td>-->
							<td><a href="{{url('/users/edit/')}}/{{$user->id}}">{{$user->email}}</a></td>
							<td>{{$row->code}}</td>
							<td>{{$row->date_purchased}}</td>
							<td><?php echo $curr;  ?>{{$row->paid_price}}</td>
							<td><?php echo $curr;  ?>{{$row->paid_price - $row->discount_of_amount}}</td>
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
        "order": [[ 4, "desc" ]]
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

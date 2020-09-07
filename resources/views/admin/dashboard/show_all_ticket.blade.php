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
		<li class="breadcrumb-item">Purchased Tickets</li>
	</ul>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="tile">
			@if (session('success'))
			    <div class="alert alert-success" style="width: 40%">
			        {{ session('success') }}
			    </div>
			@endif
			<h3 class="tile-title"> Purchased Tickets
			<!-- <a href="{{url('user/detail')}}" class="btn btn-sm btn-success pull-right cust_color"><i class="fa fa-eye"></i>User Detail</a> -->
			</h3>
			<div class="table-responsive">
				<table id = "example" class="table">
					<thead class="back_blue">
						<tr>
							<th>Competition Name</th>
							<th>Buyer Name</th>
							<th>Buyer Email</th>
							<th>Ticket#</th>							
                            <th>Purchased Date</th>
							<th>Price</th>
                            <!--<th width="130" class="text-center">Actions</th>-->
						</tr>
					</thead>
					<tbody>

						@foreach($total_ticket as $row)
						    <?php $package = DB::table('packages')->where('id',$row->product_id)->first(); 
						     $user = DB::table('users')->where('id',$row->user_id)->first();
						     ?>
						<tr>
							<td><a  title="" href="#">{{$package->name}}</a></td>
							<td>{{$user->name}}</td>
							<td>{{$user->email}}</td>
							<td>{{$row->code}}</td>
							<td>{{$row->date_purchased}}</td>
							<td><?php echo $curr;  ?>{{$row->paid_price}}</td>
							<!--<td class="text-center">-->
							<!--	<div class="actions-btns " style="display: flex;">-->
							<!--		<a href="#" class="back_color btn btn-sm btn-info"  data-title="Edit"><i class="fa fa-pencil"></i></a>-->
							<!--		</div>-->
							<!--</td>-->
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>	
							
							
							
							
							
							
							
							
<script>							
							
		$(document).ready(function() {
    $('#example').DataTable( {
        "order": [[ 4, "desc" ]]
    } );
} );

</script>
							
							
							
							
							
							
							
@endsection							
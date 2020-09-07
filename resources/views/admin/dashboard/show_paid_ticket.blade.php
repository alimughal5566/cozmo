@extends( 'admin.layouts.app' )
@section( 'content' )

<?php $curr=Config::get("constants.currency"); ?>
<style>
    .nav-tabs a {
        padding: 6px 15px;
border: none;
border-radius: 4px;
color: #fff;
background: #ee8322;
    }
    .nav-tabs {
            margin-top: 7px;
            margin-left: 15px;
            border-bottom: none;
    }
    .nav-tabs .active {
        background: #a85912;
    }
    .get_result {
        margin-bottom: 21px;
        /*display: flex;*/
    margin-right: 16px;
    }
    .get_result select {
        padding: 6px 11px;
    border-radius: 4px;
    border: 1px solid #b6c0ca;
    }
    .get_result button {
        padding: 6px 15px;
    border: none;
    border-radius: 4px;
    color: #fff;
    background: #ee8322;
    cursor: pointer;
    }
    .select_get {
        margin-left: 10px;
    white-space: nowrap;
    display: flex;
    justify-content: flex-end;
    margin-top: 18px;
    }
</style>

  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->

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
			<h3 class="tile-title"> Purchased Tickets</h3>
			 <!--<label for="mc">Choose a Multi Compitition</label>-->

    <div class="get_result">
        <ul class="nav nav-tabs">
                <li><a data-toggle="tab" href="#all" class="active" >All (Count :{{sizeof($total_all_tickets)}})</a></li>
                <li><a data-toggle="tab" href="#home" style="margin-left: 3px;">Paid from Bouns (Count :{{sizeof($total_bouns_tickets)}}, Amount : £{{$total_bouns_tickets_amount}})</a></li>
                <li><a data-toggle="tab" href="#menu1" style="margin-left: 3px;">Paid from CC (Count :{{sizeof($total_purchased_ticket)}}, Amount : £{{$total_purchased_ticket_amount}})</a></li>
              </ul>

        <div class="select_get">
            <select id="mc_id">
                <option value="">All Competitions</option>
                @foreach(\App\MC::where('soft_delete', 0)->get() as $mc)
                    <option value="{{$mc->id}}" @if(Request::segment(2) == $mc->id) selected @endif>{{$mc->title}}</option>
                @endforeach
            </select>
            <button type="button" onClick="getResults()">Get Results</button>
        </div>
     </div>

			<div class="container">
              <div class="tab-content">
                <div id="all" class="tab-pane fade in active show">
                  <div class="table-responsive">
				<table id = "example1" class="table">
					<thead class="back_blue">
						<tr>
							<th>Competition Name</th>
							<!--<th>Buyer Name</th>-->
							<th>Buyer Email</th>
							<th>Ticket#</th>
                            <th>Purchased Date</th>
							<th>Price</th>
							<th>Paid Price</th>
						</tr>
					</thead>
					<tbody>

						@foreach($total_all_tickets as $row)
						    <?php $package = DB::table('packages')->where('id',$row->product_id)->first();
						     $user = DB::table('users')->where('id',$row->user_id)->first();
						     ?>
						<tr>
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
                <div id="home" class="tab-pane fade">
                  <div class="table-responsive">
				<table id = "example2" class="table">
					<thead class="back_blue">
						<tr>
							<th>Competition Name</th>
							<!--<th>Buyer Name</th>-->
							<th>Buyer Email</th>
							<th>Ticket#</th>
                            <th>Purchased Date</th>
							<th>Price</th>
							<th>Paid Price</th>
						</tr>
					</thead>
					<tbody>

						@foreach($total_bouns_tickets as $row)
						    <?php $package = DB::table('packages')->where('id',$row->product_id)->first();
						     $user = DB::table('users')->where('id',$row->user_id)->first();
						     ?>
						<tr>
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
                <div id="menu1" class="tab-pane fade">
                  <div class="table-responsive">
				<table id = "example3" class="table">
					<thead class="back_blue">
						<tr>
							<th>Competition Name</th>
							<!--<th>Buyer Name</th>-->
							<th>Buyer Email</th>
							<th>Ticket#</th>
                            <th>Purchased Date</th>
							<th>Price</th>
							<th>Paid Price</th>
						</tr>
					</thead>
					<tbody>

						@foreach($total_purchased_ticket as $row)
						    <?php $package = DB::table('packages')->where('id',$row->product_id)->first();
						     $user = DB::table('users')->where('id',$row->user_id)->first();
						     ?>
						<tr>
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
		</div>
	</div>
</div>


<script>

	$(document).ready(function() {
        $('#example').DataTable( {
        } );
    });
    $(document).ready(function() {
        $('#example2').DataTable( {
        } );
    });
    $(document).ready(function() {
        $('#example3').DataTable( {
        } );
    });

    function getResults(){
        window.location.replace("{{ url('/') }}" + /show_paid_ticket/ + $("#mc_id option:selected").val());
    }

</script>

@endsection

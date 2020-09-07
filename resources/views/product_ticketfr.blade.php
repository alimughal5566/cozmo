@extends('layouts.app')
@section('content')
<?php $curr=Config::get("constants.currency"); ?>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>
 <script type="text/javascript" src="//cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
 <style>
     div.dataTables_wrapper div.dataTables_filter label{
             display: flex;
    flex-direction: row;
    justify-content: flex-end;
     }
     @media screen and (max-width: 776px){
		div.dataTables_wrapper div.dataTables_filter label {
    display: flex;
    flex-direction: row;
    justify-content: center;
    margin-top: 10px;

	}
	}

 </style>
<div class="container" style="min-height:550px;">
	<section class="user_profile">
		<div class="left-side-bar">
			<h1> My Free Tickets </h1>
			<div class="profile_info">
				<div class="row">
					<div class="col-md-12" >
						<div class="tile">
							
							<div class="table-responsive">
								<table id="example" class="table">
									<thead class="back_blue">
										<tr>
											<th>Free Tkt#</th>
											<th>Title</th>
											<th>Image</th>
											<th>Status</th>
											<th>Participate Date</th>
											<!--<th>Purchase Type</th>-->
										</tr>
									</thead>
									<tbody>	
										@if($user=="")
											 <td colspan="6" class="text-center" ><div class="alert alert-danger">No record found</div></td>					
											@else
									     @foreach($tickets as $row)									
										<tr>
										<?php $getPack = DB::table('packages')->where('uniqid',$row->package_id)->first();    
											$urlcategory = DB::table('urls_categories')->where('id',$getPack->url_category)->first();
										?>
										  <td>{{$row->id}}</td>
											<td><a href="{{url('competition/'.$urlcategory->slug.'/'.$getPack->slug)}}"> {{$getPack->name}}</a> </td>
											<td>
												<?php
												$main_img='';
											$img=DB::table('package_images')->where('main_img',1)->where('package_id',$getPack->id)->first();
											  if($img){
											  $file=public_path("products/$img->package_id/$img->name");
											  if(is_file($file)){
											    $main_img=url("products/$img->package_id/$img->name");
											    }
                                                 }
												 ?>
												 <img style="height: 70px; width: 100px;" src="{{$main_img}}">
											</td>
											
										     <td> 
										     <?php if($row->is_winner == "0"){ ?>  Loser <?php } elseif($row->is_winner == "1"){ ?> Winner @if ($row->ticket == "0")
												{{""}}
												@else
											 <p style="font-size: 10px;">Ticket Number {{$row->ticket}}</p>
											 @endif <?php } elseif($row->is_winner == "2"){echo "Delay";} else {echo "Pending";}?>

											</td>
											<td>{{date('d-m-Y', strtotime($row->created_at))}}</td>
											
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
        "order": [[ 0, "desc" ]]
    } );
} );
	</script>
	@endsection
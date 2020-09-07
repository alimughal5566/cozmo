
    <style>
        tfoot > tr > th:nth-child(1) select {
            opacity: 0;
        }
        tfoot > tr > th:nth-child(5) select{
            opacity: 0;
        }
        /*tfoot > tr > th:nth-child(7) select{
            opacity: 0;
        }*/
        .btn .icon, .btn .fa {
        	margin-right: 0 !important;
        }
    </style> 


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
				{{$title}}
				<!--<a href="#" class="btn btn-success pull-right cust_color">Select Winner</a>-->
				<!--<a href="{{ route('mc.create')}}" class="btn btn-sm btn-success pull-right cust_color"><i class="fa fa-plus"></i> @lang('packages.add_new')</a>-->
			</h3>
			<div class="table-responsive">
				<table id = "example" class="table table-striped table-bordered">
					<thead class="back_blue">
						<tr>
							<th>Select</th>
							<th>User</th>
							<th>Product</th>
							<th>Multi Competitions Name</th>
							<th>Product Image</th>
							<th>Date</th>
							<th>Result</th>
							<th width="130" class="text-center">Action</th>
							
							
							<!--<th>Product Image</th>-->
						</tr>
					</thead>
					<tbody>
						@foreach($fc as $key=> $row)
						<?php 
						    $com = \App\Package::where('uniqid', $row->package_id)->first();
						    try{
						        $url_slug = $com->urlCategory->slug;
						        $c_slug = $com->slug;
						    }catch(Exception $e){
                                continue;						   
                                }
						?>
						
						<tr {!!$row->is_winner==1?('style="background:#72c299 !important;"'):('')!!}>
						
							<td>{{$row->id}}<?php
							$already=DB::table('freecomps')->where(['mc_id'=>$row->mc_id,'is_winner'=>1])->first();
							if(!$already){
							?>
							    <input type="checkbox" class="winner-select" id="num-{{$key+1}}" uid="{{$row->user_id}}" pid="{{$row->package_id}}" {!!$row->is_winner?('checked'):('')!!}></td>
							    <?php } ?>
							<?php if ($row->user->name !=""){ ?>
							<td>{{$row->user->name}}</td>
						<?php } else {?>
							<td>{{$row->user->email}}</td>
						<?php } ?>
							<td><a href="{{url('competition/'.$url_slug.'/' . $c_slug)}}">{{$row->package['name']}}</a></td>
						      <?php	$getmc = $row->mc_id;
						      $mc = DB:: table('multi_competition')->where('id',$getmc)->first();
						      ?>
							<td>{{$mc->title}}</td>
							
							
							    <?php $img_info = json_decode($row->package['main_img']); 
							    //print_r($img_info); 
							     ?>
							      <td> <a href="{{url('competition/'.$url_slug.'/' . $c_slug)}}"> <?php if (isset($img_info[0])) echo '<img style = "width:70px; height:50px;"  src="'.URL::to('products/'.$img_info[0]->package_id.'/'.$img_info[0]->name).'">';
				
							    ?>
						</a>	</td>
							<td>{{$row->created_at}}</td>
							<td><?php if($row->is_winner == "0"){ ?>  Loser <?php } elseif($row->is_winner == "1"){ ?> Winner @if  ($row->ticket == "0")
												{{""}}
												@else
											 Ticket Number {{$row->ticket}}
											 @endif <?php } elseif ($row->is_winner == "2") {
											 	echo"Delay";
											 }  else {echo "Pending";}?>
							</td>
							<td class="text-center">
							    <a href="{{url('freeComp_users/edit/' . $row->user->id)}}" class="btn btn-sm btn-info" style="float: left;"><i class="fa fa-edit"></i></a>
							    <a href="javascript:void(0)" data-id="{{$row->id}}" class="btn btn-sm btn-danger removePartner"><i class="fa fa-trash"></i></a>
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
					        	<form method="POST" action="{{ url('/iframes') }}" enctype="multipart/form-data">
					        		@csrf
					        		<input type="hidden" name="prod_id" value="{{$row->id}} ">
					          <div class="col-sm-12 col-md-12 col-lg-12">
									<div class="form-group">
										<label>Video Link</label>
										<input autocomplete="off" type="text" value="{{$row->iframe}}"  name="iframe" class="form-control datepicker" placeholder="Enter Video link" required="">		
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
					<tfoot>
            <tr>
                <th>Select</th>
							<th>User</th>
							<th>Product</th>
							<th>Multi Competitions Name</th>
							<th>Product Image</th>
							<th>Date</th>
							<th>Result</th>
            </tr>
        </tfoot>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- <script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable( {
        "order": [[ 1, "desc" ]]
    } );
} );
</script> -->
<script>
    $(document).ready(function() {
    $('#example').DataTable( {
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value="">Select</option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                     
                } );
               
            } );
        },
        "order": [[ 0, "desc" ]]
    } );
} );
</script>

<script src="{{url('backend/sweetalerts/sweetalert2.all.js')}}"></script>
<script type="text/javascript">
$(document).ready(function(){
    
    	$( "body" ).on( "click", ".removePartner", function () {
		var task_id = $( this ).attr( "data-id" );
		var form_data = {
			id: task_id
		};
		swal( {
				title: "Delete",
				text: "@lang('users.delete_user_msg')",
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
					url: '<?php echo url("freecompetition/delete"); ?>',
					data: form_data,
					success: function ( msg ) {
                        swal( "Delete Successfully", '', 'success' )
                        setTimeout( function () {
                            location.reload();
                        }, 2000 );
					}
				} );
			} 
		} );

	} );
    
    $(document).on('click','.winner-select',function(){
        
        if ($(this).prop('checked')) {
           var uid = $(this).attr('uid');
           var pid = $(this).attr('pid');
           
           var post_data = {'_token': '{{@csrf_token()}}', 'uid': uid, 'pid':pid};
    
    		swal({
    			text: "Do you want to select this user as winner?",
    			type: 'question',
    			showCancelButton: true,
    			confirmButtonColor: '#F79426',
    			cancelButtonColor: '#d33',
    			confirmButtonText: 'Yes',
    			showLoaderOnConfirm: true
    		}).then( ( result ) => {
    			if ( result.value == true ) {
    				$.ajax( {
    					type: 'POST',
                        data: post_data,
    					url: '{{url('admin/SelectFreeCompWinner')}}',
    					data: post_data,
    					success: function ( msg ) {
    						if(msg.status == 'success')
                        		swal({
                        			text: "The selected user is successfully declared winner",
                        			type: 'info',
                        			showCancelButton: false,
                        			confirmButtonColor: '#F79426',
                        			cancelButtonColor: '#d33',
                        			confirmButtonText: 'Yes',
                        			showLoaderOnConfirm: true
                        		}).then( ( result ) => {
                        		    location.reload();
                        		});
                        		
    					    else
    					        swal('Error', 'The winner could not be selected due to some error', 'error');
    
    					}
    				} );
    			}    		    
    		});            
        }    

       
       
       
       
       
    });
    
});

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
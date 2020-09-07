@extends( 'admin.layouts.app' )
@section( 'content' )
<style>
	.dule-btns{
		display: flex;
	}
	.set_space {
    margin-bottom : 20px;
}
.impor {
    color: #ee8322;
    border: 1px solid;
    padding: 4px 7px;
}
.priz { 
     border: 1px solid;
    padding: 4px 7px;
}
</style>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>
 <script type="text/javascript" src="//cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>

<div class="app-title">

	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
		</li>
		<li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a>
		</li>
		<li class="breadcrumb-item">Purchase Peers</li>
	</ul>
</div>


<div class="row">
	<div class="col-md-12">
		<div class="tile">
			@if (session('alert'))
			    <div class="alert alert-danger" style="width: 40%">
			        {{ session('alert') }}
			    </div>
			@endif
			@if (session('success'))
			    <div class="alert alert-success" style="width: 40%">
			        {{ session('success') }}
			    </div>
			@endif
			<h3 class="tile-title">Purchase Peers
			<!-- <a href="{{url('user/detail')}}" class="btn btn-sm btn-success pull-right cust_color"><i class="fa fa-eye"></i>User Detail</a> -->
			</h3>
			<div style="display: flex;">
			 <!-- <div class="col-md-3 set_space">
				 <label>Email Type</label>
				 <select id="source" class="form-control">
				     <option value="" selected>Select User Email Type</option>
				     <option value="email">Email</option>
				     <option value="guest">Guest</option>
				 </select>
				</div> -->
				<!-- <div class="col-md-3 set_space">
				 <label>Search By mail</label>
				 <input type="text" id="email"  class="form-control" value="" />
				</div> -->
				<div class="col-md-3 set_space">
			     <label>Total Guest</label>
			     <span id="imported" class="impor">{{$guest_email}}</span>
			     <label>Total email</label>
			     <span id="prizemaker" class="priz">{{$user_email}}</span>
			 </div>

			 	<div class="col-md-3 set_space">
				 <button class="btn btn-sm btn-success cust_color" id="delete_select">Delete Selected</button>
				</div>
			     
				<div class="col-md-3 set_space">
				 <button class="btn btn-sm btn-success cust_color" id="delete_all_guest">Delete All Guest</button>
				</div>
				<div class="col-md-3 set_space">
					<form method="POST" action="{{url('/sendmailpurchase')}}" style="text-align: right;margin-bottom: 10px;">
						 @csrf
						<input type="hidden" class="selected_record" name="email_id_list" value="" />
						<button type="submit" class="btn btn-sm btn-success pull-right cust_color">Send Email</a>
						</button>
					</form>
				</div>
			</div>
			<div class="table-responsive">
				<table class="table" id = "example">
					<thead class="back_blue">
						<tr>
							<th><input type="checkbox" id="select_all"/> Select all</th>
							<th>User @lang('users.email')</th>							
                            <th>Activity</th>
							<th>Action Message</th>
							<th>Competition</th>
							<th>Country</th>							
							<th>Created At</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody id="purchase">
						@php $total_subscribers = count($user_activity); @endphp
						@foreach($user_activity as $row)
						@if($row->sended_subject=="" && $row->sended_desc=="")
						
						@php   
							$checkk = explode(":",$row->user_email);

						@endphp	
						@if($checkk[0] != "Offline User" )
						@php $my_userss = DB::table('users')->where('email',$row->user_email)->first();
						@endphp
						@endif					
						<tr>
							@if($checkk[0]=="Offline User ")							
								<td></td>
							@else
								<td><input type="Checkbox" class="assign-emails" value="{{$row->id}}" name="check[]" class="check"></td>
							@endif	
							
							@if($checkk[0]=="Offline User")								
								<td>Guest user</td>
							@else
							<td> {{$row->user_email}}</td>
							@endif						
							<td> {{$row->activity}} </td>							
							<td>{{$row->act_message}}</td> 
							
							<td>
							@if($row->com_ids!="")
								@php $competition_id = explode(",",$row->com_ids) @endphp
								@foreach($competition_id as $key =>$value)
								@php 
								$competition = DB::table('packages')->where('id',$value)->first();
								if(isset($competition)){
								if(isset($my_userss))
								{
									$ticket_count = DB::table('tickets')->where('user_id',$my_userss->id)->where('product_id',$value)->where('status',1)->count();
								} 
								
								@endphp
								<span style="padding: 8px 10px;margin: 0; background: #222D32;    margin-top: 5px; color: white;" class="badge badge-warning">{{ $competition->name }} </span> @if(isset($my_userss) ) <span style="padding: 8px 10px;margin: 0; background: green;    margin-top: 5px; color: white;" class="badge badge-warning">{{$ticket_count}}</span> @endif
								@php } @endphp
								@endforeach
								@endif
							</td>
							@if($checkk[0] != "Offline User" && isset($my_userss) )
							<td>{{$my_userss->ip_country}}</td>
							@else
							<td></td>
							@endif
							<td>{{$row->created_at}}</td>
							<td class="text-center">
								<a href="#" data-id="<?php echo $row->id; ?>" class="btn btn-sm btn-danger delete"  data-title="Delete"><i class="fa fa-trash"></i></a>
							</td>											
						</tr>
						@endif
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
        "order": [[ 6, "desc" ]]
    } );
} );
   
    $(document).ready(function() {
 		$('#source').on('change', function(){
 			var select = $(this).val();
 			// alert(select);
 			if(select=="")
 			{

 			}else{
 				var form_data = {
								email_type: select
									};
 				$.ajax( {
					type: 'POST',
					headers: {
						'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
					},
					url: '<?php echo url("purchase_Peers/email_type"); ?>',
					data: form_data,
					success: function ( msg ) {
						console.log(msg);
						var table = $("#purchase");
                        table.find("tr").remove();
                        console.log(msg.data.ticket_count);
                        for (var i=0; i<msg.data.length; i++) {
                        	if(typeof(msg.data[i].sended_subject) != "undefined" && msg.data[i].sended_subject !== null){
                        		}else{
                            var j=i+1;
                            var tr = $("<tr></tr>");
                            table.append(tr);
                            if(msg.status=="guest user"){
                            	var td = $("<td></td>");
                            tr.append(td);
                            }else{
                            var td = $("<td><input type='Checkbox' value="+ msg.data[i].id +" name='check[]'' class='assign-emails'></td>");
                            tr.append(td);
                        	}
                            if(msg.status=="guest user"){
                            var td = $("<td>" + msg.status + "</td>");
                        	}else{
                        	var td = $("<td>" + msg.data[i].user_email + "</td>");	
                        	}
                            tr.append(td);
                            var td = $("<td>" + msg.data[i].activity + "</td>");
                            tr.append(td);
                            var td = $("<td>" + msg.data[i].act_message + "</td>");
                            tr.append(td);
                             var td = $("<td>" + msg.data[i].sended_subject + "</td>");
                            tr.append(td);
                             var td = $("<td>" + msg.data[i].sended_desc + "</td>");
                             tr.append(td);
                             console.log(msg.data[i].com_ids);
                            if(typeof(msg.data[i].com_name) != "undefined" && msg.data[i].com_name !== null )
                            {
                            	var comp_name = [];
                            	for (var k=0; k<msg.data[i].com_name.length; k++) {
                            		var comp_namee = msg.data[i].com_name[k];
                            		if(typeof(msg.data[i].ticket_cc[comp_namee]) != "undefined" && msg.data[i].ticket_cc[comp_namee] !== null )
                            		{
                            			var countt = msg.data[i].ticket_cc[comp_namee];
                            		}
                            		 comp_name.push("<span style='padding: 8px 10px;margin: 0; background: #222D32;    margin-top: 5px; color: white;' class='badge badge-warning'>" +msg.data[i].com_name[k] +"</span> <span style='padding: 8px 10px;margin: 0; background: green;    margin-top: 5px; color: white;'' class='badge badge-warning'>" + countt +"</span>");

                            	}
                            	var td = $("<td>"+ comp_name + "</td>");
                            	tr.append(td);	
                            		
                            }else{
                            	var td = $("<td></td>");
                            tr.append(td);
                            }
                             var td = $("<td>" + msg.data[i].created_at + "</td>");
                            tr.append(td);
                             var td = $("<td><a href='#'' data-id="+msg.data[i].id +" class='btn btn-sm btn-danger delete'  data-title='Delete'><i class='fa fa-trash'></i></a></td>");
                            tr.append(td);
                        }
                        } 
					}
				} );
 			}
 		});



 		$('#email').on('keyup', function(){
 			var key = $(this).val(); 		
 				var form_data = {
								find: key
									};
 				$.ajax( {
					type: 'POST',
					headers: {
						'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
					},
					url: '<?php echo url("purchase_Peers/find"); ?>',
					data: form_data,
					success: function ( msg ) {
						// console.log(msg);
						var table = $("#purchase");
                        table.find("tr").remove();
                        for (var i=0; i<msg.data.length; i++) {
                           if(typeof(msg.data[i].sended_subject) != "undefined" && msg.data[i].sended_subject !== null){
                           	}else{
                            var j=i+1;
                            var tr = $("<tr></tr>");
                            table.append(tr);
                            if(msg.status=="guest user"){
                            	var td = $("<td></td>");
                            tr.append(td);
                            }else{
                            var td = $("<td><input type='Checkbox' value="+ msg.data[i].id +" name='check[]'' class='assign-emails'></td>");
                            tr.append(td);
                        	}
                            if(msg.status=="guest user"){
                            var td = $("<td>" + msg.status + "</td>");
                        	}else{
                        	var td = $("<td>" + msg.data[i].user_email + "</td>");	
                        	}
                            tr.append(td);
                            var td = $("<td>" + msg.data[i].activity + "</td>");
                            tr.append(td);
                            var td = $("<td>" + msg.data[i].act_message + "</td>");
                            tr.append(td);
                             var td = $("<td>" + msg.data[i].sended_subject + "</td>");
                            tr.append(td);
                             var td = $("<td>" + msg.data[i].sended_desc + "</td>");
                            tr.append(td);
                            if(msg.data[i].com_ids != null)
                            {
                            	var comp_name = [];
                            	for (var k=0; k<msg.data[i].com_name.length; k++) {
                            		var comp_namee = msg.data[i].com_name[k];
                            		if(typeof(msg.data[i].ticket_cc[comp_namee]) != "undefined" && msg.data[i].ticket_cc[comp_namee] !== null )
                            		{
                            			var countt = msg.data[i].ticket_cc[comp_namee];
                            		}
                            		 comp_name.push("<span style='padding: 8px 10px;margin: 0; background: #222D32;    margin-top: 5px; color: white;' class='badge badge-warning'>" +msg.data[i].com_name[k] +"</span> <span style='padding: 8px 10px;margin: 0; background: green;    margin-top: 5px; color: white;'' class='badge badge-warning'>" + countt +"</span>");

                            	}
                            	var td = $("<td>"+ comp_name + "</td>");
                            	tr.append(td);	
                            		
                            }else{
                            	var td = $("<td></td>");
                            tr.append(td);
                            }
                             var td = $("<td>" + msg.data[i].created_at + "</td>");
                            tr.append(td);
                             var td = $("<td><a href='#'' data-id="+msg.data[i].id +" class='btn btn-sm btn-danger delete'  data-title='Delete'><i class='fa fa-trash'></i></a></td>");
                            tr.append(td);
                        }
                        } 
					}
				} );
 			
 		});


 	});
    var email_list = [];
 	$('#select_all').change(function() {
    var checked;

    if ($(this).prop('checked') === true) {
        email_list = [];
        $('.assign-emails').each(function(){
			var email = $(this).attr('value');
			email_list.push(email);
        });
        checked = true;
    }
    else {
        checked    = false;
        email_list = [];
    }

    $('input[type="checkbox"]').prop('checked', checked);	
	$('input[name="email_id_list"]').val(email_list.join(", "));		
});

 	$(document).on("change",".assign-emails",function(){
	var id              = $(this).val();
	var is_checked      = $(this).prop('checked');
	var num_subscribers = <?php echo $total_subscribers; ?>;

	var index      = email_list.indexOf(id);	
	
	if (is_checked) {
		if (index < 0) {
			email_list.push(id);
			if (email_list.length == num_subscribers) {
				$('#select_all').prop('checked', true);	
			}
		}
	}
	else {
		if (index > -1) {
			email_list.splice(index,1);
		}
		$('#select_all').prop('checked', false);
	}
	
	console.log(email_list);
	
	$('input[name="email_id_list"]').val(email_list.join(", "));	
});

 	$( "body" ).on( "click", ".delete", function () {
		var task_id = $( this ).attr( "data-id" );
		var form_data = {
			id: task_id
		};
		swal({
			title: "Do you want to delete this Record",
			text: "@lang('packages.delete_package_msg')",
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
					url: '<?php echo url("purchase_Peers/delete"); ?>',
					data: form_data,
					success: function ( msg ) {
						swal( "Record Delete Successfully", '', 'success' )
						setTimeout( function () {
							location.reload();
						}, 2000 );
					}
				} );
			}
		} );

	} );

	$( "body" ).on( "click", "#delete_all_guest", function () {
		
		swal({
			title: "Do you want to delete All Guest Record",
			text: "@lang('packages.delete_package_msg')",
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
					url: '<?php echo url("purchase_Peers/delete_all_guest"); ?>',
					success: function ( msg ) {
						swal( "Record Delete Successfully", '', 'success' )
						setTimeout( function () {
							location.reload();
						}, 2000 );
					}
				} );
			}
		} );

	} );

	$( "body" ).on( "click", "#delete_select", function () {
		
		var selectedd =$('.selected_record').val();

		var form_data = {
			id: selectedd
		};

		swal({
			title: "Do you want to delete the Selected Record",
			text: "@lang('packages.delete_package_msg')",
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
					url: '<?php echo url("purchase_Peers/delete_selected"); ?>',
					data: form_data,
					success: function ( msg ) {
						swal( "Record Delete Successfully", '', 'success' )
						setTimeout( function () {
							location.reload();
						}, 2000 );
					}
				} );
			}
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
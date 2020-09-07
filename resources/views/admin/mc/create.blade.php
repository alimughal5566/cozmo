@extends( 'admin.layouts.app' )
@section( 'content' )
<style>
.my-btn {

border-top: none !important;
}
.chosen-container {
width: 100% !important;
}

</style>
<style> 
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}
/*.myset p {
	    padding-left: 3px;
    padding-right: 3px;
}*/
.myset p {
	margin-left: 30px;
}
.myset h4 {
	    font-size: 16px;
	    margin-top: 10px;
}
/ Rounded sliders /
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
.aloo{
	    vertical-align: -webkit-baseline-middle;
    margin: 0;
}
.chosen-height{
	height: 40px;
}
</style>
<style>
        tfoot > tr > th:nth-child(3) select {
            opacity: 0;
        }
        tfoot > tr > th:nth-child(4) select{
            opacity: 0;
        }
        tfoot > tr > th:nth-child(7) select{
            opacity: 0;
        }
        tfoot > tr > th:nth-child(8) select{
            opacity: 0;
        }
        tfoot > tr > th:nth-child(9) select{
            opacity: 0;
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
	<li class="breadcrumb-item">New Multi Competition</li>
</ul>
</div>
<div class="row">
<div class="col-md-12">
	<form class="form-horizontal" method="POST" action="{{ route('mc.store') }}" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="tile">
			
			<h3 class="tile-title">New Multi Competition</h3>
			@if(Session::has('success'))
			<div class="alert alert-success">
				{{ Session::get('success') }}
			</div>
			@endif
			@foreach ($errors->all() as $error)
			<div class="alert alert-danger">{{ $error }}</div>
			@endforeach
			<div class="row">
				
				<div class="col-sm-6">
					<div class="form-group">
						<label for="title">Title:</label>
						<input required id="title" value="{{ $mc->title or old('title')}}" type="text" placeholder="Title" class="form-control" name="title">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="title">Sorting:</label>
						<input required id="sorting" value="{{ $mc->sorting or old('sorting')}}" type="number" placeholder="Sorting" class="form-control" name="sorting" >
					</div>
				</div>
			</div>
			
			<div class="row">

				@foreach($competitions as $row)
				@if(isset($mc->id) && $row->mc_id==$mc->id)
				<input type="hidden" name="compp_id[]" value="{{ $row->id}}">
				@endif
				@endforeach
				
				<div class="col-sm-6">
					<div class="form-group">
						<label for="title">Select Competition:</label>
						@if(isset($update))
						<select  name="competition_id[]" class="form-control chosen chosen-height" multiple>
							@foreach($competitions as $row)
							<option @if(isset($mc->id) && $row->mc_id==$mc->id) selected @endif value="{{ $row->id}}">{{ $row->name}}</option>
							@endforeach
						</select>
						@else
						    <select  name="competition_id[]" class="form-control chosen chosen-height" multiple>
							@foreach($competitions as $row)
							<option @if(isset($mc->id) && $row->mc_id==$mc->id) selected @endif value="{{ $row->id}}">{{ $row->name}}</option>
							@endforeach
						</select>
						@endif
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label>Ticket Price</label>
						<input id="price"  value="{{ $mc->price or old('price')}}" type="number" placeholder="@lang('packages.price')" class="form-control" name="price" required="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label>Maximum Tickets</label>
						<input   value="{{ $mc->max_tickets or old('max_tickets')}}" type="number" placeholder="Maximum Tickets" class="form-control" name="max_tickets" required="">
					</div>
					
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label>Start Date</label>
						<input autocomplete="off" type="text" value="{{ $mc->start_date or  old('start_date')}}"  name="start_date" class="form-control datepicker" placeholder="Select Date" required="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label>End Date</label>
						<input autocomplete="off" type="text" value="{{ $mc->end_date or  old('end_date')}}"  name="end_date" class="form-control datepicker" placeholder="Select Date" required="">
					</div>

					
						<div>
							<label class="aloo">Allow free ticket:</label>
	<?php	if($mc == "" ) { ?>
							<label class="switch">
  <input name="status" type="checkbox" >
  <span class="slider"></span>
  </label>
<?php	} else { ?>
<?php	if($mc->freeticket == 1 ) { ?>
								
								<label class="switch">
  <input name="status" type="checkbox" checked>
  <span class="slider"></span>
  </label>
<?php } else { ?>
		<label class="switch">
  <input name="status" type="checkbox" >
  <span class="slider"></span>
  </label>
<?php } }?>


						</div>
				<!-- </div>
					<div class="form-group">
							<input type="file" name="file" id="file">
					</div>
					
			</div> -->
			<?php if($mc != '') { ?>
			<div class="col-sm-6 p-0 col-md-3 col-lg-6">
				<input type="hidden" name="noimage" value="{{$mc->image}}">
				<img  src="{{url('mcimages/',$mc->image)}}" class="form-control rounded float-left " style="width: 260px; height: 193px;">
				<!-- <h6 style="color: #ee8322; margin-top: 200px;">Banner size must be width:1500 height:600</h6> -->
				<input type="file" name="image">
			</div>
			<?php } else {  ?>
			<div class="col-sm-6 p-0 col-md-3 col-lg-6">
				<label>Select Image</label>
				<input type="file" name="image">
			</div>
			<?php }  ?>

			<!-- // video section // -->
	
		
			
			
			<div class="col-sm-6">
				@if(Auth::check() && Auth::user()->user_role == 1)
				<div class="tile-footer my-btn text-left">
					<a class="btn btn-default" href="{{ url('MultiCompetitions')}}">Cancel</a>
					<?php if($mc){ ?>
					<?php if ($mc->end_date > date('Y-m-d')) { ?>
					<button class="btn btn-primary" type="submit">Save</button>
				<?php } else { ?>
				<button class="btn btn-primary" type="submit">Save</button>
					<!--<p style="color: red;">Competition Date Expired</p>-->
				<?php } ?>
			<?php } else { ?>
				<button class="btn btn-primary" type="submit">Save</button>
			<?php } ?>
				</div>
				@endif
			
			</div>
		</div>
	</div>
	<input type="hidden" name="id" value="{{ $mc->id or old('id') }}">
	<input type="hidden" name="file" value="{{ $mc->image or ''}}">
</form>
<?php if ($mc){ ?> 
<?php  $total_ticket = DB::table('tickets')->where('mc_id',$mc->id)->count();
       $sold_money = DB::table('tickets')->where('mc_id',$mc->id)->where('purchase_type',0)->where('status',1)->count();
       $sold_credit = DB::table('tickets')->where('mc_id',$mc->id)->where('purchase_type',1)->count();
       $dummy_sold = DB::table('tickets')->where('mc_id',$mc->id)->where('dummy_sold',1)->count();
       $free_sale = DB::table('tickets')->where('mc_id',$mc->id)->where('purchase_type',2)->count();
 ?>
<div class="container">
<div class="headings">
		<div class="row myset">
			<div class="col-md-3">
			<h4>Total tickets</h4>
				<p>{{$total_ticket}}</p>
				</div>
			<div class="col-md-3">
			<h4>Total sold by money</h4>
				<p>{{$sold_money}}</p>
			</div>
			<div class="col-md-3">
			<h4>Total sold by credit</h4>
				<p>{{$sold_credit}}</p>
			</div>
			<div class="col-md-3">
			<h4>Total dummy sold tickets</h4>
				<p>{{$dummy_sold}}</p>
			</div>
			<div class="col-md-3">
			<h4>Total free sold</h4>
				<p>{{$free_sale}}</p>
			</div>
		</div>
	</div>
	</div>
<?php } ?>
</div>

<div class="tile">


<h3 class="tile-title">Draw Participant</h3>
<div class="col-sm-6 p-0">
<div class="form-group">
	<!--<label for="title">Select Competition:</label>-->

	
</div>
</div>
<table id="example" class="table table-bordered table-responsive table-striped" style="width: 100%;border-spacing: 2px;">
<thead class="table table-bordered">
	<tr>
	<th style="display: none;">Sr#</th>
	<th>Participant Name</th>
	<th>Price</th>
	<th>Ticket#</td>
	<th>Purchased Date</th>
	<th> Purchased Type </th>
	<th>Result</th>
	<th>Action</th>
	<th>Comp img</th>
	<th>name</th>
	
</tr>
</thead>
<tbody>

<?php $counter = 1;?>
@foreach($particpate as $row)
<tr>
	<td style="display: none;"><?php echo $counter;?></td>
	<?php  $counter++;?>
	<?php $user = DB::table('users')->where('id',$row->user_id)->first();	?>
	<?php if($user){?>
	<td >{{ $user->email }}</td>
	<?php } else { ?>
	<td></td>
   <?php } ?>
	<td>{{ $row->paid_price }}</td>
	<td>{{ $row->code }}</td>
	<td>{{date('d-m-Y', strtotime($row->date_purchased))}}</td>
	<td>@if($row->purchase_type == '1')
	    Credit Payment
	    @elseif($row->purchase_type == '2')
	    Free Ticket
	    @else
	    Credit Card Payment
	    @endif
	</td>

	<?php if($winner){?>
	<?php if($winner->code==$row->code){?>
	<td>Winner</td>
	<?php } else { ?>
	<td>loser</td>
	<?php } ?>
	<?php } else{ ?>
	<td>Still pending</td>
	<?php } ?>
	<?php if($winner){
	if($winner->code==$row->code){ ?>
	<td><a href="#" data-id="{{$row->mc_id}}" class="btn btn-sm btn-danger delete_winner"><i class="fa fa-trash"></i>Remove Winner</a> <a data-toggle="modal" data-target="#ferari" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i>View</a></td>
	<div class="modal" id="ferari">
		<div class="modal-dialog">
			<div class="modal-content">
				<!-- Modal-start -->
				<div class="modal-headertop">
					<h4 class="modal-title"></h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal images and description -->
				<img style="width: 100%;" src="<?php echo url("winnerimages/$winner->image");?>">
			<!-- 	<div class="modal-body">
					<p> </p>
				</div> -->
				<!-- close button -->
				<div class="modal-footerbottom">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
				
			</div>
		</div>
		<!--  model end/ -->
	</div>
	<?php } else { ?>
	<td></td>
	<?php }?>
	<?php } else {
		$currentDateTime = date('Y-m-d');
	if( $currentDateTime > $date->end_date)  { ?>
	<td><a href="#myModal{{ $row->id }}" role="button" class="btn btn-primary" data-toggle="modal">Upload</a></td>
	<?php }  else { ?>
	<td></td>
	<?php } } ?>
	
	<div id="myModal{{ $row->id }}" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content" style="margin-left: 7px;">
				<div class="modal-header" style="    flex-direction: row-reverse;">
					
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title" id="heading-color">Are You Ready Announced To Winner</h4>
				</div>
				<div class="modal-body" id="imgmodel">
					<div class="trophy-thumb">
						<img style="width: 230px; height: 179px;" src="{{ url('frontend/images/winner.png')}}">
					</div>
				</div>
				<div class="modal-footer">
					<a href="#myModal1{{ $row->id }}" role="button" class="btn btn-primary" data-toggle="modal" id="btn-color">Continue</a>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
				
			</div>
		</div>
	</div>
	<div id="myModal1{{ $row->id }}" class="modal modal-child" data-backdrop-limit="1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-modal-parent="#myModal">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header" style="flex-direction: row-reverse;">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title" id="heading-color">Winner</h4>
				</div>
				<div class="modal-body">
					<form  method="POST" action="{{ url('packages/update_winner/'.Request::segment(3)) }}" enctype="multipart/form-data">
						@csrf
						<!-- <input type="hidden" name="id" id="winnerid"> -->
						<input type="hidden" name="user_id" value="{{ $row->user_id }}">
						<input type="hidden" name="product_id" value="{{ $row->product_id }}">
						
						<input type="hidden" name="mc_id" value="{{ $row->mc_id }}">
						<input type="hidden" name="paid_price" value="{{ $row->paid_price }}">
						<input type="hidden" name="code" value="{{ $row->code }}">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label>Title</label>
								<input id="title" value="" type="text" placeholder="Enter title" class="form-control" name="title" required="" >
							</div>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12">
							<div class="form-group">
								<label>Description</label>
								<input id="title" value="" type="text" placeholder="Enter Description" class="form-control" name="description">
							</div>
						</div>
						<input type="file" name="image">
						<!-- Modal footer -->
						<div class="modal-footer">
							<button class="btn btn-primary" type="submit">Save</button>
						</form>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		
		<?php
		$id = $row->product_id;
		$camp = DB::table('packages')->where('id',$id)->first();
        $main_img='';
        $img= DB::table('package_images')->where('main_img',1)->where('package_id',$camp->id)->first();
          if($img){
          $file=public_path("products/$img->package_id/$img->name");
          if(is_file($file)){
            $main_img=url("products/$img->package_id/$img->name");
        } } ?>
		<td><img src ="{{$main_img}}" style= "height:50px; width:70px;"></td>
		<td>{{$camp->name}}</td>
	</tr>
	@endforeach
</tbody>
<tfoot>
	<th style="display: none;">Sr#</th>
    <th>Participant Name</th>
	<th>Price</th>
	<th>Ticket#</td>
	<th>Purchased Date</th>
	<th> Purchased Type </th>
	<th>Result</th>
	<th>Action</th>
	<th>Comp img</th>
	<th>name</th>
</tfoot>
</table>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" />
<link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<script src="{{url('backend/sweetalerts/sweetalert2.all.js')}}"></script>
<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
<!--<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>-->
<!--<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>-->

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

<script>
$(document).ready(function() {
//var table = $('#example').DataTable();
	$('#competitions').change(function (){
var comp_id = $('#competitions').find(":selected").val();
//alert(comp_id);
data={
id:comp_id,
};
// if(comp_id == ""){
// }
if(comp_id != '')
{
$.ajax({
headers: {
'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
},
type:'POST',
url: '<?php echo route("mc.spcomp"); ?>',
data: data,
success: function(msg){
//console.log(table.columns(2).data()[0]);
var msg = JSON.parse(msg);
$("#example td:nth-child("+8+")").html(msg[0].image);
$("#example td:nth-child("+9+")").html(msg[0].name);
//alert(msg)
}
})
}
else {
$("#example td:nth-child("+8+")").html('');
$("#example td:nth-child("+9+")").html('');
}

});
});
</script>
<!--<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.0.0/js/dataTables.rowReorder.js"></script>
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/rowreorder/1.0.0/css/rowReorder.dataTables.css">
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.0/css/jquery.dataTables.css">-->
<script type="text/javascript">
	$(document).ready(function() {
		
			
		
		$(document).on('click','.delete_element',function() {
			$(this).parents('.row.elments').remove();
		});
					$(".chosen").chosen();
					$('#images').change(function(){
						$('#images_form').submit();
					});
	$( "body" ).on( "click", ".delete", function () {
		var id = $( this ).data( "id" );
		var form_data = {
			id: id
		};
		swal({
			title: "Do you want to delete this?",
			// text: "@lang('packages.delete_package_msg')",
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
url: '<?php echo route("mc.delete"); ?>',
data: form_data,
context:this,
success: function ( msg ) {
$(this).parents('tr').remove();
document.getElementById("attribute_form").reset();

}
} );

}
});
});
// for before competition start
var before_comp_start = $('#reminder-date').datetimepicker({
format: 'YYYY-MM-DD',
minDate: "<?php echo date('Y-m-d'); ?>",
//format: 'DD-MM-YYYY',
//minDate: "<?php //echo date('d-m-Y'); ?>",
});
var competition_date = $('.datepicker').datepicker({
format: 'yyyy-mm-dd',
startDate: new Date(),
autoclose: true
});

$('.datepicker').change(function(){
var comp_date = $(this).val();
//console.log(before_comp_start.data());
before_comp_start.data().DateTimePicker.maxDate(moment(comp_date, 'YYYY-MM-DD'));
});
});

</script>
<script type="text/javascript">
$(function () {
$('#datetimepicker4').datetimepicker();
});
</script>
<script type="text/javascript">
	$( "body" ).on( "click", ".delete_winner", function () {
		var task_id = $( this ).attr( "data-id" );
		var form_data = {
			id: task_id
		};
		swal({
			title: "Do you want to delete this Winner",
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
url: '<?php echo url("packages/delete_winner"); ?>',
data: form_data,
success: function ( msg ) {
swal( "@lang('packages.success_delete')", '', 'success' )
setTimeout( function () {
location.reload();
}, 1000 );
}
} );
}
} );
} );
</script>
<!-- <script >
	var table = $('#love').DataTable({
dom : 'l<"#add">frtip'
})
$('<label/>').text('Search Column:').appendTo('#add')
$select = $('<select/>').appendTo('#add')
	$('<option/>').val('All').text('All').appendTo($select);
		$('<option/>').val('0').text('Seq').appendTo($select);
			$('input[type="search"]').on( 'keyup change', function () {
			var searchValue = $(this).val();
			var columnSearch = $select.val();
			
			if(columnSearch == 'All'){
				table.search(searchValue).draw();
			} else {
			table.columns(columnSearch).search(searchValue).draw();
			}
			});
			</script> -->
			@endsection
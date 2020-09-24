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
            <li class="breadcrumb-item">Update Property Listing Amenity</li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal" method="POST" action="{{ route('property_listing_amenities.update') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="tile">

                    <h3 class="tile-title">Update Property Listing Amenity</h3>
                    @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="hidden" name="user_id" value="{{$data[0]->id}}">
                            <div class="form-group">
                                <label for="title">Listing Amenity:</label>
                                <input required id="listing_amenity"  type="text" value="{{$data[0]->listing_amenity}}" placeholder="Listing amenity" class="form-control" name="listing_amenity">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <input type="hidden" name="user_id" value="{{$data[0]->id}}">
                            <div class="form-group">
                                <label for="title">Listing For:</label>
                                <select name="listing_for" id="" class="form-control">
                                    <option value="sales" selected>Sales  </option>
                                    <option value="rentals" selected>Rentals</option>
                                    {{--                            @foreach($data as $daum)--}}
                                    {{--                                <option value="{{$daum->id}}">{{$daum->title}}</option>--}}
                                    {{--                            @endforeach--}}
                                </select>                               </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" style="margin-top: 27px !important;">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </div>
                    </div>
                </div>


            </form>
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

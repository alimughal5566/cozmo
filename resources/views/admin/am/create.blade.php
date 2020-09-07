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

            <li class="breadcrumb-item"> Articles</li>

        </ul>

    </div>

    <div class="row">

        <div class="col-md-12">

            <form class="form-horizontal" method="POST" action="{{url('article')}}" enctype="multipart/form-data">

                {{ csrf_field() }}

                <div class="tile">



                    <h3 class="tile-title"> Article</h3>

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

                                <input required id="title" value="{{ isset($article) ? $article->title : old('title')}}" type="text" placeholder="Title" class="form-control" name="title">

                            </div>

                        </div>

                        <div class="col-sm-6">

                            <div class="form-group">

                                <label for="long_title">Long Title:</label>

                                <input required id="long_title" value="{{ isset($article) ? $article->long_title : old('long_title')}}" type="text" placeholder="Long Title" class="form-control" name="long_title" >

                            </div>

                        </div>

                    </div>



                    <div class="row">



                        @foreach($categories as $row)

                            @if(isset($article->id) && $row->id==$article->category_id)

                                <input type="hidden" name="category_id[]" value="{{ $row->id}}">

                            @endif

                        @endforeach



                        <div class="col-sm-6">

                            <div class="form-group">

                                <label for="title">Select Categories:</label>

                                @php
                                    $cate = [];
                                    if (isset($article)) {

                                        foreach ($article->categories as $category) {
                                            $cate[$category->category->id] = $category->category->id;
                                        }
                                    }

                                @endphp

                                <select  name="categories_id[]" class="form-control chosen chosen-height" multiple>

                                    @foreach($categories as $row)

                                        <option {{in_array($row->id ,$cate) ? 'selected' : ''}} value="{{$row->id or old('categories_id')}}">{{ $row->title}}</option>

                                    @endforeach

                                </select>


                            </div>

                        </div>

                        <div class="col-sm-6">

                            <div class="form-group">

                                <label>Writer</label>

                                <select name="writer_id" class="form-control">

                                    <option value="">Select Writer</option>

                                    @foreach($writers as $writer)

                                        <option value="{{$writer->id or old('writer_id')}}" {{isset($article) && $article->writer_id == $writer->id ? 'selected' : '' }}>{{$writer->title}}</option>

                                    @endforeach

                                </select>

                            </div>

                        </div>

                        <div class="col-sm-6">

                            <div class="form-group">

                                <label>Article Type</label>

                                <select name="article_type" class="form-control" >
                                @if(isset($article->article_type))
									<option value="{{$article->article_type}}" selected>{{$article->article_type}}</option>
                                @endif
                                    <option value="">Select Members</option>
                                    <option value="Public" >Public</option>
                                    @if(Auth::check())
                                    <option value="Members Only" >Members Only</option>
                                    @endif
                                    @if(Auth::check() && Auth::user()->user_role == 3)
                                    <option value="Exec Only" >Exec Only</option>
                                    @endif
                                    <option value="Draft" >Draft</option>


                                </select>

                            </div>

                        </div>                        



                    </div>



                    <div class="row">



                        <div class="col-sm-12">

                            <div class="form-group">

                                <label>Description</label>

                                <textarea name="description" cols="8" id="txtEditor" style="height: 35px;width: 100%;" >{{isset($article) ? $article->description : ''}}</textarea>

                            </div>

                        </div>



                        <div class="col-sm-6">


                            <?php if(isset($article)) { ?>

                            <div class="col-sm-6 p-0 col-md-3 col-lg-6">

                                <input type="hidden" name="noimage" value="{{isset($article) ? $article->image : ''}}">

                                <img  src="{{$article->photo}}" class="form-control rounded float-left " style="width: 260px; height: 193px;">

                                <!-- <h6 style="color: #ee8322; margin-top: 200px;">Banner size must be width:1500 height:600</h6> -->

                                <input type="file" name="image">

                            </div>

                            <?php } else {  ?>

                            <div class="col-sm-6 p-0 col-md-3 col-lg-6">

                                <label>Select Image</label>

                                <input type="file" name="image">

                            </div>

                            <?php }  ?>


                            <div class="col-sm-6">

                                @if(Auth::check() && Auth::user()->user_role == 1)

                                    <div class="tile-footer my-btn text-left">

                                        <a class="btn btn-default" href="{{ url('article')}}">Cancel</a>



                                        <button class="btn btn-primary" type="submit">Save</button>

                                    </div>

                                @endif



                            </div>

                        </div>

                    </div>

                    <input type="hidden" name="id" value="{{ isset($article) ? $article->id : ''}}">

                    <input type="hidden" name="file" value="{{ isset($article) ? $article->image : ''}}">

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



        <link href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">

        <script src="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>

        <script>

            $(document).ready(function() {

                $("#txtEditor").summernote({

                    placeholder: 'Description',

                    tabsize: 2,

                    height: 200

                });

            });

        </script>



@endsection
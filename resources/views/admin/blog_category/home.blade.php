@extends( 'admin.layouts.app' )
@section( 'content' )
    <style>
        .dule-btns{
            display: flex;
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
            <li class="breadcrumb-item">Blog Category</li>
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
                <h3 class="tile-title text-center">Blog Category
                    @if(Auth::check() )
                        <a href="{{url('/blogCategory/create')}}" class="btn btn-sm btn-success pull-right cust_color"><i class="fa fa-plus"></i> Add Blog</a>
                @endif
                </h3>
                <div class="table-responsive">
                    <table id = "example" class="table">
                        <thead class="back_blue">
                        <tr>
                            <th style="display: none;">#Sr</th>
                            <th>image</th>
                            <th>Title</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Content</th>
                            <th></th>

                            <th width="130" class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $counter = 1;?>
                        @foreach($blog as $row)

                            <tr>
                                <td style="display: none;"><?php echo $counter;?></td>
                                <?php $counter++;?>
{{--                                <td>{{$row->title}}</td>--}}

                                {{--                                <td>--}}
                                {{--                                    @foreach($companies as $comp)--}}
                                {{--                                        @if($comp->id==$row->company_id)--}}
                                {{--                                            {{$comp->title}}--}}
                                {{--                                        @endif--}}
                                {{--                                    @endforeach--}}
                                {{--                                </td>--}}


                                <td class="text-center">
                                    <div class="actions-btns dule-btns float-lg-right">

                                        <a href="{{url('users/edit/' . $row->id)}}" class="btn btn-sm btn-info" style="float: left;"><i class="fa fa-edit"></i></a>
                                        <a href="javascript:void(0)" data-id="{{$row->id}}" class="btn btn-sm btn-danger removePartner"><i class="fa fa-trash"></i></a>


                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $( "body" ).on( "click", ".removePartner", function () {
            var task_id = $( this ).attr( "data-id" );
            var form_data = {
                id: task_id
            };
            swal( {
                    title: "@lang('users.delete_user')",
                    text: "@lang('users.delete_user_msg')",
                    type: 'info',
                    showCancelButton: true,
                    confirmButtonColor: '#F79426',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    showLoaderOnConfirm: true
                },
                function () {
                    $.ajax( {
                        type: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
                        },
                        url: '<?php echo url("users/delete"); ?>',
                        data: form_data,
                        success: function ( msg ) {
                            swal({
                                title: "Response",
                                text: msg,
                                type: 'info',
                            });
                            setTimeout( function () {
                                location.reload();
                            }, 2000 );
                        }
                    } );
                } );

        } );
        $( "body" ).on( "click", "#change_status", function () {
            var id = parseInt( $( this ).attr( "data-id" ) );
            var status = parseInt( $( this ).attr( "data-status" ) );
            if ( status == 0 || status== 2 ) {
                var s = 1
            } else if ( status == 1 ) {
                s = 0
            }
            var form_data = {
                id: id,
                status: s
            };
            swal( {
                    title: "@lang('users.change_status')",
                    text: "@lang('users.change_status_msg')",
                    type: 'info',
                    showCancelButton: true,
                    confirmButtonColor: '#F79426',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    showLoaderOnConfirm: true
                },
                function () {
                    $.ajax( {
                        type: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
                        },
                        url: '<?php echo url("users/change_status"); ?>',
                        data: form_data,
                        success: function ( msg ) {
                            swal( "@lang('users.success_change')", '', 'success' )
                            setTimeout( function () {
                                location.reload();
                            }, 2000 );
                        }
                    } );
                } );


        } );

        $(document).ready(function() {

            $('.approve-b-req').click(function(){

                var uid = $(this).attr('uid');
                var response;

                $.ajax({
                    url:'{{url("approve_business_request")}}',
                    data:{'uid':uid, '_token': '{{@csrf_token()}}'},
                    method: 'POST',
                    success:function (response) {
                        if (response.status == 'success') {
                            swal('Success', response.msg, 'success');
                            location.reload();
                        }
                    }
                });
            });

            $('.reject-b-req, .cancel-b-req').click(function(){

                var uid = $(this).attr('uid');
                var op;
                var response;

                if ($(this).hasClass('reject-b-req')) {
                    op = '3';
                }
                else if ($(this).hasClass('cancel-b-req')) {
                    op = '4';
                }

                $.ajax({
                    url:'{{url("reject_business_request")}}',
                    data:{'uid':uid, '_token': '{{@csrf_token()}}', 'op':op},
                    method: 'POST',
                    success:function (response) {
                        if (response.status == 'success') {
                            swal('Success', response.msg, 'success');
                            location.reload();
                        }
                    }
                });

            });

            $(document).ready(function() {
                $('#example').DataTable( {
                    "order": [[ 0, "desc" ]]
                } );
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

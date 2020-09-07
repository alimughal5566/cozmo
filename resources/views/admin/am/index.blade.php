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

        <li class="breadcrumb-item"><a href="{{url('/')}}">@lang('general.home')</a>

        </li>

        <li class="breadcrumb-item">Articles</li>

    </ul>

</div>





<div class="row">

    <div class="col-md-12">

        <div class="tile">

            @if (session('success'))

            <div class="alert alert-success">

                {{ session('success') }}

            </div>

            @endif

            <h3 class="tile-title">Articles

                @if(Auth::check() && Auth::user()->user_role == 1)

                <a href="{{ url('article/create')}}" class="btn btn-sm btn-success pull-right cust_color"><i class="fa fa-plus"></i> @lang('writers.add_new_writer')</a>

                @endif

            </h3>

            <div class="table-responsive">

                <table id = "example" class="table">

                    <thead class="back_blue">

                    <tr>

                        <th style="display: none;">@lang('general.sr')</th>

                        <th>Photo</th>

                        <th>Title</th>

                        <th>Long Title</th>

                        <th>Description</th>

                        <th>Categories</th>

                        <th>Writer</th>

                        <th>@lang('general.actions')</th>

                    </tr>

                    </thead>

                    <tbody>

                    <?php $counter = 1;?>



                    @foreach($articles as $article)


                    <tr>

                        <td style="display: none;">

                            <?php echo $counter;?></td>

                        <?php $counter++;?>

                        <td><img style="width: 80px; height: 50px;" src="{{$article->photo}}"></td>

                        <td>{{$article->title}}</td>

                        <td style="text-transform: none;">{{$article->long_title}} </td>



                        <td>{!! str_limit($article->description,20) !!}</td>

                        @php
                        $categories = '';
                        foreach ($article->categories as $category){
                        $categories .= @$category->category->title.',';
                        }

                        @endphp

                        <td>{{rtrim($categories,',')}}</td>



                        <td>{{$article->writer->title}}</td>





                        <td class="text-center">

                            <div class="actions-btns dule-btns">

                                <a href="{{url('article/'.$article->id.'/edit')}}" class="btn btn-sm btn-info" style="float: left;"><i class="fa fa-edit"></i></a>



                                @if(Auth::check() && Auth::user()->user_role == 1)

                                <a href="javascript:void(0)" data-id="{{$article->id}}" class="btn btn-sm btn-danger deleteWriter"><i class="fa fa-trash"></i></a>

                                @endif



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

    $( "body" ).on( "click", ".deleteWriter", function () {

        let url = '<?php echo url("article"); ?>'+'/'+$(this).data('id');

        swal( {

                title: "@lang('articles.delete_articles_title')",

                text: "@lang('articles.delete_articles_text')",

                type: 'info',

                showCancelButton: true,

                confirmButtonColor: '#F79426',

                cancelButtonColor: '#d33',

                confirmButtonText: 'Yes',

                showLoaderOnConfirm: true

            },

            function () {

                $.ajax( {

                    type: 'DELETE',

                    headers: {

                        'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )

                    },

                    url: url,

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


@extends( 'admin.layouts.app' )
@section( 'content' )
    <style>
        .dule-btns{
            display: flex;
        }
        .dataTables_filter label {
            display: flex;
            text-align: right;
            justify-content: flex-end;
            align-items: baseline;
        }
        .dataTables_filter input {
            width: 33%;
        }
        .dataTables_length label {
            display: flex;
            text-align: left;
            align-items: baseline;
        }
        .dataTables_length select {
            width: 15%;
        }
        .round_img {
            height: 70px !important;
            width: 68px;
            border-radius: 30px;
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
            <li class="breadcrumb-item">Blog Categories</li>
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
                @if (session('Failed'))
                    <div class="alert alert-danger" style="width: 100%">
                        {{ session('Failed') }}
                    </div>
                @endif
                <h3 class="tile-title ">Blogs
                    @if(Auth::check() )
                        <a href="{{route('blog.add')}}" class="btn btn-sm btn-success pull-right cust_color"><i class="fa fa-plus"></i> Add Blog </a>
                    @endif
                </h3>
                <div class="table-responsive">

                    <table id = "example" class="table">
                        <thead class="back_blue">
                        <tr>
                            <th style="">#Sr</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Type</th>
                            <th>Blog Category</th>
                            <th>Content</th>
                            <th>Featured Settings</th>

{{--                            <th>Feature Settings</th>--}}
                            <th>Date Created</th>
                            {{--                            <th>Date Updated</th>--}}

                            <th width="130" class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $counter = 1;?>
                        @foreach($blg as $row)

                            <tr @if($row->feature_flag == 1)style="background: gold"@elseif($row->feature_flag == 2)style="background: lightgray"  @endif  >

                                <td style=""><?php echo $counter;?></td>
                                <?php $counter++;?>
                                {{--                                <td>{{$row->title}}</td>--}}

                                {{--                                <td>--}}
                                {{--                                    @foreach($companies as $comp)--}}
                                {{--                                        @if($comp->id==$row->company_id)--}}
                                {{--                                            {{$comp->title}}--}}
                                {{--                                        @endif--}}
                                {{--                                    @endforeach--}}
                                {{--                                </td>--}}
                                <td>
                                    <img class=" img-circle img-size-32 mr-2 round_img"  height="15%" src="/images/cozmo/{{$row->image}}" style="height: 30px">
                                </td>
                                <td>
                                    {{$row->title}}
                                </td>
                                <td>
                                    {{$row->type}}
                                </td>
                                <td>
                                    {{$row->blog_category}}
                                </td>
                                <td>
                                      {!!  $row->content !!}
                                </td>



                                <td>{{ date('d-M-y', strtotime($row->date_created)) }}</td>
                                <td>
                                   @if($row->feature_flag == 2)
                                    <a href="{{ url('/blog/removeFeature/' . $row->id)}}" class="btn btn-sm btn-danger" style="float: left;">Remove From Featured</a>
                                    @endif
                                    @if($row->feature_flag == 1)
                                    <a href="{{ url('/blog/removeFeature/' . $row->id)}}" class="btn btn-sm btn-danger" style="float: left;">Remove From Featured</a>
                                    @endif
                                       @if($row->feature_flag !=1 && $row->feature_flag <2 )
                                           @if($blg->main_featured_count != 1 || $blg->featured_count <2 )
                                           <a href="{{ url('/blog/setToMainFeature/' . $row->id)}}" class="btn btn-sm btn-warning" style="float: left;">Set To Main Feature</a>
                                           <a href="{{ url('/blog/setToFeature/' . $row->id)}}" class="btn btn-sm btn-info mt-2" style="float: left;"> Set To Feature</a>
                                        @endif
                                           @endif

                                </td>


                                <td class="text-center">
                                    <div class="actions-btns dule-btns float-lg-right">

                                        <a href="{{ url('/blog/edit/' . $row->id)}}" class="btn btn-sm btn-info" style="float: left;"><i class="fa fa-edit"></i></a>
                                        <a href="javascript:void(0)"   data-id="{{$row->id}}" class="btn btn-sm btn-danger delete "><i class="fa fa-trash"></i></a>


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

    <script src="{{url('backend/sweetalerts/sweetalert2.all.js')}}"></script>
    <script type="text/javascript">
        $( "body" ).on( "click", ".delete", function () {
            var task_id = $( this ).attr( "data-id" );
            var form_data = {
                id: task_id
            };
            swal({
                title: "Do you want to delete this Blog",
                //text: "@lang('category.delete_category_msg')",
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
                        url: '<?php echo url("/blog/delete"); ?>',
                        data: form_data,
                        success: function ( msg ) {
                            swal( "@lang('Blog Deleted Successfully')", '', 'success' )
                            setTimeout( function () {
                                location.reload();
                            }, 1000 );
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


    <script>

        $(document).ready(function() {
            $('#example').DataTable( {
                "order": [[ 0, "asc" ]]
            } );
        } );

    </script>




@endsection

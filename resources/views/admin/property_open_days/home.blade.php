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
    <link rel="stylesheet" href="plugins/weekline/styles/cleanslate.css"/>
    <link rel="stylesheet" href="plugins/weekline/styles/jquery.weekLine.css"/>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="plugins/weekline/scripts/jquery.weekLine.min.js">

    </script>
    <script type="text/javascript" src="//cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>

    <div class="app-title">

        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
            </li>
            <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">Property Open Days</li>
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
                    <div class="alert alert-success" style="width: 40%">
                        {{ session('Failed') }}
                    </div>
                @endif

                <h3 class="tile-title ">Property Open Days
                    @if(Auth::check() )
                        <a href="{{route('propertyOpenDays.add')}}" class="btn btn-sm btn-success pull-right cust_color"><i class="fa fa-plus"></i> Add Property Oped Days  </a>
                    @endif
                </h3>

                <div class="table-responsive">

                    <table id = "example" class="table">
                        <thead class="back_blue">
                        <tr>
                            <th style="">#Sr</th>
                            <th>Property</th>
                            <th>Days</th>
                            <th>Date Created</th>
                            {{--                            <th>Date Updated</th>--}}

                            <th width="130" class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $counter = 1;?>
                        @foreach($result as $data)

                          <tr>
                              <td><?php echo $counter;?></td>
                              <?php $counter++;?>
                              <td>{{$data->property_name}}</td>
                              <td>
                                  @foreach(unserialize($data->day_name) as $datum)
                                  {{$datum}},
                                      <hr>
                                  @endforeach

                              </td>
                                  <td>{{$data->date_created}}</td>
                              <td class="text-center">
                                  <div class="actions-btns dule-btns float-lg-right">
                                      <a href="{{ url('/property_open_days/edit/' . $data->id)}}" class="btn btn-sm btn-info" style="float: left;"><i class="fa fa-edit"></i></a>
                                      <a href="javascript:void(0)"   data-id="{{$data->id}}" class="btn btn-sm btn-danger delete "><i class="fa fa-trash"></i></a>
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
                title: "Do you want to delete this Category",
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
                        url: '<?php echo url("/rental_price_history/delete"); ?>',
                        data: form_data,
                        success: function ( msg ) {
                            swal( "@lang('Category Deleted Successfully')", '', 'success' )
                            setTimeout( function () {
                                location.reload();
                            }, 900 );
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
                "order": [[ 0, "desc" ]]
            } );
        } );

    </script>






@endsection

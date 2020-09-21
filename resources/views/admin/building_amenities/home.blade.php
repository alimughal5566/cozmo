
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
    [data-title] {

        font-size: 30px; /*optional styling*/

        position: relative;

    }
    .tab-content{
        margin-top:10px;
    }
    [data-title]:hover::before {
        content: attr(data-title);
        position: absolute;
        bottom: -33px;
        display: inline-block;
        padding: 3px 6px;
        border-radius: 2px;
        background: #000;
        color: #fff;
        font-size: 12px;
        font-family: sans-serif;
        white-space: nowrap;
    }
    [data-title]:hover::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 8px;
        display: inline-block;
        color: #fff;
        border: 8px solid transparent;
        border-bottom: 8px solid #000;
    }
    .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
        color: #fff !important;
        background-color: #ee8322 !important;
        border: 1px solid #ee8322 !important;
    }
    .nav>li>a {
        position: relative;
        display: block;
        padding: 10px 15px;
    }
    .nav-tabs>li>a {
        margin-right: 2px;
        line-height: 1.42857143;
        border: 1px solid transparent;
        border-radius: 4px 4px 0 0;
    }
    .nav>li>a:focus, .nav>li>a:hover {
        background-color: #ee8322 !important;
    }
    .nav-tabs>li>a:hover {
        border-color: #ee8322 #ee8322 #ee8322 !important;
        box-shadow: 5px 3px 9px 0px #88888875 !important;
        color: white !important;
        transform: translate3d(0, -1px, 0) !important;
    }

</style>



@extends( 'admin.layouts.app' )
@section( 'content' )
    <?php $curr=Config::get("constants.currency"); ?>
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
            </li>
            <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a>
            </li>

        </ul>
    </div>
    <div class="row">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                {!! \Session::get('success') !!}
            </div>
        @endif
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">
                    Building Amenities
                    @if(Auth::check() && Auth::user()->user_role == 1)
                        <a href="{{url('/building_amenities/add')}}" class="btn btn-sm btn-success pull-right cust_color"><i class="fa fa-plus"></i> @lang('Add New')</a>
                    @endif

                </h3>

                <div class="tab-content">

                    <div id="menu1" class="tab-pane fade">
                        <div class="table-responsive">
                            <table id = "example" class="table">


                            </table>
                        </div>
                    </div>



                    <div id="menu2" class="tab-pane fade in show active ">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="back_blue">
                                <tr>
                                {{--                        <th>@lang('packages.name')</th>--}}
                                <!-- <th>@lang('packages.price')</th> -->
                                    <th>id</th>
                                    {{--                                    <th>property_id</th>--}}
                                    <th>building_amenities_title</th>
{{--                                    <th>created_date</th>--}}
{{--                                    <th>updated_date</th>--}}
                                    <th>listing_for</th>
                                    <th>type</th>
                                    <th width="130" class="text-center">@lang('packages.actions')</th>
                                </tr>
                                </thead>
                                <tbody>


                                @foreach($users as $key=>$user)

                                    <tr>
                                        <td>{{$key+1}}</td>
                                        {{--                                        <td>{{$user->property_id}}</td>--}}
                                        <td>{{$user->building_amenities_title}}</td>
{{--                                        <td>{{$user->created_date}}</td>--}}
{{--                                        <td>{{$user->updated_date}}</td>--}}
                                        <td>{{$user->listing_for}}</td>
                                        <td>{{$user->type}}</td>

                                        <td class="text-right">
                                            <div class="actions-btns " style="display: flex; justify-content: center">
                                                <a href="/building_amenities/edit/{{$user->id}}" class="btn btn-sm btn-info" style="float: left;"><i class="fa fa-edit"></i></a>

                                                <a href="/building_amenities/delete/{{$user->id}}" class="btn btn-sm btn-danger removePartner"><i class="fa fa-trash"></i></a>

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
                title: "Do you want to delete this product",
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
                        url: '<?php echo url("packages/delete"); ?>',
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



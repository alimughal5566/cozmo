
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
                    Companies
                    @if(Auth::check() && Auth::user()->user_role == 1)
                        <a href="{{url('companies/add')}}" class="btn btn-sm btn-success pull-right cust_color"><i class="fa fa-plus"></i> @lang('add_new')</a>
                    @endif

                </h3>

                <div class="tab-content">

                    <div id="menu1" class="tab-pane fade">
                        <div class="table-responsive">
                            <table class="table">


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
                                    <th>name</th>
                                    <th>street_no</th>
                                    <th>street_name</th>
                                    <th>city</th>
                                    <th>state</th>
                                    <th>zip_code</th>
                                    <th>company_address</th>
                                    <th>company_phone_number</th>
                                    <th>company_email</th>
                                    <th>created_date</th>
                                    <th>description</th>
                                    <th width="130" class="text-center">@lang('packages.actions')</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($users as $key=>$user)

                                    <tr>
                                        <td>{{$key+1}}</td>
{{--                                        <td>{{$user->property_id}}</td>--}}
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->street_no}}</td>
                                        <td>{{$user->street_name}}</td>
                                        <td>{{$user->city}}</td>
                                        <td>{{$user->state}}</td>
                                        <td>{{$user->zip_code}}</td>
                                        <td>{{$user->company_address}}</td>
                                        <td>{{$user->company_phone_number}}</td>
                                        <td>{{$user->company_email}}</td>
                                        <td>{{$user->created_date}}</td>
                                        <td>{{$user->description}}</td>
                                       <td>
                                           <a href="/company/edit/{{$user->id}}" class="btn btn-sm btn-info" style="float: left;"><i class="fa fa-edit"></i></a>

                                           <a href="/company/delete/{{$user->id}}" class="btn btn-sm btn-danger removePartner"><i class="fa fa-trash"></i></a>

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
@endsection


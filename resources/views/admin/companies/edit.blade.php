@extends( 'admin.layouts.app' )

@section( 'content' )
    <div class="app-title">

        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
            </li>
            <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item"><a href="{{url('Company')}}">Company Edit</a>
            </li>
            <li class="breadcrumb-item">Update</li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">

            <div class="tile">
                    <h3 class="tile-title">Edit Company</h3>
                    <form class="form-horizontal" method="POST" action="{{ url('company/update') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Name</label>
                                    <input type="hidden" name="user_id" value="{{$user[0]->id}}">
                                    <input id="name" type="text" class="form-control is-invalid" name="name" value="{{$user[0]->name}}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Street No</label>
                                    <input id="street_no" type="text" class="form-control" name="street_no" value="{{$user[0]->street_no}}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Street Name</label>
                                    <input id="street_name" type="text" class="form-control" name="street_name" value="{{$user[0]->street_name }}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">City</label>
                                    <input id="city" type="text" class="form-control" name="city" value="{{$user[0]->city }}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">State</label>
                                    <input id="state" type="text" class="form-control" name="state" value="{{$user[0]->state }}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Zip Code</label>
                                    <input id="zip_code" type="number" class="form-control" name="zip_code" value="{{$user[0]->zip_code }}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Company Address</label>
                                    <input id="company_address" type="text" class="form-control" name="company_address" value="{{$user[0]->company_address}}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Company Phone Number</label>
                                    <input id="company_phone_number" type="number" class="form-control" name="company_phone_number" value="{{$user[0]->company_phone_number}}">
                                </div>
                            </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Company Email</label>
                                        <input id="company_email" type="text" class="form-control" name="company_email" value="{{$user[0]->company_email}}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Description</label>
                                        <input id="description" type="text" class="form-control" name="description" value="{{$user[0]->description}}">
                                    </div>
                                </div>
                        </div>
                        <input id="file" type="hidden" class="form-control" name="id" value="">
                        @if(Auth::check() && Auth::user()->user_role == 1)
                            <div class="tile-footer text-right">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        @endif
                    </form>
                </div>
        </div>
    </div>

@endsection

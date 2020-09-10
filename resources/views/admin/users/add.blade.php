@extends( 'admin.layouts.app' )

@section( 'content' )
    <div class="app-title">

        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
            </li>
            <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item"><a href="{{url('/users')}}">All Agents</a>
            </li>
            <li class="breadcrumb-item">Add Agents</li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">

            <div class="tile">
                <h3 class="tile-title">Add Agent</h3>
                <form class="form-horizontal" method="POST" action="{{ url('users/store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label class="form-control-label">Name</label>
                                <input id="name" type="text" class="form-control " name="name" required autofocus>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <input id="email"  type="email" class="form-control " name="email"  required >
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label class="form-control-label">Password</label>
                                <input id="email"  type="password" class="form-control " name="password"  required >
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label class="form-control-label">Phone</label>
                                <input id="phone_number" type="text" class="form-control" name="phone_number" required >
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 ">
                            <label for="comp">Select Company</label>
                            <select name="company_id" class="form-control"  required >

                                @foreach ($companies as $comp)
                                    <option value="{{ $comp->id }}">{{ $comp->title }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label class="form-control-label">State</label>
                                <input id="state" type="text" class="form-control" name="state" required>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label class="form-control-label">City</label>
                                <input id="city" type="text" class="form-control" name="city" >
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label class="form-control-label">Street name</label>
                                <input id="street_name" type="text" class="form-control" name="street_name" required>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label class="form-control-label">Street no</label>
                                <input id="street_no" type="text" class="form-control" name="street_no"required>
                            </div>
                        </div>


                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label class="form-control-label">Zip Code</label>
                                <input id="zip_code" type="text" class="form-control" name="zip_code" required>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label class="form-control-label">Created date</label>
                                <input id="created_date" type="date" class="form-control" name="created_date" required >


                            </div>
                        </div>
                    </div>
                    @if(Auth::check())
                        <div class="tile-footer text-right " >
                            <a href="{{url('users')}}" class="btn btn-default">@lang('general.cancel')</a>
                            <button type="submit" class="btn btn-primary">@lang('general.save')</button>
                        </div>
                    @endif
                </form>

            </div>

        </div>
    </div>


@endsection



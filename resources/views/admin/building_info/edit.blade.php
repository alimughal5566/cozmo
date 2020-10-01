@extends( 'admin.layouts.app' )

@section( 'content' )
    <div class="app-title">

        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
            </li>
            <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item"><a href="{{url('building_info')}}">Building Edit</a>
            </li>
            <li class="breadcrumb-item">Update</li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">

            <div class="tile">
                    <h3 class="tile-title">Edit Building</h3>
                    <form class="form-horizontal" method="POST" action="{{ url('building_info/update') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-6 col-md-3 col-lg-4">
                                <div class="form-group">
                                    <label>Select Title</label>
                                    <select name="building_id" id="" class="form-control">
                                        <option value=""selected>Select building</option>
                                        @foreach($data as $datum)
                                            <option value="{{$datum->id}}">{{$datum->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Name</label>
                                    <input type="hidden" name="user_id" value="{{$user[0]->id}}">
                                    <input id="name" type="text" class="form-control is-invalid" name="name" value="{{$user[0]->name}}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Unit Number</label>
                                    <input id="unit_number" type="text" class="form-control" name="unit_number" value="{{$user[0]->unit_number}}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Additional_info</label>
                                    <input id="additional_info" type="text" class="form-control" name="additional_info" value="{{$user[0]->additional_info }}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">No Of Units</label>
                                    <input id="no_of_units" type="number" class="form-control" name="no_of_units" value="{{$user[0]->no_of_units }}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">No Of Stories</label>
                                    <input id="no_of_stories" type="text" class="form-control" name="no_of_stories" value="{{$user[0]->no_of_stories }}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Condos</label>
                                    <input id="condos" type="text" class="form-control" name="condos" value="{{$user[0]->condos }}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Co Ops</label>
                                    <input id="co_ops" type="text" class="form-control" name="co_ops" value="{{$user[0]->co_ops}}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label>Multi Familes</label>
                                    <select name="multi_familes" id="" class="form-control">
                                        <option value="no" selected>No</option>
                                        <option value="1" selected>1</option>
                                        <option value="2" selected>2</option>
                                        <option value="3" selected>3</option>
                                        {{--                            @foreach($data as $daum)--}}
                                        {{--                                <option value="{{$daum->id}}">{{$daum->title}}</option>--}}
                                        {{--                            @endforeach--}}
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Rental Units</label>
                                    <input id="rental_units" type="text" class="form-control" name="rental_units" value="{{$user[0]->rental_units}}">
                                </div>
                            </div>
{{--                                <div class="col-sm-6 col-md-4">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label class="form-control-label">Company Email</label>--}}
{{--                                        <input id="company_email" type="text" class="form-control" name="company_email" value="{{$user[0]->company_email}}">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-6 col-md-4">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label class="form-control-label">Description</label>--}}
{{--                                        <input id="description" type="text" class="form-control" name="description" value="{{$user[0]->description}}">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
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

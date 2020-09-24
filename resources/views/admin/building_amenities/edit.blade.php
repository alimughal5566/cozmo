@extends( 'admin.layouts.app' )

@section( 'content' )
    <div class="app-title">

        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
            </li>
            <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item"><a href="{{url('building_amenities')}}">Edit Amenity</a>
            </li>
            <li class="breadcrumb-item">Update</li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">

            <div class="tile">
                <h3 class="tile-title">Edit Amenity</h3>
                <form class="form-horizontal" method="POST" action="{{ url('building_amenities/update') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">

                        <div class="col-sm-6 col-md-3 col-lg-4">
                            <div class="form-group">
                                <label>Select Title</label>
                                <select name="parent_id" id="" class="form-control">
                                    <option value=""selected>Select Parent</option>
                                    @foreach($user as $datum)
                                        <option value="{{$datum->id}}">{{$datum->building_amenities_title}} </option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label class="form-control-label">Building Amenities Title</label>
                                <input type="hidden" name="user_id" value="{{$user[0]->id}}">
                                <input id="building_amenities_title" type="text" class="form-control is-invalid" name="building_amenities_title" value="{{$user[0]->building_amenities_title}}">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label class="form-control-label">Listing For</label>
                                <input id="listing_for" type="text" class="form-control" name="listing_for" value="{{$user[0]->listing_for}}">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label class="form-control-label">Type</label>
                                <select name="type" id="" class="form-control">
                                    <option value="sales" selected>Sales  </option>
                                    <option value="rentals" selected>Rentals</option>
                                    {{--                            @foreach($data as $daum)--}}
                                    {{--                                <option value="{{$daum->id}}">{{$daum->title}}</option>--}}
                                    {{--                            @endforeach--}}
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="title">Image</label>
                                <input required id="image" type="file" placeholder="image" class="form-control" name="images">
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

@extends( 'admin.layouts.app' )

@section( 'content' )
    <div class="app-title">

        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
            </li>
            <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item"><a href="{{route('departmentsHomeView')}}">All Department</a>
            </li>
            <li class="breadcrumb-item">Add Department</li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">

            <div class="tile">
                <h3 class="tile-title ">Add New Rental Price History</h3>
                <form class="form-horizontal" method="POST" action="{{ route('department.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">

                                <label class="form-control-label">Name</label>
                                <input id="name" type="text" min="1" class="form-control "  name="name" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 ">
                            <label for="comp">Select Property</label>
                            <select name="property_id" class="form-control"  required >

                                @foreach ($property as $prop)
                                    <option value="{{ $prop->id }}">{{ $prop->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">

                                <label class="form-control-label">Rental Price</label>
                                <input id="rentalPrice" type="number" min="1" class="form-control "  name="rental_price" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">

                                <label class="form-control-label">Unique Number</label>
                                <input id="uniqueNumber" type="number" min="1" class="form-control "  name="unique_no" required >
                            </div>
                        </div>












                        {{--                        <input id="file" type="hidden" class="form-control" name="id" value="{{$user->id}}">--}}


                        </div>


                    @if(Auth::check())
                        <div class="tile-footer text-right ">
                            <a href="{{url('/blog_category/home')}}" class="btn btn-default">@lang('general.cancel')</a>
                            <button type="submit" class="btn btn-primary">@lang('general.save')</button>
                        </div>
                    @endif
                </form>
            </div>

        </div>
    </div>

@endsection



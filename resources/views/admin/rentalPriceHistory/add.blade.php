@extends( 'admin.layouts.app' )

@section( 'content' )
    <div class="app-title">

        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
            </li>
            <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item"><a href="{{route('rentalPriceHistoryHomeView')}}">All Rental Price Histories</a>
            </li>
            <li class="breadcrumb-item">Add Rental Price History</li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">

            <div class="tile">
                <h3 class="tile-title ">Add New Rental Price History</h3>
                <form class="form-horizontal" method="POST" action="{{ route('rentalPriceHistory.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-6 col-md-4 ">
                            <label for="comp">Select Property</label>
                            <select name="property_id" class="form-control"  required >

                                @foreach ($property as $prop)
                                    <option value="{{ $prop->id }}">{{ $prop->title }}</option>
                                @endforeach
                            </select>





                        {{--                        <input id="file" type="hidden" class="form-control" name="id" value="{{$user->id}}">--}}


                    </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">

                                <label class="form-control-label">Rent</label>
                                <input id="rent" type="number" min="1" class="form-control "  name="rent" required >
                            </div>
                        </div>

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



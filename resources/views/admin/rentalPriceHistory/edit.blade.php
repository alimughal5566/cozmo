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
            <li class="breadcrumb-item">Edit Rental Price History</li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">

            <div class="tile">
                <h3 class="tile-title ">Edit Rental Price History</h3>
                <form class="form-horizontal" method="POST" action="{{ route('rentalPriceHistory.update') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-sm-6 col-md-4 ">
                            <label for="comp">Select Property</label>
                            <select name="property_id" class="form-control"  required >

                                @foreach ($propty as $prop)
                                    <option value="{{ $prop->id }}">{{ $prop->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">

                                <label class="form-control-label">Rent</label>
                                <input id="rent" type="number" min="1" class="form-control " value="{{$data->rent}}" name="rent" required >
                            </div>
                        </div>
                        <input id="file" type="hidden" class="form-control" name="id" value="{{$data->id}}">
                    </div>


                    @if(Auth::check())
                        <div class="tile-footer text-right " >
                            <a href="{{route('blog_category.home')}}" class="btn btn-default">@lang('general.cancel')</a>
                            <button type="submit" class="btn btn-primary">@lang('general.save')</button>
                        </div>
                    @endif
                </form>

            </div>

        </div>
    </div>

@endsection




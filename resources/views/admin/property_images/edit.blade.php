@extends( 'admin.layouts.app' )

@section( 'content' )
    <div class="app-title">

        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
            </li>
            <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item"><a href="{{url('property_image')}}">Edit Image</a>
            </li>
            <li class="breadcrumb-item">Update</li>
        </ul>
    </div>
            <div class="tile">
                    <h3 class="tile-title">Edit Image</h3>
                    <form class="form-horizontal" method="POST" action="{{ url('/property_image/update') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Select Title</label>
                                    <select name="property_id" id="" class="form-control">
                                        <option value=""selected>Select property</option>
                                        {{--                                    @dd($prop);--}}
                                        @foreach($data as $datum)
                                            <option value="{{$datum->id}}">{{$datum->title}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="title">Image</label>
                                    <input required id="image" type="file" placeholder="image" class="form-control" name="image">
                                </div>
                            </div>
                        </div>
                        <input id="file" type="hidden" class="form-control" name="id" value="{{$id}}">
                        @if(Auth::check() )
                            <div class="tile-footer text-right">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        @endif
                    </form>
                </div>
        </div>

@endsection


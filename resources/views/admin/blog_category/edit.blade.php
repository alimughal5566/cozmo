@extends( 'admin.layouts.app' )

@section( 'content' )
    <div class="app-title">

        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
            </li>
            <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item"><a href="{{route('blog_category.home')}}">All Blog Categories</a>
            </li>
            <li class="breadcrumb-item">Edit Blog Category</li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">

            <div class="tile">
                <h3 class="tile-title">Edit Blog Category</h3>
                <form class="form-horizontal" method="POST" action="{{ route('blog_category.update') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="row">
                            <div class="col-sm-6 col-md-4">
                            <div class="form-group">

                                <label class="form-control-label">Title</label>
                                <input id="title" type="text" class="form-control is-invalid" value="{{$blog_category->title}}" name="title" required >
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label class="form-control-label">Image</label>

                                <div class="custom-file">

                                    <input type="file" class="custom-file-input" name="image" id="validatedInputGroupCustomFile" required>
                                    <label class="custom-file-label" for="validatedInputGroupCustomFile">Choose Image...</label>
                                </div>
                            </div>
                        </div>
                        <input id="file" type="hidden" class="form-control" name="id" value="{{$blog_category->id}}">
                    </div>
                    @if(Auth::check())
                        <div class="tile-footer text-right " >
                            <button type="submit" class="btn btn-primary">@lang('general.save')</button>
                        </div>
                    @endif
                </form>

            </div>

        </div>

          <hr>
                    <div class="col-md-12">

                        <div class="tile">
                            <h3 class="tile-title ">Add Sub Category</h3>

                            <form class="form-horizontal" method="POST" action="{{ url('/sub_category/store') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-6 col-md-4">

                                        <div class="form-group">
                                            <label class="form-control-label">Title</label>
                                            <select name="category" id="" class="form-control">
                                                <option value="" selected>Select Main Category</option>
                                                @foreach($data as $daum)
                                                    <option value="{{$daum->id}}">{{$daum->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Title</label>
                                            <input type="text" class="form-control" name="title" placeholder="title" required>
                                        </div>
                                    </div>
                                </div>
                                @if(Auth::check())
                                    <div class="tile-footer text-right " >
                                        <a href="{{url('/blog_category/home')}}" class="btn btn-warning">Home</a>
                                        <button type="submit" class="btn btn-primary">@lang('general.save')</button>
                                    </div>
                                @endif
                            </form>

                        </div>

                    </div>
@endsection

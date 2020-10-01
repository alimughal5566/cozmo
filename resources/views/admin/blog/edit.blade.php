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
            <li class="breadcrumb-item">Edit Blog </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">

            <div class="tile">
                <h3 class="tile-title">Edit Blog</h3>
                <form class="form-horizontal" method="POST" action="{{ route('blog.update') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="row">

                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label class="form-control-label">Title</label>
                                <input  type="text" class="form-control " value="{{$blogg->title}}" name="title" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 ">
                            <label for="comp">Type</label>
                            <select name="type" class="form-control"  required >
                                <option value="sales">Sales</option>
                                <option value="rentals">Rentals</option>
                            </select>
                        </div>
                        <div class="col-sm-6 col-md-4 ">
                            <label for="comp">Select Property</label>
                            <select name="property" id="property" class="form-control "  >
                                <option value="">Select Property</option>
                                @foreach ($property as $data)
                                    <option value="{{ $data->id }}">{{ $data->title }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col-sm-6 col-md-4 ">
                            <label for="comp">Blog Category</label>
                            <select name="blog_category_id" class="form-control"  required >

                                @foreach ($blog_category as $bcat)
                                    <option value="{{ $bcat->id }}"> {{ $bcat->title }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col-sm-6 col-md-4 ">
                            <label for="comp">Sub Category</label>
                            <select name="subCate" class="form-control">

                            </select>
                        </div>


                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="title">Image</label>
                                <input required id="image"  type="file" value="{{$blogg->image}}" placeholder="image" class="form-control" name="image">
                            </div>
                        </div>


                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="title" style="width: 100%">Normal Blog</label>
                                <input type="checkbox"   name="featured" value="0" id="normal" checked   class="example"  data-onstyle="danger">
                            </div>

                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="title" style="width: 100%">Feature</label>
                                <input type="checkbox" name="featured" id="feature" class="example"  value="2"  data-onstyle="success">
                            </div>
                        </div>


                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="title" style="width: 100%">Main Feature</label>
                                <input type="checkbox"   name="featured"  id="mainfeature"  value="1" class="example"  data-onstyle="warning">
                            </div>
                        </div>


                        <div class="col-lg-12" >
                            <div class="form-group">
                                <label>Content</label>
                                <textarea name="content" cols="8" id="txtEditor"  style="height: 35px;width: 100%;">
                                {{$blogg->content}}
						</textarea>
                            </div>
                        </div>

                        <input id="file" type="hidden" class="form-control" name="id" value="{{$blogg->id}}">


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
    <script>
        $('input.example').on('change', function() {
            $('input.example').not(this).prop('checked', false);
        });

    </script>
    <script src="//cdn.ckeditor.com/4.13.1/full-all/ckeditor.js"></script>
    <script>
        $(document).ready(function() {
            CKEDITOR.replace( 'txtEditor' );
        });

    </script>

@endsection




@extends( 'admin.layouts.app' )

@section( 'content' )
    <div class="app-title">

        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
            </li>
            <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item"><a href="{{route('blogHomeView')}}"> All Blogs</a>
            </li>
            <li class="breadcrumb-item">Add Blog Category</li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">

            <div class="tile">
                <h3 class="tile-title ">Add New Blog</h3>
                <form class="form-horizontal" method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">

                          <div class="col-sm-6 col-md-4">
                              <div class="form-group">
                                  <label class="form-control-label">Title</label>
                                  <input id="title" type="text" class="form-control " name="title" required autofocus>
                              </div>
                          </div>

                          <div class="col-sm-6 col-md-4">
                              <div class="form-group">
                                  <label class="form-control-label">Type</label>
                                  <input id="type" type="text" class="form-control " name="type" required autofocus>
                              </div>
                          </div>
                          <div class="col-sm-6 col-md-4 ">
                              <label for="comp">Blog Category</label>
                              <select name="blog_category_id" class="form-control"  required >

                                  @foreach ($blog_category as $bcat)
                                      <option value="{{ $bcat->id }}">{{ $bcat->title }}</option>
                                  @endforeach
                              </select>

                      </div>




                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="title">Image</label>
                                <input required id="image"  type="file" placeholder="image" class="form-control" name="image">
                            </div>
                        </div>

                        <div class="col-lg-12" >
                            <div class="form-group">
                                <label>Content</label>
                                <textarea name="content" cols="8" id="txtEditor"  style="height: 35px;width: 100%;">

						</textarea>
                            </div>
                        </div>


                        {{--                        <input id="file" type="hidden" class="form-control" name="id" value="{{$user->id}}">--}}


                    </div>
                    @if(Auth::check())
                        <div class="tile-footer text-right " >
                            <a href="{{route('blogHomeView')}}" class="btn btn-default">@lang('general.cancel')</a>
                            <button type="submit" class="btn btn-primary">@lang('general.save')</button>
                        </div>
                    @endif
                </form>

            </div>

        </div>
    </div>

    <script src="//cdn.ckeditor.com/4.13.1/full-all/ckeditor.js"></script>
    <script>
        $(document).ready(function() {
            CKEDITOR.replace( 'txtEditor' );
        });

    </script>

@endsection



@extends( 'admin.layouts.app' )


@section( 'content' )
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.4.2.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


    <style>
        .toggle {
            background: #3094d1;
            width: 90.476px !important;
            height: 50px !important;
        }
        .toggle-off.btn {
            color: #333;
            background-color: #e6e6e6;
            border-color: #adadad;
        }
        .toggle-handle {
            background: #fff;
        }
        .toggle-on.btn {
            padding-right: 24px;
        }

    </style>

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

                        <div class="col-sm-6 col-md-4 ">
                            <label for="comp">Type</label>
                            <select name="type" class="form-control"  required >
                                    <option value="sales">Sales</option>
                                    <option value="rentals">Rentals</option>
                            </select>
                        </div>
                          <div class="col-sm-6 col-md-4 ">
                              <label for="comp">Blog Category</label>
                              <select name="blog_category_id" id="blog_category_id" class="form-control " data-dependent="subCat" required >
                                  <option value="">--- Select Blog Category ---</option>
                                  @foreach ($blog_category as $data)
                                      <option value="{{ $data->id }}">{{ $data->title }}</option>
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
                                <input required id="image"  type="file" placeholder="image" class="form-control" name="image">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="title" style="width: 100%">Normal Blog</label>
                                <input type="checkbox"   name="featured" value="0" id="normal" checked   class="example"  data-onstyle="danger">
                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="title" style="width: 100%">Feature</label>
                                <input type="checkbox" name="featured" id="feature" class="example"  value="2"  data-onstyle="success">
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="title" style="width: 100%">Main Feature</label>
                                <input type="checkbox"   name="featured"  id="mainfeature"  value="1" class="example"  data-onstyle="warning">
                            </div>
                        </div>



                        <div class="col-lg-12" >
                            <div class="form-group">
                                <label>Content</label>
                                <textarea name="content" cols="8" id="txtEditor" style="height: 35px;width: 100%;">

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
    <script>
        $('input.example').on('change', function() {
            $('input.example').not(this).prop('checked', false);
        });

    </script>

    <script type=text/javascript>
        $(document).ready(function() {
            $('select[name="blog_category_id"]').on('change', function() {
                var cat_id = $(this).val();
                alert(cat_id);
                if(cat_id) {
                    $.ajax({
                        url: '/sub_category/load/'+cat_id,
                        type: "GET",
                        dataType: "json",
                        success:function(data) {
                            $('select[name="subCate"]').empty();
                            $.each(data, function(key,value) {
                                $('select[name="subCate"]').append('<option value='+value.id+'> '+value.title+' </option>');
                            });


                        }
                    });
                }else{
                    $('select[name="subCate"]').empty();
                }
            });
        });
    </script>


    <script src="//cdn.ckeditor.com/4.13.1/full-all/ckeditor.js"></script>
    <script>
        $(document).ready(function() {
            CKEDITOR.replace( 'txtEditor' );
        });

    </script>



@endsection



@extends( 'admin.layouts.app' )
@section( 'content' )


    <!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        / Rounded sliders /
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
        .topss_form{
            display:flex;
            flex-direction:column-reverse;
            align-items:flex-start;
            margin:0;
        }
        .main-top-row{
            background: white;
            padding: 18px 10px;
            border-radius: 4px;
            margin: 10px 0;
        }
    </style>

    <link href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
    <script>
        $(document).ready(function() {
            $("#txtEditor").summernote({
                placeholder: 'Description',
                tabsize: 2,
                height: 200
            });
        });
    </script>
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
            </li>
            <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">@lang('packages.add_new')</li>
        </ul>

    </div>
    <div class="row main-top-row">
        <div class="col-md-12">
            @if (session('alert'))
                <div class="alert alert-danger" style="width: 40%">
                    {{ session('alert') }}
                </div>
            @endif
            <form class="form-horizontal" method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="tile-title">Add New Banner</h3>
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                        <div class="form-group">
                            <label>Title</label>
                            <input id="title" value="{{ old('title')}}" type="text" placeholder="Enter title" class="form-control" name="title" required autofocus required="">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" cols="8" id="txtEditor" style="height: 35px;width: 100%;" required>{{ old('description')}}
							</textarea>
                        </div>
                    </div>

                    <div class="col-md-4 mt-4">

                        <h6 style="color: #ee8322;">Banner size must be width:1140 height:550</h6>
                        <input type="file" name="image" >
                        <h5 class="mt-2">show : </h5>
                        <div>


                            <input type="radio" name="video" value="1"> Video<br>
                            <input type="radio" name="video" value="0"> image<br>


                        </div>
                        <div>
                            <label style="vertical-align: sub;">Slider Status:</label>
                            <?php	if($blog == "" ) { ?>
                            <label class="switch">
                                <input name="status" type="checkbox" >
                                <span class="slider"></span>
                            </label>
                            <?php	} else { ?>
                            <?php	if($blog->sliderstatus == 1 ) { ?>

                            <label class="switch">
                                <input name="status" type="checkbox" checked>
                                <span class="slider"></span>
                            </label>
                            <?php } else { ?>
                            <label class="switch">
                                <input name="sliderstatus" type="checkbox" >
                                <span class="slider"></span>
                            </label>
                            <?php } }?>


                        </div>
                        <div id="sorting_div" style="display: none">
                            <label for="title">Sorting:</label>
                            <input  onkeyup="change_sorting()" required="" id="sorting" value="" type="number" placeholder="Sorting" class="form-control" name="sorting">
                        </div>

                    </div>



                </div>
                <h3>Select Competition</h3>
                <div class="row">

                    @foreach($packages as $package)
                        <div class="col-md-3">

                            <div class="form-group topss_form">

                                <label style="border-bottom: 1px solid #eaeaea;padding: 5px;margin: 5px auto;    font-weight: 600;color: #ee8322;">

                                    <input  type="radio" name="package" value="{{$package->id}}">

                                    {{substr($package->name,0,20)}}
                                    @foreach($package->main_img as $key => $img)
                                        @if($key >0)
                                            @break
                                        @endif

                                        <img style="height: 70px; width: 70px;padding: 3px; border: 1px solid #d0d0d0;margin: 0 auto;display: flex;" id="popular_imgse" src="<?php echo url("products/$img->package_id/$img->name");?>">
                                    @endforeach
                                </label>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="tile-footer text-left mt-2">
                    <a class="btn btn-default" href="{{route('companies.admin')}}">Cancel</a>
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>



            </form>
        </div>
    </div>
    <script>
        function change_sorting() {
            var number = $('#sorting').val();
            $.ajax({url: "{{url('/blog/apply_sorting_number/')}}/ "+ number + "/0" , success: function(result){
                    if(result != "Success"){
                        alert(result);
                        $('#sorting').val('')
                    }
                }});
        }
        $('input[type="checkbox"]').click(function(){

            if($(this).prop("checked") == true){

                console.log("Checkbox is checked.");
                $('#sorting_div').css("display", "block");
            }

            else if($(this).prop("checked") == false){

                console.log("Checkbox is unchecked.");
                $('#sorting_div').css("display", "none");
            }

        });
    </script>
@endsection

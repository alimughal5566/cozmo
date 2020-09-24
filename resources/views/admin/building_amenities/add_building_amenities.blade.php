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
        .tile-footer {
            width: 100%;}
        #add_attribs {
            margin-left: 30px;
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
            <li class="breadcrumb-item">Edit Amenities</li>

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

                <form action="{{ route('building_amenities.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-sm-6 col-md-3 col-lg-4">
                            <div class="form-group">
                                <label>Select Title</label>
                                <select name="parent_id" id="" class="form-control">
                                    <option value=""selected>Select Parent</option>
                                    @foreach($data as $datum)
                                    <option value="{{$datum->id}}">{{$datum->building_amenities_title}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-4">
                            <div class="form-group">
                                <label> Building Amenities Title</label>
                                <input onkeyup="change_short()" id="name" type="text" placeholder="Building amenities title" class="form-control" name="building_amenities_title"  value="{{ old('building_amenities_title') }}" required autofocus required="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-4">
                            <div class="form-group">
                                    <label>Listing For Types</label>
                                <input onkeyup="change_second_short()" id="name"  type="text" placeholder="Enter listing for" class="form-control" name="listing_for" value="{{ old('listing_for') }}" required autofocus required="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-4">
                            <div class="form-group">
                                <label>Type</label>
                                <select name="type" id="" class="form-control">
                                    <option value="sales" selected>Sales  </option>
                                    <option value="rentals" selected>Rentals</option>
                                    {{--                            @foreach($data as $daum)--}}
                                    {{--                                <option value="{{$daum->id}}">{{$daum->title}}</option>--}}
                                    {{--                            @endforeach--}}
                                </select>                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-4">
                            <div class="form-group">
                                <label for="title">Images</label>
                                <input required id="images" type="file" placeholder="image" class="form-control" name="images">
                            </div>
                        </div>

                    </div>
                <input id="ticket_1" type="hidden" name="data" class="form form-control" value="" required>

                    @if(Auth::check())
                        <div class="tile-footer text-right ">
                            <a href="{{url('building_amenities')}}" class="btn btn-default">@lang('general.cancel')</a>
                            <button type="submit" class="btn btn-primary">@lang('general.save')</button>
                        </div>
                    @endif

                </form>

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




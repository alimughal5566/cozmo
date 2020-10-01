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

                <form action="{{ route('building_info.store') }}" method="POST">
                    @csrf
                    <div class="row">

                        <div class="col-sm-6 col-md-3 col-lg-4">
                            <div class="form-group">
                                <label>Select Title</label>
                                <select name="building_id" id="" class="form-control">
                                        <option value=""selected>Select building</option>
                                    @foreach($data as $datum)
                                        <option value="{{$datum->id}}">{{$datum->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-4">
                            <div class="form-group">
                                <label>Name</label>
                                <input onkeyup="change_short()" id="name" type="text" placeholder="Enter name" class="form-control" name="name"  value="{{ old('name') }}" required autofocus required="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-4">
                            <div class="form-group">
                                <label>Unit Number</label>
                                <input onkeyup="change_second_short()" id="name"  type="text" placeholder="Enter unit_number" class="form-control" name="unit_number" value="{{ old('unit_number') }}" required autofocus required="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-4">
                            <div class="form-group">
                                <label>Additional Info</label>
                                <input onkeyup="change_second_short()" id="name"  type="text" placeholder="Enter additional_info" class="form-control" name="additional_info" value="{{ old('additional_info') }}" required autofocus required="">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 col-lg-4">
                            <div class="form-group">
                                <label>No of Units</label>
                                <input onkeyup="change_short()" id="name" type="number" placeholder="Enter no_of_units" class="form-control" name="no_of_units"  value="{{ old('no_of_units') }}" required autofocus required="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-4">
                            <div class="form-group">
                                <label>No of Stories</label>
                                <input onkeyup="change_short()" id="name" type="text" placeholder="Enter no_of_stories" class="form-control" name="no_of_stories"  value="{{ old('no_of_stories') }}" required autofocus required="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-4">
                            <div class="form-group">
                                <label>Condos</label>
                                <input onkeyup="change_second_short()" id="name"  type="text" placeholder="condos" class="form-control" name="condos" value="{{ old('condos') }}" required autofocus required="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-4">
                            <div class="form-group">
                                <label>Co Ops</label>
                                <input onkeyup="change_short()" id="name" type="text" placeholder="Enter co_ops" class="form-control" name="co_ops"  value="{{ old('co_ops') }}" required autofocus required="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Multi Familes</label>
                                <select name="multi_familes" id="" class="form-control">
                                    <option value="no" selected>No</option>
                                    <option value="1" selected>1</option>
                                    <option value="2" selected>2</option>
                                    <option value="3" selected>3</option>
                                    {{--                            @foreach($data as $daum)--}}
                                    {{--                                <option value="{{$daum->id}}">{{$daum->title}}</option>--}}
                                    {{--                            @endforeach--}}

                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-4">
                            <div class="form-group">
                                <label>Rental Units</label>
                                <input onkeyup="change_second_short()" id="name"  type="text" placeholder="Enter rental_units" class="form-control" name="rental_units" value="{{ old('rental_units') }}" required autofocus required="">
                            </div>
                        </div>

                <input id="ticket_1" type="hidden" name="data" class="form form-control" value="" required>

                    @if(Auth::check())
                        <div class="tile-footer text-right ">
                            <a href="{{url('building_info')}}" class="btn btn-default">@lang('general.cancel')</a>
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




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
            width: 97%;
            margin-top: -36px;
        }
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

                <form action="{{ route('company.store') }}" method="POST">
                    @csrf
                    <div class="row">

                        <div class="col-sm-6 col-md-3 col-lg-4">
                            <div class="form-group">
                                <label>Name</label>
                                <input onkeyup="change_short()" id="name" type="text" placeholder="Enter name" class="form-control" name="name"  value="{{ old('name') }}" required autofocus required="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-4">
                            <div class="form-group">
                                <label>Street No</label>
                                <input onkeyup="change_second_short()" id="name"  type="text" placeholder="Enter street no" class="form-control" name="street no" value="{{ old('street_no') }}" required autofocus required="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-4">
                            <div class="form-group">
                                <label>Street Name</label>
                                <input onkeyup="change_second_short()" id="name"  type="text" placeholder="Enter street name" class="form-control" name="street name" value="{{ old('street_name') }}" required autofocus required="">
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-sm-6 col-md-3 col-lg-4">
                            <div class="form-group">
                                <label>City</label>
                                <input onkeyup="change_short()" id="name" type="text" placeholder="Enter city" class="form-control" name="city"  value="{{ old('city') }}" required autofocus required="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-4">
                            <div class="form-group">
                                <label>State</label>
                                <input onkeyup="change_short()" id="name" type="text" placeholder="Enter state" class="form-control" name="state"  value="{{ old('state') }}" required autofocus required="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-4">
                            <div class="form-group">
                                <label>Zip Code</label>
                                <input onkeyup="change_second_short()" id="name"  type="text" placeholder="Enter zip code" class="form-control" name="zip code" value="{{ old('zip_code') }}" required autofocus required="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-4">
                            <div class="form-group">
                                <label>Company Address</label>
                                <input onkeyup="change_second_short()" id="name"  type="text" placeholder="Enter company address" class="form-control" name="company address" value="{{ old('company_address') }}" required autofocus required="">
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-sm-6 col-md-3 col-lg-4">
                            <div class="form-group">
                                <label>Company Phone Number</label>
                                <input onkeyup="change_short()" id="name" type="text" placeholder="Enter company phone number" class="form-control" name="company phone number"  value="{{ old('company_phone_number') }}" required autofocus required="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-4">
                            <div class="form-group">
                                <label>Company Email</label>
                                <input onkeyup="change_second_short()" id="name"  type="text" placeholder="Enter company email" class="form-control" name="company email" value="{{ old('company email') }}" required autofocus required="">
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-12" >
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" cols="8" id="txtEditor" value="{{ old('description') }}" style="height: 35px;width: 100%;">

						</textarea>
                        </div>
                    </div>



        </div>

        <input type="button" class="btn-primary btn" id="add_attribs" value="Add More"/>


        <input id="ticket_1" type="hidden" name="data" class="form form-control" value="" required>

        <div class="tile-footer text-right">
            <a class="btn btn-default" href="{{url('companies')}}">Cancel</a>
            <button class="btn btn-primary" type="submit">Save</button>
        </div>

    </div>


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




@extends( 'admin.layouts.app' )
@section( 'content' )
    <style>
        .my-btn {

            border-top: none !important;
        }
        .chosen-container {
            width: 100% !important;
        }

    </style>
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
        /*.myset p {
                padding-left: 3px;
            padding-right: 3px;
        }*/
        .myset p {
            margin-left: 30px;
        }
        .myset h4 {
            font-size: 16px;
            margin-top: 10px;
        }
        / Rounded sliders /
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
        .aloo{
            vertical-align: -webkit-baseline-middle;
            margin: 0;
        }
        .chosen-height{
            height: 40px;
        }
    </style>
    <style>
        tfoot > tr > th:nth-child(3) select {
            opacity: 0;
        }
        tfoot > tr > th:nth-child(4) select{
            opacity: 0;
        }
        tfoot > tr > th:nth-child(7) select{
            opacity: 0;
        }
        tfoot > tr > th:nth-child(8) select{
            opacity: 0;
        }
        tfoot > tr > th:nth-child(9) select{
            opacity: 0;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>

    <script type="text/javascript" src="//cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>

    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
            </li>
            <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">New Property Address</li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal" method="POST" action="{{ route('propertyAddressStore') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="tile">

                    <h3 class="tile-title">New Property Address</h3>
                    @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Select Title</label>
                                <select name="property_id" id="" class="form-control">
                                    <option value=""selected>Select property</option>
                                    @foreach($prop as $datum)
                                        <option value="{{$datum->id}}">{{$datum->title}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                        <div class="form-group">
                                <label for="title">Name Of Street:</label>
                                <input required id="default_location"  type="text" placeholder="name_of_street" class="form-control" name="name_of_street">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="title">Country</label>
                                <input type="text" name="location_country" placeholder="country" class="form-control" id="default_location" readonly>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="title">State:</label>
                                <input type="text" name="location_state" class="form-control" placeholder="States" readonly>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="title">Cities</label>
                                                        <input required id="city"  type="text"  placeholder="city" class="form-control" name="location_city" readonly>
{{--                                <input required id="city"  type="text"  placeholder="city" class="form-control" name="" readonly>--}}
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="title">Zip Code:</label>
                                                        <input required id="zip_code"  type="text" placeholder="zip_code" class="form-control" name="location_zip" readonly>
{{--                                <input required id="zip_code"  type="text" placeholder="zip_code" class="form-control" name="" readonly>--}}
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="title">County:</label>
                                <input required id="county"  type="text" placeholder="county" class="form-control" name="county" >
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="title">Additional Info:</label>
                                <input required id="additional_info"  type="text" placeholder="additional_info" class="form-control" name="additional_info">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="title">Neighborhood:</label>
                                <input required id="neighborhood"  type="text" placeholder="neighborhood" class="form-control" name="neighborhood">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="title">Boroughs:</label>
                                <input required id="boroughs"  type="text" placeholder="boroughs" class="form-control" name="boroughs">
                            </div>
                        </div>
                        <div class="col-sm-12 text-right">
                            <div class="form-group" style="margin-top: 27px !important; justify-content: center">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

        <script>

            function initMap() {

                let autocomplete_location;
                let input_field = document.getElementById('default_location');
                // geographical location types.
                autocomplete_location = new google.maps.places.Autocomplete(input_field, {types: ['geocode']});
                // Set initial restrict to the greater list of countries.
                // autocomplete_location.setComponentRestrictions({'country': ['de']});
                autocomplete_location.setFields(['geometry']);



                let latitude;
                let longitude;
                let country;

                google.maps.event.addListener(autocomplete_location, 'place_changed', function () {
                    let location = autocomplete_location.getPlace();
                    latitude = location.geometry.location.lat();
                    longitude = location.geometry.location.lng();
                    $('input[name="location_lat"]').val(latitude);
                    $('input[name="location_long"]').val(longitude);


                    codeLatLng(latitude,longitude);

                    function codeLatLng(lat, lng) {

                        var latlng = new google.maps.LatLng(lat, lng);
                        let geocoder = new google.maps.Geocoder;
                        geocoder.geocode({'latLng': latlng}, function(results, status) {
                            if (status === google.maps.GeocoderStatus.OK) {
                                let length = results.length - 1;
                                country = results[length].formatted_address;
                                console.log(results);

                                if (results[1]) {
                                    //formatted address
                                    //find country name
                                    for (var i=0; i<results[0].address_components.length; i++) {
                                        for (var b=0;b<results[0].address_components[i].types.length;b++) {
                                            //there are different types that might hold a city admin_area_lvl_1 usually does in come cases looking for sublocality type will be more appropriate
                                            if (results[0].address_components[i].types[b] === "administrative_area_level_1") {
                                                state = results[0].address_components[i];
                                                break;
                                            }

                                            if (results[0].address_components[i].types[b] === "locality") {
                                                //this is the object you are looking for
                                                city = results[0].address_components[i];
                                                break;
                                            }
                                            var Zip;
                                            if (results[0].address_components[i].types[b] === 'postal_code'){
                                                Zip  = results[0].address_components[i].short_name;
                                            }

                                        }
                                    }
                                    //city data
                                    $('input[name="location_city"]').val(city.long_name);
                                    $('input[name="location_country"]').val(country);
                                    $('input[name="location_state"]').val(state.long_name);
                                    $('input[name="location_zip"]').val(Zip);

                                } else {
                                    console.log("No results found");
                                }
                            } else {
                                console.log("Geocoder failed due to: " + status);
                            }})}

                });
            }
        </script>
        <script src="{{asset('js/jquery-simple-validator.min.js')}}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgV-mkhz5pqHJrtexHQXJdV12D8nGefoI&libraries=places&callback=initMap" async defer></script>
@endsection


x

@extends( 'admin.layouts.app' )
@section( 'content' )

    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" />
    <!-- Bootstrap Date Time Picker -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

    <link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.min.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>

    <script src="//cdn.ckeditor.com/4.13.1/full-all/ckeditor.js"></script>
    <script>
        $(document).ready(function() {
            CKEDITOR.replace( 'txtEditor' );
        });

    </script>
    <style>
        .hidden {
            display:none;

        }


        .main_col:nth-child(odd) {
            padding-right: 25px;
        }

        .main_col {
            margin: 0 auto;
            padding-left: 25px;
        }
        .cust_deails {
            background: #f1f1f1;
        }
        .conv {
            padding: 10px 15px 0px;
            position: absolute;
            top: 0;
            font-size: 1rem;
        }
        .camp_title2 {
            font-size: 20px !important;
            font-weight: 600;
            text-align: left !important;
            background-color: #e9ebee33;
            text-transform: initial !important;
            letter-spacing: initial !important;
            color: #000 !important;
            padding: 0 !important;
            border-bottom: none !important;
        }
        .x-e {
            position: absolute;
            width: 100%;
            bottom: 0px;
        }

        .main-cownt {
            background-color: #ee8322;
            width: 100%;
            color: white;
            font-weight: 600;
            display: flex;
            flex-direction: row;
            justify-content: center;
        }
        .cownt-padding {
            padding: 5px 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .anc_link {
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            font-size: 20px;
            color: #ffffff !important;
            text-transform: uppercase;
            background-color: black;
            border-bottom: 4px solid #ee8322;
            display: block;
            padding: 13px 15px;
        }
        .rea {
            color: #ee8322;
            float: right;
            margin-top: -2px;
            font-size: 30px !important;
        }
        .max_details {
            background: #e0dfdf;
        }
        .Cust_col_img {
            min-height: 245px;
            width: 100%;
            max-height: 245px;
            /* min-width: 280px; */
        }
        .ribbon {
            width: 150px;
            height: 150px;
            overflow: hidden;
            position: absolute;
            z-index: 1;
        }
        .ribbon-bottom-right {
            bottom: -10px;
            right: -10px;
        }
        .ribbon::before, .ribbon::after {
            position: absolute;
            z-index: -1;
            content: '';
            display: block;
            border: 5px solid #ab601d;
        }
        .ribbon-bottom-right::before {
            bottom: 0;
            left: 0;
        }
        .ribbon span {
            position: absolute;
            display: block;
            width: 290px;
            padding: 15px 0;
            background-color: #ee8322;
            box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
            color: #fff;
            font: 700 18px/1 'Poppins', sans-serif;
            text-shadow: 0 1px 1px rgba(0, 0, 0, .2);
            text-transform: uppercase;
            text-align: center;
        }
        .ribbon-bottom-right span {
            left: -58px;
            bottom: 30px;
            transform: rotate(-45deg);
        }
        .ribbon::before, .ribbon::after {
            position: absolute;
            z-index: -1;
            content: '';
            display: block;
            border: 5px solid #ab601d;
        }
        .ribbon-bottom-right::after {
            top: 0;
            right: 0;
        }
        .chosen-container-multi .chosen-choices li.search-choice .search-choice-close {
            padding: 0 !important;
        }
        #main_row label , #main_row input {
            text-transform: capitalize;
        }
        .submit_btn button {
            background: #3094d1;
            padding: 7px 20px;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .submit_btn button:hover {
            text-decoration: none;
            -webkit-transform: translate3d(0, -1px, 0);
            transform: translate3d(0, -1px, 0);
            -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);
        }
        .submit_btn {
            text-align: right;
        }
    </style>
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
            </li>
            <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">@lang('packages.add_new')</li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal" method="POST" action="{{ route('properties.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="tile">
                    <h3 class="tile-title">Add New Property</h3>
                    @foreach ($errors->all() as $error)

                        <div class="alert alert-danger">{{ $error }}</div>

                @endforeach
                <!-- {{ print_r(old())}} -->
                    <div class="row" id="main_row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Select Building  </label> <small>optional</small>
                                <select name="buildings" id="" class="form-control">
                                    <option value="">Select </option>
                                    @foreach($building as $datum)
                                        <option value="{{$datum->id}}">{{$datum->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Feature Flag</label>
                                <input type="text" name="feature_flag" value="{{old('feature_flag')}}" class="form-control" placeholder="Feature flag">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="Title" value="{{old('Title')}}" class="form-control" placeholder="Title">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Short Title</label>
                                <input type="text" name="short_title" value="{{old('short_title')}}" class="form-control" placeholder="Short Title">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Short Description</label>
                                <input type="text" name="short_description" value="{{old('short_description')}}" class="form-control" placeholder="Short Description">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Main Image</label>
                                <input type="file" name="main_image" value="{{old('main_image')}}" class="form-control" placeholder="Main Image">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Video</label>
                                <input type="file" accept="video/*" name="video" value="{{old('video')}}" class="form-control" placeholder="Video">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" name="price" value="{{old('price')}}" class="form-control" placeholder="Price" min="0">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Virtual View Video</label>
                                <input type="file" accept="video/*" name="virtual_view_video" value="{{old('virtual_view_video')}}" class="form-control" placeholder="Virtual View Video">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Virtual View 3d</label>
                                <input type="file" name="virtual_view_3d" value="{{old('virtual_view_3d')}}" class="form-control" placeholder="Virtual View 3d">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Virtual View 3d Url</label>
                                <input type="url" name="virtual_view_3d_url" value="{{old('virtual_view_3d_url')}}" class="form-control" placeholder="Virtual View 3d Url">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Virtual View Video Url</label>
                                <input type="url" name="virtual_view_video_url" value="{{old('virtual_view_video_url')}}" class="form-control" placeholder="Virtual View Video Url">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Studio</label>
                                <input type="text" name="studio" value="{{old('studio')}}" class="form-control" placeholder="Studio">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Property Type</label>
                                <select name="property_types" id="mfcheck" class="form-control">
                                    <option value="multi_familes" selected>Multi Familes</option>
                                    <option value="land">Land</option>
                                    <option value="co_ops" >Co_Ops</option>
                                    <option value="house" >House</option>
                                    <option value="condos" >Condos</option>
                                    {{--                            @foreach($data as $daum)--}}
                                    {{--                                <option value="{{$daum->id}}">{{$daum->title}}</option>--}}
                                    {{--                            @endforeach--}}
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Multi Familes</label>
                                <select name="multi_familes" id="textInput" class="form-control">
                                    <option value="" >Select Multi Familes</option>
                                    <option value="one" >One</option>
                                    <option value="two" >Two</option>
                                    <option value="three" >Three</option>
                                    {{--                            @foreach($data as $daum)--}}
                                    {{--                                <option value="{{$daum->id}}">{{$daum->title}}</option>--}}
                                    {{--                            @endforeach--}}
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Property For</label>
                                <select name="property_for" id="" class="form-control">
                                    <option value="rentals" selected>Rentals  </option>
                                    <option value="sales" selected>Sales</option>
                                    {{--                            @foreach($data as $daum)--}}
                                    {{--                                <option value="{{$daum->id}}">{{$daum->title}}</option>--}}
                                    {{--                            @endforeach--}}
                                </select>                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>No Of Bedroom</label>
                                <input type="number" name="no_of_bedroom" value="{{old('no_of_bedroom')}}" class="form-control" placeholder="No Of Bedroom" min="1">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>No Of Bathrooms</label>
                                <input type="number" name="no_of_bathrooms" value="{{old('no_of_bathrooms')}}" class="form-control" placeholder="No Of Bathrooms" min="1">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Status</label>
                                <input type="text" name="status" value="{{old('status')}}" class="form-control" placeholder="Status">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Square Feet</label>
                                <input type="number" name="square_feet" value="{{old('square_feet')}}" class="form-control" placeholder="Square Feet" min="0">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Video Chat</label>
                                <select name="video_chat" id="" class="form-control">
                                    <option value="no" selected>Yes  </option>
                                    <option value="yes" selected>No</option>
                                    {{--                            @foreach($data as $daum)--}}
                                    {{--                                <option value="{{$daum->id}}">{{$daum->title}}</option>--}}
                                    {{--                            @endforeach--}}
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="description" value="{{old('description')}}" class="form-control" placeholder="Description">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Preware Property Type</label>
                                <input type="text" name="preware_property_type" value="{{old('preware_property_type')}}" class="form-control" placeholder="Preware Property Type">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>New Developments</label>
                                <input type="text" name="new_developments" value="{{old('new_developments')}}" class="form-control" placeholder="New Developments">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Income Restricted</label>
                                <input type="text" name="income_restricted" value="{{old('income_restricted')}}" class="form-control" placeholder="Income Restricted">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Maintenance</label>
                                <input type="text" name="maintenance" value="{{old('maintenance')}}" class="form-control" placeholder="Maintenance">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Taxes</label>
                                <input type="number" name="taxes" value="{{old('taxes')}}" class="form-control" placeholder="Taxes">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Year Built From</label>
                                <input type="number" name="year_built_from" value="{{old('year_built_from')}}" class="form-control" placeholder="Year Built From">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Price Per Square Feet</label>
                                <input type="number" name="price_per_square_feet" value="{{old('price_per_square_feet')}}" class="form-control" placeholder="Price Per Square Feet" min="0">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Include Unknow</label>
                                <input type="text" name="include_unknow" value="{{old('include_unknow')}}" class="form-control" placeholder="Include unknow" min="0">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Zoned For School</label>
                                <input type="text" name="zoned_for_school" value="{{old('zoned_for_school')}}" class="form-control" placeholder="Zoned For School">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Zip Code</label>
                                <input type="number" name="zip_code" value="{{old('zip_code')}}" class="form-control" placeholder="Zip Code" min="0">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Is Featured</label>
                                <input type="text" name="is_featured" value="{{old('is_featured')}}" class="form-control" placeholder="Is Featured">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Data Created</label>
                                <input type="date" name="data_created" value="{{old('data_created')}}" class="form-control" placeholder="Data Created">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Date Updated</label>
                                <input type="date" name="date_updated" value="{{old('date_updated')}}" class="form-control" placeholder="Date updated">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Buying Price</label>
                                <input type="number" name="buying_price" value="{{old('buying_price')}}" class="form-control" placeholder="Buying Price" min="0">

                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Selling Price</label>
                                <input type="number" name="selling_price" value="{{old('selling_price')}}" class="form-control" placeholder="Selling Price" min="0">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Custom Boundary</label>
                                <input type="text" name="custom_boundary" value="{{old('custom_boundary')}}" class="form-control" placeholder="custom boundary">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Rental Control</label>
                                <input type="text" name="rental_control" value="{{old('rental_control')}}" class="form-control" placeholder="Rental Control">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Unit Options</label>
                                <input type="text" name="unit_options" value="{{old('unit_options')}}" class="form-control" placeholder="unit options">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>By Owner</label>
                                <input type="text" name="by_owner" value="{{old('by_owner')}}" class="form-control" placeholder="by owner">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Available On</label>
                                <input type="text" name="available_on" value="{{old('available_on')}}" class="form-control" placeholder="available on">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Available Before</label>
                                <input type="text" name="available_before" value="{{old('available_before')}}" class="form-control" placeholder="available on">
                            </div>
                        </div>

{{--                        <div class="col-sm-6 col-md-4 col-lg-4">--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Condos</label>--}}
{{--                                <input type="text" name="condos" value="{{old('condos')}}" class="form-control" placeholder="condos">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-sm-6 col-md-4 col-lg-4">--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Co Ops</label>--}}
{{--                                <input type="text" name="co_ops" value="{{old('co_ops')}}" class="form-control" placeholder="co ops">--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Building New Development Opts</label>
                                <input type="text" name="building_new_development_opts" value="{{old('building_new_development_opts')}}" class="form-control" placeholder="building new development opts">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Floor Plan Image</label>
                                <input type="file" name="floor_plan_image" value="{{old('floor_plan_image')}}" class="form-control" placeholder="floor plan image">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Sales Launch Date</label>
                                <input type="date" name="sales_launch_date" value="{{old('sales_launch_date')}}" class="form-control" placeholder="sales launch date">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Availability</label>
                                <input type="text" name="availability" value="{{old('availability')}}" class="form-control" placeholder="availability">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Cozmo Real Estate Verified</label>
                                <select name="cozmo_real_estate_verified" id="" class="form-control">
                                    <option value="no" selected>No</option>
                                    <option value="yes" selected>Yes</option>
                                    {{--                            @foreach($data as $daum)--}}
                                    {{--                                <option value="{{$daum->id}}">{{$daum->title}}</option>--}}
                                    {{--                            @endforeach--}}
                                </select>                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>No Fee</label>
                                <select name="no_fee" id="" class="form-control">
                                    <option value="no" selected>No</option>
                                    <option value="yes" selected>Yes</option>
                                    {{--                            @foreach($data as $daum)--}}
                                    {{--                                <option value="{{$daum->id}}">{{$daum->title}}</option>--}}
                                    {{--                            @endforeach--}}
                                </select>                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Estimated Monthly Payment</label>
                                <input type="number" name="estimated_monthly_payment" value="{{old('estimated_monthly_payment')}}" class="form-control" placeholder="estimated monthly payment" min="0">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Sponsor Unit</label>
                                <input type="number" name="sponsor_unit" value="{{old('sponsor_unit')}}" class="form-control" placeholder="sponsor unit">
                            </div>
                        </div>
                    </div>

                    @if(Auth::check())
                        <div class="tile-footer text-right " >
                            <a href="{{url('/properties/home')}}" class="btn btn-default">@lang('general.cancel')</a>
                            <button type="submit" class="btn btn-primary">@lang('general.save')</button>
                        </div>
                @endif

                </div>
            </form>
        </div>
    </div>

    <script src="{{url('backend/sweetalerts/sweetalert2.all.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            var email_schedule_info = {};

// 		$('.email-fields-area input,select').prop('disabled', true);

            //var email_time = $('#timepicker').timepicker('setTime', '12:00 AM');

            var email_time = $('#email-time').datetimepicker({
                format: 'LT'
            });

            // for before competition start
            var before_comp_start = $('#reminder-date').datetimepicker({
                format: 'YYYY-MM-DD',
                minDate: "<?php echo date('Y-m-d'); ?>",
                //format: 'DD-MM-YYYY',
                //minDate: "<?php //echo date('d-m-Y'); ?>",
            });

            var competition_date = $('.datepicker').datepicker({
                format: 'dd/mm/yyyy',
                startDate: new Date(),
                autoclose: true
            });

            $('.datepicker').change(function(){
                var comp_date = $(this).val();
                //console.log(before_comp_start.data());
                before_comp_start.data().DateTimePicker.maxDate(moment(comp_date, 'DD/MM/YYYY'));
            });

            var email_day;

            console.log(email_time.val());

            $('input[name="email-interval"]').change(function(){
                var intv_type = $(this).val();
                if (intv_type == 'weekly') {
                    $('#email-weekly-day').removeClass('hidden');
                    $('#num-of-days-area').addClass('hidden');
                }
                else if (intv_type == 'bf-cmpt') {
                    $('#email-weekly-day').addClass('hidden');
                    $('#num-of-days-area').removeClass('hidden');

                }
                else {
                    $('#email-weekly-day').addClass('hidden');
                    $('#num-of-days-area').addClass('hidden');
                }
            });

            $('#day-lst').change(function(){
                email_day = $(this).val();
                console.log(email_day);
            });

            $('#enable-email').change(function(){
                if ($(this).prop('checked')) {
                    $('.email-fields-area input,select').prop('disabled', false);
                    $('.email-fields-area').removeClass('hidden');
                }
                else {
                    // $('.email-fields-area input,select').prop('disabled', true);
                    $('.email-fields-area').addClass('hidden');
                }
            });

            $(document).on('click','.delete_element',function() {
                $(this).parents('.row.elments').remove();

            });
            $('#add_attribs').click(function() {

                var html=`<div class="row elments">
						<div class="col-sm-6 col-md-4 col-lg-4">
							<div class="form-group">
							<label>Label</label>
							<input type="text" name="label[]" value="" class="form-control" placeholder="Enter Label">
						</div>
						</div>
						<div class="col-sm-6 col-md-4 col-lg-4">
							<div class="form-group">
							<label>Attribute</label>
							<input type="text" name="attribute[]" value="" class="form-control" placeholder="Enter Attribute">
						</div>
						</div>
						<div class="col-sm-6 col-md-2 col-lg-2">
							<div class="form-group">
							<label style="visibility:hidden;display: block;">Delete button</label>
							<a href="javascript:void(0)" class="delete_element btn btn-primary btn-sm"><i class="fa fa-trash"></i></a>
						</div>
						</div>
					</div>`;


                $('#add_attrib').append(html);
            });

            $(".chosen").chosen();
            $('#images').change(function(){
                $('#images_form').submit();
            });

            $('#add_images').click(function(){
                $('#images').click();
            });

            $( "body" ).on( "click", ".delete", function () {
                var id = $( this ).data( "id" );
                var form_data = {
                    id: id
                };
                swal({
                    title: "Do you want to delete this?",
                    // text: "@lang('packages.delete_package_msg')",
                    type: 'info',
                    showCancelButton: true,
                    confirmButtonColor: '#F79426',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    showLoaderOnConfirm: true
                }).then( ( result ) => {
                    if ( result.value == true ) {
                        $.ajax( {
                            type: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
                            },
                            url: '<?php echo url("package/delete_attr"); ?>',
                            data: form_data,
                            context:this,
                            success: function ( msg ) {
                                $(this).parents('tr').remove();
                                document.getElementById("attribute_form").reset();

                            }
                        } );

                    }
                });
            });

            $( "body" ).on( "click", ".main_img", function () {
                var id = $( this ).data( "id" );
                var form_data = {
                    id: [id]
                };
                swal({
                    title: "Do you want to make this Image as main Image?",
                    // text: "@lang('packages.delete_package_msg')",
                    type: 'info',
                    showCancelButton: true,
                    confirmButtonColor: '#F79426',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    showLoaderOnConfirm: true
                }).then( ( result ) => {
                    if ( result.value == true ) {
                        $.ajax( {
                            type: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
                            },
                            url: '<?php echo url("package/main_img"); ?>',
                            data: form_data,
                            context:this,
                            success: function ( msg ) {
                                swal( "main image set", '', 'success' )
                            }
                        } );

                    }
                } );


            } );

            $( "body" ).on( "click", "#delete_all_images", function () {


                swal({
                    title: "Do you want to delete all images?",
                    // text: "@lang('packages.delete_package_msg')",
                    type: 'info',
                    showCancelButton: true,
                    confirmButtonColor: '#F79426',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    showLoaderOnConfirm: true
                }).then( ( result ) => {
                    if ( result.value == true ) {
                        $(this).text('Please wait...');
                        var id =[];
                        $('.delet_image').each(function(){
                            id.push($(this).data('id'));
                        });
                        var form_data = {
                            id: id
                        };
                        $.ajax( {
                            type: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
                            },
                            url: '<?php echo url("package/deleteImage"); ?>',
                            data: form_data,
                            context:this,
                            success: function ( msg ) {
                                $(this).text('delete all');
                                $('.view_img ul li').remove();
                            }
                        } );

                    }
                });
            });

            $( "body" ).on( "click", ".delet_image", function () {
                var id = $( this ).data( "id" );
                var form_data = {
                    id: [id]
                };
                swal({
                    title: "Do you want to delete this?",
                    // text: "@lang('packages.delete_package_msg')",
                    type: 'info',
                    showCancelButton: true,
                    confirmButtonColor: '#F79426',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    showLoaderOnConfirm: true
                }).then( ( result ) => {
                    if ( result.value == true ) {
                        $.ajax( {
                            type: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
                            },
                            url: '<?php echo url("package/deleteImage"); ?>',
                            data: form_data,
                            context:this,
                            success: function ( msg ) {
                                $(this).parents('li').remove();

                            }
                        } );

                    }
                });
            });

            $( "body" ).on( "submit", "#images_form", function (e) {
                $(document).find('#add_images').text('Please wait...');
                e.preventDefault();
                var formData = new FormData($(this)[0]);
                $.ajax( {
                    async: false,
                    cache: false,
                    contentType: false,
                    enctype: 'multipart/form-data',
                    processData: false,
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
                    },
                    url: '<?php echo url("package/add_images"); ?>',
                    data: formData,
                    success: function ( msg ) {
                        if(msg !="error"){
                            $.each(msg,function(i,image){
                                var html='<li>\
						<a href="javascipt:void(0)">\
							<div class="img_sec">\
								<div class="img">\
									<img class="img-fluid" src="'+image.url+'">\
								</div>\
								<div class="view_img_btn">\
									<button type="button">View</button>\
									<button class="delet_image" data-id="'+image.id+'" type="button">Delete</button>\
									<button class="main_img" data-id="'+image.id+'" type="button" style="margin-left: 2px; margin-top: 5px;">Set Main Image </button>\
								</div>\
							</div>\
						</a>\
					</li>';
                                $('.view_img ul').append(html);
                            });

                            swal( "Successfully Uploaded", '', 'success' );
                            document.getElementById("images_form").reset();
                            $(document).find('#add_images').text('Upload images');
                            $('#package_id_images').val('');
                            $('#images').val('');
                        }else{
                            swal( "Upload image only ", '', 'error' );
                            $(document).find('#add_images').text('Upload images');
                        }
                    },
                    error: function(){
                        $(document).find('#add_images').text('Upload images');
                    }
                });
            });



        });

        // function add() {
        //     var new_chq_no = parseInt($('#total_chq').val()) + 1;
        //     var new_input = ` <div class="row" id= "new_` + new_chq_no + `"> <div class="col-md-4">
        //     <label>No of Tickets</label>
        //     <input id= "ticket_` + new_chq_no + `" onkeyup="ticket_validation(` + new_chq_no + `)" type="number" name="no_of_tickets[]" class="form form-control" required>
        //     </div>
        //     <h5 style="margin-top:35px;">Purchased will get :</h5>
        //     <div class="col-md-4">
        //     <label>Discount Percentage</label>
        //     <input id= "discount_` + new_chq_no + `" onkeyup="dis_validation(` + new_chq_no + `)" type="number" name="discount_percentage[]" class="form form-control" required>
        //     </div></div>`;

        //     $('#new_chq').append(new_input);

        //     $('#total_chq').val(new_chq_no);
        // }

        // function remove() {
        //     var last_chq_no = $('#total_chq').val();

        //     if (last_chq_no > 1) {
        //     $('#new_' + last_chq_no).remove();
        //     $('#total_chq').val(last_chq_no - 1);
        //     }
        // }


        function ticket_validation(id) {
            var ticket_id = "ticket_"+id;
            var pre_ticket_id = "ticket_"+id-1;
            var current_value = document.getElementById(ticket_id);
            var previous_value = document.getElementById(pre_ticket_id);
            if(current_value.value == previous_value.value){
                document.getElementById(ticket_id).val('');
                alert("Offer for this Number Of Tickets already added.");
            }
        }

        function dis_validation(id) {
            var discount_id = "discount_"+id;
            var pre_discount_id = "discount_"+id-1;
            var current_value = document.getElementById(discount_id);
            var previous_value = document.getElementById(pre_discount_id);
            if(current_value.value == previous_value.value){
                document.getElementById(discount_id).val('');
                alert("Offer for this Number Of Tickets already added.");
            }
        }

        function change_name(){
            $('#preview_text_name').html($('#get_preview_text_name').val());
        }
        function change_short(){
            $('#preview_text_short').html($('#get_preview_text_short').val());
        }
        function change_second_short(){
            $('#preview_text_second_short').html($('#get_preview_text_second_short').val());
        }
    </script>
    <script>$('#mfcheck').change(function() {
            if( $(this).val() == 'multi_familes') {
                $('#textInput').prop( "disabled", false );
            } else {
                $('#textInput').prop( "disabled", true );
            }
        });</script>

@endsection




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
            <li class="breadcrumb-item"><a href="{{route('properties.home')}}">Properties</a>
            </li>
            <li class="breadcrumb-item">Edit Blog Category</li>        </ul>
    </div>


    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal" method="POST" action="{{ route('properties.update') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="tile">
                    <h3 class="tile-title">Edit Property</h3>
                    @foreach ($errors->all() as $error)

                        <div class="alert alert-danger">{{ $error }}</div>

                @endforeach
                <!-- {{ print_r(old())}} -->
                    <div class="row" id="main_row">

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Title</label>
                                <input id="title" type="text" class="form-control is-invalid" value="{{$user->title}}" name="title" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Short Title</label>
                                <input id="short_title" type="text" class="form-control is-invalid" value="{{$user->short_title}}" name="short_title" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Short Description</label>
                                <input id="short_description	" type="text" class="form-control is-invalid" value="{{$user->short_description	}}" name="short_description	" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Main Image</label>
                                <input type="file" name="main_image" value="" class="form-control" placeholder="Main Image">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Video</label>
                                <input type="file" accept="video/*" name="video" value="" class="form-control" placeholder="Video">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Price</label>
                                <input id="price	" type="number" class="form-control is-invalid" value="{{$user->price	}}" name="price	" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Buildings</label>
                                <input id="buildings	" type="number" class="form-control is-invalid" value="{{$user->buildings	}}" name="buildings	" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Virtual View Video</label>
                                <input type="file" accept="video/*" name="virtual_view_video" value="" class="form-control" placeholder="Virtual View Video">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Virtual View 3d</label>
                                <input type="file" name="virtual_view_3d" value="" class="form-control" placeholder="Virtual View 3d">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Virtual View 3d Url</label>
                                <input type="url" name="virtual_view_3d_url" value="{{$user->virtual_view_3d_url}}" class="form-control" placeholder="Virtual View 3d Url">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Virtual View Video Url</label>
                                <input type="url" name="virtual_view_video_url" value="{{$user->virtual_view_video_url}}" class="form-control" placeholder="virtual_view_video_url">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Studio</label>
                                <input id="studio" type="text" class="form-control is-invalid" value="{{$user->studio}}" name="studio" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Property Type</label>
                                <input id="property_type" type="text" class="form-control is-invalid" value="{{$user->property_type	}}" name="property_type	" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Property For</label>
                                <input id="property_for" type="text" class="form-control is-invalid" value="{{$user->property_for	}}" name="property_for	" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>No Of Bedroom</label>
                                <input id="no_of_bedroom" type="number" class="form-control is-invalid" value="{{$user->no_of_bedroom	}}" name="no_of_bedroom	" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>No Of Bathroom</label>
                                <input id="no_of_bathrooms" type="number" class="form-control is-invalid" value="{{$user->no_of_bathrooms	}}" name="no_of_bathrooms	" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Status</label>
                                <input id="status" type="text" class="form-control is-invalid" value="{{$user->status	}}" name="status	" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Square Feet</label>
                                <input id="square_feet" type="number" class="form-control is-invalid" value="{{$user->square_feet	}}" name="square_feet	" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Video Chat</label>
                                <input type="file" accept="video/*" name="video_chat" value="" class="form-control" placeholder="Video Chat">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Description</label>
                                <input id="description" type="text" class="form-control is-invalid" value="{{$user->description	}}" name="description	" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Preware Property Type</label>
                                <input id="preware_property_type" type="text" class="form-control is-invalid" value="{{$user->preware_property_type		}}" name="preware_property_type		" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>New Developments</label>
                                <input id="new_developments" type="text" class="form-control is-invalid" value="{{$user->new_developments}}" name="new_developments		" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Income Restricted</label>
                                <input id="income_restricted" type="text" class="form-control is-invalid" value="{{$user->income_restricted		}}" name="income_restricted		" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Maintenance</label>
                                <input id="maintenance" type="text" class="form-control is-invalid" value="{{$user->maintenance		}}" name="maintenance		" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Taxes</label>
                                <input id="taxes" type="text" class="form-control is-invalid" value="{{$user->taxes		}}" name="taxes		" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Year Built Form</label>
                                <input id="year_built_from" type="number" class="form-control is-invalid" value="{{$user->year_built_from		}}" name="year_built_from		" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Price Per Square Feet</label>
                                <input id="price_per_square_feet" type="number" class="form-control is-invalid" value="{{$user->price_per_square_feet		}}" name="price_per_square_feet		" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Include Unknow</label>
                                <input id="include_unknow" type="text" class="form-control is-invalid" value="{{$user->include_unknow		}}" name="include_unknow		" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Zoned For School</label>
                                <input id="zoned_for_school" type="text" class="form-control is-invalid" value="{{$user->zoned_for_school		}}" name="zoned_for_school		" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Zip Code</label>
                                <input id="zip_code" type="number" class="form-control is-invalid" value="{{$user->zip_code		}}" name="zip_code		" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Is Featured</label>
                                <input id="is_featured" type="text" class="form-control is-invalid" value="{{$user->is_featured			}}" name="is_featured			" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Data Created</label>
                                <input id="date_created	" type="date" class="form-control is-invalid" value="{{$user->date_created			}}" name="date_created			" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Data Updated</label>
                                <input id="date_updated	" type="data" class="form-control is-invalid" value="{{$user->date_updated			}}" name="date_updated			" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Buying Price</label>
                                <input id="buying_price" type="number" class="form-control is-invalid" value="{{$user->buying_price}}"name="buying_price" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Selling Price</label>
                                <input id="selling_price" type="number" class="form-control is-invalid" value="{{$user->selling_price	}}"name="selling_price" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>custom boundary</label>
                                <input id="custom_boundary" type="text" class="form-control is-invalid" value="{{$user->custom_boundary	}}"name="custom_boundary" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Rental Control</label>
                                <input id="rental_control" type="text" class="form-control is-invalid" value="{{$user->rental_control	}}"name="rental_control" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>unit options</label>
                                <input id="unit_options" type="text" class="form-control is-invalid" value="{{$user->unit_options	}}"name="unit_options" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>By Owner</label>
                                <input id="by_owner" type="text" class="form-control is-invalid" value="{{$user->by_owner	}}"name="by_owner" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>available on</label>
                                <input id="available_on" type="text" class="form-control is-invalid" value="{{$user->available_on	}}"name="available_on" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Available Before</label>
                                <input id="available_before" type="text" class="form-control is-invalid" value="{{$user->available_before	}}"name="available_before" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Condons</label>
                                <input id="condos" type="text" class="form-control is-invalid" value="{{$user->condos	}}"name="condos" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Co Ops</label>
                                <input id="co_ops" type="text" class="form-control is-invalid" value="{{$user->co_ops	}}"name="co_ops" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Multi Families</label>
                                <input type="file" multiple name="multi_families" value="" class="form-control" placeholder="multi families">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Building New Development Opts</label>
                                <input id="building_new_development_opts" type="text" class="form-control is-invalid" value="{{$user->building_new_development_opts	}}"name="building_new_development_opts" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>floor plan image</label>
                                <input type="file" name="floor_plan_image" value="" class="form-control" placeholder="floor plan image">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Sales Launch Date</label>
                                <input id="sales_launch_date" type="date" class="form-control is-invalid" value="{{$user->sales_launch_date	}}"name="sales_launch_date" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Availability</label>
                                <input id="availability" type="text" class="form-control is-invalid" value="{{$user->availability	}}"name="availability" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Cozmo Real State Verified</label>
                                <input id="cozmo_real_estate_verified" type="text" class="form-control is-invalid" value="{{$user->cozmo_real_estate_verified	}}"name="cozmo_real_estate_verified" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>No Fee Rentals</label>
                                <input id="no_fee_rentals" type="text" class="form-control is-invalid" value="{{$user->no_fee_rentals	}}"name="no_fee_rentals" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Estimated Monthly Payments</label>
                                <input id="estimated_monthly_payment" type="number" class="form-control is-invalid" value="{{$user->estimated_monthly_payment	}}"name="estimated_monthly_payment" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label>Sponsor Unit</label>
                                <input id="sponsor_unit" type="number" class="form-control is-invalid" value="{{$user->sponsor_unit	}}"name="sponsor_unit" required >
                            </div>
                        </div>






                        <!--<div class="col-sm-6 col-md-3 col-lg-4">-->
                        <!--	<div class="form-group">-->
                    <!--		<label>@lang('packages.name')</label>-->
                    <!--		<input onkeyup="change_name()" id="get_preview_text_name" value="{{ old('name')}}" type="text" placeholder="@lang('packages.name')" class="form-control" name="name" required autofocus required="">-->
                        <!--	</div>-->
                        <!--</div>-->


                        <!--<div class="col-sm-6 col-md-3 col-lg-8">-->


                        <!--	<label>Select Video</label>-->
                        <!--	<input type="file" name="file">-->
                        <!--</div>-->

                    <!-- <div class="col-sm-6 col-md-3 col-lg-3">
						<div class="form-group">
							<label>Ticket Price</label>

							<input id="price"  value="{{ old('price')}}" type="number" placeholder="@lang('packages.price')" class="form-control" name="price" required="">
						</div>
					</div> -->
                    <!-- <div class="col-sm-6 col-md-3 col-lg-3">
						<div class="form-group">
							<label>Start Date</label>
							<input autocomplete="off" type="text" value="{{ old('start_date')}}"  name="start_date" class="form-control datepicker" placeholder="Select Date" required="">
						</div>
					</div>
					<div class="col-sm-6 col-md-3 col-lg-3">
						<div class="form-group">
							<label>End Date</label>
							<input autocomplete="off" type="text" value="{{ old('end_date')}}"  name="end_date" class="form-control datepicker" placeholder="Select Date" required="">
						</div>
					</div> -->
                    <!-- <div class="col-sm-6 col-md-3 col-lg-3">
						<div class="form-group">
							<label>Maximum Tickets</label>
							<input   value="{{ old('max_tickets')}}" type="number" placeholder="Maximum Tickets" class="form-control" name="max_tickets" required="">
						</div>
					</div> -->
                        <!-- <div class="col-sm-12">
                            <div class="form-group">
                                <label><b>Featured: </b></label>
                                <label><input type="radio" name="featured" value="1"> Yes</label>
                                <label><input type="radio" name="featured" checked value="0"> No</label>
                            </div>
                        </div> -->
                        <!--               <div class="col-sm-6 col-md-3 col-lg-4">-->
                        <!--	<div class="form-group">-->
                        <!--		<label>Short Description One</label>-->
                    <!--		<input onkeyup="change_short()" id="get_preview_text_short" type="text" placeholder="Short Description One" class="form-control" name="short_description_one"  value="{{ old('short_description_one') }}" required autofocus required="">-->
                        <!--	</div>-->
                        <!--</div>-->
                        <!--<div class="col-sm-6 col-md-3 col-lg-4">-->
                        <!--	<div class="form-group">-->
                        <!--		<label>Short Description Two</label>-->
                    <!--		<input onkeyup="change_second_short()" id="get_preview_text_second_short"  type="text" placeholder="Short Description Two" class="form-control" name="short_description_two" value="{{ old('short_description_two') }}" required autofocus required="">-->
                        <!--	</div>-->
                        <!--</div>-->
                        <!--<div class="col-sm-6 col-md-3 col-lg-4">-->
                        <!--	<div class="form-group">-->
                        <!--		<label>Name for social media</label>-->
                    <!--		<input id="name"  type="text" placeholder="Enter name for social media" class="form-control" name="social_name"  value="{{ old('social_name') }}" required autofocus required="">-->
                        <!--	</div>-->
                        <!--</div>-->
                        <!--<div class="col-sm-6 col-md-3 col-lg-4">-->
                        <!--	<div class="form-group">-->
                        <!--		<label>Description for social media</label>-->
                    <!--<input id="name"  type="text" placeholder="Enter description for social media" class="form-control" name="social_description" value="{{ old('social_description') }}" required autofocus required="">-->
                        <!--		<textarea class="form-control" name="social_description"></textarea>-->
                        <!--	</div>-->
                        <!--</div>-->

                        <!--	<div class="col-sm-6 col-md-3 col-lg-4">-->
                        <!--	<div class="form-group">-->
                        <!--		<label>URL Category</label>-->
                        <!--	</select>-->
                        <!--</div>-->
                        <!--<div class="col-lg-6 col-sm-12 main_col">-->
                        <!--     <div class="row cust_wi">-->
                        <!--       <div class="col-lg-6 col-sm-12 cust_deails pr-0 pl-0">-->
                        <!--         <div class="conv">-->
                        <!--       <h3 class="camp_title2" id="preview_text_name">Demo Title</h3>-->
                        <!--                   <p class="mb-0" id="preview_text_short">Demo short description</p>-->
                        <!--                   <p class="mb-0" id="preview_text_second_short">Demo short description two</p>-->
                        <!--       <p class="mb-0">CHOICE OF COLOURS</p>-->
                        <!--       </div>-->
                        <!--       <div class="x-e">-->

                        <!--                                                                         <div class="main-cownt">-->
                        <!--                                       <div class="cownt-padding">-->
                        <!--                                          <span class="days" id="day4">28</span>-->
                        <!--                                          <div class="smalltext1">Days</div>-->
                        <!--                                       </div>-->
                        <!--                                       <div class="cownt-padding">-->
                        <!--                                          <span class="hours" id="hour4">13</span>-->
                        <!--                                          <div class="smalltext1">Hours</div>-->
                        <!--                                       </div>-->
                        <!--                                       <div class="cownt-padding">-->
                        <!--                                          <span class="minutes" id="minute4">9</span>-->
                        <!--                                          <div class="smalltext1">Minutes</div>-->
                        <!--                                       </div>-->
                        <!--                                       <div class="cownt-padding">-->
                        <!--                                          <span class="seconds" id="second4">3</span>-->
                        <!--                                          <div class="smalltext1">Seconds</div>-->
                        <!--                                       </div>-->
                        <!--                                       <p id="time-up429"></p>-->
                        <!--                                    </div>-->

                        <!--                                  <a class="anc_tab" href="https://prizemaker.com/competition/win-a-car-competition/bmw-2-series-218-m-sport-auto">-->
                        <!--                                 <div class="anc_link">-->
                        <!--                                 <span>Enter Now<i class="fa fa-angle-right rea"></i></span>-->

                        <!--                              </div>-->
                        <!--                              </a>-->
                        <!--                              </div>-->

                        <!--       </div>-->
                        <!--       <div class="col-lg-6 col-sm-12 max_details pr-0 pl-0">-->
                        <!--         <div class="r_image">-->
                    <!--                                                                     <a href="#"><img class="img-fluid Cust_col_img" src="{{url('images/No-Image.png')}}" alt=""></a>-->

                        <!--           </div>-->

                        <!--       </div>-->
                        <!--     </div>-->
                        <!--   </div>-->
                        <!--<div class="col-lg-12" >-->
                        <!--	<div class="form-group">-->
                        <!--	<label>Description</label>-->
                    <!--	<textarea name="description" cols="8" id="txtEditor" value="{{ old('description') }}" style="height: 35px;width: 100%;">-->

                        <!--	</textarea>-->
                        <!--	</div>-->
                        <!--</div>-->



                    </div>

                    <div class="submit_btn">
                        <button type="button">Update</button>
                    </div>

                    <!--<h3 class="tile-title">Competition Statistics</h3>-->

                    <!--<div id="add_attrib">-->
                    <!--	<div id="append_it">-->
                <!--		@if(old('label'))-->
                <!--		@foreach(old('label') as $key => $val)-->
                    <!--	<div class="row elments">-->
                    <!--		<div class="col-sm-6 col-md-4 col-lg-4">-->
                    <!--			<div class="form-group">-->
                    <!--			<label>Label</label>-->
                <!--			<input type="text" name="label[]" value="{{ $val }}" class="form-control" placeholder="Enter Label">		-->
                    <!--		</div>-->
                    <!--		</div>-->
                    <!--		<div class="col-sm-6 col-md-4 col-lg-4">-->
                    <!--			<div class="form-group">-->
                    <!--			<label>Attribute</label>-->
                <!--			<input type="text" name="attribute[]" value="{{ old('attribute')[$key] }}" class="form-control" placeholder="Enter Attribute">		-->
                    <!--		</div>-->
                    <!--		</div>-->
                    <!--		<div class="col-sm-6 col-md-2 col-lg-2">-->
                    <!--			<div class="form-group">-->
                    <!--			<label style="visibility:hidden;display: block;">Delete button</label>-->
                    <!--			<a href="javascript:void(0)"  class="delete_element btn btn-primary btn-sm"><i class="fa fa-trash"></i></a>-->
                    <!--		</div>-->
                    <!--		</div>-->
                    <!--	</div>-->
                    <!--	@endforeach-->
                    <!--	@else-->
                    <!--	<div class="row">-->
                    <!--		<div class="col-sm-6 col-md-4 col-lg-4">-->
                    <!--			<div class="form-group">-->
                    <!--			<label>Label</label>-->
                    <!--			<input type="text" name="label[]" value="" class="form-control" placeholder="Enter Label">		-->
                    <!--		</div>-->
                    <!--		</div>-->
                    <!--		<div class="col-sm-6 col-md-4 col-lg-4">-->
                    <!--			<div class="form-group">-->
                    <!--			<label>Attribute</label>-->
                    <!--			<input type="text" name="attribute[]" value="" class="form-control" placeholder="Enter Attribute">		-->
                    <!--		</div>-->
                    <!--		</div>-->
                    <!--	</div>-->
                    <!--	@endif-->
                    <!--	</div>-->
                    <!--</div>-->

                    <!--<input type="button" class="btn-primary btn" id="add_attribs" value="Add More"/>-->

                    <!--<hr>-->
                    <!--                <h3 style="margin-top:15px;">Discount Offers</h3>-->
                    <!--<button type="button" onclick="add()">Add</button>-->
                    <!--<button type="button" onclick="remove()">Remove</button>-->
                    <!--                <div id="new_chq">-->
                    <!--    				<div class="row">-->
                    <!--    				    <div class="col-md-4">-->
                    <!--    				        <label>No of Tickets</label>-->
                    <!--<input id="ticket_1" type="hidden" name="data" class="form form-control" value="" required>-->
                    <!--    				    </div>-->

                    <!--    				    <h5 style="margin-top:35px;">Purchased will get :</h5>-->

                    <!--    				    <div class="col-md-4">-->
                    <!--    				        <label>Discount Percentage</label>-->
                    <!--    				        <input id="discount_1" type="number" name="discount_percentage[]" class="form form-control">-->
                    <!--    				    </div>-->

                    <!--    				    <div class="col-md-4">-->
                    <!--    				        <label>No of Tickets</label>-->
                    <!--    				        <input id="ticket_1" type="number" name="no_of_tickets[]" class="form form-control">-->
                    <!--    				    </div>-->

                    <!--    				    <h5 style="margin-top:35px;">Purchased will get :</h5>-->

                    <!--    				    <div class="col-md-4">-->
                    <!--    				        <label>Discount Percentage</label>-->
                    <!--    				        <input id="discount_1" type="number" name="discount_percentage[]" class="form form-control">-->
                    <!--    				    </div>-->

                    <!--<input type="hidden" value="1" id="total_chq">-->
                    <!--    				</div>-->
                    <!--				</div>-->
                    <!--				<hr>-->
                    <!--				<h3 style="margin-top:15px;">Email Scheduling Options</h3>-->

                    <!--				<div class="row">-->

                    <!--					<div class="col-sm-6 col-md-4 col-lg-4">-->
                    <!--						<div class="form-group">-->
                    <!--							<input type="checkbox" name="enable-email" id="enable-email" /> <span>Send Email Information to Subscribers</span>-->
                    <!--						</div>-->
                    <!--						<div class="email-fields-area hidden">-->
                    <!--							<div class="form-group">-->
                    <!--								<label>Time</label>-->
                    <!--
<!--								<input type="text" name="email-time" id="email-time" value="" class="form-control" placeholder="Email Timmings">-->
                    <!--								-->
                    <!--								<div class="input-group bootstrap-timepicker timepicker">-->
                <!--									<input type="text" id="email-time" name="email-time" value="<?php echo date('H:i A') ; ?>" class="form-control" />-->
                    <!--								</div>-->

                    <!--							</div>-->
                    <!--							<div class="form-group">-->
                <!--{{--								<input type="radio" name="email-interval" id="email-interval-once"    value="once"    val="1" /> Once (After set time)<br>							--}}-->
                    <!--								<input type="radio" name="email-interval" id="email-interval-daily"   value="daily"   val="2" checked /> Daily <br>-->
                <!--{{--								<input type="radio" name="email-interval" id="email-interval-weekly"  value="weekly"  val="3" /> Weekly <br>--}}-->
                <!--{{--								<input type="radio" name="email-interval" id="email-interval-bf-cmpt" value="bf-cmpt" val="4" /> Before Competition Start (At fixed date) <br>--}}-->

                    <!--							</div>-->
                    <!--							<div class="form-group hidden" id="email-weekly-day">-->
                    <!--								<div>-->
                    <!--								<label>Select Day</label>-->
                    <!--								</div>-->
                    <!--								<select id ="day-lst" name ="day-lst" class="form-control">-->
                    <!--									<option value="1">Saturday</option>-->
                    <!--									<option value="2">Sunday</option>-->
                    <!--									<option value="3">Monday</option>-->
                    <!--									<option value="4">Tuesday</option>-->
                    <!--									<option value="5">Wednesday</option>-->
                    <!--									<option value="6">Thursday</option>-->
                    <!--									<option value="7">Friday</option>-->

                    <!--								</select>-->
                    <!--							</div>-->

                    <!--							<div class="form-group hidde" id="num-of-days-area">-->
                    <!--								<div>-->
                    <!--								<label>Select Day</label>-->
                    <!--								</div>-->
                    <!--<input type="number" name="num-of-days" class="form form-control" id="num-of-days" value="7" min="1" step="1" />-->
                <!--								<input type="text" id="reminder-date" name="reminder-date" value="<?php echo date('Y-m-d'); ?>" class="form form-control" />-->
                    <!--							</div>-->

                    <!--						</div>-->
                    <!--					</div>-->
                    <!--				</div>-->

                    <!--				<div class="row">-->
                    <!--				    <div class="col-md-4">-->
                    <!--				    <label>Meta Title</label>-->
                    <!--				    <input type="text" name="meta_title" class="form form-control" />-->
                    <!--				    </div>-->
                    <!--				    <div class="col-md-4">-->
                    <!--				    <label>Meta Description</label>-->
                    <!--				    <textarea class="form-control" name="meta_description"></textarea>-->
                    <!--				    </div>-->
                    <!--				    <div class="col-md-4">-->
                    <!--				    <label>Image Tags <small> (Single image use first tag)</small></label>-->
                    <!--				    <textarea class="form-control" name="meta_keyword"></textarea>-->
                    <!--				    </div>-->

                    <!--				    <div class="col-md-4">-->
                    <!--				    <label>Facebook Free Entry Card Line One</label>-->
                    <!--				    <input type="text" name="fem_box_line1" class="form form-control" />-->
                    <!--				    </div>-->
                    <!--				    <div class="col-md-4">-->
                    <!--				    <label>Facebook Free Entry Card Line Two</label>-->
                    <!--				    <input type="text" name="fem_box_line2" class="form form-control" />-->
                    <!--				    </div>-->
                    <!--				    <div class="col-md-4">-->
                    <!--				    <label>Facebook Free Entry Card Line Three</label>-->
                    <!--				    <input type="text" name="fem_box_line3" class="form form-control" />-->
                    <!--				    </div>-->
                    <!--				</div>-->

                    <!--<div class="tile-footer text-right">-->
                <!--	<a class="btn btn-default" href="{{url('product')}}">Cancel</a>-->
                    <!--	<button class="btn btn-primary" type="submit">Save</button>-->
                    <!--</div>-->

                </div>
            </form>

            <!--	<section class="cust_back_color">-->

            <!--	<div class="container">-->
            <!--		<h3>Competition Images</h3>-->
            <!--		<div class="img_dlt">-->
            <!--			<a class="btn btn-primary" id="delete_all_images" href="#">delete all</a>-->
            <!--			<a class="btn btn-primary" id="add_images" href="#">Upload images</a>-->
        <!--			<form id="images_form" action="{{ url('package/add_images')}}" action="multipart/form-data" method="post">-->
            <!--				<label style="display: none;">-->
            <!--				<input id="images" type="file" multiple name="images[]">-->
            <!--					<input  type="hidden" required class="form-control" name="package_id" id="package_id_images" value="">-->
            <!--			</label>-->
            <!--               </form>-->

            <!--		</div>-->

            <!--		<div class="view_img">-->
            <!--			<ul>-->
        <!--				<?php $package_image = DB::table('package_images')->where('package_id',0)->get(); ?>-->
        <!--				@if($package_image=="")-->
            <!--				@else-->
        <!--				@foreach($package_image as $img)-->
            <!--				<li>-->
            <!--					<a href="#">-->
            <!--						<div class="img_sec">-->
            <!--							<div class="img">-->
        <!--								<img class="img-fluid" src="<?php echo url("products/$img->package_id/$img->name");?>">-->
            <!--							</div>-->
            <!--							<div class="view_img_btn">-->
            <!--								<button class="btn btn-primary" type="button">View</button>-->
        <!--								<button class="delet_image btn btn-primary" data-id="{{ $img->id }}" type="button">Delete</button>-->
        <!--								<button class="main_img btn btn-primary" data-id="{{ $img->id }}" type="button" style="margin-left: 2px; margin-top: 5px;">Set Main Image</button>-->
            <!--							</div>-->
            <!--						</div>-->
            <!--					</a>-->
            <!--				</li>-->
            <!--				@endforeach-->
            <!--				@endif-->
            <!--			</ul>-->
            <!--		</div>-->
            <!--	</div>-->
            <!--</section>-->
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

@endsection




@extends( 'admin.layouts.app' )

@section( 'content' )

{{--    <link rel="stylesheet" href="{{asset('plugins/weekline/styles/cleanslate.css')}}"/>--}}
{{--    <link rel="stylesheet" href="{{asset('plugins/weekline/styles/jquery.weekLine.css')}}"/>--}}

{{--    <script  src="http://code.jquery.com/jquery-latest.min.js"></script>--}}

{{--    <script src="{{asset('plugins/weekline/scripts/jquery.weekLine.min.js')}}"></script>--}}

{{----}}
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.css">--}}

{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
{{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>--}}

{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.proto.js"></script>--}}

    {{--    --}}


{{----}}

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
{{----}}

    <div class="app-title">

        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
            </li>
            <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item"><a href="{{route('rentalPriceHistoryHomeView')}}">All Rental Price Histories</a>
            </li>
            <li class="breadcrumb-item">Add Rental Price History</li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">

            <div class="tile">
                <h3 class="tile-title ">Add New Rental Price History</h3>
                <form class="form-horizontal" method="POST" action="{{ route('propertyOpenDays.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-6 col-md-4 ">
                            <label for="comp">Select Property</label>
                            <select name="property_id" class="form-control"  required >

                                @foreach ($property as $prop)
                                    <option value="{{ $prop->id }}">{{ $prop->title }}</option>
                                @endforeach
                            </select>





                            {{--                        <input id="file" type="hidden" class="form-control" name="id" value="{{$user->id}}">--}}


{{--                        week days --}}
{{--                     <div id="weekCal2"  >--}}
{{--
 <div   >--}}
{{--                         <select name="days" multiple>--}}
{{--                             <option value="">sat</option>--}}
{{--                             <option value="">sun</option>--}}
{{--                             <option value="">mon</option>--}}
{{--                             <option value="">tues</option>--}}
{{--                         <option name="selectedDays" id="selectedDays"></option>--}}
{{--                         </select>--}}
{{--                     </div>--}}
                    </div>

{{--                        <div class="row">     <!-- Default inline 1-->--}}
{{--                            <div class="custom-control custom-checkbox custom-control-inline">--}}
{{--                                <input type="checkbox" name="days[]" value="monday" class="custom-control-input" id="defaultInline1">--}}
{{--                                <label class="custom-control-label" for="defaultInline1">Monday</label>--}}
{{--                            </div>--}}

{{--                            <!-- Default inline 2-->--}}
{{--                            <div class="custom-control custom-checkbox custom-control-inline">--}}
{{--                                <input type="checkbox" name="days[]" value="tuesday" class="custom-control-input" id="defaultInline2">--}}
{{--                                <label class="custom-control-label" for="defaultInline2">Tuesday</label>--}}
{{--                            </div>--}}

{{--                            <!-- Default inline 3-->--}}
{{--                            <div class="custom-control custom-checkbox custom-control-inline">--}}
{{--                                <input type="checkbox"  name="days[]" value="wednesday" class="custom-control-input" id="defaultInline3">--}}
{{--                                <label class="custom-control-label" for="defaultInline3">Wednesday</label>--}}
{{--                            </div>--}}

{{--                            <div class="custom-control custom-checkbox custom-control-inline">--}}
{{--                                <input type="checkbox"  name="days[]" value="thursday" class="custom-control-input" id="defaultInline4">--}}
{{--                                <label class="custom-control-label" for="defaultInline4">thursday</label>--}}
{{--                            </div>--}}
{{--                            <div class="custom-control custom-checkbox custom-control-inline">--}}
{{--                                <input type="checkbox"  name="days[]" value="friday" class="custom-control-input" id="defaultInline5">--}}
{{--                                <label class="custom-control-label" for="defaultInline5">Friday</label>--}}
{{--                            </div>--}}
{{--                            <div class="custom-control custom-checkbox custom-control-inline">--}}
{{--                                <input type="checkbox"  name="days[]" value="saturday" class="custom-control-input" id="defaultInline6">--}}
{{--                                <label class="custom-control-label" for="defaultInline6">Saturday</label>--}}
{{--                            </div>--}}
{{--                            <div class="custom-control custom-checkbox custom-control-inline">--}}
{{--                                <input type="checkbox"  name="days[]" value="sunday" class="custom-control-input" id="defaultInline7">--}}
{{--                                <label class="custom-control-label" for="defaultInline7">Sunday</label>--}}
{{--                            </div>--}}
{{--                        </div>--}}


                        <select class="js-example-basic-multiple" name="days[]" multiple="multiple">
                            <option value="sunday">Sunday</option>
                            <option value="monday">Monday</option>
                            <option value="tuesday">Tuesday</option>
                            <option value="wednesday">Wednesday</option>
                            <option value="thursday">Thursday</option>
                            <option value="friday">Friday</option>
                            <option value="saturday">Saturday</option>
                        </select>


                    @if(Auth::check())
                        <div class="tile-footer text-right ">
                            <a href="{{url('/blog_category/home')}}" class="btn btn-default">@lang('general.cancel')</a>
                            <button type="submit" class="btn btn-primary">@lang('general.save')</button>
                        </div>
                    @endif
                </form>
            </div>

        </div>
    </div>


{{--    <script>--}}
{{--        $("#weekCal2").weekLine({--}}
{{--            mousedownSel: false,--}}
{{--            onChange: function () {--}}
{{--                $("#selectedDays").html(--}}
{{--                    $(this).weekLine('getSelected')--}}
{{--                );--}}
{{--            }--}}
{{--        });--}}

{{--    </script>--}}

    <script>
        $(document).ready(function () {
            $(".chosen-select").chosen();
        });

    </script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
@endsection



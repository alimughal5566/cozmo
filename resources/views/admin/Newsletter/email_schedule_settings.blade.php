@extends( 'admin.layouts.app' )
@section( 'content' )
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>
    <script type="text/javascript" src="//cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>

    <div class="app-title">

        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
            </li>
            <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">Email Schedule Settings</li>
        </ul>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                @if (session('success'))
                    <div class="alert alert-success" style="width: 40%">
                        {{ session('success') }}
                    </div>
                @endif
                <h3 class="tile-title">Email Schedule Settings
                </h3>
                <div class="table-responsive">
                    <table id = "example" class="table">
                        <thead class="back_blue">
                        <tr>
                            <th>#Sr</th>
{{--                            <th>Time</th>--}}
                            <th>Interval Type</th>
{{--                            <th>Day</th>--}}
                            <th>Enabled</th>
{{--                            <th>Last Sent</th>--}}
                            <th>Competitions</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($se_record as $key => $one)
                            <tr>
                                <form action="{{url('/update_email_schedule')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="record_id" value="{{$one->id}}">
                                    <td>{{$key + 1}}</td>
{{--                                    <td><input type="date" name="time" value="{{date('Y-m-d', strtotime($one->time))}}"></td>--}}
                                    <td>
                                        <select  name="interval_type" disabled>
                                            <option value="1" @if(1 == $one->interval_type) selected @endif>Once Only</option>
                                            <option value="2" @if(2 == $one->interval_type) selected @endif>Daily</option>
                                            <option value="3" @if(3 == $one->interval_type) selected @endif>Weekly</option>
                                            <option value="4" @if(4 == $one->interval_type) selected @endif>Send Before Competition</option>
                                        </select>
                                    </td>
{{--                                    <td>--}}
{{--                                        <select  name="day">--}}
{{--                                            <option value="1" @if(1 == $one->day) selected @endif>Saturday</option>--}}
{{--                                            <option value="2" @if(2 == $one->day) selected @endif>Sunday</option>--}}
{{--                                            <option value="3" @if(3 == $one->day) selected @endif>Monday</option>--}}
{{--                                            <option value="4" @if(4 == $one->day) selected @endif>Tuesday</option>--}}
{{--                                            <option value="5" @if(5 == $one->day) selected @endif>Wednesday</option>--}}
{{--                                            <option value="6" @if(6 == $one->day) selected @endif>Thursday</option>--}}
{{--                                            <option value="7" @if(7 == $one->day) selected @endif>Friday</option>--}}
{{--                                        </select>--}}
{{--                                    </td>--}}
                                    <td>
                                        <select  name="enabled">
                                            <option value="0" @if(0 == $one->enabled) selected @endif>Disable</option>
                                            <option value="1" @if(1 == $one->enabled) selected @endif>Enable</option>
                                        </select>
                                    </td>
{{--                                    <td><input type="text" name="last_sent" value="{{$one->last_sent}}" readonly></td>--}}
                                    <td>
                                        <select  name="competition_id">
                                            @foreach($coms as $com)
                                                <option value="{{$com->id}}" @if($com->id == $one->competition_id) selected @endif>{{$com->name}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td><button class="btn btn-primary" type="submit">Update</button></td>
                                </form>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

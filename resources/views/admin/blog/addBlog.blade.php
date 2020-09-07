@extends( 'admin.layouts.app' )

@section( 'content' )
    <div class="app-title">

        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
            </li>
            <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item"><a href="{{url('/users')}}">Add Blog</a>
            </li>
            <li class="breadcrumb-item">New Blog</li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">

            <div class="tile">
                <h3 class="tile-title">Add Blog</h3>
                <form class="form-horizontal" method="POST" action="{{ url('/blog/store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label class="form-control-label">Blog Type</label>
                                <input id="typre" type="text" class="form-control is-invalid" name="type" value="" required autofocus>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label class="form-control-label">Title</label>
                                <input id="title"  type="text" class="form-control is-valid" name="title" value="" required >
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 ">
                            <label for="comp">Blog Category</label>
{{--                            <select name="company_id" class="form-control"  >--}}

{{--                                @foreach ($companies as $comp)--}}
{{--                                    <option value="{{ $comp->id }}">{{ $comp->title }}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
                        </div>


                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <input type="file" name="image" class="custom-file-input form-control" id="customFile" required>
                                <label class="custom-file-label form-control-label form-control "  >Choose Image</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-group row">
                                <label class="form-control-label"required >Content</label>

                                    <textarea class="form-control rounded-0" id="" name="content" type="text" rows="4" required> </textarea>

                            </div>
                        </div>









                        {{--                                                @if ($user->is_business_profile != '0')--}}
                        {{--						<div class="col-sm-6 col-md-4">--}}
                        {{--							<div class="form-group">--}}
                        {{--								<label class="form-control-label">Business Name</label>--}}
                        {{--								<input id="text" type="text" class="form-control" name="business_name" value="{{ $user->business_name}}">--}}
                        {{--							</div>--}}
                        {{--						</div>--}}
                        {{--						<div class="col-sm-6 col-md-4">--}}
                        {{--							<div class="form-group">--}}
                        {{--								<label class="form-control-label">Business Phone</label>--}}
                        {{--								<input id="text" type="text" class="form-control" name="business_phone" value="{{ $user->business_phone}}">--}}
                        {{--							</div>--}}
                        {{--						</div>--}}
                        {{--						<div class="col-sm-6 col-md-4">--}}
                        {{--							<div class="form-group">--}}
                        {{--								<label class="form-control-label">Business Facebook</label>--}}
                        {{--								<input id="text" type="text" class="form-control" name="business_facebook_url" value="{{ $user->business_facebook_url}}">--}}
                        {{--							</div>--}}
                        {{--						</div>--}}
                        {{--						<div class="col-sm-6 col-md-4">--}}
                        {{--							<div class="form-group">--}}
                        {{--								<label class="form-control-label">Business Twitter</label>--}}
                        {{--								<input id="text" type="text" class="form-control" name="business_twitter_url" value="{{ $user->business_twitter_url}}">--}}
                        {{--							</div>--}}
                        {{--						</div>--}}
                        {{--                                                @endif--}}




                        {{--					</div>--}}
{{--                        <input id="file" type="hidden" class="form-control" name="id" >--}}
                        @if(Auth::check())
                            <div class="tile-footer text-right " style="float: right !important;">
                                <a href="{{url('/blogs')}}" class="btn btn-default">@lang('general.cancel')</a>
                                <button type="submit" class="btn btn-primary">@lang('general.save')</button>
                            </div>
                        @endif
                    </div>
                </form>
            </div>

        </div>
    </div>

@endsection



@extends( 'admin.layouts.app' )

@section( 'content' )
    <div class="app-title">

        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
            </li>
            <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item"><a href="{{url('building_documents')}}">Edit Document</a>
            </li>
            <li class="breadcrumb-item">Update</li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">

            <div class="tile">
                    <h3 class="tile-title">Edit Building</h3>
                    <form class="form-horizontal" method="POST" action="{{ url('building_document/update') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Document</label>
                                    <input type="hidden" name="user_id" value="{{$user[0]->id}}">
                                    <input id="document" type="text" class="form-control is-invalid" name="document" value="{{$user[0]->document}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="title">Image</label>
                                    <input required id="image" type="file" placeholder="image" class="form-control" name="image">
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Document Types</label>
                                    <input id="document_types" type="text" class="form-control" name="document_types" value="{{$user[0]->document_types }}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Unit No</label>
                                    <input id="unit_no" type="text" class="form-control" name="unit_no" value="{{$user[0]->unit_no }}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Detail</label>
                                    <input id="detail" type="text" class="form-control" name="detail" value="{{$user[0]->detail }}">
                                </div>
                            </div>
{{--                            <div class="col-sm-6 col-md-4">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label class="form-control-label">Condos</label>--}}
{{--                                    <input id="condos" type="text" class="form-control" name="condos" value="{{$user[0]->condos }}">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-sm-6 col-md-4">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label class="form-control-label">Co Ops</label>--}}
{{--                                    <input id="co_ops" type="text" class="form-control" name="co_ops" value="{{$user[0]->co_ops}}">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-sm-6 col-md-4">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label class="form-control-label">Multi Families</label>--}}
{{--                                    <input id="multi_families" type="text" class="form-control" name="multi_families" value="{{$user[0]->multi_families}}">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-sm-6 col-md-4">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label class="form-control-label">Rental Units</label>--}}
{{--                                    <input id="rental_units" type="text" class="form-control" name="rental_units" value="{{$user[0]->rental_units}}">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                                <div class="col-sm-6 col-md-4">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label class="form-control-label">Company Email</label>--}}
{{--                                        <input id="company_email" type="text" class="form-control" name="company_email" value="{{$user[0]->company_email}}">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-6 col-md-4">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label class="form-control-label">Description</label>--}}
{{--                                        <input id="description" type="text" class="form-control" name="description" value="{{$user[0]->description}}">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                        </div>
                        <input id="file" type="hidden" class="form-control" name="id" value="">
                        @if(Auth::check() && Auth::user()->user_role == 1)
                            <div class="tile-footer text-right">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        @endif
                    </form>
                </div>
        </div>
    </div>

@endsection

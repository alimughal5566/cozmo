@extends( 'admin.layouts.app' )
@section( 'content' )

<div class="app-title">
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
		</li>
		<li class="breadcrumb-item"><a href="{{url('/')}}">Writer</a>
	</li>
	<li class="breadcrumb-item">Writers</li>
</ul>
</div>

<div class="row">
    <div class="col-md-12">

			<form class="form-horizontal" method="POST" action="{{url('article')}}" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="tile">

					<h3 class="tile-title">New Article</h3>
					@if(Session::has('success'))
						<div class="alert alert-success">
							{{ Session::get('success') }}
						</div>
					@endif
					@foreach ($errors->all() as $error)
						<div class="alert alert-danger">{{ $error }}</div>
					@endforeach
					<div class="row">

						<div class="col-sm-6">
							<div class="form-group">
								<label for="title">Title:</label>
								<input required id="title" value="{{ isset($article) ? $article->title : old('title')}}" type="text" placeholder="Title" class="form-control" name="title">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="long_title">Long Title:</label>
								<input required id="long_title" value="{{ isset($article) ? $article->long_title : old('long_title')}}" type="text" placeholder="Long Title" class="form-control" name="long_title" >
							</div>
						</div>
					</div>

					<div class="row">

						@foreach($categories as $row)
							@if(isset($article->id) && $row->id==$article->category_id)
								<input type="hidden" name="category_id[]" value="{{ $row->id}}">
							@endif
						@endforeach

						<div class="col-sm-6">
							<div class="form-group">
								<label for="title">Select Categories:</label>
								@if(isset($update))
									<select  name="categories_id[]" class="form-control chosen chosen-height" multiple>
										@foreach($categories as $row)
											<option @if(isset($article->id) && $row->id==$article->category_id) selected @endif value="{{ $row->id}}">{{ $row->title}}</option>
										@endforeach
									</select>
								@else
									<select  name="categories_id[]" class="form-control chosen chosen-height" multiple>
										@foreach($categories as $row)
											<option @if(isset($article->id) && $row->id==$article->category_id) selected @endif value="{{ $row->id}}">{{ $row->title}}</option>
										@endforeach
									</select>
								@endif
							</div>
						</div>


							<div class="col-sm-6">
								<div class="form-group">
									<label>Writer</label>
									<select name="writer_id" class="form-control">
										<option value="">Select Writer</option>
									@foreach($writers as $writer)
										<option value="{{$writer->id}}">{{$writer->title}}</option>
									@endforeach
									</select>
								</div>
							</div>
                       <div class="col-sm-6">

                            <div class="form-group">

                                <label>Choose Members</label>

                                <select name="article_type" class="form-control">

                                    <option value="">Select Members</option>
                                    <option value="Public" >Public</option>
                                    @if(Auth::check())
                                    <option value="Members Only" >Members Only</option>
                                    @endif
                                    @if(Auth::check() && Auth::user()->user_role == 3)
                                    <option value="Exec Only" >Exec Only</option>
                                    @endif
                                    <option value="Draft" >Draft</option>


                                </select>

                            </div>

                        </div>   
					</div>

					<div class="row">

						<div class="col-sm-12">
							<div class="form-group">
								<label>Description</label>
								<textarea name="description" cols="8" id="txtEditor" style="height: 35px;width: 100%;" required></textarea>
							</div>
						</div>


						<div class="col-sm-6">



                            <?php if(isset($article)) { ?>
							<div class="col-sm-6 p-0 col-md-3 col-lg-6">
								<input type="hidden" name="noimage" value="{{isset($article) ? $article->image : ''}}">
								<img  src="{{url('mcimages/',$mc->image)}}" class="form-control rounded float-left " style="width: 260px; height: 193px;">
								<!-- <h6 style="color: #ee8322; margin-top: 200px;">Banner size must be width:1500 height:600</h6> -->
								<input type="file" name="image">
							</div>
                            <?php } else {  ?>
							<div class="col-sm-6 p-0 col-md-3 col-lg-6">
								<label>Select Image</label>
								<input type="file" name="image">
							</div>
                        <?php }  ?>



							<div class="col-sm-6">
								@if(Auth::check() && Auth::user()->user_role == 1)
									<div class="tile-footer my-btn text-left">
										<a class="btn btn-default" href="{{ url('article')}}">Cancel</a>

										<button class="btn btn-primary" type="submit">Save</button>
									</div>
								@endif

							</div>
						</div>
					</div>
					<input type="hidden" name="id" value="{{ isset($article) ? $article->id : old('id') }}">
					<input type="hidden" name="file" value="{{ isset($article) ? $article->image : ''}}">
				</div>
			</form>

	
    </div>
</div>    

@endsection

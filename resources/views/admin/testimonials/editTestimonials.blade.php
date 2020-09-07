@extends( 'admin.layouts.app' )
@section( 'content' )

<?php $curr=Config::get("constants.currency"); ?>
<div class="app-title">
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
		</li>
		<li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a>
		</li>

	</ul>
</div>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('alert'))
    <div class="alert alert-danger">
        {{ session('alert') }}
    </div>
@endif

<div class="row">
	<div class="col-md-12">
		<form class="form-horizontal" method="POST" action="{{ url('edit_testimonials') }}" enctype="multipart/form-data">
			{{ csrf_field() }}
			<input type="hidden" name="id" value="{{$testimonial->id}}" >
			<div class="tile">
				<h3 class="tile-title" style="text-align: center; margin: 0;">Edit Testimonial</h3>
				  <hr style="border-top: 1px solid black;    margin-bottom: 2rem;">
				<div class="row">



	                <div class="form-group row" style="width: 51%;">
	                  <label for="" class="col-sm-6 col-form-label" style="padding-left: 90px;">Name</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="footer" name="footer"  minlength="4" maxlength="40" size="45" value="{{$testimonial->footer}}" required autofocus>
	                  </div>
	                </div>

	                <div class="form-group row" style="width: 51%;">
	                  <label for="" class="col-sm-6 col-form-label" style="padding-left: 90px;">Description</label>
	                  <div class="col-sm-6">
	                    <input type="text" class="form-control" id="description" minlength="4" maxlength="40" size="45" name="description" value="{{$testimonial->description}}" required autofocus>
	                  </div>
	                </div>

	                <div class="form-group row" style="width: 51%;">
								<label class="col-sm-6 col-form-label" style="padding-left: 90px;">Select Winner</label>
								<div class="col-sm-6">
									<select name="team" id="team" class="form-control">
										<option value="0">select winner</option>
										@foreach($winner as $row)
										<option value="{{ $row->id }}" @if($testimonial->winner_id == $row->id) selected @endif>{{$row->title }}</option>
										 @endforeach
									</select>
								</div>
							</div>

	                <div class="form-group row" style="width: 51%;">
								<label class=" col-form-label" style="padding-left: 90px;">Testimonials image</label>
								<div class="img_dlt" style="margin-left: 78px;">
									<a class="btn btn-primary" id="add_images" href="javascipt:void(0)">Browse image</a>
										<label style="display: none;">
										<input id="images" type="file"  name="images">
									</label><br>
									<img id="blah" src="<?php echo url("/testimonials_image/$testimonial->image_name");?>" style=" width: 193px; height: 170px;  margin-top: 10px;" />
								</div>
							</div>




				</div>


				@if(Auth::check() && Auth::user()->user_role == 1)
				<div class="tile-footer text-right">
					<a class="btn btn-default" id="cancel" href="">Cancel</a>
					<button class="btn btn-primary" type="submit">Save</button>
				</div>
				@endif

			</div>
		</form>
	</div>
</div>

<script>

	$('#add_images').click(function(){
	$('#images').click();
	});

function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#images").change(function() {
  readURL(this);
});

	$('#cancel').click(function() {
		location.reload();
	});

</script>


@endsection

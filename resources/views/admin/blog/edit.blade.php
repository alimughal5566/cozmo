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
.topss_form{
    display:flex;
    flex-direction:column-reverse;
    align-items:flex-start;
    margin:0;
}
/ Rounded sliders /
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
.setcomp {
	display: flex;
	flex-wrap: wrap;
}
</style>
<!-- include summernote css/js -->
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
		<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
		<li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
		<li class="breadcrumb-item"><a href="#">Edit</a>
		</ul>
	</div>

	<div class="row">
		<div class="col-md-12">

			<div class="tile">
				<h3>Edit Slider</h3>
				@if (\Session::has('success'))
				<div class="alert alert-success">
					{!! \Session::get('success') !!}
				</div>
				@endif
				@if (session('alert'))
				    <div class="alert alert-danger" style="width: 40%">
				        {{ session('alert') }}
				    </div>
				@endif


				<form class="form-horizontal" method="POST" action="{{ url('blog/update') }}" enctype="multipart/form-data">
					@csrf
					<div class="row">

						<div class="col-md-7">
							<div class="form-group">
								<label>Title</label>

								<input id="title" type="text" placeholder="title" class="form-control" name="title" value="{{ $blog->title }}" required autofocus>
							</div>
							<div class="form-group">
								<label>Description</label>
								<textarea name="description" required cols="8" id="txtEditor" style="height: 35px;width: 100%;">
									{{$blog->description}}
								</textarea>
							</div>
						</div>
                       <div class="col-md-5">
                   	<input type="hidden" name="noimage" value="{{$blog->image}}">
							<img  src="{{url('blogimages/',$blog->image)}}" class="form-control rounded float-left " style="width: 260px; height: 193px;">
							<h6 style="color: #ee8322; margin-top: 200px;">Banner size must be width:1140 height:550</h6>
							<input type="file" name="image">
							<div>
							<h5 class="mt-2">show: </h5>
						</div>
							<div>


							<input type="radio" name="video" <?PHP if($blog->video_status == 1){ echo "checked";}?> value="1"> Video<br>
							<input type="radio" <?PHP if($blog->video_status == 0){ echo "checked";}?> name="video" value="0"> image<br>


					</div>
						<div>
							<label>Slider Status:</label>
	<?php	if($blog == "" ) { ?>
							<label class="switch">
  <input name="status" type="checkbox" >
  <span class="slider"></span>
  </label>
<?php	} else { ?>
<?php	if($blog->sliderstatus == 1 ) { ?>

								<label class="switch">
  <input name="status" type="checkbox" checked>
  <span class="slider"></span>
  </label>
<?php } else { ?>
		<label class="switch">
  <input name="status" type="checkbox" >
  <span class="slider"></span>
  </label>
<?php } }?>


						</div>
                           <div id="sorting_div" style="display: none">
                               <label for="title">Sorting:</label>
                               <input  onkeyup="change_sorting()" required="" id="sorting" value="{{$blog->sorting}}" type="number" placeholder="Sorting" class="form-control" name="sorting">
                           </div>
					</div>
					<h5 class="pl-3">Select Competition:</h5>
					<div class="row pl-3 pr-2 setcomp">
						@foreach($packages as $package)
						<div class="mycol" >

						<div class="form-group topss_form">


							<label style="border-bottom: 1px solid #eaeaea;padding: 5px;margin: 5px auto;    font-weight: 600;color: #ee8322;">
							<input type="radio" <?php if($blog->package_id == $package->id) {
                               echo 'checked';
							} ?> name="package" value="{{$package->id}}">
							{{substr($package->name,0,20)}}
							@foreach($package->main_img as $key => $img)
								@if($key >0)
								@break
								@endif
								<img style="height: 70px; width: 70px;padding: 3px; border: 1px solid #d0d0d0;margin: 0 auto;display: flex;" id="popular_imgse" src="<?php echo url("products/$img->package_id/$img->name");?>">
								@endforeach
								</label>

						</div>
						</div>
						   @endforeach
					</div>
						<div class="col-sm-6 col-md-3 col-lg-6">

						</div>
						<div class="col-lg-12">
							@if(Auth::check() && Auth::user()->user_role == 1)
							<div class="tile-footer">
								<input id="ok" type="hidden" class="form-control" name="id" value="{{$blog->id}}">
								<button class="btn btn-primary" type="submit">Submit</button>
								<a class="btn btn-default" href="{{route('blog.admin')}}">Cancel</a>
							</div>
							@endif
						</div>
						</div>
					</form>
					<div class="clearfix"></div>


				</div>

			</div>
		</div>

		<script src="{{url('backend/sweetalerts/sweetalert2.all.js')}}"></script>
    <script>
        $(document).ready(function(){
                if($('input[type="checkbox"]').prop("checked") == true) {
                    console.log("Checkbox is checked.");
                    $('#sorting_div').css("display", "block");
                }
        });
        function change_sorting() {
            var number = $('#sorting').val();
            $.ajax({url: "{{url('/blog/apply_sorting_number/')}}/ "+ number + "/{{$blog->id}}" , success: function(result){
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








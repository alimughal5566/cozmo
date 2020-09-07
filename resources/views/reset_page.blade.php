@extends('layouts.app')
@section('content')

<style>
	.modal-content {
		width: 35% !important;
	}
	@media screen and (max-width: 780px){
		.modal-content {
		width: 85% !important;
	}
	}
</style>


<form class="modal-content"  action="{{ url('sending_resetpassword')}}" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
	@if (session('alert'))
	    <div class="alert alert-danger" >
	        {{ session('alert') }}
	    </div>
	@endif
	    <div class="imgcontainer">
	      <h1>Resetting Password</h1>
	    </div>
	    <input type="hidden" name="remember_token" value="{{$remember_token}}">
	    

	    <div class=" cust_cont">
	      <label><b>Enter your Password</b></label>
	      <input type="Password" name="reset_password" class="form-control" required>
	        
	      <button type="submit" style="border-radius: 4px;">Password Reset</button>
	      
	    </div>

	    <!-- <div class="container cust_cont">
	      <button type="button" class="cancelbtn">Cancel</button>
	    </div> -->
</form>


<script>
	$('.cancelbtn').click(function(){
		location.reload();
	});
</script>











@endsection
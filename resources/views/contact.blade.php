@extends('layouts.app')
@section('content')

<style>
    .loader {
      border: 16px solid #f3f3f3;
      border-radius: 50%;
      border-top: 16px solid black;
      border-bottom: 16px solid black;
      width: 70px;
      height: 70px;
      -webkit-animation: spin 2s linear infinite;
      animation: spin 2s linear infinite;
    }
</style>

	<div class="contact_us">
		<h1 class="text-center">contact us</h1>
		<div class="container">
			<form class="contact" id="contact" method="post" >
				 {{@csrf_field()}}  
				<div class="form-group">
			    	<label for="sub">Subject</label>
			    	<input type="text" name="subject" class="form-control" id="sub" required>
			    </div>
				<div class="form-group">
			    	<label for="uname">Name</label>
			    	<input type="text" name="name" class="form-control" id="uname" required>
			    </div>
				<div class="form-group">
			    	<label for="email">Email</label>
			    	<input type="email" name="email" class="form-control" id="email" required>
			    </div>
			    <div class="form-group">
			    	<label for="msg">Message</label>
			    	<textarea type="text" name="message" class="form-control" id="message" required></textarea>
			    </div>
			    <button type="submit" id="sub12" class="btn btn-primary">Submit</button>
			    <div class="loader" style="margin: 0 auto;"></div>
			    
			</form>
		</div>
	</div>
	<script type="text/javascript">

    $(document).on('submit','#contact',function(e){
     e.preventDefault() 
    $.ajax({
    type: "POST",
    headers: {
            'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
          },
    url: '{{ url("/sendmail")}}',
    data:  $(this).serialize(), 
   
      success: function ( msg ) {
            swal("Success", "We will contact you soon, ", "success")
              $("#contact")[0].reset();
           
          }
});
});

 var $loading = $('.loader').hide();
$(document)
.ajaxStart(function () {
  $loading.show();
  $('#sub12').prop('disabled', true);
})
.ajaxStop(function () {
 $loading.hide();
  $('#sub12').prop('disabled', false);
});

  </script>
	

 @endsection
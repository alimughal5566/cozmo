
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 5px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
#forgetpassword{
        background-color: #fefefe;
    margin: 5% auto 5% auto;
    border: 1px solid #888;
    width: 30%;
}

/* Set a style for all buttons */
button {
  background-color: #ee8322;
  color: white;
  padding: 10px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  position: relative;
}
.cust_cont {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal_1 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

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
    .custom_head {
    margin: 0 !important;
    font-weight: 600 !important;
    text-align: center !important;
    background-color: #e9ebee !important;
    text-transform: uppercase !important;
    letter-spacing: 2px !important;
    color: #ee8322 !important;
    padding: 10px 0 !important; 
    font-size: 24px !important;
}
</style>




<div id="id03" class="modal_1 modal" tabindex="-1" role="dialog">
  
  <form class="modal-content animate" id="forgetpassword" action="{{ url('home/forgetpassword')}}">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close modal_1">&times;</span>
       <p class="custom_head">Resend Password</p>
    </div>
    <input type="hidden" name="user_email" value="">

    <div class=" cust_cont" style="padding-bottom: 0;">
      <label for="uname"><b>Enter your Email</b></label>
      <input type="email" name="reset_email" class="form-control" required>
        
      <button type="submit">Send My Password</button>
      <div class="loader" style="margin: 0 auto;"></div>
      
    </div>

    <div class="container cust_cont" style="width: 70%;display: flex;justify-content: center;padding: 0;">
      <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn" style="padding: 15px 30px;">Cancel</button>
    </div>
  </form>
</div>


<script>

  $(document).on('submit','#forgetpassword',function(e){
    e.preventDefault();

  $('input[name="user_email"]').val($('input[name="email"]').val());

    $.ajax({
      headers: {
            'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
          },
      type:'POST',
      url: $(this).attr('action'),
      data: $(this).serialize(),
      success: function(msg){
        if(msg.status==1){
            swal({
  title: "Forgot Password",
  text: msg.msg + ", Do not forget to check spam. ",
  type: "success",
  showCancelButton: true,
  confirmButtonClass: "btn-primary",
  confirmButtonText: "OK",
  closeOnConfirm: false
},
function(){
  window.location.reload();
});
                    
        }else{
          swal("Error", msg.msg, "error");          

        }
      }
    });
  });
  
  
  var $loading = $('.loader').hide();
$(document)
.ajaxStart(function () {
  $loading.show();
  $('#frg').prop('disabled', true);
})
.ajaxStop(function () {
 $loading.hide();
  $('#frg').prop('disabled', false);
});


// Get the modal
var modal_1 = document.getElementById('id03');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal_1) {
        modal_1.style.display = "none";
    }
}
</script>



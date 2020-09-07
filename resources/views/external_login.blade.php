@extends('layouts.app')
@section('content')
<style>
    #register_form{
        width:30%;
    }
    @media screen and (max-width: 992px){
        #login_form{
            width:40%;
        }
        .clearfix{
            width:126%;
        }

    }
     @media screen and (max-width: 765px){
        #login_form{
            width:50%;
        }
    }
     @media screen and (max-width: 565px){
        #login_form{
            width:65%;
        }
    }
     @media screen and (max-width: 480px){
        #login_form{
            width:90%;
        }
    }
     @media screen and (max-width: 380px){
        #login_form{
            width:95%;
        }
    }
    #new_wid{
        background-color: #fff;
    border: 1px solid #ccc;
    width: 100%;
        border-radius: 5px;
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

    .custom-email{
          background-color: #fff;
    border: 1px solid #ccc;
    width: 100%;
    padding: 5px;
    margin: 5px 0 5px 0;
    display: inline-block;
    border: none;
    border-radius: 4px;
    background: #f1f1f1;
    }
.canc-btn{
    width: 50%;
    margin-right: 5px;
    background: #e8f0fe;
}
.inn-btn{
    width: 50%;
    /* float: right; */
    margin-left: 5px;
}
.clearfixe{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}
</style>


<form id="login_form" class="modal-content" action="{{ url('home/login')}}" method="post" style="margin: 1% auto 1% auto;">
    <h1>Login</h1>

    @if (session('alert'))
        <div class="alert alert-success">
            {{ session('alert') }}
        </div>
    @endif

    @if (session('danger'))
        <div class="alert alert-danger">
            {{ session('danger') }}
        </div>
@endif
    <!-- <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span> -->
    <div class="container cust_con">
      <label for="email"><b>Email</b></label>
      <input id="new_wid" type="email" placeholder="Enter Email" name="email" class="custom-email" required>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
      <div class="clearfixe">
        <button type="button" class="canc-btn"><a href="{{url('/')}}">Cancel</a></button>

        <button type="submit" class="inn-btn" id="sub">Sign In</button>
        <div class="loader" style="margin: 14px;"></div>
      </div>
    </div>
  </form>


  <script>
  	$(document).on('submit','#login_form',function(e){
    e.preventDefault();
    $.ajax({
      headers: {
            'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
          },
      type:'POST',
      url: $(this).attr('action'),
      data: $(this).serialize(),
      success: function(msg){
        if(msg.status==1){
          window.location.href='{{ url("profile")}}';
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
  $('#sub').prop('disabled', true);
})
.ajaxStop(function () {
 $loading.hide();
  $('#sub').prop('disabled', false);
});
  </script>









@endsection

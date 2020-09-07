<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  
	  <link rel="shortcut icon" type="image/x-icon" href="{{url('images/favicon-1.ico')}}">
	  
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('backend/css/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Prize Maker | Register</title>
    <style> 
    .login-content .login-box {
    position: relative;
    min-width: 350px;
    min-height: 544px !important;
    background-color: #fff;
    -webkit-box-shadow: 0px 29px 147.5px 102.5px rgba(0, 0, 0, 0.05), 0px 29px 95px 0px rgba(0, 0, 0, 0.16);
    box-shadow: 0px 29px 147.5px 102.5px rgba(0, 0, 0, 0.05), 0px 29px 95px 0px rgba(0, 0, 0, 0.16);
    -webkit-perspective: 800px;
    perspective: 800px;
    -webkit-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
}

</style>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <?php /*?><h1>VEDI</h1><?php */?>
		  <img src="{{url('images/logo-vedi.png')}}" alt="" width="200">
      </div>
      <div class="login-box">
        
		 <form class="login-form" method="POST" action="{{ url('register') }}">
                        {{ csrf_field() }}
						
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Register</h3>
          <div class="form-group">
            <label class="control-label">First Name</label>
             <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
          </div>

         


          <div class="form-group">
            <label class="control-label">Email Address</label>
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
          </div>
           <div class="form-group">
            <label class="control-label">Phone</label>
              <input  type="text" class="form-control" name="phone" value="{{ old('phone') }}" required>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
          </div>




          <div class="form-group">
            <label class="control-label">Password</label>
            <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
          </div> 
           <div class="form-group">
            <label class="control-label">Confirm Password</label>
            <input id="password" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
          </div>

           
        


          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
              
                 <p class="semibold-text mb-2"><a href="{{url('login')}}"> Back to Login </a></p>
              
              </div>
              
            </div>
          </div>
          <div class="form-group btn-container">
            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>Register</button>
          </div>
        </form>
       
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="{{url('backend/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{url('backend/js/popper.min.js')}}"></script>
    <script src="{{url('backend/js/bootstrap.min.js')}}"></script>
    <script src="{{url('backend/js/main.js')}}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{url('backend/js/plugins/pace.min.js')}}"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>




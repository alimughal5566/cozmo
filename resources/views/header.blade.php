<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div>
		@section('header')
	    <header id="header">
		    <div class="custom_container">
		      <!--
		      <div id="logo" class="pull-left">
		        <a href="index.html" class="scrollto"><img src="img/lgo.png"></a>
		      </div> -->
		      <nav id="nav-menu-container">
		        <ul class="nav-menu">
		          <li><a href="/">Home</a></li>
		          <li><a href="/events">Events</a></li>
		          <li><a href="#">MEMber area</a></li>
		          <li><a href="/mailing_list">join mailing list</a></li>
		          <li class="set_brdr"><a href="/contact_us">Contact us</a></li>
		          <!--<li><a href="">login</a></li>-->
		          <!--<li><a href="">Register</a></li>-->

		          <li class="get-started"><a data-toggle="modal" data-target="#login-modal" href="#">Become a member</a> </li>
		        </ul>
		      </nav>
		    </div>
	    </header>
		@show
	</div>
</body>
</html>
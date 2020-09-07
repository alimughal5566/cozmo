<head>
    
    <title>{{Request::segment(1)}}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="shortcut icon" type="image/x-icon" href="{{url('images/favicon-1.ico')}}"> -->
	<!-- <link rel="icon" href="{{ url('frontend/images/logo.png')}}" type="image/png"> -->
	<link rel='icon' href="{{url('images/favicon.png')}}" type='image/x-icon' sizes="48x48">
	<!--<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">-->
<link rel="icon" href="/favicon.ico" type="image/x-icon">
    	<meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Main CSS-->

    <link rel="stylesheet" type="text/css" href="{{url('backend/css/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{url('backend/css/sweetalert.css')}}">
    
	<link rel="stylesheet" type="text/css" href="{{url('backend/css/custom.css')}}">
	
	<script src="{{url('backend/js/jquery-3.2.1.min.js')}}"></script>
    <?php /*?><script src="{{url('backend/sweetalerts/sweetalert2.all.js')}}"></script><?php */?>
    
	<script src="{{url('backend/js/plugins/bootstrap-datepicker.min.js')}}"></script>
	<script src="{{url('backend/js/plugins/bootstrap-datepicker.min.js')}}"></script>
	<script src="{{url('backend/js/sweetalert.js')}}"></script>
	<style type="text/css">
		.note-popover {
			display: none;
		}
	</style>
  </head>
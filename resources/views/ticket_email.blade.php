<!DOCTYPE html>
<html>
<head>
	<title>Email</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="table_email" style="background-color: #f1fffe; margin-top: 30px;">
	<h2 style="text-align: center; color: #ee8322; padding-top: 20px;">Hello Admin</h2>
	<div class="logo_table" style="display: flex; flex-direction: row; justify-content: center; padding-top: 30px;">
		<img src="{{url('logo.png')}}" width="250px" style="margin-left: 345px;">
	</div>
	<div class="link_site">
		<p style="text-align: center; padding-top: 20px;">
			<span style="color: #2bbdb0; font-size: 20px;">This is a detial of user for free ticket </span><br>
						Name: {{$name}}<br>
						Address: {{$address}}<br>
						Phone: {{$phone}}<br>
						DOB: {{$email_dob}}<br>
						Ticket Number: {{$tickets}}<br>
							Thanks.							
		</p>
	</div>
	<div class="bottom_link" style="text-align: center;">
	<span>Prize Maker</span>
	</div>
</div>

</div>

</body>
</html>
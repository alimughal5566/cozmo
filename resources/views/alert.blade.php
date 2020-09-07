		<style>
			.ticket-btn{
				width: 20%;
			}
			@media screen and (max-width: 768px){
				.ticket-btn{
				width: 40% !important;
			}
			}
			@media screen and (max-width: 420px){
				.ticket-btn{
				width: 50% !important;
			}
			}
		</style>
		@if(Session::has('error'))
			<div class="alert alert-danger">
			<a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		{{ Session::get('error') }}
		</div>
		@endif
		@if(Session::has('success'))
			<div class="alert alert-success">

			<a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<p class="text-center pt-3">{{ Session::get('success') }}</p>
		<div class="text-center">
		<a href="{{url('user/tickets')}}"><button class="ticket-btn" style="background-color: #ee8322; border-color: #ee8322; border-radius: 4px;">My Ticket</button></a></div>
		</div>
		@endif

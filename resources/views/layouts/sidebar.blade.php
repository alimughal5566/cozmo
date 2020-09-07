<style>
	.active-item {
		background-color: grey;
	}

</style>
<nav id="sidebar">
						        <div class="sidebar-header">
						            <h3>Sidebar</h3>
						        </div>

						        <ul class="list-unstyled components" >
						            <!--<li class="active"><a href="{{ url('/') }}">Home</a></li>-->
						            <?php $url=request()->segment(1); 
						            ?>
						            @if($url=='profile')
						            <li class="active-item">
						                <a  href="{{ url('profile') }}">Profile</a>
						            </li>
						            @else
						            <li>
						                <a  href="{{ url('profile') }}">Profile</a>
						            </li>
						            @endif					           
						            <!--<li>-->
						            <!--    <a href="{{url('contact')}}">Contact</a>-->
						            <!--</li>-->
						            @if($url=='refer_friend')
						            <li class="active-item">
						                <a href="{{url('refer_friend')}}">Refer to Friend</a>
						            </li>
						            @else
						            <li>
						                <a href="{{url('refer_friend')}}">Refer to Friend</a>
						            </li>
						            @endif

						            @if($url=='user')
						            <li class="active-item">
						                <a href="{{url('user/tickets')}}">My Tickets</a>
						            </li>
						            @else
						            <li>
						                <a href="{{url('user/tickets')}}">My Tickets</a>
						            </li>
						            @endif
						            @if($url=='users')
						            <li class="active-item">
						                <a href="{{url('users/freetickets')}}">My Free Tickets</a>
						            </li>
						            @else

						            <li>
						                <a href="{{url('users/freetickets')}}">My Free Tickets</a>
						            </li>
						            @endif

						            @if($url=='show_win')
						            <li class="active-item">
						                <a href="{{url('show_win')}}">My Winnings</a>
						            </li>
						            @else
						            
						            <li>
						                <a href="{{url('show_win')}}">My Winnings</a>
						            </li>
						            @endif

						            @if($url=='show_refer')
									<li class="active-item">
										<a href="{{url('show_refer')}}">My Referrals</a>
									</li>
									@else
									<li>
										<a href="{{url('show_refer')}}">My Referrals</a>
									</li>
									@endif
									@if($url=='commision_view')
									<li class="active-item">
										<a href="{{url('commision_view/'.Auth::user()->reference_id)}}"> Commissions</a>
									</li>
									@else
									<li>
										<a href="{{url('commision_view/'.Auth::user()->reference_id)}}"> Commissions</a>
									</li>
									@endif

						        </ul>
						    </nav>

<script>

</script>
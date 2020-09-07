@extends('layouts.app')

@section('content')
<!-- Page Header-->
<header class="page-header">
	<div class="container-fluid">
		<h2 class="no-margin-bottom">@lang('users.user_detail')</h2>
	</div>
</header>
<!-- Breadcrumb-->
<div class="breadcrumb-holder container-fluid">
	<ul class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="{{url('dasboard')}}">@lang('general.home')</a>
		</li>
		<li class="breadcrumb-item">
			<a href="{{url('users')}}">@lang('users.users')</a>
		</li>
		<li class="breadcrumb-item active">{{$user_data->name}}</li>
	</ul>
</div>
	
	<section class="client">
		<div class="row justify-content-center">
			<div class="col-lg-6">
                  <div class="client card">
                    <div class="card-body text-center">
                      <div class="client-avatar"><img src="{{ url('backend/img/avatar-2.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
                      <div class="client-title">
                        <h3>{{$user_data->name}}</h3>
                        <p style="line-height: 2;">
                          <span><i class="fa fa-envelope"></i> {{$user_data->email}}</span>
                        @if($user_data->phone)
                        <span><i class="fa fa-phone"></i>  {{$user_data->phone}}</span>
                        @endif
                        @if(isset($user_data->package->name))
                        <span>@lang('users.package'):  {{$user_data->package->name}}</span>
                        @endif
                      </p>
                        <a href="{{url('users/edit/' . $user_data->id)}}">@lang('users.edit')</a>
                      </div>
                      <hr>
                      <!-- <h3>Orders Status</h3> -->
                      <div class="client-info">
                        <div class="row">
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <p class="text-center"><a href="{{url('partners')}}" class="btn btn-sm btn-secondary">Back to Staff</a></p> -->
                </div>
		</div>
	</section>
  <section>

<div class="col-lg-12">
  
<div class="articles card">
@if(count($friends))
<div class="card-header d-flex align-items-center">
<h2 class="h3">@lang('users.friends')   </h2>
<!-- <div class="badge badge-rounded bg-green">4 New       </div> -->
</div>
<div class="card-body no-padding">
@foreach($friends as $friend)
<div class="item d-flex align-items-center">
<div class="image"><img src="{{ url('backend/img/avatar-1.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
<div class="text"><a href="#">
<h3 class="h5">{{ $friend->name}}</h3></a><small>@lang('users.email'): {{ $friend->email}}   </small></div>
</div>
@endforeach
</div>
@else
<h2 class="text-center" style="padding:10px;">@lang('users.no_friends')</h2>
@endif
</div>
@if(count($plans))
<h3>@lang('users.trips')</h3>
   <div id="accordion" role="tablist" >
  @foreach($plans as $key=> $plan)
  <div class="card">
    <div class="card-header" role="tab" id="headingOne">
      <h5 class="mb-0">
        <a data-toggle="collapse" href="#collapseOne{{$key+1}}" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
          {{$plan->title}} 
        </a>
      </h5>
    </div>

    <div id="collapseOne{{$key+1}}" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" style="">
      <div class="card-body">
   <div class="col-lg-4">
   <h3>@lang('users.where')</h3>
      @foreach($plan->cities as $key=>  $city)
    <span>{{$city->city_name}}</span>@if($key < count($plan->cities)-1) , @endif
      @endforeach
      </div>
      <div class="col-lg-4">
   <h3>@lang('users.when')</h3>
      @foreach($plan->destinations as $key=>  $dest)
    <p><b> {{$dest->name}} </b> {{ date('dS F Y', strtotime($dest->departure_date))}}  - {{ date('dS F Y', strtotime($dest->arrival_date))}} <b>{{ $dest->duration }} Days </b>  </p>
      @endforeach
      </div>
       <div class="col-lg-4">
   <h3>@lang('users.what')</h3>
      @foreach($plan->packages as $key=>  $package)
    <span> {{$package->name}} </span> @if($key < count($plan->packages)-1) , @endif
      @endforeach
      </div>
       <div class="col-lg-4">
   <h3>@lang('users.how')</h3>
      @foreach($plan->airports as  $key=>  $port)
    <span>{{ $port['name'] }}</span> @if($key < count($plan->airports)-1) , @endif
      @endforeach
      </div>
        <div class="col-lg-4">
   <h3>@lang('users.who')</h3>
      @foreach($plan->users as  $key=> $user)
    <span>{{ $user['name'] }}</span>  @if($key < count($plan->users)-1) , @endif
      @endforeach
      </div>
      </div>
    </div>
  </div>
@endforeach
</div> 
@else
<h2 class="text-center" style="padding:10px;">@lang('users.no_trip')</h2>   
@endif         
  </section>
	
    @endsection
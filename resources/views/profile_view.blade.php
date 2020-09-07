<!DOCTYPE html>
<html>
<head>
  <title>Articles</title>

</head>
<style>
.not-fount > h1 {
    color: red;
    padding: 3% 0%;
    border: 1px solid;
}
</style>
<body>
  
@extends('layouts.app')
@section('content')

<div class="container">
      <div class="row profile">
        <div class="col-md-3 pr-0">
          <div class="sidebar">
            <div class="img_section">
                <img src="images/1.jpg" alt="" class="img-fluid">
            </div>
            <div class="nav-side-menu">
              <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
              
              <div class="menu-list">
                
                <ul id="menu-content" class="menu-content collapse out">
                  <li class="nav-item ">
                    <a href="#">
                      Dashboard
                    </a>
                  </li>
                  <li class="nav-item   active_sideb ">
                    <a href="#">
                      Edit Profile
                    </a>
                  </li>
                  
                  <!-- <li class="nav-item ">
                    <a href="#">
                      Preferences
                    </a>
                  </li>
                  <li class="nav-item ">
                    <a href="#">
                      Email Preferences 
                    </a>
                  </li> -->
                  <li class="nav-item ">
                    <a href="/logout">
                      Logout
                    </a>
                  </li>
                  <!--
                  <li data-toggle="collapse" data-target="#new" class="collapsed">
                      <a href="#"><i class="fa fa-car fa-lg"></i> Service <span class="arrow"></span></a>
                  </li>
                  <ul class="sub-menu collapse" id="new">
                      <li>Sensorkonfiguration</li>
                      <li>Betriebsarten</li>
                  </ul>
                  -->
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-9 pl-0">
          <div class="right_section">
            <div>
              <h3>Edit Profile</h3>
            </div>
            <form action="/profile-update" method="POST">
              <input type="hidden" name="_token" value="6YQ5uGajoJ5jNt78R9gtsvU4duX2wc6xWG3O8SGA">              <div class="row">
              <div class="col-md-12">
                <div class="input_grp">
                  <input type="text"  name="name"  value="{{$user->name}}">
                  <label>First Name</label>
                </div>
                <div class="input_grp">
                  <input type="text"  name="name"  value="{{$user->city}}">
                  <label>City</label>
                </div>
              </div>
            </div>
            <div class="input_grp">
              <input type="text"  name="email" value="{{$user->business_name}}">
              <label>Membership</label>
            </div>
            <div class="input_grp">
              <input type="email"  name="email" value="{{$user->email}}">
              <label>Email</label>
            </div>
            <div class="input_grp">
              <input type="email"  name="email" value="{{$user->phone}}">
              <label>Phone</label>
            </div>
            <div class="input_grp">
              <input type="email"  name="email" value="{{$user->address}}">
              <label>Address</label>
            </div>
            <!-- <div class="input_grp">
              <input  name="home_phone"  autofocus="">
              <label>Home Phone No</label>
            </div>
            <div class="input_grp">
              <input  name="mobile_phone"  autofocus="">
              <label>Cell Phone No</label>
            </div> -->
            
            <div class="confirm_btn">
              <button type="submit" class="btn">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>


@endsection()

</body>
</html>
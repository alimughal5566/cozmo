 <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">

      @if(Auth::user()->image_name!="")

      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" style="width: 83px; height: 83px;" src="<?php echo url("img/". Auth::user()->image_name);?>" alt="User Image">
        <div>
      @else
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          @endif
          <p class="app-sidebar__user-name">{{Auth::user()->name}}</p>
          <p class="app-sidebar__user-designation">{{Auth::user()->email}}</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item <?php if(Request::segment(1) == "dashboard") echo "active"; ?>" href="{{url('/dashboard')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
{{--Agent Management--}}
        <li><a class="app-menu__item <?php if(Request::segment(1) == "users") echo "active"; ?>" href="{{url('users')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Agent Management</span></a></li>
{{----}}
{{--blogs          --}}
          <li><a class="app-menu__item <?php if(Request::segment(1) == "Blogs") echo "active"; ?>" href="{{url('/blogs')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Blogs</span></a></li>

          {{--          --}}
{{--          Blogs Categories--}}
          <li><a class="app-menu__item <?php if(Request::segment(1) == "/blog_category/home") echo "active"; ?>" href="{{url('/blog_category/home')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Blog Category</span></a></li>

          {{--          --}}

         <li><a class="app-menu__item <?php if(Request::segment(1) == "product") echo "active"; ?>" href="{{url('product')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Properties</span></a></li>
      <!--    <li><a class="app-menu__item <?php if(Request::segment(1) == "MultiCompetitions") echo "active"; ?>" href="{{url('MultiCompetitions')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Multi Competitions</span></a></li>-->
         <li><a class="app-menu__item <?php if(Request::segment(1) == "propertyHomeView") echo "active"; ?>" href="{{route('propertyHomeView')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Property Type</span></a></li>
         <li><a class="app-menu__item <?php if(Request::segment(1) == "saleHomeView") echo "active"; ?>" href="{{route('saleHomeView')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Property sale Type</span></a></li>
         <li><a class="app-menu__item <?php if(Request::segment(1) == "resourceCategoryHome") echo "active"; ?>" href="{{route('resourceCategoryHome')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Resources Category</span></a></li>
         <li><a class="app-menu__item <?php if(Request::segment(1) == "resourceHome") echo "active"; ?>" href="{{route('resourceHome')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Resources</span></a></li>
         <li><a class="app-menu__item <?php if(Request::segment(1) == "Rental Price History") echo "active"; ?>" href="{{route('rentalPriceHistoryHomeView')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Rental Price History</span></a></li>
         <li><a class="app-menu__item <?php if(Request::segment(1) == "Departments") echo "active"; ?>" href="{{route('departmentsHomeView')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Departments</span></a></li>












        <li><a class="app-menu__item" href="{{url('logout')}}"><i class="app-menu__icon fa fa-sign-out"></i><span class="app-menu__label">Logout</span></a></li>



      </ul>
        </div>
    </aside>

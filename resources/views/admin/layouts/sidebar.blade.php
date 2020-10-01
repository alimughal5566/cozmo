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
          <li><a class="app-menu__item <?php if(Request::segment(1) == "Blogs") echo "active"; ?>" href="{{route('blogHomeView')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Blogs</span></a></li>

          {{--          --}}
{{--          Blogs Categories--}}
          <li><a class="app-menu__item <?php if(Request::segment(1) == "/blog_category/home") echo "active"; ?>" href="{{url('/blog_category/home')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Blog Category</span></a></li>

          {{--          --}}

         <li><a class="app-menu__item <?php if(Request::segment(1) == "product") echo "active"; ?>" href="{{route('addressHomeView')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Property Address</span></a></li>
{{--          --}}
          <li><a class="app-menu__item <?php if(Request::segment(1) == "companies") echo "active"; ?>" href="{{url('companies')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Company</span></a></li>
          <li><a class="app-menu__item <?php if(Request::segment(1) == "building_info") echo "active"; ?>" href="{{url('building_info')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Building Info</span></a></li>
          <li><a class="app-menu__item <?php if(Request::segment(1) == "building_documents") echo "active"; ?>" href="{{url('building_documents')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Building Documents</span></a></li>
          <li><a class="app-menu__item <?php if(Request::segment(1) == "building_amenities") echo "active"; ?>" href="{{url('building_amenities')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Building Amenities</span></a></li>
          <li><a class="app-menu__item <?php if(Request::segment(1) == "nearby_transit_lines.home") echo "active"; ?>" href="{{route('nearby_transit_lines.home')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Nearby Transit Lines</span></a></li>
          <li><a class="app-menu__item <?php if(Request::segment(1) == "properties") echo "active"; ?>" href="{{url('/properties/home')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Properties</span></a></li>
         <li><a class="app-menu__item <?php if(Request::segment(1) == "MultiCompetitions") echo "active"; ?>" href="{{url('MultiCompetitions')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Multi Competitions</span></a></li>
      <!--    <li><a class="app-menu__item <?php if(Request::segment(1) == "MultiCompetitions") echo "active"; ?>" href="{{url('MultiCompetitions')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Multi Competitions</span></a></li>-->
         <li><a class="app-menu__item <?php if(Request::segment(1) == "propertyHomeView") echo "active"; ?>" href="{{route('propertyHomeView')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Property Type</span></a></li>
         <li><a class="app-menu__item <?php if(Request::segment(1) == "saleHomeView") echo "active"; ?>" href="{{route('saleHomeView')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Property sale Type</span></a></li>
         <li><a class="app-menu__item <?php if(Request::segment(1) == "resourceCategoryHome") echo "active"; ?>" href="{{route('resourceCategoryHome')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Resources Category</span></a></li>
         <li><a class="app-menu__item <?php if(Request::segment(1) == "resourceHome") echo "active"; ?>" href="{{route('resourceHome')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Resources</span></a></li>
         <li><a class="app-menu__item <?php if(Request::segment(1) == "Rental Price History") echo "active"; ?>" href="{{route('rentalPriceHistoryHomeView')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Rental Price History</span></a></li>
         <li><a class="app-menu__item <?php if(Request::segment(1) == "Departments") echo "active"; ?>" href="{{route('departmentsHomeView')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Departments</span></a></li>
         <li><a class="app-menu__item <?php if(Request::segment(1) == "property_listing_amenities") echo "active"; ?>" href="{{route('property_listing_amenities.home')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Property Listing Amenities</span></a></li>
         <li><a class="app-menu__item <?php if(Request::segment(1) == "property_options") echo "active"; ?>" href="{{route('property_options.home')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Property Options</span></a></li>
         <li><a class="app-menu__item <?php if(Request::segment(1) == "property_image") echo "active"; ?>" href="{{route('index_property_image')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Property Images</span></a></li>
         <li><a class="app-menu__item <?php if(Request::segment(1) == "property-home-view") echo "active"; ?>" href="{{route('propertyHomeView')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Property Types</span></a></li>
         <li><a class="app-menu__item <?php if(Request::segment(1) == "listing_sale_price_changes.home") echo "active"; ?>" href="{{route('listing_sale_price_changes.home')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Listing Sale Price Changes</span></a></li>
         <li><a class="app-menu__item <?php if(Request::segment(1) == "property_saves.home") echo "active"; ?>" href="{{route('property_saves.home')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Property Saves</span></a></li>












        <li><a class="app-menu__item" href="{{url('logout')}}"><i class="app-menu__icon fa fa-sign-out"></i><span class="app-menu__label">Logout</span></a></li>





      </ul>
        </div>
      </div>
    </aside>

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
          <li><a class="app-menu__item <?php if(Request::segment(1) == "Blogs") echo "active"; ?>" href="#"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Blogs</span></a></li>

          {{--          --}}
{{--          Blogs Categories--}}
          <li><a class="app-menu__item <?php if(Request::segment(1) == "/blog_category/home") echo "active"; ?>" href="{{url('/blog_category/home')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Blog Category</span></a></li>

          {{--          --}}

{{--          --}}
         <li><a class="app-menu__item <?php if(Request::segment(1) == "product") echo "active"; ?>" href="{{url('product')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Properties</span></a></li>
         <li><a class="app-menu__item <?php if(Request::segment(1) == "MultiCompetitions") echo "active"; ?>" href="{{url('MultiCompetitions')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Multi Competitions</span></a></li>
         <li><a class="app-menu__item <?php if(Request::segment(1) == "propertyHomeView") echo "active"; ?>" href="{{route('propertyHomeView')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Property Type</span></a></li>
         <li><a class="app-menu__item <?php if(Request::segment(1) == "saleHomeView") echo "active"; ?>" href="{{route('saleHomeView')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Property sale Type</span></a></li>
         <li><a class="app-menu__item <?php if(Request::segment(1) == "resourceCategoryHome") echo "active"; ?>" href="{{route('resourceCategoryHome')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Resources Category</span></a></li>
         <li><a class="app-menu__item <?php if(Request::segment(1) == "resourceHome") echo "active"; ?>" href="{{route('resourceHome')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Resources</span></a></li>
          <!--<li><a class="app-menu__item <?php if(Request::segment(1) == "article") echo "active"; ?>" href="{{url('article')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Article Management</span></a></li>-->
{{--         <li><a class="app-menu__item <?php if(Request::segment(1) == "propertyHomeView") echo "active"; ?>" href="{{route('propertyHomeView')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Prperty Type</span></a></li>--}}
{{--         <li><a class="app-menu__item <?php if(Request::segment(1) == "saleHomeView") echo "active"; ?>" href="{{route('saleHomeView')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Prperty sale Type</span></a></li>--}}
         <li><a class="app-menu__item <?php if(Request::segment(1) == "Rental Price History") echo "active"; ?>" href="{{route('rentalPriceHistoryHomeView')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Rental Price History</span></a></li>
         <li><a class="app-menu__item <?php if(Request::segment(1) == "Departments") echo "active"; ?>" href="{{route('departmentsHomeView')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Departments</span></a></li>




      <!--<li><a class="app-menu__item <?php if(Request::segment(1) == "article") echo "active"; ?>" href="{{url('article')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Article Management</span></a></li>-->
          <!--<li><a class="app-menu__item <?php if(Request::segment(1) == "article_comments") echo "active"; ?>" href="{{url('article_comments')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Article Comments</span></a></li>-->
          <!--<li><a class="app-menu__item <?php if(Request::segment(1) == "writer") echo "active"; ?>" href="{{url('writer')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Article Writer</span></a></li>-->

          <!--@if(Auth::check() && Auth::user()->user_role == 1)-->
          <!--<li><a class="app-menu__item <?php if(Request::segment(1) == "discount_coupon") echo "active"; ?>" href="{{url('discount_coupon')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Discount Coupon</span></a></li>-->
          <!--@endif-->

          <!--<li><a class="app-menu__item <?php if(Request::segment(2) == "FreeCompetitions") echo "active"; ?>" href="{{url('admin/FreeCompetitions')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Un-Paid Ticket Competitions</span></a></li>-->

          <!--<li><a class="app-menu__item <?php if(Request::segment(2) == "PaidCompetitions") echo "active"; ?>" href="{{url('/show_paid_ticket')}}"><i class="app-menu__icon fa fa-gift"></i><span class="app-menu__label">Paid Ticket Competitions</span></a></li>-->

        <!--<li><a class="app-menu__item <?php if(Request::segment(1) == "title") echo "active"; ?>" href="{{url('/title')}}"><i class="app-menu__icon fa fa-hashtag"></i><span class="app-menu__label">Title</span></a></li>-->

      <!--   <li><a class="app-menu__item <?php /*if(Request::segment(1) == "drivers")*/ /* echo "active"*/; ?>" href="{{route('iframe.admin')}}"><i class="app-menu__icon fa fa-book"></i><span class="app-menu__label">Iframe</span></a></li> -->

		<!--<li><a class="app-menu__item <?php if(Request::segment(2) == "blog")  echo "active"; ?>" href="{{route('blog.admin')}}"><i class="app-menu__icon fa fa-book"></i><span class="app-menu__label">Slider</span></a></li>-->




		<!--<li><a class="app-menu__item" href="{{url('subscribers')}}"><i class="app-menu__icon fa fa-sign-out"></i><span class="app-menu__label">Subscribers</span></a></li>-->
		<!--<li><a class="app-menu__item <?php if(Request::segment(1) == "email_schedule") echo "active"; ?>" href="{{url('email_schedule')}}"><i class="app-menu__icon fa fa-thumbs-up"></i><span class="app-menu__label">Email Schedule</span></a></li>-->
		<!--<li><a class="app-menu__item <?php if(Request::segment(1) == "subscribers") echo "active"; ?>" href="{{url('subscribers')}}"><i class="app-menu__icon fa fa-thumbs-up"></i><span class="app-menu__label">Subscribers</span></a></li>-->

    <!--<li><a class="app-menu__item <?php if(Request::segment(1) == "purchase_Peers") echo "active"; ?>" href="{{url('purchase_Peers')}}"><i class="app-menu__icon fa fa-thumbs-up"></i><span class="app-menu__label">Purchase Peers</span></a></li>-->

    <!--<li><a class="app-menu__item <?php if(Request::segment(1) == "article_category") echo "active"; ?>" href="{{url('article_category')}}"><i class="app-menu__icon fa fa-thumbs-up"></i><span class="app-menu__label">Article Category</span></a></li>-->


        <!--  <li><a class="app-menu__item <?php /*if(Request::segment(1) == "drivers")*/ /* echo "active"*/; ?>" href="{{route('blog.admin')}}"><i class="app-menu__icon fa fa-book"></i><span class="app-menu__label">Slider</span></a></li> -->

         <!--  <li><a class="app-menu__item <?php /*if(Request::segment(1) == "drivers")*/ /* echo "active"*/; ?>" href="{{route('blog.admin')}}"><i class="app-menu__icon fa fa-book"></i><span class="app-menu__label">Blogs</span></a></li> -->

        <!--<li><a class="app-menu__item <?php if(Request::segment(2) == "faqs") echo "active"; ?>" href="{{url('/admin/faqs')}}"><i class="app-menu__icon fa fa-car"></i><span class="app-menu__label">Faqs</span></a></li>-->
        <!--<li><a class="app-menu__item <?php if(Request::segment(1) == "cars") echo "active"; ?>" href="{{url('/admin/pages')}}"><i class="app-menu__icon fa fa-file-text-o"></i><span class="app-menu__label">Pages</span></a></li> -->
         <!--<li><a class="app-menu__item <?php if(Request::segment(1) == "ip_address") echo "active"; ?>" href="{{url('freecompshow')}}"><i class="app-menu__icon fa fa-bars"></i><span class="app-menu__label">Free Entry</span></a></li>-->
        <!--<li><a class="app-menu__item <?php if(Request::segment(2) == "ip_address") echo "active"; ?>" href="{{url('/admin/ip_address')}}"><i class="app-menu__icon fa fa-bars"></i><span class="app-menu__label">Site Visitor</span></a></li>-->

         <!--<li><a class="app-menu__item <?php if(Request::segment(2) == "setting") echo "active"; ?>" href="{{url('/admin/setting')}}"><i class="app-menu__icon fa fa-cog"></i><span class="app-menu__label">Setting</span></a></li>-->

         <!--<li><a class="app-menu__item <?php if(Request::segment(1) == "ShowTemplateSettings") echo "active"; ?>" href="{{url('/ShowTemplateSettings')}}"><i class="app-menu__icon fa fa-codepen"></i><span class="app-menu__label">Template Management</span></a></li>-->

         <!--<li><a class="app-menu__item <?php if(Request::segment(1) == "show_testimonials") echo "active"; ?>" href="{{url('/show_testimonials')}}"><i class="app-menu__icon fa fa-comments-o"></i><span class="app-menu__label">Testimonials</span></a></li>-->

         <!--<li><a class="app-menu__item <?php if(Request::segment(1) == "upload_excel") echo "active"; ?>" href="{{url('/upload_excel')}}"><i class="app-menu__icon fa fa-comments-o"></i><span class="app-menu__label">Upload Excel File</span></a></li>-->


        <li><a class="app-menu__item" href="{{url('logout')}}"><i class="app-menu__icon fa fa-sign-out"></i><span class="app-menu__label">Logout</span></a></li>

		<!--<li><a class="app-menu__item <?php // if(Request::segment(2) == "settings") echo "active"; ?>" href="{{url('admin/settings')}}"><i class="app-menu__icon fa fa-cog"></i><span class="app-menu__label">Settings</span></a></li>


        <!--<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Tables</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="table-basic.html"><i class="icon fa fa-circle-o"></i> Basic Tables</a></li>
            <li><a class="treeview-item" href="table-data-table.html"><i class="icon fa fa-circle-o"></i> Data Tables</a></li>
          </ul>
        </li> -->

      </ul>
    </aside>

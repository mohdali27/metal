 <!-- BEGIN SIDEBPANEL-->
    <nav class="page-sidebar" data-pages="sidebar">
      <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
      <div class="sidebar-overlay-slide from-top" id="appMenu">
        <div class="row">
          <div class="col-xs-6 no-padding">
            <a href="#" class="p-l-40"><img src="<?=HTTP_ROOT?>img/admin/assets/img/demo/social_app.svg" alt="socail">
            </a>
          </div>
          <div class="col-xs-6 no-padding">
            <a href="#" class="p-l-10"><img src="<?=HTTP_ROOT?>img/admin/assets/img/demo/email_app.svg" alt="socail">
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6 m-t-20 no-padding">
            <a href="#" class="p-l-40"><img src="<?=HTTP_ROOT?>img/admin/assets/img/demo/calendar_app.svg" alt="socail">
            </a>
          </div>
          <div class="col-xs-6 m-t-20 no-padding">
            <a href="#" class="p-l-10"><img src="<?=HTTP_ROOT?>img/admin/assets/img/demo/add_more.svg" alt="socail">
            </a>
          </div>
        </div>
      </div>
      <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
      <!-- BEGIN SIDEBAR MENU HEADER-->
      <div class="sidebar-header">
        <img src="<?=HTTP_ROOT?>img/front/images/logo.png" alt="logo" class="brand" data-src="<?=HTTP_ROOT?>img/front/images/logo.png" data-src-retina="<?=HTTP_ROOT?>img/front/images/logo.png" width="80px" height="45px">
        <div class="sidebar-header-controls" style="margin-left:20%;">
         <?php /* <button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" data-pages-toggle="#appMenu"><i class="fa fa-angle-down fs-16"></i>
          </button> */ ?>
          <button type="button" class="btn btn-link visible-lg-inline" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
          </button>
        </div>
      </div>
      <!-- END SIDEBAR MENU HEADER-->
      <!-- START SIDEBAR MENU -->
      <div class="sidebar-menu">
        <!-- BEGIN SIDEBAR MENU ITEMS-->
        <ul class="menu-items">
          <li class="m-t-30 ">
            <a href="<?=HTTP_ROOT?>admin" class="detailed">
              <span class="title">Dashboard</span>
              
            </a>
            <span class="bg-success icon-thumbnail"><i class="pg-home"></i></span>
          </li>
         
          
          <li>
            <a href="javascript:;"><span class="title">Manage Events</span>
            <span class="arrow"></span></a>
            <span class="icon-thumbnail"><i class="pg-bag"></i></span>
            <ul class="sub-menu">
			  <li class="">
                <a href="<?=HTTP_ROOT?>admin/events/index">Events</a>
                <span class="icon-thumbnail"><i class="fa fa-film"></i></span>
              </li>
              <li class="">
                <a href="<?=HTTP_ROOT?>admin/events/addevent">Add Event</a>
                <span class="icon-thumbnail"><i class="fa fa-birthday-cake"></i></span>
              </li>
            </ul>
          </li>
          <li>
            <a href="javascript:;"><span class="title">Events Schedules</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i class="pg-calender"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="<?=HTTP_ROOT?>admin/schedules/index">Schedules</a>
                <span class="icon-thumbnail"><i class="fa fa-table"></i></span>
              </li>
              <li class="">
                <a href="<?=HTTP_ROOT?>admin/schedules/addschedule">Add Schedule</a>
                <span class="icon-thumbnail"><i class="fa fa-calendar-plus-o"></i></span>
              </li>
              
            </ul>
          </li>
		  <li>
            <a href="javascript:;"><span class="title">Events Facilities</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i class="fa fa-cutlery"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="<?=HTTP_ROOT?>admin/facilities/index">Facilities</a>
                <span class="icon-thumbnail"><i class="fa fa-coffee"></i></span>
              </li>
              <li class="">
                <a href="<?=HTTP_ROOT?>admin/facilities/addfacilities">Add Facilities</a>
                <span class="icon-thumbnail"><i class="fa fa-spoon"></i></span>
              </li>
              
            </ul>
          </li>
          <li>
            <a href="javascript:;"><span class="title">Speakers</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i class="glyphicon glyphicon-user"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="<?=HTTP_ROOT?>admin/speakers/index">Speakers</a>
                <span class="icon-thumbnail"><i class="fa fa-users"></i></span>
              </li>
              <li class="">
                <a href="<?=HTTP_ROOT?>admin/speakers/addspeaker">Add Speakers</a>
                <span class="icon-thumbnail"><i class="fa fa-user-plus"></i></span>
              </li>
            </ul>
          </li>
		  <li>
            <a href="javascript:;"><span class="title">Tickets</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i class="fa fa-flag"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="<?=HTTP_ROOT?>admin/tickets/index">Tickets</a>
                <span class="icon-thumbnail"><i class="fa fa-ticket"></i></span>
              </li>
              <li class="">
                <a href="<?=HTTP_ROOT?>admin/tickets/addtickets">Add Ticket</a>
                <span class="icon-thumbnail"><i class="fa fa-plus-square"></i></span>
              </li>
            </ul>
          </li>
         <li>
            <a href="javascript:;"><span class="title">Users</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i class="glyphicon glyphicon-user"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="<?=HTTP_ROOT?>admin/users/index">Users</a>
                <span class="icon-thumbnail">U</span>
              </li>
              <li class="">
                <a href="<?=HTTP_ROOT?>admin/users/adduser">Add User</a>
                <span class="icon-thumbnail">AU</span>
              </li>
            </ul>
          </li>
          
        <div class="clearfix"></div>
      </div>
      <!-- END SIDEBAR MENU -->
    </nav>
    <!-- END SIDEBAR -->
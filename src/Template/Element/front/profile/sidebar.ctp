    <!-- BEGIN SIDEBPANEL-->
    <nav class="page-sidebar" data-pages="sidebar"> <!--  style="display:none;" -->
      <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
      <div class="sidebar-overlay-slide from-top" id="appMenu">
        <div class="row">
          <div class="col-xs-6 no-padding">
            <a href="#" class="p-l-40"><img src="<?= HTTP_ROOT ?>assets/img/demo/social_app.svg" alt="socail">
            </a>
          </div>
          <div class="col-xs-6 no-padding">
            <a href="#" class="p-l-10"><img src="<?= HTTP_ROOT ?>assets/img/demo/email_app.svg" alt="socail">
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6 m-t-20 no-padding">
            <a href="#" class="p-l-40"><img src="<?= HTTP_ROOT ?>assets/img/demo/calendar_app.svg" alt="socail">
            </a>
          </div>
          <div class="col-xs-6 m-t-20 no-padding">
            <a href="#" class="p-l-10"><img src="<?= HTTP_ROOT ?>assets/img/demo/add_more.svg" alt="socail">
            </a>
          </div>
        </div>
      </div>
      <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
      <!-- BEGIN SIDEBAR MENU HEADER-->
      <div class="sidebar-header">
        <img src="<?= HTTP_ROOT ?>assets/img/logo-mi_white.png" alt="logo" class="brand" data-src="<?= HTTP_ROOT ?>assets/img/logo-mi_white.png" data-src-retina="<?= HTTP_ROOT ?>assets/img/logo-mi_white.png" width="75" height="45">
        <div class="sidebar-header-controls">
          <button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" data-pages-toggle="#appMenu"><i class="fa fa-angle-down fs-16"></i>
          </button>
          <button type="button" class="btn btn-link visible-lg-inline" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
          </button>
        </div>
      </div>
      <!-- END SIDEBAR MENU HEADER-->
      <!-- START SIDEBAR MENU -->
      <div class="sidebar-menu" id="main-sidemenu">
        <!-- BEGIN SIDEBAR MENU ITEMS-->
        <ul class="menu-items">
          <li class="m-t-30">
            <a href="javascript:;"><span class="title">My Profile</span>
            <span class="arrow"></span></a>
            <span class="bg-success icon-thumbnail"><i class="fa fa-user"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="<?= HTTP_ROOT ?>profile">View Profile</a>
                <span class="icon-thumbnail">V</span>
              </li>
              <li class="">
                <a href="<?= HTTP_ROOT ?>users/editprofile">Edit Profile</a>
                <span class="icon-thumbnail">E</span>
              </li>
              <li class="">
                <a href="public-profile.html">Public Profile</a>
                <span class="icon-thumbnail">P</span>
              </li>
              <li class="">
                <a href="general-public.html">General Public Profile</a>
                <span class="icon-thumbnail">G</span>
              </li>
              <li class="">
                <a href="guest-profile.html">Guest Profile</a>
                <span class="icon-thumbnail">M</span>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="message.html" class="detailed">
              <span class="title">Messages</span>
              <span class="details">4 New Messages</span>
            </a>
            <span class="icon-thumbnail"><i class="pg-mail"></i></span>
          </li>
          <li>
            <a href="calendar.html" class="detailed">
              <span class="title">Calendar</span>
              <span class="details">4 Events Waiting</span>
            </a><!-- <span class=" arrow"></span> -->
            <span class="icon-thumbnail"><i class="pg-calender"></i></span>
          </li>
          <li class="">
            <a href="javascript:;"><span class="title">Photos</span>
            <span class="arrow"></span></a>
            <span class="icon-thumbnail"><i class="fa fa-picture-o"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="photo-gallery.html">My Photos</a>
                <span class="icon-thumbnail">P</span>
              </li>
              <li class="">
                <a href="metal-photo.html">METal Photos</a>
                <span class="icon-thumbnail">M</span>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="javascript:;">
              <span class="title">Videos</span>
              <span class="arrow"></span>
            </a>
            <span class="icon-thumbnail"><i class="fa fa-video-camera"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="video-gallery.html">My Videos</a>
                <span class="icon-thumbnail">V</span>
              </li>
              <li class="">
                <a href="metal-video.html">METal Videos</a>
                <span class="icon-thumbnail">M</span>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="events.html" class="detailed">
              <span class="title">Events</span>
              <span class="details">Create an Event</span>
            </a>
            <span class="icon-thumbnail"><i class="pg pg-ui"></i></span>
          </li>
          <li class="">
            <a href="profile-page.html" class="detailed">
              <span class="title">Friends Invitations</span>
              <span class="details">11 New Invitations</span>
            </a>
            <span class="icon-thumbnail"><i class="fa fa-users"></i></span>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <!-- END SIDEBAR MENU -->
    </nav>
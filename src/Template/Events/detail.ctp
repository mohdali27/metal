<?php //pr($event);die;?>
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark single-event-page" data-bg-img="<?=HTTP_ROOT?>files/events/event_banner/<?=$event['image_dir']?>/<?=$event['event_banner']?>">
      <div class="container">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h4 class="mt-0 text-white-light sm-text-center">This Saturday Event</h4>
              <h2 class="mt-0 text-white-light sm-text-center"><?=$event['event_name']?></h2>
              <h6 class="mt-0 text-white-light sm-text-center"><?=$event['start_date_time']->nice()?></h6>
            </div>
          </div>
        </div>
      </div>  
    </section>
    
    <!-- Section: About -->
    <section id="about">
      <div class="container-fluid pt-0 pb-0">
        <div class="row" id="event-details">
          <div class="divider layer-overlay overlay-white-light equal-height">
            <div class="col-md-12 col-lg-6 md-text-center sm-height-auto">
              <div class="pt-50 pl-100 pl-md-0 pb-0 pr-0">
                <h3 class="text-white2">Join the event</h3>
                <ul class="list-inline xs-list-inline-none mt-30">
                  <li>
                    <h4 data-text-color="#777"><i class="fa fa-map-marker text-theme-colored"></i> Location</h4>
                    <h6 class="text-black-light"><?=$event['event_location']?></h6>
                  </li>
                  <li class="ml-30">
                    <h4 data-text-color="#777"><i class="fa fa-calendar-o text-theme-colored"></i> Event Date</h4>
                    <h6 class="text-black-light">From <?=$event['start_date_time']->nice()?></h6>
                  </li>
                  <li class="ml-30">
                    <h4 data-text-color="#777"><i class="fa fa-clock-o text-theme-colored"></i> Event Timings</h4>
					<?php $timing=str_replace('-','to',$event['event_timing']);?>
                    <h6 class="text-black-light"><?=$timing?></h6>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-12 col-lg-6 pr-0 pl-md-0 sm-height-auto bg-theme-colored">
              <div id="clock" class="countdown-timer timer-box pt-90 pb-70" data-endingdate="2016/02/17"></div>
              <!-- In case the event has ended display "Event Ended" -->
            </div>
          </div>
        </div>
      </div>

    <!-- Sticky Sub Menu -->
    <div style="z-index: 301; top: auto; position: absolute;" class="av-submenu-container main_color  avia-builder-el-6  el_after_av_section  el_before_av_section  av-sticky-submenu submenu-not-first container_wrap fullsize" id="sub_menu1">
      <div class="container av-menu-mobile-active ">
        <a data-av_iconfont="entypo-fontello" data-av_icon="" aria-hidden="true" class="mobile_menu_toggle" href="#">
          <span class="av-current-placeholder">Menu</span></a>
          <ul class="av-subnav-menu av-submenu-pos-center" id="av-custom-submenu-1">
            <li class="menu-item menu-item-top-level  menu-item-top-level-1"><a href="#schedule"><span class="avia-bullet"></span><span class="avia-menu-text">Event Schedule</span></a></li>

            <li class="menu-item menu-item-top-level  menu-item-top-level-2"><a href="#join-now"><span class="avia-bullet"></span><span class="avia-menu-text">Join Now</span></a></li>

            <li class="menu-item menu-item-top-level  menu-item-top-level-3"><a href="#speakers"><span class="avia-bullet"></span><span class="avia-menu-text">Speakers</span></a></li>

            <li class="menu-item menu-item-top-level  menu-item-top-level-4"><a href="#facilities"><span class="avia-bullet"></span><span class="avia-menu-text">Facilities</span></a></li>

            <li class="menu-item menu-item-top-level  menu-item-top-level-4"><a href="#tickets"><span class="avia-bullet"></span><span class="avia-menu-text">Tickets</span></a></li>

            <li class="menu-item menu-item-top-level  menu-item-top-level-4"><a href="#location"><span class="avia-bullet"></span><span class="avia-menu-text">Location</span></a></li>
        </ul>
      </div>
    </div>
    <div class="sticky_placeholder"></div>
    <!-- Sticky Sub Menu Ends Here-->

      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3 class="sub-title font-28 m-0 mt-20 mt-md-0" data-text-color="#bbb"><?=$event['event_name']?></h3>
            <!--<h2 class="title font-playfair font-48 text-black-light mt-0 mb-20">Peter Hurley</h2>-->
            <p class="mb-20"><?=$event['long_desc'] ?></p>
            <a class="btn btn-colored btn-theme-colored btn-lg text-uppercase smooth-scroll font-13 mt-30" href="#schedule">See Schedule</a>
            <a class="btn btn-colored btn-lg text-uppercase smooth-scroll font-13 mt-30" href="#tickets">Join Event Now</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Schedule -->

    <section id="schedule">
      <div class="divider parallax layer-overlay overlay-darkblue" data-bg-img="<?=HTTP_ROOT?>img/front/images/title-bg.jpg">
        <div class="container pt-50 pb-50">
          <div class="section-title">
            <div class="row">
              <div class="col-md-6 col-md-offset-3 text-center">
                <h2 class="title text-white mb-0">Event Schedule</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    
	  
	  <div data-bg-img="http://placehold.it/1920x1280">
        <div class="container pt-80 pb-80">
          <div class="section-content">
            <div class="row">
              <div class="col-md-12">
			    
                <div class="schedule-tab bg-white">
				<?php if(!empty($event['schedules'])){?>
                  <ul class="nav nav-tabs">
                     
					 <?php $i=1; foreach($event['schedules'] as $key=>$value){ //pr($value);die;?>
				         <li <?php if($i==1){?>class="active"<?php }?>><a href="#tab<?=$i?>" data-toggle="tab"><?=$value['sch_name']?><span>
                         <?php  $date=$value['sch_date']->i18nFormat();?>
						 <?= date('j, M Y',strtotime($date));?></span></a></li>
				     <?php $i++;}?>
                  </ul>
                  <div class="tab-content">
				    <?php $i=1; foreach($event['schedules'] as $key=>$value){ ?>
                    <div class="tab-pane fade<?php if($i==1){?> in active <?php }?>" id="tab<?=$i?>">
                      <div class="cd-timeline cd-container">
                        <!-- cd-timeline-block -->
						<?php 
						    if(!empty($value['schedule_tasks'])){
						    foreach($value['schedule_tasks'] as $k=>$v){ 
						?>
                        <div class="cd-timeline-block">
                          <div class="cd-timeline-img cd-movie"> <i class="fa fa-user"></i> </div>
                          <div class="cd-timeline-content">
                            <div class="row equal-height">
                              <div class="col-sm-8 pr-0 sm-height-auto">
                                <div class="cd-content-left p-15">
                                 <h5 class="timeline-title"><?= $v['name']?> <span class="toggle-content">
										  <?php if($v['task_description']){?>
											  <i class="fa fa-plus-square-o"></i></span></h5>
											  <p><?=$v['task_description']?></p>
							              <?php }?>
										<?php if(isset($v['user'])){?>
										  <div class="cd-speaker clearfix">
											<img width="70" class="pull-left img-circle mr-15" src="<?=HTTP_ROOT?>files/speakers/image/<?=$v['user']['image_dir']?>/portrait_<?=$v['user']['image']?>" alt=""> 
											<h6 class="pt-0 mb-0"><?=$v['user']['first_name']?> <?=$v['user']['last_name']?></h6><span class="font-12">Founder - <?=$v['user']['founder']?></span>
										  </div>
							            <?php }?>  
										</div>
									  </div>
									  <div class="col-sm-4 pl-0 pl-sm-15 sm-height-auto">
										<div class="cd-content-right p-15">
										  <ul class="cd-timeline-meta mt-sm-0">
										    <?php if($v['task_time']){?>
											<li><i class="fa fa-clock-o"></i> <?=$v['task_time']?></li>
											<?php }?>
											<?php if($v['task_location']){?>
											<li><i class="fa fa-thumb-tack"></i> <?=$v['task_location']?></li>
											<?php } ?>
										  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
						<?php }}?>
                      </div>
                      <!-- cd-timeline -->
                    </div> 
					<?php $i++; }?>
                    </div>
					<?php }else{?>
				       <center>There is no schedule for this event.</center>
				    <?php }?>
                  </div>
				  
				  
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <!-- Section: Call to action -->
    <section class="divider parallax layer-overlay overlay-darkblue join-the-event" id="join-now" style='background-image:url("<?=HTTP_ROOT?>img/front/images/single-event-bg.jpg");'>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h2 class="text-white mt-0">Secure your sit for this event!</h2>
            <h3 class="text-black-light mt-0">Be first to confirm your sit</h3>
          </div>
          <div class="col-md-4">
            <a class="pull-right btn btn-colored btn-success btn-lg text-uppercase font-weight-700 letter-space-1 mt-30 pl-60 pr-60" href="#tickets">Join the Event</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Speaker -->
    <section id="speakers">
      <div class="container pt-50 pb-50">
        <div class="section-title">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="text-center text-uppercase font-playfair text-black-light mt-0 mb-0">Speakers of the event</h2>
            </div>
          </div>
        </div>
      </div>
      <div data-bg-color="#fff">
        <div class="container pt-0 pb-80">
          <div class="section-content">
            <div class="row multi-row-clearfix">
			<?php 
			   if(!empty($event['event_speakers'])){
				   foreach($event['event_speakers'] as $k=>$v){
					   if(isset($v['user']) && !empty($v['user'])){
			?>
              <div class="col-xs-12 col-sm-6 col-md-3 mb-30">
                <div class="team-member clearfix">
                  <div class="team-thumb"><img alt="" src="<?=HTTP_ROOT?>files/speakers/image/<?=$v['user']['image_dir']?>/<?=$v['user']['image']?>" class="img-fullwidth"></div>
                  <div class="overlay">
                    <div class="content text-center">
                      <h3 class="author mb-0"><a href="sp-peter-hurley.html"><?=$v['user']['first_name']?> <?=$v['user']['last_name']?></a></h3>
                      <h6 class="title text-black font-14 mt-5 mb-15">Founder - <?=$v['user']['founder']?></h6>
                    </div>
                  </div>
                  <ul class="social-icons flat icon-white square mt-10">
                    <li class=""><a href="<?=$v['user']['fb_link']?>"><i class="fa fa-facebook pr-10 pl-10"></i></a></li>
                    <li class=""><a href="<?=$v['user']['twitter_link']?>"><i class="fa fa-twitter pr-10 pl-10"></i></a></li>
                    <li><a href="<?=$v['user']['google_plus_link']?>"><i class="fa fa-google-plus pr-10 pl-10"></i></a></li>
                  </ul>
                </div>
              </div>
			   <?php }}}?>  
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Event Facilities -->
    <section id="facilities">
      <div class="divider parallax layer-overlay overlay-darkblue" data-bg-img="<?=HTTP_ROOT?>img/front/images/single-event-bg.jpg">
        <div class="container pt-50 pb-50">
          <div class="section-title">
            <div class="row">
              <div class="col-md-6 col-md-offset-3 text-center">
                <h2 class="title text-white mb-0">Event Facilities</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div data-bg-color="#fff">
        <div class="container pb-80 pt-80">
          <div class="section-content">
            <div class="row">
			<?php 
			  if(!empty($event['facilities'])){
				  foreach($event['facilities'] as $k=>$v){
		    ?>
              <div class="col-md-4 mb-sm-20">
                <div class="event-facilities">
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?=HTTP_ROOT?>files/facilities/fc_image/<?=$v['image_dir']?>/<?=$v['fc_image']?>" alt="<?=$v['fc_image']?>">
                    <div class="overlay">
                      <h4 class="title"><?=$v['fc_name']?></h4>
                      <p><?=$this->Mystring->turncate($v['short_desc'],'40')?></p>
                      <a class="btn btn-colored btn-theme-colored btn-sm" href="#">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
			<?php }}?> 
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: tickets -->
	<?php if(!empty($event['tickets'])){?>
    <section id="tickets" class="divider parallax layer-overlay overlay-white" data-bg-img="<?=HTTP_ROOT?>img/front/images/single-event-bg.jpg">
      <div class="container pb-80">
        <div class="section-title mb-30">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="title text-theme-colored">Tickets</h2>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row equal-height-pricing-table">
            <div class="col-md-8 col-md-offset-2">
              <div class="col-xs-12 col-sm-6 col-md-6 p-0">
                <div class="pricing-table maxwidth400">
                  <div class="table-price text-white">$<?=$event['tickets'][0]['member_price']?></div>
                  <h6 class="table-title text-theme-colored">for Members</h6>
                  <p><?=$event['tickets'][0]['member_desc']?></p>
                  <a class="btn btn-colored btn-theme-colored btn-sm pl-20 pr-20 mt-30" href="#">Buy Ticket</a> 
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 p-0">
                <div class="pricing-table maxwidth400" data-bg-color="rgba(18,27,38,0.98);">
                  <div class="table-price text-white">$<?=$event['tickets'][0]['guest_price']?></div>
                  <h6 class="table-title text-theme-colored">for Guests</h6>
                  <p><?=$event['tickets'][0]['guest_desc']?></p>
                  <a class="btn btn-colored btn-theme-colored btn-sm pl-20 pr-20 mt-30" href="#">Buy Ticket</a> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php }?>
    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay overlay-darkblue" data-bg-img="<?=HTTP_ROOT?>img/front/images/single-event-bg.jpg">
      <div class="container">
          <div class="section-title">
            <div class="row">
              <div class="col-md-6 col-md-offset-3 text-center">
                <h3 id="people-title" class="title text-white mb-30">People going to the event</h3>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div id="guest-carousel">
              <div class="col-md-1">
                <div class="team-member clearfix">
                  <div class="guest-thumb"><img alt="" src="<?=HTTP_ROOT?>img/front/images/thumb1.jpg" class="img-fullwidth"></div>
                    <div class="content text-center">
                      <h6 class="guest-name mb-0">John Doe</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-1">
                <div class="team-member clearfix">
                  <div class="guest-thumb"><img alt="" src="<?=HTTP_ROOT?>img/front/images/thumb2.jpg" class="img-fullwidth"></div>
                    <div class="content text-center">
                      <h6 class="guest-name mb-0">Chris Doe</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-1">
                <div class="team-member clearfix">
                  <div class="guest-thumb"><img alt="" src="<?=HTTP_ROOT?>img/front/images/thumb1.jpg" class="img-fullwidth"></div>
                    <div class="content text-center">
                      <h6 class="guest-name mb-0">Mick Den</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-1">
                <div class="team-member clearfix">
                  <div class="guest-thumb"><img alt="" src="<?=HTTP_ROOT?>img/front/images/thumb3.jpg" class="img-fullwidth"></div>
                    <div class="content text-center">
                      <h6 class="guest-name mb-0">John Doe</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-1">
                <div class="team-member clearfix">
                  <div class="guest-thumb"><img alt="" src="<?=HTTP_ROOT?>img/front/images/thumb2.jpg" class="img-fullwidth"></div>
                    <div class="content text-center">
                      <h6 class="guest-name mb-0">John Doe</h6>
                  </div>
                </div>
              </div>
<div class="col-md-1">
                <div class="team-member clearfix">
                  <div class="guest-thumb"><img alt="" src="<?=HTTP_ROOT?>img/front/images/thumb1.jpg" class="img-fullwidth"></div>
                    <div class="content text-center">
                      <h6 class="guest-name mb-0">John Doe</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-1">
                <div class="team-member clearfix">
                  <div class="guest-thumb"><img alt="" src="<?=HTTP_ROOT?>img/front/images/thumb2.jpg" class="img-fullwidth"></div>
                    <div class="content text-center">
                      <h6 class="guest-name mb-0">Chris Doe</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-1">
                <div class="team-member clearfix">
                  <div class="guest-thumb"><img alt="" src="<?=HTTP_ROOT?>img/front/images/thumb3.jpg" class="img-fullwidth"></div>
                    <div class="content text-center">
                      <h6 class="guest-name mb-0">John Doe</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-1">
                <div class="team-member clearfix">
                  <div class="guest-thumb"><img alt="" src="<?=HTTP_ROOT?>img/front/images/thumb2.jpg" class="img-fullwidth"></div>
                    <div class="content text-center">
                      <h6 class="guest-name mb-0">John Doe</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-1">
                <div class="team-member clearfix">
                  <div class="guest-thumb"><img alt="" src="<?=HTTP_ROOT?>img/front/images/thumb1.jpg" class="img-fullwidth"></div>
                    <div class="content text-center">
                      <h6 class="guest-name mb-0">Mick Den</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-1">
                <div class="team-member clearfix">
                  <div class="guest-thumb"><img alt="" src="<?=HTTP_ROOT?>img/front/images/thumb3.jpg" class="img-fullwidth"></div>
                    <div class="content text-center">
                      <h6 class="guest-name mb-0">John Doe</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-1">
                <div class="team-member clearfix">
                  <div class="guest-thumb"><img alt="" src="<?=HTTP_ROOT?>img/front/images/thumb2.jpg" class="img-fullwidth"></div>
                    <div class="content text-center">
                      <h6 class="guest-name mb-0">John Doe</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>

        <!-- Section: Sponsors -->
    <section class="divider parallax layer-overlay overlay-white" data-bg-img="<?=HTTP_ROOT?>img/front/single-event-bg.jpg">
      <div class="container pt-70">
        <div class="section-title">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="title text-theme-colored">Sponsors</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="row sponsors-style2 pt-30 pb-20">
                <div class="col-xs-6 col-md-3 text-center">
                  <a href="#"><img src="<?=HTTP_ROOT?>img/front/images/sponsors/bob-n-stacy-logo.png" alt=""></a>
                </div>
                <div class="col-xs-6 col-md-3 text-center">
                  <a href="#"><img src="<?=HTTP_ROOT?>img/front/images/sponsors/bel-air-logo.png" alt=""></a>
                </div>
                <div class="col-xs-6 col-md-3 text-center">
                  <a href="#"><img src="<?=HTTP_ROOT?>img/front/images/sponsors/emporium_thai.png" alt=""></a>
                </div>
                <div class="col-xs-6 col-md-3 text-center">
                  <a href="#"><img src="<?=HTTP_ROOT?>img/front/images/sponsors/quest-logo.png" alt=""></a>
                </div>
                <div class="col-xs-6 col-md-3 text-center">
                  <a href="#"><img src="<?=HTTP_ROOT?>img/front/images/sponsors/stevenson-logo.png" alt=""></a>
                </div>
                <div class="col-xs-6 col-md-3 text-center">
                  <a href="#"><img src="<?=HTTP_ROOT?>img/front/images/sponsors/tender-green-logo.png" alt=""></a>
                </div>
                <div class="col-xs-6 col-md-3 text-center">
                  <a href="#"><img src="<?=HTTP_ROOT?>img/front/images/sponsors/you-are-loved-logo.png" alt=""></a>
                </div>
                <div class="col-xs-6 col-md-3 text-center">
                  <a href="#"><img src="<?=HTTP_ROOT?>img/front/images/sponsors/berries-logo.png" alt=""></a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Contact form -->
    <section id="contact" class="contact-for-event">
      <div class="divider parallax layer-overlay overlay-darkblue" data-bg-img="<?=HTTP_ROOT?>img/front/images/single-event-bg.jpg">
        <div class="container pt-50 pb-50">
          <div class="section-title">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 text-center">
                <h3 class="title text-white mb-0">Meet Up For Registration</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="divider" data-bg-color="#f8f8f8">
        <div class="container pb-50 pt-80">
          <div class="section-content">
            <div class="row multi-row-clearfix">
              <ul class="list-default footer-contact text-center">
                <li><i class="fa fa-map-marker"></i>At The Crest Westwood</li>
                <li><i class="fa fa-envelope"></i>events@metalinternational.com</li>
                <li><i class="fa fa-phone"></i>(310) 305-4100</li>
                <li><i class="fa fa-globe"></i>http://www.metalinternational.com</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Map -->
    <section id="location">
      <div class="container-fluid p-0">
        <div data-popupstring-id="#popupstring1" class="map-canvas autoload-map" data-mapstyle="style1" data-height="400" data-address="121 King Street, Melbourne Victoria 3000 Australia" data-zoom="8" data-marker="<?=HTTP_ROOT?>img/front/images/map-icon-blue.png"></div>
        <div class="map-popupstring hidden" id="popupstring1">
          <div class="text-center">
            <h3>15-20 February, 2016</h3>
            <p>121 King Street, Melbourne Victoria 3000 Australia</p>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
 
<script type="text/javascript">
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});*/
</script>


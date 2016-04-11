<?php foreach($events as $event){?>
            <div class="col-sm-6 col-md-4 col-lg-4">
              <div class="schedule-box maxwidth500 mb-30" data-bg-color="#f5f5f5">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="<?=HTTP_ROOT?>files/events/event_banner/<?=$event->image_dir?>/<?=$event->event_banner?>">
                  <div class="overlay">
                    <a href="#"><i class="fa fa-calendar mr-5"></i></a>
                  </div>
                </div>
                <div class="schedule-details clearfix p-15 pt-10">
                  <h5 class="font-16 title"><a href="<?=HTTP_ROOT?>events/detail/<?=$event->id?>"><?=$event->event_name?></a></h5>
                  <ul class="list-inline font-11 mb-20">
                    <li><i class="fa fa-calendar mr-5"></i> <?=$event->start_date_time->nice()?></li>
                    <li><i class="fa fa-map-marker mr-5"></i><?=$event->event_location?></li>
                  </ul>
                  <p><?=$event->event_desc?></p>
                  <div class="mt-10">
                   <a class="btn btn-colored btn-theme-colored btn-sm" href="#">Register</a>
                   <a class="btn btn-colored btn-sm" href="<?=HTTP_ROOT?>events/detail/<?=$event->id?>">Details</a>
                  </div>
                </div>
              </div>
            </div>
 <?php }?>
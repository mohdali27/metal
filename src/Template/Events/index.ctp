<?php //pr($events);die;?>
<!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="<?=HTTP_ROOT?>img/front/images/events-bg.jpg">
      <div class="container">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-8">
              <h2 class="mt-0 text-white-light sm-text-center">Events</h2>
            </div>
            <div class="col-md-4">
              <ol class="breadcrumb text-center mt-10 white">
                <li><a href="index.html">Home</a></li>
                <li class="active">Events</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>

    <!-- Section: Schedule -->
    <section class="divider" data-bg-color="#f5f5f5">
      <div class="container pt-80 pb-50">
        <div class="section-content">
          <div class="row result">
            <div id="more-events">
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
                  <h5 class="font-16 title"><a href="single-event.html"><?=$event->event_name?></a></h5>
                  <ul class="list-inline font-11 mb-20">
                    <li><i class="fa fa-calendar mr-5"></i> <?=$event->start_date_time->nice()?></li>
                    <li><i class="fa fa-map-marker mr-5"></i><?=$event->event_location?></li>
                  </ul>
                  <p><?=$this->Mystring->turncate($event->event_desc,'140')?></p>
                  <div class="mt-10">
                   <a class="btn btn-colored btn-theme-colored btn-sm" href="#">Register</a>
                   <a class="btn btn-colored btn-sm" href="<?=HTTP_ROOT?>events/detail/<?=$event->id?>">Details</a>
                  </div>
                </div>
              </div>
            </div>
            <?php }?>
          </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-30 text-center">
            <a id="1" class="btn btn-colored btn-theme-colored btn-lg text-uppercase font-13 mt-30 show_more" style="cursor:pointer">Load More</a>
            <div class="loding" style="display:none;"><img src="<?=HTTP_ROOT?>img/ajax-loader.gif"> Loading...</div>
            <a id="1" style="display:none;" class="btn btn-colored btn-theme-colored btn-lg text-uppercase font-13 mt-30 no-more">No More Events Found</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
<script>
$(document).ready(function(){
    $(document).on('click','.show_more',function(){
       var page=$(this).attr('id');
       if(page==''){
         return false;
       }
        var ID = parseInt(page)+1;
        $('.show_more').hide();
        $('.loding').show();
        $.ajax({
            type:'POST',
            url:"<?=HTTP_ROOT?>events/index",
            data:'id='+ID,
            success:function(html){
              if(html){
                $('.show_more').attr('id',ID);
                $('.result #more-events').append(html);
                $('.show_more').show();
                $('.loding').hide();
              }else{
                $('.show_more').attr('id','');
                $('.show_more').hide();
                $('.loding').hide();
                $('.no-more').show();
              }
            }
        }); 
    });
});
  </script>
<style>
.schedule-details.clearfix.p-15.pt-10 {
    min-height: 327px;
}
</style>
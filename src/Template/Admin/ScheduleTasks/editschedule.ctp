  <div class="page-content-wrapper ">
        <div class="content ">
          <div data-pages="parallax" class="jumbotron">
            <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
              <div class="inner" style="transform: translateY(0px); opacity: 1;">
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                  <li>
                    <a href="<?=HTTP_ROOT?>admin/schedules">Schedule</a>
                  </li>
                  <li><a class="active" href="#">Edit Schedule</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="container-fluid container-fixed-lg">
            <div class="row">
              <div class="col-md-14">
                <!-- START PANEL -->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="panel-title">
					<h5>
                      Edit Schedule
					</h5>  
                    </div>
                  </div>
                  <div class="panel-body">
                    <form method="post" id="add-schedule" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $schedule->id;?>" />  
                      <div class="form-group">
                        <label>Event</label>
                        <select class="form-control" name="event_id">
                            <?php foreach($events as $event) {?>
                            <option <?php if($schedule->event_id == $event->id){ ?>selected="selected"<?php } ?> value="<?php echo $event->id?>"><?php echo $event->event_name;?></option>
                            <?php }?>
                        </select>
                      </div>
                      
                      <div class="form-group">
                        <label>Schedule Name</label>
                        <input type="text" required="required" class="form-control" value="<?php echo $schedule->sch_name;?>" name="sch_name">
                      </div>
                      
                      <div class="form-group">
                        <label>Schedule Description</label>
                        <textarea name="sch_description" class="form-control" id="shorteditor"><?php echo $schedule->sch_description;?></textarea>
                      </div>
                       
					  <div class="form-group">
						  <label>Schedule Date</label>
						  <div id="date-range" class="input-daterange input-group">
                              <input type="text" value="<?php echo $schedule->sch_date->i18nFormat('yyyy-MM-dd'); ?>" name="date" id="start_date" class="input-sm form-control">
						  </div>
					  </div>
					  <div class="form-group">
					    <label>Event Timing</label>
					   <div class="row">
					      <div class="col-sm-2">
							<div class="input-group bootstrap-timepicker">
							  <input type="text" class="form-control" id="start_time" value="<?php echo $schedule->sch_timing;?>" name="sch_timing">
							  <span class="input-group-addon"><i class="pg-clock"></i></span>
							</div>
						  </div>
						</div>
					   </div>
					  
                      <br>
					  <div class="form-group">
					   <button type="submit" class="btn btn-success">Submit</button>
					  </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>
<script>
window.onload = function()
   {
      CKEDITOR.replace( 'shorteditor' , {
		  resize_enabled: false,
		  toolbar :
		[
			{ name: 'basicstyles', items : [ 'Bold','Italic' ] },
			{ name: 'styles', items : [ 'Styles','Format' ] },
			{ name: 'basicstyles', items : [ 'Bold','Italic','Strike','-','RemoveFormat' ] },
			{ name: 'links', items : [ 'Link','Unlink','Anchor' ] },
			{ name: 'tools', items : [ 'Maximize','-','About' ] }
		]
          //removeButtons: 'Save,NewPage,Preview,Templates,Image,Table,Insert Horizontal Line'
	  });

        CKEDITOR.instances.editor.on('contentDom', function() {
			CKEDITOR.instances.shorteditor.document.on('keyup', function(event) {
			   if(CKEDITOR.instances.shorteditor.getData()==''){
					$("[for='shorteditor']").css('display','block');
					$('#shorteditor').removeClass('valid');
					$('#shorteditor').addClass('error');
					$('#shorteditor').next().css('border','1px solid red');
			   }else{
					$("[for='shorteditor']").css('display','none');
					$('#shorteditor').removeClass('error');
					$('#shorteditor').addClass('valid');
					$('#shorteditor').next().css('border','none');
			   }
			});
       });	   
   };
</script>
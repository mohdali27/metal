   <?php  echo $this->Html->script('jquery/jquery2.1.1.min.js')?>
  <div class="page-content-wrapper ">
        <div class="content ">
          <div data-pages="parallax" class="jumbotron">
            <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
              <div class="inner" style="transform: translateY(0px); opacity: 1;">
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                  <li>
                    <a href="<?=HTTP_ROOT?>admin/ScheduleTasks">Schedule Task</a>
                  </li>
                  <li><a class="active" href="#">Add Schedule Task</a>
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
                      Add Schedule Task
					</h5>  
                    </div>
                  </div>
                  <div class="panel-body">
                    <form method="post" id="add-scheduletask" enctype="multipart/form-data">
                      <div class="form-group">
                        <label>Select Event</label>
                        <select class="form-control" name="event_id" onChange="getSchedule(this.value);" >
                            <option value="">Select Event</option>
                            <?php foreach($events as $event) {?>
                            <option value="<?php echo $event->id?>"><?php echo $event->event_name;?></option>
                            <?php }?>
                        </select>
                      </div> 
                      
                      <div class="form-group">
                        <label>Select Schedule</label>
                        <select class="form-control" name="schedule_id" id="schedule_list">
                            <option value="">Select Schedule</option>
                            <?php foreach($schedules as $schedule) {?>
                            <option value="<?php echo $schedule->id?>"><?php echo $schedule->sch_name;?></option>
                            <?php }?>
                        </select>
                      </div>
                      
                      <div class="form-group">
                        <label>Schedule Description</label>
                        <textarea name="task_description" class="form-control" id="shorteditor"></textarea>
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
   
    function getSchedule(val) {
        $.ajax({
        type: "POST",
        url: "<?php echo HTTP_ROOT; ?>admin/ScheduleTasks/getScheduleList",
        data:'event_id='+val,
        success: function(schedules){
            var options = '';
            options = '<option value="">Select Schedule</option>';
            $.each(JSON.parse(schedules), function(index, schedules) {
                options += '<option value="' + schedules.id + '">' + schedules.sch_name + '</option>';
            });
            $('#schedule_list').html(options);
        }
        });
    }

    $(document).ready(function() {
    $('#add-scheduletask').validate({
              onfocusout: function (element) {
                 $(element).valid();
                },
                rules:
                {
                    "event_id":
                    {
                        required:true
                    },
                    "schedule_id":
                    {
                        required:true
                    },
                    "task_description":
                    {
                        required:true
                    }
                },   
                messages:
                {
                    "event_id":
                    {
                        required:'This field is required.'
                    },
                    "schedule_id":
                    {
                       required:"This field is required.",
                    },
                    "task_description":
                    {
                       required:"This field is required."
                    }
                }
            });
        });
</script>
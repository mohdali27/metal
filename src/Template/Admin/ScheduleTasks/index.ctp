<?= $this->Html->script(['admin/assets/plugins/jquery/jquery-1.11.1.min.js'])?>
    <?php
if(!empty($action)){
		$action=implode('&',$action);
		$action='?'.$action;
}else{
	$action="";
}

if($getString){
	$getString[]=$schedule[0]->id;
	$this->Paginator->options(['url' => $getString]);
}else{
	$this->Paginator->options(['url' => [$schedule[0]->id,'limit' => $limit]]);
}
?>
      
      <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content">
            <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
              <div class="inner" style="transform: translateY(0px); opacity: 1;">
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                  <li>
                    <a href="<?=HTTP_ROOT?>admin">Home</a>
                  </li>
                  <li><a class="active" href="#">Schedule</a>
                  </li>
                </ul>
              </div>
            </div>
         
			<div class="container-fluid container-fixed-lg bg-white" id="edit-schedule">
            <!-- START PANEL -->
            <div class="panel panel-transparent">
              <div class="panel-heading"><?= $this->Flash->render() ?>
              <ul class="nav nav-tabs nav-tabs-fillup" data-init-reponsive-tabs="dropdownfx">
                        <li>
                          <a href="<?=HTTP_ROOT?>/admin/schedules/editschedule/<?=$schedule_id;?>"><span>Schedule</span></a>
                        </li>
                        <li class="active">
                          <a data-toggle="tab" href="#slide1"><span> Schedule Tasks</span></a>
                        </li>
                        
              </ul>
                <div class="row">
                    <div class="col-sm-2" style="margin-right:20px;">
					<form id="showPages" method="post" action="<?=HTTP_ROOT?>admin/ScheduleTasks/index/<?=$schedule_id;?><?=$action?>" >
                        <div class="shoe-text">show</div>
							<select class="form-control input-sm page-limit inner-search" aria-controls="basic-usage" name="limit" onchange="this.form.submit()">
							      <option value="5" <?php if($limit==5){?>selected="selected"<?php }?>>5</option>
								  <option value="10" <?php if($limit==10){?>selected="selected"<?php }?>>10</option>
								  <option value="25" <?php if($limit==25){?>selected="selected"<?php }?>>25</option>
								  <option value="50" <?php if($limit==50){?>selected="selected"<?php }?>>50</option>
								  <option value="100" <?php if($limit==100){?>selected="selected"<?php }?>>100</option>
							 </select>
                          <div class="entries-text">entries</div>
					</form>
                    </div>
                   <?php /* <div class="col-sm-7" style="margin-top:0px;">
                        <div class="collection-search">
					        <label>Search By</label>
                            <div class="input-group ">
								<form method="post" action="<?=HTTP_ROOT?>admin/ScheduleTasks/index/<?=$schedule_id;?>?limit=<?=$limit?>">
									
								<select class="form-control input-sm page-limit inner-search" aria-controls="basic-usage" name="searchby" style="width:140px;margin-right:10px" id="searchtype">
									  <option value="sch_name" <?php  if($searchby=='sch_name'){?>selected="selected"<?php }?>>Schedule Name</option>
								 </select>
									<input type="text" class="input-sm search-text" placeholder="Search..." name="search" id="search-text" value="<?=@$search?>" >
									<input type="submit" value="Submit">
                                    <a class="" href="<?=HTTP_ROOT?>admin/events/index"><span class="bold">Reset</span>
                                    </a>
								</form>
                            </div>
                        </div>
                    </div> */ ?>
					<div class="btn-group pull-right m-b-10" style="margin-top:20px;">
                     <a id="mytask" class="btn btn-primary btn-cons m-b-10"><i class="pg-form"></i> <span class="bold">Add Schedule Task</span>
                    </a>
                </div>
                 </div>
				
                <div class="clearfix"></div>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
				<form method="post" id="mainform" action="<?= HTTP_ROOT?>admin/ScheduleTasks/delete">
                  <table class="table table-hover" id="basicTable">
                    <thead>
                      <tr>
                        <th style="width:1%">
						  <input type="checkbox" value="3" class="thcheckbox">
                        </th>
                        <th style="width:15%"><?= $this->Paginator->sort('event_name', 'Event Name');?></th>
                        <th style="width:15%"><?= $this->Paginator->sort('sch_name', 'Schedule Name');?> </th>
						<th style="width:15%"><?= $this->Paginator->sort('name', 'Task');?> </th>
                        <th style="width:15%"><?= $this->Paginator->sort('sch_description', 'Description');?></th>
						<th style="width:15%"><?= $this->Paginator->sort('task_time', 'Time');?></th>
						<th style="width:15%"><?= $this->Paginator->sort('task_location', 'Location');?></th>
                        <th style="width:15%">Action</th>
                      </tr>
                    </thead>
                    <tbody>
					
					<?php 
					  if(count($tasks)>0){
					  foreach($tasks as $key=>$value){ 
					 ?>
                      <tr>
                        <td class="v-align-middle">
                          <input type="checkbox" value="<?=$value->id?>" name="list[]" class="tdcheckbox"/>
                        </td>
                        <td class="v-align-middle ">
                          <p><?=$value->schedule->event->event_name?></p>
                        </td>
                        <td class="v-align-middle ">
                          <p><?=$value->schedule->sch_name?></p>
                        </td>
						<td class="v-align-middle ">
                          <p><?=$value->name?></p>
                        </td>
                        <td class="v-align-middle">
                          <p><?=$this->Mystring->turncate($value->task_description)?></p>
                        </td>
						<td class="v-align-middle ">
                          <p><?=$value->task_time;?></p>
                        </td>
						<td class="v-align-middle ">
                          <p><?=$value->task_location?></p>
                        </td>
                        <td class="v-align-middle">
						  <a class="edit-task" href="<?=HTTP_ROOT?>admin/ScheduleTasks/getTask/<?= $value->id?>" class="edit-task" title="Edit Schedules" style="cursor:pointer">
							<span class="glyphicon glyphicon-pencil"></span>
						  </a>
                          <a href="<?=HTTP_ROOT?>admin/ScheduleTasks/delete/<?= base64_encode($value->id)?>" title="Delete Event" onclick="if(!confirm('Do you want to delete this record?')){return false;}">
							<span class="glyphicon glyphicon-trash"></span>
						 </a>
                        
                        </td>
                      </tr>
					  <?php }}else {?> 
					  <tr><td  colspan="8"><center>No record found.</center></td></tr>
					  <?php }?>
                    </tbody>
                  </table>
				  </form>
                </div>
				<div class="tile-footer dvd dvd-top">
					<div class="row">
						<div class="col-sm-3">
						    <div class="action">
							Actions:
							<select name="action" aria-controls="basic-usage" class="form-control input-sm page-limit inner-search" style="width:135px;">
							      <option value="">Select Action</option>
								  <option value="1">Delete All</option>
							 </select>
							</div> 
							<small class="text-muted">
							  <?php echo __('showing');?> <?=($this->Paginator->params()['page']*$this->Paginator->params()['limit'])-($this->Paginator->params()['limit']-1)?>-<?=($this->Paginator->params()['page']-1)*$this->Paginator->params()['limit']+$this->Paginator->params()['current']?><?php echo __(' of ');?><?=$this->Paginator->params()['count']?> <?php echo __('items');?>
							</small>
							
						</div>
						<div id="msg-pages" style="float:right;" class="col-sm-4 text-right">

						  <ul class="pagination pagination-sm m-0">
						     <?php
                                echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                                echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
                                echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                            ?>
						  </ul>
					   </div>
					</div>
				</div>
              </div>
			  
            </div>
            <!-- END PANEL -->
          </div>
          </div>
          <!-- END CONTAINER FLUID -->
        </div>
        <!-- Model -->
 <div class="modal fade slide-up disable-scroll" id="modalSlideUp" tabindex="-1" role="dialog" aria-hidden="false">
            <div class="modal-dialog ">
              <div class="modal-content-wrapper">
                <div class="modal-content">
                  <div class="modal-header clearfix text-left">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
                    </button>
                    
                  </div>
                  <div class="modal-body">
                    <form method="post" id="add_task" action="<?=HTTP_ROOT?>admin/ScheduleTasks/addtask">
                      <div class="">
					    <div class="form-group">
                          <label>Schedule Name</label>
                          <input type="text"  value="<?=$schedule[0]->sch_name?>" class="form-control" readonly>
						  <input type="hidden"  value="<?=$schedule[0]->id?>" name="schedule_id">
                        </div>
						
                        <div class="form-group">
                          <label>Task Name</label>
                          <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                          <label>Description</label>
                          <textarea name="task_description" style="width: 561px; height: 142px;"> </textarea>
                        </div>
						<div class="form-group">
                        <label>Select Speakers</label>
                        <select class="form-control" name="speaker_id">
                            <option value="">Select Speaker</option>
                        <?php foreach($speakers as $speaker){ $name=$speaker['first_name'].' '.$speaker['last_name'];?>
                            <option value="<?= $speaker['id']; ?>"><?= $name ;?></option>
                        <?php } ?>
                        </select>
                       </div>
						<div class="form-group">
                          <label>Time</label>
                          <input type="text" class="form-control" name="task_timing">
                        </div>
                        <!--<div class="form-group">
					    <label>Task Timing</label>
					   <div class="row">
					      
						  <div class="col-sm-2">
							<div class="input-group bootstrap-timepicker">
							  <input type="text" class="form-control" id="start_time" name="start_time">
							  <span class="input-group-addon"><i class="pg-clock"></i></span>
							  
							</div>
							
						  </div>
						  
						  <div class="col-sm-2">
							<div class="input-group bootstrap-timepicker">
							  <input type="text" class="form-control" id="end_time" name="end_time">
							  <span class="input-group-addon"><i class="pg-clock"></i></span>
							</div>
						  </div>
						</div>
					   </div>-->
						<div class="form-group">
                          <label>Location</label>
                          <input type="text" class="form-control" name="task_location">
                        </div>
						<div class="form-group">
					      <button type="submit" class="btn btn-primary">Submit</button>
					    </div>
                      </div>
                    </form>
                    
                  </div>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
          </div>
          <!-- /.modal-dialog -->
		  <div class="modal fade slide-up disable-scroll" id="editmodal" tabindex="-1" role="dialog" aria-hidden="false">
            <div class="modal-dialog ">
              <div class="modal-content-wrapper">
                <div class="modal-content">
                  <div class="modal-header clearfix text-left">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
                    </button>
                    
                  </div>
                  <div class="modal-body">
                    <form method="post" action="<?=HTTP_ROOT?>admin/ScheduleTasks/edittask">
                      <div class="">
					    <div class="form-group">
                          <label>Schedule Name</label>
                          <input type="text"  value="<?=$schedule[0]->sch_name?>" class="form-control" readonly>
						  <input type="hidden"  value="<?=$schedule[0]->id?>" name="schedule_id">
						  <input type="hidden"  value="" name="id" id="task_id">
                        </div>
						
                        <div class="form-group">
                          <label>Task Name</label>
                          <input type="text" class="form-control" name="name" value="" id="task_name">
                        </div>
                        <div class="form-group">
                          <label>Description</label>
                          <textarea name="task_description" style="width: 561px; height: 142px;" id="task_description"> </textarea>
                        </div>
						<div class="form-group">
                        <label>Select Speakers</label>
                        <select class="form-control select_speaker" name="speaker_id" id="edit_speaker_id">
                            
                        </select>
                       </div>
						<div class="form-group">
                          <label>Time</label>
                          <input type="text" class="form-control" name="task_time" id="task_time">
                        </div>
						<div class="form-group">
                          <label>Location</label>
                          <input type="text" class="form-control" name="task_location" id="task_location">
                        </div>
						<div class="form-group">
					      <button type="submit" class="btn btn-primary">Submit</button>
					    </div>
                      </div>
                    </form>
                    
                  </div>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
          </div>
          <!-- /.modal-dialog -->
		  
<script>
  $('#mytask').click(function() {
        $('#modalSlideUp').modal('show');
    });
	
    $('.edit-task').click(function(event) {
		event.preventDefault();
		 $.ajax(this.href, {
        success: function(data) {
			data=JSON.parse(data);
            console.log(data);
			console.log(data[0].id);
			$('#edit_speaker_id').html(data[1]);
			$('#task_id').val(data[0].id);
			$('#task_name').val(data[0].name);
			$('#task_description').val(data[0].task_description);
			$('#task_location').val(data[0].task_location);
			$('#task_time').val(data[0].task_time);
			$('#edit_speaker_id').val(data[0].speaker_id);
			$('#editmodal').modal('show');
        },
        error: function() {
         alert('An error occurred');
        }
      }); 
	});
    
     $(document).ready(function() {
 var validator =   $('#add_task').validate({
              onfocusout: function (element) {
                 $(element).valid();
                },
                rules:
                {
                    "schedule_id":
                    {
                        required:true
                    },
                    "name":
                    {
                        required:true
                    },
                    "task_timing":
                    {
                        required:true
                    },
                    "task_location":
                    {
                        required:true
                    },
                    "task_description":
                    {
                        required:true
                    },
					"speaker_id":
                    {
                        required:true
                    }
					
                },   
                messages:
                {
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
			
			$(document).on('change', '.select_speaker', function () {
				$('.select_speaker').removeClass('error');
				if (!$.isEmptyObject(validator.submitted)) {
					validator.form();
				}
			});
        });
    
</script>   
<style>
.panel-title {
    width: 100%;
}
.panel-heading a:not(.btn) {
    color: #626262 !important;
    opacity: 1;
    padding-bottom: 14px;
    padding-top: 14px;
}
</style>
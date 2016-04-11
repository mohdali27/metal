    <?php
if(!empty($action)){
		$action=implode('&',$action);
		$action='?'.$action;
}else{
	$action="";
}

if($getString){
	$this->Paginator->options(['url' => $getString]);
}else{
	$this->Paginator->options(['url' => ['limit' => $limit]]);
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
                  <li><a class="active" href="#">Tickets</a>
                  </li>
                </ul>
              </div>
            </div>
         
			<div class="container-fluid container-fixed-lg bg-white">
            <!-- START PANEL -->
            <div class="panel panel-transparent">
              <div class="panel-heading"><?= $this->Flash->render() ?>
                <div class="row">
                    <div class="col-sm-2" style="margin-right:20px;">
					<form id="showPages" method="post" action="<?=HTTP_ROOT?>admin/tickets/index<?=$action?>" >
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
                    <div class="col-sm-7" style="margin-top:0px;">
                        <div class="collection-search">
					        <label>Search By</label>
                            <div class="input-group ">
								<form method="post" action="<?=HTTP_ROOT?>admin/tickets/index?limit=<?=$limit?>">
									
								<select class="form-control input-sm page-limit inner-search" aria-controls="basic-usage" name="searchby" style="width:140px;margin-right:10px" id="searchtype">
									 
									  <option value="name" <?php  if($searchby=='name'){?>selected="selected"<?php }?>>Event Name</option>
								 </select>
									<input type="text" class="input-sm search-text" placeholder="Search..." name="search" id="search-text" value="<?=@$search?>" >
									<input type="submit" value="Submit" class="btn btn-primary m-l-10">
                  <a class="" href="<?=HTTP_ROOT?>admin/tickets/index"><span class="bold btn btn-primary m-l-10">Reset</span></a>
								</form>
                            </div>
                        </div>
                    </div>
					<div class="btn-group pull-right m-b-10" style="margin-top:20px;">
                     <a href="<?=HTTP_ROOT?>admin/tickets/addtickets" class="btn btn-primary btn-cons m-b-10"><i class="pg-form"></i> <span class="bold">Add Ticket</span>
                    </a>
                </div>
                 </div>
				
                <div class="clearfix"></div>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
				<form method="post" id="mainform" action="<?= HTTP_ROOT?>admin/tickets/delete">
                  <table class="table table-hover" id="basicTable">
                    <thead>
                      <tr>
                        <th style="width:1%">
						  <input type="checkbox" value="3" class="thcheckbox">
                        </th>
                        <th style="width:15%"><?= $this->Paginator->sort('event_name', 'Event Name');?></th>
                        <th style="width:15%"><?= $this->Paginator->sort('member_price', 'Member Price');?> </th>
                        <th style="width:15%"><?= $this->Paginator->sort('Guest_price', 'Guest Price');?></th>
                        <th style="width:15%">Action</th>
                      </tr>
                    </thead>
                    <tbody>
					
					<?php 
					  if(count($tickets)>0){
					  foreach($tickets as $key=>$value){ 
					 ?>
                      <tr>
                        <td class="v-align-middle">
                          <input type="checkbox" value="<?=$value->id?>" name="list[]" class="tdcheckbox"/>
                        </td>
                        <td class="v-align-middle ">
                          <p><?=$value->event->event_name?></p>
                        </td>
                        <td class="v-align-middle ">
                          <p><?=$value->member_price?></p>
                        </td>
                        <td class="v-align-middle">
                          <p><?=$value->guest_price?></p>
                        </td>
                        
                        <td class="v-align-middle">
						  <a href="<?=HTTP_ROOT?>admin/tickets/edittickets/<?= $value->id?>" title="Edit Ticket">
							<span class="glyphicon glyphicon-pencil"></span>
						  </a>
                          <a href="<?=HTTP_ROOT?>admin/tickets/delete/<?= base64_encode($value->id)?>" title="Delete Ticket" onclick="if(!confirm('Do you want to delete this record?')){return false;}">
							<span class="glyphicon glyphicon-trash"></span>
						 </a>
                        
                        </td>
                      </tr>
					  <?php }}else {?>
					  <tr><td  colspan="5"><center>No record found.</center></td></tr>
					  <?php }?>
                    </tbody>
                  </table>
				  <form>
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
        
    

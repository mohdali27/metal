<div id="sub-nav">
    <div class="page-title">
        <h1>Members Listing</h1>
    </div>
     <div id="top-buttons">		
        <a href="<?php echo HTTP_ROOT.'admin/members/add_member/' ?>" class="btn ui-state-default ui-corner-all">Add Member</a>
    </div>
</div>
<div id="page-layout">
    <div id="page-content">
        <div id="page-content-wrapper" class="no-bg-image wrapper-full">           
            <?php echo $this->Session->flash();?>
            <div class="hastable">
                <form name="myform" id="tableForm" class="pager-form" method="post" action="<?php echo HTTP_ROOT.'admin/users/actions/Member'?>">
                    <table id="sort-table"> 
                    <thead> 
                    <tr>
                        <th class="header"><input type="checkbox" value="check_none" class="submit" /></th>
                        <th class="header"><span class="ui-icon ui-icon-carat-2-n-s"></span><?php echo $this->Paginator->sort('Member.fname','First Name')?></th> 
						<th class="header"><span class="ui-icon ui-icon-carat-2-n-s"></span><?php echo $this->Paginator->sort('Member.lname','Last Name')?></th> 
						<th class="header"><span class="ui-icon ui-icon-carat-2-n-s"></span><?php echo $this->Paginator->sort('Member.username','Username')?></th> 
                        <th class="header"><span class="ui-icon ui-icon-carat-2-n-s"></span><?php echo $this->Paginator->sort('Member.email','Email')?></th> 
						<th class="header"><span class="ui-icon ui-icon-carat-2-n-s"></span><?php echo $this->Paginator->sort('Member.ph_no','Contact Number')?></th> 
						<th class="header"><span class="ui-icon ui-icon-carat-2-n-s"></span><?php echo $this->Paginator->sort('Member.last_login','Last Login')?></th> 						
						<th class="header"><span class="ui-icon ui-icon-carat-2-n-s"></span><?php echo $this->Paginator->sort('Member.created','Registered At')?></th> 
                        <th class="header" style="width:128px">Action</th> 
                    </tr> 
                    </thead> 
                    <tbody> 
					<?php 
					if(empty($memberDetail))
					{
						echo '<tr><td colspan="5"><span class="no_record">No record found...</span></td></tr>';
					}
                     foreach($memberDetail as $member)
					{?>
                    <tr>
                        <td class="center"><input type="checkbox" value="<?php echo $member['Member']['id']?>" name="list[]" class="checkbox"/></td>  
                        <td><?php echo $member['Member']['fname']?></td>
						<td><?php echo $member['Member']['lname']?></td>
						<td><?php echo $member['Member']['username']?></td>
                        <td><?php echo $member['Member']['email']?></td>
						<td><?php echo $member['Member']['ph_no']?></td>
						<td><?php echo ($member['Member']['last_login']!='0000-00-00 00:00:00' && $member['Member']['last_login']!=''?date('m-d-Y',strtotime($member['Member']['last_login'])):'')?></td>
						<td><?php echo date('d-m-Y g:i a',strtotime($member['Member']['created']))?></td> 
                        
                        <td>
						<a class="btn_no_text btn ui-state-default ui-corner-all tooltip" title="View" href="<?php echo HTTP_ROOT.'admin/members/member_view/'.$member['Member']['id']?>">
                                <span class="ui-icon ui-icon-search"></span>
                            </a>     
                            <a class="btn_no_text btn ui-state-default ui-corner-all tooltip" title="Edit" href="<?php echo HTTP_ROOT.'admin/members/edit_member/'.$member['Member']['id']?>">
                                <span class="ui-icon ui-icon-pencil"></span>
                            </a>
							<?php $target = array('0'=>'1','1'=>'0');?>	
										  <a title=" <?php echo($member['Member']['status']==0?'Activate':'Deactivate')?>" href="<?php echo HTTP_ROOT."admin/users/updatestatus/".$member['Member']['id']."/".$target[$member['Member']['status']].'/Member'?>" class="btn_no_text btn  ui-corner-all tooltip <?php echo($member['Member']['status']==0?'ui-state-hover':'ui-state-default') ?>">
                                        <span class="ui-icon ui-icon-lightbulb"></span>
                                    </a>
						
							<a class="btn_no_text btn ui-state-default ui-corner-all tooltip" onclick="if(!confirm('Do you want to delete this record?')){return false;}" title="Delete" href="<?php echo HTTP_ROOT.'admin/users/delete/Member/'.$member['Member']['id']?>">
                                <span class="ui-icon ui-icon-circle-close"></span>
                            </a>                   
                        </td>
                    </tr>
                    <?php
					}?>
                    </tbody>
                    </table>
					 <div class="action">
                    <label>Perform Actions : </label>
                        <select name="action">
                            <option value="">Select</option>
                            <option value="1">Delete</option>
                            <option value="2">Activate</option>
                            <option value="3">Deactivate</option>
                        </select>
                   </div>
                </form>
                <?php echo $this->element('adminElements/pagination')?>		
        		<div class="clear"></div>
       		</div>
        </div>
        <div class="clear"></div>			
    </div>
</div>
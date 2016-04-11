<?= $this->Html->script(['admin/assets/plugins/jquery/jquery-1.11.1.min.js'])?>

  <div class="page-content-wrapper ">
        <div class="content ">
          <div data-pages="parallax" class="jumbotron">
            <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
              <div class="inner" style="transform: translateY(0px); opacity: 1;">
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                  <li>
                    <a href="<?=HTTP_ROOT?>admin/tickets/index">Tickets</a>
                  </li>
                  <li><a class="active" href="#">Edit Tickets</a>
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
                      Edit Ticket
					</h5>  
                    </div>
                  </div>
                  <div class="panel-body">
                    <form method="post" id="edit-ticket" enctype="multipart/form-data">
					  <input type="hidden" name="id" value="<?=$ticket->id?>">
					  <div class="form-group">
                        <label>Event</label>
                        <select class="form-control select-event" name="event_id">
						    <option value="">Select Event</option>
                            <?php foreach($events as $event) {?>
                             <option <?php if($ticket->event_id == $event->id){ ?>selected="selected"<?php } ?> value="<?php echo $event->id?>"><?php echo $event->event_name;?></option>
                            <?php }?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Member's Price</label>
                        <input type="text" required="required" class="form-control" name="member_price" value="<?=$ticket->member_price?>">
                      </div>
					  <div class="form-group">
                        <label>Guest's Price</label>
                        <input type="text" required="required" class="form-control" name="guest_price" value="<?=$ticket->guest_price?>">
                      </div>
                      <div class="form-group">
                        <label>Description For Member</label>
                        <textarea name="member_desc" class="form-control" id="shorteditor"><?=$ticket->member_desc?></textarea>
                      </div>
                      <div class="form-group">
                        <label>Description For Guest</label>
                        <textarea name="guest_desc" class="form-control" id="editor"><?=$ticket->guest_desc?></textarea>
                      </div>
					  <br>
					  <div class="form-group">
					   <button type="submit" class="btn btn-primary">Submit</button>
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
$('document').ready(function(){
var validator = $("#edit-ticket").validate({
	event:'blur',
	errorClass: 'error',
	rules: {
     event_id: "required",
	 member_price: {
		        required: true,
                number: true

	          },
    guest_price: {
		        required: true,
                number: true

	          },			  
	 member_desc: {
		required: function() 
                            {
                                CKEDITOR.instances.shorteditor.updateElement();
                                
                            }
	 },
	 guest_desc: {
		 required: function() 
                            {
                                CKEDITOR.instances.editor.updateElement();
                                
                            }
	 }
    },
	messages:{
		event_id: "This field is required.",
		member_price: {
			     "required" :"This field is required.",
				 "number" :"Please enter a valid number."
		         },
		guest_price: {
			     "required" :"This field is required.",
				 "number" :"Please enter a valid number."
		         },		 
		short_desc: "This field is required.",
		long_desc: "This field is required."
	},
	errorPlacement: function(error, $elem) {
                    if ($elem.is('textarea')) {
                        $elem.next().css('border', '1px solid red');
                        error.insertAfter($elem.next());
                        CKEDITOR.instances.editor.focus();
                    }else{
                         error.insertAfter($elem); 
                    }
                },
	
});
validator.focusInvalid = function() {
	if( this.settings.focusInvalid ) {
		try {
			var toFocus = $(this.findLastActive() || this.errorList.length && this.errorList[0].element || []);
			if (toFocus.is("textarea")) {
				if(CKEDITOR.instances.shorteditor.getData()==''){
					CKEDITOR.instances.shorteditor.focus();
				 }else{
					if(CKEDITOR.instances.editor.getData()==''){
					   CKEDITOR.instances.editor.focus();
					} 
				 }
				 
				 
				 
			} else {
				toFocus.filter(":visible").focus();
			}
		} catch(e) {
		}
	}
}


	$(document).on('change', '.select-event', function () {
		$('.select-event').removeClass('error');
        if (!$.isEmptyObject(validator.submitted)) {
            validator.form();
        }
    });
	
});
window.onload = function()
   {
      CKEDITOR.replace( 'editor' , {
        extraPlugins: 'imageuploader'
	  });
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
			CKEDITOR.instances.editor.document.on('keyup', function(event) {
			   if(CKEDITOR.instances.editor.getData()==''){
					$("[for='editor']").css('display','block');
					$('#editor').removeClass('valid');
					$('#editor').addClass('error');
					$('#editor').next().css('border','1px solid red');
			   }else{
					$("[for='editor']").css('display','none');
					$('#editor').removeClass('error');
					$('#editor').addClass('valid');
					$('#editor').next().css('border','none');
			   }
			});
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
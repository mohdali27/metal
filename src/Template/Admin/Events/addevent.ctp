<?= $this->Html->script(['admin/assets/plugins/jquery/jquery-1.11.1.min.js'])?>
  <div class="page-content-wrapper ">
        <div class="content ">
          <div data-pages="parallax" class="jumbotron">
            <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
              <div class="inner" style="transform: translateY(0px); opacity: 1;">
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                  <li>
                    <a href="<?=HTTP_ROOT?>admin/events">Event</a>
                  </li>
                  <li><a class="active" href="#">Add Event</a>
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
                      Add Event
					</h5>  
                    </div>
                  </div>
                  <div class="panel-body">
                    <form method="post" id="add-event" enctype="multipart/form-data">
                      <div class="form-group">
                        <label>Event Title</label>
                        <input type="text" required="required" class="form-control" name="event_name">
                      </div>
					  <!-- <div class="form-group">
					      <label>Event Date Range</label>
						  <span class="add-on input-group-addon">
						  <i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
						  <input type="text" style="width: 100%" id="daterangepicker" class="form-control" value="" name="date_range"/>
                      </div> -->
					  
					  <div class="form-group">
                        <label>Select Speaker</label>
                        <select id="speakers" class="full-width required" multiple name="speakers[]">
						<?php foreach($speakers as $speaker){$name=$speaker['first_name']." ".$speaker['last_name'];?>
						  <option value="<?=$speaker['id']?>"><?= $name ?></option>
						<?php }?>
						
						</select>
                      </div>
					  <div class="form-group">
						  <label>Event Date</label>
						  <div id="date-range" class="input-daterange input-group">
							  <input type="text" name="start_date" id="start_date" class="input-sm form-control">
							  <span class="input-group-addon">to</span>
							  <input type="text" name="end_date" id="end_date" class="input-sm form-control">
						  </div>
					  </div>
					  <div class="form-group">
					    <label>Event Timing</label>
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
					   </div>
					  <div class="form-group">
						<label>Upload Event Banner</label>
						<input id="event-banner" type="file" multiple=true name="event_banner">
					  </div>
					  <div class="form-group">
                        <label>Event Location</label>
                        <textarea name="event_location" class="form-control"></textarea>
                      </div>
                      <div class="form-group">
                        <label>Short Description</label>
                        <textarea name="event_desc" class="form-control" id="shorteditor"></textarea>
                      </div>
                      <div class="form-group">
                        <label>Full Description</label>
                        <textarea name="long_desc" class="form-control" id="editor"></textarea>
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
var validator = $("#add-event").validate({
	event:'blur',
	errorClass: 'error',
	rules: {
     event_name: "required",
	 start_date: "required",
	 end_date: "required",
	 event_desc: {
		required: function() 
                            {
                                CKEDITOR.instances.shorteditor.updateElement();
                                
                            }
	 },
	 long_desc: {
		 required: function() 
                            {
                                CKEDITOR.instances.editor.updateElement();
                                
                            }
	 }
    },
	messages:{
		event_name: "This field is required.",
		start_date: "This field is required.",
		start_date: "This field is required.",
		end_date: "This field is required.",
		event_desc: "This field is required.",
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
	highlight: function (element, errorClass, validClass) {
            var elem = $(element);
            if (elem.hasClass('select2-offscreen')) {
                $('#s2id_' + elem.attr('id') + ' ul').addClass(errorClass);
            } else {
                elem.addClass(errorClass);
            }
        },
 
        //When removing make the same adjustments as when adding
    unhighlight: function (element, errorClass, validClass) {
            var elem = $(element);
            if (elem.hasClass('select2-offscreen')) {
                $('#s2id_' + elem.attr('id') + ' ul').removeClass(errorClass);
            } else {
                elem.removeClass(errorClass);
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
$("#speakers").select2({
	placeholder: "Select Speaker",
});
$(document).on('select2-opening', function (arg) {
        var elem = $(arg.target);
        if ($('#s2id_' + elem.attr('id') + ' ul').hasClass('error')) {
             //jquery checks if the class exists before adding.
            $('.select2-drop ul').addClass('error');
        } else {
            $('.select2-drop ul').removeClass('error');
        }
		$('.select2-choices').removeClass('error');
    });
	$(document).on('change', '.select2-offscreen', function () {
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
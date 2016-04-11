<?= $this->Html->script(['admin/assets/plugins/jquery/jquery-1.11.1.min.js'])?>
 <div class="page-content-wrapper ">
        <div class="content ">
          <div data-pages="parallax" class="jumbotron">
            <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
              <div class="inner" style="transform: translateY(0px); opacity: 1;">
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                  <li>
                    <a href="<?=HTTP_ROOT?>admin/facilities">Facilities</a>
                  </li>
                  <li><a class="active" href="#">Edit Facility</a>
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
                      Edit Facility
					</h5>  
                    </div>
                  </div>
                  <div class="panel-body">
                    <form method="post" id="edit-facility" action="<?=HTTP_ROOT?>admin/facilities/editfacilities" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?=$facility->id?>">
                      <div class="form-group">
                        <label>Event</label>
                         <select class="form-control select-event" name="event_id">
						    <option value="">Select Event</option>
                             <?php foreach($events as $event) {?>
                            <option <?php if($facility->event_id == $event->id){ ?>selected="selected"<?php } ?> value="<?php echo $event->id?>"><?php echo $event->event_name;?></option>
                            <?php }?>
                        </select>
                      </div>
					    <div class="form-group">
                        <label>Facility Title</label>
                        <input type="text" required="required" class="form-control" name="fc_name" value="<?=$facility->fc_name?>">
                      </div>
					  
					  
					  <div class="form-group">
						<label>Upload Facility Image</label>
						<input id="edit-event-banner" type="file" multiple=true name="fc_image">
						<input type="hidden" name="old_image" value="<?=$facility->fc_image?>" id="old_img">
					  </div>
					  <div class="form-group">
                        <label>Short Description</label>
                        <textarea name="short_desc" class="form-control" id="shorteditor"><?=$facility->short_desc?></textarea>
                      </div>
                      <div class="form-group">
                        <label>Full Description</label>
                        <textarea name="long_desc" class="form-control" id="editor"><?=$facility->long_desc?></textarea>
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
var editvalidator = $("#edit-facility").validate({
	event:'blur',
	errorClass: 'error',
	rules: {
     event_id: "required",
	 fc_name: "required",
	 short_desc: {
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
		event_id: "This field is required.",
		fc_name: "This field is required.",
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
editvalidator.focusInvalid = function() {
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
        if (!$.isEmptyObject(editvalidator.submitted)) {
            editvalidator.form();
        }
		$('.select-event').removeClass('error');
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
         var img="<?=$facility->fc_image?>";
         if(img!='default'){
         		jQuery("#edit-event-banner").fileinput({
			showUpload: false,
			showCaption: false,
			initialPreview: [
	        '<img src="<?=HTTP_ROOT.'files/facilities/fc_image/'.$facility->image_dir.'/portrait_'.$facility->fc_image?>" alt="<?=$facility->fc_image?>" title="<?=$facility->fc_image?>">'           
	       ],
	        //overwriteInitial: false,
	        initialCaption: "Emp16.jpg",
			allowedFileExtensions : ['jpg', 'png','gif','jpeg'],
			browseClass: "btn btn-primary btn-lg",
			fileType: "any",
	        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
			});	   
   		
         }else{
         	jQuery("#edit-event-banner").fileinput({
					showUpload: false,
					showCaption: false,
					allowedFileExtensions : ['jpg', 'png','gif','jpeg'],
					browseClass: "btn btn-primary btn-lg",
					fileType: "any",
			        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
			});
         }
	       
   		jQuery('.fileinput-remove').on('click',function(){
       	 jQuery("#old_img").val("default");
       });
       }
       
       
</script>
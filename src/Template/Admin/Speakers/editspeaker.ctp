  <div class="page-content-wrapper ">
        <div class="content ">
          <div data-pages="parallax" class="jumbotron">
            <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
              <div class="inner" style="transform: translateY(0px); opacity: 1;">
              
                <ul class="breadcrumb">
                  <li>
                    <a href="<?=HTTP_ROOT?>admin/speakers">Speaker</a>
                  </li>
                  <li><a class="active" href="#">Edit Speaker</a>
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
                      Edit Speaker
					</h5>  
                    </div>
                  </div>
                  <div class="panel-body">
                    <form method="post" id="add-event" enctype="multipart/form-data">
                      <div class="form-group">
                        <label>First Name</label>
                        <input value="<?= $speaker->first_name ?>" type="text" required="required" class="form-control" name="first_name">
                      </div>
                      
                      <div class="form-group">
                        <label>Last Name</label>
                        <input value="<?= $speaker->last_name ?>" type="text" required="required" class="form-control" name="last_name">
                      </div>
					  <div class="form-group">
                        <label>Founder</label>
                        <input value="<?= $speaker->founder ?>" type="text" required="required" class="form-control" name="founder">
                      </div>
					  <div class="form-group">
						<label>Upload Speaker Image</label>
						<input id="edit-event-banner" type="file" name="image">
                        <input type="hidden" name="old_image" value="<?=$speaker->image?>" id="old_img">
					  </div>
					  
                      <div class="form-group">
                        <label>Full Description</label>
                        <textarea name="brief_info" class="form-control" id="editor"><?= $speaker->brief_info ?></textarea>
                      </div>
                      
                       <!--<div class="container-fluid container-fixed-lg">-->
                        <!-- START PANEL -->
                        <!--<div class="panel panel-default">-->
                         <!-- <div class="panel-heading">
                            <div class="panel-title">Schedule Description
                            </div>
                            <div class="tools">
                              <a class="collapse" href="javascript:;"></a>
                              <a class="config" data-toggle="modal" href="#grid-config"></a>
                              <a class="reload" href="javascript:;"></a>
                              <a class="remove" href="javascript:;"></a>
                            </div>
                          </div>-->
                        <!--  <div class="panel-body no-scroll ">-->
                        <!--    <h5>Description</h5>-->
                        <!--    <div class="summernote-wrapper">-->
                        <!--      <textarea id="summernote" name="brief_info" required="required"><?= $speaker->brief_info ?></textarea>-->
                        <!--    </div>-->
                        <!--  </div>-->
                        <!--</div>-->
                        <!-- END PANEL -->
                      <!--</div>-->

			<div class="form-group">
                        <label>Facebook Link</label>
                        <input type="url" required="required" class="form-control" name="fb_link" value="<?= $speaker->fb_link ?>">
                      </div>

			<div class="form-group">
                        <label>Google+ Link</label>
                        <input type="url" required="required" class="form-control" name="google_plus_link" value="<?= $speaker->google_plus_link ?>">
                      </div>

			<div class="form-group">
                        <label>Twitter Link</label>
                        <input type="url" required="required" class="form-control" name="twitter_link" value="<?= $speaker->twitter_link ?>">
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
window.onload = function()
   {
      CKEDITOR.replace( 'editor' , {
        extraPlugins: 'imageuploader'
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
        
        var img="<?=$speaker->event_banner?>";
         if(img!='default'){
         		jQuery("#edit-event-banner").fileinput({
			showUpload: false,
			showCaption: false,
			initialPreview: [
	        '<img src="<?=HTTP_ROOT.'files/speakers/image/'.$speaker->image_dir.'/portrait_'.$speaker->image?>" alt ="<?=$speaker->image?>" title="<?=$speaker->image?>">'           
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
        	   
   };
</script>

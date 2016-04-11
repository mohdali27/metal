  <?= $this->Html->script(['admin/assets/plugins/jquery/jquery-1.11.1.min.js'])?>
  <?= $this->Html->script(['ckeditor/ckeditor.js'])?>
  <div class="page-content-wrapper ">
        <div class="content ">
          <div data-pages="parallax" class="jumbotron">
            <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
              <div class="inner" style="transform: translateY(0px); opacity: 1;">
              
                <ul class="breadcrumb">
                  <li>
                    <a href="<?=HTTP_ROOT?>admin/speakers">Speaker</a>
                  </li>
                  <li><a class="active" href="#">Add Speaker</a>
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
                      Add Speaker
					</h5>  
                    </div>
                  </div>
                  <div class="panel-body">
                    <form method="post" id="add-speaker" enctype="multipart/form-data">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" required="required" class="form-control" name="first_name">
                      </div>
                      
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" required="required" class="form-control" name="last_name">
                      </div>
					  <div class="form-group">
                        <label>Founder</label>
                        <input type="text" required="required" class="form-control" name="founder">
                      </div>
					  <div class="form-group">
						<label>Upload Speaker Image</label>
						<input id="event-banner" type="file" name="image">
					  </div>
					  
                     <div class="form-group">
                        <label>Full Description</label>
                        <textarea name="brief_info" class="form-control" id="editor"></textarea>
                      </div>
                      
                        <!--<div class="panel panel-default">
                          <div class="panel-body no-scroll ">
                            <h5>Description</h5>
                            <div class="summernote-wrapper">
                              <textarea id="summernote" class="form-control" name="brief_info" ></textarea>
                            </div>
                          </div>
                        </div>-->

			<div class="form-group">
                        <label>Facebook Link</label>
                        <input type="url" required="required" class="form-control" name="fb_link">
                      </div>

			<div class="form-group">
                        <label>Google+ Link</label>
                        <input type="url" required="required" class="form-control" name="google_plus_link">
                      </div>

			<div class="form-group">
                        <label>Twitter Link</label>
                        <input type="url" required="required" class="form-control" name="twitter_link">
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
<script type="text/javascript">
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
       };
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300
        });
        
        $('#add-speaker').validate({
            onfocusout: function (element) {
                $(element).valid();
            },
                rules:
                {
                    "first_name":
                    {
                        required:true,
                        maxlength:60
                    },
                    "last_name":
                    {
                        required:true,
                        maxlength:60
                    },
                    "brief_info":
                    {
                       required:true
                    },
		    "image":
		    {
			required:true
		    }
                },   
                messages:
                {
                    "first_name":
                    {
                        required:'FirstName is required.',
                        maxlength:"Your firstname is too long."
                    },
                    "last_name":
                    {
                        required:'LastName is required.',
                        maxlength:"You last name is too long"
                    },
                    "brief_info":
                    {
                       required:"This field is required."
                    }
                }
            });
    });
</script>

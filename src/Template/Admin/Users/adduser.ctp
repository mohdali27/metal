 <?= $this->Html->script(['admin/assets/plugins/jquery/jquery-1.11.1.min.js'])?>
  <div class="page-content-wrapper ">
        <div class="content ">
          <div data-pages="parallax" class="jumbotron">
            <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
              <div class="inner" style="transform: translateY(0px); opacity: 1;">
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                  <li>
                    <a href="<?=HTTP_ROOT?>admin/users">User</a>
                  </li>
                  <li><a class="active" href="#">Add User</a>
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
                    <div class="panel-title"><?= $this->Flash->render() ?>
                      
                      
                          <div class="panel-body">
                    <form method="post" id="add-schedule" enctype="multipart/form-data">
                      <div class="form-group">
                        <label>Member</label>
                        <select class="form-control" name="group_id" required="required">
                            <?php foreach($groups as $group) {?>
                            <option value="<?php echo $group->id?>"><?php echo $group->name;?></option>
                            <?php }?>
                        </select>
                      </div>
                      
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" required="required" class="form-control" name="first_name">
                      </div>
                      
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" required="required" class="form-control" name="last_name">
                      </div>
                      
                      <div class="form-group">
                        <label>User Name</label>
                        <input type="text" required="required" class="form-control" name="username">
                      </div>
                      
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" required="required" class="form-control" name="email">
                      </div>
                      
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" required="required" class="form-control" id="pwd" name="password">
                      </div>
                      
                      <div class="form-group">
                        <label>Confirm password</label>
                        <input type="password" required="required" class="form-control" name="cpassword">
                      </div>
                      
                      <div class="form-group">
                        <label>brief Information</label>
                        <textarea name="brief_info" class="form-control" id="shorteditor"></textarea>
                      </div>
                      
                      <div class="form-group">
                        <label>Referal</label>
                        <input type="email" class="form-control" name="referal">
                      </div>
                      
                      <div class="form-group">
                        <label>Company Name</label>
                        <input type="text" class="form-control" name="company_name">
                      </div>
                      
                      <div class="form-group">
                        <label>Company Web</label>
                        <input type="url" class="form-control" name="company_web">
                      </div>
                      
                      <div class="form-group">
                        <label>position</label>
                        <input type="text" class="form-control" name="position">
                      </div>
                      <div class="form-group">
                        <label>Industry</label>
                        <input type="text" class="form-control" name="industry">
                      </div>
                      <div class="form-group">
                        <label>City/Town</label>
                        <input type="text" class="form-control" name="city_town">
                      </div>
                      <div class="form-group">
                        <label>Mobile</label>
                        <input type="text" maxlength="10" minlength="10" required="required" class="form-control" name="mobile">
                      </div>
                      <div class="form-group">
						<label>Upload Image</label>
						<input id="event-banner" required="required" type="file" name="image">
					  </div>
                      <div class="form-group">
                        <label>Linkedin Link</label>
                        <input type="url" class="form-control" name="linkedin_link">
                      </div>
                      
                      <div class="form-group">
                        <label>Facebook Link</label>
                        <input type="url" class="form-control" name="linkedin_link">
                      </div>
                      
                      <div class="form-group">
                        <label>Google plus</label>
                        <input type="url" class="form-control" name="google_plus_link">
                      </div>
                      
                      <div class="form-group">
                        <label>Twitter Link</label>
                        <input type="url" class="form-control" name="twitter_link">
                      </div>
                      
                      <div class="form-group">
                        <label>Status</label>
                        <input type="checkbox" class="form-control" name="active" value="1">
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
        </div>
</div>
  
<script type="text/javascript">   
    $(document).ready(function() {
    var validator = $('#add-schedule').validate({
              onfocusout: function (element) {
                 $(element).valid();
                },
                rules:
                {
                    "email":
                    {
                        required: {
                            depends:function(){
                                $(this).val($.trim($(this).val()));
                                return true;
                            }
                        },
                        email:true,
                        remote:'<?php echo HTTP_ROOT ?>admin/users/checkEmailForSignUp'
                    },    
                    "password":
                    {
                       required:true,
                       minlength: 6,
                       maxlength: 18
                    },
                    "cpassword":
                    {
                       required:true,
                       equalTo:'#pwd'
                       
                    }
                },   
                messages:
                {
                    "email":
                    {
                        required:'Please Enter Email.',
                        required:'Please enter a valid email.',
                        remote:"Email already exists."
                    },
                    "password":
                    {
                       required:"Please Enter Password.",
                       minlength: 'Password should be atleast 6 characters long.'
                    },
                    "cpassword":
                    {
                       required:"Please Enter Confirm Password",
                       equalTo: "Password and Confirm Password doesn't match."
                    }
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
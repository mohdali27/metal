    <div class="login-wrapper " id="login-page" >
      <!-- START Login Background Pic Wrapper-->
      <div class="bg-pic">
        <!-- START Background Pic-->
        <img src="<?=HTTP_ROOT?>img/admin/assets/img/demo/login-bg.jpg" data-src="<?=HTTP_ROOT?>img/admin/assets/img/demo/login-bg.jpg" data-src-retina="<?=HTTP_ROOT?>img/admin/assets/img/demo/login-bg.jpg" alt="" class="lazy">
        <!-- END Background Pic-->
        <!-- START Background Caption-->
        <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
          <h2 class="semi-bold text-white">
					First time attending a METal Event?</h2>
          <h5><a class="register-here" href="<?= HTTP_ROOT?>users/register">Register Here</a></h5>
        </div>
        <!-- END Background Caption-->
      </div>
      <!-- END Login Background Pic Wrapper-->
      <!-- START Login Right Container-->
      <div class="login-container bg-white">
        <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
        <img src="<?=HTTP_ROOT?>img/admin/assets/img/logo-mi.png" alt="logo" width="120" height="80">
        <!-- <img src="assets/img/logo-mi.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22"> -->
          <p class="p-t-35">METal Members &amp; Returning Guests</p>
          <!-- START Login Form -->
            <form id="form-login" class="p-t-15" role="form" action="<?=HTTP_ROOT?>users/login" method="post">
            <!-- START Form Control-->
            <div class="form-group form-group-default">
              <label>Login</label>
              <div class="controls">
                <input type="email" value="<?php if(isset($_COOKIE['email'])) echo $_COOKIE['email']; ?>" name="email" placeholder="Email" class="form-control" required>
              </div>
            </div>
            <!-- END Form Control-->
            <!-- START Form Control-->
            <div class="form-group form-group-default">
              <label>Password</label>
              <div class="controls">
                <input type="password" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>" class="form-control" name="password" placeholder="Credentials" required>
              </div>
            </div>
            <!-- START Form Control-->
            <div class="row">
              <div class="col-md-6 no-padding">
                <div class="checkbox ">
                  <input type="checkbox" <?php if(isset($_COOKIE['email'])) { echo 'checked="checked"'; } else { echo ''; } ?> value="1" name="remember" id="checkbox1">
                  <label for="checkbox1">Keep Me Signed in</label>
                </div>
              </div>
              <div class="col-md-6 text-right">
                <a href="#" class="text-info small">Forget your Password/Username?</a>
              </div>
            </div>
            <!-- END Form Control-->
            <button class="btn btn-primary btn-cons m-t-10" type="submit">Sign in</button>
          </form>
          <!-- Login with Facebook -->
          <div class="col-sm-12 no-padding m-t-20">
            <hr>
            <span class="align-center">OR</span>
            <h5>Connect Using</h5>
              <h5>
              <a class="social-login using-fb text-info" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
              <a class="social-login using-tw text-info" href="https://www.facebook.com/"><i class="fa fa-twitter"></i></a>
              <a class="social-login using-lk text-info" href="https://www.facebook.com/"><i class="fa fa-linkedin"></i></a>
            </h5>
          </div>
          <!--END Login Form-->

<!--           <div class="pull-bottom sm-pull-bottom">
            <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
              <div class="col-sm-3 col-md-2 no-padding">
                <img alt="" class="m-t-5" data-src="assets/img/demo/pages_icon.png" data-src-retina="assets/img/demo/pages_icon_2x.png" height="60" src="assets/img/demo/pages_icon.png" width="60">
              </div>
              <div class="col-sm-9 no-padding m-t-10">
                <p>
                  <small>
									Create a pages account. If you have a facebook account, log into it for this
									process. Sign in with <a href="#" class="text-info">Facebook</a> or <a href="#"
									                                                                       class="text-info">Google</a>
								</small>
                </p>
              </div>
            </div>
          </div> -->
        </div>
      </div>
      <!-- END Login Right Container-->
    </div>
    <!-- START OVERLAY -->
    <div class="overlay hide" data-pages="search">
      <!-- BEGIN Overlay Content !-->
      <div class="overlay-content has-results m-t-20">
        <!-- BEGIN Overlay Header !-->
        <div class="container-fluid">
          <!-- BEGIN Overlay Logo !-->
          <img class="overlay-brand" src="<?= HTTP_ROOT ?>assets/img/logo.png" alt="logo" data-src="<?= HTTP_ROOT ?>assets/img/logo.png" data-src-retina="<?= HTTP_ROOT ?>assets/img/logo_2x.png" width="78" height="22">
          <!-- END Overlay Logo !-->
          <!-- BEGIN Overlay Close !-->
          <a href="#" class="close-icon-light overlay-close text-black fs-16">
            <i class="pg-close"></i>
          </a>
          <!-- END Overlay Close !-->
        </div>
        <!-- END Overlay Header !-->
        <div class="container-fluid">
          <!-- BEGIN Overlay Controls !-->
          <input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
          <br>
          <div class="inline-block">
            <div class="checkbox right">
              <input id="checkboxn" type="checkbox" value="1" checked="checked">
              <label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
            </div>
          </div>
          <div class="inline-block m-l-10">
            <p class="fs-13">Press enter to search</p>
          </div>
          <!-- END Overlay Controls !-->
        </div>
        <!-- BEGIN Overlay Search Results, This part is for demo purpose, you can add anything you like !-->
        <div class="container-fluid">
          <span>
                <strong>suggestions :</strong>
            </span>
          <span id="overlay-suggestions"></span>
          <br>
          <div class="search-results m-t-40">
            <p class="bold">Pages Search Results</p>
            <div class="row">
              <div class="col-md-6">
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                    <div>
                      <img width="50" height="50" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
                    <p class="hint-text">via john smith</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                    <div>T</div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
                    <p class="hint-text">via pages</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                    <div><i class="fa fa-headphones large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
                    <p class="hint-text">via pagesmix</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
              </div>
              <div class="col-md-6">
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
                    <div><i class="fa fa-facebook large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
                    <p class="hint-text">via facebook</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
                    <div><i class="fa fa-twitter large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
                    <p class="hint-text">via twitter</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
                    <div><i class="fa fa-google-plus large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
                    <p class="hint-text">via google plus</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
              </div>
            </div>
          </div>
        </div>
        <!-- END Overlay Search Results !-->
      </div>
      <!-- END Overlay Content !-->
    </div>
    <!--<script type="text/javascript">
  $(document).ready(function() {
        $('#logInForm').validate({
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
                      remote:'<?php echo HTTP_ROOT ?>admin/users/checkEmailExist'
                  },
                  "password":
                {
                   required:true,
                   minlength: 6
                }
              },   
              messages:
              {
                  "email":
                  {
                      required:'Please Enter Email.',
                      email:'Please Enter valid Email.',
                      remote:"Email doesn't exists."
                  },
                  "password":
                {
                   required:"Please Enter Password.",
                   minlength: 'Password should be atleast 6 characters long.'
                }
              }
          });
      });
</script>-->

    <div class="login-wrapper " id="register-page">

      <!-- START Login Background Pic Wrapper-->
      <div class="bg-pic">
        <!-- START Background Pic-->
        <img src="<?=HTTP_ROOT?>img/admin/assets/img/demo/login-bg2.jpg" alt="" class="lazy">
        <!-- END Background Pic-->
        <!-- START Background Caption-->
        <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
          <h2 class="semi-bold text-white">
          Already a Member?</h2>
          <h5><a class="register-here" href="<?= HTTP_ROOT ?>users/login">Login Now</a></h5>
        </div>
        <!-- END Background Caption-->
      </div>
      <!-- END Login Background Pic Wrapper-->  

      <!-- START Login Right Container-->
      <div class="login-container bg-white">
        <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 p-b-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
        <div class="col-sm-12 col-sm-height col-middle">
            <img src="<?=HTTP_ROOT?>img/admin/assets/img/logo-mi.png" alt="logo" width="100" height="66">
            <!-- <img src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22"> -->
            <h3>Guest Request Form</h3>
            <p>
              <small>
              If you have been invited by a METal member as a guest for the METal Saturday Event, please follow each field requirement and fill out the form below to RSVP. After filling out this form you will receive an email confirmation. Once your request has been approved by a METal Administrator you will be able to login to the METal Website and RSVP to confirm your attendance. Please use the same username and password you used for this form when logging in to the METal Website.</small>
            </p>
            <form id="add-schedule" method="post" class="p-t-15" role="form" action="<?= HTTP_ROOT?>users/register">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                    <label>First Name</label>
                    <input type="text" name="first_name" required="required" placeholder="John" class="form-control" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                    <label>Last Names</label>
                    <input type="text" name="last_name" required="required" placeholder="Smith" class="form-control" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <label>User name</label>
                    <input type="text" name="username" required="required" placeholder="Ex: john.smith" class="form-control" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <label>Password</label>
                    <input type="password" name="password" required="required" placeholder="Minimum 6 Charactors" class="form-control" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <label>Confirm Password</label>
                    <input type="password" name="cpassword" required="required" placeholder="Retype your Password" class="form-control" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <label>Email</label>
                    <input type="email" name="email" required="required" placeholder="We will send loging details to this address" class="form-control" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <label>Brief Bio</label>
                    <textarea class="form-control" placeholder="Tell us something about yourself" id="brief_bio" name="brief_info"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                    <label>Referral</label>
                    <input type="email" name="referal" placeholder="METal member who invited you" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                    <label>Company Name</label>
                    <input type="text" name="company_name" placeholder="Current Company" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                    <label>Title</label>
                    <input type="text" name="position" placeholder="Current Title/Position at your company" class="form-control" >
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                    <label>Company Website</label>
                    <input type="url" name="company_web" placeholder="Ex: www.xyz.com" class="form-control" >
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                    <label>Industry</label>
                    <select class="form-control" name="industry">
                      <option>Content</option>
                      <option>Creative</option>
                      <option>Education</option>
                      <option>Finance</option>
                      <option>Gaming</option>
                      <option>Infrastructure</option>
                      <option>Manufacturing</option>
                      <option>Medical</option>
                      <option>Platform</option>
                      <option>Technology</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                    <label>City/Town</label>
                    <input type="text" name="city_town" placeholder="Ex: Lancaster, Los Angeles " class="form-control" >
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                    <label>Mobile Phone</label>
                    <input type="text" name="mobile" required="required" placeholder="123-4567-890" class="form-control" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                    <label>LinkedIn Link</label>
                    <input type="url" name="linkedin_link" placeholder="http://www.linkedin.com/in/abc" class="form-control" >
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <label>Photo</label>
                    <input type="file" name="image" placeholder="" class="form-control" required>
                  </div>
                </div>
              </div>
              <div class="row m-t-10">
                <div class="col-md-6">
                  <p>I agree to the <a href="#" class="text-info small">Pages Terms</a> and <a href="#" class="text-info small">Privacy</a>.</p>
                </div>
                <!-- <div class="col-md-6 text-right">
                  <a href="#" class="text-info small">Help? Contact Support</a>
                </div> -->
              </div>
              <button class="btn btn-primary btn-cons m-t-10" type="submit">Create a new account</button>
            </form>
          <!-- Sign Up with Facebook -->
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
          </div>
        </div>
      </div>
    </div>
    <!-- START OVERLAY -->
    <div class="overlay hide" data-pages="search">
      <!-- BEGIN Overlay Content !-->
      <div class="overlay-content has-results m-t-20">
        <!-- BEGIN Overlay Header !-->
        <div class="container-fluid">
          <!-- BEGIN Overlay Logo !-->
          <img class="overlay-brand" src="<?= HTTP_ROOT?>assets/img/logo.png" alt="logo" data-src="<?= HTTP_ROOT?>assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
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
                      <img width="50" height="50" src="<?= HTTP_ROOT?>assets/img/profiles/avatar.jpg" data-src="<?= HTTP_ROOT?>assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
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
    <!-- END OVERLAY -->
    <!-- BEGIN VENDOR JS -->
    <!--<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>-->
    <!--<script src="assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>-->
    <!--<script src="assets/plugins/modernizr.custom.js" type="text/javascript"></script>-->
    <!--<script src="assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>-->
    <!--<script src="assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>-->
    <!--<script src="assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>-->
    <!--<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>-->
    <!--<script src="assets/plugins/jquery-bez/jquery.bez.min.js"></script>-->
    <!--<script src="assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>-->
    <!--<script src="assets/plugins/jquery-actual/jquery.actual.min.js"></script>-->
    <!--<script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>-->
    <!--<script type="text/javascript" src="assets/plugins/bootstrap-select2/select2.min.js"></script>-->
    <!--<script type="text/javascript" src="assets/plugins/classie/classie.js"></script>-->
    <!--<script src="assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>-->
    <!--<script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>-->
    <!-- END VENDOR JS -->
<!--    <script src="pages/js/pages.min.js"></script>-->
<!--    <script>-->
<!--    $(function()-->
<!--    {-->
<!--      $('#form-register').validate()-->
<!--    })-->
<!--    </script>-->
<!--  </body>-->
<!--</html>-->
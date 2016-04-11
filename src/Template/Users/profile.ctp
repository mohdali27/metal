      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content ">
          <div class="social-wrapper">
            <div class="social " data-pages="social">
              <!-- START JUMBOTRON -->
              <div class="jumbotron" data-pages="parallax" data-social="cover">
                <div class="cover-photo">
                  <img alt="Cover photo" src="assets/img/social/cover.jpg" />
                </div>
                <div class="user-profile">
                                <div class="social-user-profile col-xs-height text-center col-top">
                                  <div class="thumbnail-wrapper d48 circular bordered b-white">
                                    <img width="155" height="155" alt="Avatar" data-src-retina="<?= HTTP_ROOT ?>assets/img/profiles/2x.jpg" data-src="<?= HTTP_ROOT ?>assets/img/profiles/2x.jpg" src="<?= HTTP_ROOT ?>assets/img/profiles/2x.jpg">
                                  </div>
                                  <br>
                                  <i class="fa fa-check-circle verified-user fs-16 m-t-10"></i>
                                </div>
                                <div class="col-xs-height dis-block p-l-20">
                                  <h3 class="no-margin"><?= $user['first_name'] .' '. $user['last_name']?></h3>
                                  <p class="hint-text m-t-5 small"><?= $user['city_town'] ?> | <?= $user['position'] ?> at <?= $user['company_name'] ?></p>
                                  <div id="social-profile" class="m-t-5 clearfix">
                                     <a class="social-btn" href="<?= $user['fb_link'] ? $user['fb_link'] : 'javascript:void(0)' ?>"><i class="fa fa-facebook"></i></a>
                                     <a class="social-btn" href="<?= $user['google_plus_link'] ? $user['google_plus_link'] : 'javascript:void(0)' ?>"><i class="fa fa-google-plus"></i></a>
                                     <a class="social-btn" href="<?= $user['twitter_link'] ? $user['twitter_link'] : 'javascript:void(0)' ?>"><i class="fa fa-twitter"></i></a>
                                     <a class="social-btn" href="#"><i class="fa fa-pinterest-p"></i></a>
                                     <a class="social-btn" href="#"><i class="fa fa-instagram"></i></a>
                                   </div>
                                </div>
                              </div>
                <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
                  <div class="inner">
                    <div class="pull-bottom bottom-left m-b-40">
                      <!-- <h5 class="text-white no-margin">welcome to pages social</h5>
                      <h1 class="text-white no-margin"><span class="semi-bold">social</span> cover</h1> -->
                      <h5 class="text-white no-margin">Welcome,</h5>
                      <h1 class="text-white no-margin"><span class="semi-bold"><?= $user['first_name'] .' '. $user['last_name']?></span></h1>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END JUMBOTRON -->
              <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
                <div class="feed">                                                                  
                  <div class="col-lg-12" id="profile-tab">
                    <div class="panel panel-transparent ">
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs nav-tabs-fillup" data-init-reponsive-tabs="dropdownfx">
                        <li class="active">
                          <a data-toggle="tab" href="#tab-fillup1"><span>About Me</span></a>
                        </li>
                        <li>
                          <a data-toggle="tab" href="#tab-fillup2"><span>Basic Information</span></a>
                        </li>
                        <li>
                          <a data-toggle="tab" href="#tab-fillup3"><span>Industry</span></a>
                        </li>
                        <li>
                          <a data-toggle="tab" href="#tab-fillup4"><span>Contact Information</span></a>
                        </li>
                      </ul>
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div class="tab-pane active" id="tab-fillup1">
                          <div class="row column-seperation">
                            <div class="col-md-12">
                              <p><span class="bold">Bio:</span><?= $user['brief_info']?></p>
                              <p><span class="bold">Speed to Cool:</span> I won my 2nd Cannabis Cup by taking gourmet candies I discovered at Whole Foods and infusing them our cannabis. </p>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane" id="tab-fillup2">
                          <div class="row">
                            <div class="col-md-12">
                              <p><span class="bold">Name:</span> <?= $user['first_name'].' '.$user['last_name']?></p>
                              <p><span class="bold">Gender:</span> Male</p>
                              <p><span class="bold">Birthday:</span> 20th December</p>
                              <p><span class="bold">Languages Known:</span> English, Russian</p>
                              <p><span class="bold">Referred By:</span> <?= $user['referal'] ?></p>
                              <!-- <p class="pull-right">
                                <button type="button" class="btn btn-default btn-cons">White</button>
                                <button type="button" class="btn btn-success btn-cons">Success</button>
                              </p> -->
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane" id="tab-fillup3">
                          <div class="row">
                            <div class="col-md-12">
                              <p><span class="bold">Industry Type:</span><?= $user['industry'] ?></p>
                              <p><span class="bold">Company Name:</span><?= $user['company_name'] ?></p>
                              <p><span class="bold">Title:</span><?= $user['position'] ?></p>                              
                              <p><span class="bold">Company Website:</span><?= $user['company_web'] ?></p>
                              <p><span class="bold">Current Needs:</span> We are currently raising our next round of capital for production and operations. We are also looking for high quality content. </p>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane" id="tab-fillup4">
                          <div class="row">
                            <div class="col-md-6">
                              <p><span class="bold">Mobile Number:</span><?= $user['mobile'] ?></p>
                              <p><span class="bold">Landline Number:</span> +123 456 7890</p>
                              <p><span class="bold">Address:</span> 8112, W-A, Vele Parley</p>                              
                              <p><span class="bold">City / Town:</span><?= $user['city_town'] ?></p>
                            </div>
                            <div class="col-md-6">
                              <p><span class="bold">Zipcode:</span> 123456</p>
                              <p><span class="bold">State:</span> Punjab</p>
                              <p><span class="bold">Country:</span> India </p>
                              <p><span class="bold">Personal Website:</span> <a href="#">www.abhishekdudeja.com</a></p>
<!--                               <p><span class="bold">LinkedIn URL:</span> <a href="#">http://www.linkedin.com/in/abhishekdudeja</a></p>
                              <p><span class="bold">Google Plus:</span> <a href="#">http://www.googleplus.com/abhishekdudeja</a></p>                              
                              <p><span class="bold">Facebook URL:</span> <a href="#">http://www.facebook.com/abhishekdudeja</a></p>                             
                              <p><span class="bold">Youtube URL:</span> <a href="#">http://www.youtube.com/abhishekdudeja</a></p> -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="feed1">
                  <!-- START DAY -->                                                                                                                                                                                                                                 
                  <div class="day" data-social="day">
                    <!-- START ITEM -->
                    <div class="card col2 padding-20" data-social="item">
                      <form class="simform no-margin" autocomplete="off" data-social="status">
                        <div class="status-form-inner">
                          <ol class="questions">
                            <li>
                              <span>
                                        <label for="status-q1">What's on your mind?</label>
                                    </span>
                              <input id="status-q1" name="q1" type="text" />
                            </li>
                            <li>
                              <span>
                                        <label for="status-q2">What are you feeling?</label>
                                    </span>
                              <input id="status-q2" name="q2" type="text" />
                            </li>
                            <li>
                              <span>
                                        <label for="status-q3">What's your location?</label>
                                    </span>
                              <input id="status-q3" name="q3" type="text" />
                            </li>
                            <li>
                              <span>
                                        <label for="status-q4">Who are you with?</label>
                                    </span>
                              <input id="status-q4" name="q4" type="text" />
                            </li>
                          </ol>
                          <!-- /questions -->
                          <button class="submit" type="submit">Send answers</button>
                          <div class="controls">
                            <button class="next"></button>
                            <div class="progress"></div>
                            <span class="number">
                                    <span class="number-current"></span>
                            <span class="number-total"></span>
                            </span>
                            <span class="error-message"></span>
                          </div>
                          <!-- / controls -->
                        </div>
                        <!-- /simform-inner -->
                        <span class="final-message"></span>
                      </form>
                      <!-- /simform -->
                    </div>
                    <!-- START ITEM -->
                    <div class="card share  col1" data-social="item">
                      <div class="circle" data-toggle="tooltip" title="Label" data-container="body">
                      </div>
                      <div class="card-header clearfix">
                        <div class="user-pic">
                          <img alt="Profile Image" width="33" height="33" data-src-retina="<?= HTTP_ROOT ?>assets/img/profiles/8x.jpg" data-src="<?= HTTP_ROOT ?>assets/img/profiles/8.jpg" src="<?= HTTP_ROOT ?>assets/img/profiles/8x.jpg">
                        </div>
                        <h5>Jeff Curtis</h5>
                        <h6>Shared a Post
                        <span class="location semi-bold"><i
                      class="fa fa-map-marker"></i> SF, California</span>
                        </h6>
                      </div>
                      <div class="card-description">
                        <p>What you think, you become. What you feel, you attract. What you imagine, you create - Buddha. <a href="#">#quote</a></p>
                        <!-- <div class="via">via Twitter</div> -->
                      </div>
                      <div class="card-footer clearfix">
                        <div class="time">50 seconds ago</div>
                        <ul class="reactions">
                          <li><a href="#">35 <i class="fa fa-comment-o"></i></a>
                          </li>
                          <li><a href="#">33 <i class="fa fa-heart-o"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- END ITEM -->

                    <!-- START ITEM -->
                    <div class="card share  col1" data-social="item">
                      <div class="circle" data-toggle="tooltip" title="Label" data-container="body">
                      </div>
                      <div class="card-header clearfix">
                        <div class="user-pic">
                          <img alt="Profile Image" width="33" height="33" data-src-retina="<?= HTTP_ROOT ?>assets/img/profiles/4x.jpg" data-src="<?= HTTP_ROOT ?>assets/img/profiles/4.jpg" src="<?= HTTP_ROOT ?>assets/img/profiles/4x.jpg">
                        </div>
                        <h5>Andy Young</h5>
                        <h6>Updated his status
                  <span class="location semi-bold"><i class="icon-map"></i> NYC, New York</span>
                </h6>
                      </div>
                      <div class="card-description">
                        <p>What a lovely day! I think I should go and play outside.</p>
                      </div>
                      <div class="card-footer clearfix">
                        <div class="time">2 hours ago</div>
                        <ul class="reactions">
                          <li><a href="#">5 <i class="fa fa-comment-o"></i></a>
                          </li>
                          <li><a href="#">28 <i class="fa fa-heart-o"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- END ITEM -->

                    <!-- START ITEM -->
                    <div class="card share  col1" data-social="item">
                      <div class="circle" data-toggle="tooltip" title="Label" data-container="body">
                      </div>
                      <div class="card-header clearfix">
                        <div class="user-pic">
                          <img alt="Profile Image" width="33" height="33" data-src-retina="<?= HTTP_ROOT ?>assets/img/profiles/6x.jpg" data-src="<?= HTTP_ROOT ?>assets/img/profiles/6.jpg" src="<?= HTTP_ROOT ?>assets/img/profiles/6x.jpg">
                        </div>
                        <h5>Nathaniel Hamilton</h5>
                        <h6>Shared a Post
                        <span class="location semi-bold"><i class="icon-map"></i> NYC, New York</span>
                        </h6>
                      </div>
                      <div class="card-description">
                        <p>There is nothing new under the sun, but there are lots of old things we don't know yet.
                        </p>
                        <!-- <div class="via">via Twitter</div> -->
                      </div>
                      <div class="card-footer clearfix">
                        <div class="time">5 days ago</div>
                        <ul class="reactions">
                          <li><a href="#">54 <i class="fa fa-comment-o"></i></a>
                          </li>
                          <li><a href="#">267 <i class="fa fa-heart-o"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- END ITEM -->
                    
                    <!-- START ITEM -->
                    <div class="card share col1" data-social="item">
                      <div class="circle" data-toggle="tooltip" title="Label" data-container="body">
                      </div>
                      <div class="card-header clearfix">
                        <div class="user-pic">
                          <img alt="Profile Image" width="33" height="33" data-src-retina="<?= HTTP_ROOT ?>assets/img/profiles/5x.jpg" data-src="<?= HTTP_ROOT ?>assets/img/profiles/5.jpg" src="<?= HTTP_ROOT ?>assets/img/profiles/5x.jpg">
                        </div>
                        <h5>Shannon Williams</h5>
                        <h6>Shared a photo
                        <span class="location semi-bold"><i
                      class="fa fa-map-marker"></i> NYC, New York</span>
                      </h6>
                      </div>
                      <div class="card-description">
                        <p>Inspired by : good design is obvious, great design is transparent</p>
                        <!-- <div class="via">via themeforest</div> -->
                      </div>
                      <div class="card-content">
                        <ul class="buttons ">
                          <li>
                            <a href="#"><i class="fa fa-expand"></i>
                            </a>
                          </li>
                          <li>
                            <a href="#"><i class="fa fa-heart-o"></i>
                            </a>
                          </li>
                        </ul>
                        <img alt="Social post" src="assets/img/social-post-image.png">
                      </div>
                      <div class="card-footer clearfix">
                        <div class="time">10 minutes ago</div>
                        <ul class="reactions">
                          <li><a href="#">1,245 <i class="fa fa-comment-o"></i></a>
                          </li>
                          <li><a href="#">735 <i class="fa fa-heart-o"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- START ITEM -->
                    <div class="card share  col1" data-social="item">
                      <div class="circle" data-toggle="tooltip" title="Label" data-container="body">
                      </div>
                      <div class="card-header clearfix">
                        <div class="user-pic">
                          <img alt="Profile Image" width="33" height="33" data-src-retina="<?= HTTP_ROOT ?>assets/img/profiles/6x.jpg" data-src="<?= HTTP_ROOT ?>assets/img/profiles/6.jpg" src="<?= HTTP_ROOT ?>assets/img/profiles/6x.jpg">
                        </div>
                        <h5>Nathaniel Hamilton</h5>
                        <h6>Shared a Post
                  <span class="location semi-bold"><i class="icon-map"></i>  NYC, New York</span>
                </h6>
                      </div>
                      <div class="card-description">
                        <p>Testing can show the presense of bugs, but not their absence.</p>
                        <!-- <div class="via">via Twitter</div> -->
                      </div>
                      <div class="card-footer clearfix">
                        <div class="time">10 march, 2015</div>
                        <ul class="reactions">
                          <li><a href="#">450 <i class="fa fa-comment-o"></i></a>
                          </li>
                          <li><a href="#">3K <i class="fa fa-heart-o"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- END ITEM -->
                  </div>
                </div>
                  <!-- END ITEM -->
                <div class="feed-jobs">
                    <div class="day" data-social="day">
                    <!-- START ITEM -->
                    <div class="card share  col1" data-social="item">
                      <div class="circle" data-toggle="tooltip" title="Label" data-container="body">
                      </div>
                      <div class="card-header clearfix">
                        <div class="user-pic">
                          <img alt="Profile Image" width="33" height="33" data-src-retina="<?= HTTP_ROOT ?>assets/img/profiles/2.jpg" data-src="<?= HTTP_ROOT ?>assets/img/profiles/2.jpg" src="<?= HTTP_ROOT ?>assets/img/profiles/2.jpg">
                        </div>
                        <h5>Jared Leto</h5>
                        <h6>Posted a Job
                  <span class="location semi-bold"><i class="fa fa-map-marker"></i> NYC, New York</span>
                </h6>
                      </div>
                      <div class="card-description">
                        <p>Aura Beauty is a leading hair product company. We are seeking a marketing intern who will help take us to the next level. Interested candidates please email your resume at: nathaniel2002@xyz.com</p>
                        <!-- <div class="via">via Twitter</div> -->
                      </div>
                      <div class="card-footer clearfix">
                        <div class="time">few seconds ago</div>
                        <ul class="reactions">
                          <li><a href="#">45 <i class="fa fa-comment-o"></i></a>
                          </li>
                          <li><a href="#">2K <i class="fa fa-heart-o"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- END ITEM -->
                    <!-- START ITEM -->
                    <div class="card share  col1" data-social="item">
                      <div class="circle" data-toggle="tooltip" title="Label" data-container="body">
                      </div>
                      <div class="card-header clearfix">
                        <div class="user-pic">
                          <img alt="Profile Image" width="33" height="33" data-src-retina="<?= HTTP_ROOT ?>assets/img/profiles/2.jpg" data-src="<?= HTTP_ROOT ?>assets/img/profiles/2.jpg" src="<?= HTTP_ROOT ?>assets/img/profiles/2.jpg">
                        </div>
                        <h5>Jared Leto</h5>
                        <h6>Posted a Job
                  <span class="location semi-bold"><i class="fa fa-map-marker"></i> NYC, New York</span>
                </h6>
                      </div>
                      <div class="card-description">
                        <p>Flag Sports is a leading fitness product company. We are seeking a marketing intern who will help take us to the next level. Interested candidates please email your resume at: johnhamilton@xyz.com</p>
                        <!-- <div class="via">via Twitter</div> -->
                      </div>
                      <div class="card-footer clearfix">
                        <div class="time">20 minutes ago</div>
                        <ul class="reactions">
                          <li><a href="#">5 <i class="fa fa-comment-o"></i></a>
                          </li>
                          <li><a href="#">23 <i class="fa fa-heart-o"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- END ITEM -->
                    <!-- START ITEM -->
                    <div class="card share  col1" data-social="item">
                      <div class="circle" data-toggle="tooltip" title="Label" data-container="body">
                      </div>
                      <div class="card-header clearfix">
                        <div class="user-pic">
                          <img alt="Profile Image" width="33" height="33" data-src-retina="<?= HTTP_ROOT ?>assets/img/profiles/2.jpg" data-src="<?= HTTP_ROOT ?>assets/img/profiles/2.jpg" src="<?= HTTP_ROOT ?>assets/img/profiles/2.jpg">
                        </div>
                        <h5>Jared Leto</h5>
                        <h6>Posted a Job
                  <span class="location semi-bold"><i class="fa fa-map-marker"></i> NYC, New York</span>
                </h6>
                      </div>
                      <div class="card-description">
                        <p>We are seeking a Testing Professionals for a leading IT Firm. Experienced candidates please email your resume at: andy_young22@xyz.com</p>
                      </div>
                      <div class="card-footer clearfix">
                        <div class="time">5 days ago</div>
                        <ul class="reactions">
                          <li><a href="#">357 <i class="fa fa-comment-o"></i></a>
                          </li>
                          <li><a href="#">876 <i class="fa fa-heart-o"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- END ITEM -->
                  </div>
                  </div>
                    <div class="feed-events">
                      <div class="day" data-social="day">
                    <!-- START ITEM -->
                    <div class="card share  col1" data-social="item">
                      <div class="circle" data-toggle="tooltip" title="Label" data-container="body">
                      </div>
                      <div class="card-header clearfix">
                        <div class="user-pic">
                          <img alt="Profile Image" width="33" height="33" data-src-retina="assets/img/profiles/2.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2.jpg">
                        </div>
                        <h5>Jared Leto</h5>
                        <h6>All Events
                        <span class="location semi-bold"><i class="pg pg-ui"></i> (451)</span></h6>
                      </div>
                      <div class="card-description">
                        <p>Dealstorming: The Secret Weapon That Will Solve Your Toughest Challenges – Tim Sanders</p>
                        <!-- <img alt="Quote" src="assets/img/social/event-post1.jpg"> -->
                        <a href="#" class="btn btn-add-friend btn-cons m-t-5 m-l-10 pull-right">
                          <i class="fa fa-user-plus"></i> <span class="bold">Join this Event</span></a>
                      </div>
                      <div class="card-description">
                        <p>How Brands Are Co-Creating Their Story Alongside Their Customers - Simon Mainwaring</p>
                        <a href="#" class="btn btn-add-friend btn-cons m-t-5 m-l-10 pull-right">
                          <i class="fa fa-user-plus"></i> <span class="bold">Join this Event</span></a>
                      </div>
                      <div class="card-description">
                        <p>The Science of Compassion: Origins, Measures &amp; Inventions - James R. Doty, M.D.</p>
                        <a href="#" class="btn btn-add-friend btn-cons m-t-5 m-l-10 pull-right">
                          <i class="fa fa-user-plus"></i> <span class="bold">Join this Event</span></a>
                      </div>
                      <div class="card-description">
                        <p>Why Color Matters in the Face of Globalization - James Sun</p>
                        <!-- <img alt="Quote" src="assets/img/social/event-post1.jpg"> -->
                        <a href="#" class="btn btn-add-friend btn-cons m-t-5 m-l-10 pull-right">
                          <i class="fa fa-user-plus"></i> <span class="bold">Join this Event</span></a>
                      </div>
                      <div class="card-description">
                        <p>Being “Remarkable” Online by Dominating Google - Stephan Spencer</p>
                        <a href="#" class="btn btn-add-friend btn-cons m-t-5 m-l-10 pull-right">
                          <i class="fa fa-user-plus"></i> <span class="bold">Join this Event</span></a>
                      </div>
                      <div class="card-description">
                        <p>What a lovely day! I think I should go and play outside.</p>
                        <a href="#" class="btn btn-add-friend btn-cons m-t-5 m-l-10 pull-right">
                          <i class="fa fa-user-plus"></i> <span class="bold">Join this Event</span></a>
                      </div>
                      <div class="card-footer clearfix">
                        <!-- <div class="time">5 minutes ago</div> -->
                        <div class="time">451 Events</div>
                        <ul class="reactions">
                          <li><a href="#">See All</a></li>
                          <!-- <li><a href="#">5 <i class="fa fa-comment-o"></i></a>
                          </li>
                          <li><a href="#">13 <i class="fa fa-heart-o"></i></a>
                          </li> -->
                        </ul>
                      </div>
                    </div>
                    <!-- END ITEM -->
                  </div>
                </div>
                <div class="feed3">
                  <!-- START DAY --> 
                  <div class="day" data-social="day">
                    <!-- START ITEM -->
                    <div class="card share col1" data-social="item" id="friends-list">
                      <!-- <div class="circle" data-toggle="tooltip" title="Label" data-container="body">
                      </div> -->
                      <div class="card-header clearfix">
                        <div class="user-pic">
                          <img alt="Profile Image" width="33" height="33" data-src-retina="assets/img/profiles/2.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2.jpg">
                        </div>
                        <h5>Friends</h5>
                        <h6>All Friends 
                  <span class="location semi-bold"><i
                      class="fa fa-users"></i> 1,457</span>
                </h6>
                      </div>
                      <div class="card-description">
                        <ul class="list-unstyled" id="friends-list-ul">
                              <li class="m-r-10">
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img src="assets/img/profiles/1.png" alt="Profile Image" data-src="assets/img/profiles/1.png" data-src-retina="assets/img/profiles/1.png">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img src="assets/img/profiles/bd.jpg" alt="Profile Image" data-src="assets/img/profiles/bd.jpg" data-src-retina="assets/img/profiles/bd.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img src="assets/img/profiles/avatar.jpg" alt="Profile Image" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img src="assets/img/profiles/a2x.jpg" alt="Profile Image" data-src="assets/img/profiles/a2x.jpg" data-src-retina="assets/img/profiles/a2x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/5.jpg" alt="Profile Image" data-src="assets/img/profiles/5.jpg" data-src-retina="assets/img/profiles/5x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/6.jpg" alt="Profile Image" data-src="assets/img/profiles/6.jpg" data-src-retina="assets/img/profiles/6x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/7.jpg" alt="Profile Image" data-src="assets/img/profiles/7.jpg" data-src-retina="assets/img/profiles/7x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/2.jpg" alt="Profile Image" data-src="assets/img/profiles/2.jpg" data-src-retina="assets/img/profiles/2x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/3.jpg" alt="Profile Image" data-src="assets/img/profiles/3.jpg" data-src-retina="assets/img/profiles/3x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/4.jpg" alt="Profile Image" data-src="assets/img/profiles/4.jpg" data-src-retina="assets/img/profiles/4x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/5.jpg" alt="Profile Image" data-src="assets/img/profiles/5.jpg" data-src-retina="assets/img/profiles/5x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/6.jpg" alt="Profile Image" data-src="assets/img/profiles/6.jpg" data-src-retina="assets/img/profiles/6x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/7.jpg" alt="Profile Image" data-src="assets/img/profiles/7.jpg" data-src-retina="assets/img/profiles/7x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/1.jpg" alt="Profile Image" data-src="assets/img/profiles/1.jpg" data-src-retina="assets/img/profiles/1x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/2.jpg" alt="Profile Image" data-src="assets/img/profiles/2.jpg" data-src-retina="assets/img/profiles/2x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/3.jpg" alt="Profile Image" data-src="assets/img/profiles/3.jpg" data-src-retina="assets/img/profiles/3x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/4.jpg" alt="Profile Image" data-src="assets/img/profiles/4.jpg" data-src-retina="assets/img/profiles/4x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/5.jpg" alt="Profile Image" data-src="assets/img/profiles/5.jpg" data-src-retina="assets/img/profiles/5x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/6.jpg" alt="Profile Image" data-src="assets/img/profiles/6.jpg" data-src-retina="assets/img/profiles/6x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/7.jpg" alt="Profile Image" data-src="assets/img/profiles/7.jpg" data-src-retina="assets/img/profiles/7x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/2.jpg" alt="Profile Image" data-src="assets/img/profiles/2.jpg" data-src-retina="assets/img/profiles/2x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/3.jpg" alt="Profile Image" data-src="assets/img/profiles/3.jpg" data-src-retina="assets/img/profiles/3x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/4.jpg" alt="Profile Image" data-src="assets/img/profiles/4.jpg" data-src-retina="assets/img/profiles/4x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/5.jpg" alt="Profile Image" data-src="assets/img/profiles/5.jpg" data-src-retina="assets/img/profiles/5x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/6.jpg" alt="Profile Image" data-src="assets/img/profiles/6.jpg" data-src-retina="assets/img/profiles/6x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/7.jpg" alt="Profile Image" data-src="assets/img/profiles/7.jpg" data-src-retina="assets/img/profiles/7x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/1.jpg" alt="Profile Image" data-src="assets/img/profiles/1.jpg" data-src-retina="assets/img/profiles/1x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/2.jpg" alt="Profile Image" data-src="assets/img/profiles/2.jpg" data-src-retina="assets/img/profiles/2x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/3.jpg" alt="Profile Image" data-src="assets/img/profiles/3.jpg" data-src-retina="assets/img/profiles/3x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/4.jpg" alt="Profile Image" data-src="assets/img/profiles/4.jpg" data-src-retina="assets/img/profiles/4x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/5.jpg" alt="Profile Image" data-src="assets/img/profiles/5.jpg" data-src-retina="assets/img/profiles/5x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/6.jpg" alt="Profile Image" data-src="assets/img/profiles/6.jpg" data-src-retina="assets/img/profiles/6x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/7.jpg" alt="Profile Image" data-src="assets/img/profiles/7.jpg" data-src-retina="assets/img/profiles/7x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/2.jpg" alt="Profile Image" data-src="assets/img/profiles/2.jpg" data-src-retina="assets/img/profiles/2x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/3.jpg" alt="Profile Image" data-src="assets/img/profiles/3.jpg" data-src-retina="assets/img/profiles/3x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/4.jpg" alt="Profile Image" data-src="assets/img/profiles/4.jpg" data-src-retina="assets/img/profiles/4x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/5.jpg" alt="Profile Image" data-src="assets/img/profiles/5.jpg" data-src-retina="assets/img/profiles/5x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/6.jpg" alt="Profile Image" data-src="assets/img/profiles/6.jpg" data-src-retina="assets/img/profiles/6x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/7.jpg" alt="Profile Image" data-src="assets/img/profiles/7.jpg" data-src-retina="assets/img/profiles/7x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/1.jpg" alt="Profile Image" data-src="assets/img/profiles/1.jpg" data-src-retina="assets/img/profiles/1x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/2.jpg" alt="Profile Image" data-src="assets/img/profiles/2.jpg" data-src-retina="assets/img/profiles/2x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/3.jpg" alt="Profile Image" data-src="assets/img/profiles/3.jpg" data-src-retina="assets/img/profiles/3x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/4.jpg" alt="Profile Image" data-src="assets/img/profiles/4.jpg" data-src-retina="assets/img/profiles/4x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/5.jpg" alt="Profile Image" data-src="assets/img/profiles/5.jpg" data-src-retina="assets/img/profiles/5x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/6.jpg" alt="Profile Image" data-src="assets/img/profiles/6.jpg" data-src-retina="assets/img/profiles/6x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/7.jpg" alt="Profile Image" data-src="assets/img/profiles/7.jpg" data-src-retina="assets/img/profiles/7x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/2.jpg" alt="Profile Image" data-src="assets/img/profiles/2.jpg" data-src-retina="assets/img/profiles/2x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/3.jpg" alt="Profile Image" data-src="assets/img/profiles/3.jpg" data-src-retina="assets/img/profiles/3x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/4.jpg" alt="Profile Image" data-src="assets/img/profiles/4.jpg" data-src-retina="assets/img/profiles/4x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/5.jpg" alt="Profile Image" data-src="assets/img/profiles/5.jpg" data-src-retina="assets/img/profiles/5x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/6.jpg" alt="Profile Image" data-src="assets/img/profiles/6.jpg" data-src-retina="assets/img/profiles/6x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/7.jpg" alt="Profile Image" data-src="assets/img/profiles/7.jpg" data-src-retina="assets/img/profiles/7x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/1.jpg" alt="Profile Image" data-src="assets/img/profiles/1.jpg" data-src-retina="assets/img/profiles/1x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/2.jpg" alt="Profile Image" data-src="assets/img/profiles/2.jpg" data-src-retina="assets/img/profiles/2x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/3.jpg" alt="Profile Image" data-src="assets/img/profiles/3.jpg" data-src-retina="assets/img/profiles/3x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/4.jpg" alt="Profile Image" data-src="assets/img/profiles/4.jpg" data-src-retina="assets/img/profiles/4x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/5.jpg" alt="Profile Image" data-src="assets/img/profiles/5.jpg" data-src-retina="assets/img/profiles/5x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/6.jpg" alt="Profile Image" data-src="assets/img/profiles/6.jpg" data-src-retina="assets/img/profiles/6x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/7.jpg" alt="Profile Image" data-src="assets/img/profiles/7.jpg" data-src-retina="assets/img/profiles/7x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/2.jpg" alt="Profile Image" data-src="assets/img/profiles/2.jpg" data-src-retina="assets/img/profiles/2x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/3.jpg" alt="Profile Image" data-src="assets/img/profiles/3.jpg" data-src-retina="assets/img/profiles/3x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/4.jpg" alt="Profile Image" data-src="assets/img/profiles/4.jpg" data-src-retina="assets/img/profiles/4x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/5.jpg" alt="Profile Image" data-src="assets/img/profiles/5.jpg" data-src-retina="assets/img/profiles/5x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/6.jpg" alt="Profile Image" data-src="assets/img/profiles/6.jpg" data-src-retina="assets/img/profiles/6x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/7.jpg" alt="Profile Image" data-src="assets/img/profiles/7.jpg" data-src-retina="assets/img/profiles/7x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/1.jpg" alt="Profile Image" data-src="assets/img/profiles/1.jpg" data-src-retina="assets/img/profiles/1x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/2.jpg" alt="Profile Image" data-src="assets/img/profiles/2.jpg" data-src-retina="assets/img/profiles/2x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/3.jpg" alt="Profile Image" data-src="assets/img/profiles/3.jpg" data-src-retina="assets/img/profiles/3x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/4.jpg" alt="Profile Image" data-src="assets/img/profiles/4.jpg" data-src-retina="assets/img/profiles/4x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/5.jpg" alt="Profile Image" data-src="assets/img/profiles/5.jpg" data-src-retina="assets/img/profiles/5x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/6.jpg" alt="Profile Image" data-src="assets/img/profiles/6.jpg" data-src-retina="assets/img/profiles/6x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/7.jpg" alt="Profile Image" data-src="assets/img/profiles/7.jpg" data-src-retina="assets/img/profiles/7x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/2.jpg" alt="Profile Image" data-src="assets/img/profiles/2.jpg" data-src-retina="assets/img/profiles/2x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/3.jpg" alt="Profile Image" data-src="assets/img/profiles/3.jpg" data-src-retina="assets/img/profiles/3x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/4.jpg" alt="Profile Image" data-src="assets/img/profiles/4.jpg" data-src-retina="assets/img/profiles/4x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/5.jpg" alt="Profile Image" data-src="assets/img/profiles/5.jpg" data-src-retina="assets/img/profiles/5x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/6.jpg" alt="Profile Image" data-src="assets/img/profiles/6.jpg" data-src-retina="assets/img/profiles/6x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/7.jpg" alt="Profile Image" data-src="assets/img/profiles/7.jpg" data-src-retina="assets/img/profiles/7x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/1.jpg" alt="Profile Image" data-src="assets/img/profiles/1.jpg" data-src-retina="assets/img/profiles/1x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/2.jpg" alt="Profile Image" data-src="assets/img/profiles/2.jpg" data-src-retina="assets/img/profiles/2x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/3.jpg" alt="Profile Image" data-src="assets/img/profiles/3.jpg" data-src-retina="assets/img/profiles/3x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/4.jpg" alt="Profile Image" data-src="assets/img/profiles/4.jpg" data-src-retina="assets/img/profiles/4x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/5.jpg" alt="Profile Image" data-src="assets/img/profiles/5.jpg" data-src-retina="assets/img/profiles/5x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/6.jpg" alt="Profile Image" data-src="assets/img/profiles/6.jpg" data-src-retina="assets/img/profiles/6x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/7.jpg" alt="Profile Image" data-src="assets/img/profiles/7.jpg" data-src-retina="assets/img/profiles/7x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/2.jpg" alt="Profile Image" data-src="assets/img/profiles/2.jpg" data-src-retina="assets/img/profiles/2x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/3.jpg" alt="Profile Image" data-src="assets/img/profiles/3.jpg" data-src-retina="assets/img/profiles/3x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/4.jpg" alt="Profile Image" data-src="assets/img/profiles/4.jpg" data-src-retina="assets/img/profiles/4x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/5.jpg" alt="Profile Image" data-src="assets/img/profiles/5.jpg" data-src-retina="assets/img/profiles/5x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/6.jpg" alt="Profile Image" data-src="assets/img/profiles/6.jpg" data-src-retina="assets/img/profiles/6x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
                                  <img width="35" height="35" src="assets/img/profiles/7.jpg" alt="Profile Image" data-src="assets/img/profiles/7.jpg" data-src-retina="assets/img/profiles/7x.jpg">
                                </div>
                              </li>
                              <li>
                                <div class="thumbnail-wrapper d48 circular b-white">
                                  <div class="bg-master text-center text-white"><span>+34</span>
                                  </div>
                                </div>
                              </li>
                            </ul>
                      </div>
                      <div class="card-footer clearfix" id="search-friends">
                        <div class="time">
                          <a data-toggle="search" class="search-link" href="#"><i class="pg-search"></i> <span class="bold">Search for your friends</span></a></div>
                      </div>
                    </div>
                    <!-- START ITEM -->
                    <div class="card share  col1" data-social="item">
                      <!-- <div class="circle" data-toggle="tooltip" title="Label" data-container="body">
                      </div> -->
                      <div class="card-header clearfix">
                        <div class="user-pic">
                          <img alt="Profile Image" width="33" height="33" data-src-retina="assets/img/profiles/2.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2.jpg">
                        </div>
                        <h5>Photos</h5>
                        <h6>All Photos <span class="location semi-bold"><i class="fa fa-picture-o"></i></span> (101)</h6>
                      </div>
                      <div class="card-description">
                      <div class="profile-gallery">
                      <div class="gallery-item one-third-thumb" data-width="1" data-height="1">
                      <!-- START PREVIEW -->
                      <img src="assets/img/gallery/1.jpg" alt="" class="image-responsive-height">
                      <!-- END PREVIEW -->
                        <!-- END PRODUCT OVERLAY DESCRIPTION -->
                      </div>
                      <div class="gallery-item one-third-thumb" data-width="1" data-height="1">
                      <!-- START PREVIEW -->
                      <img src="assets/img/gallery/2.jpg" alt="" class="image-responsive-height">
                      <!-- END PREVIEW -->
                        <!-- END PRODUCT OVERLAY DESCRIPTION -->
                      </div>
                      <div class="gallery-item one-third-thumb" data-width="1" data-height="1">
                      <!-- START PREVIEW -->
                      <img src="assets/img/gallery/3.jpg" alt="" class="image-responsive-height">
                      <!-- END PREVIEW -->
                        <!-- END PRODUCT OVERLAY DESCRIPTION -->
                      </div>
                      <div class="gallery-item one-third-thumb" data-width="1" data-height="1">
                      <!-- START PREVIEW -->
                      <img src="assets/img/gallery/2.jpg" alt="" class="image-responsive-height">
                      <!-- END PREVIEW -->
                        <!-- END PRODUCT OVERLAY DESCRIPTION -->
                      </div>
                      <div class="gallery-item one-third-thumb" data-width="1" data-height="1">
                      <!-- START PREVIEW -->
                      <img src="assets/img/gallery/1.jpg" alt="" class="image-responsive-height">
                      <!-- END PREVIEW -->
                        <!-- END PRODUCT OVERLAY DESCRIPTION -->
                      </div>
                      <div class="gallery-item one-third-thumb" data-width="1" data-height="1">
                      <!-- START PREVIEW -->
                      <img src="assets/img/gallery/2.jpg" alt="" class="image-responsive-height">
                      <!-- END PREVIEW -->
                        <!-- END PRODUCT OVERLAY DESCRIPTION -->
                      </div>
                      <div class="gallery-item one-third-thumb" data-width="1" data-height="1">
                      <!-- START PREVIEW -->
                      <img src="assets/img/gallery/1.jpg" alt="" class="image-responsive-height">
                      <!-- END PREVIEW -->
                        <!-- END PRODUCT OVERLAY DESCRIPTION -->
                      </div>
                      <div class="gallery-item one-third-thumb" data-width="1" data-height="1">
                      <!-- START PREVIEW -->
                      <img src="assets/img/gallery/2.jpg" alt="" class="image-responsive-height">
                      <!-- END PREVIEW -->
                        <!-- END PRODUCT OVERLAY DESCRIPTION -->
                      </div>
                      <div class="gallery-item one-third-thumb" data-width="1" data-height="1">
                      <!-- START PREVIEW -->
                      <img src="assets/img/gallery/3.jpg" alt="" class="image-responsive-height">
                      <!-- END PREVIEW -->
                        <!-- END PRODUCT OVERLAY DESCRIPTION -->
                      </div>
                      <div class="gallery-item one-third-thumb" data-width="1" data-height="1">
                      <!-- START PREVIEW -->
                      <img src="assets/img/gallery/2.jpg" alt="" class="image-responsive-height">
                      <!-- END PREVIEW -->
                        <!-- END PRODUCT OVERLAY DESCRIPTION -->
                      </div>
                      <div class="gallery-item one-third-thumb" data-width="1" data-height="1">
                      <!-- START PREVIEW -->
                      <img src="assets/img/gallery/3.jpg" alt="" class="image-responsive-height">
                      <!-- END PREVIEW -->
                        <!-- END PRODUCT OVERLAY DESCRIPTION -->
                      </div>
                      <div class="gallery-item one-third-thumb" data-width="1" data-height="1">
                      <!-- START PREVIEW -->
                      <img src="assets/img/gallery/2.jpg" alt="" class="image-responsive-height">
                      <!-- END PREVIEW -->
                        <!-- END PRODUCT OVERLAY DESCRIPTION -->
                      </div>
                      <div class="gallery-item one-third-thumb" data-width="1" data-height="1">
                      <!-- START PREVIEW -->
                      <img src="assets/img/gallery/3.jpg" alt="" class="image-responsive-height">
                      <!-- END PREVIEW -->
                        <!-- END PRODUCT OVERLAY DESCRIPTION -->
                      </div>
                      <div class="gallery-item one-third-thumb" data-width="1" data-height="1">
                      <!-- START PREVIEW -->
                      <img src="assets/img/gallery/2.jpg" alt="" class="image-responsive-height">
                      <!-- END PREVIEW -->
                        <!-- END PRODUCT OVERLAY DESCRIPTION -->
                      </div>
                      <div class="gallery-item one-third-thumb" data-width="1" data-height="1">
                      <!-- START PREVIEW -->
                      <img src="assets/img/gallery/2_2.jpg" alt="" class="image-responsive-height">
                      <!-- END PREVIEW -->
                        <!-- END PRODUCT OVERLAY DESCRIPTION -->
                      </div>
                      <div class="gallery-item one-third-thumb" data-width="1" data-height="1">
                      <!-- START PREVIEW -->
                      <img src="assets/img/gallery/1.jpg" alt="" class="image-responsive-height">
                      <!-- END PREVIEW -->
                        <!-- END PRODUCT OVERLAY DESCRIPTION -->
                      </div>
                      <div class="gallery-item one-third-thumb" data-width="1" data-height="1">
                      <!-- START PREVIEW -->
                      <img src="assets/img/gallery/2_2.jpg" alt="" class="image-responsive-height">
                      <!-- END PREVIEW -->
                        <!-- END PRODUCT OVERLAY DESCRIPTION -->
                      </div>
                      <!-- END GALLERY ITEM -->
                    </div>
                      </div>
                    </div>
                    <!-- END ITEM -->
                    <div class="card share  col1" data-social="item">
                      <!-- <div class="circle" data-toggle="tooltip" title="Label" data-container="body">
                      </div> -->
                      <div class="card-header clearfix">
                        <div class="user-pic">
                          <img alt="Profile Image" width="33" height="33" data-src-retina="assets/img/profiles/2.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2.jpg">
                        </div>
                        <h5>Videos</h5>
                        <h6>All Videos
                        <span class="location semi-bold"><i class="fa fa-video-camera"></i> (5)</span>
                        </h6>
                      </div>
                      <div class="card-description">
                        <div class="video-gallery">
                        <div class="one-third-thumb">
                        <iframe width="100%" height="80" src="https://www.youtube.com/embed/M6mIVwhlkMY" frameborder="0" allowfullscreen></iframe></div>
                        <div class="one-third-thumb">
                        <iframe width="100%" height="80" src="https://www.youtube.com/embed/_XdYURLHKwM" frameborder="0" allowfullscreen></iframe></div>
                        <div class="one-third-thumb">
                        <iframe width="100%" height="80" src="https://www.youtube.com/embed/M6mIVwhlkMY" frameborder="0" allowfullscreen></iframe></div>
                        <div class="one-third-thumb">
                        <iframe width="100%" height="80" src="https://www.youtube.com/embed/_XdYURLHKwM" frameborder="0" allowfullscreen></iframe></div>
                        <div class="one-third-thumb">
                        <iframe width="100%" height="80" src="https://www.youtube.com/embed/M6mIVwhlkMY" frameborder="0" allowfullscreen></iframe></div>
                        <div class="one-third-thumb">
                        <iframe width="100%" height="80" src="https://www.youtube.com/embed/_XdYURLHKwM" frameborder="0" allowfullscreen></iframe></div>
                        <div class="one-third-thumb">
                        <iframe width="100%" height="80" src="https://www.youtube.com/embed/M6mIVwhlkMY" frameborder="0" allowfullscreen></iframe></div>
                        <div class="one-third-thumb">
                        <iframe width="100%" height="80" src="https://www.youtube.com/embed/_XdYURLHKwM" frameborder="0" allowfullscreen></iframe></div>
                        <div class="one-third-thumb">
                        <iframe width="100%" height="80" src="https://www.youtube.com/embed/M6mIVwhlkMY" frameborder="0" allowfullscreen></iframe></div>
                        <div class="one-third-thumb">
                        <iframe width="100%" height="80" src="https://www.youtube.com/embed/_XdYURLHKwM" frameborder="0" allowfullscreen></iframe></div>
                        <div class="one-third-thumb">
                        <iframe width="100%" height="80" src="https://www.youtube.com/embed/M6mIVwhlkMY" frameborder="0" allowfullscreen></iframe></div>
                        <div class="one-third-thumb">
                        <iframe width="100%" height="80" src="https://www.youtube.com/embed/_XdYURLHKwM" frameborder="0" allowfullscreen></iframe></div>
                        </div>
                      </div>
                    </div>
                    <!-- END ITEM -->
                    <!-- START ITEM -->
                  </div>
                  <!-- END DAY -->
                </div>
                <!-- END FEED -->
              </div>
              <!-- END CONTAINER FLUID -->
            </div>
            <!-- /container -->
          </div>
        </div>
        <!-- END PAGE CONTENT -->
        <!-- START COPYRIGHT -->
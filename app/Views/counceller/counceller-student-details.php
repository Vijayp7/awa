<?= view('counceller/header');?>
      <!-- main navigation starts-->
   
      <!-- main navigation ends here-->
      <main>
        <div class="content-header bg-5">
          <div class="row m-0">
            <div class="col-md-3">
              <h2 class="text-capitalize">Student details</h2>
            </div>
            <div class="col-md-7">
              <ul class="nav nav-pills">
              <li class="active"><a class="btn btn-default text-capitalize" data-toggle="tab" href="#course-1">web desinging</a></li>
              <!-- <li class="active"><a class="btn btn-default text-capitalize" data-toggle="tab" href="#course-1"></a></li> -->
              </ul>
            </div>
            <div class="col-md-2 text-right">
              <a href="<?= base_url()?>counceller/add-new-cource" type="button" class="btn btn-default">Add another Course</a>
            </div>
            
          </div>
        </div>
        <div class="content-wrapper">
          <div class="content-wrapper-before content-wrapper-before-2 bg-5"></div>
          <div class="content-body student-info">
            <div class="row">
              <div class="col-md-4">
                <!-- personal information -->
                <div class="card">
                  <div class="student-block">
                    <div class="profile-pic">
                      <img src="<?= base_url()?>public/assets/images/avatar.png" alt="">
                    </div>
                    <!-- studnt name -->
                    <div class="text-capitalize idNo">Pradeep</div>
                    <div class="text-capitalize idNo">id no : </div>
                  </div>
                  <div class="card-content">
                    <ul class="studInfo m-0">
                      <li>
                        <div class="text-bold text-capitalize">
                          <i class="glyphicon glyphicon-user"></i>gender</div>
                        <div class="text-capitalize"></div>
                      </li>
                      <li>
                        <div class="text-bold text-capitalize">
                          <i class="glyphicon glyphicon-calendar"></i>dob</div>
                        <div class="text-capitalize"></div>
                      </li>
                      <li>
                        <div class="text-bold text-capitalize">
                          <i class="glyphicon glyphicon-certificate"></i>qualification</div>
                        <div class="text-capitalize"></div>
                      </li>
                      <li>
                        <div class="text-bold text-capitalize">
                          <i class="glyphicon glyphicon-phone-alt"></i>mobile no</div>
                        <div class="text-capitalize"></div>
                      </li>
                      <li>
                        <div class="text-bold text-capitalize">
                          <i class="glyphicon glyphicon-phone-alt"></i>alt mobile no</div>
                        <div class="text-capitalize"></div>
                      </li>
                      
                      <li>
                        <div class="text-bold text-capitalize">
                          <i class="glyphicon glyphicon-envelope"></i>maill id</div>
                        <div class="text-capitalize"></div>
                      </li>

                      <li>
                        <div class="text-bold text-capitalize">
                          <i class="glyphicon glyphicon-map-marker"></i>Adress</div>
                        <div class="text-capitalize"></div>
                      </li>
                      <li>
                        <div class="text-bold text-capitalize">
                          <i class="glyphicon glyphicon-credit-card"></i>Aadhar card</div>
                        <div class="text-capitalize"></div>
                      </li>
                    </ul>
                  </div>
                </div>
                
              </div>
              <div class="col-md-8" style='padding-right: 0;'>
                <div class="tab-content">
                  <div id="course-1" class="tab-pane fade in active">
                    <div class="card top-bar-green">
                      <div class="card-header">
                        <h3 class="text-capitalize">cource details</h3>
                      </div>
                      <div class="card-content stuSummary stuSummary2">
                        <div class="topbar">
                          <div class="summary-heading">
                            <h3>web designing</h3>
                          </div>
                          <ul class="studActvStats1">
                            <!-- start date -->
                            <li><b class="text-capitalize">start date</b><span></span>
                            </li>
                            <!-- end date -->
                            <li><b class="text-capitalize">end date</b><span></span>
                            </li>
                            <!-- attendedence -->
                            <li>
                              <b class="text-capitalize">Performence</b>
                              <div class="progress custom-progress">
                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:70%">70%
                                </div>
                            </div>
                            </li>
                          </ul>
                        </div>
                        <div id="summary1" class="faculty-detailes">
                          <div>
                            <h4 class="text-capitalize text-bold">modules</h4>
                            <div>
                              <span class="badge badge-primary">html</span>
                              <span class="badge badge-secondary">css</span>
                              <span class="badge badge-info">javascript</span>
                              <span class="badge badge-success">jquery</span>
                              <span class="badge badge-warning">sass</span>
                              <span class="badge badge-primary">bootstrap</span>
                              <span class="badge badge-info">angular js</span>
                            </div>
                          </div>
                          <div>
                            <h4 class="text-capitalize text-bold">commnets</h4>
                            <p>Lorem</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <h2 class="text-capitalize text-bold">students-results</h2>
                      <div class="students-results clearfix">
                        <!-- Course Module Classes -->
                        <div class="card p-10">
                          <h3 class="h4">Course Module Classes</h3>
                          <div class="attended">
                            <div class="refer-icon">
                              <img src="<?= base_url()?>public/assets/images/test.png" alt="">
                            </div>
                            <small>attended</small>
                            <strong>3/6</strong>
                          </div>
                          <!-- marks secured -->
                          <div>
                            <p><strong class="text-danger">35%</strong>&nbsp;Attended</p>
                            <div class="progress">
                              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%;">
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Practicals -->
                        <div class="card p-10">
                          <h3 class="h4">Practicals</h3>
                          <div class="attended">
                            <div class="refer-icon">
                              <img src="<?= base_url()?>public/assets/images/test.png" alt="">
                            </div>
                            <small>Attended</small>
                            <strong>8/10</strong>
                          </div>
                          <!-- marks secured -->
                          <div>
                            <p><strong class="text-success">80%</strong>&nbsp;Marks Secured</p>
                            <div class="progress">
                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Course Module Test -->
                        <div class="card p-10">
                          <h3 class="h4">Course Module Tests</h3>
                          <div class="attended">
                            <div class="refer-icon">
                              <img src="<?= base_url()?>public/assets/images/test.png" alt="">
                            </div>
                            <small>attended</small>
                            <strong>5/7</strong>
                          </div>
                          <!-- marks secured -->
                          <div>
                            <p><strong class="text-warning">80%</strong>&nbsp;marks secured</p>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Mock interview -->
                        <div class="card p-10">
                          <h3 class="h4">Mock interviews</h3>
                          <div class="attended">
                            <div class="refer-icon">
                              <img src="<?= base_url()?>public/assets/images/test.png" alt="">
                            </div>
                            <small>attended</small>
                            <strong>5/7</strong>
                          </div>
                          <!-- marks secured -->
                          <div>
                            <p><strong class="text-success">60%</strong>&nbsp;marks secured</p>
                            <div class="progress">
                              <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Online Certification -->
                        <div class="card p-10">
                          <h3 class="h4">Online Certifications</h3>
                          <div class="attended">
                            <div class="refer-icon">
                              <img src="<?= base_url()?>public/assets/images/test.png" alt="">
                            </div>
                            <small>completed</small>
                            <strong>5/7</strong>
                          </div>
                          <!-- marks secured -->
                          <div>
                            <p><strong class="text-warning">50%</strong>&nbsp;marks secured</p>
                            <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Weekely Session -->
                        <div class="card p-10">
                          <h3 class="h4">Weekely Sessions</h3>
                          <div class="attended">
                            <div class="refer-icon">
                              <img src="<?= base_url()?>public/assets/images/test.png" alt="">
                            </div>
                            <small>attended</small>
                            <strong>3/4</strong>
                          </div>
                          <!-- marks secured -->
                          <div>
                            <p><strong class="text-success">80%</strong>&nbsp;Attended</p>
                            <div class="progress">
                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Aptitude Class -->
                        <div class="card p-10">
                          <h3 class="h4">Aptitude Classes</h3>
                          <div class="attended">
                            <div class="refer-icon">
                              <img src="<?= base_url()?>public/assets/images/test.png" alt="">
                            </div>
                            <small>attended</small>
                            <strong>4/5</strong>
                          </div>
                          <!-- marks secured -->
                          <div>
                            <p><strong class="text-success">80%</strong>&nbsp;Attended</p>
                            <div class="progress">
                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Aptitude Test -->
                        <div class="card p-10">
                          <h3 class="h4">Aptitude Test</h3>
                          <div class="attended">
                            <div class="refer-icon">
                              <img src="<?= base_url()?>public/assets/images/test.png" alt="">
                            </div>
                            <small>attended</small>
                            <strong>5/7</strong>
                          </div>
                          <!-- marks secured -->
                          <div>
                            <p><strong class="text-info">60%</strong>&nbsp;marks secured</p>
                            <div class="progress">
                              <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Communication -->
                        <div class="card p-10">
                          <h3 class="h4">Communication</h3>
                          <div class="attended">
                            <div class="refer-icon">
                              <img src="<?= base_url()?>public/assets/images/test.png" alt="">
                            </div>
                            <small>Rating</small>
                            <div class="star-rating">
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                            </div>
                          </div>
                          <!-- marks secured -->
                          <div>
                            <p><strong class="text-success">80%</strong>&nbsp;marks secured</p>
                            <div class="progress">
                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>

    <!-- js includes -->
    <!-- jquery library -->
    <script src='<?= base_url()?>public/assets/js/jquery-3.3.1.min.js'></script>

    <!-- Latest bootstrap compiled JavaScript -->
    <script src="<?= base_url()?>public/assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script type="text/javascript" src="<?= base_url()?>public/assets/slick/slick.min.js"></script>
    <script>
      // bacthe slider
      $('.batches-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
    </script>
  </body>
</html>
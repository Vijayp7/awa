<!DOCTYPE html>
<html>
  <head>
    <title>Website Name</title>
    <meta charset="utf-8"> 
    <base href="../">
    <!-- CSS -->
    <!-- favicon -->
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <!-- components css -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <!-- custom css stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <!-- responsive css stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
   
  </head>
  <body>
    <div id="wrapper">
      <!-- header -->
      <header>
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar1">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">
                <img src="images/logo.png" alt="">
              </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar1">
              <form class="navbar-form navbar-left" role="search">
                <button type="submit" class="btn btn-link"><i class="glyphicon glyphicon-search"></i></button>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
              </form>
              <ul class="ht-right">
                <!-- notifications -->
                <li class="dropdown menu-parent">
                  <a class="btn btn-link dropdown-toggle noti-alert" type="button" id="notifictions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <i class="fa fa-bell-o" aria-hidden="true"></i>
                    <!-- alert -->
                    <small></small>
                  </a>
                  <ul class="dropdown-menu custom-menu" aria-labelledby="notifictions">
                    <!--menu header -->
                    <li class="custom-menu-header">Notifications</li>
                    <!--menu body -->
                    <li class="scrollable-container">
                      <!-- notification -->
                      <a href="#" class="notification-content unread">
                        <div class="media">
                          <div class="media-left media-middle av">
                            <span class="avatar">
                              <img src="images/avatar.png" class="media-object">
                            </span>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading">Jhon Deo</h4>
                            <p class="text-muted">Lorem ipsum dolor sit amet</p>
                            <small class="text-muted">03:50 pm</small>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="notification-content">
                        <div class="media">
                          <div class="media-left media-middle av">
                            <span class="avatar">
                              <img src="images/avatar.png" class="media-object">
                            </span>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading">Jhon Deo</h4>
                            <p class="text-muted">Lorem ipsum dolor sit amet</p>
                            <small class="text-muted">03:50 pm</small>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="notification-content unread">
                        <div class="media">
                          <div class="media-left media-middle av">
                            <span class="avatar">
                              <img src="images/avatar.png" class="media-object">
                            </span>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading">Jhon Deo</h4>
                            <p class="text-muted">Lorem ipsum dolor sit amet</p>
                            <small class="text-muted">03:50 pm</small>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="notification-content">
                        <div class="media">
                          <div class="media-left media-middle av">
                            <span class="avatar">
                              <img src="images/avatar.png" class="media-object">
                            </span>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading">Jhon Deo</h4>
                            <p class="text-muted">Lorem ipsum dolor sit amet</p>
                            <small class="text-muted">03:50 pm</small>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="notification-content">
                        <div class="media">
                          <div class="media-left media-middle av">
                            <span class="avatar">
                              <img src="images/avatar.png" class="media-object">
                            </span>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading">Jhon Deo</h4>
                            <p class="text-muted">Lorem ipsum dolor sit amet</p>
                            <small class="text-muted">03:50 pm</small>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="notification-content">
                        <div class="media">
                          <div class="media-left media-middle av">
                            <span class="avatar">
                              <img src="images/avatar.png" class="media-object">
                            </span>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading">Jhon Deo</h4>
                            <p class="text-muted">Lorem ipsum dolor sit amet</p>
                            <small class="text-muted">03:50 pm</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!--menu fooster -->
                    <li class="custom-menu-footer">
                      <a href="notifications.html">See all notifications</a>
                    </li>
                  </ul>
                </li>
                <!-- messages -->
                <li class="dropdown menu-parent">
                  <a class="btn btn-link dropdown-toggle" type="button" id="messages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <!-- alert -->
                    <small></small>
                  </a>
                  <ul class="dropdown-menu custom-menu" aria-labelledby="notifictions">
                    <!--menu header -->
                    <li class="custom-menu-header">messages</li>
                    <!--menu body -->
                    <li class="scrollable-container">
                      <!-- notification -->
                      <a href="#" class="notification-content unread">
                        <div class="media">
                          <div class="media-left media-middle av">
                            <span class="avatar">
                              <img src="images/avatar.png" class="media-object">
                            </span>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading">Jhon Deo</h4>
                            <p class="text-muted">Lorem ipsum dolor sit amet</p>
                            <small class="text-muted">03:50 pm</small>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="notification-content">
                        <div class="media">
                          <div class="media-left media-middle av">
                            <span class="avatar">
                              <img src="images/avatar.png" class="media-object">
                            </span>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading">Jhon Deo</h4>
                            <p class="text-muted">Lorem ipsum dolor sit amet</p>
                            <small class="text-muted">03:50 pm</small>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="notification-content unread">
                        <div class="media">
                          <div class="media-left media-middle av">
                            <span class="avatar">
                              <img src="images/avatar.png" class="media-object">
                            </span>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading">Jhon Deo</h4>
                            <p class="text-muted">Lorem ipsum dolor sit amet</p>
                            <small class="text-muted">03:50 pm</small>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="notification-content">
                        <div class="media">
                          <div class="media-left media-middle av">
                            <span class="avatar">
                              <img src="images/avatar.png" class="media-object">
                            </span>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading">Jhon Deo</h4>
                            <p class="text-muted">Lorem ipsum dolor sit amet</p>
                            <small class="text-muted">03:50 pm</small>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="notification-content">
                        <div class="media">
                          <div class="media-left media-middle av">
                            <span class="avatar">
                              <img src="images/avatar.png" class="media-object">
                            </span>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading">Jhon Deo</h4>
                            <p class="text-muted">Lorem ipsum dolor sit amet</p>
                            <small class="text-muted">03:50 pm</small>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="notification-content">
                        <div class="media">
                          <div class="media-left media-middle av">
                            <span class="avatar">
                              <img src="images/avatar.png" class="media-object">
                            </span>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading">Jhon Deo</h4>
                            <p class="text-muted">Lorem ipsum dolor sit amet</p>
                            <small class="text-muted">03:50 pm</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!--menu fooster -->
                    <li class="custom-menu-footer">
                      <a href="inbox.html">See all messages</a>
                    </li>
                  </ul>
                </li>
                
                <!-- profile -->
                <li class="dropdown menu-parent">
                  <a href="javascript:void(0)" class="btn btn-link dropdown-toggle" type="button" id="profile-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <span class="avatar"><img src="images/avatar.png" alt=""></span>
                  </a>
                  <!-- dropdown menu -->
                  <ul class="dropdown-menu profile-menu" aria-labelledby="profile-menu">
                    <li>
                      <a href="javascript:void(0)">
                        <span class="avatar">
                          <img src="images/avatar.png" alt="">
                        </span>
                        <span>Jhon Deo</span>
                      </a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li><a href="profile-view.html"><i class="fa fa-user" aria-hidden="true"></i>view profile</a></li>
                    <li><a href="inbox.html"><i class="fa fa-envelope" aria-hidden="true"></i>My inbox</a></li>
                    <li><a href="pracicles-list.html"><i class="fa fa-tasks" aria-hidden="true"></i>my tasks</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>logout</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- main navigation starts-->
      <div class="header-nav">
        <nav class="navbar bg-5" id="sticky-nav">
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li class="active"><a href="counceller/admisnReview.html">Admissions under review</a></li>
              <li><a href="counceller/enrollment.html">enrolled Students</a></li>
            </ul>
          </div>
        </nav>
      </div>
      <!-- main navigation ends here-->
      <main>
        <div class="content-wrapper">
          <div class="content-wrapper-before bg-5"></div>
          <!-- page title -->
          <div class="content-header">
            <h2 class="text-capitalize">add student</h2>
          </div>
          <!-- content -->
          <div class="content-body">
            <div class="row">
              <form>
                <!-- Personal Detailes -->
                <div class="col-md-12">
                  <div class="card row top-bar-green">
                    <div class="card-header">
                      <h3>personal detailes</h3>
                    </div>
                    <div class="card-content">
                      <div class="row">
                        <div class="col-md-2">
                          <div class="add_profile">
                            <div class="uploadPhoto">
                              <img src="images/avatar.png" alt="">
                            </div>
                            <button class="btn btn-link text-center">Add Photo</button>
                          </div>
                        </div>
                        <div class="col-md-10">
                          <div class="row">
                            <!-- name -->
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="text-capitalize">name*</label>
                                <input type="text" class="form-control">
                              </div>
                            </div>

                            <!-- gender -->
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="text-capitalize">select gender</label>
                                <select class="form-control text-capitalize">
                                  <option class="text-capitalize">male</option>
                                  <option class="text-capitalize">female</option>
                                  <option class="text-capitalize">others</option>
                                </select>
                              </div>
                            </div>

                            <!-- dob -->
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="text-capitalize">date of birth</label>
                                <input type="date" class="form-control text-uppercase">
                              </div>
                            </div>

                            <!-- email -->
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="text-capitalize">Email id</label>
                                <input type="email" class="form-control">
                              </div>
                            </div>

                            <!-- mobile number -->
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="text-capitalize">mobile number</label>
                                <input type="number" class="form-control">
                              </div>
                            </div>
                            <!-- Alternative mobile number -->
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="text-capitalize">Alternative mobile number</label>
                                <input type="number" class="form-control">
                              </div>
                            </div>

                            <!-- QUALIFICATION -->
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="text-capitalize">qualification</label>
                                <input type="text" class="form-control">
                              </div>
                            </div>

                            <!-- ADDRESS -->
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="text-capitalize">address</label>
                                <input type="text" class="form-control">
                              </div>
                            </div>

                            <!-- aadhar number-->
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="text-capitalize">Enter aadhar number</label>
                                <input type="number" class="form-control">
                              </div>
                            </div>
                            <!-- upload aadhar -->
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="text-capitalize">upload aadhar</label>
                                <input type="file">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- course detailes -->
                <div class="col-md-12">
                  <div class="card row top-bar-info">
                    <div class="card-header">
                      <h3>course detailes</h3>
                    </div>
                    <div class="card-content">
                      <div class="row">
                        
                        <!-- COURSE TYPE -->
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="text-capitalize">course type</label>
                            <select class="form-control text-capitalize">
                              <option class="text-capitalize">regualar</option>
                              <option class="text-capitalize">fasttrack</option>
                              <option class="text-capitalize">weekends</option>
                            </select>
                          </div>
                        </div>


                        <!-- start date -->
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="text-capitalize">start date</label>
                            <input type="date" class="form-control text-uppercase">
                          </div>
                        </div>
                        
                        <!-- end date -->
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="text-capitalize">end date</label>
                            <input type="date" class="form-control text-uppercase">
                          </div>
                        </div>
                        <!-- comments -->
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="text-capitalize">comments</label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <!-- LEAD SOURCE -->
                        <div class="col-md-8">
                          <div class="form-group">
                            <label class="text-capitalize">lead source</label>
                            <select class="form-control">
                              <option class="text-capitalize">lorem ipsum</option>
                              <option class="text-capitalize">lorem ipsum</option>
                            </select>
                          </div>
                        </div>
                        
                      <div id="container">
                        <div class="course-btn user-entry col-md-12">
                        <!-- COURSE TYPE -->

                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="text-capitalize">course category</label>
                              <select class="form-control text-capitalize">
                                <option class="text-capitalize">web designing</option>
                                <option class="text-capitalize">web development</option>
                                <option class="text-capitalize">fullstack development</option>
                              </select>
                            </div>
                          </div>

                          <!-- skills -->
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="text-capitalize">skills</label>
                              <div class="form-control" style="height: auto;">
                                <div class="text-uppercase skils-column">
                                  <div class="customradio">
                                    <input type="checkbox" name="selectComapny">
                                    <span class="text-uppercase">html</span>
                                  </div>
                                  <div class="customradio">
                                    <input type="checkbox" name="selectComapny">
                                    <span class="text-uppercase">css</span>
                                  </div>
                                  <div class="customradio disable">
                                    <input type="checkbox" name="selectComapny">
                                    <span class="text-uppercase">javascript</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        
                        </div>
                      </div>
                        
                        <div class="col-md-8 course-click">
                          <div class="form-group">
                            <!-- <a id="add-line" class="btn btn-primary add-more-btn">Add</a> -->
                            <button id="add-line" type="button" class="btn btn-pink"><i class="glyphicon glyphicon-plus"></i>&nbsp;add another course</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- payment details -->
                <div class="col-md-12">
                  <div class="row card top-bar-warning">
                    <div class="card-header">
                      <h3>payment detailes</h3>
                    </div>
                    <div class="card-content">
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="text-capitalize">course fee</label>
                            <input type="number" class="form-control">
                          </div>
                        </div>
                        <!-- coupon code -->
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="text-capitalize">coupon code </label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <!-- installment -->
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="text-capitalize">first installment</label>
                            <input type="number" class="form-control">
                          </div>
                        </div>
                        
                        <!-- payment date -->
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="text-capitalize">first installment payment date</label>
                            <input type="date" class="form-control text-uppercase">
                          </div>
                        </div>
                      </div>
                      <div class="row"> 
                        <!-- second installment -->
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="text-capitalize">second installment</label>
                            <input type="number" class="form-control">
                          </div>
                        </div>
                        
                        <!-- payment date -->
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="text-capitalize">second installment payment date</label>
                            <input type="date" class="form-control text-uppercase">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-3">
                          <button type="button" class="btn btn-pink"><i class="glyphicon glyphicon-plus"></i>&nbsp;add another installment</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- add coments -->
                <div class="col-md-12">
                  <div class="row card top-bar-warning">
                    <div class="card-header">
                      <h3>additional comments</h3>
                    </div>
                    <div class="card-content">
                      <label>Write your comments on here</label>
                      <textarea class="form-control"></textarea>
                    </div>
                  </div>
                </div>
                <!-- action buttons -->
                <div class="col-md-12 formSubmit">
                  <button class="btn btn-default">cancel</button>
                  <button class="btn btn-pink">submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </main>
    </div>

    <!-- js includes -->
    <!-- jquery library -->
    <script src='js/jquery-3.3.1.min.js'></script>

    <!-- Latest bootstrap compiled JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script type="text/javascript" src="slick/slick.min.js"></script>
    
    <script>
      $(document).ready(function(){
        // Batch Wise Rating load more
        var admWaitngAprovesList = $(".admWaitngAproves tr");
        var listToShow = 2;
        var listsLoadBtn = $("#listsLoadBtn");
        var listsInList = admWaitngAprovesList.length;
        admWaitngAprovesList.hide();
        if (listsInList > listToShow) {
          listsLoadBtn.show();
        }
        admWaitngAprovesList.slice(0, listToShow).show();

        listsLoadBtn.click(function(){
            var listsShowing = admWaitngAprovesList.filter(':visible').length;
            admWaitngAprovesList.slice(listsShowing - 1, listsShowing + listToShow).fadeIn();
            var listsNowShowing = admWaitngAprovesList.filter(':visible').length;
            if (listsNowShowing >= listsInList) {
              listsLoadBtn.hide();
            }
        });

        // Batch Wise Rating load more

        var admRectList = $(".admnRejects tr");
        var rejctdlistShow = 2;
        var rejectlistsLoadBtn = $("#rejectlistsLoadBtn");
        var rejectListsInList = admRectList.length;
        admRectList.hide();
        if (rejectListsInList > rejctdlistShow) {
          rejectlistsLoadBtn.show();
        }
        admRectList.slice(0, rejctdlistShow).show();

        rejectlistsLoadBtn.click(function(){
            var rejclistShowing = admRectList.filter(':visible').length;
            admRectList.slice(rejclistShowing - 1, rejclistShowing + rejctdlistShow).fadeIn();
            var rjctdAdmisionList = admRectList.filter(':visible').length;
            if (rjctdAdmisionList >= rejectListsInList) {
              rejectlistsLoadBtn.hide();
            }
        });
      });


    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        $userForm = $('.user-entry').clone();
          $('#add-line').click(function(){
            var newUserForm = $userForm.clone();
            $('#container').append(newUserForm);
          });
      });
    </script>
  </body>
</html>
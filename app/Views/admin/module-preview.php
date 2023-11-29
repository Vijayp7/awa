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
    <!-- custom css stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <!-- responsive css stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    

    <style>
      .d-flex{
        display: flex;
        flex-wrap: wrap;
      }
      .module_view > .row{
        margin-bottom: 15px;
      }
      .module_view > .row > .col-md-2{
        position: relative;
      }
      .module_view > .row > .col-md-2:after{
        content: ':';
        position: absolute;
        right: 0;
        top: 0;
        color: #000;
        font-weight: bold;
      }
      #clasAprvlActdn .accordion-toggle:after {
        top: 8px;
      }
    </style>
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
        <nav class="navbar bg-7" id="sticky-nav">
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li>
                <a href="super-admin/create-branch.html">branches</a>
              </li>
              <li>
                <a href="super-admin/employees.html">users</a>
              </li>
              <li>
                <a href="super-admin/modules.html">modules</a>
              </li>
              <li>
                <a href="super-admin/course.html">courses</a>
              </li>
              <li>
                <a href="super-admin/coupons.html">coupons</a>
              </li>
              <li>
                <a href="super-admin/banks.html">Bank accounts</a>
              </li>
              <li>
                <a href="super-admin/online-payments.html">online payments</a>
              </li>
              <li>
                <a href="super-admin/hoildays.html">hoildays</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <!-- main navigation ends here-->
      <main>
        <div class="content-wrapper">
          <div class="content-wrapper-before bg-7"></div>
          <div class="content-header">
            <h2 class="text-capitalize">Module view</h2>
          </div>
          <div class="content-body">
            <div class="card">
              <div class="card-header">
                <h3 class="text-capitalize">module detailes</h3>
              </div>
              <div class="card-body card2 module_view">
                <div class="row">
                  <div class="col-md-2">
                    <span class="text-capitalize">Module name</span>
                  </div>
                  <div class="col-md-9">
                    <strong>Module 1</strong>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    <span class="text-capitalize">Module Cost</span>
                  </div>
                  <div class="col-md-9">
                    <strong>90000/-</strong>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    <span class="text-capitalize">Module Type</span>
                  </div>
                  <div class="col-md-9">
                    <strong>Techincal</strong>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    <span class="text-capitalize">Faculty Reference</span>
                  </div>
                  <div class="col-md-9">
                    <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</strong>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    <span class="text-capitalize">Faculty Reference</span>
                  </div>
                  <div class="col-md-9">
                    <a href="images/logo.png" download="file" class="btn btn-info btn-sm">Download file</a>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    <span class="text-capitalize">Student material</span>
                  </div>
                  <div class="col-md-9">
                    <a href="images/logo.png" download="file" class="btn btn-info btn-sm">Download file</a>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    <span class="text-capitalize">assignments</span>
                  </div>
                  <div class="col-md-9">
                    <a href="images/logo.png" download="file" class="btn btn-info btn-sm">Download file</a>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    <span class="text-capitalize">Classes</span>
                  </div>
                  <div class="col-md-6">
                    <div class="panel-group custom-acordin" id="clasAprvlActdn">
                      <div class="panel panel-default">
                        <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#clasAprvlActdn" href="#module9" aria-expanded="false">
                          <h4 class="panel-title text-capitalize">1.&nbsp;class&nbsp;-&nbsp;<strong class="text-info" style="margin-right: 100px;">1:30mins</strong>
                          </h4>
                        </div>
                        <div id="module9" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                          <div class="card-content">
                            <h4 class="title">topics</h4>
                            <ul class="list-items">
                              <li>lorem ipsum</li>
                              <li>lorem ipsum</li>
                              <li>lorem ipsum</li>
                              <li>lorem ipsum</li>
                              <li>lorem ipsum</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#clasAprvlActdn" href="#module10" aria-expanded="false">
                          <h4 class="panel-title text-capitalize">2.&nbsp;class&nbsp;-&nbsp;<strong class="text-info" style="margin-right: 100px;">1:30mins</strong></h4>
                        </div>
                        <div id="module10" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                          <div class="card-content">
                            <h4 class="title">topics</h4>
                            <ul class="list-items">
                              <li>lorem ipsum</li>
                              <li>lorem ipsum</li>
                              <li>lorem ipsum</li>
                              <li>lorem ipsum</li>
                              <li>lorem ipsum</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Add new class -->
            <div class="card">
              <div class="card-header">
                <h3 class="text-capitalize">Add New Class</h3>
              </div>
              <div class="card-body card2">
                <form action="">
                  <div class="row d-flex">
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-6">
                          <label for="" class="text-capitalize">Class timings</label>
                          <div class="form-group">
                            <input class="form-control pull-left" style="width: 50%;border-radius: 0" placeholder="Hrs">
                            <input class="form-control pull-left" style="width: 50%;border-radius: 0" placeholder="Mins">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="" class="text-capitalize">Class number</label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="" class="text-capitalize">Student material</label>
                        <div class="file-upload">
                          <div class="file-select">
                            <div class="file-select-button" id="fileName">Choose File</div>
                            <div class="file-select-name" id="noFile">No file chosen...</div> 
                            <input type="file" name="chooseFile" id="chooseFile">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <label for="" class="text-capitalize">faculty reference</label>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <textarea name="" id="" rows="2" class="form-control"></textarea>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <!-- file upload -->
                            <div class="file-upload">
                              <div class="file-select">
                                <div class="file-select-button" id="fileName">Choose File</div>
                                <div class="file-select-name" id="noFile">No file chosen...</div> 
                                <input type="file" name="chooseFile" id="chooseFile">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="" class="text-capitalize">Assignments</label>
                        <div class="file-upload">
                          <div class="file-select">
                            <div class="file-select-button" id="fileName">Choose File</div>
                            <div class="file-select-name" id="noFile">No file chosen...</div> 
                            <input type="file" name="chooseFile" id="chooseFile3">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Add Topics</label>
                        <div class="input-group">
                          <input type="text" class="form-control" id="inputGroupSuccess4" aria-describedby="inputGroupSuccess4Status">
                          <div class="input-group-btn">
                            <button class="btn btn-info" type="submit">
                              Add Topic
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <a href="super-admin/module-view.html" class="btn btn-primary text-capitalize">Add next Class</a>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <div class="modal-footer">
              <div class="clearfix">
                <a href="super-admin/modules.html" class="btn btn-success btn-lg">Publish</a>
              </div>
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
    <script src='js/main.js'></script>
    <script>
      // custom file upload
      $('#chooseFile').bind('change', function () {
        var filename = $("#chooseFile").val();
        if (/^\s*$/.test(filename)) {
          $(".file-upload").removeClass('active');
          $("#noFile").text("No file chosen..."); 
        }
        else {
          $(".file-upload").addClass('active');
          $("#noFile").text(filename.replace("C:\\fakepath\\", "")); 
        }
      });

    </script>
  </body>
</html>
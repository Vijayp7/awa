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
      .fa-plus{
        color: #fff;
      }
      .fa-plus::before{
        background: transparent;
      }
      .btn-danger .fa{
        color: #fff;
      }
      .month_filter{
        width: 300px !important;
      }
      .month_filter .form-group{
        display: flex;
        align-items: center;
      }
      .month_filter .form-group label{
        white-space: nowrap;
        margin-right: 20px;
        color: #fff;
        font-size: 16px;
        text-transform: capitalize;
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
              <li class="active">
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
            <h2 class="text-capitalize">Holidays</h2>
            <div class="header-elements scStdntsListTabs">
              <ul class="nav nav-pills nav-stacked">
                <li class="month_filter">
                  <div class="form-group m-0">
                    <label for="">sort by month</label>
                    <input type="month" class="form-control">
                  </div>
                </li>
                <li>
                  <div class="form-group m-0">
                    <select class="form-control">
                      <option value="" selected="" disabled="">sort by type</option>
                      <option value="">Regular</option>
                      <option value="">Specail</option>
                    </select>
                  </div>
                </li>
                <li class="text-right">
                  <button class="btn btn-primary text-capitalize" data-toggle="modal" data-target="#add-holiday">Add Hoilday</button>
                </li>
                
              </ul>
            </div>
          </div>
          <div class="content-body">
            <div class="card">
              <div class="card-header">
                <h3 class="text-capitalize">Holidays list</h3>
              </div>
              <div class="card-content">
                <table class="table table-striped custom-table">
                  <thead>
                    <tr>
                      <th class="text-capitalize">s no</th>
                      <th class="text-capitalize">date</th>
                      <th class="text-capitalize">description</th>
                      <th class="text-capitalize">type</th>
                      <th class="text-capitalize">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>20-02-2020</td>
                      <td>
                        <p style="max-width: 300px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                      </td>
                      <td>Regular</td>
                      <td>
                        <button class="btn btn-default text-capitalize" data-toggle="modal" data-target="#add-holiday">Edit</button>
                        <button class="btn btn-sm btn-danger text-capitalize">Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>28-03-2020</td>
                      <td>
                        <p style="max-width: 300px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                      </td>
                      <td>Special</td>
                      <td>
                        <button class="btn btn-default text-capitalize" data-toggle="modal" data-target="#add-holiday">Edit</button>
                        <button class="btn btn-sm btn-danger text-capitalize">Delete</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="text-right">
                <nav aria-label="Page navigation example">
                  <ul class="pagination m-0">
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">«</span>
                        <span class="sr-only">Previous</span>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">»</span>
                        <span class="sr-only">Next</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
          </div>
        </div>
      </main>
    </div>

    <div id="add-holiday" class="modal fade" role="dialog">
      <div class="modal-dialog modal-dialog-lg">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Holiday</h4>
          </div>
          <div class="modal-body">
            <form>
              <div class="row">
                <div class="col-sm-12 module-wrapper">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="">Select date</label>
                            <input type="date" class="form-control">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <label for="" style="margin-top: 15px;"></label>
                          <select class="form-control">
                            <option value="" selected disabled>select type</option>
                            <option value="">Regular</option>
                            <option value="">Specail</option>
                          </select>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="write a message which should send to student on this perticular date"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <button type="button" class="btn btn-primary">Create</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- js includes -->
    <!-- jquery library -->
    <script src='js/jquery-3.3.1.min.js'></script>

    <!-- Latest bootstrap compiled JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src='js/main.js'></script>
    <script>
      
    </script>
  </body>
</html>
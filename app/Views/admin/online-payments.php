
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
              <li class="active">
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
            <h2 class="text-capitalize">online payments</h2>
            <div class="header-elements scStdntsListTabs">
              <ul class="nav nav-pills nav-stacked">
                <li class="text-right">
                <button class="btn btn-white text-capitalize" data-toggle="modal" data-target="#create-online-payment">Add online payemnt</button>
                </li>
              </ul>
            </div>
          </div>
          <div class="content-body">
              <div class="card">
                <div class="card-header">
                  <h3 class="text-capitalize">bank accounts list</h3>
                </div>
                <div class="card-content">
                    <table class="table table-striped custom-table">
                    <thead>
                      <tr>
                        <th class="text-capitalize">S no</th>
                        <th class="text-capitalize">vendor name</th>
                        <th class="text-capitalize">mobile number</th>
                        <th class="text-capitalize">bank name</th>
                        <th class="text-capitalize">branch name</th>
                        <th class="text-capitalize">account name</th>
                        <th class="text-capitalize">account number</th>
                        <th class="text-capitalize">action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Google pay</td>
                        <td>9876543210</td>
                        <td>axis</td>
                        <td colspan="text-capitalize">basheerbagh</td>
                        <td colspan="text-capitalize">infasta</td>
                        <td>123456789</td>
                        <td>
                          <button type="button" class="btn btn-default" data-toggle='modal' data-target='#create-online-payment'>Edit</button>
                          <button type="button" class="btn btn-success" data-toggle='modal' data-target='#activeModal'>Active</button>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Phone pay</td>
                        <td>9876543210</td>
                        <td>HDFC</td>
                        <td colspan="text-capitalize">west marredpally</td>
                        <td colspan="text-capitalize">ace web academy </td>
                        <td>123456789</td>
                        <td>
                          <button type="button" class="btn btn-default" data-toggle='modal' data-target='#create-online-payment'>Edit</button>
                          <button type="button" class="btn btn-danger" data-toggle='modal' data-target='#suspendModal'>Suspend</button>
                          </td>
                      </tr>
                    </tbody>
                  </table>
                  </div>
              </div>
          </div>
        </div>
      </main>
    </div>

    <!-- modals -->
    <div id="create-online-payment" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">create online payment</h4>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label class="text-capitalize">vendor name</label>
                <input class="form-control" type="text" placeholder="Enter vendor name">
              </div>
              <div class="form-group">
                <label class="text-capitalize">mobile number</label>
                <input class="form-control" type="number" placeholder="Enter mobile number">
              </div>
              <div class="form-group">
                <label class="text-capitalize">bank name</label>
                <select name="" id="" class="form-control">
                  <option disabled selected>Select bank</option>
                  <option>axis</option>
                  <option>hdfc</option>
                </select>
              </div>
              <div class="form-group">
                <label class="text-capitalize">branch name</label>
                <select name="" id="" class="form-control">
                  <option disabled selected>Select branch</option>
                  <option>basheerbagh</option>
                  <option>west marredpally</option>
                </select>
              </div>
              <div class="form-group">
                <label class="text-capitalize">account name</label>
                <select name="" id="" class="form-control">
                  <option disabled selected>Select account name</option>
                  <option>infasta</option>
                  <option>ace web academy</option>
                </select>
              </div>
              <div class="form-group">
                <label class="text-capitalize">account number</label>
                <select name="" id="" class="form-control">
                  <option disabled selected>Select account number</option>
                  <option>0123456789</option>
                  <option>9876543210</option>
                </select>
              </div>
              <div class="form-group">
                  <button type="button" class="btn btn-primary">Create</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- confirmation modal -->
    <div id="suspendModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-body">
              <h3 class="text-center text-info">Are you sure to suspend</h3>
          </div>
          <div class="modal-footer text-center">
            <button type="submit" class="btn btn-default text-capitalize text-capitalize" data-dismiss="modal">cancel</button>
            <button type="submit" class="btn btn-default text-capitalize text-capitalize btn-primary">Remove</button>
          </div>
        </div>
      </div>
    </div>

    <!-- confirmation modal -->
    <div id="activeModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-body">
              <h3 class="text-center text-info">Are you sure to activate</h3>
          </div>
          <div class="modal-footer text-center">
            <button type="submit" class="btn btn-default text-capitalize text-capitalize" data-dismiss="modal">cancel</button>
            <button type="submit" class="btn btn-default text-capitalize text-capitalize btn-primary">Remove</button>
          </div>
        </div>
      </div>
    </div>
    <!-- js includes -->
    <!-- jquery library -->
    <script src='js/jquery-3.3.1.min.js'></script>

    <!-- Latest bootstrap compiled JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
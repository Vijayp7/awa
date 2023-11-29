<!DOCTYPE html>
<html>
  <head>
    <title>Website Name</title>
    <meta charset="utf-8"> 
    <base href="../">
    
    <!-- CSS -->
    <!-- favicon -->
    <link rel="icon" href="<?= base_url()?>public/assets/images/logo.png" type="image/x-icon">
    <!-- components css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>public/assets/bootstrap/css/bootstrap.css">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>public/assets/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>public/assets/slick/slick-theme.css"/>
    <!-- custom css stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>public/assets/css/styles.css">
    <!-- responsive css stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>public/assets/css/responsive.css">
   
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
                <img src="<?= base_url()?>public/assets/images/logo.png" alt="">
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
                              <img src="<?= base_url()?>public/assets/images/avatar.png" class="media-object">
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
                              <img src="<?= base_url()?>public/assets/images/avatar.png" class="media-object">
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
                    <span class="avatar"><img src="<?= base_url()?>public/assets/images/avatar.png" alt=""></span>
                  </a>
                  <!-- dropdown menu -->
                  <ul class="dropdown-menu profile-menu" aria-labelledby="profile-menu">
                    <li>
                      <a href="javascript:void(0)">
                        <span class="avatar">
                          <img src="<?= base_url()?>public/assets/images/avatar.png" alt="">
                        </span>
                        <span>Jhon Deo</span>
                      </a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li><a href="profile-view"><i class="fa fa-user" aria-hidden="true"></i>view profile</a></li>
                    <li><a href="inbox"><i class="fa fa-envelope" aria-hidden="true"></i>My inbox</a></li>
                    <li><a href="pracicles-list"><i class="fa fa-tasks" aria-hidden="true"></i>my tasks</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="<?= base_url()?>logout"><i class="fa fa-sign-out" aria-hidden="true"></i>logout</a></li>
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
              <li class="active"><a href="<?= base_url()?>counsellor/admissions">Admissions under review</a></li>
              <li><a href="<?= base_url()?>counsellor/enrollment">enrolled Students</a></li>
            </ul>
          </div>
        </nav>
      </div>
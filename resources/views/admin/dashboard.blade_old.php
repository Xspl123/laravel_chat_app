<!DOCTYPE html>
<html lang="en">
<head>

  <title> TSquare Global </title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <!-- icons -->
  <link href="{{asset('css/assets/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  
  <!-- <link href="{{asset('css/assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" /> -->
  <!--bootstrap -->
  <link href="{{asset('css/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('css/assets/plugins/summernote/summernote.css')}}" rel="stylesheet">
  <!-- morris chart -->
  <link href="{{asset('css/assets/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css" />
  <!-- Material Design Lite CSS -->
    <link href="//cdn.muicss.com/mui-0.10.3/css/mui.min.css" rel="stylesheet" type="text/css" />
    <script src="//cdn.muicss.com/mui-0.10.3/js/mui.min.js"></script>
  <!-- <link rel="stylesheet" href="{{asset('css/assets/plugins/material/material.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/assets/css/material_style.css')}}"> -->
  <!-- animation -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" type="text/css" />

  <link href="{{asset('css/assets/css/pages/animate_page.css')}}" rel="stylesheet">
  <!-- Template Styles -->
  <link href="{{asset('css/assets/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('css/assets/css/style.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('css/assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('css/assets/css/theme-color.css')}}" rel="stylesheet" type="text/css" />
  <!-- favicon -->
</head>
<style type="text/css">
  /*@font-face {
   font-family: 'Material Icons';
   font-style: normal;
   font-weight: 400;
   src: url('{{asset('css/assets/plugins/material-icons/iconfont/MaterialIcons-Regular.eot')}}'); 
   src: local('Material Icons'),
        local('MaterialIcons-Regular'),
        url('{{asset('css/assets/plugins/plugins/material-icons/iconfont/MaterialIcons-Regular.woff2')}}' format('woff2'),
        url('{{asset('css/assets/plugins/plugins/material-icons/iconfont/MaterialIcons-Regular.woff ')}}' format('woff'),
        url('{{asset('css/assets/plugins/plugins/material-icons/iconfont/MaterialIcons-Regular.ttf ')}}') format('truetype');
}
*/
</style>
<!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
  <div class="page-wrapper">
    <!-- start header -->
    <div class="page-header navbar navbar-fixed-top">
      <div class="page-header-inner ">
        <!-- logo start -->
        <div class="page-logo">
          <a href="index.html">
            <img src="{{asset('css/assets/img/logo.png')}}">
            <span class="logo-default">Tsquareus Global</span> </a>
        </div>
        <!-- logo end -->
        <ul class="nav navbar-nav navbar-left in">
          <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
        </ul>
        <form class="search-form-opened" action="#" method="GET">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search..." name="query">
            <span class="input-group-btn search-btn">
              <a href="javascript:;" class="btn submit">
                <i class="icon-magnifier"></i>
              </a>
            </span>
          </div>
        </form>
        <!-- start mobile menu -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
          data-target=".navbar-collapse">
          <span></span>
        </a>
        <!-- end mobile menu -->
        <!-- start header menu -->
        <div class="top-menu">
          <ul class="nav navbar-nav pull-right">
            <!-- start notification dropdown -->
            <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
              <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <i class="fa fa-bell-o"></i>
                <span class="badge headerBadgeColor1"> 6 </span>
              </a>
              <ul class="dropdown-menu animated swing">
                <li class="external">
                  <h3><span class="bold">Notifications</span></h3>
                  <span class="notification-label purple-bgcolor">New 6</span>
                </li>
                <li>
                  <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                    <li>
                      <a href="javascript:;">
                        <span class="time">just now</span>
                        <span class="details">
                          <span class="notification-icon circle deepPink-bgcolor"><i
                              class="fa fa-check"></i></span> Congratulations!. </span>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:;">
                        <span class="time">3 mins</span>
                        <span class="details">
                          <span class="notification-icon circle purple-bgcolor"><i
                              class="fa fa-user o"></i></span>
                          <b>John Micle </b>is now following you. </span>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:;">
                        <span class="time">7 mins</span>
                        <span class="details">
                          <span class="notification-icon circle blue-bgcolor"><i
                              class="fa fa-comments-o"></i></span>
                          <b>Sneha Jogi </b>sent you a message. </span>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:;">
                        <span class="time">12 mins</span>
                        <span class="details">
                          <span class="notification-icon circle pink"><i
                              class="fa fa-heart"></i></span>
                          <b>Ravi Patel </b>like your photo. </span>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:;">
                        <span class="time">15 mins</span>
                        <span class="details">
                          <span class="notification-icon circle yellow"><i
                              class="fa fa-warning"></i></span> Warning! </span>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:;">
                        <span class="time">10 hrs</span>
                        <span class="details">
                          <span class="notification-icon circle red"><i
                              class="fa fa-times"></i></span> Application error. </span>
                      </a>
                    </li>
                  </ul>
                  <div class="dropdown-menu-footer">
                    <a href="javascript:void(0)"> All notifications </a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- end notification dropdown -->
            <!-- start message dropdown -->
            <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
              <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                data-close-others="true">
                <i class="fa fa-envelope-o"></i>
                <span class="badge headerBadgeColor2"> 2 </span>
              </a>
              <ul class="dropdown-menu animated slideInDown">
                <li class="external">
                  <h3><span class="bold">Messages</span></h3>
                  <span class="notification-label cyan-bgcolor">New 2</span>
                </li>
                <li>
                  <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                    <li>
                      <a href="#">
                        <span class="photo">
                          <img src="assets/img/user/user2.jpg" class="img-circle" alt="">
                        </span>
                        <span class="subject">
                          <span class="from"> Sarah Smith </span>
                          <span class="time">Just Now </span>
                        </span>
                        <span class="message"> Jatin I found you on LinkedIn... </span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <span class="photo">
                          <img src="assets/img/user/user3.jpg" class="img-circle" alt="">
                        </span>
                        <span class="subject">
                          <span class="from">John Deo </span>
                          <span class="time">16 mins </span>
                        </span>
                        <span class="message">Fwd: Important Notice Regarding Your Domain
                          Name... </span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <span class="photo">
                          <img src="assets/img/user/user1.jpg" class="img-circle" alt="">
                        </span>
                        <span class="subject">
                          <span class="from"> Rajesh </span>
                          <span class="time">2 hrs </span>
                        </span>
                        <span class="message"> pls take a print of attachments. </span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <span class="photo">
                          <img src="assets/img/user/user8.jpg" class="img-circle" alt="">
                        </span>
                        <span class="subject">
                          <span class="from"> Lina Smith </span>
                          <span class="time">40 mins </span>
                        </span>
                        <span class="message"> Apply for Ortho Surgeon </span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <span class="photo">
                          <img src="assets/img/user/user5.jpg" class="img-circle" alt="">
                        </span>
                        <span class="subject">
                          <span class="from"> Jacob Ryan </span>
                          <span class="time">46 mins </span>
                        </span>
                        <span class="message"> Request for leave application. </span>
                      </a>
                    </li>
                  </ul>
                  <div class="dropdown-menu-footer">
                    <a href="#"> All Messages </a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- end message dropdown -->
            <!-- start manage user dropdown -->
            <li class="dropdown dropdown-user">
              <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                data-close-others="true">
                <img alt="" class="img-circle " src="assets/img/dp.jpg" />
                <span class="username username-hide-on-mobile"> John </span>
                <i class="fa fa-angle-down"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-default animated jello">
                <li>
                  <a href="user_profile.html">
                    <i class="icon-user"></i> Profile </a>
                </li>
                <li>
                  <a href="#">
                    <i class="icon-settings"></i> Settings
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="icon-directions"></i> Help
                  </a>
                </li>
                <li class="divider"> </li>
                <li>
                  <a href="lock_screen.html">
                    <i class="icon-lock"></i> Lock
                  </a>
                </li>
                <li>
                  <a href="login.html">
                    <i class="icon-logout"></i> Log Out </a>
                </li>
              </ul>
            </li>
            <!-- end manage user dropdown -->
           <!--  <li class="dropdown dropdown-quick-sidebar-toggler">
              <a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                data-upgraded=",MaterialButton">
                <i class="material-icons">settings</i>
              </a>
            </li> -->
          </ul>
        </div>
      </div>
    </div>
    <!-- end header -->
    <!-- start page container -->
    <div class="page-container">
      <!-- start sidebar menu -->
      <div class="sidebar-container">
        <div class="sidemenu-container navbar-collapse collapse fixed-menu">
          <div id="remove-scroll">
            <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true"
              data-slide-speed="200">
              <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                  <span></span>
                </div>
              </li>
              <li class="sidebar-user-panel">
                <div class="user-panel">
                  <div class="row">
                    <div class="sidebar-userpic">
                      <img src="{{asset('css/assets/img/user2-160x160.jpg')}}" class="img-responsive" alt=""> </div>
                      
                  </div>
                  <div class="profile-usertitle">
                    <div class="sidebar-userpic-name"> Santosh Kumar </div>
                    <div class="profile-usertitle-job"> UI/UX Designer </div>
                  </div>
                  <div class="sidebar-userpic-btn">
                    <a class="tooltips" href="user_profile.html" data-placement="top"
                      data-original-title="Profile">
                      <i class="material-icons">person_outline</i>
                    </a>
                    <a class="tooltips" href="email_inbox.html" data-placement="top"
                      data-original-title="Mail">
                      <i class="material-icons">mail_outline</i>
                    </a>
                    <a class="tooltips" href="chat.html" data-placement="top"
                      data-original-title="Chat">
                      <i class="material-icons">chat</i>
                    </a>
                    <a class="tooltips" href="login.html" data-placement="top"
                      data-original-title="Logout">
                      <i class="material-icons">input</i>
                    </a>
                  </div>
                </div>
              </li>
              <li class="menu-heading">
                <span> Main</span>
              </li>
              <li class="nav-item start active">
                <a href="#" class="nav-link nav-toggle">
                <i class="fa fa-home" aria-hidden="true"></i>
                  <!-- <i class="material-icons">dashboard</i> -->
                  <span class="title">Home</span>
                  <span class="selected"></span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link nav-toggle">
                  <i class="material-icons">email</i>
                  <span class="title">Email</span>
                  <span class="arrow"></span>
                  <span class="label label-rouded label-menu label-danger">new</span>
                </a>
                <ul class="sub-menu">
                  <li class="nav-item">
                    <a href="email_inbox.html" class="nav-link ">
                      <span class="title">Inbox</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="email_view.html" class="nav-link ">
                      <span class="title">View Mail</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="email_compose.html" class="nav-link ">
                      <span class="title">Compose Mail</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- end sidebar menu -->
      <!-- start page content -->
      <div class="page-content-wrapper">
        <div class="page-content">
          <!-- <div class="page-bar">
            <div class="page-title-breadcrumb">
              <div class=" pull-left">
                <div class="page-title">Dashboard</div>
              </div>
              <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                    href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Dashboard</li>
              </ol>
            </div>
          </div> -->
          <!-- start widget -->
          <div class="">
            <div class="row">
              
              <div class="col-xl-3 col-md-3 col-12">
                <div class="card card-box">
                <div class="">
                  <form class="search-form-opened" action="#" method="GET">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search..." name="query">
                      <span class="input-group-btn search-btn">
                        <a href="javascript:;" class="btn submit">
                          <i class="icon-magnifier"></i>
                        </a>
                      </span>
                    </div>
                  </form>
                </div>
                <div class="card-body no-padding height-9">
                  <div class="row text-center">
                    <div class="col-xl-12">
                        <div class="sidebar-userpic img_lk">
                      <img src="{{asset('css/assets/img/user2-160x160.jpg')}}" class="img-responsive" alt=""> 
                      <p class="text-muted m-0"> santosh@vert-age.com</p>
                      <p class="span_l">Sunil Rathore</p>
                      </div>                      
                    </div>
                   <!-- <div class="col-xl-12">
                        <div class="sidebar-userpic img_lk">
                      <img src="{{asset('css/assets/img/user2-160x160.jpg')}}" class="img-responsive" alt=""> 
                      <p class="text-muted"> santosh@vert-age.com</p>
                      </div>                      
                    </div>
                                        <div class="col-xl-12">
                        <div class="sidebar-userpic img_lk">
                      <img src="{{asset('css/assets/img/user2-160x160.jpg')}}" class="img-responsive" alt=""> 
                      <p class="text-muted mt-2"> santosh@vert-age.com</p>
                      </div>                      
                    </div>
                    <div class="col-xl-12">
                        <div class="sidebar-userpic img_lk">
                      <img src="{{asset('css/assets/img/user2-160x160.jpg')}}" class="img-responsive" alt=""> 
                      <p class="text-muted mt-2"> santosh@vert-age.com</p>
                      </div>                      
                    </div>
                                        <div class="col-xl-12">
                        <div class="sidebar-userpic img_lk">
                      <img src="{{asset('css/assets/img/user2-160x160.jpg')}}" class="img-responsive" alt=""> 
                      <p class="text-muted mt-2"> santosh@vert-age.com</p>
                      </div>                      
                    </div>
                                        <div class="col-xl-12">
                        <div class="sidebar-userpic img_lk">
                      <img src="{{asset('css/assets/img/user2-160x160.jpg')}}" class="img-responsive" alt=""> 
                      <p class="text-muted mt-2"> santosh@vert-age.com</p>
                      </div>                      
                    </div>
                    <div class="col-xl-12">
                        <div class="sidebar-userpic img_lk">
                      <img src="{{asset('css/assets/img/user2-160x160.jpg')}}" class="img-responsive" alt=""> 
                      <p class="text-muted mt-2"> santosh@vert-age.com</p>
                      </div>                      
                    </div>
                                        <div class="col-xl-12">
                        <div class="sidebar-userpic img_lk">
                      <img src="{{asset('css/assets/img/user2-160x160.jpg')}}" class="img-responsive" alt=""> 
                      <p class="text-muted mt-2"> santosh@vert-age.com</p>
                      </div>                      
                    </div>
                    
                    <div class="col-xl-12">
                        <div class="sidebar-userpic img_lk">
                      <img src="{{asset('css/assets/img/user2-160x160.jpg')}}" class="img-responsive" alt=""> 
                      <p class="text-muted mt-2"> santosh@vert-age.com</p>
                      </div>                      
                    </div>--> 
                  </div>
                  
                </div>
              </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-xl-9 col-md-9 col-12">
                <div class="card card-box">
                <div class="card-head">
                  <header>Chat</header>
                  <div class="tools">
                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                  </div>
                </div>
                <div class="card-body no-padding height-9">
                  <div class="row ">
                    <div class="col-xl-8">
                     <p align="justify">
                      What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has?
                      </p>
                    </div>
                  
                  </div>
                  
                </div>
              </div>
                <!-- /.info-box -->
              </div>
              
              <!-- /.col -->
            </div>
          </div>
          <!-- end widget -->
          <!-- chart start -->
          
          <div class="row mt-4">
            <div class="col-md-12">
              <div class="card card-box">
                <div class="card-head">
                  <header>Chart Survey</header>
                  <div class="tools">
                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                  </div>
                </div>
                <div class="card-body no-padding height-9">
                  <div class="row text-center">
                    <div class="col-sm-3 col-6">
                      <h4 class="margin-0">$ 209 </h4>
                      <p class="text-muted"> Today Income</p>
                    </div>
                    <div class="col-sm-3 col-6">
                      <h4 class="margin-0">$ 837 </h4>
                      <p class="text-muted">This Week Income</p>
                    </div>
                    <div class="col-sm-3 col-6">
                      <h4 class="margin-0">$ 3410 </h4>
                      <p class="text-muted">This Month Income</p>
                    </div>
                    <div class="col-sm-3 col-6">
                      <h4 class="margin-0">$ 78,000 </h4>
                      <p class="text-muted">This Year Income</p>
                    </div>
                  </div>
                  <div class="row">
                    <div id="area_line_chart" class="width-100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          
        
        </div>
      </div>
      <!-- end page content -->
      <!-- start chat sidebar -->
      <div class="chat-sidebar-container" data-close-on-body-click="false">
        <div class="chat-sidebar">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-toggle="tab">Theme
              </a>
            </li>
            <li class="nav-item">
              <a href="#quick_sidebar_tab_2" class="nav-link tab-icon" data-toggle="tab"> Chat
              </a>
            </li>
            <li class="nav-item">
              <a href="#quick_sidebar_tab_3" class="nav-link tab-icon" data-toggle="tab"> Settings
              </a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane chat-sidebar-settings in show active animated shake" role="tabpanel"
              id="quick_sidebar_tab_1">
              <div class="slimscroll-style">
                <div class="theme-light-dark">
                  <h6>Sidebar Theme</h6>
                  <button type="button" data-theme="white"
                    class="btn lightColor btn-outline btn-circle m-b-10 theme-button">Light
                    Sidebar</button>
                  <button type="button" data-theme="dark"
                    class="btn dark btn-outline btn-circle m-b-10 theme-button">Dark
                    Sidebar</button>
                </div>
                <div class="theme-light-dark">
                  <h6>Sidebar Color</h6>
                  <ul class="list-unstyled">
                    <li class="complete">
                      <div class="theme-color sidebar-theme">
                        <a href="#" data-theme="white"><span class="head"></span><span
                            class="cont"></span></a>
                        <a href="#" data-theme="dark"><span class="head"></span><span
                            class="cont"></span></a>
                        <a href="#" data-theme="blue"><span class="head"></span><span
                            class="cont"></span></a>
                        <a href="#" data-theme="indigo"><span class="head"></span><span
                            class="cont"></span></a>
                        <a href="#" data-theme="cyan"><span class="head"></span><span
                            class="cont"></span></a>
                        <a href="#" data-theme="green"><span class="head"></span><span
                            class="cont"></span></a>
                        <a href="#" data-theme="red"><span class="head"></span><span
                            class="cont"></span></a>
                      </div>
                    </li>
                  </ul>
                  <h6>Header Brand color</h6>
                  <ul class="list-unstyled">
                    <li class="theme-option">
                      <div class="theme-color logo-theme">
                        <a href="#" data-theme="logo-white"><span class="head"></span><span
                            class="cont"></span></a>
                        <a href="#" data-theme="logo-dark"><span class="head"></span><span
                            class="cont"></span></a>
                        <a href="#" data-theme="logo-blue"><span class="head"></span><span
                            class="cont"></span></a>
                        <a href="#" data-theme="logo-indigo"><span class="head"></span><span
                            class="cont"></span></a>
                        <a href="#" data-theme="logo-cyan"><span class="head"></span><span
                            class="cont"></span></a>
                        <a href="#" data-theme="logo-green"><span class="head"></span><span
                            class="cont"></span></a>
                        <a href="#" data-theme="logo-red"><span class="head"></span><span
                            class="cont"></span></a>
                      </div>
                    </li>
                  </ul>
                  <h6>Header color</h6>
                  <ul class="list-unstyled">
                    <li class="theme-option">
                      <div class="theme-color header-theme">
                        <a href="#" data-theme="header-white"><span class="head"></span><span
                            class="cont"></span></a>
                        <a href="#" data-theme="header-dark"><span class="head"></span><span
                            class="cont"></span></a>
                        <a href="#" data-theme="header-blue"><span class="head"></span><span
                            class="cont"></span></a>
                        <a href="#" data-theme="header-indigo"><span class="head"></span><span
                            class="cont"></span></a>
                        <a href="#" data-theme="header-cyan"><span class="head"></span><span
                            class="cont"></span></a>
                        <a href="#" data-theme="header-green"><span class="head"></span><span
                            class="cont"></span></a>
                        <a href="#" data-theme="header-red"><span class="head"></span><span
                            class="cont"></span></a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- Start Doctor Chat -->
            <div class="tab-pane chat-sidebar-chat animated slideInRight" id="quick_sidebar_tab_2">
              <div class="chat-sidebar-list">
                <div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd"
                  data-wrapper-class="chat-sidebar-list">
                  <div class="chat-header">
                    <h5 class="list-heading">Online</h5>
                  </div>
                  <ul class="media-list list-items">
                    <li class="media"><img class="media-object" src="assets/img/user/user3.jpg"
                        width="35" height="35" alt="...">
                      <i class="online dot"></i>
                      <div class="media-body">
                        <h5 class="media-heading">John Deo</h5>
                        <div class="media-heading-sub">Spine Surgeon</div>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-status">
                        <span class="badge badge-success">5</span>
                      </div> <img class="media-object" src="assets/img/user/user1.jpg" width="35"
                        height="35" alt="...">
                      <i class="busy dot"></i>
                      <div class="media-body">
                        <h5 class="media-heading">Rajesh</h5>
                        <div class="media-heading-sub">Director</div>
                      </div>
                    </li>
                    <li class="media"><img class="media-object" src="assets/img/user/user5.jpg"
                        width="35" height="35" alt="...">
                      <i class="away dot"></i>
                      <div class="media-body">
                        <h5 class="media-heading">Jacob Ryan</h5>
                        <div class="media-heading-sub">Ortho Surgeon</div>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-status">
                        <span class="badge badge-danger">8</span>
                      </div> <img class="media-object" src="assets/img/user/user4.jpg" width="35"
                        height="35" alt="...">
                      <i class="online dot"></i>
                      <div class="media-body">
                        <h5 class="media-heading">Kehn Anderson</h5>
                        <div class="media-heading-sub">CEO</div>
                      </div>
                    </li>
                    <li class="media"><img class="media-object" src="assets/img/user/user2.jpg"
                        width="35" height="35" alt="...">
                      <i class="busy dot"></i>
                      <div class="media-body">
                        <h5 class="media-heading">Sarah Smith</h5>
                        <div class="media-heading-sub">Anaesthetics</div>
                      </div>
                    </li>
                    <li class="media"><img class="media-object" src="assets/img/user/user7.jpg"
                        width="35" height="35" alt="...">
                      <i class="online dot"></i>
                      <div class="media-body">
                        <h5 class="media-heading">Vlad Cardella</h5>
                        <div class="media-heading-sub">Cardiologist</div>
                      </div>
                    </li>
                  </ul>
                  <div class="chat-header">
                    <h5 class="list-heading">Offline</h5>
                  </div>
                  <ul class="media-list list-items">
                    <li class="media">
                      <div class="media-status">
                        <span class="badge badge-warning">4</span>
                      </div> <img class="media-object" src="assets/img/user/user6.jpg" width="35"
                        height="35" alt="...">
                      <i class="offline dot"></i>
                      <div class="media-body">
                        <h5 class="media-heading">Jennifer Maklen</h5>
                        <div class="media-heading-sub">Nurse</div>
                        <div class="media-heading-small">Last seen 01:20 AM</div>
                      </div>
                    </li>
                    <li class="media"><img class="media-object" src="assets/img/user/user8.jpg"
                        width="35" height="35" alt="...">
                      <i class="offline dot"></i>
                      <div class="media-body">
                        <h5 class="media-heading">Lina Smith</h5>
                        <div class="media-heading-sub">Ortho Surgeon</div>
                        <div class="media-heading-small">Last seen 11:14 PM</div>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-status">
                        <span class="badge badge-success">9</span>
                      </div> <img class="media-object" src="assets/img/user/user9.jpg" width="35"
                        height="35" alt="...">
                      <i class="offline dot"></i>
                      <div class="media-body">
                        <h5 class="media-heading">Jeff Adam</h5>
                        <div class="media-heading-sub">Compounder</div>
                        <div class="media-heading-small">Last seen 3:31 PM</div>
                      </div>
                    </li>
                    <li class="media"><img class="media-object" src="assets/img/user/user10.jpg"
                        width="35" height="35" alt="...">
                      <i class="offline dot"></i>
                      <div class="media-body">
                        <h5 class="media-heading">Anjelina Cardella</h5>
                        <div class="media-heading-sub">Physiotherapist</div>
                        <div class="media-heading-small">Last seen 7:45 PM</div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- End Doctor Chat -->
            <!-- Start Setting Panel -->
            <div class="tab-pane chat-sidebar-settings animated slideInUp" id="quick_sidebar_tab_3">
              <div class="chat-sidebar-settings-list slimscroll-style">
                <div class="chat-header">
                  <h5 class="list-heading">Layout Settings</h5>
                </div>
                <div class="chatpane inner-content ">
                  <div class="settings-list">
                    <div class="setting-item">
                      <div class="setting-text">Sidebar Position</div>
                      <div class="setting-set">
                        <select
                          class="sidebar-pos-option form-control input-inline input-sm input-small ">
                          <option value="left" selected="selected">Left</option>
                          <option value="right">Right</option>
                        </select>
                      </div>
                    </div>
                    <div class="setting-item">
                      <div class="setting-text">Header</div>
                      <div class="setting-set">
                        <select
                          class="page-header-option form-control input-inline input-sm input-small ">
                          <option value="fixed" selected="selected">Fixed</option>
                          <option value="default">Default</option>
                        </select>
                      </div>
                    </div>
                    <div class="setting-item">
                      <div class="setting-text">Sidebar Menu </div>
                      <div class="setting-set">
                        <select
                          class="sidebar-menu-option form-control input-inline input-sm input-small ">
                          <option value="accordion" selected="selected">Accordion</option>
                          <option value="hover">Hover</option>
                        </select>
                      </div>
                    </div>
                    <div class="setting-item">
                      <div class="setting-text">Footer</div>
                      <div class="setting-set">
                        <select
                          class="page-footer-option form-control input-inline input-sm input-small ">
                          <option value="fixed">Fixed</option>
                          <option value="default" selected="selected">Default</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="chat-header">
                    <h5 class="list-heading">Account Settings</h5>
                  </div>
                  <div class="settings-list">
                    <div class="setting-item">
                      <div class="setting-text">Notifications</div>
                      <div class="setting-set">
                        <div class="switch">
                          <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                            for="switch-1">
                            <input type="checkbox" id="switch-1" class="mdl-switch__input"
                              checked>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="setting-item">
                      <div class="setting-text">Show Online</div>
                      <div class="setting-set">
                        <div class="switch">
                          <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                            for="switch-7">
                            <input type="checkbox" id="switch-7" class="mdl-switch__input"
                              checked>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="setting-item">
                      <div class="setting-text">Status</div>
                      <div class="setting-set">
                        <div class="switch">
                          <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                            for="switch-2">
                            <input type="checkbox" id="switch-2" class="mdl-switch__input"
                              checked>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="setting-item">
                      <div class="setting-text">2 Steps Verification</div>
                      <div class="setting-set">
                        <div class="switch">
                          <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                            for="switch-3">
                            <input type="checkbox" id="switch-3" class="mdl-switch__input"
                              checked>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="chat-header">
                    <h5 class="list-heading">General Settings</h5>
                  </div>
                  <div class="settings-list">
                    <div class="setting-item">
                      <div class="setting-text">Location</div>
                      <div class="setting-set">
                        <div class="switch">
                          <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                            for="switch-4">
                            <input type="checkbox" id="switch-4" class="mdl-switch__input"
                              checked>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="setting-item">
                      <div class="setting-text">Save Histry</div>
                      <div class="setting-set">
                        <div class="switch">
                          <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                            for="switch-5">
                            <input type="checkbox" id="switch-5" class="mdl-switch__input"
                              checked>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="setting-item">
                      <div class="setting-text">Auto Updates</div>
                      <div class="setting-set">
                        <div class="switch">
                          <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                            for="switch-6">
                            <input type="checkbox" id="switch-6" class="mdl-switch__input"
                              checked>
                          </label>
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
      <!-- end chat sidebar -->
    </div>
    <!-- end page container -->

    <!-- start footer -->
    <div class="page-footer">
      <div class="page-footer-inner"> 2020 &copy; Vert-Age By
        <a href="https://www.vert-age.com/" target="_blanck" class="makerCss">Vert-Age</a>
      </div>
      <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
      </div>
    </div>
  <!-- end footer -->
  </div>
  
<script src="{{asset('css/assets/plugins/jquery/jquery.min.js')}}"></script>

  <script src="{{asset('css/assets/plugins/popper/popper.min.js')}}"></script>
  <script src="{{asset('css/assets/plugins/jquery-blockui/jquery.blockui.min.js')}}"></script>
  <script src="{{asset('css/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  <!-- bootstrap -->
  <script src="{{asset('css/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('css/assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
  <script src="{{asset('css/assets/js/pages/sparkline/sparkline-data.js')}}"></script>
  <!-- Common js-->
  <script src="{{asset('css/assets/js/app.js')}}"></script>
  <script src="{{asset('css/assets/js/layout.js')}}"></script>
  <script src="{{asset('css/assets/js/theme-color.js')}}"></script>
  <!-- material -->
  <script src="{{asset('css/assets/plugins/material/material.min.js')}}"></script>
  <!-- animation -->
  <script src="{{asset('css/assets/js/pages/ui/animations.js')}}"></script>
  <!-- morris chart -->
  <script src="{{asset('css/assets/plugins/morris/morris.min.js')}}"></script>
  <script src="{{asset('css/assets/plugins/morris/raphael-min.js')}}"></script>
  <script src="{{asset('css/assets/js/pages/chart/morris/morris_home_data.js')}}"></script> 
 
 
  
 </body>

</html>
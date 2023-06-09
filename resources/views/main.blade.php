<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- all the pages will extend this page | the parent layout | other pages will be called child pages -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CRM | Home</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- v4.0.0 -->
  <link rel="stylesheet" href="{{url('')}}/bootstrap/css/bootstrap.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="{{ url('') }}/plugins/datatables/css/dataTables.bootstrap.min.css">

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="16x16" href="{{url('')}}/img/favicon-16x16.png">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('')}}/css/style.css">
  <link rel="stylesheet" href="{{url('')}}/css/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{url('')}}/css/et-line-font/et-line-font.css">
  <link rel="stylesheet" href="{{url('')}}/css/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="{{url('')}}/css/simple-lineicon/simple-line-icons.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="index.html" class="logo blue-bg">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="{{url('')}}/img/logo-n-blue.png" alt=""></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="{{url('')}}/img/logo-blue.png" alt=""></span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar blue-bg navbar-static-top">
      <!-- Sidebar toggle button-->
      <ul class="nav navbar-nav pull-left">
        <li><a class="sidebar-toggle" data-toggle="push-menu" href="#"></a></li>
      </ul>
      <div class="pull-left search-box">
        <form action="#" method="get" class="search-form">
          <div class="input-group">
            <input name="search" class="form-control" placeholder="" type="text">
            <span class="input-group-btn">
                  <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i> </button>
                </span>
          </div>
        </form>
        <!-- search form -->
      </div>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages -->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <div class="notify"><span class="heartbit"></span> <span class="point"></span></div>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 new messages</li>
              <li>
                <ul class="menu">
                  <li>
                    <a href="#">
                      <div class="pull-left"><img src="{{url('')}}/img/img1.jpg" class="img-circle" alt="User Image">
                        <span class="profile-status online pull-right"></span></div>
                      <h4>Alex C. Patton</h4>
                      <p>I've finished it! See you so...</p>
                      <p><span class="time">9:30 AM</span></p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left"><img src="{{url('')}}/img/img3.jpg" class="img-circle" alt="User Image">
                        <span class="profile-status offline pull-right"></span></div>
                      <h4>Nikolaj S. Henriksen</h4>
                      <p>I've finished it! See you so...</p>
                      <p><span class="time">10:15 AM</span></p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left"><img src="{{url('')}}/img/img2.jpg" class="img-circle" alt="User Image">
                        <span class="profile-status away pull-right"></span></div>
                      <h4>Kasper S. Jessen</h4>
                      <p>I've finished it! See you so...</p>
                      <p><span class="time">8:45 AM</span></p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left"><img src="{{url('')}}/img/img4.jpg" class="img-circle" alt="User Image">
                        <span class="profile-status busy pull-right"></span></div>
                      <h4>Florence S. Kasper</h4>
                      <p>I've finished it! See you so...</p>
                      <p><span class="time">12:15 AM</span></p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications  -->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <div class="notify"><span class="heartbit"></span> <span class="point"></span></div>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Notifications</li>
              <li>
                <ul class="menu">
                  <li>
                    <a href="#">
                      <div class="pull-left icon-circle red"><i class="icon-lightbulb"></i></div>
                      <h4>Alex C. Patton</h4>
                      <p>I've finished it! See you so...</p>
                      <p><span class="time">9:30 AM</span></p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left icon-circle blue"><i class="fa fa-coffee"></i></div>
                      <h4>Nikolaj S. Henriksen</h4>
                      <p>I've finished it! See you so...</p>
                      <p><span class="time">1:30 AM</span></p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left icon-circle green"><i class="fa fa-paperclip"></i></div>
                      <h4>Kasper S. Jessen</h4>
                      <p>I've finished it! See you so...</p>
                      <p><span class="time">9:30 AM</span></p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left icon-circle yellow"><i class="fa  fa-plane"></i></div>
                      <h4>Florence S. Kasper</h4>
                      <p>I've finished it! See you so...</p>
                      <p><span class="time">11:10 AM</span></p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">Check all Notifications</a></li>
            </ul>
          </li>
          <!-- User Account  -->
          <li class="dropdown user user-menu p-ph-res">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{url('')}}/img/img1.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span> </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <div class="pull-left user-img">
                  <img src="{{url('')}}/img/img1.jpg" class="img-responsive img-circle" alt="User"></div>
                <p class="text-left">Florence Douglas <small>florence@gmail.com</small></p>
              </li>
              <li><a href="#"><i class="icon-profile-male"></i> My Profile</a></li>
              <li><a href="#"><i class="icon-wallet"></i> My Balance</a></li>
              <li><a href="#"><i class="icon-envelope"></i> Inbox</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#"><i class="icon-gears"></i> Account Setting</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="{{ url('/logout') }}"><i class="fa fa-power-off"></i> Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="image text-center"><img src="{{url('')}}/img/img1.jpg" class="img-circle" alt="User Image"></div>
        <div class="info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">PERSONAL</li>
        <!-- <i class="fa fa-angle-left pull-right"></i> </span> | remove this i with span from dashboard dropdown | removed class that animates the icon -->
        <li class="active">
          <a href="{{ url('/home') }}"> <i class="icon-home"></i> <span>Dashboard</span>
            <span class="pull-right-container"> </span></a>
          <!-- we dont need collapse in dashboard | will remove it -->
          {{--
          <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-angle-right"></i> Modern</a></li>
            <li><a href="index-crm.html"><i class="fa fa-angle-right"></i> CRM</a></li>
            <li><a href="index-analytics.html"><i class="fa fa-angle-right"></i> Analytics</a></li>
            <li><a href="index-ecommerce.html"><i class="fa fa-angle-right"></i> Ecommerce</a></li>
            <li><a href="index-medical.html"><i class="fa fa-angle-right"></i> Medical</a></li>
          </ul>
          --}}
        </li>
        <li class="treeview">
          <a href="#"> <i class="icon-grid"></i> <span>Leads</span>
            <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/leads/add-lead') }}"><i class="fa fa-angle-right"></i> Add Lead</a></li>
            <li><a href="{{ url('/leads/manage-leads') }}"><i class="fa fa-angle-right"></i> Manage Leads</a></li>
            {{--
            <li><a href="apps-contacts.html"><i class="fa fa-angle-right"></i> Contact / Employee</a></li>
            <li><a href="apps-contact-grid.html"><i class="fa fa-angle-right"></i> Contact  Grid</a></li>
            <li><a href="apps-contact-details.html"><i class="fa fa-angle-right"></i> Contact Detail</a></li>
            --}}
          </ul>
        </li>
        <li class="treeview">
          <a href="#"> <i class="ti-email"></i> <span>Inbox</span>
            <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="apps-mailbox.html"><i class="fa fa-angle-right"></i> Mailbox</a></li>
            <li><a href="apps-mailbox-detail.html"><i class="fa fa-angle-right"></i> Mailbox Detail</a></li>
            <li><a href="apps-compose-mail.html"><i class="fa fa-angle-right"></i> Compose Mail</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"> <i class="icon-frame"></i> <span>UI Elements</span>
            <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="ui-cards.html" class="active"><i class="fa fa-angle-right"></i> Cards</a></li>
            <li><a href="ui-user-card.html"><i class="fa fa-angle-right"></i> User Cards</a></li>
            <li><a href="ui-tab.html"><i class="fa fa-angle-right"></i> Tab</a></li>
            <li><a href="ui-grid.html"><i class="fa fa-angle-right"></i> Grid</a></li>
            <li><a href="ui-buttons.html"><i class="fa fa-angle-right"></i> Buttons</a></li>
            <li><a href="ui-notification.html"><i class="fa fa-angle-right"></i> Notification</a></li>
            <li><a href="ui-progressbar.html"><i class="fa fa-angle-right"></i> Progressbar</a></li>
            <li><a href="ui-range-slider.html"><i class="fa fa-angle-right"></i> Range slider</a></li>
            <li><a href="ui-timeline.html"><i class="fa fa-angle-right"></i> Timeline</a></li>
            <li><a href="ui-horizontal-timeline.html"> <i class="fa fa-angle-right"></i> Horizontal Timeline</a></li>
            <li><a href="ui-breadcrumb.html"><i class="fa fa-angle-right"></i> Breadcrumb</a></li>
            <li><a href="ui-typography.html"><i class="fa fa-angle-right"></i> Typography</a></li>
            <li><a href="ui-bootstrap-switch.html"><i class="fa fa-angle-right"></i> Bootstrap Switch</a></li>
            <li><a href="ui-tooltip-popover.html"><i class="fa fa-angle-right"></i> Tooltip &amp; Popover</a></li>
            <li><a href="ui-list-media.html"><i class="fa fa-angle-right"></i> List Media</a></li>
            <li><a href="ui-carousel.html"><i class="fa fa-angle-right"></i> Carousel</a></li>
          </ul>
        </li>
        <li class="header">FORMS, TABLE & WIDGETS</li>
        <li class="treeview">
          <a href="#"> <i class="icon-note"></i> <span>Forms</span>
            <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="form-elements.html"><i class="fa fa-angle-right"></i> Form Elements</a></li>
            <li><a href="form-validation.html"><i class="fa fa-angle-right"></i> Form Validation</a></li>
            <li><a href="form-wizard.html"><i class="fa fa-angle-right"></i> Form Wizard</a></li>
            <li><a href="form-layouts.html"><i class="fa fa-angle-right"></i> Form Layouts</a></li>
            <li><a href="form-uploads.html"><i class="fa fa-angle-right"></i> Form File Upload</a></li>
            <li><a href="form-summernote.html"><i class="fa fa-angle-right"></i> Summernote</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"> <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="table-basic.html"><i class="fa fa-angle-right"></i> Basic Tables</a></li>
            <li><a href="table-layout.html"><i class="fa fa-angle-right"></i> Table Layouts</a></li>
            <li><a href="table-data-table.html"><i class="fa fa-angle-right"></i> Data Tables</a></li>
            <li><a href="table-jsgrid.html"><i class="fa fa-angle-right"></i> Js Grid Table</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"> <i class="icon-layers"></i> <span>Widgets</span>
            <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="widget-data.html"><i class="fa fa-angle-right"></i> Data Widgets</a></li>
            <li><a href="widget-apps.html"><i class="fa fa-angle-right"></i> Apps Widgets</a></li>
          </ul>
        </li>
        <li class="header">EXTRA COMPONENTS</li>
        <li class="treeview">
          <a href="#"><i class="icon-chart"></i> <span>Charts</span>
            <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="chart-morris.html"><i class="fa fa-angle-right"></i> Morris Chart</a></li>
            <li><a href="chart-chartist.html"><i class="fa fa-angle-right"></i> Chartis Chart</a></li>
            <li><a href="chart-knob.html"><i class="fa fa-angle-right"></i> Knob Chart</a></li>
            <li><a href="chart-chart-js.html"><i class="fa fa-angle-right"></i> Chartjs</a></li>
            <li><a href="chart-peity.html"><i class="fa fa-angle-right"></i> Peity Chart</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"> <i class="icon-docs"></i> <span>Sample Pages</span>
            <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="pages-blank.html"><i class="fa fa-angle-right"></i> Blank page</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-angle-right"></i> Authentication
                <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
              <ul class="treeview-menu">
                <li><a href="pages-login.html"><i class="fa fa-angle-right"></i> Login 1</a></li>
                <li><a href="pages-login-2.html"><i class="fa fa-angle-right"></i> Login 2</a></li>
                <li><a href="pages-register.html"><i class="fa fa-angle-right"></i> Register</a></li>
                <li><a href="pages-register2.html"><i class="fa fa-angle-right"></i> Register 2</a></li>
                <li><a href="pages-lockscreen.html"><i class="fa fa-angle-right"></i> Lockscreen</a></li>
                <li><a href="pages-recover-password.html"><i class="fa fa-angle-right"></i> Recover password</a></li>
              </ul>
            </li>
            <li><a href="pages-profile.html"><i class="fa fa-angle-right"></i> Profile page</a></li>
            <li><a href="pages-invoice.html"><i class="fa fa-angle-right"></i> Invoice</a></li>
            <li><a href="pages-treeview.html"><i class="fa fa-angle-right"></i> Treeview</a></li>
            <li><a href="pages-pricing.html"><i class="fa fa-angle-right"></i> Pricing</a></li>
            <li><a href="pages-gallery.html"><i class="fa fa-angle-right"></i> Gallery</a></li>
            <li><a href="pages-faq.html"><i class="fa fa-angle-right"></i> Faqs</a></li>
            <li><a href="pages-404.html"><i class="fa fa-angle-right"></i> 404 Error Page</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"> <i class="icon-location-pin"></i> <span>Maps</span>
            <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="map-google.html"><i class="fa fa-angle-right"></i> Google Maps</a></li>
            <li><a href="map-vector.html"><i class="fa fa-angle-right"></i> Vector Maps</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"> <i class="icon-energy"></i> <span>Icons</span>
            <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="icon-fontawesome.html"><i class="fa fa-angle-right"></i> Fontawesome Icons</a></li>
            <li><a href="icon-themify.html"><i class="fa fa-angle-right"></i> Themify Icons</a></li>
            <li><a href="icon-linea.html"><i class="fa fa-angle-right"></i> Linea Icons</a></li>
            <li><a href="icon-weather.html"><i class="fa fa-angle-right"></i> Weather Icons</a></li>
            <li><a href="icon-simple-lineicon.html"><i class="fa fa-angle-right"></i> Simple Lineicons</a></li>
            <li><a href="icon-flag.html"><i class="fa fa-angle-right"></i> Flag Icons</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"> <i class="icon-action-redo"></i> <span>Multilevel</span>
            <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-angle-right"></i> Level One</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-angle-right"></i> Level One
                <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-angle-right"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-angle-right"></i> Level Two
                    <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-angle-right"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Level One</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.sidebar -->
  </aside>
  @yield('dynamic_page')
  <footer class="main-footer">
    <div class="pull-right hidden-xs">Version 1.0</div>
    Copyright © {{ date('Y')}} Yourdomian. All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{url('')}}/js/jquery.min.js"></script>

<!-- v4.0.0-alpha.6 -->
<script src="{{url('')}}/bootstrap/js/bootstrap.min.js"></script>

<!-- template -->
<script src="{{url('')}}/js/adminkit.js"></script>

<!-- Morris JavaScript -->
<script src="{{url('')}}/plugins/raphael/raphael-min.js"></script>
<script src="{{url('')}}/plugins/morris/morris.js"></script>
<script src="{{url('')}}/plugins/functions/dashboard1.js"></script>

<!-- Chart Peity JavaScript -->
<script src="{{url('')}}/plugins/peity/jquery.peity.min.js"></script>
<script src="{{url('')}}/plugins/functions/jquery.peity.init.js"></script>


<!-- scripts for plugins like boostrap tables  -->
@stack('custom-scripts')


</body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('assets/images/favicon.png" type="image/x-icon')}}">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png" type="image/x-icon')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Teacher Management</title>
    <!-- Google font-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="../../css2.css?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="../../css2-1.css?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="../../css2-2.css?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/feather-icon.css')}}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('assets/css/color-1.css" media="screen')}}">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="{{asset('assets/images/logo/logo.png')}}" alt=""></a></div>
            <div class="dark-logo-wrapper"><a href="index.html"><img class="img-fluid" src="{{asset('assets/images/logo/dark-logo.png')}}" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
          </div>
          <div class="left-menu-header col">
            <ul>
              <li>
                <form class="form-inline search-form">
                  <div class="search-bg"><i class="fa fa-search"></i>
                    <input class="form-control-plaintext" placeholder="Search here.....">
                  </div>
                </form><span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
              </li>
            </ul>
          </div>
          <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
              <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="onhover-dropdown">
                <div class="bookmark-box"><i data-feather="star"></i></div>
                <div class="bookmark-dropdown onhover-show-div">
                  <div class="form-group mb-0">
                    <div class="input-group">
                      <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div>
                      <input class="form-control" type="text" placeholder="Search for bookmark...">
                    </div>
                  </div>
                  <ul class="m-t-5">
                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="inbox"></i>Email<span class="pull-right"><i data-feather="star"></i></span></li>
                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="message-square"></i>Chat<span class="pull-right"><i data-feather="star"></i></span></li>
                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="command"></i>Feather Icon<span class="pull-right"><i data-feather="star"></i></span></li>
                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="airplay"></i>Widgets<span class="pull-right"><i data-feather="star">   </i></span></li>
                  </ul>
                </div>
              </li>
              <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="bell"></i><span class="dot-animated"></span></div>
                <ul class="notification-dropdown onhover-show-div">
                  <li>
                    <p class="f-w-700 mb-0">You have 3 Notifications<span class="pull-right badge badge-primary badge-pill">4</span></p>
                  </li>
                  <li class="noti-primary">
                    <div class="media"><span class="notification-bg bg-light-primary"><i data-feather="activity"> </i></span>
                      <div class="media-body">
                        <p>Delivery processing </p><span>10 minutes ago</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-secondary">
                    <div class="media"><span class="notification-bg bg-light-secondary"><i data-feather="check-circle"> </i></span>
                      <div class="media-body">
                        <p>Order Complete</p><span>1 hour ago</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-success">
                    <div class="media"><span class="notification-bg bg-light-success"><i data-feather="file-text"> </i></span>
                      <div class="media-body">
                        <p>Tickets Generated</p><span>3 hour ago</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-danger">
                    <div class="media"><span class="notification-bg bg-light-danger"><i data-feather="user-check"> </i></span>
                      <div class="media-body">
                        <p>Delivery Complete</p><span>6 hour ago</span>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li>
                <div class="mode"><i class="fa fa-moon-o"></i></div>
              </li>
              <li class="onhover-dropdown"><i data-feather="message-square"></i>
                <ul class="chat-dropdown onhover-show-div">
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="{{asset('assets/images/user/4.jpg')}}" alt="">
                      <div class="media-body"><span>Ain Chavez</span>
                        <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12">32 mins ago</p>
                    </div>
                  </li>
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="{{asset('assets/images/user/1.jpg')}}" alt="">
                      <div class="media-body"><span>Erica Hughes</span>
                        <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12">58 mins ago</p>
                    </div>
                  </li>
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="{{asset('assets/images/user/2.jpg')}}" alt="">
                      <div class="media-body"><span>Kori Thomas</span>
                        <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12">1 hr ago</p>
                    </div>
                  </li>
                  <li class="text-center"> <a class="f-w-700" href="javascript:void(0)">See All     </a></li>
                </ul>
              </li>
              <li class="onhover-dropdown p-0">
                <button class="btn btn-primary-light" type="button"><a href="login_two.html"><i data-feather="log-out"></i>Log out</a></button>
              </li>
            </ul>
          </div>
          <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
          <div class="sidebar-user text-center">
              <a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="{{asset('assets/images/dashboard/1.png')}}" alt="" />
              <div class="badge-bottom"><span class="badge badge-primary">New</span></div>
              <a href="user-profile">
                  <h6 class="mt-3 f-14 f-w-600">{{auth()->user()->Ten}}</h6>
              </a>
              <p class="mb-0 font-roboto">{{auth()->user()->Email}}</p>
              <ul>
                  <li>
                      <span><span class="">{{$countAdmin}}</span></span>
                      <p>Admin</p>
                  </li>
                  <li>
                      <span><span class="">{{$countTeacher}}</span></span>
                      <p>Teacher</p>
                  </li>
                  <li>
                      <span><span class="">{{$countStudent}}</span></span>
                      <p>Student</p>
                  </li>
              </ul>
          </div>
          <nav>
              <div class="main-navbar">
                  <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                  <div id="mainnav">
                      <ul class="nav-menu custom-scrollbar">
                          <li class="back-btn">
                              <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                          </li>
                          <li class="sidebar-main-title">
                              <div>
                                  <h6>General</h6>
                              </div>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title active" href="javascript:void(0)"><i data-feather="home"></i><span>Dashboard</span></a>
                              <ul class="nav-submenu menu-content" style="display: block;">
                                  <li><a href="https://laravel.pixelstrap.com/viho/dashboard" class="active">Default</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/dashboard/dashboard-02" class="">Ecommerce</a></li>
                              </ul>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="airplay"></i><span>User Management</span></a>
                              <ul class="nav-submenu menu-content" style="display: none;">
                                  <li><a href="{{route('TeacherManagement')}}" class="">Teacher Management</a></li>
                                  <li><a href="#" class="">Student Management</a></li>
                              </ul>
                          </li>

                          <li class="sidebar-main-title">
                              <div>
                                  <h6>Components</h6>
                              </div>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="box"></i><span>Ui Kits</span></a>
                              <ul class="nav-submenu menu-content" style="display: none;">
                                  <li><a href="https://laravel.pixelstrap.com/viho/ui-kits/state-color" class="">State color</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/ui-kits/typography" class="">Typography</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/ui-kits/avatars" class="">Avatars</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/ui-kits/helper-classes" class="">helper classes</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/ui-kits/grid" class="">Grid</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/ui-kits/tag-pills" class="">Tag & pills</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/ui-kits/progress-bar" class="">Progress</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/ui-kits/modal" class="">Modal</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/ui-kits/alert" class="">Alert</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/ui-kits/popover" class="">Popover</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/ui-kits/tooltip" class="">Tooltip</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/ui-kits/loader" class="">Spinners</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/ui-kits/dropdown" class="">Dropdown</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/ui-kits/according" class="">Accordion</a></li>
                                  <li>
                                      <a class="submenu-title  " href="javascript:void(0)">
                                          Tabs<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span>
                                      </a>
                                      <ul class="nav-sub-childmenu submenu-content" style="display: none;">
                                          <li><a href="https://laravel.pixelstrap.com/viho/ui-kits/tab-bootstrap" class="">Bootstrap Tabs</a></li>
                                          <li><a href="https://laravel.pixelstrap.com/viho/ui-kits/tab-material" class="">Line Tabs</a></li>
                                      </ul>
                                  </li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/ui-kits/navs" class="">Navs</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/ui-kits/box-shadow" class="">Shadow</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/ui-kits/list" class="">Lists</a></li>
                              </ul>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="folder-plus"></i><span>Bonus Ui</span></a>
                              <ul class="nav-submenu menu-content" style="display: none;">
                                  <li><a href="https://laravel.pixelstrap.com/viho/bonus-ui/scrollable" class="">Scrollable</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/bonus-ui/tree" class="">Tree view</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/bonus-ui/bootstrap-notify" class="">Bootstrap Notify</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/bonus-ui/rating" class="">Rating</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/bonus-ui/dropzone" class="">dropzone</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/bonus-ui/tour" class="">Tour</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/bonus-ui/sweet-alert2" class="">SweetAlert2</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/bonus-ui/modal-animated" class="">Animated Modal</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/bonus-ui/owl-carousel" class="">Owl Carousel</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/bonus-ui/ribbons" class="">Ribbons</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/bonus-ui/pagination" class="">Pagination</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/bonus-ui/steps" class="">Steps</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/bonus-ui/breadcrumb" class="">Breadcrumb</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/bonus-ui/range-slider" class="">Range Slider</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/bonus-ui/image-cropper" class="">Image cropper</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/bonus-ui/sticky" class="">Sticky </a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/bonus-ui/basic-card" class="">Basic Card</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/bonus-ui/creative-card" class="">Creative Card</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/bonus-ui/tabbed-card" class="">Tabbed Card</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/bonus-ui/dragable-card" class="">Draggable Card</a></li>
                                  <li>
                                      <a class="submenu-title " href="javascript:void(0)">
                                          Timeline<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span>
                                      </a>
                                      <ul class="nav-sub-childmenu submenu-content" style="display: none;">
                                          <li><a href="https://laravel.pixelstrap.com/viho/bonus-ui/timeline-v-1" class="">Timeline 1</a></li>
                                          <li><a href="https://laravel.pixelstrap.com/viho/bonus-ui/timeline-v-2" class="">Timeline 2</a></li>
                                      </ul>
                                  </li>
                              </ul>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="edit-3"></i><span>Builders</span></a>
                              <ul class="nav-submenu menu-content" style="display: none;">
                                  <li><a href="https://laravel.pixelstrap.com/viho/builders/form-builder-1" class="">Form Builder 1</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/builders/form-builder-2" class="">Form Builder 2</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/builders/pagebuild" class="">Page Builder</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/builders/button-builder" class="">Button Builder</a></li>
                              </ul>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="cloud-drizzle"></i><span>Animation</span></a>
                              <ul class="nav-submenu menu-content" style="display: none;">
                                  <li><a href="https://laravel.pixelstrap.com/viho/animation/animate" class="">Animate</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/animation/scroll-reval" class="">Scroll Reveal</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/animation/aos" class="">AOS animation</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/animation/tilt" class="">Tilt Animation</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/animation/wow" class="">Wow Animation</a></li>
                              </ul>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="command"></i><span>Icons</span></a>
                              <ul class="nav-submenu menu-content" style="display: none;">
                                  <li><a href="https://laravel.pixelstrap.com/viho/icons/flag-icon" class="">Flag icon</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/icons/font-awesome" class="">Fontawesome Icon</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/icons/ico-icon" class="">Ico Icon</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/icons/themify-icon" class="">Thimify Icon</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/icons/feather-icon" class="">Feather icon</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/icons/whether-icon" class="">Whether Icon </a></li>
                              </ul>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="cloud"></i><span>Buttons</span></a>
                              <ul class="nav-submenu menu-content" style="display: none;">
                                  <li><a href="https://laravel.pixelstrap.com/viho/buttons/buttons" class="">Default Style</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/buttons/buttons-flat" class="">Flat Style</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/buttons/buttons-edge" class="">Edge Style</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/buttons/raised-button" class="">Raised Style</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/buttons/button-group" class="">Button Group</a></li>
                              </ul>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="bar-chart"></i><span>Charts</span></a>
                              <ul class="nav-submenu menu-content" style="display: none;">
                                  <li><a href="https://laravel.pixelstrap.com/viho/charts/chart-apex" class="">Apex Chart</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/charts/chart-google" class="">Google Chart</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/charts/chart-sparkline" class="">Sparkline chart</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/charts/chart-flot" class="">Flot Chart</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/charts/chart-knob" class="">Knob Chart</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/charts/chart-morris" class="">Morris Chart</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/charts/chartjs" class="">Chatjs Chart</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/charts/chartist" class="">Chartist Chart</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/charts/chart-peity" class="">Peity Chart</a></li>
                              </ul>
                          </li>
                          <li class="sidebar-main-title">
                              <div>
                                  <h6>Forms</h6>
                              </div>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="sliders"></i><span>Form Controls </span></a>
                              <ul class="nav-submenu menu-content" style="display: none;">
                                  <li><a href="https://laravel.pixelstrap.com/viho/form-controls/form-validation" class="">Form Validation</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/form-controls/base-input" class="">Base Inputs</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/form-controls/radio-checkbox-control" class="">Checkbox & Radio</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/form-controls/input-group" class="">Input Groups</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/form-controls/megaoptions" class="">Mega Options </a></li>
                              </ul>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="package"></i><span>Form Widgets</span></a>
                              <ul class="nav-submenu menu-content" style="display: none;">
                                  <li><a href="https://laravel.pixelstrap.com/viho/form-widgets/datepicker" class="">Datepicker</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/form-widgets/time-picker" class="">Timepicker</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/form-widgets/datetimepicker" class="">Datetimepicker</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/form-widgets/daterangepicker" class="">Daterangepicker</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/form-widgets/touchspin" class="">Touchspin</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/form-widgets/select2" class="">Select2</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/form-widgets/switch" class="">Switch</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/form-widgets/typeahead" class="">Typeahead</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/form-widgets/clipboard" class="">Clipboard </a></li>
                              </ul>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="layout"></i><span>Form layout</span></a>
                              <ul class="nav-submenu menu-content" style="display: none;">
                                  <li><a href="https://laravel.pixelstrap.com/viho/form-layout/default-form" class="">Default Forms</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/form-layout/form-wizard" class="">Form Wizard 1</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/form-layout/form-wizard-two" class="">Form Wizard 2</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/form-layout/form-wizard-three" class="">Form Wizard 3</a></li>
                              </ul>
                          </li>
                          <li class="sidebar-main-title">
                              <div>
                                  <h6>Table</h6>
                              </div>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="server"></i><span>Bootstrap Tables </span></a>
                              <ul class="nav-submenu menu-content" style="display: none;">
                                  <li><a href="https://laravel.pixelstrap.com/viho/bootstrap-tables/bootstrap-basic-table" class="">Basic Tables</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/bootstrap-tables/bootstrap-sizing-table" class="">Sizing Tables</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/bootstrap-tables/bootstrap-border-table" class="">Border Tables</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/bootstrap-tables/bootstrap-styling-table" class="">Styling Tables</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/bootstrap-tables/table-components" class="">Table components</a></li>
                              </ul>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="database"></i><span>Data Tables </span></a>
                              <ul class="nav-submenu menu-content" style="display: none;">
                                  <li><a href="https://laravel.pixelstrap.com/viho/data-tables/datatable-basic-init" class="">Basic Init</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/data-tables/datatable-advance" class="">Advance Init</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/data-tables/datatable-styling" class="">Styling</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/data-tables/datatable-AJAX" class="">AJAX</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/data-tables/datatable-server-side" class="">Server Side</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/data-tables/datatable-plugin" class="">Plug-in</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/data-tables/datatable-API" class="">API</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/data-tables/datatable-data-source" class="">Data Sources</a></li>
                              </ul>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="hard-drive"></i><span>Ex. Data Tables </span></a>
                              <ul class="nav-submenu menu-content" style="display: none;">
                                  <li><a href="https://laravel.pixelstrap.com/viho/ex-data-tables/datatable-ext-autofill" class="">Auto Fill</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/ex-data-tables/datatable-ext-basic-button" class="">Basic Button</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/ex-data-tables/datatable-ext-col-reorder" class="">Column Reorder</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/ex-data-tables/datatable-ext-fixed-header" class="">Fixed Header</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/ex-data-tables/datatable-ext-key-table" class="">Key Table</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/ex-data-tables/datatable-ext-responsive" class="">Responsive</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/ex-data-tables/datatable-ext-row-reorder" class="">Row Reorder</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/ex-data-tables/datatable-ext-scroller" class="">Scroller </a></li>
                              </ul>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title link-nav " href="https://laravel.pixelstrap.com/viho/jsgrid-table"><i data-feather="file-text"></i><span>Js Grid Table</span></a>
                          </li>
                          <li class="sidebar-main-title">
                              <div>
                                  <h6>Applications</h6>
                              </div>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="box"></i><span>Project </span></a>
                              <ul class="nav-submenu menu-content" style="display: none;">
                                  <li><a href="https://laravel.pixelstrap.com/viho/project/projects" class="">Project List</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/project/projectcreate" class="">Create new </a></li>
                              </ul>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title link-nav " href="https://laravel.pixelstrap.com/viho/file-manager"><i data-feather="git-pull-request"></i><span>File manager</span></a>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title link-nav " href="https://laravel.pixelstrap.com/viho/kanban"><i data-feather="monitor"></i><span>Kanban Board</span></a>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="shopping-bag"></i><span>Ecommerce</span></a>
                              <ul class="nav-submenu menu-content" style="display: none;">
                                  <li><a href="https://laravel.pixelstrap.com/viho/ecommerce/product" class="">Product</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/ecommerce/product-page" class="">Product page</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/ecommerce/list-products" class="">Product list</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/ecommerce/payment-details" class="">Payment Details</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/ecommerce/order-history" class="">Order History</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/ecommerce/invoice-template" class="">Invoice</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/ecommerce/cart" class="">Cart</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/ecommerce/list-wish" class="">Wishlist</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/ecommerce/checkout" class="">Checkout</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/ecommerce/pricing" class="">Pricing</a></li>
                              </ul>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="mail"></i><span>Email</span></a>
                              <ul class="nav-submenu menu-content" style="display: none;">
                                  <li><a href="https://laravel.pixelstrap.com/viho/email/email_inbox" class="">Mail Inbox</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/email/email_read" class="">Read mail</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/email/email_compose" class="">Compose</a></li>
                              </ul>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="message-circle"></i><span>Chat</span></a>
                              <ul class="nav-submenu menu-content" style="display: none;">
                                  <li><a href="https://laravel.pixelstrap.com/viho/chat/chat" class="">Chat App</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/chat/chat-video" class="">Video chat</a></li>
                              </ul>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="users"></i><span>Users</span></a>
                              <ul class="nav-submenu menu-content" style="display: none;">
                                  <li><a href="https://laravel.pixelstrap.com/viho/users/user-profile" class="">Users Profile</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/users/edit-profile" class="">Users Edit</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/users/user-cards" class="">Users Cards</a></li>
                              </ul>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title link-nav " href="https://laravel.pixelstrap.com/viho/bookmark"><i data-feather="heart"></i><span>Bookmarks</span></a>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title link-nav " href="https://laravel.pixelstrap.com/viho/contacts"><i data-feather="list"></i><span>Contacts</span></a>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title link-nav " href="https://laravel.pixelstrap.com/viho/task"><i data-feather="check-square"></i><span>Tasks</span></a>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title link-nav " href="https://laravel.pixelstrap.com/viho/calendar-basic"><i data-feather="calendar"></i><span>Calender </span></a>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title link-nav " href="https://laravel.pixelstrap.com/viho/social-app"><i data-feather="zap"></i><span>Social App</span></a>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title link-nav " href="https://laravel.pixelstrap.com/viho/to-do"><i data-feather="clock"></i><span>To-Do</span></a>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title link-nav " href="https://laravel.pixelstrap.com/viho/search"><i data-feather="search"></i><span>Search Result</span></a>
                          </li>
                          <li class="sidebar-main-title">
                              <div>
                                  <h6>Pages</h6>
                              </div>
                          </li>
                          <li>

                          </li>
                          <li>
                              <a class="nav-link menu-title link-nav " href="https://laravel.pixelstrap.com/viho/sample-page"><i data-feather="file"></i><span>Sample page</span></a>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title link-nav " href="https://laravel.pixelstrap.com/viho/internationalization"><i data-feather="aperture"></i><span>Internationalization</span></a>
                          </li>
                          <li class="mega-menu">
                              <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="layers"></i><span>Others</span></a>
                              <div class="mega-menu-container menu-content" style="display: none;">
                                  <div class="container">
                                      <div class="row">
                                          <div class="col mega-box">
                                              <div class="link-section">
                                                  <div class="submenu-title">
                                                      <h5>Error Page</h5>
                                                  </div>
                                                  <div class="submenu-content opensubmegamenu">
                                                      <ul>
                                                          <li><a href="https://laravel.pixelstrap.com/viho/error-page1" class="" target="_blank">Error page 1</a></li>
                                                          <li><a href="https://laravel.pixelstrap.com/viho/error-page2" class="" target="_blank">Error page 2</a></li>
                                                          <li><a href="https://laravel.pixelstrap.com/viho/error-page3" class="" target="_blank">Error page 3</a></li>
                                                          <li><a href="https://laravel.pixelstrap.com/viho/error-page4" class="" target="_blank">Error page 4 </a></li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col mega-box">
                                              <div class="link-section">
                                                  <div class="submenu-title">
                                                      <h5>Authentication</h5>
                                                  </div>
                                                  <div class="submenu-content opensubmegamenu">
                                                      <ul>
                                                          <li><a href="https://laravel.pixelstrap.com/viho/login" class="" target="_blank">Login Simple</a></li>
                                                          <li><a href="https://laravel.pixelstrap.com/viho/login_one" class="" target="_blank">Login with bg image</a></li>
                                                          <li><a href="https://laravel.pixelstrap.com/viho/login_two" class="" target="_blank">Login with image two </a></li>
                                                          <li><a href="https://laravel.pixelstrap.com/viho/login-bs-validation" class="" target="_blank">Login With validation</a></li>
                                                          <li><a href="https://laravel.pixelstrap.com/viho/login-bs-tt-validation" class="" target="_blank">Login with tooltip</a></li>
                                                          <li><a href="https://laravel.pixelstrap.com/viho/login-sa-validation" class="" target="_blank">Login with sweetalert</a></li>
                                                          <li><a href="https://laravel.pixelstrap.com/viho/sign-up" class="" target="_blank">Register Simple</a></li>
                                                          <li><a href="https://laravel.pixelstrap.com/viho/sign-up-one" class="" target="_blank">Register with Bg Image </a></li>
                                                          <li><a href="https://laravel.pixelstrap.com/viho/sign-up-two" class="" target="_blank">Register with Bg video </a></li>
                                                          <li><a href="https://laravel.pixelstrap.com/viho/unlock" class="">Unlock User</a></li>
                                                          <li><a href="https://laravel.pixelstrap.com/viho/forget-password" class="">Forget Password</a></li>
                                                          <li><a href="https://laravel.pixelstrap.com/viho/creat-password" class="">Creat Password</a></li>
                                                          <li><a href="https://laravel.pixelstrap.com/viho/maintenance" class="">Maintenance</a></li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col mega-box">
                                              <div class="link-section">
                                                  <div class="submenu-title">
                                                      <h5>Coming Soon</h5>
                                                  </div>
                                                  <div class="submenu-content opensubmegamenu">
                                                      <ul>
                                                          <li><a href="https://laravel.pixelstrap.com/viho/comingsoon" class="">Coming Simple</a></li>
                                                          <li><a href="https://laravel.pixelstrap.com/viho/comingsoon-bg-video" class="">Coming with Bg video</a></li>
                                                          <li><a href="https://laravel.pixelstrap.com/viho/comingsoon-bg-img" class="">Coming with Bg Image</a></li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col mega-box">
                                              <div class="link-section">
                                                  <div class="submenu-title">
                                                      <h5>Email templates</h5>
                                                  </div>
                                                  <div class="submenu-content opensubmegamenu">
                                                      <ul>
                                                          <li><a href="https://laravel.pixelstrap.com/viho/basic-template" class="">Basic Email</a></li>
                                                          <li><a href="https://laravel.pixelstrap.com/viho/email-header" class="">Basic With Header</a></li>
                                                          <li><a href="https://laravel.pixelstrap.com/viho/template-email" class="">Ecomerce Template</a></li>
                                                          <li><a href="https://laravel.pixelstrap.com/viho/template-email-2" class="">Email Template 2</a></li>
                                                          <li><a href="https://laravel.pixelstrap.com/viho/ecommerce-templates" class="">Ecommerce Email</a></li>
                                                          <li><a href="https://laravel.pixelstrap.com/viho/email-order-success" class="">Order Success </a></li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li class="sidebar-main-title">
                              <div>
                                  <h6>Miscellaneous</h6>
                              </div>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="image"></i><span>Gallery</span></a>
                              <ul class="nav-submenu menu-content" style="display: none;">
                                  <li><a href="https://laravel.pixelstrap.com/viho/gallery" class="">Gallery Grid</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/gallery/gallery-with-description" class="">Gallery Grid Desc</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/gallery/gallery-masonry" class="">Masonry Gallery</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/gallery/masonry-gallery-with-disc" class="">Masonry with Desc</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/gallery/gallery-hover" class="">Hover Effects</a></li>
                              </ul>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="edit"></i><span>Blog</span></a>
                              <ul class="nav-submenu menu-content" style="display: none;">
                                  <li><a href="https://laravel.pixelstrap.com/viho/blog" class="">Blog Details</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/blog/blog-single" class="">Blog Single</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/blog/add-post" class="">Add Post</a></li>
                              </ul>
                          </li>
                          <li>
                              <a class="nav-link menu-title link-nav " href="https://laravel.pixelstrap.com/viho/faq"><i data-feather="help-circle"></i><span>FAQ</span></a>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="user-check"></i><span>Job Search</span></a>
                              <ul class="nav-submenu menu-content" style="display: none;">
                                  <li><a href="https://laravel.pixelstrap.com/viho/job-search/job-cards-view" class="">Cards view</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/job-search/job-list-view" class="">List View</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/job-search/job-details" class="">Job Details</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/job-search/job-apply" class="">Apply</a></li>
                              </ul>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="layers"></i><span>Learning</span></a>
                              <ul class="nav-submenu menu-content" style="display: none;">
                                  <li><a href="https://laravel.pixelstrap.com/viho/learning/learning-list-view" class="">Learning List</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/learning/learning-detailed" class="">Detailed Course</a></li>
                              </ul>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="map"></i><span>Maps</span></a>
                              <ul class="nav-submenu menu-content" style="display: none;">
                                  <li><a href="https://laravel.pixelstrap.com/viho/maps/map-js" class="">Maps JS</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/maps/vector-map" class="">Vector Maps</a></li>
                              </ul>
                          </li>
                          <li class="dropdown">
                              <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="git-pull-request"></i><span>Editors</span></a>
                              <ul class="nav-submenu menu-content" style="display: none;">
                                  <li><a href="https://laravel.pixelstrap.com/viho/editors/summernote" class="">Summer Note</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/editors/ckeditor" class="">CK editor</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/editors/simple-MDE" class="">MDE editor</a></li>
                                  <li><a href="https://laravel.pixelstrap.com/viho/editors/ace-code-editor" class="">ACE code editor</a></li>
                              </ul>
                          </li>
                          <li>
                              <a class="nav-link menu-title link-nav " href="https://laravel.pixelstrap.com/viho/knowledgebase"><i data-feather="database"></i><span>Knowledgebase</span></a>
                          </li>
                      </ul>
                  </div>
                  <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
              </div>
          </nav>
      </header>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Update Account: {{$account->Ten}}</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route("admin_index")}}">Home</a></li>
                    <li class="breadcrumb-item">CreateAccount</li>
                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                    <ul>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                      <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                        <form class="form-inline search-form">
                          <div class="form-group form-control-search">
                            <input type="text" placeholder="Search..">
                          </div>
                        </form>
                      </li>
                    </ul>
                  </div>
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <!-- Base styles-->
              <div class="col-sm-12">
                <form class="form-horizontal" action="{{route('updateAccount', ['id'=> $account->id])}}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-sm-10">Họ tên</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="classname" placeholder="Nhập họ tên"
                                name="fullname" value="{{ $account->Ten }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-10">Ảnh đại diện</label>
                        <div class="col-sm-10">
                            <input class="input-file" id="my-file" type="file" name="avt">
                            <label tabindex="0" for="my-file" class="input-file-trigger"></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-10">Số điện thoại</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="classname" placeholder="Nhập số điện thoại"
                                name="phone" value="{{ $account->Phone }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-10">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="classname"
                                placeholder="Nhập email" name="email" value="{{ $account->Email }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-10">Mật khẩu</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="classname"
                                placeholder="Nhập mật khẩu" name="password" value="{{ $account->password }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-10">Địa chỉ</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="classname"
                                placeholder="Nhập địa chỉ" name="address" value="{{ $account->DiaChi }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-10">Ngày sinh</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="classname"
                                placeholder="Nhập ngày sinh" name="birthday" value="{{ $account->NgaySinh }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-10">Trạng thái</label>
                        <div class="col-sm-10">
                            <select name='typeAccount'>
                                <option value="1">Hoạt động</option>
                                <option value="2">Khóa</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-10">Loại tài khoản</label>
                        <div class="col-sm-10">
                            <select name='typeAccount' >
                                <option value="none" selected disabled hidden>Chọn loại tài khoản</option>
                                <option value="2">Học viên</option>
                                <option value="3">Giáo Viên</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                            <button type="submit" id="submit" class="btn btn-default">Save</button>
                        </div>
                    </div>
                </form>
              </div>
              <!-- Base styles Ends-->
            
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2021-22 © viho All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-secondary"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
    <!-- feather icon js-->
    <script src="{{asset('assets/js/icons/feather-icon/feather.min.js')}}"></script>
    <script src="{{asset('assets/js/icons/feather-icon/feather-icon.js')}}"></script>
    <!-- Sidebar jquery-->
    <script src="{{asset('assets/js/sidebar-menu.js')}}"></script>
    <script src="{{asset('assets/js/config.js')}}"></script>
    <!-- Bootstrap js-->
    <script src="{{asset('assets/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- Plugins JS start-->
    <script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="{{asset('assets/js/theme-customizer/customizer.js')}}"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>
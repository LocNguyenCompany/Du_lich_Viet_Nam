<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities. laravel/framework: ^8.40">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    

    @yield('link')

</head>

<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader"></div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-sidebar" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-main-header">
            <div class="main-header-right row m-0">
                <div class="main-header-left">
                    <div class="logo-wrapper"><a href="https://laravel.pixelstrap.com/viho/dashboard"><img class="img-fluid" src="{{asset('assets/images/logo/logo.png')}}" alt=""></a></div>
                    <div class="dark-logo-wrapper"><a href="https://laravel.pixelstrap.com/viho/dashboard"><img class="img-fluid" src="{{asset('assets/images/logo/dark-logo.png')}}" alt=""></a></div>
                    <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"> </i></div>
                </div>
                <div class="left-menu-header col">
                    <ul>
                        <li>
                            <form class="form-inline search-form">
                                <div class="search-bg"><i class="fa fa-search"></i>
                                    <input class="form-control-plaintext" placeholder="Search here.....">
                                </div>
                            </form>
                            <span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
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
                                <ul>
                                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="inbox"></i>Email<span class="pull-right"><i data-feather="star"></i></span></li>
                                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="message-square"></i>Chat<span class="pull-right"><i data-feather="star"></i></span></li>
                                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="command"></i>Feather Icon<span class="pull-right"><i data-feather="star"></i></span></li>
                                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="airplay"></i>Widgets<span class="pull-right"><i data-feather="star"> </i></span></li>
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
                                    <div class="media">
                                        <span class="notification-bg bg-light-primary"><i data-feather="activity"> </i></span>
                                        <div class="media-body">
                                            <p>Delivery processing </p>
                                            <span>10 minutes ago</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="noti-secondary">
                                    <div class="media">
                                        <span class="notification-bg bg-light-secondary"><i data-feather="check-circle"> </i></span>
                                        <div class="media-body">
                                            <p>Order Complete</p>
                                            <span>1 hour ago</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="noti-success">
                                    <div class="media">
                                        <span class="notification-bg bg-light-success"><i data-feather="file-text"> </i></span>
                                        <div class="media-body">
                                            <p>Tickets Generated</p>
                                            <span>3 hour ago</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="noti-danger">
                                    <div class="media">
                                        <span class="notification-bg bg-light-danger"><i data-feather="user-check"> </i></span>
                                        <div class="media-body">
                                            <p>Delivery Complete</p>
                                            <span>6 hour ago</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="mode"><i class="fa fa-moon-o"></i></div>
                        </li>
                        <li class="onhover-dropdown">
                            <i data-feather="message-square"></i>
                            <ul class="chat-dropdown onhover-show-div">
                                <li>
                                    <div class="media">
                                        <img class="img-fluid rounded-circle me-3" src="{{asset('assets/images/user/4.jpg')}}" alt="">
                                        <div class="media-body">
                                            <span>Ain Chavez</span>
                                            <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                                        </div>
                                        <p class="f-12">32 mins ago</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <img class="img-fluid rounded-circle me-3" src="{{asset('assets/images/user/1.jpg')}}" alt="">
                                        <div class="media-body">
                                            <span>Erica Hughes</span>
                                            <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                                        </div>
                                        <p class="f-12">58 mins ago</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <img class="img-fluid rounded-circle me-3" src="{{asset('assets/images/user/2.jpg')}}" alt="">
                                        <div class="media-body">
                                            <span>Kori Thomas</span>
                                            <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                                        </div>
                                        <p class="f-12">1 hr ago</p>
                                    </div>
                                </li>
                                <li class="text-center"> <a class="f-w-700" href="javascript:void(0)">See All </a></li>
                            </ul>
                        </li>
                        <li class="onhover-dropdown p-0">
                            <button class="btn btn-primary-light" type="button"><i data-feather="log-out"></i>Log out</button>
                        </li>
                    </ul>
                </div>
                <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>
        <!-- Page Header Ends -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper sidebar-icon">
            <!-- Page Sidebar Start-->
            <header class="main-nav">
                <div class="sidebar-user text-center">
                    <a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="{{asset('assets/images/dashboard/1.png')}}" alt="" />
                    <div class="badge-bottom"><span class="badge badge-primary">New</span></div>
                    <a href="user-profile">
                        <h6 class="mt-3 f-14 f-w-600"></h6>
                    </a>
                    <p class="mb-0 font-roboto"></p>
                    <ul>
                        <li>
                            <span><span class=""></span></span>
                            <p>Admin</p>
                        </li>
                        <li>
                            <span><span class=""></span></span>
                            <p>Teacher</p>
                        </li>
                        <li>
                            <span><span class=""></span></span>
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
                                    <a class="nav-link menu-title active"  href="/admin"><i data-feather="home"></i><span>Dashboard</span></a>
                                    
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title " href="javascript:void(0)"><i data-feather="airplay"></i><span>User Management</span></a>
                                    <ul class="nav-submenu menu-content" style="display: none;">
                                        <li><a href="{{route('AccountManagement')}}" class="">Account Management</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title link-nav " href="{{route('Postmanagement')}}"><i data-feather="git-pull-request"></i><span>Post Management</span></a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </div>
                </nav>
            </header>


            @yield('content')
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

    @yield('script')

    
    <!-- Plugin used-->

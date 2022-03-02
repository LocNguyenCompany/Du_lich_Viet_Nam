@extends('layouts.masteradmin')
 @section('title', 'Admin')
  @section('link')
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
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/dropzone.css')}}">
<!-- Plugins css Ends-->
<!-- Bootstrap css-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
<!-- App css-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
<link id="color" rel="stylesheet" href="{{asset('assets/css/color-1.css')}}" media="screen">
<!-- Responsive css-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
@endsection
  @section('content')
<!-- Page Sidebar Ends-->
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>File Manager</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Apps </li>
                        <li class="breadcrumb-item active">File Manager</li>
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
            <div class="col-xl-3 box-col-6 pe-0">
                <div class="job-sidebar"><a class="btn btn-primary job-toggle" href="javascript:void(0)">file filter</a>
                    <div class="job-left-aside custom-scrollbar">
                        <div class="file-sidebar">
                            <div class="card">
                                <div class="card-body">
                                    <ul>
                                        <li>
                                            <div class="btn btn-primary"><i data-feather="home">                                    </i>Home </div>
                                        </li>
                                        <li>
                                            <div class="btn btn-light"><i data-feather="folder"></i>All </div>
                                        </li>
                                        <li>
                                            <div class="btn btn-light"><i data-feather="clock"></i>Recent </div>
                                        </li>
                                        <li>
                                            <div class="btn btn-light"><i data-feather="star"></i>Starred </div>
                                        </li>
                                        <li>
                                            <div class="btn btn-light"><i data-feather="alert-circle"></i>Recovery </div>
                                        </li>
                                        <li>
                                            <div class="btn btn-light"><i data-feather="trash-2"></i>Deleted </div>
                                        </li>
                                    </ul>
                                    <hr>
                                    <ul>
                                        <li>
                                            <div class="btn btn-outline-primary"><i data-feather="database">   </i>Storage </div>
                                            <div class="m-t-15">
                                                <div class="progress sm-progress-bar mb-1">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <h6>25 GB of 100 GB used</h6>
                                            </div>
                                        </li>
                                    </ul>
                                    <hr>
                                    <ul>
                                        <li>
                                            <div class="btn btn-outline-primary"><i data-feather="grid">   </i>Pricing plan</div>
                                        </li>
                                        <li>
                                            <div class="pricing-plan">
                                                <h6>Trial Version </h6>
                                                <h5>FREE</h5>
                                                <p> 100 GB Space</p>
                                                <div class="btn btn-outline-primary btn-xs">Selected</div><img class="bg-img" src="../assets/images/dashboard/folder.png" alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pricing-plan">
                                                <h6>Premium</h6>
                                                <h5>$5/month</h5>
                                                <p> 200 GB Space</p>
                                                <div class="btn btn-outline-primary btn-xs">Contact Us</div><img class="bg-img" src="../assets/images/dashboard/folder1.png" alt="">
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-md-12 box-col-12">
                <div class="file-content">
                    <div class="card">
                        <div class="card-header">
                            <div class="media">
                                <form class="form-inline" action="#" method="get">
                                    <div class="form-group d-flex mb-0"> <i class="fa fa-search"></i>
                                        <input class="form-control-plaintext" type="text" placeholder="Search...">
                                    </div>
                                </form>
                                <div class="media-body text-end">
                                    <form class="d-inline-flex" action="#" method="POST" enctype="multipart/form-data" name="myForm">
                                        <div class="btn btn-primary" onclick="getFile()"> <i data-feather="plus-square"></i>Add New</div>
                                        <div style="height: 0px;width: 0px; overflow:hidden;">
                                            <input id="upfile" type="file" onchange="sub(this)">
                                        </div>
                                    </form>
                                    <div class="btn btn-outline-primary ms-2"><i data-feather="upload">   </i>Upload </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body file-manager">
                            <h4>All Files</h4>
                            <h6>Recently opened files</h6>
                            <ul class="files">
                                <li class="file-box">
                                    <div class="file-top"> <i class="fa fa-file-image-o txt-primary"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>
                                    <div class="file-bottom">
                                        <h6>Logo.psd </h6>
                                        <p class="mb-1">2.0 MB</p>
                                        <p> <b>last open : </b>1 hour ago</p>
                                    </div>
                                </li>
                                <li class="file-box">
                                    <div class="file-top"> <i class="fa fa-file-archive-o txt-secondary"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>
                                    <div class="file-bottom">
                                        <h6>Project.zip </h6>
                                        <p class="mb-1">1.90 GB</p>
                                        <p> <b>last open : </b>1 hour ago</p>
                                    </div>
                                </li>
                                <li class="file-box">
                                    <div class="file-top"> <i class="fa fa-file-excel-o txt-success"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>
                                    <div class="file-bottom">
                                        <h6>Backend.xls</h6>
                                        <p class="mb-1">2.00 GB</p>
                                        <p> <b>last open : </b>1 hour ago</p>
                                    </div>
                                </li>
                                <li class="file-box">
                                    <div class="file-top"> <i class="fa fa-file-text-o txt-info"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>
                                    <div class="file-bottom">
                                        <h6>requirements.txt </h6>
                                        <p class="mb-1">0.90 KB</p>
                                        <p> <b>last open : </b>1 hour ago</p>
                                    </div>
                                </li>
                            </ul>
                            <h5 class="mt-4">Folders</h5>
                            <ul class="folder">
                                <a href="{{route('DetailFile',['id'=>'extra-images'])}}">
                                <li class="folder-box">
                                    <div class="media"><i class="fa fa-folder f-36 txt-warning"></i>
                                        <div class="media-body ms-3">
                                            <h6 class="mb-0">extra-images</h6>
                                            <p>{{count($images)}} files</p>
                                        </div>
                                    </div>
                                </li>
                                </a>
                                <a href="{{route('DetailFile',['id'=>'filebaidang'])}}">
                                <li class="folder-box">
                                    <div class="media"><i class="fa fa-folder f-36 txt-warning"></i>
                                        <div class="media-body ms-3">
                                            <h6 class="mb-0">FileBaiDang</h6>
                                            <p>{{count($filebaidang)}} files</p>
                                        </div>
                                    </div>
                                </li>
                                </a>
                            </ul>
                            <h5 class="mt-4">Files</h5>
                            <ul class="files">
                                <li class="file-box">
                                    <div class="file-top"> <i class="fa fa-file-archive-o txt-secondary"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>
                                    <div class="file-bottom">
                                        <h6>Project.zip </h6>
                                        <p class="mb-1">1.90 GB</p>
                                        <p> <b>last open : </b>1 hour ago</p>
                                    </div>
                                </li>
                                <li class="file-box">
                                    <div class="file-top"> <i class="fa fa-file-excel-o txt-success"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>
                                    <div class="file-bottom">
                                        <h6>Backend.xls</h6>
                                        <p class="mb-1">2.00 GB</p>
                                        <p> <b>last open : </b>1 hour ago</p>
                                    </div>
                                </li>
                                <li class="file-box">
                                    <div class="file-top"> <i class="fa fa-file-text-o txt-info"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>
                                    <div class="file-bottom">
                                        <h6>requirements.txt </h6>
                                        <p class="mb-1">0.90 KB</p>
                                        <p> <b>last open : </b>1 hour ago</p>
                                    </div>
                                </li>
                                <li class="file-box">
                                    <div class="file-top"> <i class="fa fa-file-text-o txt-primary"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>
                                    <div class="file-bottom">
                                        <h6>Logo.psd </h6>
                                        <p class="mb-1">2.0 MB</p>
                                        <p> <b>last open : </b>1 hour ago</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
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
<div class="icon-hover-bottom p-fixed fa-fa-icon-show-div opecity-0">
    <div class="container-fluid">
        <div class="row">
            <div class="icon-popup">
                <div class="close-icon"><i class="icofont icofont-close"></i></div>
                <div class="icon-first"><i id="icon_main"></i></div>
                <div class="icon-class">
                    <label class="icon-title">data-feather</label><span id="fclass1"></span>
                </div>
                <div class="icon-last icon-last">
                    <label class="icon-title">Markup</label>
                    <div class="form-inline">
                        <div class="form-group">
                            <input class="inp-val form-control m-r-10" id="input_copy" type="text" value="" readonly="readonly">
                            <button class="btn btn-primary notification" onclick="myFunction()">Copy text</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>


@endsection
         @section('script')
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
<script src="{{asset('assets/js/dropzone/dropzone.js')}}"></script>
<script src="{{asset('assets/js/dropzone/dropzone-script.js')}}"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{asset('assets/js/script.js')}}"></script>
<script src="{{asset('assets/js/theme-customizer/customizer.js')}}"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>
@endsection
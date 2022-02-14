
    @extends('layouts.masteradmin')

    @section('title', 'Admin')
    
    
    @section('link')
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <title>viho - Premium Admin Template</title>
    <!-- Google font-->
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
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
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
  <div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-sm-6">
            <h3>project list</h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item">dashboard</li>
              <li class="breadcrumb-item active">project list</li>
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
      <div class="row project-cards">
        <div class="col-md-12 project-list">
          <div class="card">
            <div class="row">
              <div class="col-md-6 p-0">
                <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
                  <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="true"><i data-feather="target"></i>All</a></li>
                  <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false"><i data-feather="info"></i>Doing</a></li>
                  <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><i data-feather="check-circle"></i>Done</a></li>
                </ul>
              </div>
              <div class="col-md-6 p-0">                    
                <div class="form-group mb-0 me-0"></div><a class="btn btn-primary" href="projectcreate.html"> <i data-feather="plus-square"> </i>Create New Project</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body">
              <div class="tab-content" id="top-tabContent">
                <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                  <div class="row">
                    @foreach($class as $value)
                    @php
                     if($value->trangthai == 1)
                     {
                       $color="badge-primary";
                       $title="Avtive";
                     }
                     else if($value-> trangthai==2)
                     {
                       $color="badge-danger";
                       $title="Not Avtive";
                     }   
                    @endphp
                    <div class="col-xxl-4 col-lg-6">
                      <div class="project-box"><span class="badge {{ $color }}">{{$title}}</span>
                        
                        <h6><img style="width:30px;height:30px;border-radius:50px;border:none;margin-right:5px;" src="{{asset('extra-images')}}/{{$value->Logo}}" alt="" data-original-title="" title="">{{$value->TenLop}}</h6>
                        <div class="media">
                          <div class="media-body">
                            <p>{{$value->Mota}}</p>
                          </div>
                        </div>
                        <div class="row details">
                          <div class="col-6"><span>Lesson </span></div>
                          <div class="col-6 font-primary">
                             @php 
                            $count=0;
                            foreach($value->DSBaiDang as $baidang){
                              if($baidang->TrangThai ==1)
                              {
                                $count++;
                              }
                            }
                            echo"$count";
                          @endphp
                          </div>
                          <div class="col-6"> <span>Exercise</span></div>
                          <div class="col-6 font-primary">@php 
                            $count=0;
                            foreach($value->DSBaiDang as $baidang){
                              if($baidang->TrangThai ==2)
                              {
                                $count++;
                              }
                            }
                            echo"$count";
                          @endphp</div>
                          <div class="col-6"> <span>Question</span></div>
                          <div class="col-6 font-primary">@php 
                            $count=0;
                            foreach($value->DSBaiDang as $baidang){
                              if($baidang->TrangThai ==3)
                              {
                                $count++;
                              }
                            }
                            echo"$count";
                          @endphp</div>
                        </div>
                        <div class="customers">
                          <ul>
                            @foreach($value->DSTaiKhoan->slice(0, 3) as $img)
                            <li class="d-inline-block"><img class="img-30 rounded-circle" style="width:25px;height:25px;" src="{{asset('extra-images')}}/{{$img->AVT}}" alt="" data-original-title="" title=""></li>
                            @endforeach
                            <li class="d-inline-block ms-2">
                              @if($value->DSTaiKhoan->count()>3)
                              <p class="f-12">+{{$value->DSTaiKhoan->count()-3}} More</p>
                              @endif
                            </li>
                          </ul>
                        </div>
                        <div class="project-status mt-4">
                          <a href="{{route('ShowClassDetail',['id'=>$value->id])}}"class="btn btn-primary" type="button">Class Detail</a>                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid Ends-->
  </div>

    @endsection
    @section('script')
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
    <script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
    <script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
    <script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
    <script src="{{asset('assets/js/height-equal.js')}}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="{{asset('assets/js/theme-customizer/customizer.js')}}"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>
@endsection
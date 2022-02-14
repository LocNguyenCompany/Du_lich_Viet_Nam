
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
                    <div class="container-fluid">
                        <div class="row">
                          <!-- Base styles-->
                          <div class="col-sm-12">
                            <form class="form-horizontal" action="{{route('ClassDetail', ['id' => $class->id])}}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="col-sm-10">Tên lớp</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="classname" placeholder="Nhập tên lớp"
                                            name="tenlop" value="{{$class->TenLop}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-10">Mô tả</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="classname" placeholder="Nhập mô tả"
                                            name="mota" value="{{$class->MoTa}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-10">Logo</label>
                                    <div class="col-sm-10">
                                        <input class="input-file" id="my-file" type="file" name="logo" value="{{$class->Logo}}" disabled>
                                        <label tabindex="0" for="my-file" class="input-file-trigger"></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-10">Banner</label>
                                    <div class="col-sm-10">
                                        <input class="input-file" id="my-file" type="file" name="banner" value="{{$class->Banner}}" disabled>
                                        <label tabindex="0" for="my-file" class="input-file-trigger"></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2">Màu chủ đề:</label>
                                    <div class="col-sm-10">
                                        <input type="color" id="favcolor" name="favcolor" value="{{$class->MauChuDe}}" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-10">Mã lớp</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="classname"
                                            name="malop" value="{{$class->MaLop}}" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-10">Trạng thái</label>
                                  <div class="col-sm-10">
                                      <select name='trangthai'>
                                          <option value="1">Hoạt động</option>
                                          <option value="2">Ngưng hoạt động</option>
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
                      {{-- Xuất danh sách sinh viên --}}
                      <div class="container"> 
                        <h1>Danh sách tài khoản trong lớp</h1>
                        <div class="table-responsive">
                          <table class="display table table-striped table-bordered" id="example-style-1">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Avatar</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Birth of Date</th>
                                <th>Status</th>
                                <th>Type Account</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($class->DSTaiKhoan as $value)
                              <tr>
                                <td>{{$value->id}}</td>
                                <td>{{$value->Ten}}</td>
                                <td>
                                  <img class="img-thumbnail" style="width:120px;height:80px;"src="{{asset('extra-images')}}/{{$value->AVT}}"></td>   
                                <td>{{$value->Phone}}</td>
                                <td>{{$value->Email}}</td>
                                <td>{{$value->DiaChi}}</td>
                                <td>{{$value->NgaySinh}}</td>
                                <td>{{$value->TrangThai}}</td>
                                <td>{{$value->ID_LoaiTaiKhoan}}</td>
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
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
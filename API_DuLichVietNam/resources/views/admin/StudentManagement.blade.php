
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
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
  <link id="color" rel="stylesheet" href="{{asset('assets/css/color-1.css" media="screen')}}">
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
                    <h3>Student Management</h3>
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{route("admin_index")}}">Home</a></li>
                      <li class="breadcrumb-item">StudentManagement</li>
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
                  <div class="card">
                    <div class="card-header">
                      <h5>Student list</h5>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="display" id="example-style-1">
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
                              <th>Option</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($Student as $value)
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
                              <td>
                                
                                <a href="{{route('showcreateAccount')}}"> <button type="button" class="btn btn-default"><i class="fa fa-plus"></i></button></a>
                                <a href="{{route('showupdateAccount', ['id' => $value->id])}}"> <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a>
                                <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
  
                                
  
                              </td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Base styles Ends-->
              
              </div>
            </div>
            <!-- Container-fluid Ends-->
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
    <script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="{{asset('assets/js/theme-customizer/customizer.js')}}"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="{{asset('assets/js/tooltip-init.js')}}"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>
@endsection
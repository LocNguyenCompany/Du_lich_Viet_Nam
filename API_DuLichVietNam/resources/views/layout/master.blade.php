<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    <div id='wrapper'>
        <div id='header'>
            HEADER </br>
            Xin chào  </br>
            <a href=""><button>Đăng xuất</button></a>
        </div>
        <div id='content'>
            <div id='left-menu'>
                <ul>
                    <li><a href="{{ route('trangchu') }}">Trang Chủ</a> </li>
                    <li><a href="{{ route('show_bai_viet') }}">Trang Bài Viết</a> </li>
                    <li><a href="{{ route('show_vung') }}">Trang Vùng</a> </li>
                    <li><a href="{{ route('show_mien') }}">Trang Miền</a> </li>
                    <li><a href="{{ route('show_tai_khoan') }}">Trang Tài Khoản</a> </li>
                    <li><a href="{{ route('show_loai_tai_khoan') }}">Trang Loại Tài Khoản</a> </li>
                    <li><a href="{{ route('show_quan_an') }}">Trang Quán Ăn</a> </li>
                    <li><a href="{{ route('show_dia_danh') }}">Trang Địa Danh</a> </li>
                    <li><a href="{{ route('show_loai_dia_danh') }}">Trang Loại Địa Danh</a> </li>
                    <li><a href="{{ route('show_nha_nghi') }}">Trang Nhà Nghỉ</a> </li>
                    <li><a href="{{ route('show_nhu_cau') }}">Trang Nhu Cầu</a> </li>
                </ul>
            </div>
            <div id='main-content'>
                @yield('main-content')
            </div>
        </div>
        <div style="clear: both;"></div>
        <div id='footer'>
            FOOTER
        </div>
    </div>
</body>
</html>
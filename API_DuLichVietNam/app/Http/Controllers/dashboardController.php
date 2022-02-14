<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaiKhoan;
use App\Models\Mien;
use App\Models\BaiViet;
use App\Models\DiaDanh;

class dashboardController extends Controller
{
    public function admin_index()
    {

        return view('admin/index');
    }
    public function AccountManagement()
    {
        $Account = TaiKhoan::where('Loai_tai_khoan', 1)->get();
        return view('admin/AccountManagement', compact('Account'));
    }
    public function StudentManagement()
    {
        $Student = TaiKhoan::where('ID_LoaiTaiKhoan', 2)->get();
        return view('admin/StudentManagement', compact('Student'));
    }

    public function FileManagement()
    {
        $images = Storage::disk('public-images')->allFiles('');
        $filebaidang = Storage::disk('filebaidang')->allFiles('');

        return view('admin/FileManagement/filemanager', compact('images', 'filebaidang'));
    }
    public function DetailFileManager($id)
    {

        if ($id == 'extra-images') {
            $files_with_size = array();
            $files = Storage::disk('public-images')->files();
            foreach ($files as $key => $file) {
                $open=null;
                if (file_exists(public_path('extra-images').'/'.$file)) {
                    $open=date ("d m Y H:i:s", filemtime(public_path('extra-images').'/'.$file));
                    }
                $size = Storage::disk('public-images')->size($file);

                $base = log($size, 1024);
                $suffixes = array('', 'Kb', 'Mb', 'Gb', 'Tb');

                $files_with_size[$key]['name'] = $file;
                $files_with_size[$key]['size'] = round(pow(1024, $base - floor($base)), 2) . ' ' . $suffixes[floor($base)];
                $files_with_size[$key]['open'] = $open;
            }
        } else {
            $files_with_size = array();
            $files = Storage::disk('filebaidang')->files();
            foreach ($files as $key => $file) {
                $open=null;
                if (file_exists(public_path('file').'/'.$file)) {
                    $open=date ("d m Y H:i:s", filemtime(public_path('file').'/'.$file));
                    }
                $size = Storage::disk('filebaidang')->size($file);

                $base = log($size, 1024);
                $suffixes = array('', 'Kb', 'Mb', 'Gb', 'Tb');

                $files_with_size[$key]['name'] = $file;
                $files_with_size[$key]['size'] = round(pow(1024, $base - floor($base)), 2) . ' ' . $suffixes[floor($base)];
                $files_with_size[$key]['open'] = $open;

            }
        }
        return view('admin/FileManagement/DetailFolder', compact('files_with_size','id'));
    }

    public function showcreateAccount()
    {
        return view('admin/createAccount');
    }

    public function createAccount(Request $request)
    {
        $account = new TaiKhoan;
        $account->Ten = $request->fullname;

        $time = time();
        $file = $request->file('avt')->getClientOriginalName();
        $new_img_name = $time . "-" . $file;
        $uploadFile = $request->avt;
        $uploadFile->storeAs('extra-images', $new_img_name);

        $account->AVT = $new_img_name;
        $account->Phone = $request->phone;
        $account->Email = $request->email;
        $account->DiaChi = $request->address;
        $account->Password = Hash::make($request->password);
        $account->NgaySinh = $request->birthday;
        $account->provider = "admin";
        $account->token = "0";
        $account->TrangThai = 1;
        $account->ID_LoaiTaiKhoan = $request->typeAccount;

        $account->save();
        return redirect()->route('admin_index');
    }

    public function showupdateAccount($id)
    {
        $account = TaiKhoan::find($id);
        return view('admin/updateAccount');
    }

    public function updateAccount(Request $request, $id)
    {
        $account = TaiKhoan::find($id);
        $account->Ten = $request->fullname;

        if ($request->avt != "") {
            $time = time();
            $file = $request->file('avt')->getClientOriginalName();
            $new_img_name = $time . "-" . $file;
            $uploadFile = $request->avt;
            $uploadFile->storeAs('extra-images', $new_img_name);

            $account->AVT = $new_img_name;
        } else {
            $account->AVT = $account->AVT;
        }

        $account->Phone = $request->phone;
        $account->Email = $request->email;
        $account->DiaChi = $request->address;
        $account->Password = Hash::make($request->password);
        $account->NgaySinh = $request->birthday;
        $account->provider = "admin";
        $account->token = "0";
        $account->TrangThai = 1;
        $account->ID_LoaiTaiKhoan = $request->typeAccount;

        $account->save();
        if ($account->ID_LoaiTaiKhoan == 2) {
            return redirect()->route('StudentManagement');
        }
        if ($account->ID_LoaiTaiKhoan == 3) {
            return redirect()->route('TeacherManagement');
        }
    }

    public function deleteAccount($id)
    {
        $loaitk =  TaiKhoan::find($id);
        TaiKhoan::where('id', $id)->delete();
        ChiTietLop::where('ID_TaiKhoan', $id)->delete();
        Lop::where('ID_TaiKhoan', $id)->delete();
        BaiDang::where('ID_TaiKhoan', $id)->delete();
        if ($loaitk->ID_LoaiTaiKhoan == 2) {
            return redirect()->route('StudentManagement');
        }
        if ($loaitk->ID_LoaiTaiKhoan == 3) {
            return redirect()->route('TeacherManagement');
        }
    }
    public function Postmanagement()
    {
        $mien = Mien::all();
        return view('admin/PostManagement/Mien', compact('mien'));
    }
    public function diadanh($id)
    {
        $diadanh = DiaDanh::where('Mien', $id)->get();
        return view('admin/PostManagement/diadanh', compact('diadanh'));
    }
    public function baiviet($id)
    {
        $baiviet = BaiViet::where('Dia_danh', $id)->get();
        return view('admin/PostManagement/baiviet', compact('baiviet'));
    }
    
    public function ShowClassDetail($id)
    {
        $class = Lop::find($id);
        return view('admin/ClassManagement/admin_classdetail', compact('class'));
    }
    public function ClassDetail($id, Request $request)
    {
        $class = Lop::find($id);
        $class->TenLop = $request->tenlop;
        $class->MoTa = $request->mota;
        $class->Logo = $class->Logo;
        $class->Banner = $class->Banner;
        $class->MauChuDe = $class->MauChuDe;
        $class->TrangThai = $request->trangthai;
        $class->ID_TaiKhoan = $class->ID_TaiKhoan;
        $class->MaLop = $class->MaLop;
        $class->token = $class->token;
        $class->save();
        return redirect()->route('ShowClass', ['id' => $class->ID_TaiKhoan]);
    }
}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaiVietController;
use App\Http\Controllers\DiaDanhController;
use App\Http\Controllers\LoaiDiaDanhController;
use App\Http\Controllers\LoaiTaiKhoanController;
use App\Http\Controllers\MienController;
use App\Http\Controllers\NhaNghiController;
use App\Http\Controllers\NhuCauController;
use App\Http\Controllers\QuanAnController;
use App\Http\Controllers\TaiKhoanController;
use App\Http\Controllers\VungController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('trangchu');
Route::get('/show-Bai-Viet', [BaiVietController::class, 'show_bai_viet'])->name('show_bai_viet');
Route::get('/show-Dia-Danh', [DiaDanhController::class, 'show_dia_danh'])->name('show_dia_danh');
Route::get('/show-Loai-Dia-Danh', [LoaiDiaDanhController::class, 'show_loai_dia_danh'])->name('show_loai_dia_danh');
Route::get('/show-Loai-Tai-Khoan', [LoaiTaiKhoanController::class, 'show_loai_tai_khoan'])->name('show_loai_tai_khoan');
Route::get('/show-Mien', [MienController::class, 'show_mien'])->name('show_mien');
Route::get('/show-Nha-Nghi', [NhaNghiController::class, 'show_nha_nghi'])->name('show_nha_nghi');
Route::get('/show-Nhu-Cau', [NhuCauController::class, 'show_nhu_cau'])->name('show_nhu_cau');
Route::get('/show-Quan-An', [QuanAnController::class, 'show_quan_an'])->name('show_quan_an');
Route::get('/show-Tai-Khoan', [TaiKhoanController::class, 'show_tai_khoan'])->name('show_tai_khoan');
Route::get('/show-Vung', [VungController::class, 'show_vung'])->name('show_vung');

Route::get('/login/{username}/{password}', [TaiKhoanController::class, 'login'])->name('login');
Route::get('/getUserAccount/{username}/{password}', [TaiKhoanController::class, 'getUserAccount'])->name('getUserAccount');

Route::get('/all_bai_viet', [BaiVietController::class, 'get_all_bai_viet'])->name('allBaiViet');
Route::get('/all_dia_danh', [DiaDanhController::class, 'get_all_dia_danh'])->name('allDiaDanh');
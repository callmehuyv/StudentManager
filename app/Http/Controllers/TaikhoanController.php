<?php

namespace App\Http\Controllers;

class TaikhoanController extends Controller
{
    public function getDangnhap() {
    	return view('taikhoan.dangnhap');
    }

    // Action thêm phòng học
    public function getThemmoi() {
    	return "Thêm phòng học mới";
    }

    // Sửa phòng học
    public function getCapnhat($id) {
    	echo 'Cập nhật cho phòng học có id: ';
    	return $id;
    }
 }

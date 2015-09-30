<?php

namespace App\Http\Controllers;

class PhonghocController extends Controller
{
    public function getIndex() {
    	return 'Day la danh sách phòng học';
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

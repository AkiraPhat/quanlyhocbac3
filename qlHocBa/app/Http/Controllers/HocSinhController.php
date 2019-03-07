<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hocsinh;

class HocSinhController extends Controller
{
    //
    public function getDanhSach()
    {
    	$students = hocsinh::all();
    	return view('admin.students.danhsach',['students'=>$students]);	
    }
}

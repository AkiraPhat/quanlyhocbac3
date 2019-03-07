<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hsdiem;

class HsDiemController extends Controller
{
    //
    public function getDanhSach()
    {
    	$studyresult = hsdiem::all();
    	return view('admin.studyresult.danhsach',['studyresult'=>$studyresult]);	
    }
}

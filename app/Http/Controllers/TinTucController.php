<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TinTuc;
use App\LoaiTin;

class TinTucController extends Controller
{
    //
    public function getDanhsach()
    {
        $tintuc = TinTuc::orderBy('id','DESC')->get();
        return view('admin.tintuc.danhsach',['tintuc'=>$tintuc]);
    }

    public function getThem()
    {

    }

    public function getSua($id)
    {


    }

    public function postSua(Request $request,$id)
    {

    }

    public function getXoa($id)
    {

    }
}


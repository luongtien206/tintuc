<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TinTuc;
use App\Slide;

class SlideController extends Controller
{
    //
    public function getDanhsach()
    {
        $slide = Slide::all();
        return view('admin.slide.danhsach',['slide'=>$slide]);
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


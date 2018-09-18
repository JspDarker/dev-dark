<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
    public function index($id=1)
    {
        return view('demo',compact('id'));
    }

    public function demo($name,$title)
    {
        $data = array(
            array('name'=>'DNThanh','age'=>28),
            array('name'=>'DNThanh 2','age'=>22),
            array('name'=>'DNThanh 3','age'=>29),
        );
        return view('demo',compact('name','title','data'));
    }
}

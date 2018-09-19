<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function page()
    {
        $data['home']= 'lorem12';
        echo 12;
        return view('shop/home',compact('data'));
    }

    public function checkFile()
    {

        return view('shop/file_process/index',compact('data'));
    }
}

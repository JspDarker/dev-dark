<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Home;

class PageController extends Controller
{
    public function page()
    {
        return view('shop/home');
    }

    public function checkFile()
    {
        return view('shop/file_process/index',compact('data'));
    }
}

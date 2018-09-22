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
        /*$data['home']= 'lorem12';
        echo 12;
        return view('shop/home',compact('data'));*/
        //$menu = (new Home)->getMenu();
        $menu = new Home;
        $menus = $menu->getMenu();
        echo "<pre>";
        print_r($menus);
        echo "</pre>";die;

        return view('shop/home');
    }

    public function checkFile()
    {

        return view('shop/file_process/index',compact('data'));
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Home extends Model
{
    // demo menu
    public static function getMenu()
    {
        /*$menu = DB::table('categories')
            ->join('page_url','categories.id_url','=','page_url.id')
            ->select('categories.id','categories.id_parent','categories.name', 'page_url.url')
            ->get();*/

        $menus = DB::select("
            select 
              categories.id as id_parent,categories.name as name_parent,page_url.url as url_parent, categories.icon
              ,p_in.id as id_sub, p_in.name as name_sub, p_in.url_sub as url_sub
            from categories
            join page_url on categories.id_url = page_url.id
            left join ( 
                select
                  page_url.url as url_sub,categories.id
                  ,categories.name as name,categories.id_parent
                from categories
                join page_url on categories.id_url = page_url.id
                where categories.id_parent is not null
            ) p_in
            on categories.id = p_in.id_parent
            where categories.id_parent is null
        ");

        $res = array();

        /*foreach ($menus as $key => $value) {
            $res[$value->name_parent][] = $value;
        }*/
        foreach ($menus as $key => $value) {
            $res[$value->name_parent."::".$value->id_parent."::".$value->url_parent][] = $value;
        }

        //foreach ()
        return $res;// $menu
//        return $menus;// $menu
    }
}

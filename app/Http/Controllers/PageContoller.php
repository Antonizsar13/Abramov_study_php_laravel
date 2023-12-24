<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageContoller extends Controller
{
    public function showOne(int $id){

        $pages = [
            1 => 'страница 1',
            2 => 'страница 2',
            3 => 'страница 3',
            4 => 'страница 4',
            5 => 'страница 5',
        ];


        if (array_key_exists($id, $pages))
            return $pages[$id];
        else
            return 'Нет такого';
    }

    public function showAll(){
        return 'all';
    }
}

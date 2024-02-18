<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function metod1()
    {
        $title = "Metod 1";
        $content = "Content 1";
        return view('MyController.metod', ['title' => $title, 'content' => $content]);
    }

    public function metod2()
    {
        $title = "Metod 2";
        $content = "Content 2";
        return view('MyController.metod', ['title' => $title, 'content' => $content]);
    }

    public function metod3()
    {
        $title = "Metod 3";
        $content = "Content 3";
        return view('MyController.metod', ['title' => $title, 'content' => $content]);
    }

    public function links()
    {
        $links = [
            [
                'text' => 'text1',
                'href' => 'href1',
            ],
            [
                'text' => 'text2',
                'href' => 'href2',
            ],
            [
                'text' => 'text3',
                'href' => 'href3',
            ],
        ];
        return view('MyController.links', ['links' => $links]);
    }
}

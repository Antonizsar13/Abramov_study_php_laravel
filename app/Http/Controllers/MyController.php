<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function listCity()
    {
        $countries =  Country::with('cities')->get();

        return view('MyController.listCity', ['countries' => $countries]);
    }


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

    public function users()
    {
        $users = [
            [
                'name' => 'user1',
                'surname' => 'surname1',
                'banned' => true,
            ],
            [
                'name' => 'user2',
                'surname' => 'surname2',
                'banned' => false,
            ],
            [
                'name' => 'user3',
                'surname' => 'surname3',
                'banned' => true,
            ],
            [
                'name' => 'user4',
                'surname' => 'surname4',
                'banned' => false,
            ],
            [
                'name' => 'user5',
                'surname' => 'surname5',
                'banned' => false,
            ],
        ];
        return view('MyController.users', ['users' => $users]);
    }
}

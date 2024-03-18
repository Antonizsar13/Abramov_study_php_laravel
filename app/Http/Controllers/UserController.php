<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();

        return view('Users.index', [
            'users' => $users,
        ]);
    }

    public function create1()
    {
        $login = "Ivan" . rand(0, 100);
        $email = "Iv" . rand(200, 800) . '@gmail.com';
        $password = rand(20000, 700000000);

        $userData = [
            'login' => $login,
            'email' => $email,
            'password' => $password, // Хешируем пароль, прежде чем сохранить его в базу данных
        ];

        DB::table('users')->insert($userData);

        return UserController::index();
    }


    public function create3()
    {
        $usersData = [
            [
                'login' => "Nina" . rand(0, 100),
                'email' => "Ni" . rand(200, 800) . '@gmail.com',
                'password' => rand(20000, 700000000),
            ],
            [
                'login' => "LEXA" . rand(0, 100),
                'email' => "lx" . rand(200, 800) . '@gmail.com',
                'password' => rand(20000, 700000000),
            ],
            [
                'login' => "Grisha" . rand(0, 100),
                'email' => "gr" . rand(200, 800) . '@gmail.com',
                'password' => rand(20000, 700000000),
            ],
        ];

        DB::table('users')->insert($usersData);

        return UserController::index();
    }

    public function update()
    {
        $randomUser = DB::table('users')->inRandomOrder()->first();

        DB::table('users')
            ->where('id', $randomUser->id)
            ->update([
                'login' => "NEW" . rand(0, 100),
                'email' => "NEW" . rand(200, 800) . '@gmail.com',
            ]);

        return UserController::index();
    }

    public function delete()
    {
        $randomUser = DB::table('users')->inRandomOrder()->first();

        DB::table('users')
            ->where('id', $randomUser->id)
            ->delete();

        return UserController::index();
    }
}

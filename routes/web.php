<?php

use App\Http\Controllers\PageContoller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{id?}/', function ($id = 0) {
    return "User id: $id";
});

Route::get('/{year}/{month}/{day}/', function ($year, $month, $day) {
    $year = (int)$year;
    $month = (int)$month;
    $day = (int)$day;
    $date = "$year-$month-$day";

    $weekDay = date('N', strtotime($date)) -1;
    $weekDaysNames = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
    return "День недели: $weekDaysNames[$weekDay]";
})->where(['year' => '\d{4}','month' => '(0?[1-9]|1[0-2])', 'day' => '(0?[1-9]|[1-2][0-9]|3[0-1])']);


Route::get('/user/user_name/{name}', function ($userName) {

    $users = [ 
     'user1' => 'city1', 
     'user2' => 'city2', 
     'user3' => 'city3', 
     'user4' => 'city4', 
     'user5' => 'city5'
    ];
    if (array_key_exists($userName, $users))
        return "Город пользователя $userName: $users[$userName]";
    else
        return "Нет такого пользователя!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!";
});

Route::get('/pages/show/{id}', [PageContoller::class, 'showOne']);
Route::get('/pages/all/', [PageContoller::class, 'showAll']);
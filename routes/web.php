<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\PageContoller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use PHPUnit\Framework\Attributes\PostCondition;

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

    $weekDay = date('N', strtotime($date)) - 1;
    $weekDaysNames = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
    return "День недели: $weekDaysNames[$weekDay]";
})->where(['year' => '\d{4}', 'month' => '(0?[1-9]|1[0-2])', 'day' => '(0?[1-9]|[1-2][0-9]|3[0-1])']);


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

Route::get('/my_controller/metod1/', [MyController::class, 'metod1']);
Route::get('/my_controller/metod2/', [MyController::class, 'metod2']);
Route::get('/my_controller/metod3/', [MyController::class, 'metod3']);

Route::get('/my_controller/links/', [MyController::class, 'links']);

Route::get('/my_controller/users/', [MyController::class, 'users']);

Route::get('/my_controller/users/', [MyController::class, 'users']);

Route::get('/employees/', [EmployeesController::class, 'index']);

Route::get('/users/', [UserController::class, 'index']);
Route::get('/users/create1', [UserController::class, 'create1'])->name('users.create1');
Route::get('/users/create3', [UserController::class, 'create3'])->name('users.create3');
Route::get('/users/update', [UserController::class, 'update'])->name('users.update');
Route::get('/users/delete', [UserController::class, 'delete'])->name('users.delete');

Route::get('/post/all/{order?}/{dir?}', [PostController::class, 'getAll']);
Route::get('/post/{id}', [PostController::class, 'getOne'])->where('id', '[0-9]+')->name('post.getOne');
Route::match(['get', 'post'], '/post/new', [PostController::class, 'createPost'])->name('post.create');
Route::match(['get', 'post'], '/post/edit/{id}', [PostController::class, 'editPost'])->where('id', '[0-9]+')->name('post.editPost');
Route::get('/post/del/{id}', [PostController::class, 'delPost'])->where('id', '[0-9]+')->name('post.delPost');

Route::get('/county/list_city', [MyController::class, 'listCity']);

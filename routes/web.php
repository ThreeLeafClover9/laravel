<?php

use App\Http\Controllers\AController;
use App\Http\Controllers\NewController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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

//echo "블레이드 페이지 파일을 불러오기 바로전<br/>";

Route::get('/', function () {
//    return view('welcome');
    return View::make('welcome');
});

//Route::get('/route', function () {
//    return view('routing');
//});
Route::get('/route', [NewController::class, 'index']);

Route::get('/route/{id}', function ($id) {
    return view('routing_parameter', ['id' => $id, 'data' => '']);
});

Route::get('/provider', function () {
    for ($i = 0; $i < 3; $i++) {
        echo app(AController::class)->multiple(2);
        echo "<br/>";
    }
});

Route::get('/middleware', function () {
    return '미들웨어 테스트 페이지 입니다.';
})->middleware('test');

Route::get('/livewire', function () {
    return View::make('livewire', ['post' => '자식에게 넘겨줄 값', 'collection' => ['livewire', 'second']]);
});

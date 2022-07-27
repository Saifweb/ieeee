<?php

use App\Models\Article;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/saif', function () {
    return view('done');
});

Route::get('/create', function () {
    return view('welcome');
});
Route::post('/create', function () {
    $user=new User();
    $user->name=request('name');
    $user->email=request('email');
    $user->phone=request('phone');
    $user->state=request('state');
    $user->number=request('ieee_number');
    $user->save();
    return view("done");
});


<?php

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
    $test=app('firebase.firestore')->database()->collection('Stu')->newDocument();
    $test->set([
        'name'=>'hi100000'
    ]);
    
});
Route::get('/add', function () {
    return view('test2');
});
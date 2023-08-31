<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {

//     return view('front.hall');
// });

Route::get('/hall', function () {

$data=[
    's1'=>'amy',
    's2'=>'bob',
    's3'=>'cat'
];

// return view('front.hall');
// return view('front.hall',['data123'=>$data]);
return view('front.hall')
->with('data123',$data)
->with('s4','tom')
->with('s5','tin')
->with('s6','may');
})->name('hall');


Route::get('/X1', function () {
    return view('front.F1');
})->name('helloF1');

Route::get('/XX2', function () {
    return view('front.F2');
})->name('helloF2');

Route::get('/XXX3', function () {
    return view('front.F3');
})->name('helloF3');



// calculate
Route::get('/calculate', function () {
    $option=['+','-','*','/'];
    $getOption=$option[rand(0,3)];

$data=[
    'num1'=> 100,
    'num2'=> 2000,
    'option'=>$getOption
];

    return view('front.calculate')
    ->with('data',$data);
})->name('calculate');
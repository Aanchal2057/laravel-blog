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
    return view('posts');
    //return Hello world!; //return string
});


// Route::get('post', function () {
//     return view('post',[
//        // 'post'=>'<h1>Hello World</h1>' //$post
//         'post' =>file_get_contents($filename)
//     ]);
// });



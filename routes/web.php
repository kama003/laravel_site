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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', function () {
    return view('about');
});
Route::get('/3DRigging-animation', function () {
    return view('3DRigging-Animation');
});
Route::get('/3Dlighting-rendering', function () {
    return view('3Dlighting-Rendering');
});
Route::get('/MotionGraphic-vfx', function () {
    return view('MotionGraphic-VFX');
});
Route::get('/Explainervideos', function () {
    return view('ExplainerVideos');
});
Route::get('/Graphicdesigning', function () {
    return view('GraphicDesigning');
});

Route::get('/3Dmodeling', function () {
    return view('3DModeling');
});

Route::get('/3Darchitecture', function () {
    return view('3DArchitecture');
});

Route::get('/3Dprinting', function () {
    return view('3Dprinting');
});

Route::get('/ar-vr', function () {
    return view('ar-vr');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});



Route::get('/planner', function () {
    return view('planner');
});
Route::get('/experiments', function () {
    return view('Experiment');
});


Route::get('/blog', 'PostController@index')->name('posts.index');
Route::get('/{slug}', 'PostController@show')->name('posts.show');
Route::get('/{tag}', 'PostController@show')->name('posts.tag');




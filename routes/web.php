<?php

use GuzzleHttp\Middleware;
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
/*Route::get('/about', function () {
    return "This is about page";
});

Route::get('/contact', function () {
    return "Hi thay are the information contact";
});

Route::get('/post/{id}/{name}', function ($id, $name)
{
    return "This is post number: " . $id . "==> ". $name;
});

Route::get('/admin/post/example', array('as'=>'admin.home',function()
{
    $url= route('admin.home');

return "This url is: " . $url;
})); */


//Route::get('/post/{id}', 'PostController@index');

Route::resource('post', 'PostController');

Route::get('/contact', 'PostController@contact');

Route::get('post/{id}/{name}/{password}', 'PostController@show_post');

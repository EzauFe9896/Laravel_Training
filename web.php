<?php

use App\User;
use App\Adress;
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
//Creating data for user
Route::get('/insert', function(){

$user=User::findOrFail(1);

$adress=new Adress(['name'=>'1234 Houston Av NY NY 1218']);

$user->adress()->save($adress);

});

//updating date
Route::get('/update', function(){

    $adress=Adress::where('user_id',1)->first();

    $adress->name='4353 update Av, Alaska';

$adress->save();
});
//Reading Data
Route::get('/read', function(){

    $user=User::finOrFail(1);

    echo $user->adress->name;

});
//Deleting Data
Route::get('/delete', function(){

    $user=User::findOrFail(1);

    $user->adress()->delete();

    return "done";
});

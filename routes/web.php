<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',['as'=>'/login','uses'=> 'AuthController@ShowFormLogin']);
Route::get('login',['as'=> 'login','uses'=>'AuthController@ShowFormLogin']);
Route::post('login', ['as'=>'login_post','uses'=>'AuthController@login'] );
Route::get('logout', ['as'=>'logout','uses'=>'AuthController@logout']);

Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('dashboard',['as'=> 'dashboard','uses'=>'DashboardController@Dashboard']);

    // Users
    Route::get('users',['as'=> 'users','uses'=>'UsersController@Users']);
    Route::post('adduser',['as'=> 'adduser','uses'=>'UsersController@adduser']);
    Route::get('role',['as'=> 'role','uses'=>'UsersController@Role']);
    Route::post('addrole',['as'=> 'addrole','uses'=>'UsersController@addRole']);
    Route::post('showdatarole',['as'=> 'showdatarole','uses'=>'UsersController@showDataRole']);

});
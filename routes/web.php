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
    Route::post('upload_img',['as'=>'upload_img','uses'=> 'UsersController@upload_img']);

    // Master Data
    Route::get('category',['as'=> 'category','uses'=>'MasterDataController@category']);
    Route::post('addcategory',['as'=> 'addcategory','uses'=>'MasterDataController@addcategory']);
    Route::post('showDataCategory',['as'=> 'showDataCategory','uses'=>'MasterDataController@showDataCategory']);
    Route::get('product',['as'=> 'product','uses'=>'MasterDataController@product']);
    Route::post('addproduct',['as'=> 'addproduct','uses'=>'MasterDataController@addproduct']);
    Route::post('showDataproduct',['as'=> 'showDataproduct','uses'=>'MasterDataController@showDataproduct']);
    Route::post('upload_img_prod',['as'=>'upload_img_prod','uses'=> 'MasterDataController@upload_img_prod']);
    Route::get('layanan',['as'=> 'layanan','uses'=>'MasterDataController@layanan']);
    Route::post('addlayanan',['as'=> 'addlayanan','uses'=>'MasterDataController@addlayanan']);
    
    
});
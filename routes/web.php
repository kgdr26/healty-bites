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
// Route::get('/',['as'=>'/login','uses'=> 'AuthController@ShowFormLogin']);

Route::get('/',['as'=>'/landingpage','uses'=> 'LandingPage@Landing']);
Route::get('home',['as'=>'home','uses'=> 'LandingPage@Landing']);
Route::post('realtimetexthome',['as'=> 'realtimetexthome','uses'=>'LandingPage@realtimetexthome']);
Route::get('artikel',['as'=>'artikel','uses'=> 'LandingPage@artikel']);
Route::get('settips',['as'=>'settips','uses'=> 'LandingPage@settips']);
Route::get('vidios',['as'=>'vidios','uses'=> 'LandingPage@vidios']);


Route::get('login',['as'=> 'login','uses'=>'AuthController@ShowFormLogin']);
Route::post('login', ['as'=>'login_post','uses'=>'AuthController@login'] );
Route::get('logout', ['as'=>'logout','uses'=>'AuthController@logout']);
Route::get('register',['as'=> 'register','uses'=>'RegisterController@register']);
Route::post('saveregister',['as'=> 'saveregister','uses'=>'RegisterController@saveregister']);


Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('dashboard',['as'=> 'dashboard','uses'=>'DashboardController@Dashboard']);

    //myprofile
    Route::get('myprofile',['as'=> 'myprofile','uses'=>'MyprofileController@myprofile']);

    // Users
    Route::get('users',['as'=> 'users','uses'=>'UsersController@Users']);
    Route::post('adduser',['as'=> 'adduser','uses'=>'UsersController@adduser']);
    Route::get('role',['as'=> 'role','uses'=>'UsersController@Role']);
    Route::post('addrole',['as'=> 'addrole','uses'=>'UsersController@addRole']);
    Route::post('showdatarole',['as'=> 'showdatarole','uses'=>'UsersController@showDataRole']);
    Route::post('upload_img',['as'=>'upload_img','uses'=> 'UsersController@upload_img']);

    // Master Data
    Route::get('category',['as'=> 'category','uses'=>'MasterDataController@category']);
    Route::post('upload_img_cat',['as'=>'upload_img_cat','uses'=> 'MasterDataController@upload_img_cat']);
    Route::post('addcategory',['as'=> 'addcategory','uses'=>'MasterDataController@addcategory']);
    Route::post('showDataCategory',['as'=> 'showDataCategory','uses'=>'MasterDataController@showDataCategory']);
    Route::get('product',['as'=> 'product','uses'=>'MasterDataController@product']);
    Route::post('addproduct',['as'=> 'addproduct','uses'=>'MasterDataController@addproduct']);
    Route::post('showDataproduct',['as'=> 'showDataproduct','uses'=>'MasterDataController@showDataproduct']);
    Route::post('upload_img_prod',['as'=>'upload_img_prod','uses'=> 'MasterDataController@upload_img_prod']);
    Route::post('viewdataprod',['as'=> 'viewdataprod','uses'=>'MasterDataController@viewdataprod']);
    Route::get('layanan',['as'=> 'layanan','uses'=>'MasterDataController@layanan']);
    Route::post('addlayanan',['as'=> 'addlayanan','uses'=>'MasterDataController@addlayanan']);
    Route::get('contentlayanan',['as'=> 'contentlayanan','uses'=>'MasterDataController@contentlayanan']);
    Route::post('addcontentlayanan',['as'=> 'addcontentlayanan','uses'=>'MasterDataController@addcontentlayanan']);
    Route::get('bahan',['as'=> 'bahan','uses'=>'MasterDataController@bahan']);
    Route::post('addbahan',['as'=> 'addbahan','uses'=>'MasterDataController@addbahan']);
    Route::post('upload_img_bahan',['as'=> 'upload_img_bahan','uses'=>'MasterDataController@upload_img_bahan']);

    // Action Transaksion
    Route::get('admpesanan',['as'=> 'admpesanan','uses'=>'TransaksionController@admpesanan']); 
    Route::post('approve_order',['as'=> 'approve_order','uses'=>'TransaksionController@approve_order']);
    Route::post('cancel_order',['as'=> 'cancel_order','uses'=>'TransaksionController@cancel_order']);
    
    

    // Setting Landing Pag
    Route::get('settlandinghome',['as'=> 'settlandinghome','uses'=>'SettLandingController@settlandinghome']);
    Route::get('setartikel',['as'=> 'setartikel','uses'=>'SettLandingController@setartikel']);
    Route::post('addartikel',['as'=> 'addartikel','uses'=>'SettLandingController@addartikel']);
    Route::get('setips',['as'=> 'setips','uses'=>'SettLandingController@setips']);
    Route::get('setvidio',['as'=> 'setvidio','uses'=>'SettLandingController@setvidio']);
    Route::post('upload_vidio',['as'=> 'upload_vidio','uses'=>'SettLandingController@upload_vidio']);
    Route::post('addvidio',['as'=> 'addvidio','uses'=>'SettLandingController@addvidio']);
    
    
    //Route Customer
    Route::get('cusprod',['as'=> 'cusprod','uses'=>'CustomerController@cusprod']);
    Route::post('createorder',['as'=> 'createorder','uses'=>'CustomerController@createorder']);
    Route::get('cuspesanan',['as'=> 'cuspesanan','uses'=>'CustomerController@cuspesanan']);
    Route::post('upload_img_bukti',['as'=> 'upload_img_bukti','uses'=>'CustomerController@upload_img_bukti']);
    Route::post('addwishlist',['as'=> 'addwishlist','uses'=>'CustomerController@addwishlist']);
    Route::post('conirm_cus_order',['as'=> 'conirm_cus_order','uses'=>'CustomerController@conirm_cus_order']);
    Route::get('cuswishlist',['as'=> 'cuswishlist','uses'=>'CustomerController@cuswishlist']);
    

    // Action Edit
    Route::post('edit',['as'=> 'edit','uses'=>'ActionController@edit']);
    Route::post('delete',['as'=> 'delete','uses'=>'ActionController@delete']);
    Route::post('editimage',['as'=> 'editimage','uses'=>'ActionController@editimage']);
    Route::post('hashPassword',['as'=> 'hashPassword','uses'=>'ActionController@hashPassword']);
    Route::post('showdata',['as'=> 'showdata','uses'=>'ActionController@showdata']);
    Route::post('editvidio',['as'=> 'editvidio','uses'=>'ActionController@editvidio']);
    
});
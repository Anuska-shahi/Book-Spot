<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\UserLogin;

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

Route::namespace('Auth')->group(function(){
    //admin login
Route::get('/adminlog',[AdminController::class,'admin'])->name('log');
Route::post('/loginCheck',[AdminController::class,"login"])->name('logincheck');
Route::get('/dash', [AdminController::class,"dashboardView"])->name('dash');

//user login
Route::post('/userloginCheck',[UserController::class,"userlogin"])->name('usrlogin');
Route::get('/userdash', [UserController::class,"userView"])->name('usrdash');
});

//admin signup
Route::get('/adsignup',[AdminController::class,'signup']);
Route::post('/adsignup',[AdminController::class,'sign'])->name('admin.sign');

Route::get('/admin', [AdminController::class, 'admindash']);


<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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
    //admin-login
Route::get('/adminlog',[AdminController::class,'admin'])->name('log');
Route::post('/loginCheck',[AdminController::class,"login"])->name('logincheck');
//admin-dash
Route::get('/dash', [AdminController::class,"dashboardView"])->name('dash');
//admin-logout
Route::get('/logout', [AdminController::class,"logout"])->name('logout-admin');
});

//user login
Route::get('/userlog',[UserController::class,'userLogin'])->name('userlog');
//user-reg
Route::get('/registration',[UserController::class,'userRegistration']);
Route::post('/register-user',[UserController::class,'registerUser'])->name('register-user');
Route::post('/login-user',[UserController::class,'loginUser'])->name('login-user');
//user-dash
Route::get('/dashboard',[UserController::class,'dashboard'])->name('dash1');
//user-logout
Route::get('/logout-user', [UserController::class,"logoutUser"])->name('logout-user');

//admin signup
Route::get('/adsignup',[AdminController::class,'signup']);
Route::post('/adsignup',[AdminController::class,'sign'])->name('admin.sign');



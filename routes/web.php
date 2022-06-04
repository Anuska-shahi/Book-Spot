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
//admin login
Route::namespace('Auth')->group(function(){
    Route::get('/adminlog',[AdminController::class,'admin'])->name('log');
    Route::post('/loginCheck',[AdminController::class,"login"])->name('logincheck');
    Route::get('/dash', [AdminController::class,"dashboardView"])->name('dash');
    });

Route::get('/Userlogin',[UserController::class,'Userlogin'])->name('Userlogin');
Route::post('/userloginCheck',[UserController::class,'userloginCheck'])->name('userlogin.store');
Route::get('/signup',[UserController::class,'usersignup'])->name('user.signup');
Route::post('/store',[UserController::class,'store'])->name('store');
Route::get('/userdashboard',[UserController::class,'userdashboard'])->name('userdashboard');//->middleware('auth');

<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\UserLogin;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookSpotController;
use App\Http\Controllers\AuthorController;




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
Route::get('/dash', [AdminController::class,"dashboardView"])->name('dash');});


//admin signup
Route::get('/adsignup',[AdminController::class,'signup']);
Route::post('/adsignup',[AdminController::class,'sign'])->name('admin.sign');

//homepage
Route::get('/home', [BookSpotController::class, 'index']);


//books
Route::get('/books', [BookController::class, 'userBook']);
Route::get('/desc/{book}', [BookController::class, 'desc'])->name('desc');
Route::get('/categories/{category}', [BookController::class, 'categories'])->name('categories');


//author routing 
Route::view('author','author');
Route::post('author',[AuthorController::class,'store'])->name('author');
Route::get('author',[AuthorController::class,'print'])->name('author');
Route::get('deleteauth/{id}',[AuthorController::class,'delete'])->name('delete');
Route::get('editauth/{id}',[AuthorController::class,'edit'])->name('edit');
Route::post('editauth',[AuthorController::class,'update'])->name('update');

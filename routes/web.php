<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminBookController;

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
Route::get('/adsignup',[AdminController::class,'signup']);
Route::post('/adsignup',[AdminController::class,'sign'])->name('admin.sign');


//Route::post('/store',[AuthorController::class,'store'])->name('store');
//Route::get('/author',[AuthorController::class,'author'])->name('author');
Route::view('author','author');
Route::post('author',[AuthorController::class,'store'])->name('author');
Route::get('author',[AuthorController::class,'print'])->name('author');
Route::get('deleteauth/{id}',[AuthorController::class,'delete'])->name('delete');
Route::get('editauth/{id}',[AuthorController::class,'edit'])->name('edit');
Route::post('editauth',[AuthorController::class,'update'])->name('update');

Route::view('publication','publication');
Route::post('publication',[PublicationController::class,'store'])->name('publication');
Route::get('publication',[PublicationController::class,'print'])->name('publication');
Route::get('deletepub/{id}',[PublicationController::class,'delete'])->name('delete');
Route::get('editpub/{id}',[PublicationController::class,'edit'])->name('edit');
Route::post('editpub',[PublicationController::class,'update'])->name('update');


Route::view('location','location');
Route::post('location',[LocationController::class,'store'])->name('location');
Route::get('location',[LocationController::class,'print'])->name('location');
Route::get('deleteloc/{id}',[LocationController::class,'delete'])->name('delete');
Route::get('editloc/{id}',[LocationController::class,'edit'])->name('edit');
Route::post('editloc',[LocationController::class,'update'])->name('update');

Route::view('category','category');
Route::post('category',[CategoryController::class,'store'])->name('category');
Route::get('category',[CategoryController::class,'print'])->name('category');
Route::get('deletecat/{id}',[CategoryController::class,'delete'])->name('delete');
Route::get('editcat/{id}',[CategoryController::class,'edit'])->name('edit');
Route::post('editcat',[CategoryController::class,'update'])->name('update');

//adminbook

Route::view('adminbook','adminbook');
Route::get('adminbook',[AdminBookController::class,'print'])->name('adminbook');
Route::get('deletebook/{id}',[AdminBookController::class,'delete'])->name('delete');
Route::post('adminbook',[AdminBookController::class,'store'])->name('adminbook');


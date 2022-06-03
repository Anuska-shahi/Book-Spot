<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminBookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IssuedController;
use App\Http\Controllers\ReturnController;
use App\Http\Controllers\BookSpotController;
use App\Http\Controllers\BookController;


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

//homepage
Route::get('/home', [BookSpotController::class, 'index']);

//Route::post('/store',[AuthorController::class,'store'])->name('store');
//Route::get('/author',[AuthorController::class,'author'])->name('author');\
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

//Author page routing
Route::view('author','author');
Route::post('author',[AuthorController::class,'store'])->name('author');
Route::get('author',[AuthorController::class,'print'])->name('author');
Route::get('deleteauth/{id}',[AuthorController::class,'delete'])->name('delete');
Route::get('editauth/{id}',[AuthorController::class,'edit'])->name('edit');
Route::post('editauth',[AuthorController::class,'update'])->name('update');

//Publication page routing
Route::view('publication','publication');
Route::post('publication',[PublicationController::class,'store'])->name('publication');
Route::get('publication',[PublicationController::class,'print'])->name('publication');
Route::get('deletepub/{id}',[PublicationController::class,'delete'])->name('delete');
Route::get('editpub/{id}',[PublicationController::class,'edit'])->name('edit');
Route::post('editpub',[PublicationController::class,'update'])->name('update');

//Location page routing
Route::view('location','location');
Route::post('location',[LocationController::class,'store'])->name('location');
Route::get('location',[LocationController::class,'print'])->name('location');
Route::get('deleteloc/{id}',[LocationController::class,'delete'])->name('delete');
Route::get('editloc/{id}',[LocationController::class,'edit'])->name('edit');
Route::post('editloc',[LocationController::class,'update'])->name('update');

//Category page routing
Route::view('category','category');
Route::post('category',[CategoryController::class,'store'])->name('category');
Route::get('category',[CategoryController::class,'print'])->name('category');
Route::get('deletecat/{id}',[CategoryController::class,'delete'])->name('delete');
Route::get('editcat/{id}',[CategoryController::class,'edit'])->name('edit');
Route::post('editcat',[CategoryController::class,'update'])->name('update');

//book issued
Route::get('/issued',[IssuedController::class,'issueBook'])->name('book-issued');

//book returned
Route::get('/returned',[ReturnController::class,'returnBook'])->name('book-returned');


//Adminbook page routing
Route::view('adminbook','adminbook');
Route::get('adminbook',[AdminBookController::class,'print'])->name('adminbook');
Route::get('deletebook/{id}',[AdminBookController::class,'delete'])->name('delete');
Route::post('adminbook',[AdminBookController::class,'store'])->name('adminbook');


//user books
Route::get('/books', [BookController::class, 'userBook']);
Route::get('/desc/{book}', [BookController::class, 'desc'])->name('desc');
Route::get('/categories/{category}', [BookController::class, 'categories'])->name('categories');


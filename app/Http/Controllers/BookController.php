<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Category;
use App\Models\Author;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class BookController extends Controller
{
    //
    function adminBook(){
        $data=Book::all();
        return view('adminbooks',['books'=>$data]);
    }
    function userBook(){
        // $data = Book::join('categories', 'categories.id', '=', 'books.category_id')
        // ->get();
        $data = Book::all();
        $cat = Category::all();
        //$id = Book::all();
        return view('books')->with(['books'=>$data])->with(['cat'=>$cat]);
    }
        
    function desc()
    {
        $a=Book::all();
        $auth=Author::all();
        return view('description',['books'=>$a],['auth'=>$auth]);
    } 
}


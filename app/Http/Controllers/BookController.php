<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Category;
use App\Models\Author;
use App\Models\Publication;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    function categories(){
        $data=Book::all();
        $cat = Category::all();
        $count=1;
        return view('books.categories',compact('data','cat','count'));
    }
    function userBook(){
        $data = Book::all();
        $cat = Category::all();
        $catcount=Category::count();
        $count=0;
        // for($i=0;$i<=$catcount;$i++){
        //     $data = DB::table('books')->where('category_id', '=', '$i')->get();
        // //     $colcount=$data->count();
        // }
       
        return view('books.books',compact('data','cat','catcount','count')); 
    }
    function desc()
    {
        $a=Book::all();
        $auth=Author::all();
        $pub=Publication::all();
        return view('books.description',['books'=>$a],['auth'=>$auth]);
    }
 
}


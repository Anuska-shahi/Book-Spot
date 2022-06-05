<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    public function index()
    {
        //
    }
    public function results()
    {
        return view('books.search');
    }
    public function search(Request $request)
    {
        $search=$request->search;
         if($search!='')
         {
            $data=DB::table('books')->
            select('books.id','books.title','books.image','publications.name','authors.pen_name','authors.first_name','authors.last_name')
            ->join('categories','books.category_id','=','categories.id')
            ->join('publications','books.publisher_id','=','publications.id')
            ->join('authors','books.author_id','=','authors.id')
             ->where('title','LIKE','%'.$search."%")
             ->orwhere('name','LIKE','%'.$search."%")
             ->orwhere('pen_name','LIKE','%'.$search."%")
             ->orwhere('first_name','LIKE','%'.$search."%")
             ->orwhere('last_name','LIKE','%'.$search."%")
             ->get();
             return view('books.search',compact('data'));
         }
         return view('books.search');
       
    }
}

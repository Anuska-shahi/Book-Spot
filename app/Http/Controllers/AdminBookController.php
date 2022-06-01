<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Author;
use App\Models\Publication;
use App\Models\Location;



use DB;

class AdminBookController extends Controller
{
    public function print(){
    $data= DB::table('books')
    ->select('books.id','books.title','books.edition','books.author_id','books.publisher_id','books.location_id','books.stock','books.status','categories.genre','publications.name','authors.pen_name','locations.block')
    ->join('categories','books.category_id','=','categories.id')
    ->join('publications','books.publisher_id','=','publications.id')
    ->join('authors','books.author_id','=','authors.id')
    ->join('locations','books.location_id','=','locations.id')
    ->get()
    ;
    $author=Author::all();
    $category=Category::all();
    $publication=Publication::all();
    $location=Location::all();
    // return view('adminbook',['adminbooks'=>$data]);
    return view('adminbook',compact('data','author','category','publication','location'));
    // return view('adminbook',['adminbooks'=>$data]);
  
    }

    public function delete($id)
    {
        $data=Book::find($id);
        $data->delete();
        return redirect('adminbook');
    }

    public function store(Request $req){
        $adminbook=new Book;
        $adminbook->id=$req->id;
        $adminbook->title=$req->title;
        $adminbook->edition=$req->edition;
        $adminbook->author_id=$req->author_id;
        $adminbook->category_id=$req->category_id;
        $adminbook->publisher_id=$req->publisher_id;
        $adminbook->location_id=$req->location_id;
        $adminbook->stock=$req->stock;        
        $adminbook->image=$req->image;        
        $adminbook->status=$req->status;
        $adminbook->description=$req->description;
        $adminbook->save();
        return redirect('adminbook');
    }
    

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function store(Request $req)
    {
        $category=new Category;
        $category->id=$req->id;
        $category->genre=$req->genre;
        $category->save();
        return redirect('category');
    }
 
    public function print(){
        $data= Category::all();
        return view('category',['categories'=>$data]);
     }

     public function edit($id)
     {
         $data= Category::find($id);
         return view('editcat',['data'=>$data]);
     }
     public function delete($id)
     {
         $data=Category::find($id);
         $data->delete();
         return redirect('category');
     }

     public function update(Request $req)
    {
        $data=Category::find($req->id);
        $data->id=$req->id;
        $data->genre=$req->genre;
        $data->save();
        return redirect('category');
    }
}

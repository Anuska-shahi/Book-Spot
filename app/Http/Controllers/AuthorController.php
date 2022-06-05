<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }
    public function print(){
       $data= Author::all();
       return view('author',['authors'=>$data]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $author=new Author;
        $author->id=$req->id;
        $author->first_name=$req->first_name;
        $author->middle_name=$req->middle_name;
        $author->last_name=$req->last_name;
        $author->pen_name=$req->pen_name;
        $author->save();
        return redirect('author');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data= Author::find($id);
        return view('editauth',['data'=>$data]);
    }
    public function delete($id)
    {
        $data=Author::find($id);
        $data->delete();
        return redirect('member1');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $data=Author::find($req->id);
        $data->id=$req->id;
        $data->first_name=$req->first_name;
        $data->middle_name=$req->middle_name;
        $data->last_name=$req->last_name;
        $data->pen_name=$req->pen_name;
        $data->save();
        return redirect('author');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;


class PublicationController extends Controller
{
    //
    public function store(Request $req)
    {
        $publication=new Publication;
        $publication->id=$req->id;
        $publication->name=$req->name;
        $publication->save();
        return redirect('publication');
    }
 
    public function print(){
        $data= Publication::all();
        return view('publication',['publications'=>$data]);
     }

     public function edit($id)
     {
         $data= Publication::find($id);
         return view('editpub',['data'=>$data]);
     }
     public function delete($id)
     {
         $data=Publication::find($id);
         $data->delete();
         return redirect('publication');
     }

     public function update(Request $req)
    {
        $data=Publication::find($req->id);
        $data->id=$req->id;
        $data->name=$req->name;
        $data->save();
        return redirect('publication');
    }
}

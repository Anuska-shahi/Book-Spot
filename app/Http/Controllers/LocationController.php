<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    //
    public function store(Request $req)
    {
        $location=new Location;
        $location->id=$req->id;
        $location->block=$req->block;
        $location->save();
        return redirect('location');
    }
 
    public function print(){
        $data= Location::all();
        return view('location',['locations'=>$data]);
     }

     public function edit($id)
     {
         $data= Location::find($id);
         return view('editloc',['data'=>$data]);
     }
     public function delete($id)
     {
         $data=Location::find($id);
         $data->delete();
         return redirect('location');
     }

     public function update(Request $req)
    {
        $data=Location::find($req->id);
        $data->id=$req->id;
        $data->block=$req->block;
        
        $data->save();
        return redirect('location');
    }
}

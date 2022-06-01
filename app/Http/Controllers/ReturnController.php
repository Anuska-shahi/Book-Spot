<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\Borrow_record;
use DB;

class ReturnController extends Controller
{
    public function returnBook()
    {
    
        $result=DB::table('borrow_records')
        ->select ('borrow_records.stat','borrow_records.returned_date','books.title','users.name')
        ->join('books','borrow_records.book_id','=','books.id')
        ->join('users','borrow_records.user_id','=','users.id')
        ->get();
        $data['result']=$result;
         return view('admin.return',$data);
      
    }
}

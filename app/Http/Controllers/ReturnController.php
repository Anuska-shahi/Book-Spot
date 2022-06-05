<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\Borrow_record;
use Illuminate\Support\Facades\DB;

class ReturnController extends Controller
{
    public function returnBook()
    {
    
        $result=DB::table('borrow_records')
        ->select ('borrow_records.id','borrow_records.status','borrow_records.returned_date','borrow_records.issued_date','borrow_records.due_date','books.title','users.name','users.email')
        ->join('books','borrow_records.book_id','=','books.id')
        ->join('users','borrow_records.user_id','=','users.id')
        ->get();
        $data['result']=$result;
         return view('admin.return',$data);
      
    }
}

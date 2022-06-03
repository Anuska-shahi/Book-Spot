<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use App\Models\Admin;
use App\Models\Borrow_record;
use DB;
use Session;
class IssuedController extends Controller
{
    public function issueBook()
    {
    
        $result=DB::table('borrow_records')
        ->select ('borrow_records.status','borrow_records.issued_date','books.title','users.name')
        ->join('books','borrow_records.book_id','=','books.id')
        ->join('users','borrow_records.user_id','=','users.id')
        ->get();
        $data['result']=$result;
         return view('admin.issued',$data);
      
    }
}

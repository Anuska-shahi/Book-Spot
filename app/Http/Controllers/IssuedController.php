<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use App\Models\Admin;
use App\Models\Borrow_record;
use Illuminate\Support\Facades\DB;
use Session;
use Carbon\Carbon;
class IssuedController extends Controller
{
    public function issueBook()
    {
    
        $result=DB::table('borrow_records')
        ->select ('borrow_records.status','borrow_records.id','borrow_records.issued_date','borrow_records.due_date','books.title','users.name','users.email')
        ->join('books','borrow_records.book_id','=','books.id')
        ->join('users','borrow_records.user_id','=','users.id')
        ->get();
        $data['result']=$result;
         return view('admin.issued',$data);
      
    }
    public function returned(Request $request)
    {
        $rec=Borrow_record::find($request->id);
        $rec->status = $request->status;
        $rec->returned_date= Carbon::now()->toDateTimeString();
        $rec->save();
        return response()->json(['success'=>'Books returned']);
    }
    public function issued(Request $request)
    {
        $rec=Borrow_record::find($request->id);
        $rec->status = $request->status;
        $rec->issued_date= Carbon::now()->toDateTimeString();
        $rec->due_date= Carbon::now()->addDays(15)->toDateTimeString();
        $rec->save();
        return response()->json(['success'=>'Books issued']);
    }
    public function store($book_id,$user_id){
        $issuebook=new Borrow_record;
        $issuebook->book_id=$book_id;
        $issuebook->user_id=$user_id;
        $issuebook->save();
        return redirect('dash1');
    }
}

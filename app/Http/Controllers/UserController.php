<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use App\Models\Admin;
use Hash;
use Session;
use DB;
class UserController extends Controller
{
    //user login
    public function userLogin()
    {
        return view('user.userlogin');
    }
    //user reg
    public function userRegistration()
    {
        return view('user.usersignup');
    }
    //user register
    public function registerUser(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:12',
            'address'=>'required',
            'phone'=>'required',
            'dob'=>'required',
        ]);
        $user =new User();
        $user->name=$request->name;
        $user->first_name=$request->fname;
        $user->last_name=$request->lname;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->address=$request->address;
        $user->phone_no=$request->phone;
        $user->dob=$request->dob;
        $res=$user->save();
        if($res)
        {
            return redirect()->route('userlog');
        }
        else
        {
            return back()->with('fail','Something wrong');
        }

    }
    //user login
    public function loginUser(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12',
        ]);
        $user = User::where('email','=',$request->email)->first();
        if($user)
        {
            if(Hash::check($request->password,$user->password))
            {
                $request->session()->put('loginId',$user->id);
                return redirect()->route('dash1');
            }
            else{
                return back()->with('fail','password not matched');
            }
        }
        else{
            return back()->with('fail','Not registered');
        }
    }
    //dashboard
    public function dashboard(Request $request)
    {
        $data=array();
        if(Session::has('loginId'))
        {
        $data=User::where('id','=', Session::get('loginId'))->first();
        $result=DB::table('users')
        -> select ('users.id','users.name','users.email','borrow_records.issued_date','borrow_records.due_date'
                    ,'borrow_records.returned_date','borrow_records.stat','books.title')
        ->join('borrow_records','users.id','=','borrow_records.user_id')
        ->join('books','borrow_records.book_id','=','books.id')
        ->where('users.id',Session::get('loginId'))
        ->get();
        $data['result']=$result;
         return view('user.userdash',$data);
        }
        
    }

    //logout
    public function logoutUser()
    {
        if(Session::has('loginId'))
        {
            Session::pull('loginId');
            return redirect('userlog');
        }
    }
}
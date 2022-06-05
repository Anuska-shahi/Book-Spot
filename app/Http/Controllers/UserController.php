<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $members=User::all();
        return view('member',compact('members'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data= User::find($id);
        return view('edituser',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data=User::find($request->id);
        $data->id=$request->id;
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->address=$request->address;
        $data->phone_no=$request->phone_no;
        $data->dob=$request->dob;
        $data->email=$request->email;
        $data->save();
        return redirect('adminmember');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=User::find($id);
        $data->delete();
        return redirect('adminmember');
    }
    public function member()
    {
        $members=User::all();
        return view('member1',compact('members'));
    }
    public function status(Request $request)
    {
        $user=User::find($request->user_id);
        $user->active = $request->status;
        $user->save();
        return response()->json(['success'=>'Status change']);
    }

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
            if($user->active=='yes'){
            if(Hash::check($request->password,$user->password))
            {
                $request->session()->put('loginId',$user->id);
                Auth::attempt($request->except('_token'));
                return redirect()->route('dash1');
            }
            else{
                return back()->with('fail','password not matched');
            }
            }
            else{
                return back()->with('fail','This account is not active');
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
                    ,'borrow_records.returned_date','borrow_records.status','books.title')
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
            return redirect()->route('userlog');
        }
    }
}

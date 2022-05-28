<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Session;
class UserController extends Controller
{
    //user login
    public function login()
    {
        return view('login');
    }
    public function registration()
    {
        return view('signup');
    }
    public function registerUser(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:12',
        ]);
        $user =new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $res=$user->save();
        if($res)
        {
            return back()->with('success','You have registered');
        }
        else
        {
            return back()->with('fail','Something wrong');
        }

    }
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
                return redirect('dashboard');
            }
            else{
                return back()->with('fail','password not matched');
            }
        }
        else{
            return back()->with('fail','Not registered');
        }
    }
    public function dashboard()
    {
        return "Welcome to dashboard";
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    // public function store(Request $request)
    // {
    //     //dd($request);
    //     $userStore=new User();
    //     $userStore->name=$request->fname;
    //     $userStore->name=$request->lname;
    //     $userStore->dob=$request->dob;
    //     $userStore->name=$request->name;
    //     $userStore->email=$request->email;
    //     $userStore->password = bcrypt($request->password);
    //     //$userStore = $post->comments()->create($userStore);
    //     //$user=User::create(["name"=>$request->name,"email"=>$request->email,"password"=>bcrypt($request->password)]);
    //     $userStore->save();
    //     Mail::to($request->email)->send(new RegisterNotification());
    //     //dd($user);
    //     return redirect()->route('Userlogin'); 
    // }

    public function Userlogin()
    {
        return view('Userlogin');
    }

    public function UserloginCheck(Request $request)
    {
        // dd($request);
        // if (Auth::attempt($credentials=$request->except('_token')))
        // {
        //     $request->session()->regenerate();
        //     return redirect()->route('dashboard');
        // }
        // else
        // {
        //     return redirect()->route('Userlogin');
        // }
        return redirect()->route('userdashboard');
        // return view('userdashboard');
    }

    public function usersignup()
    {
        return view('signup');
    }

    public function userdashboard()
    {
        return redirect()->route('userdashboard');
    }

    public function store(Request $request)
    {
        //dd($request);
        $userStore=new User();
        $userStore->first_name=$request->fname;
        $userStore->last_name=$request->lname;
        $userStore->address=$request->address;
        $userStore->phone_no=$request->phone;
        $userStore->dob=$request->dob;
        $userStore->name=$request->name;
        $userStore->email=$request->email;
        $userStore->password=bcrypt($request->password);
        $userStore->save();
        return redirect()->route('Userlogin');
    }
}

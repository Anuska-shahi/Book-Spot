<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Session;
class AdminController extends Controller
{
    //
    //loginform
    public function admin()
    {
        return view('admin.adminlogin');
    }
    //login validation
   private function validator(Request $request)
{
    //validation rules.
    $rules = [

        'email'    => 'required|email|exists:admins|min:5|max:191',
        'password' => 'required|string|min:4|max:255',
    ];
    //validate the request.
    $request->validate($rules);
}
public function login(Request $request)
{
    $this->validator($request);
    
    if(Auth::guard('admin')->attempt($request->only('email','password'),$request->filled('remember'))){
        //Authentication passed...
        return redirect('dash');
    }

    //Authentication failed...
    return $this->admin();
}

//dashboard
    public function dashboardView()
    {
        return view('admin');
    }

    //logout
    public function logout(Request $request)
    {
       session()->flush();
       return redirect()->route('log');
    }

    //signupform
    public function signup()
    {
        return view('admin.adminsignup');
    }
    
    //signup data
    public function sign(Request $request)
    {
        //dd($request);
        $admin= new Admin();
        $admin-> email=$request->email;
        $admin-> username=$request->name;
        $admin->password=bcrypt($request->password);
        $admin->save();
        return redirect()->route('log');
    }
}

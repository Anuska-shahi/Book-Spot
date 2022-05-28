<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminController extends Controller
{
    //
    //loginform
    public function admin()
    {
        return view('admin.adminlogin');
    }

    // public function loginCheck(Request $request)
    // {
    //     // // dd($request);
    //     $credentials=$request->except('_token');;
    //     if (Auth::attempt($credentials))  {
    //         $request->session()->regenerate();
 
    //         return redirect()->route('dashboard.dash');
    //     }
    //     else
    //     {
    //         return redirect()->route('admin.login');
    //     }
    // }

    //login validation
   private function validator(Request $request)
{
    //validation rules.
    $rules = [
        'email'    => 'required|email|exists:admins|min:5|max:191',
        'password' => 'required|string|min:4|max:255',
    ];

    //custom validation error messages.
    $messages = [
        'email.exists' => 'These credentials do not match our records.',
    ];

    //validate the request.
    $request->validate($rules,$messages);
}
public function login(Request $request)
{
    $this->validator($request);
    
    if(Auth::guard('admin')->attempt($request->only('email','password'),$request->filled('remember'))){
        //Authentication passed...
        return redirect()
            ->intended(route('dash'))
            ->with('status','You are Logged in as Admin!');
    }

    //Authentication failed...
    return $this->admin();
}
function admindash()
    {
        return view('admin');
    }


//dashboard
    public function dashboardView()
    {
        return view('dashboard.admindash');
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
        return redirect()->route('admin.log');
    }
  
// }
}

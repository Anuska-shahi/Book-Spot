<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function user()
    {
        return view('admin.adminlogin');
    }
    // public function create(Request $request)
    // {
    //     $user=new User();
    //     $user->name=$request->name;
    //     $user->first_name=$request->first_name;
    //     $user->last_name=$request->last_name;
    //     $user->email=$request->email;
    //     $user->password=Hash::make($request->password);
    //     $user->address=$request->address;
    //     $user->phone_no=$request->phone_no;
    //     $user->dob=$request->dob;
    //     $query=$user->save();
    //     if($query)
    //     {
    //         return back()->with('sucess','You have entered data');
    //     }
    //     else{
    //         return back()->with('fail','Something is wrong');

    //     }

    // }
    private function validator(Request $request)
    {
        //validation rules.
        $rules = [
            'email'    => 'required|email|exists:users|min:5|max:191',
            'password' => 'required|string|min:4|max:255',
        ];
    
        //custom validation error messages.
        $messages = [
            'email.exists' => 'These credentials do not match our records.',
        ];
    
        //validate the request.
        $request->validate($rules,$messages);
    }
    public function userlogin(Request $request)
    {
        $this->validator($request);
        
        if(Auth::guard('web')->attempt($request->only('email','password'),$request->filled('remember'))){
            //Authentication passed...
            return redirect()->route('usrdash');
        }
    
        //Authentication failed...
        return $this->user();
    }

    public function userView()
    {
        return view('dashboard.userdash');
    }
}

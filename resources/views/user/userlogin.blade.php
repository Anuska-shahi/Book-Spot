@extends('layout')
@section('title','User Login')
@section('content')

 <!-- userlogin -->
 <section class="user-login">
 <button class="login"><a href="/adminlog">Admin login</a></button>
  <form method="post" class="usr" action="{{route('login-user')}}">
  @csrf   
  @if (Session::has('success'))
    <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if (Session::has('fail'))
    <div class="alert alert-danger">{{Session::get('fail')}}</div>
    @endif
  <h2>User Login</h2>
      
      <div class="user" id="textbox2">
        <i class="fa fa-user"><input type="text" name="email" value="{{old('email')}}"placeholder="Email"></i>
      </div>
      <span class="text-danger">@error('email'){{$message}}@enderror</span>

    
      <div class="psw" id="textbox2">
        <i class="fa fa-key">
        <input type="password" name="password" placeholder="Password"></i>

      </div>
      <span class="text-danger">@error('password'){{$message}}@enderror</span>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me">Remember me
        </label><br/>
      </div>
      <button type="submit" class="sub">Submit</button><br/>
      <a href="/registration">New User?Sign up</a><br/>
  </form> 
</section>

@stop
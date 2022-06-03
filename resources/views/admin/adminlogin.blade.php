@extends('layout')
@section('title','Admin Login')
@section('content')
  <!--admin login-->
<section class="admin-form">
  <button class="login"><a href="/userlog">User login</a></button>
    <form method="post" class="admin" action="{{route('logincheck')}}">
      @csrf
      @if (Session::has('success'))
    <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if (Session::has('fail'))
    <div class="alert alert-danger">{{Session::get('fail')}}</div>
    @endif
        <h2>Admin Login</h2>
        <div class="user" id="textbox">
          <i class="fa fa-user"><input type="text" name="email" placeholder="Email" ></i>
        </div>
        <span class="text-danger">@error('email'){{$message}}@enderror</span>

        <div class="psw" id="textbox">
          <i class="fa fa-key">
          <input type="password" name="password" placeholder="Password"></i>
        </div>
        <span class="text-danger">@error('password'){{$message}}@enderror</span>

        <div class="checkbox mb-3">
            <label>
              <input type="checkbox" placeholder="remember-me">Remember me
            </label><br/>
          </div>
        <button type="submit" class="sub">Submit</button>

    </form> 
</section>
@stop
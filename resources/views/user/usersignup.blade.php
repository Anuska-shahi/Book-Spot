@extends('layout')
@section('title','Signup')
@section('content')
<section class="user-signup">
<form method="POST" action="{{route('register-user')}}" name="theform">
@csrf    
@if(Session::has('success'))
<div class="alert alert-success">{{Session::get('success')}}</div>
@endif
@if(Session::has('fail'))
<div class="alert alert-fail">{{Session::get('fail')}}</div>
@endif
<h3>Sign Up</h3>
    <div class="fname" id="textbox">
      First Name: <input type="text" name="fname" placeholder="FirstName" required><br/>
    </div>
  <div class="lname" id="textbox">  
   Last Name: <input type="text" name="lname" placeholder="Last Name" required><br/>
  </div>
  <div class="email" id="textbox">
   Email: <input type="text" name="email"placeholder="Email" required><br/>
  </div>
  <div class="name" id="textbox">
      Username: <input type="text" name="name" placeholder="Username" required><br/>
    </div>
  <div class="pswd" id="textbox">
    Password: <input type="password" name="password" placeholder="Password" required><br/>
  </div>
  <div class="add" id="textbox">
    Address: <input type="text" name="address"placeholder="Address"><br/>
  </div>
  <div class="phn" id="textbox">
    Phone number: <input type="number" name="phone" placeholder="Phone Number" required><br/>
  </div>
  <div class="dob" id="textbox">
    DOB: <input type="date" name="dob" placeholder="DOB" required><br/>
  </div>
  <button type="submit" class="sub">Submit</button>
</form>
    
</section>
@stop

@extends('layout')
@section('content')
<section class="cont">
    <form method="post" action="{{route('admin.sign')}}">
    @csrf 
    <h1>Sign Up</h1>
     
        <div class="email" id="textbox2">
            Email: <input type="email" name="email" ><br/><br/>
        </div>
        <div class="user"id="textbox2">
            Username:<input type="text" name="name"><br/><br/>
        </div>
        
        <div class="pass" id="textbox2">
        Password:<input type="password" name="password"><br/><br/>
        </div>
        <div class="pass" id="textbox2">
            Repeat your password:<input type="password" name="password"><br/><br/>
        </div>
       
        <button type="submit" class="sub">Submit</button><br/>
    </form>
    
</section>
@stop

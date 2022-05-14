 @extends('layout')
 @section('title','Login')
 @section('content')

 </div>
  <section class="con">
  <section class="cont">
    <section class="content">
    <form method="post" class="admin">
        <h2>Admin Login</h2>
        <div class="user" id="textbox">
          <i class="fa fa-user"><input type="text" name="name" placeholder="Username" ></i>
        </div>
        <div class="psw" id="textbox">
          <i class="fa fa-key">
          <input type="password" name="password" placeholder="Password"></i>
        </div>
        <div class="checkbox mb-3">
            <label>
              <input type="checkbox" placeholder="remember-me">Remember me
            </label><br/>
          </div>
        <button type="submit" class="sub">Submit</button>
        <a href="/signup">New librarian?Sign up</a><br/>
    </form> 
  </section>
</section>
<section class="cont">
  <section class="content1">
  <form method="post" class="usr">
      <h2>User Login</h2>
      
      <div class="user" id="textbox2">
        <i class="fa fa-user"><input type="text" name="name" placeholder="UserName"></i>
      </div>
    
      <div class="psw" id="textbox2">
        <i class="fa fa-key">
        <input type="password" name="password" placeholder="password"></i>
      </div>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me">Remember me
        </label><br/>
      </div>
      <button type="submit" class="sub">Submit</button><br/>
      <a href="/signup">New User?Sign up</a><br/>
  </form> 
</section>
</section>
  </section>
  @stop

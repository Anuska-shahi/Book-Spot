<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Sign up</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/adminform.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body>
  <!--navbar-->
    <div class="b-example-divider"></div>

  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img src="/img/icon.png" width="50" height="40" alt="logo" />
        <!-- <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg> -->
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="home.html" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="book.html" class="nav-link px-2 link-dark">Books</a></li>
      </ul>

      <div class="col-md-3 text-end">
      
       <button type="button" class="btn btn-primary"><a href="loginsignup.html"><font color="red">Login / Sign up</font></a></button>
      </div>
    </header>
  </div>
  <!--admin login-->
<section class="con">
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
</body>
</html>
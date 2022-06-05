<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Sign up</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="{{asset('css/adminform.css')}}"> -->
    <link rel="stylesheet" href="{{asset('css/admindash.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body>
    <div class="b-example-divider"></div>

    <header class="p-3 bg-dark text-white ">

    <div class="container">
      
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <div class="col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0"><a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src="/img/logo.png" width="150" height="50" alt="logo" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </a></div>
          <div style="margin: 10px; font-size: 20px;"><b>
           @if(Auth::guard('admin')->check())
           Hello {{Auth::guard('admin')->user()->username}}
           @endif </b>
        </div> 
          <div class="text-end">
            <button style="background-color:grey; border-color:grey" type="button" class="btn btn-warning">Sign-up</button>
          </div>
        </div>
      </div>
    </header>
    <section class="content">
      <div class="sidebar">
        <div class="text">
          <ul>
              <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Books</a></li>
              <li><a href="#">Authors</a></li>
              <li><a href="#">Publication</a></li>    
              <li><a href="#">location</a></li>    
              <li><a href="#">Categories</a></li>
              <li><a href="{{route('admin.member')}}">Members</a></li>
              <li><a href="#">Book-issue</a></li>
              <li><a href="#">Return</a></li>
              <li><a href="#">Logout</a></li>
          </ul>
        </div> 
        
      </div>
      <!-- <div><img src="/img/li3.jpg" height="2000px" width="100%"></div> -->
    </section>
</body>
</html>
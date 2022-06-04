<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel='stylesheet' href="{{asset('/css/layout.css')}}">
    <link rel='stylesheet' href="{{asset('/css/BooksStyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/adminform.css')}}"> 
    <link rel="stylesheet" href="{{asset('css/usersignup.css')}}">
    <link rel="stylesheet" href="{{asset('css/usertable.css')}}">
    <link rel="stylesheet" href="{{asset('css/userlogin.css')}}"> 

</head>
<body>
  <div class="b-example-divider"></div>

  <header class="p-3 bg-dark text-white sticky-top">

    <div class="container">
      
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/home" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src='{{asset("images/logo.png")}}' width="150" height="50" alt="logo" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </a>
      
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          
          <li><a href="/home" class="nav-link px-2 text-white">Home</a></li>&nbsp;&nbsp;
          <li><a href="/books" class="nav-link px-2 text-white">Books</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <font color="white">Browse</font>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{route('categories',1)}}">Fiction</a>
              <a class="dropdown-item" href="{{route('categories',2)}}">Non-fiction</a>
              <a class="dropdown-item" href="{{route('categories',3)}}">Thriller</a>
              <a class="dropdown-item" href="{{route('categories',4)}}">Biography</a>
              <a class="dropdown-item" href="{{route('categories',5)}}">Horror</a>

            </div>
          </li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-white bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <a href="/adminlog"><button type="button" style="background-color:white; border-color:grey" class="btn btn-outline-light me-2"><font color="black">Login</font>
          </button></a>
          <a href="/registration"><button style="background-color:grey; border-color:grey" type="button" class="btn btn-warning">Sign-up</button></a>
        </div>
      </div>
    </div>

  </header>
 
  <!-- end header -->
  @yield('content')
 <!-- start footer -->
 @yield('footer')
</body>
</html>
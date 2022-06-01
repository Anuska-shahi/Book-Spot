<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="index.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel='stylesheet' href="{{asset('/css/layout.css')}}">
    <link rel='stylesheet' href="{{asset('/css/BooksStyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/adminform.css')}}">
    <link rel="stylesheet" href="{{asset('css/dash.css')}}">
    <link rel="stylesheet" href="{{asset('css/usersignup.css')}}">
    <script src="{{asset('js/navbar.js')}}"></script>



</head>
<body>
  <div class="b-example-divider"></div>

  <header class="p-3 bg-dark text-white sticky-top">

    <div class="container">
      
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src='{{asset("images/logo.png")}}' width="150" height="50" alt="logo" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </a>
      
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          
          <li><a href="/home" class="nav-link px-2 text-white">Home</a></li>&nbsp;&nbsp;
          <li><a href="/books" class="nav-link px-2 text-white">Books</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <font color="white">Browser</font>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{route('categories',1)}}">Fiction</a>
              <a class="dropdown-item" href="{{route('categories',2)}}">Non-fiction</a>
              <a class="dropdown-item" href="{{route('categories',3)}}">Thriller</a>
            </div>
          </li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-white bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" style="background-color:white; border-color:grey" class="btn btn-outline-light me-2"><font color="black">Login</font>
          </button>
          <button style="background-color:grey; border-color:grey" type="button" class="btn btn-warning">Sign-up</button>
        </div>
      </div>
    </div>

  </header>
 
  <!-- end header -->
  @yield('content')
 <!-- start footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>About</h6>
          <p class="text-justify">The Book Spot Library serves the city of Kathmandu. TBS is a cozy yet comfortable place that smells like books which our people are going to love. In addition to books, magazines, music, and video, TBS also offers science tools, board games, puzzles, art prints, giant games, and much more for checkout. Our library is the perfect spot for our bibliophiles to come and enjoy a peaceful time among their favourite books.</p>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Location</h6>
          <ul class="footer-links">
            <li>Thamel, Kathmandu</li>
            <li>24-Street,</li>
            <li>Near Kumari temple</li>
          </ul>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Contact us</h6>
          <ul class="footer-links">
            <li>Phone no:</li>
            <li>9836399263</li>
            <li>01-6383287</li>
            <li>Email:</li>
            <li>thebookspot34@gmail.com</li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2009 All Rights Reserved by 
        theBookStore
          </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter" href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a></li>
            <li><a class="linkedin" href="https://np.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>   
          </ul>
        </div>
      </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
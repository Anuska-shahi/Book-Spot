<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link href="css/layout.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel='stylesheet' href="{{asset('/css/layout.css')}}">
    <link rel='stylesheet' href="{{asset('/css/BooksStyle.css')}}">
    <!-- <script src="{{asset('/js/BookHover.js')}}"></script> -->
    <link rel='stylesheet' href="{{asset('/css/form.css')}}">
    <!-- <script src="{{asset('/js/onclickfont.js')}}"></script> -->

</head>
<body>
    <div class="b-example-divider"></div>
<!-- header -->
  <div class="container" >
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/home" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img src='{{asset("images/icon.png")}}' width="50" height="40" alt="logo" style="padding-right:0%" >
        <div class="logo"> <p>the book spot</p></div>
        <!-- <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg> -->
      </a>

     
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/home" class="nav-link px-2 link-secondary" > Home</a></li>
        <li><a href="/books" class="nav-link px-2 link-dark">Books</a></li>
     
      </ul>
       <div class="col-md-3 text-end" id ="change">
        
        <button type="button" class="btn btn-primary"><a href="/adminlog"><font color="white">Login / Sign up</font></a></button>
      </div>

    
    </header>
  </div>
  <!-- end of header -->
  @yield('content')

  <!-- footer -->
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
</body>
</html>
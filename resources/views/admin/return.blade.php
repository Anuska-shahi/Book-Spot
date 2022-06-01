
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sign up</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
    <link rel="stylesheet" href="{{asset('css/return.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body margin="0">
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
     <button> <font color="black">  <a href="logout">logout</a></font>
   
      </button>
  </header>
</div>
<section class="sidebar">
      <div class="text">
        <ul>
        <img src="/img/icon.png" width="50" height="40" alt="logo" class="image"><h4>The book spot</h4></img>
            <li><a href="#">Members</a></li>
            <li><a href="#">Books</a>
            <ul>
              <li><a href="#">Authors</a></li>
              <li><a href="#">Publication</a></li>    
              <li><a href="#">location</a></li>    
              <li><a href="#">Categories</a></li>
                 
            </ul>
            </li>
            <li><a href="/issued">Book-issue</a></li>
            <li><a href="/returned">Return</a></li>
            <li><a href="/logout">Logout</a></li>
        </ul>
      </div>
    </section>
<div class="return-cont">
    <div class="row">
    <h4><u>Returned Book List</u></h4>
        <table class="return-table">
        <thead >
            <th>User Name</th>
            <th>Book Title</th>
            <th>Returned Date</th>
        </thead>
        <tbody>
        @foreach($result as $row)
            <tr>
            <td>{{$row->name}}</td>
            <td>{{$row->title}}</td>
            <td>{{$row->returned_date}}</td>
            </tr>
            @endforeach
        </tbody>
</table>
    </div>
</div>
    </body>
    </html>
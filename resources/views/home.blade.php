@section('title','Home')
@section('content')

@extends('layout')
<div class="example">
    <img src='{{asset("images/lib4.jpg")}}' alt="image" style="width:100%;">
    
    <div class="centered"><h3><font face="monospace" color="black"><b>Welcome to</b></font></h3>
    <h1><font size="10px" face=""monospace color="black"><b>The Book Spot</b></font></h1>
  <p><i><b><font color="black">A book worm's paradise where you will find the stories you love and your imagination comes alive...</font></b></i></p></div>
  </div>
  <div class="container px-4 px-lg-5">
    <!-- Heading Row-->
    
    
    <!-- Call to Action-->
<div class="card text-white bg-secondary my-5 py-4 text-center">
        <div class="card-body"><p class="text-white m-0"><u>Important</u> : The library will be closed during public holidays and every last Sunday of the month!</p></div>
    </div>
    <!-- Content Row-->
    <div class="row gx-4 gx-lg-5">
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                  <img src='{{asset("images/lib1.jpg")}}' height="200px" width="320px"/>
                    <h4 class="card-title"><b>Opening Time</b></h4>
                    <p class="card-text"><ul><li>Mon-Thur : 8am to 7pm</li>
                      <li>Fri-Sun : 7am to 8pm</li></ul></p>
                
                </div>
              
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                  <img src='{{asset("images/lib2.jpg")}}' height="200px" width="320px"/>
                    <h3 class="card-title"></h3>
                    <p class="card-text">A great place with great ambiance, architecture, interior,filled with modern styles. Bring your friend here and read your favorite books with them and have a peaceful time.</p>
                </div>
               
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                  <img src='{{asset("images/lib3.jpg")}}' height="200px" width="320px"/>
                    <h4 class="card-title"><b>About the website</b></h4>
                    <p class="card-text">Keeping your comfort in mind we have developed this website where you can borrow books and view your records as well.</p>
                </div>
              
            </div>
        </div>
    </div>
</div>
@stop
@section('footer')
@include('footer')
@stop

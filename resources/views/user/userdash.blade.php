@extends('footer')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="{{asset('css/adminform.css')}}"> -->
    <link rel="stylesheet" href="{{asset('css/usertable.css')}}">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body>
    <div class="b-example-divider"></div>

    <header class="p-3 bg-dark text-white  ">

    <div class="container">
      
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <div class="col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0"><a href="/home" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src='{{asset("images/logo.png")}}' width="150" height="50" alt="logo" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </a></div>
          <div style="margin: 10px; font-size: 20px;"><b>@if(Auth::guard('web')->check())
           Hello {{Auth::guard('web')->user()->id}}
        @endif
         </b></div> 
          <div class="text-end">
          <a href="{{route('logout-user')}}"><button style="background-color:grey; border-color:grey" type="button" class="btn btn-warning">Log Out</button></a>
          </div>
        </div>
      </div>
    </header>


<div class="cont">
<div class="row">
<h4>Welcome to User dashboard</h4>
    <table class="table">
        <thead>
          <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Book Name</th>
            <th>Issued date</th>
            <th>Due date</th>
            <th>Returned date</th>
            <th>Status</th>
        </thead>
        <tbody>
            
            @foreach($result as $row)
            <tr>
            <td>{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->email}}</td>
                <td>{{$row->title}}</td>
                <td>{{$row->issued_date}}</td>
                <td>{{$row->due_date}}</td>
                <td>{{$row->returned_date}}</td>
                <td>{{$row->status}}</td>
                @endforeach
            </tr>
       
        </tbody>
    </table>
</div>
</div>
@section('footer')
@include('footer')
@stop
</body>
</html>
 
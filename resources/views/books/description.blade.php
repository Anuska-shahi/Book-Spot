@extends('layout')
@section('title','books')
@section('content')
<!-- description section -->
<div class="Books-Section" >
@foreach($books as $book)
     @if(\Route::current()->parameter('book') == $book['id'])
     <div class="goback">
     <a href="/books" ><img src='{{asset("images/goback.png")}}'><font color="white">Go back</font></a>
</div>
        <div class="books-description">
            <img src='{{asset("images/books/$book->image")}}'>
            <div class="description">
                <div id="title">
                    {{$book['title']}}<br/>
                </div>
                @foreach($auth as $a)
                    @if($a['id']==$book['author_id'])
                        <p style="text-decoration:underline;">By {{$a['pen_name']}}</p>
                     @endif
                @endforeach
                {{$book['description']}}<br/>
                
                @if($book['stock']>1)
                    <input type="button" value="Available" style=" background-color: aquamarine;cursor:default;" >
                    <a href="#" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Borrow</a>
                @else
                    <input type="button" value="Unavailable" style=" background-color:#d42f66;cursor:default;">
                    <a href="#" class="btn btn-primary btn-sm disabled" role="button" aria-pressed="true">Borrow</a>
                @endif
                
            </div>
        </div>
    @endif
@endforeach
</div>
<!-- end of description -->
@stop
@section('footer')
@include('footer')
@stop

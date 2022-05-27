@extends('layout')
@section('title','books')
@section('content')
<!-- description section -->
@foreach($books as $book)
    <div class="Books-Section" >
        @if(\Route::current()->parameter('book') == $book['id'])
        <div class="books-description">
            <img src='{{asset("images/$book->image")}}'>
            <div class="description">
                <div id="title">
                 {{$book['title']}}<br/>
            </div>
             @foreach($auth as $a)
                @if($a['id']==$book['author_id'])
                    <p>By {{$a['pen_name']}}</p>
                @endif
             @endforeach
            {{$book['description']}}
            </div>
        </div>
        @endif
    </div>
    
@endforeach
<!-- end of description -->
@stop
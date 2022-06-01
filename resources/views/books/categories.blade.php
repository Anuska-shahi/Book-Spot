@extends('layout')
@section('title','Category')
@section('content')
<div class="Books-Section" >
@foreach($cat as $c)
    @switch($c['id'])
        @case(\Route::current()->parameter('category'))
        <div class="category"> 
            <p>{{$c['genre']}}</p>
        </div>
        <table>
            <tr >
                @foreach($data as $book)
                    
                      @if($book['category_id']==\Route::current()->parameter('category'))
                      
                        @if($count<=5)
                        <td>
                       
                        <div class="books">
                          <a href="{{ route('desc',$book['id'] )}}"> 
                            <img src='{{asset("$book->image")}}' >
                          </a>
                          </div> 
                          
                        </td>@php $count++; @endphp 
                        @else 
                   
                          <td><div class="books">
                          <a href="{{ route('desc',$book['id'] )}}"> 
                            <img src='{{asset("images/$book->image")}}' >
                          </a>
                          </div>  
                          </td>
                        </tr>
                          <br/>
                          @php $count=1; @endphp
                          @endif
                      @endif
                @endforeach
            </tr>
        </table>   
        @break;
    @endswitch
   

@endforeach
</div>
@stop 
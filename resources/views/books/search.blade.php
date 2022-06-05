@extends('layout')
@section('title','Search')
@section('content')
<div class="container">
                <center>
                <table class="table " >
                     <tbody>
                     @if(isset($data) && count($data)>0)
                    @foreach($data as $book)
                    <tr>
                        
                        
                        <td>&nbsp;&nbsp;<a href="{{route('desc',$book->id)}}">
                            <img src="images/books/{{$book->image}}" width="150px" height="150px">
                        </a>
                        <td>
                            <table width="100%" height="100%">
                                <tr>
                                    <td><a href="{{route('desc',$book->id)}}">
                                        <h3><u>{{$book->title}}</u></h3></a>
                                        <div><a href="{{route('desc',$book->id)}}">{{$book->pen_name}}</a></div>
                                        <div><a href="{{route('desc',$book->id)}}">{{$book->name}} </a><div>
                                        <div><div>
                                    </td>
                                </tr>
                            </table>
                        </td> 
                    </td>
                    </tr>
                    @endforeach
                    
                @else 
                <td colspan="4">No result found</td>
                @endif 
                </tbody>
        </table> 
</center>           
                 
</div>
@stop

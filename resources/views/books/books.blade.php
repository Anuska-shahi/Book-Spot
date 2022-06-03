@extends('layout')
@section('title','Books')
@section('content')
<!-- main book section  -->
<div class="Books-Section" >
  <table>
      <tr>  
      @for($i=1;$i<=$catcount;$i++)
           @foreach($cat as $category)
            @if(($category['id'])==$i)
              <div class="category"> 
                <a href="{{route('categories',$category['id'])}}"><p>{{$category['genre']}}</p></a>
              </div>
            @endif
           @endforeach  
          <table >
              <tr>
                @foreach($data as $book)
               
                  <td>
                      @if($book['category_id']==$i)
                      
                        @if($count<=5)
                        @php $count++; @endphp
                        <div class="books">
                          <a href="{{ route('desc',$book['id'] )}}"> 
                            <img src="images/books/{{$book['image']}}" >
                          </a>
                          </div>
                         
                          @else 
                          
                            <a href="{{route('categories',$i)}}"><input type="button" value="Read More"></a>

                            @php $count=0; @endphp
                            @break
                            @endif
                         
                      @endif
                  </td>
             
                @endforeach
              </tr>          
          </table>
      @endfor
      </tr>
  </table>
</div>
<!-- end of book section -->
@stop
@section('footer')
@include('footer')
@stop


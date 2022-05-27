@extends('layout')
@section('title','Books')
@section('content')
<!-- main book section  -->
<div class="Books-Section" >
  <table>
      <tr>  
      @for($i=1;$i<=5;$i++)
           @foreach($cat as $category)
            @if(($category['id'])==$i)
              <div class="category"> 
                <p>{{$category['genre']}}</p>
              </div>
            @endif
           @endforeach  
          <table>
              <tr>
                @foreach($books as $book)
                  <td>
                      @if($book['category_id']==$i)
                      <div class="books">
                        <a href="{{ route('desc',$book['id'] )}}"> 
                          <img src="images/{{$book['image']}}" >
                        </a>
                        </div>  
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


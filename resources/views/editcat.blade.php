@extends('admin')
@section('sidebar')
<form action="/editcat" method="POST">
    <br>
<fieldset style="padding:30px; border:4px solid #69A4A0;">
<legend><h4>&nbsp;&nbsp;<u>Edit Category</u></h4></legend>

@csrf
&nbsp;&nbsp;<b>ID:&nbsp;&nbsp;</b> <input type="number" name="id" value="{{$data['id']}}"><br><br>
 &nbsp;&nbsp;<b>Genre: </b><input type="text" name="genre" value="{{$data['genre']}}">&nbsp;&nbsp;
<br><br>
 &nbsp;&nbsp;<button style="border-color:#FFA07A; background-color:#FFA07A;" type="submit" name="submit">Edit</button>
 </fieldset>
</form>

@stop
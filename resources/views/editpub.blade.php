
@extends('admin')
@section('sidebar')
<form action="/editpub" method="POST">
    <br>
<fieldset style="padding:30px; border:4px solid #69A4A0;">
<legend><h4>&nbsp;&nbsp;<u>Edit Author</u></h4></legend>

@csrf
&nbsp;&nbsp;<b>ID:&nbsp;&nbsp;</b> <input type="number" name="id" value="{{$data['id']}}"><br><br>
 &nbsp;&nbsp;<b>Publication Name: </b><input type="text" name="name" value="{{$data['name']}}">&nbsp;&nbsp;
<br><br>
 &nbsp;&nbsp;<button style="border-color:#FFA07A; background-color:#FFA07A;" type="submit" name="submit">Edit</button>
 </fieldset>
</form>
@stop
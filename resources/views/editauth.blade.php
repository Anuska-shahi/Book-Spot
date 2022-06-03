
@extends('admin')
@section('sidebar')

<form action="/editauth" method="POST">
    <br>
<fieldset  style="padding:30px; border:4px solid #69A4A0;">
<legend><h4>&nbsp;&nbsp;<u>Edit Author</u></h4></legend>
@csrf
&nbsp;&nbsp;<b>ID:&nbsp;&nbsp;</b> <input type="number" name="id" value="{{$data['id']}}"><br><br>
 &nbsp;&nbsp;<b>First Name: </b><input type="text" name="first_name" value="{{$data['first_name']}}">&nbsp;&nbsp;
 &nbsp;&nbsp;<b>Middle Name: </b> <input type="text" name="middle_name" value="{{$data['middle_name']}}">&nbsp;&nbsp;
 &nbsp;&nbsp;<b>Last Name: </b> <input type="text" name="last_name" value="{{$data['last_name']}}">&nbsp;&nbsp;
 <br><br>&nbsp;&nbsp;<b>Pen name: </b><input type="text" name="pen_name" value="{{$data['pen_name']}}"><br><br>
 &nbsp;&nbsp;<button style="border-color:#FFA07A; background-color:#FFA07A;" type="submit" name="submit">Edit</button>
 </fieldset>
</form>
@stop



@extends('admin')
@section('sidebar')

<form action="/editmember" method="POST">
    <br>
<fieldset  style="padding:30px; border:4px solid #69A4A0;">
<legend><h4>&nbsp;&nbsp;<u>Edit Member</u></h4></legend>
@csrf
&nbsp;&nbsp;<b>ID:&nbsp;&nbsp;</b> <input type="number" name="id" value="{{$data['id']}}"><br><br>
 &nbsp;&nbsp;<b>First Name: </b><input type="text" name="first_name" value="{{$data['first_name']}}">&nbsp;&nbsp;
 &nbsp;&nbsp;<b>Last Name: </b> <input type="text" name="last_name" value="{{$data['last_name']}}">&nbsp;&nbsp;
 <br><br>&nbsp;&nbsp;<b>Address: </b> <input type="text" name="address" value="{{$data['address']}}">&nbsp;&nbsp;
  <br><br> &nbsp;&nbsp;<b>Phone No.: </b> <input type="number" name="phone_no" value="{{$data['phone_no']}}">&nbsp;&nbsp;
  <br><br>&nbsp;&nbsp;<b>Date of birth: </b> <input type="date" name="dob" value="{{date('Y-m-d',strtotime($data['dob']))}}">&nbsp;&nbsp;
 <br><br>&nbsp;&nbsp;<b>Email: </b><input type="text" name="email" value="{{$data['email']}}"><br><br>
 &nbsp;&nbsp;<button style="border-color:#FFA07A; background-color:#FFA07A;" type="submit" name="submit">Edit</button>
 </fieldset>
</form>
@stop
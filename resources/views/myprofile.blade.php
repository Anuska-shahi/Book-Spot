@extends('layout')
@section('title','profile')
@section('content')
<form action="/userupdate" method="POST">
    <br>
<fieldset  style="padding:30px; border:4px solid #69A4A0;">
<legend><h4>&nbsp;&nbsp;<u>My Profile</u></h4></legend>
@csrf
@foreach($result as $results)
&nbsp;&nbsp;<b>Id:&nbsp;&nbsp;</b> <input type="number" name="id" value="{{$results->id}}"><br><br>
&nbsp;&nbsp;<b>Username:&nbsp;&nbsp;</b> <input type="text" name="name" value="{{$results->name}}"><br><br>
&nbsp;&nbsp;<b>First Name: </b><input type="text" name="first_name" value="{{$results->first_name}}"><br><br>
&nbsp;&nbsp;<b>Last Name: </b><input type="text" name="last_name" value="{{$results->last_name}}"><br><br>
&nbsp;&nbsp;<b>Address: </b> <input type="text" name="address" value="{{$results->address}}"><br><br>
&nbsp;&nbsp;<b>DOB: </b> <input type="date" name="dob" value="{{date('Y-m-d',strtotime($results->dob))}}"><br><br>
&nbsp;&nbsp;<b>Phone no: </b> <input type="number" name="phone_no" value="{{$results->phone_no}}"><br><br>
&nbsp;&nbsp;<b>Email: </b><input type="text" name="email" value="{{$results->email}}"><br><br>
&nbsp;&nbsp;<button style="border-color:#FFA07A; background-color:#FFA07A;" type="submit" name="submit">Edit</button>
@endforeach
</fieldset>
</form>

<div class="cont">
<div class="row">
<legend><h4>&nbsp;&nbsp;<u>My Record</u></h4></legend>
    <table class="table">
        <thead>
          <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Book Name</th>
            <th>Issued date</th>
            <th>Due date</th>
            <th>Returned date</th>
            <th>Status</th>
        </thead>
        <tbody>
            
            @foreach($result as $row)
            <tr>
            <td>{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->email}}</td>
                <td>{{$row->title}}</td>
                <td>{{$row->issued_date}}</td>
                <td>{{$row->due_date}}</td>
                <td>{{$row->returned_date}}</td>
                <td>{{$row->status}}</td>
                @endforeach
            </tr>
       
        </tbody>
    </table>
</div>
</div>
@stop


@extends('admin')
@section('sidebar')
<div class="author-form">

<form action="author" method="POST">
    <br>
<fieldset style="padding:30px; border:4px solid #69A4A0;" > 
<legend><h4>&nbsp;&nbsp;<u>Add Authors</u></h4></legend>
@csrf
&nbsp;&nbsp;<input type="number" name="id" placeholder="Enter ID"><br><br>
 &nbsp;&nbsp;<input type="text" name="first_name" placeholder="Enter First name">
 &nbsp;&nbsp;<input type="text" name="middle_name" placeholder="Enter Middle name">
 &nbsp;&nbsp;<input type="text" name="last_name" placeholder="Enter Last name">
 &nbsp;&nbsp;<input type="text" name="pen_name" placeholder="Enter Pen name"><br><br>
 &nbsp;&nbsp;<button style="border-color:#FFA07A; background-color:#FFA07A;" type="submit" name="submit">Add Author</button>
</fieldset>
<br><br><br>
</form>
</div>

    
<div class="author-table" >

<h4>&nbsp;&nbsp;<u>Author Name List</u></h4>

    <table class="table" >
        
    <thead class="thead-dark">
        <tr style="background-color:#69A4A0;">
            <th scope="col">&nbsp;&nbsp;ID</th>
            <th scope="col">&nbsp;&nbsp;First Name</th>
            <th scope="col">&nbsp;&nbsp;Middle Name</th>
            <th scope="col">&nbsp;&nbsp;Last Name</th>
            <th scope="col">&nbsp;&nbsp;Pen Name</th>
            <th scope="col">&nbsp;&nbsp;Edit</th>
            <th scope="col">&nbsp;&nbsp;Delete</th>
</tr>
</thead>
<tbody>
@foreach($authors as $author)
    <tr>
    <th scope="row">&nbsp;&nbsp;{{$author['id']}}</td>
    <td>&nbsp;&nbsp;{{$author['first_name']}}</td>
    <td>&nbsp;&nbsp;{{$author['middle_name']}}</td>
    <td>&nbsp;&nbsp;{{$author['last_name']}}</td>
    <td>&nbsp;&nbsp;{{$author['pen_name']}}</td>
    <td>&nbsp;&nbsp;<a href="editauth/{{$author->id}}" class="btn btn-success">Edit</a></td>
    <td>&nbsp;&nbsp;<a href="deleteauth/{{$author->id}}" class="btn btn-danger">Delete</a></td>
</tr>
@endforeach
</tbody>
    </table>
</div>
@stop

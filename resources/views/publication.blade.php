
@extends('admin')
@section('sidebar')
    <div class="publication-form">

<form action="publication" method="POST">
    <br>
<fieldset style="padding:30px; border:4px solid #69A4A0;">
<legend><h4>&nbsp;&nbsp;<u>Add Publication</u></h4></legend>
@csrf
&nbsp;&nbsp;<input type="number" name="id" placeholder="Enter ID"><br><br>


 &nbsp;&nbsp;<input type="text" name="name" placeholder="Enter name"><br><br>
 &nbsp;&nbsp;<button style="border-color:#FFA07A; background-color:#FFA07A;" type="submit" name="submit">Add Publication</button>
 </fieldset>
 <br><br>
</form>
</div>
<div class="publication-table">
<h4>&nbsp;&nbsp;<u>Publication Name List</u></h4>
    <table class="table">
    <thead class="thead-dark">
        <tr style="background-color:#69A4A0;">
            <th scope="col">&nbsp;&nbsp;ID</th>
            <th scope="col">&nbsp;&nbsp;Name</th>
           
            <th scope="col">&nbsp;&nbsp;Edit</th>
            <th scope="col">&nbsp;&nbsp;Delete</th>
</tr>
</thead>
<tbody>
@foreach($publications as $publication)
    <tr>
    <th scope="row">&nbsp;&nbsp;{{$publication['id']}}</td>
    <td>&nbsp;&nbsp;{{$publication['name']}}</td>
    <td>&nbsp;&nbsp;<a href="editpub/{{$publication->id}}" class="btn btn-success">Edit</a></td>
    <td>&nbsp;&nbsp;<a href="deletepub/{{$publication->id}}" class="btn btn-danger">Delete</a></td>
</tr>
@endforeach
</tbody>
    </table>
</div>
@stop
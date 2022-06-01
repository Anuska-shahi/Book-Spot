@extends('admin')
@section('sidebar')
<div class="location-form">
<form action="location" method="POST">
    <br>
<fieldset style="padding:30px; border:4px solid #69A4A0;">
<legend><h4>&nbsp;&nbsp;<u>Add Location</u></h4></legend>
@csrf
&nbsp;&nbsp;<input type="number" name="id" placeholder="Enter ID"><br><br>

&nbsp;&nbsp;<input type="text" name="block" placeholder="Enter Block"><br><br>
 
 &nbsp;&nbsp;<button style="border-color:#FFA07A; background-color:#FFA07A;" type="submit" name="submit">Add Location</button>
 </fieldset>
 
</form>
</div>

<div class="location-table">

<h4>&nbsp;&nbsp;<u>Location List</u></h4>
    <table class="table">
    <thead class="thead-dark">
        <tr style="background-color:#69A4A0;">
            <th scope="col">&nbsp;&nbsp;ID</th>
            <th scope="col">&nbsp;&nbsp;Block</th>
            <th scope="col">&nbsp;&nbsp;Edit</th>
            <th scope="col">&nbsp;&nbsp;Delete</th>
</tr>
</thead>
<tbody>
@foreach($locations as $location)
    <tr>
    <th scope="row">&nbsp;&nbsp;{{$location['id']}}</td>
    <td>&nbsp;&nbsp;{{$location['block']}}</td>
 
    <td>&nbsp;&nbsp;<a href="editloc/{{$location->id}}" class="btn btn-success">Edit</a></td>
    <td>&nbsp;&nbsp;<a href="deleteloc/{{$location->id}}" class="btn btn-danger">Delete</a></td>
</tr>
@endforeach
</tbody>
    </table>
</div>
@stop
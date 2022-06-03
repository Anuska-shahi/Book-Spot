
@extends('admin')
@section('sidebar')
    <div class="category-form">
<form action="category" method="POST">
    <br>
<fieldset style="padding:30px; border:4px solid #69A4A0;">
<legend><h4>&nbsp;&nbsp;<u>Add Category</u></h4></legend>

@csrf
&nbsp;&nbsp;<input type="number" name="id" placeholder="Enter ID"><br><br>
 &nbsp;&nbsp;<input type="text" name="genre" placeholder="Enter genre"><br><br>
 &nbsp;&nbsp;<button style="border-color:#FFA07A; background-color:#FFA07A;" type="submit" name="submit">Add Category</button>
 </fieldset>
 <br><br>
</form>
</div>
<div class="category-table">
<h4>&nbsp;&nbsp;<u>Category List</u></h4>
    <table class="table">
    <thead class="thead-dark">
        <tr style="background-color:#69A4A0;">
            <th scope="col">&nbsp;&nbsp;ID</th>
            <th scope="col">&nbsp;&nbsp;Genre</th>
           
            <th scope="col">&nbsp;&nbsp;Edit</th>
            <th scope="col">&nbsp;&nbsp;Delete</th>
</tr>
</thead>
<tbody>
@foreach($categories as $category)
    <tr>
    <th scope="row">&nbsp;&nbsp;{{$category['id']}}</td>
    <td>&nbsp;&nbsp;{{$category['genre']}}</td>
    <td>&nbsp;&nbsp;<a href="editcat/{{$category->id}}" class="btn btn-success">Edit</a></td>
    <td>&nbsp;&nbsp;<a href="deletecat/{{$category->id}}" class="btn btn-danger">Delete</a></td>
</tr>
@endforeach
</tbody>
    </table>
</div>
@stop

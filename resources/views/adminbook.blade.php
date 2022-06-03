

@extends('admin')
@section('sidebar')
<div class="adminbook-form">

<form action="adminbook" method="POST">
    <br>
<fieldset style="padding:30px; border:4px solid #69A4A0;" > 
<legend><h4>&nbsp;&nbsp;<u>Add Books</u></h4></legend>
@csrf
<input type="number" name="id" placeholder="Enter ID">
 &nbsp;&nbsp;<input type="text" name="title" placeholder="Enter Title">
 &nbsp;&nbsp;<input type="text" name="edition" placeholder="Enter edition"><br><br>
 <select name="author_id">
     <option value="">Select Author</option>
     @foreach($author as $value)
     <option value="{{$value->id}}" name="{{$value->id}}">{{$value->pen_name}}</option>
     @endforeach
</select>&nbsp;&nbsp;
<select name="category_id">
     <option value="">Select Category</option>
     @foreach($category as $value)
     <option value="{{$value->id}}">{{$value->genre}}</option>
     @endforeach
</select>&nbsp;&nbsp;
<select name="publisher_id">
     <option value="">Select Publication</option>
     @foreach($publication as $value)
     <option value="{{$value->id}}">{{$value->name}}</option>
     @endforeach
</select>&nbsp;&nbsp;
<select name="location_id">
     <option value="">Select Location</option>
     @foreach($location as $value)
     <option value="{{$value->id}}" name="{{$value->id}}">{{$value->block}}</option>
     @endforeach
</select><br><br>
 <input type="text" name="stock" placeholder="Enter stock"><br><br>
 <b>Image:</b> <input type="file" name="image"><br>
 <b>Status:</b> <select name="status">
     <option value="available">Available</option>
     <option value="unavailable">Unavailable</option>
</select><br><br>
 <textarea rows="4" cols="50" name="description">
Enter description here...</textarea>
<br>
 <button style="border-color:#FFA07A; background-color:#FFA07A;" type="submit" name="submit">Add Book</button>
</fieldset>
<br><br><br>
</form>
</div>
<div class="adminbook-table" >
<br><br>
<h4>&nbsp;&nbsp;<u>Book List</u></h4>

    <table class="table" >
        
    <thead class="thead-dark">
        <tr style="background-color:#69A4A0;">
            <th scope="col">&nbsp;&nbsp;ID</th>
            <th scope="col">&nbsp;&nbsp;Title</th>
            <th scope="col">&nbsp;&nbsp;Edition</th>
            <th scope="col">&nbsp;&nbsp;Author</th>
            <th scope="col">&nbsp;&nbsp;Category</th>
            <th scope="col">&nbsp;&nbsp;Publication</th>
            <th scope="col">&nbsp;&nbsp;Location</th>
            <th scope="col">&nbsp;&nbsp;Stock</th>
            <th scope="col">&nbsp;&nbsp;Status</th>
            <th scope="col">&nbsp;&nbsp;Delete</th>
</tr>
</thead>
<tbody>
@foreach($data as $adminbook)
    <tr>
    <th scope="row">&nbsp;&nbsp;{{$adminbook->id}}</td>
    <td>&nbsp;&nbsp;{{$adminbook->title}}</td>
    <td>&nbsp;&nbsp;{{$adminbook->edition}}</td>
    <td>&nbsp;&nbsp;{{$adminbook->pen_name}}</td>
    <td>&nbsp;&nbsp;{{$adminbook->genre}}</td>
    <td>&nbsp;&nbsp;{{$adminbook->name}}</td>
    <td>&nbsp;&nbsp;{{$adminbook->block}}</td>
    <td>&nbsp;&nbsp;{{$adminbook->stock}}</td>
    <td>&nbsp;&nbsp;{{$adminbook->status}}</td>
    <td>&nbsp;&nbsp;<a href="deletebook/{{$adminbook->id}}" class="btn btn-danger">Delete</a></td>

</tr>
@endforeach
</tbody>
    </table>
</div>
@stop

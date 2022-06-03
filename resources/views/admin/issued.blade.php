@extends('admin')
@section('sidebar')
<div class="issue-table">
<h4>&nbsp;<u><font color="black">Issued Book List</font></u></h4>

    <div class="row">
        <table class="table">
        <thead  class="thead-dark">
            <tr style="background-color:#69A4A0;">
            <th scope="col">&nbsp;&nbsp;User Name</th>
            <th scope="col">&nbsp;&nbsp;Book Title</th>
            <th scope="col">&nbsp;&nbsp;Issued Date</th>
            <th scope="col">&nbsp;&nbsp;Status</th>
            </tr>
         
        </thead>
        <tbody>
        @foreach($result as $row)
            <tr>
            <td>&nbsp;&nbsp;{{$row->name}}</td>
            <td>&nbsp;&nbsp;{{$row->title}}</td>
            <td>&nbsp;&nbsp;{{$row->issued_date}}</td>
            <td>&nbsp;&nbsp;{{$row->status}}</td>
            </tr>
            @endforeach
        </tbody>
</table>
    </div>
</div>
@stop
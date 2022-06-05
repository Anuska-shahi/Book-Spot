@extends('admin')
@section('sidebar')
<div class="return-table">
<h4><u>Returned Book List</u></h4>

    <div class="row">
        <table class="table">
        <thead >
            <tr style="background-color:#69A4A0;">
            <th scope="col">&nbsp;&nbsp;Id</th>
            <th scope="col">&nbsp;&nbsp;User Name</th>
            <th scope="col">&nbsp;&nbsp;Email</th>
            <th scope="col">&nbsp;&nbsp;Book Title</th>
            <th scope="col">&nbsp;&nbsp;Issued Date</th>
            <th scope="col">&nbsp;&nbsp;Due Date</th>
            <th scope="col">&nbsp;&nbsp;Returned Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($result as $row)
            @if($row->status=='returned')
            <tr>
            <td>&nbsp;&nbsp;{{$row->id}}</td>
            <td>&nbsp;&nbsp;{{$row->name}}</td>
            <td>&nbsp;&nbsp;{{$row->email}}</td>
            <td>&nbsp;&nbsp;{{$row->title}}</td>
            <td>&nbsp;&nbsp;{{$row->issued_date}}</td>
            <td>&nbsp;&nbsp;{{$row->due_date}}</td>
            <td>&nbsp;&nbsp;{{$row->returned_date}}</td>
            </tr>
            @endif
        @endforeach
        </tbody>
</table>
    </div>
</div>
@stop
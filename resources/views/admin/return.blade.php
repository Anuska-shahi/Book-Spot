@extends('admin')
@section('sidebar')
<div class="return-table">
<h4><u>Returned Book List</u></h4>

    <div class="row">
        <table class="table">
        <thead >
            <tr style="background-color:#69A4A0;">
            <th scope="col">&nbsp;&nbsp;User Name</th>
            <th scope="col">&nbsp;&nbsp;Book Title</th>
            <th scope="col">&nbsp;&nbsp;Returned Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($result as $row)
            <tr>
            <td>&nbsp;&nbsp;{{$row->name}}</td>
            <td>&nbsp;&nbsp;{{$row->title}}</td>
            <td>&nbsp;&nbsp;{{$row->returned_date}}</td>
            </tr>
            @endforeach
        </tbody>
</table>
    </div>
</div>
@stop
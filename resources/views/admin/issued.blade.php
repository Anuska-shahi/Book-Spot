@extends('admin')
@section('styles')
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
@endsection
@section('sidebar')
<div class="issue-table">
<h4>&nbsp;<u><font color="black">Issued Request</font></u></h4>

<div class="row">
    <table class="table">
    <thead  class="thead-dark">
        <tr style="background-color:#69A4A0;">
        <th scope="col">&nbsp;&nbsp;Id</th>
        <th scope="col">&nbsp;&nbsp;User Name</th>
        <th scope="col">&nbsp;&nbsp;Email</th>
        <th scope="col">&nbsp;&nbsp;Book Title</th>
        <th scope="col">&nbsp;&nbsp;Status</th>
        </tr>
     
    </thead>
    <tbody>
    @foreach($result as $row)
        @if($row->status=="processing")
        <tr>
        <td>&nbsp;&nbsp;{{$row->id}}</td>
        <td>&nbsp;&nbsp;{{$row->name}}</td>
        <td>&nbsp;&nbsp;{{$row->email}}</td>
        <td>&nbsp;&nbsp;{{$row->title}}</td>
        <td>&nbsp;<input data-id="{{$row->id}}" class="toggle-class1" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="issued" data-off="processing" {{$row->status=='issued' ? 'checked' : '' }}></td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>
</div>
<br/>
<h4>&nbsp;<u><font color="black">Issued Book List</font></u></h4>

    <div class="row">
        <table class="table">
        <thead  class="thead-dark">
            <tr style="background-color:#69A4A0;">
            <th scope="col">&nbsp;&nbsp;Id</th>
            <th scope="col">&nbsp;&nbsp;User Name</th>
            <th scope="col">&nbsp;&nbsp;Email</th>
            <th scope="col">&nbsp;&nbsp;Book Title</th>
            <th scope="col">&nbsp;Issued Date</th>
            <th scope="col">&nbsp;&nbsp;Due Date</th>
            <th scope="col">&nbsp;Status</th>
            </tr>
         
        </thead>
        <tbody>
        @foreach($result as $row)
            @if($row->status=="issued")
            <tr>
            <td>&nbsp;&nbsp;{{$row->id}}</td>
            <td>&nbsp;&nbsp;{{$row->name}}</td>
            <td>&nbsp;&nbsp;{{$row->email}}</td>
            <td>&nbsp;&nbsp;{{$row->title}}</td>
            <td>&nbsp;{{$row->issued_date}}</td>
            <td>&nbsp;&nbsp;{{$row->due_date}}</td>
            <td>&nbsp;<input data-id="{{$row->id}}" class="toggle-class2" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-off="issued" data-on="returned" {{$row->status=='returned' ? 'checked' : '' }}></td>
            </tr>
            @endif
            @endforeach
        </tbody>
</table>
    </div>
</div>
@stop
@push('scripts')
<script>
    $('.toggle-class1').on('change', function() {
        var id = $(this).data('id');
         var status = $(this).prop('checked') == true ? 'issued' : 'processing';
        let _token = $('meta[name="csrf-token"]').attr('content');
        $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
       });
        $.ajax({
            type: 'GET',
            dataType: 'JSON',
            url: '{{ route("issuedstatus") }}',
            data: {
                '_token': _token,
                'status': status,
                'id': id,
            },
            success:function(data) {
              alert(data.success);
              location.reload(); 
            },error:function(){ 
             alert("error!!!!");
             }
        });
    });
    $('.toggle-class2').on('change', function() {
        var id = $(this).data('id');
         var status = $(this).prop('checked') == true ? 'returned' : 'issued';
        let _token = $('meta[name="csrf-token"]').attr('content');
        $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
       });
        $.ajax({
            type: 'GET',
            dataType: 'JSON',
            url: '{{ route("returnstatus") }}',
            data: {
                '_token': _token,
                'status': status,
                'id': id,
            },
            success:function(data) {
              alert(data.success);
              location.reload();
            },error:function(){ 
             alert("error!!!!");
             }
        });
    });
</script>
@endpush
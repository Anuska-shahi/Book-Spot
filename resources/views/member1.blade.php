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
<div class="member-table">
<h1>&nbsp;&nbsp;<u>User's Details</u></h1>
<table class="table">
  <thead class="thead-dark">
    <tr style="background-color:#69A4A0;">
      <th scope="col">Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Address</th>
      <th scope="col">Phone No.</th>
      <th scope="col">DOB</th>
      <th scope="col">Email</th>
      <th scope="col">username</th>
      <th scope="col">Regdate</th>
      <th scope="col">Active</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
      @forelse($members as $user)
        <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->first_name}}</td>
        <td>{{$user->last_name}}</td>
        <td>{{$user->address}}</td>
        <td>{{$user->phone_no}}</td>
        <td>{{date('Y-m-d',strtotime($user->dob))}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->created_at->todatestring()}}</td>
        <td>
        <input data-id="{{$user->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="yes" data-off="no" {{ $user->active=='yes' ? 'checked' : '' }}>
        </td>
        <td><a href="editmember/{{$user->id}}" class="btn btn-success">Edit</a></td>
        <td><a href="deletemember/{{$user->id}}" class="btn btn-danger">Delete</a></td>
        </tr>
    @empty
        <tr>
            <td colspan="12">No Member Enlisted</td>
        </tr>

    @endforelse
  </tbody>
</table>
</div>
@endsection
@push('scripts')
<script>
    $('.toggle-class').on('change', function() {
      console.log( "1!" );
        var user_id = $(this).data('id');
         var status = $(this).prop('checked') == true ? 'yes' : 'no';
        let _token = $('meta[name="csrf-token"]').attr('content');
        $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
       });
        $.ajax({
            type: 'GET',
            dataType: 'JSON',
            url: '{{ route("changeStatus") }}',
            data: {
                '_token': _token,
                'status': status,
                'user_id': user_id
            },
            success:function(data) {
              alert(data.success) 
            },error:function(){ 
             alert("error!!!!");
             }
        });
    });
</script>
@endpush
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    

  </head>
<body>
    

@extends('layouts.adminlayout')
@section('contents')
<table class="table">
  <thead class="thead-dark">
    <tr>
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
        <td><button class="btn btn-success">Edit</button></td>
        <td><button class="btn btn-danger">Delete</button></td>
        </tr>
    @empty
        <tr>
            <td colspan="12">No Member Enlisted</td>
        </tr>

    @endforelse
  </tbody>
@endsection
</table>
</body>

<!-- <script>
    $(function() {
    $('.toggle-class').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0 ;
            //let _token = $('meta[name="csrf-token"]').attr('content');
          var user_id = $(this).data('id');  
           $.ajax({ 
    
               type: "get", 
               dataType: "json", 
               url: '/memberstatus', 
               //headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
               data: {
                     id: id,
                      status: status
                }, 
               success: function(data){ 
               alert(data.success) 
              }
        });
    })
  })

</script> -->
<script>
$( document ).ready(function() {
    console.log( "1!" );
    $('.toggle-class').change(function() {
     
      console.log( "ready!" );
            var status = $(this).prop('checked') == true ? 'yes' : 'no' ;
            //let _token = $('meta[name="csrf-token"]').attr('content');
          var user_id = $(this).data('id');  
          console.log( status);
          console.log( id );
          
           $.ajax({ 
    
               type: "get", 
               dataType: "json", 
               url: '/memberstatus', 
               //headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
               data: {
                    _token: token,
                     id: id,
                      status: status
                }, 
               success: function(data){ 
               alert(data.success) 
              }
              
        });
    });
});
</script>
</html>
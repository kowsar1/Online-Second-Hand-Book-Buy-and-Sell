

@extends('backend.master')


@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Address</th>
      <th scope="col">Role</th>
    </tr>
  </thead>
  @foreach($data as $user)
  <tbody>
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->mobile}}</td>
      <td>{{$user->address}}</td>
      <td>{{$user->role}}</td>
    </tr>
   
  </tbody>
  @endforeach
</table>
@endsection
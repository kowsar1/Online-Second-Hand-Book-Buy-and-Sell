

@extends('master')


@section('content')

<h1>Category List</h1>
<a href="{{url('/category/create')}}" class="btn btn-info">Create New User</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Password</th>
      <th scope="col">Image</th>
      <th scope="col">DOB</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($cats as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->password}}</td>
      <td>
        <img src="{{$data->image}}" alt="Category_image">
      </td>
      <td>{{$data->DOB}}</td>
      <td>
        <a href="" class="btn btn-outline-primary"> view</a>
        <a href="" class="btn btn-outline-warning"> Edit</a>
        <a href="" class="btn btn-outline-danger"> Delete</a>
      </td>

    </tr>
   @endforeach
  </tbody>
</table>
{{$cats->links()}}

@endsection


@extends('backend.master')


@section('content')

<h1>Category List</h1>
@if(session()->has('message'))
        <p class="alert alert-success">{{session()->get('message')}}</p>
      @endif

    @if(session()->has('error'))
        <p class="alert alert-danger">{{session()->get('error')}}</p>
    @endif
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
      <img width="100px" style="border-radius: 10px" src="{{url('/upload/'.$data->image)}}" alt="product_image">
      </td>
      <td>{{$data->DOB}}</td>
      <td>
        <a href="{{route('category.view',$data->id)}}" class="btn btn-primary"> view</a>
        <a href="" class="btn btn-warning"> Edit</a>
        <a href="{{route('category.delete',$data->id)}}" class="btn btn-danger"> Delete</a>
      </td>

    </tr>
   @endforeach
  </tbody>
</table>
{{$cats->links()}}

@endsection
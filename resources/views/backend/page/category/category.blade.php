

@extends('backend.master')


@section('content')

<h1>Category List</h1>
@if(session()->has('message'))
        <p class="alert alert-success">{{session()->get('message')}}</p>
      @endif

    @if(session()->has('error'))
        <p class="alert alert-danger">{{session()->get('error')}}</p>
    @endif
<a href="{{route('category.create')}}" class="btn btn-info">Create New User</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Category Name</th>
      <th scope="col">Status</th>
      
      <th scope="col">Issue Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($cats as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->status}}</td>
      
      <td>{{$data->DOB}}</td>
      <td>
        <a href="{{route('category.view',$data->id)}}" class="btn btn-primary"> view</a>
        <a href="{{route('category.edit',$data->id)}}" class="btn btn-warning"> Edit</a>
        <a href="{{route('category.delete',$data->id)}}" class="btn btn-danger"> Delete</a>
      </td>

    </tr>
   @endforeach
  </tbody>
</table>
{{$cats->links()}}

@endsection
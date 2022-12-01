

@extends('backend.master')


@section('content')
<div>
<h1 class="btn btn-success">Category List</h1>
</div>
<a href="{{route('category.create')}}" class="btn btn-info">Create New Category</a>
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
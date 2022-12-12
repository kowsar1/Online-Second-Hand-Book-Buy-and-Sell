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
        <div class="d-flex flex-row ">
          <a href="{{route('category.view',$data->id)}}" aria-expanded="false">
            <img style="width: 40px; height: 40px" class="m-2" src="{{url('/upload/view.png')}}" alt="">

          </a>
          <a href="{{route('category.edit',$data->id)}}" aria-expanded="false">
            <img style="width: 40px; height: 40px" class="m-2" src="{{url('/upload/edit.png')}}" alt="">

          </a>
          <a href="{{route('category.delete',$data->id)}}" aria-expanded="false">
            <img style="width: 40px; height: 40px" class="m-2" src="{{url('/upload/delete.png')}}" alt="">

          </a>
        </div>
      </td>

    </tr>
    @endforeach
  </tbody>
</table>
{{$cats->links()}}

@endsection
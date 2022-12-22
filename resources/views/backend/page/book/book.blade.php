@extends('backend.master')

@section('content')

    <h1>Book List</h1>

    @if(session()->has('message'))
        <p class="alert alert-success">{{session()->get('message')}}</p>
      @endif

    @if(session()->has('error'))
        <p class="alert alert-danger">{{session()->get('error')}}</p>
    @endif

    <a href="{{route('book.create')}}" class="btn btn-primary" >Create New Product</a>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Category Name</th>
            <th scope="col">Description</th>
            <th scope="col">Status</th>
            <th scope="col">Stock</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($categories  as $data)
        <tr>
            <th scope="row">{{$data->id}}</th>
            <td>

                <img width="100px" style="border-radius: 10px" src="{{url('/uploads/'.$data->image)}}" alt="product_image">
            </td>
            <td>{{$data->name}}</td>
            <td>{{$data->price}} BDT</td>
            <td>{{$data->category->name}}</td>
            <td>{{$data->description}}</td>
            <td>{{$data->status}}</td>
            <td>{{$data->stock}}</td>
            <td>
            <div class="d-flex flex-row ">
          <a href="{{route('book.view',$data->id)}}" aria-expanded="false">
            <img style="width: 40px; height: 40px" class="m-2" src="{{url('/upload/view.png')}}" alt="">

          </a>
          <a href="{{route('book.edit',$data->id)}}" aria-expanded="false">
            <img style="width: 40px; height: 40px" class="m-2" src="{{url('/upload/edit.png')}}" alt="">

          </a>
          <a href="{{route('book.delete',$data->id)}}" aria-expanded="false">
            <img style="width: 40px; height: 40px" class="m-2" src="{{url('/upload/delete.png')}}" alt="">

          </a>
        </div>
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>
    {{$categories->links()}}
@endsection
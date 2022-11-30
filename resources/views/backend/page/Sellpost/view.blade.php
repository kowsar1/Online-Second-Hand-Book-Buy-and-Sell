@extends('backend.master')

@section('content')

    <h1>Sellpost List</h1>

    <!--<a href="{{route('book.create')}}" class="btn btn-primary" >Create New Product</a>-->

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
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

        @foreach($post  as $test)
        <tr>
            <th scope="row">{{$test->id}}</th>
            <td>

                <img width="100px" style="border-radius: 10px" src="{{url('/uploads/'.$test->image)}}" alt="product_image">
            </td>
            <td>{{$test->name}}</td>
            <td>{{$test->price}} BDT</td>
            <td>{{$test->category->name}}</td>
            <td>{{$test->description}}</td>
            <td>{{$test->status}}</td>
            <td>{{$test->stock}}</td>
            <td>
                <a  href="{{route('sellpost.update',$test->id)}}" class="btn btn-primary">Accept</a>
                <a href="{{route('sellpost.delete',$test->id)}}" class="btn btn-danger">Reject</a>
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>
    {{$post->links()}}
@endsection
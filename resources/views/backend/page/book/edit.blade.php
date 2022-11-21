@extends('backend.master')

@section('content')


    <form action="{{route('book.update',$book->id)}}" method="post" enctype="multipart/form-data">
    @method('put')
        @if($errors->any())
            @foreach($errors->all() as $message)
                <p class="alert alert-danger">{{$message}}</p>
            @endforeach
        @endif

            @if(session()->has('message'))
                <p class="alert alert-success">{{session()->get('message')}}</p>
            @endif

        @csrf
        <div class="form-group">
            <label for="name">Enter Product Name</label>
            <input value="{{$book->name}}" required name="product_name" type="text" class="form-control" id="name" placeholder="Enter Product Name">
        </div>

            <div class="form-group">
                <label for="price">Enter Product Price</label>
                <input value="{{$book->price}}" required name="product_price" type="number" class="form-control" id="price" placeholder="Enter Product Price">
            </div>
            <div class="form-group">
                <label for="stock">Enter Product Stock</label>
                <input value="{{$book->stock}}" required name="product_stock" type="number" class="form-control" id="price" placeholder="Enter Product Stock">
            </div>

            <div class="form-group">
            <label  for="name">Description</label>
            <textarea  class="form-control" name="description" id="">{{$book->description}}</textarea>
        </div>

        <div class="form-group">
            <label for="">Select Status</label>
            <select name="status" id="" class="form-control">
                <option @if($book->status=='active') selected @endif value="active">Active</option>
                <option @if($book->status=='inactive') selected @endif value="inactive">Inactive</option>
            </select>
        </div>

            <div class="form-group">
                <label for="">Select Category</label>
                <select name="category_id" id="" class="form-control">
                    @foreach($categories  as $cat)
                    <option @if($book->category_id==$cat->id)selected @endif value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
            </div>

        <div class="form-group">
            <label for="image">Upload Image</label>
            <input name="image" type="file" class="form-control" id="image">
        </div>



        <button type="submit" class="btn btn-primary">update</button>
    </form>
@endsection
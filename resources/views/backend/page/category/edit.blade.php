

@extends('backend.master')


@section('content')

<h1>Create New Category</h1>
<form action="{{route('category.update',$test->id)}}" method="post" enctype="multipart/form-data">
@method('put')
@if($errors->any())
    @foreach($errors->all() as $show)
    <p class="alert alert-danger">{{$show}}</p>
    @endforeach
@endif




@csrf
<div>
<level for= "name ">Enter Category Name: </level>
<input value="{{$test->name}}" required name="category_name" type="text" class="form-control">
</div>


<div class="form-group">
            <label for="">Select Status</label>
            <select name="status" id="" class="form-control">
                <option @if($test->status=='active') selected @endif value="active">Active</option>
                <option @if($test->status=='inactive') selected @endif value="inactive">Inactive</option>
            </select>
        </div>




<div>
<level for= "name ">Select Date : </level>
<input value="{{$test->DOB}}" name="DOB" type="date" class="form-control">
</div>

<div>
    <button class="btn btn-info">
        Update
    </button>
</div>

</form>
@endsection
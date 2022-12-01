

@extends('backend.master')


@section('content')
<div>
<h1 class="btn btn-primary">Create New Category</h1>
</div>
<form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">

@if($errors->any())
    @foreach($errors->all() as $show)
    <p class="alert alert-danger">{{$show}}</p>
    @endforeach
@endif




@csrf
<div>
<level for= "name ">Enter Category Name: </level>
<input required name="category_name" type="text" class="form-control">
</div>


<div class="form-group">
            <label for="">Select Status</label>
            <select name="status" id="" class="form-control">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>




<div>
<level for= "name ">Select Date : </level>
<input name="DOB" type="date" class="form-control">
</div>

<div>
    <button class="btn btn-info">
        Submit
    </button>
</div>

</form>
@endsection
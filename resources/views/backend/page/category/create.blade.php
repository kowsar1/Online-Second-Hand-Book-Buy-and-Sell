

@extends('master')


@section('content')

<h1>Create New Category</h1>
<form action="{{url('/category/store')}}" method="post">
@csrf
<div>
<level for= "name ">Enter Category Name: </level>
<input name="category_name" type="text" class="form-control">
</div>


<div>
<level for= "name ">Enter password: </level>
<input name="password" type="password" class="form-control">
</div>


<div>
<level for= "name ">Upload User Photo: </level>
<input name="image" type="file" class="form-control">
</div>


<div>
<level for= "name ">Select Date of Birth: </level>
<input name="DOB" type="date" class="form-control">
</div>

<div>
    <button class="btn btn-info">
        Submit
    </button>
</div>

</form>
@endsection
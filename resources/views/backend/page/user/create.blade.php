@extends('backend.master')
 @section('content')

<h1>New User Create</h1>

<form action="">

<div>
<level for= " ">Enter User Name: </level>
<input type="text" class="form-control">
</div>

<div>
<level for= " ">Enter User Password: </level>
<input type="password" class="form-control">
</div>


<div>
<level for= " ">Upload User Photo: </level>
<input type="file" class="form-control">

</div>
<div>
<level for= " ">Select: </level>
<input type="date" class="form-control">

</div>
<div>
<button class="btn btn-primary">Submit</button>

</div>
</form>

 @endsection
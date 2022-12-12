@extends('backend.master')


@section('content')

<h1>Create Report Form</h1>
<form action="{{route('generatereport')}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="created_at">Data From</label>
        <input type="date" name="created_at" class="form-control" id="created_at" placeholder="Enter sale date from">
    </div>


    <div class="form-group">
        <label for="sell_to">Data To</label>
        <input type="date" name="sell_to" class="form-control" id="sell_to" placeholder="Enter sale date to">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection
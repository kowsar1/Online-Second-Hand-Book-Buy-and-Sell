@extends('backend.master')


@section('content')
<h1 class="btn btn-primary">Create Report Form</h1>
<form action="{{route('generatereport')}}" >
    

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

<h1>Report List</h1>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Selling From</th>
            <th scope="col">Total Sell</th>
            <th scope="col">Total Price</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($searchResult as $data)
        <tr>
            <th scope="row">{{$data->id}}</th>
            <td>{{$data->created_at}}</td>
            <td>{{$data->decressed_stock}}</td>
            <td>{{$data->price * $data->decressed_stock}}</td>
            <td>{{$data->status}}</td>
        </tr>
        @endforeach

    </tbody>
</table>

@endsection
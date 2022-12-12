@extends('backend.master')


@section('content')


<h1>Report List</h1>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Selling From</th>
            <th scope="col">Selling To</th>
            <th scope="col">Total Sell</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($searchResult as $data)
        <tr>
            <th scope="row">{{$data->id}}</th>
            <td>{{$data->created_at}}</td>
            <td>{{$data->sell_to}}</td>
            <td>{{$data->decressed_stock}}</td>
            <td>{{$data->status}}</td>
        </tr>
        @endforeach

    </tbody>
</table>
<div>
    <a href="{{route('report')}}" class="btn btn-primary">Generate Report Again</a>
</div>
@endsection
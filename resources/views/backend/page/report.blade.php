@extends('backend.master')


@section('content')

<h1 class="btn btn-primary">Create Report Form</h1>
<form action="{{route('generatereport')}}">


    <div class="d-flex ">

        <div class="form-group mx-2 mt-1">
            <label for="created_at">Data From</label>
            <input type="date" name="created_at" class="form-control" id="created_at" placeholder="Enter sale date from">
        </div>


        <div class="form-group mx-2  mt-1">
            <label for="sell_to">Data To</label>
            <input type="date" name="sell_to" class="form-control" id="sell_to" placeholder="Enter sale date to">
        </div>
        <button type="submit" class="btn btn-success mx-2 my-4">Submit</button>

    </div>
</form>

<div id="orderReport">
    <h1 class="btn btn-danger">Report List {{date('Y-m-d')}}</h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Selling From</th>
                <th scope="col">User Name</th>
                <th scope="col">Book Name</th>
                <th scope="col">Total Sell</th>
                <th scope="col">Total Price</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($searchResult))
            @foreach($searchResult as $data)
            <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->created_at}}</td>
                <td>{{$data->User_name}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->decressed_stock}}</td>
                <td>{{$data->price * $data->decressed_stock}}</td>
                <td>{{$data->status}}</td>
            </tr>
            @endforeach
            @endif

        </tbody>
    </table>
</div>
<div  class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
        
        <button onclick="printDiv('orderReport')" class="btn btn-success">Print</button>

        </div>
        <div class="col-md-4">

       
    </div>

</div>
<script>
    function printDiv(divId) {
        var printContents = document.getElementById(divId).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>

@endsection
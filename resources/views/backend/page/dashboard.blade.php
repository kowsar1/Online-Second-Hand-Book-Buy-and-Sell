

@extends('backend.master')


@section('content')

<div class="row ">
<div class="col-sm-3">
    <div class="card text-dark bg-info mb-3 p-4" style="max-width: 18rem;">
   <div class="card-body">
    <h5 class="card-title fs-5 fw-semibold">Total Sell Post</h5>
    <p class="card-text fw-bold fs-5 text-dark ">{{$totalSellPost}}</p>
  </div>
</div>
</div>
<div class="col-sm-6">
    <div class="card text-dark bg-info mb-3 p-4" style="max-width: 18rem;">
   <div class="card-body">
    <h5 class="card-title fs-5 fw-semibold">Total Sells</h5>
    <p class="card-text fw-bold fs-5 text-dark ">{{$totalSells}}</p>
  </div>
</div>
</div>
</div>
<br>
<div>
<h1 class="btn btn-success">TotalBooks:{{$totalBooks}}</h1>
<table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Book Name</th>
           
            <th scope="col">Stock</th>
        </tr>
        </thead>
        <tbody>

        @foreach($post  as $test)
        <tr>
            <th scope="row">{{$test->id}}</th>
           
            <td>{{$test->name}}</td>
            
            <td>{{$test->stock}}</td>
            
        </tr>
        @endforeach

        </tbody>
    </table>
</div>
<br>
<div>
<h1 class="btn btn-success">TotalCategories:{{$totalcategories}}</h1>
<table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Category Name</th>
           
        </tr>
        </thead>
        <tbody>

        @foreach($data  as $test)
        <tr>
            <th scope="row">{{$test->id}}</th>
           
            <td>{{$test->name}}</td>
            
            
        </tr>
        @endforeach

        </tbody>
    </table>

</div>
<br>



@endsection
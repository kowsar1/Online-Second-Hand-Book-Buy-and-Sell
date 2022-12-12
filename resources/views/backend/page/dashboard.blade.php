

@extends('backend.master')


@section('content')
 <div>
    
    <h4 class="btn btn-success">TotalSellPost:{{$totalSellPost}}</h4>
    
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
<div>

    <h1 class="btn btn-success">TotalSells:{{$totalSells}}</h1>
</div>


@endsection
@extends('frontend.master')
@section('content')

<h1 class="btn btn-primary">Book Details</h1>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>eCommerce Product Detail</title>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

  </head>

  <body>
  <link  href="{{url('/frontend/css/view.css')}}" rel="stylesheet">

	<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src={{url('/uploads/'.$test->image)}} /></div>
						  <div class="action">
							<a href="{{route('webhome')}}" class="add-to-cart btn btn-default" type="button" >Back</a>
							<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>

						</div>
						</div>
						
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">{{$test->name}}</h3>
						
						<div >
							<div class="mt-5">
							<p class="like btn btn-default">	Price: {{$test->price}}BDT</p>
						    </div>
							<div class="mt-5">
							<p class="like btn btn-default">Owner Number: {{$test->phone}}</p>
							</div>
							<div class="mt-5">
							<p class="like btn btn-default">Owner Location: {{$test->location}}</p>
							</div>
							
							@if($test->stock==0)
							<div class="mt-5">
							<p class=" btn btn-success">	Stock Empty</p>
							</div>
							@else<div class="mt-5">
							<p class=" btn btn-success">	Sold Books: {{$test->decressed_stock}}</p>
							</div>
							@endif
							

						</div>
						
						
					</div>
				</div>
			</div>
		</div>
	</div>
  </body>
</html>




@endsection
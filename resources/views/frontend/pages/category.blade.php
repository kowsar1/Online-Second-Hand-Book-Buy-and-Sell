@extends('frontend.master')

@section('content')

<h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Books</span></h2>
    <div class="container mt-100">




        <div class="row">
            @if($searchResult->count()>0)
                @foreach($searchResult as $cat)
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-30">
                        <a class="card-img-tiles" href="#" data-abc="true">
                            <div class="inner">
                                <div class="main-img">
                                    <img src="{{url('/uploads/'.$cat->image)}}" alt="Category">
                                </div>

                            </div>
                        </a>
                        <div class="card-body text-center">
                            <h4 class="card-title">{{$cat->name}}</h4>
                            <p class="text-muted">Price:  {{$cat->price}}</p><a class="btn btn-outline-primary btn-sm" href="#" data-abc="true">View Products</a>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <p class="alert alert-danger">No Book Found.</p>
            @endif
        </div>
    </div>

@endsection

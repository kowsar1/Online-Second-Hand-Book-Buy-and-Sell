@extends('frontend.master')
@section('content')
<!-- Navbar Start -->
<div class="container-fluid bg-dark mb-30">
    <div class="row px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">


                <div class="navbar-nav w-100">


                    @foreach($data as $category)
                    <a  href="{{route('book.category',$category->id)}}"  class="btn btn-outline-warning" class="nav-item nav-link" class="display-4">{{$category->name}}</a>
                    @endforeach
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <span class="h1 text-uppercase text-dark bg-light px-2">Multi</span>
                    <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{route('webhome')}}" class="nav-item nav-link active">Home</a>
                        <a href="#Book" class="nav-item nav-link">Book</a>
                        
                        <a href="#" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                        <a href="" class="btn px-0">
                            <i class="fas fa-heart text-primary"></i>
                            <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                        </a>
                        <a href="" class="btn px-0 ml-3">
                            <i class="fas fa-shopping-cart text-primary"></i>
                            <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar End -->

<!-- Carousel Start -->
<div class="container-fluid mb-3">
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#header-carousel" data-slide-to="1"></li>
                    <li data-target="#header-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item position-relative active" style="height: 700px;">
                        <img class="position-absolute w-100 h-100" src="{{url('/upload/IMG_4868.jpg')}}" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Read Book</h1>
                                <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                <!-- <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item position-relative" style="min-width: 300px ;min-height: 700px;" >
                        <img  class="position-absolute w-100 h-100"  src="{{url('/upload/buybooks.jpg')}}" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Buy from here</h1>
                                <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                <!-- <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item position-relative" style="height: 700px; min-width: 700px">
                        <img class="position-absolute w-100 h-100" src="{{url('/upload/sell.jpg')}}" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Sell here</h1>
                                <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                <!-- <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Shop Now</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="product-offer mb-30" style="height: 500px;">
                <div class="shop-cat-box">

                <img class="position-absolute w-100 h-100" src="{{url('/upload/image.jpg')}}" style="object-fit: cover;">

                    <div class="offer-text">
                        <a href=""class="btn btn-warning" data-toggle="modal" data-target="#exampleModal"> <big> Post Your Book</big></a>
                    </div>
                </div>
            </div>
            <!-- Button trigger modal -->


            <!-- Modal for post book-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('sellpost.create')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="name">Enter Product Name</label>
                                    <input required name="product_name" type="text" class="form-control" id="name" placeholder="Enter Product Name">
                                </div>

                                <div class="form-group">
                                    <label for="price">Enter Product Price</label>
                                    <input required name="product_price" type="number" class="form-control" id="price" placeholder="Enter Product Price">
                                </div>
                                
                                <div class="form-group">
                                    <label for="price">Enter Phone number</label>
                                    <input required name="phone" type="number" class="form-control" id="price" placeholder="Enter phone number">
                                </div>
                                
                                <div class="form-group">
                                    <label for="price">Enter your location</label>
                                    <input required name="location" type="text" class="form-control" id="price" placeholder="Enter your location">
                                </div>

                                <div class="form-group">
                                    <label for="stock">Enter Product Stock</label>
                                    <input required name="product_stock" type="number" class="form-control" id="price" placeholder="Enter Product Stock">
                                </div>

                                <div class="form-group">
                                    <label for="name">Description</label>
                                    <textarea class="form-control" name="description" id=""></textarea>
                                </div>


                                <div class="form-group">
                                    <label for="">Select Category</label>
                                    <select name="category_id" id="" class="form-control">
                                        @foreach($data as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="image">Upload Image</label>
                                    <input name="image" type="file" class="form-control" id="image">
                                </div>



                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Carousel End 

                     <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
    Featured Start -->



        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- Featured Start 
<div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
            </div>
        </div>

    </div>
    -- Featured End -->


    

    <!-- Offer Start -->

    <div id="Book" class="container-fluid pt-5 pb-3">

        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Books</span></h2>
        <div class="container mt-100">




             <div class="row">

                @foreach($sell as $cats)
                <div class="col-md-4 col-sm-6 ">
                    <div class="card  mb-30">
                        <div class="">

                        <a class="card-img-tiles" href="#" data-abc="true">
                            <div class="inner">
                                <div class="main-img">
                                    <img style="min-width: 300px ;min-height: 300px;" src="{{url('/uploads/'.$cats->image)}}" alt="Category">
                                </div>

                            </div>
                        </a>
                        <div class="card-body text-center">
                            <h4 class="card-title">{{$cats->name}}</h4>
                            <h4 class="card-title">{{$cats->description}}</h4>
                            <p class="text-muted">Price: {{$cats->price}}</p><a class="btn btn-outline-primary btn-sm" href=" {{route('view.book',$cats->id)}}" data-abc="true">View Products</a>
                        </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        
        </div>
    </div>
    <!-- Offer End -->


    <!-- Products Start 
    <div class="container-fluid pt-5 pb-3">

        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Books</span></h2>
        <div class="container mt-100">




            <div class="row">

                @foreach($book as $cat)
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-30">
                        <a class="card-img-tiles" href="#" data-abc="true">
                            <div class="inner">
                                <div class="main-img">
                                    <img style="min-width: 300px ;min-height: 300px;" src="{{url('/uploads/'.$cat->image)}}" alt="Category">
                                </div>

                            </div>
                        </a>
                        <div class="card-body text-center">
                            <h4 class="card-title">{{$cat->name}}</h4>
                            <p class="text-muted">Price: {{$cat->price}}</p><a class="btn btn-outline-primary btn-sm" href="#" data-abc="true">View Products</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
-->

    <!-- Products End -->



    <!-- Vendor Start 
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <div class="bg-light p-4">
                        <img src="{{url('frontend/img/vendor-1.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
     -->




    <!-- Back to Top -->
    @endsection
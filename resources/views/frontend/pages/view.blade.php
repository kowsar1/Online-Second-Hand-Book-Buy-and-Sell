@extends('frontend.master')
@section('content')

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-5 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{auth()->user()->name}}</span><span class="text-black-50">{{auth()->user()->email}}</span><span> </span></div>
        </div>
        <div class="col-md-7 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <form action="{{route('user.update')}}" method="post">
                    @csrf
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Name</label>
                            <input name="user_name" type="text" class="form-control" placeholder="first name" value="{{auth()->user()->name}}">
                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Mobile Number</label>
                            <input name="user_phone" type="text" class="form-control" placeholder="enter phone number" value="{{auth()->user()->mobile}}">
                        </div>
                        <div class="col-md-12"><label class="labels">Address </label>
                            <input name="user_address" type="text" class="form-control" placeholder="enter address" value="{{auth()->user()->address}}">
                        </div>

                        <div class="col-md-12"><label class="labels">Email ID</label>
                            <input name="user_email" readonly type="text" class="form-control" placeholder="enter email id" value="{{auth()->user()->email}}">
                        </div>
                    </div>

                    <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button" type="submit">Update Profile</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
<div class="container">
    <p class="btn btn-primary">Your Post</p>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Stock</th>
                <th scope="col">Location</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Description</th>
                <th scope="col">Category</th>
                <th scope="col">Sold Product</th>
                <th scope="col">Image</th>
                <th scope="col">Sell</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sellpost as $sell)
            <tr>
                <th scope="row">{{$sell->id}}</th>
                <td>{{$sell->name}}</td>
                <td>{{$sell->price}}</td>
                <td>{{$sell->stock}}</td>
                <td>{{$sell->location}}</td>
                <td>{{$sell->phone}}</td>
                <td>{{$sell->description}}</td>
                <td>{{$sell->category->name}}</td>
                <td>{{$sell->decressed_stock}}</td>
                <td>

                    <img width="100px" style="border-radius: 10px" src="{{url('/uploads/'.$sell->image)}}" alt="product_image">
                </td>
                <td>
                    @if($sell->stock==0)
                              <p>Out of Stock</p>
                    @else
                    <div class="mt-5">
                        <a href="{{route('sell.book',$sell->id)}}" class="btn btn-primary">Sell</a>
                        @endif
                </td>

            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection
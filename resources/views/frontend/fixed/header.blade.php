 <!-- Topbar Start -->
 <div class="container-fluid">
   <div class="row bg-secondary py-1 px-xl-5">
     <div class="col-lg-6 d-none d-lg-block">
       <div class="d-inline-flex align-items-center h-100">
         <a class="text-body mr-3" href="">About</a>
         <a class="text-body mr-3" href="">Contact</a>
         <a class="text-body mr-3" href="">Help</a>
         <a class="text-body mr-3" href="">FAQs</a>
       </div>
     </div>
     <div class="col-lg-6 text-center text-lg-right">
       <div class="d-inline-flex align-items-center">
         <div class="btn-group">
           <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">My Account</button>
           <div class="dropdown-menu dropdown-menu-right">
             @auth
             <a href="{{route('user.profile')}}" class="dropdown-item">
               {{-- <img src="" alt="image">--}}
               {{auth()->user()->name}}
             </a>
             <a href="{{route('user.logout')}}" class="dropdown-item" type="button">Sign Out</a>
             @else
             <a class="dropdown-item" data-toggle="modal" data-target="#login" type="button">Sign in</a>
             <a class="dropdown-item" data-toggle="modal" data-target="#register" type="button">Sign up</a>
             @endauth
           </div>
         </div>
       </div>
     </div>

     <!-- Button trigger modal -->


     <!-- Modal for sign in-->
     <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">sign in</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">
             <form action="{{route('user.login')}}" method="post">
               @csrf
               <div class="form-group">
                 <label for="exampleInputEmail1">Email address</label>
                 <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                 <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
               </div>
               <div class="form-group">
                 <label for="exampleInputPassword1">Password</label>
                 <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
               </div>
               <button type="submit" class="btn btn-primary">Submit</button>
             </form>
           </div>
         </div>
       </div>
     </div>


     <!-- Modal for signup -->
     <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Sign up</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">
             <form action="{{route('register')}}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="form-group">
                 <label for="exampleInputEmail1">Enter your Name</label>
                 <input name="name" type="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">

               </div>
               <div class="form-group">
                 <label for="exampleInputEmail1">Email address</label>
                 <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                 <small id="emailHelp" class="form-text text-muted"></small>
               </div>
               <div class="form-group">
                 <label for="exampleInputPassword1">Password</label>
                 <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
               </div>
               <div class="form-group">
                 <label for="exampleInputEmail1">Enter Phone Number</label>
                 <input name="mobile" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone Number">

               </div>
               <div class="form-group">
                 <label for="exampleInputEmail1">Enter Your Address</label>
                 <input name="address" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Location">

               </div>
               <button type="submit" class="btn btn-primary">Submit</button>
             </form>


           </div>
         </div>
       </div>






       <div class="d-inline-flex align-items-center d-block d-lg-none">
         <a href="" class="btn px-0 ml-2">
           <i class="fas fa-heart text-dark"></i>
           <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
         </a>
         <a href="" class="btn px-0 ml-2">
           <i class="fas fa-shopping-cart text-dark"></i>
           <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
         </a>
       </div>
     </div>
   </div>
   <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
     <div class="col-lg-4">
       <a href="{{route('webhome')}}" class="text-decoration-none">
         <span class="h1 text-uppercase text-primary bg-dark px-2">Buy</span>
         <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Sell</span>
         <span class="h1 text-uppercase text-primary bg-dark px-2">Books</span>
       </a>
     </div>
     <!--
            @if(session()->has('message'))
            <p class="alert alert-success">{{session()->get('message')}}</p>
            @endif
            @if(session()->has('error'))
            <p class="alert alert-danger">{{session()->get('error')}}</p>
            @endif -->
     <div class="col-lg-4 col-6 text-left">
       <form action="{{route('book.search')}}">
         <div class="input-group">
           <input name="Search_key" type="text" class="form-control" placeholder="Search for products">
           <div class="input-group-append">
             <button type="submit" class="btn btn-success">Search</button>
           </div>
         </div>
       </form>
     </div>
     
   </div>
 </div>
 <!-- Topbar End -->
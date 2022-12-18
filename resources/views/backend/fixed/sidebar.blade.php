<nav class="sidebar">
        <div class="logo d-flex justify-content-between">
         <a href="{{route('home')}}"  class="btn btn-primary">  <h6 class="btn btn-info">Second Hand book </br>Buying and Selling </h6></a>
            <a href="index.html"><img src="img/logo.png" alt=""></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            <li class="">
                <a  href="{{route('home')}}" aria-expanded="false">

                    <img src="{{url('/upload/z.png')}}" alt="image">
                    <span>Dashboard</span>
                </a>
                
            </li>
            
            <li class="">
                <a  href="{{route('category')}}" aria-expanded="false">
                    <img src="{{url('/upload/category.png')}}" alt="">
                    <span>Category</span>
                </a>
            </li>
            <li class="">
                <a  href="{{route('book')}}" aria-expanded="false">
                    <img src="{{url('/upload/book.png')}}" alt="">
                    <span>Books</span>
                </a>
                
            </li>
            <li class="">
                <a  href="{{route('sellpost.view')}}" aria-expanded="false">
                    <img src="{{url('/upload/post.jpg')}}" alt="">
                    <span>Sellpost</span>
                </a>
               
            </li>
            <li class="">
                <a  href="{{route('user.view')}}" aria-expanded="false">
                    <img src="{{url('/upload/user.png')}}" alt="">
                    <span>Users</span>
                </a>
                
            </li>
            <li class="">
                <a  href="{{route('about')}}" aria-expanded="false">
                <img src="{{url('/upload/about.png')}}" alt="">
                    <span>About</span>
                </a>
                
            </li>
            
            <li class="">
                <a  href="{{route('report')}}" aria-expanded="false">
                <img src="{{url('/upload/report.png')}}" alt="">
                    <span>Report</span>
                </a>
                
            </li>
    </nav>
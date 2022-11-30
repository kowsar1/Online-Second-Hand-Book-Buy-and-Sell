<nav class="sidebar">
        <div class="logo d-flex justify-content-between">
         <a href="{{route('home')}}"  class="btn btn-info">  <h6>Second hand book </br>Buying and Selling </h6></a>
            <a href="index.html"><img src="img/logo.png" alt=""></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            <li class="mm-active">
                <a class="has-arrow" href="{{route('home')}}" aria-expanded="false">

                    <img src="img/menu-icon/dashboard.svg" alt="">
                    <span>Dashboard</span>
                </a>
                
            </li>
            
            <li class="">
                <a class="has-arrow" href="{{route('category')}}" aria-expanded="false">
                    <img src="img/menu-icon/3.svg" alt="">
                    <span>Category</span>
                </a>
            </li>
            <li class="">
                <a class="has-arrow" href="{{route('book')}}" aria-expanded="false">
                    <img src="img/menu-icon/3.svg" alt="">
                    <span>Books</span>
                </a>
                
            </li>
            <li class="">
                <a class="has-arrow" href="{{route('sellpost.view')}}" aria-expanded="false">
                    <img src="img/menu-icon/4.svg" alt="">
                    <span>Sellpost</span>
                </a>
               
            </li>
            <li class="">
                <a class="has-arrow" href="{{route('user.view')}}" aria-expanded="false">
                    <img src="img/menu-icon/5.svg" alt="">
                    <span>Users</span>
                </a>
                
            </li>
            <li class="">
                <a class="has-arrow" href="{{route('about')}}" aria-expanded="false">
                    <img src="img/menu-icon/5.svg" alt="">
                    <span>About</span>
                </a>
                
            </li>
            
    </nav>
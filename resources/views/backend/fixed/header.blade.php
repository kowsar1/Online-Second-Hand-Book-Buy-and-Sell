<div class="container-fluid g-0">
            <div class="row">
                <div class="col-lg-12 p-0 ">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="navbar-nav w-100">
                            <div class="navbar-nav w-100">
                                <form action="#">
                                    <div class="navbar-nav w-90" >
                                       <a href="{{route('home')}}" style="padding: 10px ;width: 1000px;  margin: 10px;border: 2px solid powderblue; font-family:'Courier New', Courier, monospace" class="btn btn-success" >Buy and Sell</a>
                                    </div>
                                    <button type="submit"> <img src="img/icon/icon_search.svg" alt=""> </button>
                                </form>
                            </div>
                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">
                        @include('notify::components.notify')

                            <div class="profile_info">
                                <img src="{{url('/uploads/20221129061126.jpg')}}" alt="#">
                                <div class="profile_info_iner">
                                    <div class="profile_author_name">
                                        <p>Admin </p>
                                        <h5>{{auth()->user()->name}} </h5>
                                    </div>
                                    <div class="profile_info_details">
                                        <a href="#">My Profile </a>
                                        <a href="#">Settings</a>
                                        <a href="{{route('logout')}}">Log Out </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<header class="topbar" data-navbarbg="skin5">
            
            
<nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="/dashboard">
                        <!-- Logo icon -->
                        <b class="" style="color: black;">
                            <!-- Dark Logo icon -->
                            <img style="width:180px;" src="{{asset('public/images/about/logo-6030f93f7573e.png')}}" alt="homepage" />
                            <!-- <div class="col-2">
                                
                            
                                <img src="{{asset('css/images/logo.png')}}"  class="logo"></a>
                            </div> -->
    
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <!-- <span class="logo-text">
                            dark Logo text -->
                            <!-- <img src="{{asset('backend/plugins/images/logo-text.png')}}" alt="homepage" />
                        </span> -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ml-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li>
                            <div class="dropleft">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bell ">
                                        @if (Auth::user()->unreadNotifications->count())
                                        <span class="badge">{{Auth::user()->unreadNotifications->count()}}</span>
                                        @endif
                                        
                                    </i>
                                </a>
                              
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" style="text-align: center; color:blue" href="/markAsRead">Mark as Read</a>
                                
                                    @foreach (Auth::user()->unreadNotifications as $notification)
                                    <a style="background-color: lightblue" class="dropdown-item" href="/adminpost">The Post <b>{{$notification->data['name']}}</b> has been Posted About {{$notification->created_at->diffforHumans()}}</a>
                                    @endforeach

                                    @foreach (Auth::user()->readNotifications as $notification)
                                    <a class="dropdown-item" href="/adminpost">The Post <b>{{$notification->data['name']}}</b> has been Posted About {{$notification->created_at->diffforHumans()}}</a>
                                    @endforeach
                                </div>
                              </div>                                
                          
                        </li>

                        <li class=" in">
                            <form role="search" action="{{url('searchAdmin')}}" class="app-search d-none d-md-block mr-3" method="get">
                                <input type="text" name="searchs" placeholder="Search..." class="form-control mt-0">
                                
                                <button class="btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                            
                            
                        </li>

                        

                        
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="{{asset('backend/plugins/images/users/varun.jpg')}}" alt="user-img" width="36" class="img-circle">
                                <span class="text-white font-medium">
                                   {{ Auth::user()->name }}
                                    
                                </span>
                            </a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->

                        <!-- log out -->
                        
                    </ul>
                </div>
            </nav>
            </header>
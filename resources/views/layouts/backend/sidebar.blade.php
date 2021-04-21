<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li class="sidebar-item pt-2">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('dashboard')}}"
                        aria-expanded="false">
                        <i class="far fa-clock" aria-hidden="true"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('adminpost')}}"
                        aria-expanded="false">
                        <i class="fa fa-table" aria-hidden="true"></i>
                        <span class="hide-menu">Post Management</span>
                    </a>
                </li>

            
                
                
                
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('users')}}"
                        aria-expanded="false">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <span class="hide-menu">User Management</span>
                    </a>
                </li>
                <li class="sidebar-item">                                
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" data-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-list" aria-hidden="true"></i>
                    Category Management
                    </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item waves-effect waves-dark sidebar-link" href="{{route('categoryy.index')}}">All Categories</a>
                            <a class="dropdown-item waves-effect waves-dark sidebar-link" href="{{route('categoryy.create')}}">Add Category</a>

                </li>

               
               
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('index') }}"
                        aria-expanded="false">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <span class="hide-menu">Home Page</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('home') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i>
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
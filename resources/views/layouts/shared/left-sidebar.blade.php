<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">
    <div class="h-100" data-simplebar>
        <!-- User box -->
        <div class="user-box text-center">
            <img src="{{ asset('assets/images/users/user-1.jpg') }}" alt="user-img" title="Mat Helme"
                class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                    data-toggle="dropdown">Geneva Kennedy</a>
                <div class="dropdown-menu user-pro-dropdown">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user mr-1"></i>
                        <span>My Account</span>
                    </a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings mr-1"></i>
                        <span>Settings</span>
                    </a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock mr-1"></i>
                        <span>Lock Screen</span>
                    </a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out mr-1"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </div>
            <p class="text-muted">Admin Head</p>
        </div>
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul id="side-menu">
                <li class="menu-title">Main Apps</li>
                <li>
                    <a href="{{ route('home') }}">
                        <i data-feather="airplay"></i>
                        <span> Dashboards </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('calendars') }}">
                        <i data-feather="calendar"></i>
                        <span> Calendar </span>
                    </a>
                </li>
                <hr>
                <li class="menu-title">Enrolled</li>
                <li>
                    <a href="{{ route('tasks') }}">
                        <i class="mdi mdi-clipboard-check-outline"></i>
                        <span> My Tasks </span>
                    </a>
                </li>
                <li>
                    <a href="#class-sidebar" data-toggle="collapse">
                        <i class=" fas fa-layer-group"></i>
                        <span class="badge badge-success badge-pill float-right" id="class-count">
                            {{ $classes_list->count() }}
                        </span>
                        <span> Class List </span>
                    </a>
                    <div class="collapse" id="class-sidebar">
                        <ul class="nav-second-level" id="my-class-list">
                            @foreach ($classes_list as $classList)
                                <li>
                                    <a href="{{ route('class.show', $classList->id) }}">{{ $classList->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                <hr>
                <li class="menu-title">More</li>
                <li>
                    <a href="#sidebarTemplates" data-toggle="collapse">
                        <i data-feather="airplay"></i>
                        <span class="badge badge-success badge-pill float-right">3</span>
                        <span> Templates </span>
                    </a>
                    <div class="collapse" id="sidebarTemplates">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">Dashboard 2</a>
                            </li>
                            <li>
                                <a href="#">Dashboard 3</a>
                            </li>
                            <li>
                                <a href="#">Dashboard 4</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- End Sidebar -->
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>
<!-- Left Sidebar End -->

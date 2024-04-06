<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <ul class="navigation-left hidden">
            <li class="nav-item active" data-item="dashboard">
                <a class="nav-item-hold" href="{{route('admin.dashboard')}}">
                    <i class="nav-icon i-Bar-Chart"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <div class="triangle"></div>
            </li>
            
            
        </ul>
    </div>
    <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <i class="sidebar-close i-Close" (click)="toggelSidebar()"></i>
        <header>
            <div class="logo">
                <img src="{{asset('img/logo.png')}}" alt="">
            </div>
        </header>
        <!-- Submenu Dashboards -->
        <div class="submenu-area" data-parent="dashboard">
            <header>
                <h6>Dashboard</h6>
                <!-- <p>Your all shop status and activity goes here</p> -->
            </header>
            <ul class="childNav">
                @can('dashboard-list')
                <li class="nav-item">
                    <a href="{{route('admin.dashboard')}}" class="@if(route::is('admin.dashboard')) open @endif">
                        <i class="nav-icon i-Dashboard my_bold"></i>
                        <span class="item-name my_bold">Dashboard</span>
                    </a>
                </li>
                @endcan
                @can('teacher-list')
                <li class="nav-item">
                    <a href="{{route('admin.teacher')}}" class="@if(route::is('admin.teacher')) open @endif" class="">
                        <i class="nav-icon i-Book my_bold"></i>
                        <span class="item-name my_bold">Teachers</span>
                    </a>
                </li>
                @endcan
                {{-- <li class="nav-item">
                    <a href="{{route('admin.tipper')}}" class="@if(route::is('admin.tipper')) open @endif" class="">
                        <i class="nav-icon i-Book my_bold"></i>
                        <span class="item-name my_bold">Tipper</span>
                    </a>
                </li> --}}
                @can('student-list')
                <li class="nav-item">
                    <a href="{{route('admin.student')}}" class="@if(route::is('admin.student')) open @endif" class="">
                        <i class="nav-icon i-Book my_bold"></i>
                        <span class="item-name my_bold">Students</span>
                    </a>
                </li>
                @endcan
                @can('reports-list')
                <li class="nav-item">
                    <a href="{{route('admin.teacher.report')}}" class="@if(route::is('admin.teacher.report')) open @endif">
                        <i class="nav-icon i-Add-User my_bold"></i>
                        <span class="item-name my_bold">Reports</span>
                    </a>
                </li>
                @endcan
                {{-- <li class="nav-item">
                    <a href="" id ="pickupAndCollect" class="collapsed" data-toggle="collapse" aria-expanded="false"><i class="nav-icon fa fa-angle-down"></i> <span class="d-none d-md-inline my_bold">Pickup & Collect</span> </a>
                    <div class="collapse" id="innerMenu" data-parent="#sidebar">
                        <a href="#">
                            <i class="nav-icon i-Book my_bold"></i>
                            <span class="item-name my_bold">Slots</span>
                        </a>
                        <a href="#">
                            <i class="nav-icon i-Book my_bold"></i>
                            <span class="item-name my_bold">Leaves</span>
                        </a>
                    </div>
                </li> --}}
                @can('admin-list')
                <li class="nav-item">
                    <a href="{{route('admin.sub')}}" class="@if(route::is('admin.sub')) open @endif">
                        <i class="nav-icon i-Add-UserStar my_bold"></i>
                        <span class="item-name my_bold">Admin</span>
                    </a>
                </li>
                @endcan
                @can('role-list')
                <li class="nav-item">
                    <a href="{{route('admin.role')}}" class="@if(route::is('admin.role')) open @endif">
                        <i class="nav-icon i-Key-Lock my_bold"></i>
                        <span class="item-name my_bold">Role</span>
                    </a>
                </li>
                @endcan
                 
            </ul>
        </div>

    </div>
</div>
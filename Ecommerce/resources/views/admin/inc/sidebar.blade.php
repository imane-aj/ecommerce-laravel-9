<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
        <a class="sidebar-brand brand-logo" href=""><img src="{{ asset('img/logoHead.png') }}" /></a>
        <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href=""><img src="{{ asset('img/logoHead.png') }}"
                alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    {{-- <img src="assets/images/faces/face1.jpg" alt="profile" /> --}}
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column pr-3">
                    <span class="font-weight-medium mb-2"></span>
                </div>
                <span class="badge badge-danger text-white ml-3 rounded"></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="mdi mdi-contacts menu-icon"></i>
                <span class="menu-title">Confirmed Users</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="mdi mdi-contacts menu-icon"></i>
                <span class="menu-title">None Confirmed Users</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="mdi mdi-table-large menu-icon"></i>
                <span class="menu-title">Rating Projects</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="mdi mdi-table-large menu-icon"></i>
                <span class="menu-title">Projects Listing</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="mdi mdi-table-large menu-icon"></i>
                <span class="menu-title">Profile</span>
            </a>
        </li>

        <li class="nav-item sidebar-actions">
            <div class="nav-link">
                <div class="mt-4">
                    <ul class="mt-4 pl-0">
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    <i class="mdi mdi-logout mr-2 text-primary"></i> {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form></li>
                    </ul>
                </div>
            </div>
        </li>
    </ul>
</nav>
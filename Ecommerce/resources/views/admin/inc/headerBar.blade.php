<nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">

    <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
      <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
        <i class="mdi mdi-menu"></i>
      </button>
      <ul class="navbar-nav navbar-nav-right ml-lg-auto">

        <li class="nav-item nav-profile dropdown border-0">
          <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" role="button" data-toggle="dropdown" aria-expanded="false">

            <img src="" alt="" class="nav-profile-img mr-2 photoHeader">

            <span class="profile-name">{{ Auth::user()->name }}</span>
          </a>
          <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
            <a class="dropdown-item" href="#">
              <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
            <a class="dropdown-item" href="">
              <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    <i class="mdi mdi-logout mr-2 text-primary"></i> {{ __('Log Out') }}
                </x-dropdown-link>
            </form></a>
          </div>

        </li>
        {{-- <div class="pt-4 pb-1 border-t border-gray-200">
          <div class="px-4">
              <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
              <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
          </div>

          <div class="mt-3 space-y-1">
              <x-responsive-nav-link :href="route('profile.edit')">
                  {{ __('Profile') }}
              </x-responsive-nav-link>

              <!-- Authentication -->
              <form method="POST" action="{{ route('logout') }}">
                  @csrf

                  <x-responsive-nav-link :href="route('logout')"
                          onclick="event.preventDefault();
                                      this.closest('form').submit();">
                      {{ __('Log Out') }}
                  </x-responsive-nav-link>
              </form>
          </div>
      </div> --}}

      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </nav>



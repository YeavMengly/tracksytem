<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ route("dashboard.index") }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset("assets/images/DMS.svg") }}" alt="" height="24">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset("assets/images/DMS.svg") }}" alt="" height="24"> <span class="logo-txt">DMS</span>
                    </span>
                </a>
            </div>
            <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
        </div>
        <div class="d-flex">
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item bg-light-subtle border-start border-end" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ asset("assets/images/users/user.png") }}"
                         alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1 fw-medium">{{ \Auth::user()->fullname }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{ route("profile.index") }}"><i class="mdi mdi mdi-face-man font-size-16 align-middle me-1"></i> {{ __("menus.account.profile") }}</a>
                    <a class="dropdown-item" href="{{ route("profile.password") }}"><i class="mdi mdi mdi-key font-size-16 align-middle me-1"></i> {{ __("buttons.change.password") }}</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ url('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> {{ __("menus.account.logout") }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>

        </div>
    </div>
</header>

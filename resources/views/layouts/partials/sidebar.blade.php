<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="{{ Request::routeIs('dashboard.*') ? 'mm-active' : '' }}">
                    <a href="{{ route('dashboard.index') }}"
                        class="{{ Request::routeIs('dashboard.*') ? 'active' : '' }}">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">{{ __('menus.dashboard') }}</span>
                    </a>
                </li>

                @if (hasPermission('employee.index'))
                    <li class="{{ Request::routeIs('employee.*') ? 'mm-active' : '' }}">
                        <a href="{{ route('employees.index') }}"
                            class="{{ Request::routeIs('dashboard.*') ? 'active' : '' }}">
                            <i data-feather="book"></i>
                            <span data-key="t-dashboard">{{ __('menus.employee') }}</span>
                        </a>
                    </li>
                @endif

                @if (hasPermission('document.index'))
                    <li class="{{ Request::routeIs('document.*') ? 'mm-active' : '' }}">
                        <a href="{{ route('document.index') }}"
                            class="{{ Request::routeIs('dashboard.*') ? 'active' : '' }}">
                            <i data-feather="book"></i>
                            <span data-key="t-dashboard">{{ __('menus.document') }}</span>
                        </a>
                    </li>
                @endif
                @if (hasPermission('notes.index'))
                    <li class="{{ Request::routeIs('notes.*') ? 'mm-active' : '' }}">
                        <a href="{{ route('notes.index') }}"
                            class="{{ Request::routeIs('notes.*') ? 'active' : '' }}">
                            <i data-feather="clipboard"></i>
                            <span data-key="t-dashboard">{{ __('menus.notes') }}</span>
                        </a>
                    </li>
                @endif
                @if (auth()->user()->role_id == 1)
                    <li class="menu-title" data-key="t-setting">{{ __('menus.setting') }}</li>
                    <li class="{{ Request::routeIs('system.*') ? 'mm-active' : '' }}">
                        <a href="{{ route('system.index') }}"
                            class="{{ Request::routeIs('system.*') ? 'active' : '' }}">
                            <i data-feather="database"></i>
                            <span data-key="t-roles">{{ __('menus.setting.log') }}</span>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('keys.*') ? 'mm-active' : '' }}">
                        <a href="{{ route('keys.index') }}" class="{{ Request::routeIs('keys.*') ? 'active' : '' }}">
                            <i data-feather="shield"></i>
                            <span data-key="t-roles">{{ __('menus.api.key') }}</span>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('category.*') ? 'mm-active' : '' }}">
                        <a href="{{ route('category.index') }}"
                            class="{{ Request::routeIs('category.*') ? 'active' : '' }}">
                            <i data-feather="folder"></i>
                            <span data-key="t-roles">{{ __('menus.setting.category') }}</span>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('role.*') ? 'mm-active' : '' }}">
                        <a href="{{ route('role.index') }}">
                            <i data-feather="sliders"></i>
                            <span data-key="t-roles">{{ __('menus.setting.roles') }}</span>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('user.*') ? 'mm-active' : '' }}">
                        <a href="{{ route('user.index') }}">
                            <i data-feather="users"></i>
                            <span data-key="t-member">{{ __('menus.setting.member') }}</span>
                        </a>
                    </li>
                @endif
                @if (hasPermission('category.index') and auth()->user()->role_id != 1)
                    <li class="menu-title" data-key="t-setting">{{ __('menus.setting') }}</li>
                    <li class="{{ Request::routeIs('category.*') ? 'mm-active' : '' }}">
                        <a href="{{ route('category.index') }}"
                            class="{{ Request::routeIs('category.*') ? 'active' : '' }}">
                            <i data-feather="folder"></i>
                            <span data-key="t-roles">{{ __('menus.setting.category') }}</span>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>

<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu"
            aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-brand navbar-brand-autodark">
            <a href="#">
                <img src="#" alt="" width="150">
            </a>
        </div>
        <div class="navbar-nav flex-row d-lg-none">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                    aria-label="Open user menu">
                    <span class="avatar avatar-sm" style="background-image: url(#)"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <a href="#" class="dropdown-item">Profile</a>
                    <div class="dropdown-divider"></div>
                    <form action="#" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="sidebar-menu">
            <ul class="navbar-nav pt-2">
                @foreach (config()->get('sidebar') as $test)
                    @php
                        $nav_link = $test['route_name'] != null ? route($test['route_name']) : 'javascript:void(0)';
                    @endphp
                    <li
                        class="nav-item {{ Request::routeIs($test['route_name']) ? 'active' : '' }} {{ $test['has_sub'] == true ? 'dropdown' : '' }}">
                        @if ($test['has_sub'] == true)
                            <a class="nav-link dropdown-toggle" href="{{ $nav_link }}" data-bs-toggle="dropdown"
                                data-bs-auto-close="false" role="button">
                                <span class="nav-link-icon">
                                    <i class="{{ $test['icon'] }}"></i>
                                </span>
                                <span class="nav-link-title">
                                    Master
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-columns">
                                    <div class="dropdown-menu-column">
                                        @foreach ($test['sub'] as $test_sub)
                                            <a class="dropdown-item {{ Request::routeIs($test_sub['route_name']) ? 'active' : '' }}" href="{{ route($test_sub['route_name']) }}">
                                                {{ $test_sub['title'] }}
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @else
                            <a class="nav-link" href="{{ $nav_link }}">
                                <span class="nav-link-icon">
                                    <i class="{{ $test['icon'] }}"></i>
                                </span>
                                <span class="nav-link-title">
                                    {{ $test['title'] }}
                                </span>
                            </a>
                        @endif
                    </li>
                @endforeach

                <hr class="m-3">

                <li class="nav-item d-none d-lg-block">
                    <form action="#" method="post">
                        @csrf
                        <button type="submit" class="nav-link">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-logout-2">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M10 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2" />
                                    <path d="M15 12h-12l3 -3" />
                                    <path d="M6 15l-3 -3" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Logout
                            </span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</aside>

{{-- filepath: resources/views/layout/adminNavigation.blade.php --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-opacity-90 fixed-top border-bottom border-warning border-opacity-50"
    id="adminNav" style="backdrop-filter: blur(10px);">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold fs-4" href="{{ route('admin.dashboard') }}" style="letter-spacing: 1px;">
            <i class="bi bi-speedometer2 text-warning me-2"></i>
            <span class="text-warning">ADMIN</span> Dashboard
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar"
            aria-controls="adminNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="adminNavbar">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item mx-2">
                    <a class="nav-link fw-medium {{ Request::is('admin') && !Request::is('admin/*') ? 'active text-warning' : 'text-white-50' }}"
                        href="{{ route('admin.dashboard') }}">
                        <i class="bi bi-house-fill me-1"></i>Dashboard
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link fw-medium {{ Request::is('admin/projects*') ? 'active text-warning' : 'text-white-50' }}"
                        href="{{ route('admin.projects.index') }}">
                        <i class="bi bi-briefcase-fill me-1"></i>Projects
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link fw-medium {{ Request::is('admin/employees*') ? 'active text-warning' : 'text-white-50' }}"
                        href="{{ route('admin.employees.index') }}">
                        <i class="bi bi-people-fill me-1"></i>Employees
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link fw-medium {{ Request::is('admin/reviews*') ? 'active text-warning' : 'text-white-50' }}"
                        href="{{ route('admin.reviews.index') }}">
                        <i class="bi bi-chat-quote-fill me-1"></i>Reviews
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <span class="nav-link text-white-50">
                        <i class="bi bi-person-circle me-1"></i>{{ Auth::user()->name }}
                    </span>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link fw-medium text-white-50" href="/" target="_blank">
                        <i class="bi bi-box-arrow-up-right me-1"></i>View Site
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger btn-sm">
                            <i class="bi bi-box-arrow-right me-1"></i>Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
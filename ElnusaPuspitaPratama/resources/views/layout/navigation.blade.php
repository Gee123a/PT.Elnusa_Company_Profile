<nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-opacity-75 fixed-top border-bottom border-white border-opacity-10"
    id="mainNav" style="backdrop-filter: blur(10px);">
    <div class="container">
        
        <a class="navbar-brand fw-bold fs-4" href="/" style="letter-spacing: 1px;">
            <span class="text-warning">ELNUSA</span> Puspita Pratama
        </a>

        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-3">
                    <a class="nav-link fw-medium {{ Request::is('/') ? 'active text-warning' : 'text-white-50' }}"
                        href="/">
                        Home
                    </a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link fw-medium {{ Request::is('project*') ? 'active text-warning' : 'text-white-50' }}"
                        href="/project">
                        Projects
                    </a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link fw-medium {{ Request::is('team') ? 'active text-warning' : 'text-white-50' }}"
                        href="/team">
                        Our Team
                    </a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link fw-medium {{ Request::is('clients') ? 'active text-warning' : 'text-white-50' }}"
                        href="/clients">
                        Our Clients
                    </a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link fw-medium {{ Request::is('contact') ? 'active text-warning' : 'text-white-50' }}"
                        href="/contact">
                        Contact Us
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-opacity-75 fixed-top border-bottom border-white border-opacity-10" id="mainNav" style="backdrop-filter: blur(10px);">
    <div class="container">
        <!-- Brand/Logo -->
        <a class="navbar-brand fw-bold fs-4" href="/" style="letter-spacing: 1px;">
            <span class="text-warning">ELNUSA</span> Puspita Pratama
        </a>

        <!-- Toggler for mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-3">
                    <a class="nav-link fw-medium {{ Request::is('/') ? 'active text-warning' : 'text-white-50' }}" href="/">
                        Home
                    </a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link fw-medium {{ Request::is('project*') ? 'active text-warning' : 'text-white-50' }}" href="/project">
                        Projects
                    </a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link fw-medium text-white-50" href="#find-us">
                        Find Us
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    /* Minimal custom CSS - hanya untuk effect yang tidak ada di Bootstrap */
    #mainNav {
        transition: all 0.3s ease-in-out;
    }

    #mainNav.scrolled {
        background-color: rgba(0, 0, 0, 0.9) !important;
        border-bottom-color: rgba(255, 193, 7, 0.5) !important;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
    }

    .nav-link {
        position: relative;
        transition: color 0.3s ease;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: 0;
        left: 50%;
        background-color: #ffc107;
        transition: width 0.3s ease;
        transform: translateX(-50%);
    }

    .nav-link:hover::after,
    .nav-link.active::after {
        width: 100%;
    }

    .nav-link:hover {
        color: #ffc107 !important;
    }
</style>

<script>
    // Add scrolled class to navbar when scrolling
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('mainNav');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>
@extends('layout.main')
@section('title', 'Home')
@section('content')

    <!-- Hero Section with Full Screen Image -->
    <section id="hero" class="position-relative vh-100 d-flex align-items-center overflow-hidden">
        <!-- Background Image Overlay -->
        <div class="position-absolute top-0 start-0 w-100 h-100" 
             style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=1920') center/cover no-repeat; z-index: -1;">
        </div>

        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side - Slogan & Description -->
                <div class="col-lg-6 text-white">
                    <h1 class="display-3 fw-bold mb-4" data-aos="fade-right">
                        Building Dreams, Creating Reality
                    </h1>
                    <p class="lead mb-4" data-aos="fade-right" data-aos-delay="100">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                    </p>
                    <a href="#company-profile" class="btn btn-outline-light btn-lg px-5 py-3" data-aos="fade-right" data-aos-delay="200">
                        Pelajari Lebih Lanjut <i class="bi bi-arrow-down ms-2"></i>
                    </a>
                </div>

                <!-- Right Side - Company Name -->
                <div class="col-lg-6 text-white text-lg-end mt-5 mt-lg-0">
                    <h2 class="display-1 fw-bold" data-aos="fade-left" style="letter-spacing: 2px;">
                        ELNUSA
                    </h2>
                    <h3 class="display-4 fw-light" data-aos="fade-left" data-aos-delay="100">
                        Puspita Pratama
                    </h3>
                    <p class="fs-5 mt-3" data-aos="fade-left" data-aos-delay="200">
                        Your Trusted Construction Partner
                    </p>
                </div>
            </div>
        </div>

        <!-- Scroll Down Indicator -->
        <div class="position-absolute bottom-0 start-50 translate-middle-x mb-4">
            <a href="#company-profile" class="text-white text-decoration-none">
                <i class="bi bi-chevron-down fs-1"></i>
            </a>
        </div>
    </section>

    <!-- Company Profile Section dengan Background Image -->
    <section id="company-profile" class="py-5 position-relative overflow-hidden">
        <!-- Background Image dengan Better Overlay -->
        <div class="position-absolute top-0 start-0 w-100 h-100" 
             style="background: linear-gradient(rgba(255,255,255,0.92) 0%, rgba(255,255,255,0.95) 100%), url('https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=1920') center/cover no-repeat fixed; z-index: -1; filter: brightness(1.1);">
        </div>

        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <div class="bg-white bg-opacity-75 d-inline-block px-5 py-3 rounded-pill shadow-sm" data-aos="fade-up">
                        <h2 class="display-4 fw-bold mb-0">Profil Perusahaan</h2>
                    </div>
                    <div class="mx-auto bg-warning mt-3" style="width: 100px; height: 4px;"></div>
                </div>
            </div>
            <div class="row align-items-center g-4">
                <div class="col-lg-6 mb-4" data-aos="fade-right">
                    <div class="bg-white p-4 p-lg-5 rounded-3 shadow-lg border border-warning border-opacity-25">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-warning bg-opacity-25 p-3 rounded-circle me-3">
                                <i class="bi bi-building fs-3 text-warning"></i>
                            </div>
                            <h3 class="fw-bold mb-0 text-dark">Tentang Kami</h3>
                        </div>
                        <p class="text-muted mb-3">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nisl eget ultricies aliquam, nunc nisl aliquet nunc, vitae aliquam nisl nunc vitae nisl. Sed euismod, nisl eget ultricies aliquam.
                        </p>
                        <p class="text-muted mb-4">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <!-- Stats -->
                        <div class="row g-3 mt-4">
                            <div class="col-6">
                                <div class="bg-warning bg-opacity-10 p-3 rounded text-center">
                                    <h4 class="fw-bold text-warning mb-1">150+</h4>
                                    <small class="text-muted">Projects</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="bg-warning bg-opacity-10 p-3 rounded text-center">
                                    <h4 class="fw-bold text-warning mb-1">15+</h4>
                                    <small class="text-muted">Years</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4" data-aos="fade-left">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=800" 
                             alt="Construction" 
                             class="img-fluid rounded-3 shadow-lg border-5 border-white">
                        <!-- Overlay Badge -->
                        <div class="position-absolute bottom-0 start-0 m-4 bg-warning p-3 rounded-3 shadow">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-award-fill fs-3 text-white me-2"></i>
                                <div>
                                    <small class="text-white d-block fw-bold">Certified</small>
                                    <small class="text-white opacity-75">ISO 9001:2015</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
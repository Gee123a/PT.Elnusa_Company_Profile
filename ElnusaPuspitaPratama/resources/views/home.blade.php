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
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                    </p>
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

    <!-- Company Profile Section - Dark Wood Texture Theme -->
    <section id="company-profile" class="py-5 position-relative overflow-hidden">
        <!-- Background: Real Dark Wood Texture with Grain -->
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(rgba(30, 20, 15, 0.75), rgba(30, 20, 15, 0.75)), 
                                url('https://images.unsplash.com/photo-1615529182904-14819c35db37?w=1920') center/cover no-repeat; 
                    z-index: -1;">
        </div>

        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <!-- Elegant Header with Minimalist Box -->
                    <div class="d-inline-block position-relative" data-aos="fade-up">
                        <!-- Main Title Box -->
                        <div class="px-5 py-3 shadow-lg"
                            style="background: rgba(255, 255, 255, 0.12); 
                                    backdrop-filter: blur(12px); 
                                    -webkit-backdrop-filter: blur(12px);
                                    border-left: 4px solid rgba(255, 193, 7, 0.8);
                                    border-right: 4px solid rgba(255, 193, 7, 0.8);
                                    border-top: 1px solid rgba(255, 255, 255, 0.2);
                                    border-bottom: 1px solid rgba(255, 255, 255, 0.2);">
                            <h2 class="display-4 fw-bold mb-0 text-white" style="letter-spacing: 3px;">PROFIL PERUSAHAAN
                            </h2>
                        </div>

                        <!-- Decorative Lines - Top -->
                        <div class="position-absolute top-0 start-0 translate-middle-y"
                            style="width: 40px; height: 2px; background: linear-gradient(90deg, transparent, rgba(255, 193, 7, 0.8)); left: -45px;">
                        </div>
                        <div class="position-absolute top-0 end-0 translate-middle-y"
                            style="width: 40px; height: 2px; background: linear-gradient(270deg, transparent, rgba(255, 193, 7, 0.8)); right: -45px;">
                        </div>

                        <!-- Decorative Lines - Bottom -->
                        <div class="position-absolute bottom-0 start-0 translate-middle-y"
                            style="width: 40px; height: 2px; background: linear-gradient(90deg, transparent, rgba(255, 193, 7, 0.8)); left: -45px;">
                        </div>
                        <div class="position-absolute bottom-0 end-0 translate-middle-y"
                            style="width: 40px; height: 2px; background: linear-gradient(270deg, transparent, rgba(255, 193, 7, 0.8)); right: -45px;">
                        </div>
                    </div>

                    <!-- Center Golden Accent Line -->
                    <div class="d-flex align-items-center justify-content-center mt-4" data-aos="fade-up"
                        data-aos-delay="100">
                        <div style="width: 60px; height: 1px; background: rgba(255, 255, 255, 0.3);"></div>
                        <div class="mx-3"
                            style="width: 8px; height: 8px; background: #ffc107; transform: rotate(45deg); box-shadow: 0 0 15px rgba(255, 193, 7, 0.6);">
                        </div>
                        <div style="width: 60px; height: 1px; background: rgba(255, 255, 255, 0.3);"></div>
                    </div>
                </div>
            </div>

            <div class="row align-items-center g-4">
                <!-- Left Card - Glass Morphism -->
                <div class="col-lg-6 mb-4" data-aos="fade-right">
                    <div class="p-4 p-lg-5 rounded-3 shadow-lg"
                        style="background: rgba(255, 255, 255, 0.1); 
                                backdrop-filter: blur(15px); 
                                -webkit-backdrop-filter: blur(15px);
                                border: 1px solid rgba(255, 255, 255, 0.25);">
                        <div class="d-flex align-items-center mb-4">
                            <!-- Perfect Circle Icon Container -->
                            <div class="rounded-circle me-3 d-flex align-items-center justify-content-center flex-shrink-0"
                                style="width: 70px; 
                                        height: 70px;
                                        background: rgba(255,193,7,0.15); /* kuning transparan seperti project card */
                                        backdrop-filter: blur(10px);
                                        border: 1px solid rgba(255, 193, 7, 0.3);">
                                <i class="bi bi-building fs-3 text-white"></i>
                            </div>
                            <h3 class="fw-bold mb-0 text-white">Tentang Kami</h3>
                        </div>
                        <p class="text-white text-opacity-90 mb-3">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nisl eget ultricies
                            aliquam, nunc nisl aliquet nunc, vitae aliquam nisl nunc vitae nisl. Sed euismod, nisl eget
                            ultricies aliquam.
                        </p>
                        <p class="text-white text-opacity-90 mb-4">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.
                        </p>
                        <!-- Stats - Glass Cards -->
                        <div class="row g-3 mt-4">
                            <div class="col-6">
                                <div class="p-3 rounded text-center"
                                    style="background: rgba(255, 255, 255, 0.15); 
                                            backdrop-filter: blur(10px);
                                            border: 1px solid rgba(255, 255, 255, 0.3);">
                                    <h4 class="fw-bold text-white mb-1"
                                        style="text-shadow: 0 2px 10px rgba(255, 255, 255, 0.3);">5+</h4>
                                    <small class="text-white text-opacity-85">Projects</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3 rounded text-center"
                                    style="background: rgba(255, 255, 255, 0.15); 
                                            backdrop-filter: blur(10px);
                                            border: 1px solid rgba(255, 255, 255, 0.3);">
                                    <h4 class="fw-bold text-white mb-1"
                                        style="text-shadow: 0 2px 10px rgba(255, 255, 255, 0.3);">15+</h4>
                                    <small class="text-white text-opacity-85">Years</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Image - Enhanced Frame -->
                <div class="col-lg-6 mb-4" data-aos="fade-left">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=800" alt="Construction"
                            class="img-fluid rounded-3 shadow-lg" style="border: 5px solid rgba(255, 255, 255, 0.2);">
                        <!-- Overlay Badge - Glass Morphism -->
                        <div class="position-absolute bottom-0 start-0 m-4 p-3 rounded-3 shadow-lg"
                            style="background: rgba(255, 193, 7, 0.85); 
                                    backdrop-filter: blur(10px);
                                    border: 1px solid rgba(255, 255, 255, 0.3);">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-award-fill fs-3 text-white me-2"
                                    style="filter: drop-shadow(0 2px 4px rgba(0,0,0,0.3));"></i>
                                <div>
                                    <small class="text-white d-block fw-bold">Certified</small>
                                    <small class="text-white opacity-90">ISO 9001:2015</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

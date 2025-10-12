@extends('layout.main')
@section('title', 'Home')
@section('content')

    {{-- Hero Section: Menampilkan slogan, deskripsi, dan nama perusahaan di bagian atas halaman --}}
    <section id="hero" class="position-relative vh-100 d-flex align-items-center overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100"
        data-aos="fade"
        data-aos-delay="50"
        data-aos-duration="300"
        style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=1920') center/cover no-repeat; z-index: -1;">
    </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-white d-flex flex-column justify-content-center">
                    <h1 class="display-3 fw-bold mb-4" data-aos="fade-right" data-aos-delay="200">
                        General Contractor & Construction Services
                    </h1>
                    <p class="lead mb-4" data-aos="fade-right" data-aos-delay="400">
                        Kami membangun masa depan dengan inovasi, kualitas, dan kepercayaan.
                    </p>
                </div>
                <div class="col-lg-6 text-white text-lg-end d-flex flex-column justify-content-center">
                    <h2 class="display-1 fw-bold" data-aos="fade-left" style="letter-spacing: 2px;" data-aos-delay="200">
                        Elnusa Puspita Pratama
                    </h2>
                    <p class="fs-5 mt-3" data-aos="fade-left" data-aos-delay="400">
                        Your Trusted Construction Partner
                    </p>
                </div>
            </div>
        </div>
        <div class="position-absolute bottom-0 start-50 translate-middle-x mb-4">
            <a href="#about-us" class="text-white text-decoration-none">
                <i class="bi bi-chevron-down fs-1"></i>
            </a>
        </div>
    </section>

    {{-- About Us Section: Glassmorphism profil perusahaan dan statistik utama --}}
    <section id="about-us" class="py-5 position-relative overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(rgba(30, 20, 15, 0.75), rgba(30, 20, 15, 0.75)), 
                    url('https://images.unsplash.com/photo-1615529182904-14819c35db37?w=1920') center/cover no-repeat; 
                    z-index: -1;">
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    {{-- Judul section about us --}}
                    @include('layout.sectionTitle', ['title' => 'ABOUT US'])
                </div>
            </div>
            <div class="row justify-content-center align-items-center g-4">
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                    
                    <div class="p-5 rounded-4 shadow-lg bg-white bg-opacity-10 border border-warning border-opacity-25"
                        data-aos="fade-in" 
                        data-aos-duration="650"
                        style="backdrop-filter: blur(18px); border: 1px solid rgba(255,255,255,0.25); 
                              transition: backdrop-filter 0.5s ease-in-out, background-color 0.5s ease, box-shadow 0.5s ease;">
                        <div class="d-flex align-items-center mb-4 flex-column flex-md-row">
                            <div class="rounded-circle me-md-4 mb-3 mb-md-0 d-flex align-items-center justify-content-center flex-shrink-0"
                                style="width: 80px; height: 80px; background: rgba(255,255,255,0.10); backdrop-filter: blur(10px); border: 1px solid rgba(255,193,7,0.3); box-shadow: 0 4px 24px rgba(255,193,7,0.10);">
                                <i class="bi bi-building fs-2 text-warning"></i>
                            </div>
                            <div>
                                <h3 class="fw-bold mb-1 text-white">Elnusa Puspita Pratama</h3>
                                <p class="text-white text-opacity-85 mb-0 fs-5">Professional Construction & Engineering Company
                                </p>
                            </div>
                        </div>
                        <p class="text-white text-opacity-90 mb-3 fs-5">
                            Kami adalah perusahaan konstruksi berpengalaman lebih dari 15 tahun, berkomitmen memberikan
                            hasil terbaik untuk setiap proyek. Didukung tim profesional, kami siap mewujudkan visi Anda
                            dengan inovasi, kualitas, dan integritas.
                        </p>
                        <div class="row g-4 mt-4">
                            <div class="col">
                                {{-- Card statistik jumlah project --}}
                                <div class="p-3 rounded text-center"
                                    style="background: rgba(255, 255, 255, 0.15); 
                                            backdrop-filter: blur(10px);
                                            border: 1px solid rgba(255, 255, 255, 0.3);">
                                    <h4 class="fw-bold text-white mb-1"
                                        style="text-shadow: 0 2px 10px rgba(255, 255, 255, 0.3);">2+</h4>
                                    <small class="text-white text-opacity-85">Projects</small>
                                </div>
                            </div>
                            <div class="col">
                                {{-- Card statistik tahun pengalaman --}}
                                <div class="p-3 rounded text-center"
                                    style="background: rgba(255, 255, 255, 0.15); 
                                            backdrop-filter: blur(10px);
                                            border: 1px solid rgba(255, 255, 255, 0.3);">
                                    <h4 class="fw-bold text-white mb-1"
                                        style="text-shadow: 0 2px 10px rgba(255, 255, 255, 0.3);">5+</h4>
                                    <small class="text-white text-opacity-85">Years</small>
                                </div>
                            </div>
                            <div class="col">
                                {{-- Card statistik jumlah project --}}
                                <div class="p-3 rounded text-center"
                                    style="background: rgba(255, 255, 255, 0.15); 
                                            backdrop-filter: blur(10px);
                                            border: 1px solid rgba(255, 255, 255, 0.3);">
                                    <h4 class="fw-bold text-white mb-1"
                                        style="text-shadow: 0 2px 10px rgba(255, 255, 255, 0.3);">100%</h4>
                                    <small class="text-white text-opacity-85">Client Satisfaction</small>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 text-center">
                            <a href="/project" class="btn btn-warning px-5 py-3 fw-bold shadow-sm">
                                Explore Our Projects <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

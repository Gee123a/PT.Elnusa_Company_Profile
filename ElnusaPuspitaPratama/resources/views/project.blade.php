@extends('layout.main')
@section('title', 'Our Projects')
@section('content')

    <!-- Hero Section - Konsisten dengan Home -->
    <section id="projects-hero" class="position-relative vh-100 d-flex align-items-center overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=1920') center/cover no-repeat; z-index: -1;">
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-white">
                    <h1 class="display-3 fw-bold mb-4" data-aos="fade-right">
                        Our Projects
                    </h1>
                    <p class="lead mb-4" data-aos="fade-right" data-aos-delay="100">
                        Transforming visions into remarkable architectural achievements.
                    </p>
                </div>

                <div class="col-lg-6 text-white text-lg-end mt-5 mt-lg-0">
                    <div data-aos="fade-left">
                        <h2 class="display-1 fw-bold text-warning">{{ $allProjects->count()-1 }}+</h2>
                        <h3 class="display-6 fw-light mb-4">Completed Projects</h3>
                    </div>
                    <div class="row mt-4" data-aos="fade-left" data-aos-delay="100">
                        <div class="col-6">
                            <h4 class="fw-bold text-warning">98%</h4>
                            <p class="mb-0">Client Satisfaction</p>
                        </div>
                        <div class="col-6">
                            <h4 class="fw-bold text-warning">15+</h4>
                            <p class="mb-0">Years Experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="position-absolute bottom-0 start-50 translate-middle-x mb-4">
            <a href="#featured-projects" class="text-white text-decoration-none">
                <i class="bi bi-chevron-down fs-1"></i>
            </a>
        </div>
    </section>

    <!-- Featured Projects Carousel - Dark Wood Theme -->
    <section id="featured-projects" class="py-5 position-relative overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(rgba(30, 20, 15, 0.75), rgba(30, 20, 15, 0.75)), 
                                url('https://images.unsplash.com/photo-1615529182904-14819c35db37?w=1920') center/cover no-repeat; 
                    z-index: -1;">
            <!-- GAMBAR OVERLAY BACKGROUND TIDAK DIGANTI -->
        </div>

        <div class="container py-5 position-relative">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <div class="d-inline-block position-relative" data-aos="fade-up">
                        <div class="px-5 py-3 shadow-lg"
                            style="background: rgba(255, 255, 255, 0.12); 
                                    backdrop-filter: blur(12px); 
                                    -webkit-backdrop-filter: blur(12px);
                                    border-left: 4px solid rgba(255, 193, 7, 0.8);
                                    border-right: 4px solid rgba(255, 193, 7, 0.8);
                                    border-top: 1px solid rgba(255, 255, 255, 0.2);
                                    border-bottom: 1px solid rgba(255, 255, 255, 0.2);">
                            <h2 class="display-4 fw-bold mb-0 text-white" style="letter-spacing: 3px;">FEATURED PROJECTS
                            </h2>
                        </div>
                        <div class="position-absolute top-0 start-0 translate-middle-y"
                            style="width: 40px; height: 2px; background: linear-gradient(90deg, transparent, rgba(255, 193, 7, 0.8)); left: -45px;">
                        </div>
                        <div class="position-absolute top-0 end-0 translate-middle-y"
                            style="width: 40px; height: 2px; background: linear-gradient(270deg, transparent, rgba(255, 193, 7, 0.8)); right: -45px;">
                        </div>
                        <div class="position-absolute bottom-0 start-0 translate-middle-y"
                            style="width: 40px; height: 2px; background: linear-gradient(90deg, transparent, rgba(255, 193, 7, 0.8)); left: -45px;">
                        </div>
                        <div class="position-absolute bottom-0 end-0 translate-middle-y"
                            style="width: 40px; height: 2px; background: linear-gradient(270deg, transparent, rgba(255, 193, 7, 0.8)); right: -45px;">
                        </div>
                    </div>
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

            <div class="position-relative" style="padding-bottom: 60px;">
                <div id="featuredProjectsCarousel" class="carousel slide" data-bs-ride="carousel">
                    <!-- Carousel Indicators, positioned below carousel -->
                    <div class="carousel-indicators" style="bottom: -40px;">
                        @foreach ($featuredProjects as $index => $project)
                            <button type="button" data-bs-target="#featuredProjectsCarousel"
                                data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"
                                aria-label="Slide {{ $index + 1 }}"></button>
                        @endforeach
                    </div>

                    <div class="carousel-inner">
                        @foreach ($featuredProjects as $index => $project)
                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                <div class="row align-items-center g-4">
                                    <div class="col-lg-6">
                                        <div class="position-relative">
                                            <!-- GANTI DENGAN GAMBAR PROJECT LOKAL -->
                                            <img src="{{ asset($project->image_url ?? 'image/default_project.jpg') }}"
                                                class="img-fluid rounded-3 shadow-lg" alt="{{ $project->project_name }}"
                                                style="border: 5px solid rgba(255, 255, 255, 0.2);">
                                            <div class="position-absolute top-0 start-0 m-3">
                                                <span class="badge bg-warning text-dark px-3 py-2 shadow">
                                                    <i class="bi bi-star-fill me-1"></i>Featured
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="p-4 p-lg-5 rounded-3 shadow-lg"
                                            style="background: rgba(255, 255, 255, 0.1); 
                                                    backdrop-filter: blur(15px); 
                                                    -webkit-backdrop-filter: blur(15px);
                                                    border: 1px solid rgba(255, 255, 255, 0.25);">
                                            <h3 class="fw-bold mb-3 text-white">{{ $project->project_name }}</h3>
                                            <p class="text-white text-opacity-90 mb-4">{{ $project->description }}</p>

                                            <div class="row g-3 mb-4">
                                                <div class="col-6">
                                                    <div class="p-3 rounded text-center"
                                                        style="background: rgba(255, 255, 255, 0.15); 
                                                                backdrop-filter: blur(10px);
                                                                border: 1px solid rgba(255, 255, 255, 0.3);">
                                                        <div class="text-warning mb-1">
                                                            <i class="bi bi-geo-alt-fill fs-4"></i>
                                                        </div>
                                                        <small
                                                            class="text-white text-opacity-85">{{ $project->address }}</small>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="p-3 rounded text-center"
                                                        style="background: rgba(255, 255, 255, 0.15); 
                                                                backdrop-filter: blur(10px);
                                                                border: 1px solid rgba(255, 255, 255, 0.3);">
                                                        <div class="text-warning mb-1">
                                                            <i class="bi bi-cash-stack fs-4"></i>
                                                        </div>
                                                        <small class="text-white text-opacity-85">Rp
                                                            {{ number_format($project->budget / 1000000000, 1) }}B</small>
                                                    </div>
                                                </div>
                                            </div>

                                            <a href="{{ route('project.show', $project->id) }}"
                                                class="btn btn-warning btn-lg w-100 px-5 py-3">
                                                View Details <i class="bi bi-arrow-right ms-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Carousel Controls, positioned outside carousel content -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#featuredProjectsCarousel"
                        data-bs-slide="prev" style="top: 50%; left: -60px; width: 50px; height: 50px; z-index: 2;">
                        <span class="bg-warning rounded-circle p-3 d-flex align-items-center justify-content-center"
                            style="width: 50px; height: 50px;">
                            <i class="bi bi-chevron-left text-dark fs-4"></i>
                        </span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#featuredProjectsCarousel"
                        data-bs-slide="next" style="top: 50%; right: -60px; width: 50px; height: 50px; z-index: 2;">
                        <span class="bg-warning rounded-circle p-3 d-flex align-items-center justify-content-center"
                            style="width: 50px; height: 50px;">
                            <i class="bi bi-chevron-right text-dark fs-4"></i>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- All Projects Grid - Konsisten Dark Wood Theme -->
    <section class="py-5 position-relative overflow-hidden" style="min-height: 600px;">
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(rgba(30, 20, 15, 0.85), rgba(30, 20, 15, 0.85)), 
                    url('https://images.unsplash.com/photo-1464983953574-0892a716854b?w=1920') center/cover no-repeat; z-index: -1;">
            <!-- GAMBAR OVERLAY BACKGROUND TIDAK DIGANTI -->
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <div class="d-inline-block position-relative" data-aos="fade-up">
                        <div class="px-5 py-3 shadow-lg"
                            style="background: rgba(255, 255, 255, 0.12); 
                                    backdrop-filter: blur(12px); 
                                    -webkit-backdrop-filter: blur(12px);
                                    border-left: 4px solid rgba(255, 193, 7, 0.8);
                                    border-right: 4px solid rgba(255, 193, 7, 0.8);
                                    border-top: 1px solid rgba(255, 255, 255, 0.2);
                                    border-bottom: 1px solid rgba(255, 255, 255, 0.2);">
                            <h2 class="display-4 fw-bold mb-0 text-white" style="letter-spacing: 3px;">ALL PROJECTS</h2>
                        </div>
                        <div class="position-absolute top-0 start-0 translate-middle-y"
                            style="width: 40px; height: 2px; background: linear-gradient(90deg, transparent, rgba(255, 193, 7, 0.8)); left: -45px;">
                        </div>
                        <div class="position-absolute top-0 end-0 translate-middle-y"
                            style="width: 40px; height: 2px; background: linear-gradient(270deg, transparent, rgba(255, 193, 7, 0.8)); right: -45px;">
                        </div>
                        <div class="position-absolute bottom-0 start-0 translate-middle-y"
                            style="width: 40px; height: 2px; background: linear-gradient(90deg, transparent, rgba(255, 193, 7, 0.8)); left: -45px;">
                        </div>
                        <div class="position-absolute bottom-0 end-0 translate-middle-y"
                            style="width: 40px; height: 2px; background: linear-gradient(270deg, transparent, rgba(255, 193, 7, 0.8)); right: -45px;">
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mt-4" data-aos="fade-up"
                        data-aos-delay="100">
                        <div style="width: 60px; height: 1px; background: rgba(255, 255, 255, 0.3);"></div>
                        <div class="mx-3"
                            style="width: 8px; height: 8px; background: #ffc107; transform: rotate(45deg); box-shadow: 0 0 15px rgba(255, 193, 7, 0.6);">
                        </div>
                        <div style="width: 60px; height: 1px; background: rgba(255, 255, 255, 0.3);"></div>
                    </div>
                    <p class="lead text-white text-opacity-90 mt-3" data-aos="fade-up" data-aos-delay="200">
                        Browse through our complete portfolio of construction excellence
                    </p>
                </div>
            </div>

            <div class="row g-4">
                @foreach ($allProjects as $project)
                    <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up">
                        <div class="p-4 rounded-3 shadow-lg d-flex flex-column h-100 overflow-hidden"
                            style="background: rgba(255,255,255,0.10); 
                                    backdrop-filter: blur(10px); 
                                    border: 1px solid rgba(255,255,255,0.25); 
                                    transition: all 0.3s ease;">
                            <!-- Image always at top -->
                            <div class="position-relative overflow-hidden mb-3">
                                <!-- GANTI DENGAN GAMBAR PROJECT LOKAL -->
                                <img src="{{ asset($project->image_url ?? 'image/default_project.jpg') }}"
                                    class="rounded-3 shadow" alt="{{ $project->project_name }}"
                                    style="height: 220px; width: 100%; object-fit: cover; transition: transform 0.3s ease;"
                                    onmouseover="this.style.transform='scale(1.08)'"
                                    onmouseout="this.style.transform='scale(1)'">
                                <div class="position-absolute top-0 start-0 m-3">
                                    <span
                                        class="badge 
                                        @if (strtolower($project->status) === 'complete' || strtolower($project->status) === 'completed') bg-success
                                        @elseif(strtolower($project->status) === 'on progress' || strtolower($project->status) === 'in progress') bg-warning text-dark
                                        @else bg-secondary @endif px-3 py-2">
                                        {{ ucfirst($project->status) }}
                                    </span>
                                </div>
                            </div>
                            <!-- Content always in middle -->
                            <div class="flex-grow-1 d-flex flex-column justify-content-between">
                                <div>
                                    <h5 class="fw-bold mb-2 text-white">{{ $project->project_name }}</h5>
                                    <p class="text-white text-opacity-85 small mb-3">
                                        {{ \Illuminate\Support\Str::limit($project->description, 100) }}
                                    </p>
                                    <div class="mb-3">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="rounded-circle d-flex align-items-center justify-content-center me-2"
                                                style="width:32px;height:32px;background:rgba(255,193,7,0.10);">
                                                <i class="bi bi-geo-alt-fill text-white small"></i>
                                            </div>
                                            <small class="text-white text-opacity-85">{{ $project->address }}</small>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="rounded-circle d-flex align-items-center justify-content-center me-2"
                                                style="width:32px;height:32px;background:rgba(255,193,7,0.10);">
                                                <i class="bi bi-building text-white small"></i>
                                            </div>
                                            <small
                                                class="text-white text-opacity-85">{{ $project->client->nama ?? 'N/A' }}</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle d-flex align-items-center justify-content-center me-2"
                                                style="width:32px;height:32px;background:rgba(255,193,7,0.10);">
                                                <i class="bi bi-cash-stack text-white small"></i>
                                            </div>
                                            <small class="text-success fw-semibold">Rp
                                                {{ number_format($project->budget / 1000000000, 1) }}B</small>
                                        </div>
                                    </div>
                                </div>
                                <!-- Button always at bottom -->
                                <div class="mt-auto pt-2">
                                    <a href="{{ route('project.show', $project->id) }}"
                                        class="btn btn-outline-warning w-100 py-2">
                                        View Details <i class="bi bi-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

@extends('layout.main')
@section('title', 'Our Projects')
@section('content')

    <section id="projects-hero" class="position-relative vh-100 d-flex align-items-center overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=1920') center/cover no-repeat; z-index: -1;">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-white">
                    <h1 class="display-3 fw-bold mb-4" data-aos="fade-right" data-aos-delay="200">
                        Our Projects
                    </h1>
                    <p class="lead mb-4" data-aos="fade-right" data-aos-delay="400">
                        Transforming visions into remarkable architectural achievements.
                    </p>
                </div>
                <div class="col-lg-6 text-white text-lg-end mt-5 mt-lg-0">
                    <div data-aos="fade-left" data-aos-delay="200">
                        <h2 class="display-1 fw-bold text-warning">{{ $allProjects->count()}}</h2>
                        <h3 class="display-6 fw-light mb-4">Completed Projects</h3>
                    </div>
                    <div class="row mt-4" data-aos="fade-left" data-aos-delay="400">
                        <div class="col-6">
                            <h4 class="fw-bold text-warning">98%</h4>
                            <p class="mb-0">Client Satisfaction</p>
                        </div>
                        <div class="col-6">
                            <h4 class="fw-bold text-warning">5+</h4>
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

    
    <section id="featured-projects" class="py-5 position-relative overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(rgba(30, 20, 15, 0.75), rgba(30, 20, 15, 0.75)), 
                    url('https://images.unsplash.com/photo-1615529182904-14819c35db37?w=1920') center/cover no-repeat; 
                    z-index: -1;">
        </div>
        <div class="container py-5 position-relative">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    @include('layout.sectionTitle', ['title' => 'FEATURED PROJECTS'])
                </div>
            </div>
            <div class="position-relative" style="padding-bottom: 60px;">
                <div class="row align-items-center g-4">
                    <div class="col-lg-6">
                        <div class="position-relative">
                            <img src="{{ $featuredProject->image_url }}" class="img-fluid rounded-3 shadow-lg"
                                alt="{{ $featuredProject->project_name }}"
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
                            <h3 class="fw-bold mb-3 text-white">{{ $featuredProject->project_name }}</h3>
                            <p class="text-white text-opacity-90 mb-4">{{ $featuredProject->description }}</p>
                            <div class="row g-3 mb-4">
                                <div class="col-6">
                                    <div class="p-3 rounded text-center"
                                        style="background: rgba(255, 255, 255, 0.15); 
                                                backdrop-filter: blur(10px);
                                                border: 1px solid rgba(255, 255, 255, 0.3);">
                                        <div class="text-warning mb-1">
                                            <i class="bi bi-geo-alt-fill fs-4"></i>
                                        </div>
                                        <small class="text-white text-opacity-85">{{ $featuredProject->address }}</small>
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
                                        <small class="text-white text-opacity-85">
                                            Rp {{ number_format($featuredProject->budget / 1000000, 0) }} Juta
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <a href="/project/{{ $featuredProject->id }}" class="btn btn-warning btn-lg w-100 px-5 py-3">
                                View Details <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 position-relative overflow-hidden" style="min-height: 600px;">
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(rgba(30, 20, 15, 0.85), rgba(30, 20, 15, 0.85)), 
                    url('https://images.unsplash.com/photo-1464983953574-0892a716854b?w=1920') center/cover no-repeat; z-index: -1;">
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    
                    @include('layout.sectionTitle', ['title' => 'ALL PROJECTS'])
                    <p class="lead text-white text-opacity-90 mt-3" data-aos="fade-up" data-aos-delay="400">
                        Browse through our complete portfolio of construction excellence
                    </p>
                </div>
            </div>
            <div class="row g-4">
                @foreach ($allProjects as $project)
                    @include('card.projectCard', ['project' => $project])
                @endforeach
            </div>
        </div>
    </section>

@endsection

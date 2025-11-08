@extends('layout.main')
@section('title', 'Our Projects')
@section('content')

    @include('layout.heroSection', [
        'title' => 'Our Projects',
        'description' => 'Transforming visions into remarkable architectural achievements.',
        'background' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=1920',
        'statistic' => [
            'main' => $allProjects->count(),
            'label' => 'Completed Projects',
            'items' => [
                ['value' => '98%', 'label' => 'Client Satisfaction'],
                ['value' => '5+', 'label' => 'Years Experience'],
            ],
        ],
        'scrollTo' => '#featured-projects'
    ])
    
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
            
            <div class="position-relative" style="padding-bottom: 80px;">
                @if($featuredProjects->isNotEmpty())
                    <!-- Carousel Wrapper -->
                    <div class="position-relative" style="padding: 0 100px;">
                        <!-- Carousel -->
                        <div id="featuredProjectsCarousel" class="carousel slide" data-bs-ride="false">
                            <!-- Carousel Items -->
                            <div class="carousel-inner">
                                @foreach($featuredProjects as $index => $featuredProject)
                                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                        <div class="row align-items-center g-4">
                                            <div class="col-lg-6" data-aos="fade-right">
                                                <div class="position-relative">
                                                    <img src="{{ asset($featuredProject->image_url) }}" 
                                                        class="img-fluid rounded-3 shadow-lg"
                                                        alt="{{ $featuredProject->project_name }}"
                                                        style="border: 5px solid rgba(255, 255, 255, 0.2); width: 100%; height: 450px; object-fit: cover;">
                                                    <div class="position-absolute top-0 start-0 m-3">
                                                        <span class="badge bg-warning text-dark px-3 py-2 shadow">
                                                            <i class="bi bi-star-fill me-1"></i>Featured #{{ $index + 1 }}
                                                        </span>
                                                    </div>
                                                    <div class="position-absolute top-0 end-0 m-3">
                                                        <span class="badge {{ $featuredProject->badgeColor }} px-3 py-2 shadow">
                                                            {{ ucfirst($featuredProject->status) }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6" data-aos="fade-left">
                                                <div class="p-4 p-lg-5 rounded-3 shadow-lg"
                                                    style="background: rgba(255, 255, 255, 0.1); 
                                                            backdrop-filter: blur(15px); 
                                                            -webkit-backdrop-filter: blur(15px);
                                                            border: 1px solid rgba(255, 255, 255, 0.25);">
                                                    <div class="mb-3">
                                                        <span class="badge bg-warning bg-opacity-25 text-warning px-3 py-2">
                                                            <i class="bi bi-trophy-fill me-1"></i>Top {{ $index + 1 }} Budget
                                                        </span>
                                                    </div>
                                                    <h3 class="fw-bold mb-3 text-white">{{ $featuredProject->project_name }}</h3>
                                                    <p class="text-white text-opacity-90 mb-4">
                                                        {{ \Illuminate\Support\Str::limit($featuredProject->description, 200) }}
                                                    </p>
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
                                                        <div class="col-6">
                                                            <div class="p-3 rounded text-center"
                                                                style="background: rgba(255, 255, 255, 0.15); 
                                                                        backdrop-filter: blur(10px);
                                                                        border: 1px solid rgba(255, 255, 255, 0.3);">
                                                                <div class="text-warning mb-1">
                                                                    <i class="bi bi-building fs-4"></i>
                                                                </div>
                                                                <small class="text-white text-opacity-85">{{ $featuredProject->client->nama }}</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="p-3 rounded text-center"
                                                                style="background: rgba(255, 255, 255, 0.15); 
                                                                        backdrop-filter: blur(10px);
                                                                        border: 1px solid rgba(255, 255, 255, 0.3);">
                                                                <div class="text-warning mb-1">
                                                                    <i class="bi bi-person-fill fs-4"></i>
                                                                </div>
                                                                <small class="text-white text-opacity-85">{{ $featuredProject->projectManager->nama }}</small>
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
                                @endforeach
                            </div>
                        </div>

                        <!-- Custom Navigation Buttons with Glass Morphism -->
                        <button class="btn-carousel-nav btn-carousel-prev" type="button" onclick="previousSlide()">
                            <i class="bi bi-chevron-left"></i>
                        </button>
                        <button class="btn-carousel-nav btn-carousel-next" type="button" onclick="nextSlide()">
                            <i class="bi bi-chevron-right"></i>
                        </button>

                        <!-- Custom Indicators -->
                        <div class="carousel-indicators-custom">
                            @foreach($featuredProjects as $index => $project)
                                <button type="button" 
                                    class="carousel-indicator-btn {{ $index === 0 ? 'active' : '' }}"
                                    onclick="goToSlide({{ $index }})"
                                    aria-label="Slide {{ $index + 1 }}">
                                </button>
                            @endforeach
                        </div>
                    </div>

                    <!-- Carousel Counter -->
                    <div class="text-center mt-5" data-aos="fade-up">
                        <p class="text-white text-opacity-75 mb-0">
                            <i class="bi bi-collection me-2"></i>
                            Showing <span class="text-warning fw-bold">{{ $featuredProjects->count() }}</span> Featured Projects
                        </p>
                    </div>
                @else
                    <div class="row">
                        <div class="col-12">
                            <div class="p-5 rounded-3 shadow-lg text-center"
                                style="background: rgba(255, 255, 255, 0.1); 
                                        backdrop-filter: blur(15px); 
                                        border: 1px solid rgba(255, 255, 255, 0.25);">
                                <i class="bi bi-inbox fs-1 text-white text-opacity-50 d-block mb-3"></i>
                                <h4 class="text-white mb-2">No featured projects available</h4>
                                <p class="text-white text-opacity-75 mb-0">Check the admin panel to add projects.</p>
                            </div>
                        </div>
                    </div>
                @endif
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
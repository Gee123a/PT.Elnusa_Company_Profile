@extends('layout.main')
@section('title', 'Our Projects')
@section('content')

    <!-- Hero Section Projects -->
    <section id="projects-hero" class="position-relative vh-100 d-flex align-items-center">
        <div class="position-absolute top-0 start-0 w-100 h-100" 
             style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=1920') center/cover no-repeat; z-index: -1;">
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
                    <a href="#featured-projects" class="btn btn-outline-light btn-lg px-5 py-3" data-aos="fade-right" data-aos-delay="200">
                        Explore Projects <i class="bi bi-arrow-down ms-2"></i>
                    </a>
                </div>

                <div class="col-lg-6 text-white text-lg-end mt-5 mt-lg-0">
                    <div data-aos="fade-left">
                        <h2 class="display-1 fw-bold text-warning">{{ $allProjects->count() }}+</h2>
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

    <!-- Featured Projects Carousel -->
    <section id="featured-projects" class="py-5 position-relative bg-light">
        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-10" 
             style="background: url('https://images.unsplash.com/photo-1486718448742-163732cd1544?w=1920') center/cover no-repeat; z-index: -1;">
        </div>

        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="display-4 fw-bold mb-3" data-aos="fade-up">Featured Projects</h2>
                    <div class="mx-auto bg-warning" style="width: 100px; height: 4px;"></div>
                </div>
            </div>

            <!-- Carousel -->
            <div id="featuredCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    @foreach($featuredProjects as $index => $project)
                        <button type="button" 
                                data-bs-target="#featuredCarousel" 
                                data-bs-slide-to="{{ $index }}" 
                                class="{{ $index === 0 ? 'active bg-warning' : 'bg-warning' }}" 
                                aria-current="{{ $index === 0 ? 'true' : 'false' }}">
                        </button>
                    @endforeach
                </div>

                <div class="carousel-inner">
                    @foreach($featuredProjects as $index => $project)
                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                            <div class="row align-items-center">
                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <img src="{{ $project['image'] }}" 
                                         alt="{{ $project['title'] }}" 
                                         class="img-fluid rounded shadow-lg">
                                </div>
                                <div class="col-lg-6">
                                    <div class="bg-white p-4 p-lg-5 rounded shadow">
                                        <span class="badge bg-warning text-dark mb-3 fs-6">Featured Project</span>
                                        <h3 class="display-5 fw-bold mb-3">{{ $project['title'] }}</h3>
                                        <p class="text-muted mb-4">
                                            {{ $project['description'] }}
                                        </p>
                                        <div class="row g-3 mb-4">
                                            <div class="col-6">
                                                <i class="bi bi-geo-alt-fill text-warning fs-4 d-block mb-1"></i>
                                                <small class="text-muted d-block">Location</small>
                                                <strong>{{ $project['location'] }}</strong>
                                            </div>
                                            <div class="col-6">
                                                <i class="bi bi-calendar-check-fill text-warning fs-4 d-block mb-1"></i>
                                                <small class="text-muted d-block">Completed</small>
                                                <strong>{{ $project['completed_date'] }}</strong>
                                            </div>
                                            <div class="col-6">
                                                <i class="bi bi-rulers text-warning fs-4 d-block mb-1"></i>
                                                <small class="text-muted d-block">Area</small>
                                                <strong>{{ $project['area'] }}</strong>
                                            </div>
                                            <div class="col-6">
                                                <i class="bi bi-cash-stack text-warning fs-4 d-block mb-1"></i>
                                                <small class="text-muted d-block">Budget</small>
                                                <strong>{{ $project['budget'] }}</strong>
                                            </div>
                                        </div>
                                        <button class="btn btn-outline-dark btn-lg px-4">
                                            View Details <i class="bi bi-arrow-right ms-2"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#featuredCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-warning rounded-circle p-3" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#featuredCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-warning rounded-circle p-3" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- All Projects Grid -->
    <section class="py-5 position-relative bg-white">
        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-10" 
             style="background: url('https://images.unsplash.com/photo-1497366216548-37526070297c?w=1920') center/cover no-repeat; z-index: -1;">
        </div>

        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="display-4 fw-bold mb-3" data-aos="fade-up">All Projects</h2>
                    <div class="mx-auto bg-warning" style="width: 100px; height: 4px;"></div>
                    <p class="text-muted mt-3" data-aos="fade-up" data-aos-delay="100">
                        Browse through our complete portfolio of construction excellence
                    </p>
                </div>
            </div>

            <!-- Projects Grid -->
            <div class="row g-4">
                @foreach($allProjects as $index => $project)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="position-relative overflow-hidden">
                                <img src="{{ $project['image'] }}" 
                                     class="card-img-top" 
                                     style="height: 250px; object-fit: cover;"
                                     alt="{{ $project['title'] }}">
                                
                                @php
                                    $badgeClass = match($project['category']) {
                                        'Residential' => 'bg-success',
                                        'Commercial' => 'bg-info',
                                        'Renovation' => 'bg-warning text-dark',
                                        default => 'bg-secondary'
                                    };
                                @endphp
                                
                                <span class="badge {{ $badgeClass }} position-absolute top-0 end-0 m-3">
                                    {{ $project['category'] }}
                                </span>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title fw-bold mb-3">{{ $project['title'] }}</h5>
                                <p class="card-text text-muted flex-grow-1">
                                    {{ $project['description'] }}
                                </p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <small class="text-muted">
                                        <i class="bi bi-geo-alt me-1"></i> {{ $project['location'] }}
                                    </small>
                                    <small class="text-muted">
                                        <i class="bi bi-rulers me-1"></i> {{ $project['area'] }}
                                    </small>
                                </div>
                                <a href="#" class="btn btn-outline-dark w-100">View Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
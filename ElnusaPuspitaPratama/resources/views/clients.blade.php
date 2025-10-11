@extends('layout.main')
@section('title', 'Our Clients')
@section('content')

<!-- Hero -->
<section class="py-5 bg-gradient" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
    <div class="container text-center text-white">
        <h1 class="display-3 fw-bold" data-aos="fade-up">Trusted by Industry Leaders</h1>
        <p class="lead" data-aos="fade-up" data-aos-delay="100">Building partnerships that last</p>
    </div>
</section>

<!-- Client Logos Grid -->
<section class="py-5">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-12">
                <h2 class="fw-bold" data-aos="fade-up">{{ $clients->count() }}+ Companies Trust Us</h2>
                <div class="mx-auto bg-warning mt-3" style="width: 100px; height: 4px;"></div>
            </div>
        </div>
        
        <!-- Client Cards -->
        <div class="row g-4">
            @forelse($clients as $index => $client)
            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="{{ $index * 50 }}">
                <div class="card border-0 shadow-sm h-100 hover-card">
                    <div class="card-body text-center">
                        <!-- Logo Placeholder -->
                        <div class="bg-warning bg-opacity-10 p-4 rounded-3 mb-3">
                            <i class="bi bi-building fs-1 text-warning"></i>
                        </div>
                        <!-- ✅ UBAH: company_name jadi nama -->
                        <h6 class="fw-bold">{{ $client->nama }}</h6>
                        <p class="small text-muted mb-2">
                            <i class="bi bi-geo-alt me-1"></i>
                            {{ $client->alamat ?? 'Indonesia' }}
                        </p>
                        <p class="small text-muted">
                            <i class="bi bi-person me-1"></i>
                            {{ $client->contact_person ?? 'N/A' }}
                        </p>
                        <hr>
                        <p class="small mb-0">
                            <i class="bi bi-briefcase me-1 text-warning"></i>
                            <strong>{{ $client->projects_count }}</strong> Projects Completed
                        </p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center">
                <p class="text-muted">No clients data available</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-5 bg-light">
    <div class="container py-5">
        <h2 class="text-center fw-bold mb-5" data-aos="fade-up">What Our Clients Say</h2>
        <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="0">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                        <p class="fst-italic text-muted">"Exceptional quality and professionalism. Elnusa Puspita Pratama delivered our project on time and within budget. Highly recommended!"</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <div class="bg-warning bg-opacity-25 rounded-circle p-3 me-3">
                                <i class="bi bi-person fs-5 text-warning"></i>
                            </div>
                            <div>
                                <p class="mb-0 fw-bold">John Doe</p>
                                <small class="text-muted">CEO, PT Mandiri Sejahtera</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                        <p class="fst-italic text-muted">"Outstanding construction work. The team was very professional and always kept us updated. We're extremely satisfied with the results."</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <div class="bg-warning bg-opacity-25 rounded-circle p-3 me-3">
                                <i class="bi bi-person fs-5 text-warning"></i>
                            </div>
                            <div>
                                <p class="mb-0 fw-bold">Jane Smith</p>
                                <small class="text-muted">Director, PT Berkah Abadi</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                        <p class="fst-italic text-muted">"Best construction partner we've ever worked with. Attention to detail and commitment to excellence is unmatched. Will definitely work together again."</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <div class="bg-warning bg-opacity-25 rounded-circle p-3 me-3">
                                <i class="bi bi-person fs-5 text-warning"></i>
                            </div>
                            <div>
                                <p class="mb-0 fw-bold">Robert Chen</p>
                                <small class="text-muted">Owner, CV Maju Jaya</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-dark text-white">
    <div class="container text-center">
        <h2 class="display-5 fw-bold mb-4" data-aos="fade-up">Ready to Start Your Project?</h2>
        <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">
            Join our growing list of satisfied clients
        </p>
        <a href="/contact" class="btn btn-warning btn-lg px-5" data-aos="fade-up" data-aos-delay="200">
            Contact Us Today <i class="bi bi-arrow-right ms-2"></i>
        </a>
    </div>
</section>

<style>
    .hover-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .hover-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 1rem 3rem rgba(0,0,0,0.175)!important;
    }
</style>

@endsection
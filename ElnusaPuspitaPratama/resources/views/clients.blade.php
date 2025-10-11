@extends('layout.main')
@section('title', 'Our Clients')
@section('content')

    <!-- Hero Section - Konsisten dengan Home -->
    <section class="position-relative vh-100 d-flex align-items-center overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1560179707-f14e90ef3623?w=1920') center/cover no-repeat; z-index: -1;">
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-white">
                    <h1 class="display-3 fw-bold mb-4" data-aos="fade-right">
                        Trusted by Industry Leaders
                    </h1>
                    <p class="lead mb-4" data-aos="fade-right" data-aos-delay="100">
                        Building lasting partnerships through quality and reliability
                    </p>
                </div>

                <div class="col-lg-6 text-white text-lg-end mt-5 mt-lg-0">
                    <div data-aos="fade-left">
                        <h2 class="display-1 fw-bold text-warning">{{ $clients->count() }}+</h2>
                        <h3 class="display-6 fw-light mb-4">Valued Clients</h3>
                    </div>
                    <div class="row mt-4" data-aos="fade-left" data-aos-delay="100">
                        <div class="col-6">
                            <h4 class="fw-bold text-warning">98%</h4>
                            <p class="mb-0">Retention Rate</p>
                        </div>
                        <div class="col-6">
                            <h4 class="fw-bold text-warning">100%</h4>
                            <p class="mb-0">Satisfaction Rate</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="position-absolute bottom-0 start-50 translate-middle-x mb-4">
            <a href="#clients-section" class="text-white text-decoration-none">
                <i class="bi bi-chevron-down fs-1"></i>
            </a>
        </div>
    </section>

    <!-- Client Logos Grid - Dark Wood Theme -->
    <section id="clients-section" class="py-5 position-relative overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(rgba(30, 20, 15, 0.75), rgba(30, 20, 15, 0.75)), 
                            url('https://images.unsplash.com/photo-1615529182904-14819c35db37?w=1920') center/cover no-repeat; 
                z-index: -1;">
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
                            <h2 class="display-4 fw-bold mb-0 text-white" style="letter-spacing: 3px;">OUR VALUED CLIENTS
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

            <div class="row g-4">
                @foreach ($clients as $client)
                    <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up">
                        <div class="p-4 rounded-3 shadow-lg text-center h-100"
                            style="background: rgba(255, 255, 255, 0.1); 
                                backdrop-filter: blur(15px); 
                                -webkit-backdrop-filter: blur(15px);
                                border: 1px solid rgba(255, 255, 255, 0.25);
                                transition: all 0.3s ease;"
                            onmouseover="this.style.transform='translateY(-10px)'; this.style.background='rgba(255, 255, 255, 0.15)'"
                            onmouseout="this.style.transform='translateY(0)'; this.style.background='rgba(255, 255, 255, 0.1)'">

                            <div class="rounded-circle mb-3 mx-auto d-flex align-items-center justify-content-center"
                                style="width: 120px; height: 120px;
                                    background: rgba(255, 255, 255, 0.2); 
                                    backdrop-filter: blur(10px);
                                    border: 1px solid rgba(255, 193, 7, 0.3);">
                                <i class="bi bi-building fs-1 text-warning"></i>
                            </div>

                            <h6 class="fw-bold mb-2 text-white">{{ $client->nama }}</h6>

                            <div class="d-flex align-items-center justify-content-center mb-2">
                                
                                    <i class="bi bi-geo-alt-fill text-white small me-2"></i>
                                
                                <small class="text-white text-opacity-85">{{ $client->alamat ?? 'Indonesia' }}</small>
                            </div>

                            <div class="d-flex align-items-center justify-content-center">
                                
                                    <i class="bi bi-briefcase-fill text-white small me-2"></i>
                               
                                <small class="text-white text-opacity-85">{{ $client->industri ?? 'Construction' }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials Section - Konsisten Dark Wood Theme -->
    <section class="py-5 position-relative overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(rgba(30, 20, 15, 0.85), rgba(30, 20, 15, 0.85)), 
                    url('https://images.unsplash.com/photo-1464983953574-0892a716854b?w=1920') center/cover no-repeat; z-index: -1;">
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
                            <h2 class="display-4 fw-bold mb-0 text-white" style="letter-spacing: 3px;">WHAT OUR CLIENTS SAY
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

            <div class="row g-4">
                @foreach ($reviews as $review)
                    <div class="col-lg-4" data-aos="fade-up">
                        <div class="p-4 rounded-3 shadow-lg h-100 d-flex flex-column justify-content-between"
                            style="background: rgba(255,255,255,0.10); 
                                backdrop-filter: blur(10px); 
                                border: 1px solid rgba(255,255,255,0.25); 
                                transition: all 0.3s ease;">
                            <p class="text-white text-opacity-90 mb-4">
                                "{{ $review->deskripsi }}"
                            </p>
                            <hr class="border-warning border-opacity-25">
                            <div class="d-flex align-items-center mt-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0"
                                    style="width:48px;height:48px;background:rgba(255,193,7,0.15);">
                                    <i class="bi bi-person-fill fs-4 text-white"></i>
                                </div>
                                <div>
                                    <p class="mb-0 fw-bold text-white">{{ $review->nama_client }}</p>
                                    <small class="text-white text-opacity-85">{{ $review->jabatan }},
                                        {{ $review->perusahaan }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

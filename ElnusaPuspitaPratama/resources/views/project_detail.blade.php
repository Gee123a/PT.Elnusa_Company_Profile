@extends('layout.main')
@section('title', $project->project_name)
@section('content')

    {{-- Hero Section: Menampilkan detail utama project di bagian atas halaman --}}
    <section class="position-relative d-flex align-items-center overflow-hidden pt-5" style="min-height: 60vh;">
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1541976590-713941681591?w=1920') center/cover no-repeat; z-index: -1;">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 text-white">
                    <div class="badge bg-warning text-dark px-3 py-2 mb-3" data-aos="fade-right">
                        <i class="bi bi-building me-2"></i>Project Details
                    </div>
                    <h1 class="display-3 fw-bold mb-4" data-aos="fade-right" data-aos-delay="100">
                        {{ $project->project_name }}
                    </h1>
                    <p class="lead mb-4" data-aos="fade-right" data-aos-delay="200">
                        {{ $project->description }}
                    </p>
                    <div class="d-flex gap-3 flex-wrap" data-aos="fade-right" data-aos-delay="300">
                        <span class="badge bg-warning text-dark px-3 py-2 fs-6">
                            <i class="bi bi-geo-alt-fill me-2"></i>{{ $project->address }}
                        </span>
                        <span class="badge {{ $badgeColor }} px-3 py-2 fs-6">
                            <i class="bi bi-check-circle-fill me-2"></i>{{ ucfirst($project->status) }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Project Content Section: Menampilkan gambar utama dan deskripsi project --}}
    <section id="project-content" class="py-5 position-relative overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(rgba(30,20,15,0.85), rgba(30,20,15,0.85)), url('{{ $project->background_image_url ?? 'https://images.unsplash.com/photo-1464983953574-0892a716854b?w=1920' }}') center/cover no-repeat; z-index: -1;">
        </div>
        <div class="container py-5">
            <div class="row g-4">
                {{-- Kolom kiri: gambar utama dan deskripsi project --}}
                <div class="col-lg-8 d-flex flex-column">
                    <div class="rounded-3 shadow-lg border border-warning border-opacity-25 overflow-hidden mb-4"
                        data-aos="fade-right"
                        style="background: rgba(255,255,255,0.10); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.25);">
                        <img src="{{ asset($project->image_url ?? 'image/default_project.jpg') }}" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="Project Image">
                    </div>
                    <div class="p-4 rounded-3 shadow-lg border border-warning border-opacity-25"
                        style="background: rgba(255,255,255,0.10); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.25);">
                        <h4 class="fw-bold mb-3 text-white">Project Description</h4>
                        <p class="text-white text-opacity-90 mb-0">{{ $project->description }}</p>
                    </div>
                </div>

                {{-- Kolom kanan: informasi detail project --}}
                <div class="col-lg-4 d-flex flex-column">
                    <div class="p-4 rounded-3 shadow-lg border border-warning border-opacity-25 mb-4 flex-grow-1 d-flex flex-column justify-content-between"
                        data-aos="fade-left"
                        style="background: rgba(255,255,255,0.10); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.25);">
                        <div>
                            <div class="d-flex align-items-center mb-4">
                                <div class="rounded-circle d-flex align-items-center justify-content-center me-3"
                                    style="width:48px;height:48px;background:rgba(255,193,7,0.25);">
                                    <i class="bi bi-info-circle-fill fs-4 text-white"></i>
                                </div>
                                <h5 class="fw-bold mb-0 text-white">Project Information</h5>
                            </div>
                            <div class="mb-3 pb-3 border-bottom border-warning border-opacity-25">
                                <small class="text-white text-opacity-85 d-block mb-1">
                                    <i class="bi bi-briefcase-fill text-white me-2"></i>Client
                                </small>
                                <h6 class="fw-bold mb-0 text-white">{{ $project->client->company_name }}</h6>
                            </div>
                            <div class="mb-3 pb-3 border-bottom border-warning border-opacity-25">
                                <small class="text-white text-opacity-85 d-block mb-1">
                                    <i class="bi bi-person-fill text-white me-2"></i>Project Manager
                                </small>
                                <h6 class="fw-bold mb-0 text-white">{{ $project->projectManager->name }}</h6>
                            </div>
                            <div class="mb-3 pb-3 border-bottom border-warning border-opacity-25">
                                <small class="text-white text-opacity-85 d-block mb-1">
                                    <i class="bi bi-geo-alt-fill text-white me-2"></i>Location
                                </small>
                                <h6 class="fw-semibold mb-0 text-white">{{ $project->address }}</h6>
                            </div>
                            <div class="mb-3 pb-3 border-bottom border-warning border-opacity-25">
                                <small class="text-white text-opacity-85 d-block mb-1">
                                    <i class="bi bi-calendar-fill text-white me-2"></i>Duration
                                </small>
                                <h6 class="fw-semibold mb-0 text-white">
                                    {{ $project->start_date->format('M Y') }} - {{ $project->deadline->format('M Y') }}
                                </h6>
                            </div>
                            <div class="mb-3">
                                <small class="text-white text-opacity-85 d-block mb-1">
                                    <i class="bi bi-cash-stack text-white me-2"></i>Budget
                                </small>
                                <h5 class="fw-bold text-success mb-0">
                                    Rp {{ number_format($project->budget, 0, ',', '.') }}
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="bg-dark text-white p-4 rounded-3 shadow-lg mb-4" data-aos="fade-left"
                        data-aos-delay="100">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h6 class="fw-bold mb-0">
                                <i class="bi bi-graph-up text-warning me-2"></i>Project Status
                            </h6>
                            <span class="badge {{ $badgeColor }} px-3 py-2">{{ ucfirst($project->status) }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Related Projects Section: Menampilkan daftar project terkait dalam bentuk card --}}
    <section class="py-5 position-relative overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(rgba(30,20,15,0.85), rgba(30,20,15,0.85)), url('{{ $project->background_image_url ?? 'https://images.unsplash.com/photo-1464983953574-0892a716854b?w=1920' }}') center/cover no-repeat; z-index: -1;">
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    {{-- Judul section similar project --}}
                    @include('layout.sectionTitle', ['title' => 'SIMILAR PROJECTS'])
                </div>
            </div>
            <div class="row g-4">
                {{-- Daftar card project terkait --}}
                @foreach ($relatedProjects as $relatedProject)
                    <div class="col-lg-4 d-flex" data-aos="fade-up">
                        <div class="p-4 rounded-3 shadow-lg d-flex flex-column h-100 overflow-hidden"
                            style="background: rgba(255,255,255,0.10); 
                                backdrop-filter: blur(10px); 
                                border: 1px solid rgba(255,255,255,0.25); 
                                transition: all 0.3s ease;">
                            <div class="position-relative overflow-hidden mb-3">
                                <img src="{{ asset($relatedProject->image_url ?? 'image/default_project.jpg') }}" class="rounded-3 shadow"
                                    alt="Related Project"
                                    style="height: 220px; width: 100%; object-fit: cover; transition: transform 0.3s ease;"
                                    onmouseover="this.style.transform='scale(1.08)'"
                                    onmouseout="this.style.transform='scale(1)'">
                                <span class="position-absolute top-0 end-0 badge {{ $relatedProject->badgeColor }} m-3 px-3 py-2">
                                    {{ ucfirst($relatedProject->status) }}
                                </span>
                            </div>
                            <div class="flex-grow-1 d-flex flex-column justify-content-between">
                                <div>
                                    <h5 class="fw-bold mb-2 text-white">{{ $relatedProject->project_name }}</h5>
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="rounded-circle d-flex align-items-center justify-content-center me-2"
                                            style="width:32px;height:32px;background:rgba(255,193,7,0.10);">
                                            <i class="bi bi-geo-alt-fill text-white small"></i>
                                        </div>
                                        <small class="text-white text-opacity-85">{{ $relatedProject->address }}</small>
                                    </div>
                                </div>
                                <div class="mt-auto pt-2">
                                    <a href="{{ route('project.show', $relatedProject->id) }}"
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

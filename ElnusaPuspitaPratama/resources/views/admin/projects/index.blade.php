@extends('layout.main')
@section('title', 'Manage Projects')
@section('content')

<section class="position-relative d-flex align-items-center overflow-hidden pt-5" style="min-height: 40vh;">
    <div class="position-absolute top-0 start-0 w-100 h-100"
        style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=1920') center/cover no-repeat; z-index: -1;">
    </div>
    <div class="container">
        <!-- Breadcrumb Navigation -->
        <nav aria-label="breadcrumb" data-aos="fade-right">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/admin/dashboard" class="text-warning text-decoration-none">
                        <i class="bi bi-speedometer2 me-1"></i>Dashboard
                    </a>
                </li>
                <li class="breadcrumb-item active text-white" aria-current="page">Manage Projects</li>
            </ol>
        </nav>

        <div class="row align-items-center mt-3">
            <div class="col-lg-8 text-white">
                <h1 class="display-3 fw-bold mb-3" data-aos="fade-right">
                    <i class="bi bi-briefcase-fill text-warning me-3"></i>Manage Projects
                </h1>
                <p class="lead" data-aos="fade-right" data-aos-delay="100">
                    View, edit, and manage all construction projects
                </p>
            </div>
            <div class="col-lg-4 text-end" data-aos="fade-left">
                <div class="d-flex flex-column gap-2">
                    <a href="/admin/projects/create" class="btn btn-warning btn-lg px-5 py-3">
                        <i class="bi bi-plus-circle me-2"></i>Add New Project
                    </a>
                    <a href="/admin/dashboard" class="btn btn-outline-light btn-lg px-5 py-2">
                        <i class="bi bi-arrow-left me-2"></i>Back to Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 position-relative overflow-hidden">
    <div class="position-absolute top-0 start-0 w-100 h-100"
        style="background: linear-gradient(rgba(30,20,15,0.85), rgba(30,20,15,0.85)), url('https://images.unsplash.com/photo-1615529182904-14819c35db37?w=1920') center/cover no-repeat; z-index: -1;">
    </div>
    <div class="container py-5">
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-4" role="alert" data-aos="fade-down">
            <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert" data-aos="fade-down">
            <i class="bi bi-exclamation-triangle-fill me-2"></i>{{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        <!-- Search Form -->
        <div class="row mb-4">
            <div class="col-lg-8 mx-auto" data-aos="fade-up">
                <form action="/admin/projects" method="GET" class="position-relative">
                    <div class="p-4 rounded-3 shadow-lg"
                        style="background: rgba(255,255,255,0.10); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2);">
                        <div class="row g-3 align-items-center">
                            <div class="col-lg-9">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text bg-dark border-warning text-warning">
                                        <i class="bi bi-search"></i>
                                    </span>
                                    <input type="text" 
                                        class="form-control form-control-lg bg-dark text-white border-warning" 
                                        name="search" 
                                        placeholder="Search by project name, client, manager, address, or status..."
                                        value="{{ $search ?? '' }}"
                                        style="border-left: none;">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-warning btn-lg">
                                        <i class="bi bi-search me-2"></i>Search
                                    </button>
                                    @if($search)
                                    <a href="/admin/projects" class="btn btn-outline-light">
                                        <i class="bi bi-x-circle me-2"></i>Clear
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                
                @if($search)
                <div class="mt-3 text-center">
                    <p class="text-white text-opacity-75 mb-0">
                        <i class="bi bi-funnel-fill me-2"></i>
                        Search results for: <span class="text-warning fw-bold">"{{ $search }}"</span>
                        <span class="badge bg-warning text-dark ms-2">{{ $projects->total() }} found</span>
                    </p>
                </div>
                @endif
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-dark table-hover align-middle">
                <thead class="table-warning">
                    <tr>
                        <th>Project Name</th>
                        <th>Client</th>
                        <th>Manager</th>
                        <th>Status</th>
                        <th>Budget</th>
                        <th>Deadline</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($projects as $project)
                    <tr>
                        <td class="fw-semibold">{{ $project->project_name }}</td>
                        <td>{{ $project->client->nama }}</td>
                        <td>{{ $project->projectManager->nama }}</td>
                        <td>
                            @php
                                $status = strtolower($project->status);
                                $badgeColor = 'bg-secondary';
                                if ($status === 'planning') {
                                    $badgeColor = 'bg-secondary';
                                } elseif ($status === 'on progress' || $status === 'in progress') {
                                    $badgeColor = 'bg-warning text-dark';
                                } elseif ($status === 'complete' || $status === 'completed') {
                                    $badgeColor = 'bg-success';
                                }
                            @endphp
                            <span class="badge {{ $badgeColor }} px-3 py-2">{{ ucfirst($project->status) }}</span>
                        </td>
                        <td class="text-success fw-semibold">Rp {{ number_format($project->budget / 1000000, 0) }}M</td>
                        <td>{{ $project->deadline->format('d M Y') }}</td>
                        <td>
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="/admin/projects/{{ $project->id }}/edit" class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                                <form action="/admin/projects/{{ $project->id }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Are you sure you want to delete this project?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash-fill"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center py-5">
                            <i class="bi bi-inbox fs-1 text-white text-opacity-50 d-block mb-3"></i>
                            @if($search)
                                <h5 class="text-white mb-2">No projects found for "{{ $search }}"</h5>
                                <p class="text-white text-opacity-75">Try different keywords or <a href="/admin/projects" class="text-warning">clear the search</a></p>
                            @else
                                <p class="text-white text-opacity-75">No projects found. Create your first project!</p>
                            @endif
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Custom Pagination -->
        @if($projects->hasPages())
        <div class="mt-4" data-aos="fade-up">
            <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center gap-3 p-4 rounded-3 shadow-lg"
                style="background: rgba(255,255,255,0.10); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2);">
                
                <!-- Pagination Info -->
                <div class="text-white text-center text-lg-start">
                    <i class="bi bi-info-circle me-2 text-warning"></i>
                    Showing <span class="text-warning fw-bold">{{ $projects->firstItem() }}</span> 
                    to <span class="text-warning fw-bold">{{ $projects->lastItem() }}</span> 
                    of <span class="text-warning fw-bold">{{ $projects->total() }}</span> projects
                </div>

                <!-- Custom Pagination Links -->
                <nav aria-label="Projects pagination">
                    <ul class="pagination pagination-lg mb-0">
                        {{-- Previous Button --}}
                        @if ($projects->onFirstPage())
                            <li class="page-item disabled">
                                <span class="page-link" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,193,7,0.3); color: rgba(255,255,255,0.3);">
                                    <i class="bi bi-chevron-double-left"></i>
                                </span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $projects->previousPageUrl() }}" 
                                   style="background: rgba(255,255,255,0.10); backdrop-filter: blur(10px); border: 1px solid rgba(255,193,7,0.5); color: #ffc107;">
                                    <i class="bi bi-chevron-double-left"></i>
                                </a>
                            </li>
                        @endif

                        {{-- Page Numbers --}}
                        @foreach ($projects->getUrlRange(1, $projects->lastPage()) as $page => $url)
                            @if ($page == $projects->currentPage())
                                <li class="page-item active">
                                    <span class="page-link fw-bold" 
                                          style="background: linear-gradient(135deg, #ffc107 0%, #ff9800 100%); 
                                                 border: 2px solid #ffc107; 
                                                 color: #1a1410;
                                                 box-shadow: 0 4px 15px rgba(255,193,7,0.4);">
                                        {{ $page }}
                                    </span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $url }}" 
                                       style="background: rgba(255,255,255,0.10); 
                                              backdrop-filter: blur(10px); 
                                              border: 1px solid rgba(255,193,7,0.3); 
                                              color: #ffc107;
                                              transition: all 0.3s ease;">
                                        {{ $page }}
                                    </a>
                                </li>
                            @endif
                        @endforeach

                        {{-- Next Button --}}
                        @if ($projects->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $projects->nextPageUrl() }}" 
                                   style="background: rgba(255,255,255,0.10); backdrop-filter: blur(10px); border: 1px solid rgba(255,193,7,0.5); color: #ffc107;">
                                    <i class="bi bi-chevron-double-right"></i>
                                </a>
                            </li>
                        @else
                            <li class="page-item disabled">
                                <span class="page-link" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,193,7,0.3); color: rgba(255,255,255,0.3);">
                                    <i class="bi bi-chevron-double-right"></i>
                                </span>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
        @endif
    </div>
</section>

@endsection
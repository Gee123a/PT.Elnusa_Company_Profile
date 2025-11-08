@extends('layout.main')
@section('title', 'Manage Projects')
@section('content')

<section class="position-relative d-flex align-items-center overflow-hidden pt-5" style="min-height: 40vh;">
    <div class="position-absolute top-0 start-0 w-100 h-100"
        style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=1920') center/cover no-repeat; z-index: -1;">
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 text-white">
                <h1 class="display-3 fw-bold mb-3" data-aos="fade-right">
                    <i class="bi bi-briefcase-fill text-warning me-3"></i>Manage Projects
                </h1>
                <p class="lead" data-aos="fade-right" data-aos-delay="100">
                    View, edit, and manage all construction projects
                </p>
            </div>
            <div class="col-lg-4 text-end" data-aos="fade-left">
                <a href="{{ route('admin.projects.create') }}" class="btn btn-warning btn-lg px-5 py-3">
                    <i class="bi bi-plus-circle me-2"></i>Add New Project
                </a>
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

        <div class="">
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
                    <tr data-aos="fade-up">
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
                                <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                                <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="d-inline"
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
                            <p class="text-white text-opacity-75">No projects found. Create your first project!</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection
@extends('layout.main')
@section('title', 'Manage Employees')
@section('content')

<section class="position-relative d-flex align-items-center overflow-hidden pt-5" style="min-height: 40vh;">
    <div class="position-absolute top-0 start-0 w-100 h-100"
        style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1521737711867-e3b97375f902?w=1920') center/cover no-repeat; z-index: -1;">
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
                <li class="breadcrumb-item active text-white" aria-current="page">Manage Employees</li>
            </ol>
        </nav>

        <div class="row align-items-center mt-3">
            <div class="col-lg-8 text-white">
                <h1 class="display-3 fw-bold mb-3" data-aos="fade-right">
                    <i class="bi bi-people-fill text-warning me-3"></i>Manage Employees
                </h1>
                <p class="lead" data-aos="fade-right" data-aos-delay="100">
                    View, edit, and manage all team members
                </p>
            </div>
            <div class="col-lg-4 text-end" data-aos="fade-left">
                <div class="d-flex flex-column gap-2">
                    <a href="/admin/employees/create" class="btn btn-warning btn-lg px-5 py-3">
                        <i class="bi bi-plus-circle me-2"></i>Add New Employee
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

        <div class="">
            <table class="table table-dark table-hover align-middle">
                <thead class="table-warning">
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Level</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Projects</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($employees as $employee)
                    <tr data-aos="fade-up">
                        <td class="fw-semibold">{{ $employee->nama }}</td>
                        <td>{{ $employee->position }}</td>
                        <td>
                            <span class="badge bg-info px-3 py-2">{{ $employee->tingkatan }}</span>
                        </td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>
                            @if($employee->projects_count > 0)
                                <span class="badge bg-warning text-dark px-3 py-2">
                                    {{ $employee->projects_count }} Project(s)
                                </span>
                            @else
                                <span class="badge bg-secondary px-3 py-2">No Projects</span>
                            @endif
                        </td>
                        <td>
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="/admin/employees/{{ $employee->id }}/edit" class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                                <form action="/admin/employees/{{ $employee->id }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Are you sure you want to delete {{ $employee->nama }}?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" 
                                        @if($employee->projects_count > 0) 
                                            title="Cannot delete - managing {{ $employee->projects_count }} project(s)"
                                        @endif>
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
                            <p class="text-white text-opacity-75">No employees found. Add your first team member!</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection
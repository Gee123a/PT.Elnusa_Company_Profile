@extends('layout.main')
@section('title', 'Admin Dashboard')
@section('content')

<section class="position-relative d-flex align-items-center overflow-hidden pt-5" style="min-height: 40vh;">
    <div class="position-absolute top-0 start-0 w-100 h-100"
        style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1497366216548-37526070297c?w=1920') center/cover no-repeat; z-index: -1;">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-white">
                <h1 class="display-3 fw-bold mb-3" data-aos="fade-right">
                    <i class="bi bi-speedometer2 text-warning me-3"></i>Admin Dashboard
                </h1>
                <p class="lead" data-aos="fade-right" data-aos-delay="100">
                    Manage your projects and team members efficiently
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-5 position-relative overflow-hidden">
    <div class="position-absolute top-0 start-0 w-100 h-100"
        style="background: linear-gradient(rgba(30,20,15,0.85), rgba(30,20,15,0.85)), url('https://images.unsplash.com/photo-1615529182904-14819c35db37?w=1920') center/cover no-repeat; z-index: -1;">
    </div>
    <div class="container py-5">
        <!-- Statistics Cards -->
        <div class="row g-4 mb-5">
            <div class="col-lg-3 col-md-6" data-aos="fade-up">
                <div class="p-4 rounded-3 shadow-lg border border-warning border-opacity-25 h-100"
                    style="background: rgba(255,255,255,0.10); backdrop-filter: blur(10px);">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h6 class="text-white text-opacity-75 mb-2">Total Projects</h6>
                            <h2 class="fw-bold text-white mb-0">{{ $totalProjects }}</h2>
                        </div>
                        <div class="rounded-circle d-flex align-items-center justify-content-center"
                            style="width:60px;height:60px;background:rgba(255,193,7,0.2);">
                            <i class="bi bi-briefcase-fill fs-3 text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="p-4 rounded-3 shadow-lg border border-warning border-opacity-25 h-100"
                    style="background: rgba(255,255,255,0.10); backdrop-filter: blur(10px);">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h6 class="text-white text-opacity-75 mb-2">Ongoing Projects</h6>
                            <h2 class="fw-bold text-warning mb-0">{{ $ongoingProjects }}</h2>
                        </div>
                        <div class="rounded-circle d-flex align-items-center justify-content-center"
                            style="width:60px;height:60px;background:rgba(255,193,7,0.2);">
                            <i class="bi bi-hourglass-split fs-3 text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="p-4 rounded-3 shadow-lg border border-warning border-opacity-25 h-100"
                    style="background: rgba(255,255,255,0.10); backdrop-filter: blur(10px);">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h6 class="text-white text-opacity-75 mb-2">Total Employees</h6>
                            <h2 class="fw-bold text-white mb-0">{{ $totalEmployees }}</h2>
                        </div>
                        <div class="rounded-circle d-flex align-items-center justify-content-center"
                            style="width:60px;height:60px;background:rgba(255,193,7,0.2);">
                            <i class="bi bi-people-fill fs-3 text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="p-4 rounded-3 shadow-lg border border-warning border-opacity-25 h-100"
                    style="background: rgba(255,255,255,0.10); backdrop-filter: blur(10px);">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h6 class="text-white text-opacity-75 mb-2">Total Clients</h6>
                            <h2 class="fw-bold text-white mb-0">{{ $totalClients }}</h2>
                        </div>
                        <div class="rounded-circle d-flex align-items-center justify-content-center"
                            style="width:60px;height:60px;background:rgba(255,193,7,0.2);">
                            <i class="bi bi-building fs-3 text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="row g-4">
            <div class="col-lg-12 text-center mb-4">
                @include('layout.sectionTitle', ['title' => 'QUICK ACTIONS'])
            </div>
            
            <div class="col-lg-6" data-aos="fade-up">
                <div class="p-5 rounded-3 shadow-lg border border-warning border-opacity-25 h-100"
                    style="background: rgba(255,255,255,0.10); backdrop-filter: blur(10px);">
                    <div class="d-flex align-items-center mb-4">
                        <div class="rounded-circle d-flex align-items-center justify-content-center me-3"
                            style="width:70px;height:70px;background:rgba(255,193,7,0.2);">
                            <i class="bi bi-briefcase-fill fs-2 text-warning"></i>
                        </div>
                        <div>
                            <h3 class="fw-bold mb-1 text-white">Manage Projects</h3>
                            <p class="text-white text-opacity-75 mb-0">Create, edit, and manage all projects</p>
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-warning btn-lg">
                            <i class="bi bi-list-ul me-2"></i>View All Projects
                        </a>
                        <a href="{{ route('admin.projects.create') }}" class="btn btn-warning btn-lg">
                            <i class="bi bi-plus-circle me-2"></i>Add New Project
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="p-5 rounded-3 shadow-lg border border-warning border-opacity-25 h-100"
                    style="background: rgba(255,255,255,0.10); backdrop-filter: blur(10px);">
                    <div class="d-flex align-items-center mb-4">
                        <div class="rounded-circle d-flex align-items-center justify-content-center me-3"
                            style="width:70px;height:70px;background:rgba(255,193,7,0.2);">
                            <i class="bi bi-people-fill fs-2 text-warning"></i>
                        </div>
                        <div>
                            <h3 class="fw-bold mb-1 text-white">Manage Employees</h3>
                            <p class="text-white text-opacity-75 mb-0">Create, edit, and manage team members</p>
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <a href="{{ route('admin.employees.index') }}" class="btn btn-outline-warning btn-lg">
                            <i class="bi bi-list-ul me-2"></i>View All Employees
                        </a>
                        <a href="{{ route('admin.employees.create') }}" class="btn btn-warning btn-lg">
                            <i class="bi bi-plus-circle me-2"></i>Add New Employee
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
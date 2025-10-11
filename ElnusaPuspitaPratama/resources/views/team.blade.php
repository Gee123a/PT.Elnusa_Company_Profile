
// filepath: resources/views/team.blade.php
@extends('layout.main')
@section('title', 'Our Team')
@section('content')

<!-- Hero Section -->
<section class="py-5 bg-dark text-white">
    <div class="container text-center">
        <h1 class="display-3 fw-bold">Meet Our Expert Team</h1>
        <p class="lead">Professionals committed to delivering excellence</p>
    </div>
</section>

<!-- Management Team -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Management</h2>
        <div class="row g-4">
            @foreach($management as $employee)
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-sm text-center">
                    <!-- Photo Placeholder -->
                    <div class="bg-warning mx-auto mt-4" 
                         style="width: 150px; height: 150px; border-radius: 50%; 
                                display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-person-circle fs-1 text-white"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="fw-bold">{{ $employee->name }}</h5>
                        <p class="text-muted">{{ $employee->position }}</p>
                        <p class="small">
                            <i class="bi bi-envelope me-2"></i>{{ $employee->email }}
                        </p>
                        <p class="small">
                            <i class="bi bi-telephone me-2"></i>{{ $employee->phone }}
                        </p>
                        <hr>
                        <p class="text-muted small">
                            <strong>{{ $employee->projects->count() }}</strong> Projects Handled
                        </p>
                        <a href="/team/{{ $employee->id }}" class="btn btn-outline-warning btn-sm">
                            View Profile
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Engineers & Staff -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Our Engineers</h2>
        <div class="row g-4">
            @foreach($engineers as $employee)
            <!-- Similar card layout -->
            @endforeach
        </div>
    </div>
</section>

@endsection
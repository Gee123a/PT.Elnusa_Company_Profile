
// filepath: resources/views/project-detail.blade.php
@extends('layout.main')
@section('title', $project->project_name)
@section('content')

<section class="py-5">
    <div class="container">
        <!-- Project Hero -->
        <div class="row">
            <div class="col-lg-8">
                <!-- Project Image Gallery -->
                <div id="projectGallery" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="..." class="d-block w-100" alt="">
                        </div>
                        <!-- More images -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <h1>{{ $project->project_name }}</h1>
                <p class="text-muted">{{ $project->description }}</p>
                
                <!-- Project Info Card -->
                <div class="card">
                    <div class="card-body">
                        <h6>Client</h6>
                        <p><strong>{{ $project->client->company_name }}</strong></p>
                        
                        <h6>Project Manager</h6>
                        <p><strong>{{ $project->projectManager->name }}</strong></p>
                        
                        <h6>Location</h6>
                        <p>{{ $project->address }}</p>
                        
                        <h6>Duration</h6>
                        <p>{{ $project->start_date->format('M Y') }} - {{ $project->deadline->format('M Y') }}</p>
                        
                        <h6>Budget</h6>
                        <p class="text-success">Rp {{ number_format($project->budget, 0, ',', '.') }}</p>
                        
                        <h6>Status</h6>
                        <span class="badge bg-success">{{ $project->status }}</span>
                    </div>
                </div>

                <!-- CTA Button -->
                <a href="/contact" class="btn btn-warning btn-lg w-100 mt-3">
                    Start Your Project <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Project Features -->
        <div class="row mt-5">
            <div class="col-lg-12">
                <h3>Project Highlights</h3>
                <ul>
                    <li>Modern architectural design</li>
                    <li>Eco-friendly materials</li>
                    <li>Smart home integration</li>
                </ul>
            </div>
        </div>

        <!-- Related Projects -->
        <div class="row mt-5">
            <h3>Similar Projects</h3>
            <!-- Show 3-4 related projects -->
        </div>
    </div>
</section>

@endsection
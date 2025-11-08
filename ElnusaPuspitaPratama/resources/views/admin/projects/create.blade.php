@extends('layout.main')
@section('title', 'Create New Project')
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
                    <a href="{{ route('admin.dashboard') }}" class="text-warning text-decoration-none">
                        <i class="bi bi-speedometer2 me-1"></i>Dashboard
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.projects.index') }}" class="text-warning text-decoration-none">
                        Manage Projects
                    </a>
                </li>
                <li class="breadcrumb-item active text-white" aria-current="page">Create New Project</li>
            </ol>
        </nav>

        <div class="row mt-3">
            <div class="col-lg-12 text-white">
                <h1 class="display-3 fw-bold mb-3" data-aos="fade-right">
                    <i class="bi bi-plus-circle-fill text-warning me-3"></i>Create New Project
                </h1>
                <p class="lead" data-aos="fade-right" data-aos-delay="100">
                    Add a new construction project to your portfolio
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
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="p-5 rounded-3 shadow-lg border border-warning border-opacity-25"
                    style="background: rgba(255,255,255,0.10); backdrop-filter: blur(10px);" data-aos="fade-up">
                    
                    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data" id="projectForm">
                        @csrf
                        
                        <div class="row g-4">
                            <!-- Project Name -->
                            <div class="col-md-12">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-briefcase-fill text-warning me-2"></i>Project Name
                                </label>
                                <input type="text" name="project_name" 
                                    class="form-control form-control-lg bg-dark bg-opacity-50 text-white border-warning border-opacity-25 @error('project_name') is-invalid @enderror" 
                                    value="{{ old('project_name') }}" required>
                                @error('project_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Client -->
                            <div class="col-md-6">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-building text-warning me-2"></i>Client
                                </label>
                                <select name="client_id" 
                                    class="form-select form-select-lg bg-dark bg-opacity-50 text-white border-warning border-opacity-25 @error('client_id') is-invalid @enderror" 
                                    required>
                                    <option value="">Select Client</option>
                                    @foreach($clients as $client)
                                        <option value="{{ $client->id }}" {{ old('client_id') == $client->id ? 'selected' : '' }}>
                                            {{ $client->nama }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('client_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Project Manager -->
                            <div class="col-md-6">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-person-fill text-warning me-2"></i>Project Manager
                                </label>
                                <select name="project_manager_id" 
                                    class="form-select form-select-lg bg-dark bg-opacity-50 text-white border-warning border-opacity-25 @error('project_manager_id') is-invalid @enderror" 
                                    required>
                                    <option value="">Select Manager</option>
                                    @foreach($employees as $employee)
                                        <option value="{{ $employee->id }}" {{ old('project_manager_id') == $employee->id ? 'selected' : '' }}>
                                            {{ $employee->nama }} - {{ $employee->position }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('project_manager_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Start Date -->
                            <div class="col-md-6">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-calendar-check text-warning me-2"></i>Start Date
                                </label>
                                <input type="date" name="start_date" 
                                    class="form-control form-control-lg bg-dark bg-opacity-50 text-white border-warning border-opacity-25 @error('start_date') is-invalid @enderror" 
                                    value="{{ old('start_date') }}" required>
                                @error('start_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Deadline -->
                            <div class="col-md-6">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-calendar-x text-warning me-2"></i>Deadline
                                </label>
                                <input type="date" name="deadline" 
                                    class="form-control form-control-lg bg-dark bg-opacity-50 text-white border-warning border-opacity-25 @error('deadline') is-invalid @enderror" 
                                    value="{{ old('deadline') }}" required>
                                @error('deadline')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Budget -->
                            <div class="col-md-6">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-currency-dollar text-warning me-2"></i>Budget (Rp)
                                </label>
                                <input type="number" name="budget" step="0.01" 
                                    class="form-control form-control-lg bg-dark bg-opacity-50 text-white border-warning border-opacity-25 @error('budget') is-invalid @enderror" 
                                    value="{{ old('budget') }}" 
                                    placeholder="e.g., 50000000000" required>
                                @error('budget')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Status -->
                            <div class="col-md-6">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-hourglass-split text-warning me-2"></i>Status
                                </label>
                                <select name="status" 
                                    class="form-select form-select-lg bg-dark bg-opacity-50 text-white border-warning border-opacity-25 @error('status') is-invalid @enderror" 
                                    required>
                                    <option value="">Select Status</option>
                                    <option value="planning" {{ old('status') == 'planning' ? 'selected' : '' }}>Planning</option>
                                    <option value="in progress" {{ old('status') == 'in progress' ? 'selected' : '' }}>In Progress</option>
                                    <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                                </select>
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Address -->
                            <div class="col-md-12">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-geo-alt-fill text-warning me-2"></i>Project Address
                                </label>
                                <input type="text" name="address" 
                                    class="form-control form-control-lg bg-dark bg-opacity-50 text-white border-warning border-opacity-25 @error('address') is-invalid @enderror" 
                                    value="{{ old('address') }}" 
                                    placeholder="e.g., Jakarta, Indonesia" required>
                                @error('address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Project Image Upload -->
                            <div class="col-md-12">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-image text-warning me-2"></i>Project Image
                                </label>
                                <input type="file" name="image" id="imageInput"
                                    class="form-control form-control-lg bg-dark bg-opacity-50 text-white border-warning border-opacity-25 @error('image') is-invalid @enderror" 
                                    accept="image/jpeg,image/jpg,image/png,image/gif,image/webp"
                                    onchange="validateAndPreviewImage(event)" required>
                                <small class="text-white text-opacity-75 d-block mt-2">
                                    <i class="bi bi-info-circle me-1"></i>Accepted formats: JPG, JPEG, PNG, GIF, WEBP (Max: 5MB)
                                </small>
                                @error('image')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                                <div id="fileSizeError" class="text-danger fw-semibold mt-2 d-none">
                                    <i class="bi bi-exclamation-triangle-fill me-2"></i>File size exceeds 5MB! Please choose a smaller image.
                                </div>
                                
                                <!-- Image Preview -->
                                <div id="imagePreview" class="mt-3 d-none">
                                    <p class="text-white fw-semibold mb-2">Preview:</p>
                                    <img id="preview" src="" alt="Image Preview" class="img-fluid rounded-3 shadow" style="max-height: 300px;">
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="col-md-12">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-file-text text-warning me-2"></i>Project Description
                                </label>
                                <textarea name="description" rows="5" 
                                    class="form-control form-control-lg bg-dark bg-opacity-50 text-white border-warning border-opacity-25 @error('description') is-invalid @enderror" 
                                    placeholder="Describe the project details, scope, and objectives..." 
                                    required>{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <hr class="my-4 border-warning border-opacity-25">

                        <div class="d-flex gap-3 justify-content-end">
                            <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-secondary btn-lg px-5">
                                <i class="bi bi-x-circle me-2"></i>Cancel
                            </a>
                            <button type="submit" id="submitBtn" class="btn btn-warning btn-lg px-5">
                                <i class="bi bi-check-circle me-2"></i>Create Project
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
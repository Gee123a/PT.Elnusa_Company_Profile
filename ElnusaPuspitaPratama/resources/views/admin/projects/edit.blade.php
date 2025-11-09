@extends('layout.main')
@section('title', 'Edit Project')
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
                    <a href="/admin" class="text-warning text-decoration-none">
                        <i class="bi bi-speedometer2 me-1"></i>Dashboard
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/admin/projects" class="text-warning text-decoration-none">
                        Manage Projects
                    </a>
                </li>
                <li class="breadcrumb-item active text-white" aria-current="page">Edit Project</li>
            </ol>
        </nav>

        <div class="row mt-3">
            <div class="col-lg-12 text-white">
                <h1 class="display-3 fw-bold mb-3" data-aos="fade-right">
                    <i class="bi bi-pencil-fill text-warning me-3"></i>Edit Project
                </h1>
                <p class="lead" data-aos="fade-right" data-aos-delay="100">
                    Update project details and information
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
                    
                    <form action="/admin/projects/{{ $project->id }}" method="POST" enctype="multipart/form-data" id="projectForm">
                        @csrf
                        @method('PUT')
                        
                        <div class="row g-4">
                            <!-- Project Name -->
                            <div class="col-md-12">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-briefcase-fill text-warning me-2"></i>Project Name
                                </label>
                                <input type="text" name="project_name" 
                                    class="form-control form-control-lg bg-dark bg-opacity-50 text-white border-warning border-opacity-25 @error('project_name') is-invalid @enderror" 
                                    value="{{ old('project_name', $project->project_name) }}" required>
                                @error('project_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Client (Readonly - Cannot be changed) -->
                            <div class="col-md-12">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-building text-warning me-2"></i>Client
                                </label>
                                <input type="text" 
                                    class="form-control form-control-lg bg-secondary bg-opacity-25 text-white border-secondary border-opacity-50" 
                                    value="{{ $project->client->nama }}" 
                                    readonly>
                                <small class="text-white text-opacity-50 d-block mt-2">
                                    <i class="bi bi-lock-fill me-1"></i>Client cannot be changed after project creation
                                </small>
                                <!-- Hidden input to maintain client_id -->
                                <input type="hidden" name="client_id" value="{{ $project->client_id }}">
                            </div>

                            <!-- Project Manager -->
                            <div class="col-md-12">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-person-fill text-warning me-2"></i>Project Manager
                                </label>
                                <select name="project_manager_id" 
                                    class="form-select form-select-lg bg-dark bg-opacity-50 text-white border-warning border-opacity-25 @error('project_manager_id') is-invalid @enderror" 
                                    required>
                                    <option value="">Select Manager</option>
                                    @foreach($employees as $employee)
                                        <option value="{{ $employee->id }}" {{ old('project_manager_id', $project->project_manager_id) == $employee->id ? 'selected' : '' }}>
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
                                    value="{{ old('start_date', $project->start_date->format('Y-m-d')) }}" required>
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
                                    value="{{ old('deadline', $project->deadline->format('Y-m-d')) }}" required>
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
                                    value="{{ old('budget', $project->budget) }}" required>
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
                                    <option value="planning" {{ old('status', $project->status) == 'planning' ? 'selected' : '' }}>Planning</option>
                                    <option value="in progress" {{ old('status', $project->status) == 'in progress' ? 'selected' : '' }}>In Progress</option>
                                    <option value="completed" {{ old('status', $project->status) == 'completed' ? 'selected' : '' }}>Completed</option>
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
                                    value="{{ old('address', $project->address) }}" required>
                                @error('address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Current Image Display -->
                            <div class="col-md-12">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-image text-warning me-2"></i>Current Project Image
                                </label>
                                <div class="p-3 rounded-3 border border-warning border-opacity-25 bg-dark bg-opacity-25">
                                    @if($project->image_url && file_exists(public_path($project->image_url)))
                                        <img src="{{ asset($project->image_url) }}" alt="{{ $project->project_name }}" 
                                            class="img-fluid rounded-3 shadow" style="max-height: 250px;">
                                    @else
                                        <p class="text-white text-opacity-50 mb-0">No image available</p>
                                    @endif
                                </div>
                            </div>

                            <!-- New Image Upload -->
                            <div class="col-md-12">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-upload text-warning me-2"></i>Upload New Image (Optional)
                                </label>
                                <input type="file" name="image" id="imageInput"
                                    class="form-control form-control-lg bg-dark bg-opacity-50 text-white border-warning border-opacity-25 @error('image') is-invalid @enderror" 
                                    accept="image/jpeg,image/jpg,image/png,image/gif,image/webp"
                                    onchange="validateAndPreviewImage(event)">
                                <small class="text-white text-opacity-75 d-block mt-2">
                                    <i class="bi bi-info-circle me-1"></i>Leave empty to keep current image. Accepted formats: JPG, JPEG, PNG, GIF, WEBP (Max: 5MB)
                                </small>
                                @error('image')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                                <div id="fileSizeError" class="text-danger fw-semibold mt-2 d-none">
                                    <i class="bi bi-exclamation-triangle-fill me-2"></i>File size exceeds 5MB! Please choose a smaller image.
                                </div>
                                
                                <!-- New Image Preview -->
                                <div id="imagePreview" class="mt-3 d-none">
                                    <p class="text-white fw-semibold mb-2">New Image Preview:</p>
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
                                    required>{{ old('description', $project->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <hr class="my-4 border-warning border-opacity-25">

                        <div class="d-flex gap-3 justify-content-end">
                            <a href="/admin/projects" class="btn btn-outline-secondary btn-lg px-5">
                                <i class="bi bi-x-circle me-2"></i>Cancel
                            </a>
                            <button type="submit" class="btn btn-warning btn-lg px-5">
                                <i class="bi bi-check-circle me-2"></i>Update Project
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function validateAndPreviewImage(event) {
    const file = event.target.files[0];
    const fileSizeError = document.getElementById('fileSizeError');
    const imagePreview = document.getElementById('imagePreview');
    const preview = document.getElementById('preview');
    const submitButton = document.querySelector('button[type="submit"]');
    
    fileSizeError.classList.add('d-none');
    imagePreview.classList.add('d-none');
    
    if (file) {
        if (file.size > 5242880) {
            fileSizeError.classList.remove('d-none');
            event.target.value = '';
            submitButton.disabled = true;
            return;
        }
        
        submitButton.disabled = false;
        
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            imagePreview.classList.remove('d-none');
        }
        reader.readAsDataURL(file);
    }
}
</script>

@endsection
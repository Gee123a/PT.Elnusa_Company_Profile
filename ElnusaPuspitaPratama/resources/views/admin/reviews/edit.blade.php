@extends('layout.main')
@section('title', 'Edit Review')
@section('content')

<section class="position-relative d-flex align-items-center overflow-hidden pt-5" style="min-height: 40vh;">
    <div class="position-absolute top-0 start-0 w-100 h-100"
        style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1556761175-4b46a572b786?w=1920') center/cover no-repeat; z-index: -1;">
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
                    <a href="/admin/reviews" class="text-warning text-decoration-none">
                        Manage Reviews
                    </a>
                </li>
                <li class="breadcrumb-item active text-white" aria-current="page">Edit Review</li>
            </ol>
        </nav>

        <div class="row mt-3">
            <div class="col-lg-12 text-white">
                <h1 class="display-3 fw-bold mb-3" data-aos="fade-right">
                    <i class="bi bi-pencil-fill text-warning me-3"></i>Edit Review
                </h1>
                <p class="lead" data-aos="fade-right" data-aos-delay="100">
                    Update client testimonial content
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
                    
                    <form action="/admin/reviews/{{ $review->id }}" method="POST" id="reviewForm">
                        @csrf
                        @method('PUT')

                        <div class="row g-4">
                            <!-- Locked Info Banner -->
                            <div class="col-12">
                                <div class="alert alert-warning border-warning bg-warning bg-opacity-10 text-white">
                                    <i class="bi bi-lock-fill me-2 text-warning"></i>
                                    <strong>Notice:</strong> Client information cannot be modified. Only the review content is editable.
                                </div>
                            </div>

                            <!-- Client (Locked - Display Only) -->
                            <div class="col-12">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-building text-warning me-2"></i>Client Company
                                </label>
                                <input type="text" 
                                    class="form-control form-control-lg bg-secondary bg-opacity-25 text-white border-secondary border-opacity-50" 
                                    value="{{ $review->client->nama ?? $review->perusahaan }}" 
                                    readonly>
                                <small class="text-white text-opacity-50 d-block mt-2">
                                    <i class="bi bi-lock-fill me-1"></i>This field is locked and cannot be changed
                                </small>
                            </div>

                            <!-- Client Name (Locked) -->
                            <div class="col-md-4">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-person-fill text-warning me-2"></i>Client Name
                                </label>
                                <input type="text" 
                                    class="form-control form-control-lg bg-secondary bg-opacity-25 text-white border-secondary border-opacity-50" 
                                    value="{{ $review->nama_client }}" 
                                    readonly>
                                <small class="text-white text-opacity-50 d-block mt-1">
                                    <i class="bi bi-lock-fill me-1"></i>Locked
                                </small>
                                <!-- Hidden input to maintain value -->
                                <input type="hidden" name="nama_client" value="{{ $review->nama_client }}">
                            </div>

                            <!-- Position (Locked) -->
                            <div class="col-md-4">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-briefcase-fill text-warning me-2"></i>Position
                                </label>
                                <input type="text" 
                                    class="form-control form-control-lg bg-secondary bg-opacity-25 text-white border-secondary border-opacity-50" 
                                    value="{{ $review->jabatan }}" 
                                    readonly>
                                <small class="text-white text-opacity-50 d-block mt-1">
                                    <i class="bi bi-lock-fill me-1"></i>Locked
                                </small>
                                <!-- Hidden input to maintain value -->
                                <input type="hidden" name="jabatan" value="{{ $review->jabatan }}">
                            </div>

                            <!-- Company (Locked) -->
                            <div class="col-md-4">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-building text-warning me-2"></i>Company
                                </label>
                                <input type="text" 
                                    class="form-control form-control-lg bg-secondary bg-opacity-25 text-white border-secondary border-opacity-50" 
                                    value="{{ $review->perusahaan }}" 
                                    readonly>
                                <small class="text-white text-opacity-50 d-block mt-1">
                                    <i class="bi bi-lock-fill me-1"></i>Locked
                                </small>
                                <!-- Hidden input to maintain value -->
                                <input type="hidden" name="perusahaan" value="{{ $review->perusahaan }}">
                                @if($review->client_id)
                                    <input type="hidden" name="client_id" value="{{ $review->client_id }}">
                                @endif
                            </div>

                            <!-- Review Description (EDITABLE - Only this field can be changed) -->
                            <div class="col-12">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-chat-quote-fill text-warning me-2"></i>Client Review / Testimonial
                                    <span class="badge bg-success ms-2">Editable</span>
                                </label>
                                <textarea name="deskripsi" rows="6" 
                                    class="form-control form-control-lg bg-dark bg-opacity-50 text-white border-warning border-opacity-25 @error('deskripsi') is-invalid @enderror" 
                                    placeholder="Write the client's testimonial here..."
                                    required>{{ old('deskripsi', $review->deskripsi) }}</textarea>
                                <small class="text-white text-opacity-75 d-block mt-2">
                                    <i class="bi bi-info-circle me-1"></i>Minimum 20 characters required. This is the only field you can edit.
                                </small>
                                @error('deskripsi')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Review Info -->
                            <div class="col-12">
                                <div class="p-3 rounded-3 border border-warning border-opacity-25 bg-dark bg-opacity-25">
                                    <div class="row g-3 text-white text-opacity-75 small">
                                        <div class="col-md-6">
                                            <i class="bi bi-calendar-plus text-warning me-2"></i>
                                            <strong>Created:</strong> {{ $review->created_at->format('d M Y, H:i') }}
                                        </div>
                                        <div class="col-md-6">
                                            <i class="bi bi-calendar-check text-warning me-2"></i>
                                            <strong>Last Updated:</strong> {{ $review->updated_at->format('d M Y, H:i') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="my-4 border-warning border-opacity-25">

                        <div class="d-flex gap-3 justify-content-end">
                            <a href="/admin/reviews" class="btn btn-outline-secondary btn-lg px-5">
                                <i class="bi bi-x-circle me-2"></i>Cancel
                            </a>
                            <button type="submit" class="btn btn-warning btn-lg px-5">
                                <i class="bi bi-check-circle me-2"></i>Update Review
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
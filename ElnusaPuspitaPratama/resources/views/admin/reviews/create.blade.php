{{-- filepath: resources/views/admin/reviews/create.blade.php --}}
@extends('layout.main')
@section('title', 'Create New Review')
@section('content')

<section class="position-relative d-flex align-items-center overflow-hidden pt-5" style="min-height: 40vh;">
    <div class="position-absolute top-0 start-0 w-100 h-100"
        style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1556761175-4b46a572b786?w=1920') center/cover no-repeat; z-index: -1;">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-white">
                <h1 class="display-3 fw-bold mb-3" data-aos="fade-right">
                    <i class="bi bi-plus-circle-fill text-warning me-3"></i>Create New Review
                </h1>
                <p class="lead" data-aos="fade-right" data-aos-delay="100">
                    Add a new client testimonial
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
                    style="background: rgba(255,255,255,0.10); backdrop-filter: blur(10px);">
                    
                    <form action="/admin/reviews" method="POST">
                        @csrf

                        <div class="row g-4">
                            <!-- Client Name -->
                            <div class="col-md-6">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-person-fill text-warning me-2"></i>Client Name
                                </label>
                                <input type="text" name="nama_client" 
                                    class="form-control form-control-lg bg-dark bg-opacity-50 text-white border-warning border-opacity-25 @error('nama_client') is-invalid @enderror" 
                                    value="{{ old('nama_client') }}" required>
                                @error('nama_client')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Position -->
                            <div class="col-md-6">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-briefcase-fill text-warning me-2"></i>Position
                                </label>
                                <input type="text" name="jabatan" 
                                    class="form-control form-control-lg bg-dark bg-opacity-50 text-white border-warning border-opacity-25 @error('jabatan') is-invalid @enderror" 
                                    value="{{ old('jabatan') }}" required>
                                @error('jabatan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Company -->
                            <div class="col-12">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-building text-warning me-2"></i>Company
                                </label>
                                <input type="text" name="perusahaan" 
                                    class="form-control form-control-lg bg-dark bg-opacity-50 text-white border-warning border-opacity-25 @error('perusahaan') is-invalid @enderror" 
                                    value="{{ old('perusahaan') }}" required>
                                @error('perusahaan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Review Description -->
                            <div class="col-12">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-chat-quote-fill text-warning me-2"></i>Review
                                </label>
                                <textarea name="deskripsi" rows="5" 
                                    class="form-control form-control-lg bg-dark bg-opacity-50 text-white border-warning border-opacity-25 @error('deskripsi') is-invalid @enderror" 
                                    placeholder="Write the client's testimonial here..." required>{{ old('deskripsi') }}</textarea>
                                @error('deskripsi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <hr class="my-4 border-warning border-opacity-25">

                        <div class="d-flex gap-3 justify-content-end">
                            <a href="/admin/reviews" class="btn btn-outline-secondary btn-lg px-5">
                                <i class="bi bi-x-circle me-2"></i>Cancel
                            </a>
                            <button type="submit" class="btn btn-warning btn-lg px-5">
                                <i class="bi bi-check-circle me-2"></i>Create Review
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
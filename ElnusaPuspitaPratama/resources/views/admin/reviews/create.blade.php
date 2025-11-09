{{-- filepath: resources/views/admin/reviews/create.blade.php --}}
@extends('layout.main')
@section('title', 'Create New Review')
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
                <li class="breadcrumb-item active text-white" aria-current="page">Create New Review</li>
            </ol>
        </nav>

        <div class="row mt-3">
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
                    style="background: rgba(255,255,255,0.10); backdrop-filter: blur(10px);" data-aos="fade-up">
                    
                    <form action="/admin/reviews" method="POST" id="reviewForm">
                        @csrf

                        <div class="row g-4">
                            <!-- Client Selection -->
                            <div class="col-12">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-building text-warning me-2"></i>Select Client
                                </label>
                                <select name="client_id" id="clientSelect"
                                    class="form-select form-select-lg bg-dark bg-opacity-50 text-white border-warning border-opacity-25 @error('client_id') is-invalid @enderror" 
                                    required>
                                    <option value="">Choose a client...</option>
                                    @foreach($clients as $client)
                                        <option value="{{ $client->id }}" 
                                            data-contact="{{ $client->contact_person }}"

                                            data-company="{{ $client->nama }}"

                                            {{ old('client_id') == $client->id ? 'selected' : '' }}>
                                            {{ $client->nama }} - {{ $client->contact_person }}
                                        </option>
                                    @endforeach
                                </select>
                                <small class="text-white text-opacity-75 d-block mt-2">
                                    <i class="bi bi-info-circle me-1"></i>Select the client who provided this review. All fields below will be auto-filled.
                                </small>
                                @error('client_id')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Client Name (Auto-filled, readonly) -->
                            <div class="col-md-4">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-person-fill text-warning me-2"></i>Client Name
                                </label>
                                <input type="text" name="nama_client" id="namaClient"
                                    class="form-control form-control-lg bg-secondary bg-opacity-25 text-white border-secondary border-opacity-50 @error('nama_client') is-invalid @enderror" 
                                    value="{{ old('nama_client') }}" 
                                    placeholder="Auto-filled"
                                    readonly
                                    required>
                                @error('nama_client')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Position (Auto-filled, readonly) -->
                            <div class="col-md-4">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-briefcase-fill text-warning me-2"></i>Position
                                </label>
                                <input type="text" name="jabatan" id="jabatan"
                                    class="form-control form-control-lg bg-secondary bg-opacity-25 text-white border-secondary border-opacity-50 @error('jabatan') is-invalid @enderror" 
                                    value="{{ old('jabatan') }}" 
                                    placeholder="Auto-filled"
                                    readonly
                                    required>
                                <small class="text-white text-opacity-50 d-block mt-1">
                                    <i class="bi bi-info-circle me-1"></i>Based on contact person
                                </small>
                                @error('jabatan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Company (Auto-filled, readonly) -->
                            <div class="col-md-4">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-building text-warning me-2"></i>Company
                                </label>
                                <input type="text" name="perusahaan" id="perusahaan"
                                    class="form-control form-control-lg bg-secondary bg-opacity-25 text-white border-secondary border-opacity-50 @error('perusahaan') is-invalid @enderror" 
                                    value="{{ old('perusahaan') }}" 
                                    placeholder="Auto-filled"
                                    readonly
                                    required>
                                @error('perusahaan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Review Description (Editable) -->
                            <div class="col-12">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-chat-quote-fill text-warning me-2"></i>Client Review / Testimonial
                                </label>
                                <textarea name="deskripsi" rows="6" 
                                    class="form-control form-control-lg bg-dark bg-opacity-50 text-white border-warning border-opacity-25 @error('deskripsi') is-invalid @enderror" 
                                    placeholder="Write the client's testimonial here..."
                                    required>{{ old('deskripsi') }}</textarea>
                                <small class="text-white text-opacity-75 d-block mt-2">
                                    <i class="bi bi-info-circle me-1"></i>Minimum 20 characters required. This is the only field you need to fill manually.
                                </small>
                                @error('deskripsi')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Info Box -->
                            <div class="col-12">
                                <div class="alert alert-info border-info bg-info bg-opacity-10 text-white">
                                    <i class="bi bi-lightbulb-fill me-2 text-info"></i>
                                    <strong>Note:</strong> Client information (name, position, company) is automatically filled based on your client selection. You only need to write the review content.
                                </div>
                            </div>
                        </div>

                        <hr class="my-4 border-warning border-opacity-25">

                        <div class="d-flex gap-3 justify-content-end">
                            <a href="/admin/reviews" class="btn btn-outline-secondary btn-lg px-5">
                                <i class="bi bi-x-circle me-2"></i>Cancel
                            </a>
                            <button type="submit" class="btn btn-warning btn-lg px-5" id="submitBtn" disabled>
                                <i class="bi bi-check-circle me-2"></i>Create Review
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const clientSelect = document.getElementById('clientSelect');
    const namaClientInput = document.getElementById('namaClient');
    const jabatanInput = document.getElementById('jabatan');
    const perusahaanInput = document.getElementById('perusahaan');
    const submitBtn = document.getElementById('submitBtn');
    
    clientSelect.addEventListener('change', function() {
        const selectedOption = this.options[this.selectedIndex];
        
        if (this.value) {
            const contactPerson = selectedOption.getAttribute('data-contact');
            const company = selectedOption.getAttribute('data-company');
            
            // Fill the fields
            namaClientInput.value = contactPerson;
            jabatanInput.value = 'Contact Person'; // Default position
            perusahaanInput.value = company;
            
            // Enable submit button
            submitBtn.disabled = false;
        } else {
            // Clear fields
            namaClientInput.value = '';
            jabatanInput.value = '';
            perusahaanInput.value = '';
            
            // Disable submit button
            submitBtn.disabled = true;
        }
    });
    
    // Check if there's old input (after validation error)
    if (clientSelect.value) {
        submitBtn.disabled = false;
    }
});
</script>

@endsection
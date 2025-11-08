@extends('layout.main')
@section('title', 'Edit Employee')
@section('content')

<section class="position-relative d-flex align-items-center overflow-hidden pt-5" style="min-height: 40vh;">
    <div class="position-absolute top-0 start-0 w-100 h-100"
        style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1521737711867-e3b97375f902?w=1920') center/cover no-repeat; z-index: -1;">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-white">
                <h1 class="display-3 fw-bold mb-3" data-aos="fade-right">
                    <i class="bi bi-pencil-fill text-warning me-3"></i>Edit Employee
                </h1>
                <p class="lead" data-aos="fade-right" data-aos-delay="100">
                    Update employee details and information
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
                    
                    <form action="{{ route('admin.employees.update', $employee->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="row g-4">
                            <!-- Name -->
                            <div class="col-md-12">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-person-fill text-warning me-2"></i>Full Name
                                </label>
                                <input type="text" name="nama" 
                                    class="form-control form-control-lg bg-dark bg-opacity-50 text-white border-warning border-opacity-25 @error('nama') is-invalid @enderror" 
                                    value="{{ old('nama', $employee->nama) }}" required>
                                @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Position -->
                            <div class="col-md-6">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-briefcase-fill text-warning me-2"></i>Position
                                </label>
                                <input type="text" name="position" 
                                    class="form-control form-control-lg bg-dark bg-opacity-50 text-white border-warning border-opacity-25 @error('position') is-invalid @enderror" 
                                    value="{{ old('position', $employee->position) }}" required>
                                @error('position')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Tingkatan -->
                            <div class="col-md-6">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-bar-chart-fill text-warning me-2"></i>Level
                                </label>
                                <select name="tingkatan" 
                                    class="form-select form-select-lg bg-dark bg-opacity-50 text-white border-warning border-opacity-25 @error('tingkatan') is-invalid @enderror" 
                                    required>
                                    <option value="">Select Level</option>
                                    <option value="Junior" {{ old('tingkatan', $employee->tingkatan) == 'Junior' ? 'selected' : '' }}>Junior</option>
                                    <option value="Senior" {{ old('tingkatan', $employee->tingkatan) == 'Senior' ? 'selected' : '' }}>Senior</option>
                                    <option value="Manager" {{ old('tingkatan', $employee->tingkatan) == 'Manager' ? 'selected' : '' }}>Manager</option>
                                    <option value="Director" {{ old('tingkatan', $employee->tingkatan) == 'Director' ? 'selected' : '' }}>Director</option>
                                </select>
                                @error('tingkatan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-envelope-fill text-warning me-2"></i>Email
                                </label>
                                <input type="email" name="email" 
                                    class="form-control form-control-lg bg-dark bg-opacity-50 text-white border-warning border-opacity-25 @error('email') is-invalid @enderror" 
                                    value="{{ old('email', $employee->email) }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Phone -->
                            <div class="col-md-6">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-telephone-fill text-warning me-2"></i>Phone
                                </label>
                                <input type="text" name="phone" 
                                    class="form-control form-control-lg bg-dark bg-opacity-50 text-white border-warning border-opacity-25 @error('phone') is-invalid @enderror" 
                                    value="{{ old('phone', $employee->phone) }}" required>
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Hire Date -->
                            <div class="col-md-6">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-calendar-check text-warning me-2"></i>Hire Date
                                </label>
                                <input type="date" name="hire_date" 
                                    class="form-control form-control-lg bg-dark bg-opacity-50 text-white border-warning border-opacity-25 @error('hire_date') is-invalid @enderror" 
                                    value="{{ old('hire_date', $employee->hire_date->format('Y-m-d')) }}" required>
                                @error('hire_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Specialization -->
                            <div class="col-md-6">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-award-fill text-warning me-2"></i>Specialization
                                </label>
                                <input type="text" name="specialization" 
                                    class="form-control form-control-lg bg-dark bg-opacity-50 text-white border-warning border-opacity-25 @error('specialization') is-invalid @enderror" 
                                    value="{{ old('specialization', $employee->specialization) }}" required>
                                @error('specialization')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Address -->
                            <div class="col-md-12">
                                <label class="form-label text-white fw-semibold">
                                    <i class="bi bi-geo-alt-fill text-warning me-2"></i>Address
                                </label>
                                <textarea name="alamat" rows="3" 
                                    class="form-control form-control-lg bg-dark bg-opacity-50 text-white border-warning border-opacity-25 @error('alamat') is-invalid @enderror" 
                                    required>{{ old('alamat', $employee->alamat) }}</textarea>
                                @error('alamat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <hr class="my-4 border-warning border-opacity-25">

                        <div class="d-flex gap-3 justify-content-end">
                            <a href="{{ route('admin.employees.index') }}" class="btn btn-outline-secondary btn-lg px-5">
                                <i class="bi bi-x-circle me-2"></i>Cancel
                            </a>
                            <button type="submit" class="btn btn-warning btn-lg px-5">
                                <i class="bi bi-check-circle me-2"></i>Update Employee
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
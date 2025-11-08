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
                    <a href="/admin" class="text-warning text-decoration-none">
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
                    <a href="/admin" class="btn btn-outline-light btn-lg px-5 py-2">
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

        <!-- Search Form -->
        <div class="row mb-4">
            <div class="col-lg-8 mx-auto" data-aos="fade-up">
                <div class="p-4 rounded-3 shadow-lg"
                    style="background: rgba(255,255,255,0.10); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2);">
                    <div class="input-group input-group-lg">
                        <span class="input-group-text bg-dark border-warning text-warning">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="text" 
                            class="form-control form-control-lg bg-dark text-white border-warning search-input-centered" 
                            id="searchInput"
                            placeholder="Search employees..."
                            value="{{ $search ?? '' }}"
                            style="border-left: none;">
                        @if($search)
                        <a href="/admin/employees" class="btn btn-outline-light">
                            <i class="bi bi-x-circle"></i>
                        </a>
                        @endif
                    </div>
                </div>
                
                @if($search)
                <div class="mt-3 text-center">
                    <p class="text-white text-opacity-75 mb-0">
                        <i class="bi bi-funnel-fill me-2"></i>
                        Search results for: <span class="text-warning fw-bold">"{{ $search }}"</span>
                        <span class="badge bg-warning text-dark ms-2">{{ $employees->total() }} found</span>
                    </p>
                </div>
                @endif
            </div>
        </div>

        <div class="table-responsive">
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
                <tbody id="employeeTableBody">
                    @include('admin.employees.table-rows', compact('employees', 'search'))
                </tbody>
            </table>
        </div>

        <!-- Custom Pagination -->
        @if($employees->hasPages())
        <div class="mt-4" data-aos="fade-up">
            <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center gap-3 p-4 rounded-3 shadow-lg"
                style="background: rgba(255,255,255,0.10); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2);">
                
                <!-- Pagination Info -->
                <div class="text-white text-center text-lg-start">
                    <i class="bi bi-info-circle me-2 text-warning"></i>
                    Showing <span class="text-warning fw-bold">{{ $employees->firstItem() }}</span> 
                    to <span class="text-warning fw-bold">{{ $employees->lastItem() }}</span> 
                    of <span class="text-warning fw-bold">{{ $employees->total() }}</span> employees
                </div>

                <!-- Custom Pagination Links -->
                <div id="paginationContainer">
                    @include('admin.employees.pagination', compact('employees', 'search'))
                </div>
            </div>
        </div>
        @endif
    </div>
</section>

@endsection

<script>
// Wait for DOM to be ready
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    
    if (!searchInput) {
        console.error('Search input not found');
        return;
    }

    // Live search on keyup
    searchInput.addEventListener('keyup', function() {
        const searchTerm = this.value;
        
        fetch(`/admin/employees/search?search=${encodeURIComponent(searchTerm)}`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('employeeTableBody').innerHTML = data.html;
                document.getElementById('paginationContainer').innerHTML = data.pagination;
                
                // Update the info text
                const infoText = document.querySelector('.text-white.text-center.text-lg-start');
                if (infoText && data.total) {
                    infoText.innerHTML = `<i class="bi bi-info-circle me-2 text-warning"></i>
                        Showing <span class="text-warning fw-bold">${data.firstItem || 0}</span> 
                        to <span class="text-warning fw-bold">${data.lastItem || 0}</span> 
                        of <span class="text-warning fw-bold">${data.total}</span> employees`;
                }
                
                // Re-attach pagination click handlers
                attachPaginationHandlers();
            })
            .catch(error => console.error('Error:', error));
    });

    function attachPaginationHandlers() {
        document.querySelectorAll('.pagination-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const url = new URL(this.href);
                const page = url.searchParams.get('page');
                const search = searchInput.value;
                
                fetch(`/admin/employees/search?search=${encodeURIComponent(search)}&page=${page}`)
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById('employeeTableBody').innerHTML = data.html;
                        document.getElementById('paginationContainer').innerHTML = data.pagination;
                        attachPaginationHandlers();
                    });
            });
        });
    }

    // Initialize pagination handlers on page load
    attachPaginationHandlers();
});
</script>

<style>
/* Center placeholder text but keep typed text left-aligned */
.search-input-centered::placeholder {
    text-align: center;
    opacity: 0.6;
}

.search-input-centered:focus::placeholder {
    opacity: 0.4;
}
</style>
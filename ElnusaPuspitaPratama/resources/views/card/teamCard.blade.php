<div class="col-lg-4 col-md-6" data-aos="fade-up">
    <div class="p-4 rounded-3 shadow-lg h-100 text-center card-hover">
        <div class="rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center team-avatar bg-white bg-opacity-20 border border-warning border-opacity-50">
            <i class="bi bi-person-fill fs-1 text-white"></i>
        </div>
        <h5 class="fw-bold mb-2 text-white">{{ $employee->nama }}</h5>
        <small class="fw-semibold text-white">{{ $employee->position }}</small>
        <div class="d-flex align-items-center justify-content-center mb-2 mt-3">
            <i class="bi bi-envelope-fill text-white me-2"></i>
            <small class="text-white text-opacity-85">{{ $employee->email }}</small>
        </div>
        <div class="d-flex align-items-center justify-content-center mb-3">
            <i class="bi bi-telephone-fill text-white me-2"></i>
            <small class="text-white text-opacity-85">{{ $employee->phone }}</small>
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-6" data-aos="fade-up">
    <div class="p-4 rounded-3 shadow-lg h-100"
        style="background: rgba(255, 255, 255, 0.1); 
            backdrop-filter: blur(15px); 
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.25);
            transition: all 0.3s ease;"
        onmouseover="this.style.transform='translateY(-10px)'; this.style.background='rgba(255, 255, 255, 0.15)'"
        onmouseout="this.style.transform='translateY(0)'; this.style.background='rgba(255, 255, 255, 0.1)'">

        <div class="text-center mb-3">
            <div class="rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center"
                style="width: 120px; 
                    height: 120px;
                    background: rgba(255, 255, 255, 0.2); 
                    backdrop-filter: blur(10px);
                    border: 3px solid rgba(255, 193, 7, 0.5);">
                <i class="bi bi-person-fill fs-1 text-white"></i>
            </div>
            <h5 class="fw-bold mb-2 text-white">{{ $employee->nama }}</h5>
            <small class="fw-semibold text-white">{{ $employee->position }}</small>
        </div>

        <div class="text-center">
            <div class="d-flex align-items-center justify-content-center mb-2">
                <i class="bi bi-envelope-fill text-white me-2"></i>
                <small class="text-white text-opacity-85">{{ $employee->email }}</small>
            </div>
            <div class="d-flex align-items-center justify-content-center mb-3">
                <i class="bi bi-telephone-fill text-white me-2"></i>
                <small class="text-white text-opacity-85">{{ $employee->phone }}</small>
            </div>
        </div>
    </div>
</div>
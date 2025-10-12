<div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up">
    <div class="p-4 rounded-3 shadow-lg text-center h-100"
        style="background: rgba(255, 255, 255, 0.1); 
            backdrop-filter: blur(15px); 
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.25);
            transition: all 0.3s ease;"
        onmouseover="this.style.transform='translateY(-10px)'; this.style.background='rgba(255, 255, 255, 0.15)'"
        onmouseout="this.style.transform='translateY(0)'; this.style.background='rgba(255, 255, 255, 0.1)'">

        <div class="rounded-circle mb-3 mx-auto d-flex align-items-center justify-content-center"
            style="width: 120px; height: 120px;
                background: rgba(255, 255, 255, 0.2); 
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 193, 7, 0.3);">
            <i class="bi bi-building fs-1 text-warning"></i>
        </div>

        <h6 class="fw-bold mb-2 text-white">{{ $client->nama }}</h6>

        <div class="d-flex align-items-center justify-content-center mb-2">
            <i class="bi bi-geo-alt-fill text-white small me-2"></i>
            <small class="text-white text-opacity-85">{{ $client->alamat ?? 'Indonesia' }}</small>
        </div>

        <div class="d-flex align-items-center justify-content-center">
            <i class="bi bi-briefcase-fill text-white small me-2"></i>
            <small class="text-white text-opacity-85">{{ $client->industri ?? 'Construction' }}</small>
        </div>
    </div>
</div>
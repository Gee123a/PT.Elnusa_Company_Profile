<div class="col-lg-4" data-aos="fade-up">
    <div class="p-4 rounded-3 shadow-lg h-100 d-flex flex-column justify-content-between"
        style="background: rgba(255,255,255,0.10); 
            backdrop-filter: blur(10px); 
            border: 1px solid rgba(255,255,255,0.25); 
            transition: all 0.3s ease;">
        <p class="text-white text-opacity-90 mb-4">
            "{{ $review->deskripsi }}"
        </p>
        <hr class="border-warning border-opacity-25">
        <div class="d-flex align-items-center mt-3">
            <div class="rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0"
                style="width:48px;height:48px;background:rgba(255,193,7,0.15);">
                <i class="bi bi-person-fill fs-4 text-white"></i>
            </div>
            <div>
                <p class="mb-0 fw-bold text-white">{{ $review->nama_client }}</p>
                <small class="text-white text-opacity-85">{{ $review->jabatan }},
                    {{ $review->perusahaan }}</small>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch" data-aos="fade-up">
    <div class="p-4 rounded-3 shadow-lg text-center h-100 card-hover d-flex flex-column justify-content-center mx-auto"
         style="width: 270px; min-width: 270px; max-width: 270px;">
        <div>
            <div class="rounded-circle mb-3 mx-auto d-flex align-items-center justify-content-center bg-white bg-opacity-20 border border-warning border-opacity-30 client-avatar">
                <i class="bi bi-building fs-1 text-warning"></i>
            </div>
            <h6 class="fw-bold mb-2 text-white">{{ $client->nama }}</h6>
        </div>
        <div class="mt-3 d-flex flex-column justify-content-center align-items-center flex-grow-1">
            <div class="d-flex align-items-center justify-content-center gap-2">
                <i class="bi bi-geo-alt-fill text-warning"></i>
                <small class="text-white text-opacity-85">{{ $client->alamat }}</small>
            </div>
        </div>
    </div>
</div>
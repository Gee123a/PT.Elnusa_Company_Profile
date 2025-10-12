<div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up">
    <div class="p-4 rounded-3 shadow-lg d-flex flex-column h-100 overflow-hidden project-card">
        <div class="position-relative overflow-hidden mb-3">
            <img src="{{ asset($project->image_url) }}"
                class="rounded-3 shadow project-img w-100"
                height="220">
            <div class="position-absolute top-0 start-0 m-3">
                <span class="badge {{ $project->badgeColor }} px-3 py-2">
                    {{ ucfirst($project->status) }}
                </span>
            </div>
        </div>
        <div class="flex-grow-1 d-flex flex-column justify-content-between">
            <div>
                <h5 class="fw-bold mb-2 text-white">{{ $project->project_name }}</h5>
                <p class="text-white text-opacity-85 small mb-3">
                    {{ \Illuminate\Support\Str::limit($project->description, 100) }}
                </p>
                <div class="mb-3">
                    <div class="d-flex align-items-center mb-2">
                        <div class="rounded-circle d-flex align-items-center justify-content-center me-2 bg-warning bg-opacity-10" style="width:32px;height:32px;">
                            <i class="bi bi-geo-alt-fill text-white small"></i>
                        </div>
                        <small class="text-white text-opacity-85">{{ $project->address }}</small>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="rounded-circle d-flex align-items-center justify-content-center me-2 bg-warning bg-opacity-10" style="width:32px;height:32px;">
                            <i class="bi bi-building text-white small"></i>
                        </div>
                        <small class="text-white text-opacity-85">{{ $project->client->nama }}</small>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle d-flex align-items-center justify-content-center me-2 bg-warning bg-opacity-10" style="width:32px;height:32px;">
                            <i class="bi bi-cash-stack text-white small"></i>
                        </div>
                        <small class="text-success fw-semibold">Rp
                            {{ number_format($project->budget / 1000000000, 1) }}B</small>
                    </div>
                </div>
            </div>
            <div class="mt-auto pt-2">
                <a href="/project/{{ $project->id }}" class="btn btn-outline-warning w-100 py-2">
                    View Details <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</div>
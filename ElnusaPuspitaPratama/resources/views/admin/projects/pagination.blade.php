@if($projects->hasPages())
<div class="mt-4" data-aos="fade-up">
    <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center gap-3 p-4 rounded-3 shadow-lg"
        style="background: rgba(255,255,255,0.10); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2);">
        
        <div class="text-white text-center text-lg-start">
            <i class="bi bi-info-circle me-2 text-warning"></i>
            Showing <span class="text-warning fw-bold">{{ $projects->firstItem() }}</span> 
            to <span class="text-warning fw-bold">{{ $projects->lastItem() }}</span> 
            of <span class="text-warning fw-bold">{{ $projects->total() }}</span> projects
        </div>

        <nav aria-label="Projects pagination">
            <ul class="pagination pagination-lg mb-0">
                @if ($projects->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,193,7,0.3); color: rgba(255,255,255,0.3);">
                            <i class="bi bi-chevron-double-left"></i>
                        </span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link pagination-link" href="{{ $projects->previousPageUrl() }}" 
                           style="background: rgba(255,255,255,0.10); backdrop-filter: blur(10px); border: 1px solid rgba(255,193,7,0.5); color: #ffc107;">
                            <i class="bi bi-chevron-double-left"></i>
                        </a>
                    </li>
                @endif

                @foreach ($projects->getUrlRange(1, $projects->lastPage()) as $page => $url)
                    @if ($page == $projects->currentPage())
                        <li class="page-item active">
                            <span class="page-link fw-bold" 
                                  style="background: linear-gradient(135deg, #ffc107 0%, #ff9800 100%); 
                                         border: 2px solid #ffc107; 
                                         color: #1a1410;
                                         box-shadow: 0 4px 15px rgba(255,193,7,0.4);">
                                {{ $page }}
                            </span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link pagination-link" href="{{ $url }}" 
                               style="background: rgba(255,255,255,0.10); 
                                      backdrop-filter: blur(10px); 
                                      border: 1px solid rgba(255,193,7,0.3); 
                                      color: #ffc107;
                                      transition: all 0.3s ease;">
                                {{ $page }}
                            </a>
                        </li>
                    @endif
                @endforeach

                @if ($projects->hasMorePages())
                    <li class="page-item">
                        <a class="page-link pagination-link" href="{{ $projects->nextPageUrl() }}" 
                           style="background: rgba(255,255,255,0.10); backdrop-filter: blur(10px); border: 1px solid rgba(255,193,7,0.5); color: #ffc107;">
                            <i class="bi bi-chevron-double-right"></i>
                        </a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <span class="page-link" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,193,7,0.3); color: rgba(255,255,255,0.3);">
                            <i class="bi bi-chevron-double-right"></i>
                        </span>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
</div>
@endif
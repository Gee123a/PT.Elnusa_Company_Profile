@if($projects->hasPages())
<nav aria-label="Projects pagination">
    <ul class="pagination mb-0 gap-2">
        {{-- Previous Page Link --}}
        @if ($projects->onFirstPage())
            <li class="page-item disabled">
                <span class="page-link d-inline-flex align-items-center justify-content-center" 
                      style="width: 45px; height: 45px; padding: 0; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,193,7,0.3); color: rgba(255,255,255,0.3); border-radius: 0.5rem;">
                    <i class="bi bi-chevron-left"></i>
                </span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link pagination-link d-inline-flex align-items-center justify-content-center" 
                   href="{{ $projects->previousPageUrl() }}&search={{ $search ?? '' }}"
                   style="width: 45px; height: 45px; padding: 0; background: rgba(255,255,255,0.10); backdrop-filter: blur(10px); border: 1px solid rgba(255,193,7,0.5); color: #ffc107; border-radius: 0.5rem; transition: all 0.3s ease;">
                    <i class="bi bi-chevron-left"></i>
                </a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($projects->getUrlRange(1, $projects->lastPage()) as $page => $url)
            @if ($page == $projects->currentPage())
                <li class="page-item active">
                    <span class="page-link fw-bold d-inline-flex align-items-center justify-content-center" 
                          style="width: 45px; height: 45px; padding: 0; background: linear-gradient(135deg, #ffc107 0%, #ff9800 100%); border: 2px solid #ffc107; color: #1a1410; box-shadow: 0 4px 15px rgba(255,193,7,0.4); border-radius: 0.5rem;">
                        {{ $page }}
                    </span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link pagination-link d-inline-flex align-items-center justify-content-center" 
                       href="{{ $url }}&search={{ $search ?? '' }}"
                       style="width: 45px; height: 45px; padding: 0; background: rgba(255,255,255,0.10); backdrop-filter: blur(10px); border: 1px solid rgba(255,193,7,0.3); color: #ffc107; border-radius: 0.5rem; transition: all 0.3s ease;">
                        {{ $page }}
                    </a>
                </li>
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($projects->hasMorePages())
            <li class="page-item">
                <a class="page-link pagination-link d-inline-flex align-items-center justify-content-center" 
                   href="{{ $projects->nextPageUrl() }}&search={{ $search ?? '' }}"
                   style="width: 45px; height: 45px; padding: 0; background: rgba(255,255,255,0.10); backdrop-filter: blur(10px); border: 1px solid rgba(255,193,7,0.5); color: #ffc107; border-radius: 0.5rem; transition: all 0.3s ease;">
                    <i class="bi bi-chevron-right"></i>
                </a>
            </li>
        @else
            <li class="page-item disabled">
                <span class="page-link d-inline-flex align-items-center justify-content-center" 
                      style="width: 45px; height: 45px; padding: 0; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,193,7,0.3); color: rgba(255,255,255,0.3); border-radius: 0.5rem;">
                    <i class="bi bi-chevron-right"></i>
                </span>
            </li>
        @endif
    </ul>
</nav>
@endif
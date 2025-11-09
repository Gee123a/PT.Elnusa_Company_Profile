@if ($reviews->hasPages())
    <nav aria-label="Page navigation">
        <ul class="pagination mb-0 gap-2">
            {{-- Previous Page Link --}}
            @if ($reviews->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link d-inline-flex align-items-center justify-content-center" 
                          style="width: 45px; height: 45px; padding: 0; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,193,7,0.3); color: rgba(255,255,255,0.3); border-radius: 0.5rem;">
                        <i class="bi bi-chevron-left"></i>
                    </span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link pagination-link d-inline-flex align-items-center justify-content-center" 
                       href="{{ $reviews->previousPageUrl() }}{{ !empty($search) ? '&search=' . urlencode($search) : '' }}" 
                       style="width: 45px; height: 45px; padding: 0; background: rgba(255,255,255,0.10); backdrop-filter: blur(10px); border: 1px solid rgba(255,193,7,0.5); color: #ffc107; border-radius: 0.5rem; transition: all 0.3s ease;">
                        <i class="bi bi-chevron-left"></i>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($reviews->getUrlRange(1, $reviews->lastPage()) as $page => $url)
                @if ($page == $reviews->currentPage())
                    <li class="page-item active">
                        <span class="page-link d-inline-flex align-items-center justify-content-center fw-bold" 
                              style="width: 45px; height: 45px; padding: 0; background: #ffc107; border: 1px solid #ffc107; color: #000; border-radius: 0.5rem;">
                            {{ $page }}
                        </span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link pagination-link d-inline-flex align-items-center justify-content-center" 
                           href="{{ $url }}{{ !empty($search) ? '&search=' . urlencode($search) : '' }}" 
                           style="width: 45px; height: 45px; padding: 0; background: rgba(255,255,255,0.10); backdrop-filter: blur(10px); border: 1px solid rgba(255,193,7,0.5); color: #ffc107; border-radius: 0.5rem; transition: all 0.3s ease;">
                            {{ $page }}
                        </a>
                    </li>
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($reviews->hasMorePages())
                <li class="page-item">
                    <a class="page-link pagination-link d-inline-flex align-items-center justify-content-center" 
                       href="{{ $reviews->nextPageUrl() }}{{ !empty($search) ? '&search=' . urlencode($search) : '' }}" 
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
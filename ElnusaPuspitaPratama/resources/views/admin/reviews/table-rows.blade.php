{{-- filepath: resources/views/admin/reviews/table-rows.blade.php --}}
@forelse($reviews as $review)
<tr style="transition: all 0.3s ease;">
    <td class="fw-semibold text-white">{{ $review->nama_client }}</td>
    <td class="text-white text-opacity-85">{{ $review->jabatan }}</td>
    <td class="text-white text-opacity-85">{{ $review->perusahaan }}</td>
    <td class="text-white text-opacity-85">
        {{ Str::limit($review->deskripsi, 100) }}
        @if(strlen($review->deskripsi) > 100)
            <span class="text-warning">...</span>
        @endif
    </td>
    <td>
        <div class="d-flex gap-2 justify-content-center">
            <a href="/admin/reviews/{{ $review->id }}/edit" 
               class="btn btn-warning shadow-sm d-inline-flex align-items-center justify-content-center"
               style="width: 38px; height: 38px; padding: 0; transition: all 0.3s ease;">
                <i class="bi bi-pencil-fill"></i>
            </a>
            <form action="/admin/reviews/{{ $review->id }}" method="POST" class="d-inline"
                onsubmit="return confirm('Are you sure you want to delete this review?');">
                @csrf
                @method('DELETE')
                <button type="submit" 
                        class="btn btn-danger shadow-sm d-inline-flex align-items-center justify-content-center"
                        style="width: 38px; height: 38px; padding: 0; transition: all 0.3s ease;">
                    <i class="bi bi-trash-fill"></i>
                </button>
            </form>
        </div>
    </td>
</tr>
@empty
<tr>
    <td colspan="5" class="text-center py-5">
        <div class="py-4">
            <i class="bi bi-inbox fs-1 text-warning d-block mb-3" style="opacity: 0.5;"></i>
            @if($search ?? false)
                <h5 class="text-white mb-2">No reviews found for "{{ $search }}"</h5>
                <p class="text-white text-opacity-75">Try different keywords or clear your search</p>
                <a href="/admin/reviews" class="btn btn-outline-warning mt-2"
                   style="height: 42px; min-width: 140px; display: inline-flex; align-items: center; justify-content: center;">
                    <i class="bi bi-x-circle me-2"></i>Clear Search
                </a>
            @else
                <h5 class="text-white mb-2">No reviews found</h5>
                <p class="text-white text-opacity-75 mb-3">Start by adding your first client review</p>
                <a href="/admin/reviews/create" class="btn btn-warning"
                   style="height: 42px; min-width: 160px; display: inline-flex; align-items: center; justify-content: center;">
                    <i class="bi bi-plus-circle me-2"></i>Add New Review
                </a>
            @endif
        </div>
    </td>
</tr>
@endforelse
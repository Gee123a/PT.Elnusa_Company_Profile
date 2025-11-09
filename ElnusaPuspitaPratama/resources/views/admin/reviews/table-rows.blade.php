{{-- filepath: resources/views/admin/reviews/table-rows.blade.php --}}
@forelse($reviews as $review)
<tr>
    <td class="fw-semibold">{{ $review->nama_client }}</td>
    <td>{{ $review->jabatan }}</td>
    <td>{{ $review->perusahaan }}</td>
    <td>
        <span class="d-inline-block text-truncate" style="max-width: 300px;" 
            title="{{ $review->deskripsi }}">
            {{ Str::limit($review->deskripsi, 80) }}
        </span>
    </td>
    <td>
        <div class="d-flex gap-2 justify-content-center">
            <a href="/admin/reviews/{{ $review->id }}/edit" class="btn btn-sm btn-warning">
                <i class="bi bi-pencil-fill"></i>
            </a>
            <form action="/admin/reviews/{{ $review->id }}" method="POST" class="d-inline delete-form">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger delete-btn">
                    <i class="bi bi-trash-fill"></i>
                </button>
            </form>
        </div>
    </td>
</tr>
@empty
<tr>
    <td colspan="5" class="text-center py-5">
        <div class="text-white text-opacity-75">
            <i class="bi bi-inbox fs-1 d-block mb-3"></i>
            <p class="mb-0">No reviews found</p>
            @if($search)
                <small>Try adjusting your search criteria</small>
            @endif
        </div>
    </td>
</tr>
@endforelse
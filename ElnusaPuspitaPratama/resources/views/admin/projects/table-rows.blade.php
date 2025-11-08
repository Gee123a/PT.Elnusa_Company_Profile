@forelse($projects as $project)
<tr>
    <td class="fw-semibold">{{ $project->project_name }}</td>
    <td>{{ $project->client->nama }}</td>
    <td>{{ $project->projectManager->nama }}</td>
    <td>
        @php
            $status = strtolower($project->status);
            $badgeColor = 'bg-secondary';
            if ($status === 'planning') {
                $badgeColor = 'bg-secondary';
            } elseif ($status === 'on progress' || $status === 'in progress') {
                $badgeColor = 'bg-warning text-dark';
            } elseif ($status === 'complete' || $status === 'completed') {
                $badgeColor = 'bg-success';
            }
        @endphp
        <span class="badge {{ $badgeColor }} px-3 py-2">{{ ucfirst($project->status) }}</span>
    </td>
    <td class="text-success fw-semibold">Rp {{ number_format($project->budget / 1000000, 0) }}M</td>
    <td>{{ $project->deadline->format('d M Y') }}</td>
    <td>
        <div class="d-flex gap-2 justify-content-center">
            <a href="/admin/projects/{{ $project->id }}/edit" class="btn btn-sm btn-warning">
                <i class="bi bi-pencil-fill"></i>
            </a>
            <form action="/admin/projects/{{ $project->id }}" method="POST" class="d-inline"
                onsubmit="return confirm('Are you sure you want to delete this project?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">
                    <i class="bi bi-trash-fill"></i>
                </button>
            </form>
        </div>
    </td>
</tr>
@empty
<tr>
    <td colspan="7" class="text-center py-5">
        <i class="bi bi-inbox fs-1 text-white text-opacity-50 d-block mb-3"></i>
        @if($search)
            <h5 class="text-white mb-2">No projects found for "{{ $search }}"</h5>
            <p class="text-white text-opacity-75">Try different keywords</p>
        @else
            <p class="text-white text-opacity-75">No projects found.</p>
        @endif
    </td>
</tr>
@endforelse
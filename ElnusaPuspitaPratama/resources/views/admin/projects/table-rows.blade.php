@forelse($projects as $project)
<tr style="transition: all 0.3s ease;">
    <td class="fw-semibold text-white">{{ $project->project_name }}</td>
    <td class="text-white text-opacity-85">{{ $project->client->nama }}</td>
    <td class="text-white text-opacity-85">{{ $project->projectManager->nama }}</td>
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
        <span class="badge {{ $badgeColor }} px-3 py-2 shadow-sm">{{ ucfirst($project->status) }}</span>
    </td>
    <td class="text-success fw-semibold">Rp {{ number_format($project->budget / 1000000, 0) }}M</td>
    <td class="text-white text-opacity-85">{{ $project->deadline->format('d M Y') }}</td>
    <td>
        <div class="d-flex gap-2 justify-content-center">
            <a href="/admin/projects/{{ $project->id }}/edit" 
               class="btn btn-warning shadow-sm d-inline-flex align-items-center justify-content-center"
               style="width: 38px; height: 38px; padding: 0; transition: all 0.3s ease;">
                <i class="bi bi-pencil-fill"></i>
            </a>
            <form action="/admin/projects/{{ $project->id }}" method="POST" class="d-inline"
                onsubmit="return confirm('Are you sure you want to delete this project?');">
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
    <td colspan="7" class="text-center py-5">
        <div class="py-4">
            <i class="bi bi-inbox fs-1 text-warning d-block mb-3" style="opacity: 0.5;"></i>
            @if($search)
                <h5 class="text-white mb-2">No projects found for "{{ $search }}"</h5>
                <p class="text-white text-opacity-75">Try different keywords or clear your search</p>
                <a href="/admin/projects" class="btn btn-outline-warning mt-2"
                   style="height: 42px; min-width: 140px; display: inline-flex; align-items: center; justify-content: center;">
                    <i class="bi bi-x-circle me-2"></i>Clear Search
                </a>
            @else
                <h5 class="text-white mb-2">No projects found</h5>
                <p class="text-white text-opacity-75 mb-3">Start by creating your first project</p>
                <a href="/admin/projects/create" class="btn btn-warning"
                   style="height: 42px; min-width: 160px; display: inline-flex; align-items: center; justify-content: center;">
                    <i class="bi bi-plus-circle me-2"></i>Add New Project
                </a>
            @endif
        </div>
    </td>
</tr>
@endforelse
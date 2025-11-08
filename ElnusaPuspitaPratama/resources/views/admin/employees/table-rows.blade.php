@forelse($employees as $employee)
<tr>
    <td class="fw-semibold">{{ $employee->nama }}</td>
    <td>{{ $employee->position }}</td>
    <td>
        <span class="badge bg-info px-3 py-2">{{ $employee->tingkatan }}</span>
    </td>
    <td>{{ $employee->email }}</td>
    <td>{{ $employee->phone }}</td>
    <td>
        @if($employee->projects_count > 0)
            <span class="badge bg-warning text-dark px-3 py-2">
                {{ $employee->projects_count }} Project(s)
            </span>
        @else
            <span class="badge bg-secondary px-3 py-2">No Projects</span>
        @endif
    </td>
    <td>
        <div class="d-flex gap-2 justify-content-center">
            <a href="/admin/employees/{{ $employee->id }}/edit" class="btn btn-sm btn-warning">
                <i class="bi bi-pencil-fill"></i>
            </a>
            <form action="/admin/employees/{{ $employee->id }}" method="POST" class="d-inline"
                onsubmit="return confirm('Are you sure you want to delete {{ $employee->nama }}?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger" 
                    @if($employee->projects_count > 0) 
                        title="Cannot delete - managing {{ $employee->projects_count }} project(s)"
                    @endif>
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
        @if($search ?? false)
            <h5 class="text-white mb-2">No employees found for "{{ $search }}"</h5>
            <p class="text-white text-opacity-75">Try different keywords or <a href="/admin/employees" class="text-warning">clear the search</a></p>
        @else
            <p class="text-white text-opacity-75">No employees found. Add your first team member!</p>
        @endif
    </td>
</tr>
@endforelse
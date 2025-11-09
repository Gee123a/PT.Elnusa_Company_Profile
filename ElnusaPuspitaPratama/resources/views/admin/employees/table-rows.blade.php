@forelse($employees as $employee)
<tr style="transition: all 0.3s ease;">
    <td class="fw-semibold text-white">{{ $employee->nama }}</td>
    <td class="text-white text-opacity-85">{{ $employee->position }}</td>
    <td>
        <span class="badge bg-info px-3 py-2 shadow-sm">{{ $employee->tingkatan }}</span>
    </td>
    <td class="text-white text-opacity-85">{{ $employee->email }}</td>
    <td class="text-white text-opacity-85">{{ $employee->phone }}</td>
    <td>
        @if($employee->projects_count > 0)
            <span class="badge bg-warning text-dark px-3 py-2 shadow-sm">
                {{ $employee->projects_count }} Project(s)
            </span>
        @else
            <span class="badge bg-secondary px-3 py-2 shadow-sm">No Projects</span>
        @endif
    </td>
    <td>
        <div class="d-flex gap-2 justify-content-center">
            <a href="/admin/employees/{{ $employee->id }}/edit" 
               class="btn btn-warning shadow-sm d-inline-flex align-items-center justify-content-center"
               style="width: 38px; height: 38px; padding: 0; transition: all 0.3s ease;">
                <i class="bi bi-pencil-fill"></i>
            </a>
            <form action="/admin/employees/{{ $employee->id }}" method="POST" class="d-inline"
                onsubmit="return confirm('Are you sure you want to delete {{ $employee->nama }}?');">
                @csrf
                @method('DELETE')
                <button type="submit" 
                        class="btn btn-danger shadow-sm d-inline-flex align-items-center justify-content-center"
                        style="width: 38px; height: 38px; padding: 0; transition: all 0.3s ease;"
                        @if($employee->projects_count > 0) 
                            disabled
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
        <div class="py-4">
            <i class="bi bi-inbox fs-1 text-warning d-block mb-3" style="opacity: 0.5;"></i>
            @if($search ?? false)
                <h5 class="text-white mb-2">No employees found for "{{ $search }}"</h5>
                <p class="text-white text-opacity-75">Try different keywords or clear your search</p>
                <a href="/admin/employees" class="btn btn-outline-warning mt-2"
                   style="height: 42px; min-width: 140px; display: inline-flex; align-items: center; justify-content: center;">
                    <i class="bi bi-x-circle me-2"></i>Clear Search
                </a>
            @else
                <h5 class="text-white mb-2">No employees found</h5>
                <p class="text-white text-opacity-75 mb-3">Start by adding your first team member</p>
                <a href="/admin/employees/create" class="btn btn-warning"
                   style="height: 42px; min-width: 160px; display: inline-flex; align-items: center; justify-content: center;">
                    <i class="bi bi-plus-circle me-2"></i>Add New Employee
                </a>
            @endif
        </div>
    </td>
</tr>
@endforelse
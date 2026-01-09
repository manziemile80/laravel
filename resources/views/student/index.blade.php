@extends('app.layout')

@section('content')
<div class="container py-4">

    <!-- Page Title -->
    <div class="text-center mb-4">
        <h1 class="fw-bold shadow-sm p-3 rounded">
            THIS IS INDEX PAGE YOU GUYS
        </h1>
    </div>

    <!-- Top Actions -->
    <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 gap-2">
        <a href="{{ route('student.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle-fill"></i> Add New
        </a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success mb-0 w-100 w-sm-auto">
                {{ $message }}
            </div>
        @endif
    </div>

    <!-- Responsive Table -->
    <div class="table-responsive shadow-sm rounded">
        <table class="table table-hover table-bordered align-middle mb-0">
            <thead class="table-dark text-center">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>

            <tbody>
            @foreach ($students as $doctors)
                <tr>
                    <td class="text-center">{{ $doctors->id }}</td>
                    <td>{{ $doctors->fname }}</td>
                    <td>{{ $doctors->lname }}</td>

                    <td>
                        <form action="{{ route('student.destroy', $doctors->id) }}" method="POST"
                              class="d-flex flex-column flex-md-row gap-2 justify-content-center">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('student.show', $doctors->id) }}"
                               class="btn btn-sm btn-primary">
                                Show
                            </a>

                            <a href="{{ route('student.edit', $doctors->id) }}"
                               class="btn btn-sm btn-warning text-white">
                                Edit
                            </a>

                            <button type="submit"
                                    class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this record?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection

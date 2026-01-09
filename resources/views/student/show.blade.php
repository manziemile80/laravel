@extends('app.layout')

@section('content')
<div class="container py-5">

    <!-- Back Button -->
    <div class="mb-4">
        <a href="{{ route('student.index') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left"></i> Back
        </a>
    </div>

    <!-- Details Card -->
    <div class="card shadow-lg rounded-4 mx-auto" style="max-width: 600px;">
        <div class="card-header bg-primary text-white text-center fw-bold fs-4 rounded-top-4">
            STUDENT DETAILS
        </div>
        <div class="card-body">

            <p class="card-text mb-2">
                <strong>ID:</strong> {{ $students->id }}
            </p>

            <p class="card-text mb-2">
                <strong>First Name:</strong> {{ $students->fname }}
            </p>

            <p class="card-text mb-2">
                <strong>Last Name:</strong> {{ $students->lname }}
            </p>

        </div>
    </div>

</div>
@endsection


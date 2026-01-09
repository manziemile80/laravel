@extends('app.layout')

@section('content')
<div class="container py-5">

    <!-- Back Button -->
    <div class="mb-4">
        <a href="{{ route('student.index') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left"></i> Back
        </a>
    </div>

    <!-- Page Heading -->
    <div class="text-center mb-4">
        <h1 class="fw-bold display-5 text-primary shadow-sm p-3 rounded-4">
            Update Student Information
        </h1>
    </div>

    <!-- Validation Errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form Card -->
    <div class="card shadow-lg rounded-4 border-0 mx-auto" style="max-width: 600px;">
        <div class="card-body p-4">

            <form action="{{ route('student.update', $students->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Hidden ID -->
                <input type="hidden" name="id" value="{{ $students->id }}">

                <!-- First Name -->
                <div class="mb-3">
                    <label for="fname" class="form-label fw-semibold">First Name</label>
                    <input 
                        type="text" 
                        id="fname" 
                        name="fname" 
                        class="form-control form-control-lg" 
                        value="{{ $students->fname }}" 
                        placeholder="Enter first name">
                </div>

                <!-- Last Name -->
                <div class="mb-4">
                    <label for="lname" class="form-label fw-semibold">Last Name</label>
                    <input 
                        type="text" 
                        id="lname" 
                        name="lname" 
                        class="form-control form-control-lg" 
                        value="{{ $students->lname }}" 
                        placeholder="Enter last name">
                </div>

                <!-- Submit Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-success btn-lg">
                        <i class="bi bi-check-circle"></i> Update
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>
@endsection


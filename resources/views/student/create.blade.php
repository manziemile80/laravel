@extends('app.layout')

@section('content')
<div class="container py-5">

    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">

            <!-- Title -->
            <div class="text-center mb-4">
                <h1 class="fw-bold">Create New Account</h1>
                <p class="text-muted mb-0">Fill in the form below to create an account</p>
            </div>

            <!-- Back Button -->
            <div class="mb-3">
                <a href="{{ route('student.index') }}" class="btn btn-sm btn-outline-secondary">
                    <i class="bi bi-arrow-left"></i> Back
                </a>
            </div>

            <!-- Card -->
            <div class="card border-0 shadow-lg rounded-4">
                <div class="card-body p-4">

                    <form action="{{ route('student.store') }}" method="POST">
                        @csrf

                        <!-- First Name -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">First Name</label>
                            <input
                                type="text"
                                name="fname"
                                class="form-control form-control-lg"
                                placeholder="Enter your first name">
                        </div>

                        <!-- Last Name -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Last Name</label>
                            <input
                                type="text"
                                name="lname"
                                class="form-control form-control-lg"
                                placeholder="Enter your last name">
                        </div>

                        <!-- Action Buttons -->
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-warning btn-lg w-100">
                                <i class="bi bi-check-circle"></i> Create
                            </button>

                            <a href="{{ route('student.index') }}" class="btn btn-outline-dark btn-lg w-100">
                                Cancel
                            </a>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>
@endsection

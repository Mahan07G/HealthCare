@extends('layouts.app')

@section('title', 'Make an Appointment')

@section('content')

    <section class="appointment section py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-3">Make an Appointment</h2>
                    <p class="text-muted">Fill in the form below to book your appointment.</p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <!-- Success Message -->
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <!-- Appointment Form -->
                    <form action="{{ route('appointment.submit') }}" method="POST"
                        class="p-4 p-md-5 bg-white rounded shadow">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Enter your full name" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="Enter your email address" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="tel" name="phone" id="phone" class="form-control"
                                placeholder="Enter your phone number" required>
                        </div>

                        <div class="mb-3">
                            <label for="appointment_date" class="form-label">Appointment Date</label>
                            <input type="datetime-local" name="appointment_date" id="appointment_date" class="form-control"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Message (Optional)</label>
                            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter any additional details"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Book Appointment</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

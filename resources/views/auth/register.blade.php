@extends('layouts.guest')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3 class="text-center mb-4">Register</h3>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name="name" value="{{ old('name') }}" required
                            autofocus>
                        @error('name')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" required>
                        @error('password')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation">Confirm Password</label>
                        <input class="form-control" type="password" name="password_confirmation" required>
                    </div>

                    <div class="mb-3 text-end">
                        <a href="{{ route('login') }}" class="text-decoration-none">Already have an account?</a>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Register</button>
                </form>
            </div>
        </div>
    </div>
@endsection

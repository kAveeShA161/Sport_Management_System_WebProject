@extends('layouts.app')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('stylesheet.css') }}" />

    <body class="registerform">
        <div class="register-container">
            <h4 class="text-center mb-4">Login</h4>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input
                        type="email"
                        id="email"
                        class="form-control @error('email') is-invalid @enderror"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Enter email"
                        required
                        autocomplete="email"
                        autofocus
                    />
                    @error('email')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input
                        type="password"
                        id="password"
                        class="form-control @error('password') is-invalid @enderror"
                        name="password"
                        placeholder="Enter password"
                        required
                        autocomplete="current-password"
                    />
                    @error('password')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-check mb-3">
                    <input
                        type="checkbox"
                        class="form-check-input"
                        name="remember"
                        id="remember"
                        {{ old('remember') ? 'checked' : '' }}
                    />
                    <label class="form-check-label" for="remember">Remember Me</label>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <button type="submit" class="btn-login">Login</button>

                    <!--@if (Route::has('password.request'))
                        <a class="btn btn-link p-0" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    @endif-->
                </div>
            </form>
        </div>
    </body>
@endsection

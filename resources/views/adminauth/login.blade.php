@extends('layouts.app')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('stylesheet.css') }}" />

    <body class="registerform">
        <div class="register-container">
            <h4 class="text-center mb-4">Admin Login<br><small style="font-size: 14px;">Only for System Administrators</small></h4>

            <form method="POST" action="{{ route('admin.login.submit') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Admin Email Address</label>
                    <input
                        id="email"
                        type="email"
                        class="form-control @error('email') is-invalid @enderror"
                        name="email"
                        value="{{ old('email') }}"
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
                        id="password"
                        type="password"
                        class="form-control @error('password') is-invalid @enderror"
                        name="password"
                        required
                        autocomplete="current-password"
                    />
                    @error('password')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-check mb-3">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        name="remember"
                        id="remember"
                        {{ old('remember') ? 'checked' : '' }}
                    />
                    <label class="form-check-label" for="remember">
                        Remember Me
                    </label>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <button type="submit" class="btn-login">Login</button>

                    <!--@if (Route::has('password.request'))
                        <a class="btn btn-link text-white" href="{{ route('password.request') }}">
                            Forgot Password?
                        </a>
                    @endif-->
                </div>
            </form>
        </div>
    </body>
@endsection

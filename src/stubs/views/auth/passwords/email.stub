@extends('layouts.app')
@section('title', __('Reset Password'))

@section('body')
<body class="antialiased border-top-wide border-primary d-flex flex-column">
    <div class="flex-fill d-flex flex-column justify-content-center py-4">
        <div class="container-tight py-6">
            <div class="text-center mb-4">
                <!-- You can set your logo on here -->
                <a href="."><img src="https://preview.tabler.io/static/logo.svg" height="36" alt=""></a>
            </div>
            <form class="card card-md" action="{{ route('password.email') }}" method="POST">
                @csrf

                <div class="card-body">
                    <h2 class="card-title text-center mb-4">{{ __('Reset Password') }}</h2>
                    <p class="text-muted mb-4">{{ __('Enter your email address and your password will be reset and emailed to you') }}</p>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="{{ __('Please enter your email') }}">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <rect x="3" y="5" width="18" height="14" rx="2" />
                                <polyline points="3 7 12 13 21 7" /></svg>
                                {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
@endsection

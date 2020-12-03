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
            <form class="card card-md" action="{{ route('password.update') }}" method="post">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="card-body">
                    <h2 class="card-title text-center mb-4">{{ __('Reset Password') }}</h2>
                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>

                        <input id="email" placeholder="{{ __('Please enter your email') }}" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label for="password" class="form-label">{{ __('Password') }}</label>

                        <input id="password" placeholder="{{ __('Please enter your password') }}" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>

                        <input id="password-confirm" placeholder="{{ __('Please enter your password again') }}" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
@endsection

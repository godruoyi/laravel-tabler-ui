@extends('layouts.app')
@section('title', __('Confirm Password'))
@section('body')
<body class="antialiased border-top-wide border-primary d-flex flex-column">
    <div class="flex-fill d-flex flex-column justify-content-center py-4">
        <div class="container-tight py-6">
            <div class="text-center mb-4">
                <!-- You can set your logo on here -->
                <a href="."><img src="https://preview.tabler.io/static/logo.svg" height="36" alt=""></a>
            </div>

            <form class="card card-md" action="{{ route('password.confirm') }}" method="post">
                @csrf

                <div class="card-body">
                    <h2 class="card-title text-center mb-4">{{ __('Confirm Password') }}</h2>
                    <p class="text-muted">{{ __('Please confirm your password before continuing') }}</p>

                    <div class="mb-3">
                        <label for="password" class="form-label">
                            {{ __('Password') }}

                            @if (Route::has('password.request'))
                                <a class="float-right small" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </label>

                        <input id="password" placeholder="{{ __('Please enter your password') }}" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Confirm Password') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
@endsection

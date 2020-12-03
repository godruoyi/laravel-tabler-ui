@extends('layouts.app')
@section('title', __('Register'))

@section('body')
<body class="antialiased border-top-wide border-primary d-flex flex-column">
    <div class="flex-fill d-flex flex-column justify-content-center py-4">
        <div class="container-tight py-6">
            <div class="text-center mb-4">
                <!-- You can set your logo on here -->
                <a href="."><img src="https://preview.tabler.io/static/logo.svg" height="36" alt=""></a>
            </div>
            <form class="card card-md" action="{{ route('register') }}" method="POST">
                @csrf

                <div class="card-body">
                    <h2 class="card-title text-center mb-4">{{ __('Create new account') }}</h2>
                    <div class="mb-3">
                        <label for="name" class="form-label">{{ __('Name') }}</label>

                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="{{ __('Please enter your name') }}">

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('Please enter your email') }}">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">{{ __('Password') }}</label>
                        <div class="input-group input-group-flat">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                required autocomplete="new-password" placeholder="{{ __('Please enter your password') }}">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <span class="input-group-text">
                                <a href="#" class="link-secondary" title="Show password" data-toggle="tooltip"><svg
                                        xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <circle cx="12" cy="12" r="2" />
                                        <path
                                            d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" />
                                        </svg>
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                        <div class="input-group input-group-flat">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                                autocomplete="new-password" placeholder="{{ __('Please enter your password again') }}">

                            <span class="input-group-text">
                                <a href="#" class="link-secondary" title="Show password" data-toggle="tooltip">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <circle cx="12" cy="12" r="2" />
                                        <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" />
                                    </svg>
                                </a>
                            </span>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input" />
                            <span class="form-check-label"><a href="./terms-of-service.html"
                                tabindex="-1">{{ __('Agree the terms and policy') }}</a></span>
                        </label>
                    </div>

                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">{{ __('Register') }}</button>
                    </div>
                </div>
            </form>
            <div class="text-center text-muted mt">
                {{ __('Already have account?') }} <a href="{{ route('login') }}" tabindex="-1">{{ __('Login') }}</a>
            </div>
        </div>
    </div>
</body>
@endsection
</html>

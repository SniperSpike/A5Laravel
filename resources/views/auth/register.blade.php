@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center">
        <div class="col-md-3">
            <div class="registerForm">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <h2>Meld je aan</h2>
                    <div class="mb-1">
                        <label for="name" class="col-form-label">{{ __('Gebruikersnaam') }}</label>

                        <div class="">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-1">
                        <label for="email" class="col-form-label">{{ __('Email') }}</label>

                        <div class="">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-1">
                        <label for="password" class="col-form-label">{{ __('Wachtwoord') }}</label>

                        <div class="">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-1">
                        <label for="password-confirm" class="col-form-label">{{ __('Wachtwoord bevestigen') }}</label>

                        <div>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-RegisterForm">
                            {{ __('Aanmelden') }}
                        </button>
                    </div>
            
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

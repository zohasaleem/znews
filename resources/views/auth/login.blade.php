@extends('layouts.auth')

@section('page-text')
<p class="mb-0">
        Don't have an account?
        <a href="{{ route('register') }}" class="color-primary">
            Sign up
        </a>
    </p>
@endsection

@section('content')


    <div class="card border-0">
        <div class="card-header border-0  pb-md-15 pb-10 pt-md-20 pt-10 ">
            <div class="edit-profile__title">
                <h6>Sign in to <span class="color-primary">Admin</span></h6>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="edit-profile__body">
                    <div class="form-group mb-20">
                        <label for="username">Email Address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-15">
                        <label for="password-field">password</label>
                        <div class="position-relative">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror                    
                        </div>
                    </div>
                    <div class="signUp-condition signIn-condition">
                        <div class="checkbox-theme-default custom-checkbox ">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Keep me logged in') }}
                        </label>       
                    
                        </div>
                        <a href="{{ route('password.request') }}">forget password</a>
                    </div>
                    <div class="button-group d-flex pt-1 justify-content-md-start justify-content-center">
                        <button type="submit" class="btn btn-primary btn-default btn-squared mr-15 text-capitalize lh-normal px-50 py-15 signIn-createBtn ">
                            sign in
                        </button>
                    </div>
                    <p class="social-connector text-center mb-sm-25 mb-15  mt-sm-30 mt-20"><span>Or</span></p>
                    <div class="button-group d-flex align-items-center justify-content-md-start justify-content-center">
                        <ul class="signUp-socialBtn">
                            <li>
                                <button class="btn text-dark px-30"><img class="svg" src="{{ asset('assets/img/svg/google.svg') }}" alt="img" /> Sign up with
                                    Google</button>
                            </li>
                            <li>
                                <button class=" radius-md wh-48 content-center"><img class="svg" src="{{ asset('assets/img/svg/facebook.svg') }}" alt="img" /></button>
                            </li>
                            <li>
                                <button class="radius-md wh-48 content-center"><img class="svg" src="{{ asset('assets/img/svg/twitter.svg') }}" alt="img" /></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection

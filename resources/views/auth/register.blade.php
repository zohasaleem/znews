@extends('layouts.auth')

@section('page-text')

    <p class="mb-0">
        Already have an account?
        <a href="{{ route('login') }}" class="color-primary">
            Sign in
        </a>
    </p>

@endsection


@section('content')

<div class="card border-0">
    <div class="card-header border-0  pb-md-15 pb-10 pt-md-20 pt-10 ">
        <div class="edit-profile__title">
            <h6>Sign up to <span class="color-primary">Admin</span></h6>
        </div>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="edit-profile__body">
              
                <div class="form-group mb-20">
                    <label for="username">username</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name"  placeholder="Username" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mb-20">
                    <label for="email">Email Adress</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="name@example.com">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-15">
                    <label for="password-field">password</label>
                    <div class="position-relative">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" >

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group mb-15">
                    <label for="password-confirm">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                </div>
                <div class="signUp-condition">
                    <div class="checkbox-theme-default custom-checkbox ">
                        <input class="checkbox" type="checkbox" id="check-1">
                        <label for="check-1">
                            <span class="checkbox-text">Creating an account means you’re okay
                                with our <a href="#" class="color-secondary">Terms of
                                    Service</a> and <a href="#" class="color-secondary">Privacy
                                    Policy</a>
                                my preference</span>
                        </label>
                    </div>
                </div>
                <div class="button-group d-flex pt-1 justify-content-md-start justify-content-center">
                    <button type="submit" class="btn btn-primary btn-default btn-squared mr-15 text-capitalize lh-normal px-50 py-15 signUp-createBtn signIn-createBtn">
                        Create Account
                    </button>
                </div>
                <p class="social-connector text-center mb-md-25 mb-15  mt-md-30 mt-20 "><span>Or</span></p>
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

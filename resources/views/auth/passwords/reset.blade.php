@extends('layouts.auth')

@section('content')


<div class="card border-0">
    <div class="card-header border-0  pb-md-15 pb-10 pt-md-20 pt-10 ">
        <div class="edit-profile__title">
            <h6>Reset <span class="color-primary">Password</span></h6>
        </div>
    </div>
    <div class="card-body">
    
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="edit-profile__body">
                <div class="form-group mb-20">
                    <label for="username">Email Address</label>

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mb-20">
                    <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mb-20">
                    <label for="password-confirm" class="col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
                
                <div class="button-group d-flex pt-1 justify-content-md-start justify-content-center">
                    <button type="submit" class="btn btn-primary btn-default btn-squared mr-15 text-capitalize lh-normal px-50 py-15 signIn-createBtn ">
                        {{ __('Reset Password') }}
                    </button>
                </div>
                
            </div>
        </form>
    </div>
</div>

@endsection

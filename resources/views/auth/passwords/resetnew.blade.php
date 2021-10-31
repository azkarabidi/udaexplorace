
@extends('layouts.uda-layout')
@section('title')
    {{'- confirm password'}}
@endsection
@section('body')

  <div class="wrapper-page">

    <div class="card">
        <div class="card-body">

            <h3 class="text-center m-50">
                <a href="#" class="logo logo-admin"><img src="{{asset('udatemp/assets/images/logo-light.png')}}" height="80" alt="logo"></a>
            </h3>

            <div class="p-3">
                <h4 class="text-muted font-18 mb-3 text-center">Reset Password</h4>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </div>

            </form>



         
            
                </div>

            </div>
        </div>



    <div class="m-t-40 text-center">
        <p>Remember It ? <a href="{{route('login')}}" class="text-primary"> Sign In Here </a> </p>
        <p>Copyright of Uda Amazing 50 Race</p>
    </div>

</div>
    @section('script')
        
    @endsection
    @endsection



@extends('layouts.uda-layout')
@section('title')
    {{'- confirm password'}}
@endsection
@section('body')


<style>
    body{
    background-image: url({{asset('udatemp//assets/images/bgg.jpg')}})
    }
</style>
  <div class="wrapper-page">

    <div class="card">
        <div class="card-body">

            <h3 class="text-center m-50">
                <a href="#" class="logo logo-admin"><img src="{{asset('udatemp/assets/images/mapa-logo.png')}}" height="80" alt="logo"></a>
            </h3>

            <div class="p-3">
                <h4 class="text-muted font-18 mb-3 text-center">Confirm Password</h4>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            {{ __('Please confirm your password before continuing.') }}
            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Confirm Password') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
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


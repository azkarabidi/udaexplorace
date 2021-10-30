@extends('layouts.uda-layout')
@section('title')
    {{'-Login'}}
@endsection
@section('body')

        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center m-50">
                        <a href="#" class="logo logo-admin"><img src="{{asset('udatemp/assets/images/logo-light.png')}}" height="80" alt="logo"></a>
                    </h3>

                    <div class="p-3">
                        <h4 class="text-muted font-18 m-b-5 text-center">Are You Ready?</h4>
                        <p class="text-muted text-center">Racers Assemble!</p>
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger"> 
                            {{ $error }}    
                        </div>
                        @endforeach

                        <form class="form-horizontal m-t-30"  method="POST" action="{{ route('login') }}">
                                @csrf

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" id="username" placeholder="Enter username or email" required>
                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password"  id="userpassword" placeholder="Enter password" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                                        <label class="custom-control-label" for="customControlInline">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-6 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-12 m-t-20">
                                    <a href="{{ route('password.request') }}" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p>Copyright of Uda Amazing 50 Race</p>
            </div>

        </div>
            @section('script')
                
            @endsection
            @endsection

    
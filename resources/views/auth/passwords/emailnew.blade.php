
@extends('layouts.uda-layout')
@section('title')
    {{'-Login'}}
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
                <h4 class="text-muted font-18 mb-3 text-center">Reset Password</h4>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

                <form class="form-horizontal m-t-30" method="POST" action="{{ route('password.email') }}">
                        @csrf


                        <div class="form-group">
                            <label for="useremail">Email</label>
                            <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required id="useremail" placeholder="Enter email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                        <div class="form-group row m-t-20">
                            <div class="col-12 text-right">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Send Password Reset Link</button>
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


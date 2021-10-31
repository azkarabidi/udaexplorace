@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3 class="card-header">Create Group </h3>

                <div class="card-body">
                    <form method="POST" action="{{route('group.store')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Team Leader Name') }}</label>

                            <div class="col-md-6">
                                <input id="team" type="text" class="form-control @error('team_leader_name') is-invalid @enderror" name="team_leader_name" value="{{ old('team_leader_name') }}" required autocomplete="team_leader_name" autofocus>

                                @error('team_leader_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Team Leader Email') }}</label>

                            <div class="col-md-6">
                                <input id="team" type="email" class="form-control @error('team_leader_email') is-invalid @enderror" name="team_leader_email" value="{{ old('team_leader_email') }}" required autocomplete="team_leader_email" autofocus>

                                @error('team_leader_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Team Leader Password') }}</label>

                            <div class="col-md-6">
                                <input id="team" type="password" class="form-control @error('team_leader_password') is-invalid @enderror" name="team_leader_password" value="{{ old('team_leaders_password') }}" required autocomplete="team_leaders_password" autofocus>

                                @error('team_leaders_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Team Assistant Name') }}</label>

                            <div class="col-md-6">
                                <input id="team" type="text" class="form-control @error('team_assistant_name') is-invalid @enderror" name="team_assistant_name" value="{{ old('team_assistant_name') }}" required autocomplete="team_assistant_name" autofocus>

                                @error('team_assistant_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Team Assistant Email') }}</label>

                            <div class="col-md-6">
                                <input id="team" type="email" class="form-control @error('team_assistant_email') is-invalid @enderror" name="team_assistant_email" value="{{ old('team_assistant_email') }}" required autocomplete="team_assistant_email" autofocus>

                                @error('team_assistant_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Team Assistant Password') }}</label>

                            <div class="col-md-6">
                                <input id="team" type="password" class="form-control @error('team_assistant_password') is-invalid @enderror" name="team_assistant_password" value="{{ old('team_assistant_password') }}" required autocomplete="team_assistant_password" autofocus>

                                @error('team_assistant_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Team Members 3') }}</label>

                            <div class="col-md-6">
                                <input id="team" type="text" class="form-control @error('team_member_3') is-invalid @enderror" name="team_member_3" value="{{ old('team_member_3') }}" required autocomplete="team_member_3" autofocus>

                                @error('team_member_3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Team Member 4') }}</label>

                            <div class="col-md-6">
                                <input id="team" type="text" class="form-control @error('team_member_4') is-invalid @enderror" name="team_member_4" value="{{ old('team_member_4') }}" required autocomplete="team_member_4" autofocus>

                                @error('team_member_4')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Team Members') }}</label>

                            <div class="col-md-6">
                                <input id="team" type="text" class="form-control @error('team_members') is-invalid @enderror" name="team_members" value="{{ old('team_members') }}" required autocomplete="team_members" autofocus>

                                @error('team_members')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                 --}}
                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Group category') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="category">
                                    <option value="U">Uda </option>
                                    <option value="A">Affiliate </option>
                                    <option value="P">Public </option>
                                </select>
                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- make new team leader and team leader assistant --}}
                        <div class="form-group row justify-content-end p-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>


                    </form>
                        
                   
                </div>
                
            </div>
        </div>
    </div>
        
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h4 class="card-header">List Of Group</h4>
                @foreach ($groups as $item)
                    <div class="card-body">
                        {{$item->id.' '. $item->name}} <br>
                        {{$item->category}}
                        <br>

                        {{$item->team_members}}
                        @forelse($item->user as $user)
                        <br> User Assign{{$user->name}}
                        @empty           
                        <a href="{{url('group/'.$item->id.'/assignpage')}}">
                            Assign
                        </a>
                        @endforelse
                    </div>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection





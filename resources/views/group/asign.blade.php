@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>{{'U'.str_pad($group->id, 4, "0", STR_PAD_LEFT);}}</h1>
                <h3 class="card-header">{{$group->id}} &nbsp;{{$group->team_members}} </h3>
                <div class="card-body">
                    <form method="POST" action="{{route('assign.user')}}">
                        @csrf
                        <input type="hidden" name="group_id" value="{{$group->id}}">
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('User ') }}</label>

                            <div class="col-md-6">
                               <select class="form-control" name="user_id">
                                @foreach ($users as $item)
                                    <option value="{{$item->id}}" >{{$item->name.' //'.$item->email}}</option>
                                @endforeach
                               </select>

                                @error('team_members')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row justify-content-end p-3">
                            <button type="submit" class="btn btn-primary">Assign</button>
                        </div>


                    </form>
                        
                   
                </div>
                
            </div>
        </div>
    </div>
        

</div>

@endsection





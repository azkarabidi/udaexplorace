@extends('layouts.app')


@section('content')
<style>
    #clockdiv{
    font-family: sans-serif;
    color: #fff;
    display: inline-block;
    font-weight: 100;
    text-align: center;
    font-size: 30px;
}

#clockdiv > div{
    padding: 10px;
    border-radius: 3px;
    background: #00BF96;
    display: inline-block;
}

#clockdiv div > span{
    padding: 15px;
    border-radius: 3px;
    background: #00816A;
    display: inline-block;
}

.smalltext{
    padding-top: 5px;
    font-size: 16px;
}
</style>
<div class="card float-right">
  <div class="card-body"> 
    <div class="countdown">
      Timer to end time
      <span id="clock"></span>
    </div>
  </div>
  </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  @if(!empty(auth()->user()->group))
                  Team members
                  {{auth()->user()->group->team_members}}
                  @else
                  {{'Not yet Assign'}}
                  @endif
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                        
                   
                </div>
            </div>
        </div>
    </div>
</div>



<script>
$('#clock').countdown('2021/11/13 13:00:00')
.on('update.countdown', function(event) {
  var format = '%H:%M:%S';
  if(event.offset.totalDays > 0) {
    format = '%-d day%!d ' + format;
  }
  if(event.offset.weeks > 0) {
    format = '%-w week%!w ' + format;
  }
  $(this).html(event.strftime(format));
})
.on('finish.countdown', function(event) {
  $(this).html('Timer has expired!')
    .parent().addClass('disabled');

});
    </script>
        @endsection
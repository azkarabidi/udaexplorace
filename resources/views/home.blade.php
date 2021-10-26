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
<div class="row px-3">
<div class="col-md-6">
  <a class="decoration-none" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
</div>

<div class="col-md-3 offset-3 text-right">
  <div class="card ">
    <div class="card-body"> 
      <div class="countdown">
        Timer to end time
        <span id="clock"></span>
      </div>
    </div>
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
                        {{-- //if already have Submission --}}

                        @if(!empty(auth()->user()->group))
                        @if (auth()->user()->group->form_submit == NULL)    
                        <div data-tf-widget="TO6Gc4DB" style="width:100%;height:400px;"
                        data-tf-on-submit="submit"
                        ></div>
                        <script src="//embed.typeform.com/next/embed.js"></script>
                        <script>
                          function submit(event) { // this needs to be available on global scope (window)
                            // console.log(event.response_id)
                            $.post(`{{url('submission/form')}}`,{'_token':'{{csrf_token()}}',respond:event.response_id,id:'{{auth()->user()->id}}'})
                            .done(function(e){
                              console.log(e);
                              location.reload();
                            })
                            //ajax post
                            // done refresh
                          }
                        </script>
                       
                        @else
                            <h1 class="text-uppercase">Thank You For Your Submission</h1>
                        @endif
                        @endif
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

// function postevent(){
//   // $.post(`{{url('submission/form')}}`,{'_token':'{{csrf_token()}}',respond:event.response_id,user:'{{auth()->user()->id}}'})
//   $.post(`{{url('submission/form')}}`,{'_token':'{{csrf_token()}}',respond:'12',id:'{{auth()->user()->id}}'})
//   .done(function(e){
//     console.log(e);
//   })
// }
    </script>
        @endsection
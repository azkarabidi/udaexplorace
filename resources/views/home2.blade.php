
    @extends('layouts.uda-layout')
        @section('title')
        {{'- Home'}}
        @endsection
        @section('body')
                <div id="wrapper">
        
                    <!-- Top Bar Start -->
                    <div class="topbar" style="background-color: #EDEDED !important;">
        
                        <!-- LOGO -->
                        <div class="topbar-left" style="background-color: #ededed !important;">
                            <a href="{{url('home')}}" class="logo">
                                <span>
                                    <img src="{{asset('udatemp/assets/images/logo-light.png')}}" alt="" height="50">
                                </span>
                                <i>
                                    <img src="{{asset('udatemp/assets/images/logo-light.png')}}" alt="" height="35">
                                </i>
                            </a>
                        </div>
        
                        <div class="navbar-right float-right mb-0" style="background-color: red;padding: 0px 15px 0px 15px;color: #fff;">
                             <p style="font-size:12px;margin-bottom: -5px;font-weight: 700;">COUNTDOWN TO FINISH TIME</span><br>
                            <h1 style="font-size:40px;font-weight: 800;margin: 0px;" id="demo"> 00:00:00</h1>
                        </div>
                        <a class="decoration-none" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
        
                    </div>
                    <!-- Top Bar End -->
        
                    
        
                    <!-- ============================================================== -->
                    <!-- Start right Content here -->
                    <!-- ============================================================== -->
                    <div class="content-page" style="margin-left:0px !important;">
                        <!-- Start content -->
                        <div class="content">
                            <div class="container-fluid">
        
                                <div class="row" style="margin-top:15%;">
                                    <div class="col-md-2">
                                        <div class="card m-b-20" style="min-width: 250px;">
                                        <div class="col-md-12" style="margin-top: 30px;">
                                            @if(!empty(auth()->user()->group))
                                            
                                            <h1 class="mt-0 m-b-30 header-title" style="font-size: 30px;font-family: 'Poppins';font-weight: 900;">Group {{auth()->user()->group->name}}</h1>
                                            <p>
                                                <b>Team Leader:</b><br>
                                                Haziq Asyraf Bin Marzuki<br><br>
            
                                                <b>Team Assistant:</b><br>
                                                Haziq Asyraf Bin Marzuki<br><br>
            
                                                <b>Team Member 3:</b><br>
                                                Haziq Asyraf Bin Marzuki<br><br>
            
                                                <b>Team Member 4:</b><br>
                                                Haziq Asyraf Bin Marzuki<br><br>
                                            </p>    
                                            @else
                                            
                                            @endif
                                       
                                    </div>
                                    </div>
                                    </div>
        
                                    <div class="col-md-10">
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
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
        

                            </div> <!-- container-fluid -->
        
                        </div> <!-- content -->
                    </div>
        
                         <footer class="footer">
                             
                                Copyright of udaamazing50race.my
                        </footer>
        
                    
        
        
                    <!-- ============================================================== -->
                    <!-- End Right content here -->
                    <!-- ============================================================== -->
        
        
                </div>
            
                    


    
@section('script')
                <!-- Countdown -->
                <script>
                               // Set the date we're counting down to
                               var countDownDate = new Date("Nov 13, 2021 13:00:00").getTime();
        
                               // Update the count down every 1 second
                               var x = setInterval(function() {
        
                                   // Get todays date and time
                                   var now = new Date().getTime();
                                   
                                   // Find the distance between now an the count down date
                                   var distance = countDownDate - now;
                                   
                                   // Time calculations for days, hours, minutes and seconds
                                   var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                   var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                   var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                   var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                                   
                                   // Output the result in an element with id="demo"
                                   document.getElementById("demo").innerHTML =  hours + "H "
                                   + minutes + "M " + seconds + "S " ;
                                   
                                   // If the count down is over, write some text 
                                   if (distance < 0) {
                                       clearInterval(x);
                                       document.getElementById("demo").innerHTML = "EXPIRED";
                                   }
                               }, 1000);
        
                               </script>
    
@endsection


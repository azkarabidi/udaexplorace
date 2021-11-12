{{-- 
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
                                               {!! auth()->user()->group->team_members !!}
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
                                        //if already have Submission
                
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
 --}}

 
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Racers Assemble - udaamazing50race.my</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Quicksapp" name="author" />
        <link rel="shortcut icon" href="assets/images/favicon.png">


        <link href="{{asset('udatemp/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('udatemp/assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('udatemp/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('udatemp/assets/css/style.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('udatemp/assets/css/customstyle.css')}}" rel="stylesheet" type="text/css">
         <!-- DataTables -->
        <link href="{{asset('udatemp/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('udatemp/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar" style="background-color: #EDEDED !important;">

                <!-- LOGO -->
                <div class="topbar-left" style="background-color: #ededed !important;">
                    <a href="#" class="logo">
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

            </div>
            <!-- Top Bar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page" style="margin-left:0px !important;">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        @if(auth()->user()->is_admin==1)
                        <div class="row text-center" >
                            <div class="col-md-12" >
                                <div class="card">
                                    <h2 class="card-header">Admin</h2>
                                    <div class="card-body text-center">
                                        <a class="btn btn-primary" href="{{url('group')}}">Create Group</a>
                                        <a class="btn btn-primary" href="{{url('score_group/U')}}">Group UDA</a>
                                        <a class="btn btn-primary" href="{{url('score_group/M')}}">Group Media</a>
                                        <a class="btn btn-primary" href="{{url('score_group/P')}}">Group PUBLIC</a>
                                      
                                        <div class="topbar-center">
                                            <a class="decoration-none btn btn-danger"  href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                             {{ __('Logout') }}
                                         </a>
                        
                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                             @csrf
                                         </form>
                                        </div>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="row text-center" >
                            <div class="col-md-12" >
                      
                            <div class="col-md-12" style="margin-top: 30px;">
                                @if(!empty(auth()->user()->group))
                                <h1 class="mt-0 m-b-30 header-title" style="font-size: 30px;font-family: 'Poppins';font-weight: 900;">Group {{auth()->user()->group->name}}</h1>
                            
                                {!! auth()->user()->group->team_members !!}
                                <p id="blink" style="color:red;font-size: 20px;line-height:1.5rem;font-weight: 800;font-family: 'Poppins';"><b>PLEASE DO NOT CLOSE THIS BROWSER UNTIL YOU HAVE SUBMITTED THE QUIZ</b></p>
                        <script type="text/javascript">
                            var blink = document.getElementById('blink');
                            setInterval(function() {
                                blink.style.opacity = (blink.style.opacity == 0 ? 1 : 0);
                            }, 800);
                            </script>
                                @endif
                            </div>
                            </div>
                            </div>


                            <div class="row">

                                @if(!empty(auth()->user()->group))
                                @if (auth()->user()->group->form_submit == NULL)  
                                    {{-- <div class="col- md-12" data-tf-widget="U9a2ajhV" style="width:100%;height:700px;" --}}
                                    <div class="col- md-12" data-tf-widget="JxX0VQCC" style="width:100%;height:700px;"
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
                                      <div class="col-md-12 text-center">
                                          <h1 class="text-uppercase">Thank You For Your Submission</h1>

                                      </div>
                                          @endif
                                          @endif
                            </div>



                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                <footer class="newfooter py-3">
                    Copyright of udaamazing50race.my
             </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

                                                
            

        <!-- jQuery  -->
        <script src="{{asset('udatemp/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('udatemp/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('udatemp/assets/js/metisMenu.min.js')}}"></script>
        <script src="{{asset('udatemp/assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('udatemp/assets/js/waves.min.js')}}"></script>

        <script src="{{asset('udatemp/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

        <!-- Required datatable js -->
        <script src="{{asset('udatemp/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('udatemp/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{asset('udatemp/plugins/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('udatemp/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('udatemp/plugins/datatables/jszip.min.js')}}"></script>
        <script src="{{asset('udatemp/plugins/datatables/pdfmake.min.js')}}"></script>
        <script src="{{asset('udatemp/plugins/datatables/vfs_fonts.js')}}"></script>
        <script src="{{asset('udatemp/plugins/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{asset('udatemp/plugins/datatables/buttons.print.min.js')}}"></script>
        <script src="{{asset('udatemp/plugins/datatables/buttons.colVis.min.js')}}"></script>
        <!-- Responsive examples -->
        <script src="{{asset('udatemp/plugins/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('udatemp/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

        <!-- Datatable init js -->
        <script src="{{asset('udatemp/assets/pages/datatables.init.js')}}"></script>
        
        <!-- App js -->
        <script src="{{asset('udatemp/assets/js/app.js')}}"></script>

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
                           document.getElementById("demo").innerHTML =hours + "H "
                           + minutes + "M " + seconds + "S " ;
                           
                           // If the count down is over, write some text 
                           if (distance < 0) {
                               clearInterval(x);
                               document.getElementById("demo").innerHTML = "EXPIRED";
                           }
                       }, 1000);

                       </script>
</body>

</html>

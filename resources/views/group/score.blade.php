

<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon.png">
        <title>UDA SCORING</title>
        <!-- This page plugin CSS -->
        <link href="{{asset('udascore/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{asset('udascore/dist/css/style.min.css')}}" rel="stylesheet">
 
    </head>
    <body>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-center" style="margin-top:30px;">
                                    <img src="https://udaamazing50race.my/wp-content/uploads/2021/11/unnamed.jpg" class="Text-center">
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="file_export" class="table table-striped table-bordered display">
                                                    <thead style="color:#000;">
                                                        <tr>
                                                            <th>TIMESTAMP</th>
                                                            <th>CATEGORY</th>
                                                            <th>GROUP</th>
                                                            <th>SCORE</th>
                                                            <th>FILE UPLOAD 1</th>
                                                            <th>FILE UPLOAD 2</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="color:#000;font-family:Arial;font-size:16px;">
                                                        @forelse ($groups as $item)
                                                            <tr>
                                                                <td></td>
                                                                <td>{{$item->category}}</td>
                                                                <td>{{$item->name}}</td>
                                                                <td>{{$item->outcome}}</td>
                                                                <td><img style="width:100px;height:100px;" class="img-thumbnail" src="{{ asset('storage/'.$item->img1)}}"></td>
                                                                <td ><img style="width:100px;height:100px;" class="img-thumbnail" src="{{ asset('storage/'.$item->img2)}}"></td>
                                                            </tr>
                                                        @empty
                                                            
                                                        @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                        </div>
                    </div>

                </div>

                
                                                <div class="chat-windows"></div>
                                                <!-- ============================================================== -->
                                                <!-- All Jquery -->
                                                <!-- ============================================================== -->
                                                <script src="{{asset('udascore/assets/libs/jquery/dist/jquery.min.js')}}"></script>
                                                <!-- Bootstrap tether Core JavaScript -->
                                                <script src="{{asset('udascore/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
                                                <script src="{{asset('udascore/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
                                                <!-- apps -->
                                                <script src="{{asset('udascore/dist/js/app.min.js')}}"></script>
                                                <script src="{{asset('udascore/dist/js/app.init.js')}}"></script>
                                                <script src="{{asset('udascore/dist/js/app-style-switcher.js')}}"></script>
                                                <!-- slimscrollbar scrollbar JavaScript -->
                                                <script src="{{asset('udascore/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
                                                <script src="{{asset('udascore/assets/extra-libs/sparkline/sparkline.js')}}"></script>
                                                <!--Wave Effects -->
                                                <script src="{{asset('udascore/dist/js/waves.js')}}"></script>
                                                <!--Menu sidebar -->
                                                <script src="{{asset('udascore/dist/js/sidebarmenu.js')}}"></script>
                                                <!--Custom JavaScript -->
                                                <script src="{{asset('udascore/dist/js/custom.min.js')}}"></script>
                                                <!--This page plugins -->
                                                <script src="{{asset('udascore/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
                                                <!-- start - This is for export functionality only -->
                                                <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
                                                <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
                                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
                                                <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
                                                <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
                                                <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
                                                <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
                                                <script src="{{asset('udascore/dist/js/pages/datatable/datatable-advanced.init.js')}}"></script>
                                            </body>
                                        </html>
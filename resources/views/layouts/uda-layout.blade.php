<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>{{'Uda Explorace'}} @yield('title')</title>
        
        <meta content="Uda Explorace" name="text" />
        <link rel="shortcut icon" href="{{asset('udatemp/assets/images/favicon.png')}}">


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
        @yield('body')
       
        

        <!-- jQuery  -->
        <script src="{{asset('udatemp/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('udatemp/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('udatemp/assets/js/metisMenu.min.js')}}"></script>
        <script src="{{asset('udatemp/assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('udatemp/assets/js/waves.min.js')}}"></script>

        <script src="{{asset('udatemp/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('udatempassets/js/app.js')}}"></script>

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
        <script src="assets/pages/datatables.init.js"></script>
        
        <!-- App js -->
        <script src="assets/js/app.js"></script>

        @yield('script')

    </body>
</html>
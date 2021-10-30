<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>MAPA Resources</title>
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
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <span>
                            <img src="{{asset('udatemp/assets/images/logo-light.png')}}" alt="" height="50">
                        </span>
                    </a>
                </div>

                <nav class="navbar-custom">

                    <ul class="navbar-right d-flex list-inline float-right mb-0">
                    <p style="margin-top: 25px;">haziqasyraflaw</p>
                        <li class="dropdown notification-list">
                            <div class="dropdown notification-list nav-pro-img">
                                <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="{{asset('udatemp/assets/images/users/user-4.jpg')}}" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    
                                    <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-power text-danger"></i> Logout</a>
                                </div>                                                                    
                            </div>

                        </li>

                    </ul>

                   <!--  <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                    </ul> -->

                </nav>

            </div>
            <!-- Top Bar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page" style="margin-left:0px !important;">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row" style="margin-top: 150px;">
                            <div class="col-12">
                                <div class="card m-b-20">

                                <div class="col-md-12" style="margin-top: 30px;">
                                <h1 class="mt-0 m-b-30 header-title" style="font-size: 30px;">QUIZ</h1>

                                </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->


                      
            
                            </div><!-- End row -->
            



                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                 <footer class="footer">
                        Copyright of mapa.net.my
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- MODALS -->
        <div class="col-sm-6 col-md-3 m-t-30">
            <div class="modal fade newlabel" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <div class="col-sm-12">
                                                                    <h6 class="text-muted">Username</h6>
                                                                    <input class="form-control" type="text" value="simedarby" id="example-text-input">
                                                                    <br>
                                                                    <h6 class="text-muted">Email</h6>
                                                                    <input class="form-control" type="text" value="admin@simedarby.my" id="example-text-input">
                                                                    <br>
                                                                    <h6 class="text-muted">Company</h6>
                                                                    <input class="form-control" type="text" value="Sime Darby Plantation Sdn Bhd" id="example-text-input">
                                                                    <br>
                                                                    <h6 class="text-muted">Password</h6>
                                                                    <input class="form-control" type="text" value="******" id="example-text-input">
                                                                    <br>
                                                                    <h6 class="text-muted">Confirm Password</h6>
                                                                    <input class="form-control" type="text" value="******" id="example-text-input">
                                                                    <br>
                                                                    <h6 class="text-muted">Role</h6>
                                                                       
                                                                            <select class="form-control">
                                                                                <option>Members</option>
                                                                                <option>Admin</option>
                                                                            </select>
                                                                </div>
                                                            </div>
                                                            <div class="mg-10">
                                                            </div>
                                                            <div class="modal-footer">
                                                            <button class="btn btn-success">Add User</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            </div>

        <div class="col-sm-6 col-md-3 m-t-30">
            <div class="modal fade editpassword" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <div class="col-sm-12">
                                                                    <h6 class="text-muted">Username</h6>
                                                                    <input class="form-control" type="text" value="simedarby" id="example-text-input">
                                                                    <br>
                                                                    <h6 class="text-muted">Email</h6>
                                                                    <input class="form-control" type="text" value="admin@simedarby.my" id="example-text-input">
                                                                    <br>
                                                                    <h6 class="text-muted">Company</h6>
                                                                    <input class="form-control" type="text" value="Sime Darby Plantation Sdn Bhd" id="example-text-input">
                                                                    <br>
                                                                    <h6 class="text-muted">Password</h6>
                                                                    <input class="form-control" type="text" value="******" id="example-text-input">
                                                                    <br>
                                                                    <h6 class="text-muted">Confirm Password</h6>
                                                                    <input class="form-control" type="text" value="******" id="example-text-input">
                                                                    <br>
                                                                    <h6 class="text-muted">Role</h6>
                                                                       
                                                                            <select class="form-control">
                                                                                <option>Members</option>
                                                                                <option>Admin</option>
                                                                            </select>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                            <button class="btn btn-primary">Save</button>
                                                            <button class="btn btn-danger">Delete User</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            </div>
                                                
            

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
        <script src="{{asset('udatemp/assets/js/app.js')}} "></script>

</body>

</html>
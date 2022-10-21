<!-- <!DOCTYPE html> -->

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
   <!-- CSS only -->
<link rel="stylesheet"  
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        
        @include('sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('header')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Hello, Rajendra! <span class="wave">👋</span></h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- Content Row -->
                    <div class="row justify-content-center">

                        <!-- New candidate -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h2 mb-0 font-weight-bold text-gray-800">23</div>
                                            <div class="text-xls font-weight-bold text-primary  mb-1">
                                                New candidate</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-user-plus fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- New candidate -->

                        <!-- Invited for interview -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h2 mb-0 font-weight-bold text-gray-800">4</div>
                                            <div class="text-xls font-weight-bold text-primary  mb-1">
                                                Invited for interview</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Invited for interview -->

                        <!--  Waiting for feedback -->
                         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h2 mb-0 font-weight-bold text-gray-800">34</div>
                                            <div class="text-xls font-weight-bold text-primary  mb-1">
                                                Waiting for feedback</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-clipboard fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  Waiting for feedback -->
                        <!-- Custom Card for Timeline-->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left ">
                                <div class="card-body">
                                <h6 class="m-0 font-weight-bold text-primary"> Tuesday, Jun 21</h6>
                                <table class="table">
                                <tr>
                                <td>9 am</td> 
                                <td rowspan="2" style="background-color:skyblue;"><p>9am-10am<br><b>Team Workshop</b></p><p>Let's discuss recuritment</p></td>   
                                </tr>
                                <tr>
                                <td>10 am</td>    
                                </tr>
                                </table>   
                                </div>
                            </div>    
                        </div>        
                        <!-- Custom Card for Timeline-->


                       
                    </div>

                    <!-- Content Row -->

                    <div class="row ">
                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">3 open Recruitments</h6>
                                </div>
                                <!-- Card Body -->
                                <!-- <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div> -->
                                <table class="table">
                                      <thead class="thead-light">
                                        <tr>
                                          <th scope="col">Position</th>
                                          <th scope="col">Vacats</th>
                                          <th scope="col">Candidates overview</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th>
                                            <i class="fa fa-object-group text-gray-600"></i>
                                            <span class="text-gray-600"><b>UI Designer<b></span>
                                          </th>
                                          <td>5</td>
                                          <td>
                                            <i class="fa fa-inbox text-gray-600"></i>
                                            <span class="text-gray-600"><b>30<b></span>
                                            <i class="fa fa-thumbs-down text-gray-600"></i>
                                            <span class="text-gray-600"><b>12<b></span>
                                            <i class="fa fa-thumbs-up text-gray-600"></i>
                                            <span class="text-gray-600"><b>18<b></span>
                                            <i class="fa fa-check text-gray-600"></i>
                                            <span class="text-gray-600"><b>2<b></span>
                                            <i class="fa fa-users text-gray-600"></i>
                                            <span class="text-gray-600"><b>+27<b></span>
                                          </td>
                                        </tr>
                                        <tr>
                                          <th>
                                              <i class="fa fa-apple text-gray-600"></i>
                                            <span class="text-gray-600"><b>iOS Developer<b></span>
                                          </th>
                                          <td>3</td>
                                          <td>
                                            <i class="fa fa-inbox text-gray-600"></i>
                                            <span class="text-gray-600"><b>43<b></span>
                                            <i class="fa fa-thumbs-down text-gray-600"></i>
                                            <span class="text-gray-600"><b>23<b></span>
                                            <i class="fa fa-thumbs-up text-gray-600"></i>
                                            <span class="text-gray-600"><b>20<b></span>
                                            <i class="fa fa-check text-gray-600"></i>
                                            <span class="text-gray-600"><b>2<b></span>
                                            <i class="fa fa-users text-gray-600"></i>
                                            <span class="text-gray-600"><b>+40<b></span>
                                          </td>
                                        </tr>
                                        <tr>
                                          <th>
                                              <i class="fa fa-code text-gray-600"></i>
                                            <span class="text-gray-600"><b>Frontend Developer<b></span>
                                          </th>
                                          <td>3</td>
                                          <td>
                                            <i class="fa fa-inbox text-gray-600"></i>
                                            <span class="text-gray-600"><b>52<b></span>
                                            <i class="fa fa-thumbs-down text-gray-600"></i>
                                            <span class="text-gray-600"><b>34<b></span>
                                            <i class="fa fa-thumbs-up text-gray-600"></i>
                                            <span class="text-gray-600"><b>18<b></span>
                                            <i class="fa fa-check text-gray-600"></i>
                                            <span class="text-gray-600"><b>2<b></span>
                                            <i class="fa fa-users text-gray-600"></i>
                                            <span class="text-gray-600"><b>+49<b></span>
                                          </td>
                                        </tr>
                                      </tbody>
                                </table>
                            </div>
                        </div>

                        
                            <!-- Content Row -->
                    

                        <!-- Content Column -->
                        <div class="col-xl-6 col-md-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Ongoing processes</h6>
                                </div>
                                <!-- <div class="card-body"> -->
                                <table class="table">
                                <tr>
                                <td><i class="fa fa-user text-gray-600"></i>
                                <span class="text-gray-600"><b>Tatiana Levin<b></span></b></td>
                                <td><span class="text-gray-600"><b>Interview<b></span></td>
                                </tr>
                                <tr>
                                <td><i class="fa fa-user text-gray-600"></i>
                                <span class="text-gray-600"><b>Riyan Herwitz<b></span></b></td>
                                <td><span class="text-gray-600"><b>Task sent<b></span></td>
                                </tr>
                                <tr>
                                <td><i class="fa fa-user text-gray-600"></i>
                                <span class="text-gray-600"><b>Carter Baptista<b></span></b></td>
                                <td><span class="text-gray-600"><b>offer sent<b></span></td>
                                </tr>    
                                </table>
                                </div>
                            </div>
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Team activities</h6>
                                </div>
                                <!-- <div class="card-body"> -->
                                <table class="table">
                                <tr>
                                <td><span class="text-gray-600"><b>Talan Torff rated Carter Dokidis</b></span>
                                   <br> <i class="fa fa-star text-gray-600">5.0</i>
                                </td>    
                                <td><i class="fa fa-user text-gray-600"></i></td>
                                </tr>
                                <tr>
                                <td><span class="text-gray-600"><b>Andy Johnsons rated Gretchen Bostosh</b></span>
                                    <br> <i class="fa fa-star text-gray-600">4.0</i>
                                </td>    
                                <td><i class="fa fa-user text-gray-600"></i></td>
                                </tr>
                                <tr>
                                <td><span class="text-gray-600"><b>Olo Hermansson gave Maria Bothman</b></span>
                                    <br> <i class="fa fa-star text-gray-600">2.0</i>
                                </td>    
                                <td><i class="fa fa-user text-gray-600"></i></td>
                                </tr>    
                                </table>
                                </div>
                            </div>


                            
                            <!-- Illustrations -->
                            <div>
                            
                        </div>
                           
                            

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

          @include('footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
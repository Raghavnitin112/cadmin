<?php include("header.php");?>
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">HealthGoodsIn Dashboard </h2>

                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.html" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Products</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">All Products</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                        <div class="row">
                            <!-- ============================================================== -->
                            <!-- basic table  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">All Products</h5>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered first">
                                                <thead>
                                                    <tr> 
                                                        <th>Product Image</th>
                                                        <th>Product Name</th>
                                                        <th>Price in USR ($)</th>
                                                        <th>Price in INR(₹)</th>
                                                        <th>Quantity</th>
                                                        <th>EDIT</th>
                                                        <th>Disable</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>                                                        
                                                        <td><img src="" alt=""></td>
                                                        <td>Set of Six Copper Plated Stainless Steel Spoons</td>
                                                        <td><span>$</span>22.95</td>
                                                        <td><span>₹</span>1005.00</td>
                                                        <td>1</td>
                                                        <td><i class=" fas fa-edit" style="font-size:20px"></i></td>
                                                        <td>
                                                            <div class="switch-button switch-button-yesno">
                                                                <input type="checkbox" checked="" name="switch19" id="switch19"><span>
                                                                      <label for="switch19"></label></span>
                                                            </div>  

                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                                <tfoot>
                                                    <tr> 
                                                        <th>Product Image</th>
                                                        <th>Product Name</th>
                                                        <th>Price in USR ($)</th>
                                                        <th>Price in INR(₹)</th>
                                                        <th>Quantity</th>
                                                        <th>EDIT</th>
                                                        <th>Disable</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end basic table  -->
                            <!-- ============================================================== -->
                        </div>
                        

        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
     
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/vendor/datatables/js/data-table.js"></script>
</body>
 
</html>
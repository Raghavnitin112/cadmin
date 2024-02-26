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
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">CMS</a></li>
                                            <li class="breadcrumb-item" aria-current="page"><a href="cmsusers.php" class="breadcrumb-link">CMS Users</a></li>
                                            <!-- <li class="breadcrumb-item active" aria-current="page">Add Categories</li> -->
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
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <form method='post' action='' enctype="multipart/form-data">
                            <div class="form-row">
                              <div class="form-group col-md-4">
                                <label for="inputcategoryname">Login Name</label>
                                <input type="text" class="form-control" id="inputcategoryname">
                              </div>
                              <div class="form-group col-md-4">
                                
                                    <label for="ControlFile1">Login Password</label>
                                    <input type="password" class="form-control" id="inputcategoryname">
                              </div>

                              <div class="form-group col-md-4">
                                <label for="Textarea1">E-Mail</label>
                                <input type="text" class="form-control" id="inputcategoryname">
                              </div>
                              <div class="form-group col-md-12">
                                <label for="Textarea1">Access</label><br>
                                <label class="custom-control custom-checkbox custom-control-inline">
                                     <input type="checkbox"  class="custom-control-input"><span class="custom-control-label">Dashboard</span>
                                </label>
                                <label class="custom-control custom-checkbox custom-control-inline">
                                     <input type="checkbox"  class="custom-control-input"><span class="custom-control-label">Category</span>
                                </label>
                                <label class="custom-control custom-checkbox custom-control-inline">
                                     <input type="checkbox"  class="custom-control-input"><span class="custom-control-label">Products</span>
                                </label>
                                <label class="custom-control custom-checkbox custom-control-inline">
                                     <input type="checkbox"  class="custom-control-input"><span class="custom-control-label">Orders</span>
                                </label>
                                <label class="custom-control custom-checkbox custom-control-inline">
                                     <input type="checkbox"  class="custom-control-input"><span class="custom-control-label">Users</span>
                                </label>
                                <label class="custom-control custom-checkbox custom-control-inline">
                                     <input type="checkbox"  class="custom-control-input"><span class="custom-control-label">Pages</span>
                                </label>
                                <label class="custom-control custom-checkbox custom-control-inline">
                                     <input type="checkbox"  class="custom-control-input"><span class="custom-control-label">Wholesale</span>
                                </label>
                                <label class="custom-control custom-checkbox custom-control-inline">
                                     <input type="checkbox"  class="custom-control-input"><span class="custom-control-label">Enquiry</span>
                                </label>
                                <label class="custom-control custom-checkbox custom-control-inline">
                                     <input type="checkbox"  class="custom-control-input"><span class="custom-control-label">CMS</span>
                                </label>
                                <label class="custom-control custom-checkbox custom-control-inline">
                                     <input type="checkbox"  class="custom-control-input"><span class="custom-control-label">Affiliate</span>
                                </label>

                              </div>
                              
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            
                            
                          </form>
                            </div>
                    </div>
                    <br>
                    <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <!-- <h5 class="card-header">All Products</h5> -->
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered first">
                                                <thead>
                                                    <tr> 
                                                        <th>Username</th>
                                                        <th>Password</th>
                                                        <th>E-Mail</th>
                                                        <th>Permissions</th>
                                                        <th>EDIT</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><a href=""><i class="fas fa-file"></i></a></td>
                                                        <td><a href=""><i class="fas fa-trash-alt"></i></a></td>
                                                    </tr>
                                                    
                                                </tbody>
                                                <tfoot>
                                                <tr> 
                                                        <th>Username</th>
                                                        <th>Password</th>
                                                        <th>E-Mail</th>
                                                        <th>Permissions</th>
                                                        <th>EDIT</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </div>
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
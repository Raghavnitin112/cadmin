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
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Users</a></li>
                                            <!-- <li class="breadcrumb-item" aria-current="page"><a href="categories.html" class="breadcrumb-link">Product Categories</a></li> -->
                                            <li class="breadcrumb-item active" aria-current="page">Add User</li>
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
                        <form>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">First Name</label>
                                <input type="text" class="form-control" id="inputEmail4">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Last Name</label>
                                <input type="text" class="form-control" id="inputEmail4">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">E-Mail</label>
                                <input type="email" class="form-control" id="inputPassword4">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Contact No.</label>
                                <input type="text" class="form-control" id="inputEmail4">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Gender</label><br>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="radio-inline" checked="" class="custom-control-input"><span class="custom-control-label">Male</span>
                                </label>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Female</span>
                                </label>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">DOB</label>
                                <input type="date" class="form-control" id="inputEmail4">
                              </div>
                              <div class="form-group col-md-12">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="inputCity">
                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <select id="inputState" class="form-control">
                                  <option selected>Choose...</option>
                                  <option>...</option>
                                </select>
                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputZip">Country</label>
                                <input type="text" class="form-control" id="inputZip">
                              </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Add User</button>
                          </form>


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
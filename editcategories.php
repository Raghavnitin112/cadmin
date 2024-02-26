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
                                            <li class="breadcrumb-item" aria-current="page"><a href="categories.html" class="breadcrumb-link">Product Categories</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Add Categories</li>
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
                        <form method='post' action='' enctype="multipart/form-data">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputcategoryname">Category Name</label>
                                <input type="text" class="form-control" id="inputcategoryname">
                              </div>
                              <div class="form-group col-md-6">
                                
                                    <label for="ControlFile1">Category Image</label>
                                    <input type="file" class="form-control-file" id="FormControlFile1">
                              </div>

                              <div class="form-group col-md-6">
                                <label for="Textarea1">Category Content</label>
                                <textarea class="form-control" id="Textarea1" rows="3"></textarea>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="Textarea2">Page Title</label>
                                <textarea class="form-control" id="Textarea2" rows="3"></textarea>
                              </div>

                              <div class="form-group col-md-6">
                                <label for="Textarea1">Meta Description</label>
                                <textarea class="form-control" id="Textarea3" rows="3"></textarea>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="Textarea2">Meta Keywords</label>
                                <textarea class="form-control" id="Textarea4" rows="3"></textarea>
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                  For Show in Wholesale
                                </label>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary">ADD Category</button>
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
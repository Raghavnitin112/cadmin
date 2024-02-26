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
                                            <li class="breadcrumb-item" aria-current="page"><a href="allproducts.html" class="breadcrumb-link">All Product</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Add Products</li>
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
                                    <label for="inputState">Choose Category</label>
                                    <select id="inputState" class="form-control">
                                      <option selected>Choose...</option>
                                      <option>...</option>
                                    </select>
                                  </div>
                              <div class="form-group col-md-6">
                                <label for="inputSKU">SKU</label>
                                <input type="text" class="form-control" id="inputSKU">
                              </div>
                              <div class="form-group col-md-6">
                                
                                <label for="inputname">Product Name</label>
                                <input type="text" class="form-control" id="inputname">
                              </div>
                              <div class="form-group col-md-6">
                                
                                <label for="inputdetail">Product Detail</label>
                                <input type="text" class="form-control" id="inputdetail">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputquantity">Quantity</label>
                                <input type="text" class="form-control" id="inputquantity">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputbrand">Brand Name</label>
                                <input type="text" class="form-control" id="inputbrand">
                              </div>
                              
                              <div class="form-group col-md-4">
                                <label for="mainpicture">Main Picture</label>
                                <input type="file" class="form-control-file" id="mainpicture">
                              </div>
                              <div class="form-group col-md-4">
                                <label for="picture"> Picture</label>
                                <input type="file" class="form-control-file" id="picture">
                              </div>
                              <div class="form-group col-md-4">
                                <label for="dimensionpicture">Dimensions Picture</label>
                                <input type="file" class="form-control-file" id="dimensionpicture">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="Textarea1">Description</label>
                                <textarea class="form-control" id="Textarea1" rows="3"></textarea>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="Textarea2">Features</label>
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
                              <div class="form-group col-md-4">
                                <label for="price">Price in US ($)</label>
                               <input type="text" class="form-control" id="inputbrand" placeholder="Real Price">
                               <input type="text" class="form-control" id="inputbrand" placeholder="Offer Price">
                              </div>
                              <div class="form-group col-md-4">
                                <label for="price">Price in INR (₹)</label>
                               <input type="text" class="form-control" id="inputprice" placeholder="Real Price">
                               <input type="text" class="form-control" id="inputprice" placeholder="Offer Price">
                              </div>
                              <div class="form-group col-md-4">
                                <label for="price">Shipping Weight</label>
                               <input type="text" class="form-control" id="inputprice" placeholder="">
                               <select id="inputState" class="form-control">
                                <option value="">Choose</option>
                                <option>Yes</option>
                                <option>No</option>
                              </select> 

                              </div>
                              <div class="form-group col-md-3">
                                <label for="price">Diameter</label>
                               <input type="text" class="form-control" id="inputbrand" >
                              </div>
                              <div class="form-group col-md-3">
                                <label for="price">Height</label>
                               <input type="text" class="form-control" id="inputbrand" >
                              </div>
                              <div class="form-group col-md-3">
                                <label for="price">Weight</label>
                               <input type="text" class="form-control" id="inputbrand" >
                              </div>
                              <div class="form-group col-md-3">
                                <label for="price">Capacity</label>
                               <input type="text" class="form-control" id="inputbrand" >
                              </div>
                              <div class="form-group col-md-3">
                                <label for="price">Latest Product</label>
                                <select id="inputState" class="form-control">
                                <option value="">Choose</option>
                                <option>Yes</option>
                                <option>No</option>
                                </select> 
                              </div>
                              <div class="form-group col-md-3">
                                <label for="price">Hot Product</label>
                                <select id="inputState" class="form-control">
                                <option value="">Choose</option>
                                <option>Yes</option>
                                <option>No</option>
                                </select> 
                              </div>
                              <div class="form-group col-md-3">
                                <label for="price">Feature Product</label>
                                <select id="inputState" class="form-control">
                                <option value="">Choose</option>
                                <option>Yes</option>
                                <option>No</option>
                                </select> 
                              </div>
                              <div class="form-group col-md-3">
                                <label for="price">Best Selling Product</label>
                                <select id="inputState" class="form-control">
                                <option value="">Choose</option>
                                <option>Yes</option>
                                <option>No</option>
                                </select> 
                              </div>
                              

                            </div>
                            
                            <div class="form-group col-md-4">
                              
                                <label for="price">Affiliate status</label><br>
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <input type="text" class="form-control" id="inputbrand" placeholder="Affiliate Commision in (%)">
                              </div>
                            
                            <button type="submit" class="btn btn-primary">ADD Product</button>
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
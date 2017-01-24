<!DOCTYPE html>
<html lang="en">
<!-- <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script> -->
<body class="nav-md">
<div class="container body">
  <div class="main_container">
   
    <?php include("../include/top-nav.php"); ?>
     <?php include("../include/right-nav.php"); ?>
    <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-9 col-sm-8 col-xs-12 padding-top-10">
            <div class="x_panel tile">
              <div class="x_title">
                <div class="row">

                   <?php require_once("../classes/Include_all.php"); 
 
$product=Assets::Products($_GET['id']);
if($product!=''){
foreach ($product as $product_val) {

?>

                  <div class="col-lg-7 h4"><a href="<?php echo WEB_ROOT;?>admin/index.php"><i class="icon-cog"></i>Products</a></div>
                  <div class="col-lg-5 text-right MrTpMd-10"> 
                     <a href="<?php echo WEB_ROOT;?>product-catalogue/edit.php?id=<?php echo $product_val['id'];?>" class="btn btn-round btn-dark">Edit Product</a> 
                     <form action="" method="post" id="<?php echo $product_val["id"];?>" style="display:none;"><input type="hidden" name="product_id" value="<?php echo $product_val["id"];?>"><input type="hidden" name="delete_product"></form>
<span onclick="product_delete_form(this.id);" id="<?php echo $product_val["id"];?>"  style="cursor:pointer;" class="btn btn-round btn-default">Delete</span>
                   
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <h1 class="h4 padding-bottom-10">Adobe Photoshop CS6</h1>
				  <!-- start table -->
				     <div class="table-responsive margin-top-20">

                

                        <table id="datatable" class="table table-striped table-bordered">
                            <tbody>
                            <tr>
                              <td>Asset Type : <?php echo $product_val['asset_type'];?></td>
                              <td>Manufacturer:   <?php echo $product_val['manufacturer'];?></td>
                            </tr>
                            <tr>
                              <td>Status:   <?php echo $product_val['status'];?></td>
                              <td>Mode of Procurement:  <?php echo $product_val['mode_of_procurement'];?></td>
                            </tr>
                            

                          </tbody>

                         </table>
                    </div>
				  <!-- end table -->
          <!-- Vendors ::: Start -->
            <div class="row margin-top-10 margin-bottom-5" style="margin-left: 0; margin-right: 0">

              <div class="padding-bottom-10">

              <h1 class="h4">Vendors</h1>
              <p class="excerpt"> No Vendors associated  <a href="#" class="btn btn-success btn-xs" data-toggle="modal" data-target=".bs-example-modal-sm">Add Vendor</a></p>

              <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title text-uppercase" id="myModalLabel2">Add Vendors</h4>
                        </div>
                        <div class="modal-body">
                            
                            <div class="row">

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">

                                    <label for="vendor_catalogue">Vendor Catalogue</label>
                                    <select class="form-control">

                                      <option>Adobe</option>
                                      <option>AT &amp; T</option>
                                      <option>Canon</option>

                                    </select>

                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">

                                    <label for="price">Price ($) *</label>
                                    <input type="text" id="fullname" class="form-control" name="price" required />

                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                  <div><label for="warranty">Warranty / Validity</label></div>
                                  <div class="col-md-6 col-sm-6 col-xs-12 form-group" style="padding-left: 0">

                                    
                                    <select class="form-control">

                                      <option>YRS. </option>
                                      <option>2017</option>
                                      <option>2016</option>
                                      <option>2015</option>
                                      <option>2014</option>
                                      <option>2013</option>
                                      <option>2012</option>
                                      <option>2011</option>
                                      <option>2010</option>

                                    </select>

                                  </div>

                                  <div class="col-md-6 col-sm-6 col-xs-12 form-group" style="padding-right: 0">

                                   
                                    <select class="form-control">

                                      <option>Month</option>
                                      <option>January</option>
                                      <option>February</option>
                                      <option>March</option>
                                      <option>April</option>
                                      <option>May</option>
                                      <option>June</option>
                                      <option>July</option>
                                      <option>August</option>
                                      <option>September</option>
                                      <option>October</option>
                                      <option>November</option>
                                      <option>December</option>

                                    </select>

                                  </div>


                                <div class="clearfix"></div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">

                                    <label for="quantity">Quantity</label>
                                    <input type="text" id="fullname" class="form-control" name="quantity" required />

                                </div>


                            </div>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                          <button type="button" class="btn btn-primary">Save</button>
                        </div>

                      </div>
                    </div>
                  </div>

              </div>

            </div>

          <!-- Vendors ::: Closed -->

          <!-- Associates Assets -->

            <div class="row margin-top-10 margin-bottom-5" style="margin-left: 0; margin-right: 0">

              <div class="padding-bottom-10">

              <h1 class="h4">Associated Assets </h1>

              </div>

              <div>
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">Display Name </th>
                            <th class="column-title">Used By </th>
                            <th class="column-title">License Expiry Date </th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">rgdfrgdf</td>
                            <td class=" ">-</td>
                            <td class=" ">Thu, 22 Sep, 2016 at 10:43 AM </td>
                          </tr>
                        </tbody>

                      </table>
                  </div>


            </div>

            <p><a href="#" class="btn btn-success btn-xs" data-toggle="modal" data-target=".bs-example-modal-sm1">
            <i class="glyphicon glyphicon-plus"></i> Add Asset</a></p>

            <div class="modal fade bs-example-modal-sm1" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title text-uppercase" id="myModalLabel2">Add Asset</h4>
                        </div>
                        <div class="modal-body">
                            
                            <div class="row">

                                

                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">

                                    <label for="display-name">Display Name *</label>
                                    <input type="text" id="fullname" class="form-control" name="display-name" required />

                                </div>

                                


                            </div>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                          <button type="button" class="btn btn-primary">Save</button>
                        </div>

                      </div>
                    </div>
                  </div>


          <!-- Associates Assets ::: End -->
          <?php      
}

}

else{

echo "<script>window.location.href='index.php';</script>";

}
?>
              </div>
            </div>
        </div>
      </div>
    </div>
    <?php include("../include/footer.php"); ?>
  </div>
</div>

</body>
</html>
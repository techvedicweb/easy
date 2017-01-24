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

                  <div class="col-lg-7 h4"><a href="<?php echo WEB_ROOT;?>admin/index.php"><i class="icon-cog"></i>Vendors</a></div>
                  <div class="col-lg-5 text-right MrTpMd-10"> 
                     <a href="<?php echo WEB_ROOT;?>vendor/edit.php?id=<?php echo $product_val['id'];?>" class="btn btn-round btn-dark">Edit Vendor</a> 
                     <form action="" method="post" id="<?php echo $product_val["id"];?>" style="display:none;"><input type="hidden" name="product_id" value="<?php echo $product_val["id"];?>"><input type="hidden" name="delete_product"></form>
<span onclick="product_delete_form(this.id);" id="<?php echo $product_val["id"];?>"  style="cursor:pointer;" class="btn btn-round btn-default">Delete</span>
                   
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <h1 class="h4 padding-bottom-10">Adobe</h1>
				  <!-- start table -->
				     <div class="table-responsive margin-top-20">

                

                        <table id="datatable" class="table table-striped table-bordered">
                            <tbody>
                            <tr>
                              <td>Primary Contact : --</td>
                              <td>Email : --</td>
                            </tr>
                            <tr>
                              <td>Phone : --</td>
                              <td>Mobile : --</td>
                            </tr>
                            <tr>
                              <td colspan="2">Address : 345 Park Avenue, San Jose, California, United States </td>
                              
                            </tr>
                            

                          </tbody>

                         </table>
                    </div>
				  <!-- end table -->
          <!-- Vendors ::: Start -->
            <div class="row margin-top-10 margin-bottom-5" style="margin-left: 0; margin-right: 0">

              <div class="padding-bottom-10">
             <a href="#" class="btn btn-success btn-xs" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="glyphicon glyphicon-plus"></i> Add Product</a>

              <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title text-uppercase" id="myModalLabel2">Add Product</h4>
                        </div>
                        <div class="modal-body">
                            
                            <div class="row">

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">

                                    <label for="vendor_catalogue">Product Catalogue</label>
                                    <select class="form-control">

                                      <option>Adobe Photoshop CS6</option>
                                      <option>APC Cat5 Cable</option>
                                      <option>Apple MacBook Air 13</option>

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
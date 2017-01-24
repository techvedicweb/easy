<!DOCTYPE html>
<html lang="en">
<body class="nav-md">
<div class="container body">
  <div class="main_container">
        <?php include("../include/top-nav.php"); ?>
    <?php include("../include/right-nav.php"); ?>
   
    <div class="right_col" role="main">
      <div class="row checkList">
        <div class="col-md-9 col-sm-8 col-xs-12 margin-top-10">
          <form action="" method="post" class="checkList">
            <div class="x_panel tile">
              <div class="x_title">
                <div class="row">

                   <?php require_once("../classes/Include_all.php"); ?>

				  <div class="col-lg-12">
				  <div class="row" style="background:#fff;" data-spy="affix" data-offset-top="197">
                  <div class="col-lg-7 padding-top-10"> <a href="<?php echo WEB_ROOT;?>vendor/index.php" class="h4"><i class="icon-left-small"></i>Back to Vendors</a> </div>
                  <div class="col-lg-5 text-right MrTpMd-10"> <a href="<?php echo WEB_ROOT;?>vendor/index.php" class="btn btn-default ">Cancel</a>
                    
                      <input type="submit" value="Save" name="update_product" class="btn btn-dark ">
             
                  </div>
				 </div> 
				 </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <h1 class="h3 padding-bottom-10">Vendor Edit</h1>
                <div class="row">


                  <?php
$product=Assets::Products($_GET['id']);
if($product!=''){
foreach ($product as $product_val) {

?>


                  <div class="col-sm-6  col-xs-12 padding-bottom-10">
                    <label>Name <span class="text-red">*</span></label>
                           <!-- <input type="hidden"  name="vendor_name" value="<?php echo $product_val['id'];?>" > -->
                    <input type="text"  value="" id="itil_product_name1" name="vendor_name" class="form-control" required>
                  </div>
                 

               <div class="col-sm-6  col-xs-12 padding-bottom-10">
                    <label>Primary Contact <span class="text-red">*</span></label>
                         <!--   <input type="hidden"  name="id" value="<?php echo $product_val['id'];?>" > -->
                    <input type="text"  value="vendor_primary" id="itil_product_name1" name="vendor_primary" class="form-control" required>
                  </div>

                <div class="col-sm-6 col-xs-12">

                    <div class="col-sm-6  col-xs-12 padding-bottom-10" style="padding-left:0">
                    <label>Phone<span class="text-red">*</span></label>
                          <!--  <input type="hidden"  name="id" value="<?php echo $product_val['id'];?>" > -->
                    <input type="text"  value="" id="itil_product_name1" name="vendor_phone" class="form-control" required>
                  </div>

                  <div class="col-sm-6  col-xs-12 padding-bottom-10" style="padding-right:0">
                    <label>Mobile<span class="text-red">*</span></label>
                           <!-- <input type="hidden"  name="id" value="<?php echo $product_val['id'];?>" > -->
                    <input type="text"  value="" id="itil_product_name1" name="vendor_mobile" class="form-control" required>
                  </div>

                <div class="clearfix"></div>
                </div>

                 <div class="col-sm-6  col-xs-12 padding-bottom-10">
                    <label>Email<span class="text-red"></span></label>
                    <input type="text" value=" " id="itil_product_name1" name="vendor_email" class="form-control" required>
                  </div>
                  
                
                  
                    

					</div>
					
                     
                  </div>


				  <div class="col-sm-12  col-xs-12 padding-bottom-10">
				  <p class="margin-top-10">Description</p>
                <!-- start-->
                <!-- <div class="btn-toolbar editor nav" data-role="editor-toolbar" data-target="#editor"> <a href="#" class="BoldAlign" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bold">&nbsp;</a> <a href="#" class="italicAlign" data-toggle="tooltip" data-placement="top" title="" data-original-title="Italic">&nbsp;</a> <a href="#" class="list" data-toggle="tooltip" data-placement="top" title="" data-original-title="List Circle">&nbsp;</a> <a href="#" class="listNum" data-toggle="tooltip" data-placement="top" title="" data-original-title="List Number">&nbsp;</a> <a href="#" class="shiftTab" data-toggle="tooltip" data-placement="top" title="" data-original-title="Shift Tab">&nbsp;</a> <a href="#" class="shiftTab2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Shift Tab">&nbsp;</a> <a href="#" class="fontColor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Font Color">&nbsp;</a> <a href="#" class="backColor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back Color">&nbsp;</a> <span class="dropdown"> <a href="#" class="dropdown-toggle links" data-toggle="dropdown" role="button" aria-expanded="false" title="link">&nbsp;</a>
                  <ul class="dropdown-menu">
                    <li><a href="#insertLink" data-toggle="modal" data-target="#insertLink">Insert Link ...</a></li>
                    <li><a href="#">Unlink</a></li>
                  </ul>
                </div> 
                <div id="editor" class="editor-wrapper placeholderText" contenteditable="true"></div>-->
                <textarea name="vendor_description" id="descr" cols="20" rows="6" style="border:#ccc solid 1px; width: 100%;">
                </textarea>
                <!--end-->
</div>


<div class="x_content">
                <h1 class="h3 padding-bottom-10">Address</h1>
                <div class="row">

                  <div class="col-sm-6  col-xs-12 padding-bottom-10">
                    <label>Line 1</label>
                           <!-- <input type="hidden"  name="vendor_name" value="<?php echo $product_val['id'];?>" > -->
                    <input type="text"  value="" id="itil_product_name1" name="address_line1" class="form-control" required>
                  </div>
                 

               <div class="col-sm-6  col-xs-12 padding-bottom-10">
                    <label>Line 2</label>
                         <!--   <input type="hidden"  name="id" value="<?php echo $product_val['id'];?>" > -->
                    <input type="text"  value="" id="itil_product_name1" name="address_line2" class="form-control" required>
                  </div>

                <div class="col-sm-6 col-xs-12">

                    <div class="col-sm-6  col-xs-12 padding-bottom-10" style="padding-left:0">
                    <label>City</label>
                          <!--  <input type="hidden"  name="id" value="<?php echo $product_val['id'];?>" > -->
                    <input type="text"  value="" id="itil_product_name1" name="vendor_city" class="form-control" required>
                  </div>

                  <div class="col-sm-6  col-xs-12 padding-bottom-10" style="padding-right:0">
                    <label>State</label>
                           <!-- <input type="hidden"  name="id" value="<?php echo $product_val['id'];?>" > -->
                    <input type="text"  value="" id="itil_product_name1" name="vendor_city" class="form-control" required>
                  </div>

                <div class="clearfix"></div>
                </div>

                 <div class="col-sm-6 col-xs-12">

                    <div class="col-sm-6  col-xs-12 padding-bottom-10" style="padding-left:0">
                    <label>Country</label>
                          <!--  <input type="hidden"  name="id" value="<?php echo $product_val['id'];?>" > -->
                    <input type="text"  value="" id="itil_product_name1" name="vendor_country" class="form-control" required>
                  </div>

                  <div class="col-sm-6  col-xs-12 padding-bottom-10" style="padding-right:0">
                    <label>Zipcode</label>
                           <!-- <input type="hidden"  name="id" value="<?php echo $product_val['id'];?>" > -->
                    <input type="text"  value="" id="itil_product_name1" name="vendor_zipcode" class="form-control" required>
                  </div>

                <div class="clearfix"></div>
                </div>
                  
                
                  
                    

          </div>
          
                     
                  </div>
           
                </div>
</form>


   <?php
 }
}
?>

               
            

               
    <?php include("../include/footer.php"); ?>
  </div>
</div>
</body>
</html>
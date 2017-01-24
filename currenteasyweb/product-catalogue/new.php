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
                  <div class="col-lg-7 padding-top-10"> <a href="<?php echo WEB_ROOT;?>product-catalogue/index.php" class="h4"><i class="icon-left-small"></i>Back to Products</a> </div>
                  <div class="col-lg-5 text-right MrTpMd-10"> <a href="<?php echo WEB_ROOT;?>product-catalogue/index.php" class="btn btn-default ">Cancel</a>
                    
                      <input type="submit" value="Save" name="add_product" class="btn btn-dark ">
                   
                  </div>
				 </div> 
				 </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <h1 class="h3 padding-bottom-10">Product Catalogue</h1>
                <div class="row">
                  <div class="col-sm-6  col-xs-12 padding-bottom-10">
                    <label>Name <span class="text-red">*</span></label>
                    <input type="text"  id="itil_product_name1" name="product_name" class="form-control" required>
                  </div>
                 

               <div class="col-sm-6 col-xs-12 padding-bottom-10">
                    <label>Assest type<span class="text-red">*</span></label>
                    <select class="form-control" name="assets_type_id" id="assets_type_id" required>
                    <option value="">Please Select</option>
                    <?php
                        $assets_object=Assets::Assets_type();
                        foreach ($assets_object as $view_assets_type) {
                        echo   '<option value="'.$view_assets_type["id"].'">'.$view_assets_type["name"].'</option>';
                        }
                        ?>
                  </select>
					
					</div>

            <div class="col-sm-6  col-xs-12 padding-bottom-10">
                    <label>Manufacturer<span class="text-red"></span></label>
                    <input type="text" id="itil_product_name1" name="manufacturer" class="form-control" required>
                  </div>
                  <div class="col-sm-6 col-xs-12 padding-bottom-10">
                    <label>Status<span class="text-red"></span></label>
                    <select class="form-control" name="status" id="select-box" required>
                     
                      <option>In production</option>
                      <option value="In pipeline">In pipeline</option>
                      <option value="Retired">Retired</option>
                      <option value="Production">Production</option>
                    </select>
                  </div>
                
                  
                    <div class="col-sm-6 col-xs-12 padding-bottom-10">
                    <label>Mode of Procurement<span class="text-red"></span></label>
                      <select class="form-control" name="mode_of_procurement" tabindex="-1" id="select-box">
                      <option value="Buy">Buy</option>
                      <option value="Lease">Lease</option>
                      <option value="Both">Both</option>
                      <option value="Buy">Buy</option>
                    </select>
                  

                    
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
                <textarea name="description" id="descr" cols="20" rows="6" style="border:#ccc solid 1px; width: 100%;"></textarea>
                <!--end-->
</div>

           
                </div>



   </form>

               
            

               
    <?php include("../include/footer.php"); ?>
  </div>
</div>
</body>
</html>
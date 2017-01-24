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

                   <?php require_once("../classes/Include_all.php"); ?>

                  <div class="col-lg-7 h4"><a href="<?php echo WEB_ROOT;?>admin/index.php"><i class="icon-cog"></i>Admin</a></div>
                  <div class="col-lg-5 text-right MrTpMd-10"> 
                     <a href="<?php echo WEB_ROOT;?>product-catalogue/new.php" class="btn btn-round btn-dark">New Product</a>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <h1 class="h4 padding-bottom-10">Products</h1>
				  <!-- start table -->
				     <div class="table-responsive margin-top-20">
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
							  <tr>
								<th>Name</th>
								<th>Type</th>
								<th>Manufacturer</th>
								<th>Status</th>
								<th>&nbsp;</th>
							  </tr>	
							</thead>

							<tbody>

                <?php
$product=Assets::Products('');
if($product!=''){
foreach ($product as $product_val) {

?>
<tr class="assTable">
                  <td class=" "><a href="product-detail.php?id=<?php echo $product_val['id'];?>"><?php echo $product_val['name'];?></a></td>
                  <td class=" "><?php echo $product_val['asset_type'];?> </td>
                  <td class=" "><?php echo $product_val['manufacturer'];?> <i class="success fa fa-long-arrow-up"></i></td>
                  <td class=" "><?php echo $product_val['status'];?> </td>
                  <td class=" "><a href="edit.php?id=<?php echo $product_val['id'];?>"><i class="icon-pencil"></i></a> &nbsp; <form action="" method="post" id="<?php echo $product_val["id"];?>" style="display:none;"><input type="hidden" name="product_id" value="<?php echo $product_val["id"];?>"><input type="hidden" name="delete_product"></form><i onclick="product_delete_form(this.id);" id="<?php echo $product_val["id"];?>" class="icon-trash" style="cursor:pointer;"></i></td>
        </tr>
          <?php      
}
}
?>
								
							
							</tbody>
                        </table>
                    </div>
				  <!-- end table -->
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
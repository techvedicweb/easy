<!DOCTYPE html>
<html lang="en">
<!-- <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script> -->
<body class="nav-md">
<div class="container body">
  <div class="main_container">
   
    <?php include("../include/top-nav.php"); ?>
     <?php include("../include/right-nav.php"); 
  
     ?>
    <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-9 col-sm-8 col-xs-12 padding-top-10">
            <div class="x_panel tile">
              <div class="x_title">
                <div class="row">
                  <?php require_once("../classes/Include_all.php"); ?>
                  <div class="col-lg-7 h4"><a href="<?php echo WEB_ROOT;?>admin/index.php"><i class="icon-cog"></i>Asset Edit</a></div>
                  <div class="col-lg-5 pull-right MrTpMd-10"> 
                   <!--   <button type="button" class="btn btn-danger"  style="float:right"> Add New</button> -->
					 </div>
				 <div class="clearfix"></div>
              </div>
              <div class="x_content">
               <div class="list-page-header row-fluid"> 
    <h4 class="modal-title"><strong>Edit Asset Types</strong></h4>
	<div class="x_title title1">
               </div>
  </div>
   <form  action="" method="post" name="asset_update_category">
 <div class="row">
			              <div class="col-sm-6  col-xs-12 padding-bottom-10">
						  <p>
                    <label>Name <span class="text-red">*</span></label></p>
                       <input type="hidden"  name="id" value="<?php echo  $_GET['id'];?>" placeholder="Category Name" class="form-control"  >
                    <input type="text"  name="name" value="<?php echo  $_GET['name'];?>" placeholder="Category Name" class="form-control" required >
                  </div>
                 

                 <div class="col-sm-6 col-xs-12 padding-bottom-10">
				 <p>
                     <label>Parent<span class="text-red">*</span></label></p>

<select name="parent_id" class="form-control" > 
    <option value="">Root Category</option>

  <?php     
// $get_all_cat_view=Category::View_Cat();
// foreach ($get_all_cat_view as $value_of_cat) {
//   echo "<option value='".$value_of_cat['id']."'>".$value_of_cat['name']."</option>";
//}  
$get_all_category=$category_object->View_Cat(NULL, 0);

?>
  </select>              
									</div>
					</div>
					</div>
					
					
         
        <div class="modal-footer">
          <button type="button" onclick="window.history.back();" class="btn btn-default" data-dismiss="modal">Cancel</button> 
		  <input type="submit" name='update_category_assets' class="btn btn-dark"  value="Save">
        </div>
					</form>
					 </div>
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


               
             
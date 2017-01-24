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
          <form method="post" action="" name="add_location">
            <div class="x_panel tile">
              <div class="x_title">
                <div class="row">
				  <div class="col-lg-12">
				  <div class="row" style="background:#fff;" data-spy="affix" data-offset-top="197">
             <?php require_once("../classes/Include_all.php"); ?>
                  <div class="col-lg-7 padding-top-10"> <a href="<?php echo WEB_ROOT;?>assets/indexlocation.php" class="h4"><i class="icon-left-small"></i>Back to Locations</a> </div>
                  <div class="col-lg-5 text-right MrTpMd-10"><button type="button" onclick="window.history.back();" class="btn btn-default ">Cancel</button>
                    
                      <input type="submit" name="add_location" class="btn btn-dark" value="Save">
                   
                  </div>
				 </div> 
				 </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <h1 class="h3 padding-bottom-10">New Location</h1>
                <div class="row">
                  <div class="col-sm-6  col-xs-12 padding-bottom-10">
                    <label>Location Name <span class="text-red">*</span></label>
                    <input type="text"  id="itil_product_name1" name="location_name" class="form-control" required  >
                  </div>
                 <!--  <div class="col-sm-6  col-xs-12 padding-bottom-10">
                    <label>Parent Location <span class="text-red">*</span></label>
                   <select name="city" id="city" class="form-control">
<option value="2">.....</option>
<option value="3">America</option>
<option value="4">Canada</option>
<option value="2">US</option>
<option value="3">Europe</option>
<option value="4">France</option>
<option value="4">United Kingdom</option>
</select>
                  </div> -->

					</div>
					
                     
                  </div>

<div class="col-sm-6  col-xs-12 padding-bottom-10">
                    <label>Primary Contact<span class="text-red"></span></label>
                    <input type="text" id="itil_product_name1" name="primary_contact" class="form-control" >
                  </div>
                  <div class="col-sm-6 col-xs-12 padding-bottom-10">
                    <label> Email<span class="text-red"></span></label>
                    <input type="text"  id="itil_product_name1" name="email" class="form-control"   >
									</div>
								
									
									  <div class="col-sm-6 col-xs-12 padding-bottom-10">
                    <label>Phone<span class="text-red"></span></label>
                   <input type="text"  id="itil_product_name1" name="phone" class="form-control"   >

                    </select>
                  </div>
				  <div class="x_content">
				   <h1 class="h3 padding-bottom-10">Address</h1>
                <div class="row">
                  <div class="col-sm-6  col-xs-12 padding-bottom-10">
                    <label>Line1 <span class="text-red"></span></label>
                    <input type="text"  id="itil_product_name1" name="address" class="form-control"   >
					&nbsp;
					<div class="row padding-bottom-20">
<div class="col-sm-6  col-xs-12 padding-bottom-10">
                    <label>Country<span class="text-red"></span></label>
                   <select name="country" id="country_change" class="form-control">
<?php $location=Location::Country();
foreach ($location as $view_loc) {
  echo "<option value=".$view_loc['id'].">".$view_loc['name']."</option>";
}
?>
</select>
                  </div>
                  <div class="col-sm-6 col-xs-12 padding-bottom-10">
                    <label> State<span class="text-red"></span></label>
                  <select name="state" id="states" class="form-control">
<?php $location=Location::State('1');
foreach ($location as $view_loc) {
  echo "<option value=".$view_loc['id'].">".$view_loc['name']."</option>";
}
?>
</select>
									</div>
								
									
									  </div>
				  
                  </div>



                    <div class="col-sm-6  col-xs-12 padding-bottom-10">
                    <label>Line2 <span class="text-red"></span></label>
                    <input type="text"  id="itil_product_name1" name="address2" class="form-control"   >
          &nbsp;
          <div class="row padding-bottom-20">
<div class="col-sm-6  col-xs-12 padding-bottom-10">
                    <label>City<span class="text-red"></span></label>
                    <select name="city" id="city" class="form-control">
<?php $location=Location::City('1');
foreach ($location as $view_loc) {
  echo "<option value=".$view_loc['id'].">".$view_loc['name']."</option>";
}
?>
</select>
                  </div>
                  <div class="col-sm-6 col-xs-12 padding-bottom-10">
                    <label> ZipCode<span class="text-red"></span></label>
                   <input type="text"  id="itil_product_name1" name="zipcode" class="form-control"   >
                  </div>
                
                  
                    </div>
          
                  </div>
                 
					</div>
					
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
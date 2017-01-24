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
                  <div class="col-lg-7 h4">Admin</div>
                  <div class="col-lg-5 text-right MrTpMd-10"> 
                     <div class="input-group noMargin">
						<input class="form-control" placeholder="Search for..." type="text">
						<span class="input-group-btn">
						     <button class="btn btn-success" type="button">Go!</button>
						</span> 
				     </div>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <h1 class="h4 padding-bottom-10">Asset Management</h1>
				<div class="row text-center">
				   
					<!--   <a class="admin col-xs-6 col-sm-4 col-md-2" href="#">
					     <div class="circleBig">
						     <div class="circle">
							     <i class="icon-home"></i>
							 </div>
						 </div>
						 <h4>Vendors</h4>
					 </a> 					

					  <a class="admin col-xs-6 col-sm-4 col-md-2" href="#">
					     <div class="circleBig">
						     <div class="circle">
							     <i class="icon-slideshare"></i>
							 </div>
						 </div>
						 <h4>Relationship Types</h4>
					 </a>

<a class="admin col-xs-6 col-sm-4 col-md-2" href="#">
					     <div class="circleBig">
						     <div class="circle">
							     <i class="icon-target"></i>
							 </div>
						 </div>
						 <h4>Discovery</h4>
					 </a>	 -->

					

					 <a class="admin col-xs-6 col-sm-4 col-md-2" href="<?php echo WEB_ROOT;?>assets/addnew.php">
					     <div class="circleBig">
						     <div class="circle">
							     <i class="icon-sitemap"></i>
							 </div>
						 </div>
						 <h4>Asset Types</h4>
						</a>
					 
					 <a class="admin col-xs-6 col-sm-4 col-md-2" href="<?php echo WEB_ROOT;?>assets/indexlocation.php">
					     <div class="circleBig">
						     <div class="circle">
							     <i class="icon-location"></i>
							 </div>
						 </div>
						 <h4>Locations</h4>
					 </a>
					 
					 <a class="admin col-xs-6 col-sm-4 col-md-2" href="<?php echo WEB_ROOT;?>admin/addgroup.php">
					     <div class="circleBig">
						     <div class="circle">
							     <i class="icon-users"></i>
							 </div>
						 </div>
						 <h4>Groups</h4>
					 </a>
					 
				     <a class="admin col-xs-6 col-sm-4 col-md-2" href="<?php echo WEB_ROOT;?>admin/deparment.php">
					     <div class="circleBig">
						     <div class="circle">
							     <i class="icon-home"></i>
							 </div>
						 </div>
						 <h4>Departments</h4>
					 </a>
					 <a class="admin col-xs-6 col-sm-4 col-md-2" href="<?php echo WEB_ROOT;?>agents/index.php">
					     <div class="circleBig">
						     <div class="circle">
							     <i class="icon-user"></i>
							 </div>
						 </div>
						 <h4>Agents</h4>
					 </a>
					 <a class="admin col-xs-6 col-sm-4 col-md-2" href="<?php echo WEB_ROOT;?>requester/index.php">
					     <div class="circleBig">
						     <div class="circle">
							     <i class="icon-users"></i>
							 </div>
						 </div>
						 <h4>Requestor</h4>
					 </a>

					  
					    <a class="admin col-xs-6 col-sm-4 col-md-2" href="<?php echo WEB_ROOT;?>asset-form/index.php">
					     <div class="circleBig">
						     <div class="circle">
							     <i class="icon-users"></i>
							 </div>
						 </div>
						 <h4>Asset Properties</h4>
					 </a>
					 		

					 		 <a class="admin col-xs-6 col-sm-4 col-md-2" href="<?php echo WEB_ROOT;?>product-catalogue/index.php">
					     <div class="circleBig">
						     <div class="circle">
							     <i class="icon-box"></i>
							 </div>
						 </div>
						 <h4>Products</h4>
					 </a>

					 <a class="admin col-xs-6 col-sm-4 col-md-2" href="<?php echo WEB_ROOT;?>vendor/index.php">
					     <div class="circleBig">
						     <div class="circle">
							     <i class="icon-box"></i>
							 </div>
						 </div>
						 <h4>Vendor</h4>
					 </a>

	
					 				
				</div>
				<!--<div class="row text-center">
				     
              </div-->
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
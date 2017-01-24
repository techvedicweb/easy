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
                  <div class="col-lg-7 padding-top-10"> <a href="<?php echo WEB_ROOT;?>/login/index.php" class="h4"><i class="icon-left-small"></i>Back to Dashboard</a> </div>
                  <div class="col-lg-5 text-right MrTpMd-10"> <a href="<?php echo WEB_ROOT;?>profiles/edit.php" class="btn btn-danger btn-round">Edit profile</a>
                    
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <h1 class="h3 padding-bottom-10">Edit Profile</h1>
				<div class="row">
				     <div class="col-sm-3"><img src="<?php if($viewdata['profile_pic']!=''){
echo DOCS_ROOT.$_SESSION['userid']."/profile/".$viewdata['profile_pic'];
             }else{
              echo IMAGE_ROOT."profile.gif";
             } ?>" alt="" class="img-responsive img-thumbnail noBorderRadius"></div>
					 <div class="col-sm-9">
					    <ul class="bdList">
						    <li>
							  <div class="media">
							   <div class="left weight-600 green">Name:</div> 
							   <div class="right"><?php echo $viewdata['name'];?></div>
							  </div> 
							</li>
							<li>
							<div class="media">
							   <div class="left weight-600 green">Email:</div> 
							   <div class="right"><?php echo $viewdata['email'];?></div>
							 </div>  
							</li>
							<li>
							 <div class="media">
							  <div class="left weight-600 green">Phone:</div> 
							  <div class="right"><?php echo $viewdata['mobile_number'];?></div> 
							 </div> 
							</li>
							<li>
							 <div class="media">
							   <div class="left weight-600 green">Language:</div> 
							   <div class="right"><?php echo $viewdata['user_language'];?></div> 
							 </div>  
							</li>
							<li>
							 <div class="media">
							   <div class="left weight-600 green">Location:</div> 
							   <div class="right"><?php echo $viewdata['location'];?></div> 
							  </div> 
							</li>
							<li>
							 <div class="media">
							    <div class="left weight-600 green"> Reporting Manager </div> 
								<div class="right"><?php echo $viewdata['reporting_manager'];?></div> 
							 </div>	
							</li>
						</ul>
					 </div>
				</div>
				<h3 class="margin-top-20 weight-600">Signature</h3>
				<p>No open and pending tickets for this agent</p>
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
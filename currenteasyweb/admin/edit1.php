<!DOCTYPE html>
<html lang="en">
<body class="nav-md">
<div class="container body">
  <div class="main_container">
        <?php include("../include/top-nav.php"); 
 include("../include/right-nav.php"); 

    ?>
   
    <div class="right_col" role="main">
      <div class="row checkList">
        <div class="col-md-9 col-sm-8 col-xs-12 margin-top-10">
          <form method="post" action="" name="add_new_department">
            <div class="x_panel tile">
              <div class="x_title">
                <div class="row">
				  <div class="col-lg-12">

				  <div class="row" style="background:#fff;" data-spy="affix" data-offset-top="197">
 <?php require_once("../classes/Include_all.php"); ?>
                  <div class="col-lg-7 padding-top-10"> <a href="<?php echo WEB_ROOT;?>admin/deparment.php" class="h4"><i class="icon-left-small"></i>Back to Departments</a> </div>
                  <div class="col-lg-5 text-right MrTpMd-10"> <a href="javascript:window.history.back();" class="btn btn-default ">Cancel</a>
                      
                      <input type="submit" name="add_new_department" class="btn btn-dark" value="Save">
                   
                  </div>
				 </div> 

				 </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <h1 class="h3 padding-bottom-10"><strong>New Department</strong></h1>
                <div class="row">
                  <div class="col-sm-12  col-xs-12 padding-bottom-10">
                    <label>Department Name<span class="text-red">*</span></label>
                    <input type="text"  id="itil_product_name1"  name="department_name"  class="form-control" required >
                  </div>
				  </div>
            
                     
                  
<div class="row">

				  <div class="col-sm-12  col-xs-12 padding-bottom-10">
				  <p>Description</p>

            
                <textarea  name="department_description" cols="20" rows="6" style="width:100%"></textarea>
                
                <!--end-->
</div>
</div>
<div class="row padding-bottom-10">
<div class="col-sm-12  col-xs-12 padding-bottom-10">
                    <label>Department Head<span class="text-red">*</span></label>
                    <input type="text"  id="itil_product_name1" name="department_head" class="form-control" required size="30" pLaceholder="Enter Requesters Name or Email">
                  </div>
</div>
<div class="row">
<div class="col-sm-12  col-xs-12 padding-bottom-10">
                    <label>Prime User<span class="text-red">*</span></label>
                    <input type="text"  id="itil_product_name1" name="department_prime_user" class="form-control" required size="30" pLaceholder="Enter Requesters Name or Email">
                  </div>
</div>
</div>

           
                </div>



   

               
            

               
    <?php include("../include/footer.php"); ?>
  </div>
</div>
</body>
</html>
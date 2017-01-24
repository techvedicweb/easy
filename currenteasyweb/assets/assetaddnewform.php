<!DOCTYPE html>
<html lang="en">
<body class="nav-md">
<div class="container body">
  <div class="main_container">
        <?php include("../include/top-nav.php"); ?>
    <?php include("../include/right-nav.php"); ?>
      <?php include("../classes/Assets.php"); ?>
   <?php include("../classes/Location.php"); ?>
   
    <div class="right_col" role="main">
      <div class="row checkList">
        <div class="col-md-9 col-sm-8 col-xs-12 margin-top-10">
          <form action="#" class="checkList">
            <div class="x_panel tile">
              <div class="x_title">
                <div class="row">
				  <div class="col-lg-12">
				  <div class="row" style="background:#fff;" data-spy="affix" data-offset-top="197">
                  <div class="col-lg-7 padding-top-10"> <a href="<?php echo WEB_ROOT;?>assets/index.php" class="h4"><i class="icon-left-small"></i>Back to Contracts</a> </div>
                  <div class="col-lg-5 text-right MrTpMd-10"> <a href="<?php echo WEB_ROOT;?>assets/index.php" class="btn btn-danger btn-round">Cancel</a>
                    <div class="btn-group">
                      <button type="button" class="btn btn-dark btn-round">Save</button>
                    </div>
                  </div>
				 </div> 
				 </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <h1 class="h3 padding-bottom-10">New Assets</h1>
                <div class="row">
                  <div class="col-sm-12 padding-bottom-10">
                    <label>Display Name <span class="text-red">*</span></label>
                    <input type="text" name="assets_name" class="form-control" required>
                  </div>
                 
                </div>
				<?php include("../include/footer.php"); ?>
  </div>
</div>
</body>
</html>
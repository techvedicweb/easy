 
<!DOCTYPE html>
<html lang="en">
<body class="nav-md">
<div class="container body">
  <div class="main_container">
     <?php include("../include/top-nav.php"); ?>
    <?php include("../include/right-nav.php"); ?>
    <div class="right_col" role="main">

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom-20">
          <div class="dashboard_graph padding-bottom-10">
            <h3>Recent Activity</h3>
            <div id="chartContainer1" style="width: 45%; height: 400px;display: inline-block; margin-top:25px;"></div>
  <div id="chartContainer2" style="width: 45%; height: 400px;display: inline-block; margin-top:25px;"></div><br />
  <div id="chartContainer3" style="width: 45%; height: 400px;display: inline-block; margin-top:25px;"></div>
  <div id="chartContainer4" style="width: 45%; height: 400px;display: inline-block; margin-top:25px;"></div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>

    </div>
    <?php include("../include/footer.php"); ?>
  </div>
</div>

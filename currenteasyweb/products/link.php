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
          <form action="#" class="checkList">
            <div class="x_panel tile">
              <div class="x_title">
                <div class="row">
				  <div class="col-lg-12">
				  <div class="row" style="background:#fff;" data-spy="affix" data-offset-top="197">
                 
                 
				 </div> 
				 </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <h2 class="h2 padding-bottom-10"><strong>Add Relationship- ' Received Data from '</strong></h2>
		
		<div class="row">
		<div class="col-sm-6 col-xs-12 padding-bottom-10">
                    <label>Parent Location<span class="text-red"></span></label>
                    <select class="form-control" tabindex="-1" id="select-box">
										<option>Hardware</option>
										<option value="AK">Access Point</option>
										<option value="HI">Aix Server</option>
										<option value="CA">Computer</option>
										<option value="NV">Data Center</option>
										<option value="OR">Desktop</option>
										<option value="WA">Disk</option>
										<option value="AZ">Arizona</option>
											<option>--Choose an Asset Type--</option>
									</select>
					
					</div>
                  <div class="col-sm-6  col-xs-12 padding-bottom-10">
                    <label>Search :<span class="text-red"></span></label>
                    <input type="text"  id="itil_product_name1" name="assets_name" class="form-control" required size="30">
                  </div>
                 

               
					</div>
					<div claa="row">
					<div class="col-sm-12 col-xs-12">
				  <div class="table-responsive margin-top-20">
                        <table class="table  jambo_table bulk_action1 ">
                            <thead>
							  <tr>
								<th>Asset Name</th>
								<th>Used By</th>
								
							  </tr>	
							</thead>
<tr>
<td><input type="checkbox">Testing</td>
</tr>
							
                        </table>
                    </div>
					</div>
				  <!------ end table------>
</div>
<div class="row">
<div class="footer pull-right">
<button type="button" class="btn btn-default">Cancel</button>
<button type="button" class="btn btn-default">Back</button>
<button type="button" class="btn btn-dark">Attach</button>
</div>
</div></div>

           
                </div>



   

               
            

               
    <?php include("../include/footer.php"); ?>
  </div>
</div>
</body>
</html>
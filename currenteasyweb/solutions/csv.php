<!DOCTYPE html>
<html lang="en">
<body class="nav-md">
<div class="container body">
  <div class="main_container">
  	    <?php include("../include/top-nav.php"); ?>
    <?php include("../include/right-nav.php"); ?>

    <div class="right_col" role="main">
      <div class="row checkList">
        <div class="col-md-9 col-sm-12 col-xs-12 margin-top-10">
          <div class="x_panel tile">
            <div class="x_title">
              <div class="row">
                <div class="col-lg-7 padding-top-10"> <a href="<?php echo WEB_ROOT;?>solutions/index.php" class="h4"><i class="icon-left-small"></i>Back to Contracts</a> </div>
                <div class="col-lg-5 text-right MrTpMd-10"> <a href="<?php echo WEB_ROOT;?>solutions/index.php" class="btn btn-danger btn-round">Cancel</a>
                  <div class="btn-group">
                    <button type="button" class="btn btn-dark btn-round">Save</button>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <h1 class="h3 padding-bottom-10">Import Assets from CSV</h1>
              <form action="#" class="checkList">
					 <label><strong>Step 1</strong>: Select Asset type<span class="text-red">*</span></label>
					 <div class="form-group margin-bottom-20">
						<select class="select2_group form-control">
							<option selected="selected" value="">--select--</option>
							  <option value="AK">Alaska</option>
							  <option value="HI">Hawaii</option>
							  <option value="CA">California</option>
							  <option value="NV">Nevada</option>
							  <option value="OR">Oregon</option>
							  <option value="WA">Washington</option>
							  <option value="AZ">Arizona</option>
							  <option value="CO">Colorado</option>
							  <option value="ID">Idaho</option>
							  <option value="MT">Montana</option>
							  <option value="NE">Nebraska</option>
							  <option value="NM">New Mexico</option>
							  <option value="ND">North Dakota</option>
							  <option value="UT">Utah</option>
							  <option value="WY">Wyoming</option>
						</select>
					 </div>
					 <label><strong>Step 2</strong>: Select a CSV file and click import</label>
					 <div class="input-group">
						<input type="text" class="form-control" placeholder="1 file(s) selected" readonly>
						<label class="input-group-btn"> <span class="btn btn-success noBorderRadius"> Choose File
						  <input type="file" style="display: none;" multiple>
						  </span> 
						</label>
					 </div>
              </form>
			  <div class="panel-info bg-info padding-10">
			     <strong>Note</strong>: Please ensure that the first row has the header information (eg. Display Name, Department etc.). The fields in your CSV file, though, can be in any order.
			  </div>
              <p class="border-btm padding-top-20">&nbsp;</p>
			  <h2 class="h4 padding-top-10">Following is the example of a CSV file</h2>
			  <p><img src="../images/ci_import_csv.png" alt="" class="img-responsive" ></p>
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
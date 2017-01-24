<!DOCTYPE html>
<html lang="en">
<body class="nav-md">
<div class="container body">
  <div class="main_container">
     <?php include("../include/top-nav.php"); ?>
    <?php include("../include/right-nav.php"); ?>
   
    <div class="right_col" role="main">
      <div class="row">
        <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9 margin-top-10">
          <div class="x_panel tile">
            <div class="x_title">
              <ol class="breadcrumb noBorderRadius noMargin">
                <li><a href="<?php echo WEB_ROOT;?>problems/index.php">Problems</a></li>
                <li>#PRB-1</li>
              </ol>
              <div class="clearfix"></div>
            </div>
            <div class="x_content" id="imageSelecter">
              <div class="panel-info bg-info panel-body margin-bottom-20"> Hi </div>
              <ul class="nav nav-pills">
                <li class="active"><a class="btn btn-default" href="#tab1" data-toggle="tab"><i class="icon-cubes"></i> Overview</a></li>
                <li><a href="#tab2" class="btn btn-default" data-toggle="tab"><i class="icon-book-1"></i> Relationships</a></li>
                <li><a href="#tab3" class="btn btn-default" data-toggle="tab"><i class="icon-desktop"></i> Requests</a></li>
              </ul>
              <div class="tab-content margin-top-20">
                <div class="tab-pane active" id="tab1">
                  <h2 class="h3">Hardware</h2>
                  <!-- start -->
                  <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                      <tbody>
                        <tr>
                          <td><span class="text-grey">Product:</span> <a href="<?php echo WEB_ROOT;?>products/index.php">Cisco 7301 Router</a></td>
                          <td><span class="text-grey">Vendor:</span></td>
                        </tr>
                        <tr>
                          <td><span class="text-grey">Acquisition Date:</span> Fri, 22 Jul at 11:53 am</td>
                          <td><span class="text-grey">Warranty Expiry Date:</span> Fri, 22 Jul at 12:08 pm</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- end -->
                  <h3 class="h3">Router</h3>
                  <!-- start -->
                  <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                      <tbody>
                        <tr>
                          <td><span class="text-grey">Product:</span> <a href="#">Cisco 7301 Router</a></td>
                          <td><span class="text-grey">Vendor:</span></td>
                        </tr>
                        <tr>
                          <td><span class="text-grey">Acquisition Date:</span> Fri, 22 Jul at 11:53 am</td>
                          <td><span class="text-grey">Warranty Expiry Date:</span> Fri, 22 Jul at 12:08 pm</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- end --> 
                </div>
                <div class="tab-pane" id="tab2">
                  <p> There are no Relationships available. <a href="addnew" class="green">Add new</a> </p>
                </div>
                <div class="tab-pane" id="tab3">
                  <p> There are no Asset available. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-5 col-md-4 col-lg-3 col-xs-12 margin-top-10">
          <div class="x_panel tile">
            <div class="x_title"> <a href="#" class="btn btn-success noBorderRadius" data-toggle="modal" data-target="#attach">Attach</a> <a href="<?php echo WEB_ROOT;?>assets/new" class="btn btn-dark noBorderRadius">Edit</a> <a href="#" class="btn btn-danger noBorderRadius">Delete</a>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <p><a href="#" data-toggle="tooltip" data-placement="top" title="Product">Apple MacBook Air 13</a></p>
              <form action="#" class="checkList">
                <h5 class="weight-600 padding-top-5">Edit Properties</h5>
                <label>Impact</label>
                <select class="form-control margin-bottom-10">
                  <option>Low</option>
                  <option>Medium</option>
                  <option>High</option>
                </select>
                <label>Asset State</label>
                <select class="form-control margin-bottom-10">
                  <option>Choose option</option>
                  <option>Option one</option>
                  <option>Option two</option>
                  <option>Option three</option>
                  <option>Option four</option>
                </select>
                <label>Location</label>
                <div class="form-group">
                  <select class="select2_group form-control margin-bottom-10">
                    <option selected="selected" value="">Select Location</option>
                    <optgroup label="Alaskan/Hawaiian Time Zone">
                    <option value="AK">Alaska</option>
                    <option value="HI">Hawaii</option>
                    </optgroup>
                    <optgroup label="Pacific Time Zone">
                    <option value="CA">California</option>
                    <option value="NV">Nevada</option>
                    <option value="OR">Oregon</option>
                    <option value="WA">Washington</option>
                    </optgroup>
                    <optgroup label="Mountain Time Zone">
                    <option value="AZ">Arizona</option>
                    <option value="CO">Colorado</option>
                    <option value="ID">Idaho</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NM">New Mexico</option>
                    <option value="ND">North Dakota</option>
                    <option value="UT">Utah</option>
                    <option value="WY">Wyoming</option>
                    </optgroup>
                  </select>
                </div>
                <label>Department</label>
                <select class="form-control margin-bottom-10">
                  <option>Choose Department</option>
                  <option>Option one</option>
                  <option>Option two</option>
                  <option>Option three</option>
                  <option>Option four</option>
                </select>
                <label>Used By</label>
                <input type="text" class="form-control margin-bottom-10" placeholder="Andrea">
                <label>Managed By</label>
                <select class="form-control margin-bottom-10">
                  <option>---</option>
                  <option>Option one</option>
                  <option>Option two</option>
                  <option>Option three</option>
                  <option>Option four</option>
                </select>
                <p class="text-right">
                  <button type="button" class="btn btn-dark noBorderRadius">Update<i class="icon-angle-double-right"></i></button>
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include("../include/footer.php"); ?>
  </div>
</div>
<div class="modal fade" id="attach" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3>Attach a Relationship</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-6">
            <p class="h4 padding-bottom-10">Relationship</p>
            <ul class="list-right">
              <li><a href="#" data-toggle="modal" data-target="#depends_on">Depends On</a></li>
              <li><a href="#">Uses</a></li>
            </ul>
          </div>
          <div class="col-sm-6">
            <p class="h4 padding-bottom-10">Inverse Relationship</p>
            <ul class="list-right">
              <li><a href="#">Used By</a></li>
              <li><a href="#">Used By</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-dark" data-dismiss="modal">Continue</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
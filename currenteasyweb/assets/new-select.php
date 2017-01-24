<!DOCTYPE html>
<html lang="en">
<body class="nav-md">
<style>.panel-heading.collapsed {
    margin-bottom: 20px !important;
}</style>
<div class="container body">
  <div class="main_container">
    <?php include("../include/top-nav.php"); ?>
    <?php include("../include/right-nav.php"); ?>
    <div class="right_col" role="main">
      <div class="row checkList">
        <div class="col-md-9 col-sm-8 col-xs-12 margin-top-10">
        <?php include("../classes/Include_all.php"); ?>
        <form action="" method="post" class="checkList">
          <div class="x_panel tile">
            <div class="x_title">
              <div class="row">
                <div class="col-lg-12">
                  <div class="row" style="background:#fff;" data-spy="affix" data-offset-top="197">
                    <div class="col-lg-7 padding-top-10"> <a href="<?php echo WEB_ROOT;?>assets/index.php" class="h4"><i class="icon-left-small"></i>Back to Items List</a> </div>
                    <div class="col-lg-5 text-right MrTpMd-10"> <a href="<?php echo WEB_ROOT;?>assets/index.php" class="btn btn-danger btn-round">Cancel</a>
                      <div class="btn-group">
                        <input type="submit" value="Save" name="add_item" class="btn btn-dark btn-round">
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
                  <input type="text" name="display_name" class="form-control" required>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-xs-12 padding-bottom-10">
                  <label>Assets Type <span class="text-red">*</span></label>
                  <select class="form-control" name="assets_type_id">
                    <?php
                        $assets_object=Assets::Assets_type();
                        foreach ($assets_object as $view_assets_type) {
                        echo   '<option value="'.$view_assets_type["id"].'">'.$view_assets_type["name"].'</option>';
                        }
                        ?>
                  </select>
                </div>
                <div class="col-sm-6 col-xs-12 padding-bottom-10">
                  <label>Impact <span class="text-red"></span></label>
                  <select class="form-control" name="impact_id">
                    <?php
					$impact_object=Assets::Impact();
					foreach ($impact_object as $view_impact) {
					echo   '<option value="'.$view_impact["id"].'">'.$view_impact["name"].'</option>';
					}
					?>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-xs-12 padding-bottom-10">
                  <label>Department <span class="text-red">*</span></label>
                  <select class="form-control" name="department_id">
                    <?php
					$dept_object=Assets::Department();
					foreach ($dept_object as $view_dept) {
					echo   '<option value="'.$view_dept["id"].'">'.$view_dept["name"].'</option>';
					}
					?>
                  </select>
                </div>
              </div>
              <p class="margin-top-10">Description</p>
              
              
              <!--end-->
              
              <textarea type="text" name="description" rows="6" cols="20" style="width:100%; border:solid 1px #ccc;  "></textarea>


              <!-- =================================== ABC ::::::::::: Start ===================================================== -->

              <div class="accordion-down">
                <div class="accordion padding-top-30" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading1" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                    <h4 class="panel-title">Business ServiceProperties</h4>
                    </a>
                    <div id="collapse1" class="panel-collapse collapse in padding-top-10 padding-bottom-20"  role="tabpanel" aria-labelledby="heading1">
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>SLA(Availability in %)</label>
                          <input type="text" name="sla" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- =================================== ABC ::::::::::: Closed ===================================================== -->



              <!-- =================================== Access Point ::::::::::: Start =============================================== -->

                <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading2" data-toggle="collapse" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                    <h4 class="panel-title">Business ServiceProperties</h4>
                    </a>
                    <div id="collapse2" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading2">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>Warranty</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Acquisition Date</label>
                          <input type="text" name="acquisition-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Warranty Expiry Date</label>
                          <input type="text" name="warranty-expiry-date" class="form-control" id="datetimepicker_dark1"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Domain</label>
                          <input type="text" name="domain" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset State<span class="text-red">*</span></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset Tag</label>
                          <input type="text" name="asset-tag" id="tag" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Serial Number</label>
                          <input type="text" name="serial-number" id="serial-number" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading3" data-toggle="collapse" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                    <h4 class="panel-title">Access PointProperties</h4>
                    </a>
                    <div id="collapse3" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading3">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Firmware</label>
                          <input type="text" name="firmware" id="firmware" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" id="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>IP Address</label>
                          <input type="text" name="ip-address" id="ip-address" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Ports</label>
                          <input type="text" name="ports" id="ports" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>MAC Address</label>
                          <input type="text" name="mac-address" id="mac-address" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Subnet Mask</label>
                          <input type="text" name="subnet-mask" id="subnet-mask" class="form-control" required>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <!-- =================================== Access Point ::::::::::: Closed =============================================== -->



              <!-- =================================== Aix Server ::::::::::: Start =============================== -->

                <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading4" data-toggle="collapse" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
                    <h4 class="panel-title">HardwareProperties</h4>
                    </a>
                    <div id="collapse4" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading4">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>Warranty</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Acquisition Date</label>
                          <input type="text" name="acquisition-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Warranty Expiry Date</label>
                          <input type="text" name="warranty-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Domain</label>
                          <input type="text" name="domain" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset State<span class="text-red">*</span></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset Tag</label>
                          <input type="text" name="asset-tag" id="tag" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Serial Number</label>
                          <input type="text" name="serial-number" id="serial-number" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading5" data-toggle="collapse" href="#collapse5" aria-expanded="true" aria-controls="collapse5">
                    <h4 class="panel-title">ComputerProperties</h4>
                    </a>
                    <div id="collapse5" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading5">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>OS</label>
                          <select class="form-control">
                            <option>.....</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>OS Version</label>
                          <input type="text" name="os-version" id="os-version" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>OS Service Pack</label>
                          <input type="text" name="os-service" id="os-service" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Memory(GB)</label>
                          <input type="text" name="memory" id="memory" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Disk Space(GB)</label>
                          <input type="text" name="disk-space" id="disk-space" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>CPU Speed(GHz)</label>
                          <input type="text" name="cpu-speed" id="cpu-speed" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>CPU Core Count</label>
                          <input type="text" name="cpu-core" id="cpu-core" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>MAC Address</label>
                          <input type="text" name="mc-address" id="address" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>UUID</label>
                          <input type="text" name="uuid" id="uuid" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Hostname</label>
                          <input type="text" name="hostname" id="hostname" class="form-control" required>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <!-- =================================== Aix Server ::::::::::: Closed ================================= -->


              <!-- =================================== Apache ::::::::::: Closed =============================================== -->

              <div class="accordion-down">
                <div class="accordion padding-top-30" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading6" data-toggle="collapse" href="#collapse6" aria-expanded="true" aria-controls="collapse6">
                    <h4 class="panel-title">SoftwareProperties</h4>
                    </a>
                    <div id="collapse6" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading6">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>Warranty</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Acquisition Date</label>
                          <input type="text" name="acquisition_date" id="acquisition_date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Warranty Expiry Date</label>
                          <input type="text" name="warranty-expiry-date" id="warranty-expiry" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Key</label>
                          <input type="text" name="license-key" id="license-key" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Version</label>
                          <input type="text" name="version" id="version" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Type</label>
                            <select class="form-control">
                                <option>.....</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installed Machine</label>
                            <select class="form-control">
                                <option>.....</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installation Path</label>
                          <input type="text" name="installation-path" id="installation-path" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <!-- =================================== Apache ::::::::::: Closed =============================================== -->


              <!-- =================================== Application ::::::::::: Start =============================================== -->

                <div class="accordion-down">
                <div class="accordion padding-top-30" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading7" data-toggle="collapse" href="#collapse7" aria-expanded="true" aria-controls="collapse7">
                    <h4 class="panel-title">SoftwareProperties</h4>
                    </a>
                    <div id="collapse7" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading7">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>License Validity</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installation Date</label>
                          <input type="text" name="installation-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Expiry Date</label>
                          <input type="text" name="last-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Key</label>
                          <input type="text" name="license-key" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Version</label>
                          <input type="text" name="version" class="form-control" required>
                        </div>
                        
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Type<span class="text-red">*</span></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Open Source</option>
                            <option>Commercial</option>
                           
                        </select>
                        </div>
                       <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installed Machine<span class="text-red">*</span></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Mahender Item Add Moniter</option>
                                                      
                        </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installation Path</label>
                          <input type="text" name="installation-path" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" class="form-control" id="datetimepicker_dark"/>
                        </div>

                      </div>
                    </div>
                  </div>
                 
                </div>
              </div>


              <!-- =================================== Application ::::::::::: Closed =============================================== -->


              <!-- =================================== AWS ::::::::::: Start =============================================== -->

                <div class="accordion-down">
                <div class="accordion padding-top-30" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading8" data-toggle="collapse" href="#collapse8" aria-expanded="true" aria-controls="collapse8">
                    <h4 class="panel-title">CloudProperties</h4>
                    </a>
                    <div id="collapse8" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading8">
                      
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      
                      
                      
                      
                    </div>
                  </div>
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading9" data-toggle="collapse" href="#collapse9" aria-expanded="true" aria-controls="collapse9">
                    <h4 class="panel-title">AWSProperties</h4>
                    </a>
                    <div id="collapse9" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading9">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Account</label>
                          <select class="form-control">
                            <option>.....</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Region</label>
                          <select class="form-control">
                            <option>.....</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                          </select>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Availity Zone</label>
                          <input type="text" name="availity-zone" id="os-service" class="form-control" required>
                        </div>
                        
                      </div>
                      
                      
                     
                    </div>
                  </div>
                </div>
              </div>

              <!-- =================================== AWS ::::::::::: Closed =============================================== -->


              <!-- =================================== Backup Service ::::::::::: Start =========================================== -->

                <div class="accordion-down">
                <div class="accordion padding-top-30" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading10" data-toggle="collapse" href="#collapse10" aria-expanded="true" aria-controls="collapse10">
                    <h4 class="panel-title">ITServiceProperties</h4>
                    </a>
                    <div id="collapse10" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading10">
                      
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>SLA(Availability in %)</label>
                          <input type="text" name="sla" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Operational Status</label>
                          <input type="text" name="operational-status" class="form-control" required>
                        </div>
                      </div>
                      
                     
                      
                      
                    </div>
                  </div>
                 
                </div>
              </div>




              <!-- =================================== Backup Service ::::::::::: Closed ======================================== -->


              <!-- =================================== Business Service ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                    <div class="accordion padding-top-30" id="accordion" role="tablist" >
                      <div class="panel"> <a class="panel-heading" role="tab" id="heading11" data-toggle="collapse" href="#collapse11" aria-expanded="true" aria-controls="collapse11">
                        <h4 class="panel-title">Business ServiceProperties</h4>
                        </a>
                        <div id="collapse11" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading11">
                          
                          <div class="row">
                            <div class="col-sm-6 col-xs-6 padding-bottom-10">
                              <label>SLA(Availability in %)</label>
                              <input type="text" name="sla" class="form-control" required>
                            </div>
                            <div class="col-sm-6 col-xs-6 padding-bottom-10">
                              <label>Cost</label>
                              <input type="text" name="cost" class="form-control" required>
                            </div>
                          </div>
                                             
                          
                          
                        </div>
                      </div>
                     
                    </div>
                  </div>



              <!-- =================================== Business Service ::::::::::: Closed ======================================== -->



              <!-- =================================== Cloud ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                    <div class="accordion" id="accordion" role="tablist" >
                      <div class="panel"> <a class="panel-heading" role="tab" id="heading12" data-toggle="collapse" href="#collapse12" aria-expanded="true" aria-controls="collapse12">
                        <h4 class="panel-title">CloudProperties</h4>
                        </a>
                        <div id="collapse12" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading12">
                          
                          <div class="row">
                            <div class="col-sm-6 col-xs-6 padding-bottom-10">
                              <label>Cost</label>
                              <input type="text" name="cost" class="form-control" required>
                            </div>
                            <div class="col-sm-6 col-xs-6 padding-bottom-10">
                              <label>Last Audit</label>
                              <input type="text" name="last_date" class="form-control" id="datetimepicker_dark"/>
                            </div>
                          </div>
                          
                          
                          
                          
                        </div>
                      </div>
                      
                    </div>
                  </div>




              <!-- =================================== Cloud ::::::::::: Closed ======================================== -->


              <!-- =================================== Computer ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                <div class="accordion padding-top-30" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading13" data-toggle="collapse" href="#collapse13" aria-expanded="true" aria-controls="collapse13">
                    <h4 class="panel-title">HardwareProperties</h4>
                    </a>
                    <div id="collapse13" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading13">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>

                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                       
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>Warranty</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Acquisition Date</label>
                          <input type="text" name="acquisition_date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Warranty Expiry Date</label>
                          <input type="text" name="warranty-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Domain</label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Open Source</option>
                            <option>Commercial</option>
                           
                        </select>
                        </div>
                       <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset State<span class="text-red">*</span></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Mahender Item Add Moniter</option>
                                                      
                        </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset Tag</label>
                          <input type="text" name="asset-tag" id="last-audit-date"  class="form-control" />
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Serial Number</label>
                          <input type="text" name="serial-number" class="form-control"/>
                        </div>

                      </div>

                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        
                      </div>



                    </div>
                  </div>
                  
                 <div class="panel"> <a class="panel-heading" role="tab" id="heading14" data-toggle="collapse" href="#collapse14" aria-expanded="true" aria-controls="collapse14">
                    <h4 class="panel-title">ComputerProperties</h4>
                    </a>
                    <div id="collapse14" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading14">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>OS</label>
                          <select class="form-control">
                            <option>.....</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>OS Version</label>
                          <input type="text" name="os-service" id="os-service" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>OS Service Pack</label>
                          <input type="text" name="os-service" id="os-service" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Memory(GB)</label>
                          <input type="text" name="memory" id="os-service" class="form-control" required>
                        </div>
                        
                      </div>

                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Disk Space (GB)</label>
                          <input type="text" name="disk-space" id="os-service" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>CPU Speed(GHz)</label>
                          <input type="text" name="cpu-speed" id="os-service" class="form-control" required>
                        </div>
                        
                      </div>
                      
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>CPU Core Count</label>
                          <input type="text" name="cpu-core" id="os-service" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>MAC Address</label>
                          <input type="text" name="mac-address" id="os-service" class="form-control" required>
                        </div>
                        
                      </div>

                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>UUID</label>
                          <input type="text" name="uuid" id="os-service" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Hostname</label>
                          <input type="text" name="hostname" id="os-service" class="form-control" required>
                        </div>
                        
                      </div>                      
                      
                     
                    </div>
                  </div>




                </div>
              </div>


              <!-- =================================== Computer ::::::::::: Closed ======================================== -->


              <!-- =================================== Consumable ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading15" data-toggle="collapse" href="#collapse15" aria-expanded="true" aria-controls="collapse15">
                    <h4 class="panel-title">ConsumableProperties</h4>
                    </a>
                    <div id="collapse15" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading15">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>

                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                       
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>State</label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                         <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Quantity</label>
                          <input type="text" name="quantity" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        
                      </div>
                      
                      
                      

                      

                      



                    </div>
                  </div>
                  
                 
                </div>
              </div>



              <!-- =================================== Consumable ::::::::::: Closed ======================================== -->



              <!-- =================================== Database ::::::::::: Start ======================================== -->

                    <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading16" data-toggle="collapse" href="#collapse16" aria-expanded="true" aria-controls="collapse16">
                    <h4 class="panel-title">SoftwareProperties</h4>
                    </a>
                    <div id="collapse16" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading16">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                           <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>License Validity</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installation Date</label>
                          <input type="text" name="installation-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Expiry Date</label>
                          <input type="text" name="license-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Key</label>
                          <input type="text" name="license-key" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Version</label>
                          <input type="text" name="version" class="form-control" required>
                        </div>
                        
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Type<span class="text-red">*</span></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Open Source</option>
                            <option>Commercial</option>
                           
                        </select>
                        </div>
                       <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installed Machine<span class="text-red">*</span></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Mahender Item Add Moniter</option>
                                                      
                        </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installation Path</label>
                          <input type="text" name="installation-path" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" class="form-control" id="datetimepicker_dark"/>
                        </div>

                      </div>
                    </div>
                  </div>
                 
                </div>
              </div>



              <!-- =================================== Database ::::::::::: Closed ======================================== -->



              <!-- =================================== DataCenter ::::::::::: Start ======================================== -->

              <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading17" data-toggle="collapse" href="#collapse17" aria-expanded="true" aria-controls="collapse17">
                    <h4 class="panel-title">HardwareProperties</h4>
                    </a>
                    <div id="collapse17" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading17">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                           <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>Warranty</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Acquisition Date</label>
                          <input type="text" name="acquisition-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Warranty Expiry Date</label>
                          <input type="text" name="warranty-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Domain</label>
                          <select class="form-control">
                                    <option>Choose Option</option>
                                    <option>Option</option>
                                    <option>Option</option>
                                    <option>Option</option>
                                    <option>Option</option>
                                </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset State</label>
                          <select class="form-control">
                                    <option>In Stoke</option>
                                    <option>In Transit</option>
                                    <option>In Use</option>
                                    <option>Missing</option>
                                    <option>Retired</option>
                                </select>
                        </div>
                        
                      </div>
                      
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset Tag</label>
                          <input type="text" name="asset-tag" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Serial Number</label>
                          <input type="text" name="serial-number" class="form-control" id="datetimepicker_dark"/>
                        </div>

                      </div>

                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                 
                </div>
              </div>


              <!-- =================================== DataCenter ::::::::::: Closed ======================================== -->


              <!-- =================================== Desktop ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                <div class="accordion padding-top-30" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading18" data-toggle="collapse" href="#collapse18" aria-expanded="true" aria-controls="collapse18">
                    <h4 class="panel-title">HardwareProperties</h4>
                    </a>
                    <div id="collapse18" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading18">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                           <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>Warranty</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Acquisition Date</label>
                          <input type="text" name="acquisition-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Warranty Expiry Date</label>
                          <input type="text" name="warranty-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Domain</label>
                          <select class="form-control">
                                    <option>Choose Option</option>
                                    <option>Option</option>
                                    <option>Option</option>
                                    <option>Option</option>
                                    <option>Option</option>
                                </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset State</label>
                          <select class="form-control">
                                    <option>In Stoke</option>
                                    <option>In Transit</option>
                                    <option>In Use</option>
                                    <option>Missing</option>
                                    <option>Retired</option>
                                </select>
                        </div>
                        
                      </div>
                      
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset Tag</label>
                          <input type="text" name="asset-tag" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Serial Number</label>
                          <input type="text" name="serial-number" class="form-control" id="datetimepicker_dark"/>
                        </div>

                      </div>

                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        
                      </div>
                    </div>
                  </div>


                  <div class="panel"> <a class="panel-heading" role="tab" id="headingTwo" data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <h4 class="panel-title">ComputerProperties</h4>
                    </a>
                    <div id="collapseTwo" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>OS</label>
                          <select class="form-control">
                            <option>.....</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>OS Version</label>
                          <input type="text" name="os-version" id="os-service" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>OS Service Pack</label>
                          <input type="text" name="os-service" id="os-service" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Memory(GB)</label>
                          <input type="text" name="memory" id="os-service" class="form-control" required>
                        </div>
                        
                      </div>

                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Disk Space (GB)</label>
                          <input type="text" name="disk-space" id="os-service" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>CPU Speed(GHz)</label>
                          <input type="text" name="cpu-speed" id="os-service" class="form-control" required>
                        </div>
                        
                      </div>
                      
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>CPU Core Count</label>
                          <input type="text" name="cpu-core" id="os-service" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>MAC Address</label>
                          <input type="text" name="mac-address" id="os-service" class="form-control" required>
                        </div>
                        
                      </div>

                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>UUID</label>
                          <input type="text" name="uuid" id="os-service" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Hostname</label>
                          <input type="text" name="hostname" id="os-service" class="form-control" required>
                        </div>
                        
                      </div>                      
                      
                     
                    </div>
                  </div>
                 
                </div>
              </div>



              <!-- =================================== Desktop ::::::::::: Closed ======================================== -->



              <!-- =================================== Disk ::::::::::: Start ======================================== -->

                <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading19" data-toggle="collapse" href="#collapse19" aria-expanded="true" aria-controls="collapse19">
                    <h4 class="panel-title">HardwareProperties</h4>
                    </a>
                    <div id="collapse19" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading19">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                           <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>Warranty</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Acquisition Date</label>
                          <input type="text" name="acquisition-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Warranty Expiry Date</label>
                          <input type="text" name="warranty-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Domain</label>
                          <select class="form-control">
                                    <option>Choose Option</option>
                                    <option>Option</option>
                                    <option>Option</option>
                                    <option>Option</option>
                                    <option>Option</option>
                                </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset State</label>
                          <select class="form-control">
                                    <option>In Stoke</option>
                                    <option>In Transit</option>
                                    <option>In Use</option>
                                    <option>Missing</option>
                                    <option>Retired</option>
                                </select>
                        </div>
                        
                      </div>
                      
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset Tag</label>
                          <input type="text" name="asset-tag" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Serial Number</label>
                          <input type="text" name="serial-number" class="form-control" id="datetimepicker_dark"/>
                        </div>

                      </div>

                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        
                      </div>
                    </div>
                  </div>


                  <div class="panel"> <a class="panel-heading" role="tab" id="headingTwo" data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <h4 class="panel-title">ComputerProperties</h4>
                    </a>
                    <div id="collapseTwo" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Drive Type</label>
                          <select class="form-control">
                            <option>.....</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Disk Space(GB) </label>
                          <input type="text" name="disk-space" id="os-service" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Free Space(GB)</label>
                          <input type="text" name="free-space" id="os-service" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Free Space Checked On</label>
                          <input type="text" name="free-space-checked" id="os-service" class="form-control" required>
                        </div>
                        
                      </div>

                    </div>
                  </div>
                 
                </div>
              </div>

              <!-- =================================== Disk ::::::::::: Closed ======================================== -->


              <!-- =================================== Document ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading20" data-toggle="collapse" href="#collapse20" aria-expanded="true" aria-controls="collapse20">
                    <h4 class="panel-title">DocumentProperties</h4>
                    </a>
                    <div id="collapse20" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading20">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Status</label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Type</label>
                           <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Version</label>
                          <input type="text" name="version" class="form-control" required>
                        </div>
                        
                      </div>
                      
                    </div>
                  </div>

                 
                </div>
              </div>


              <!-- =================================== Document ::::::::::: Closed ======================================== -->


              <!-- =================================== EBS ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading21" data-toggle="collapse" href="#collapse21" aria-expanded="true" aria-controls="collapse21">
                    <h4 class="panel-title">CloudProperties</h4>
                    </a>
                    <div id="collapse21" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading21">
                      
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      
                      
                      
                      
                    </div>
                  </div>
                  <div class="panel"> <a class="panel-heading" role="tab" id="headingTwo" data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <h4 class="panel-title">AWSProperties</h4>
                    </a>
                    <div id="collapseTwo" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Account</label>
                          <select class="form-control">
                            <option>.....</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Region</label>
                          <select class="form-control">
                            <option>.....</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                          </select>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Availibity Zone</label>
                          <input type="text" name="availibity-zone" id="os-service" class="form-control" required>
                        </div>
                        
                      </div>
                      
                      
                     
                    </div>
                  </div>

                  <div class="panel"> <a class="panel-heading" role="tab" id="heading22" data-toggle="collapse" href="#collapse22" aria-expanded="true" aria-controls="collapse22">
                    <h4 class="panel-title">EBSProperties</h4>
                    </a>
                    <div id="collapse22" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading22">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Volume ID</label>
                          <input type="text" name="volume-id" id="os-service" class="form-control" required>
                        </div>
                        
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Size</label>
                          <input type="text" name="size" id="os-service" class="form-control" required>
                        </div>
                        
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Created</label>
                          <input type="text" name="created" id="os-service" class="form-control" required>
                        </div>

                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>State</label>
                          <input type="text" name="state" id="os-service" class="form-control" required>
                        </div>
                        
                        
                      </div>

                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Volume Type</label>
                          <input type="text" name="volume-type" id="os-service" class="form-control" required>
                        </div>

                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Snapshot</label>
                          <input type="text" name="snapshot" id="os-service" class="form-control" required>
                        </div>
                        
                        
                      </div>

                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Encrypted</label>
                          <input type="text" name="encrypted" id="os-service" class="form-control" required>
                        </div>

                        
                        
                        
                      </div>
                      
                      
                     
                    </div>
                  </div>

                </div>
              </div>


              <!-- =================================== EBS ::::::::::: Closed ======================================== -->


              <!-- =================================== EC2 ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading23" data-toggle="collapse" href="#collapse23" aria-expanded="true" aria-controls="collapse23">
                    <h4 class="panel-title">CloudProperties</h4>
                    </a>
                    <div id="collapse23" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading23">
                      
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      
                      
                      
                      
                    </div>
                  </div>
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading24" data-toggle="collapse" href="#collapse24" aria-expanded="true" aria-controls="collapse24">
                    <h4 class="panel-title">AWSProperties</h4>
                    </a>
                    <div id="collapse24" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading24">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Account</label>
                          <select class="form-control">
                            <option>.....</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Region</label>
                          <select class="form-control">
                            <option>.....</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                          </select>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Availibity Zone</label>
                          <input type="text" name="availibity-zone" id="os-service" class="form-control" required>
                        </div>
                        
                      </div>
                      
                      
                     
                    </div>
                  </div>

                  <div class="panel"> <a class="panel-heading" role="tab" id="heading25" data-toggle="collapse" href="#collapse25" aria-expanded="true" aria-controls="collapse25">
                    <h4 class="panel-title">EC2Properties</h4>
                    </a>
                    <div id="collapse25" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading25">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Instance ID</label>
                          <input type="text" name="instance-id" id="os-service" class="form-control" required>
                        </div>
                        
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Instance Type</label>
                          <input type="text" name="instance-type" id="os-service" class="form-control" required>
                        </div>
                        
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Private IP</label>
                          <input type="text" name="private-ip" id="os-service" class="form-control" required>
                        </div>

                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Private DNS</label>
                          <input type="text" name="private-dns" id="os-service" class="form-control" required>
                        </div>
                        
                        
                      </div>

                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Public IP</label>
                          <input type="text" name="public-ip" id="os-service" class="form-control" required>
                        </div>

                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Public DNS</label>
                          <input type="text" name="public-dns" id="os-service" class="form-control" required>
                        </div>
                        
                        
                      </div>

                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>AMI ID</label>
                          <input type="text" name="ami-id" id="os-service" class="form-control" required>
                        </div>

                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Instance State</label>
                          <input type="text" name="instance-state" id="os-service" class="form-control" required>
                        </div>

                        
                        
                        
                      </div>
                      
                      
                     
                    </div>
                  </div>

                </div>
              </div>


              <!-- =================================== EC2 ::::::::::: Closed ======================================== -->


              <!-- =================================== Email Service ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading26" data-toggle="collapse" href="#collapse26" aria-expanded="true" aria-controls="collapse26">
                    <h4 class="panel-title">IT ServiceProperties</h4>
                    </a>
                    <div id="collapse26" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading26">
                      
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>SLA (Availability in %)</label>
                          <input type="text" name="sla" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Operational Status</label>
                          <input type="text" name="operational-status" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Service Support Hours</label>
                          <input type="text" name="service-support" class="form-control" required>
                        </div>
                        
                      </div>
                      
                      
                      
                      
                    </div>
                  </div>
                  

                  

                </div>
              </div>


              <!-- =================================== Email Service ::::::::::: Closed ======================================== -->


              <!-- =================================== Firewall ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading27" data-toggle="collapse" href="#collapse27" aria-expanded="true" aria-controls="collapse27">
                    <h4 class="panel-title">HardwareProperties</h4>
                    </a>
                    <div id="collapse27" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading27">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>Warranty</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Acquisition Date</label>
                          <input type="text" name="acquisition-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Warranty Expiry Date</label>
                          <input type="text" name="warranty-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Domain</label>
                          <input type="text" name="domain" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset State<span class="text-red">*</span></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset Tag</label>
                          <input type="text" name="asset-tag" id="tag" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Serial Number</label>
                          <input type="text" name="serial-number" id="serial-number" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading28" data-toggle="collapse" href="#collapse28" aria-expanded="true" aria-controls="collapse28">
                    <h4 class="panel-title">FirewallProperties</h4>
                    </a>
                    <div id="collapse28" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading28">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Firmware</label>
                          <input type="text" name="firmware" id="firmware" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Firmware Version</label>
                          <input type="text" name="firmware-version" id="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>IP Address</label>
                          <input type="text" name="ip-address" id="ip-address" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Ports</label>
                          <input type="text" name="ports" id="ports" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>MAC Address</label>
                          <input type="text" name="mac-address" id="mac-address" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Subnet Mask</label>
                          <input type="text" name="subnet-mask" id="subnet-mask" class="form-control" required>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <!-- =================================== Firewall ::::::::::: Closed ======================================== -->


              <!-- =================================== Hardware ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading29" data-toggle="collapse" href="#collapse29" aria-expanded="true" aria-controls="collapse29">
                    <h4 class="panel-title">HardwareProperties</h4>
                    </a>
                    <div id="collapse29" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading29">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>Warranty</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Acquisition Date</label>
                          <input type="text" name="acquisition-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Warranty Expiry Date</label>
                          <input type="text" name="warranty-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Domain</label>
                          <input type="text" name="domain" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset State<span class="text-red">*</span></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset Tag</label>
                          <input type="text" name="asset-tag" id="tag" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Serial Number</label>
                          <input type="text" name="serial-number" id="serial-number" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>


              <!-- =================================== Hardware ::::::::::: Closed ======================================== -->

              <!-- =================================== Hosting Service ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading30" data-toggle="collapse" href="#collapse30" aria-expanded="true" aria-controls="collapse30">
                    <h4 class="panel-title">IT ServiceProperties</h4>
                    </a>
                    <div id="collapse30" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading30">
                      
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>SLA (Availability in %)</label>
                          <input type="text" name="sla" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Operational Status</label>
                          <input type="text" name="operational-status" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Service Support Hours</label>
                          <input type="text" name="service-support" class="form-control" required>
                        </div>
                        
                      </div>
                      
                      
                      
                      
                    </div>
                  </div>
                                 

                </div>
              </div>


              <!-- =================================== Hosting Service ::::::::::: Closed ======================================== -->


              <!-- =================================== IIS ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading31" data-toggle="collapse" href="#collapse31" aria-expanded="true" aria-controls="collapse31">
                    <h4 class="panel-title">SoftwareProperties</h4>
                    </a>
                    <div id="collapse31" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading31">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>License Validity</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installation Date</label>
                          <input type="text" name="installation-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Expiry Date</label>
                          <input type="text" name="license-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Key</label>
                          <input type="text" name="license-key" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Version</label>
                          <input type="text" name="version" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Type</label>
                          <select class="form-control">
                                    <option>...</option>
                                    <option>Open Source</option>
                                    <option>Commercial</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installed Machine</label>
                          <select class="form-control">
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installation Path</label>
                          <input type="text" class="installation-path" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>


              <!-- =================================== IIS ::::::::::: Closed ======================================== -->

              <!-- =================================== IT Service ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading32" data-toggle="collapse" href="#collapse32" aria-expanded="true" aria-controls="collapse32">
                    <h4 class="panel-title">IT ServiceProperties</h4>
                    </a>
                    <div id="collapse32" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading32">
                      
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>SLA (Availability in %)</label>
                          <input type="text" name="sla" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Operational Status</label>
                          <input type="text" name="operational-status" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Service Support Hours</label>
                          <input type="text" name="service-support" class="form-control" required>
                        </div>
                        
                      </div>
                      
                      
                      
                      
                    </div>
                  </div>
                                 

                </div>
              </div>


              <!-- =================================== IT Service ::::::::::: Closed ======================================== -->


              <!-- =================================== Linux ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading33" data-toggle="collapse" href="#collapse33" aria-expanded="true" aria-controls="collapse33">
                    <h4 class="panel-title">SoftwareProperties</h4>
                    </a>
                    <div id="collapse33" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading33">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>License Validity</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installation Date</label>
                          <input type="text" name="installation-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Expiry Date</label>
                          <input type="text" name="license-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Key</label>
                          <input type="text" name="license-key" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Version</label>
                          <input type="text" name="version" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Type</label>
                          <select class="form-control">
                                    <option>...</option>
                                    <option>Open Source</option>
                                    <option>Commercial</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installed Machine</label>
                          <select class="form-control">
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installation Path</label>
                          <input type="text" class="installation-path" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>


              <!-- =================================== Linux ::::::::::: Closed ======================================== -->


              <!-- =================================== Mac OS X ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading34" data-toggle="collapse" href="#collapse34" aria-expanded="true" aria-controls="collapse34">
                    <h4 class="panel-title">SoftwareProperties</h4>
                    </a>
                    <div id="collapse34" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading34">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>License Validity</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installation Date</label>
                          <input type="text" name="installation-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Expiry Date</label>
                          <input type="text" name="license-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Key</label>
                          <input type="text" name="license" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Version</label>
                          <input type="text" name="version" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Type</label>
                          <select class="form-control">
                                    <option>...</option>
                                    <option>Open Source</option>
                                    <option>Commercial</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installed Machine</label>
                          <select class="form-control">
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installation Path</label>
                          <input type="text" class="installation-path" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>


              <!-- =================================== Mac OS X ::::::::::: Closed ======================================== -->

              <!-- =================================== Microsoft ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading35" data-toggle="collapse" href="#collapse35" aria-expanded="true" aria-controls="collapse35">
                    <h4 class="panel-title">SoftwareProperties</h4>
                    </a>
                    <div id="collapse35" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading35">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>License Validity</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installation Date</label>
                          <input type="text" name="installation-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Expiry Date</label>
                          <input type="text" name="license-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Key</label>
                          <input type="text" name="license-key" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Version</label>
                          <input type="text" name="version" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Type</label>
                          <select class="form-control">
                                    <option>...</option>
                                    <option>Open Source</option>
                                    <option>Commercial</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installed Machine</label>
                          <select class="form-control">
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installation Path</label>
                          <input type="text" class="installation-path" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>


              <!-- =================================== Microsoft ::::::::::: Closed ======================================== -->


              <!-- =================================== Mobile ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading36" data-toggle="collapse" href="#collapse36" aria-expanded="true" aria-controls="collapse36">
                    <h4 class="panel-title">HardwareProperties</h4>
                    </a>
                    <div id="collapse36" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading36">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>Warranty</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Acquisition Date</label>
                          <input type="text" name="acquisition-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Warranty Expiry Date</label>
                          <input type="text" name="warranty-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Domain</label>
                          <select class="form-control">
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset State</label>
                          <select class="form-control">
                                    <option>In Stock</option>
                                    <option>In Transit</option>
                                    <option>Missing</option>
                                    <option>In Use</option>
                                    <option>Retired</option>
                                  
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset Tag</label>
                          <input type="text" name="asset-tag" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Serial Number</label>
                          <input type="text" name="serial-number" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>


              <!-- =================================== Mobile ::::::::::: Closed ======================================== -->


              <!-- =================================== Mobile Devices ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading37" data-toggle="collapse" href="#collapse37" aria-expanded="true" aria-controls="collapse37">
                    <h4 class="panel-title">HardwareProperties</h4>
                    </a>
                    <div id="collapse37" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading37">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>Warranty</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Acquisition Date</label>
                          <input type="text" name="acquisition-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Warranty Expiry Date</label>
                          <input type="text" name="warranty-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Domain</label>
                          <select class="form-control">
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset State</label>
                          <select class="form-control">
                                    <option>In Stock</option>
                                    <option>In Transit</option>
                                    <option>Missing</option>
                                    <option>In Use</option>
                                    <option>Retired</option>
                                  
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset Tag</label>
                          <input type="text" name="asset-tag" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Serial Number</label>
                          <input type="text" name="serial-number" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>


              <!-- =================================== Mobile Devices ::::::::::: Closed ======================================== -->


              <!-- =================================== Monitor ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading38" data-toggle="collapse" href="#collapse38" aria-expanded="true" aria-controls="collapse38">
                    <h4 class="panel-title">HardwareProperties</h4>
                    </a>
                    <div id="collapse38" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading38">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>Warranty</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Acquisition Date</label>
                          <input type="text" name="acquisition-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Warranty Expiry Date</label>
                          <input type="text" name="warranty-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Domain</label>
                          <select class="form-control">
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset State</label>
                          <select class="form-control">
                                    <option>In Stock</option>
                                    <option>In Transit</option>
                                    <option>Missing</option>
                                    <option>In Use</option>
                                    <option>Retired</option>
                                  
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset Tag</label>
                          <input type="text" name="asset-tag" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Serial Number</label>
                          <input type="text" class="serial-number" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>


              <!-- =================================== Monitor ::::::::::: Closed ======================================== -->


              <!-- =================================== MSSQL ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading39" data-toggle="collapse" href="#collapse39" aria-expanded="true" aria-controls="collapse39">
                    <h4 class="panel-title">SoftwareProperties</h4>
                    </a>
                    <div id="collapse39" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading39">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>License Validity</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installation Date</label>
                          <input type="text" name="installation-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Expiry Date</label>
                          <input type="text" name="license-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Key</label>
                          <input type="text" name="license-key" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Version</label>
                          <input type="text" name="version" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Type</label>
                          <select class="form-control">
                                    <option>...</option>
                                    <option>Open Source</option>
                                    <option>Commercial</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installed Machine</label>
                          <select class="form-control">
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installation Path</label>
                          <input type="text" name="installation-path" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>


              <!-- =================================== MSSQL ::::::::::: Closed ======================================== -->


              <!-- =================================== MySQL ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading40" data-toggle="collapse" href="#collapse40" aria-expanded="true" aria-controls="collapse40">
                    <h4 class="panel-title">SoftwareProperties</h4>
                    </a>
                    <div id="collapse40" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading40">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>License Validity</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installation Date</label>
                          <input type="text" name="installation-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Expiry Date</label>
                          <input type="text" name="license-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Key</label>
                          <input type="text" name="license-key" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Version</label>
                          <input type="text" name="version" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Type</label>
                          <select class="form-control">
                                    <option>...</option>
                                    <option>Open Source</option>
                                    <option>Commercial</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installed Machine</label>
                          <select class="form-control">
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installation Path</label>
                          <input type="text" name="installation-path" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>


              <!-- =================================== MySQL ::::::::::: Closed ======================================== -->


              <!-- =================================== Network ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading41" data-toggle="collapse" href="#collapse41" aria-expanded="true" aria-controls="collapse41">
                    <h4 class="panel-title">NetworkProperties</h4>
                    </a>
                    <div id="collapse41" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading41">
                      
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Bandwidth</label>
                          <input type="text" name="bandwidth" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Network Range</label>
                          <input type="text" name="network-range" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>

                  </div>
                                 

                </div>
              </div>


              <!-- =================================== Network ::::::::::: Closed ======================================== -->


              <!-- =================================== Operating System ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading42" data-toggle="collapse" href="#collapse42" aria-expanded="true" aria-controls="collapse42">
                    <h4 class="panel-title">SoftwareProperties</h4>
                    </a>
                    <div id="collapse42" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading42">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>License Validity</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installation Date</label>
                          <input type="text" name="isntallation-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Expiry Date</label>
                          <input type="text" name="license-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Key</label>
                          <input type="text" name="license-key" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Version</label>
                          <input type="text" name="version" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Type</label>
                          <select class="form-control">
                                    <option>...</option>
                                    <option>Open Source</option>
                                    <option>Commercial</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installed Machine</label>
                          <select class="form-control">
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installation Path</label>
                          <input type="text" name="installation-path" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>


              <!-- =================================== Operating System ::::::::::: Closed ======================================== -->

              <!-- =================================== Other Devices ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading43" data-toggle="collapse" href="#collapse43" aria-expanded="true" aria-controls="collapse43">
                    <h4 class="panel-title">HardwareProperties</h4>
                    </a>
                    <div id="collapse43" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading43">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>Warranty</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Acquisition Date</label>
                          <input type="text" name="acquisition-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Warranty Expiry Date</label>
                          <input type="text" name="warranty-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Domain</label>
                          <select class="form-control">
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset State</label>
                          <select class="form-control">
                                    <option>In Stock</option>
                                    <option>In Transit</option>
                                    <option>Missing</option>
                                    <option>In Use</option>
                                    <option>Retired</option>
                                  
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset Tag</label>
                          <input type="text" name="asset-tag" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Serial Number</label>
                          <input type="text" name="serial-number" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>


              <!-- =================================== Other Devices ::::::::::: Closed ======================================== -->


              <!-- =================================== Printer ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading44" data-toggle="collapse" href="#collapse44" aria-expanded="true" aria-controls="collapse44">
                    <h4 class="panel-title">HardwareProperties</h4>
                    </a>
                    <div id="collapse44" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading44">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>Warranty</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Acquisition Date</label>
                          <input type="text" name="acquisition-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Warranty Expiry Date</label>
                          <input type="text" name="warranty-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Domain</label>
                          <select class="form-control">
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset State</label>
                          <select class="form-control">
                                    <option>In Stock</option>
                                    <option>In Transit</option>
                                    <option>Missing</option>
                                    <option>In Use</option>
                                    <option>Retired</option>
                                  
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset Tag</label>
                          <input type="text" name="asset-tag" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Serial Number</label>
                          <input type="text" name="serial-number" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>


              <!-- =================================== Printer ::::::::::: Closed ======================================== -->


              <!-- =================================== Projector ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading45" data-toggle="collapse" href="#collapse45" aria-expanded="true" aria-controls="collapse45">
                    <h4 class="panel-title">HardwareProperties</h4>
                    </a>
                    <div id="collapse45" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading45">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>Warranty</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Acquisition Date</label>
                          <input type="text" name="acquisition-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Warranty Expiry Date</label>
                          <input type="text" name="warranty-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Domain</label>
                          <select class="form-control">
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset State</label>
                          <select class="form-control">
                                    <option>In Stock</option>
                                    <option>In Transit</option>
                                    <option>Missing</option>
                                    <option>In Use</option>
                                    <option>Retired</option>
                                  
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset Tag</label>
                          <input type="text" name="asset-tag" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Serial Number</label>
                          <input type="text" name="serial-number" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>


              <!-- =================================== Projector ::::::::::: Closed ======================================== -->

              


              <!-- =================================== Rack ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading47" data-toggle="collapse" href="#collapse47" aria-expanded="true" aria-controls="collapse47">
                    <h4 class="panel-title">HardwareProperties</h4>
                    </a>
                    <div id="collapse47" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading47">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>Warranty</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Acquisition Date</label>
                          <input type="text" name="acquisition-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Warranty Expiry Date</label>
                          <input type="text" name="warranty-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Domain</label>
                          <input type="text" name="domain" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset State<span class="text-red">*</span></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset Tag</label>
                          <input type="text" name="asset-tag" id="tag" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Serial Number</label>
                          <input type="text" name="serial-number" id="serial-number" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading48" data-toggle="collapse" href="#collapse48" aria-expanded="true" aria-controls="collapse48">
                    <h4 class="panel-title">RackProperties</h4>
                    </a>
                    <div id="collapse48" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading48">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Footprint</label>
                          <input type="text" name="Footprint" id="firmware" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Power Consumption</label>
                          <input type="text" name="power-consumption" id="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Rack Units</label>
                          <input type="text" name="rack-units" id="ip-address" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Rack Units In Use</label>
                          <input type="text" name="rack" id="ports" class="form-control" required>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>


              <!-- =================================== Firewall ::::::::::: Closed ======================================== -->

                            
              <!-- =================================== RDS ::::::::::: Start =============================================== -->

                <div class="accordion-down">
                <div class="accordion padding-top-30" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading49" data-toggle="collapse" href="#collapse49" aria-expanded="true" aria-controls="collapse49">
                    <h4 class="panel-title">CloudProperties</h4>
                    </a>
                    <div id="collapse49" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading49">
                      
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      
                      
                      
                      
                    </div>
                  </div>
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading50" data-toggle="collapse" href="#collapse50" aria-expanded="true" aria-controls="collapse50">
                    <h4 class="panel-title">AWSProperties</h4>
                    </a>
                    <div id="collapse50" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading50">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Account</label>
                          <select class="form-control">
                            <option>.....</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Region</label>
                          <select class="form-control">
                            <option>.....</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                          </select>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Availity Zone</label>
                          <input type="text" name="availibity-zone" id="os-service" class="form-control" required>
                        </div>
                        
                      </div>
                      
                      
                     
                    </div>
                  </div>

                  <div class="panel"> <a class="panel-heading" role="tab" id="heading51" data-toggle="collapse" href="#collapse51" aria-expanded="true" aria-controls="collapse51">
                    <h4 class="panel-title">RDSProperties</h4>
                    </a>
                    <div id="collapse51" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading51">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Instance Name</label>
                          <input type="text" name="instance-name" id="os-service" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Class</label>
                          <input type="text" name="class" id="os-service" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Storage Type</label>
                          <input type="text" name="storage-type" id="os-service" class="form-control" required>
                        </div>

                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Storage</label>
                          <input type="text" name="storage" id="os-service" class="form-control" required>
                        </div>

                        
                      </div>


                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Engine</label>
                          <input type="text" name="engine" id="os-service" class="form-control" required>
                        </div>

                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Security Group</label>
                          <input type="text" name="security-group" id="os-service" class="form-control" required>
                        </div>

                        
                      </div>

                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Encrypted</label>
                          <input type="text" name="encrypted" id="os-service" class="form-control" required>
                        </div>

                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Status</label>
                          <input type="text" name="status" id="os-service" class="form-control" required>
                        </div>

                        
                      </div>

                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Parameter Group</label>
                          <input type="text" name="parameter-group" id="os-service" class="form-control" required>
                        </div>
                        
                      </div>
                      
                      
                     
                    </div>
                  </div>




                </div>
              </div>

              <!-- =================================== RDS ::::::::::: Closed =============================================== -->


              <!-- =================================== Router ::::::::::: Start =============================================== -->

                <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading52" data-toggle="collapse" href="#collapse52" aria-expanded="true" aria-controls="collapse52">
                    <h4 class="panel-title">HardwareProperties</h4>
                    </a>
                    <div id="collapse52" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading52">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>Warranty</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Acquisition Date</label>
                          <input type="text" name="acquisition-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Warranty Expiry Date</label>
                          <input type="text" name="warranty-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Domain</label>
                          <input type="text" name="domain" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset State<span class="text-red">*</span></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset Tag</label>
                          <input type="text" name="asset-tag" id="tag" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Serial Number</label>
                          <input type="text" name="serial-number" id="serial-number" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading53" data-toggle="collapse" href="#collapse53" aria-expanded="true" aria-controls="collapse53">
                    <h4 class="panel-title">RouterProperties</h4>
                    </a>
                    <div id="collapse53" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading53">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Firmware</label>
                          <input type="text" name="firmware" id="firmware" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Firmware Version</label>
                          <input type="text" name="firmware-version" id="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>IP Address</label>
                          <input type="text" name="ip-address" id="ip-address" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Ports</label>
                          <input type="text" name="ports" id="ports" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>MAC Address</label>
                          <input type="text" name="mac-address" id="mac-address" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Subnet Mask</label>
                          <input type="text" name="subnet-mask" id="subnet-mask" class="form-control" required>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <!-- =================================== Router ::::::::::: Closed =============================================== -->


              <!-- =================================== Sales Service ::::::::::: Start =============================================== -->

              <div class="accordion-down">
                <div class="accordion padding-top-30" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading54" data-toggle="collapse" data-parent="#accordion" href="#collapse54" aria-expanded="true" aria-controls="collapse54">
                    <h4 class="panel-title">Business ServiceProperties</h4>
                    </a>
                    <div id="collapse54" class="panel-collapse collapse in padding-top-10 padding-bottom-20"  role="tabpanel" aria-labelledby="heading54">
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>SLA(Availability in %)</label>
                          <input type="text" name="sla" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost class="form-control" required>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- =================================== Sales Service ::::::::::: Closed ============================================== -->

              <!-- =================================== Scanner ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading55" data-toggle="collapse" href="#collapse55" aria-expanded="true" aria-controls="collapse55">
                    <h4 class="panel-title">HardwareProperties</h4>
                    </a>
                    <div id="collapse55" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading55">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>Warranty</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Acquisition Date</label>
                          <input type="text" name="acquisition-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Warranty Expiry Date</label>
                          <input type="text" name="warranty-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Domain</label>
                          <select class="form-control">
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset State</label>
                          <select class="form-control">
                                    <option>In Stock</option>
                                    <option>In Transit</option>
                                    <option>Missing</option>
                                    <option>In Use</option>
                                    <option>Retired</option>
                                  
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset Tag</label>
                          <input type="text" name="asset-tag" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Serial Number</label>
                          <input type="text" name="serial-number" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>


              <!-- =================================== Scanner ::::::::::: Closed ======================================== -->

              <!-- =================================== Server ::::::::::: Start =============================================== -->

                <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading56" data-toggle="collapse" href="#collapse56" aria-expanded="true" aria-controls="collapse56">
                    <h4 class="panel-title">HardwareProperties</h4>
                    </a>
                    <div id="collapse56" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading56">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>Warranty</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Acquisition Date</label>
                          <input type="text" name="acquisition-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Warranty Expiry Date</label>
                          <input type="text" name="warranty-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Domain</label>
                          <input type="text" name="domain" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset State<span class="text-red">*</span></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset Tag</label>
                          <input type="text" name="asset-tag" id="tag" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Serial Number</label>
                          <input type="text" name="serial-number" id="serial-number" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading57" data-toggle="collapse" href="#collapse57" aria-expanded="true" aria-controls="collapse57">
                    <h4 class="panel-title">ComputerProperties</h4>
                    </a>
                    <div id="collapse57" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading57">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>OS</label>
                          <select class="form-control">
                            <option>.....</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>OS Version</label>
                          <input type="text" name="os-version" id="os-version" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>OS Service Pack</label>
                          <input type="text" name="os-service" id="os-service" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Memory(GB)</label>
                          <input type="text" name="memory" id="memory" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Disk Space(GB)</label>
                          <input type="text" name="disk-space" id="disk-space" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>CPU Speed(GHz)</label>
                          <input type="text" name="cpu-speed" id="cpu-speed" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>CPU Core Count</label>
                          <input type="text" name="cpu-core" id="cpu-core" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>MAC Address</label>
                          <input type="text" name="address" id="address" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>UUID</label>
                          <input type="text" name="uuid" id="uuid" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Hostname</label>
                          <input type="text" name="hostname" id="hostname" class="form-control" required>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <!-- =================================== Server ::::::::::: Closed =============================================== -->
                
              <!-- =================================== SNMP ::::::::::: Start =============================================== -->

                <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading58" data-toggle="collapse" href="#collapse58" aria-expanded="true" aria-controls="collapse58">
                    <h4 class="panel-title">HardwareProperties</h4>
                    </a>
                    <div id="collapse58" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading58">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>Warranty</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Acquisition Date</label>
                          <input type="text" name="acquisition-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Warranty Expiry Date</label>
                          <input type="text" name="warranty-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Domain</label>
                          <input type="text" name="domain" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset State<span class="text-red">*</span></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset Tag</label>
                          <input type="text" name="asset-tag" id="tag" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Serial Number</label>
                          <input type="text" name="serial-number" id="serial-number" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading59" data-toggle="collapse" href="#collapse59" aria-expanded="true" aria-controls="collapse59">
                    <h4 class="panel-title">SNMPProperties</h4>
                    </a>
                    <div id="collapse59" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading59">
                      
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>System OID</label>
                          <input type="text" name="system-oid" id="os-service" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>MAC Address</label>
                          <input type="text" name="mac-address" id="memory" class="form-control" required>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>



              <!-- =================================== SNMP ::::::::::: Closed =============================================== -->

              <!-- =================================== Software ::::::::::: Closed =============================================== -->

              <div class="accordion-down">
                <div class="accordion padding-top-30" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading60" data-toggle="collapse" href="#collapse60" aria-expanded="true" aria-controls="collapse60">
                    <h4 class="panel-title">SoftwareProperties</h4>
                    </a>
                    <div id="collapse60" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading60">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>License Validity</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installation Date</label>
                          <input type="text" name="installation-date" id="acquisition_date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Expiry Date</label>
                          <input type="text" name="license-expiry-date" id="warranty-expiry" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Key</label>
                          <input type="text" name="license-key" id="license-key" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Version</label>
                          <input type="text" name="version" id="version" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Type</label>
                            <select class="form-control">
                                <option>.....</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installed Machine</label>
                            <select class="form-control">
                                <option>.....</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installation Path</label>
                          <input type="text" name="installation-path" id="installation-path" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <!-- =================================== Software ::::::::::: Closed =============================================== -->

              <!-- =================================== Solaris Server ::::::::::: Start ============================================ -->

                <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading61" data-toggle="collapse" href="#collapse61" aria-expanded="true" aria-controls="collapse61">
                    <h4 class="panel-title">HardwareProperties</h4>
                    </a>
                    <div id="collapse61" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading61">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>Warranty</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Acquisition Date</label>
                          <input type="text" name="acquisition-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Warranty Expiry Date</label>
                          <input type="text" name="warranty-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Domain</label>
                          <input type="text" name="domain" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset State<span class="text-red">*</span></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset Tag</label>
                          <input type="text" name="asset-tag" id="tag" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Serial Number</label>
                          <input type="text" name="serial-number" id="serial-number" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading62" data-toggle="collapse" href="#collapse62" aria-expanded="true" aria-controls="collapse62">
                    <h4 class="panel-title">ComputerProperties</h4>
                    </a>
                    <div id="collapse62" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading62">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>OS</label>
                          <select class="form-control">
                            <option>.....</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>OS Version</label>
                          <input type="text" name="os-version" id="os-version" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>OS Service Pack</label>
                          <input type="text" name="os-service" id="os-service" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Memory(GB)</label>
                          <input type="text" name="memory" id="memory" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Disk Space(GB)</label>
                          <input type="text" name="disk-space" id="disk-space" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>CPU Speed(GHz)</label>
                          <input type="text" name="cpu-speed" id="cpu-speed" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>CPU Core Count</label>
                          <input type="text" name="cpu-core" id="cpu-core" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>MAC Address</label>
                          <input type="text" name="address" id="address" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>UUID</label>
                          <input type="text" name="uuid" id="uuid" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Hostname</label>
                          <input type="text" name="hostname" id="hostname" class="form-control" required>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <!-- =================================== Solaris Server ::::::::::: Closed =========================================== -->

              <!-- =================================== Storage ::::::::::: Start ============================================ -->

                <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading63" data-toggle="collapse" href="#collapse63" aria-expanded="true" aria-controls="collapse63">
                    <h4 class="panel-title">HardwareProperties</h4>
                    </a>
                    <div id="collapse63" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading63">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>Warranty</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Acquisition Date</label>
                          <input type="text" name="acquisition-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Warranty Expiry Date</label>
                          <input type="text" name="warranty-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Domain</label>
                          <input type="text" name="domain" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset State<span class="text-red">*</span></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset Tag</label>
                          <input type="text" name="asset-tag" id="tag" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Serial Number</label>
                          <input type="text" name="serial-number" id="serial-number" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>



              <!-- =================================== Storage ::::::::::: Closed =============================================== -->

              <!-- =================================== Support Storage ::::::::::: Start =========================================== -->

              <div class="accordion-down">
                <div class="accordion padding-top-30" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading64" data-toggle="collapse" data-parent="#accordion" href="#collapse64" aria-expanded="true" aria-controls="collapse64">
                    <h4 class="panel-title">Business ServiceProperties</h4>
                    </a>
                    <div id="collapse64" class="panel-collapse collapse in padding-top-10 padding-bottom-20"  role="tabpanel" aria-labelledby="heading64">
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>SLA(Availability in %)</label>
                          <input type="text" name="sla" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- =================================== Support Storage ::::::::::: Closed =========================================== -->

              <!-- =================================== Switch ::::::::::: Start ======================================== -->

                  <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading65" data-toggle="collapse" href="#collapse65" aria-expanded="true" aria-controls="collapse65">
                    <h4 class="panel-title">HardwareProperties</h4>
                    </a>
                    <div id="collapse65" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading65">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>Warranty</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Acquisition Date</label>
                          <input type="text" name="acquisition-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Warranty Expiry Date</label>
                          <input type="text" name="warranty-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Domain</label>
                          <input type="text" name="domain" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset State<span class="text-red">*</span></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset Tag</label>
                          <input type="text" name="asset-tag" id="tag" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Serial Number</label>
                          <input type="text" name="serial-number" id="serial-number" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading66" data-toggle="collapse" href="#collapse66" aria-expanded="true" aria-controls="collapse66">
                    <h4 class="panel-title">SwitchProperties</h4>
                    </a>
                    <div id="collapse66" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading66">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Firmware</label>
                          <input type="text" name="firmware" id="firmware" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Firmware Version</label>
                          <input type="text" name="firmware-version" id="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>IP Address</label>
                          <input type="text" name="ip-address" id="ip-address" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Ports</label>
                          <input type="text" name="ports" id="ports" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>MAC Address</label>
                          <input type="text" name="mac-address" id="mac-address" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Subnet Mask</label>
                          <input type="text" name="subnet-mask" id="subnet-mask" class="form-control" required>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <!-- =================================== Switch ::::::::::: Closed ======================================== -->

              <!-- =================================== Tablet ::::::::::: Start =============================================== -->

                <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading67" data-toggle="collapse" href="#collapse67" aria-expanded="true" aria-controls="collapse67">
                    <h4 class="panel-title">HardwareProperties</h4>
                    </a>
                    <div id="collapse67" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading67">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>Warranty</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Acquisition Date</label>
                          <input type="text" name="acquisition-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Warranty Expiry Date</label>
                          <input type="text" name="warranty-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Domain</label>
                          <input type="text" name="domain" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset State<span class="text-red">*</span></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset Tag</label>
                          <input type="text" name="asset-tag" id="tag" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Serial Number</label>
                          <input type="text" name="serial-number" id="serial-number" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading68" data-toggle="collapse" href="#collapse68" aria-expanded="true" aria-controls="collapse68">
                    <h4 class="panel-title">TabletProperties</h4>
                    </a>
                    <div id="collapse68" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading68">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>OS</label>
                          <select class="form-control">
                            <option>.....</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>OS Version</label>
                          <input type="text" name="os-version" id="os-version" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Memory (GB)</label>
                          <input type="text" name="memory" id="os-service" class="form-control" required>
                        </div>
                       
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>



              <!-- =================================== Tablet ::::::::::: Closed =============================================== -->

              <!-- =================================== Unix Server ::::::::::: Start =============================================== -->

                <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading69" data-toggle="collapse" href="#collapse69" aria-expanded="true" aria-controls="collapse69">
                    <h4 class="panel-title">HardwareProperties</h4>
                    </a>
                    <div id="collapse69" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading69">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>Warranty</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Acquisition Date</label>
                          <input type="text" name="acquisition-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Warranty Expiry Date</label>
                          <input type="text" name="warranty-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Domain</label>
                          <input type="text" name="domain" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset State<span class="text-red">*</span></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset Tag</label>
                          <input type="text" name="asset-tag" id="tag" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Serial Number</label>
                          <input type="text" name="serial-number" id="serial-number" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading70" data-toggle="collapse" href="#collapse70" aria-expanded="true" aria-controls="collapse70">
                    <h4 class="panel-title">ComputerProperties</h4>
                    </a>
                    <div id="collapse70" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading70">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>OS</label>
                          <select class="form-control">
                            <option>.....</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>OS Version</label>
                          <input type="text" name="os-version" id="os-version" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>OS Service Pack</label>
                          <input type="text" name="os-service" id="os-service" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Memory(GB)</label>
                          <input type="text" name="memory" id="memory" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Disk Space(GB)</label>
                          <input type="text" name="disk-space" id="disk-space" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>CPU Speed(GHz)</label>
                          <input type="text" name="cpu-speed" id="cpu-speed" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>CPU Core Count</label>
                          <input type="text" name="cpu-core" id="cpu-core" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>MAC Address</label>
                          <input type="text" name="address" id="address" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>UUID</label>
                          <input type="text" name="uuid" id="uuid" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Hostname</label>
                          <input type="text" name="hostname" id="hostname" class="form-control" required>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <!-- =================================== Unix Server ::::::::::: Closed =============================================== -->

              <!-- =================================== UPS ::::::::::: Start =============================================== -->

                <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading71" data-toggle="collapse" href="#collapse71" aria-expanded="true" aria-controls="collapse71">
                    <h4 class="panel-title">HardwareProperties</h4>
                    </a>
                    <div id="collapse71" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading71">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>Warranty</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Acquisition Date</label>
                          <input type="text" name="acquisition-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Warranty Expiry Date</label>
                          <input type="text" name="warranty-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Domain</label>
                          <input type="text" name="domain" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset State<span class="text-red">*</span></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset Tag</label>
                          <input type="text" name="asset-tag" id="tag" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Serial Number</label>
                          <input type="text" name="serial-number" id="serial-number" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading72" data-toggle="collapse" href="#collapse72" aria-expanded="true" aria-controls="collapse72">
                    <h4 class="panel-title">UPSProperties</h4>
                    </a>
                    <div id="collapse72" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading72">
                      
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>IP Address</label>
                          <input type="text" name="ip-address" id="os-service" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Battery Status</label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Low</option>
                            <option>Normal</option>
                            <option>Depleted</option>
                            
                        </select>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Battery Voltage</label>
                          <input type="text" name="battery-voltage" id="disk-space" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Battery Current</label>
                          <input type="text" name="battery-current" id="cpu-speed" class="form-control" required>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>



              <!-- =================================== UPS ::::::::::: Closed =============================================== -->
              

              <!-- =================================== VMware Server ::::::::::: Start =============================================== -->

                <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading73" data-toggle="collapse" href="#collapse73" aria-expanded="true" aria-controls="collapse73">
                    <h4 class="panel-title">HardwareProperties</h4>
                    </a>
                    <div id="collapse73" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading73">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>Warranty</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Acquisition Date</label>
                          <input type="text" name="acquisition-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Warranty Expiry Date</label>
                          <input type="text" name="warranty-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Domain</label>
                          <input type="text" name="domain" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset State<span class="text-red">*</span></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset Tag</label>
                          <input type="text" name="asset-tag" id="tag" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Serial Number</label>
                          <input type="text" name="serial-number" id="serial-number" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading74" data-toggle="collapse" href="#collapse74" aria-expanded="true" aria-controls="collapse74">
                    <h4 class="panel-title">ComputerProperties</h4>
                    </a>
                    <div id="collapse74" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading74">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>OS</label>
                          <select class="form-control">
                            <option>.....</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>OS Version</label>
                          <input type="text" name="os-version" id="os-version" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>OS Service Pack</label>
                          <input type="text" name="os-service" id="os-service" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Memory(GB)</label>
                          <input type="text" name="memory" id="memory" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Disk Space(GB)</label>
                          <input type="text" name="disk-space" id="disk-space" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>CPU Speed(GHz)</label>
                          <input type="text" name="cpu-speed" id="cpu-speed" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>CPU Core Count</label>
                          <input type="text" name="cpu-core" id="cpu-core" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>MAC Address</label>
                          <input type="text" name="address" id="address" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>UUID</label>
                          <input type="text" name="uuid" id="uuid" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Hostname</label>
                          <input type="text" name="hostname" id="hostname" class="form-control" required>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="panel"> <a class="panel-heading" role="tab" id="heading75" data-toggle="collapse" href="#collapse75" aria-expanded="true" aria-controls="collapse75">
                    <h4 class="panel-title">VMware ServerProperties</h4>
                    </a>
                    <div id="collapse75" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading75">
                      
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Logical Processors</label>
                          <input type="text" name="logical-processors" id="os-service" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>NIC Count</label>
                          <input type="text" name="nic-count" id="memory" class="form-control" required>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>



              <!-- =================================== VMware ServerProperties ::::::::::: Closed =================== -->

              <!-- =================================== Web Server ::::::::::: Closed ============================= -->

              <div class="accordion-down">
                <div class="accordion padding-top-30" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading76" data-toggle="collapse" href="#collapse76" aria-expanded="true" aria-controls="collapse76">
                    <h4 class="panel-title">SoftwareProperties</h4>
                    </a>
                    <div id="collapse76" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading76">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>License Validity</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installation Date</label>
                          <input type="text" name="installation-date" id="acquisition_date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Expiry Date</label>
                          <input type="text" name="license-expiry-date" id="warranty-expiry" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Key</label>
                          <input type="text" name="license-key" id="license-key" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Version</label>
                          <input type="text" name="version" id="version" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>License Type</label>
                            <select class="form-control">
                                <option>.....</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installed Machine</label>
                            <select class="form-control">
                                <option>.....</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Installation Path</label>
                          <input type="text" name="installation-path" id="installation-path" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <!-- =================================== Web Server ::::::::::: Closed ================================= -->

              <!-- =================================== Windows Server ::::::::::: Start ======================== -->

                <div class="accordion-down">
                <div class="accordion" id="accordion" role="tablist" >
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading77" data-toggle="collapse" href="#collapse77" aria-expanded="true" aria-controls="collapse77">
                    <h4 class="panel-title">HardwareProperties</h4>
                    </a>
                    <div id="collapse77" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading77">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Product&nbsp;&nbsp;/&nbsp;<a href="#new-pro" data-toggle="modal" data-target="#new-pro"><i class="icon-plus-circled"></i>Add New Product</a></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Vendor</label>
                          <input type="text" name="vendor" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Cost</label>
                          <input type="text" name="cost" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <div class="row">
                             <div class="col-sm-6 col-xs-6">
                                <label>Warranty</label>
                                <select class="form-control">
                                    <option>0 Yrs</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                             <div class="col-sm-6 col-xs-6">
                                <label>&nbsp;</label>
                                <select class="form-control">
                                    <option>0 Months</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                             </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Acquisition Date</label>
                          <input type="text" name="acquisition-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Warranty Expiry Date</label>
                          <input type="text" name="warranty-expiry-date" class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Domain</label>
                          <input type="text" name="domain" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset State<span class="text-red">*</span></label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                        </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Asset Tag</label>
                          <input type="text" name="asset-tag" id="tag" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Serial Number</label>
                          <input type="text" name="serial-number" id="serial-number" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Last Audit Date</label>
                          <input type="text" name="last-audit-date" id="last-audit-date"  class="form-control" id="datetimepicker_dark"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel"> <a class="panel-heading" role="tab" id="heading78" data-toggle="collapse" href="#collapse78" aria-expanded="true" aria-controls="collapse78">
                    <h4 class="panel-title">ComputerProperties</h4>
                    </a>
                    <div id="collapse78" class="panel-collapse collapse in padding-top-10 padding-bottom-20" role="tabpanel" aria-labelledby="heading78">
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>OS</label>
                          <select class="form-control">
                            <option>.....</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>OS Version</label>
                          <input type="text" name="os-version" id="os-version" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>OS Service Pack</label>
                          <input type="text" name="os-service" id="os-service" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Memory(GB)</label>
                          <input type="text" name="memory" id="memory" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Disk Space(GB)</label>
                          <input type="text" name="disk-space" id="disk-space" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>CPU Speed(GHz)</label>
                          <input type="text" name="cpu-speed" id="cpu-speed" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>CPU Core Count</label>
                          <input type="text" name="cpu-core" id="cpu-core" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>MAC Address</label>
                          <input type="text" name="address" id="address" class="form-control" required>
                        </div>
                      </div>
                      <div class="row padding-top-10">
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>UUID</label>
                          <input type="text" name="uuid" id="uuid" class="form-control" required>
                        </div>
                        <div class="col-sm-6 col-xs-6 padding-bottom-10">
                          <label>Hostname</label>
                          <input type="text" name="hostname" id="hostname" class="form-control" required>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <!-- =================================== Windows Server ::::::::::: Closed ========================== -->

















































              <p class="left_col padding-5 text-white margin-top-20">Assignment</p>
              <div class="row padding-top-10">
                <div class="col-sm-6 col-xs-12 padding-bottom-10">
                  <label>Location <span class="text-red">*</span></label>
                  <select class="form-control" name="location_id">
                    <?php
$loc_object=Assets::Location('');
if($loc_object!=''){
foreach ($loc_object as $view_loc_object) {
echo   '<option value="'.$view_loc_object["id"].'">'.$view_loc_object["location_name"].'</option>';
}
}
?>
                  </select>
                </div>
                <div class="col-sm-6 col-xs-12 padding-bottom-10">
                  <label>Managed By <span class="text-red">*</span></label>
                  <select class="form-control" name="managed_by_id">
              <?php
          $agent_object=Assets::Agents();
          foreach ($agent_object as $view_agent) {
          echo   '<option value="'.$view_agent["id"].'">'.$view_agent["name"].'</option>';
          }
          ?>
                  </select>
                </div>
              </div>
              <div class="row">
                  <div class="col-sm-6 col-xs-12 padding-bottom-10">
                  <label>Used By <span class="text-red">*</span></label>
                  <select class="form-control" name="used_by">
              <?php
              // put here  requestor data 
              
          $requester_object=Assets::Requester('');
          foreach ($requester_object as $view_requester) {
          echo   '<option value="'.$view_requester["id"].'">'.$view_requester["first_name"]." ".$view_requester["last_name"].'</option>';
          }
          ?>
                  </select>
                </div>
                  <div class="col-sm-6 col-xs-12 padding-bottom-10">
                   <label class="padding-top-5">Attach a file (File size < 15 MB)</label>
                <div class="input-group no-left">
                  <input type="text" class="form-control" placeholder="1 file(s) selected" readonly="">
                  <label class="input-group-btn"> <span class="btn btn-success"> Choose File
                    <input type="file" style="display: none;" multiple="">
                    </span> </label>
                </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-sm-6 col-xs-12 padding-bottom-10">
                     <label class="padding-top-5">Assigned on</label>
                     <input type="text" name="assign_date" class="form-control" id="datetimepicker_dark"/>
                  </div>
                  
              </div>

            </div>
          </div>
          </div>
    </div>
    </div>
        </form>
      </div>
    </div>
  </div>
  <?php include("../include/footer.php"); ?>
</div>
</div>
</body>
</html>


            
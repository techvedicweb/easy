<!DOCTYPE html>
<html lang="en">
<body class="nav-md">
<div class="container body">
  <div class="main_container">
     <?php include("../include/top-nav.php"); ?>
    <?php include("../include/right-nav.php"); ?>
   
    <div class="right_col" role="main">
      <form action="#" class="checkList">
        <div class="row">
          <div class="col-xs-12 padding-top-10">
            <div class="x_panel tile">
              <div class="x_title">
                <div class="row">
				  <div class="col-lg-12">
				  <div class="row affix-top" style="background:#fff;" data-spy="affix" data-offset-top="197">
				  <div class="col-lg-7 padding-top-10">
						  <a href="<?php echo WEB_ROOT;?>releases/index.php" class="h4"><i class="icon-left-small"></i>Back to Changes</a>
						</div>
						<div class="col-lg-5 text-right MrTpMd-10">
						 <a href="<?php echo WEB_ROOT;?>releases/index.php" class="btn btn-danger btn-round">Cancel</a>
						 <div class="btn-group">
						  <button type="button" class="btn btn-success btn-round">Save</button>
						  <button type="button" class="btn btn-success btn-round dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							<span class="caret"></span>
							<span class="sr-only">Toggle Dropdown</span>
						  </button>
						  <ul class="dropdown-menu">
							<li><a href="#">Save & <strong>New</strong></a></li>
							<li><a href="#">Save & <strong>Close</strong></a></li>
						  </ul>
						</div>
						</div>
				 </div> 
				 </div>
				</div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <h1 class="h3 padding-bottom-10">Create a New Changes</h1>
                <label>Search a requester <span class="text-red">*</span> or <a data-toggle="modal" data-target="#requester" class="green">Add New Requester</a></label>
                <input type="text" class="form-control">
                <p class="padding-top-10">
                  <label>Subject <span class="text-red">*</span></label>
                  <input type="text" class="form-control">
                </p>
                <div class="row">
                  <div class="col-sm-6 col-xs-12 padding-bottom-10">
                    <label>Status <span class="text-red">*</span></label>
                    <select class="form-control" tabindex="-1">
                      <option>select Status</option>
                      <option value="AK">Alaska</option>
                      <option value="HI">Hawaii</option>
                      <option value="CA">California</option>
                      <option value="NV">Nevada</option>
                      <option value="OR">Oregon</option>
                      <option value="WA">Washington</option>
                      <option value="AZ">Arizona</option>
                      <option value="CO">Colorado</option>
                    </select>
                  </div>
                  <div class="col-sm-6 col-xs-12 padding-bottom-10">
                    <label>Priority <span class="text-red">*</span></label>
                    <select class="form-control" tabindex="-1">
                      <option>Select Priority</option>
                      <option value="AK">Alaska</option>
                      <option value="HI">Hawaii</option>
                      <option value="CA">California</option>
                      <option value="NV">Nevada</option>
                      <option value="OR">Oregon</option>
                      <option value="WA">Washington</option>
                      <option value="AZ">Arizona</option>
                      <option value="CO">Colorado</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6 col-xs-12 padding-bottom-10">
                    <label>Group <span class="text-red">*</span></label>
                    <select class="form-control" tabindex="-1">
                      <option>select Group</option>
                      <option value="AK">Alaska</option>
                      <option value="HI">Hawaii</option>
                      <option value="CA">California</option>
                      <option value="NV">Nevada</option>
                      <option value="OR">Oregon</option>
                      <option value="WA">Washington</option>
                      <option value="AZ">Arizona</option>
                      <option value="CO">Colorado</option>
                    </select>
                  </div>
                  <div class="col-sm-6 col-xs-12 padding-bottom-10">
                    <label>Agent <span class="text-red">*</span></label>
                    <select class="form-control" tabindex="-1">
                      <option>Select Agent</option>
                      <option value="AK">Alaska</option>
                      <option value="HI">Hawaii</option>
                      <option value="CA">California</option>
                      <option value="NV">Nevada</option>
                      <option value="OR">Oregon</option>
                      <option value="WA">Washington</option>
                      <option value="AZ">Arizona</option>
                      <option value="CO">Colorado</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6 col-xs-12 padding-bottom-10">
                    <label>Department <span class="text-red">*</span></label>
                    <select class="form-control" tabindex="-1">
                      <option>select Department</option>
                      <option value="AK">Alaska</option>
                      <option value="HI">Hawaii</option>
                      <option value="CA">California</option>
                      <option value="NV">Nevada</option>
                      <option value="OR">Oregon</option>
                      <option value="WA">Washington</option>
                      <option value="AZ">Arizona</option>
                      <option value="CO">Colorado</option>
                    </select>
                  </div>
                </div>
                
                <!-- start-->
                <div class="btn-toolbar editor nav" data-role="editor-toolbar" data-target="#editor"> <a href="#" class="BoldAlign" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bold">&nbsp;</a> <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Italic" class="italicAlign">&nbsp;</a> <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="List Circle" class="list">&nbsp;</a> <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="List Number" class="listNum">&nbsp;</a> <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Shift Tab" class="shiftTab">&nbsp;</a> <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Shift Tab" class="shiftTab2">&nbsp;</a> <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Font Color" class="fontColor">&nbsp;</a> <span class="dropdown"> <a href="#" class="dropdown-toggle links" data-toggle="dropdown" role="button" aria-expanded="false" title="link">&nbsp;</a>
                  <ul class="dropdown-menu">
                    <li><a href="#insertLink" data-toggle="modal" data-target="#insertLink">Insert Link ...</a></li>
                    <li><a href="#">Unlink</a></li>
                  </ul>
                  </span> <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Image" data-toggle="modal" data-target="#imageSelecter" class="imageSelect">&nbsp;</a> <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Align" class="imageSelect2">&nbsp;</a> </div>
                <div id="editor" class="editor-wrapper placeholderText" contenteditable="true"></div>
                <textarea name="descr" id="descr" style="display:none;"></textarea>
                <!--end-->
                <p class="margin-top-20">
                  <label>Tags</label>
                  <input type="text" class="form-control">
                </p>
                <p class="margin-top-20"><a href="#" class="green h4" data-toggle="modal" data-target="#attach"><i class="icon-plus-circled-1"></i> Attach Assets </a></p>
                <div>Attach a file (File size <i class="icon-angle-left"></i> 15 MB)</div>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="1 file(s) selected" readonly>
                  <label class="input-group-btn"> <span class="btn btn-success"> Choose File
                    <input type="file" style="display: none;" multiple>
                    </span> </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="requester" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content noBorderRadius">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add New Requester</h4>
                  </div>
                  <div class="modal-body">
                    <p>
                      <label>Name</label>
                      <input type="text" class="form-control">
                    </p>
                    <p>
                      <label>Email</label>
                      <input type="email" class="form-control">
                    </p>
                    <p>
                      <label>Phone no</label>
                      <input type="text" class="form-control">
                    </P>
                    <p>
                      <label>Department</label>
                      <input type="text" class="form-control" placeholder="Enter Department Name">
                    </p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default noBorderRadius" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-dark noBorderRadius">Create</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="insertLink" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content noBorderRadius">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Link</h4>
                  </div>
                  <div class="modal-body">
                    <ul class="nav nav-pills">
                      <li class="active"><a class="btn btn-default" href="#tab1" data-toggle="tab">URL</a></li>
                      <li><a href="#tab2" class="btn btn-default" data-toggle="tab">Email</a></li>
                      <li><a href="#tab3" class="btn btn-default" data-toggle="tab">Anchor</a></li>
                    </ul>
                    <div class="tab-content padding-top-10">
                      <div class="tab-pane active" id="tab1">
                        <p class="padding-top-10">
                          <label>URL</label>
                          <input type="text" class="form-control">
                        </p>
                      </div>
                      <div class="tab-pane" id="tab2">
                        <p class="padding-top-10">
                          <label>Email</label>
                          <input type="email" class="form-control">
                        </p>
                      </div>
                      <div class="tab-pane" id="tab3">
                        <p class="padding-top-10">
                          <label>Anchor</label>
                          <input type="text" class="form-control">
                        </p>
                      </div>
                    </div>
                    <p>
                      <label>text</label>
                      <input type="text" class="form-control">
                    </p>
                    <p>
                      <input type="checkbox" id="newTab" />
                      <label for="newTab">Open link in new tab</label>
                    </p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default noBorderRadius" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-dark noBorderRadius">Insert</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="attach" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content noBorderRadius">
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-sm-6">
                        <p>
                          <label>Search</label>
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                          </select>
                        </p>
                      </div>
                      <div class="col-sm-6">
                        <p>
                          <label>Search</label>
                          <input type="text" class="form-control">
                        </p>
                      </div>
                    </div>
                    <div class="table-responsive margin-top-20">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>&nbsp; </th>
                            <th>Asset Name </th>
                            <th>Used By</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="checkList">
                            <td><input type="checkbox" id="testNew" />
                              <label for="testNew">&nbsp;</label></td>
                            <td>Andrea's Laptop</td>
                            <td class=" ">Andrea</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default noBorderRadius">Attach</button>
                  </div>
                </div>
              </div>
            </div>
      </form>
    </div>
    <?php include("../include/footer.php"); ?>
  </div>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<body class="nav-md">
<div class="container body">
  <div class="main_container">
     <?php include("../include/top-nav.php"); ?>
    <?php include("../include/right-nav.php"); ?>
   
    <div class="right_col" role="main">
      <div class="row">
        <div class="col-sm-5 col-md-4 col-lg-3 col-xs-12 margin-top-10">
          <div class="x_panel tile">
            <div class="x_title">
              <h2>Filter Problems</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <form action="#">
                <h5 class="weight-600 padding-top-10">Created</h5>
                <div class="form-group">
                  <select class="select2_group form-control">
                    <option selected="selected" value="">Select Groups Name</option>
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
                <h5 class="weight-600 padding-top-10">Status</h5>
                <div class="form-group">
                  <select class="select2_single form-control" tabindex="-1">
                    <option>&nbsp;</option>
                    <option value="AK">Alaska</option>
                    <option value="HI">Hawaii</option>
                    <option value="CA">California</option>
                    <option value="NV">Nevada</option>
                    <option value="OR">Oregon</option>
                  </select>
                </div>
                <p><a href="#"><i class="icon-plus-circled"></i>More...</a></p>
              </form>
            </div>
          </div>
        </div>
        <div class="col-sm-7 col-md-8 col-lg-9 margin-top-10">
          <div class="x_panel tile">
            <div class="x_title">
              <div class="row">
                <div class="col-lg-7">
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-round">Change Requested Problems</button>
                    <button type="button" class="btn btn-success btn-round dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <span class="caret"></span> <span class="sr-only">Toggle Dropdown</span> </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a> </li>
                      <li><a href="#">Another action</a> </li>
                      <li><a href="#">Something else here</a> </li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a> </li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-5 text-right MrTpMd-10"><a href="<?php echo WEB_ROOT;?>problems/new.php" class="btn btn-round btn-dark">New Problem</a> </div>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12"> <a href="javascript:void(0)" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="false">Sort by Date Created<i class="caret"></i></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a> </li>
                    <li><a href="#">Another action</a> </li>
                    <li><a href="#">Something else here</a> </li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a> </li>
                  </ul>
                </div>
                <div class="col-sm-6 text-right col-xs-12 visible-sm-right-left padding-bottom-10"> Showing 1 - 2 of 2  &nbsp;&nbsp;&nbsp;
                  <button type="button" class="btn btn-default btn-round" disabled="disabled"><i class="icon-left-dir"></i></button>
                  <button type="button" class="btn btn-default btn-round" disabled="disabled"><i class="icon-right-dir"></i></button>
                </div>
              </div>
              <div class="panel panel-default noBorderRadius noShadow">
                <div class="panel-heading">
                  <form action="#" class="checkList">
                    <input type="checkbox" id="checkPanel" />
                    <label for="checkPanel">&nbsp;</label>
                    &nbsp;&nbsp; <a href="javascript:void(0)" class="btn btn-default btn-round"> Delete</a> <a href="javascript:void(0)" class="btn btn-default btn-round"> Pick Up </a> <a href="javascript:void(0)" class="btn btn-default btn-round"> Assign to Agent </a>
                  </form>
                </div>
                <ul class="listProb checkList">
                  <li class="padding-10">
                    <div class="media">
                        <div class="media-left">
                            <input type="checkbox" id="1a" />
                            <label for="1a">&nbsp;</label>
                        </div>
                        <div class="media-body"> <a href="#"> <strong class="green">abc</strong> <strong>#PRB-2</strong>
                            <p class="p-xs">From: Abc, Change Requested: 21 days ago Priority: Medium,  Impact: Medium,  Due by 5 Jul, 2016</p>
                            </a> 
						</div>
                    </div>
                  </li>
				  <li class="padding-10">
                    <div class="media">
                        <div class="media-left">
                            <input type="checkbox" id="1b" />
                            <label for="1b">&nbsp;</label>
                        </div>
                        <div class="media-body"> <a href="#"> <strong class="green">abc</strong> <strong>#PRB-2</strong>
                            <p class="p-xs">From: Abc, Change Requested: 21 days ago Priority: Medium,  Impact: Medium,  Due by 5 Jul, 2016</p>
                            </a> 
						</div>
                    </div>
                  </li>
				  <li class="padding-10">
                    <div class="media">
                        <div class="media-left">
                            <input type="checkbox" id="1c" />
                            <label for="1c">&nbsp;</label>
                        </div>
                        <div class="media-body"> <a href="#"> <strong class="green">abc</strong> <strong>#PRB-2</strong>
                            <p class="p-xs">From: Abc, Change Requested: 21 days ago Priority: Medium,  Impact: Medium,  Due by 5 Jul, 2016</p>
                            </a> 
						</div>
                    </div>
                  </li>
                </ul>
              </div>
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
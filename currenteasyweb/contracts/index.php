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
          <div class="x_panel">
            <div class="x_title">
              <div class="row">
                <div class="col-lg-7 col-xs-12">
                  <div class="btn-group">
                      <a href="javascript:void(0)" data-toggle="dropdown" class="dropdown-toggle h3">All Contracts <i class="caret"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a>
                        </li>
                        <li><a href="#">Another action</a>
                        </li>
                        <li><a href="#">Something else here</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a>
                        </li>
                      </ul>
                </div>
                </div>
                <div class="col-lg-5 col-xs-12 text-right MrTpMd-10 visible-sm-right-left">
                  <a href="<?php echo WEB_ROOT;?>contracts/new.php" class="btn btn-danger btn-round">Add New</a>
                </div>
              </div>
            </div>
            <div class="x_content">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="media">
                    <div class="media-left">
                      <button type="button" class="btn btn-default btn-round" disabled="disabled">Delete</button>
                    </div>
                    <div class="media-left">
                      <div class="input-group noMargin">
                        <input class="form-control" placeholder="Search for..." type="text">
                        <span class="input-group-btn">
                        <button class="btn btn-dark" type="button"><i class="icon-search-2"></i></button>
                        </span> 
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 text-right col-xs-12 visible-sm-right-left"> Showing 1 to 1 of 1  &nbsp;&nbsp;&nbsp;
                  <button type="button" class="btn btn-default btn-round" disabled="disabled"><i class="icon-left-dir"></i></button>
                  <button type="button" class="btn btn-default btn-round" disabled="disabled"><i class="icon-right-dir"></i></button>
                </div>
              </div>
              <div class="table-responsive margin-top-20">
                <table class="table table-striped jambo_table bulk_action p-xs">
                  <thead>
                    <tr>
                      <th> <input type="checkbox" id="test1" />
                        <label for="test1" class="column-title weight-600" style="padding-top:3px;">Contract Name</label>
                      </th>
                      <th>Type </th>
                      <th>Status </th>
                      <th>Renewal Status </th>
                      <th>Contract No.</th>
                      <th>Vendor </th>
                      <th>Expiry</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="a-center "><input type="checkbox" id="laptop" />
                        <label for="laptop" class="column-title">Sample Adobe Photoshop CS6 Contract</label></td>
                      <td>Software License</td>
                      <td>Active </td>
                      <td></td>
                      <td>CNTR-1</td>
                      <td>Adobe</td>
                      <td>1 Jul, 2017</td>
                    </tr>
                    <tr>
                      <td class="a-center "><input type="checkbox" id="laptop1" />
                        <label for="laptop1" class="column-title" style="padding-top:3px;">Display Name</label></td>
                      <td>121000040</td>
                      <td>May 23</td>
                      <td>121000210 <i class="success fa fa-long-arrow-up"></i></td>
                      <td>John Blank</td>
                      <td>Paid</td>
                      <td>John</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12 margin-top-10">
              <div class="x_panel tile overflow_hidden">
                <div class="x_title">
                  <h2>Contracts</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa icon-up-open"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa icon-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa icon-cancel"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <p>Freshservice's contract management module lets you manage contracts established with third-party vendors.</p>
                  <p>Freshservice supports different types of contracts – from creating your very own custom contract types to supporting lease, maintenance, as well as software license contracts, by default.</p>
                  <p>Note - Only users who have drafted the contract will be able to submit the contract for approval.</p>
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
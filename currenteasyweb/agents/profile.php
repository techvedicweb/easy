<!DOCTYPE html>
<html lang="en">
<body class="nav-md">
<div class="container body">
  <div class="main_container">
    <?php include("../include/top-nav.php"); ?>
    <?php include("../include/right-nav.php"); ?>
    <div class="right_col" role="main">
      <div class="row">
        <div class="col-sm-7 col-md-8 col-lg-9 col-xs-12 margin-top-10">
          <div class="x_panel tile">
            <div class="x_title">
              <div class="row">

              	<?php
              	  require_once("../classes/Include_all.php");   
$agent_obj=Assets::Agents($_GET['id']);
foreach ($agent_obj as $agent_val) ?>

                  <div class="col-lg-7 col-xs-12 h4"><a href="<?php echo WEB_ROOT;?>agents/index.php"><i class="icon-left-small"></i>Back to Changes</a></div>
                  <div class="col-lg-5 col-xs-12 text-right visible-sm-right-center MrTpMd-10"> 
                     <a href="<?php echo WEB_ROOT;?>agents/edit.php?id=<?php echo $agent_val["id"];?>" class="btn btn-round btn-dark">Edit Agent</a>
                  </div>
                </div>
              <div class="clearfix"></div>
            </div>
            <div class="x_content" id="imageSelecter">
			    <div class="row">
				    <div class="col-sm-4 col-xs-12">
					    <div class="bgProfile">

						    <div class="panel-body text-center border-bottom">
					            <p><img class="img-responsive" src=<?php  
$pic=$agent_val['agent_pic'];
if($pic!=''){
 echo "../docs/".$_SESSION['userid']."/Agent/".$pic;
}
else{
                echo IMAGE_ROOT."profile_blank_thumb.gif";

                 }
              ?> alt="green"></p>
						        <h1 class="h3 margin-top-20"><?php echo $agent_val['name'];?></h1>
								<span class="text-gray"><!-- abc --></span>
							</div>
                            <div class="panel-body ">
                                <p>
								    <strong>Email</strong><br>
									<?php echo $agent_val['email'];?>
								</p>
								<p>
								    <strong>Phone</strong><br>
									<?php echo $agent_val['phone_no'];?>
								</p>
								<p>
								    <strong>Mobile</strong><br>
									<?php echo $agent_val['mobile_number'];?>
								</p>
								<!-- <p>
								    <strong>Time Zone</strong><br>
									Chennai
								</p> -->
								<p>
								    <strong>Location</strong><br>
									<?php echo $agent_val['lc'];?>
								</p>
                            </div> 							
						</div>	 
					</div>
					<div class="col-sm-12 col-md-8 col-xs-12">
					    <ul class="nav nav-pills">
						<li class="active"><a class="btn btn-default" href="#tab1" data-toggle="tab">Tickets (2)</a></li>
						<li><a href="#tab2" class="btn btn-default" data-toggle="tab">Assets (1)</a></li>
					  </ul>
					  <div class="tab-content margin-top-20">
						<div class="tab-pane active" id="tab1">
							<div class="margin-top-10">
							  <span class="blue">NEW</span> #INC-4
							  <div class="text-gray p-xs">about 1 month ago, Status: Open Agent: Account Admin</div>
							</div>
							<div class="margin-top-20">
							  <span class="blue">NEW</span> #INC-4
							  <div class="text-gray p-xs">about 1 month ago, Status: Open Agent: Account Admin</div>
							</div>
						</div>
						<div class="tab-pane" id="tab2">
							<div class="table-responsive">
								<table class="table table-striped jambo_table bulk_action">
								  <tbody>
									
									<tr>
									  <td>
										<p>Testing(Access Point)</p>
									  </td>
									  <td>
										<p>
										 Used By: --
										 <br>
										 put all assets here that used by him
										</p>
									  </td>
									  
									</tr>
								  </tbody>
								</table>
							</div>
						</div>
					  </div>
					</div>
				</div>
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
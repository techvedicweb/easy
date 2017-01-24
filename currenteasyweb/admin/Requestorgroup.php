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
                  <div class="col-lg-7 padding-top-10"> <a href="<?php echo WEB_ROOT;?>admin/addgroup.php" class="h4"><i class="icon-left-small"></i>Back to Groups</a> </div>
                  <div class="col-lg-5 text-right MrTpMd-10"> <a href="javascript:window.history.back();" class="btn btn-default ">Cancel</a>
                    <button type="button" class="btn btn-dark ">Save</button>
                   </div>
				 </div> 
				 </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <h4 class="h3 padding-bottom-10">New Group</h4>
				<div class="row">
				<div class="col-sm-12" col-xs-12">
				 <label>Name<span class="text-red">*</span></label>
                    <input type="text" name="assets_name" class="form-control"  required>
				</div>
				</div>
               <div class="row">
				<div class="col-sm-12" col-xs-12">
				 <label>Description<span class="text-red"></span></label>
                    <textarea class="form-control" rows="5" id="comment" ></textarea>
				</div>
				</div>
				 
				</div>
				<div class="row">
				<div id="enablecriteria">
    <div class="rgcriteria" id="edit_filters">
  <div>
	  <h3 class="s-title">Conditions</h3>
    <span class=""></span>
  </div>
  <div class="col-sm-12">
  <p class="p2">Set conditions to add members to the group.</p></div>
	<div class="ui-form gray-box-rounded">
		<div class="choicelist">
		<ul>
				<li><input class="radio" id="match_type_any" name="match_type" value="any" type="radio"></li>
				<li><label class="radiolabel" for="match_type_any">Match <b>ANY</b> of the below</label></li>
				<li><input checked="checked" class="radio" id="match_type_all" name="match_type" value="all" type="radio"></li>
				<li><label class="radiolabel" for="match_type_all">Match <b>ALL</b> of the below</label></li>
				</ul>
		</div>
		<div id="groupDOM"><input name="filter_data" value="" type="hidden">
		<div class="conditionset" id="filterDOM">
			 <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Create New <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
  <li><a href="<?php echo WEB_ROOT;?>admin/Agent.php">Select Condition</a></li>
  <li><a href="<?php echo WEB_ROOT;?>admin/Agent.php">---------</a></li>
    <li><a href="<?php echo WEB_ROOT;?>admin/Agent.php">Departments</a></li>
    <li><a href="<?php echo WEB_ROOT;?>admin/Requestorgroup.php">Job Title</a></li>
    
  </ul>     </div>   
			<fieldset class="addchoice">
	         	<p>Add new condition</p> 
	         	<img alt="Add New choice" class="add" src="/images/add.png">
	    </fieldset>
    	</div>
    	</div>
	</div>
</div>

    <div id="members-list"></div>
</div>
 <div id="members-list"></div>
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
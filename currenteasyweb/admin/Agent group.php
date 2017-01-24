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
				 <label>Group Name<span class="text-red"></span></label>
                    <input type="text" name="assets_name" class="form-control" placeholder="Group Name" required>
				</div>
				</div>
               <div class="row">
				<div class="col-sm-12" col-xs-12">
				 <label>Group Description<span class="text-red"></span></label>
                    <input type="text" name="assets_name" class="form-control" rows="2" placeholder="Group Description" required>
				</div>
				</div>
				 <div class="row">
				<div class="col-sm-12" col-xs-12">
				 <label>Agents<span class="text-red"></span></label>
                    <input type="text" name="assets_name" class="form-control" rows="2" placeholder="Enter agent's name" required>
				</div>
				</div>
				<div class="row">
				<ul class="unstyled group-ticket-assign">
            				<li class="row-fluid">
            					<span class="span6 group-text-align">if a ticket remains un-assigned for more than :</span>
            					<div class="select2-container select2 span3" id="s2id_group_assign_time">    <a href="#" onclick="return false;" class="select2-choice">   <span>30 Minutes</span><abbr class="select2-search-choice-close" style="display:none;"></abbr>   <div><b></b></div></a>    <div class="select2-drop select2-offscreen">   <div class="select2-search">       <input autocomplete="off" class="select2-input" tabindex="0" type="text">   </div>   <ul class="select2-results">   </ul></div></div><select class="select2 span3" id="group_assign_time" name="group[assign_time]" style="display: none;"><option value="1800">30 Minutes</option>
<option value="3600">1 Hour</option>
<option value="7200">2 Hours</option>
<option value="14400">4 Hours</option>
<option value="28800">8 Hours</option>
<option value="43200">12 Hours</option>
<option value="86400">1 Day</option>
<option value="172800">2 Days</option>
<option value="259200">3 Days</option></select>
            				</li>
            				<li class="row-fluid">
            					<span class="span6 group-text-align"> &nbsp; &nbsp; ....then send escalation email to :</span>
            					 <div class="select2-container span3" id="s2id_escalate_to">    <a href="#" onclick="return false;" class="select2-choice select2-default">   <span>Select Agent</span><abbr class="select2-search-choice-close" style="display:none;"></abbr>   <div><b></b></div></a>    <div class="select2-drop select2-offscreen">   <div class="select2-search">       <input autocomplete="off" class="select2-input" tabindex="0" type="text">   </div>   <ul class="select2-results">   </ul></div></div><input id="escalate_to" name="group[escalate_to]" class="span3" data-placeholder="Select Agent" style="display: none;" value="" type="hidden">
            				</li>
            			</ul>
				</div>
</div>
</div>

           
                </div>



   

               
            

               
    <?php include("../include/footer.php"); ?>
  </div>
</div>
</body>
</html>
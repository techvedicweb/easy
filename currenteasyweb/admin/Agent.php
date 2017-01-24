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
        
            <div class="x_panel tile">
              <div class="x_title">
                <div class="row">
				  <div class="col-lg-12">
				  <div class="row" style="background:#fff;" data-spy="affix" data-offset-top="197">
             <?php require_once("../classes/Include_all.php");?>
               <form method="post" action="" name="add_groups">
                  <div class="col-lg-7 padding-top-10"> <a href="<?php echo WEB_ROOT;?>admin/addgroup.php" class="h4"><i class="icon-left-small"></i>Back to Groups</a> </div>
                  <div class="col-lg-5 text-right MrTpMd-10"> <a href="javascript:window.history.back();" class="btn btn-default ">Cancel</a>
                    
                      <input  type="submit" name="add_groups" class="btn btn-dark " value="Save">
                   
                  </div>
				 </div> 
				 </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <h4 class="h3 padding-bottom-10">New Group</h4>
				<div class="row">
				<div class="col-sm-12 col-xs-12">
				 <label>Group Name<span class="text-red"></span></label>
                    <input type="text" name="group_name" class="form-control" placeholder="Group Name" required>
				</div>
				</div>&nbsp;
               <div class="row ">
				<div class="col-sm-12 col-xs-12 padding-bottom-10">
				  <label for="comment">Group Description</label>
  <textarea class="form-control" name="group_description" rows="2" id="comment" Placeholder="Group Description"></textarea>
				</div>
				</div>
				 <div class="row">
				<div class="col-sm-12 col-xs-12">
				 <label>Agents<span class="text-red"></span></label>
         <select name="group_agents"  class="form-control" >
<?php
         $agent_obj=Assets::Agents('');
foreach ($agent_obj as $agent_val) 

echo "<option value='".$agent_val["id"]."'>".$agent_val["name"]."</option>";
  ?>
</select>
                   <!--  <input type="text" name="group_agents" class="form-control" rows="2" placeholder="Enter agent's name" required> -->
				</div>
				</div>&nbsp;
<!-- 				<div class="row">
				<ul class="unstyled group-ticket-assign">
            				<li class="row-fluid">
            					<span class="span6 group-text-align">if a ticket remains un-assigned for more than :</span>
            					<div class="select2-container select2 span3" id="s2id_group_assign_time">    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    30 Minutes<span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="#">1Hour</a></li>
    <li><a href="#">2Hour</a></li>
    <li><a href="#">3Hour</a></li>
    <li role="separator" class="divider">4Hour</li>
    <li><a href="#">5Hour</a></li>
  </ul>
            				<li class="row-fluid">
            					<span class="span6 group-text-align"> &nbsp; &nbsp; ....then send escalation email to :</span>
            					 <div class="select2-container span3" id="s2id_escalate_to">   <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Selext Ag......<span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="#"></a></li>
    <li><a href="#">None</a></li>
    <li><a href="#">Account Admin</a></li>
    <li role="separator" class="divider">4Hour</li>
    <li><a href="#">Rachel</a></li>
  </ul>
				</div>
</div>
</div> -->

           
                </div>



   

               
            

               
    <?php include("../include/footer.php"); ?>
  </div>
</div>
</body>
</html>
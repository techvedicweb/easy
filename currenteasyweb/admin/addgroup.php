<!DOCTYPE html>
<html lang="en">
<!-- <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script> -->
<body class="nav-md">
<div class="container body">
  <div class="main_container">
   
    <?php include("../include/top-nav.php"); ?>
     <?php include("../include/right-nav.php"); ?>
    <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-9 col-sm-8 col-xs-12 padding-top-10">
             <?php require_once("../classes/Include_all.php");?>
            <div class="x_panel tile">
              <div class="x_title">
                <div class="row">
                  <div class="col-lg-7 h4"><a href="<?php echo WEB_ROOT;?>admin/index.php"><i class="icon-cog"></i>Admin</a></div>
                  <div class="col-lg-5 text-right MrTpMd-10"> 
               <a href="<?php echo WEB_ROOT;?>admin/Agent.php"  class="btn btn-default dropdown-toggle">
    Create New <span class="caret"></span>
  </a>
<!--   <ul class="dropdown-menu">
    <li><a href="<?php echo WEB_ROOT;?>admin/Agent.php">Agent Group</a></li>
    <li><a href="<?php echo WEB_ROOT;?>admin/Requestorgroup.php">Requester Group</a></li>
    
  </ul>  -->     
					 </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
               <div class="list-page-header row-fluid"> 
    <ul id="groups" class="tabs" data-tabs="tabs">
    	<ul  class="nav nav-pills">
			<li class="active">
        <a  href="#1" data-toggle="tab">Agents</a>
			</li>
			<!-- <li><a href="#2" data-toggle="tab">Requester Groups</a>
			</li> -->
    </ul>
	<div class="x_title title1">
               </div>
  </div>
  <div class="tab-content">
   <div class="tab-pane active" id="1">
  <table class="table table-striped table1 " id="1a">
 
    <tbody>

 
      <?php
$group_agent_obj=Assets::GuropAgent('');
if($group_agent_obj!=''){
foreach ($group_agent_obj as  $agent_value){
  echo ' <tr>
      <td>
<div class="muted">'.$agent_value['group_name'].'</div>

      </td>
      <td class="text-right">
        <a href="'.WEB_ROOT.'admin/edit.php?id='.$agent_value['id'].'" class="btn btn-mini">Edit</a>

         
      <form method="post" action="" id="'.$agent_value['id'].'" style="display:none;">
           <input type="hidden" name="id" value="'.$agent_value['id'].'">
           <input type="hidden" name="delete_groups">
            </form> <i class="icon-trash" style="cursor:pointer;" id="'.$agent_value['id'].'" onclick="group_delete_form(this.id);"></i>

      </td>
    </tr>';

  }

}
    ?>
    
</tbody>
</table>
</div>
<!--2ndtable-->
<!-- <div class="tab-pane" id="2">
<table class="table table-striped">
    <tbody><tr id="itil_requester_group_4000031781">
      <td>
        <a href="/itil/requester_groups/4000031781/edit" class="item_info">Finance Team</a>
        <div class="muted"></div>
      </td>
      <td class="text-right">
       <a href="<?php echo WEB_ROOT;?>admin/editrequestorgroup.php" class="btn btn-mini">Edit</a>
        <i class="icon-trash"></i>
      </td>
    </tr>
 
</tbody></table>
</div>
--2ndtable end -->
  
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
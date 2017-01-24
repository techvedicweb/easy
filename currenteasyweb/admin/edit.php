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
                  <div class="col-lg-7 h4"><a href="<?php echo WEB_ROOT;?>admin/"><i class="icon-cog"></i>Admin</a></div>
                  <div class="col-lg-5 text-right MrTpMd-10"> 

                          <?php
$group_agent_obj=Assets::GuropAgent($_GET['id']);
foreach ($group_agent_obj as  $agent_value)

  ?>
<form method="post" action="" name="update_groups">
                     <button  class="btn btn-round btn-default"  data-dismiss="modal" onclick="window.history.back();" >Cancel</button>
					 <input type="submit" name="update_groups"  class="btn btn-round btn-dark"  data-dismiss="modal" value="Update">
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <h1 class="h4 padding-bottom-10">Edit Group</h1>
				  <!-- start table -->
				      <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						   <input type="hidden"  name="id" class="form-control" value="<?php echo $agent_value['id'];?>"  required >
                   
<b>Group Name</b><input type="text"  name="group_name" placeholder="Category Name" class="form-control" value="<?php echo $agent_value['group_name'];?>"  required >
                  </div>
                 </div>

                <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						  <p>
              
<b>Group description</b>

 </p>
                    <input type="text"  name="group_description" placeholder="Category Description" class="form-control"  value="<?php echo $agent_value['description'];?>" >
                  </div>
                 </div>
				 <div class="row">
			              <div class="col-sm-12  col-xs-12 padding-bottom-10">
						  <p>
               
<b>Agents</b>

</p>

 <select name="group_agents"  class="form-control" >
<?php
         $agent_obj=Assets::Agents('');
foreach ($agent_obj as $agent_val) {

echo "<option value='".$agent_val["id"]."' ";

if($agent_value['agents_id']==$agent_val['id']){
echo "selected";
}

echo ">".$agent_val["name"]."</option>";

}
  ?>
</select>

                  
                  </div>
                 </div>
<!-- <div class="row padding-bottom-10">
<div class="col-sm-8 col-xs-12 text-center" >
if a ticket remains un-assigned for more than : 
</div> 
<div class="col-sm-4 col-xs-12 " >
<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
   30 Minutes
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
</div> -->



</div>
</form>
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
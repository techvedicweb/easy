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
        <?php include("../classes/Include_all.php"); ?>
        <form action="" method="post" class="checkList" enctype="multipart/form-data">
          <div class="x_panel tile">
            <div class="x_title">
              <div class="row">
                <div class="col-lg-12">
                  <div class="row" style="background:#fff;" data-spy="affix" data-offset-top="197">
                    <div class="col-lg-7 padding-top-10"> <a href="#"  onclick="window.history.back();" class="h4"><i class="icon-left-small"></i>Back to Items List</a> </div>
                    <div class="col-lg-5 text-right MrTpMd-10"> <a href="#" onclick="window.history.back();" class="btn btn-danger btn-round">Cancel</a>
                      <div class="btn-group">
                        <input type="submit" value="Update" name="update_item" class="btn btn-dark btn-round">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>

<?php
          $id=mysql_real_escape_string($_GET['id']);
              $items_d="select items.*,assets_type.name as assets_name,location.location_name,impact.name as impact_name,department.name as department_name,agents.name as agent_name,CONCAT(requesters.first_name,' ',requesters.last_name) as requester_name from items left join assets_type on items.assets_type_id=assets_type.id left join location on items.location_id=location.id left join impact on items.impact_id=impact.id left join department on items.department_id=department.id left join agents on items.managed_by_id=agents.id left join requesters on items.used_by_id=requesters.id where items.id='$id'";
           $items=Common::FetchData($items_d);
if($items!=''){
foreach ($items as  $items_value){

  ?>

            <div class="x_content">
              <h1 class="h3 padding-bottom-10">Edit Assets</h1>
              <div class="row">
                <div class="col-sm-12 padding-bottom-10">
                  <input type="hidden" id="item_id" name="item_id" value="<?php echo $_GET['id'];?>">
                  <label>Display Name <span class="text-red">*</span></label>
                  <input type="text" name="display_name" class="form-control" value="<?php echo $items_value['display_name']; ?>" required>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 col-xs-12 padding-bottom-10">
                  <label>Assets Type <span class="text-red">*</span></label>
                  <select class="form-control" name="assets_type_id" id="assets_type_id" required>
                    <option value="">Please Select</option>
                    <?php
                        $assets_object=Assets::Assets_type();
                           if($assets_object!=''){
                        foreach ($assets_object as $view_assets_type) {                     
                        echo   '<option value="'.$view_assets_type["id"].'"';
if($items_value['assets_type_id']==$view_assets_type['id']){
echo "selected";
}
echo    '>'.$view_assets_type["name"].'</option>';

}
                        }
                        ?>
                  </select>
                </div>
                <div class="col-sm-6 col-xs-12 padding-bottom-10">
                  <label>Impact <span class="text-red"></span></label>
                  <select class="form-control" name="impact_id">
                    <?php
					$impact_object=Assets::Impact();
          if($impact_object!=''){
					foreach ($impact_object as $view_impact) {
echo   '<option value="'.$view_impact["id"].'"';
if($items_value['impact_id']==$view_impact['id']){
echo "selected";
}
echo    '>'.$view_impact["name"].'</option>';

					}
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
$dep_object=Assets::Department('');
if($dep_object!=''){
foreach ($dep_object as $view_dep_object) {
echo   '<option value="'.$view_dep_object["id"].'"';
if($items_value['department_id']==$view_dep_object['id']){
echo "selected";
}
echo    '>'.$view_dep_object["name"].'</option>';
}
}
?>
                  </select>
                </div>
              </div>
              <p class="margin-top-10">Description</p>
            
              
              <textarea type="text" name="description" rows="6" cols="20" style="width:100%; border:#ccc solid 1px;">
<?php echo $items_value['description']; ?>

              </textarea>

<div id="changed_div"></div>




              <p class="left_col padding-5 text-white margin-top-20">Assignment</p>
              <div class="row padding-top-10">
                <div class="col-sm-6 col-xs-12 padding-bottom-10">
                  <label>Location <span class="text-red">*</span></label>
                  <select class="form-control" name="location_id">

                               <?php
$loc_object=Assets::Location('');
if($loc_object!=''){
foreach ($loc_object as $view_loc_object) {
echo   '<option value="'.$view_loc_object["id"].'"';
if($items_value['location_id']==$view_loc_object['id']){
echo "selected";
}
echo    '>'.$view_loc_object["location_name"].'</option>';
}
}
?>
                  </select>
                </div>
                <div class="col-sm-6 col-xs-12 padding-bottom-10">
                  <label>Managed By <span class="text-red">*</span></label>
                  <select class="form-control" name="managed_by_id">
              <?php
          $agent_object=Assets::Agents('');
           if($agent_object!=''){
          foreach ($agent_object as $view_agent) {
          echo   '<option value="'.$view_agent["id"].'"';
if($items_value['managed_by_id']==$view_agent['id']){
echo "selected";
}
echo    '>'.$view_agent["name"].'</option>';

          }
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
          if($requester_object!=''){
          foreach ($requester_object as $view_requester) {      
          echo   '<option value="'.$view_requester["id"].'"';
if($items_value['used_by_id']==$view_requester['id']){
echo "selected";
}
echo    '>'.$view_requester["first_name"]." ".$view_requester["last_name"].'</option>';

          }
        }
          ?>
                  </select>
                </div>
                  <div class="col-sm-6 col-xs-12 padding-bottom-10">
                   <label class="padding-top-5">Attach a file (File size < 15 MB)</label>
                <div class="input-group no-left">
                  <input type="text" class="form-control" placeholder="No file(s) selected" >
                  <label class="input-group-btn"> <span class="btn btn-success"> Choose File
                    <input type="file" style="display: none;"  name="item_image_sent" accept="image/*">
                    <input type="hidden" name="img_name" value="<?php $items_value['attachment']; ?>">
                    </span> </label>
                </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-sm-6 col-xs-12 padding-bottom-10">
                     <label class="padding-top-5">Assigned on</label>
                     <input type="text" name="assign_date" class="form-control" value="<?php echo $items_value['assign_date']; ?>" id="datetimepicker_dark"/>
                  </div>
                  
              </div>

            </div>

<?php
          }

        }

        ?>
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

<script type="text/javascript">
$("#assets_type_id").change(function (){

var getproperty=$("#assets_type_id").val();
var item_get_id=$("#item_id").val();
if(getproperty!=''){
   
$.ajax({
type:'get',
url:'../classes/AssetFormEdit',
data:{'id':getproperty,'item_id':item_get_id},
success:function(data){
  $("#changed_div").html(data);
//alert(data);
}

});

}

});
</script>


            
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
                    <div class="col-lg-7 padding-top-10"> <a href="<?php echo WEB_ROOT;?>assets/index.php" class="h4"><i class="icon-left-small"></i>Back to Items List</a> </div>
                    <div class="col-lg-5 text-right MrTpMd-10"> <a href="<?php echo WEB_ROOT;?>assets/index.php" class="btn btn-danger btn-round">Cancel</a>
                      <div class="btn-group">
                        <input type="submit" value="Save" name="add_item" class="btn btn-dark btn-round">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <h1 class="h3 padding-bottom-10">New Assets</h1>
              <div class="row">
                <div class="col-sm-12 padding-bottom-10">
                  <label>Display Name <span class="text-red">*</span></label>
                  <input type="text" name="display_name" class="form-control" required>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 col-xs-12 padding-bottom-10">
                  <label>Assets Type <span class="text-red">*</span></label>
                  <select class="form-control" name="assets_type_id" id="assets_type_id" required>
                    <option value="">Please Select</option>
                    <?php
                        $assets_object=Assets::Assets_type();
                        foreach ($assets_object as $view_assets_type) {
                        echo   '<option value="'.$view_assets_type["id"].'">'.$view_assets_type["name"].'</option>';
                        }
                        ?>
                  </select>
                </div>
                <div class="col-sm-6 col-xs-12 padding-bottom-10">
                  <label>Impact <span class="text-red"></span></label>
                  <select class="form-control" name="impact_id">
                    <?php
					$impact_object=Assets::Impact();
					foreach ($impact_object as $view_impact) {
					echo   '<option value="'.$view_impact["id"].'">'.$view_impact["name"].'</option>';
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
					$dept_object=Assets::Department('');
					foreach ($dept_object as $view_dept) {
					echo   '<option value="'.$view_dept["id"].'">'.$view_dept["name"].'</option>';
					}
					?>
                  </select>
                </div>
              </div>
              <p class="margin-top-10">Description</p>
              <!-- start--> 
              <!--          <div class="btn-toolbar editor nav" data-role="editor-toolbar" data-target="#editor"> <a href="#" class="BoldAlign" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bold">&nbsp;</a> <a href="#" class="italicAlign" data-toggle="tooltip" data-placement="top" title="" data-original-title="Italic">&nbsp;</a> <a href="#" class="list" data-toggle="tooltip" data-placement="top" title="" data-original-title="List Circle">&nbsp;</a> <a href="#" class="listNum" data-toggle="tooltip" data-placement="top" title="" data-original-title="List Number">&nbsp;</a> <a href="#" class="shiftTab" data-toggle="tooltip" data-placement="top" title="" data-original-title="Shift Tab">&nbsp;</a> <a href="#" class="shiftTab2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Shift Tab">&nbsp;</a> <a href="#" class="fontColor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Font Color">&nbsp;</a> <a href="#" class="backColor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back Color">&nbsp;</a> <span class="dropdown"> <a href="#" class="dropdown-toggle links" data-toggle="dropdown" role="button" aria-expanded="false" title="link">&nbsp;</a>
                  <ul class="dropdown-menu">
                    <li><a href="#insertLink" data-toggle="modal" data-target="#insertLink">Insert Link ...</a></li>
                    <li><a href="#">Unlink</a></li>
                  </ul>
                </div>
                <div id="editor" class="editor-wrapper placeholderText" name="descriptions" contenteditable="true"></div> --> 
              
              <!--end-->
              
              <textarea type="text" name="description" rows="6" cols="20" style="width:100%; border:#ccc solid 1px;"></textarea>

<div id="changed_div">
    
</div>




              <p class="left_col padding-5 text-white margin-top-20">Assignment</p>
              <div class="row padding-top-10">
                <div class="col-sm-6 col-xs-12 padding-bottom-10">
                  <label>Location <span class="text-red">*</span></label>
                  <select class="form-control" name="location_id">

                    <?php
$loc_object=Assets::Location('');
if($loc_object!=''){
foreach ($loc_object as $view_loc_object) {
echo   '<option value="'.$view_loc_object["id"].'">'.$view_loc_object["location_name"].'</option>';
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
          foreach ($agent_object as $view_agent) {
          echo   '<option value="'.$view_agent["id"].'">'.$view_agent["name"].'</option>';
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
          foreach ($requester_object as $view_requester) {
          echo   '<option value="'.$view_requester["id"].'">'.$view_requester["first_name"]." ".$view_requester["last_name"].'</option>';
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
                    </span> </label>
                </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-sm-6 col-xs-12 padding-bottom-10">
                     <label class="padding-top-5">Assigned on</label>
                     <input type="text" name="assign_date" class="form-control" id="datetimepicker_dark"/>
                  </div>
                  
              </div>

            </div>
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
if(getproperty!=''){
   
$.ajax({
type:'get',
url:'../classes/AssetForm',
data:{'id':getproperty},
success:function(data){
 
  $("#changed_div").html(data);
 //$("#changed_div").prepend('<p class="left_col padding-5 text-white margin-top-20">Properties</p>');

//alert(data);
}

});

}

});
</script>


            
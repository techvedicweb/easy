<!DOCTYPE html>
<html lang="en">
<body class="nav-md">
<div class="container body">
  <div class="main_container">
      <?php include("../include/top-nav.php"); ?>
    <?php include("../include/right-nav.php"); ?>
   <?php include("../classes/Include_all.php"); ?>
    <div class="right_col" role="main">
      <div class="row">
        <div class="col-sm-7 col-md-8 col-lg-9 margin-top-10">
          <div class="x_panel tile">
            <div class="x_title">
              <ol class="breadcrumb noBorderRadius noMargin">
                <li><a href="<?php echo WEB_ROOT;?>assets/index.php">Back on Item List</a></li>
              </ol>
              <div class="clearfix"></div>
            </div>



              <?php
          $id=mysql_real_escape_string($_GET['id']);
              $items_d="select items.id,items.assign_date,items.description,items.form_data,items.assets_type_id,items.display_name,assets_type.name as assets_name,location.location_name,impact.name as impact_name,department.name as department_name,agents.name as agent_name,CONCAT(requesters.first_name,' ',requesters.last_name) as requester_name from items left join assets_type on items.assets_type_id=assets_type.id left join location on items.location_id=location.id left join impact on items.impact_id=impact.id left join department on items.department_id=department.id left join agents on items.managed_by_id=agents.id left join requesters on items.used_by_id=requesters.id where items.id='$id'";
           $items=Common::FetchData($items_d);
if($items!=''){
foreach ($items as  $items_value){

  ?>
            <div class="x_content" id="imageSelecter">
              <h2 class="h3 padding-bottom-10"><?php echo $items_value['display_name']; ?></h2>
              <ul class="nav nav-pills">
                <li class="active"><a class="btn btn-default" href="#tab1" data-toggle="tab"><i class="icon-cubes"></i> Overview</a></li>
                <li><a href="#tab2" class="btn btn-default" data-toggle="tab"><i class="icon-book-1"></i> Relationships</a></li>
                <li><a href="#tab3" class="btn btn-default" data-toggle="tab"><i class="icon-desktop"></i> Requests</a></li>
              </ul>
              <div class="tab-content margin-top-20">
                <div class="tab-pane active" id="tab1">
                  <h2 class="h3"><?php echo $items_value['assets_name']; ?></h2>
                  <!-- start -->
                  <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                      <tbody>
                        <?php
                       
$sql="SELECT * FROM assets_form where assets_type_id='".$items_value['assets_type_id']."' ORDER BY id";
$result = $link->query($sql);
  $d=unserialize($items_value['form_data']);
  $i=0;
  while($product = mysqli_fetch_array($result)){  
  echo '<tr><td><span class="text-grey">'.$product['name'].':</span> <a href="#">'.$d[$i].'</a></td></tr> ' ;
$i++;
}
    ?>                   
                 <tr><td><span class="text-grey">Description : </span> <?php echo $items_value['description']; ?></td></tr>
                   <tr><td><span class="text-grey">Department : </span> <?php echo $items_value['department_name']; ?></td></tr>
                    <tr><td><span class="text-grey">Location : </span> <?php echo $items_value['location_name']; ?></td></tr>
                     <tr><td><span class="text-grey">Managed By : </span> <?php echo $items_value['agent_name']; ?></td></tr>
                    <tr><td><span class="text-grey">Used By : </span> <?php echo $items_value['requester_name']; ?></td></tr>
                     <tr><td><span class="text-grey">Assign Date : </span> <?php echo $items_value['assign_date']; ?></td></tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- end -->                               
                </div>
             <!--    <div class="tab-pane" id="tab2">
                  <p> There are no Relationships available. <a href="<?php echo WEB_ROOT;?>products/addnewrelationship.php" class="green">Add new</a> </p>
                </div> -->
            <!--     <div class="tab-pane" id="tab3">
                  <p> There are no Asset available. </p>
                </div> -->
              </div>
            </div>

<?php
              }
}
?>
          </div>
        </div>
        <div class="col-sm-5 col-md-4 col-lg-3 col-xs-12 margin-top-10">
          <div class="x_panel tile">
            <div class="x_title">  <a href="<?php echo WEB_ROOT;?>assets/edit.php?id=<?php echo $_GET['id'];?>" class="btn btn-dark noBorderRadius">Edit</a> 
               <form action="" method="post"><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"><input class="btn btn-danger noBorderRadius"  type="submit" name="delete_item" value="Delete"></form> 
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <p><a href="#" data-toggle="tooltip" data-placement="top" title="Product">Apple MacBook Air 13</a></p>
              <form action="#" class="checkList">
                <h5 class="weight-600 padding-top-5">Edit Properties</h5>
                <label>Impact</label>
                <select class="form-control margin-bottom-10">
                     <?php
                        $impact_object=Assets::Impact('');
                        foreach ($impact_object as $impact_object_view) {
                        echo   '<option value="'.$impact_object_view["id"].'">'.$impact_object_view["name"].'</option>';
                        }
                        ?>
                </select>
              
                <label>Location</label>
                <div class="form-group">
                  <select class="select2_group form-control margin-bottom-10">
                    <?php
                        $location_object=Assets::Location('');
                        foreach ($location_object as $location_object_view) {
                        echo   '<option value="'.$location_object_view["id"].'">'.$location_object_view["location_name"].'</option>';
                        }
                        ?>
                  </select>
                </div>
                <label>Department</label>
                <select class="form-control margin-bottom-10">
                     <?php
                        $department_object=Assets::Department('');
                        foreach ($department_object as $department_object_view) {
                        echo   '<option value="'.$department_object_view["id"].'">'.$department_object_view["name"].'</option>';
                        }
                        ?>
                </select>
                <label>Used By</label>
                  <select class="form-control margin-bottom-10">
                 <?php
                        $requesters_object=Assets::Requester('');
                        foreach ($requesters_object as $requesters_object_view) {
                        echo   '<option value="'.$requesters_object_view["id"].'">'.$requesters_object_view["first_name"].'</option>';
                        }
                        ?>
                      </select>


                <label>Managed By</label>
                <select class="form-control margin-bottom-10">
                     <?php
                        $agrnts_object=Assets::Agents('');
                        foreach ($agrnts_object as $agrnts_object_view) {
                        echo   '<option value="'.$agrnts_object_view["id"].'">'.$agrnts_object_view["name"].'</option>';
                        }
                        ?>
                </select>
                <p class="text-right">
                  <button type="button" class="btn btn-dark noBorderRadius">Update<i class="icon-angle-double-right"></i></button>
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include("../include/footer.php"); ?>
  </div>
</div>
<!-- <div class="modal fade" id="attach" role="dialog">
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
        <button type="button" class="btn btn-default" data-dismiss="modal" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-dark" data-dismiss="modal">Continue</button>
      </div>
    </div>
  </div>
</div> -->


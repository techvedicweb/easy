<!DOCTYPE html>
<html lang="en">
<!-- <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script> -->
<body class="nav-md">
<div class="container body">
  <div class="main_container">
   
    <?php include("../include/top-nav.php"); ?>
     <?php include("../include/right-nav.php"); 
 
     ?>
    <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-9 col-sm-8 col-xs-12 padding-top-10">
          <?php require_once("../classes/Include_all.php"); ?>
            <div class="x_panel tile">
              <div class="x_title">
                <div class="row">
                  <div class="col-lg-7 h4"><a href="<?php echo WEB_ROOT;?>admin/index.php"><i class="icon-cog"></i>Admin</a></div>
                  <div class="col-lg-5 text-right MrTpMd-10"> 
           <a href="<?php echo WEB_ROOT;?>assets/add_location.php" class="btn btn-info"> New Location</a>
     
					 </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
               <div class="list-page-header row-fluid"> 
			   <h3><b>Locations</b></h3>
	
  </div>
  <div class="row">
  <div class="padding-bottom-10">
  

    <table class="table table2">

        </thead>

        <tbody>
<?php
$loc_obj=Assets::Location('');
if($loc_obj!='')
foreach ($loc_obj as $loc_value) {

 echo '<tr class="assTable">
    
                <td >'.$loc_value['location_name'].'</td>
                   <td><span style="float:right;"><a href="'.WEB_ROOT.'assets/editindexlocation.php?id='.$loc_value['id'].'"><i class="icon-pencil"></i></a> &nbsp;<form action="" method="post" style="display:none;" id="'.$loc_value['id'].'">
                 <input type="hidden" name="id" value="'.$loc_value['id'].'">
                  <input type="hidden" name="delete_location" >
                   </form><i onclick="location_delete_form(this.id)" id="'.$loc_value['id'].'" style="cursor:pointer;" class="icon-trash"></i>
                   </span></td>  
                
            </tr>';

}
?>
           

			
        </tbody>

    </table>


  
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
<!DOCTYPE html>
<html lang="en">
<body class="nav-md">
<div class="container body">
  <div class="main_container">
       <?php include("../include/top-nav.php"); 
     include("../include/right-nav.php"); ?>
    <div class="right_col" role="main">
      <div class="row checkList">
        <div class="col-md-9 col-sm-8 col-xs-12 margin-top-10">
            <div class="x_panel tile">
              <div class="x_title">
                <div class="row">
                    <?php require_once("../classes/Include_all.php"); ?>
				  <div class="col-lg-12">
				  <div class="row affix-top" style="background:#fff;" data-spy="affix" data-offset-top="197">

				  	 <p id="res"></p>
                  <div class="col-lg-7 padding-top-10"> <a href="<?php echo WEB_ROOT;?>requester/index.php" class="h4"><i class="icon-left-small"></i>Back to Requesters</a> </div>
                  <div class="col-lg-5 text-right MrTpMd-10"> 
                  	 
                  <a href="<?php echo WEB_ROOT;?>agents/index.php" class="btn btn-danger btn-round" style="margin-top:3px; position:relative">Cancel</a>
                     <form id="form" enctype="multipart/form-data">
                    <div class="btn-group">
                       <input type="submit" value="Save" data-inline="true" data-rel="back"  name="add_requester" class="btn btn-dark btn-round">
                    </div>
                  </div>
				 </div> 
				 </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <h1 class="h3 padding-bottom-10">New Requester</h1>
                <div class="row">
                  <div class="col-sm-4 col-xs-12 padding-bottom-10">
                     <div class="bgProfile">
						<div class="panel-body ">
							<p><img src="<?php echo IMAGE_ROOT;?>profile_blank_thumb.gif" id="output"  alt="profile" class="pull-left profilePic img-responsive">

							<div class="clearfix"></div>
							</p>


							<div class="input-group no-left">
			                  <input type="text" class="form-control" placeholder="No File Selected" readonly="">
			                  <label class="input-group-btn"> <span class="btn btn-success"> Choose File
			                    <input type="file" style="display: none;" multiple="" name="requester_image_sent"  onchange="loadFile(event)" accept="image/*">
			                    </span> </label>
			                </div>
							
						   
						  <p class="p-xs padding-top-5">A Profile image of the person, it's best if the picture has the same length and height</p>
						</div> 	

            <script>
    // code for show uploaded file
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
						
					</div>	
                  </div>
                  <div class="col-sm-8 col-xs-12 padding-bottom-10">
					<h4 class="h4 padding-top-10 weight-600">Requester information</h4>
				
        
					    <p class="margin-top-10">
						  <label>Full Name</label>
						  <input type="text" name="requester_name" id="requester_name" class="form-control">
						</p>
						<p class="margin-top-10">
						  <label>Last Name</label>
						  <input type="text" name="requester_last_name" id="requester_last_name" class="form-control">
						</p>
						
						
						<p style="margin-bottom:0">
							<label>Email</label>
							
							  <div data-duplicate="email" data-duplicate-min="0" style="margin-top:5px" >
								  <span data-duplicate-add="email" class="btn btn-sm btn-success">Add Another Email</span>
								  <span data-duplicate-remove="email" class="btn btn-sm btn-danger">Remove</span>
								  <input type="email" name="requester_email[]" id="email" class="form-control">
							  </div>
						</p>
					  
						<p class="margin-top-10">
						  <label>Title</label>
						  <input type="text" name="title" id="title" class="form-control">
						</p>
						<p class="margin-top-10">
						  <label>Work Phone</label>
						  <input type="text" name="phone_number" id="phone" class="form-control">
						</p>
						<p class="margin-top-10">
						  <label>Mobile Phone</label>
						  <input type="text" name="mobile_number" id="mobile" class="form-control">
						</p>
						<p class="margin-top-10">
						  <label>Department</label>
						  <select class="form-control" name="department_id">
                            <?php
$dep_object=Assets::Department('');
if($dep_object!=''){
foreach ($dep_object as $view_dep_object) {
echo   '<option value="'.$view_dep_object["id"].'">'.$view_dep_object["name"].'</option>';
}
}
?>
                          </select>
						</p>
						<p class="margin-top-10">
						  <label>Reporting Manager</label>
						  <input type="text" placeholder="Enter Reporting Manager Name" name="reporting_manager_id" id="mob" class="form-control">
						</p>
						<div class="margin-top-10">
						  <label>Address</label>
						  <!-- start-->
							<!-- <div class="btn-toolbar editor nav" data-role="editor-toolbar" data-target="#editor"> <a href="#" class="BoldAlign" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bold">&nbsp;</a> <a href="#" class="italicAlign" data-toggle="tooltip" data-placement="top" title="" data-original-title="Italic">&nbsp;</a> <a href="#" class="list" data-toggle="tooltip" data-placement="top" title="" data-original-title="List Circle">&nbsp;</a> <a href="#" class="listNum" data-toggle="tooltip" data-placement="top" title="" data-original-title="List Number">&nbsp;</a> <a href="#" class="shiftTab" data-toggle="tooltip" data-placement="top" title="" data-original-title="Shift Tab">&nbsp;</a> <a href="#" class="shiftTab2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Shift Tab">&nbsp;</a> <a href="#" class="fontColor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Font Color">&nbsp;</a> <a href="#" class="backColor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back Color">&nbsp;</a> <span class="dropdown"> <a href="#" class="dropdown-toggle links" data-toggle="dropdown" role="button" aria-expanded="false" title="link">&nbsp;</a>
							  <ul class="dropdown-menu">
								<li><a href="#insertLink" data-toggle="modal" data-target="#insertLink">Insert Link ...</a></li>
								<li><a href="#">Unlink</a></li>
							  </ul>
							</div> -->
							
							<textarea name="address" id="descr" style="width:100%; border:#ccc solid 1px; height: 130px;">
							</textarea>
						  <!--end-->
						</div>
						
						<p class="margin-top-10">
						  <label>Location</label>
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
						</p>
						<div class="margin-top-10 border-bottom padding-bottom-30">
						  <label>Background information</label>
						  <!-- start-->
							<!-- <div class="btn-toolbar editor nav" data-role="editor-toolbar" data-target="#editor"> <a href="#" class="BoldAlign" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bold">&nbsp;</a> <a href="#" class="italicAlign" data-toggle="tooltip" data-placement="top" title="" data-original-title="Italic">&nbsp;</a> <a href="#" class="list" data-toggle="tooltip" data-placement="top" title="" data-original-title="List Circle">&nbsp;</a> <a href="#" class="listNum" data-toggle="tooltip" data-placement="top" title="" data-original-title="List Number">&nbsp;</a> <a href="#" class="shiftTab" data-toggle="tooltip" data-placement="top" title="" data-original-title="Shift Tab">&nbsp;</a> <a href="#" class="shiftTab2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Shift Tab">&nbsp;</a> <a href="#" class="fontColor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Font Color">&nbsp;</a> <a href="#" class="backColor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back Color">&nbsp;</a> <span class="dropdown"> <a href="#" class="dropdown-toggle links" data-toggle="dropdown" role="button" aria-expanded="false" title="link">&nbsp;</a>
							  <ul class="dropdown-menu">
								<li><a href="#insertLink" data-toggle="modal" data-target="#insertLink">Insert Link ...</a></li>
								<li><a href="#">Unlink</a></li>
							  </ul>
							</div> -->
						
							<textarea name="backgroung_information" id="descr" style="width:100%; border:#ccc solid 1px; height: 130px;"></textarea>
						  <!--end-->
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




<script>

// for ajax data Add 

$(document).ready(function(){
$('#form').click(function(event) {
   var agent_name=$("#requester_name").val() ;
  if(agent_name==''){
    alert('Please Fill Requester Name');
return false;
  }
 event.preventDefault();
  var formData = new FormData($(this)[0]);
//var post = $('#form').serialize(); 
$.ajax({
        type: "post",
        url: "../classes/AddAssets",
        data: formData,      
        async: false,
    cache: false,
    contentType: false,
    processData: false,
        success: function(result)
            {
$("#res").html(result);

if(result=="Requester Added Successfully"){
  alert(result);
 document.getElementById("form").reset();
 window.location.href="index.php";
}
           
                }
        });

 });

 });

 </script>


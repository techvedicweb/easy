<!DOCTYPE html>
<html lang="en">
<body class="nav-md">

	<link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.4.0/css/froala_editor.min.css' rel='stylesheet' type='text/css' />
<link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.4.0/css/froala_style.min.css' rel='stylesheet' type='text/css' />

<!-- Include JS file. -->
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.4.0/js/froala_editor.min.js'></script>
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
                

                  <div class="col-lg-7 padding-top-10"> <a href="<?php echo WEB_ROOT;?>agents/index.php" class="h4"><i class="icon-left-small"></i>Back to Contracts</a> </div>
                  <div class="col-lg-5 text-right MrTpMd-10"> 

                  
                  <a href="<?php echo WEB_ROOT;?>agents/index.php" class="btn btn-danger btn-round">Cancel</a>
                     <form id="form" enctype="multipart/form-data">
                    <div class="btn-group">
                       
                     <!--  <button id="showResults" value="Save" data-inline="true" data-rel="back"  name="add_agent" class="btn btn-dark btn-round">Save</button> -->
                    </div>

                     <input type="submit" value="Save" data-inline="true" data-rel="back"  name="add_agent" class="btn btn-dark btn-round">
                  </div>
				 </div> 
				 </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <h1 class="h3 padding-bottom-10">New Agent</h1>
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
			                    <input type="file" style="display: none;" multiple="" name="agent_image_sent"  onchange="loadFile(event)" accept="image/*">
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
                    <div class="row">
					    <div class="col-sm-2">
						  <p><strong>Agent Type</strong></p>
						</div>
						<div class="col-sm-5">
						  <div>
						    <input type="radio" name="agent_type" value="Full Time">
							<label for="test1">Full time</label>
						  </div>
						</div>
						<div class="col-sm-5">
						  <div>
						    <input type="radio" name="agent_type" value="Occasional">
							<label for="test2">Occasional</label>
						  </div>  
						</div>
					</div>
					<h4 class="h4 padding-top-10 weight-600">Agent information</h4>
				
        
					    <p class="margin-top-10">
						  <label>Full Name</label>
						  <input type="text" name="agent_name" id="agent_name" class="form-control" required>
						</p>
						<p class="margin-top-10">
						  <label>Email</label>
						  <input type="emai" name="email" id="email" class="form-control">
						</p>
						<p class="margin-top-10">
						  <label>Title</label>
						  <input type="text" name="title" id="title" class="form-control">
						</p>
						<p class="margin-top-10">
						  <label>Phone No.</label>
						  <input type="text" name="phone_number" id="phone" class="form-control">
						</p>
						<p class="margin-top-10">
						  <label>Mobile No.</label>
						  <input type="text" name="mobile_number" id="mob" class="form-control">
						</p>
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
						<p class="margin-top-10">
						  <label>Reporting Manager</label>
						  <input type="text" name="reporting_manager" id="mob" class="form-control">
						</p>

						<div class="margin-top-10 border-bottom padding-bottom-30">
						  <label>Signature</label>
						  <!-- start-->
							<!-- <div class="btn-toolbar editor nav" data-role="editor-toolbar" data-target="#editor"> <a href="#" class="BoldAlign" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bold">&nbsp;</a> <a href="#" class="italicAlign" data-toggle="tooltip" data-placement="top" title="" data-original-title="Italic">&nbsp;</a> <a href="#" class="list" data-toggle="tooltip" data-placement="top" title="" data-original-title="List Circle">&nbsp;</a> <a href="#" class="listNum" data-toggle="tooltip" data-placement="top" title="" data-original-title="List Number">&nbsp;</a> <a href="#" class="shiftTab" data-toggle="tooltip" data-placement="top" title="" data-original-title="Shift Tab">&nbsp;</a> <a href="#" class="shiftTab2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Shift Tab">&nbsp;</a> <a href="#" class="fontColor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Font Color">&nbsp;</a> <a href="#" class="backColor" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back Color">&nbsp;</a> <span class="dropdown"> <a href="#" class="dropdown-toggle links" data-toggle="dropdown" role="button" aria-expanded="false" title="link">&nbsp;</a>
							  <ul class="dropdown-menu">
								<li><a href="#insertLink" data-toggle="modal" data-target="#insertLink">Insert Link ...</a></li>
								<li><a href="#">Unlink</a></li>
							  </ul>
							</div> -->
							
							<textarea name="signature" id="descr" style="width:100%; border:#ccc solid 1px; height: 130px;"></textarea>
						  <!--end-->
						</div>
						<h4 class="h4 padding-top-10 weight-600">Roles and Scope</h4>
						<div class="row margin-top-20">
						    <div class="col-sm-5 col-md-4 col-xs-12 weight-600">
							     Ticket Scope
							</div>
							<div class="col-sm-7 col-md-8 col-xs-12">
								<input type="radio" name="ticket_scope" id="global" value="Group Acess">
								<label for="global">Group Access
								<!-- <div class="p-xs text-gray padding-bottom-10">Can view all Tickets in the Helpdesk</div> -->
								</label><br>
								<input type="radio" name="ticket_scope" id="group1" value="Global Access">
								<label for="group1">Global Access
							<!-- 	<div class="p-xs text-gray padding-bottom-10">Can view all Tickets in the Helpdesk</div> -->
								</label><br>
								<input type="radio" name="ticket_scope" id="restricted" value="Restricted Access">
								<label for="restricted">Restricted Access
						<!-- 		<div class="p-xs text-gray padding-bottom-10">Can view all Tickets in the Helpdesk</div> -->
								</label>
								
							</div>
						</div>
						<div class="row margin-top-20">
						    <div class="col-sm-5 col-md-4 col-xs-12 weight-600 padding-top-5 padding-bottom-10">
							     Agent Role
							</div>
							<div class="col-sm-7 col-md-8 col-xs-12">
								<a href="javascript:void(0)" data-toggle="modal" data-target="#attach" class="btn btn-success">Associate Roles </a>
							</div>
						</div>
			
                  </div>
                </div>
              </div>
            </div>
 
            <div class="modal fade" id="attach" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content noBorderRadius">
				   <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Roles</h4>
                  </div>
                  <div class="modal-body">
                    <div class="table-responsive margin-top-20 checkList">
                      <table class="table table-striped jambo_table bulk_action">
                        <tbody>
                          <tr>
                            <td>
							    <input type="checkbox" id="admin" name="associate_role[]" value="Account Admin">
								<label for="admin">Account Admin
								<div class="p-xs text-gray padding-bottom-10">Can view all Tickets in the Helpdesk</div>
								</label>
							</td>
                          </tr>
						  <tr>
							<td>
							    <input type="checkbox" id="sd" name="associate_role[]" value="SD Supervisor">
								<label for="sd">SD Supervisor
								<div class="p-xs text-gray padding-bottom-10">Can view all Tickets in the Helpdesk</div>
								</label>
							</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="modal-footer">
				    <button type="button" class="btn btn-default noBorderRadius" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-default noBorderRadius" data-dismiss="modal">Attach</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      <!--   <div class="col-md-3 col-sm-4 col-xs-12 margin-top-10">
          <div class="x_panel tile overflow_hidden">
            <div class="x_title">
              <h2>Contracts</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa icon-up-open"></i></a> </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa icon-wrench"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a> </li>
                    <li><a href="#">Settings 2</a> </li>
                  </ul>
                </li>
                <li><a class="close-link"><i class="fa icon-cancel"></i></a> </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <p>Freshservice's contract management module lets you manage contracts established with third-party vendors.</p>
              <p>Freshservice supports different types of contracts – from creating your very own custom contract types to supporting lease, maintenance, as well as software license contracts, by default.</p>
              <p>Note - Only users who have drafted the contract will be able to submit the contract for approval.</p>
            </div>
          </div>
        </div> -->
      </div>
    </div>
    <?php include("../include/footer.php"); ?>
  </div>
</div>
</body>
</html>
<script>
$(document).ready(function(){
$('#form').click(function(event) {
   var agent_name=$("#agent_name").val() ;
  if(agent_name==''){
    alert('Please Fill Agent Name');
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

if(result=="Agent Added Successfully"){
  alert(result);
 document.getElementById("form").reset();
 window.location.href="index.php";
}
           
                }
        });

 });

 });
 </script>
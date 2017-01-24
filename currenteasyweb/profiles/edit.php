<!DOCTYPE html>
<html lang="en">
<body class="nav-md">
<div class="container body">
  <div class="main_container">
     <?php include("../include/top-nav.php"); ?>
    <?php include("../include/right-nav.php"); ?>
   <?php include("../classes/UpdateProfile.php"); ?>
   <?php include("../classes/Language.php"); ?>
  
    <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-9 col-sm-8 col-xs-12 padding-top-10">
          <?php if(isset($_POST['update_profile'])){
            $up_profile=new UpdateProfile();
            $upresult=$up_profile->update_profile();
            if($upresult==true){
              echo "<script type='text/javascript'>window.location.href='index';</script>";
            }
} ?>
          <form action="" method="post" class="checkList" name="profile_update" id="profile-form" novalidate="novalidate" enctype="multipart/form-data">
            <div class="x_panel tile">
              <div class="x_title">
                <div class="row">
                  <div class="col-lg-7 padding-top-10"> <a href="<?php echo WEB_ROOT;?>index.php" class="h4"><i class="icon-left-small"></i>Back to Dashboard</a> </div>
                  <div class="col-lg-5 text-right MrTpMd-10"> <a href="<?php echo WEB_ROOT;?>profiles/index.php" class="btn btn-danger btn-round">Cancel</a>
                    <div class="btn-group">
                      <input type="submit" name="update_profile" value="Update" id="profile_update" class="btn btn-success btn-round">
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <h1 class="h3 padding-bottom-10">Edit Profile</h1>
                <label>Full Name</label>
                <input  type="text" id="full_name" name="full_name" class="form-control margin-bottom-20" value="<?php echo $viewdata['name']; ?>" placeholder="Name">
                <label>Email</label>
                <input  type="email" name="email" placeholder="Email" value="<?php echo $viewdata['email'];?>" class="form-control margin-bottom-20">
                <label>Phone No</label>
                <input type="text" name="mobile_number" value="<?php echo $viewdata['mobile_number']; ?>" class="form-control margin-bottom-20" placeholder="mobile">
                <img src="<?php if($viewdata['profile_pic']!=''){
echo DOCS_ROOT.$_SESSION['userid']."/profile/".$viewdata['profile_pic'];
             }else{
              echo IMAGE_ROOT."profile.gif";
             } ?>" id="output"   alt="No File Selected" class="img-circle" style="padding:3px;display:block;" height="100" width="100"><br>
                <p>A Profile image of the person</p>
                <input type="file" name="profilepic"  onchange="loadFile(event)" name="profilepic" class="margin-bottom-20">
                
                  <input type="text" name="oldpic" value="<?php echo $viewdata['profile_pic'];?>" style="display:none;">
                <label>Language</label>
                <div class="form-group margin-bottom-20">
                  <select class="select2_group form-control" name="user_language">
                   <?php if($viewdata['user_language']!=''){
                    echo "<option value='".$viewdata['user_language']."' selected>".$viewdata['user_language']."</option>";
                   }?>
                    
                   

<?php
$languages=Language::all_laguage();
foreach ($languages as $view_lang) {
echo   '<option value="'.$view_lang["name"].'">'.$view_lang["name"].'</option>';

}
?>

                  </select>
                </div>
                <label>Location</label>
                <input type="text" value="<?php echo $viewdata['location']; ?>" placeholder="Your Location" name="location" class="form-control margin-bottom-20">
                <label>Reporting manager</label>
                <input type="text" name="reporting_manager" value="<?php echo $viewdata['reporting_manager']; ?>" placeholder="Enter Reporting Manager's Name" class="form-control margin-bottom-20">
               <!--  <p>Signature</p> -->
                <!-- start-->
            <!--     <div class="btn-toolbar editor nav" data-role="editor-toolbar" data-target="#editor"> <a href="#" class="BoldAlign" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bold">&nbsp;</a> <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Italic" class="italicAlign">&nbsp;</a> <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="List Circle" class="list">&nbsp;</a> <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="List Number" class="listNum">&nbsp;</a> <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Shift Tab" class="shiftTab">&nbsp;</a> <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Shift Tab" class="shiftTab2">&nbsp;</a> <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Font Color" class="fontColor">&nbsp;</a> <span class="dropdown"> <a href="#" class="dropdown-toggle links" data-toggle="dropdown" role="button" aria-expanded="false" title="link">&nbsp;</a>
                  <ul class="dropdown-menu">
                    <li><a href="#insertLink" data-toggle="modal" data-target="#insertLink">Insert Link ...</a></li>
                    <li><a href="#">Unlink</a></li>
                  </ul>
                  </span> <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Image" data-toggle="modal" data-target="#imageSelecter" class="imageSelect">&nbsp;</a> <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Align" class="imageSelect2">&nbsp;</a> </div>
                <div id="editor" class="editor-wrapper placeholderText" contenteditable="true"></div>
                <textarea name="descr" id="descr" style="display:none;"></textarea>
                <!--end-->
              </div>
            </div> 
           <!--  <div class="modal fade" id="insertLink" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content noBorderRadius">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Link</h4>
                  </div>
                  <div class="modal-body">
                    <ul class="nav nav-pills">
                      <li class="active"><a class="btn btn-default" href="#tab1" data-toggle="tab">URL</a></li>
                      <li><a href="#tab2" class="btn btn-default" data-toggle="tab">Email</a></li>
                      <li><a href="#tab3" class="btn btn-default" data-toggle="tab">Anchor</a></li>
                    </ul>
                    <div class="tab-content padding-top-10">
                      <div class="tab-pane active" id="tab1">
                        <p class="padding-top-10">
                          <label>URL</label>
                          <input type="text" class="form-control">
                        </p>
                      </div>
                      <div class="tab-pane" id="tab2">
                        <p class="padding-top-10">
                          <label>Email</label>
                          <input type="email" class="form-control">
                        </p>
                      </div>
                      <div class="tab-pane" id="tab3">
                        <p class="padding-top-10">
                          <label>Anchor</label>
                          <input type="text" class="form-control">
                        </p>
                      </div>
                    </div>
                    <p>
                      <label>text</label>
                      <input type="text" class="form-control">
                    </p>
                    <p>
                      <input type="checkbox" id="newTab" />
                      <label for="newTab">Open link in new tab</label>
                    </p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default noBorderRadius" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-dark noBorderRadius">Insert</button>
                  </div>
                </div>
              </div>
            </div> -->
          </form>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12 margin-top-10">
          <div class="x_panel tile overflow_hidden">
            <div class="x_title">
              <h2>Change Password</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <p id="pass_update_result"></p>
              <form  class="checkList">
                <label>Current password</label>
                <input type="password" id="current_password" name="current_password" class="form-control margin-bottom-10" required>
                <label>New password</label>
                <input type="password" id="new_password" name="new_password" class="form-control margin-bottom-10" required>
                <label>Confirm password</label>
                <input type="password" id="repeat_password" name="confirm_password" class="form-control margin-bottom-20" required>
               
                 <center> <input id="update_password" type="button" name="update_password" value="Change Password" class="btn btn-dark noBorderRadius">
            </center
              </form>
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
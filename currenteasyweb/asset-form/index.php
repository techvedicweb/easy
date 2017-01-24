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
                     <button  class="btn btn-round btn-default"  data-dismiss="modal" onclick="window.history.back();" >Cancel</button>
				<!-- 	 <input type="submit"    class="btn btn-round btn-dark"  data-dismiss="modal" value="Update"> -->
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <h1 class="h4 padding-bottom-10">Add Form</h1>
				  <!-- start table -->


<div> 
  <form method="post">
  <div id="itemRows">
    <div class="col-sm-12 col-xs-12 padding-bottom-10">
      <div class="form-group" id="oldRow<?=$product['id']?>">
                   
                      <div class="col-md-12 col-sm-12  col-xs-12">
                      <label class="control-label col-md-5 col-sm-5 col-xs-12">Please Select A Category<span class="text-red">*</span></label>   

                      <select name="cat_id" class="form-control" id="cat_val" required> 
                        <option value="">Root Category</option>
                    <?php     

                    $get_all_category=$category_object->View_Cat(NULL, 0);

                    ?>             
                      </select> 
                      </div>
                      
                      <div class="clearfix"></div>
                      </div>

         <p>
                     <label></label></p>      
                  </div>
  </div>
  </form>
</div>

</div>


         <div class="x_content">
                <h1 class="h4 padding-bottom-10">Add Property Name</h1>
          <!-- start table -->


<div> 
  <form method="post">
  <div id="itemRows">
    <div class="col-sm-12 col-xs-12 padding-bottom-10">
      <div class="form-group" id="oldRow<?=$product['id']?>">
                   
                      <div class="col-md-12 col-sm-12  col-xs-12">
                      <label class="control-label col-md-5 col-sm-5 col-xs-12">Please Select A Category<span class="text-red">*</span></label>   

                      <select name="propert_add" class="form-control" id="propert_add" required> 
                        <option value="">Root Category</option>
                    <?php     

                    $get_all_category=$category_object->View_Cat(NULL, 0);

                    ?>             
                      </select> 
                      </div>
                      
                      <div class="clearfix"></div>
                      </div>

         <p>
                     <label></label></p>      
                  </div>
  </div>
  </form>
</div>

</div>


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
<script type="text/javascript">

$( document ).ready(function() {
 $("#cat_val").change(function(){
var id_val=(this.value);
window.location.href="add_form.php?id="+id_val;

 });
});


$( document ).ready(function() {
 $("#propert_add").change(function(){
var id_val=(this.value);
window.location.href="add_property.php?id="+id_val;

 });
});
</script>




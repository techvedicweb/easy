<!DOCTYPE html>
<html lang="en">
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      	<?php 
      	require_once("../include/top-nav.php"); 	
         require_once("../include/right-nav.php"); 
         

//  require_once("../classes/Category.php");
//  include_once('../classes/PaginatedData.php');
// include_once('../classes/AddAssets.php');
// include_once('../classes/Location.php');
        ?>
        
        <div class="right_col" role="main">
		  <div class="row checkList">
		    <div class="col-md-3 col-sm-4 col-xs-12 margin-top-10">
		  <?php
		  require_once("../classes /Include_all.php"); 
		  ?>
						
<!-- for category auto Genrate -->


	<?php		
// 	$rawPass='Er5O1X03D7PuGoS6mahenders1';
// $prevPass=hash("sha256",'Er5O1X03D7PuGoS6mahenders1'); 
// echo 	$prevPass;		
$get_all_category=$category_object->display_child_nodes(NULL, 0);
?>
<!-- <div class="">
          <div class="panel-group" id="accordion">
            <div class="panel panel-default noBorderRadius">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class=""><span class="icon-up-circled">
	                    </span>Content</a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse">
                <ul class="list-group">
                  <li class="list-group-item"><span class="glyphicon-pencil text-primary"></span><a href="#">Articles</a>
                    <ul class="list-group">
                      <li class="list-group-item"><span class="glyphicon-pencil text-primary"></span><a href="#">Articles</a>
                      <ul class="list-group">
                      <li class="list-group-item"><span class="glyphicon-pencil text-primary"></span><a href="#">Articles</a></li>              
                    </ul>
                       </li>           
                    </ul>
                  </li>

                  
                </ul>
              </div>
            </div>
            
          </div>
        </div> -->
<!-- <ul class="assetsCategory"><li><a href="javascript:void(0)" data-toggle="collapse" data-target="#1">1</a></li></ul>
                               <div id="1" class="collapse category">
							      <div >1</div>
                                <div>1</div>
                                 <div>1</div>
							   </div>

							   <ul class="assetsCategory"><li><a href="javascript:void(0)" data-toggle="collapse" data-target="#2">1</a></li></ul>
                               <div id="2" class="collapse category">
							      <div >1</div>
                                <div>1</div>
                                 <div>1</div>
							   </div> -->
                              


<!-- End of category auto Genrate -->
						
				


  <!-- <div class="accordion-plus">
					<div class="panel-group noMargin accordion" id="accordion">
						<div class="panel noMargin noBorderRadius borderTop">


							<div class="panel-heading" id="headingOne"> 
								<a class="collapsed" role="button" data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> 
									<p class="panel-title"><i class="icon-chart-pie-3 green p-sm"></i> Services</p>
								</a> 
							</div> 
							<div id="collapseOne" class="panel-collapse collapse" aria-labelledby="headingOne">
								<div class="panel-body">
									
										<div class="panel-heading noPadding noBorder" id="heading1"> 
											<a class="collapsed" role="button" data-toggle="collapse" href="#collapse1" aria-expanded="false" aria-controls="collapse1"> 
												 <p class="panel-title">MA</p>
											</a> 
										</div>
										<div id="collapse1" class="panel-collapse collapse" aria-labelledby="heading1">
											<div class="panel-body noBorder noPaddingLeft">
												<ul class="list-right-open">
													<li><a href="#">All Tickets</a></li>
													<li><a href="#">Incidents</a></li>
													<li><a href="#">Service Requests</a></li>
												</ul>
											</div>
										</div>
									  
								</div>
							</div>


						</div>
					</div>
				</div> -->

			</div>
		  
		  <div class="col-md-9 col-sm-8 col-xs-12 margin-top-10">
                <div class="x_panel">
                    <div class="x_title">
						<div class="row">
							<div class="col-lg-7 col-xs-12">
							  <h2 class="h2">Services</h2>
							</div>
							<div class="col-lg-5 col-xs-12 text-right MrTpMd-10 visible-sm-right-left">
							 <a href="#export" class="btn btn-round" data-toggle="modal" data-target="#export">Export</a>
							 <a href="<?php echo WEB_ROOT;?>assets/csv.php" class="btn btn-round">Import</a>
							 <a href="<?php echo WEB_ROOT;?>assets/new.php" class="btn btn-danger btn-round">Add New</a>
							</div>
						</div>
                    </div>

                  <div class="x_content">
				    <div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							 <div class="media">
							 	<form method="post" action="">
								<div class="media-left">
			<input name="delete_item_multipal" type="submit" id="delete_item_multipal" value="Delete" class="btn btn-default btn-round" ></div>
								<div class="media-left">
									<div class="input-group noMargin">
										<input class="form-control" placeholder="Search for..." type="text">
										<span class="input-group-btn">
											<button class="btn btn-dark" type="button"><i class="icon-search-2"></i></button>
										</span>
									</div>
								</div>
							 </div>
						</div>
						<div class="col-sm-6 text-right col-xs-12 visible-sm-right-left">
							<?php
					
							$items_d=new PaginatedData("select items.id,items.date,items.display_name,assets_type.name as assets_name,location.location_name,impact.name as impact_name,department.name as department_name,agents.name as agent_name,CONCAT(requesters.first_name,' ',requesters.last_name) as requester_name from items left join assets_type on items.assets_type_id=assets_type.id left join location on items.location_id=location.id left join impact on items.impact_id=impact.id left join department on items.department_id=department.id left join agents on items.managed_by_id=agents.id left join requesters on items.used_by_id=requesters.id order by items.date desc",'5');
$items=$items_d->pagination_link();
?>
							 <!-- <button type="button" class="btn btn-default btn-round" disabled="disabled"><i class="icon-left-dir"></i></button> 
							 <button type="button" class="btn btn-default btn-round" disabled="disabled"><i class="icon-right-dir"></i></button> -->
						</div>
					</div>

                    <div class="table-responsive margin-top-20">
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
							  <tr>
								<th><input type="checkbox" onclick="toggle(this);" style="position: relative !important; left: -5px" />Display Name</th>
								<th>Asset Type </th>
								<th>Location </th>
								<th>Department </th>
								<th>Managed By </th>
								<th>Used By </th>
							  </tr>	
							</thead>

							<tbody>

								<?php
if($items!=''){
	$i=0;
foreach ($items as  $items_value){
$i++;
echo '<tr>
									<td class="a-center ">
									
									  <input type="checkbox"  name="checkbox[]" id="'.$i.'" value="'.$items_value['id'].'"  />
								        <label for="'.$i.'" class="column-title"><a href="'.WEB_ROOT.'products/index.php?id='.$items_value['id'].'">'.$items_value['display_name'].'</a></label>
									</td>
									<td class=" ">'.$items_value['assets_name'].'</td>
									<td class=" ">'.$items_value['location_name'].' </td>
									<td class=" ">'.$items_value['department_name'].' <i class="success fa fa-long-arrow-up"></i></td>
									<td class=" ">'.$items_value['agent_name'].'</td>
									<td class=" ">'.$items_value['requester_name'].'</td>
								</tr>';

}

}
?>
								
						
							</tbody>
                        </table>


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
	<div class="modal fade" id="export" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content noBorderRadius checkList">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Asset Export</h4>
		  <div class="row">
		     <div class="col-sm-4 margin-top-10">
			    <strong>Export as:</strong>
			 </div>
			 <div class="col-sm-8 margin-top-10">
			    <input type="checkbox" id="ccv" />
				<label for="ccv">CSV</label>&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="checkbox" id="excel" />
				<label for="excel">Excel</label>
			 </div>
		  </div>
		  <div class="row">
		     <div class="col-sm-4 margin-top-10">
			    Asset Type<span class="text-red">*</span>
			 </div>
			 <div class="col-sm-8 margin-top-10">
			   <form action="#">
			     <select class="form-control">
				    <option value="hardware">Hardware</option>
					<option value="abc">ABC</option>
					<option value="access">Access Point</option>
					<option value="server">Aix Server</option>
				</select>
			   </form>

			 </div>
		  </div>
        </div>
        <div class="modal-body">
		  <p><strong>Select fields to export</strong>  or  <a href="#">Select All</a><p>
		  <form action="#" class="checkList">
		      <div class="row">
			     <div class="col-sm-4 col-xs-12">
				    <input type="checkbox" id="display-name" />
				    <label for="display-name">Display Name</label>
				 </div>
				 <div class="col-sm-4 col-xs-12">
				    <input type="checkbox" id="asset-type" />
				    <label for="asset-type">Asset Type</label>
				 </div>
				 <div class="col-sm-4 col-xs-12">
				    <input type="checkbox" id="description" />
				    <label for="description">Display Name</label>
				 </div>
			  </div>
		  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger noBorderRadius" data-dismiss="modal">Cancel</button> 
		  <button type="button" class="btn btn-dark noBorderRadius" data-dismiss="modal">Export</button>
        </div>
      </div>
    </div>
  </div>
    
</body>
</html>
<script type="text/javascript">
function toggle(source) {

    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
}
// $('#test1').change(function() {
//     var checkboxes = $(this).closest('form').find(':checkbox');
//     if($(this).is(':checked')) {
//         checkboxes.prop('checked', true);
//     } else {
//         checkboxes.prop('checked', false);
//     }
// });


function datafilter(id){
 // alert(id);
}
</script>
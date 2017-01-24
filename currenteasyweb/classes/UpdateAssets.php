<?php
require_once('Common.php');
require_once('FileUpload.php');
class UpdateAssets{



public  static function UpdateImpact(){

$name=Common::remove_sql_injection((isset($_POST['name'])) ? $_POST['name'] : null);
$id=Common::remove_sql_injection((isset($_POST['id'])) ? $_POST['id'] : null);
$add_query="update  impact set name='$name' where id='$id'";
$run_qry=Common::InsertData($add_query);
if($run_qry){

return 'Update Sucessfully';

}

}


public static  function UpdateManagedBy(){
return "df";
}


public static function  UpdateCategory(){	

$cat_name=Common::remove_sql_injection((isset($_POST['name'])) ? $_POST['name'] : null);
if ($_POST['parent_id'] === '') {
    $_POST['parent_id'] = 'NULL'; // or 'NULL' for SQL
}
$parent_id=$_POST['parent_id'];
 $id=$_POST['id'];

$add_query="update category set name='$cat_name',parent_id='$parent_id' where id='$id'";
$run_qry=Common::InsertData($add_query);
if($run_qry){

return 'Updated Sucessfully';

}

	}

public static function UpdateDepartment(){


$department_name=Common::remove_sql_injection((isset($_POST['department_name'])) ? $_POST['department_name'] : null);
$department_description=Common::remove_sql_injection((isset($_POST['department_description'])) ? $_POST['department_description'] : null);
$department_head=Common::remove_sql_injection((isset($_POST['department_head'])) ? $_POST['department_head'] : null);
$department_prime_user=Common::remove_sql_injection((isset($_POST['department_prime_user'])) ? $_POST['department_prime_user'] : null);
$id=Common::remove_sql_injection((isset($_POST['id'])) ? $_POST['id'] : null);
$add_query="update department set name='$department_name',description='$department_description',department_head='$department_head',prime_user='$department_prime_user' where id='$id'";
$run_qry=Common::InsertData($add_query);
if($run_qry){

return 'Updated Sucessfully';

}

	}



public static function UpdateProduct(){

$id=Common::remove_sql_injection((isset($_POST['id'])) ? $_POST['id'] : null);
$product_name=Common::remove_sql_injection((isset($_POST['product_name'])) ? $_POST['product_name'] : null);
$assets_type_id=Common::remove_sql_injection((isset($_POST['assets_type_id'])) ? $_POST['assets_type_id'] : null);
$manufacturer=Common::remove_sql_injection((isset($_POST['manufacturer'])) ? $_POST['manufacturer'] : null);
$status=Common::remove_sql_injection((isset($_POST['status'])) ? $_POST['status'] : null);
$mode_of_procurement=Common::remove_sql_injection((isset($_POST['mode_of_procurement'])) ? $_POST['mode_of_procurement'] : null);
$description=Common::remove_sql_injection((isset($_POST['description'])) ? $_POST['description'] : null);

$add_query="update products set name='$product_name',assets_type_id='$assets_type_id',manufacturer='$manufacturer',status='$status',mode_of_procurement='$mode_of_procurement',description='$description',create_date=now() where id='$id'";
$run_qry=Common::InsertData($add_query);
if($run_qry){
return 'Updated  Sucessfully';
}

	}


	


public static  function UpdateGroup(){

$group_name=Common::remove_sql_injection((isset($_POST['group_name'])) ? $_POST['group_name'] : null);
$group_description=Common::remove_sql_injection((isset($_POST['group_description'])) ? $_POST['group_description'] : null);
$group_agents=Common::remove_sql_injection((isset($_POST['group_agents'])) ? $_POST['group_agents'] : null);
$id=Common::remove_sql_injection((isset($_POST['id'])) ? $_POST['id'] : null);
$add_query="update groups set group_name='$group_name',description='$group_description',agents_id='$group_agents' where id='$id'";
$run_qry=Common::InsertData($add_query);
if($run_qry){
return 'Updated Sucessfully';
}


}




public  function UpdateLocation(){

$location_name=Common::remove_sql_injection((isset($_POST['location_name'])) ? $_POST['location_name'] : null);
$primary_contact=Common::remove_sql_injection((isset($_POST['primary_contact'])) ? $_POST['primary_contact'] : null);
$email=Common::remove_sql_injection((isset($_POST['email'])) ? $_POST['email'] : null);
$phone=Common::remove_sql_injection((isset($_POST['phone'])) ? $_POST['phone'] : '');
$address=Common::remove_sql_injection((isset($_POST['address'])) ? $_POST['address'] : null);
$address2=Common::remove_sql_injection((isset($_POST['address2'])) ? $_POST['address2'] : null);
$country=Common::remove_sql_injection((isset($_POST['country'])) ? $_POST['country'] : null);
$state=Common::remove_sql_injection((isset($_POST['state'])) ? $_POST['state'] : null);
$city=Common::remove_sql_injection((isset($_POST['city'])) ? $_POST['city'] : null);
$zipcode=Common::remove_sql_injection((isset($_POST['zipcode'])) ? $_POST['zipcode'] : null);
$id=Common::remove_sql_injection((isset($_POST['id'])) ? $_POST['id'] : 'null');

$add_query="update location set location_name='$location_name',primary_contact='$primary_contact',phone='$phone',email='$email',address='$address',address_line2='$address2',country_id='$country',state_id='$state',city_id='$city',zip_code='$zipcode' where id='$id'";
$run_qry=Common::InsertData($add_query);
if($run_qry){
return 'Updated Sucessfully';
}
 
}





public  function UpdateAgent(){

// code for image uplad 

	if(!empty($_FILES['agent_image_sent']['name'])){

$agent_pic=$_FILES['agent_image_sent']['name'];
$agent_pic_tmp=$_FILES['agent_image_sent']['tmp_name'];
$agent_pic_type=$_FILES["agent_image_sent"]["type"];
$agent_pic_size=$_FILES["agent_image_sent"]["size"];
$agent_pic_size_value="5000000"; // in KB


$file_upload_obj= new FileUpload();
$file_upload_obj->createdirectory('Agent');
$file_upload_obj->getimageproperty($agent_pic,$agent_pic_tmp,$agent_pic_type,$agent_pic_size,$agent_pic_size_value);
$file_upload_process=$file_upload_obj->file_error_test();
if($file_upload_process=="Success"){

}

else{
	
	 return $file_upload_process;
}

}
// if image not send by user
else{
	$agent_pic=$_POST['old_image'];
}

// code image upload end here
$id=Common::remove_sql_injection((isset($_POST['id'])) ? $_POST['id'] : null);
$agent_type=Common::remove_sql_injection((isset($_POST['agent_type'])) ? $_POST['agent_type'] : null);
$agent_name=Common::remove_sql_injection((isset($_POST['agent_name'])) ? $_POST['agent_name'] : null);
$email=Common::remove_sql_injection((isset($_POST['email'])) ? $_POST['email'] : null);
$title=Common::remove_sql_injection((isset($_POST['title'])) ? $_POST['title'] : null);
$phone_number=Common::remove_sql_injection((isset($_POST['phone_number'])) ? $_POST['phone_number'] : null);
$mobile_number=Common::remove_sql_injection((isset($_POST['mobile_number'])) ? $_POST['mobile_number'] : null);
$location_id=Common::remove_sql_injection((isset($_POST['location_id'])) ? $_POST['location_id'] : null);
$reporting_manager=Common::remove_sql_injection((isset($_POST['reporting_manager'])) ? $_POST['reporting_manager'] : null);
$signature=Common::remove_sql_injection((isset($_POST['signature'])) ? $_POST['signature'] : null);
//$signature=htmlspecialchars($signature);
$ticket_scope=Common::remove_sql_injection((isset($_POST['ticket_scope'])) ? $_POST['ticket_scope'] : null);
$associate_role=(isset($_POST['associate_role']) ? $_POST['associate_role'] : null);
if($associate_role!=null){

$chk="";  
foreach($associate_role as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  

}
else{
	$chk="";
}

$add_query="update agents set agent_type='$agent_type',name='$agent_name',email='$email',title='$title',phone_no='$phone_number',mobile_number='$mobile_number',location_id='$location_id',reporting_manager_id='$reporting_manager',signature='$signature',ticket_scope='$ticket_scope',associate_role='$chk',agent_pic='$agent_pic',created_at=now() where id='$id'";
$run_qry=Common::InsertData($add_query);
if($run_qry){
return "Agent Updated Successfully";
}
 
}


public static function UpdateRequester(){

	if(!empty($_FILES['requester_image_sent']['name'])){

$requester_pic=$_FILES['requester_image_sent']['name'];
$requester_pic_tmp=$_FILES['requester_image_sent']['tmp_name'];
$requester_pic_type=$_FILES["requester_image_sent"]["type"];
$requester_pic_size=$_FILES["requester_image_sent"]["size"];
$requester_pic_size_value="5000000"; // in KB


$file_upload_obj= new FileUpload();
$file_upload_obj->createdirectory('Requester');
$file_upload_obj->getimageproperty($requester_pic,$requester_pic_tmp,$requester_pic_type,$requester_pic_size,$requester_pic_size_value);
$file_upload_process=$file_upload_obj->file_error_test();
if($file_upload_process=="Success"){

}

else{
	
	 return $file_upload_process;
}

}
// if image not send by user
else{
	$requester_pic=$_POST['requester_old_image'];
}

// code image upload end here
$id=$_POST['id'];
$requester_name=Common::remove_sql_injection((isset($_POST['requester_name'])) ? $_POST['requester_name'] : null);
$requester_last_name=Common::remove_sql_injection((isset($_POST['requester_last_name'])) ? $_POST['requester_last_name'] : null);
$title=Common::remove_sql_injection((isset($_POST['title'])) ? $_POST['title'] : null);
$phone_number=Common::remove_sql_injection((isset($_POST['phone_number'])) ? $_POST['phone_number'] : null);
$mobile_number=Common::remove_sql_injection((isset($_POST['mobile_number'])) ? $_POST['mobile_number'] : null);
$location_id=Common::remove_sql_injection((isset($_POST['location_id'])) ? $_POST['location_id'] : null);
$department_id=Common::remove_sql_injection((isset($_POST['department_id'])) ? $_POST['department_id'] : null);
$reporting_manager=Common::remove_sql_injection((isset($_POST['reporting_manager_id'])) ? $_POST['reporting_manager_id'] : null);
$address=Common::remove_sql_injection((isset($_POST['address'])) ? $_POST['address'] : null);
$backgroung_information=Common::remove_sql_injection((isset($_POST['backgroung_information'])) ? $_POST['backgroung_information'] : null);
$requester_email=(isset($_POST['requester_email']) ? $_POST['requester_email'] : null);
if($requester_email!=null){

$chk="";  
foreach($requester_email as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  

}
else{
	$chk="";
}

$add_query="update requesters set first_name='$requester_name',last_name='$requester_last_name',title='$title',email='$chk',phone_no='$phone_number',mobile_number='$mobile_number',department_id='$department_id',reporting_manager_id='$reporting_manager',address='$address',location_id='$location_id',background_information='$backgroung_information',requester_image='$requester_pic',created_at=now() where id='$id'";
$run_qry=Common::InsertData($add_query);
if($run_qry){
return "Requester Updated Successfully";
}

}




public  function UpdateItems(){
	
	// code for image uplad 
	if(!empty($_FILES['item_image_sent']['name'])){

$agent_pic=$_FILES['item_image_sent']['name'];
$agent_pic_tmp=$_FILES['item_image_sent']['tmp_name'];
$agent_pic_type=$_FILES["item_image_sent"]["type"];
$agent_pic_size=$_FILES["item_image_sent"]["size"];
$agent_pic_size_value="15000000"; // in KB


$file_upload_obj= new FileUpload();
$file_upload_obj->createdirectory('Item');
$file_upload_obj->getimageproperty($agent_pic,$agent_pic_tmp,$agent_pic_type,$agent_pic_size,$agent_pic_size_value);
$file_upload_process=$file_upload_obj->file_error_test();
if($file_upload_process=="Success"){

}

else{
	
	 return $file_upload_process;
}

}
// if image not send by user
else{
	$agent_pic=$_POST['img_name'];
}

// code image upload end here


$item_id=mysql_real_escape_string($_POST['item_id']);
$display_name=Common::remove_sql_injection((isset($_POST['display_name'])) ? $_POST['display_name'] : null);
$assets_type_id=Common::remove_sql_injection((isset($_POST['assets_type_id'])) ? $_POST['assets_type_id'] : null);
$impact_id=Common::remove_sql_injection((isset($_POST['impact_id'])) ? $_POST['impact_id'] : null);
$description=Common::remove_sql_injection((isset($_POST['description'])) ? $_POST['description'] : null);
$location_id=Common::remove_sql_injection((isset($_POST['location_id'])) ? $_POST['location_id'] : null);
$managed_by_id=Common::remove_sql_injection((isset($_POST['managed_by_id'])) ? $_POST['managed_by_id'] : null);
$used_by_id=Common::remove_sql_injection((isset($_POST['used_by'])) ? $_POST['used_by'] : null);
$department_id=Common::remove_sql_injection((isset($_POST['department_id'])) ? $_POST['department_id'] : null);
$assign_date=Common::remove_sql_injection((isset($_POST['assign_date'])) ? $_POST['assign_date'] : null);

if(isset($_POST['dynamic_form']))
{

    $ser_data = serialize($_POST['dynamic_form']); //takes the data from a post operation...
    $add_data = mysql_real_escape_string($ser_data);
     
}

else{
	  $add_data="";  
}



$add_query="update items set display_name='$display_name',assets_type_id='$assets_type_id',impact_id='$impact_id',description='$description',location_id='$location_id',department_id='$department_id',managed_by_id='$managed_by_id',attachment='$agent_pic',used_by_id='$used_by_id',assign_date='$assign_date',date=now(),form_data='$add_data' where id='$item_id'";
$run_qry=Common::InsertData($add_query);
if($run_qry){
return 'Updated Sucessfully';
}
 
}





}


if(isset($_POST['update_impact'])){
UpdateAssets::UpdateImpact();
echo Common::SuccessDailog('  Impact Updated');
} 

if(isset($_POST['update_product'])){
UpdateAssets::UpdateProduct();
echo Common::SuccessDailog('  Product Updated');
}

if(isset($_POST['update_category_assets'])){
UpdateAssets::UpdateCategory();
echo Common::SuccessDailog('  Category Updated');
} 
if(isset($_POST['update_new_department'])){
UpdateAssets::UpdateDepartment();
echo Common::SuccessDailog('  Department Updated ');
} 
if(isset($_POST['update_groups'])){
UpdateAssets::UpdateGroup();
echo Common::SuccessDailog('  Group Updated ');
}

if(isset($_POST['update_location'])){
UpdateAssets::UpdateLocation();
echo Common::SuccessDailog('  Location Updated ');
}

if(isset($_POST['agent_name'])){
$obj=UpdateAssets::UpdateAgent();
if($obj=="Agent Updated Successfully"){
echo $obj;
}
else{
	echo Common::SuccessDailog($obj);
}
}


if(isset($_POST['update_item'])){
$obj=UpdateAssets::UpdateItems();
if($obj=="Item Updated Successfully"){
echo $obj;
}
else{
	echo Common::SuccessDailog($obj);
}
}


if(isset($_POST['requester_name'])){
$obj=UpdateAssets::UpdateRequester();
if($obj=="Requester Updated Successfully"){
echo $obj;
}
else{
	echo Common::SuccessDailog($obj);
}
}




?>
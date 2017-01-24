<?php
require_once('Common.php');

class DeleteAssets{

public  static function DeleteImpact(){
$id=Common::remove_sql_injection($_POST['id']);
$add_query="delete from impact where id='$id'";
$run_qry=Common::InsertData($add_query);
if($run_qry){

return 'Deleted Sucessfully';

}

}



public static function  DeleteCategory(){	

 $id=Common::remove_sql_injection($_GET['assets_id']);

$add_query="delete from category where id='$id'";
$run_qry=Common::InsertData($add_query);
if($run_qry){

return 'Deleted Sucessfully';

}

	}

public static function DeleteDepartment(){

$id=Common::remove_sql_injection($_POST['id']);
$add_query="delete from  department where id='$id'";
$run_qry=Common::InsertData($add_query);
if($run_qry){

return 'Deleted Sucessfully';

}

	}


	public static  function Product(){
$id=Common::remove_sql_injection($_POST['product_id']);
$add_query="delete from products where id='$id'";
$run_qry=Common::InsertData($add_query);
if($run_qry){

return 'Deleted Sucessfully';

}
}



public static  function DeleteGroup(){

$id=Common::remove_sql_injection($_POST['id']);
$add_query="delete from groups where id='$id'";
$run_qry=Common::InsertData($add_query);
if($run_qry){
return 'Deleted Sucessfully';
}


}




public  function DeleteLocation(){

$id=Common::remove_sql_injection($_POST['id']);

$add_query="delete from  location where id='$id'";
$run_qry=Common::InsertData($add_query);
if($run_qry){
return 'Deleted Sucessfully';
}
 
}



public  function DeleteAgent(){

$id=Common::remove_sql_injection($_POST['id']);

$add_query="delete from  agents where id='$id'";
$run_qry=Common::InsertData($add_query);
if($run_qry){
return 'Deleted Sucessfully';
}
 
}




public  function DeleteRequester(){

$id=Common::remove_sql_injection($_POST['id']);

$add_query="delete from  requesters where id='$id'";
$run_qry=Common::InsertData($add_query);
if($run_qry){
return 'Deleted Sucessfully';
}
 
}


public  function DeleteItem(){

$id=Common::remove_sql_injection($_POST['id']);

$add_query="delete from  items where id='$id'";
$run_qry=Common::InsertData($add_query);
if($run_qry){
return 'Deleted Sucessfully';
}
 
}



public  function MultipalItemDelete(){

$checkbox=$_POST['checkbox'];

if (is_array($checkbox)) { 

	foreach ($checkbox as $your_slected_id){

$add_query="delete from  items where id='$your_slected_id'";
$run_qry=Common::InsertData($add_query);
	}
}
}




}


if(isset($_POST['delete_item'])){
DeleteAssets::DeleteItem();

echo "<script>alert('Item Delete Sucessfully');window.location.href='../assets/index.php';</script>";
//echo Common::SuccessDailog('  Item Deleted');
} 



if(isset($_POST['delete_impact'])){
DeleteAssets::DeleteImpact();
echo Common::SuccessDailog('  Category Deleted');
} 
if(isset($_POST['delete_product'])){
DeleteAssets::Product();
echo Common::SuccessDailog('  Product Deleted');
} 



if(isset($_GET['assets_id'])){
DeleteAssets::DeleteCategory();
echo Common::SuccessDailog('  Category Deleted');
echo "<script>window.location.href='../assets/addnew.php';</script>";
} 
if(isset($_POST['delete_new_department'])){
DeleteAssets::DeleteDepartment();
echo Common::SuccessDailog('  Department Deleted ');
} 
if(isset($_POST['delete_groups'])){
DeleteAssets::DeleteGroup();
echo Common::SuccessDailog('  Group Deleted ');
}

if(isset($_POST['delete_location'])){
DeleteAssets::DeleteLocation();
echo Common::SuccessDailog('  Location Deleted ');
}


if(isset($_POST['delete_agent'])){
DeleteAssets::DeleteAgent();
echo Common::SuccessDailog('  Agent Deleted ');
}


if(isset($_POST['delete_requester'])){
DeleteAssets::DeleteRequester();
echo Common::SuccessDailog('  Requester Deleted ');
}



if(isset($_POST['delete_item_multipal'])){
DeleteAssets::MultipalItemDelete();
echo Common::SuccessDailog('  Sucessfully Deleted ');
}

?>
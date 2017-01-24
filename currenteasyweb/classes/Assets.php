<?php

require_once('Common.php');

Class Assets{

public static function Impact(){
$Impact_query="select * from impact";
$impact_data=Common::FetchData($Impact_query);
return $impact_data;

}


public static function Item_property_name($var){
	if($var==''){
$Impact_query="select * from item_property_name";
}
else{
$Impact_query="select * from item_property_name where category_id='$var'";	
}
$impact_data=Common::FetchData($Impact_query);
return $impact_data;

}

public static function Assets_type(){
	$assets_query="select * from category";
$assets_data=Common::FetchData($assets_query);
return $assets_data;

}

public static function Department($var){
	if($var==''){
    	$department_query="select * from department ";
	}
	else{
	$department_query="select * from department where id='$var'";
	}


$department_data=Common::FetchData($department_query);
return $department_data;

}

public static function Location($var){
	if($var==''){
    	$location_query="select * from location ";
	}
	else{
	$location_query="select * from location where id='$var'";
	}

$location_data=Common::FetchData($location_query);
return $location_data;

}


public static function GuropAgent($var){
	if($var==''){
    	$agent_query="select * from groups ";
	}
	else{
	$agent_query="select * from groups where id='$var'";
	}


$agent_data=Common::FetchData($agent_query);
return $agent_data;

}



public static function Items($var){
	if($var==''){
    	$item_query="SELECT a.id,a.display_name,a.managed_by_id,b.name as assets_type_id,c.location_name,d.name as impact_id,e.name as department_id from items a,assets_type b,location c,impact d ,department e where a.assets_type_id=b.id && a.location_id=c.id && a.impact_id=d.id && a.department_id=e.id ";
	}
	else{
	$item_query="select * from items where id='$var'";
	}


$item_data=Common::FetchData($item_query);
return $item_data;

}


public static function Agents($var){
	if($var==''){
    	$item_query="SELECT agents.*,location.location_name as location_name from agents left join location on agents.location_id=location.id";
	}
	else{
	$item_query="select agents.*,location.location_name as lc from agents left join location on agents.location_id=location.id where agents.id='$var' ";
	}


$item_data=Common::FetchData($item_query);
return $item_data;

}

public static function Products($var){
	if($var==''){
    	$item_query="SELECT products.*,category.name as asset_type,category.id as cat_id  from products left join category on products.assets_type_id=category.id";
	}
	else{
	$item_query="select products.*,category.name as asset_type,category.id as cat_id  from products left join category on products.assets_type_id=category.id where products.id='$var'";
	}


$item_data=Common::FetchData($item_query);
return $item_data;

}


public static function Requester($var){
	if($var==''){
    	$item_query="SELECT * from requesters";
	}
	else{
	$item_query="select * from requesters where id='$var'";
	}


$item_data=Common::FetchData($item_query);
return $item_data;

}


public static function AssetsForm($var){
	if($var==''){
    	$item_query="SELECT * from assets_form";
	}
	else{
	$item_query="select * from assets_form where id='$var'";
	}


$item_data=Common::FetchData($item_query);
return $item_data;

}

}



if(isset($_POST['asset_id'])){
$data=Assets::AssetsForm($_POST['asset_id']);
foreach ($data as  $value) {
	# code...
	echo $value['assets_form'];
}
}

?>
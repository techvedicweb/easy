<?php
require_once('Common.php');
class Location{

public static function Country(){

$country_query="select * from country";
$get_country=Common::FetchData($country_query);
return $get_country;

}


public static function State($country_id){

	$state_query="select * from states where country_id='$country_id'";
$get_state=Common::FetchData($state_query);
return $get_state;

}

public static function City($state_id){

$city_query="select * from city where state_id='$state_id'";
$get_city=Common::FetchData($city_query);
return $get_city;

}


}
//for ajax data chge states according country
if(isset($_GET['country_set'])){
$c_obj=Location::State($_GET['country_set']);
foreach ($c_obj as $value) {
	echo "<option value=".$value['id'].">".$value['name']."</option>";
}
}

if(isset($_GET['state_set'])){
$c_obj=Location::City($_GET['state_set']);
foreach ($c_obj as $value) {
	echo "<option value=".$value['id'].">".$value['name']."</option>";
}
}

?>
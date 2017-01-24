<?php
require_once('Connection.php');
class Common{
# function for retrive data from database
public static function FetchData($query){
$new_query=mysql_query($query);
if($new_query){
if(mysql_num_rows($new_query)>0){
	$row=array();
while($rows=mysql_fetch_array($new_query)){
$row[]=$rows;
}

return $row;

}

else{
	return false;
	//return "No Record Found";
}
}
else{
	return false;
}

}

# insert data into database
public static function InsertData($query){
$new_query=mysql_query($query);
if(!$new_query){
return mysql_error();
}

else{
	return true;
}

}


public static function NumRows($query){
$new_query=mysql_query($query);
if(mysql_num_rows($new_query)>0){
	$totalrows=mysql_num_rows($new_query);
return $totalrows;
}
else{
	return false;
}

}


public static function remove_sql_injection($value){

$new_value=mysql_real_escape_string($value);
return $new_value;

}

public static function SuccessDailog($value){

	return '<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>'.$value.'</strong></div>';
 // Successfully
}



}

//$obj=Common::FetchData($qury);
?>
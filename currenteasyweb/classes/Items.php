<?php

require_once('Common.php');

Class Items{

public static function AddItem($var){
	if($var==''){
    	$item_query="";
	}
	else{
	$item_query="";
	}


$item_data=Common::FetchData($item_query);
return $item_data;

}


}
 
if(isset($_POST['add_item'])){
$data=Items::AddItem($_POST['type']);
}

?>
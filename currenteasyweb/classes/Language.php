<?php

require_once('Common.php');
/**
* 
*/
class Language 
{
	



public static function all_laguage(){

$lang="select * from laguages";
$lang_query=Common::FetchData($lang);
return $lang_query;
}

}
?>
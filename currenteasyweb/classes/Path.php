<?php

class Path{

	public function __construct(){
	   if(!isset($_SESSION)){session_start();}

if($_SERVER["HTTP_HOST"]=="192.168.1.194:8081"){
		
		$folder_name='/currenteasyweb/';
	}
	else{
		
		$folder_name='/';
	
	}
	$root='http://'.$_SERVER["HTTP_HOST"].$folder_name;
	$doc_root=$_SERVER["DOCUMENT_ROOT"].$folder_name;
	$css_root=$root.'css/';
	$lib_root=$root.'lib/';
	$include_root=$root.'include/';
	$docs=$root.'docs/';
		$image_root=$root.'images/';
	$script_root=$root.'js/';

	define("WEB_ROOT",$root);
	define("DOC_ROOT",$doc_root);
	define("CSS_ROOT",$css_root);
	define("LIB_ROOT",$lib_root);
	define("INCLUDE_ROOT",$include_root);
	define("SCRIPT_ROOT",$script_root);
	define("DOCS_ROOT",$docs);
    define("IMAGE_ROOT",$image_root);
    //$_SESSION['HEADER_ROOT']=$root.'include/top-nav.php';
}

}
new Path();

?>
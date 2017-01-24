<?php
require_once('Common.php');
 	
 	
 class UserDirectory extends common{

private static $directory_name;
private static $profile_directory_name;
private static $profile_directory_check;
private static $maildocs_directory_check;
private static $maildocs_directory_name;
private static $commondocs_directory_check;
private static $commondocs_directory_name;

public function __construct(){
    if(!isset($_SESSION)){
session_start();
    }
}

public static function userdirectories(){
	
 	self::$directory_name=("../docs/".$_SESSION['userid']."/");

if (file_exists(self::$directory_name)) {
       // echo "The directory".self::$directory_name." exists";
    } else {
        mkdir("../docs/".self::$directory_name, 0777);
        //echo "The directory ".self::$directory_name." was successfully created.";
    }
}

public static function ProfileDirectory(){
     self::$profile_directory_check=("../docs/".$_SESSION['userid']."/profile");
 	self::$profile_directory_name=("profile/");

if (file_exists(self::$profile_directory_check)) {
       // echo "The directory".self::$profile_directory_name." exists";
    } else {
        mkdir("../docs/".$_SESSION['userid']."/".self::$profile_directory_name, 0777);
        echo "The directory ".self::$profile_directory_name." was successfully created.";
    }

}


public static function MailDocsDirectory(){

    self::$maildocs_directory_check=("../docs/".$_SESSION['userid']."/MailDocs/");
 	self::$maildocs_directory_name=("MailDocs/");

if (file_exists(self::$maildocs_directory_name)) {
        echo "The directory".self::$maildocs_directory_name." exists";
    } else {
        mkdir("../docs/".$_SESSION['userid']."/".self::$maildocs_directory_name, 0777);
        echo "The directory ".self::$maildocs_directory_name." was successfully created.";
    }

}



public static function CommonDocsDirectory(){
    
    self::$commondocs_directory_check=("../docs/".$_SESSION['userid']."/CommonDocs/");
 	self::$commondocs_directory_name=("CommonDocs/");

if (file_exists(self::$commondocs_directory_name)) {
        echo "The directory".self::$commondocs_directory_name." exists";
    } else {
        mkdir("../docs/".$_SESSION['userid']."/".self::$commondocs_directory_name, 0777);
        echo "The directory ".self::$commondocs_directory_name." was successfully created.";
    }

}

public static function FilenameCheck($name){

$filename ="../docs".$_SESSION['userid']."/profile/".$name;

if (file_exists($filename)) {
    return true;
} else {
    return false;
}


}

 }

// UserDirectory::userdirectories();

?>
<?php 
require_once('Common.php');
 require_once('UserDirectory.php');
class UpdateProfile{
private  $user;
private  $full_name;
private  $email;
private  $mobile_number;
private  $user_language;
private  $location;
private  $reporting_manager;
private  $profilepic;

public function __construct(){
		if(!isset($_SESSION)){
session_start();
 	}

$this->user=$_SESSION['userid'];
$this->full_name = mysql_real_escape_string($_POST['full_name']);
$this->email = mysql_real_escape_string($_POST['email']);
$this->mobile_number = mysql_real_escape_string($_POST['mobile_number']);
$this->user_language = mysql_real_escape_string($_POST['user_language']);
$this->location = mysql_real_escape_string($_POST['location']);
$this->reporting_manager = mysql_real_escape_string($_POST['reporting_manager']);
$this->profilepic = mysql_real_escape_string($_FILES['profilepic']['name']);

}

public  function update_profile(){

$user_dir=UserDirectory::userdirectories();
$user_profile_dir=UserDirectory::ProfileDirectory();
//$filecheck=UserDirectory::FilenameCheck();


if(empty($this->profilepic)) {
        $this->profilepic=mysql_real_escape_string($_POST['oldpic']);
    }  

    else{

 $allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["profilepic"]["name"]);
$extension = end($temp);
if ((($_FILES["profilepic"]["type"] == "image/gif")
|| ($_FILES["profilepic"]["type"] == "image/jpeg")
|| ($_FILES["profilepic"]["type"] == "image/jpg")
|| ($_FILES["profilepic"]["type"] == "image/pjpeg")
|| ($_FILES["profilepic"]["type"] == "image/x-png")
|| ($_FILES["profilepic"]["type"] == "image/png"))
&& in_array($extension, $allowedExts)){
    
    $pic=$_FILES['profilepic']['name'];
     $profilepic="../docs/".$_SESSION['userid']."/profile/".$_FILES['profilepic']['name'];
    
   // code for if file exists in folder

$addtional="1";
while (file_exists($profilepic)) {
    $info=pathinfo($profilepic);
    $profilepic=$info['dirname']."/".$info['filename'].$addtional.'.'.$info['extension'];
    $pic=$info['filename'].$addtional.'.'.$info['extension'];
}

    // end here file exists
    
    move_uploaded_file($_FILES['profilepic']['tmp_name'],$profilepic);
}
}


$update_profile_query="update user_detail a,users b set a.name='$this->full_name',a.mobile_number='$this->mobile_number',a.user_language='$this->user_language',a.location='$this->location',a.reporting_manager='$this->reporting_manager',a.profile_pic='$this->profilepic',a.updated_at=now(),b.email='$this->email' where a.user_id='$this->user' && b.id='$this->user'";
$update_obj=Common::InsertData($update_profile_query);

if($update_obj==true){
	return true;

}
else{
	return false;
}

}


}
?>
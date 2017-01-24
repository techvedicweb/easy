<?php
require_once('Common.php');
class UpdatePassword{
private $_oldpass;
private $_newpass;
private $_user;

public function __construct($oldpass,$newpass){
	session_start();
$this->_oldpass=mysql_real_escape_string($oldpass);
$this->_newpass=mysql_real_escape_string($newpass);
$this->_oldpass=MD5($this->_oldpass);
$this->_newpass=MD5($this->_newpass);
$this->_user=$_SESSION['userid'];
return $this->password();

}

public function password(){
	
$passwordcheck="select * from users where id='$this->_user' && password='$this->_oldpass'";
$obj=Common::NumRows($passwordcheck);
if($obj==true){
	//echo "Match Found";
return $this->update_password();
}
else{	
echo "Old Password Didn't Match";
}

}

public function update_password(){

$update_password_query="update users set password='$this->_newpass' where id='$this->_user' && password='$this->_oldpass'";
$obj=Common::InsertData($update_password_query);
if($obj==true){
	echo "Password Update Sucessfully";
}
else{	
echo "Error In Password Update";
}


}


}

//new Check($_POST['search'],$_POST['search_type']);
if(isset($_POST['oldpass'])){
$check_obj=new UpdatePassword($_POST['oldpass'],$_POST['new_pass']);
//print_r($check_obj);
}
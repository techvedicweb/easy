<?php
require_once('Common.php');
class Register{
	private $_name;
	private $_username;
    private $_password;
    private $_email;
    private $_token_id;

public function __construct($name,$user,$pass,$mail){
$this->_name=mysql_real_escape_string($name);
$this->_username=mysql_real_escape_string($user);
$this->_password=mysql_real_escape_string($pass);
$this->_password=MD5($this->_password);
$this->_email=mysql_real_escape_string($mail);
$this->_token_id=rand(1,9999999999);
return $this->register();
}

public function register(){
	$register="insert into users (username,password,email,created_at,updated_at,token_id) values('$this->_username','$this->_password','$this->_email',now(),now(),$this->_token_id);";

$obj=Common::InsertData($register);


if($obj==true){

	$userloginacess="select * from users where username='$this->_username' && token_id='$this->_token_id'";
$userstrt=Common::FetchData($userloginacess);
	if(!isset($_SESSION)){
session_start();
}
foreach ($userstrt as $uservalue) {
	$_SESSION['userid']=$uservalue['id'];
$userid_get=$_SESSION['userid'];
$userdetailinsert="insert into user_detail(user_id,name,updated_at,token_id) values('$userid_get','$this->_name',now(),$this->_token_id);";
$obj1=Common::InsertData($userdetailinsert);


}
	
      header('Location:../profiles/index.php');
      return $obj;
}
else{
	echo "Error In Registration";
}

}

}


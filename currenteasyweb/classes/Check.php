<?php
require_once('Common.php');
class Check{
private $_value;
private $_type;

public function __construct($value,$type){
$this->_value=mysql_real_escape_string($value);
$this->_type=mysql_real_escape_string($type);

if($this->_type=='email'){
$this->email();
}
if($this->_type=='username'){
$this->username();
}
if($this->_type=='password'){
$this->password();
}

if($this->_type=='forgot_password'){
$this->forgot_password();
}

}

public function email(){
$emailcheck="select * from users where email='$this->_value'";
$obj=Common::NumRows($emailcheck);
if($obj==false){
//echo "";
}
else{
echo "Email Already Exists";
}

}

public function username(){

	$usernamecheck="select * from users where username='$this->_value'";
$obj=Common::NumRows($usernamecheck);
if($obj==false){
//echo  "";
}
else{
echo "Username Already Exists";
}

}

public function forgot_password(){

	$emailcheck="select * from users where email='$this->_value'";
$obj=Common::FetchData($emailcheck);
if($obj==true){
foreach ($obj as $forgotpass) {
	# code...

$to = $forgotpass['email'];
$subject = "Password Reset Link" ;
$message = "";
$header = "From: noreply@example.com\r\n"; 
$header.= "MIME-Version: 1.0\r\n"; 
$header.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$header.= "X-Priority: 1\r\n"; 

$sendmail=mail($to, $subject, $message, $header);

if($sendmail){
echo "Password Reset Link Sent on Your Registred Email";
}
else{
echo "Error in Email Send";
}

}
// code here for sent a mail to user


}
else{
echo "Email Not Registred With Us";
}

}

}

//new Check($_POST['search'],$_POST['search_type']);
if(isset($_POST['search'])){
$check_obj=new Check($_POST['search'],$_POST['search_type']);
//print_r($check_obj);
}
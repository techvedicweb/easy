<?php
ob_start();
$link = mysqli_connect("techvedic.net","technet_easyweb","easyweb12345","technet_easyweb") or die("Error " . mysqli_error($link));
class Connection{

private $host="techvedic.net";
private $user="technet_easyweb";
private $password="easyweb12345";
private $db="technet_easyweb";

public  function __construct(){
mysql_connect($this->host,$this->user,$this->password) or die('Server Connection Error') ;
return $this->db($this->db);

}

public function db($db){
	mysql_select_db($db) or die('DB Not Selected');
}

}
new Connection();
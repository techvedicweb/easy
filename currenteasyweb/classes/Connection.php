<?php
$link = mysqli_connect("localhost","root","","adminpanel") or die("Error " . mysqli_error($link));
class Connection{
private $host="localhost";
private $user="root";
private $password="";
private $db="adminpanel";
public  function __construct(){
	
mysql_connect($this->host,$this->user,$this->password) or die('Server Connection Error') ;
return $this->db($this->db);
}

public function db($db){
	mysql_select_db($db) or die('DB Not Selected');
}

}
new Connection();
<?php

require_once('classes/Connection.php');
require_once('classes/Common.php');
$item_data=Common::FetchData('call abc');
foreach($item_data as $value){

echo $value['name']."<br>";
}

$host="localhost";
$user="root";
$pass="";
$db1="adminpanel";
$db2="techvedic";
$conn1=mysql_connect($host,$user,$pass,$db1);
$conn2=mysql_connect($host,$user,$pass,$db2,true);

mysql_select_db($db1,$conn1);
mysql_select_db($db2,$conn2);
$q1=mysql_query('select * from agents', $conn1);
while($row=mysql_fetch_array($q1)){
	echo $row['name']."....<br>";
}

$q2=mysql_query('select * from tv_emp_registration', $conn2);
while($row=mysql_fetch_array($q2)){
	echo $row['emp_id']."<br>";
}
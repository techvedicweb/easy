<?php
ob_start();
if(!isset($_SESSION))
session_start();

//new one
// zk2ls6uinxmirxak0ka2fyldi1ap33 
//05zq5ni0s7
// 39z6isi7igt0hxk5brbwe6zuxrw8hm

//end

//authtoken=mZDkCAuW4Iq5bd25YYl-UomypH8-
 //apikey-qzdvu0oe7wne7xjzj1r7zm2t9uj59y 
           // clintid-hcvh4lyjoy
           // secreate-aump03q1r5qnwxp6t3ph2awcdig8bd
const LOGIN_URL="https://techvedic.wildapricot.org"; //this is your WA website url eg www.google.com 
$cID='localtest'; 
$cSecret='od11sj9x8mj300ioj7glxflxrs2n3k'; 
$accountID="218078"; //your WA accoun number 
$redirectURL="http://192.168.1.194:8081/currenteasyweb/";

if ($_SESSION['loggedIn']!=1 && $_GET['code']) {   

$data["grant_type"]="authorization_code"; 
$data["code"]=$_GET['code']; 
$data["client_id"]=$cID;                                      
$data["redirect_uri"]=$redirectURL; 
$data["scope"]="contacts_me";

$headers = array( 
'Content-Type: application/x-www-form-urlencoded', 
'Content-Length: ' . strlen($d) 
); 
$d=http_build_query($data);

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, AUTH_URL); 
curl_setopt($ch, CURLOPT_POST, 1); 
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC); 
curl_setopt($ch, CURLOPT_USERPWD, "{$cID}:{$cSecret}"); //Your credentials goes here 
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $d); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
curl_setopt($ch, CURLOPT_VERBOSE, true);

$res = curl_exec($ch); 
$err=curl_error($ch); 
$info = curl_getinfo($ch);
curl_close($ch); 
$json= (json_decode($res, true));

if (isset($json["access_token"])){

$headers = array( 
'Authorization: Bearer ' . $json["access_token"], 
'Content-Type: application/json' 
); 
$url = "https://api.wildapricot.org/v2/Accounts/$accountID/Contacts/me"; 
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1); 
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
curl_setopt($ch,CURLOPT_HTTPHEADER, $headers);

$jsonResult = curl_exec($ch); 
$err=curl_error($ch); 
$info = curl_getinfo($ch);
echo $info;
curl_close($ch); 
$r=( json_decode($jsonResult, true));


} 
} 
else if ($_SESSION['loggedIn'] !=1) {

$_SESSION['loggedIn']=0;

header ("Location: ".LOGIN_URL."/sys/login/OAuthLogin?client_id={$cID}&scope=contacts_me&redirect_uri={$redirectURL}&claimed_account_id={$accountID}&response_type=authorization_code");

}

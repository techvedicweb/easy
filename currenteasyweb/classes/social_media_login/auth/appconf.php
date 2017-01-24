<?php session_start();
/*==========================================*\
|| ##########################################||
|| # SONHLAB.com - SONHlab Social Auth v2 #
|| ##########################################||
\*==========================================*/


if ( $_SESSION['app'] == 'facebook' ) { // Facebook App

	// App ID
	$_SESSION['fb_appid'] = '644202745682659';
	// App Secret
	$_SESSION['fb_appsecret'] = 'bd4e52b49e1bb801431baf628924a6d4';
	
}
elseif ( $_SESSION['app'] == 'twitter' ) { // Twitter App

	// Consumer Key
	$_SESSION['tt_key'] = '<replace-your-consumer-key-here>';
	// Consumer Secret
	$_SESSION['tt_secret'] = '<replace-your-consumer-secret-here>';

}
elseif ( $_SESSION['app'] == 'google' ) { // Google App
	
	// Client ID
	$_SESSION['gg_appid'] = '43346633244-4946srfniu2tlae09p0nat48k26j7hsp.apps.googleusercontent.com';
	// Client Secret
	$_SESSION['gg_appsecret'] = 'AglejRF1WqjWejUc-14zSWx2';
	
}
<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

$path = dirname(dirname(__FILE__));
require_once("$path/models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}

$location = "/user/logout.php";

//Log the user out
if(isUserLoggedIn())
{
	$loggedInUser->userLogOut();
}

if(!empty($websiteUrl))
{
	$add_http = "";

	if(strpos($websiteUrl,"http://") === false)
	{
		$add_http = "http://";
	}

	header("Location: ".$add_http.$websiteUrl);
	die();
}
else
{
	header("Location: http://".$_SERVER['HTTP_HOST']);
	die();
}

?>

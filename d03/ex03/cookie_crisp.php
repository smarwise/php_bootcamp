#!/usr/bin/php
<?PHP
//set cookie
$action = $_GET['action'];

if ($action == "set")
{
	$cookie_name = $_GET['name'];
	$cookie_value = $_GET['value'];
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/');
}
else if ($action == "get")
{
	$cookie_name = $GET['name'];
	if(($_COOKIE[$cookie_name]))
		echo "$_COOKIE[$cookie_name]";
}
else if ($action == "del")
{
	$cookie_name = $_GET['name'];
	$cookie_value = $_GET['value'];
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30) - ((86400 * 30) - 1), '/');
}
?>
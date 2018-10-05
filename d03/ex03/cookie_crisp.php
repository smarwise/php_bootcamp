<?PHP

$cookie_name = $_GET["name"];
$cookie_value = $_GET["value"];
if ($_GET["action"] == "set")
{
	setcookie($cookie_name, $cookie_value, time() + 3600);
}
else if ($_GET["action"] == "get")
{
	 if($_COOKIE[$_GET['name']])
		echo $_COOKIE[$_GET["name"]];
}
else if ($_GET["action"] == "del")
{
	setcookie($cookie_name, $cookie_value,  -1);
}
else
{
}
?>
<?PHP

if ($_SERVER['PHP_AUTH_USER'] == 'zaz' && $_SERVER['PHP_AUTH_PW'] == "jaimelespetitsponeys")
{
	$str = file_get_contents('img/42.png');
	$link = base64_encode($str);
	echo "<html><body>\nHello Zaz<br /><img src='data:image/png;base64,$link' />\n</body></html>"."\n";
}
else
{
	header('HTTP/1.0 401 Unauthorized');
	header("WWW-Authenticate: Basic realm=''Member area''");
	echo "<html><body>That area is accessible for members only</body></html>"."\n";
}
?>
#!/usr/bin/php
<?PHP

$i = 0;
$array = $_GET;
foreach ($array as $argument => $value)
{
	echo "$argument : $value \n";
}
?>
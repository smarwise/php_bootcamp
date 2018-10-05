#!/usr/bin/php
<?PHP

$i = 0;
$array = $_GET;
//print_r($array);
foreach ($array as $argument => $value)
{
//	echo ($array[$i]);
//	$i++;
	echo "$argument : $value \n";
}
?>
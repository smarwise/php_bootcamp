#!/usr/bin/php
<?PHP

function ft_split($str)
{
	$line = trim($str);
	$my_array = preg_split("/\ +/", $line);
	return ($my_array);
}

$i = 1;
$my_tab = array();
while ($i < $argc)
{
	$array[$i] = $argv[$i];
	$i++;
}
$i = 0;
while ($i < $argc)
{
	$result = $result. $array[$i];
	$result = $result. " ";
	$i++;
}
$all = ft_split($result);
$i = 0;
sort($all);
while ($all[$i])
{
	echo ($all[$i]."\n");
	$i++;
}
?>
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
print_r($array);
$i = 0;
while ($i < $argc)
{
	$result = $result. $array[$i];
	$result = $result. " ";
	$i++;
}
echo "$result";
$all = ft_split($result);
print_r($all);
sort($all);
print_r($all);
?>
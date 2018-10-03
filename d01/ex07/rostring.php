#!/usr/bin/php
<?PHP
function ft_split($str)
{
	$line = trim($str);
	$my_array = preg_split("/\ +/", $line);
	return ($my_array);
}
$array = ft_split($argv[1]);
$n = 0;
while ($array[$n])
	 $n++;
$i = 1;
while ($i < $n)
{
	echo ($array[$i]);
	echo " ";
	$i++;
}
echo ($array[0]);
echo "\n"
?>
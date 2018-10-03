#!/usr/bin/php
<?PHP
function ft_split($str)
{
	$line = trim($str);
	$my_array = preg_split("/\ +/", $line);
	return ($my_array);
}

$arr = ft_split($argv[1]);
$i = 0;
while ($arr[$i])
{
	echo ($arr[$i]);
	if ($arr[$i + 1])
	  echo " ";
	$i++;
}
echo "\n";
?>
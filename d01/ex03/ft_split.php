#!/usr/bin/php
<?PHP
function ft_split($str)
{
	$line = trim($str);
	$my_array = preg_split("/\ +/", $line);
	return ($my_array);
}
?>
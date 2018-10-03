#!/usr/bin/php
<?PHP
function ft_split($str)
{
	$my_array = preg_split("/\ +/", $str);
	return ($my_array);
}
?>
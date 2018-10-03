#!/usr/bin/php
<?php
function ft_split($s)
{
	$r = explode(" ", $s);
	return ($r);
}

function is_alpha($a)
{
	$a = str_split(strtolower($a));
	foreach ($a as $char) {
		if ($char < 'a' || $char > 'z') {
			return (0);
		}
	}
	return (1);
}

function compare($a, $b)
{
	$a = strtolower($a);
	$b = strtolower($b);
	if (is_alpha($a))
		$ga = 1;
	else if (is_numeric($a))
		$ga = 2;
	else
		$ga = 3;
	if (is_alpha($b))
		$gb = 1;
	else if (is_numeric($b))
		$gb = 2;
	else
		$gb = 3;
	if ($ga != $gb)
		return ($ga - $gb);
	return (strcmp($a, $b));
}

function sortem($a, $b)
{
	$j = 0;
	while ($j < strlen($a) && $j < strlen($b))
	{
		if (compare($a[$j], $b[$j]) > 0)
			return (1);
		else if (compare($a[$j], $b[$j]) < 0)
			return (-1);
		$j++;
	}
	if ($j < strlen($a))
		return (1);
	else if ($j < strlen($b))
		return (-1);
	return (0);
}

$j = 0;
foreach ($argv as $key => $s) {
	if ($key != 0) {
		foreach (ft_split($s) as $key2 => $s2) {
			$res[$j] = $s2;
			$j++;
		}
	}
}
if ($res) {
	usort($res, 'sortem');
	foreach ($res as $key => $s) {
		echo $s . "\n";
	}
}
?>
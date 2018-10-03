#!/usr/bin/php
<?PHP
function ft_split($str)
{
	$line = trim($str);
	$my_array = preg_split("/\ +/", $line);
	return ($my_array);
}

function ssap( $argv, $argc)
{
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
	return ($all);
	
}

function getype($str)
{
	if (ctype_punct($str) == true)
		return (3);
	else if (is_numeric($str) == true)
		return (2);
	else if (ctype_alpha($str) == true)
		return (1);
	else
	   return (3);
}

function	mysort($array)
{
	$i = 0;
	while ($array[$i])
		$i++;
	$n = $i;
	$p = 0;
	$d = 0;
	$sp = 0;
	while ($n)
	{
		if (getype($array[$n][0]) == 3)
		  {
			  $tabsp[$sp] = $array[$n];
			  $sp++;
		  }
		 else if (getype($array[$n]) == 2)
		 {
			 $tabnum[$d] = $array[$n];
			 $d++;
		 }
		 else
		 {
			 $tabchar[$p] = $array[$n];
			 $p++;
		 }
		$n--;
	}
	sort($tabsp);
	print_r($tabsp);
	sort($tabnum);
	print_r($tabnum);
	natcasesort($tabchar);
	print_r($tabchar);
	return($array);
}

$array = ssap($argv, $argc);
$i = 0;
while ($array[$i])
	{
		echo ($array[$i]."\n");
		$i++;
	}
echo"-----------------------\n";
$arr = mysort($array);
?>
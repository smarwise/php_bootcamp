#!/usr/bin/php
<?PHP
function ft_is_sort($tab)
{
	$i = 0;
	while ($tab[$i])
	{
		$res1 = $res1. $tab[$i];
		$i++;
	}
	echo "$res1";
	sort($tab);
	$i = 0;
	while ($tab[$i])
	{
		$res2 = $res2. $tab[$i];
		$i++;
	}
	echo "k\n";
	echo($res2);
	printf(strcmp($res1, $res2));
	if (strcmp($res1, $res2) == 0)
	{
		echo "I returned true";
		return (true);
	}
	else
		return (false);
}
?>
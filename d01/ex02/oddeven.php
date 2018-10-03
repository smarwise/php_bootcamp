#!/usr/bin/php
<?PHP
while (1)
{
	echo "Enter a number: ";
	$handle = fopen("php://stdin","r");
	$line = fgets($handle);
	if ($line == NULL)
	{
		echo PHP_EOL;
		exit;
	}
	$number = (trim($line));
	if (ctype_digit($number) == false)
			echo "'$number' is not a number";
	else if ($number % 2 == 0)
		echo "The number $number is even";
	else
		echo "The number $number is odd";
	echo "\n";

}
?>
<?php

function roll_dice()
{
	$number = rand(1, 6);
	return $number;
}

$dice = roll_dice();
echo "$dice\n";
?>
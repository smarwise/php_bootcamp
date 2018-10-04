#!/usr/bin/php
<?PHP

$binarystring = pack ("NA3CC", 3, "aBc", 0x0D, 0x0A);
$a = unpack ("N1length/A3signature/C1cr/C1lf", $binarystring);
print_r ($a);

?>
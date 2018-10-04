#!/usr/bin/php
<?PHP
$fd = fopen($argv[1], "r");
while ($line = fgets($fd))
{
    $rn = $line;
    preg_match("/a href=""/", "$datenow", $array);
    echo "$line";
}
?>
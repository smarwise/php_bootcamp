#!/usr/bin/php
<?PHP
$data = $argv[1];
$crazy = preg_replace('/[ ]{2,}|[\t]/', ' ', trim($data));
echo "$crazy";
?>
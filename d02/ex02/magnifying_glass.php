#!/usr/bin/php
<?PHP

$string = file($argv[1]);

$results = preg_grep("/href=/", $string);
print_r($results);
$i = 1;
while ($results[$i])
{
    $str = $results[$i];
    if (($pos = (strpos($str, "title="))) != NULL)
    {
        $pos = $pos + 7;
       
        while ($str[$pos] != '"')
        {
            $str[$pos] = strtoupper($str[$pos]);
            $pos++;
        }

    }
    $pos = strpos($str, "http");
    while ($str[$pos] != '>')
        $pos++;
        while ($str[$pos] != '<')
        {
            $str[$pos] = strtoupper($str[$pos]);
            $pos++;
        }
    $results[$i] = $str;
    $i++;
}
print_r($results);
 
?>
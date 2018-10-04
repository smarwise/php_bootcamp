#!/usr/bin/php
<?PHP

$string = file($argv[1]);

$results = preg_grep("/href=/", $string);
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
$file = file($argv[1]);
$n = 1;
$i = 0;
while ($file[$i])
{
    if (strstr($file[$i], "href"))
        {
            $file[$i] = $results[$n];
            $n++;
        }
    $i++;

}
foreach ($file as $string)
{
    echo "$string";
}

?>
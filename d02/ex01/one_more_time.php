#!/usr/bin/php
<?PHP

function frtoeng($datenow)
{
    $datenow = str_replace("Lundi", "Monday", $datenow);
    $datenow = str_replace("Mardi", "Tuesday", "$datenow");
    $datenow = str_replace("Mercredi", "Wednesday", "$datenow");
    $datenow = str_replace("Jeudi", "Thursday", "$datenow");
    $datenow = str_replace("Vendredi", "Fridayy", "$datenow");
    $datenow = str_replace("Samedi", "Saturday", "$datenow");
    $datenow = str_replace("Dimanche", "Sunday", "$datenow");
    $datenow = str_replace("Janvier", "January", "$datenow");
    $datenow = str_replace("Février", "February", "$datenow");
    $datenow = str_replace("Mars", "March", "$datenow");
    $datenow = str_replace("Avril", "April", "$datenow");
    $datenow = str_replace("Mail", "May", "$datenow");
    $datenow = str_replace("Juin", "June", "$datenow");
    $datenow = str_replace("Juillet", "July", "$datenow");
    $datenow = str_replace("Août", "August", "$datenow");
    $datenow = str_replace("Septembre", "September", "$datenow");
    $datenow = str_replace("Octobre", "October", "$datenow");
    $datenow = str_replace("Novembre", "November", "$datenow");
    $datenow = str_replace("Décembre", "December", "$datenow");
    return ($datenow);
}

function checkformat($datenow)
{
    $arrayweek = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
    $arraymonth = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
    foreach ($arrayweek as $day)
    {
        if (strpos($datenow, $day) !== FALSE)
        {
            $i = 1;
        }
    }
    foreach ($arraymonth as $day)
    {
        if (strpos($datenow, $day) !== FALSE)
        {
            $i = 1;
        }
    }
    return ($i);
}

if ($argc == 1)
    exit;
$datenow = $argv[1];
$datenow = frtoeng($datenow);


$test = preg_split('/[\s]+/', $datenow);

$i = checkformat($datenow);
if (!$i)
{
    echo "Wrong Format\n";
    exit;
}
date_default_timezone_set("Europe/Paris");
$time = strtotime($datenow);
echo "$time";
?>
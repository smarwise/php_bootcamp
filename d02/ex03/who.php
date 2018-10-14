#!/usr/bin/php
<?php

$array = array();
date_default_timezone_set("Africa/Johannesburg");
$fd = fopen("/var/run/utmpx", 'r');
while($data = fread($fd, 628))
{
   $new = unpack("a256ut_user/a4ut_id/a32ut_line/iut_pid/iut_type/I2ut_time",$data);
   print_r($new);
   if($new['ut_type'] == 7)
   {
       array_push($array, $new);
   }
}

foreach($array as $str)
{
   echo $str['ut_user'].' '.$str['ut_line'].' '.date('M j H:i',$str['ut_time1'])."\n";
}
?>
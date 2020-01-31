<?php
 $coordinates='1.2921,-36.8219';
$api_url="https://api.darksky.net/forecast/c34b001d0d7a805a8131b3d29ba57284/".$coordinates;
$forecast=json_decode(file_get_contents($api_url));
//echo '<prev>';
//print_r($forecast);
//echo'</prev>';
$temperature_current=round($forecast->currently->temperature);
$summary_current=$forecast->currently->summary;
$windspeed_current=round($forecast->currently->windSpeed);
$humidity_current=$forecast->currently->humidity*100;
  //set time zone
  date_default_timezone_set($forecast->timezone);
  
?>

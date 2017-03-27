<?php
// by default the current date is used
$month = date('n');
$monthtext = date('F');
$day = date('j');
$year = date('Y');
$weekday = date('l');
echo "<h1>$weekday, $monthtext $day, $year</h1>";
echo "<h1>$weekday, $month/$day/$year</h1>";
$newmonth = 2;
$newday = 29;
$newyear = 2000;
if (checkdate($newmonth,$newday,$newyear))
{
   // must be in order of year month day separated by dashes
   $datestring = "$newyear-$newmonth-$newday";
   $datestamp = strtotime($datestring);
   $month = date('n',$datestamp);
   $monthtext = date('F',$datestamp);
   $day = date('j',$datestamp);
   $year = date('Y',$datestamp);
   $weekday = date('l',$datestamp);
   echo "<h1>$weekday, $monthtext $day, $year</h1>";
   echo "<h1>$weekday, $month/$day/$year</h1>";
}
else
   echo "<h1>Invalid date</h1>";
?>
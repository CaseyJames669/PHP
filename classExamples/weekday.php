<?php
extract($_GET);
if (checkdate($month,$day,$year))
{
   echo "<h1>The date $month/$day/$year is a ";
   echo dayoftheweek($month,$day,$year);
   echo "</h1>";
}
else
   echo "<h1>$month/$day/$year is an invalid date</h1>";

?>

<form action="weekday.html">
   <input type="submit" value="back to form">
</form>

<?php
// FUNCTIONS
function dayoftheweek($m,$d,$y)
{
   $datestring = "$y-$m-$d";
   $datestamp = strtotime($datestring);
   $weekday = date('l',$datestamp);
   return $weekday;
}

echo "<hr>";
highlight_file("weekday.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>CSIS 311 - Server-Side Scripting - Brekke - 688</title>
<link rel="stylesheet" type="text/css" href="../main.css" />
</head>

<body>
<div id="page">

<div id="header">
	<h1>CSIS 311 - Casey Bladow</h1>
</div>

<div id="menu">
  <p>
    <ul>
    <li><a href="http://puff.mnstate.edu/~bladowca/private/">Home</a><br/></li>
    <li><a href="http://puff.mnstate.edu/~bladowca/private/asmt1/index.html">Assignment 1</a><br/></li>
    <li><a href="http://puff.mnstate.edu/~bladowca/private/asmt2/index.html">Assignment 2</a><br/></li>
    <li><a href="http://puff.mnstate.edu/~bladowca/private/asmt3/index.html">Assignment 3</a><br/></li> 
    <li><a href="http://puff.mnstate.edu/~bladowca/private/asmt4/index.html">Assignment 4</a><br/></li>
    <li><a href="mailto:bladowca@mnstate.edu">Email</a></li>
    </ul>
    <br/>
  </p>
</div>

<div id="main">

<p>Birthday facts...</p>

<?php
$month = $_REQUEST["month"];
$day = $_REQUEST["day"];
$year = $_REQUEST["year"];
$weekday = date('l');

if (checkdate($month,$day,$year))
{
   // must be in order of year month day separated by dashes
   $datestring = "$year-$month-$day";
   $datestamp = strtotime($datestring);
   $month = date('n',$datestamp);
   $monthtext = date('F',$datestamp);
   $day = date('j',$datestamp);
   $year = date('Y',$datestamp);
   $weekday = date('l',$datestamp);
   echo "<h1>Date Entered: $month/$day/$year</h1>";
   
   	if (isset($_POST['1']))
	{
		echo "Season of the year: " . getSeason($month, $day) . '<br/>';
	}
	if (isset($_POST['2']))
	{
		echo "Zodiac sign: " . getZodiac($month, $day) . '<br/>';
	}
	if (isset($_POST['3']))
	{
		echo "Chinese animal sign: " . getChineseAnimal($year) . '<br/>';
	}
	if (isset($_POST['4']))
	{
		echo "Age: " . getAge($month, $day, $year) . '<br/>';
	}
	if (isset($_POST['5']))
	{
		echo "Day of the week: " . getDay($month, $day, $year) . '<br/>';
	}
}
else
   echo "<h1>$month/$day/$year is an Invalid date</h1>";
?>

<form action="index.html">
<input type="submit" name="backToindex" value="Back to Asmt Index"/>
</form>

<form action="BdayFun.html">
<input type="submit" name="backtoBday" value="Back to Birthday Page"/>
</form>

<?php
// ********************************* FUNCTIONS ************************************//
function getSeason($month, $day) {
	$datesent = $month.$day;

	   //  Days of spring
       $spring_starts = "0321";
       $spring_ends   = "0620";

       //  Days of summer
       $summer_starts = "0621";
       $summer_ends   = "0922";

       //  Days of autumn
       $autumn_starts = "0923";
       $autumn_ends   = "1220";

       //  If $day is between the days of spring, summer, autumn, and winter
       if( $datesent >= $spring_starts && $datesent <= $spring_ends ) :
               $season = "Spring";
       elseif( $datesent >= $summer_starts && $datesent <= $summer_ends ) :
               $season = "Summer";
       elseif( $datesent >= $autumn_starts && $datesent <= $autumn_ends ) :
               $season = "Autumn";
       else :
               $season = "Winter";
       endif;
	   
	   return $season;
}

function getZodiac($month, $day) {
	$zodiac = ""; 
        
   if     ( ( $month == 3 && $day > 20 ) || ( $month == 4 && $day < 20 ) ) { $zodiac = "Aries"; } 
   elseif ( ( $month == 4 && $day > 19 ) || ( $month == 5 && $day < 21 ) ) { $zodiac = "Taurus"; } 
   elseif ( ( $month == 5 && $day > 20 ) || ( $month == 6 && $day < 21 ) ) { $zodiac = "Gemini"; } 
   elseif ( ( $month == 6 && $day > 20 ) || ( $month == 7 && $day < 23 ) ) { $zodiac = "Cancer"; } 
   elseif ( ( $month == 7 && $day > 22 ) || ( $month == 8 && $day < 23 ) ) { $zodiac = "Leo"; } 
   elseif ( ( $month == 8 && $day > 22 ) || ( $month == 9 && $day < 23 ) ) { $zodiac = "Virgo"; } 
   elseif ( ( $month == 9 && $day > 22 ) || ( $month == 10 && $day < 23 ) ) { $zodiac = "Libra"; } 
   elseif ( ( $month == 10 && $day > 22 ) || ( $month == 11 && $day < 22 ) ) { $zodiac = "Scorpio"; } 
   elseif ( ( $month == 11 && $day > 21 ) || ( $month == 12 && $day < 22 ) ) { $zodiac = "Sagittarius"; } 
   elseif ( ( $month == 12 && $day > 21 ) || ( $month == 1 && $day < 20 ) ) { $zodiac = "Capricorn"; } 
   elseif ( ( $month == 1 && $day > 19 ) || ( $month == 2 && $day < 19 ) ) { $zodiac = "Aquarius"; } 
   elseif ( ( $month == 2 && $day > 18 ) || ( $month == 3 && $day < 21 ) ) { $zodiac = "Pisces"; } 

   return $zodiac; 
}

function getChineseAnimal($year) {
	$animal = ""; 
        
   if     ( $year % 12 ==4 ) { $animal = "Rat"; } 
   elseif ( $year % 12 ==5 ) { $animal = "Ox"; } 
   elseif ( $year % 12 ==6 ) { $animal = "Tiger"; } 
   elseif ( $year % 12 ==7 ) { $animal = "Rabbit"; } 
   elseif ( $year % 12 ==8 ) { $animal = "Dragon"; } 
   elseif ( $year % 12 ==9 ) { $animal = "Snake"; } 
   elseif ( $year % 12 ==10 ) { $animal = "Horse"; } 
   elseif ( $year % 12 ==11 ) { $animal = "Sheep (Goat)"; } 
   elseif ( $year % 12 ==12 ) { $animal = "Monkey"; } 
   elseif ( $year % 12 ==1 ) { $animal = "Rooster"; } 
   elseif ( $year % 12 ==2 ) { $animal = "Dog"; } 
   elseif ( $year % 12 ==3 ) { $animal = "Pig"; } 

   return $animal;
}

function getAge($month, $day, $year)
{
	$Cmonth = date('n');
	$Cday = date('j');
	$Cyear = date('Y');
	
	$yearDiff = $Cyear - $year;
	
	if ($month.$day > $Cmonth.$Cday)
	{
		$yearDiff = $Cyear - $year;
		$yearDiff--;
	}
	
	return $yearDiff;
}

function getDay($year, $month, $day)
{
	$datestring = "$year-$month-$day";
    $datestamp = strtotime($datestring);
    $weekday = date('l',$datestamp);
	return $weekday;
}

echo "<HR />";
highlight_file("BdayFun.php");
?>

</div>

<div id="footer">
	<p class="copyright">&copy; 2014 Casey Bladow</p>
</div>

</div>
</body>
</html>

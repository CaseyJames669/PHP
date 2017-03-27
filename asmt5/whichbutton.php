<!DOCTYPE html>
<html lang="en-US">
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
    <li><a href="http://puff.mnstate.edu/~bladowca/private/asmt5/index.php">Assignment 5</a><br/></li>
    <li><a href="mailto:bladowca@mnstate.edu">Email</a></li>
    </ul>
    <br/>
  </p>
</div>

<div id="main">

<?php

$month = $_POST["month"];
$day = $_POST["day"];
$year = $_POST["year"];
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
	 $flag = 1;
	 ?>
     
	 <form method="POST" action="">
	 <input type="submit" name="whichbutton" value="Season">
	 <input type="submit" name="whichbutton" value="Zodiac">
	 <input type="submit" name="whichbutton" value="Chinese Animal">
	 <input type="submit" name="whichbutton" value="Age">
	 <input type="submit" name="whichbutton" value="Day of Week">
     
     <input type="hidden" name="month" value="<?php echo $month ?>">
     <input type="hidden" name="day" value="<?php echo $day ?>">
     <input type="hidden" name="year" value="<?php echo $year ?>">
     
	 </form>
           
	 <?php
	 
	 $whichbutton = $_REQUEST["whichbutton"];
	 if (isset($whichbutton))
	 {
	  if ($whichbutton == 'Season')
	  {
		  $season = getSeason($month, $day);
		  echo "Season of the year: $season";
	  }
	  if ($whichbutton == 'Zodiac')
	  {
		  $zodiac = getZodiac($month, $day);
		  echo "Zodiac sign: $zodiac";
	  }
	  if ($whichbutton == 'Chinese Animal')
	  {
		  $chineseAnimal = getChineseAnimal($year);
		  echo "Chinese animal sign: $chineseAnimal";
	  }
	  if ($whichbutton == 'Age')
	  {
		  $age = getAge($year, $month, $day);
		  echo "Age: $age";
	  }
	  if ($whichbutton == 'Day of Week')
	  {
		  $dayofweek = getDay($month, $day, $year);
		  echo "Day of the week: $dayofweek";
	  }
	 } //closes whichbutton if
  } //closes checkdate if
	 else
	 {
	 	echo "<h1>$month/$day/$year is an Invalid date</h1>";
	 }
?>

<form action="index.php">
<input type="submit" name="backToindex" value="Enter New Date"/>
</form>

<form action="../index.html">
<input type="submit" name="home" value="Home"/>
</form>




<?php
// ********************************* FUNCTIONS ************************************//
function getSeason($month, $day) {
	//$season = "";
	if ( ( $month >= 1 && $day > 1 ) || ( $month <= 3 && $day < 20 ) ) { $season = "Winter"; }
	elseif ( ( $month >= 3 && $day > 21 ) || ( $month <= 6 && $day < 20 ) ) { $season = "Spring"; }
	elseif ( ( $month >= 6 && $day > 21 ) || ( $month <= 9 && $day < 22 ) ) { $season = "Summer"; } 
   	elseif ( ( $month >= 9 && $day > 23 ) || ( $month <= 12 && $day < 20 ) ) { $season = "Autumn"; } 
   	elseif ( ( $month >= 12 && $day > 21 ) || ( $month <= 3 && $day < 20 ) ) { $season = "Winter"; }
	return $season;
}

function getZodiac($month, $day) {
	//$zodiac = ""; 
        
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

function getAge($year, $month, $day)
{
	$Cmonth = date('n');
	$Cday = date('j');
	$Cyear = date('Y');
	
	$yearDiff = $Cyear - $year;
	
	if (($month >= $Cmonth)&&($day > $Cday))
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
highlight_file("whichbutton.php");
?>


</div>

<div id="footer">
	<p class="copyright">&copy; 2014 Casey Bladow</p>
</div>

</div>
</body>
</html>

<!DOCTYPE html>
<html>

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
    <li><a href="http://puff.mnstate.edu/~bladowca/private/asmt6/index.html">Assignment 6</a><br/></li>
    <li><a href="mailto:bladowca@mnstate.edu">Email</a></li>
    </ul>
    <br/>
  </p>
</div>

<div id="main">

<h3>Airport Parking...</h3>

<?php
	extract($_GET);
    if ($button == NULL)
       displayform();
    else
    {
		if ($button == "Begin" || $button == "Reset")
		{
			$parkers = NULL;
			$shortTermCount = 0;
			$longTermCount = 0;
			$time = 0;
    	}
		elseif ($button == "Submit")
		{
			$whichTerm = ($_GET["whichTerm"]);
			if ($whichTerm == "shortTerm")
			{
				$shortTermCount++;
				$time = ($_GET["time"]);
				$shortcost = calcShortTerm($time);
			}
			else
			{
				$longTermCount++;
				$time = ($_GET["time"]);
				$longcost = calcLongTerm($time);
			}
		}
		$parkers = "Number of short term parkers: " . $shortTermCount . "\n" .
					"Number of long term parkers: " . $longTermCount . "\n" .
					"Fee for latest short term parker: " . $shortcost . "\n" .
					"Fee for latest long term parker: " . $longcost;
	echo <<< HERE
	<form>
			Short Term Parking or Long Term Parking?
			<select name="whichTerm">
				<option value="shortTerm">Short Term</option>
				<option value="longTerm">Long Term</option>
			</select> <br>
			
			How long?(Minutes if Short Term/Days if Long Term)	
			<input type="text" name="time"><br/>	
			
			<input type="submit" name="button" value="Submit" > <input type="submit" name="$button" value="Reset"/><br> 
			
            <textarea rows="20" cols="50">$parkers</textarea><br/>
			
            		<input type="hidden" name="shortTermCount" value="$shortTermCount">
			<input type="hidden" name="longTermCount" value="$longTermCount">
			<input type="hidden" name="parkers" value="$parkers">
			<input type="hidden" name="shortsum" value="$shortsum">
         </form>
HERE;
}

function calcShortTerm($time)
{
	if($time <=30) $shortcost = "$1.00";
	elseif($time >= 31 && $time <= 60) $shortcost = "$2.00";
	elseif($time >= 61 && $time <= 90) $shortcost = "$3.00";
	elseif($time >= 91 && $time <= 120) $shortcost = "$4.00";
	elseif($time >= 121 && $time <= 150) $shortcost = "$5.00";
	elseif($time >= 151 && $time <= 180) $shortcost = "$6.00";
	elseif($time >= 181 && $time <= 210) $shortcost = "$7.00";
	elseif($time >= 211 && $time <= 240) $shortcost = "$8.00";
	elseif($time >= 241) $shortcost = "$9.00";
	return $shortcost;
}

function calcLongTerm($time)
{
	if($time == 1) return "$7.00";
	if($time == 2) return "$14.00";
	if($time == 3) return "$21.00";
	if($time == 4) return "$28.00";
	if($time == 5) return "$35.00";
	if($time == 6) return "$42.00";
	if($time == 7) return "$42.00";
	if($time == 8) return "$49.00";
	if($time == 9) return "$56.00";
	if($time == 10) return "$63.00";
	if($time == 11) return "$70.00";
	if($time == 12) return "$77.00";
	if($time == 13) return "$84.00";
	if($time == 14) return "$84.00";
}

function displayform()
{
   echo <<< HERE
      <form>
         <h3>Click 'Begin' to start!
		 <input name="button" type="submit" value="Begin" ></h3>
      </form>
HERE;
}
?>

<form action="../index.html">
<input type="submit" name="$button" value="Home"/>
</form>

<form action="viewphp2.php">
<input type="submit" name="$button" value="View PHP Source"/>
</form>

</div>

<div id="footer">
	<p class="copyright">&copy; 2014 Casey Bladow</p>
</div>

</div>
</body>
</html>

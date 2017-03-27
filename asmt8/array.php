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
    <li><a href="http://puff.mnstate.edu/~bladowca/private/asmt5/index.php">Assignment 5</a><br/></li>
    <li><a href="http://puff.mnstate.edu/~bladowca/private/asmt6/index.html">Assignment 6</a><br/></li>
    <li><a href="http://puff.mnstate.edu/~bladowca/private/asmt7/index.html">Assignment 7</a><br/></li>
    <li><a href="http://puff.mnstate.edu/~bladowca/private/asmt8/index.html">Assignment 8</a><br/></li>
    <li><a href="mailto:bladowca@mnstate.edu">Email</a></li>
    </ul>
    <br/>
  </p>
</div>

<div id="main">
<?php
extract($_POST);
   echo "<form method=\"POST\">";
   if ($button == NULL or $button == "start over")
      collectInput();
   else
   {
      displayHeading($howmany,$minimum,$maximum);
      if ($button=="Go" or $button=="new numbers")
         $numbers = generateNumbers($howmany,$minimum,$maximum);
      elseif ($button=="sort ascendingly")
         sort($numbers);
      elseif ($button=="sort descendingly")
         rsort($numbers);
      displayArray($numbers);
      displayButtons();
      if ($button=="biggest")
         echo "<h3>the biggest is " . biggest($numbers) . "</h3>\n";
      else if ($button=="smallest")
         echo "<h3>the smallest is " . smallest($numbers) . "</h3>\n";
      else if ($button=="sum")
         echo "<h3>the sum is " . sum($numbers) . "</h3>\n";
      else if ($button=="average")
         echo "<h3>the average is " . average($numbers) . "</h3>\n";
      else if ($button=="median")
         echo "<h3>the median is " . median($numbers) . "</h3>\n";
      else
         echo "<h3>&nbsp;</h3>\n"; // blank line
      passPersistentData($numbers,$howmany,$minimum,$maximum);
   }
   echo "</form>";


function median($numbers)
{
	sort($numbers);
	$howmany = count($numbers);
	$median = $numbers[$howmany/2];
	return $median;
}

function average($numbers)
{
	$average=sum($numbers)/count($numbers);
	return $average;
}

function sum($numbers)
{
	$sum=0;
  	for ($i=0; $i<count($numbers); $i++)
		$sum += $numbers[$i];
	return $sum;
}

function smallest($numbers)
{
	$smallest=biggest($numbers);
	for ($i=0; $i<count($numbers); $i++)
		if ($numbers[$i] < $smallest)
			$smallest = $numbers[$i];
	return $smallest;
}

function biggest($numbers)
{
	$biggest=0;
	for ($i=0; $i<count($numbers); $i++)
		if ($numbers[$i] > $biggest)
			$biggest = $numbers[$i];
	return $biggest;
}

function collectInput()
{
	echo <<< HERE
      <form>
         <h3>How many numbers in the array? <input name="howmany" type="text" >
		 <h3>What is the smallest possible value? <input name="minimum" type="text" >
		 <h3>What is the biggest possible value? <input name="maximum" type="text" > <br>
		 <input name="button" type="submit" value="Go" ></h3>
      </form>
HERE;
}

function passPersistentData($numbers,$howmany,$minimum,$maximum)
{
	echo "<input type=\"hidden\" name=\"howmany\" value=\"$howmany\">";
	echo "<input type=\"hidden\" name=\"minimum\" value=\"$minimum\">";
	echo "<input type=\"hidden\" name=\"maximum\" value=\"$maximum\">";
	for ($ii=0; $ii<$howmany; $ii++)
		echo("<input type=\"hidden\" name=\"numbers[$ii]\" value=\"$numbers[$ii]\">");
}

function displayHeading($howmany,$minimum,$maximum)
{
   echo "<h2>";
   echo "$howmany random numbers in the range $minimum to $maximum";
   echo "</h2>";
}

function generateNumbers($howmany,$minimum,$maximum)
{
	for ($i=0; $i<$howmany; $i++)
		$numbers[$i] = rand($minimum,$maximum);
	return $numbers;
}

function displayArray($numbers)
{
	echo("<table border=\"1\" style=\"width:300px\">");
	echo("<tr>");
		echo("<td>Array Index</td>");
		for ($ii=0; $ii<count($numbers); $ii++)
		echo("<td>[$ii]</td>");
	echo("</tr>");
	echo("<tr>");
		echo("<td>Array Value</td>");
		for ($i=0; $i<count($numbers); $i++)
            echo("<td>$numbers[$i]</td>");
	echo("</table>");
}

function displayButtons()
{
	echo <<< HERE
	<input type="submit" name="button" value="new numbers">
	<input type="submit" name="button" value="biggest">
    <input type="submit" name="button" value="smallest">
    <input type="submit" name="button" value="sum">
    <input type="submit" name="button" value="average">
    <input type="submit" name="button" value="median">
	<input type="submit" name="button" value="sort ascendingly">
    <input type="submit" name="button" value="sort descendingly">
    <input type="submit" name="button" value="start over">
HERE;
}
?>

<form action="index.html">
<input type="submit" name="backToindex" value="Back"/>
</form>
<form action="../index.html">
<input type="submit" name="backToindex" value="Home"/>
</form>
<form action="viewphp.php">
<input type="submit" name="viewphp" value="View PHP Source"/>
</form>

</div>

<div id="footer">
	<p class="copyright">&copy; 2014 Casey Bladow</p>
</div>

</div>
</body>
</html>

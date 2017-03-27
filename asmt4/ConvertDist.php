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

<p>This page will convert distances...</p>

<?php

if ($_REQUEST['MtoK']):
	$temp = $_REQUEST['temp'];
	echo "<b>$temp</b> Miles is equal to <b> " . MtoK($temp) . " </b> Kilometers.";
endif;

if ($_REQUEST['KtoM']):
	$temp = $_REQUEST['temp'];
	echo "<b>$temp</b> Kilometers is equal to <b> " . KtoM($temp) . " </b> Miles.";
endif;
?>

<form method="POST" action="ConvertDist.php">
	<input type="text" name="temp" value="" />
	<input type="submit" name="MtoK" value="Miles to Kilometers">
    <input type="submit" name="KtoM" value="Kilometers to Miles">
</form>

<form action="index.html">
<input type="submit" name="backToindex" value="Back"/>
</form>

<?php
//********************************** FUNCTIONS ************************************//

function MtoK($temp)
{
	$ratio = 1.609344;
	$kms = $temp * $ratio;
	return $kms;
}

function KtoM($temp)
{
	$ratio = 0.621371;
	$miles = $temp * $ratio;
	return $miles;
}

echo "<HR />";
highlight_file("ConvertDist.php");
?>

</div>

<div id="footer">
	<p class="copyright">&copy; 2014 Casey Bladow</p>
</div>

</div>
</body>
</html>

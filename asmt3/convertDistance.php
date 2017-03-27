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
    <li><a href="mailto:bladowca@mnstate.edu">Email</a></li>
    </ul>
    <br/>
  </p>
</div>

<div id="main">

<?php
//in = cm * 0.39370
$msg = "";

if ($_REQUEST['CtoI']):

	$temp = $_REQUEST['temp'];
	$i_temp = $temp * 0.39370;
	$stripLetters = preg_replace("/[^0-9]/", "", $temp);
	
	if (empty($temp) || empty($stripLetters)):
		$msg = "Please enter a measurement to convert.";
	
	else: 
	$msg = "<b>$temp</b> Centimeters is equal to <b>$i_temp</b> Inches.";
	endif;
endif;

//cm = in * 2.54
if ($_REQUEST['ItoC']):

	$temp = $_REQUEST['temp'];
	$c_temp = $temp * 2.54;
	$stripLetters = preg_replace("/[^0-9]/", "", $temp);
	
	if (empty($temp) || empty($stripLetters)):
		$msg = "Please enter a measurement to convert.";
	
	else: 
	$msg = "<b>$temp</b> Inches is equal to <b>$c_temp</b> Centimeters.";
	endif;
endif;
?>

<p>This page will convert temperatures...</p>

<form method="POST" action="convertDistance.php">
	<input type="text" name="temp" value="" />
	<input type="submit" name="ItoC" value="Inches to Centimeters">
    <input type="submit" name="CtoI" value="Centimeters to Inches">
</form>

<?php echo $msg ?><br/>

**0 MUST be enter as 00**

<form action="index.html">
<input type="submit" name="backToindex" value="Back"/>
</form>
</div>

<div id="footer">
	<p class="copyright">&copy; 2014 Casey Bladow</p>
</div>

</div>
</body>
</html>

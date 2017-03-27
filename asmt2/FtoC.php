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
    <li><a href="mailto:bladowca@mnstate.edu">Email</a></li>
    </ul>
    <br/>
  </p>
</div>

<div id="main">
<?php
//C = (F -32) * .56
$msg = "";

if ($_REQUEST['submit']):

	$f_temp = $_REQUEST['f_temp'];
	$c_temp = ($f_temp - 32) * .56;
	$stripLetters = preg_replace("/[^0-9]/", "", $f_temp);
	
	if (empty($f_temp) || empty($stripLetters)):
		$msg = "Please enter a temp to convert.";
	
	else: 
	$msg = "<b>$f_temp</b> degrees Fahrenheit is equal to <b>$c_temp</b> degrees Celcius.";
	endif;
endif;
?>
<p>This page will convert Fahrenheit to Celsius...</p>

<form method="POST" action="FtoC.php">
	<input type="text" name="f_temp" value="" />
	<input type="submit" name="submit" value="Convert">	
</form>
<?php echo $msg ?><br/>
**0° MUST be enter as 00°**
</form>
<form action="index.html">
<input type="submit" name="backToIndex" value="Back"/>
</form>

</div>

<div id="footer">
	<p class="copyright">&copy; 2014 Casey Bladow</p>
</div>

</div>
</body>
</html>

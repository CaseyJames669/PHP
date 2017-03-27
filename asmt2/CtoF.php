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
//F = C * 1.8 + 32
$msg = "";

if ($_REQUEST['submit']):

	$c_temp = $_REQUEST['c_temp'];
	$f_temp = $c_temp * 1.8 + 32;
	$stripLetters = preg_replace("/[^0-9]/", "", $c_temp);
	
	if (empty($c_temp) || empty($stripLetters)):
		$msg = "Please enter a temp to convert.";
	
	else: 
	$msg = "<b>$c_temp</b> degrees Fahrenheit is equal to <b>$f_temp</b> degrees Celcius.";
	endif;
endif;
?>
<p>This page will convert Celsius to Fahrenheit...</p>

<form method="POST" action="CtoF.php">
	<input type="text" name="c_temp" value="" />
	<input type="submit" name="submit" value="Convert">	
</form>
<?php echo $msg ?><br/>
**0° MUST be enter as 00°**
</form>
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

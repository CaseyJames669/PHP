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
$msg = "";

if ($_REQUEST['submit']):

	$var1 = $_REQUEST['var1'];
	$var2 = $_REQUEST['var2'];
	$stripLetters1 = preg_replace("/[^0-9]/", "", $var1);
	$stripLetters2 = preg_replace("/[^0-9]/", "", $var2);
	$add = $var1 + $var2;
	$sub = $var1 - $var2;
	$mult = $var1 * $var2;
	$divide = $var1 / $var2;
	$rem = $var1 % $var2;

	if (empty($var1) || empty($var2) || empty($stripLetters1) || empty($stripLetters2)):
		$msg = "Please enter 2 variables. Can't divide by 0.";
	
	else:
	$msg1 = "<b>$var1</b> + <b>$var2</b> = <b>$add</b>.";
	$msg2 = "<b>$var1</b> - <b>$var2</b> = <b>$sub</b>.";
	$msg3 = "<b>$var1</b> * <b>$var2</b> = <b>$mult</b>.";
	$msg4 = "<b>$var1</b> / <b>$var2</b> = <b>$divide</b>.";
	$msg5 = "<b>$var1</b> % <b>$var2</b> = <b>$rem</b>.";
	endif;
endif;
?>
<p>This page will gather two numbers then output the arithmetic operations...</p>

<form method="POST" action="arithoperations.php">
	Variable 1:<input type="text" name="var1" value="" width="40" />
    Variable 2:<input type="text" name="var2" value="" width="40" />
	<input type="submit" name="submit" value="Let's do Arithmetics!">	
</form>
<?php
	echo "$msg1<br/>";
	echo "$msg2<br/>";
	echo "$msg3<br/>";
	echo "$msg4<br/>";
	echo $msg5;
?><br/>
**0 MUST be enter as 00 AND Variable 2 CAN NOT be 0 || 00**
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

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

<h3>Thank you for your submission</h3>

<?php
	$firstName = $_REQUEST['firstName'];
	$lastName = $_REQUEST['lastName'];
	
	echo "First Name: $firstName<br/>";
	echo "Last Name: $lastName<br/>";
	
	$major = $_REQUEST["major"];
	echo "Major: $major<br/>";
	
	$county = $_REQUEST["county"];
	$sex = $_REQUEST["sex"];
	
	echo "County: $county<br/>";
	echo "Sex: $sex<br/>";
	
	$textarea = $_REQUEST["textarea"];
	echo "Tell me about yourself: $textarea<br/>";
	
	echo "Experiences: <br/>";
	echo $_REQUEST["win7"] . "<br/>";
	echo $_REQUEST["win8"] . "<br/>";
	echo $_REQUEST["macosx"] . "<br/>";
	echo $_REQUEST["linux"] . "<br/>";
	echo $_REQUEST["unix"];
?>

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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Receipt</title>
</head>

<body>

<h1>Receipt</h1>

<?php
	echo $_REQUEST["firstName"] . " ";
	echo $_REQUEST["lastName"] , "<br/>";
	
	$size = $_REQUEST["size"];
	
	echo "Size: $size<br/>";
	
	echo "Toppings:<br/>";
	echo $_REQUEST["pep"] . "<br/>";
	echo $_REQUEST["sausage"] . "<br/>";
	echo $_REQUEST["bacon"] . "<br/>";
	echo $_REQUEST["beef"] . "<br/>";
	echo $_REQUEST["cheese"] . "<br/>";
	
?>

<form action="htmlForms.html">
<input type="submit" value="Go Back">
</form>

</body>
</html>
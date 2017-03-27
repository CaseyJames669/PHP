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

<h3>Thank you for your submission</h3>

<?php
	$firstName = $_REQUEST['firstName'];
	$lastName = $_REQUEST['lastName'];
	
	echo "First Name: $firstName<br/>";
	echo "Last Name: $lastName<br/>";
	
	$size = $_REQUEST["size"];
	if ($size == "1")
	{
		$pizza = 12.99;
		$size = "Medium";
	}
	elseif ($size == "2")
	{
		$pizza = 15.99;
		$size  = "Large";
	}
	echo "Size: $size<br/>";
		
	$choice = $_REQUEST['topping'];		  
	
	if ($choice == "1")
	    {
		 $msg = "Cheese";
		}
		elseif ($choice == "2")
	    {
			$msg = "Meat";
		}
		 elseif ($choice == "3")
	    {
			$msg = "Chicken Alfredo";
		}
		 elseif ($choice == "4")
	    {
			$msg = "Supreme";
		} 
		 elseif ($choice == "5")
	    {
			$msg = "Taco";
		}
	echo "Topping: $msg<br/>";		  
	
	echo "Additional Toppings:<br/>";
	if (isset($_POST['add1']))
	{
		echo $_REQUEST['add1'] . "  $1.25 <br/>";
		$addamount1 = 1.25;
	}
	if (isset($_POST['add2']))
	{
		echo $_REQUEST['add2'] . "  $1.00 <br/>";
		$addamount2 = 1.00;
	}
	if (isset($_POST['add3']))
	{
		echo $_REQUEST['add3'] . "  $1.00 <br/>";
		$addamount3 = 1.00;
	}
	if (isset($_POST['add4']))
	{
		echo $_REQUEST['add4'] . "  $.50<br/>";
		$addamount4 = .50;
	}
	if (isset($_POST['add5']))
	{
		echo $_REQUEST['add5'] . "  $.75<br/>";
		$addamount5 = .75;
	}
	
	$totalAdditions = $addamount1 + $addamount2 + $addamount3 + $addamount4 + $addamount5;
	
	$textarea = $_REQUEST["textarea"];
	echo "Special Instructions: $textarea<br/>";

	$subtotal = $pizza + $totalAdditions;

	echo "Subtotal: $$subtotal <br/>";
	
	$tax = $subtotal * .06;
	$formattedTax = number_format($tax, 2, '.', ',');
	echo 'Tax (6%): $' . $formattedTax . '<br/>';
	
	$total = $tax + $subtotal;
	$formattedTotal = number_format($total, 2, '.', ',');
	echo 'Total: $' . $formattedTotal . '<br/>'; 

?>
<form action="pizza.html">
<input type="submit" name="backToPizza" value="Back to Order Form"/>
</form>

<form action="index.html">
<input type="submit" name="backToindex" value="Back to Amst3 Index"/>
</form>
</div>

<div id="footer">
	<p class="copyright">&copy; 2014 Casey Bladow</p>
</div>

</div>
</body>
</html>

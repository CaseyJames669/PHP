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
$msg = "";

 if ($_REQUEST['submitProblem']) 
     {
    	
	 $choice = $_REQUEST['operator'];		  
	
	  if ($choice == "1")
	    {
		 $var1 = $_REQUEST['var1'];
		 $var2 = $_REQUEST['var2'];
	
		 $result = $_REQUEST['var1'] +  $_REQUEST['var2'];
		 $msg = "<b>$var1</b> + <b>$var2</b> = <b>$result</b>.";

		 }
		elseif ($choice == "2")
	    {
    	$var1 = $_REQUEST['var1'];
		 $var2 = $_REQUEST['var2'];
	
		 $result = $_REQUEST['var1'] -  $_REQUEST['var2'];
		 $msg = "<b>$var1</b> - <b>$var2</b> = <b>$result</b>.";

		 }
		 elseif ($choice == "3")
	    {
		$var1 = $_REQUEST['var1'];
		 $var2 = $_REQUEST['var2'];
	
		 $result = $_REQUEST['var1'] *  $_REQUEST['var2'];
		 $msg = "<b>$var1</b> * <b>$var2</b> = <b>$result</b>.";
		 }
		 elseif ($choice == "4" && $var2 != 0)
	    {
		 $var1 = $_REQUEST['var1'];
		 $var2 = $_REQUEST['var2'];
	     $result = $_REQUEST['var1'] /  $_REQUEST['var2'];
		 $msg = "<b>$var1</b> / <b>$var2</b> = <b>$result</b>.";
		 		  
		 } 
		 elseif ($choice == "5")
	    {
		 $var1 = $_REQUEST['var1'];
		 $var2 = $_REQUEST['var2'];
	     $result = $_REQUEST['var1'] %  $_REQUEST['var2'];
		 $msg = "<b>$var1</b> % <b>$var2</b> = <b>$result</b>.";
		 } 
		 else
		 {
			 $msg = "****CANNOT divide by zero****";
		 }
  }

?>

<?php echo $msg ?><br/>

<form method="POST" action="calc2.php">

Simple Calculator using Radio Buttons <br/>

Variable 1 <input type="text" name="var1" value="" />
Variable 2 <input type="text" name="var2" value="" />
<br/>
<select name="operator">
	<option value="1">Addition</option>
	<option value="2">Subtraction</option>
	<option value="3">Muliplication</option>
    <option value="4">Division</option>
    <option value="5">Modulus</option>
</select>

<input type="submit" name="submitProblem" value="Submit Problem"/>

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

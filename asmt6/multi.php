<!DOCTYPE html>
<html>

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
    <li><a href="mailto:bladowca@mnstate.edu">Email</a></li>
    </ul>
    <br/>
  </p>
</div>

<div id="main">

<h2>Multiplication Fun</h2>

<?php
	extract($_GET);
    if ($button == NULL || $button == "Quit")
       displayform();
    else
    {
		if ($button == "Begin")
		{
			$answerSheet = NULL;
			$count = 0;
			$numRight = 0;
    	}
		elseif ($button == "Check Answer")
		{
			$count++;
			$answer = $randNum1 * $randNum2;
			$userAnswer = ($_GET["userAnswer"]);
			if ($userAnswer == $answer)
			{
				$numRight ++;
				$answerSheet = $answerSheet . $randNum1 . " X " . $randNum2 . " = " .
				 $userAnswer . " is correct" . "\n";
			}
			else
			{
				$answerSheet = $answerSheet . $randNum1 . " X " . $randNum2 . " = " .
				 $userAnswer . " is incorrect (correct answer: ". $answer . ")" . "\n";
			}
		}
		
		$randNum1 = randNumber();
		$randNum2 = randNumber();
	
	echo <<< HERE
	<form>
         <h1>$randNum1 X $randNum2 = <input name="userAnswer" type="text" size="20" autocomplete="off"></h1>
		 <input type="submit" name="button" value="Check Answer" > 
		 <input type="submit" name="button" value="Quit">
		 <h4>$name has $numRight out of $count correct</h4>
		 <h4>Previous Answers</h4>
            <textarea rows="20" cols="50">$answerSheet</textarea>
            <br/>
            <input type="hidden" name="count" value="$count">
			<input type="hidden" name="numRight" value="$numRight">
            <input type="hidden" name="name" value="$name">
			<input type="hidden" name="answerSheet" value="$answerSheet">
			<input type="hidden" name="randNum1" value="$randNum1">
			<input type="hidden" name="randNum2" value="$randNum2">
         </form>
HERE;
	}

function displayform()
{
   echo <<< HERE
      <form>
         <h3>Enter Your Name: <input name="name" type="text" >
		 <input name="button" type="submit" value="Begin" ></h3>
      </form>
HERE;
}

function randNumber()
{
	$randomNumber = rand(0,10);
	return $randomNumber;
}


?>

<form action="index.html">
<input type="submit" name="$button" value="Back"/>
</form>

<form action="../index.html">
<input type="submit" name="$button" value="Home"/>
</form>

<form action="viewphp.php">
<input type="submit" name="$button" value="View PHP Source"/>
</form>

</div>

<div id="footer">
	<p class="copyright">&copy; 2014 Casey Bladow</p>
</div>

</div>
</body>
</html>

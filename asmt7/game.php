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
    <li><a href="http://puff.mnstate.edu/~bladowca/private/asmt5/index.php">Assignment 5</a><br/></li>
    <li><a href="http://puff.mnstate.edu/~bladowca/private/asmt6/index.html">Assignment 6</a><br/></li>
    <li><a href="http://puff.mnstate.edu/~bladowca/private/asmt7/index.html">Assignment 7</a><br/></li>
    <li><a href="mailto:bladowca@mnstate.edu">Email</a></li>
    </ul>
    <br/>
  </p>
</div>

<div id="main">
<?php
$suits = array (
    "Spades", "Hearts", "Clubs", "Diamonds"
);

$faces = array (
    "Two" => 2, "Three" => 3, "Four" => 4, "Five" => 5, "Six" => 6, "Seven" => 7, "Eight" => 8,
    "Nine" =>9, "Ten" => 10, "Jack" => 10, "Queen" => 10, "King" => 10, "Ace" => 11
);
$deck = array();

foreach ($suits as $suit) {
    foreach ($faces as $face) {
        $deck[] = array ("face"=>$face, "suit"=>$suit);
    }
}

shuffle($deck);
$card = array_shift($deck);
echo $card['face'] . ' of ' . $card['suit'];

shuffle($deck);
$card = array_shift($deck);
echo $card['face'] . ' of ' . $card['suit'];



function evaluateHand($hand) {
    global $faces;
    $value = 0;
    foreach ($hand as $card) {
        if ($value > 11 && $card['face'] == 'Ace') {
            $value = $value + 1;  // An ace can be 11 or 1
        } else {
            $value = intval($value) + intval($faces[$card['face']]);
        }
    }
    return $value;
}
?>
</div>

<div id="footer">
	<p class="copyright">&copy; 2014 Casey Bladow</p>
</div>

</div>
</body>
</html>

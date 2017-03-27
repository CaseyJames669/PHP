<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//EN'>
<html>
<head>
<title>Black Jack</title>
<link rel="stylesheet" type="text/css" href="../main.css" />
</head>

<BODY text='#FFFFFF' link='#FFFFFF' vlink='#FFFFFF' alink='#FFFFFF' bgcolor='#0099FF' topmargin='0' leftmargin='0' rightmargin='0' bottommargin='0' marginheight='0' marginwidth='0'>
<table width='100%' height='100%' cellspacing='0' cellpadding='0' border='0'><tr><td valign='top' align='center'>
<br><table width='70%' background='gfx/black.gif' cellspacing='2' cellpadding='0' border='0'><tr><td valign='top'><TABLE width='100%' cellspacing='0' cellpadding='5' border='0'><TR><TD align='center' bgcolor='#000066'>

[ <A href='index.php'>Black Jack</a>&nbsp;&nbsp;|&nbsp;&nbsp;<A href='index.php?useraction=newgame'>New Game</a>&nbsp;&nbsp;|&nbsp;<A href='rules.php'>Rules</a>&nbsp;&nbsp;|&nbsp;&nbsp;<A href='index.html'>Exit</a>]
</td></tr></table></td></tr></table><br>
<?php
extract($_GET);
session_start();
$usedcards = array();
$cards = array(
"cards/h2.gif" , "cards/h3.gif" , "cards/h4.gif" , "cards/h5.gif" , "cards/h6.gif" , "cards/h7.gif" , "cards/h8.gif" , "cards/h9.gif" , "cards/h10.gif" , "cards/h11.gif" , "cards/h12.gif" , "cards/h13.gif" , "cards/h14.gif" , 
"cards/s2.gif" , "cards/s3.gif" , "cards/s4.gif" , "cards/s5.gif" , "cards/s6.gif" , "cards/s7.gif" , "cards/s8.gif" , "cards/s9.gif" , "cards/s10.gif" , "cards/s11.gif" , "cards/s12.gif" , "cards/s13.gif" , "cards/s14.gif" , 
"cards/d2.gif" , "cards/d3.gif" , "cards/d4.gif" , "cards/d5.gif" , "cards/d6.gif" , "cards/d7.gif" , "cards/d8.gif" , "cards/d9.gif" , "cards/d10.gif" , "cards/d11.gif" , "cards/d12.gif" , "cards/d13.gif" , "cards/d14.gif" , 
"cards/c2.gif" , "cards/c3.gif" , "cards/c4.gif" , "cards/c5.gif" , "cards/c6.gif" , "cards/c7.gif" , "cards/c8.gif" , "cards/c9.gif" , "cards/c10.gif" , "cards/c11.gif" , "cards/c12.gif" , "cards/c13.gif" , "cards/c14.gif");
$values = array(
"2" , "3" , "4" , "5" , "6" , "7" , "8" , "9" , "10" , "10" , "10" , "10" , "11" , 
"2" , "3" , "4" , "5" , "6" , "7" , "8" , "9" , "10" , "10" , "10" , "10" , "11" , 
"2" , "3" , "4" , "5" , "6" , "7" , "8" , "9" , "10" , "10" , "10" , "10" , "11" , 
"2" , "3" , "4" , "5" , "6" , "7" , "8" , "9" , "10" , "10" , "10" , "10" , "11");
$aces = array(12,25,38,51);

if (!session_is_registered("score")) { $useraction = "newgame"; }

if ($useraction == "newgame") {
	$score = 10;
	session_unregister("score");
	session_register("score");
	$useraction = "";
}

if (!$useraction) {
	// DEALERS CARDS
	$score = $score - 1;
	session_unregister("score");
	session_register("score");
	$dealercard = array();
	for ($i = 0; $i < 2; $i++) {
		$num = rand(1000,9999);
		mt_srand ((double) microtime() * 9999999);
		$card = mt_rand (0,51);
		do {
			mt_srand ((double) microtime() * 9999999);
			$card = mt_rand (0,51);
		} while (in_array($card,$usedcards));
		array_push($usedcards,$card);
		$dealercard[$i] = $card;
	}
	$dealertotal = getTotal($dealercard);
	session_register("dealercard");
	// USERS CARDS
	session_unregister("usercard");
	$usercard = array();
	$total = "";
	for ($i = 0; $i < 2; $i++) {
		$num = rand(1000,9999);
		mt_srand ((double) microtime() * 9999999);
		$card = mt_rand (0,51);
		do {
			mt_srand ((double) microtime() * 9999999);
			$card = mt_rand (0,51);
		} while (in_array($card,$usedcards));
		array_push($usedcards,$card);
		$usercard[$i] = $card;
	}
	$total = getTotal($usercard);
	session_register("usercard");

	print showCards($dealercard,"dealershand","");
	print showCards($usercard,"yourhand","Total : $total");
	print showChoices();
	print showScore();

}

if ($useraction == "hit") {
	for ($i = 0; $i < 1; $i++) {
		$num = rand(1000,9999);
		mt_srand ((double) microtime() * 9999999);
		$card = mt_rand (0,51);
		do {
			mt_srand ((double) microtime() * 9999999);
			$card = mt_rand (0,51);
		} while (in_array($card,$usedcards));
		array_push($usedcards,$card);
		array_push($usercard,$card);
	}
	$total = getTotal($usercard);
	if ($total > 21) { $useraction = "busted"; }
	session_register("usercard");
	if ($total >= 22) { $busted = "- Busted !"; }
	print showCards($dealercard,"dealershand","");
	print showCards($usercard,"yourhand","Total : $total $busted");
	print showChoices();
	print showScore();

}

if ($useraction == "stand") {
	// DEALERS CARDS
	$total = getTotal($usercard);
	$dealertotal = getTotal($dealercard);
	if ($dealertotal < 17 && $total <= 21) {
		do {
			$num = rand(1000,9999);
			mt_srand ((double) microtime() * 9999999);
			$card = mt_rand (0,51);
			do {
				mt_srand ((double) microtime() * 9999999);
				$card = mt_rand (0,51);
			} while (in_array($card,$usedcards));
			array_push($usedcards,$card);
			array_push($dealercard,$card);
			$dealertotal = getTotal($dealercard);
		} while ($dealertotal < 17);
	}
	// WHO WON ?
	if ($total < 22 && $dealertotal < 22) {
		if ($dealertotal == $total) {
			$wld = "Draw";
			$score = $score + 1;
			session_unregister("score");
			session_register("score");
		}
		if ($dealertotal > $total) {
			$wld = "Dealer Wins";
		}
		if ($dealertotal < $total) {
			$wld = "You Win";
			$score = $score + 2;
			session_unregister("score");
			session_register("score");
		}
	}
	if ($total >= 22 && $dealertotal < 22) {
		$wld = "Dealer Wins";
	}
	if ($total < 22 && $dealertotal >= 22) {
		$wld = "You Win";
		$score = $score + 2;
		session_unregister("score");
		session_register("score");
	}
	if ($total >= 22 && $dealertotal >= 22) {
		$wld = "Draw";
		$score = $score + 1;
		session_unregister("score");
		session_register("score");
	}
	if ($total >= 22) { $busted = "- Busted !"; }
	print showCards($dealercard,"dealershand","Dealers Total : $dealertotal");
	print showCards($usercard,"yourhand","Total : $total $busted <br>$wld");
	print showChoices();
	print showScore();
}

function getTotal($cards) {
	global $values;
	global $aces;
	$total = 0;
	for($i=0; $i < sizeof($cards); $i++) {
		$card = $cards[$i];
		$total = $total + $values[$card];
	}
	for($i=0; $i < sizeof($aces); $i++) {
		if (in_array($aces[$i],$cards)) {
			if ($total > 21) {
				$total = $total - 10;
			}
		}
	}
	return $total;
}

function showChoices() {
	global $useraction;
	if (!$useraction || $useraction == "hit") {
		return "<table width='70%' background='gfx/black.gif' cellspacing='2' cellpadding='0' border='0'><tr><td valign='top'><TABLE width='100%' cellspacing='0' cellpadding='5' border='0'><TR><TD align='center' bgcolor='#000099'>
<table cellspacing='2' cellpadding='2' border='0'><tr>
<FORM method='post' action='index.php'><INPUT type='Hidden' name='useraction' value='hit'><td><INPUT type='image' src='gfx/hit.gif' alt='Hit' border=0></td></FORM>
<FORM method='post' action='index.php'><INPUT type='Hidden' name='useraction' value='stand'><td><INPUT type='image' src='gfx/stand.gif' alt='Stand' border=0></td></FORM>
</tr></table>
		</td></tr></table></td></tr></table><br>";
		
	} elseif ($useraction == "stand") {
		return "<table width='70%' background='gfx/black.gif' cellspacing='2' cellpadding='0' border='0'><tr><td valign='top'><TABLE width='100%' cellspacing='0' cellpadding='5' border='0'><TR><TD align='center' bgcolor='#000099'>
<table cellspacing='2' cellpadding='2' border='0'><tr>
<FORM method='post' action='index.php'><td><INPUT type='image' src='gfx/deal.gif' alt='Deal Again' border=0></td></FORM>
</tr></table>
</td></tr></table></td></tr></table><br>";
	} elseif ($useraction == "busted") {
		return "<table width='70%' background='gfx/black.gif' cellspacing='2' cellpadding='0' border='0'><tr><td valign='top'><TABLE width='100%' cellspacing='0' cellpadding='5' border='0'><TR><TD align='center' bgcolor='#000099'>
<table cellspacing='2' cellpadding='2' border='0'><tr>
<FORM method='post' action='index.php'><INPUT type='Hidden' name='useraction' value='stand'><td><INPUT type='image' src='gfx/continue.gif' alt='Continue' border=0></td></FORM>
</tr></table>
</td></tr></table></td></tr></table><br>";
	}
}

function showCards($show,$title,$footer) {
	global $cards;
	global $useraction;
	$showcards .= "<table width='70%' background='gfx/black.gif' cellspacing='2' cellpadding='0' border='0'>
<tr><td valign='top'><TABLE width='100%' cellspacing='0' cellpadding='5' border='0'><TR><TD align='center' bgcolor='#000066'><img src=\"gfx/$title.gif\" alt='' border='0' align='top'></td></tr></table></td></tr>
<tr><td valign='top'><TABLE width='100%' cellspacing='0' cellpadding='5' border='0'><TR><TD align='center' bgcolor='#0066ff'>";
	for($i=0; $i < sizeof($show); $i++) {
		$card = $show[$i];
		if ($useraction != "stand" && $title == "dealershand" && $i == 0) {
			$showcards .= "<img src='cards/back.gif' width='71' height='96' alt='' border='0'>&nbsp;";
		} else {
			$showcards .= "<img src=" . $cards[$card] . " width='71' height='96' alt='' border='0'>&nbsp;";
		}
	}
	$showcards .= "<br>$footer</td></tr></table></td></tr></table><br>";
	return $showcards;
}

function makeBox($title,$main) {
	return  "<table width='70%' background='gfx/black.gif' cellspacing='2' cellpadding='0' border='0'>
<tr><td valign='top'><TABLE width='100%' cellspacing='0' cellpadding='5' border='0'><TR><TD align='center' bgcolor='#000066'><img src=\"gfx/$title.gif\" alt='' border='0' align='top'></td></tr></table></td></tr>
<tr><td valign='top'><TABLE width='100%' cellspacing='0' cellpadding='5' border='0'><TR><TD align='center' bgcolor='#e0e0f0'>$main<br>$footer</td></tr></table></td></tr></table><br>";
}

function showScore() {
	global $score;
	return "<table width='70%' background='gfx/black.gif' cellspacing='2' cellpadding='0' border='0'><tr><td valign='top'>
<TABLE width='100%' cellspacing='0' cellpadding='5' border='0'><TR><TD align='center' bgcolor='#000099'>
Score : $score
</td></tr></table></td></tr></table>";
}

?>
<form action="viewphp.php">
<input type="submit" name="$button" value="View PHP Source"/>
</form>
</td></tr></table>
</FORM>
</body>
</html>

<?php

function makeBox($title,$main) {
	return  "<table width='70%' background='gfx/black.gif' cellspacing='2' cellpadding='0' border='0'>
<tr><td valign='top'><TABLE width='100%' cellspacing='0' cellpadding='5' border='0'><TR><TD align='center' bgcolor='#000066'><img src=\"gfx/$title.gif\" alt='' border='0' align='top'></td></tr></table></td></tr>
<tr><td valign='top'><TABLE width='100%' cellspacing='0' cellpadding='5' border='0'><TR><TD align='center' bgcolor='#0066ff'>$main<br>$footer</td></tr></table></td></tr></table><br>";
}

?>
<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//EN'>
<html>
<head>
<title>Black Jack</title>
<link rel="stylesheet" type="text/css" href="../main.css" />
</head>
<BODY text='#FFFFFF' link='#FFFFFF' vlink='#FFFFFF' alink='#FFFFFF' bgcolor='#0099FF' topmargin='0' leftmargin='0' rightmargin='0' bottommargin='0' marginheight='0' marginwidth='0'>
<table width='100%' height='100%' cellspacing='0' cellpadding='0' border='0'><tr><td valign='top' align='center'>
<br>
<table width='70%' background='black.gif' cellspacing='2' cellpadding='0' border='0'><tr><td valign='top'><TABLE width='100%' cellspacing='0' cellpadding='5' border='0'><TR>
  <TD align='center' bgcolor='#000066'>
[ <A href='index.php'>Black Jack</a>&nbsp;&nbsp;|&nbsp;&nbsp;<A href='index.php?useraction=newgame'>New Game</a>&nbsp;&nbsp;|&nbsp;<A href='rules.php'>Rules</a>&nbsp;&nbsp;|&nbsp;&nbsp;<A href='index.html'>Exit</a>]
</td></tr></table></td></tr></table>
<br>

<?php
print makeBox("rules","<font size='4' color='#000000'>The goal of Blackjack is to beat the dealer's hand without going over 21.<br><br>Face cards are worth 10. Aces are worth 1 or 11, whichever makes a better hand.<br><br>Each player starts with two cards, one of the dealer's cards is hidden until the end.<br><br>To 'Hit' is to ask for another card. To 'Stand' is to hold your total and end your turn.<br><br>If you go over 21 you bust, and the dealer wins regardless of the dealer's hand.<br><br>If you are dealt 21 from the start (Ace &amp; 10), you got a blackjack.<br><br>Dealer will hit until his/her cards total 17 or higher.<br></font>");
?>
<form action="viewphp2.php">
<input type="submit" name="$button" value="View PHP Source"/>
</form>
</td></tr></table>
<br>
</body>
</html>
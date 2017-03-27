<?php
extract($_GET);
echo "<form>";
if ($button==NULL || $button=="reshuffle")
{
   echo "<img src=\"back.jpg\">";
   if ($button == NULL)
      $cards = buildDeck();
   shuffleCards($cards);
   $cardNum = 0;
}
elseif ($button=="next" && $cardNum < 52)
{
   if ($cardNum != 51)
      echo "<img src=\"back.jpg\">";
   echo "<img src=\"$cards[$cardNum].jpg\">";
   $cardNum++;
}
print <<< HERE
   <br/>
   <input type="submit" name="button" value="next">
   <input type="submit" name="button" value="reshuffle">
HERE;
passData($cards,$cardNum);
echo "</form>";


// ********************** FUNCTIONS ***************************

function passData($cards,$cardNum)
{
   echo "<input type=\"hidden\" name=\"cardNum\" value=\"$cardNum\">";
   for ($i=0; $i<52; $i++)
      echo "<input type=\"hidden\" name=\"cards[$i]\" value=\"$cards[$i]\">";
}

function buildDeck()
{
   $num=0;
   for ($i=1; $i<=4; $i++)
   {
      $suitchar = getsuit($i);
      for ($j=1; $j<=13; $j++)
         $cards[$num++] = "$j$suitchar";
   }
   return $cards;
}


function shuffleCards(&$cards)
{
   for ($i=1; $i<1000; $i++)
   {
      $num1 = rand(0,51);
      $num2 = rand(0,51);
      $temp = $cards[$num1];
      $cards[$num1] = $cards[$num2];
      $cards[$num2] = $temp;
   }
}

function getsuit($num)
{
   switch ($num)
   {
      case 1 : return "H";
      case 2 : return "D";
      case 3 : return "C";
      case 4 : return "S";
   }
}

function displayCards($cards)
{
   for ($i=0; $i<52; $i++)
   {
      echo "<img src=\"$cards[$i].jpg\" width=\"100\">";
      if ($i+1 % 13 == 0)
         echo "<br/>";
   }
}
      

?>



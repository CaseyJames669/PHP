<?php
   extract($_GET);
   print <<< HERE
   <form>
      <h2>Make a selection</h2>
      <input type="submit" name="button" value="show random card">
      <input type="submit" name="button" value="show all cards">
      <input type="submit" name="button" value="show random die">
      <input type="submit" name="button" value="show all dice">
      <input type="submit" name="button" value="clear">
   </form>
HERE;

   // note I don't have to check $button for NULL or "clear" in this example
   if ($button=="show all cards")
   {
      for ($i=1; $i<=4; $i++)
      {
         $suitchar = getsuit($i);
         for ($j=1; $j<=13; $j++)
            echo "<img src=\"$j$suitchar.jpg\" width=\"100\">";
         echo "<br />";
      }
      echo "<img src=\"back.jpg\" width=\"100\">";
   }
   elseif ($button=="show random card")
   {
      $suit = rand(1,4);
      $value = rand(1,13);
      $suitchar = getsuit($suit);
      echo "<img src=\"$value$suitchar.jpg\">";
   }
   elseif ($button=="show random die")
   {
      $die = rand(1,6);
      echo "<img src=\"die$die.jpg\">";
   }
   elseif ($button=="show all dice")
   {
      for ($i=1; $i<=6; $i++)
         echo "<img src=\"die$i.jpg\">";
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
?>

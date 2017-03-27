<?php
   extract($_GET);
   echo "<form>";
   if ($button==NULL || $button=="new numbers")
   {
      for ($i=0; $i<5; $i++)
         $numbers[$i] = rand(1,100);
   }
   elseif ($button=="add one")
      addone($numbers);
   elseif ($button=="double")
      double($numbers);
   elseif ($button=="sort")
      sort($numbers);
   displayNumbers($numbers);
   echo <<< HERE
   <input type="submit" name="button" value="keep">
   <input type="submit" name="button" value="add one">
   <input type="submit" name="button" value="double">
   <input type="submit" name="button" value="sort">
   <input type="submit" name="button" value="new numbers">
HERE;
   passData($numbers);
   echo "</form>";

function passData($numbers)
{
   for ($i=0; $i<5; $i++)
      echo <<< HERE
         <input type="hidden" name="numbers[$i]" value="$numbers[$i]">
HERE;
}

function displayNumbers($numbers)
{
   echo "<h1>";
   for ($i=0; $i<5; $i++)
      echo $numbers[$i]. " ";
   echo "</h1>";
}

function addone(&$numbers)
{
   for ($i=0; $i<5; $i++)
      $numbers[$i] += 1;
}

function double(&$numbers)
{
   for ($i=0; $i<5; $i++)
      $numbers[$i] *= 2;
}

?>

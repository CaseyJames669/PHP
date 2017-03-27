<h1>Pick a number</h1>
<?php
   extract($_GET);
   if ($button == NULL || $button == "clear sum")
      $sum = 0;
   else
      $sum += $number;
   echo <<< HERE
   <form>
      <select name="number">
HERE;
          for ($i=1; $i<=1000; $i++)
             echo "<option value=\"$i\">$i</option>";
   echo <<< HERE
      </select>
      <input type="submit" name="button" value="select">
      <input type="submit" name="button" value="clear sum">
      <input type="hidden" name="sum" value="$sum">
   </form>
HERE;

   if ($button=="select")
   {
      echo "<h2>you selected $number</h2>";
      echo "<h2>the sum is $sum</h2>";
   }
?>

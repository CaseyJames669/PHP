<?php
   extract($_GET);
   $months = array("January","February","March","April","May","June","July",
                   "August","September","October","November","December");
   echo "<form>";
   if ($button == NULL || $button=="return") 
   {
      displayRadioButtons($months);
      echo "<input type=\"submit\" name=\"button\" value=\"submit\">";
   }
   else
   {
      echo "<h1>you selected month $month which is " . $months[$month-1] 
           . "</h1>";
      echo "<input type=\"submit\" name=\"button\" value=\"return\">";
   }
   echo "</form>";

function displayRadioButtons($months)
{
   for ($i=0; $i<12; $i++)
      echo "<input type=\"radio\" name=\"month\" value=\"" . ($i+1) . "\">"
          . $months[$i] . "</input><br>";
}

?>

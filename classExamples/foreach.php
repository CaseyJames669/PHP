<?php
   $months = array("January","February","March","April","May","June","July",
                   "August","September","October","November","December");
   
   echo "<h3>the current element is " . current($months) . "</h3>";
   
   echo "<h3>";
   for ($i=0; $i<count($months); $i++)
      echo "$months[$i] ";
   echo "</h3>";
   
   echo "<h3>";
   foreach ($months as $month)
      echo "$month ";
   echo "</h3>";
   
// array processing functions
// reset($array) - set current to the beginning of the array
// current($array) - returns the current element in the array
// next($array) - moves current to the next element
// key($array) - gives the index of the current element
   reset($months);
   echo "<h3>the current element is " . current($months) . "</h3>";
   next($months);
   echo "<h3>the current element is " . current($months) . "</h3>";
   echo "<h3>the current element is " . current($months) . "</h3>";
   
   reset($months);
   echo "<h3>";
   for ($i=0; $i<count($months); $i++)
   {
      echo current($months) . " ";
      next($months);
   }
   echo "</h3>";
   
   reset($months);
   echo "<h3>";
   foreach ($months as $month)
   {
      echo current($months) . " is month number " . (key($months)+1) . "<br/>";
      next($months);
   }
   echo "</h3>";
   
   

?>

<?php
   $num = rand(1,10);
   echo "<h1>The random number generated is $num</h1>";
   
   if ($num == 1)
      echo "<h2>one</h2>";
   else if ($num == 2)
      echo "<h2>two</h2>";
   else if ($num == 3)
      echo "<h2>three</h2>";
   else if ($num == 4)
      echo "<h2>four</h2>";
   else if ($num == 5)
      echo "<h2>five</h2>";
   else if ($num == 6)
      echo "<h2>six</h2>";
   else if ($num == 7)
      echo "<h2>seven</h2>";
   else if ($num == 8)
      echo "<h2>eight</h2>";
   else if ($num == 9)
      echo "<h2>nine</h2>";
   else if ($num == 10)
      echo "<h2>ten</h2>";
   else
      echo "<h2>not in range</h2>";
      
   switch ($num)
   {
      case  1 : echo "<h2>one</h2>"; break;
      case  2 : echo "<h2>two</h2>"; break;
      case  3 : echo "<h2>three</h2>"; break;
      case  4 : echo "<h2>four</h2>"; break;
      case  5 : echo "<h2>five</h2>"; break;
      case  6 : echo "<h2>six</h2>"; break;
      case  7 : echo "<h2>seven</h2>"; break;
      case  8 : echo "<h2>eight</h2>"; break;
      case  9 : echo "<h2>nine</h2>"; break;
      case 10 : echo "<h2>ten</h2>"; break;
      default : echo "<h2>not in range</h2>";
   }
   
   switch ($num)
   {
      case  1 :
      case  2 :
      case  3 : echo "<h2>small</h2>"; break;
      case  4 :
      case  5 :
      case  6 :
      case  7 : echo "<h2>medium</h2>"; break;
      case  8 :
      case  9 :
      case 10 : echo "<h2>big</h2>"; break;
      default : echo "<h2>not in range</h2>";
   }
?>
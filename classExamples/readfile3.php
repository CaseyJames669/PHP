<?php
   $file = @fopen("numbers.txt", "r") or exit("<h1>Unable to open file!</h1>");
   $sum = 0;
   $num = fgets($file);
   echo "<h1>";
   while (!feof($file))
   {
      $num = rtrim($num);
      echo "$num";
      $sum += $num;
      $num = fgets($file);
      if (!feof($file))
         echo "+";
   }
   echo "=$sum</h1>";
?>
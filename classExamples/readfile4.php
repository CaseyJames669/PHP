<?php
   $file = fopen("numbers.txt","w");
   $count=rand(1,10);
   for ($i = 0; $i < $count; $i++)
   {
      $num = rand(1,100);
      fputs($file,$num."\n");
   }
   fclose($file);
   $file = fopen("numbers.txt", "r");
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
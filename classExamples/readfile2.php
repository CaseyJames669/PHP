<?php
   $file = @fopen("data.txt", "r") or exit("<h1>Unable to open file!</h1>");
   $name = fgets($file);
   $email = fgets($file);
   fclose($file);
   echo "<h1>$name</h1>";
   echo "<h1>$email</h1>";
   echo "<h1>" . strlen($name) . "</h1>";
   $name = rtrim($name);
   echo "<h1>" . strlen($name) . "</h1>";
   $namearray = explode(" ",$name);
   foreach ($namearray as $n)
      echo "<h1>$n</h1>";
   $name2 = $namearray[1] . ", " . $namearray[0];
   echo "<h1>$name2</h1>";
?>
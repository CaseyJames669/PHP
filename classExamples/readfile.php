<?php
   $file = @fopen("data.txt", "r") or exit("<h1>Unable to open file!</h1>");
   $name = fgets($file);
   $email = fgets($file);
   fclose($file);
   echo "<h1>$name</h1>";
   echo "<h1>$email</h1>";
   $file2 = fopen("data2.txt","w");
   fputs($file2,$name);
   fputs($file2,$email);
   fclose($file2);
?>
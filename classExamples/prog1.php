<html>
<body>

<h1>Hello, my name is Dan Brekke</h1>

<?php
   echo "<h2>This is another line</h2>\n";
   echo "<h3>something else</h3>";
   echo "<p>Today is\n<br/>";
   echo "Tuesday</p>";
?>

<h1>Yet another line</h1>

<?php
   echo "<h2>whatever</h2>";
   $x = 234;
   echo "<h3>the value of the variable is \$x $x</h3>";
   $y = 17;
   echo "$x + $y = " , $x+$y, "<br/>";
   echo "$x - $y = " , $x-$y, "<br/>";
   echo "$x * $y = " , $x*$y, "<br/>";
   echo "$x / $y = " , $x/$y, "<br/>";
   echo "$x % $y = " , $x%$y, "<br/>";
?>

</body>
</html>

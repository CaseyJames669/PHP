<html>
<body>

<H1>This is if1.php</h1>

<h2>Here's the stuff that's coming over</h2>

<?php
   extract($_POST);
   /*
   $color = $_REQUEST["color"];
   $pepperoni = $_REQUEST["pepperoni"];
   $sausage = $_REQUEST["sausage"];
   $bacon = $_REQUEST["bacon"];
   $onions = $_REQUEST["onions"];
   $blackolives = $_REQUEST["blackolives"];
   $sport = $_REQUEST["sport"];
   */
   /*
   echo "<h2>\$color = $color</h2>";
   echo "<h2>\$pepperoni = $pepperoni</h2>";
   echo "<h2>\$sausage = $sausage</h2>";
   echo "<h2>\$bacon = $bacon</h2>";
   echo "<h2>\$black olives = $blackolives</h2>";
   echo "<h2>\$onions = $onions</h2>";
   echo "<h2>\$sport = $sport</h2>";
   */
   if ($color == "red")
      echo "<h2>you select red</h2>";
   elseif ($color == "green")
      echo "<h2>you select green</h2>";
   elseif ($color == "blue")
      echo "<h2>you select blue</h2>";
   if ($pepperoni=="on")
      echo "<h2>the pepperoni box was checked</h2>";
   if ($sausage=="on")
      echo "<h2>the sausage box was checked</h2>";
   if ($bacon=="on")
      echo "<h2>the bacon box was checked</h2>";
   if ($blackolives=="on")
      echo "<h2>the black olives box was checked</h2>";
   if ($onions=="on")
      echo "<h2>the onions box was checked</h2>";
   if (isset($pepperoni))
      echo "<h2>the pepperoni box was checked</h2>";
   if (isset($_REQUEST["pepperoni"]))
      echo "<h2>the pepperoni box was checked</h2>";
      
   if ($sport=="baseball" || $sport=="basketball" || $sport=="golf")
      echo "<h2>in $sport, the ball is round</h2>";
   elseif ($sport == "football")
      echo "<h2>in $sport, the ball is NOT round</h2>";
   elseif ($sport == "hockey")
      echo "<h2>in $sport, there is no ball, it's a puck</h2>";
   
?>

<form action="if1.html">
   <input type="submit" value="back to form">
</form>

</body>
</html>

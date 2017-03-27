<html>
<body>

<H1>This is form1.php</h1>

<h2>Here's the stuff that's coming over</h2>

<?php
   echo $_REQUEST["textbox"] . "<br/>";
   echo $_REQUEST["theButton"] , "<br/>";
   $textbox = $_REQUEST["textbox"];
   echo "the text box contained $textbox<br/>";
   $color = $_REQUEST["color"];
   echo "you like $color<br/>";
   echo "Pepperoni " . $_REQUEST["pepperoni"] . "<br/>";
   echo "Sausage " . $_REQUEST["sausage"] . "<br/>";
   echo "Bacon " . $_REQUEST["bacon"] . "<br/>";
   echo "Onions " . $_REQUEST["onions"] . "<br/>";
   echo "Black Olives " . $_REQUEST["black olives"] . "<br/>";
   $sport = $_REQUEST["sport"];
   echo "Your favorite sport is $sport<br/>";
   $stuff = $_REQUEST["stuff"];
   echo "the text area contained $stuff<br/>";
   
   
   if (isset($_REQUEST["onions"]))
      echo "<h3>you like onions</h3>";
?>

<form action="form1.html">
   <input type="submit" value="back to form">
</form>

</body>
</html>
